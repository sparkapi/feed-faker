<?php


namespace FeedFaker\Models;

/**
 * Class Property
 * @package FeedFaker\Models
 *
 * @property string ListingKey
 * @property string ListingId
 * @property string ListAOR
 * @property string OriginatingSystemKey
 * @property string OriginatingSystemName
 * @property string ListingService
 * @property string ListingAgreement
 * @property string LeaseConsideredYN
 * @property string HomeWarrantyYN
 * @property string CopyrightNotice
 * @property string Disclaimer
 * @property string StandardStatus
 * @property string MlsStatus
 * @property string ApprovalStatus
 * @property string ListingContractDate
 * @property string ContractStatusChangeDate
 * @property string ExpirationDate
 * @property string CancelationDate
 * @property string ContingentDate
 * @property string WithdrawnDate
 * @property string PurchaseContractDate
 * @property string CloseDate
 * @property string OnMarketDate
 * @property string OffMarketDate
 * @property string PendingTimestamp
 * @property string ModificationTimestamp
 * @property string StatusChangeTimestamp
 * @property string PriceChangeTimestamp
 * @property string MajorChangeType
 * @property string MajorChangeTimestamp
 * @property string OriginalEntryTimestamp
 * @property string OnMarketTimestamp
 * @property string OffMarketTimestamp
 * @property string DaysOnMarket
 * @property string CumulativeDaysOnMarket
 * @property string ClosePrice
 * @property string ListPrice
 * @property string OriginalListPrice
 * @property string ListPriceLow
 * @property string PreviousListPrice
 * @property string BuyerAgencyCompensation
 * @property string BuyerAgencyCompensationType
 * @property string SubAgencyCompensation
 * @property string SubAgencyCompensationType
 * @property string TransactionBrokerCompensation
 * @property string TransactionBrokerCompensationType
 * @property string DualVariableCompensationYN
 * @property string LeaseRenewalCompensation
 * @property string SignOnPropertyYN
 * @property string InternetEntireListingDisplayYN
 * @property string InternetAddressDisplayYN
 * @property string InternetConsumerCommentYN
 * @property string InternetAutomatedValuationDisplayYN
 * @property string SyndicateTo
 * @property string PhotosCount
 * @property string PhotosChangeTimestamp
 * @property string VideosCount
 * @property string VideosChangeTimestamp
 * @property string DocumentsCount
 * @property string DocumentsChangeTimestamp
 * @property string DocumentsAvailable
 * @property string VirtualTourURLUnbranded
 * @property string VirtualTourURLBranded
 * @property string PublicRemarks
 * @property string SyndicationRemarks
 * @property string PrivateRemarks
 * @property string PrivateOfficeRemarks
 * @property string ShowingInstructions
 * @property string ShowingContactPhone
 * @property string ShowingContactPhoneExt
 * @property string ShowingContactName
 * @property string ShowingContactType
 * @property string LockBoxLocation
 * @property string LockBoxType
 * @property string LockBoxSerialNumber
 * @property string AccessCode
 * @property string Exclusions
 * @property string Inclusions
 * @property string Disclosures
 * @property string Ownership
 * @property string SpecialListingConditions
 * @property string ListingTerms
 * @property string CurrentFinancing
 * @property string BuyerFinancing
 * @property string Concessions
 * @property string ConcessionsComments
 * @property string ConcessionsAmount
 * @property string Contingency
 * @property string Possession
 * @property string AvailabilityDate
 * @property string StreetNumber
 * @property string StreetNumberNumeric
 * @property string StreetDirPrefix
 * @property string StreetName
 * @property string StreetAdditionalInfo
 * @property string StreetSuffix
 * @property string StreetSuffixModifier
 * @property string StreetDirSuffix
 * @property string UnitNumber
 * @property string City
 * @property string StateOrProvince
 * @property string Country
 * @property string PostalCode
 * @property string PostalCodePlus4
 * @property string CarrierRoute
 * @property string UnparsedAddress
 * @property string PostalCity
 * @property string CountyOrParish
 * @property string Township
 * @property string MLSAreaMajor
 * @property string MLSAreaMinor
 * @property string SubdivisionName
 * @property string Latitude
 * @property string Longitude
 * @property string Elevation
 * @property string ElevationUnits
 * @property string Directions
 * @property string MapCoordinate
 * @property string MapCoordinateSource
 * @property string MapURL
 * @property string CrossStreet
 * @property string ElementarySchool
 * @property string ElementarySchoolDistrict
 * @property string MiddleOrJuniorSchool
 * @property string MiddleOrJuniorSchoolDistrict
 * @property string HighSchool
 * @property string HighSchoolDistrict
 * @property string ListAgentNamePrefix
 * @property string ListAgentFirstName
 * @property string ListAgentMiddleName
 * @property string ListAgentLastName
 * @property string ListAgentNameSuffix
 * @property string ListAgentFullName
 * @property string ListAgentPreferredPhone
 * @property string ListAgentPreferredPhoneExt
 * @property string ListAgentOfficePhone
 * @property string ListAgentOfficePhoneExt
 * @property string ListAgentCellPhone
 * @property string ListAgentDirectPhone
 * @property string ListAgentHomePhone
 * @property string ListAgentFax
 * @property string ListAgentPager
 * @property string ListAgentVoiceMail
 * @property string ListAgentVoiceMailExt
 * @property string ListAgentTollFreePhone
 * @property string ListAgentEmail
 * @property string ListAgentURL
 * @property string ListAgentKey
 * @property string ListAgentAOR
 * @property string ListAgentMlsId
 * @property string ListAgentStateLicense
 * @property string ListAgentDesignation
 * @property string ListOfficeName
 * @property string ListOfficePhone
 * @property string ListOfficePhoneExt
 * @property string ListOfficeFax
 * @property string ListOfficeEmail
 * @property string ListOfficeURL
 * @property string ListOfficeKey
 * @property string ListOfficeAOR
 * @property string ListOfficeMlsId
 * @property string CoListAgentNamePrefix
 * @property string CoListAgentFirstName
 * @property string CoListAgentMiddleName
 * @property string CoListAgentLastName
 * @property string CoListAgentNameSuffix
 * @property string CoListAgentFullName
 * @property string CoListAgentPreferredPhone
 * @property string CoListAgentPreferredPhoneExt
 * @property string CoListAgentOfficePhone
 * @property string CoListAgentOfficePhoneExt
 * @property string CoListAgentCellPhone
 * @property string CoListAgentDirectPhone
 * @property string CoListAgentHomePhone
 * @property string CoListAgentFax
 * @property string CoListAgentPager
 * @property string CoListAgentVoiceMail
 * @property string CoListAgentVoiceMailExt
 * @property string CoListAgentTollFreePhone
 * @property string CoListAgentEmail
 * @property string CoListAgentURL
 * @property string CoListAgentKey
 * @property string CoListAgentAOR
 * @property string CoListAgentMlsId
 * @property string CoListAgentStateLicense
 * @property string CoListAgentDesignation
 * @property string CoListOfficeName
 * @property string CoListOfficePhone
 * @property string CoListOfficePhoneExt
 * @property string CoListOfficeFax
 * @property string CoListOfficeEmail
 * @property string CoListOfficeURL
 * @property string CoListOfficeKey
 * @property string CoListOfficeAOR
 * @property string CoListOfficeMlsId
 * @property string BuyerAgentNamePrefix
 * @property string BuyerAgentFirstName
 * @property string BuyerAgentMiddleName
 * @property string BuyerAgentLastName
 * @property string BuyerAgentNameSuffix
 * @property string BuyerAgentFullName
 * @property string BuyerAgentPreferredPhone
 * @property string BuyerAgentPreferredPhoneExt
 * @property string BuyerAgentOfficePhone
 * @property string BuyerAgentOfficePhoneExt
 * @property string BuyerAgentCellPhone
 * @property string BuyerAgentDirectPhone
 * @property string BuyerAgentHomePhone
 * @property string BuyerAgentFax
 * @property string BuyerAgentPager
 * @property string BuyerAgentVoiceMail
 * @property string BuyerAgentVoiceMailExt
 * @property string BuyerAgentTollFreePhone
 * @property string BuyerAgentEmail
 * @property string BuyerAgentURL
 * @property string BuyerAgentKey
 * @property string BuyerAgentAOR
 * @property string BuyerAgentMlsId
 * @property string BuyerAgentStateLicense
 * @property string BuyerAgentDesignation
 * @property string BuyerOfficeName
 * @property string BuyerOfficePhone
 * @property string BuyerOfficePhoneExt
 * @property string BuyerOfficeFax
 * @property string BuyerOfficeEmail
 * @property string BuyerOfficeURL
 * @property string BuyerOfficeKey
 * @property string BuyerOfficeAOR
 * @property string BuyerOfficeMlsId
 * @property string CoBuyerAgentNamePrefix
 * @property string CoBuyerAgentFirstName
 * @property string CoBuyerAgentMiddleName
 * @property string CoBuyerAgentLastName
 * @property string CoBuyerAgentNameSuffix
 * @property string CoBuyerAgentFullName
 * @property string CoBuyerAgentPreferredPhone
 * @property string CoBuyerAgentPreferredPhoneExt
 * @property string CoBuyerAgentOfficePhone
 * @property string CoBuyerAgentOfficePhoneExt
 * @property string CoBuyerAgentCellPhone
 * @property string CoBuyerAgentDirectPhone
 * @property string CoBuyerAgentHomePhone
 * @property string CoBuyerAgentFax
 * @property string CoBuyerAgentPager
 * @property string CoBuyerAgentVoiceMail
 * @property string CoBuyerAgentVoiceMailExt
 * @property string CoBuyerAgentTollFreePhone
 * @property string CoBuyerAgentEmail
 * @property string CoBuyerAgentURL
 * @property string CoBuyerAgentKey
 * @property string CoBuyerAgentAOR
 * @property string CoBuyerAgentMlsId
 * @property string CoBuyerAgentStateLicense
 * @property string CoBuyerAgentDesignation
 * @property string CoBuyerOfficeName
 * @property string CoBuyerOfficePhone
 * @property string CoBuyerOfficePhoneExt
 * @property string CoBuyerOfficeFax
 * @property string CoBuyerOfficeEmail
 * @property string CoBuyerOfficeURL
 * @property string CoBuyerOfficeKey
 * @property string CoBuyerOfficeAOR
 * @property string CoBuyerOfficeMlsId
 * @property string ListTeamName
 * @property string ListTeamKey
 * @property string BuyerTeamName
 * @property string BuyerTeamKey
 * @property string PropertyType
 * @property string PropertySubType
 * @property string AssociationYN
 * @property string AssociationName
 * @property string AssociationPhone
 * @property string AssociationFee
 * @property string AssociationFeeFrequency
 * @property string AssociationName2
 * @property string AssociationPhone2
 * @property string AssociationFee2
 * @property string AssociationFee2Frequency
 * @property string AssociationFeeIncludes
 * @property string AssociationAmenities
 * @property string PetsAllowed
 * @property string LotSizeArea
 * @property string LotSizeSource
 * @property string LotSizeUnits
 * @property string LotSizeDimensions
 * @property string LotDimensionsSource
 * @property string LotSizeAcres
 * @property string LotSizeSquareFeet
 * @property string FrontageType
 * @property string FrontageLength
 * @property string RoadFrontageType
 * @property string RoadSurfaceType
 * @property string RoadResponsibility
 * @property string OccupantName
 * @property string OccupantPhone
 * @property string OccupantType
 * @property string OwnerName
 * @property string OwnerPhone
 * @property string AnchorsCoTenants
 * @property string LeaseTerm
 * @property string LandLeaseYN
 * @property string LandLeaseAmount
 * @property string LandLeaseAmountFrequency
 * @property string LandLeaseExpirationDate
 * @property string View
 * @property string ViewYN
 * @property string LotFeatures
 * @property string CurrentUse
 * @property string PossibleUse
 * @property string DevelopmentStatus
 * @property string NumberOfLots
 * @property string Topography
 * @property string HorseYN
 * @property string HorseAmenities
 * @property string CommunityFeatures
 * @property string SeniorCommunityYN
 * @property string PoolFeatures
 * @property string PoolPrivateYN
 * @property string SpaFeatures
 * @property string SpaYN
 * @property string WaterfrontYN
 * @property string WaterfrontFeatures
 * @property string WaterBodyName
 * @property string GrossScheduledIncome
 * @property string GrossIncome
 * @property string IncomeIncludes
 * @property string OperatingExpense
 * @property string OperatingExpenseIncludes
 * @property string NetOperatingIncome
 * @property string CapRate
 * @property string NumberOfUnitsLeased
 * @property string NumberOfUnitsMoMo
 * @property string NumberOfUnitsVacant
 * @property string ExistingLeaseType
 * @property string UnitsFurnished
 * @property string TotalActualRent
 * @property string RentControlYN
 * @property string NumberOfUnitsTotal
 * @property string NumberOfBuildings
 * @property string OwnerPays
 * @property string TenantPays
 * @property string VacancyAllowance
 * @property string VacancyAllowanceRate
 * @property string CableTvExpense
 * @property string ElectricExpense
 * @property string GardnerExpense
 * @property string FurnitureReplacementExpense
 * @property string FuelExpense
 * @property string InsuranceExpense
 * @property string OtherExpense
 * @property string LicensesExpense
 * @property string MaintenanceExpense
 * @property string NewTaxesExpense
 * @property string PestControlExpense
 * @property string PoolExpense
 * @property string SuppliesExpense
 * @property string TrashExpense
 * @property string WaterSewerExpense
 * @property string WorkmansCompensationExpense
 * @property string ProfessionalManagementExpense
 * @property string ManagerExpense
 * @property string FinancialDataSource
 * @property string RentIncludes
 * @property string Furnished
 * @property string BusinessName
 * @property string BusinessType
 * @property string OwnershipType
 * @property string SpecialLicenses
 * @property string NumberOfFullTimeEmployees
 * @property string NumberOfPartTimeEmployees
 * @property string LeaseAmount
 * @property string LeaseAmountFrequency
 * @property string LeaseExpiration
 * @property string LeaseRenewalOptionYN
 * @property string LeaseAssignableYN
 * @property string HoursDaysofOperation
 * @property string HoursDaysofOperationDescription
 * @property string YearEstablished
 * @property string SeatingCapacity
 * @property string YearsCurrentOwner
 * @property string LaborInformation
 * @property string Utilities
 * @property string Electric
 * @property string Gas
 * @property string Telephone
 * @property string IrrigationWaterRightsYN
 * @property string IrrigationWaterRightsAcres
 * @property string IrrigationSource
 * @property string WaterSource
 * @property string DistanceToWater
 * @property string ElectricOnPropertyYN
 * @property string DistanceToElectric
 * @property string Sewer
 * @property string DistanceToSewer
 * @property string DistanceToGas
 * @property string DistanceToPhoneService
 * @property string DistanceToStreet
 * @property string DistanceToSchools
 * @property string DistanceFromShopping
 * @property string DistanceToPlaceofWorship
 * @property string DistanceToBus
 * @property string DistanceFromSchoolBus
 * @property string DistanceToFreeway
 * @property string CropsIncludedYN
 * @property string GrazingPermitsBlmYN
 * @property string GrazingPermitsForestServiceYN
 * @property string GrazingPermitsPrivateYN
 * @property string CultivatedArea
 * @property string PastureArea
 * @property string RangeArea
 * @property string WoodedArea
 * @property string Vegetation
 * @property string Fencing
 * @property string FarmCreditServiceInclYN
 * @property string FarmLandAreaUnits
 * @property string FarmLandAreaSource
 * @property string BedroomsTotal
 * @property string BedroomsPossible
 * @property string MainLevelBedrooms
 * @property string BathroomsTotalInteger
 * @property string BathroomsFull
 * @property string BathroomsHalf
 * @property string BathroomsThreeQuarter
 * @property string BathroomsOneQuarter
 * @property string BathroomsPartial
 * @property string MainLevelBathrooms
 * @property string LivingArea
 * @property string LivingAreaUnits
 * @property string PropertyAttachedYN
 * @property string GarageYN
 * @property string GarageSpaces
 * @property string StoriesTotal
 * @property string Stories
 * @property string Levels
 * @property string YearBuilt
 * @property string MobileLength
 * @property string MobileWidth
 * @property string Make
 * @property string Model
 * @property string ParcelNumber
 * @property string LivingAreaSource
 * @property string AboveGradeFinishedArea
 * @property string AboveGradeFinishedAreaSource
 * @property string AboveGradeFinishedAreaUnits
 * @property string BelowGradeFinishedArea
 * @property string BelowGradeFinishedAreaSource
 * @property string BelowGradeFinishedAreaUnits
 * @property string BuildingAreaTotal
 * @property string BuildingAreaSource
 * @property string BuildingAreaUnits
 * @property string LeasableArea
 * @property string LeasableAreaUnits
 * @property string CommonWalls
 * @property string FoundationArea
 * @property string AttachedGarageYN
 * @property string CarportSpaces
 * @property string CarportYN
 * @property string OpenParkingYN
 * @property string OpenParkingSpaces
 * @property string CoveredSpaces
 * @property string ParkingFeatures
 * @property string OtherParking
 * @property string ParkingTotal
 * @property string RVParkingDimensions
 * @property string EntryLocation
 * @property string EntryLevel
 * @property string YearBuiltEffective
 * @property string YearBuiltDetails
 * @property string YearBuiltSource
 * @property string NewConstructionYN
 * @property string GreenBuildingVerificationType // EnergyStar
 * @property string GreenVerificationEnergyStarBody
 * @property string GreenVerificationEnergyStarYear
 * @property string GreenVerificationEnergyStarRating
 * @property string GreenVerificationEnergyStarMetric
 * @property string GreenVerificationEnergyStarURL
 * @property string BuilderName
 * @property string BuilderModel
 * @property string BuildingName
 * @property string BuildingFeatures
 * @property string Heating
 * @property string HeatingYN
 * @property string Cooling
 * @property string CoolingYN
 * @property string InteriorFeatures
 * @property string ExteriorFeatures
 * @property string PatioAndPorchFeatures
 * @property string ArchitecturalStyle
 * @property string PropertyCondition
 * @property string FireplaceFeatures
 * @property string FireplacesTotal
 * @property string FireplaceYN
 * @property string DoorFeatures
 * @property string WindowFeatures
 * @property string Roof
 * @property string ConstructionMaterials
 * @property string FoundationDetails
 * @property string Basement
 * @property string Flooring
 * @property string OtherStructures
 * @property string DirectionFaces
 * @property string OtherEquipment
 * @property string Appliances
 * @property string LaundryFeatures
 * @property string SecurityFeatures
 * @property string NumberOfSeparateElectricMeters
 * @property string NumberOfSeparateGasMeters
 * @property string NumberOfSeparateWaterMeters
 * @property string GreenEnergyEfficient
 * @property string GreenEnergyGeneration
 * @property string GreenSustainability
 * @property string GreenWaterConservation
 * @property string GreenIndoorAirQuality
 * @property string GreenLocation
 * @property string WalkScore
 * @property string HabitableResidenceYN
 * @property string BodyType
 * @property string Skirt
 * @property string MobileDimUnits
 * @property string ParkName
 * @property string ParkManagerName
 * @property string ParkManagerPhone
 * @property string MobileHomeRemainsYN
 * @property string NumberOfPads
 * @property string SerialU
 * @property string DOH1
 * @property string License1
 * @property string SerialX
 * @property string DOH2
 * @property string License2
 * @property string SerialXX
 * @property string DOH3
 * @property string License3
 * @property string AccessibilityFeatures
 * @property string RoomsTotal
 * @property string RoomType // Bedroom
 * @property string RoomBedroomArea
 * @property string RoomBedroomAreaUnits
 * @property string RoomBedroomAreaSource
 * @property string RoomBedroomDimensions
 * @property string RoomBedroomLength
 * @property string RoomBedroomWidth
 * @property string RoomBedroomLengthWidthUnits
 * @property string RoomBedroomLengthWidthSource
 * @property string RoomBedroomLevel
 * @property string RoomBedroomFeatures
 * @property string RoomBedroomDescription
 * @property string UnitTypeType // Studio
 * @property string UnitTypeStudioUnitsTotal
 * @property string UnitTypeStudioBedsTotal
 * @property string UnitTypeStudioBathsTotal
 * @property string UnitTypeStudioFurnished
 * @property string UnitTypeStudioDescription
 * @property string UnitTypeStudioGarageSpaces
 * @property string UnitTypeStudioGarageAttachedYN
 * @property string UnitTypeStudioActualRent
 * @property string UnitTypeStudioTotalRent
 * @property string UnitTypeStudioProForma
 * @property string Zoning
 * @property string ZoningDescription
 * @property string AdditionalParcelsYN
 * @property string AdditionalParcelsDescription
 * @property string PublicSurveySection
 * @property string PublicSurveyTownship
 * @property string PublicSurveyRange
 * @property string TaxLot
 * @property string TaxBlock
 * @property string TaxTract
 * @property string TaxLegalDescription
 * @property string TaxAnnualAmount
 * @property string TaxYear
 * @property string TaxAssessedValue
 * @property string TaxExemptions
 * @property string TaxOtherAnnualAssessmentAmount
 * @property string TaxBookNumber
 * @property string TaxMapNumber
 * @property string TaxParcelLetter
 * @property string TaxStatusCurrent
 */

