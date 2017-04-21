<?php


namespace FeedFaker\Classes;


use FeedFaker\Models\GenericResource;
use FeedFaker\Models\History;

class HistoryFaker extends BaseFaker
{
    public function generate(GenericResource $resource, array $overrides = [])
    {
        $history = new History();

        $history->setHistoryTransactionalKey($this->faker->tech_id);
        $history->setOriginatingSystemHistoryKey($this->faker->tech_id);
        $history->setOriginatingSystemName($resource->getOriginatingSystemName());
        $history->setChangedByMemberID($resource->getAgentMlsId());
        $history->setChangedByMemberKey($resource->getAgentMlsKey());
        $history->setChangeType($this->faker->changeType);
        $history->setModificationTimestamp($this->faker->dateTime);
        $history->setFieldKey('FakeFieldKey');
        $history->setFieldName('FakeFieldName');
        $history->setPreviousValue($this->faker->word);
        $history->setNewValue($this->faker->word);
        $history->setClassName($resource->getClassName());
        $history->setResourceName($resource->getResourceName());
        $history->setResourceRecordID($resource->getResourceRecordID());
        $history->setResourceRecordKey($resource->getResourceRecordKey());

        // handle overrides
        $history = $this->handleOverrides($history, $overrides);

        return $history;
    }
}