<?php


namespace FeedFaker\Models;

/**
 * Class GenericResource
 * @package FeedFaker\Models
 *
 * @property string ClassName
 * @property string ResourceName
 * @property string ResourceRecordKey
 * @property string ResourceRecordID
 * @property string OriginatingSystemName
 * @property string OriginatingSystemId
 * @property string AgentMlsId
 * @property string AgentMlsKey
 */

class GenericResource extends BaseModel
{
    public $ClassName;
    public $ResourceName;
    public $ResourceRecordKey;
    public $ResourceRecordID;
    public $OriginatingSystemName;
    public $OriginatingSystemId;
    public $OriginatingSystemKey;
    public $AgentMlsId;
    public $AgentMlsKey;

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
    public function getOriginatingSystemId()
    {
        return $this->OriginatingSystemId;
    }

    /**
     * @param string $OriginatingSystemId
     */
    public function setOriginatingSystemId($OriginatingSystemId)
    {
        $this->OriginatingSystemId = $OriginatingSystemId;
    }

    /**
     * @return string
     */
    public function getAgentMlsId()
    {
        return $this->AgentMlsId;
    }

    /**
     * @param string $AgentMlsId
     */
    public function setAgentMlsId($AgentMlsId)
    {
        $this->AgentMlsId = $AgentMlsId;
    }

    /**
     * @return string
     */
    public function getAgentMlsKey()
    {
        return $this->AgentMlsKey;
    }

    /**
     * @param string $AgentMlsKey
     */
    public function setAgentMlsKey($AgentMlsKey)
    {
        $this->AgentMlsKey = $AgentMlsKey;
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
     * @return mixed
     */
    public function getOriginatingSystemKey()
    {
        return $this->OriginatingSystemKey;
    }

    /**
     * @param mixed $OriginatingSystemKey
     */
    public function setOriginatingSystemKey($OriginatingSystemKey)
    {
        $this->OriginatingSystemKey = $OriginatingSystemKey;
    }

}