class Property extends BaseModel
{
    public $ListingKey;
    public $ListingId;
    public $ListAOR;
    public $OriginatingSystemKey;
    public $OriginatingSystemName;
    public $ListingService;
    public $ListingAgreement;
    public $LeaseConsideredYN;
    public $HomeWarrantyYN;
    public $CopyrightNotice;
    public $Disclaimer;
    public $StandardStatus;
    public $MlsStatus;
    public $ApprovalStatus;
    public $ListingContractDate;
    public $ContractStatusChangeDate;
    public $ExpirationDate;
    public $CancelationDate;
    public $ContingentDate;
    public $WithdrawnDate;
    public $PurchaseContractDate;
    public $CloseDate;
    public $OnMarketDate;
    public $OffMarketDate;
    public $PendingTimestamp;
    public $ModificationTimestamp;
    public $StatusChangeTimestamp;
    public $PriceChangeTimestamp;
    public $MajorChangeType;
    public $MajorChangeTimestamp;
    public $OriginalEntryTimestamp;
    public $OnMarketTimestamp;
    public $OffMarketTimestamp;
    public $DaysOnMarket;
    public $CumulativeDaysOnMarket;
    public $ClosePrice;
    public $ListPrice;
    public $OriginalListPrice;
    public $ListPriceLow;
    public $PreviousListPrice;
    public $BuyerAgencyCompensation;
    public $BuyerAgencyCompensationType;
    public $SubAgencyCompensation;
    public $SubAgencyCompensationType;
    public $TransactionBrokerCompensation;
    public $TransactionBrokerCompensationType;
    public $DualVariableCompensationYN;
    public $LeaseRenewalCompensation;
    public $SignOnPropertyYN;
    public $InternetEntireListingDisplayYN;
    public $InternetAddressDisplayYN;
    public $InternetConsumerCommentYN;
    public $InternetAutomatedValuationDisplayYN;
    public $SyndicateTo;
    public $PhotosCount;
    public $PhotosChangeTimestamp;
    public $VideosCount;
    public $VideosChangeTimestamp;
    public $DocumentsCount;
    public $DocumentsChangeTimestamp;
    public $DocumentsAvailable;
    public $VirtualTourURLUnbranded;
    public $VirtualTourURLBranded;
    public $PublicRemarks;
    public $SyndicationRemarks;
    public $PrivateRemarks;
    public $PrivateOfficeRemarks;
    public $ShowingInstructions;
    public $ShowingContactPhone;
    public $ShowingContactPhoneExt;
    public $ShowingContactName;
    public $ShowingContactType;
    public $LockBoxLocation;
    public $LockBoxType;
    public $LockBoxSerialNumber;
    public $AccessCode;
    public $Exclusions;
    public $Inclusions;
    public $Disclosures;
    public $Ownership;
    public $SpecialListingConditions;
    public $ListingTerms;
    public $CurrentFinancing;
    public $BuyerFinancing;
    public $Concessions;
    public $ConcessionsComments;
    public $ConcessionsAmount;
    public $Contingency;
    public $Possession;
    public $AvailabilityDate;
    public $StreetNumber;
    public $StreetNumberNumeric;
    public $StreetDirPrefix;
    public $StreetName;
    public $StreetAdditionalInfo;
    public $StreetSuffix;
    public $StreetSuffixModifier;
    public $StreetDirSuffix;
    public $UnitNumber;
    public $City;
    public $StateOrProvince;
    public $Country;
    public $PostalCode;
    public $PostalCodePlus4;
    public $CarrierRoute;
    public $UnparsedAddress;
    public $PostalCity;
    public $CountyOrParish;
    public $Township;
    public $MLSAreaMajor;
    public $MLSAreaMinor;
    public $SubdivisionName;
    public $Latitude;
    public $Longitude;
    public $Elevation;
    public $ElevationUnits;
    public $Directions;
    public $MapCoordinate;
    public $MapCoordinateSource;
    public $MapURL;
    public $CrossStreet;
    public $ElementarySchool;
    public $ElementarySchoolDistrict;
    public $MiddleOrJuniorSchool;
    public $MiddleOrJuniorSchoolDistrict;
    public $HighSchool;
    public $HighSchoolDistrict;
    public $ListAgentNamePrefix;
    public $ListAgentFirstName;
    public $ListAgentMiddleName;
    public $ListAgentLastName;
    public $ListAgentNameSuffix;
    public $ListAgentFullName;
    public $ListAgentPreferredPhone;
    public $ListAgentPreferredPhoneExt;
    public $ListAgentOfficePhone;
    public $ListAgentOfficePhoneExt;
    public $ListAgentCellPhone;
    public $ListAgentDirectPhone;
    public $ListAgentHomePhone;
    public $ListAgentFax;
    public $ListAgentPager;
    public $ListAgentVoiceMail;
    public $ListAgentVoiceMailExt;
    public $ListAgentTollFreePhone;
    public $ListAgentEmail;
    public $ListAgentURL;
    public $ListAgentKey;
    public $ListAgentAOR;
    public $ListAgentMlsId;
    public $ListAgentStateLicense;
    public $ListAgentDesignation;
    public $ListOfficeName;
    public $ListOfficePhone;
    public $ListOfficePhoneExt;
    public $ListOfficeFax;
    public $ListOfficeEmail;
    public $ListOfficeURL;
    public $ListOfficeKey;
    public $ListOfficeAOR;
    public $ListOfficeMlsId;
    public $CoListAgentNamePrefix;
    public $CoListAgentFirstName;
    public $CoListAgentMiddleName;
    public $CoListAgentLastName;
    public $CoListAgentNameSuffix;
    public $CoListAgentFullName;
    public $CoListAgentPreferredPhone;
    public $CoListAgentPreferredPhoneExt;
    public $CoListAgentOfficePhone;
    public $CoListAgentOfficePhoneExt;
    public $CoListAgentCellPhone;
    public $CoListAgentDirectPhone;
    public $CoListAgentHomePhone;
    public $CoListAgentFax;
    public $CoListAgentPager;
    public $CoListAgentVoiceMail;
    public $CoListAgentVoiceMailExt;
    public $CoListAgentTollFreePhone;
    public $CoListAgentEmail;
    public $CoListAgentURL;
    public $CoListAgentKey;
    public $CoListAgentAOR;
    public $CoListAgentMlsId;
    public $CoListAgentStateLicense;
    public $CoListAgentDesignation;
    public $CoListOfficeName;
    public $CoListOfficePhone;
    public $CoListOfficePhoneExt;
    public $CoListOfficeFax;
    public $CoListOfficeEmail;
    public $CoListOfficeURL;
    public $CoListOfficeKey;
    public $CoListOfficeAOR;
    public $CoListOfficeMlsId;
    public $BuyerAgentNamePrefix;
    public $BuyerAgentFirstName;
    public $BuyerAgentMiddleName;
    public $BuyerAgentLastName;
    public $BuyerAgentNameSuffix;
    public $BuyerAgentFullName;
    public $BuyerAgentPreferredPhone;
    public $BuyerAgentPreferredPhoneExt;
    public $BuyerAgentOfficePhone;
    public $BuyerAgentOfficePhoneExt;
    public $BuyerAgentCellPhone;
    public $BuyerAgentDirectPhone;
    public $BuyerAgentHomePhone;
    public $BuyerAgentFax;
    public $BuyerAgentPager;
    public $BuyerAgentVoiceMail;
    public $BuyerAgentVoiceMailExt;
    public $BuyerAgentTollFreePhone;
    public $BuyerAgentEmail;
    public $BuyerAgentURL;
    public $BuyerAgentKey;
    public $BuyerAgentAOR;
    public $BuyerAgentMlsId;
    public $BuyerAgentStateLicense;
    public $BuyerAgentDesignation;
    public $BuyerOfficeName;
    public $BuyerOfficePhone;
    public $BuyerOfficePhoneExt;
    public $BuyerOfficeFax;
    public $BuyerOfficeEmail;
    public $BuyerOfficeURL;
    public $BuyerOfficeKey;
    public $BuyerOfficeAOR;
    public $BuyerOfficeMlsId;
    public $CoBuyerAgentNamePrefix;
    public $CoBuyerAgentFirstName;
    public $CoBuyerAgentMiddleName;
    public $CoBuyerAgentLastName;
    public $CoBuyerAgentNameSuffix;
    public $CoBuyerAgentFullName;
    public $CoBuyerAgentPreferredPhone;
    public $CoBuyerAgentPreferredPhoneExt;
    public $CoBuyerAgentOfficePhone;
    public $CoBuyerAgentOfficePhoneExt;
    public $CoBuyerAgentCellPhone;
    public $CoBuyerAgentDirectPhone;
    public $CoBuyerAgentHomePhone;
    public $CoBuyerAgentFax;
    public $CoBuyerAgentPager;
    public $CoBuyerAgentVoiceMail;
    public $CoBuyerAgentVoiceMailExt;
    public $CoBuyerAgentTollFreePhone;
    public $CoBuyerAgentEmail;
    public $CoBuyerAgentURL;
    public $CoBuyerAgentKey;
    public $CoBuyerAgentAOR;
    public $CoBuyerAgentMlsId;
    public $CoBuyerAgentStateLicense;
    public $CoBuyerAgentDesignation;
    public $CoBuyerOfficeName;
    public $CoBuyerOfficePhone;
    public $CoBuyerOfficePhoneExt;
    public $CoBuyerOfficeFax;
    public $CoBuyerOfficeEmail;
    public $CoBuyerOfficeURL;
    public $CoBuyerOfficeKey;
    public $CoBuyerOfficeAOR;
    public $CoBuyerOfficeMlsId;
    public $ListTeamName;
    public $ListTeamKey;
    public $BuyerTeamName;
    public $BuyerTeamKey;
    public $PropertyType;
    public $PropertySubType;
    public $AssociationYN;
    public $AssociationName;
    public $AssociationPhone;
    public $AssociationFee;
    public $AssociationFeeFrequency;
    public $AssociationName2;
    public $AssociationPhone2;
    public $AssociationFee2;
    public $AssociationFee2Frequency;
    public $AssociationFeeIncludes;
    public $AssociationAmenities;
    public $PetsAllowed;
    public $LotSizeArea;
    public $LotSizeSource;
    public $LotSizeUnits;
    public $LotSizeDimensions;
    public $LotDimensionsSource;
    public $LotSizeAcres;
    public $LotSizeSquareFeet;
    public $FrontageType;
    public $FrontageLength;
    public $RoadFrontageType;
    public $RoadSurfaceType;
    public $RoadResponsibility;
    public $OccupantName;
    public $OccupantPhone;
    public $OccupantType;
    public $OwnerName;
    public $OwnerPhone;
    public $AnchorsCoTenants;
    public $LeaseTerm;
    public $LandLeaseYN;
    public $LandLeaseAmount;
    public $LandLeaseAmountFrequency;
    public $LandLeaseExpirationDate;
    public $View;
    public $ViewYN;
    public $LotFeatures;
    public $CurrentUse;
    public $PossibleUse;
    public $DevelopmentStatus;
    public $NumberOfLots;
    public $Topography;
    public $HorseYN;
    public $HorseAmenities;
    public $CommunityFeatures;
    public $SeniorCommunityYN;
    public $PoolFeatures;
    public $PoolPrivateYN;
    public $SpaFeatures;
    public $SpaYN;
    public $WaterfrontYN;
    public $WaterfrontFeatures;
    public $WaterBodyName;
    public $GrossScheduledIncome;
    public $GrossIncome;
    public $IncomeIncludes;
    public $OperatingExpense;
    public $OperatingExpenseIncludes;
    public $NetOperatingIncome;
    public $CapRate;
    public $NumberOfUnitsLeased;
    public $NumberOfUnitsMoMo;
    public $NumberOfUnitsVacant;
    public $ExistingLeaseType;
    public $UnitsFurnished;
    public $TotalActualRent;
    public $RentControlYN;
    public $NumberOfUnitsTotal;
    public $NumberOfBuildings;
    public $OwnerPays;
    public $TenantPays;
    public $VacancyAllowance;
    public $VacancyAllowanceRate;
    public $CableTvExpense;
    public $ElectricExpense;
    public $GardnerExpense;
    public $FurnitureReplacementExpense;
    public $FuelExpense;
    public $InsuranceExpense;
    public $OtherExpense;
    public $LicensesExpense;
    public $MaintenanceExpense;
    public $NewTaxesExpense;
    public $PestControlExpense;
    public $PoolExpense;
    public $SuppliesExpense;
    public $TrashExpense;
    public $WaterSewerExpense;
    public $WorkmansCompensationExpense;
    public $ProfessionalManagementExpense;
    public $ManagerExpense;
    public $FinancialDataSource;
    public $RentIncludes;
    public $Furnished;
    public $BusinessName;
    public $BusinessType;
    public $OwnershipType;
    public $SpecialLicenses;
    public $NumberOfFullTimeEmployees;
    public $NumberOfPartTimeEmployees;
    public $LeaseAmount;
    public $LeaseAmountFrequency;
    public $LeaseExpiration;
    public $LeaseRenewalOptionYN;
    public $LeaseAssignableYN;
    public $HoursDaysofOperation;
    public $HoursDaysofOperationDescription;
    public $YearEstablished;
    public $SeatingCapacity;
    public $YearsCurrentOwner;
    public $LaborInformation;
    public $Utilities;
    public $Electric;
    public $Gas;
    public $Telephone;
    public $IrrigationWaterRightsYN;
    public $IrrigationWaterRightsAcres;
    public $IrrigationSource;
    public $WaterSource;
    public $DistanceToWater;
    public $ElectricOnPropertyYN;
    public $DistanceToElectric;
    public $Sewer;
    public $DistanceToSewer;
    public $DistanceToGas;
    public $DistanceToPhoneService;
    public $DistanceToStreet;
    public $DistanceToSchools;
    public $DistanceFromShopping;
    public $DistanceToPlaceofWorship;
    public $DistanceToBus;
    public $DistanceFromSchoolBus;
    public $DistanceToFreeway;
    public $CropsIncludedYN;
    public $GrazingPermitsBlmYN;
    public $GrazingPermitsForestServiceYN;
    public $GrazingPermitsPrivateYN;
    public $CultivatedArea;
    public $PastureArea;
    public $RangeArea;
    public $WoodedArea;
    public $Vegetation;
    public $Fencing;
    public $FarmCreditServiceInclYN;
    public $FarmLandAreaUnits;
    public $FarmLandAreaSource;
    public $BedroomsTotal;
    public $BedroomsPossible;
    public $MainLevelBedrooms;
    public $BathroomsTotalInteger;
    public $BathroomsFull;
    public $BathroomsHalf;
    public $BathroomsThreeQuarter;
    public $BathroomsOneQuarter;
    public $BathroomsPartial;
    public $MainLevelBathrooms;
    public $LivingArea;
    public $LivingAreaUnits;
    public $PropertyAttachedYN;
    public $GarageYN;
    public $GarageSpaces;
    public $StoriesTotal;
    public $Stories;
    public $Levels;
    public $YearBuilt;
    public $MobileLength;
    public $MobileWidth;
    public $Make;
    public $Model;
    public $ParcelNumber;
    public $LivingAreaSource;
    public $AboveGradeFinishedArea;
    public $AboveGradeFinishedAreaSource;
    public $AboveGradeFinishedAreaUnits;
    public $BelowGradeFinishedArea;
    public $BelowGradeFinishedAreaSource;
    public $BelowGradeFinishedAreaUnits;
    public $BuildingAreaTotal;
    public $BuildingAreaSource;
    public $BuildingAreaUnits;
    public $LeasableArea;
    public $LeasableAreaUnits;
    public $CommonWalls;
    public $FoundationArea;
    public $AttachedGarageYN;
    public $CarportSpaces;
    public $CarportYN;
    public $OpenParkingYN;
    public $OpenParkingSpaces;
    public $CoveredSpaces;
    public $ParkingFeatures;
    public $OtherParking;
    public $ParkingTotal;
    public $RVParkingDimensions;
    public $EntryLocation;
    public $EntryLevel;
    public $YearBuiltEffective;
    public $YearBuiltDetails;
    public $YearBuiltSource;
    public $NewConstructionYN;
    public $GreenBuildingVerificationType;
    public $GreenVerificationEnergyStarBody;
    public $GreenVerificationEnergyStarYear;
    public $GreenVerificationEnergyStarRating;
    public $GreenVerificationEnergyStarMetric;
    public $GreenVerificationEnergyStarURL;
    public $BuilderName;
    public $BuilderModel;
    public $BuildingName;
    public $BuildingFeatures;
    public $Heating;
    public $HeatingYN;
    public $Cooling;
    public $CoolingYN;
    public $InteriorFeatures;
    public $ExteriorFeatures;
    public $PatioAndPorchFeatures;
    public $ArchitecturalStyle;
    public $PropertyCondition;
    public $FireplaceFeatures;
    public $FireplacesTotal;
    public $FireplaceYN;
    public $DoorFeatures;
    public $WindowFeatures;
    public $Roof;
    public $ConstructionMaterials;
    public $FoundationDetails;
    public $Basement;
    public $Flooring;
    public $OtherStructures;
    public $DirectionFaces;
    public $OtherEquipment;
    public $Appliances;
    public $LaundryFeatures;
    public $SecurityFeatures;
    public $NumberOfSeparateElectricMeters;
    public $NumberOfSeparateGasMeters;
    public $NumberOfSeparateWaterMeters;
    public $GreenEnergyEfficient;
    public $GreenEnergyGeneration;
    public $GreenSustainability;
    public $GreenWaterConservation;
    public $GreenIndoorAirQuality;
    public $GreenLocation;
    public $WalkScore;
    public $HabitableResidenceYN;
    public $BodyType;
    public $Skirt;
    public $MobileDimUnits;
    public $ParkName;
    public $ParkManagerName;
    public $ParkManagerPhone;
    public $MobileHomeRemainsYN;
    public $NumberOfPads;
    public $SerialU;
    public $DOH1;
    public $License1;
    public $SerialX;
    public $DOH2;
    public $License2;
    public $SerialXX;
    public $DOH3;
    public $License3;
    public $AccessibilityFeatures;
    public $RoomsTotal;
    public $RoomType;
    public $BedroomArea;
    public $BedroomAreaUnits;
    public $BedroomAreaSource;
    public $BedroomDimensions;
    public $BedroomLength;
    public $BedroomWidth;
    public $BedroomLengthWidthUnits;
    public $BedroomLengthWidthSource;
    public $BedroomLevel;
    public $BedroomFeatures;
    public $BedroomDescription;
    public $UnitTypeType;
    public $StudioUnitsTotal;
    public $StudioBedsTotal;
    public $StudioBathsTotal;
    public $StudioFurnished;
    public $StudioDescription;
    public $StudioGarageSpaces;
    public $StudioGarageAttachedYN;
    public $StudioActualRent;
    public $StudioTotalRent;
    public $StudioProForma;
    public $Zoning;
    public $ZoningDescription;
    public $AdditionalParcelsYN;
    public $AdditionalParcelsDescription;
    public $PublicSurveySection;
    public $PublicSurveyTownship;
    public $PublicSurveyRange;
    public $TaxLot;
    public $TaxBlock;
    public $TaxTract;
    public $TaxLegalDescription;
    public $TaxAnnualAmount;
    public $TaxYear;
    public $TaxAssessedValue;
    public $TaxExemptions;
    public $TaxOtherAnnualAssessmentAmount;
    public $TaxBookNumber;
    public $TaxMapNumber;
    public $TaxParcelLetter;
    public $TaxStatusCurrent;

    public function getIdKey()
    {
        return $this->getListingKey();
    }

    /**
     * @return string
     */
    public function getListingKey()
    {
        return $this->ListingKey;
    }

    /**
     * @param string $ListingKey
     */
    public function setListingKey($ListingKey)
    {
        $this->ListingKey = $ListingKey;
    }

    /**
     * @return string
     */
    public function getListingId()
    {
        return $this->ListingId;
    }

    /**
     * @param string $ListingId
     */
    public function setListingId($ListingId)
    {
        $this->ListingId = $ListingId;
    }

    /**
     * @return string
     */
    public function getListAOR()
    {
        return $this->ListAOR;
    }

    /**
     * @param string $ListAOR
     */
    public function setListAOR($ListAOR)
    {
        $this->ListAOR = $ListAOR;
    }

    /**
     * @return string
     */
    public function getOriginatingSystemKey()
    {
        return $this->OriginatingSystemKey;
    }

    /**
     * @param string $OriginatingSystemKey
     */
    public function setOriginatingSystemKey($OriginatingSystemKey)
    {
        $this->OriginatingSystemKey = $OriginatingSystemKey;
    }

    /**
     * @return string
     */
    public function getOriginatingSystemName()
    {
        return $this->OriginatingSystemName;
    }

    /**
     * @param string $OriginatingSystemName
     */
    public function setOriginatingSystemName($OriginatingSystemName)
    {
        $this->OriginatingSystemName = $OriginatingSystemName;
    }

    /**
     * @return string
     */
    public function getListingService()
    {
        return $this->ListingService;
    }

    /**
     * @param string $ListingService
     */
    public function setListingService($ListingService)
    {
        $this->ListingService = $ListingService;
    }

    /**
     * @return string
     */
    public function getListingAgreement()
    {
        return $this->ListingAgreement;
    }

    /**
     * @param string $ListingAgreement
     */
    public function setListingAgreement($ListingAgreement)
    {
        $this->ListingAgreement = $ListingAgreement;
    }

    /**
     * @return string
     */
    public function getLeaseConsideredYN()
    {
        return $this->LeaseConsideredYN;
    }

    /**
     * @param string $LeaseConsideredYN
     */
    public function setLeaseConsideredYN($LeaseConsideredYN)
    {
        $this->LeaseConsideredYN = $LeaseConsideredYN;
    }

    /**
     * @return string
     */
    public function getHomeWarrantyYN()
    {
        return $this->HomeWarrantyYN;
    }

    /**
     * @param string $HomeWarrantyYN
     */
    public function setHomeWarrantyYN($HomeWarrantyYN)
    {
        $this->HomeWarrantyYN = $HomeWarrantyYN;
    }

    /**
     * @return string
     */
    public function getCopyrightNotice()
    {
        return $this->CopyrightNotice;
    }

    /**
     * @param string $CopyrightNotice
     */
    public function setCopyrightNotice($CopyrightNotice)
    {
        $this->CopyrightNotice = $CopyrightNotice;
    }

    /**
     * @return string
     */
    public function getDisclaimer()
    {
        return $this->Disclaimer;
    }

    /**
     * @param string $Disclaimer
     */
    public function setDisclaimer($Disclaimer)
    {
        $this->Disclaimer = $Disclaimer;
    }

    /**
     * @return string
     */
    public function getStandardStatus()
    {
        return $this->StandardStatus;
    }

    /**
     * @param string $StandardStatus
     */
    public function setStandardStatus($StandardStatus)
    {
        $this->StandardStatus = $StandardStatus;
    }

    /**
     * @return string
     */
    public function getMlsStatus()
    {
        return $this->MlsStatus;
    }

    /**
     * @param string $MlsStatus
     */
    public function setMlsStatus($MlsStatus)
    {
        $this->MlsStatus = $MlsStatus;
    }

    /**
     * @return string
     */
    public function getApprovalStatus()
    {
        return $this->ApprovalStatus;
    }

    /**
     * @param string $ApprovalStatus
     */
    public function setApprovalStatus($ApprovalStatus)
    {
        $this->ApprovalStatus = $ApprovalStatus;
    }

    /**
     * @return string
     */
    public function getListingContractDate()
    {
        return $this->ListingContractDate;
    }

    /**
     * @param string $ListingContractDate
     */
    public function setListingContractDate($ListingContractDate)
    {
        $this->ListingContractDate = $ListingContractDate;
    }

    /**
     * @return string
     */
    public function getContractStatusChangeDate()
    {
        return $this->ContractStatusChangeDate;
    }

    /**
     * @param string $ContractStatusChangeDate
     */
    public function setContractStatusChangeDate($ContractStatusChangeDate)
    {
        $this->ContractStatusChangeDate = $ContractStatusChangeDate;
    }

    /**
     * @return string
     */
    public function getExpirationDate()
    {
        return $this->ExpirationDate;
    }

    /**
     * @param string $ExpirationDate
     */
    public function setExpirationDate($ExpirationDate)
    {
        $this->ExpirationDate = $ExpirationDate;
    }

    /**
     * @return string
     */
    public function getCancelationDate()
    {
        return $this->CancelationDate;
    }

    /**
     * @param string $CancelationDate
     */
    public function setCancelationDate($CancelationDate)
    {
        $this->CancelationDate = $CancelationDate;
    }

    /**
     * @return string
     */
    public function getContingentDate()
    {
        return $this->ContingentDate;
    }

    /**
     * @param string $ContingentDate
     */
    public function setContingentDate($ContingentDate)
    {
        $this->ContingentDate = $ContingentDate;
    }

    /**
     * @return string
     */
    public function getWithdrawnDate()
    {
        return $this->WithdrawnDate;
    }

    /**
     * @param string $WithdrawnDate
     */
    public function setWithdrawnDate($WithdrawnDate)
    {
        $this->WithdrawnDate = $WithdrawnDate;
    }

    /**
     * @return string
     */
    public function getPurchaseContractDate()
    {
        return $this->PurchaseContractDate;
    }

    /**
     * @param string $PurchaseContractDate
     */
    public function setPurchaseContractDate($PurchaseContractDate)
    {
        $this->PurchaseContractDate = $PurchaseContractDate;
    }

    /**
     * @return string
     */
    public function getCloseDate()
    {
        return $this->CloseDate;
    }

    /**
     * @param string $CloseDate
     */
    public function setCloseDate($CloseDate)
    {
        $this->CloseDate = $CloseDate;
    }

    /**
     * @return string
     */
    public function getOnMarketDate()
    {
        return $this->OnMarketDate;
    }

    /**
     * @param string $OnMarketDate
     */
    public function setOnMarketDate($OnMarketDate)
    {
        $this->OnMarketDate = $OnMarketDate;
    }

    /**
     * @return string
     */
    public function getOffMarketDate()
    {
        return $this->OffMarketDate;
    }

    /**
     * @param string $OffMarketDate
     */
    public function setOffMarketDate($OffMarketDate)
    {
        $this->OffMarketDate = $OffMarketDate;
    }

    /**
     * @return string
     */
    public function getPendingTimestamp()
    {
        return $this->PendingTimestamp;
    }

    /**
     * @param string $PendingTimestamp
     */
    public function setPendingTimestamp($PendingTimestamp)
    {
        $this->PendingTimestamp = $PendingTimestamp;
    }

    /**
     * @return string
     */
    public function getModificationTimestamp()
    {
        return $this->ModificationTimestamp;
    }

    /**
     * @param string $ModificationTimestamp
     */
    public function setModificationTimestamp($ModificationTimestamp)
    {
        $this->ModificationTimestamp = $ModificationTimestamp;
    }

    /**
     * @return string
     */
    public function getStatusChangeTimestamp()
    {
        return $this->StatusChangeTimestamp;
    }

    /**
     * @param string $StatusChangeTimestamp
     */
    public function setStatusChangeTimestamp($StatusChangeTimestamp)
    {
        $this->StatusChangeTimestamp = $StatusChangeTimestamp;
    }

    /**
     * @return string
     */
    public function getPriceChangeTimestamp()
    {
        return $this->PriceChangeTimestamp;
    }

    /**
     * @param string $PriceChangeTimestamp
     */
    public function setPriceChangeTimestamp($PriceChangeTimestamp)
    {
        $this->PriceChangeTimestamp = $PriceChangeTimestamp;
    }

    /**
     * @return string
     */
    public function getMajorChangeType()
    {
        return $this->MajorChangeType;
    }

    /**
     * @param string $MajorChangeType
     */
    public function setMajorChangeType($MajorChangeType)
    {
        $this->MajorChangeType = $MajorChangeType;
    }

    /**
     * @return string
     */
    public function getMajorChangeTimestamp()
    {
        return $this->MajorChangeTimestamp;
    }

    /**
     * @param string $MajorChangeTimestamp
     */
    public function setMajorChangeTimestamp($MajorChangeTimestamp)
    {
        $this->MajorChangeTimestamp = $MajorChangeTimestamp;
    }

    /**
     * @return string
     */
    public function getOriginalEntryTimestamp()
    {
        return $this->OriginalEntryTimestamp;
    }

    /**
     * @param string $OriginalEntryTimestamp
     */
    public function setOriginalEntryTimestamp($OriginalEntryTimestamp)
    {
        $this->OriginalEntryTimestamp = $OriginalEntryTimestamp;
    }

    /**
     * @return string
     */
    public function getOnMarketTimestamp()
    {
        return $this->OnMarketTimestamp;
    }

    /**
     * @param string $OnMarketTimestamp
     */
    public function setOnMarketTimestamp($OnMarketTimestamp)
    {
        $this->OnMarketTimestamp = $OnMarketTimestamp;
    }

    /**
     * @return string
     */
    public function getOffMarketTimestamp()
    {
        return $this->OffMarketTimestamp;
    }

    /**
     * @param string $OffMarketTimestamp
     */
    public function setOffMarketTimestamp($OffMarketTimestamp)
    {
        $this->OffMarketTimestamp = $OffMarketTimestamp;
    }

    /**
     * @return string
     */
    public function getDaysOnMarket()
    {
        return $this->DaysOnMarket;
    }

    /**
     * @param string $DaysOnMarket
     */
    public function setDaysOnMarket($DaysOnMarket)
    {
        $this->DaysOnMarket = $DaysOnMarket;
    }

    /**
     * @return string
     */
    public function getCumulativeDaysOnMarket()
    {
        return $this->CumulativeDaysOnMarket;
    }

    /**
     * @param string $CumulativeDaysOnMarket
     */
    public function setCumulativeDaysOnMarket($CumulativeDaysOnMarket)
    {
        $this->CumulativeDaysOnMarket = $CumulativeDaysOnMarket;
    }

    /**
     * @return string
     */
    public function getClosePrice()
    {
        return $this->ClosePrice;
    }

    /**
     * @param string $ClosePrice
     */
    public function setClosePrice($ClosePrice)
    {
        $this->ClosePrice = $ClosePrice;
    }

    /**
     * @return string
     */
    public function getListPrice()
    {
        return $this->ListPrice;
    }

    /**
     * @param string $ListPrice
     */
    public function setListPrice($ListPrice)
    {
        $this->ListPrice = $ListPrice;
    }

    /**
     * @return string
     */
    public function getOriginalListPrice()
    {
        return $this->OriginalListPrice;
    }

    /**
     * @param string $OriginalListPrice
     */
    public function setOriginalListPrice($OriginalListPrice)
    {
        $this->OriginalListPrice = $OriginalListPrice;
    }

    /**
     * @return string
     */
    public function getListPriceLow()
    {
        return $this->ListPriceLow;
    }

    /**
     * @param string $ListPriceLow
     */
    public function setListPriceLow($ListPriceLow)
    {
        $this->ListPriceLow = $ListPriceLow;
    }

    /**
     * @return string
     */
    public function getPreviousListPrice()
    {
        return $this->PreviousListPrice;
    }

    /**
     * @param string $PreviousListPrice
     */
    public function setPreviousListPrice($PreviousListPrice)
    {
        $this->PreviousListPrice = $PreviousListPrice;
    }

    /**
     * @return string
     */
    public function getBuyerAgencyCompensation()
    {
        return $this->BuyerAgencyCompensation;
    }

    /**
     * @param string $BuyerAgencyCompensation
     */
    public function setBuyerAgencyCompensation($BuyerAgencyCompensation)
    {
        $this->BuyerAgencyCompensation = $BuyerAgencyCompensation;
    }

    /**
     * @return string
     */
    public function getBuyerAgencyCompensationType()
    {
        return $this->BuyerAgencyCompensationType;
    }

    /**
     * @param string $BuyerAgencyCompensationType
     */
    public function setBuyerAgencyCompensationType($BuyerAgencyCompensationType)
    {
        $this->BuyerAgencyCompensationType = $BuyerAgencyCompensationType;
    }

    /**
     * @return string
     */
    public function getSubAgencyCompensation()
    {
        return $this->SubAgencyCompensation;
    }

    /**
     * @param string $SubAgencyCompensation
     */
    public function setSubAgencyCompensation($SubAgencyCompensation)
    {
        $this->SubAgencyCompensation = $SubAgencyCompensation;
    }

    /**
     * @return string
     */
    public function getSubAgencyCompensationType()
    {
        return $this->SubAgencyCompensationType;
    }

    /**
     * @param string $SubAgencyCompensationType
     */
    public function setSubAgencyCompensationType($SubAgencyCompensationType)
    {
        $this->SubAgencyCompensationType = $SubAgencyCompensationType;
    }

    /**
     * @return string
     */
    public function getTransactionBrokerCompensation()
    {
        return $this->TransactionBrokerCompensation;
    }

    /**
     * @param string $TransactionBrokerCompensation
     */
    public function setTransactionBrokerCompensation($TransactionBrokerCompensation)
    {
        $this->TransactionBrokerCompensation = $TransactionBrokerCompensation;
    }

    /**
     * @return string
     */
    public function getTransactionBrokerCompensationType()
    {
        return $this->TransactionBrokerCompensationType;
    }

    /**
     * @param string $TransactionBrokerCompensationType
     */
    public function setTransactionBrokerCompensationType($TransactionBrokerCompensationType)
    {
        $this->TransactionBrokerCompensationType = $TransactionBrokerCompensationType;
    }

    /**
     * @return string
     */
    public function getDualVariableCompensationYN()
    {
        return $this->DualVariableCompensationYN;
    }

    /**
     * @param string $DualVariableCompensationYN
     */
    public function setDualVariableCompensationYN($DualVariableCompensationYN)
    {
        $this->DualVariableCompensationYN = $DualVariableCompensationYN;
    }

    /**
     * @return string
     */
    public function getLeaseRenewalCompensation()
    {
        return $this->LeaseRenewalCompensation;
    }

    /**
     * @param string $LeaseRenewalCompensation
     */
    public function setLeaseRenewalCompensation($LeaseRenewalCompensation)
    {
        $this->LeaseRenewalCompensation = $LeaseRenewalCompensation;
    }

