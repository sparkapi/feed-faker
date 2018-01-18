<?php


namespace FeedFaker\Models;

/**
 * Class Contact
 * @package FeedFaker\Models
 * 
 * @property string $ContactKey
 * @property string $ContactLoginId
 * @property string $ContactPassword
 * @property string $OriginatingSystemContactKey
 * @property string $OriginatingSystemName
 * @property string $OwnerMemberKey
 * @property string $OwnerMemberID
 * @property string $NamePrefix
 * @property string $FirstName
 * @property string $MiddleName
 * @property string $LastName
 * @property string $NameSuffix
 * @property string $FullName
 * @property string $Nickname
 * @property string $ReferredBy
 * @property string $JobTitle
 * @property string $Notes
 * @property string $HomeAddress1
 * @property string $HomeAddress2
 * @property string $HomeCity
 * @property string $HomeStateOrProvince
 * @property string $HomePostalCode
 * @property string $HomePostalCodePlus4
 * @property string $HomeCarrierRoute
 * @property string $HomeCountyOrParish
 * @property string $HomeCountry
 * @property string $WorkAddress1
 * @property string $WorkAddress2
 * @property string $WorkCity
 * @property string $WorkStateOrProvince
 * @property string $WorkPostalCode
 * @property string $WorkPostalCodePlus4
 * @property string $WorkCarrierRoute
 * @property string $WorkCountyOrParish
 * @property string $WorkCountry
 * @property string $OtherAddress1
 * @property string $OtherAddress2
 * @property string $OtherCity
 * @property string $OtherStateOrProvince
 * @property string $OtherPostalCode
 * @property string $OtherPostalCodePlus4
 * @property string $OtherCarrierRoute
 * @property string $OtherCountyOrParish
 * @property string $OtherCountry
 * @property string $PreferredAddress
 * @property string $PreferredPhone
 * @property string $Email
 * @property string $Email2
 * @property string $Email3
 * @property string $OfficePhone
 * @property string $OfficePhoneExt
 * @property string $MobilePhone
 * @property string $DirectPhone
 * @property string $HomePhone
 * @property string $HomeFax
 * @property string $BusinessFax
 * @property string $Pager
 * @property string $VoiceMail
 * @property string $VoiceMailExt
 * @property string $TollFreePhone
 * @property string $PhoneTTYTTD
 * @property string $OtherPhoneType // Pager
 * @property string $OtherPhonePagerNumber
 * @property string $OtherPhonePagerExt
 * @property string $Company
 * @property string $Department
 * @property string $SocialMediaType // Facebook
 * @property string $SocialMediaFacebookUrlOrId
 * @property string $Birthdate
 * @property string $Anniversary
 * @property string $OriginalEntryTimestamp
 * @property string $ModificationTimestamp
 * @property string $UserDefinedFieldName1
 * @property string $UserDefinedFieldValue1
 * @property string $AssistantName
 * @property string $AssistantPhone
 * @property string $AssistantPhoneExt
 * @property string $AssistantEmail
 * @property string $SpousePartnerName
 * @property string $Children
 * @property string $Gender
 * @property string $Language
 * @property string $Groups
 * @property string $ContactStatus
 * @property string $ContactType
 */

