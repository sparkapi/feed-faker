<?php


namespace FeedFaker\Models;


/**
 * Class RetsObject
 * @package FeedFaker\Models
 *
 * @property string ContentId
 * @property string ObjectId
 * @property string ContentType
 * @property string ContentDescription
 * @property string ContentSubDescription
 * @property string Location
 * @property string MimeVersion
 * @property boolean Preferred
 *
 */
class RetsObject
{
    public $ContentId;
    public $ObjectId;
    public $ContentType;
    public $ContentDescription;
    public $ContentSubDescription;
    public $Location;
    public $MimeVersion;
    public $Preferred;

    /**
     * @return string
     */
    public function getContentId()
    {
        return $this->ContentId;
    }

    /**
     * @param string $ContentId
     */
    public function setContentId($ContentId)
    {
        $this->ContentId = $ContentId;
    }

    /**
     * @return string
     */
    public function getObjectId()
    {
        return $this->ObjectId;
    }

    /**
     * @param string $ObjectId
     */
    public function setObjectId($ObjectId)
    {
        $this->ObjectId = $ObjectId;
    }

    /**
     * @return string
     */
    public function getContentType()
    {
        return $this->ContentType;
    }

    /**
     * @param string $ContentType
     */
    public function setContentType($ContentType)
    {
        $this->ContentType = $ContentType;
    }

    /**
     * @return string
     */
    public function getContentDescription()
    {
        return $this->ContentDescription;
    }

    /**
     * @param string $ContentDescription
     */
    public function setContentDescription($ContentDescription)
    {
        $this->ContentDescription = $ContentDescription;
    }

    /**
     * @return string
     */
    public function getContentSubDescription()
    {
        return $this->ContentSubDescription;
    }

    /**
     * @param string $ContentSubDescription
     */
    public function setContentSubDescription($ContentSubDescription)
    {
        $this->ContentSubDescription = $ContentSubDescription;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param string $Location
     */
    public function setLocation($Location)
    {
        $this->Location = $Location;
    }

    /**
     * @return string
     */
    public function getMimeVersion()
    {
        return $this->MimeVersion;
    }

    /**
     * @param string $MimeVersion
     */
    public function setMimeVersion($MimeVersion)
    {
        $this->MimeVersion = $MimeVersion;
    }

    /**
     * @return boolean
     */
    public function getPreferred()
    {
        return $this->Preferred;
    }

    /**
     * @param boolean $Preferred
     */
    public function setPreferred($Preferred)
    {
        $this->Preferred = $Preferred;
    }
}