    /**
     * @return string
     */
    public function getSignOnPropertyYN()
    {
        return $this->SignOnPropertyYN;
    }

    /**
     * @param string $SignOnPropertyYN
     */
    public function setSignOnPropertyYN($SignOnPropertyYN)
    {
        $this->SignOnPropertyYN = $SignOnPropertyYN;
    }

    /**
     * @return string
     */
    public function getInternetEntireListingDisplayYN()
    {
        return $this->InternetEntireListingDisplayYN;
    }

    /**
     * @param string $InternetEntireListingDisplayYN
     */
    public function setInternetEntireListingDisplayYN($InternetEntireListingDisplayYN)
    {
        $this->InternetEntireListingDisplayYN = $InternetEntireListingDisplayYN;
    }

    /**
     * @return string
     */
    public function getInternetAddressDisplayYN()
    {
        return $this->InternetAddressDisplayYN;
    }

    /**
     * @param string $InternetAddressDisplayYN
     */
    public function setInternetAddressDisplayYN($InternetAddressDisplayYN)
    {
        $this->InternetAddressDisplayYN = $InternetAddressDisplayYN;
    }

    /**
     * @return string
     */
    public function getInternetConsumerCommentYN()
    {
        return $this->InternetConsumerCommentYN;
    }

    /**
     * @param string $InternetConsumerCommentYN
     */
    public function setInternetConsumerCommentYN($InternetConsumerCommentYN)
    {
        $this->InternetConsumerCommentYN = $InternetConsumerCommentYN;
    }

    /**
     * @return string
     */
    public function getInternetAutomatedValuationDisplayYN()
    {
        return $this->InternetAutomatedValuationDisplayYN;
    }

    /**
     * @param string $InternetAutomatedValuationDisplayYN
     */
    public function setInternetAutomatedValuationDisplayYN($InternetAutomatedValuationDisplayYN)
    {
        $this->InternetAutomatedValuationDisplayYN = $InternetAutomatedValuationDisplayYN;
    }

    /**
     * @return string
     */
    public function getSyndicateTo()
    {
        return $this->SyndicateTo;
    }

    /**
     * @param string $SyndicateTo
     */
    public function setSyndicateTo($SyndicateTo)
    {
        $this->SyndicateTo = $SyndicateTo;
    }

    /**
     * @return string
     */
    public function getPhotosCount()
    {
        return $this->PhotosCount;
    }

    /**
     * @param string $PhotosCount
     */
    public function setPhotosCount($PhotosCount)
    {
        $this->PhotosCount = $PhotosCount;
    }

    /**
     * @return string
     */
    public function getPhotosChangeTimestamp()
    {
        return $this->PhotosChangeTimestamp;
    }

    /**
     * @param string $PhotosChangeTimestamp
     */
    public function setPhotosChangeTimestamp($PhotosChangeTimestamp)
    {
        $this->PhotosChangeTimestamp = $PhotosChangeTimestamp;
    }

    /**
     * @return string
     */
    public function getVideosCount()
    {
        return $this->VideosCount;
    }

    /**
     * @param string $VideosCount
     */
    public function setVideosCount($VideosCount)
    {
        $this->VideosCount = $VideosCount;
    }

    /**
     * @return string
     */
    public function getVideosChangeTimestamp()
    {
        return $this->VideosChangeTimestamp;
    }

    /**
     * @param string $VideosChangeTimestamp
     */
    public function setVideosChangeTimestamp($VideosChangeTimestamp)
    {
        $this->VideosChangeTimestamp = $VideosChangeTimestamp;
    }

    /**
     * @return string
     */
    public function getDocumentsCount()
    {
        return $this->DocumentsCount;
    }

    /**
     * @param string $DocumentsCount
     */
    public function setDocumentsCount($DocumentsCount)
    {
        $this->DocumentsCount = $DocumentsCount;
    }

    /**
     * @return string
     */
    public function getDocumentsChangeTimestamp()
    {
        return $this->DocumentsChangeTimestamp;
    }

    /**
     * @param string $DocumentsChangeTimestamp
     */
    public function setDocumentsChangeTimestamp($DocumentsChangeTimestamp)
    {
        $this->DocumentsChangeTimestamp = $DocumentsChangeTimestamp;
    }

    /**
     * @return string
     */
    public function getDocumentsAvailable()
    {
        return $this->DocumentsAvailable;
    }

    /**
     * @param string $DocumentsAvailable
     */
    public function setDocumentsAvailable($DocumentsAvailable)
    {
        $this->DocumentsAvailable = $DocumentsAvailable;
    }

    /**
     * @return string
     */
    public function getVirtualTourURLUnbranded()
    {
        return $this->VirtualTourURLUnbranded;
    }

    /**
     * @param string $VirtualTourURLUnbranded
     */
    public function setVirtualTourURLUnbranded($VirtualTourURLUnbranded)
    {
        $this->VirtualTourURLUnbranded = $VirtualTourURLUnbranded;
    }

    /**
     * @return string
     */
    public function getVirtualTourURLBranded()
    {
        return $this->VirtualTourURLBranded;
    }

    /**
     * @param string $VirtualTourURLBranded
     */
    public function setVirtualTourURLBranded($VirtualTourURLBranded)
    {
        $this->VirtualTourURLBranded = $VirtualTourURLBranded;
    }

    /**
     * @return string
     */
    public function getPublicRemarks()
    {
        return $this->PublicRemarks;
    }

    /**
     * @param string $PublicRemarks
     */
    public function setPublicRemarks($PublicRemarks)
    {
        $this->PublicRemarks = $PublicRemarks;
    }

    /**
     * @return string
     */
    public function getSyndicationRemarks()
    {
        return $this->SyndicationRemarks;
    }

    /**
     * @param string $SyndicationRemarks
     */
    public function setSyndicationRemarks($SyndicationRemarks)
    {
        $this->SyndicationRemarks = $SyndicationRemarks;
    }

    /**
     * @return string
     */
    public function getPrivateRemarks()
    {
        return $this->PrivateRemarks;
    }

    /**
     * @param string $PrivateRemarks
     */
    public function setPrivateRemarks($PrivateRemarks)
    {
        $this->PrivateRemarks = $PrivateRemarks;
    }

    /**
     * @return string
     */
    public function getPrivateOfficeRemarks()
    {
        return $this->PrivateOfficeRemarks;
    }

    /**
     * @param string $PrivateOfficeRemarks
     */
    public function setPrivateOfficeRemarks($PrivateOfficeRemarks)
    {
        $this->PrivateOfficeRemarks = $PrivateOfficeRemarks;
    }

    /**
     * @return string
     */
    public function getShowingInstructions()
    {
        return $this->ShowingInstructions;
    }

    /**
     * @param string $ShowingInstructions
     */
    public function setShowingInstructions($ShowingInstructions)
    {
        $this->ShowingInstructions = $ShowingInstructions;
    }

    /**
     * @return string
     */
    public function getShowingContactPhone()
    {
        return $this->ShowingContactPhone;
    }

    /**
     * @param string $ShowingContactPhone
     */
    public function setShowingContactPhone($ShowingContactPhone)
    {
        $this->ShowingContactPhone = $ShowingContactPhone;
    }

    /**
     * @return string
     */
    public function getShowingContactPhoneExt()
    {
        return $this->ShowingContactPhoneExt;
    }

    /**
     * @param string $ShowingContactPhoneExt
     */
    public function setShowingContactPhoneExt($ShowingContactPhoneExt)
    {
        $this->ShowingContactPhoneExt = $ShowingContactPhoneExt;
    }

    /**
     * @return string
     */
    public function getShowingContactName()
    {
        return $this->ShowingContactName;
    }

    /**
     * @param string $ShowingContactName
     */
    public function setShowingContactName($ShowingContactName)
    {
        $this->ShowingContactName = $ShowingContactName;
    }

    /**
     * @return string
     */
    public function getShowingContactType()
    {
        return $this->ShowingContactType;
    }

    /**
     * @param string $ShowingContactType
     */
    public function setShowingContactType($ShowingContactType)
    {
        $this->ShowingContactType = $ShowingContactType;
    }

    /**
     * @return string
     */
    public function getLockBoxLocation()
    {
        return $this->LockBoxLocation;
    }

    /**
     * @param string $LockBoxLocation
     */
    public function setLockBoxLocation($LockBoxLocation)
    {
        $this->LockBoxLocation = $LockBoxLocation;
    }

    /**
     * @return string
     */
    public function getLockBoxType()
    {
        return $this->LockBoxType;
    }

    /**
     * @param string $LockBoxType
     */
    public function setLockBoxType($LockBoxType)
    {
        $this->LockBoxType = $LockBoxType;
    }

    /**
     * @return string
     */
    public function getLockBoxSerialNumber()
    {
        return $this->LockBoxSerialNumber;
    }

    /**
     * @param string $LockBoxSerialNumber
     */
    public function setLockBoxSerialNumber($LockBoxSerialNumber)
    {
        $this->LockBoxSerialNumber = $LockBoxSerialNumber;
    }

    /**
     * @return string
     */
    public function getAccessCode()
    {
        return $this->AccessCode;
    }

    /**
     * @param string $AccessCode
     */
    public function setAccessCode($AccessCode)
    {
        $this->AccessCode = $AccessCode;
    }

    /**
     * @return string
     */
    public function getExclusions()
    {
        return $this->Exclusions;
    }

    /**
     * @param string $Exclusions
     */
    public function setExclusions($Exclusions)
    {
        $this->Exclusions = $Exclusions;
    }

    /**
     * @return string
     */
    public function getInclusions()
    {
        return $this->Inclusions;
    }

    /**
     * @param string $Inclusions
     */
    public function setInclusions($Inclusions)
    {
        $this->Inclusions = $Inclusions;
    }

    /**
     * @return string
     */
    public function getDisclosures()
    {
        return $this->Disclosures;
    }

    /**
     * @param string $Disclosures
     */
    public function setDisclosures($Disclosures)
    {
        $this->Disclosures = $Disclosures;
    }

    /**
     * @return string
     */
    public function getOwnership()
    {
        return $this->Ownership;
    }

    /**
     * @param string $Ownership
     */
    public function setOwnership($Ownership)
    {
        $this->Ownership = $Ownership;
    }

    /**
     * @return string
     */
    public function getSpecialListingConditions()
    {
        return $this->SpecialListingConditions;
    }

    /**
     * @param string $SpecialListingConditions
     */
    public function setSpecialListingConditions($SpecialListingConditions)
    {
        $this->SpecialListingConditions = $SpecialListingConditions;
    }

    /**
     * @return string
     */
    public function getListingTerms()
    {
        return $this->ListingTerms;
    }

    /**
     * @param string $ListingTerms
     */
    public function setListingTerms($ListingTerms)
    {
        $this->ListingTerms = $ListingTerms;
    }

    /**
     * @return string
     */
    public function getCurrentFinancing()
    {
        return $this->CurrentFinancing;
    }

    /**
     * @param string $CurrentFinancing
     */
    public function setCurrentFinancing($CurrentFinancing)
    {
        $this->CurrentFinancing = $CurrentFinancing;
    }

    /**
     * @return string
     */
    public function getBuyerFinancing()
    {
        return $this->BuyerFinancing;
    }

    /**
     * @param string $BuyerFinancing
     */
    public function setBuyerFinancing($BuyerFinancing)
    {
        $this->BuyerFinancing = $BuyerFinancing;
    }

    /**
     * @return string
     */
    public function getConcessions()
    {
        return $this->Concessions;
    }

    /**
     * @param string $Concessions
     */
    public function setConcessions($Concessions)
    {
        $this->Concessions = $Concessions;
    }

    /**
     * @return string
     */
    public function getConcessionsComments()
    {
        return $this->ConcessionsComments;
    }

    /**
     * @param string $ConcessionsComments
     */
    public function setConcessionsComments($ConcessionsComments)
    {
        $this->ConcessionsComments = $ConcessionsComments;
    }

    /**
     * @return string
     */
    public function getConcessionsAmount()
    {
        return $this->ConcessionsAmount;
    }

    /**
     * @param string $ConcessionsAmount
     */
    public function setConcessionsAmount($ConcessionsAmount)
    {
        $this->ConcessionsAmount = $ConcessionsAmount;
    }

    /**
     * @return string
     */
    public function getContingency()
    {
        return $this->Contingency;
    }

    /**
     * @param string $Contingency
     */
    public function setContingency($Contingency)
    {
        $this->Contingency = $Contingency;
    }

    /**
     * @return string
     */
    public function getPossession()
    {
        return $this->Possession;
    }

    /**
     * @param string $Possession
     */
    public function setPossession($Possession)
    {
        $this->Possession = $Possession;
    }

    /**
     * @return string
     */
    public function getAvailabilityDate()
    {
        return $this->AvailabilityDate;
    }

    /**
     * @param string $AvailabilityDate
     */
    public function setAvailabilityDate($AvailabilityDate)
    {
        $this->AvailabilityDate = $AvailabilityDate;
    }

    /**
     * @return string
     */
    public function getStreetNumber()
    {
        return $this->StreetNumber;
    }

    /**
     * @param string $StreetNumber
     */
    public function setStreetNumber($StreetNumber)
    {
        $this->StreetNumber = $StreetNumber;
    }

    /**
     * @return string
     */
    public function getStreetNumberNumeric()
    {
        return $this->StreetNumberNumeric;
    }

    /**
     * @param string $StreetNumberNumeric
     */
    public function setStreetNumberNumeric($StreetNumberNumeric)
    {
        $this->StreetNumberNumeric = $StreetNumberNumeric;
    }

    /**
     * @return string
     */
    public function getStreetDirPrefix()
    {
        return $this->StreetDirPrefix;
    }

    /**
     * @param string $StreetDirPrefix
     */
    public function setStreetDirPrefix($StreetDirPrefix)
    {
        $this->StreetDirPrefix = $StreetDirPrefix;
    }

    /**
     * @return string
     */
    public function getStreetName()
    {
        return $this->StreetName;
    }

    /**
     * @param string $StreetName
     */
    public function setStreetName($StreetName)
    {
        $this->StreetName = $StreetName;
    }

    /**
     * @return string
     */
    public function getStreetAdditionalInfo()
    {
        return $this->StreetAdditionalInfo;
    }

    /**
     * @param string $StreetAdditionalInfo
     */
    public function setStreetAdditionalInfo($StreetAdditionalInfo)
    {
        $this->StreetAdditionalInfo = $StreetAdditionalInfo;
    }

    /**
     * @return string
     */
    public function getStreetSuffix()
    {
        return $this->StreetSuffix;
    }

    /**
     * @param string $StreetSuffix
     */
    public function setStreetSuffix($StreetSuffix)
    {
        $this->StreetSuffix = $StreetSuffix;
    }

    /**
     * @return string
     */
    public function getStreetSuffixModifier()
    {
        return $this->StreetSuffixModifier;
    }

    /**
     * @param string $StreetSuffixModifier
     */
    public function setStreetSuffixModifier($StreetSuffixModifier)
    {
        $this->StreetSuffixModifier = $StreetSuffixModifier;
    }

    /**
     * @return string
     */
    public function getStreetDirSuffix()
    {
        return $this->StreetDirSuffix;
    }

    /**
     * @param string $StreetDirSuffix
     */
    public function setStreetDirSuffix($StreetDirSuffix)
    {
        $this->StreetDirSuffix = $StreetDirSuffix;
    }

    /**
     * @return string
     */
    public function getUnitNumber()
    {
        return $this->UnitNumber;
    }

