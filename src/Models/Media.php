<?php


namespace FeedFaker\Models;

/**
 * Class Media
 * @package FeedFaker\Models
 *
 * @property string MediaKey
 * @property string ResourceRecordKey
 * @property string ResourceRecordID
 * @property string OriginatingSystemMediaKey
 * @property string OriginatingSystemName
 * @property string MediaObjectID
 * @property string ChangedByMemberID
 * @property string ChangedByMemberKey
 * @property string MediaCategory
 * @property string MimeType
 * @property string ShortDescription
 * @property string LongDescription
 * @property string ModificationTimestamp
 * @property string MediaModificationTimestamp
 * @property string MediaURL
 * @property string MediaHTML
 * @property string Order
 * @property string Group
 * @property string ImageWidth
 * @property string ImageHeight
 * @property string ImageSizeDescription
 * @property string ResourceName
 * @property string ClassName
 * @property string Permission
 * @property string MediaStatus
 */

class Media extends BaseModel
{
    public $MediaKey;
    public $ResourceRecordKey;
    public $ResourceRecordID;
    public $OriginatingSystemMediaKey;
    public $OriginatingSystemName;
    public $MediaObjectID;
    public $ChangedByMemberID;
    public $ChangedByMemberKey;
    public $MediaCategory;
    public $MimeType;
    public $ShortDescription;
    public $LongDescription;
    public $ModificationTimestamp;
    public $MediaModificationTimestamp;
    public $MediaURL;
    public $MediaHTML;
    public $Order;
    public $Group;
    public $ImageWidth;
    public $ImageHeight;
    public $ImageSizeDescription;
    public $ResourceName;
    public $ClassName;
    public $Permission;
    public $MediaStatus;

    public function getIdKey()
    {
        return $this->getMediaKey();
    }

    /**
     * @return string
     */
    public function getMediaKey()
    {
        return $this->MediaKey;
    }

    /**
     * @param string $MediaKey
     */
    public function setMediaKey($MediaKey)
    {
        $this->MediaKey = $MediaKey;
    }

    /**
     * @return string
     */
    public function getResourceRecordKey()
    {
        return $this->ResourceRecordKey;
    }

    /**
     * @param string $ResourceRecordKey
     */
    public function setResourceRecordKey($ResourceRecordKey)
    {
        $this->ResourceRecordKey = $ResourceRecordKey;
    }

    /**
     * @return string
     */
    public function getResourceRecordID()
    {
        return $this->ResourceRecordID;
    }

    /**
     * @param string $ResourceRecordID
     */
    public function setResourceRecordID($ResourceRecordID)
    {
        $this->ResourceRecordID = $ResourceRecordID;
    }

    /**
     * @return string
     */
    public function getOriginatingSystemMediaKey()
    {
        return $this->OriginatingSystemMediaKey;
    }

