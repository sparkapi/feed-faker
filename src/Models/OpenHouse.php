<?php


namespace FeedFaker\Models;

/**
 * Class OpenHouse
 * @package FeedFaker\Models
 *
 * @property string OpenHouseKey
 * @property string OpenHouseId
 * @property string OriginatingSystemKey
 * @property string OriginatingSystemName
 * @property string ListingKey
 * @property string ListingId
 * @property string ModificationTimestamp
 * @property string OriginalEntryTimestamp
 * @property string OpenHouseDate
 * @property string OpenHouseStartTime
 * @property string OpenHouseEndTime
 * @property string ShowingAgentMlsID
 * @property string ShowingAgentKey
 * @property string ShowingAgentFirstName
 * @property string ShowingAgentLastName
 * @property string OpenHouseType
 * @property string AppointmentRequiredYN
 * @property string Refreshments
 * @property string Attended
 * @property string OpenHouseRemarks
 * @property string Status
 */

class OpenHouse extends BaseModel
{
    public $OpenHouseKey;
    public $OpenHouseId;
    public $OriginatingSystemKey;
    public $OriginatingSystemName;
    public $ListingKey;
    public $ListingId;
    public $ModificationTimestamp;
    public $OriginalEntryTimestamp;
    public $OpenHouseDate;
    public $OpenHouseStartTime;
    public $OpenHouseEndTime;
    public $ShowingAgentMlsID;
    public $ShowingAgentKey;
    public $ShowingAgentFirstName;
    public $ShowingAgentLastName;
    public $OpenHouseType;
    public $AppointmentRequiredYN;
    public $Refreshments;
    public $Attended;
    public $OpenHouseRemarks;
    public $Status;

    public function getIdKey()
    {
        return $this->getOpenHouseKey();
    }

    /**
     * @return string
     */
    public function getOpenHouseKey()
    {
        return $this->OpenHouseKey;
    }

    /**
     * @param string $OpenHouseKey
     */
    public function setOpenHouseKey($OpenHouseKey)
    {
        $this->OpenHouseKey = $OpenHouseKey;
    }

    /**
     * @return string
     */
    public function getOpenHouseId()
    {
        return $this->OpenHouseId;
    }

    /**
     * @param string $OpenHouseId
     */
    public function setOpenHouseId($OpenHouseId)
    {
        $this->OpenHouseId = $OpenHouseId;
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
    public function getOpenHouseDate()
    {
        return $this->OpenHouseDate;
    }

    /**
     * @param string $OpenHouseDate
     */
    public function setOpenHouseDate($OpenHouseDate)
    {
        $this->OpenHouseDate = $OpenHouseDate;
    }

    /**
     * @return string
     */
    public function getOpenHouseStartTime()
    {
        return $this->OpenHouseStartTime;
    }

    /**
     * @param string $OpenHouseStartTime
     */
    public function setOpenHouseStartTime($OpenHouseStartTime)
    {
        $this->OpenHouseStartTime = $OpenHouseStartTime;
    }

    /**
     * @return string
     */
    public function getOpenHouseEndTime()
    {
        return $this->OpenHouseEndTime;
    }

    /**
     * @param string $OpenHouseEndTime
     */
    public function setOpenHouseEndTime($OpenHouseEndTime)
    {
        $this->OpenHouseEndTime = $OpenHouseEndTime;
    }

    /**
     * @return string
     */
    public function getShowingAgentMlsID()
    {
        return $this->ShowingAgentMlsID;
    }

    /**
     * @param string $ShowingAgentMlsID
     */
    public function setShowingAgentMlsID($ShowingAgentMlsID)
    {
        $this->ShowingAgentMlsID = $ShowingAgentMlsID;
    }

    /**
     * @return string
     */
    public function getShowingAgentKey()
    {
        return $this->ShowingAgentKey;
    }

    /**
     * @param string $ShowingAgentKey
     */
    public function setShowingAgentKey($ShowingAgentKey)
    {
        $this->ShowingAgentKey = $ShowingAgentKey;
    }

    /**
     * @return string
     */
    public function getShowingAgentFirstName()
    {
        return $this->ShowingAgentFirstName;
    }

    /**
     * @param string $ShowingAgentFirstName
     */
    public function setShowingAgentFirstName($ShowingAgentFirstName)
    {
        $this->ShowingAgentFirstName = $ShowingAgentFirstName;
    }

    /**
     * @return string
     */
    public function getShowingAgentLastName()
    {
        return $this->ShowingAgentLastName;
    }

    /**
     * @param string $ShowingAgentLastName
     */
    public function setShowingAgentLastName($ShowingAgentLastName)
    {
        $this->ShowingAgentLastName = $ShowingAgentLastName;
    }

    /**
     * @return string
     */
    public function getOpenHouseType()
    {
        return $this->OpenHouseType;
    }

    /**
     * @param string $OpenHouseType
     */
    public function setOpenHouseType($OpenHouseType)
    {
        $this->OpenHouseType = $OpenHouseType;
    }

    /**
     * @return string
     */
    public function getAppointmentRequiredYN()
    {
        return $this->AppointmentRequiredYN;
    }

    /**
     * @param string $AppointmentRequiredYN
     */
    public function setAppointmentRequiredYN($AppointmentRequiredYN)
    {
        $this->AppointmentRequiredYN = $AppointmentRequiredYN;
    }

    /**
     * @return string
     */
    public function getRefreshments()
    {
        return $this->Refreshments;
    }

    /**
     * @param string $Refreshments
     */
    public function setRefreshments($Refreshments)
    {
        $this->Refreshments = $Refreshments;
    }

    /**
     * @return string
     */
    public function getAttended()
    {
        return $this->Attended;
    }

    /**
     * @param string $Attended
     */
    public function setAttended($Attended)
    {
        $this->Attended = $Attended;
    }

    /**
     * @return string
     */
    public function getOpenHouseRemarks()
    {
        return $this->OpenHouseRemarks;
    }

    /**
     * @param string $OpenHouseRemarks
     */
    public function setOpenHouseRemarks($OpenHouseRemarks)
    {
        $this->OpenHouseRemarks = $OpenHouseRemarks;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
    }

}