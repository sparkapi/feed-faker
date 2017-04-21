<?php


namespace FeedFaker\Models;

/**
 * Class Member
 * @package FeedFaker\Models
 *
 * @property string MemberKey
 * @property string OriginatingSystemMemberKey
 * @property string OriginatingSystemName
 * @property string MemberMlsId
 * @property string MemberLoginId
 * @property string MemberNationalAssociationId
 * @property string MemberPassword
 * @property string MemberNamePrefix
 * @property string MemberFirstName
 * @property string MemberMiddleName
 * @property string MemberLastName
 * @property string MemberNameSuffix
 * @property string MemberFullName
 * @property string MemberNickname
 * @property string JobTitle
 * @property string MemberEmail
 * @property string MemberPreferredPhone
 * @property string MemberPreferredPhoneExt
 * @property string MemberOfficePhone
 * @property string MemberOfficePhoneExt
 * @property string MemberMobilePhone
 * @property string MemberDirectPhone
 * @property string MemberHomePhone
 * @property string MemberFax
 * @property string MemberPager
 * @property string MemberVoiceMail
 * @property string MemberVoiceMailExt
 * @property string MemberTollFreePhone
 * @property string MemberPhoneTTYTDD
 * @property string MemberOtherPhoneType
 * @property string MemberOtherPhonePagerNumber
 * @property string MemberOtherPhonePagerExt
 * @property string SocialMediaType
 * @property string SocialMediaPagerUrlOrId
 * @property string MemberAOR
 * @property string MemberAORMlsId
 * @property string MemberAORkey
 * @property string MemberStateLicense
 * @property string MemberStateLicenseState
 * @property string MemberDesignation
 * @property string MemberAddress1
 * @property string MemberAddress2
 * @property string MemberCity
 * @property string MemberStateOrProvince
 * @property string MemberPostalCode
 * @property string MemberPostalCodePlus4
 * @property string MemberCarrierRoute
 * @property string MemberCountyOrParish
 * @property string MemberCountry
 * @property string MemberMlsAccessYN
 * @property string MemberStatus
 * @property string MemberMlsSecurityClass
 * @property string MemberType
 * @property string MemberAssociationComments
 * @property string MemberLanguages
 * @property string SyndicateTo
 * @property string OfficeName
 * @property string OfficeKey
 * @property string OfficeMlsId
 * @property string OriginalEntryTimestamp
 * @property string LastLoginTimestamp
 * @property string ModificationTimestamp
 */

class Member extends BaseModel
{
    public $Office;
    public $MemberKey;
    public $OriginatingSystemMemberKey;
    public $OriginatingSystemName;
    public $MemberMlsId;
    public $MemberLoginId;
    public $MemberNationalAssociationId;
    public $MemberPassword;
    public $MemberNamePrefix;
    public $MemberFirstName;
    public $MemberMiddleName;
    public $MemberLastName;
    public $MemberNameSuffix;
    public $MemberFullName;
    public $MemberNickname;
    public $JobTitle;
    public $MemberEmail;
    public $MemberPreferredPhone;
    public $MemberPreferredPhoneExt;
    public $MemberOfficePhone;
    public $MemberOfficePhoneExt;
    public $MemberMobilePhone;
    public $MemberDirectPhone;
    public $MemberHomePhone;
    public $MemberFax;
    public $MemberPager;
    public $MemberVoiceMail;
    public $MemberVoiceMailExt;
    public $MemberTollFreePhone;
    public $MemberPhoneTTYTDD;
    public $MemberOtherPhoneType;
    public $MemberOtherPhonePagerNumber;
    public $MemberOtherPhonePagerExt;
    public $SocialMediaType;
    public $SocialMediaFacebookUrlOrId;
    public $MemberAOR;
    public $MemberAORMlsId;
    public $MemberAORkey;
    public $MemberStateLicense;
    public $MemberStateLicenseState;
    public $MemberDesignation;
    public $MemberAddress1;
    public $MemberAddress2;
    public $MemberCity;
    public $MemberStateOrProvince;
    public $MemberPostalCode;
    public $MemberPostalCodePlus4;
    public $MemberCarrierRoute;
    public $MemberCountyOrParish;
    public $MemberCountry;
    public $MemberMlsAccessYN;
    public $MemberStatus;
    public $MemberMlsSecurityClass;
    public $MemberType;
    public $MemberAssociationComments;
    public $MemberLanguages;
    public $SyndicateTo;
    public $OfficeName;
    public $OfficeKey;
    public $OfficeMlsId;
    public $OriginalEntryTimestamp;
    public $LastLoginTimestamp;
    public $ModificationTimestamp;