    /**
     * @param string $OriginatingSystemMediaKey
     */
    public function setOriginatingSystemMediaKey($OriginatingSystemMediaKey)
    {
        $this->OriginatingSystemMediaKey = $OriginatingSystemMediaKey;
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
    public function getMediaObjectID()
    {
        return $this->MediaObjectID;
    }

    /**
     * @param string $MediaObjectID
     */
    public function setMediaObjectID($MediaObjectID)
    {
        $this->MediaObjectID = $MediaObjectID;
    }

    /**
     * @return string
     */
    public function getChangedByMemberID()
    {
        return $this->ChangedByMemberID;
    }

    /**
     * @param string $ChangedByMemberID
     */
    public function setChangedByMemberID($ChangedByMemberID)
    {
        $this->ChangedByMemberID = $ChangedByMemberID;
    }

    /**
     * @return string
     */
    public function getChangedByMemberKey()
    {
        return $this->ChangedByMemberKey;
    }

    /**
     * @param string $ChangedByMemberKey
     */
    public function setChangedByMemberKey($ChangedByMemberKey)
    {
        $this->ChangedByMemberKey = $ChangedByMemberKey;
    }

    /**
     * @return string
     */
    public function getMediaCategory()
    {
        return $this->MediaCategory;
    }

    /**
     * @param string $MediaCategory
     */
    public function setMediaCategory($MediaCategory)
    {
        $this->MediaCategory = $MediaCategory;
    }

    /**
     * @return string
     */
    public function getMimeType()
    {
        return $this->MimeType;
    }

    /**
     * @param string $MimeType
     */
    public function setMimeType($MimeType)
    {
        $this->MimeType = $MimeType;
    }

    /**
     * @return string
     */
    public function getShortDescription()
    {
        return $this->ShortDescription;
    }

    /**
     * @param string $ShortDescription
     */
    public function setShortDescription($ShortDescription)
    {
        $this->ShortDescription = $ShortDescription;
    }

    /**
     * @return string
     */
    public function getLongDescription()
    {
        return $this->LongDescription;
    }

    /**
     * @param string $LongDescription
     */
    public function setLongDescription($LongDescription)
    {
        $this->LongDescription = $LongDescription;
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
    public function getMediaModificationTimestamp()
    {
        return $this->MediaModificationTimestamp;
    }

    /**
     * @param string $MediaModificationTimestamp
     */
    public function setMediaModificationTimestamp($MediaModificationTimestamp)
    {
        $this->MediaModificationTimestamp = $MediaModificationTimestamp;
    }

    /**
     * @return string
     */
    public function getMediaURL()
    {
        return $this->MediaURL;
    }

    /**
     * @param string $MediaURL
     */
    public function setMediaURL($MediaURL)
    {
        $this->MediaURL = $MediaURL;
    }

    /**
     * @return string
     */
    public function getMediaHTML()
    {
        return $this->MediaHTML;
    }

    /**
     * @param string $MediaHTML
     */
    public function setMediaHTML($MediaHTML)
    {
        $this->MediaHTML = $MediaHTML;
    }

    /**
     * @return string
     */
    public function getOrder()
    {
        return $this->Order;
    }

    /**
     * @param string $Order
     */
    public function setOrder($Order)
    {
        $this->Order = $Order;
    }

    /**
     * @return string
     */
    public function getGroup()
    {
        return $this->Group;
    }

    /**
     * @param string $Group
     */
    public function setGroup($Group)
    {
        $this->Group = $Group;
    }

    /**
     * @return string
     */
    public function getImageWidth()
    {
        return $this->ImageWidth;
    }

    /**
     * @param string $ImageWidth
     */
    public function setImageWidth($ImageWidth)
    {
        $this->ImageWidth = $ImageWidth;
    }

    /**
     * @return string
     */
    public function getImageHeight()
    {
        return $this->ImageHeight;
    }

    /**
     * @param string $ImageHeight
     */
    public function setImageHeight($ImageHeight)
    {
        $this->ImageHeight = $ImageHeight;
    }

    /**
     * @return string
     */
    public function getImageSizeDescription()
    {
        return $this->ImageSizeDescription;
    }

    /**
     * @param string $ImageSizeDescription
     */
    public function setImageSizeDescription($ImageSizeDescription)
    {
        $this->ImageSizeDescription = $ImageSizeDescription;
    }

    /**
     * @return string
     */
    public function getResourceName()
    {
        return $this->ResourceName;
    }

    /**
     * @param string $ResourceName
     */
    public function setResourceName($ResourceName)
    {
        $this->ResourceName = $ResourceName;
    }

    /**
     * @return string
     */
    public function getClassName()
    {
        return $this->ClassName;
    }

    /**
     * @param string $ClassName
     */
    public function setClassName($ClassName)
    {
        $this->ClassName = $ClassName;
    }

    /**
     * @return string
     */
    public function getPermission()
    {
        return $this->Permission;
    }

    /**
     * @param string $Permission
     */
    public function setPermission($Permission)
    {
        $this->Permission = $Permission;
    }

    /**
     * @return string
     */
    public function getMediaStatus()
    {
        return $this->MediaStatus;
    }

    /**
     * @param string $MediaStatus
     */
    public function setMediaStatus($MediaStatus)
    {
        $this->MediaStatus = $MediaStatus;
    }
}