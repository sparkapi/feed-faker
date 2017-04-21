<?php

namespace FeedFaker\Classes;

use Faker\Factory;
use FeedFaker\Helper\RetsProvider;
use FeedFaker\Models\Listing;
use FeedFaker\Models\OpenHouse;
use FeedFaker\Models\Property;

class OpenHouseFaker extends BaseFaker
{
    public function generate(Property $property, array $overrides = [])
    {
        $openhouse = new OpenHouse();

        $openhouse->setOpenHouseKey($this->faker->tech_id);
        $openhouse->setOpenHouseId($this->faker->tech_id);
        $openhouse->setOriginatingSystemName($property->getOriginatingSystemName());
        $openhouse->setOriginatingSystemKey($property->getOriginatingSystemKey());
        $openhouse->setListingKey($property->getListingKey());
        $openhouse->setListingId($property->getListingId());
        $openhouse->setOriginalEntryTimestamp($this->faker->dateTime);
        $openhouse->setModificationTimestamp($this->faker->dateTime);
        $openhouse->setOpenHouseDate($this->faker->date);
        $openhouse->setOpenHouseStartTime($this->faker->time());
        $openhouse->setOpenHouseEndTime($this->faker->time());
        $openhouse->setShowingAgentMlsID($property->getListAgentMlsId());
        $openhouse->setShowingAgentFirstName($property->getListAgentFirstName());
        $openhouse->setShowingAgentLastName($property->getListAgentLastName());
        $openhouse->setAppointmentRequiredYN($this->faker->YorN);
        $openhouse->setOpenHouseRemarks($this->faker->paragraph(3));
        $openhouse->setStatus($this->faker->status);

        // handle overrides
        $openhouse = $this->handleOverrides($openhouse, $overrides);

        return $openhouse;
    }
}