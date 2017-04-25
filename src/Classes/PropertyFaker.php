<?php

namespace FeedFaker\Classes;

use FeedFaker\Providers\FeatureProvider;
use FeedFaker\Helper\LotSize;
use FeedFaker\Models\Member;
use FeedFaker\Models\Property;
use DI\Container;

class PropertyFaker extends BaseFaker
{
    public function __construct(Container $container)
    {
        parent::__construct($container);
        $this->faker->addProvider(new FeatureProvider($this->faker));
    }

    public function generate(Member $member, Member $member2, array $overrides = [])
    {
        $property = new Property();

        // logic-driven selections-- add to this list if the field is only relevant in certain circumstances
        $logic_driven_selects = [];

        // prop type
        $property_type = $this->faker->propertyType();
        $property_subtype = $this->faker->propertySubType($property_type);
        $property->setPropertyType($property_type);
        $logic_driven_selects[] = 'PropertyType';
        $logic_driven_selects[] = 'MlsStatus';
        $logic_driven_selects[] = 'StandardStatus';
        $property->setPropertySubType($property_subtype);

        // optional items
        $lockbox_type = $this->faker->optional()->lockboxType();
        $waterfrontYN = $this->faker->YorN(2); // 80% no
        $property->setWaterfrontYN($waterfrontYN);
        $property->setLeaseConsideredYN($this->faker->YorN);

        // generate lotsize data
        $lotsize = new LotSize();

        // price items
        $price = $this->faker->getPrice();
        $prev_price = $this->faker->optional()->getPrice($price) ?: null;
        $price_change_timestamp = $prev_price ? $this->faker->dateTimeThisMonth()->format('Y-m-d') : null;

        // status-dependent items
        $buyer_agent = false;
        $purchase_contract_date = null;
        $pending_timestamp = null;
        $withdrawn_date = null;
        $cancellation_date = null;
        $close_date = null;
        $close_price = null;

        $mls_status = $this->faker->mlsStatus($property_type);
        $standard_status = $this->faker->standardStatus($mls_status);
        if ($standard_status == 'Active') {
            // none of the status-dependent stuff needs changed
        } else if ($standard_status == 'Pending' or $mls_status == 'UCB (Under Contract-Backups)' or $standard_status == 'Closed') {
            $purchase_contract_date = $this->faker->dateTimeThisMonth()->format('Y-m-d');
            $pending_timestamp = $this->faker->dateTimeThisMonth()->format('Y-m-d');
            $buyer_agent = true;
            if ($standard_status == 'Closed') {
                $close_date = $this->faker->dateTimeThisMonth()->format('Y-m-d');
                $close_price = $this->faker->getPrice($price);
            }
        } else if ($standard_status == 'Withdrawn') {
            $withdrawn_date = $this->faker->dateTimeThisMonth()->format('Y-m-d');
        } else if ($standard_status == 'Canceled') {
            $cancellation_date = $this->faker->dateTimeThisMonth()->format('Y-m-d');
        }

        // if it's rental let's make sure the price and status are right
        if ($property_type == 'RNT') {
            $price = $this->faker->numberBetween(350, 3000);
            $property->setRentControlYN($this->faker->YorN());
            $property->setTotalActualRent($price);
            $prev_price = null;
            $price_change_timestamp = null;
        } else if ($property_type == 'BUS') {
            $property->setHoursDaysofOperation($this->faker->optional()->numberBetween(2, 8));
            $property->setYearEstablished($this->faker->optional()->year);
            $property->setSeatingCapacity($this->faker->optional()->numberBetween(10, 100));
            $property->setNumberOfFullTimeEmployees($this->faker->optional()->numberBetween(1, 20));
            $property->setNumberOfPartTimeEmployees($this->faker->optional()->numberBetween(1, 20));
            $property->setBusinessName($this->faker->company);
            $property->setBusinessType($this->faker->optional()->getFeatureList('BusinessType', 1));
            // set as a logic_driven_select so it won't be set again below
            $logic_driven_selects[] = 'BusinessType';

            $property->setPropertySubType($property->getBusinessType());
            $property->setGrossIncome($this->faker->optional()->numberBetween(1000, 200000));
            $property->setOperatingExpense($this->faker->optional()->numberBetween(1000, 100000));
        } else if ($property_type == 'RIN') {
            $property->setNumberOfSeparateElectricMeters($this->faker->numberBetween(1, 6));
            $property->setNumberOfSeparateGasMeters($this->faker->numberBetween(1, 6));
            $property->setNumberOfSeparateWaterMeters($this->faker->numberBetween(1, 6));
        } else if ($property_type == 'COM') {
            // set commercial
        } else if ($property_type == 'LSE') {
            // set lease
            $price = $this->faker->numberBetween(350, 3000);
            $prev_price = null;
            $price_change_timestamp = null;
            $property->setLeaseAmount($price);
            $property->setLeaseAmountFrequency($this->faker->getFeatureList('LeaseAmountFrequency', 1));
            $property->setLeaseConsideredYN('Y');
            $property->setLeaseTerm($this->faker->getFeatureList('LeaseTerm', 1));
            $property->setNumberOfUnitsLeased($this->faker->optional()->numberBetween(1, 5));
            $logic_driven_selects[] = 'LeaseAmountFrequency';
            $logic_driven_selects[] = 'LeaseTerm';
        } else if ($property_type == 'LND') {
            $property->setCropsIncludedYN($this->faker->optional()->YorN());
            $property->setGrazingPermitsBlmYN($this->faker->optional()->YorN());
            $property->setGrazingPermitsForestServiceYN($this->faker->optional()->YorN());
            $property->setGrazingPermitsPrivateYN($this->faker->optional()->YorN());
            $property->setFarmCreditServiceInclYN($this->faker->optional()->YorN());
        }

        // only for residential homes
        if (!in_array($property_type, ['LND', 'BUS', 'COM'])) {
            // get the baths object
            $bathrooms = $this->faker->bathrooms();

            $property->setBathroomsFull($bathrooms['full']);
            $property->setBathroomsThreeQuarter($bathrooms['three-quarter']);
            $property->setBathroomsHalf($bathrooms['half']);
            $property->setBathroomsOneQuarter($bathrooms['one-quarter']);
            $property->setBathroomsPartial($bathrooms['partial']);
            $property->setBathroomsTotalInteger($bathrooms['total']);

            $property->setBedroomsTotal($this->faker->numberBetween(1, 6));
            $property->setLivingArea($this->faker->numberBetween(0, 20000));
            $property->setHabitableResidenceYN('Y');
        }

        $property->setListingKey($this->faker->tech_id);
        $property->setListingId($this->faker->tech_id);
        $property->setListAOR($member->getMemberAOR());
        $property->setOriginatingSystemName($member->getOriginatingSystemName());
        $property->setListingService($this->faker->word);
        $property->setListingAgreement($this->faker->listingAgreement);
        $property->setHomeWarrantyYN($this->faker->YorN);
        $property->setCopyrightNotice("Listing information is the property of the listing agent and MLS. Information is deemed reliable but is not guaranteed.");
        $property->setDisclaimer("Disclaimer for use of these listings in any work or exhibit.");
        $property->setStandardStatus($standard_status);
        $property->setMlsStatus($mls_status);
        $property->setListingContractDate($this->faker->dateTimeThisYear()->format('Y-m-d'));
        $property->setContractStatusChangeDate($this->faker->dateTimeThisYear()->format('Y-m-d'));
        $property->setExpirationDate($this->faker->dateTimeThisYear()->format('Y-m-d'));
        $property->setOnMarketDate($this->faker->dateTimeThisYear()->format('Y-m-d'));
        $property->setModificationTimestamp($this->faker->dateTimeThisYear()->format('Y-m-d'));
        $property->setDaysOnMarket($this->faker->numberBetween(0,240));
        $property->setOriginalListPrice($this->faker->getPrice($price));
        $property->setListPrice($price);
        $property->setPreviousListPrice($prev_price);
        $property->setPriceChangeTimestamp($price_change_timestamp);
        $property->setInternetAddressDisplayYN($this->faker->YorN);
        $property->setPhotosCount($this->faker->numberBetween(5,30));
        $property->setVirtualTourURLBranded($this->faker->url);
        $property->setVirtualTourURLUnbranded($this->faker->url);
        $property->setPublicRemarks($this->faker->description(8));
        $property->setPrivateRemarks($this->faker->private_description(5));
        $property->setPrivateOfficeRemarks($this->faker->private_description(3));
        $property->setShowingInstructions($this->faker->private_description(2));
        $property->setShowingContactName($this->faker->name);
        $property->setShowingContactPhone($this->faker->phoneNumber);
        $property->setExclusions($this->faker->words(10));
        $property->setStreetNumber($this->faker->numberBetween(10, 5000));
        $property->setStreetNumberNumeric($property->getStreetNumber());
        $property->setStreetName($this->faker->streetName);
        $property->setStreetSuffix($this->faker->streetSuffix);
        $property->setUnitNumber($this->faker->numberBetween(0, 150));
        $property->setCity($this->faker->city);
        $property->setStateOrProvince($this->faker->getFeatureList('StateOrProvince', 1));
        $logic_driven_selects[] = 'StateOrProvince';
        $property->setCountry($this->faker->getFeatureList('Country', 1));
        $logic_driven_selects[] = 'Country';
        $property->setPostalCode($this->faker->postcode);
        $property->setPostalCodePlus4($this->faker->numberBetween(1000, 9999));
        $property->setUnparsedAddress($property->getStreetNumber() . ' ' . $property->getStreetName() . ' ' . $property->getStreetSuffix() . ' ' . $property->getCity() . ' ' . $property->getStateOrProvince() . $property->getPostalCode());
        $property->setLatitude($this->faker->latitude);
        $property->setLongitude($this->faker->longitude);
        $property->setElevation($this->faker->optional()->numberBetween(0, 4000));
        $property->setElevationUnits('feet');
        $property->setLotSizeAcres($lotsize->getAcres());
        $property->setLotSizeSquareFeet($lotsize->getSquareFeet());
        $property->setLotSizeArea($lotsize->getArea());
        $property->setLotSizeDimensions($lotsize->getDimensions());
        $property->setLotSizeSource($lotsize->getSource());
        $property->setLotSizeUnits($lotsize->getUnits());
        $property->setViewYN($this->faker->YorN);
        $property->setLotFeatures($this->faker->getFeatureList('LotFeatures'));
        $property->setCommunityFeatures($this->faker->getFeatureList('CommunityFeatures'));
        $property->setPropertyAttachedYN($this->faker->YorN);
        $property->setGarageYN($this->faker->YorN);
        $property->setGarageSpaces($this->faker->numberBetween(0, 5));
        $property->setYearBuilt($this->faker->year);
        $property->setGreenBuildingVerificationType('EnergyStar');
        $property->setBuilderName($this->faker->company);
        $property->setBuilderModel($this->faker->optional()->domainWord);
        $property->setRoomsTotal($this->faker->numberBetween(0, 10));
        $property->setPurchaseContractDate($purchase_contract_date);
        $property->setPendingTimestamp($pending_timestamp);
        $property->setWithdrawnDate($withdrawn_date);
        $property->setCancelationDate($cancellation_date);
        $property->setCloseDate($close_date);
        $property->setClosePrice($close_price);
        $property->setRoomType('Bedroom');
        $property->setUnitTypeType('Studio');

        // occupant / owner
        $property->setOccupantName($this->faker->optional()->name);
        if ($property->getOccupantName()) {
            $property->setOccupantPhone($this->faker->optional()->phoneNumber);
        }

        $property->setOwnerName($this->faker->optional()->name);
        if ($property->getOwnerName()) {
            $property->setOwnerPhone($this->faker->optional()->phoneNumber);
        }

        // handle list agent / office
        $list_office = $member->getOffice();

        $property->setListAgentFirstName($member->getMemberFirstName());
        $property->setListAgentLastName($member->getMemberLastName());
        $property->setListAgentMiddleName($member->getMemberMiddleName());
        $property->setListAgentFullName($member->getMemberFullName());
        $property->setListAgentPreferredPhone($member->getMemberPreferredPhone());
        $property->setListAgentPreferredPhoneExt($member->getMemberPreferredPhoneExt());
        $property->setListAgentOfficePhone($member->getMemberOfficePhone());
        $property->setListAgentDirectPhone($member->getMemberDirectPhone());
        $property->setListAgentFax($member->getMemberFax());
        $property->setListAgentPager($member->getMemberPager());
        $property->setListAgentVoiceMail($member->getMemberVoiceMail());
        $property->setListAgentVoiceMailExt($member->getMemberVoiceMailExt());
        $property->setListAgentTollFreePhone($member->getMemberTollFreePhone());
        $property->setListAgentEmail($member->getMemberEmail());
        $property->setListAgentMlsId($member->getMemberMlsId());
        $property->setListAgentStateLicense($member->getMemberStateLicense());
        $property->setListAgentDesignation($member->getMemberDesignation());
        // office
        $property->setListOfficeMlsId($member->getOfficeMlsId());
        $property->setListOfficeName($member->getOfficeName());
        $property->setListOfficeEmail($list_office->getOfficeEmail());
        $property->setListOfficePhone($list_office->getOfficePhone());
        $property->setListOfficePhoneExt($list_office->getOfficePhoneExt());
        $property->setListOfficeFax($list_office->getOfficeFax());
        $property->setListOfficeKey($list_office->getOfficeKey());

        // if we're closed, pending or active under contract set buyer agent / agency
        if ($buyer_agent) {
            $property->setBuyerAgentAOR($member2->getMemberAOR());
            $property->setBuyerAgentCellPhone($member2->getMemberMobilePhone());
            $property->setBuyerAgentDirectPhone($member2->getMemberDirectPhone());
            $property->setBuyerAgentOfficePhone($member2->getMemberOfficePhone());
            $property->setBuyerAgentOfficePhoneExt($member2->getMemberOfficePhoneExt());
            $property->setBuyerAgentEmail($member2->getMemberEmail());
            $property->setBuyerAgentFirstName($member2->getMemberFirstName());
            $property->setBuyerAgentLastName($member2->getMemberLastName());
            $property->setBuyerAgentFullName($member2->getMemberFullName());
            $property->setBuyerAgentDesignation($member2->getMemberDesignation());
            $property->setBuyerAgentStateLicense($member2->getMemberStateLicense());
            $property->setBuyerAgentKey($member2->getMemberKey());
            $property->setBuyerAgentMlsId($member2->getMemberMlsId());
            // office
            $buyer_office = $member2->getOffice();
            $property->setBuyerOfficeName($member2->getOfficeName());
            $property->setBuyerOfficeKey($member2->getOfficeKey());
            $property->setBuyerOfficeMlsId($member2->getOfficeMlsId());
            $property->setBuyerOfficeEmail($buyer_office->getOfficeEmail());
            $property->setBuyerOfficeFax($buyer_office->getOfficeFax());
            $property->setBuyerOfficePhone($buyer_office->getOfficePhone());
            $property->setBuyerOfficePhoneExt($buyer_office->getOfficePhoneExt());
            $property->setBuyerOfficeAOR($buyer_office->getOfficeAOR());

            // TODO: not sure what agency data we can set except compensation and comp type?
        }

        // schools
        $property->setDistanceToSchools($this->faker->numberBetween(2, 15));
        $district = "District " . $this->faker->numberBetween(10, 90);
        $property->setElementarySchool($this->faker->name . ' School');
        $property->setElementarySchoolDistrict($district);
        $property->setMiddleOrJuniorSchool($this->faker->name . ' Middle School');
        $property->setMiddleOrJuniorSchoolDistrict($district);
        $property->setHighSchool($this->faker->name . ' High School');
        $property->setHighSchoolDistrict($district);
        $property->setDistanceFromSchoolBus($this->faker->numberBetween(0, 2));

        $association = $this->faker->YorN(3);

        if ($association == 'Y') {
            $property->setAssociationYN($association);
            $property->setAssociationFee($this->faker->numberBetween(0, 200));
            $property->setAssociationFeeFrequency('monthly');
            $property->setAssociationName($this->faker->company);
            $property->setAssociationPhone($this->faker->phoneNumber);
            $property->setAssociationAmenities($this->faker->getFeatureList('AssociationAmenities'));
            // set as a logic_driven_select so it won't be set again below
            $logic_driven_selects[] = 'AssociationAmenities';
            $property->setAssociationFeeIncludes($this->faker->getFeatureList('AssociationAmenities'));
            $logic_driven_selects[] = 'AssociationAmenities';
        }

        if ($lockbox_type) {
            $property->setLockBoxType($lockbox_type);
            $property->setLockBoxLocation($this->faker->getFeatureList('LockboxLocation', 1));
            // set as a logic_driven_select so it won't be set again below
            $logic_driven_selects[] = 'LockboxLocation';
            $property->setLockBoxSerialNumber($this->faker->bankAccountNumber);
        }

        if ($waterfrontYN == 'Y') {
            $property->setWaterBodyName($this->faker->firstName . ' Lake');
            $property->setWaterfrontFeatures($this->faker->getFeatureList('WaterfrontFeatures'));
            // set as a logic_driven_select so it won't be set again below
            $logic_driven_selects[] = 'WaterfrontFeatures';
        }

        if ($property_subtype == 'Mobile Home') {
            $property->setMobileDimUnits('feet');
            $property->setMobileLength($this->faker->numberBetween(15, 40));
            $property->setMobileWidth($this->faker->numberBetween(10, 20));
            $property->setMobileHomeRemainsYN($this->faker->YorN());
            $property->setMake('MobileKing');
            $property->setModel('Deluxe');
        }

        $view = $this->faker->YorN(5);

        if ($view == 'Y') {
            $property->setViewYN($view);
            $property->setView($this->faker->view);
        }

        // handle expenses
        $expenses = $this->expenses();

        foreach ($expenses as $expense => $weight) {
            $method = "set{$expense}";
            $property->$method($this->faker->optional($weight)->numberBetween(0, 100));
        }

        // handle distance
        $distances = $this->distances();

        foreach ($distances as $distance => $weight) {
            $method = "set{$distance}";
            $property->$method($this->faker->optional($weight)->numberBetween(0, 15));
        }

        // build feature lists
        $keys = $this->faker->getDataKeys();
        $yn_features = $this->YorNFeatures();

        foreach ($yn_features as $yn_key => $related) {
            $method = "set{$yn_key}YN";
            $value = $this->faker->YorN();
            $property->$method($value);

            foreach ($related as $related_method) {
                $method = "set{$related_method}";
                if ($value == 'Y') {
                    $property->$method($this->faker->getFeatureList($related_method));
                    // set as a logic_driven_select so it won't be set again below
                    $logic_driven_selects[] = $related_method;
                }

                if (array_search($related_method, $keys) !== false) {
                    $key = array_search($method, $keys);
                    unset($keys[$key]);
                }
            }
        }

        if ($property->getPoolPrivateYN() == 'Y') {
            $property->setPoolExpense($this->faker->optional()->numberBetween(10, 80));
        }

        // now finish off the rest of the non-YN keys
        foreach ($keys as $key) {
            $method = "set{$key}";
            if (method_exists($property, $method) and !in_array($key, $logic_driven_selects)) {
                $property->$method($this->faker->getFeatureList($key));
            }
        }

        // integer based YN keys
        $intkeys = $this->YorNIntegers();

        foreach ($intkeys as $key => $assoc_key) {
            $value = $this->faker->YorN();
            if ($value == 'Y') {
                foreach ($assoc_key as $method => $values) {
                    $method = "set{$method}";
                    $property->$method($this->faker->numberBetween($values[0], $values[1]));
                }
            }
        }

        // handle overrides
        $property = $this->handleOverrides($property, $overrides);

        return $property;
    }

