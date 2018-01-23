<?php


namespace FeedFaker\Models;

/**
 * Class Office
 * @package FeedFaker\Models
 *
 * @property string OfficeKey
 * @property string OriginatingSystemOfficeKey
 * @property string OriginatingSystemName
 * @property string OfficeMlsId
 * @property string OfficeName
 * @property string OfficePhone
 * @property string OfficePhoneExt
 * @property string OfficeFax
 * @property string OfficeEmail
 * @property string OfficeType
 * @property string OfficeBranchType
 * @property string SocialMediaType
 * @property string SocialMediaFacebookUrlOrId
 * @property string OfficeAOR
 * @property string OfficeAORMlsId
 * @property string OfficeAORkey
 * @property string OfficeNationalAssociationId
 * @property string OfficeCorporateLicense
 * @property string OfficeBrokerMlsId
 * @property string OfficeBrokerKey
 * @property string OfficeManagerMlsId
 * @property string OfficeManagerKey
 * @property string OfficeAddress1
 * @property string OfficeAddress2
 * @property string OfficeCity
 * @property string OfficeStateOrProvince
 * @property string OfficePostalCode
 * @property string OfficePostalCodePlus4
 * @property string OfficeCountyOrParish
 * @property string OfficeStatus
 * @property string OfficeAssociationComments
 * @property string OriginalEntryTimestamp
 * @property string ModificationTimestamp
 * @property string MainOfficeKey
 * @property string MainOfficeMlsId
 * @property string FranchiseAffiliation
 * @property string IDXOfficeParticipationYN
 * @property string SyndicateTo
 * @property string SyndicateAgentOption
 */

class Office extends BaseModel
{
    public $resource_name = 'Office';

    public $OfficeKey;
    public $OriginatingSystemOfficeKey;
    public $OriginatingSystemName;
    public $OfficeMlsId;
    public $OfficeName;
    public $OfficePhone;
    public $OfficePhoneExt;
    public $OfficeFax;
    public $OfficeEmail;
    public $OfficeType;
    public $OfficeBranchType;
    public $SocialMediaType;
    public $SocialMediaFacebookUrlOrId;
    public $OfficeAOR;
    public $OfficeAORMlsId;
    public $OfficeAORkey;
    public $OfficeNationalAssociationId;
    public $OfficeCorporateLicense;
    public $OfficeBrokerMlsId;
    public $OfficeBrokerKey;
    public $OfficeManagerMlsId;
    public $OfficeManagerKey;
    public $OfficeAddress1;
    public $OfficeAddress2;
    public $OfficeCity;
    public $OfficeStateOrProvince;
    public $OfficePostalCode;
    public $OfficePostalCodePlus4;
    public $OfficeCountyOrParish;
    public $OfficeStatus;
    public $OfficeAssociationComments;
    public $OriginalEntryTimestamp;
    public $ModificationTimestamp;
    public $MainOfficeKey;
    public $MainOfficeMlsId;
    public $FranchiseAffiliation;
    public $IDXOfficeParticipationYN;
    public $SyndicateTo;
    public $SyndicateAgentOption;

    public function getIdKey()
    {
        return $this->getOfficeKey();
    }

    /**
     * @return string
     */
    public function getOfficeKey()
    {
        return $this->OfficeKey;
    }

    /**
     * @param string $OfficeKey
     */
    public function setOfficeKey($OfficeKey)
    {
        $this->OfficeKey = $OfficeKey;
    }

    /**
     * @return string
     */
    public function getOriginatingSystemOfficeKey()
    {
        return $this->OriginatingSystemOfficeKey;
    }

