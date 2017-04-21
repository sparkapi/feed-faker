<?php

namespace FeedFaker\Classes;


use FeedFaker\Models\Office;

class OfficeFaker extends BaseFaker
{
    /**
     * @return Office
     */
    public function generate(array $overrides = [])
    {
        $office = new Office();

        $office->setOfficeKey($this->faker->tech_id);
        $office->setOriginatingSystemOfficeKey($this->faker->tech_id);
        $office->setOriginatingSystemName($this->faker->company);
        $office->setOfficeMlsId($this->mls_id);
        $office->setOfficeName($this->faker->company);
        $office->setOfficePhone($this->faker->phoneNumber);
        $office->setOfficePhoneExt($this->faker->numberBetween(100, 500));
        $office->setOfficeFax($this->faker->phoneNumber);
        $office->setOfficeEmail($this->faker->companyEmail);
        $office->setOfficeType($this->faker->officeType);
        $office->setOfficeBranchType($this->faker->officeBranchType);
        $office->setSocialMediaType('Facebook');
        $office->setSocialMediaFacebookUrlOrId($this->faker->url);
        $office->setOfficeAOR($this->faker->tech_id);
        $office->setOfficeAORMlsId($this->faker->tech_id);
        $office->setOfficeAORkey($this->faker->tech_id);
        $office->setOfficeNationalAssociationId($this->faker->tech_id);
        $office->setOfficeCorporateLicense($this->faker->swiftBicNumber);
        $office->setOfficeBrokerMlsId($this->faker->tech_id);
        $office->setOfficeBrokerKey($this->faker->tech_id);
        $office->setOfficeManagerMlsId($this->faker->tech_id);
        $office->setOfficeManagerKey($this->faker->tech_id);
        $office->setOfficeAddress1($this->faker->streetAddress);
        $office->setOfficeAddress2($this->faker->streetAddress);
        $office->setOfficeCity($this->faker->city);
        $office->setOfficeStateOrProvince($this->faker->state);
        $office->setOfficePostalCode($this->faker->postcode);
        $office->setOfficePostalCodePlus4($this->faker->randomNumber(4));
        $office->setOfficeCountyOrParish($this->faker->city);
        $office->setOfficeStatus($this->faker->status);
        $office->setOfficeAssociationComments($this->faker->text);
        $office->setOriginalEntryTimestamp($this->faker->dateTime->format('Y-m-d H:i:s'));
        $office->setModificationTimestamp($this->faker->dateTime->format('Y-m-d H:i:s'));
        $office->setMainOfficeKey($this->faker->tech_id);
        $office->setMainOfficeMlsId($this->faker->tech_id);
        $office->setFranchiseAffiliation($this->faker->franchiseAffiliation);
        $office->setIDXOfficeParticipationYN($this->faker->boolean(90));
        $office->setSyndicateTo(['Zillow', 'Homefinder']);
        $office->setSyndicateAgentOption("No Agent Choice");

        // handle overrides
        $office = $this->handleOverrides($office, $overrides);

        return $office;
    }
}