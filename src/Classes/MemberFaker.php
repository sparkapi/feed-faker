<?php


namespace FeedFaker\Classes;


use FeedFaker\Models\Member;
use FeedFaker\Models\Office;

class MemberFaker extends BaseFaker
{
    public function generate(Office $office, array $overrides = [])
    {
        $member = new Member();

        $member->setOffice($office);

        $name = $this->faker->getAgentName();
        $state = $this->faker->state;

        $member->setMemberKey($this->faker->tech_id);
        $member->setOriginatingSystemMemberKey($this->faker->tech_id);
        $member->setOriginatingSystemName($office->getOriginatingSystemName());
        $member->setMemberMlsId($this->mls_id);
        $member->setMemberLoginId($this->faker->userName);
        $member->setMemberNationalAssociationId($this->faker->swiftBicNumber);
        $member->setMemberPassword($this->faker->password());
        $member->setMemberNamePrefix($this->faker->optional()->title);
        $member->setMemberFirstName($name['first_name']);
        $member->setMemberMiddleName($name['middle_name']);
        $member->setMemberLastName($name['last_name']);
        $member->setMemberNameSuffix($this->faker->optional()->suffix);
        $member->setMemberFullName($name['full_name']);
        $member->setMemberNickname($this->faker->userName);
        $member->setJobTitle($this->faker->jobTitle);
        $member->setMemberEmail($this->faker->safeEmail);
        $member->setMemberPreferredPhone($this->faker->phoneNumber);
        $member->setMemberPreferredPhoneExt($this->faker->optional()->randomNumber(3));
        $member->setMemberOfficePhone($this->faker->phoneNumber);
        $member->setMemberOfficePhoneExt($this->faker->optional()->randomNumber(3));
        $member->setMemberMobilePhone($this->faker->phoneNumber);
        $member->setMemberDirectPhone($this->faker->phoneNumber);
        $member->setMemberHomePhone($this->faker->phoneNumber);
        $member->setMemberFax($this->faker->phoneNumber);
        $member->setMemberPager($this->faker->phoneNumber);
        $member->setMemberVoiceMail($this->faker->phoneNumber);
        $member->setMemberVoiceMailExt($this->faker->optional()->randomNumber(3));
        $member->setMemberTollFreePhone($this->faker->tollFreePhoneNumber);
        $member->setMemberPhoneTTYTDD($this->faker->phoneNumber);
        $member->setMemberOtherPhoneType('Pager');
        $member->setMemberOtherPhonePagerNumber($this->faker->phoneNumber);
        $member->setMemberOtherPhonePagerExt($this->faker->optional()->randomNumber(3));
        $member->setSocialMediaType('Facebook');
        $member->setSocialMediaFacebookUrlOrId($this->faker->url);
        $member->setMemberAOR($office->getOfficeAOR());
        $member->setMemberAORMlsId($office->getOfficeAORMlsId());
        $member->setMemberAORkey($office->getOfficeAORkey());
        $member->setMemberStateLicense($this->faker->swiftBicNumber);
        $member->setMemberStateLicenseState($state);
        $member->setMemberDesignation($this->faker->word);
        $member->setMemberAddress1($this->faker->streetAddress);
        $member->setMemberAddress2($this->faker->streetAddress);
        $member->setMemberCity($this->faker->city);
        $member->setMemberStateOrProvince($state);
        $member->setMemberPostalCode($this->faker->postcode);
        $member->setMemberPostalCodePlus4($this->faker->randomNumber(4));
        $member->setMemberCarrierRoute($this->faker->word);
        $member->setMemberCountyOrParish($this->faker->city);
        $member->setMemberCountry($this->faker->country);
        $member->setMemberMlsAccessYN($this->faker->YorN);
        $member->setMemberStatus($this->faker->status);
        $member->setMemberMlsSecurityClass($this->faker->word);
        $member->setMemberType($this->faker->memberType);
        $member->setMemberAssociationComments($this->faker->paragraph);
        $member->setMemberLanguages($this->faker->language);
        $member->setSyndicateTo(['Zillow']);
        $member->setOfficeName($office->getOfficeName());
        $member->setOfficeKey($office->getMainOfficeKey());
        $member->setOfficeMlsId($office->getOfficeMlsId());
        $member->setOriginalEntryTimestamp($this->faker->dateTime->format('Y-m-d H:i:s'));
        $member->setLastLoginTimestamp($this->faker->dateTime->format('Y-m-d H:i:s'));
        $member->setModificationTimestamp($this->faker->dateTime->format('Y-m-d H:i:s'));

        // handle overrides
        $member = $this->handleOverrides($member, $overrides);

        return $member;
    }
}