    private function YorNFeatures()
    {
        return [
            'Cooling' => [
                'Cooling',
            ],
            'Heating' => [
                'Heating',
            ],
            'Fireplace' => [
                'FireplaceFeatures',
            ],
            'Waterfront' => [
                'WaterfrontFeatures',
            ],
            'PoolPrivate' => [
                'PoolFeatures',
            ],
            'Spa' => [
                'SpaFeatures',
            ],
            //'Horse',
            'Association' => [
                'AssociationFeeIncludes',
                'AssociationAmenities',
            ],
        ];
    }

    private function YorNIntegers()
    {
        return [
            'CarportYN' => [
               'CarportSpaces' => [
                   1, 4
               ],
            ],
            'OpenParkingYN' => [
                'OpenParkingSpaces' => [
                    1, 4
                ]
            ]
        ];
    }

    private function expenses()
    {
        return [
            'CableTvExpense' => 6,
            'ElectricExpense' => 8,
            'GardnerExpense' => 2,
            'FurnitureReplacementExpense' => 1,
            'FuelExpense' => 4,
            'InsuranceExpense' => 6,
            'OtherExpense' => 4,
            'LicensesExpense' => 1,
            'MaintenanceExpense' => 6,
            'NewTaxesExpense' => 4,
            'PestControlExpense' => 2,
            'SuppliesExpense' => 3,
            'TrashExpense' => 6,
            'WaterSewerExpense' => 8,
            'WorkmansCompensationExpense' => 1,
            'ProfessionalManagementExpense' => 1,
        ];
    }

    private function distances()
    {
        return [
            'DistanceToWater' => 7,
            'DistanceToElectric' => 3,
            'Sewer' => 3,
            'DistanceToSewer' => 3,
            'DistanceToGas' => 3,
            'DistanceToPhoneService' => 3,
            'DistanceToStreet' => 4,
            'DistanceToSchools' => 8,
            'DistanceFromShopping' => 8,
            'DistanceToPlaceofWorship' => 6,
            'DistanceToBus' => 2,
            'DistanceFromSchoolBus' => 2,
            'DistanceToFreeway' => 3,
        ];
    }
}