class Contact extends BaseModel
{
    public $ContactKey;
    public $ContactLoginId;
    public $ContactPassword;
    public $OriginatingSystemContactKey;
    public $OriginatingSystemName;
    public $OwnerMemberKey;
    public $OwnerMemberID;
    public $NamePrefix;
    public $FirstName;
    public $MiddleName;
    public $LastName;
    public $NameSuffix;
    public $FullName;
    public $Nickname;
    public $ReferredBy;
    public $JobTitle;
    public $Notes;
    public $HomeAddress1;
    public $HomeAddress2;
    public $HomeCity;
    public $HomeStateOrProvince;
    public $HomePostalCode;
    public $HomePostalCodePlus4;
    public $HomeCarrierRoute;
    public $HomeCountyOrParish;
    public $HomeCountry;
    public $WorkAddress1;
    public $WorkAddress2;
    public $WorkCity;
    public $WorkStateOrProvince;
    public $WorkPostalCode;
    public $WorkPostalCodePlus4;
    public $WorkCarrierRoute;
    public $WorkCountyOrParish;
    public $WorkCountry;
    public $OtherAddress1;
    public $OtherAddress2;
    public $OtherCity;
    public $OtherStateOrProvince;
    public $OtherPostalCode;
    public $OtherPostalCodePlus4;
    public $OtherCarrierRoute;
    public $OtherCountyOrParish;
    public $OtherCountry;
    public $PreferredAddress;
    public $PreferredPhone;
    public $Email;
    public $Email2;
    public $Email3;
    public $OfficePhone;
    public $OfficePhoneExt;
    public $MobilePhone;
    public $DirectPhone;
    public $HomePhone;
    public $HomeFax;
    public $BusinessFax;
    public $Pager;
    public $VoiceMail;
    public $VoiceMailExt;
    public $TollFreePhone;
    public $PhoneTTYTTD;
    public $OtherPhoneType;
    public $OtherPhonePagerNumber;
    public $OtherPhonePagerExt;
    public $Company;
    public $Department;
    public $SocialMediaType;
    public $SocialMediaFacebookUrlOrId;
    public $Birthdate;
    public $Anniversary;
    public $OriginalEntryTimestamp;
    public $ModificationTimestamp;
    public $UserDefinedFieldName1;
    public $UserDefinedFieldValue1;
    public $AssistantName;
    public $AssistantPhone;
    public $AssistantPhoneExt;
    public $AssistantEmail;
    public $SpousePartnerName;
    public $Children;
    public $Gender;
    public $Language;
    public $Groups;
    public $ContactStatus;
    public $ContactType;

    public function getIdKey()
    {
        return $this->getContactKey();
    }

    public function getForeignKey()
    {
        return $this->getOwnerMemberKey();
    }

    /**
     * @return string
     */
    public function getContactKey()
    {
        return $this->ContactKey;
    }

    /**
     * @param string $ContactKey
     */
    public function setContactKey($ContactKey)
    {
        $this->ContactKey = $ContactKey;
    }

    /**
     * @return string
     */
    public function getContactLoginId()
    {
        return $this->ContactLoginId;
    }

    /**
     * @param string $ContactLoginId
     */
    public function setContactLoginId($ContactLoginId)
    {
        $this->ContactLoginId = $ContactLoginId;
    }

    /**
     * @return string
     */
    public function getContactPassword()
    {
        return $this->ContactPassword;
    }

    /**
     * @param string $ContactPassword
     */
    public function setContactPassword($ContactPassword)
    {
        $this->ContactPassword = $ContactPassword;
    }

    /**
     * @return string
     */
    public function getOriginatingSystemContactKey()
    {
        return $this->OriginatingSystemContactKey;
    }