    /**
     * @param string $UnitNumber
     */
    public function setUnitNumber($UnitNumber)
    {
        $this->UnitNumber = $UnitNumber;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $City
     */
    public function setCity($City)
    {
        $this->City = $City;
    }

    /**
     * @return string
     */
    public function getStateOrProvince()
    {
        return $this->StateOrProvince;
    }

    /**
     * @param string $StateOrProvince
     */
    public function setStateOrProvince($StateOrProvince)
    {
        $this->StateOrProvince = $StateOrProvince;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * @param string $Country
     */
    public function setCountry($Country)
    {
        $this->Country = $Country;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     */
    public function setPostalCode($PostalCode)
    {
        $this->PostalCode = $PostalCode;
    }

    /**
     * @return string
     */
    public function getPostalCodePlus4()
    {
        return $this->PostalCodePlus4;
    }

    /**
     * @param string $PostalCodePlus4
     */
    public function setPostalCodePlus4($PostalCodePlus4)
    {
        $this->PostalCodePlus4 = $PostalCodePlus4;
    }

    /**
     * @return string
     */
    public function getCarrierRoute()
    {
        return $this->CarrierRoute;
    }

    /**
     * @param string $CarrierRoute
     */
    public function setCarrierRoute($CarrierRoute)
    {
        $this->CarrierRoute = $CarrierRoute;
    }

    /**
     * @return string
     */
    public function getUnparsedAddress()
    {
        return $this->UnparsedAddress;
    }

    /**
     * @param string $UnparsedAddress
     */
    public function setUnparsedAddress($UnparsedAddress)
    {
        $this->UnparsedAddress = $UnparsedAddress;
    }

    /**
     * @return string
     */
    public function getPostalCity()
    {
        return $this->PostalCity;
    }

    /**
     * @param string $PostalCity
     */
    public function setPostalCity($PostalCity)
    {
        $this->PostalCity = $PostalCity;
    }

    /**
     * @return string
     */
    public function getCountyOrParish()
    {
        return $this->CountyOrParish;
    }

    /**
     * @param string $CountyOrParish
     */
    public function setCountyOrParish($CountyOrParish)
    {
        $this->CountyOrParish = $CountyOrParish;
    }

    /**
     * @return string
     */
    public function getTownship()
    {
        return $this->Township;
    }

    /**
     * @param string $Township
     */
    public function setTownship($Township)
    {
        $this->Township = $Township;
    }

    /**
     * @return string
     */
    public function getMLSAreaMajor()
    {
        return $this->MLSAreaMajor;
    }

    /**
     * @param string $MLSAreaMajor
     */
    public function setMLSAreaMajor($MLSAreaMajor)
    {
        $this->MLSAreaMajor = $MLSAreaMajor;
    }

    /**
     * @return string
     */
    public function getMLSAreaMinor()
    {
        return $this->MLSAreaMinor;
    }

    /**
     * @param string $MLSAreaMinor
     */
    public function setMLSAreaMinor($MLSAreaMinor)
    {
        $this->MLSAreaMinor = $MLSAreaMinor;
    }

    /**
     * @return string
     */
    public function getSubdivisionName()
    {
        return $this->SubdivisionName;
    }

    /**
     * @param string $SubdivisionName
     */
    public function setSubdivisionName($SubdivisionName)
    {
        $this->SubdivisionName = $SubdivisionName;
    }

    /**
     * @return string
     */
    public function getLatitude()
    {
        return $this->Latitude;
    }

    /**
     * @param string $Latitude
     */
    public function setLatitude($Latitude)
    {
        $this->Latitude = $Latitude;
    }

    /**
     * @return string
     */
    public function getLongitude()
    {
        return $this->Longitude;
    }

    /**
     * @param string $Longitude
     */
    public function setLongitude($Longitude)
    {
        $this->Longitude = $Longitude;
    }

    /**
     * @return string
     */
    public function getElevation()
    {
        return $this->Elevation;
    }

    /**
     * @param string $Elevation
     */
    public function setElevation($Elevation)
    {
        $this->Elevation = $Elevation;
    }

    /**
     * @return string
     */
    public function getElevationUnits()
    {
        return $this->ElevationUnits;
    }

    /**
     * @param string $ElevationUnits
     */
    public function setElevationUnits($ElevationUnits)
    {
        $this->ElevationUnits = $ElevationUnits;
    }

    /**
     * @return string
     */
    public function getDirections()
    {
        return $this->Directions;
    }

    /**
     * @param string $Directions
     */
    public function setDirections($Directions)
    {
        $this->Directions = $Directions;
    }

    /**
     * @return string
     */
    public function getMapCoordinate()
    {
        return $this->MapCoordinate;
    }

    /**
     * @param string $MapCoordinate
     */
    public function setMapCoordinate($MapCoordinate)
    {
        $this->MapCoordinate = $MapCoordinate;
    }

    /**
     * @return string
     */
    public function getMapCoordinateSource()
    {
        return $this->MapCoordinateSource;
    }

    /**
     * @param string $MapCoordinateSource
     */
    public function setMapCoordinateSource($MapCoordinateSource)
    {
        $this->MapCoordinateSource = $MapCoordinateSource;
    }

    /**
     * @return string
     */
    public function getMapURL()
    {
        return $this->MapURL;
    }

    /**
     * @param string $MapURL
     */
    public function setMapURL($MapURL)
    {
        $this->MapURL = $MapURL;
    }

    /**
     * @return string
     */
    public function getCrossStreet()
    {
        return $this->CrossStreet;
    }

    /**
     * @param string $CrossStreet
     */
    public function setCrossStreet($CrossStreet)
    {
        $this->CrossStreet = $CrossStreet;
    }

    /**
     * @return string
     */
    public function getElementarySchool()
    {
        return $this->ElementarySchool;
    }

    /**
     * @param string $ElementarySchool
     */
    public function setElementarySchool($ElementarySchool)
    {
        $this->ElementarySchool = $ElementarySchool;
    }

    /**
     * @return string
     */
    public function getElementarySchoolDistrict()
    {
        return $this->ElementarySchoolDistrict;
    }

    /**
     * @param string $ElementarySchoolDistrict
     */
    public function setElementarySchoolDistrict($ElementarySchoolDistrict)
    {
        $this->ElementarySchoolDistrict = $ElementarySchoolDistrict;
    }

    /**
     * @return string
     */
    public function getMiddleOrJuniorSchool()
    {
        return $this->MiddleOrJuniorSchool;
    }

    /**
     * @param string $MiddleOrJuniorSchool
     */
    public function setMiddleOrJuniorSchool($MiddleOrJuniorSchool)
    {
        $this->MiddleOrJuniorSchool = $MiddleOrJuniorSchool;
    }

    /**
     * @return string
     */
    public function getMiddleOrJuniorSchoolDistrict()
    {
        return $this->MiddleOrJuniorSchoolDistrict;
    }

    /**
     * @param string $MiddleOrJuniorSchoolDistrict
     */
    public function setMiddleOrJuniorSchoolDistrict($MiddleOrJuniorSchoolDistrict)
    {
        $this->MiddleOrJuniorSchoolDistrict = $MiddleOrJuniorSchoolDistrict;
    }

    /**
     * @return string
     */
    public function getHighSchool()
    {
        return $this->HighSchool;
    }

    /**
     * @param string $HighSchool
     */
    public function setHighSchool($HighSchool)
    {
        $this->HighSchool = $HighSchool;
    }

    /**
     * @return string
     */
    public function getHighSchoolDistrict()
    {
        return $this->HighSchoolDistrict;
    }

    /**
     * @param string $HighSchoolDistrict
     */
    public function setHighSchoolDistrict($HighSchoolDistrict)
    {
        $this->HighSchoolDistrict = $HighSchoolDistrict;
    }

    /**
     * @return string
     */
    public function getListAgentNamePrefix()
    {
        return $this->ListAgentNamePrefix;
    }

    /**
     * @param string $ListAgentNamePrefix
     */
    public function setListAgentNamePrefix($ListAgentNamePrefix)
    {
        $this->ListAgentNamePrefix = $ListAgentNamePrefix;
    }

    /**
     * @return string
     */
    public function getListAgentFirstName()
    {
        return $this->ListAgentFirstName;
    }

    /**
     * @param string $ListAgentFirstName
     */
    public function setListAgentFirstName($ListAgentFirstName)
    {
        $this->ListAgentFirstName = $ListAgentFirstName;
    }

    /**
     * @return string
     */
    public function getListAgentMiddleName()
    {
        return $this->ListAgentMiddleName;
    }

    /**
     * @param string $ListAgentMiddleName
     */
    public function setListAgentMiddleName($ListAgentMiddleName)
    {
        $this->ListAgentMiddleName = $ListAgentMiddleName;
    }

    /**
     * @return string
     */
    public function getListAgentLastName()
    {
        return $this->ListAgentLastName;
    }

    /**
     * @param string $ListAgentLastName
     */
    public function setListAgentLastName($ListAgentLastName)
    {
        $this->ListAgentLastName = $ListAgentLastName;
    }

    /**
     * @return string
     */
    public function getListAgentNameSuffix()
    {
        return $this->ListAgentNameSuffix;
    }

    /**
     * @param string $ListAgentNameSuffix
     */
    public function setListAgentNameSuffix($ListAgentNameSuffix)
    {
        $this->ListAgentNameSuffix = $ListAgentNameSuffix;
    }

    /**
     * @return string
     */
    public function getListAgentFullName()
    {
        return $this->ListAgentFullName;
    }

    /**
     * @param string $ListAgentFullName
     */
    public function setListAgentFullName($ListAgentFullName)
    {
        $this->ListAgentFullName = $ListAgentFullName;
    }

    /**
     * @return string
     */
    public function getListAgentPreferredPhone()
    {
        return $this->ListAgentPreferredPhone;
    }

    /**
     * @param string $ListAgentPreferredPhone
     */
    public function setListAgentPreferredPhone($ListAgentPreferredPhone)
    {
        $this->ListAgentPreferredPhone = $ListAgentPreferredPhone;
    }

    /**
     * @return string
     */
    public function getListAgentPreferredPhoneExt()
    {
        return $this->ListAgentPreferredPhoneExt;
    }

    /**
     * @param string $ListAgentPreferredPhoneExt
     */
    public function setListAgentPreferredPhoneExt($ListAgentPreferredPhoneExt)
    {
        $this->ListAgentPreferredPhoneExt = $ListAgentPreferredPhoneExt;
    }

    /**
     * @return string
     */
    public function getListAgentOfficePhone()
    {
        return $this->ListAgentOfficePhone;
    }

    /**
     * @param string $ListAgentOfficePhone
     */
    public function setListAgentOfficePhone($ListAgentOfficePhone)
    {
        $this->ListAgentOfficePhone = $ListAgentOfficePhone;
    }

    /**
     * @return string
     */
    public function getListAgentOfficePhoneExt()
    {
        return $this->ListAgentOfficePhoneExt;
    }

    /**
     * @param string $ListAgentOfficePhoneExt
     */
    public function setListAgentOfficePhoneExt($ListAgentOfficePhoneExt)
    {
        $this->ListAgentOfficePhoneExt = $ListAgentOfficePhoneExt;
    }

    /**
     * @return string
     */
    public function getListAgentCellPhone()
    {
        return $this->ListAgentCellPhone;
    }

    /**
     * @param string $ListAgentCellPhone
     */
    public function setListAgentCellPhone($ListAgentCellPhone)
    {
        $this->ListAgentCellPhone = $ListAgentCellPhone;
    }

    /**
     * @return string
     */
    public function getListAgentDirectPhone()
    {
        return $this->ListAgentDirectPhone;
    }

    /**
     * @param string $ListAgentDirectPhone
     */
    public function setListAgentDirectPhone($ListAgentDirectPhone)
    {
        $this->ListAgentDirectPhone = $ListAgentDirectPhone;
    }

    /**
     * @return string
     */
    public function getListAgentHomePhone()
    {
        return $this->ListAgentHomePhone;
    }

    /**
     * @param string $ListAgentHomePhone
     */
    public function setListAgentHomePhone($ListAgentHomePhone)
    {
        $this->ListAgentHomePhone = $ListAgentHomePhone;
    }

    /**
     * @return string
     */
    public function getListAgentFax()
    {
        return $this->ListAgentFax;
    }

    /**
     * @param string $ListAgentFax
     */
    public function setListAgentFax($ListAgentFax)
    {
        $this->ListAgentFax = $ListAgentFax;
    }

    /**
     * @return string
     */
    public function getListAgentPager()
    {
        return $this->ListAgentPager;
    }

    /**
     * @param string $ListAgentPager
     */
    public function setListAgentPager($ListAgentPager)
    {
        $this->ListAgentPager = $ListAgentPager;
    }

    /**
     * @return string
     */
    public function getListAgentVoiceMail()
    {
        return $this->ListAgentVoiceMail;
    }

    /**
     * @param string $ListAgentVoiceMail
     */
    public function setListAgentVoiceMail($ListAgentVoiceMail)
    {
        $this->ListAgentVoiceMail = $ListAgentVoiceMail;
    }

    /**
     * @return string
     */
    public function getListAgentVoiceMailExt()
    {
        return $this->ListAgentVoiceMailExt;
    }

    /**
     * @param string $ListAgentVoiceMailExt
     */
    public function setListAgentVoiceMailExt($ListAgentVoiceMailExt)
    {
        $this->ListAgentVoiceMailExt = $ListAgentVoiceMailExt;
    }

    /**
     * @return string
     */
    public function getListAgentTollFreePhone()
    {
        return $this->ListAgentTollFreePhone;
    }

    /**
     * @param string $ListAgentTollFreePhone
     */
    public function setListAgentTollFreePhone($ListAgentTollFreePhone)
    {
        $this->ListAgentTollFreePhone = $ListAgentTollFreePhone;
    }

    /**
     * @return string
     */
    public function getListAgentEmail()
    {
        return $this->ListAgentEmail;
    }

    /**
     * @param string $ListAgentEmail
     */
    public function setListAgentEmail($ListAgentEmail)
    {
        $this->ListAgentEmail = $ListAgentEmail;
    }

    /**
     * @return string
     */
    public function getListAgentURL()
    {
        return $this->ListAgentURL;
    }

    /**
     * @param string $ListAgentURL
     */
    public function setListAgentURL($ListAgentURL)
    {
        $this->ListAgentURL = $ListAgentURL;
    }

    /**
     * @return string
     */
    public function getListAgentKey()
    {
        return $this->ListAgentKey;
    }

    /**
     * @param string $ListAgentKey
     */
    public function setListAgentKey($ListAgentKey)
    {
        $this->ListAgentKey = $ListAgentKey;
    }

    /**
     * @return string
     */
    public function getListAgentAOR()
    {
        return $this->ListAgentAOR;
    }

    /**
     * @param string $ListAgentAOR
     */
    public function setListAgentAOR($ListAgentAOR)
    {
        $this->ListAgentAOR = $ListAgentAOR;
    }

    /**
     * @return string
     */
    public function getListAgentMlsId()
    {
        return $this->ListAgentMlsId;
    }

    /**
     * @param string $ListAgentMlsId
     */
    public function setListAgentMlsId($ListAgentMlsId)
    {
        $this->ListAgentMlsId = $ListAgentMlsId;
    }

    /**
     * @return string
     */
    public function getListAgentStateLicense()
    {
        return $this->ListAgentStateLicense;
    }

    /**
     * @param string $ListAgentStateLicense
     */
    public function setListAgentStateLicense($ListAgentStateLicense)
    {
        $this->ListAgentStateLicense = $ListAgentStateLicense;
    }

    /**
     * @return string
     */
    public function getListAgentDesignation()
    {
        return $this->ListAgentDesignation;
    }

    /**
     * @param string $ListAgentDesignation
     */
    public function setListAgentDesignation($ListAgentDesignation)
    {
        $this->ListAgentDesignation = $ListAgentDesignation;
    }

    /**
     * @return string
     */
    public function getListOfficeName()
    {
        return $this->ListOfficeName;
    }

    /**
     * @param string $ListOfficeName
     */
    public function setListOfficeName($ListOfficeName)
    {
        $this->ListOfficeName = $ListOfficeName;
    }

    /**
     * @return string
     */
    public function getListOfficePhone()
    {
        return $this->ListOfficePhone;
    }

    /**
     * @param string $ListOfficePhone
     */
    public function setListOfficePhone($ListOfficePhone)
    {
        $this->ListOfficePhone = $ListOfficePhone;
    }

    /**
     * @return string
     */
    public function getListOfficePhoneExt()
    {
        return $this->ListOfficePhoneExt;
    }

    /**
     * @param string $ListOfficePhoneExt
     */
    public function setListOfficePhoneExt($ListOfficePhoneExt)
    {
        $this->ListOfficePhoneExt = $ListOfficePhoneExt;
    }

    /**
     * @return string
     */
    public function getListOfficeFax()
    {
        return $this->ListOfficeFax;
    }

    /**
     * @param string $ListOfficeFax
     */
    public function setListOfficeFax($ListOfficeFax)
    {
        $this->ListOfficeFax = $ListOfficeFax;
    }

    /**
     * @return string
     */
    public function getListOfficeEmail()
    {
        return $this->ListOfficeEmail;
    }

    /**
     * @param string $ListOfficeEmail
     */
    public function setListOfficeEmail($ListOfficeEmail)
    {
        $this->ListOfficeEmail = $ListOfficeEmail;
    }

    /**
     * @return string
     */
    public function getListOfficeURL()
    {
        return $this->ListOfficeURL;
    }

    /**
     * @param string $ListOfficeURL
     */
    public function setListOfficeURL($ListOfficeURL)
    {
        $this->ListOfficeURL = $ListOfficeURL;
    }

    /**
     * @return string
     */
    public function getListOfficeKey()
    {
        return $this->ListOfficeKey;
    }

    /**
     * @param string $ListOfficeKey
     */
    public function setListOfficeKey($ListOfficeKey)
    {
        $this->ListOfficeKey = $ListOfficeKey;
    }

    /**
     * @return string
     */
    public function getListOfficeAOR()
    {
        return $this->ListOfficeAOR;
    }

    /**
     * @param string $ListOfficeAOR
     */
    public function setListOfficeAOR($ListOfficeAOR)
    {
        $this->ListOfficeAOR = $ListOfficeAOR;
    }

    /**
     * @return string
     */
    public function getListOfficeMlsId()
    {
        return $this->ListOfficeMlsId;
    }

    /**
     * @param string $ListOfficeMlsId
     */
    public function setListOfficeMlsId($ListOfficeMlsId)
    {
        $this->ListOfficeMlsId = $ListOfficeMlsId;
    }

    /**
     * @return string
     */
    public function getCoListAgentNamePrefix()
    {
        return $this->CoListAgentNamePrefix;
    }

    /**
     * @param string $CoListAgentNamePrefix
     */
    public function setCoListAgentNamePrefix($CoListAgentNamePrefix)
    {
        $this->CoListAgentNamePrefix = $CoListAgentNamePrefix;
    }

    /**
     * @return string
     */
    public function getCoListAgentFirstName()
    {
        return $this->CoListAgentFirstName;
    }

    /**
     * @param string $CoListAgentFirstName
     */
    public function setCoListAgentFirstName($CoListAgentFirstName)
    {
        $this->CoListAgentFirstName = $CoListAgentFirstName;
    }

    /**
     * @return string
     */
    public function getCoListAgentMiddleName()
    {
        return $this->CoListAgentMiddleName;
    }

    /**
     * @param string $CoListAgentMiddleName
     */
    public function setCoListAgentMiddleName($CoListAgentMiddleName)
    {
        $this->CoListAgentMiddleName = $CoListAgentMiddleName;
    }

    /**
     * @return string
     */
    public function getCoListAgentLastName()
    {
        return $this->CoListAgentLastName;
    }

    /**
     * @param string $CoListAgentLastName
     */
    public function setCoListAgentLastName($CoListAgentLastName)
    {
        $this->CoListAgentLastName = $CoListAgentLastName;
    }

    /**
     * @return string
     */
    public function getCoListAgentNameSuffix()
    {
        return $this->CoListAgentNameSuffix;
    }

    /**
     * @param string $CoListAgentNameSuffix
     */
    public function setCoListAgentNameSuffix($CoListAgentNameSuffix)
    {
        $this->CoListAgentNameSuffix = $CoListAgentNameSuffix;
    }

    /**
     * @return string
     */
    public function getCoListAgentFullName()
    {
        return $this->CoListAgentFullName;
    }

    /**
     * @param string $CoListAgentFullName
     */
    public function setCoListAgentFullName($CoListAgentFullName)
    {
        $this->CoListAgentFullName = $CoListAgentFullName;
    }

    /**
     * @return string
     */
    public function getCoListAgentPreferredPhone()
    {
        return $this->CoListAgentPreferredPhone;
    }

    /**
     * @param string $CoListAgentPreferredPhone
     */
    public function setCoListAgentPreferredPhone($CoListAgentPreferredPhone)
    {
        $this->CoListAgentPreferredPhone = $CoListAgentPreferredPhone;
    }

    /**
     * @return string
     */
    public function getCoListAgentPreferredPhoneExt()
    {
        return $this->CoListAgentPreferredPhoneExt;
    }

    /**
     * @param string $CoListAgentPreferredPhoneExt
     */
    public function setCoListAgentPreferredPhoneExt($CoListAgentPreferredPhoneExt)
    {
        $this->CoListAgentPreferredPhoneExt = $CoListAgentPreferredPhoneExt;
    }

    /**
     * @return string
     */
    public function getCoListAgentOfficePhone()
    {
        return $this->CoListAgentOfficePhone;
    }

    /**
     * @param string $CoListAgentOfficePhone
     */
    public function setCoListAgentOfficePhone($CoListAgentOfficePhone)
    {
        $this->CoListAgentOfficePhone = $CoListAgentOfficePhone;
    }

    /**
     * @return string
     */
    public function getCoListAgentOfficePhoneExt()
    {
        return $this->CoListAgentOfficePhoneExt;
    }

    /**
     * @param string $CoListAgentOfficePhoneExt
     */
    public function setCoListAgentOfficePhoneExt($CoListAgentOfficePhoneExt)
    {
        $this->CoListAgentOfficePhoneExt = $CoListAgentOfficePhoneExt;
    }

    /**
     * @return string
     */
    public function getCoListAgentCellPhone()
    {
        return $this->CoListAgentCellPhone;
    }

    /**
     * @param string $CoListAgentCellPhone
     */
    public function setCoListAgentCellPhone($CoListAgentCellPhone)
    {
        $this->CoListAgentCellPhone = $CoListAgentCellPhone;
    }

    /**
     * @return string
     */
    public function getCoListAgentDirectPhone()
    {
        return $this->CoListAgentDirectPhone;
    }

    /**
     * @param string $CoListAgentDirectPhone
     */
    public function setCoListAgentDirectPhone($CoListAgentDirectPhone)
    {
        $this->CoListAgentDirectPhone = $CoListAgentDirectPhone;
    }

    /**
     * @return string
     */
    public function getCoListAgentHomePhone()
    {
        return $this->CoListAgentHomePhone;
    }

    /**
     * @param string $CoListAgentHomePhone
     */
    public function setCoListAgentHomePhone($CoListAgentHomePhone)
    {
        $this->CoListAgentHomePhone = $CoListAgentHomePhone;
    }

    /**
     * @return string
     */
    public function getCoListAgentFax()
    {
        return $this->CoListAgentFax;
    }

    /**
     * @param string $CoListAgentFax
     */
    public function setCoListAgentFax($CoListAgentFax)
    {
        $this->CoListAgentFax = $CoListAgentFax;
    }

    /**
     * @return string
     */
    public function getCoListAgentPager()
    {
        return $this->CoListAgentPager;
    }

    /**
     * @param string $CoListAgentPager
     */
    public function setCoListAgentPager($CoListAgentPager)
    {
        $this->CoListAgentPager = $CoListAgentPager;
    }

    /**
     * @return string
     */
    public function getCoListAgentVoiceMail()
    {
        return $this->CoListAgentVoiceMail;
    }

    /**
     * @param string $CoListAgentVoiceMail
     */
    public function setCoListAgentVoiceMail($CoListAgentVoiceMail)
    {
        $this->CoListAgentVoiceMail = $CoListAgentVoiceMail;
    }

    /**
     * @return string
     */
    public function getCoListAgentVoiceMailExt()
    {
        return $this->CoListAgentVoiceMailExt;
    }

    /**
     * @param string $CoListAgentVoiceMailExt
     */
    public function setCoListAgentVoiceMailExt($CoListAgentVoiceMailExt)
    {
        $this->CoListAgentVoiceMailExt = $CoListAgentVoiceMailExt;
    }

    /**
     * @return string
     */
    public function getCoListAgentTollFreePhone()
    {
        return $this->CoListAgentTollFreePhone;
    }

    /**
     * @param string $CoListAgentTollFreePhone
     */
    public function setCoListAgentTollFreePhone($CoListAgentTollFreePhone)
    {
        $this->CoListAgentTollFreePhone = $CoListAgentTollFreePhone;
    }

    /**
     * @return string
     */
    public function getCoListAgentEmail()
    {
        return $this->CoListAgentEmail;
    }

    /**
     * @param string $CoListAgentEmail
     */
    public function setCoListAgentEmail($CoListAgentEmail)
    {
        $this->CoListAgentEmail = $CoListAgentEmail;
    }

    /**
     * @return string
     */
    public function getCoListAgentURL()
    {
        return $this->CoListAgentURL;
    }

    /**
     * @param string $CoListAgentURL
     */
    public function setCoListAgentURL($CoListAgentURL)
    {
        $this->CoListAgentURL = $CoListAgentURL;
    }

    /**
     * @return string
     */
    public function getCoListAgentKey()
    {
        return $this->CoListAgentKey;
    }

    /**
     * @param string $CoListAgentKey
     */
    public function setCoListAgentKey($CoListAgentKey)
    {
        $this->CoListAgentKey = $CoListAgentKey;
    }

    /**
     * @return string
     */
    public function getCoListAgentAOR()
    {
        return $this->CoListAgentAOR;
    }

    /**
     * @param string $CoListAgentAOR
     */
    public function setCoListAgentAOR($CoListAgentAOR)
    {
        $this->CoListAgentAOR = $CoListAgentAOR;
    }

    /**
     * @return string
     */
    public function getCoListAgentMlsId()
    {
        return $this->CoListAgentMlsId;
    }

    /**
     * @param string $CoListAgentMlsId
     */
    public function setCoListAgentMlsId($CoListAgentMlsId)
    {
        $this->CoListAgentMlsId = $CoListAgentMlsId;
    }

    /**
     * @return string
     */
    public function getCoListAgentStateLicense()
    {
        return $this->CoListAgentStateLicense;
    }

    /**
     * @param string $CoListAgentStateLicense
     */
    public function setCoListAgentStateLicense($CoListAgentStateLicense)
    {
        $this->CoListAgentStateLicense = $CoListAgentStateLicense;
    }

    /**
     * @return string
     */
    public function getCoListAgentDesignation()
    {
        return $this->CoListAgentDesignation;
    }

    /**
     * @param string $CoListAgentDesignation
     */
    public function setCoListAgentDesignation($CoListAgentDesignation)
    {
        $this->CoListAgentDesignation = $CoListAgentDesignation;
    }

    /**
     * @return string
     */
    public function getCoListOfficeName()
    {
        return $this->CoListOfficeName;
    }

    /**
     * @param string $CoListOfficeName
     */
    public function setCoListOfficeName($CoListOfficeName)
    {
        $this->CoListOfficeName = $CoListOfficeName;
    }

    /**
     * @return string
     */
    public function getCoListOfficePhone()
    {
        return $this->CoListOfficePhone;
    }

    /**
     * @param string $CoListOfficePhone
     */
    public function setCoListOfficePhone($CoListOfficePhone)
    {
        $this->CoListOfficePhone = $CoListOfficePhone;
    }

    /**
     * @return string
     */
    public function getCoListOfficePhoneExt()
    {
        return $this->CoListOfficePhoneExt;
    }

    /**
     * @param string $CoListOfficePhoneExt
     */
    public function setCoListOfficePhoneExt($CoListOfficePhoneExt)
    {
        $this->CoListOfficePhoneExt = $CoListOfficePhoneExt;
    }

    /**
     * @return string
     */
    public function getCoListOfficeFax()
    {
        return $this->CoListOfficeFax;
    }

    /**
     * @param string $CoListOfficeFax
     */
    public function setCoListOfficeFax($CoListOfficeFax)
    {
        $this->CoListOfficeFax = $CoListOfficeFax;
    }

    /**
     * @return string
     */
    public function getCoListOfficeEmail()
    {
        return $this->CoListOfficeEmail;
    }

    /**
     * @param string $CoListOfficeEmail
     */
    public function setCoListOfficeEmail($CoListOfficeEmail)
    {
        $this->CoListOfficeEmail = $CoListOfficeEmail;
    }

    /**
     * @return string
     */
    public function getCoListOfficeURL()
    {
        return $this->CoListOfficeURL;
    }

    /**
     * @param string $CoListOfficeURL
     */
    public function setCoListOfficeURL($CoListOfficeURL)
    {
        $this->CoListOfficeURL = $CoListOfficeURL;
    }

    /**
     * @return string
     */
    public function getCoListOfficeKey()
    {
        return $this->CoListOfficeKey;
    }

    /**
     * @param string $CoListOfficeKey
     */
    public function setCoListOfficeKey($CoListOfficeKey)
    {
        $this->CoListOfficeKey = $CoListOfficeKey;
    }

    /**
     * @return string
     */
    public function getCoListOfficeAOR()
    {
        return $this->CoListOfficeAOR;
    }

    /**
     * @param string $CoListOfficeAOR
     */
    public function setCoListOfficeAOR($CoListOfficeAOR)
    {
        $this->CoListOfficeAOR = $CoListOfficeAOR;
    }

    /**
     * @return string
     */
    public function getCoListOfficeMlsId()
    {
        return $this->CoListOfficeMlsId;
    }

    /**
     * @param string $CoListOfficeMlsId
     */
    public function setCoListOfficeMlsId($CoListOfficeMlsId)
    {
        $this->CoListOfficeMlsId = $CoListOfficeMlsId;
    }

    /**
     * @return string
     */
    public function getBuyerAgentNamePrefix()
    {
        return $this->BuyerAgentNamePrefix;
    }

    /**
     * @param string $BuyerAgentNamePrefix
     */
    public function setBuyerAgentNamePrefix($BuyerAgentNamePrefix)
    {
        $this->BuyerAgentNamePrefix = $BuyerAgentNamePrefix;
    }

    /**
     * @return string
     */
    public function getBuyerAgentFirstName()
    {
        return $this->BuyerAgentFirstName;
    }

    /**
     * @param string $BuyerAgentFirstName
     */
    public function setBuyerAgentFirstName($BuyerAgentFirstName)
    {
        $this->BuyerAgentFirstName = $BuyerAgentFirstName;
    }

    /**
     * @return string
     */
    public function getBuyerAgentMiddleName()
    {
        return $this->BuyerAgentMiddleName;
    }

    /**
     * @param string $BuyerAgentMiddleName
     */
    public function setBuyerAgentMiddleName($BuyerAgentMiddleName)
    {
        $this->BuyerAgentMiddleName = $BuyerAgentMiddleName;
    }

    /**
     * @return string
     */
    public function getBuyerAgentLastName()
    {
        return $this->BuyerAgentLastName;
    }

    /**
     * @param string $BuyerAgentLastName
     */
    public function setBuyerAgentLastName($BuyerAgentLastName)
    {
        $this->BuyerAgentLastName = $BuyerAgentLastName;
    }

    /**
     * @return string
     */
    public function getBuyerAgentNameSuffix()
    {
        return $this->BuyerAgentNameSuffix;
    }

    /**
     * @param string $BuyerAgentNameSuffix
     */
    public function setBuyerAgentNameSuffix($BuyerAgentNameSuffix)
    {
        $this->BuyerAgentNameSuffix = $BuyerAgentNameSuffix;
    }

    /**
     * @return string
     */
    public function getBuyerAgentFullName()
    {
        return $this->BuyerAgentFullName;
    }

    /**
     * @param string $BuyerAgentFullName
     */
    public function setBuyerAgentFullName($BuyerAgentFullName)
    {
        $this->BuyerAgentFullName = $BuyerAgentFullName;
    }

    /**
     * @return string
     */
    public function getBuyerAgentPreferredPhone()
    {
        return $this->BuyerAgentPreferredPhone;
    }

    /**
     * @param string $BuyerAgentPreferredPhone
     */
    public function setBuyerAgentPreferredPhone($BuyerAgentPreferredPhone)
    {
        $this->BuyerAgentPreferredPhone = $BuyerAgentPreferredPhone;
    }

    /**
     * @return string
     */
    public function getBuyerAgentPreferredPhoneExt()
    {
        return $this->BuyerAgentPreferredPhoneExt;
    }

    /**
     * @param string $BuyerAgentPreferredPhoneExt
     */
    public function setBuyerAgentPreferredPhoneExt($BuyerAgentPreferredPhoneExt)
    {
        $this->BuyerAgentPreferredPhoneExt = $BuyerAgentPreferredPhoneExt;
    }

    /**
     * @return string
     */
    public function getBuyerAgentOfficePhone()
    {
        return $this->BuyerAgentOfficePhone;
    }

    /**
     * @param string $BuyerAgentOfficePhone
     */
    public function setBuyerAgentOfficePhone($BuyerAgentOfficePhone)
    {
        $this->BuyerAgentOfficePhone = $BuyerAgentOfficePhone;
    }

    /**
     * @return string
     */
    public function getBuyerAgentOfficePhoneExt()
    {
        return $this->BuyerAgentOfficePhoneExt;
    }

    /**
     * @param string $BuyerAgentOfficePhoneExt
     */
    public function setBuyerAgentOfficePhoneExt($BuyerAgentOfficePhoneExt)
    {
        $this->BuyerAgentOfficePhoneExt = $BuyerAgentOfficePhoneExt;
    }

    /**
     * @return string
     */
    public function getBuyerAgentCellPhone()
    {
        return $this->BuyerAgentCellPhone;
    }

    /**
     * @param string $BuyerAgentCellPhone
     */
    public function setBuyerAgentCellPhone($BuyerAgentCellPhone)
    {
        $this->BuyerAgentCellPhone = $BuyerAgentCellPhone;
    }

    /**
     * @return string
     */
    public function getBuyerAgentDirectPhone()
    {
        return $this->BuyerAgentDirectPhone;
    }

    /**
     * @param string $BuyerAgentDirectPhone
     */
    public function setBuyerAgentDirectPhone($BuyerAgentDirectPhone)
    {
        $this->BuyerAgentDirectPhone = $BuyerAgentDirectPhone;
    }

    /**
     * @return string
     */
    public function getBuyerAgentHomePhone()
    {
        return $this->BuyerAgentHomePhone;
    }

    /**
     * @param string $BuyerAgentHomePhone
     */
    public function setBuyerAgentHomePhone($BuyerAgentHomePhone)
    {
        $this->BuyerAgentHomePhone = $BuyerAgentHomePhone;
    }

    /**
     * @return string
     */
    public function getBuyerAgentFax()
    {
        return $this->BuyerAgentFax;
    }

    /**
     * @param string $BuyerAgentFax
     */
    public function setBuyerAgentFax($BuyerAgentFax)
    {
        $this->BuyerAgentFax = $BuyerAgentFax;
    }

    /**
     * @return string
     */
    public function getBuyerAgentPager()
    {
        return $this->BuyerAgentPager;
    }

    /**
     * @param string $BuyerAgentPager
     */
    public function setBuyerAgentPager($BuyerAgentPager)
    {
        $this->BuyerAgentPager = $BuyerAgentPager;
    }

    /**
     * @return string
     */
    public function getBuyerAgentVoiceMail()
    {
        return $this->BuyerAgentVoiceMail;
    }

    /**
     * @param string $BuyerAgentVoiceMail
     */
    public function setBuyerAgentVoiceMail($BuyerAgentVoiceMail)
    {
        $this->BuyerAgentVoiceMail = $BuyerAgentVoiceMail;
    }

    /**
     * @return string
     */
    public function getBuyerAgentVoiceMailExt()
    {
        return $this->BuyerAgentVoiceMailExt;
    }

    /**
     * @param string $BuyerAgentVoiceMailExt
     */
    public function setBuyerAgentVoiceMailExt($BuyerAgentVoiceMailExt)
    {
        $this->BuyerAgentVoiceMailExt = $BuyerAgentVoiceMailExt;
    }

    /**
     * @return string
     */
    public function getBuyerAgentTollFreePhone()
    {
        return $this->BuyerAgentTollFreePhone;
    }

    /**
     * @param string $BuyerAgentTollFreePhone
     */
    public function setBuyerAgentTollFreePhone($BuyerAgentTollFreePhone)
    {
        $this->BuyerAgentTollFreePhone = $BuyerAgentTollFreePhone;
    }

    /**
     * @return string
     */
    public function getBuyerAgentEmail()
    {
        return $this->BuyerAgentEmail;
    }

    /**
     * @param string $BuyerAgentEmail
     */
    public function setBuyerAgentEmail($BuyerAgentEmail)
    {
        $this->BuyerAgentEmail = $BuyerAgentEmail;
    }

    /**
     * @return string
     */
    public function getBuyerAgentURL()
    {
        return $this->BuyerAgentURL;
    }

    /**
     * @param string $BuyerAgentURL
     */
    public function setBuyerAgentURL($BuyerAgentURL)
    {
        $this->BuyerAgentURL = $BuyerAgentURL;
    }

    /**
     * @return string
     */
    public function getBuyerAgentKey()
    {
        return $this->BuyerAgentKey;
    }

    /**
     * @param string $BuyerAgentKey
     */
    public function setBuyerAgentKey($BuyerAgentKey)
    {
        $this->BuyerAgentKey = $BuyerAgentKey;
    }

    /**
     * @return string
     */
    public function getBuyerAgentAOR()
    {
        return $this->BuyerAgentAOR;
    }

    /**
     * @param string $BuyerAgentAOR
     */
    public function setBuyerAgentAOR($BuyerAgentAOR)
    {
        $this->BuyerAgentAOR = $BuyerAgentAOR;
    }

    /**
     * @return string
     */
    public function getBuyerAgentMlsId()
    {
        return $this->BuyerAgentMlsId;
    }

    /**
     * @param string $BuyerAgentMlsId
     */
    public function setBuyerAgentMlsId($BuyerAgentMlsId)
    {
        $this->BuyerAgentMlsId = $BuyerAgentMlsId;
    }

    /**
     * @return string
     */
    public function getBuyerAgentStateLicense()
    {
        return $this->BuyerAgentStateLicense;
    }

    /**
     * @param string $BuyerAgentStateLicense
     */
    public function setBuyerAgentStateLicense($BuyerAgentStateLicense)
    {
        $this->BuyerAgentStateLicense = $BuyerAgentStateLicense;
    }

    /**
     * @return string
     */
    public function getBuyerAgentDesignation()
    {
        return $this->BuyerAgentDesignation;
    }

    /**
     * @param string $BuyerAgentDesignation
     */
    public function setBuyerAgentDesignation($BuyerAgentDesignation)
    {
        $this->BuyerAgentDesignation = $BuyerAgentDesignation;
    }

    /**
     * @return string
     */
    public function getBuyerOfficeName()
    {
        return $this->BuyerOfficeName;
    }

    /**
     * @param string $BuyerOfficeName
     */
    public function setBuyerOfficeName($BuyerOfficeName)
    {
        $this->BuyerOfficeName = $BuyerOfficeName;
    }

    /**
     * @return string
     */
    public function getBuyerOfficePhone()
    {
        return $this->BuyerOfficePhone;
    }

    /**
     * @param string $BuyerOfficePhone
     */
    public function setBuyerOfficePhone($BuyerOfficePhone)
    {
        $this->BuyerOfficePhone = $BuyerOfficePhone;
    }

    /**
     * @return string
     */
    public function getBuyerOfficePhoneExt()
    {
        return $this->BuyerOfficePhoneExt;
    }

    /**
     * @param string $BuyerOfficePhoneExt
     */
    public function setBuyerOfficePhoneExt($BuyerOfficePhoneExt)
    {
        $this->BuyerOfficePhoneExt = $BuyerOfficePhoneExt;
    }

    /**
     * @return string
     */
    public function getBuyerOfficeFax()
    {
        return $this->BuyerOfficeFax;
    }

    /**
     * @param string $BuyerOfficeFax
     */
    public function setBuyerOfficeFax($BuyerOfficeFax)
    {
        $this->BuyerOfficeFax = $BuyerOfficeFax;
    }

    /**
     * @return string
     */
    public function getBuyerOfficeEmail()
    {
        return $this->BuyerOfficeEmail;
    }

    /**
     * @param string $BuyerOfficeEmail
     */
    public function setBuyerOfficeEmail($BuyerOfficeEmail)
    {
        $this->BuyerOfficeEmail = $BuyerOfficeEmail;
    }

    /**
     * @return string
     */
    public function getBuyerOfficeURL()
    {
        return $this->BuyerOfficeURL;
    }

    /**
     * @param string $BuyerOfficeURL
     */
    public function setBuyerOfficeURL($BuyerOfficeURL)
    {
        $this->BuyerOfficeURL = $BuyerOfficeURL;
    }

    /**
     * @return string
     */
    public function getBuyerOfficeKey()
    {
        return $this->BuyerOfficeKey;
    }

    /**
     * @param string $BuyerOfficeKey
     */
    public function setBuyerOfficeKey($BuyerOfficeKey)
    {
        $this->BuyerOfficeKey = $BuyerOfficeKey;
    }

    /**
     * @return string
     */
    public function getBuyerOfficeAOR()
    {
        return $this->BuyerOfficeAOR;
    }

    /**
     * @param string $BuyerOfficeAOR
     */
    public function setBuyerOfficeAOR($BuyerOfficeAOR)
    {
        $this->BuyerOfficeAOR = $BuyerOfficeAOR;
    }

    /**
     * @return string
     */
    public function getBuyerOfficeMlsId()
    {
        return $this->BuyerOfficeMlsId;
    }

    /**
     * @param string $BuyerOfficeMlsId
     */
    public function setBuyerOfficeMlsId($BuyerOfficeMlsId)
    {
        $this->BuyerOfficeMlsId = $BuyerOfficeMlsId;
    }

    /**
     * @return string
     */
    public function getCoBuyerAgentNamePrefix()
    {
        return $this->CoBuyerAgentNamePrefix;
    }

    /**
     * @param string $CoBuyerAgentNamePrefix
     */
    public function setCoBuyerAgentNamePrefix($CoBuyerAgentNamePrefix)
    {
        $this->CoBuyerAgentNamePrefix = $CoBuyerAgentNamePrefix;
    }

    /**
     * @return string
     */
    public function getCoBuyerAgentFirstName()
    {
        return $this->CoBuyerAgentFirstName;
    }

    /**
     * @param string $CoBuyerAgentFirstName
     */
    public function setCoBuyerAgentFirstName($CoBuyerAgentFirstName)
    {
        $this->CoBuyerAgentFirstName = $CoBuyerAgentFirstName;
    }

    /**
     * @return string
     */
    public function getCoBuyerAgentMiddleName()
    {
        return $this->CoBuyerAgentMiddleName;
    }

    /**
     * @param string $CoBuyerAgentMiddleName
     */
    public function setCoBuyerAgentMiddleName($CoBuyerAgentMiddleName)
    {
        $this->CoBuyerAgentMiddleName = $CoBuyerAgentMiddleName;
    }

    /**
     * @return string
     */
    public function getCoBuyerAgentLastName()
    {
        return $this->CoBuyerAgentLastName;
    }

    /**
     * @param string $CoBuyerAgentLastName
     */
    public function setCoBuyerAgentLastName($CoBuyerAgentLastName)
    {
        $this->CoBuyerAgentLastName = $CoBuyerAgentLastName;
    }

    /**
     * @return string
     */
    public function getCoBuyerAgentNameSuffix()
    {
        return $this->CoBuyerAgentNameSuffix;
    }

    /**
     * @param string $CoBuyerAgentNameSuffix
     */
    public function setCoBuyerAgentNameSuffix($CoBuyerAgentNameSuffix)
    {
        $this->CoBuyerAgentNameSuffix = $CoBuyerAgentNameSuffix;
    }

    /**
     * @return string
     */
    public function getCoBuyerAgentFullName()
    {
        return $this->CoBuyerAgentFullName;
    }

    /**
     * @param string $CoBuyerAgentFullName
     */
    public function setCoBuyerAgentFullName($CoBuyerAgentFullName)
    {
        $this->CoBuyerAgentFullName = $CoBuyerAgentFullName;
    }

    /**
     * @return string
     */
    public function getCoBuyerAgentPreferredPhone()
    {
        return $this->CoBuyerAgentPreferredPhone;
    }

    /**
     * @param string $CoBuyerAgentPreferredPhone
     */
    public function setCoBuyerAgentPreferredPhone($CoBuyerAgentPreferredPhone)
    {
        $this->CoBuyerAgentPreferredPhone = $CoBuyerAgentPreferredPhone;
    }

    /**
     * @return string
     */
    public function getCoBuyerAgentPreferredPhoneExt()
    {
        return $this->CoBuyerAgentPreferredPhoneExt;
    }

    /**
     * @param string $CoBuyerAgentPreferredPhoneExt
     */
    public function setCoBuyerAgentPreferredPhoneExt($CoBuyerAgentPreferredPhoneExt)
    {
        $this->CoBuyerAgentPreferredPhoneExt = $CoBuyerAgentPreferredPhoneExt;
    }

    /**
     * @return string
     */
    public function getCoBuyerAgentOfficePhone()
    {
        return $this->CoBuyerAgentOfficePhone;
    }

    /**
     * @param string $CoBuyerAgentOfficePhone
     */
    public function setCoBuyerAgentOfficePhone($CoBuyerAgentOfficePhone)
    {
        $this->CoBuyerAgentOfficePhone = $CoBuyerAgentOfficePhone;
    }

    /**
     * @return string
     */
    public function getCoBuyerAgentOfficePhoneExt()
    {
        return $this->CoBuyerAgentOfficePhoneExt;
    }

    /**
     * @param string $CoBuyerAgentOfficePhoneExt
     */
    public function setCoBuyerAgentOfficePhoneExt($CoBuyerAgentOfficePhoneExt)
    {
        $this->CoBuyerAgentOfficePhoneExt = $CoBuyerAgentOfficePhoneExt;
    }

    /**
     * @return string
     */
    public function getCoBuyerAgentCellPhone()
    {
        return $this->CoBuyerAgentCellPhone;
    }

    /**
     * @param string $CoBuyerAgentCellPhone
     */
    public function setCoBuyerAgentCellPhone($CoBuyerAgentCellPhone)
    {
        $this->CoBuyerAgentCellPhone = $CoBuyerAgentCellPhone;
    }

    /**
     * @return string
     */
    public function getCoBuyerAgentDirectPhone()
    {
        return $this->CoBuyerAgentDirectPhone;
    }

    /**
     * @param string $CoBuyerAgentDirectPhone
     */
    public function setCoBuyerAgentDirectPhone($CoBuyerAgentDirectPhone)
    {
        $this->CoBuyerAgentDirectPhone = $CoBuyerAgentDirectPhone;
    }

    /**
     * @return string
     */
    public function getCoBuyerAgentHomePhone()
    {
        return $this->CoBuyerAgentHomePhone;
    }

    /**
     * @param string $CoBuyerAgentHomePhone
     */
    public function setCoBuyerAgentHomePhone($CoBuyerAgentHomePhone)
    {
        $this->CoBuyerAgentHomePhone = $CoBuyerAgentHomePhone;
    }

    /**
     * @return string
     */
    public function getCoBuyerAgentFax()
    {
        return $this->CoBuyerAgentFax;
    }

    /**
     * @param string $CoBuyerAgentFax
     */
    public function setCoBuyerAgentFax($CoBuyerAgentFax)
    {
        $this->CoBuyerAgentFax = $CoBuyerAgentFax;
    }

    /**
     * @return string
     */
    public function getCoBuyerAgentPager()
    {
        return $this->CoBuyerAgentPager;
    }

    /**
     * @param string $CoBuyerAgentPager
     */
    public function setCoBuyerAgentPager($CoBuyerAgentPager)
    {
        $this->CoBuyerAgentPager = $CoBuyerAgentPager;
    }

    /**
     * @return string
     */
    public function getCoBuyerAgentVoiceMail()
    {
        return $this->CoBuyerAgentVoiceMail;
    }

    /**
     * @param string $CoBuyerAgentVoiceMail
     */
    public function setCoBuyerAgentVoiceMail($CoBuyerAgentVoiceMail)
    {
        $this->CoBuyerAgentVoiceMail = $CoBuyerAgentVoiceMail;
    }

    /**
     * @return string
     */
    public function getCoBuyerAgentVoiceMailExt()
    {
        return $this->CoBuyerAgentVoiceMailExt;
    }

    /**
     * @param string $CoBuyerAgentVoiceMailExt
     */
    public function setCoBuyerAgentVoiceMailExt($CoBuyerAgentVoiceMailExt)
    {
        $this->CoBuyerAgentVoiceMailExt = $CoBuyerAgentVoiceMailExt;
    }

    /**
     * @return string
     */
    public function getCoBuyerAgentTollFreePhone()
    {
        return $this->CoBuyerAgentTollFreePhone;
    }

    /**
     * @param string $CoBuyerAgentTollFreePhone
     */
    public function setCoBuyerAgentTollFreePhone($CoBuyerAgentTollFreePhone)
    {
        $this->CoBuyerAgentTollFreePhone = $CoBuyerAgentTollFreePhone;
    }

    /**
     * @return string
     */
    public function getCoBuyerAgentEmail()
    {
        return $this->CoBuyerAgentEmail;
    }

    /**
     * @param string $CoBuyerAgentEmail
     */
    public function setCoBuyerAgentEmail($CoBuyerAgentEmail)
    {
        $this->CoBuyerAgentEmail = $CoBuyerAgentEmail;
    }

    /**
     * @return string
     */
    public function getCoBuyerAgentURL()
    {
        return $this->CoBuyerAgentURL;
    }

    /**
     * @param string $CoBuyerAgentURL
     */
    public function setCoBuyerAgentURL($CoBuyerAgentURL)
    {
        $this->CoBuyerAgentURL = $CoBuyerAgentURL;
    }

    /**
     * @return string
     */
    public function getCoBuyerAgentKey()
    {
        return $this->CoBuyerAgentKey;
    }

    /**
     * @param string $CoBuyerAgentKey
     */
    public function setCoBuyerAgentKey($CoBuyerAgentKey)
    {
        $this->CoBuyerAgentKey = $CoBuyerAgentKey;
    }

    /**
     * @return string
     */
    public function getCoBuyerAgentAOR()
    {
        return $this->CoBuyerAgentAOR;
    }

    /**
     * @param string $CoBuyerAgentAOR
     */
    public function setCoBuyerAgentAOR($CoBuyerAgentAOR)
    {
        $this->CoBuyerAgentAOR = $CoBuyerAgentAOR;
    }

    /**
     * @return string
     */
    public function getCoBuyerAgentMlsId()
    {
        return $this->CoBuyerAgentMlsId;
    }

    /**
     * @param string $CoBuyerAgentMlsId
     */
    public function setCoBuyerAgentMlsId($CoBuyerAgentMlsId)
    {
        $this->CoBuyerAgentMlsId = $CoBuyerAgentMlsId;
    }

    /**
     * @return string
     */
    public function getCoBuyerAgentStateLicense()
    {
        return $this->CoBuyerAgentStateLicense;
    }

    /**
     * @param string $CoBuyerAgentStateLicense
     */
    public function setCoBuyerAgentStateLicense($CoBuyerAgentStateLicense)
    {
        $this->CoBuyerAgentStateLicense = $CoBuyerAgentStateLicense;
    }

    /**
     * @return string
     */
    public function getCoBuyerAgentDesignation()
    {
        return $this->CoBuyerAgentDesignation;
    }

    /**
     * @param string $CoBuyerAgentDesignation
     */
    public function setCoBuyerAgentDesignation($CoBuyerAgentDesignation)
    {
        $this->CoBuyerAgentDesignation = $CoBuyerAgentDesignation;
    }

    /**
     * @return string
     */
    public function getCoBuyerOfficeName()
    {
        return $this->CoBuyerOfficeName;
    }

    /**
     * @param string $CoBuyerOfficeName
     */
    public function setCoBuyerOfficeName($CoBuyerOfficeName)
    {
        $this->CoBuyerOfficeName = $CoBuyerOfficeName;
    }

    /**
     * @return string
     */
    public function getCoBuyerOfficePhone()
    {
        return $this->CoBuyerOfficePhone;
    }

    /**
     * @param string $CoBuyerOfficePhone
     */
    public function setCoBuyerOfficePhone($CoBuyerOfficePhone)
    {
        $this->CoBuyerOfficePhone = $CoBuyerOfficePhone;
    }

    /**
     * @return string
     */
    public function getCoBuyerOfficePhoneExt()
    {
        return $this->CoBuyerOfficePhoneExt;
    }

    /**
     * @param string $CoBuyerOfficePhoneExt
     */
    public function setCoBuyerOfficePhoneExt($CoBuyerOfficePhoneExt)
    {
        $this->CoBuyerOfficePhoneExt = $CoBuyerOfficePhoneExt;
    }

    /**
     * @return string
     */
    public function getCoBuyerOfficeFax()
    {
        return $this->CoBuyerOfficeFax;
    }

    /**
     * @param string $CoBuyerOfficeFax
     */
    public function setCoBuyerOfficeFax($CoBuyerOfficeFax)
    {
        $this->CoBuyerOfficeFax = $CoBuyerOfficeFax;
    }

    /**
     * @return string
     */
    public function getCoBuyerOfficeEmail()
    {
        return $this->CoBuyerOfficeEmail;
    }

    /**
     * @param string $CoBuyerOfficeEmail
     */
    public function setCoBuyerOfficeEmail($CoBuyerOfficeEmail)
    {
        $this->CoBuyerOfficeEmail = $CoBuyerOfficeEmail;
    }

    /**
     * @return string
     */
    public function getCoBuyerOfficeURL()
    {
        return $this->CoBuyerOfficeURL;
    }

    /**
     * @param string $CoBuyerOfficeURL
     */
    public function setCoBuyerOfficeURL($CoBuyerOfficeURL)
    {
        $this->CoBuyerOfficeURL = $CoBuyerOfficeURL;
    }

    /**
     * @return string
     */
    public function getCoBuyerOfficeKey()
    {
        return $this->CoBuyerOfficeKey;
    }

    /**
     * @param string $CoBuyerOfficeKey
     */
    public function setCoBuyerOfficeKey($CoBuyerOfficeKey)
    {
        $this->CoBuyerOfficeKey = $CoBuyerOfficeKey;
    }

    /**
     * @return string
     */
    public function getCoBuyerOfficeAOR()
    {
        return $this->CoBuyerOfficeAOR;
    }

    /**
     * @param string $CoBuyerOfficeAOR
     */
    public function setCoBuyerOfficeAOR($CoBuyerOfficeAOR)
    {
        $this->CoBuyerOfficeAOR = $CoBuyerOfficeAOR;
    }

    /**
     * @return string
     */
    public function getCoBuyerOfficeMlsId()
    {
        return $this->CoBuyerOfficeMlsId;
    }

    /**
     * @param string $CoBuyerOfficeMlsId
     */
    public function setCoBuyerOfficeMlsId($CoBuyerOfficeMlsId)
    {
        $this->CoBuyerOfficeMlsId = $CoBuyerOfficeMlsId;
    }

    /**
     * @return string
     */
    public function getListTeamName()
    {
        return $this->ListTeamName;
    }

    /**
     * @param string $ListTeamName
     */
    public function setListTeamName($ListTeamName)
    {
        $this->ListTeamName = $ListTeamName;
    }

    /**
     * @return string
     */
    public function getListTeamKey()
    {
        return $this->ListTeamKey;
    }

    /**
     * @param string $ListTeamKey
     */
    public function setListTeamKey($ListTeamKey)
    {
        $this->ListTeamKey = $ListTeamKey;
    }

    /**
     * @return string
     */
    public function getBuyerTeamName()
    {
        return $this->BuyerTeamName;
    }

    /**
     * @param string $BuyerTeamName
     */
    public function setBuyerTeamName($BuyerTeamName)
    {
        $this->BuyerTeamName = $BuyerTeamName;
    }

    /**
     * @return string
     */
    public function getBuyerTeamKey()
    {
        return $this->BuyerTeamKey;
    }

    /**
     * @param string $BuyerTeamKey
     */
    public function setBuyerTeamKey($BuyerTeamKey)
    {
        $this->BuyerTeamKey = $BuyerTeamKey;
    }

    /**
     * @return string
     */
    public function getPropertyType()
    {
        return $this->PropertyType;
    }

    /**
     * @param string $PropertyType
     */
    public function setPropertyType($PropertyType)
    {
        $this->PropertyType = $PropertyType;
    }

    /**
     * @return string
     */
    public function getPropertySubType()
    {
        return $this->PropertySubType;
    }

    /**
     * @param string $PropertySubType
     */
    public function setPropertySubType($PropertySubType)
    {
        $this->PropertySubType = $PropertySubType;
    }

    /**
     * @return string
     */
    public function getAssociationYN()
    {
        return $this->AssociationYN;
    }

    /**
     * @param string $AssociationYN
     */
    public function setAssociationYN($AssociationYN)
    {
        $this->AssociationYN = $AssociationYN;
    }

    /**
     * @return string
     */
    public function getAssociationName()
    {
        return $this->AssociationName;
    }

    /**
     * @param string $AssociationName
     */
    public function setAssociationName($AssociationName)
    {
        $this->AssociationName = $AssociationName;
    }

    /**
     * @return string
     */
    public function getAssociationPhone()
    {
        return $this->AssociationPhone;
    }

    /**
     * @param string $AssociationPhone
     */
    public function setAssociationPhone($AssociationPhone)
    {
        $this->AssociationPhone = $AssociationPhone;
    }

    /**
     * @return string
     */
    public function getAssociationFee()
    {
        return $this->AssociationFee;
    }

    /**
     * @param string $AssociationFee
     */
    public function setAssociationFee($AssociationFee)
    {
        $this->AssociationFee = $AssociationFee;
    }

    /**
     * @return string
     */
    public function getAssociationFeeFrequency()
    {
        return $this->AssociationFeeFrequency;
    }

    /**
     * @param string $AssociationFeeFrequency
     */
    public function setAssociationFeeFrequency($AssociationFeeFrequency)
    {
        $this->AssociationFeeFrequency = $AssociationFeeFrequency;
    }

    /**
     * @return string
     */
    public function getAssociationName2()
    {
        return $this->AssociationName2;
    }

    /**
     * @param string $AssociationName2
     */
    public function setAssociationName2($AssociationName2)
    {
        $this->AssociationName2 = $AssociationName2;
    }

    /**
     * @return string
     */
    public function getAssociationPhone2()
    {
        return $this->AssociationPhone2;
    }

    /**
     * @param string $AssociationPhone2
     */
    public function setAssociationPhone2($AssociationPhone2)
    {
        $this->AssociationPhone2 = $AssociationPhone2;
    }

    /**
     * @return string
     */
    public function getAssociationFee2()
    {
        return $this->AssociationFee2;
    }

    /**
     * @param string $AssociationFee2
     */
    public function setAssociationFee2($AssociationFee2)
    {
        $this->AssociationFee2 = $AssociationFee2;
    }

    /**
     * @return string
     */
    public function getAssociationFee2Frequency()
    {
        return $this->AssociationFee2Frequency;
    }

    /**
     * @param string $AssociationFee2Frequency
     */
    public function setAssociationFee2Frequency($AssociationFee2Frequency)
    {
        $this->AssociationFee2Frequency = $AssociationFee2Frequency;
    }

    /**
     * @return string
     */
    public function getAssociationFeeIncludes()
    {
        return $this->AssociationFeeIncludes;
    }

    /**
     * @param string $AssociationFeeIncludes
     */
    public function setAssociationFeeIncludes($AssociationFeeIncludes)
    {
        $this->AssociationFeeIncludes = $AssociationFeeIncludes;
    }

    /**
     * @return string
     */
    public function getAssociationAmenities()
    {
        return $this->AssociationAmenities;
    }

    /**
     * @param string $AssociationAmenities
     */
    public function setAssociationAmenities($AssociationAmenities)
    {
        $this->AssociationAmenities = $AssociationAmenities;
    }

    /**
     * @return string
     */
    public function getPetsAllowed()
    {
        return $this->PetsAllowed;
    }

    /**
     * @param string $PetsAllowed
     */
    public function setPetsAllowed($PetsAllowed)
    {
        $this->PetsAllowed = $PetsAllowed;
    }

    /**
     * @return string
     */
    public function getLotSizeArea()
    {
        return $this->LotSizeArea;
    }

    /**
     * @param string $LotSizeArea
     */
    public function setLotSizeArea($LotSizeArea)
    {
        $this->LotSizeArea = $LotSizeArea;
    }

    /**
     * @return string
     */
    public function getLotSizeSource()
    {
        return $this->LotSizeSource;
    }

    /**
     * @param string $LotSizeSource
     */
    public function setLotSizeSource($LotSizeSource)
    {
        $this->LotSizeSource = $LotSizeSource;
    }

    /**
     * @return string
     */
    public function getLotSizeUnits()
    {
        return $this->LotSizeUnits;
    }

    /**
     * @param string $LotSizeUnits
     */
    public function setLotSizeUnits($LotSizeUnits)
    {
        $this->LotSizeUnits = $LotSizeUnits;
    }

    /**
     * @return string
     */
    public function getLotSizeDimensions()
    {
        return $this->LotSizeDimensions;
    }

    /**
     * @param string $LotSizeDimensions
     */
    public function setLotSizeDimensions($LotSizeDimensions)
    {
        $this->LotSizeDimensions = $LotSizeDimensions;
    }

    /**
     * @return string
     */
    public function getLotDimensionsSource()
    {
        return $this->LotDimensionsSource;
    }

    /**
     * @param string $LotDimensionsSource
     */
    public function setLotDimensionsSource($LotDimensionsSource)
    {
        $this->LotDimensionsSource = $LotDimensionsSource;
    }

    /**
     * @return string
     */
    public function getLotSizeAcres()
    {
        return $this->LotSizeAcres;
    }

    /**
     * @param string $LotSizeAcres
     */
    public function setLotSizeAcres($LotSizeAcres)
    {
        $this->LotSizeAcres = $LotSizeAcres;
    }

    /**
     * @return string
     */
    public function getLotSizeSquareFeet()
    {
        return $this->LotSizeSquareFeet;
    }

    /**
     * @param string $LotSizeSquareFeet
     */
    public function setLotSizeSquareFeet($LotSizeSquareFeet)
    {
        $this->LotSizeSquareFeet = $LotSizeSquareFeet;
    }

    /**
     * @return string
     */
    public function getFrontageType()
    {
        return $this->FrontageType;
    }

    /**
     * @param string $FrontageType
     */
    public function setFrontageType($FrontageType)
    {
        $this->FrontageType = $FrontageType;
    }

    /**
     * @return string
     */
    public function getFrontageLength()
    {
        return $this->FrontageLength;
    }

    /**
     * @param string $FrontageLength
     */
    public function setFrontageLength($FrontageLength)
    {
        $this->FrontageLength = $FrontageLength;
    }

    /**
     * @return string
     */
    public function getRoadFrontageType()
    {
        return $this->RoadFrontageType;
    }

    /**
     * @param string $RoadFrontageType
     */
    public function setRoadFrontageType($RoadFrontageType)
    {
        $this->RoadFrontageType = $RoadFrontageType;
    }

    /**
     * @return string
     */
    public function getRoadSurfaceType()
    {
        return $this->RoadSurfaceType;
    }

    /**
     * @param string $RoadSurfaceType
     */
    public function setRoadSurfaceType($RoadSurfaceType)
    {
        $this->RoadSurfaceType = $RoadSurfaceType;
    }

    /**
     * @return string
     */
    public function getRoadResponsibility()
    {
        return $this->RoadResponsibility;
    }

    /**
     * @param string $RoadResponsibility
     */
    public function setRoadResponsibility($RoadResponsibility)
    {
        $this->RoadResponsibility = $RoadResponsibility;
    }

    /**
     * @return string
     */
    public function getOccupantName()
    {
        return $this->OccupantName;
    }

    /**
     * @param string $OccupantName
     */
    public function setOccupantName($OccupantName)
    {
        $this->OccupantName = $OccupantName;
    }

    /**
     * @return string
     */
    public function getOccupantPhone()
    {
        return $this->OccupantPhone;
    }

    /**
     * @param string $OccupantPhone
     */
    public function setOccupantPhone($OccupantPhone)
    {
        $this->OccupantPhone = $OccupantPhone;
    }

    /**
     * @return string
     */
    public function getOccupantType()
    {
        return $this->OccupantType;
    }

    /**
     * @param string $OccupantType
     */
    public function setOccupantType($OccupantType)
    {
        $this->OccupantType = $OccupantType;
    }

    /**
     * @return string
     */
    public function getOwnerName()
    {
        return $this->OwnerName;
    }

    /**
     * @param string $OwnerName
     */
    public function setOwnerName($OwnerName)
    {
        $this->OwnerName = $OwnerName;
    }

    /**
     * @return string
     */
    public function getOwnerPhone()
    {
        return $this->OwnerPhone;
    }

    /**
     * @param string $OwnerPhone
     */
    public function setOwnerPhone($OwnerPhone)
    {
        $this->OwnerPhone = $OwnerPhone;
    }

    /**
     * @return string
     */
    public function getAnchorsCoTenants()
    {
        return $this->AnchorsCoTenants;
    }

    /**
     * @param string $AnchorsCoTenants
     */
    public function setAnchorsCoTenants($AnchorsCoTenants)
    {
        $this->AnchorsCoTenants = $AnchorsCoTenants;
    }

    /**
     * @return string
     */
    public function getLeaseTerm()
    {
        return $this->LeaseTerm;
    }

    /**
     * @param string $LeaseTerm
     */
    public function setLeaseTerm($LeaseTerm)
    {
        $this->LeaseTerm = $LeaseTerm;
    }

    /**
     * @return string
     */
    public function getLandLeaseYN()
    {
        return $this->LandLeaseYN;
    }

    /**
     * @param string $LandLeaseYN
     */
    public function setLandLeaseYN($LandLeaseYN)
    {
        $this->LandLeaseYN = $LandLeaseYN;
    }

    /**
     * @return string
     */
    public function getLandLeaseAmount()
    {
        return $this->LandLeaseAmount;
    }

    /**
     * @param string $LandLeaseAmount
     */
    public function setLandLeaseAmount($LandLeaseAmount)
    {
        $this->LandLeaseAmount = $LandLeaseAmount;
    }

    /**
     * @return string
     */
    public function getLandLeaseAmountFrequency()
    {
        return $this->LandLeaseAmountFrequency;
    }

    /**
     * @param string $LandLeaseAmountFrequency
     */
    public function setLandLeaseAmountFrequency($LandLeaseAmountFrequency)
    {
        $this->LandLeaseAmountFrequency = $LandLeaseAmountFrequency;
    }

    /**
     * @return string
     */
    public function getLandLeaseExpirationDate()
    {
        return $this->LandLeaseExpirationDate;
    }

    /**
     * @param string $LandLeaseExpirationDate
     */
    public function setLandLeaseExpirationDate($LandLeaseExpirationDate)
    {
        $this->LandLeaseExpirationDate = $LandLeaseExpirationDate;
    }

    /**
     * @return string
     */
    public function getView()
    {
        return $this->View;
    }

    /**
     * @param string $View
     */
    public function setView($View)
    {
        $this->View = $View;
    }

    /**
     * @return string
     */
    public function getViewYN()
    {
        return $this->ViewYN;
    }

    /**
     * @param string $ViewYN
     */
    public function setViewYN($ViewYN)
    {
        $this->ViewYN = $ViewYN;
    }

    /**
     * @return string
     */
    public function getLotFeatures()
    {
        return $this->LotFeatures;
    }

    /**
     * @param string $LotFeatures
     */
    public function setLotFeatures($LotFeatures)
    {
        $this->LotFeatures = $LotFeatures;
    }

    /**
     * @return string
     */
    public function getCurrentUse()
    {
        return $this->CurrentUse;
    }

    /**
     * @param string $CurrentUse
     */
    public function setCurrentUse($CurrentUse)
    {
        $this->CurrentUse = $CurrentUse;
    }

    /**
     * @return string
     */
    public function getPossibleUse()
    {
        return $this->PossibleUse;
    }

    /**
     * @param string $PossibleUse
     */
    public function setPossibleUse($PossibleUse)
    {
        $this->PossibleUse = $PossibleUse;
    }

    /**
     * @return string
     */
    public function getDevelopmentStatus()
    {
        return $this->DevelopmentStatus;
    }

    /**
     * @param string $DevelopmentStatus
     */
    public function setDevelopmentStatus($DevelopmentStatus)
    {
        $this->DevelopmentStatus = $DevelopmentStatus;
    }

    /**
     * @return string
     */
    public function getNumberOfLots()
    {
        return $this->NumberOfLots;
    }

    /**
     * @param string $NumberOfLots
     */
    public function setNumberOfLots($NumberOfLots)
    {
        $this->NumberOfLots = $NumberOfLots;
    }

    /**
     * @return string
     */
    public function getTopography()
    {
        return $this->Topography;
    }

    /**
     * @param string $Topography
     */
    public function setTopography($Topography)
    {
        $this->Topography = $Topography;
    }

    /**
     * @return string
     */
    public function getHorseYN()
    {
        return $this->HorseYN;
    }

    /**
     * @param string $HorseYN
     */
    public function setHorseYN($HorseYN)
    {
        $this->HorseYN = $HorseYN;
    }

    /**
     * @return string
     */
    public function getHorseAmenities()
    {
        return $this->HorseAmenities;
    }

    /**
     * @param string $HorseAmenities
     */
    public function setHorseAmenities($HorseAmenities)
    {
        $this->HorseAmenities = $HorseAmenities;
    }

    /**
     * @return string
     */
    public function getCommunityFeatures()
    {
        return $this->CommunityFeatures;
    }

    /**
     * @param string $CommunityFeatures
     */
    public function setCommunityFeatures($CommunityFeatures)
    {
        $this->CommunityFeatures = $CommunityFeatures;
    }

    /**
     * @return string
     */
    public function getSeniorCommunityYN()
    {
        return $this->SeniorCommunityYN;
    }

    /**
     * @param string $SeniorCommunityYN
     */
    public function setSeniorCommunityYN($SeniorCommunityYN)
    {
        $this->SeniorCommunityYN = $SeniorCommunityYN;
    }

    /**
     * @return string
     */
    public function getPoolFeatures()
    {
        return $this->PoolFeatures;
    }

    /**
     * @param string $PoolFeatures
     */
    public function setPoolFeatures($PoolFeatures)
    {
        $this->PoolFeatures = $PoolFeatures;
    }

    /**
     * @return string
     */
    public function getPoolPrivateYN()
    {
        return $this->PoolPrivateYN;
    }

    /**
     * @param string $PoolPrivateYN
     */
    public function setPoolPrivateYN($PoolPrivateYN)
    {
        $this->PoolPrivateYN = $PoolPrivateYN;
    }

    /**
     * @return string
     */
    public function getSpaFeatures()
    {
        return $this->SpaFeatures;
    }

    /**
     * @param string $SpaFeatures
     */
    public function setSpaFeatures($SpaFeatures)
    {
        $this->SpaFeatures = $SpaFeatures;
    }

    /**
     * @return string
     */
    public function getSpaYN()
    {
        return $this->SpaYN;
    }

    /**
     * @param string $SpaYN
     */
    public function setSpaYN($SpaYN)
    {
        $this->SpaYN = $SpaYN;
    }

    /**
     * @return string
     */
    public function getWaterfrontYN()
    {
        return $this->WaterfrontYN;
    }

    /**
     * @param string $WaterfrontYN
     */
    public function setWaterfrontYN($WaterfrontYN)
    {
        $this->WaterfrontYN = $WaterfrontYN;
    }

    /**
     * @return string
     */
    public function getWaterfrontFeatures()
    {
        return $this->WaterfrontFeatures;
    }

    /**
     * @param string $WaterfrontFeatures
     */
    public function setWaterfrontFeatures($WaterfrontFeatures)
    {
        $this->WaterfrontFeatures = $WaterfrontFeatures;
    }

    /**
     * @return string
     */
    public function getWaterBodyName()
    {
        return $this->WaterBodyName;
    }

    /**
     * @param string $WaterBodyName
     */
    public function setWaterBodyName($WaterBodyName)
    {
        $this->WaterBodyName = $WaterBodyName;
    }

    /**
     * @return string
     */
    public function getGrossScheduledIncome()
    {
        return $this->GrossScheduledIncome;
    }

    /**
     * @param string $GrossScheduledIncome
     */
    public function setGrossScheduledIncome($GrossScheduledIncome)
    {
        $this->GrossScheduledIncome = $GrossScheduledIncome;
    }

    /**
     * @return string
     */
    public function getGrossIncome()
    {
        return $this->GrossIncome;
    }

    /**
     * @param string $GrossIncome
     */
    public function setGrossIncome($GrossIncome)
    {
        $this->GrossIncome = $GrossIncome;
    }

    /**
     * @return string
     */
    public function getIncomeIncludes()
    {
        return $this->IncomeIncludes;
    }

    /**
     * @param string $IncomeIncludes
     */
    public function setIncomeIncludes($IncomeIncludes)
    {
        $this->IncomeIncludes = $IncomeIncludes;
    }

    /**
     * @return string
     */
    public function getOperatingExpense()
    {
        return $this->OperatingExpense;
    }

    /**
     * @param string $OperatingExpense
     */
    public function setOperatingExpense($OperatingExpense)
    {
        $this->OperatingExpense = $OperatingExpense;
    }

    /**
     * @return string
     */
    public function getOperatingExpenseIncludes()
    {
        return $this->OperatingExpenseIncludes;
    }

    /**
     * @param string $OperatingExpenseIncludes
     */
    public function setOperatingExpenseIncludes($OperatingExpenseIncludes)
    {
        $this->OperatingExpenseIncludes = $OperatingExpenseIncludes;
    }

    /**
     * @return string
     */
    public function getNetOperatingIncome()
    {
        return $this->NetOperatingIncome;
    }

    /**
     * @param string $NetOperatingIncome
     */
    public function setNetOperatingIncome($NetOperatingIncome)
    {
        $this->NetOperatingIncome = $NetOperatingIncome;
    }

    /**
     * @return string
     */
    public function getCapRate()
    {
        return $this->CapRate;
    }

    /**
     * @param string $CapRate
     */
    public function setCapRate($CapRate)
    {
        $this->CapRate = $CapRate;
    }

    /**
     * @return string
     */
    public function getNumberOfUnitsLeased()
    {
        return $this->NumberOfUnitsLeased;
    }

    /**
     * @param string $NumberOfUnitsLeased
     */
    public function setNumberOfUnitsLeased($NumberOfUnitsLeased)
    {
        $this->NumberOfUnitsLeased = $NumberOfUnitsLeased;
    }

    /**
     * @return string
     */
    public function getNumberOfUnitsMoMo()
    {
        return $this->NumberOfUnitsMoMo;
    }

    /**
     * @param string $NumberOfUnitsMoMo
     */
    public function setNumberOfUnitsMoMo($NumberOfUnitsMoMo)
    {
        $this->NumberOfUnitsMoMo = $NumberOfUnitsMoMo;
    }

    /**
     * @return string
     */
    public function getNumberOfUnitsVacant()
    {
        return $this->NumberOfUnitsVacant;
    }

    /**
     * @param string $NumberOfUnitsVacant
     */
    public function setNumberOfUnitsVacant($NumberOfUnitsVacant)
    {
        $this->NumberOfUnitsVacant = $NumberOfUnitsVacant;
    }

    /**
     * @return string
     */
    public function getExistingLeaseType()
    {
        return $this->ExistingLeaseType;
    }

    /**
     * @param string $ExistingLeaseType
     */
    public function setExistingLeaseType($ExistingLeaseType)
    {
        $this->ExistingLeaseType = $ExistingLeaseType;
    }

    /**
     * @return string
     */
    public function getUnitsFurnished()
    {
        return $this->UnitsFurnished;
    }

    /**
     * @param string $UnitsFurnished
     */
    public function setUnitsFurnished($UnitsFurnished)
    {
        $this->UnitsFurnished = $UnitsFurnished;
    }

    /**
     * @return string
     */
    public function getTotalActualRent()
    {
        return $this->TotalActualRent;
    }

    /**
     * @param string $TotalActualRent
     */
    public function setTotalActualRent($TotalActualRent)
    {
        $this->TotalActualRent = $TotalActualRent;
    }

    /**
     * @return string
     */
    public function getRentControlYN()
    {
        return $this->RentControlYN;
    }

    /**
     * @param string $RentControlYN
     */
    public function setRentControlYN($RentControlYN)
    {
        $this->RentControlYN = $RentControlYN;
    }

    /**
     * @return string
     */
    public function getNumberOfUnitsTotal()
    {
        return $this->NumberOfUnitsTotal;
    }

    /**
     * @param string $NumberOfUnitsTotal
     */
    public function setNumberOfUnitsTotal($NumberOfUnitsTotal)
    {
        $this->NumberOfUnitsTotal = $NumberOfUnitsTotal;
    }

    /**
     * @return string
     */
    public function getNumberOfBuildings()
    {
        return $this->NumberOfBuildings;
    }

    /**
     * @param string $NumberOfBuildings
     */
    public function setNumberOfBuildings($NumberOfBuildings)
    {
        $this->NumberOfBuildings = $NumberOfBuildings;
    }

    /**
     * @return string
     */
    public function getOwnerPays()
    {
        return $this->OwnerPays;
    }

    /**
     * @param string $OwnerPays
     */
    public function setOwnerPays($OwnerPays)
    {
        $this->OwnerPays = $OwnerPays;
    }

    /**
     * @return string
     */
    public function getTenantPays()
    {
        return $this->TenantPays;
    }

    /**
     * @param string $TenantPays
     */
    public function setTenantPays($TenantPays)
    {
        $this->TenantPays = $TenantPays;
    }

    /**
     * @return string
     */
    public function getVacancyAllowance()
    {
        return $this->VacancyAllowance;
    }

    /**
     * @param string $VacancyAllowance
     */
    public function setVacancyAllowance($VacancyAllowance)
    {
        $this->VacancyAllowance = $VacancyAllowance;
    }

    /**
     * @return string
     */
    public function getVacancyAllowanceRate()
    {
        return $this->VacancyAllowanceRate;
    }

    /**
     * @param string $VacancyAllowanceRate
     */
    public function setVacancyAllowanceRate($VacancyAllowanceRate)
    {
        $this->VacancyAllowanceRate = $VacancyAllowanceRate;
    }

    /**
     * @return string
     */
    public function getCableTvExpense()
    {
        return $this->CableTvExpense;
    }

    /**
     * @param string $CableTvExpense
     */
    public function setCableTvExpense($CableTvExpense)
    {
        $this->CableTvExpense = $CableTvExpense;
    }

    /**
     * @return string
     */
    public function getElectricExpense()
    {
        return $this->ElectricExpense;
    }

    /**
     * @param string $ElectricExpense
     */
    public function setElectricExpense($ElectricExpense)
    {
        $this->ElectricExpense = $ElectricExpense;
    }

    /**
     * @return string
     */
    public function getGardnerExpense()
    {
        return $this->GardnerExpense;
    }

    /**
     * @param string $GardnerExpense
     */
    public function setGardnerExpense($GardnerExpense)
    {
        $this->GardnerExpense = $GardnerExpense;
    }

    /**
     * @return string
     */
    public function getFurnitureReplacementExpense()
    {
        return $this->FurnitureReplacementExpense;
    }

    /**
     * @param string $FurnitureReplacementExpense
     */
    public function setFurnitureReplacementExpense($FurnitureReplacementExpense)
    {
        $this->FurnitureReplacementExpense = $FurnitureReplacementExpense;
    }

    /**
     * @return string
     */
    public function getFuelExpense()
    {
        return $this->FuelExpense;
    }

    /**
     * @param string $FuelExpense
     */
    public function setFuelExpense($FuelExpense)
    {
        $this->FuelExpense = $FuelExpense;
    }

    /**
     * @return string
     */
    public function getInsuranceExpense()
    {
        return $this->InsuranceExpense;
    }

    /**
     * @param string $InsuranceExpense
     */
    public function setInsuranceExpense($InsuranceExpense)
    {
        $this->InsuranceExpense = $InsuranceExpense;
    }

    /**
     * @return string
     */
    public function getOtherExpense()
    {
        return $this->OtherExpense;
    }

    /**
     * @param string $OtherExpense
     */
    public function setOtherExpense($OtherExpense)
    {
        $this->OtherExpense = $OtherExpense;
    }

    /**
     * @return string
     */
    public function getLicensesExpense()
    {
        return $this->LicensesExpense;
    }

    /**
     * @param string $LicensesExpense
     */
    public function setLicensesExpense($LicensesExpense)
    {
        $this->LicensesExpense = $LicensesExpense;
    }

    /**
     * @return string
     */
    public function getMaintenanceExpense()
    {
        return $this->MaintenanceExpense;
    }

    /**
     * @param string $MaintenanceExpense
     */
    public function setMaintenanceExpense($MaintenanceExpense)
    {
        $this->MaintenanceExpense = $MaintenanceExpense;
    }

    /**
     * @return string
     */
    public function getNewTaxesExpense()
    {
        return $this->NewTaxesExpense;
    }

    /**
     * @param string $NewTaxesExpense
     */
    public function setNewTaxesExpense($NewTaxesExpense)
    {
        $this->NewTaxesExpense = $NewTaxesExpense;
    }

    /**
     * @return string
     */
    public function getPestControlExpense()
    {
        return $this->PestControlExpense;
    }

    /**
     * @param string $PestControlExpense
     */
    public function setPestControlExpense($PestControlExpense)
    {
        $this->PestControlExpense = $PestControlExpense;
    }

    /**
     * @return string
     */
    public function getPoolExpense()
    {
        return $this->PoolExpense;
    }

    /**
     * @param string $PoolExpense
     */
    public function setPoolExpense($PoolExpense)
    {
        $this->PoolExpense = $PoolExpense;
    }

    /**
     * @return string
     */
    public function getSuppliesExpense()
    {
        return $this->SuppliesExpense;
    }

    /**
     * @param string $SuppliesExpense
     */
    public function setSuppliesExpense($SuppliesExpense)
    {
        $this->SuppliesExpense = $SuppliesExpense;
    }

    /**
     * @return string
     */
    public function getTrashExpense()
    {
        return $this->TrashExpense;
    }

    /**
     * @param string $TrashExpense
     */
    public function setTrashExpense($TrashExpense)
    {
        $this->TrashExpense = $TrashExpense;
    }

    /**
     * @return string
     */
    public function getWaterSewerExpense()
    {
        return $this->WaterSewerExpense;
    }

    /**
     * @param string $WaterSewerExpense
     */
    public function setWaterSewerExpense($WaterSewerExpense)
    {
        $this->WaterSewerExpense = $WaterSewerExpense;
    }

    /**
     * @return string
     */
    public function getWorkmansCompensationExpense()
    {
        return $this->WorkmansCompensationExpense;
    }

    /**
     * @param string $WorkmansCompensationExpense
     */
    public function setWorkmansCompensationExpense($WorkmansCompensationExpense)
    {
        $this->WorkmansCompensationExpense = $WorkmansCompensationExpense;
    }

    /**
     * @return string
     */
    public function getProfessionalManagementExpense()
    {
        return $this->ProfessionalManagementExpense;
    }

    /**
     * @param string $ProfessionalManagementExpense
     */
    public function setProfessionalManagementExpense($ProfessionalManagementExpense)
    {
        $this->ProfessionalManagementExpense = $ProfessionalManagementExpense;
    }

    /**
     * @return string
     */
    public function getManagerExpense()
    {
        return $this->ManagerExpense;
    }

    /**
     * @param string $ManagerExpense
     */
    public function setManagerExpense($ManagerExpense)
    {
        $this->ManagerExpense = $ManagerExpense;
    }

    /**
     * @return string
     */
    public function getFinancialDataSource()
    {
        return $this->FinancialDataSource;
    }

    /**
     * @param string $FinancialDataSource
     */
    public function setFinancialDataSource($FinancialDataSource)
    {
        $this->FinancialDataSource = $FinancialDataSource;
    }

    /**
     * @return string
     */
    public function getRentIncludes()
    {
        return $this->RentIncludes;
    }

    /**
     * @param string $RentIncludes
     */
    public function setRentIncludes($RentIncludes)
    {
        $this->RentIncludes = $RentIncludes;
    }

    /**
     * @return string
     */
    public function getFurnished()
    {
        return $this->Furnished;
    }

    /**
     * @param string $Furnished
     */
    public function setFurnished($Furnished)
    {
        $this->Furnished = $Furnished;
    }

    /**
     * @return string
     */
    public function getBusinessName()
    {
        return $this->BusinessName;
    }

    /**
     * @param string $BusinessName
     */
    public function setBusinessName($BusinessName)
    {
        $this->BusinessName = $BusinessName;
    }

    /**
     * @return string
     */
    public function getBusinessType()
    {
        return $this->BusinessType;
    }

    /**
     * @param string $BusinessType
     */
    public function setBusinessType($BusinessType)
    {
        $this->BusinessType = $BusinessType;
    }

    /**
     * @return string
     */
    public function getOwnershipType()
    {
        return $this->OwnershipType;
    }

    /**
     * @param string $OwnershipType
     */
    public function setOwnershipType($OwnershipType)
    {
        $this->OwnershipType = $OwnershipType;
    }

    /**
     * @return string
     */
    public function getSpecialLicenses()
    {
        return $this->SpecialLicenses;
    }

    /**
     * @param string $SpecialLicenses
     */
    public function setSpecialLicenses($SpecialLicenses)
    {
        $this->SpecialLicenses = $SpecialLicenses;
    }

    /**
     * @return string
     */
    public function getNumberOfFullTimeEmployees()
    {
        return $this->NumberOfFullTimeEmployees;
    }

    /**
     * @param string $NumberOfFullTimeEmployees
     */
    public function setNumberOfFullTimeEmployees($NumberOfFullTimeEmployees)
    {
        $this->NumberOfFullTimeEmployees = $NumberOfFullTimeEmployees;
    }

    /**
     * @return string
     */
    public function getNumberOfPartTimeEmployees()
    {
        return $this->NumberOfPartTimeEmployees;
    }

    /**
     * @param string $NumberOfPartTimeEmployees
     */
    public function setNumberOfPartTimeEmployees($NumberOfPartTimeEmployees)
    {
        $this->NumberOfPartTimeEmployees = $NumberOfPartTimeEmployees;
    }

    /**
     * @return string
     */
    public function getLeaseAmount()
    {
        return $this->LeaseAmount;
    }

    /**
     * @param string $LeaseAmount
     */
    public function setLeaseAmount($LeaseAmount)
    {
        $this->LeaseAmount = $LeaseAmount;
    }

    /**
     * @return string
     */
    public function getLeaseAmountFrequency()
    {
        return $this->LeaseAmountFrequency;
    }

    /**
     * @param string $LeaseAmountFrequency
     */
    public function setLeaseAmountFrequency($LeaseAmountFrequency)
    {
        $this->LeaseAmountFrequency = $LeaseAmountFrequency;
    }

    /**
     * @return string
     */
    public function getLeaseExpiration()
    {
        return $this->LeaseExpiration;
    }

    /**
     * @param string $LeaseExpiration
     */
    public function setLeaseExpiration($LeaseExpiration)
    {
        $this->LeaseExpiration = $LeaseExpiration;
    }

    /**
     * @return string
     */
    public function getLeaseRenewalOptionYN()
    {
        return $this->LeaseRenewalOptionYN;
    }

    /**
     * @param string $LeaseRenewalOptionYN
     */
    public function setLeaseRenewalOptionYN($LeaseRenewalOptionYN)
    {
        $this->LeaseRenewalOptionYN = $LeaseRenewalOptionYN;
    }

    /**
     * @return string
     */
    public function getLeaseAssignableYN()
    {
        return $this->LeaseAssignableYN;
    }

    /**
     * @param string $LeaseAssignableYN
     */
    public function setLeaseAssignableYN($LeaseAssignableYN)
    {
        $this->LeaseAssignableYN = $LeaseAssignableYN;
    }

    /**
     * @return string
     */
    public function getHoursDaysofOperation()
    {
        return $this->HoursDaysofOperation;
    }

    /**
     * @param string $HoursDaysofOperation
     */
    public function setHoursDaysofOperation($HoursDaysofOperation)
    {
        $this->HoursDaysofOperation = $HoursDaysofOperation;
    }

    /**
     * @return string
     */
    public function getHoursDaysofOperationDescription()
    {
        return $this->HoursDaysofOperationDescription;
    }

    /**
     * @param string $HoursDaysofOperationDescription
     */
    public function setHoursDaysofOperationDescription($HoursDaysofOperationDescription)
    {
        $this->HoursDaysofOperationDescription = $HoursDaysofOperationDescription;
    }

    /**
     * @return string
     */
    public function getYearEstablished()
    {
        return $this->YearEstablished;
    }

    /**
     * @param string $YearEstablished
     */
    public function setYearEstablished($YearEstablished)
    {
        $this->YearEstablished = $YearEstablished;
    }

    /**
     * @return string
     */
    public function getSeatingCapacity()
    {
        return $this->SeatingCapacity;
    }

    /**
     * @param string $SeatingCapacity
     */
    public function setSeatingCapacity($SeatingCapacity)
    {
        $this->SeatingCapacity = $SeatingCapacity;
    }

    /**
     * @return string
     */
    public function getYearsCurrentOwner()
    {
        return $this->YearsCurrentOwner;
    }

    /**
     * @param string $YearsCurrentOwner
     */
    public function setYearsCurrentOwner($YearsCurrentOwner)
    {
        $this->YearsCurrentOwner = $YearsCurrentOwner;
    }

    /**
     * @return string
     */
    public function getLaborInformation()
    {
        return $this->LaborInformation;
    }

    /**
     * @param string $LaborInformation
     */
    public function setLaborInformation($LaborInformation)
    {
        $this->LaborInformation = $LaborInformation;
    }

    /**
     * @return string
     */
    public function getUtilities()
    {
        return $this->Utilities;
    }

    /**
     * @param string $Utilities
     */
    public function setUtilities($Utilities)
    {
        $this->Utilities = $Utilities;
    }

    /**
     * @return string
     */
    public function getElectric()
    {
        return $this->Electric;
    }

    /**
     * @param string $Electric
     */
    public function setElectric($Electric)
    {
        $this->Electric = $Electric;
    }

    /**
     * @return string
     */
    public function getGas()
    {
        return $this->Gas;
    }

    /**
     * @param string $Gas
     */
    public function setGas($Gas)
    {
        $this->Gas = $Gas;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }

    /**
     * @param string $Telephone
     */
    public function setTelephone($Telephone)
    {
        $this->Telephone = $Telephone;
    }

    /**
     * @return string
     */
    public function getIrrigationWaterRightsYN()
    {
        return $this->IrrigationWaterRightsYN;
    }

    /**
     * @param string $IrrigationWaterRightsYN
     */
    public function setIrrigationWaterRightsYN($IrrigationWaterRightsYN)
    {
        $this->IrrigationWaterRightsYN = $IrrigationWaterRightsYN;
    }

    /**
     * @return string
     */
    public function getIrrigationWaterRightsAcres()
    {
        return $this->IrrigationWaterRightsAcres;
    }

    /**
     * @param string $IrrigationWaterRightsAcres
     */
    public function setIrrigationWaterRightsAcres($IrrigationWaterRightsAcres)
    {
        $this->IrrigationWaterRightsAcres = $IrrigationWaterRightsAcres;
    }

    /**
     * @return string
     */
    public function getIrrigationSource()
    {
        return $this->IrrigationSource;
    }

    /**
     * @param string $IrrigationSource
     */
    public function setIrrigationSource($IrrigationSource)
    {
        $this->IrrigationSource = $IrrigationSource;
    }

    /**
     * @return string
     */
    public function getWaterSource()
    {
        return $this->WaterSource;
    }

    /**
     * @param string $WaterSource
     */
    public function setWaterSource($WaterSource)
    {
        $this->WaterSource = $WaterSource;
    }

    /**
     * @return string
     */
    public function getDistanceToWater()
    {
        return $this->DistanceToWater;
    }

    /**
     * @param string $DistanceToWater
     */
    public function setDistanceToWater($DistanceToWater)
    {
        $this->DistanceToWater = $DistanceToWater;
    }

    /**
     * @return string
     */
    public function getElectricOnPropertyYN()
    {
        return $this->ElectricOnPropertyYN;
    }

    /**
     * @param string $ElectricOnPropertyYN
     */
    public function setElectricOnPropertyYN($ElectricOnPropertyYN)
    {
        $this->ElectricOnPropertyYN = $ElectricOnPropertyYN;
    }

    /**
     * @return string
     */
    public function getDistanceToElectric()
    {
        return $this->DistanceToElectric;
    }

    /**
     * @param string $DistanceToElectric
     */
    public function setDistanceToElectric($DistanceToElectric)
    {
        $this->DistanceToElectric = $DistanceToElectric;
    }

    /**
     * @return string
     */
    public function getSewer()
    {
        return $this->Sewer;
    }

    /**
     * @param string $Sewer
     */
    public function setSewer($Sewer)
    {
        $this->Sewer = $Sewer;
    }

    /**
     * @return string
     */
    public function getDistanceToSewer()
    {
        return $this->DistanceToSewer;
    }

    /**
     * @param string $DistanceToSewer
     */
    public function setDistanceToSewer($DistanceToSewer)
    {
        $this->DistanceToSewer = $DistanceToSewer;
    }

    /**
     * @return string
     */
    public function getDistanceToGas()
    {
        return $this->DistanceToGas;
    }

    /**
     * @param string $DistanceToGas
     */
    public function setDistanceToGas($DistanceToGas)
    {
        $this->DistanceToGas = $DistanceToGas;
    }

    /**
     * @return string
     */
    public function getDistanceToPhoneService()
    {
        return $this->DistanceToPhoneService;
    }

    /**
     * @param string $DistanceToPhoneService
     */
    public function setDistanceToPhoneService($DistanceToPhoneService)
    {
        $this->DistanceToPhoneService = $DistanceToPhoneService;
    }

    /**
     * @return string
     */
    public function getDistanceToStreet()
    {
        return $this->DistanceToStreet;
    }

    /**
     * @param string $DistanceToStreet
     */
    public function setDistanceToStreet($DistanceToStreet)
    {
        $this->DistanceToStreet = $DistanceToStreet;
    }

    /**
     * @return string
     */
    public function getDistanceToSchools()
    {
        return $this->DistanceToSchools;
    }

    /**
     * @param string $DistanceToSchools
     */
    public function setDistanceToSchools($DistanceToSchools)
    {
        $this->DistanceToSchools = $DistanceToSchools;
    }

    /**
     * @return string
     */
    public function getDistanceFromShopping()
    {
        return $this->DistanceFromShopping;
    }

    /**
     * @param string $DistanceFromShopping
     */
    public function setDistanceFromShopping($DistanceFromShopping)
    {
        $this->DistanceFromShopping = $DistanceFromShopping;
    }

    /**
     * @return string
     */
    public function getDistanceToPlaceofWorship()
    {
        return $this->DistanceToPlaceofWorship;
    }

    /**
     * @param string $DistanceToPlaceofWorship
     */
    public function setDistanceToPlaceofWorship($DistanceToPlaceofWorship)
    {
        $this->DistanceToPlaceofWorship = $DistanceToPlaceofWorship;
    }

    /**
     * @return string
     */
    public function getDistanceToBus()
    {
        return $this->DistanceToBus;
    }

    /**
     * @param string $DistanceToBus
     */
    public function setDistanceToBus($DistanceToBus)
    {
        $this->DistanceToBus = $DistanceToBus;
    }

    /**
     * @return string
     */
    public function getDistanceFromSchoolBus()
    {
        return $this->DistanceFromSchoolBus;
    }

    /**
     * @param string $DistanceFromSchoolBus
     */
    public function setDistanceFromSchoolBus($DistanceFromSchoolBus)
    {
        $this->DistanceFromSchoolBus = $DistanceFromSchoolBus;
    }

    /**
     * @return string
     */
    public function getDistanceToFreeway()
    {
        return $this->DistanceToFreeway;
    }

    /**
     * @param string $DistanceToFreeway
     */
    public function setDistanceToFreeway($DistanceToFreeway)
    {
        $this->DistanceToFreeway = $DistanceToFreeway;
    }

    /**
     * @return string
     */
    public function getCropsIncludedYN()
    {
        return $this->CropsIncludedYN;
    }

    /**
     * @param string $CropsIncludedYN
     */
    public function setCropsIncludedYN($CropsIncludedYN)
    {
        $this->CropsIncludedYN = $CropsIncludedYN;
    }

    /**
     * @return string
     */
    public function getGrazingPermitsBlmYN()
    {
        return $this->GrazingPermitsBlmYN;
    }

    /**
     * @param string $GrazingPermitsBlmYN
     */
    public function setGrazingPermitsBlmYN($GrazingPermitsBlmYN)
    {
        $this->GrazingPermitsBlmYN = $GrazingPermitsBlmYN;
    }

    /**
     * @return string
     */
    public function getGrazingPermitsForestServiceYN()
    {
        return $this->GrazingPermitsForestServiceYN;
    }

    /**
     * @param string $GrazingPermitsForestServiceYN
     */
    public function setGrazingPermitsForestServiceYN($GrazingPermitsForestServiceYN)
    {
        $this->GrazingPermitsForestServiceYN = $GrazingPermitsForestServiceYN;
    }

    /**
     * @return string
     */
    public function getGrazingPermitsPrivateYN()
    {
        return $this->GrazingPermitsPrivateYN;
    }

    /**
     * @param string $GrazingPermitsPrivateYN
     */
    public function setGrazingPermitsPrivateYN($GrazingPermitsPrivateYN)
    {
        $this->GrazingPermitsPrivateYN = $GrazingPermitsPrivateYN;
    }

    /**
     * @return string
     */
    public function getCultivatedArea()
    {
        return $this->CultivatedArea;
    }

    /**
     * @param string $CultivatedArea
     */
    public function setCultivatedArea($CultivatedArea)
    {
        $this->CultivatedArea = $CultivatedArea;
    }

    /**
     * @return string
     */
    public function getPastureArea()
    {
        return $this->PastureArea;
    }

    /**
     * @param string $PastureArea
     */
    public function setPastureArea($PastureArea)
    {
        $this->PastureArea = $PastureArea;
    }

    /**
     * @return string
     */
    public function getRangeArea()
    {
        return $this->RangeArea;
    }

    /**
     * @param string $RangeArea
     */
    public function setRangeArea($RangeArea)
    {
        $this->RangeArea = $RangeArea;
    }

    /**
     * @return string
     */
    public function getWoodedArea()
    {
        return $this->WoodedArea;
    }

    /**
     * @param string $WoodedArea
     */
    public function setWoodedArea($WoodedArea)
    {
        $this->WoodedArea = $WoodedArea;
    }

    /**
     * @return string
     */
    public function getVegetation()
    {
        return $this->Vegetation;
    }

    /**
     * @param string $Vegetation
     */
    public function setVegetation($Vegetation)
    {
        $this->Vegetation = $Vegetation;
    }

    /**
     * @return string
     */
    public function getFencing()
    {
        return $this->Fencing;
    }

    /**
     * @param string $Fencing
     */
    public function setFencing($Fencing)
    {
        $this->Fencing = $Fencing;
    }

    /**
     * @return string
     */
    public function getFarmCreditServiceInclYN()
    {
        return $this->FarmCreditServiceInclYN;
    }

    /**
     * @param string $FarmCreditServiceInclYN
     */
    public function setFarmCreditServiceInclYN($FarmCreditServiceInclYN)
    {
        $this->FarmCreditServiceInclYN = $FarmCreditServiceInclYN;
    }

    /**
     * @return string
     */
    public function getFarmLandAreaUnits()
    {
        return $this->FarmLandAreaUnits;
    }

    /**
     * @param string $FarmLandAreaUnits
     */
    public function setFarmLandAreaUnits($FarmLandAreaUnits)
    {
        $this->FarmLandAreaUnits = $FarmLandAreaUnits;
    }

    /**
     * @return string
     */
    public function getFarmLandAreaSource()
    {
        return $this->FarmLandAreaSource;
    }

    /**
     * @param string $FarmLandAreaSource
     */
    public function setFarmLandAreaSource($FarmLandAreaSource)
    {
        $this->FarmLandAreaSource = $FarmLandAreaSource;
    }

    /**
     * @return string
     */
    public function getBedroomsTotal()
    {
        return $this->BedroomsTotal;
    }

    /**
     * @param string $BedroomsTotal
     */
    public function setBedroomsTotal($BedroomsTotal)
    {
        $this->BedroomsTotal = $BedroomsTotal;
    }

    /**
     * @return string
     */
    public function getBedroomsPossible()
    {
        return $this->BedroomsPossible;
    }

    /**
     * @param string $BedroomsPossible
     */
    public function setBedroomsPossible($BedroomsPossible)
    {
        $this->BedroomsPossible = $BedroomsPossible;
    }

    /**
     * @return string
     */
    public function getMainLevelBedrooms()
    {
        return $this->MainLevelBedrooms;
    }

    /**
     * @param string $MainLevelBedrooms
     */
    public function setMainLevelBedrooms($MainLevelBedrooms)
    {
        $this->MainLevelBedrooms = $MainLevelBedrooms;
    }

    /**
     * @return string
     */
    public function getBathroomsTotalInteger()
    {
        return $this->BathroomsTotalInteger;
    }

    /**
     * @param string $BathroomsTotalInteger
     */
    public function setBathroomsTotalInteger($BathroomsTotalInteger)
    {
        $this->BathroomsTotalInteger = $BathroomsTotalInteger;
    }

    /**
     * @return string
     */
    public function getBathroomsFull()
    {
        return $this->BathroomsFull;
    }

    /**
     * @param string $BathroomsFull
     */
    public function setBathroomsFull($BathroomsFull)
    {
        $this->BathroomsFull = $BathroomsFull;
    }

    /**
     * @return string
     */
    public function getBathroomsHalf()
    {
        return $this->BathroomsHalf;
    }

    /**
     * @param string $BathroomsHalf
     */
    public function setBathroomsHalf($BathroomsHalf)
    {
        $this->BathroomsHalf = $BathroomsHalf;
    }

    /**
     * @return string
     */
    public function getBathroomsThreeQuarter()
    {
        return $this->BathroomsThreeQuarter;
    }

    /**
     * @param string $BathroomsThreeQuarter
     */
    public function setBathroomsThreeQuarter($BathroomsThreeQuarter)
    {
        $this->BathroomsThreeQuarter = $BathroomsThreeQuarter;
    }

    /**
     * @return string
     */
    public function getBathroomsOneQuarter()
    {
        return $this->BathroomsOneQuarter;
    }

    /**
     * @param string $BathroomsOneQuarter
     */
    public function setBathroomsOneQuarter($BathroomsOneQuarter)
    {
        $this->BathroomsOneQuarter = $BathroomsOneQuarter;
    }

    /**
     * @return string
     */
    public function getBathroomsPartial()
    {
        return $this->BathroomsPartial;
    }

    /**
     * @param string $BathroomsPartial
     */
    public function setBathroomsPartial($BathroomsPartial)
    {
        $this->BathroomsPartial = $BathroomsPartial;
    }

    /**
     * @return string
     */
    public function getMainLevelBathrooms()
    {
        return $this->MainLevelBathrooms;
    }

    /**
     * @param string $MainLevelBathrooms
     */
    public function setMainLevelBathrooms($MainLevelBathrooms)
    {
        $this->MainLevelBathrooms = $MainLevelBathrooms;
    }

    /**
     * @return string
     */
    public function getLivingArea()
    {
        return $this->LivingArea;
    }

    /**
     * @param string $LivingArea
     */
    public function setLivingArea($LivingArea)
    {
        $this->LivingArea = $LivingArea;
    }

    /**
     * @return string
     */
    public function getLivingAreaUnits()
    {
        return $this->LivingAreaUnits;
    }

    /**
     * @param string $LivingAreaUnits
     */
    public function setLivingAreaUnits($LivingAreaUnits)
    {
        $this->LivingAreaUnits = $LivingAreaUnits;
    }

    /**
     * @return string
     */
    public function getPropertyAttachedYN()
    {
        return $this->PropertyAttachedYN;
    }

    /**
     * @param string $PropertyAttachedYN
     */
    public function setPropertyAttachedYN($PropertyAttachedYN)
    {
        $this->PropertyAttachedYN = $PropertyAttachedYN;
    }

    /**
     * @return string
     */
    public function getGarageYN()
    {
        return $this->GarageYN;
    }

    /**
     * @param string $GarageYN
     */
    public function setGarageYN($GarageYN)
    {
        $this->GarageYN = $GarageYN;
    }

    /**
     * @return string
     */
    public function getGarageSpaces()
    {
        return $this->GarageSpaces;
    }

    /**
     * @param string $GarageSpaces
     */
    public function setGarageSpaces($GarageSpaces)
    {
        $this->GarageSpaces = $GarageSpaces;
    }

    /**
     * @return string
     */
    public function getStoriesTotal()
    {
        return $this->StoriesTotal;
    }

    /**
     * @param string $StoriesTotal
     */
    public function setStoriesTotal($StoriesTotal)
    {
        $this->StoriesTotal = $StoriesTotal;
    }

    /**
     * @return string
     */
    public function getStories()
    {
        return $this->Stories;
    }

    /**
     * @param string $Stories
     */
    public function setStories($Stories)
    {
        $this->Stories = $Stories;
    }

    /**
     * @return string
     */
    public function getLevels()
    {
        return $this->Levels;
    }

    /**
     * @param string $Levels
     */
    public function setLevels($Levels)
    {
        $this->Levels = $Levels;
    }

    /**
     * @return string
     */
    public function getYearBuilt()
    {
        return $this->YearBuilt;
    }

    /**
     * @param string $YearBuilt
     */
    public function setYearBuilt($YearBuilt)
    {
        $this->YearBuilt = $YearBuilt;
    }

    /**
     * @return string
     */
    public function getMobileLength()
    {
        return $this->MobileLength;
    }

    /**
     * @param string $MobileLength
     */
    public function setMobileLength($MobileLength)
    {
        $this->MobileLength = $MobileLength;
    }

    /**
     * @return string
     */
    public function getMobileWidth()
    {
        return $this->MobileWidth;
    }

    /**
     * @param string $MobileWidth
     */
    public function setMobileWidth($MobileWidth)
    {
        $this->MobileWidth = $MobileWidth;
    }

    /**
     * @return string
     */
    public function getMake()
    {
        return $this->Make;
    }

    /**
     * @param string $Make
     */
    public function setMake($Make)
    {
        $this->Make = $Make;
    }

    /**
     * @return string
     */
    public function getModel()
    {
        return $this->Model;
    }

    /**
     * @param string $Model
     */
    public function setModel($Model)
    {
        $this->Model = $Model;
    }

    /**
     * @return string
     */
    public function getParcelNumber()
    {
        return $this->ParcelNumber;
    }

    /**
     * @param string $ParcelNumber
     */
    public function setParcelNumber($ParcelNumber)
    {
        $this->ParcelNumber = $ParcelNumber;
    }

    /**
     * @return string
     */
    public function getLivingAreaSource()
    {
        return $this->LivingAreaSource;
    }

    /**
     * @param string $LivingAreaSource
     */
    public function setLivingAreaSource($LivingAreaSource)
    {
        $this->LivingAreaSource = $LivingAreaSource;
    }

    /**
     * @return string
     */
    public function getAboveGradeFinishedArea()
    {
        return $this->AboveGradeFinishedArea;
    }

    /**
     * @param string $AboveGradeFinishedArea
     */
    public function setAboveGradeFinishedArea($AboveGradeFinishedArea)
    {
        $this->AboveGradeFinishedArea = $AboveGradeFinishedArea;
    }

    /**
     * @return string
     */
    public function getAboveGradeFinishedAreaSource()
    {
        return $this->AboveGradeFinishedAreaSource;
    }

    /**
     * @param string $AboveGradeFinishedAreaSource
     */
    public function setAboveGradeFinishedAreaSource($AboveGradeFinishedAreaSource)
    {
        $this->AboveGradeFinishedAreaSource = $AboveGradeFinishedAreaSource;
    }

    /**
     * @return string
     */
    public function getAboveGradeFinishedAreaUnits()
    {
        return $this->AboveGradeFinishedAreaUnits;
    }

    /**
     * @param string $AboveGradeFinishedAreaUnits
     */
    public function setAboveGradeFinishedAreaUnits($AboveGradeFinishedAreaUnits)
    {
        $this->AboveGradeFinishedAreaUnits = $AboveGradeFinishedAreaUnits;
    }

    /**
     * @return string
     */
    public function getBelowGradeFinishedArea()
    {
        return $this->BelowGradeFinishedArea;
    }

    /**
     * @param string $BelowGradeFinishedArea
     */
    public function setBelowGradeFinishedArea($BelowGradeFinishedArea)
    {
        $this->BelowGradeFinishedArea = $BelowGradeFinishedArea;
    }

    /**
     * @return string
     */
    public function getBelowGradeFinishedAreaSource()
    {
        return $this->BelowGradeFinishedAreaSource;
    }

    /**
     * @param string $BelowGradeFinishedAreaSource
     */
    public function setBelowGradeFinishedAreaSource($BelowGradeFinishedAreaSource)
    {
        $this->BelowGradeFinishedAreaSource = $BelowGradeFinishedAreaSource;
    }

    /**
     * @return string
     */
    public function getBelowGradeFinishedAreaUnits()
    {
        return $this->BelowGradeFinishedAreaUnits;
    }

    /**
     * @param string $BelowGradeFinishedAreaUnits
     */
    public function setBelowGradeFinishedAreaUnits($BelowGradeFinishedAreaUnits)
    {
        $this->BelowGradeFinishedAreaUnits = $BelowGradeFinishedAreaUnits;
    }

    /**
     * @return string
     */
    public function getBuildingAreaTotal()
    {
        return $this->BuildingAreaTotal;
    }

    /**
     * @param string $BuildingAreaTotal
     */
    public function setBuildingAreaTotal($BuildingAreaTotal)
    {
        $this->BuildingAreaTotal = $BuildingAreaTotal;
    }

    /**
     * @return string
     */
    public function getBuildingAreaSource()
    {
        return $this->BuildingAreaSource;
    }

    /**
     * @param string $BuildingAreaSource
     */
    public function setBuildingAreaSource($BuildingAreaSource)
    {
        $this->BuildingAreaSource = $BuildingAreaSource;
    }

    /**
     * @return string
     */
    public function getBuildingAreaUnits()
    {
        return $this->BuildingAreaUnits;
    }

    /**
     * @param string $BuildingAreaUnits
     */
    public function setBuildingAreaUnits($BuildingAreaUnits)
    {
        $this->BuildingAreaUnits = $BuildingAreaUnits;
    }

    /**
     * @return string
     */
    public function getLeasableArea()
    {
        return $this->LeasableArea;
    }

    /**
     * @param string $LeasableArea
     */
    public function setLeasableArea($LeasableArea)
    {
        $this->LeasableArea = $LeasableArea;
    }

    /**
     * @return string
     */
    public function getLeasableAreaUnits()
    {
        return $this->LeasableAreaUnits;
    }

    /**
     * @param string $LeasableAreaUnits
     */
    public function setLeasableAreaUnits($LeasableAreaUnits)
    {
        $this->LeasableAreaUnits = $LeasableAreaUnits;
    }

    /**
     * @return string
     */
    public function getCommonWalls()
    {
        return $this->CommonWalls;
    }

    /**
     * @param string $CommonWalls
     */
    public function setCommonWalls($CommonWalls)
    {
        $this->CommonWalls = $CommonWalls;
    }

    /**
     * @return string
     */
    public function getFoundationArea()
    {
        return $this->FoundationArea;
    }

    /**
     * @param string $FoundationArea
     */
    public function setFoundationArea($FoundationArea)
    {
        $this->FoundationArea = $FoundationArea;
    }

    /**
     * @return string
     */
    public function getAttachedGarageYN()
    {
        return $this->AttachedGarageYN;
    }

    /**
     * @param string $AttachedGarageYN
     */
    public function setAttachedGarageYN($AttachedGarageYN)
    {
        $this->AttachedGarageYN = $AttachedGarageYN;
    }

    /**
     * @return string
     */
    public function getCarportSpaces()
    {
        return $this->CarportSpaces;
    }

    /**
     * @param string $CarportSpaces
     */
    public function setCarportSpaces($CarportSpaces)
    {
        $this->CarportSpaces = $CarportSpaces;
    }

    /**
     * @return string
     */
    public function getCarportYN()
    {
        return $this->CarportYN;
    }

    /**
     * @param string $CarportYN
     */
    public function setCarportYN($CarportYN)
    {
        $this->CarportYN = $CarportYN;
    }

    /**
     * @return string
     */
    public function getOpenParkingYN()
    {
        return $this->OpenParkingYN;
    }

    /**
     * @param string $OpenParkingYN
     */
    public function setOpenParkingYN($OpenParkingYN)
    {
        $this->OpenParkingYN = $OpenParkingYN;
    }

    /**
     * @return string
     */
    public function getOpenParkingSpaces()
    {
        return $this->OpenParkingSpaces;
    }

    /**
     * @param string $OpenParkingSpaces
     */
    public function setOpenParkingSpaces($OpenParkingSpaces)
    {
        $this->OpenParkingSpaces = $OpenParkingSpaces;
    }

    /**
     * @return string
     */
    public function getCoveredSpaces()
    {
        return $this->CoveredSpaces;
    }

    /**
     * @param string $CoveredSpaces
     */
    public function setCoveredSpaces($CoveredSpaces)
    {
        $this->CoveredSpaces = $CoveredSpaces;
    }

    /**
     * @return string
     */
    public function getParkingFeatures()
    {
        return $this->ParkingFeatures;
    }

    /**
     * @param string $ParkingFeatures
     */
    public function setParkingFeatures($ParkingFeatures)
    {
        $this->ParkingFeatures = $ParkingFeatures;
    }

    /**
     * @return string
     */
    public function getOtherParking()
    {
        return $this->OtherParking;
    }

    /**
     * @param string $OtherParking
     */
    public function setOtherParking($OtherParking)
    {
        $this->OtherParking = $OtherParking;
    }

    /**
     * @return string
     */
    public function getParkingTotal()
    {
        return $this->ParkingTotal;
    }

    /**
     * @param string $ParkingTotal
     */
    public function setParkingTotal($ParkingTotal)
    {
        $this->ParkingTotal = $ParkingTotal;
    }

    /**
     * @return string
     */
    public function getRVParkingDimensions()
    {
        return $this->RVParkingDimensions;
    }

    /**
     * @param string $RVParkingDimensions
     */
    public function setRVParkingDimensions($RVParkingDimensions)
    {
        $this->RVParkingDimensions = $RVParkingDimensions;
    }

    /**
     * @return string
     */
    public function getEntryLocation()
    {
        return $this->EntryLocation;
    }

    /**
     * @param string $EntryLocation
     */
    public function setEntryLocation($EntryLocation)
    {
        $this->EntryLocation = $EntryLocation;
    }

    /**
     * @return string
     */
    public function getEntryLevel()
    {
        return $this->EntryLevel;
    }

    /**
     * @param string $EntryLevel
     */
    public function setEntryLevel($EntryLevel)
    {
        $this->EntryLevel = $EntryLevel;
    }

    /**
     * @return string
     */
    public function getYearBuiltEffective()
    {
        return $this->YearBuiltEffective;
    }

    /**
     * @param string $YearBuiltEffective
     */
    public function setYearBuiltEffective($YearBuiltEffective)
    {
        $this->YearBuiltEffective = $YearBuiltEffective;
    }

    /**
     * @return string
     */
    public function getYearBuiltDetails()
    {
        return $this->YearBuiltDetails;
    }

    /**
     * @param string $YearBuiltDetails
     */
    public function setYearBuiltDetails($YearBuiltDetails)
    {
        $this->YearBuiltDetails = $YearBuiltDetails;
    }

    /**
     * @return string
     */
    public function getYearBuiltSource()
    {
        return $this->YearBuiltSource;
    }

    /**
     * @param string $YearBuiltSource
     */
    public function setYearBuiltSource($YearBuiltSource)
    {
        $this->YearBuiltSource = $YearBuiltSource;
    }

    /**
     * @return string
     */
    public function getNewConstructionYN()
    {
        return $this->NewConstructionYN;
    }

    /**
     * @param string $NewConstructionYN
     */
    public function setNewConstructionYN($NewConstructionYN)
    {
        $this->NewConstructionYN = $NewConstructionYN;
    }

    /**
     * @return string
     */
    public function getGreenBuildingVerificationType()
    {
        return $this->GreenBuildingVerificationType;
    }

    /**
     * @param string $GreenBuildingVerificationType
     */
    public function setGreenBuildingVerificationType($GreenBuildingVerificationType)
    {
        $this->GreenBuildingVerificationType = $GreenBuildingVerificationType;
    }

    /**
     * @return string
     */
    public function getGreenVerificationEnergyStarBody()
    {
        return $this->GreenVerificationEnergyStarBody;
    }

    /**
     * @param string $GreenVerificationEnergyStarBody
     */
    public function setGreenVerificationEnergyStarBody($GreenVerificationEnergyStarBody)
    {
        $this->GreenVerificationEnergyStarBody = $GreenVerificationEnergyStarBody;
    }

    /**
     * @return string
     */
    public function getGreenVerificationEnergyStarYear()
    {
        return $this->GreenVerificationEnergyStarYear;
    }

    /**
     * @param string $GreenVerificationEnergyStarYear
     */
    public function setGreenVerificationEnergyStarYear($GreenVerificationEnergyStarYear)
    {
        $this->GreenVerificationEnergyStarYear = $GreenVerificationEnergyStarYear;
    }

    /**
     * @return string
     */
    public function getGreenVerificationEnergyStarRating()
    {
        return $this->GreenVerificationEnergyStarRating;
    }

    /**
     * @param string $GreenVerificationEnergyStarRating
     */
    public function setGreenVerificationEnergyStarRating($GreenVerificationEnergyStarRating)
    {
        $this->GreenVerificationEnergyStarRating = $GreenVerificationEnergyStarRating;
    }

    /**
     * @return string
     */
    public function getGreenVerificationEnergyStarMetric()
    {
        return $this->GreenVerificationEnergyStarMetric;
    }

    /**
     * @param string $GreenVerificationEnergyStarMetric
     */
    public function setGreenVerificationEnergyStarMetric($GreenVerificationEnergyStarMetric)
    {
        $this->GreenVerificationEnergyStarMetric = $GreenVerificationEnergyStarMetric;
    }

    /**
     * @return string
     */
    public function getGreenVerificationEnergyStarURL()
    {
        return $this->GreenVerificationEnergyStarURL;
    }

    /**
     * @param string $GreenVerificationEnergyStarURL
     */
    public function setGreenVerificationEnergyStarURL($GreenVerificationEnergyStarURL)
    {
        $this->GreenVerificationEnergyStarURL = $GreenVerificationEnergyStarURL;
    }

    /**
     * @return string
     */
    public function getBuilderName()
    {
        return $this->BuilderName;
    }

    /**
     * @param string $BuilderName
     */
    public function setBuilderName($BuilderName)
    {
        $this->BuilderName = $BuilderName;
    }

    /**
     * @return string
     */
    public function getBuilderModel()
    {
        return $this->BuilderModel;
    }

    /**
     * @param string $BuilderModel
     */
    public function setBuilderModel($BuilderModel)
    {
        $this->BuilderModel = $BuilderModel;
    }

    /**
     * @return string
     */
    public function getBuildingName()
    {
        return $this->BuildingName;
    }

    /**
     * @param string $BuildingName
     */
    public function setBuildingName($BuildingName)
    {
        $this->BuildingName = $BuildingName;
    }

    /**
     * @return string
     */
    public function getBuildingFeatures()
    {
        return $this->BuildingFeatures;
    }

    /**
     * @param string $BuildingFeatures
     */
    public function setBuildingFeatures($BuildingFeatures)
    {
        $this->BuildingFeatures = $BuildingFeatures;
    }

    /**
     * @return string
     */
    public function getHeating()
    {
        return $this->Heating;
    }

    /**
     * @param string $Heating
     */
    public function setHeating($Heating)
    {
        $this->Heating = $Heating;
    }

    /**
     * @return string
     */
    public function getHeatingYN()
    {
        return $this->HeatingYN;
    }

    /**
     * @param string $HeatingYN
     */
    public function setHeatingYN($HeatingYN)
    {
        $this->HeatingYN = $HeatingYN;
    }

    /**
     * @return string
     */
    public function getCooling()
    {
        return $this->Cooling;
    }

    /**
     * @param string $Cooling
     */
    public function setCooling($Cooling)
    {
        $this->Cooling = $Cooling;
    }

    /**
     * @return string
     */
    public function getCoolingYN()
    {
        return $this->CoolingYN;
    }

    /**
     * @param string $CoolingYN
     */
    public function setCoolingYN($CoolingYN)
    {
        $this->CoolingYN = $CoolingYN;
    }

    /**
     * @return string
     */
    public function getInteriorFeatures()
    {
        return $this->InteriorFeatures;
    }

    /**
     * @param string $InteriorFeatures
     */
    public function setInteriorFeatures($InteriorFeatures)
    {
        $this->InteriorFeatures = $InteriorFeatures;
    }

    /**
     * @return string
     */
    public function getExteriorFeatures()
    {
        return $this->ExteriorFeatures;
    }

    /**
     * @param string $ExteriorFeatures
     */
    public function setExteriorFeatures($ExteriorFeatures)
    {
        $this->ExteriorFeatures = $ExteriorFeatures;
    }

    /**
     * @return string
     */
    public function getPatioAndPorchFeatures()
    {
        return $this->PatioAndPorchFeatures;
    }

    /**
     * @param string $PatioAndPorchFeatures
     */
    public function setPatioAndPorchFeatures($PatioAndPorchFeatures)
    {
        $this->PatioAndPorchFeatures = $PatioAndPorchFeatures;
    }

    /**
     * @return string
     */
    public function getArchitecturalStyle()
    {
        return $this->ArchitecturalStyle;
    }

    /**
     * @param string $ArchitecturalStyle
     */
    public function setArchitecturalStyle($ArchitecturalStyle)
    {
        $this->ArchitecturalStyle = $ArchitecturalStyle;
    }

    /**
     * @return string
     */
    public function getPropertyCondition()
    {
        return $this->PropertyCondition;
    }

    /**
     * @param string $PropertyCondition
     */
    public function setPropertyCondition($PropertyCondition)
    {
        $this->PropertyCondition = $PropertyCondition;
    }

    /**
     * @return string
     */
    public function getFireplaceFeatures()
    {
        return $this->FireplaceFeatures;
    }

    /**
     * @param string $FireplaceFeatures
     */
    public function setFireplaceFeatures($FireplaceFeatures)
    {
        $this->FireplaceFeatures = $FireplaceFeatures;
    }

    /**
     * @return string
     */
    public function getFireplacesTotal()
    {
        return $this->FireplacesTotal;
    }

    /**
     * @param string $FireplacesTotal
     */
    public function setFireplacesTotal($FireplacesTotal)
    {
        $this->FireplacesTotal = $FireplacesTotal;
    }

    /**
     * @return string
     */
    public function getFireplaceYN()
    {
        return $this->FireplaceYN;
    }

    /**
     * @param string $FireplaceYN
     */
    public function setFireplaceYN($FireplaceYN)
    {
        $this->FireplaceYN = $FireplaceYN;
    }

    /**
     * @return string
     */
    public function getDoorFeatures()
    {
        return $this->DoorFeatures;
    }

    /**
     * @param string $DoorFeatures
     */
    public function setDoorFeatures($DoorFeatures)
    {
        $this->DoorFeatures = $DoorFeatures;
    }

    /**
     * @return string
     */
    public function getWindowFeatures()
    {
        return $this->WindowFeatures;
    }

    /**
     * @param string $WindowFeatures
     */
    public function setWindowFeatures($WindowFeatures)
    {
        $this->WindowFeatures = $WindowFeatures;
    }

    /**
     * @return string
     */
    public function getRoof()
    {
        return $this->Roof;
    }

    /**
     * @param string $Roof
     */
    public function setRoof($Roof)
    {
        $this->Roof = $Roof;
    }

    /**
     * @return string
     */
    public function getConstructionMaterials()
    {
        return $this->ConstructionMaterials;
    }

    /**
     * @param string $ConstructionMaterials
     */
    public function setConstructionMaterials($ConstructionMaterials)
    {
        $this->ConstructionMaterials = $ConstructionMaterials;
    }

    /**
     * @return string
     */
    public function getFoundationDetails()
    {
        return $this->FoundationDetails;
    }

    /**
     * @param string $FoundationDetails
     */
    public function setFoundationDetails($FoundationDetails)
    {
        $this->FoundationDetails = $FoundationDetails;
    }

    /**
     * @return string
     */
    public function getBasement()
    {
        return $this->Basement;
    }

    /**
     * @param string $Basement
     */
    public function setBasement($Basement)
    {
        $this->Basement = $Basement;
    }

    /**
     * @return string
     */
    public function getFlooring()
    {
        return $this->Flooring;
    }

    /**
     * @param string $Flooring
     */
    public function setFlooring($Flooring)
    {
        $this->Flooring = $Flooring;
    }

    /**
     * @return string
     */
    public function getOtherStructures()
    {
        return $this->OtherStructures;
    }

    /**
     * @param string $OtherStructures
     */
    public function setOtherStructures($OtherStructures)
    {
        $this->OtherStructures = $OtherStructures;
    }

    /**
     * @return string
     */
    public function getDirectionFaces()
    {
        return $this->DirectionFaces;
    }

    /**
     * @param string $DirectionFaces
     */
    public function setDirectionFaces($DirectionFaces)
    {
        $this->DirectionFaces = $DirectionFaces;
    }

    /**
     * @return string
     */
    public function getOtherEquipment()
    {
        return $this->OtherEquipment;
    }

    /**
     * @param string $OtherEquipment
     */
    public function setOtherEquipment($OtherEquipment)
    {
        $this->OtherEquipment = $OtherEquipment;
    }

    /**
     * @return string
     */
    public function getAppliances()
    {
        return $this->Appliances;
    }

    /**
     * @param string $Appliances
     */
    public function setAppliances($Appliances)
    {
        $this->Appliances = $Appliances;
    }

    /**
     * @return string
     */
    public function getLaundryFeatures()
    {
        return $this->LaundryFeatures;
    }

    /**
     * @param string $LaundryFeatures
     */
    public function setLaundryFeatures($LaundryFeatures)
    {
        $this->LaundryFeatures = $LaundryFeatures;
    }

    /**
     * @return string
     */
    public function getSecurityFeatures()
    {
        return $this->SecurityFeatures;
    }

    /**
     * @param string $SecurityFeatures
     */
    public function setSecurityFeatures($SecurityFeatures)
    {
        $this->SecurityFeatures = $SecurityFeatures;
    }

    /**
     * @return string
     */
    public function getNumberOfSeparateElectricMeters()
    {
        return $this->NumberOfSeparateElectricMeters;
    }

    /**
     * @param string $NumberOfSeparateElectricMeters
     */
    public function setNumberOfSeparateElectricMeters($NumberOfSeparateElectricMeters)
    {
        $this->NumberOfSeparateElectricMeters = $NumberOfSeparateElectricMeters;
    }

    /**
     * @return string
     */
    public function getNumberOfSeparateGasMeters()
    {
        return $this->NumberOfSeparateGasMeters;
    }

    /**
     * @param string $NumberOfSeparateGasMeters
     */
    public function setNumberOfSeparateGasMeters($NumberOfSeparateGasMeters)
    {
        $this->NumberOfSeparateGasMeters = $NumberOfSeparateGasMeters;
    }

    /**
     * @return string
     */
    public function getNumberOfSeparateWaterMeters()
    {
        return $this->NumberOfSeparateWaterMeters;
    }

    /**
     * @param string $NumberOfSeparateWaterMeters
     */
    public function setNumberOfSeparateWaterMeters($NumberOfSeparateWaterMeters)
    {
        $this->NumberOfSeparateWaterMeters = $NumberOfSeparateWaterMeters;
    }

    /**
     * @return string
     */
    public function getGreenEnergyEfficient()
    {
        return $this->GreenEnergyEfficient;
    }

    /**
     * @param string $GreenEnergyEfficient
     */
    public function setGreenEnergyEfficient($GreenEnergyEfficient)
    {
        $this->GreenEnergyEfficient = $GreenEnergyEfficient;
    }

    /**
     * @return string
     */
    public function getGreenEnergyGeneration()
    {
        return $this->GreenEnergyGeneration;
    }

    /**
     * @param string $GreenEnergyGeneration
     */
    public function setGreenEnergyGeneration($GreenEnergyGeneration)
    {
        $this->GreenEnergyGeneration = $GreenEnergyGeneration;
    }

    /**
     * @return string
     */
    public function getGreenSustainability()
    {
        return $this->GreenSustainability;
    }

    /**
     * @param string $GreenSustainability
     */
    public function setGreenSustainability($GreenSustainability)
    {
        $this->GreenSustainability = $GreenSustainability;
    }

    /**
     * @return string
     */
    public function getGreenWaterConservation()
    {
        return $this->GreenWaterConservation;
    }

    /**
     * @param string $GreenWaterConservation
     */
    public function setGreenWaterConservation($GreenWaterConservation)
    {
        $this->GreenWaterConservation = $GreenWaterConservation;
    }

    /**
     * @return string
     */
    public function getGreenIndoorAirQuality()
    {
        return $this->GreenIndoorAirQuality;
    }

    /**
     * @param string $GreenIndoorAirQuality
     */
    public function setGreenIndoorAirQuality($GreenIndoorAirQuality)
    {
        $this->GreenIndoorAirQuality = $GreenIndoorAirQuality;
    }

    /**
     * @return string
     */
    public function getGreenLocation()
    {
        return $this->GreenLocation;
    }

    /**
     * @param string $GreenLocation
     */
    public function setGreenLocation($GreenLocation)
    {
        $this->GreenLocation = $GreenLocation;
    }

    /**
     * @return string
     */
    public function getWalkScore()
    {
        return $this->WalkScore;
    }

    /**
     * @param string $WalkScore
     */
    public function setWalkScore($WalkScore)
    {
        $this->WalkScore = $WalkScore;
    }

    /**
     * @return string
     */
    public function getHabitableResidenceYN()
    {
        return $this->HabitableResidenceYN;
    }

    /**
     * @param string $HabitableResidenceYN
     */
    public function setHabitableResidenceYN($HabitableResidenceYN)
    {
        $this->HabitableResidenceYN = $HabitableResidenceYN;
    }

    /**
     * @return string
     */
    public function getBodyType()
    {
        return $this->BodyType;
    }

    /**
     * @param string $BodyType
     */
    public function setBodyType($BodyType)
    {
        $this->BodyType = $BodyType;
    }

    /**
     * @return string
     */
    public function getSkirt()
    {
        return $this->Skirt;
    }

    /**
     * @param string $Skirt
     */
    public function setSkirt($Skirt)
    {
        $this->Skirt = $Skirt;
    }

    /**
     * @return string
     */
    public function getMobileDimUnits()
    {
        return $this->MobileDimUnits;
    }

    /**
     * @param string $MobileDimUnits
     */
    public function setMobileDimUnits($MobileDimUnits)
    {
        $this->MobileDimUnits = $MobileDimUnits;
    }

    /**
     * @return string
     */
    public function getParkName()
    {
        return $this->ParkName;
    }

    /**
     * @param string $ParkName
     */
    public function setParkName($ParkName)
    {
        $this->ParkName = $ParkName;
    }

    /**
     * @return string
     */
    public function getParkManagerName()
    {
        return $this->ParkManagerName;
    }

    /**
     * @param string $ParkManagerName
     */
    public function setParkManagerName($ParkManagerName)
    {
        $this->ParkManagerName = $ParkManagerName;
    }

    /**
     * @return string
     */
    public function getParkManagerPhone()
    {
        return $this->ParkManagerPhone;
    }

    /**
     * @param string $ParkManagerPhone
     */
    public function setParkManagerPhone($ParkManagerPhone)
    {
        $this->ParkManagerPhone = $ParkManagerPhone;
    }

    /**
     * @return string
     */
    public function getMobileHomeRemainsYN()
    {
        return $this->MobileHomeRemainsYN;
    }

    /**
     * @param string $MobileHomeRemainsYN
     */
    public function setMobileHomeRemainsYN($MobileHomeRemainsYN)
    {
        $this->MobileHomeRemainsYN = $MobileHomeRemainsYN;
    }

    /**
     * @return string
     */
    public function getNumberOfPads()
    {
        return $this->NumberOfPads;
    }

    /**
     * @param string $NumberOfPads
     */
    public function setNumberOfPads($NumberOfPads)
    {
        $this->NumberOfPads = $NumberOfPads;
    }

    /**
     * @return string
     */
    public function getSerialU()
    {
        return $this->SerialU;
    }

    /**
     * @param string $SerialU
     */
    public function setSerialU($SerialU)
    {
        $this->SerialU = $SerialU;
    }

    /**
     * @return string
     */
    public function getDOH1()
    {
        return $this->DOH1;
    }

    /**
     * @param string $DOH1
     */
    public function setDOH1($DOH1)
    {
        $this->DOH1 = $DOH1;
    }

    /**
     * @return string
     */
    public function getLicense1()
    {
        return $this->License1;
    }

    /**
     * @param string $License1
     */
    public function setLicense1($License1)
    {
        $this->License1 = $License1;
    }

    /**
     * @return string
     */
    public function getSerialX()
    {
        return $this->SerialX;
    }

    /**
     * @param string $SerialX
     */
    public function setSerialX($SerialX)
    {
        $this->SerialX = $SerialX;
    }

    /**
     * @return string
     */
    public function getDOH2()
    {
        return $this->DOH2;
    }

    /**
     * @param string $DOH2
     */
    public function setDOH2($DOH2)
    {
        $this->DOH2 = $DOH2;
    }

    /**
     * @return string
     */
    public function getLicense2()
    {
        return $this->License2;
    }

    /**
     * @param string $License2
     */
    public function setLicense2($License2)
    {
        $this->License2 = $License2;
    }

    /**
     * @return string
     */
    public function getSerialXX()
    {
        return $this->SerialXX;
    }

    /**
     * @param string $SerialXX
     */
    public function setSerialXX($SerialXX)
    {
        $this->SerialXX = $SerialXX;
    }

    /**
     * @return string
     */
    public function getDOH3()
    {
        return $this->DOH3;
    }

    /**
     * @param string $DOH3
     */
    public function setDOH3($DOH3)
    {
        $this->DOH3 = $DOH3;
    }

    /**
     * @return string
     */
    public function getLicense3()
    {
        return $this->License3;
    }

    /**
     * @param string $License3
     */
    public function setLicense3($License3)
    {
        $this->License3 = $License3;
    }

    /**
     * @return string
     */
    public function getAccessibilityFeatures()
    {
        return $this->AccessibilityFeatures;
    }

    /**
     * @param string $AccessibilityFeatures
     */
    public function setAccessibilityFeatures($AccessibilityFeatures)
    {
        $this->AccessibilityFeatures = $AccessibilityFeatures;
    }

    /**
     * @return string
     */
    public function getRoomsTotal()
    {
        return $this->RoomsTotal;
    }

    /**
     * @param string $RoomsTotal
     */
    public function setRoomsTotal($RoomsTotal)
    {
        $this->RoomsTotal = $RoomsTotal;
    }

    /**
     * @return string
     */
    public function getRoomType()
    {
        return $this->RoomType;
    }

    /**
     * @param string $RoomType
     */
    public function setRoomType($RoomType)
    {
        $this->RoomType = $RoomType;
    }

    /**
     * @return string
     */
    public function getRoomBedroomArea()
    {
        return $this->RoomBedroomArea;
    }

    /**
     * @param string $RoomBedroomArea
     */
    public function setRoomBedroomArea($RoomBedroomArea)
    {
        $this->RoomBedroomArea = $RoomBedroomArea;
    }

    /**
     * @return string
     */
    public function getRoomBedroomAreaUnits()
    {
        return $this->RoomBedroomAreaUnits;
    }

    /**
     * @param string $RoomBedroomAreaUnits
     */
    public function setRoomBedroomAreaUnits($RoomBedroomAreaUnits)
    {
        $this->RoomBedroomAreaUnits = $RoomBedroomAreaUnits;
    }

    /**
     * @return string
     */
    public function getRoomBedroomAreaSource()
    {
        return $this->RoomBedroomAreaSource;
    }

    /**
     * @param string $RoomBedroomAreaSource
     */
    public function setRoomBedroomAreaSource($RoomBedroomAreaSource)
    {
        $this->RoomBedroomAreaSource = $RoomBedroomAreaSource;
    }

    /**
     * @return string
     */
    public function getRoomBedroomDimensions()
    {
        return $this->RoomBedroomDimensions;
    }

    /**
     * @param string $RoomBedroomDimensions
     */
    public function setRoomBedroomDimensions($RoomBedroomDimensions)
    {
        $this->RoomBedroomDimensions = $RoomBedroomDimensions;
    }

    /**
     * @return string
     */
    public function getRoomBedroomLength()
    {
        return $this->RoomBedroomLength;
    }

    /**
     * @param string $RoomBedroomLength
     */
    public function setRoomBedroomLength($RoomBedroomLength)
    {
        $this->RoomBedroomLength = $RoomBedroomLength;
    }

    /**
     * @return string
     */
    public function getRoomBedroomWidth()
    {
        return $this->RoomBedroomWidth;
    }

    /**
     * @param string $RoomBedroomWidth
     */
    public function setRoomBedroomWidth($RoomBedroomWidth)
    {
        $this->RoomBedroomWidth = $RoomBedroomWidth;
    }

    /**
     * @return string
     */
    public function getRoomBedroomLengthWidthUnits()
    {
        return $this->RoomBedroomLengthWidthUnits;
    }

    /**
     * @param string $RoomBedroomLengthWidthUnits
     */
    public function setRoomBedroomLengthWidthUnits($RoomBedroomLengthWidthUnits)
    {
        $this->RoomBedroomLengthWidthUnits = $RoomBedroomLengthWidthUnits;
    }

    /**
     * @return string
     */
    public function getRoomBedroomLengthWidthSource()
    {
        return $this->RoomBedroomLengthWidthSource;
    }

    /**
     * @param string $RoomBedroomLengthWidthSource
     */
    public function setRoomBedroomLengthWidthSource($RoomBedroomLengthWidthSource)
    {
        $this->RoomBedroomLengthWidthSource = $RoomBedroomLengthWidthSource;
    }

    /**
     * @return string
     */
    public function getRoomBedroomLevel()
    {
        return $this->RoomBedroomLevel;
    }

    /**
     * @param string $RoomBedroomLevel
     */
    public function setRoomBedroomLevel($RoomBedroomLevel)
    {
        $this->RoomBedroomLevel = $RoomBedroomLevel;
    }

    /**
     * @return string
     */
    public function getRoomBedroomFeatures()
    {
        return $this->RoomBedroomFeatures;
    }

    /**
     * @param string $RoomBedroomFeatures
     */
    public function setRoomBedroomFeatures($RoomBedroomFeatures)
    {
        $this->RoomBedroomFeatures = $RoomBedroomFeatures;
    }

    /**
     * @return string
     */
    public function getRoomBedroomDescription()
    {
        return $this->RoomBedroomDescription;
    }

    /**
     * @param string $RoomBedroomDescription
     */
    public function setRoomBedroomDescription($RoomBedroomDescription)
    {
        $this->RoomBedroomDescription = $RoomBedroomDescription;
    }

    /**
     * @return string
     */
    public function getUnitTypeType()
    {
        return $this->UnitTypeType;
    }

    /**
     * @param string $UnitTypeType
     */
    public function setUnitTypeType($UnitTypeType)
    {
        $this->UnitTypeType = $UnitTypeType;
    }

    /**
     * @return string
     */
    public function getUnitTypeStudioUnitsTotal()
    {
        return $this->UnitTypeStudioUnitsTotal;
    }

    /**
     * @param string $UnitTypeStudioUnitsTotal
     */
    public function setUnitTypeStudioUnitsTotal($UnitTypeStudioUnitsTotal)
    {
        $this->UnitTypeStudioUnitsTotal = $UnitTypeStudioUnitsTotal;
    }

    /**
     * @return string
     */
    public function getUnitTypeStudioBedsTotal()
    {
        return $this->UnitTypeStudioBedsTotal;
    }

    /**
     * @param string $UnitTypeStudioBedsTotal
     */
    public function setUnitTypeStudioBedsTotal($UnitTypeStudioBedsTotal)
    {
        $this->UnitTypeStudioBedsTotal = $UnitTypeStudioBedsTotal;
    }

    /**
     * @return string
     */
    public function getUnitTypeStudioBathsTotal()
    {
        return $this->UnitTypeStudioBathsTotal;
    }

    /**
     * @param string $UnitTypeStudioBathsTotal
     */
    public function setUnitTypeStudioBathsTotal($UnitTypeStudioBathsTotal)
    {
        $this->UnitTypeStudioBathsTotal = $UnitTypeStudioBathsTotal;
    }

    /**
     * @return string
     */
    public function getUnitTypeStudioFurnished()
    {
        return $this->UnitTypeStudioFurnished;
    }

    /**
     * @param string $UnitTypeStudioFurnished
     */
    public function setUnitTypeStudioFurnished($UnitTypeStudioFurnished)
    {
        $this->UnitTypeStudioFurnished = $UnitTypeStudioFurnished;
    }

    /**
     * @return string
     */
    public function getUnitTypeStudioDescription()
    {
        return $this->UnitTypeStudioDescription;
    }

    /**
     * @param string $UnitTypeStudioDescription
     */
    public function setUnitTypeStudioDescription($UnitTypeStudioDescription)
    {
        $this->UnitTypeStudioDescription = $UnitTypeStudioDescription;
    }

    /**
     * @return string
     */
    public function getUnitTypeStudioGarageSpaces()
    {
        return $this->UnitTypeStudioGarageSpaces;
    }

    /**
     * @param string $UnitTypeStudioGarageSpaces
     */
    public function setUnitTypeStudioGarageSpaces($UnitTypeStudioGarageSpaces)
    {
        $this->UnitTypeStudioGarageSpaces = $UnitTypeStudioGarageSpaces;
    }

    /**
     * @return string
     */
    public function getUnitTypeStudioGarageAttachedYN()
    {
        return $this->UnitTypeStudioGarageAttachedYN;
    }

    /**
     * @param string $UnitTypeStudioGarageAttachedYN
     */
    public function setUnitTypeStudioGarageAttachedYN($UnitTypeStudioGarageAttachedYN)
    {
        $this->UnitTypeStudioGarageAttachedYN = $UnitTypeStudioGarageAttachedYN;
    }

    /**
     * @return string
     */
    public function getUnitTypeStudioActualRent()
    {
        return $this->UnitTypeStudioActualRent;
    }

    /**
     * @param string $UnitTypeStudioActualRent
     */
    public function setUnitTypeStudioActualRent($UnitTypeStudioActualRent)
    {
        $this->UnitTypeStudioActualRent = $UnitTypeStudioActualRent;
    }

    /**
     * @return string
     */
    public function getUnitTypeStudioTotalRent()
    {
        return $this->UnitTypeStudioTotalRent;
    }

    /**
     * @param string $UnitTypeStudioTotalRent
     */
    public function setUnitTypeStudioTotalRent($UnitTypeStudioTotalRent)
    {
        $this->UnitTypeStudioTotalRent = $UnitTypeStudioTotalRent;
    }

    /**
     * @return string
     */
    public function getUnitTypeStudioProForma()
    {
        return $this->UnitTypeStudioProForma;
    }

    /**
     * @param string $UnitTypeStudioProForma
     */
    public function setUnitTypeStudioProForma($UnitTypeStudioProForma)
    {
        $this->UnitTypeStudioProForma = $UnitTypeStudioProForma;
    }

    /**
     * @return string
     */
    public function getZoning()
    {
        return $this->Zoning;
    }

    /**
     * @param string $Zoning
     */
    public function setZoning($Zoning)
    {
        $this->Zoning = $Zoning;
    }

    /**
     * @return string
     */
    public function getZoningDescription()
    {
        return $this->ZoningDescription;
    }

    /**
     * @param string $ZoningDescription
     */
    public function setZoningDescription($ZoningDescription)
    {
        $this->ZoningDescription = $ZoningDescription;
    }

    /**
     * @return string
     */
    public function getAdditionalParcelsYN()
    {
        return $this->AdditionalParcelsYN;
    }

    /**
     * @param string $AdditionalParcelsYN
     */
    public function setAdditionalParcelsYN($AdditionalParcelsYN)
    {
        $this->AdditionalParcelsYN = $AdditionalParcelsYN;
    }

    /**
     * @return string
     */
    public function getAdditionalParcelsDescription()
    {
        return $this->AdditionalParcelsDescription;
    }

    /**
     * @param string $AdditionalParcelsDescription
     */
    public function setAdditionalParcelsDescription($AdditionalParcelsDescription)
    {
        $this->AdditionalParcelsDescription = $AdditionalParcelsDescription;
    }

    /**
     * @return string
     */
    public function getPublicSurveySection()
    {
        return $this->PublicSurveySection;
    }

    /**
     * @param string $PublicSurveySection
     */
    public function setPublicSurveySection($PublicSurveySection)
    {
        $this->PublicSurveySection = $PublicSurveySection;
    }

    /**
     * @return string
     */
    public function getPublicSurveyTownship()
    {
        return $this->PublicSurveyTownship;
    }

    /**
     * @param string $PublicSurveyTownship
     */
    public function setPublicSurveyTownship($PublicSurveyTownship)
    {
        $this->PublicSurveyTownship = $PublicSurveyTownship;
    }

    /**
     * @return string
     */
    public function getPublicSurveyRange()
    {
        return $this->PublicSurveyRange;
    }

    /**
     * @param string $PublicSurveyRange
     */
    public function setPublicSurveyRange($PublicSurveyRange)
    {
        $this->PublicSurveyRange = $PublicSurveyRange;
    }

    /**
     * @return string
     */
    public function getTaxLot()
    {
        return $this->TaxLot;
    }

    /**
     * @param string $TaxLot
     */
    public function setTaxLot($TaxLot)
    {
        $this->TaxLot = $TaxLot;
    }

    /**
     * @return string
     */
    public function getTaxBlock()
    {
        return $this->TaxBlock;
    }

    /**
     * @param string $TaxBlock
     */
    public function setTaxBlock($TaxBlock)
    {
        $this->TaxBlock = $TaxBlock;
    }

    /**
     * @return string
     */
    public function getTaxTract()
    {
        return $this->TaxTract;
    }

    /**
     * @param string $TaxTract
     */
    public function setTaxTract($TaxTract)
    {
        $this->TaxTract = $TaxTract;
    }

    /**
     * @return string
     */
    public function getTaxLegalDescription()
    {
        return $this->TaxLegalDescription;
    }

    /**
     * @param string $TaxLegalDescription
     */
    public function setTaxLegalDescription($TaxLegalDescription)
    {
        $this->TaxLegalDescription = $TaxLegalDescription;
    }

    /**
     * @return string
     */
    public function getTaxAnnualAmount()
    {
        return $this->TaxAnnualAmount;
    }

    /**
     * @param string $TaxAnnualAmount
     */
    public function setTaxAnnualAmount($TaxAnnualAmount)
    {
        $this->TaxAnnualAmount = $TaxAnnualAmount;
    }

    /**
     * @return string
     */
    public function getTaxYear()
    {
        return $this->TaxYear;
    }

    /**
     * @param string $TaxYear
     */
    public function setTaxYear($TaxYear)
    {
        $this->TaxYear = $TaxYear;
    }

    /**
     * @return string
     */
    public function getTaxAssessedValue()
    {
        return $this->TaxAssessedValue;
    }

    /**
     * @param string $TaxAssessedValue
     */
    public function setTaxAssessedValue($TaxAssessedValue)
    {
        $this->TaxAssessedValue = $TaxAssessedValue;
    }

    /**
     * @return string
     */
    public function getTaxExemptions()
    {
        return $this->TaxExemptions;
    }

    /**
     * @param string $TaxExemptions
     */
    public function setTaxExemptions($TaxExemptions)
    {
        $this->TaxExemptions = $TaxExemptions;
    }

    /**
     * @return string
     */
    public function getTaxOtherAnnualAssessmentAmount()
    {
        return $this->TaxOtherAnnualAssessmentAmount;
    }

    /**
     * @param string $TaxOtherAnnualAssessmentAmount
     */
    public function setTaxOtherAnnualAssessmentAmount($TaxOtherAnnualAssessmentAmount)
    {
        $this->TaxOtherAnnualAssessmentAmount = $TaxOtherAnnualAssessmentAmount;
    }

    /**
     * @return string
     */
    public function getTaxBookNumber()
    {
        return $this->TaxBookNumber;
    }

    /**
     * @param string $TaxBookNumber
     */
    public function setTaxBookNumber($TaxBookNumber)
    {
        $this->TaxBookNumber = $TaxBookNumber;
    }

    /**
     * @return string
     */
    public function getTaxMapNumber()
    {
        return $this->TaxMapNumber;
    }

    /**
     * @param string $TaxMapNumber
     */
    public function setTaxMapNumber($TaxMapNumber)
    {
        $this->TaxMapNumber = $TaxMapNumber;
    }

    /**
     * @return string
     */
    public function getTaxParcelLetter()
    {
        return $this->TaxParcelLetter;
    }

    /**
     * @param string $TaxParcelLetter
     */
    public function setTaxParcelLetter($TaxParcelLetter)
    {
        $this->TaxParcelLetter = $TaxParcelLetter;
    }
}