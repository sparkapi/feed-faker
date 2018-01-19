<?php


namespace FeedFaker\Models;


/**
 * Class History
 * @package FeedFaker\Models
 *
 * @property string HistoryTransactionalKey
 * @property string OriginatingSystemHistoryKey
 * @property string OriginatingSystemName
 * @property string ChangedByMemberID
 * @property string ChangedByMemberKey
 * @property string ChangeType
 * @property string ModificationTimestamp
 * @property string FieldKey
 * @property string FieldName
 * @property string PreviousValue
 * @property string NewValue
 * @property string ClassName
 * @property string ResourceName
 * @property string ResourceRecordKey
 * @property string ResourceRecordID
 */

class History extends BaseModel
{
    public $HistoryTransactionalKey;
    public $OriginatingSystemHistoryKey;
    public $OriginatingSystemName;
    public $ChangedByMemberID;
    public $ChangedByMemberKey;
    public $ChangeType;
    public $ModificationTimestamp;
    public $FieldKey;
    public $FieldName;
    public $PreviousValue;
    public $NewValue;
    public $ClassName;
    public $ResourceName;
    public $ResourceRecordKey;
    public $ResourceRecordID;

    public function getIdKey()
    {
        return $this->getHistoryTransactionalKey();
    }

    public function getForeignKey()
    {
        return $this->getResourceRecordKey();
    }

    /**
     * @return string
     */
    public function getOriginatingSystemHistoryKey()
    {
        return $this->OriginatingSystemHistoryKey;
    }

    /**
     * @param string $OriginatingSystemHistoryKey
     */
    public function setOriginatingSystemHistoryKey($OriginatingSystemHistoryKey)
    {
        $this->OriginatingSystemHistoryKey = $OriginatingSystemHistoryKey;
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
    public function getChangeType()
    {
        return $this->ChangeType;
    }

    /**
     * @param string $ChangeType
     */
    public function setChangeType($ChangeType)
    {
        $this->ChangeType = $ChangeType;
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
    public function getFieldKey()
    {
        return $this->FieldKey;
    }

    /**
     * @param string $FieldKey
     */
    public function setFieldKey($FieldKey)
    {
        $this->FieldKey = $FieldKey;
    }

    /**
     * @return string
     */
    public function getFieldName()
    {
        return $this->FieldName;
    }

    /**
     * @param string $FieldName
     */
    public function setFieldName($FieldName)
    {
        $this->FieldName = $FieldName;
    }

    /**
     * @return string
     */
    public function getPreviousValue()
    {
        return $this->PreviousValue;
    }

    /**
     * @param string $PreviousValue
     */
    public function setPreviousValue($PreviousValue)
    {
        $this->PreviousValue = $PreviousValue;
    }

    /**
     * @return string
     */
    public function getNewValue()
    {
        return $this->NewValue;
    }

    /**
     * @param string $NewValue
     */
    public function setNewValue($NewValue)
    {
        $this->NewValue = $NewValue;
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
     * @return mixed
     */
    public function getHistoryTransactionalKey()
    {
        return $this->HistoryTransactionalKey;
    }

    /**
     * @param string $HistoryTransactionalKey
     */
    public function setHistoryTransactionalKey($HistoryTransactionalKey)
    {
        $this->HistoryTransactionalKey = $HistoryTransactionalKey;
    }
}