    /**
     * @param string $OriginatingSystemContactKey
     */
    public function setOriginatingSystemContactKey($OriginatingSystemContactKey)
    {
        $this->OriginatingSystemContactKey = $OriginatingSystemContactKey;
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
    public function getOwnerMemberKey()
    {
        return $this->OwnerMemberKey;
    }

    /**
     * @param string $OwnerMemberKey
     */
    public function setOwnerMemberKey($OwnerMemberKey)
    {
        $this->OwnerMemberKey = $OwnerMemberKey;
    }

    /**
     * @return string
     */
    public function getOwnerMemberID()
    {
        return $this->OwnerMemberID;
    }

    /**
     * @param string $OwnerMemberID
     */
    public function setOwnerMemberID($OwnerMemberID)
    {
        $this->OwnerMemberID = $OwnerMemberID;
    }

    /**
     * @return string
     */
    public function getNamePrefix()
    {
        return $this->NamePrefix;
    }

    /**
     * @param string $NamePrefix
     */
    public function setNamePrefix($NamePrefix)
    {
        $this->NamePrefix = $NamePrefix;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     */
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
    }

    /**
     * @return string
     */
    public function getMiddleName()
    {
        return $this->MiddleName;
    }

    /**
     * @param string $MiddleName
     */
    public function setMiddleName($MiddleName)
    {
        $this->MiddleName = $MiddleName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * @param string $LastName
     */
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
    }

    /**
     * @return string
     */
    public function getNameSuffix()
    {
        return $this->NameSuffix;
    }

    /**
     * @param string $NameSuffix
     */
    public function setNameSuffix($NameSuffix)
    {
        $this->NameSuffix = $NameSuffix;
    }

    /**
     * @return string
     */
    public function getFullName()
    {
        return $this->FullName;
    }

    /**
     * @param string $FullName
     */
    public function setFullName($FullName)
    {
        $this->FullName = $FullName;
    }

    /**
     * @return string
     */
    public function getNickname()
    {
        return $this->Nickname;
    }

    /**
     * @param string $Nickname
     */
    public function setNickname($Nickname)
    {
        $this->Nickname = $Nickname;
    }

    /**
     * @return string
     */
    public function getReferredBy()
    {
        return $this->ReferredBy;
    }

    /**
     * @param string $ReferredBy
     */
    public function setReferredBy($ReferredBy)
    {
        $this->ReferredBy = $ReferredBy;
    }

    /**
     * @return string
     */
    public function getJobTitle()
    {
        return $this->JobTitle;
    }

    /**
     * @param string $JobTitle
     */
    public function setJobTitle($JobTitle)
    {
        $this->JobTitle = $JobTitle;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->Notes;
    }

    /**
     * @param string $Notes
     */
    public function setNotes($Notes)
    {
        $this->Notes = $Notes;
    }

    /**
     * @return string
     */
    public function getHomeAddress1()
    {
        return $this->HomeAddress1;
    }

    /**
     * @param string $HomeAddress1
     */
    public function setHomeAddress1($HomeAddress1)
    {
        $this->HomeAddress1 = $HomeAddress1;
    }

    /**
     * @return string
     */
    public function getHomeAddress2()
    {
        return $this->HomeAddress2;
    }

    /**
     * @param string $HomeAddress2
     */
    public function setHomeAddress2($HomeAddress2)
    {
        $this->HomeAddress2 = $HomeAddress2;
    }

    /**
     * @return string
     */
    public function getHomeCity()
    {
        return $this->HomeCity;
    }

    /**
     * @param string $HomeCity
     */
    public function setHomeCity($HomeCity)
    {
        $this->HomeCity = $HomeCity;
    }

    /**
     * @return string
     */
    public function getHomeStateOrProvince()
    {
        return $this->HomeStateOrProvince;
    }

    /**
     * @param string $HomeStateOrProvince
     */
    public function setHomeStateOrProvince($HomeStateOrProvince)
    {
        $this->HomeStateOrProvince = $HomeStateOrProvince;
    }

    /**
     * @return string
     */
    public function getHomePostalCode()
    {
        return $this->HomePostalCode;
    }

    /**
     * @param string $HomePostalCode
     */
    public function setHomePostalCode($HomePostalCode)
    {
        $this->HomePostalCode = $HomePostalCode;
    }

    /**
     * @return string
     */
    public function getHomePostalCodePlus4()
    {
        return $this->HomePostalCodePlus4;
    }

    /**
     * @param string $HomePostalCodePlus4
     */
    public function setHomePostalCodePlus4($HomePostalCodePlus4)
    {
        $this->HomePostalCodePlus4 = $HomePostalCodePlus4;
    }

    /**
     * @return string
     */
    public function getHomeCarrierRoute()
    {
        return $this->HomeCarrierRoute;
    }

    /**
     * @param string $HomeCarrierRoute
     */
    public function setHomeCarrierRoute($HomeCarrierRoute)
    {
        $this->HomeCarrierRoute = $HomeCarrierRoute;
    }

    /**
     * @return string
     */
    public function getHomeCountyOrParish()
    {
        return $this->HomeCountyOrParish;
    }

    /**
     * @param string $HomeCountyOrParish
     */
    public function setHomeCountyOrParish($HomeCountyOrParish)
    {
        $this->HomeCountyOrParish = $HomeCountyOrParish;
    }

    /**
     * @return string
     */
    public function getHomeCountry()
    {
        return $this->HomeCountry;
    }

    /**
     * @param string $HomeCountry
     */
    public function setHomeCountry($HomeCountry)
    {
        $this->HomeCountry = $HomeCountry;
    }

    /**
     * @return string
     */
    public function getWorkAddress1()
    {
        return $this->WorkAddress1;
    }

    /**
     * @param string $WorkAddress1
     */
    public function setWorkAddress1($WorkAddress1)
    {
        $this->WorkAddress1 = $WorkAddress1;
    }

    /**
     * @return string
     */
    public function getWorkAddress2()
    {
        return $this->WorkAddress2;
    }

    /**
     * @param string $WorkAddress2
     */
    public function setWorkAddress2($WorkAddress2)
    {
        $this->WorkAddress2 = $WorkAddress2;
    }

    /**
     * @return string
     */
    public function getWorkCity()
    {
        return $this->WorkCity;
    }

    /**
     * @param string $WorkCity
     */
    public function setWorkCity($WorkCity)
    {
        $this->WorkCity = $WorkCity;
    }

    /**
     * @return string
     */
    public function getWorkStateOrProvince()
    {
        return $this->WorkStateOrProvince;
    }

    /**
     * @param string $WorkStateOrProvince
     */
    public function setWorkStateOrProvince($WorkStateOrProvince)
    {
        $this->WorkStateOrProvince = $WorkStateOrProvince;
    }

    /**
     * @return string
     */
    public function getWorkPostalCode()
    {
        return $this->WorkPostalCode;
    }

    /**
     * @param string $WorkPostalCode
     */
    public function setWorkPostalCode($WorkPostalCode)
    {
        $this->WorkPostalCode = $WorkPostalCode;
    }

    /**
     * @return string
     */
    public function getWorkPostalCodePlus4()
    {
        return $this->WorkPostalCodePlus4;
    }

    /**
     * @param string $WorkPostalCodePlus4
     */
    public function setWorkPostalCodePlus4($WorkPostalCodePlus4)
    {
        $this->WorkPostalCodePlus4 = $WorkPostalCodePlus4;
    }

    /**
     * @return string
     */
    public function getWorkCarrierRoute()
    {
        return $this->WorkCarrierRoute;
    }

    /**
     * @param string $WorkCarrierRoute
     */
    public function setWorkCarrierRoute($WorkCarrierRoute)
    {
        $this->WorkCarrierRoute = $WorkCarrierRoute;
    }

    /**
     * @return string
     */
    public function getWorkCountyOrParish()
    {
        return $this->WorkCountyOrParish;
    }

    /**
     * @param string $WorkCountyOrParish
     */
    public function setWorkCountyOrParish($WorkCountyOrParish)
    {
        $this->WorkCountyOrParish = $WorkCountyOrParish;
    }

    /**
     * @return string
     */
    public function getWorkCountry()
    {
        return $this->WorkCountry;
    }

    /**
     * @param string $WorkCountry
     */
    public function setWorkCountry($WorkCountry)
    {
        $this->WorkCountry = $WorkCountry;
    }

    /**
     * @return string
     */
    public function getOtherAddress1()
    {
        return $this->OtherAddress1;
    }

    /**
     * @param string $OtherAddress1
     */
    public function setOtherAddress1($OtherAddress1)
    {
        $this->OtherAddress1 = $OtherAddress1;
    }

    /**
     * @return string
     */
    public function getOtherAddress2()
    {
        return $this->OtherAddress2;
    }

    /**
     * @param string $OtherAddress2
     */
    public function setOtherAddress2($OtherAddress2)
    {
        $this->OtherAddress2 = $OtherAddress2;
    }

    /**
     * @return string
     */
    public function getOtherCity()
    {
        return $this->OtherCity;
    }

    /**
     * @param string $OtherCity
     */
    public function setOtherCity($OtherCity)
    {
        $this->OtherCity = $OtherCity;
    }

    /**
     * @return string
     */
    public function getOtherStateOrProvince()
    {
        return $this->OtherStateOrProvince;
    }

    /**
     * @param string $OtherStateOrProvince
     */
    public function setOtherStateOrProvince($OtherStateOrProvince)
    {
        $this->OtherStateOrProvince = $OtherStateOrProvince;
    }

    /**
     * @return string
     */
    public function getOtherPostalCode()
    {
        return $this->OtherPostalCode;
    }

    /**
     * @param string $OtherPostalCode
     */
    public function setOtherPostalCode($OtherPostalCode)
    {
        $this->OtherPostalCode = $OtherPostalCode;
    }

    /**
     * @return string
     */
    public function getOtherPostalCodePlus4()
    {
        return $this->OtherPostalCodePlus4;
    }

    /**
     * @param string $OtherPostalCodePlus4
     */
    public function setOtherPostalCodePlus4($OtherPostalCodePlus4)
    {
        $this->OtherPostalCodePlus4 = $OtherPostalCodePlus4;
    }

    /**
     * @return string
     */
    public function getOtherCarrierRoute()
    {
        return $this->OtherCarrierRoute;
    }

    /**
     * @param string $OtherCarrierRoute
     */
    public function setOtherCarrierRoute($OtherCarrierRoute)
    {
        $this->OtherCarrierRoute = $OtherCarrierRoute;
    }

    /**
     * @return string
     */
    public function getOtherCountyOrParish()
    {
        return $this->OtherCountyOrParish;
    }

    /**
     * @param string $OtherCountyOrParish
     */
    public function setOtherCountyOrParish($OtherCountyOrParish)
    {
        $this->OtherCountyOrParish = $OtherCountyOrParish;
    }

    /**
     * @return string
     */
    public function getOtherCountry()
    {
        return $this->OtherCountry;
    }

    /**
     * @param string $OtherCountry
     */
    public function setOtherCountry($OtherCountry)
    {
        $this->OtherCountry = $OtherCountry;
    }

    /**
     * @return string
     */
    public function getPreferredAddress()
    {
        return $this->PreferredAddress;
    }

    /**
     * @param string $PreferredAddress
     */
    public function setPreferredAddress($PreferredAddress)
    {
        $this->PreferredAddress = $PreferredAddress;
    }

    /**
     * @return string
     */
    public function getPreferredPhone()
    {
        return $this->PreferredPhone;
    }

    /**
     * @param string $PreferredPhone
     */
    public function setPreferredPhone($PreferredPhone)
    {
        $this->PreferredPhone = $PreferredPhone;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
    }

    /**
     * @return string
     */
    public function getEmail2()
    {
        return $this->Email2;
    }

    /**
     * @param string $Email2
     */
    public function setEmail2($Email2)
    {
        $this->Email2 = $Email2;
    }

    /**
     * @return string
     */
    public function getEmail3()
    {
        return $this->Email3;
    }

    /**
     * @param string $Email3
     */
    public function setEmail3($Email3)
    {
        $this->Email3 = $Email3;
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
    public function getMobilePhone()
    {
        return $this->MobilePhone;
    }

    /**
     * @param string $MobilePhone
     */
    public function setMobilePhone($MobilePhone)
    {
        $this->MobilePhone = $MobilePhone;
    }

    /**
     * @return string
     */
    public function getDirectPhone()
    {
        return $this->DirectPhone;
    }

    /**
     * @param string $DirectPhone
     */
    public function setDirectPhone($DirectPhone)
    {
        $this->DirectPhone = $DirectPhone;
    }

    /**
     * @return string
     */
    public function getHomePhone()
    {
        return $this->HomePhone;
    }

    /**
     * @param string $HomePhone
     */
    public function setHomePhone($HomePhone)
    {
        $this->HomePhone = $HomePhone;
    }

    /**
     * @return string
     */
    public function getHomeFax()
    {
        return $this->HomeFax;
    }

    /**
     * @param string $HomeFax
     */
    public function setHomeFax($HomeFax)
    {
        $this->HomeFax = $HomeFax;
    }

    /**
     * @return string
     */
    public function getBusinessFax()
    {
        return $this->BusinessFax;
    }

    /**
     * @param string $BusinessFax
     */
    public function setBusinessFax($BusinessFax)
    {
        $this->BusinessFax = $BusinessFax;
    }

    /**
     * @return string
     */
    public function getPager()
    {
        return $this->Pager;
    }

    /**
     * @param string $Pager
     */
    public function setPager($Pager)
    {
        $this->Pager = $Pager;
    }

    /**
     * @return string
     */
    public function getVoiceMail()
    {
        return $this->VoiceMail;
    }

    /**
     * @param string $VoiceMail
     */
    public function setVoiceMail($VoiceMail)
    {
        $this->VoiceMail = $VoiceMail;
    }

    /**
     * @return string
     */
    public function getVoiceMailExt()
    {
        return $this->VoiceMailExt;
    }

    /**
     * @param string $VoiceMailExt
     */
    public function setVoiceMailExt($VoiceMailExt)
    {
        $this->VoiceMailExt = $VoiceMailExt;
    }

    /**
     * @return string
     */
    public function getTollFreePhone()
    {
        return $this->TollFreePhone;
    }

    /**
     * @param string $TollFreePhone
     */
    public function setTollFreePhone($TollFreePhone)
    {
        $this->TollFreePhone = $TollFreePhone;
    }

    /**
     * @return string
     */
    public function getPhoneTTYTTD()
    {
        return $this->PhoneTTYTTD;
    }

    /**
     * @param string $PhoneTTYTTD
     */
    public function setPhoneTTYTTD($PhoneTTYTTD)
    {
        $this->PhoneTTYTTD = $PhoneTTYTTD;
    }

    /**
     * @return string
     */
    public function getOtherPhoneType()
    {
        return $this->OtherPhoneType;
    }

    /**
     * @param string $OtherPhoneType
     */
    public function setOtherPhoneType($OtherPhoneType)
    {
        $this->OtherPhoneType = $OtherPhoneType;
    }

    /**
     * @return string
     */
    public function getOtherPhonePagerNumber()
    {
        return $this->OtherPhonePagerNumber;
    }

    /**
     * @param string $OtherPhonePagerNumber
     */
    public function setOtherPhonePagerNumber($OtherPhonePagerNumber)
    {
        $this->OtherPhonePagerNumber = $OtherPhonePagerNumber;
    }

    /**
     * @return string
     */
    public function getOtherPhonePagerExt()
    {
        return $this->OtherPhonePagerExt;
    }

    /**
     * @param string $OtherPhonePagerExt
     */
    public function setOtherPhonePagerExt($OtherPhonePagerExt)
    {
        $this->OtherPhonePagerExt = $OtherPhonePagerExt;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->Company;
    }

    /**
     * @param string $Company
     */
    public function setCompany($Company)
    {
        $this->Company = $Company;
    }

    /**
     * @return string
     */
    public function getDepartment()
    {
        return $this->Department;
    }

    /**
     * @param string $Department
     */
    public function setDepartment($Department)
    {
        $this->Department = $Department;
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
    public function getBirthdate()
    {
        return $this->Birthdate;
    }

    /**
     * @param string $Birthdate
     */
    public function setBirthdate($Birthdate)
    {
        $this->Birthdate = $Birthdate;
    }

    /**
     * @return string
     */
    public function getAnniversary()
    {
        return $this->Anniversary;
    }

    /**
     * @param string $Anniversary
     */
    public function setAnniversary($Anniversary)
    {
        $this->Anniversary = $Anniversary;
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
    public function getUserDefinedFieldName1()
    {
        return $this->UserDefinedFieldName1;
    }

    /**
     * @param string $UserDefinedFieldName1
     */
    public function setUserDefinedFieldName1($UserDefinedFieldName1)
    {
        $this->UserDefinedFieldName1 = $UserDefinedFieldName1;
    }

    /**
     * @return string
     */
    public function getUserDefinedFieldValue1()
    {
        return $this->UserDefinedFieldValue1;
    }

    /**
     * @param string $UserDefinedFieldValue1
     */
    public function setUserDefinedFieldValue1($UserDefinedFieldValue1)
    {
        $this->UserDefinedFieldValue1 = $UserDefinedFieldValue1;
    }

    /**
     * @return string
     */
    public function getAssistantName()
    {
        return $this->AssistantName;
    }

    /**
     * @param string $AssistantName
     */
    public function setAssistantName($AssistantName)
    {
        $this->AssistantName = $AssistantName;
    }

    /**
     * @return string
     */
    public function getAssistantPhone()
    {
        return $this->AssistantPhone;
    }

    /**
     * @param string $AssistantPhone
     */
    public function setAssistantPhone($AssistantPhone)
    {
        $this->AssistantPhone = $AssistantPhone;
    }

    /**
     * @return string
     */
    public function getAssistantPhoneExt()
    {
        return $this->AssistantPhoneExt;
    }

    /**
     * @param string $AssistantPhoneExt
     */
    public function setAssistantPhoneExt($AssistantPhoneExt)
    {
        $this->AssistantPhoneExt = $AssistantPhoneExt;
    }

    /**
     * @return string
     */
    public function getAssistantEmail()
    {
        return $this->AssistantEmail;
    }

    /**
     * @param string $AssistantEmail
     */
    public function setAssistantEmail($AssistantEmail)
    {
        $this->AssistantEmail = $AssistantEmail;
    }

    /**
     * @return string
     */
    public function getSpousePartnerName()
    {
        return $this->SpousePartnerName;
    }

    /**
     * @param string $SpousePartnerName
     */
    public function setSpousePartnerName($SpousePartnerName)
    {
        $this->SpousePartnerName = $SpousePartnerName;
    }

    /**
     * @return string
     */
    public function getChildren()
    {
        return $this->Children;
    }

    /**
     * @param string $Children
     */
    public function setChildren($Children)
    {
        $this->Children = $Children;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->Gender;
    }

    /**
     * @param string $Gender
     */
    public function setGender($Gender)
    {
        $this->Gender = $Gender;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * @param string $Language
     */
    public function setLanguage($Language)
    {
        $this->Language = $Language;
    }

    /**
     * @return string
     */
    public function getGroups()
    {
        return $this->Groups;
    }

    /**
     * @param string $Groups
     */
    public function setGroups($Groups)
    {
        $this->Groups = $Groups;
    }

    /**
     * @return string
     */
    public function getContactStatus()
    {
        return $this->ContactStatus;
    }

    /**
     * @param string $ContactStatus
     */
    public function setContactStatus($ContactStatus)
    {
        $this->ContactStatus = $ContactStatus;
    }

    /**
     * @return string
     */
    public function getContactType()
    {
        return $this->ContactType;
    }

    /**
     * @param string $ContactType
     */
    public function setContactType($ContactType)
    {
        $this->ContactType = $ContactType;
    }
}