    /**
     * @param string $OriginatingSystemOfficeKey
     */
    public function setOriginatingSystemOfficeKey($OriginatingSystemOfficeKey)
    {
        $this->OriginatingSystemOfficeKey = $OriginatingSystemOfficeKey;
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
    public function getOfficeMlsId()
    {
        return $this->OfficeMlsId;
    }

    /**
     * @param string $OfficeMlsId
     */
    public function setOfficeMlsId($OfficeMlsId)
    {
        $this->OfficeMlsId = $OfficeMlsId;
    }

    /**
     * @return string
     */
    public function getOfficeName()
    {
        return $this->OfficeName;
    }

    /**
     * @param string $OfficeName
     */
    public function setOfficeName($OfficeName)
    {
        $this->OfficeName = $OfficeName;
    }

    /**
     * @return string
     */
    public function getOfficePhone()
    {
        return $this->OfficePhone;
    }

    /**
     * @param string $OfficePhone
     */
    public function setOfficePhone($OfficePhone)
    {
        $this->OfficePhone = $OfficePhone;
    }

    /**
     * @return string
     */
    public function getOfficePhoneExt()
    {
        return $this->OfficePhoneExt;
    }

    /**
     * @param string $OfficePhoneExt
     */
    public function setOfficePhoneExt($OfficePhoneExt)
    {
        $this->OfficePhoneExt = $OfficePhoneExt;
    }

    /**
     * @return string
     */
    public function getOfficeFax()
    {
        return $this->OfficeFax;
    }

    /**
     * @param string $OfficeFax
     */
    public function setOfficeFax($OfficeFax)
    {
        $this->OfficeFax = $OfficeFax;
    }

    /**
     * @return string
     */
    public function getOfficeEmail()
    {
        return $this->OfficeEmail;
    }

    /**
     * @param string $OfficeEmail
     */
    public function setOfficeEmail($OfficeEmail)
    {
        $this->OfficeEmail = $OfficeEmail;
    }

    /**
     * @return string
     */
    public function getOfficeType()
    {
        return $this->OfficeType;
    }

    /**
     * @param string $OfficeType
     */
    public function setOfficeType($OfficeType)
    {
        $this->OfficeType = $OfficeType;
    }

    /**
     * @return string
     */
    public function getOfficeBranchType()
    {
        return $this->OfficeBranchType;
    }

    /**
     * @param string $OfficeBranchType
     */
    public function setOfficeBranchType($OfficeBranchType)
    {
        $this->OfficeBranchType = $OfficeBranchType;
    }

    /**
     * @return string
     */
    public function getSocialMediaType()
    {
        return $this->SocialMediaType;
    }

    /**
     * @param string $SocialMediaType
     */
    public function setSocialMediaType($SocialMediaType)
    {
        $this->SocialMediaType = $SocialMediaType;
    }

    /**
     * @return string
     */
    public function getSocialMediaFacebookUrlOrId()
    {
        return $this->SocialMediaFacebookUrlOrId;
    }

    /**
     * @param string $SocialMediaFacebookUrlOrId
     */
    public function setSocialMediaFacebookUrlOrId($SocialMediaFacebookUrlOrId)
    {
        $this->SocialMediaFacebookUrlOrId = $SocialMediaFacebookUrlOrId;
    }

    /**
     * @return string
     */
    public function getOfficeAOR()
    {
        return $this->OfficeAOR;
    }

    /**
     * @param string $OfficeAOR
     */
    public function setOfficeAOR($OfficeAOR)
    {
        $this->OfficeAOR = $OfficeAOR;
    }

    /**
     * @return string
     */
    public function getOfficeAORMlsId()
    {
        return $this->OfficeAORMlsId;
    }

    /**
     * @param string $OfficeAORMlsId
     */
    public function setOfficeAORMlsId($OfficeAORMlsId)
    {
        $this->OfficeAORMlsId = $OfficeAORMlsId;
    }

    /**
     * @return string
     */
    public function getOfficeAORkey()
    {
        return $this->OfficeAORkey;
    }

    /**
     * @param string $OfficeAORkey
     */
    public function setOfficeAORkey($OfficeAORkey)
    {
        $this->OfficeAORkey = $OfficeAORkey;
    }

    /**
     * @return string
     */
    public function getOfficeNationalAssociationId()
    {
        return $this->OfficeNationalAssociationId;
    }

    /**
     * @param string $OfficeNationalAssociationId
     */
    public function setOfficeNationalAssociationId($OfficeNationalAssociationId)
    {
        $this->OfficeNationalAssociationId = $OfficeNationalAssociationId;
    }

    /**
     * @return string
     */
    public function getOfficeCorporateLicense()
    {
        return $this->OfficeCorporateLicense;
    }

    /**
     * @param string $OfficeCorporateLicense
     */
    public function setOfficeCorporateLicense($OfficeCorporateLicense)
    {
        $this->OfficeCorporateLicense = $OfficeCorporateLicense;
    }

    /**
     * @return string
     */
    public function getOfficeBrokerMlsId()
    {
        return $this->OfficeBrokerMlsId;
    }

    /**
     * @param string $OfficeBrokerMlsId
     */
    public function setOfficeBrokerMlsId($OfficeBrokerMlsId)
    {
        $this->OfficeBrokerMlsId = $OfficeBrokerMlsId;
    }

    /**
     * @return string
     */
    public function getOfficeBrokerKey()
    {
        return $this->OfficeBrokerKey;
    }

    /**
     * @param string $OfficeBrokerKey
     */
    public function setOfficeBrokerKey($OfficeBrokerKey)
    {
        $this->OfficeBrokerKey = $OfficeBrokerKey;
    }

    /**
     * @return string
     */
    public function getOfficeManagerMlsId()
    {
        return $this->OfficeManagerMlsId;
    }

    /**
     * @param string $OfficeManagerMlsId
     */
    public function setOfficeManagerMlsId($OfficeManagerMlsId)
    {
        $this->OfficeManagerMlsId = $OfficeManagerMlsId;
    }

    /**
     * @return string
     */
    public function getOfficeManagerKey()
    {
        return $this->OfficeManagerKey;
    }

    /**
     * @param string $OfficeManagerKey
     */
    public function setOfficeManagerKey($OfficeManagerKey)
    {
        $this->OfficeManagerKey = $OfficeManagerKey;
    }

    /**
     * @return string
     */
    public function getOfficeAddress1()
    {
        return $this->OfficeAddress1;
    }

    /**
     * @param string $OfficeAddress1
     */
    public function setOfficeAddress1($OfficeAddress1)
    {
        $this->OfficeAddress1 = $OfficeAddress1;
    }

    /**
     * @return string
     */
    public function getOfficeAddress2()
    {
        return $this->OfficeAddress2;
    }

    /**
     * @param string $OfficeAddress2
     */
    public function setOfficeAddress2($OfficeAddress2)
    {
        $this->OfficeAddress2 = $OfficeAddress2;
    }

    /**
     * @return string
     */
    public function getOfficeCity()
    {
        return $this->OfficeCity;
    }

    /**
     * @param string $OfficeCity
     */
    public function setOfficeCity($OfficeCity)
    {
        $this->OfficeCity = $OfficeCity;
    }

    /**
     * @return string
     */
    public function getOfficeStateOrProvince()
    {
        return $this->OfficeStateOrProvince;
    }

    /**
     * @param string $OfficeStateOrProvince
     */
    public function setOfficeStateOrProvince($OfficeStateOrProvince)
    {
        $this->OfficeStateOrProvince = $OfficeStateOrProvince;
    }

    /**
     * @return string
     */
    public function getOfficePostalCode()
    {
        return $this->OfficePostalCode;
    }

    /**
     * @param string $OfficePostalCode
     */
    public function setOfficePostalCode($OfficePostalCode)
    {
        $this->OfficePostalCode = $OfficePostalCode;
    }

    /**
     * @return string
     */
    public function getOfficePostalCodePlus4()
    {
        return $this->OfficePostalCodePlus4;
    }

    /**
     * @param string $OfficePostalCodePlus4
     */
    public function setOfficePostalCodePlus4($OfficePostalCodePlus4)
    {
        $this->OfficePostalCodePlus4 = $OfficePostalCodePlus4;
    }

    /**
     * @return string
     */
    public function getOfficeCountyOrParish()
    {
        return $this->OfficeCountyOrParish;
    }

    /**
     * @param string $OfficeCountyOrParish
     */
    public function setOfficeCountyOrParish($OfficeCountyOrParish)
    {
        $this->OfficeCountyOrParish = $OfficeCountyOrParish;
    }

    /**
     * @return string
     */
    public function getOfficeStatus()
    {
        return $this->OfficeStatus;
    }

    /**
     * @param string $OfficeStatus
     */
    public function setOfficeStatus($OfficeStatus)
    {
        $this->OfficeStatus = $OfficeStatus;
    }

    /**
     * @return string
     */
    public function getOfficeAssociationComments()
    {
        return $this->OfficeAssociationComments;
    }

    /**
     * @param string $OfficeAssociationComments
     */
    public function setOfficeAssociationComments($OfficeAssociationComments)
    {
        $this->OfficeAssociationComments = $OfficeAssociationComments;
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
    public function getMainOfficeKey()
    {
        return $this->MainOfficeKey;
    }

    /**
     * @param string $MainOfficeKey
     */
    public function setMainOfficeKey($MainOfficeKey)
    {
        $this->MainOfficeKey = $MainOfficeKey;
    }

    /**
     * @return string
     */
    public function getMainOfficeMlsId()
    {
        return $this->MainOfficeMlsId;
    }

    /**
     * @param string $MainOfficeMlsId
     */
    public function setMainOfficeMlsId($MainOfficeMlsId)
    {
        $this->MainOfficeMlsId = $MainOfficeMlsId;
    }

    /**
     * @return string
     */
    public function getFranchiseAffiliation()
    {
        return $this->FranchiseAffiliation;
    }

    /**
     * @param string $FranchiseAffiliation
     */
    public function setFranchiseAffiliation($FranchiseAffiliation)
    {
        $this->FranchiseAffiliation = $FranchiseAffiliation;
    }

    /**
     * @return string
     */
    public function getIDXOfficeParticipationYN()
    {
        return $this->IDXOfficeParticipationYN;
    }

    /**
     * @param string $IDXOfficeParticipationYN
     */
    public function setIDXOfficeParticipationYN($IDXOfficeParticipationYN)
    {
        $this->IDXOfficeParticipationYN = $IDXOfficeParticipationYN;
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
    public function getSyndicateAgentOption()
    {
        return $this->SyndicateAgentOption;
    }

    /**
     * @param string $SyndicateAgentOption
     */
    public function setSyndicateAgentOption($SyndicateAgentOption)
    {
        $this->SyndicateAgentOption = $SyndicateAgentOption;
    }

}