    public function setOffice(Office $office) {
        $this->Office = $office;
    }

    public function getOffice() {
        return $this->Office;
    }

    public function getIdKey()
    {
        return $this->getMemberKey();
    }

    /**
     * @return string
     */
    public function getMemberKey()
    {
        return $this->MemberKey;
    }

    /**
     * @param string $MemberKey
     */
    public function setMemberKey($MemberKey)
    {
        $this->MemberKey = $MemberKey;
    }

    /**
     * @return string
     */
    public function getOriginatingSystemMemberKey()
    {
        return $this->OriginatingSystemMemberKey;
    }

    /**
     * @param string $OriginatingSystemMemberKey
     */
    public function setOriginatingSystemMemberKey($OriginatingSystemMemberKey)
    {
        $this->OriginatingSystemMemberKey = $OriginatingSystemMemberKey;
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
    public function getMemberMlsId()
    {
        return $this->MemberMlsId;
    }

    /**
     * @param string $MemberMlsId
     */
    public function setMemberMlsId($MemberMlsId)
    {
        $this->MemberMlsId = $MemberMlsId;
    }

    /**
     * @return string
     */
    public function getMemberLoginId()
    {
        return $this->MemberLoginId;
    }

    /**
     * @param string $MemberLoginId
     */
    public function setMemberLoginId($MemberLoginId)
    {
        $this->MemberLoginId = $MemberLoginId;
    }

    /**
     * @return string
     */
    public function getMemberNationalAssociationId()
    {
        return $this->MemberNationalAssociationId;
    }

    /**
     * @param string $MemberNationalAssociationId
     */
    public function setMemberNationalAssociationId($MemberNationalAssociationId)
    {
        $this->MemberNationalAssociationId = $MemberNationalAssociationId;
    }

    /**
     * @return string
     */
    public function getMemberPassword()
    {
        return $this->MemberPassword;
    }

    /**
     * @param string $MemberPassword
     */
    public function setMemberPassword($MemberPassword)
    {
        $this->MemberPassword = $MemberPassword;
    }

    /**
     * @return string
     */
    public function getMemberNamePrefix()
    {
        return $this->MemberNamePrefix;
    }

    /**
     * @param string $MemberNamePrefix
     */
    public function setMemberNamePrefix($MemberNamePrefix)
    {
        $this->MemberNamePrefix = $MemberNamePrefix;
    }

    /**
     * @return string
     */
    public function getMemberFirstName()
    {
        return $this->MemberFirstName;
    }

    /**
     * @param string $MemberFirstName
     */
    public function setMemberFirstName($MemberFirstName)
    {
        $this->MemberFirstName = $MemberFirstName;
    }

    /**
     * @return string
     */
    public function getMemberMiddleName()
    {
        return $this->MemberMiddleName;
    }

    /**
     * @param string $MemberMiddleName
     */
    public function setMemberMiddleName($MemberMiddleName)
    {
        $this->MemberMiddleName = $MemberMiddleName;
    }

    /**
     * @return string
     */
    public function getMemberLastName()
    {
        return $this->MemberLastName;
    }

    /**
     * @param string $MemberLastName
     */
    public function setMemberLastName($MemberLastName)
    {
        $this->MemberLastName = $MemberLastName;
    }

    /**
     * @return string
     */
    public function getMemberNameSuffix()
    {
        return $this->MemberNameSuffix;
    }

    /**
     * @param string $MemberNameSuffix
     */
    public function setMemberNameSuffix($MemberNameSuffix)
    {
        $this->MemberNameSuffix = $MemberNameSuffix;
    }

    /**
     * @return string
     */
    public function getMemberFullName()
    {
        return $this->MemberFullName;
    }

    /**
     * @param string $MemberFullName
     */
    public function setMemberFullName($MemberFullName)
    {
        $this->MemberFullName = $MemberFullName;
    }

    /**
     * @return string
     */
    public function getMemberNickname()
    {
        return $this->MemberNickname;
    }

    /**
     * @param string $MemberNickname
     */
    public function setMemberNickname($MemberNickname)
    {
        $this->MemberNickname = $MemberNickname;
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
    public function getMemberEmail()
    {
        return $this->MemberEmail;
    }

    /**
     * @param string $MemberEmail
     */
    public function setMemberEmail($MemberEmail)
    {
        $this->MemberEmail = $MemberEmail;
    }

    /**
     * @return string
     */
    public function getMemberPreferredPhone()
    {
        return $this->MemberPreferredPhone;
    }

    /**
     * @param string $MemberPreferredPhone
     */
    public function setMemberPreferredPhone($MemberPreferredPhone)
    {
        $this->MemberPreferredPhone = $MemberPreferredPhone;
    }

    /**
     * @return string
     */
    public function getMemberPreferredPhoneExt()
    {
        return $this->MemberPreferredPhoneExt;
    }

    /**
     * @param string $MemberPreferredPhoneExt
     */
    public function setMemberPreferredPhoneExt($MemberPreferredPhoneExt)
    {
        $this->MemberPreferredPhoneExt = $MemberPreferredPhoneExt;
    }

    /**
     * @return string
     */
    public function getMemberOfficePhone()
    {
        return $this->MemberOfficePhone;
    }

    /**
     * @param string $MemberOfficePhone
     */
    public function setMemberOfficePhone($MemberOfficePhone)
    {
        $this->MemberOfficePhone = $MemberOfficePhone;
    }

    /**
     * @return string
     */
    public function getMemberOfficePhoneExt()
    {
        return $this->MemberOfficePhoneExt;
    }

    /**
     * @param string $MemberOfficePhoneExt
     */
    public function setMemberOfficePhoneExt($MemberOfficePhoneExt)
    {
        $this->MemberOfficePhoneExt = $MemberOfficePhoneExt;
    }

    /**
     * @return string
     */
    public function getMemberMobilePhone()
    {
        return $this->MemberMobilePhone;
    }

    /**
     * @param string $MemberMobilePhone
     */
    public function setMemberMobilePhone($MemberMobilePhone)
    {
        $this->MemberMobilePhone = $MemberMobilePhone;
    }

    /**
     * @return string
     */
    public function getMemberDirectPhone()
    {
        return $this->MemberDirectPhone;
    }

    /**
     * @param string $MemberDirectPhone
     */
    public function setMemberDirectPhone($MemberDirectPhone)
    {
        $this->MemberDirectPhone = $MemberDirectPhone;
    }

    /**
     * @return string
     */
    public function getMemberHomePhone()
    {
        return $this->MemberHomePhone;
    }

    /**
     * @param string $MemberHomePhone
     */
    public function setMemberHomePhone($MemberHomePhone)
    {
        $this->MemberHomePhone = $MemberHomePhone;
    }

    /**
     * @return string
     */
    public function getMemberFax()
    {
        return $this->MemberFax;
    }

    /**
     * @param string $MemberFax
     */
    public function setMemberFax($MemberFax)
    {
        $this->MemberFax = $MemberFax;
    }

    /**
     * @return string
     */
    public function getMemberPager()
    {
        return $this->MemberPager;
    }

    /**
     * @param string $MemberPager
     */
    public function setMemberPager($MemberPager)
    {
        $this->MemberPager = $MemberPager;
    }

    /**
     * @return string
     */
    public function getMemberVoiceMail()
    {
        return $this->MemberVoiceMail;
    }

    /**
     * @param string $MemberVoiceMail
     */
    public function setMemberVoiceMail($MemberVoiceMail)
    {
        $this->MemberVoiceMail = $MemberVoiceMail;
    }

    /**
     * @return string
     */
    public function getMemberVoiceMailExt()
    {
        return $this->MemberVoiceMailExt;
    }

    /**
     * @param string $MemberVoiceMailExt
     */
    public function setMemberVoiceMailExt($MemberVoiceMailExt)
    {
        $this->MemberVoiceMailExt = $MemberVoiceMailExt;
    }

    /**
     * @return string
     */
    public function getMemberTollFreePhone()
    {
        return $this->MemberTollFreePhone;
    }

    /**
     * @param string $MemberTollFreePhone
     */
    public function setMemberTollFreePhone($MemberTollFreePhone)
    {
        $this->MemberTollFreePhone = $MemberTollFreePhone;
    }

    /**
     * @return string
     */
    public function getMemberPhoneTTYTDD()
    {
        return $this->MemberPhoneTTYTDD;
    }

    /**
     * @param string $MemberPhoneTTYTDD
     */
    public function setMemberPhoneTTYTDD($MemberPhoneTTYTDD)
    {
        $this->MemberPhoneTTYTDD = $MemberPhoneTTYTDD;
    }

    /**
     * @return string
     */
    public function getMemberOtherPhoneType()
    {
        return $this->MemberOtherPhoneType;
    }

    /**
     * @param string $MemberOtherPhoneType
     */
    public function setMemberOtherPhoneType($MemberOtherPhoneType)
    {
        $this->MemberOtherPhoneType = $MemberOtherPhoneType;
    }

    /**
     * @return string
     */
    public function getMemberOtherPhonePagerNumber()
    {
        return $this->MemberOtherPhonePagerNumber;
    }

    /**
     * @param string $MemberOtherPhonePagerNumber
     */
    public function setMemberOtherPhonePagerNumber($MemberOtherPhonePagerNumber)
    {
        $this->MemberOtherPhonePagerNumber = $MemberOtherPhonePagerNumber;
    }

    /**
     * @return string
     */
    public function getMemberOtherPhonePagerExt()
    {
        return $this->MemberOtherPhonePagerExt;
    }

    /**
     * @param string $MemberOtherPhonePagerExt
     */
    public function setMemberOtherPhonePagerExt($MemberOtherPhonePagerExt)
    {
        $this->MemberOtherPhonePagerExt = $MemberOtherPhonePagerExt;
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
     * @param string $SocialMediaPagerUrlOrId
     */
    public function setSocialMediaFacebookUrlOrId($SocialMediaPagerUrlOrId)
    {
        $this->SocialMediaPagerUrlOrId = $SocialMediaPagerUrlOrId;
    }

    /**
     * @return string
     */
    public function getMemberAOR()
    {
        return $this->MemberAOR;
    }

    /**
     * @param string $MemberAOR
     */
    public function setMemberAOR($MemberAOR)
    {
        $this->MemberAOR = $MemberAOR;
    }

    /**
     * @return string
     */
    public function getMemberAORMlsId()
    {
        return $this->MemberAORMlsId;
    }

    /**
     * @param string $MemberAORMlsId
     */
    public function setMemberAORMlsId($MemberAORMlsId)
    {
        $this->MemberAORMlsId = $MemberAORMlsId;
    }

    /**
     * @return string
     */
    public function getMemberAORkey()
    {
        return $this->MemberAORkey;
    }

    /**
     * @param string $MemberAORkey
     */
    public function setMemberAORkey($MemberAORkey)
    {
        $this->MemberAORkey = $MemberAORkey;
    }

    /**
     * @return string
     */
    public function getMemberStateLicense()
    {
        return $this->MemberStateLicense;
    }

    /**
     * @param string $MemberStateLicense
     */
    public function setMemberStateLicense($MemberStateLicense)
    {
        $this->MemberStateLicense = $MemberStateLicense;
    }

    /**
     * @return string
     */
    public function getMemberStateLicenseState()
    {
        return $this->MemberStateLicenseState;
    }

    /**
     * @param string $MemberStateLicenseState
     */
    public function setMemberStateLicenseState($MemberStateLicenseState)
    {
        $this->MemberStateLicenseState = $MemberStateLicenseState;
    }

    /**
     * @return string
     */
    public function getMemberDesignation()
    {
        return $this->MemberDesignation;
    }

    /**
     * @param string $MemberDesignation
     */
    public function setMemberDesignation($MemberDesignation)
    {
        $this->MemberDesignation = $MemberDesignation;
    }

    /**
     * @return string
     */
    public function getMemberAddress1()
    {
        return $this->MemberAddress1;
    }

    /**
     * @param string $MemberAddress1
     */
    public function setMemberAddress1($MemberAddress1)
    {
        $this->MemberAddress1 = $MemberAddress1;
    }

    /**
     * @return string
     */
    public function getMemberAddress2()
    {
        return $this->MemberAddress2;
    }

    /**
     * @param string $MemberAddress2
     */
    public function setMemberAddress2($MemberAddress2)
    {
        $this->MemberAddress2 = $MemberAddress2;
    }

    /**
     * @return string
     */
    public function getMemberCity()
    {
        return $this->MemberCity;
    }

    /**
     * @param string $MemberCity
     */
    public function setMemberCity($MemberCity)
    {
        $this->MemberCity = $MemberCity;
    }

    /**
     * @return string
     */
    public function getMemberStateOrProvince()
    {
        return $this->MemberStateOrProvince;
    }

    /**
     * @param string $MemberStateOrProvince
     */
    public function setMemberStateOrProvince($MemberStateOrProvince)
    {
        $this->MemberStateOrProvince = $MemberStateOrProvince;
    }

    /**
     * @return string
     */
    public function getMemberPostalCode()
    {
        return $this->MemberPostalCode;
    }

    /**
     * @param string $MemberPostalCode
     */
    public function setMemberPostalCode($MemberPostalCode)
    {
        $this->MemberPostalCode = $MemberPostalCode;
    }

    /**
     * @return string
     */
    public function getMemberPostalCodePlus4()
    {
        return $this->MemberPostalCodePlus4;
    }

    /**
     * @param string $MemberPostalCodePlus4
     */
    public function setMemberPostalCodePlus4($MemberPostalCodePlus4)
    {
        $this->MemberPostalCodePlus4 = $MemberPostalCodePlus4;
    }

    /**
     * @return string
     */
    public function getMemberCarrierRoute()
    {
        return $this->MemberCarrierRoute;
    }

    /**
     * @param string $MemberCarrierRoute
     */
    public function setMemberCarrierRoute($MemberCarrierRoute)
    {
        $this->MemberCarrierRoute = $MemberCarrierRoute;
    }

    /**
     * @return string
     */
    public function getMemberCountyOrParish()
    {
        return $this->MemberCountyOrParish;
    }

    /**
     * @param string $MemberCountyOrParish
     */
    public function setMemberCountyOrParish($MemberCountyOrParish)
    {
        $this->MemberCountyOrParish = $MemberCountyOrParish;
    }

    /**
     * @return string
     */
    public function getMemberCountry()
    {
        return $this->MemberCountry;
    }

    /**
     * @param string $MemberCountry
     */
    public function setMemberCountry($MemberCountry)
    {
        $this->MemberCountry = $MemberCountry;
    }

    /**
     * @return string
     */
    public function getMemberMlsAccessYN()
    {
        return $this->MemberMlsAccessYN;
    }

    /**
     * @param string $MemberMlsAccessYN
     */
    public function setMemberMlsAccessYN($MemberMlsAccessYN)
    {
        $this->MemberMlsAccessYN = $MemberMlsAccessYN;
    }

    /**
     * @return string
     */
    public function getMemberStatus()
    {
        return $this->MemberStatus;
    }

    /**
     * @param string $MemberStatus
     */
    public function setMemberStatus($MemberStatus)
    {
        $this->MemberStatus = $MemberStatus;
    }

    /**
     * @return string
     */
    public function getMemberMlsSecurityClass()
    {
        return $this->MemberMlsSecurityClass;
    }

    /**
     * @param string $MemberMlsSecurityClass
     */
    public function setMemberMlsSecurityClass($MemberMlsSecurityClass)
    {
        $this->MemberMlsSecurityClass = $MemberMlsSecurityClass;
    }

    /**
     * @return string
     */
    public function getMemberType()
    {
        return $this->MemberType;
    }

    /**
     * @param string $MemberType
     */
    public function setMemberType($MemberType)
    {
        $this->MemberType = $MemberType;
    }

    /**
     * @return string
     */
    public function getMemberAssociationComments()
    {
        return $this->MemberAssociationComments;
    }

    /**
     * @param string $MemberAssociationComments
     */
    public function setMemberAssociationComments($MemberAssociationComments)
    {
        $this->MemberAssociationComments = $MemberAssociationComments;
    }

    /**
     * @return string
     */
    public function getMemberLanguages()
    {
        return $this->MemberLanguages;
    }

    /**
     * @param string $MemberLanguages
     */
    public function setMemberLanguages($MemberLanguages)
    {
        $this->MemberLanguages = $MemberLanguages;
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
    public function getLastLoginTimestamp()
    {
        return $this->LastLoginTimestamp;
    }

    /**
     * @param string $LastLoginTimestamp
     */
    public function setLastLoginTimestamp($LastLoginTimestamp)
    {
        $this->LastLoginTimestamp = $LastLoginTimestamp;
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

}
