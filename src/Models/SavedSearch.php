<?php


namespace FeedFaker\Models;

/**
 * Class SavedSearch
 * @package FeedFaker\Models
 *
 * @property string SavedSearchKey
 * @property string SavedSearchName
 * @property string SavedSearchDescription
 * @property string SavedSearchType
 * @property string OriginatingSystemKey
 * @property string OriginatingSystemName
 * @property string SearchQuery
 * @property string SearchQueryType
 * @property string OriginalEntryTimestamp
 * @property string ModificationTimestamp
 * @property string ResourceName
 * @property string ClassName
 * @property string MemberKey
 * @property string OriginatingSystemMemberKey
 * @property string OriginatingSystemMemberName
 * @property string MemberMlsId
 */

class SavedSearch extends BaseModel
{
    public $resource_name = 'SavedSearch';

    public $SavedSearchKey;
    public $SavedSearchName;
    public $SavedSearchDescription;
    public $SavedSearchType;
    public $OriginatingSystemKey;
    public $OriginatingSystemName;
    public $SearchQuery;
    public $SearchQueryType;
    public $OriginalEntryTimestamp;
    public $ModificationTimestamp;
    public $ResourceName;
    public $ClassName;
    public $MemberKey;
    public $OriginatingSystemMemberKey;
    public $OriginatingSystemMemberName;
    public $MemberMlsId;

    public function getIdKey()
    {
        return $this->getSavedSearchKey();
    }

    public function getForeignKey()
    {
        return $this->getMemberKey();
    }

    /**
     * @return string
     */
    public function getSavedSearchKey()
    {
        return $this->SavedSearchKey;
    }

    /**
     * @param string $SavedSearchKey
     */
    public function setSavedSearchKey($SavedSearchKey)
    {
        $this->SavedSearchKey = $SavedSearchKey;
    }

    /**
     * @return string
     */
    public function getSavedSearchName()
    {
        return $this->SavedSearchName;
    }

    /**
     * @param string $SavedSearchName
     */
    public function setSavedSearchName($SavedSearchName)
    {
        $this->SavedSearchName = $SavedSearchName;
    }

    /**
     * @return string
     */
    public function getSavedSearchDescription()
    {
        return $this->SavedSearchDescription;
    }

    /**
     * @param string $SavedSearchDescription
     */
    public function setSavedSearchDescription($SavedSearchDescription)
    {
        $this->SavedSearchDescription = $SavedSearchDescription;
    }

    /**
     * @return string
     */
    public function getSavedSearchType()
    {
        return $this->SavedSearchType;
    }

    /**
     * @param string $SavedSearchType
     */
    public function setSavedSearchType($SavedSearchType)
    {
        $this->SavedSearchType = $SavedSearchType;
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
    public function getSearchQuery()
    {
        return $this->SearchQuery;
    }

    /**
     * @param string $SearchQuery
     */
    public function setSearchQuery($SearchQuery)
    {
        $this->SearchQuery = $SearchQuery;
    }

    /**
     * @return string
     */
    public function getSearchQueryType()
    {
        return $this->SearchQueryType;
    }

    /**
     * @param string $SearchQueryType
     */
    public function setSearchQueryType($SearchQueryType)
    {
        $this->SearchQueryType = $SearchQueryType;
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
    public function getOriginatingSystemMemberName()
    {
        return $this->OriginatingSystemMemberName;
    }

    /**
     * @param string $OriginatingSystemMemberName
     */
    public function setOriginatingSystemMemberName($OriginatingSystemMemberName)
    {
        $this->OriginatingSystemMemberName = $OriginatingSystemMemberName;
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
}