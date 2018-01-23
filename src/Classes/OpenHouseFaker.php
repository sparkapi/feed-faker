<?php

namespace FeedFaker\Classes;

use Carbon\Carbon;
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

        $modification = Carbon::parse($this->faker->dateTimeThisYear()->format('Y-m-d H:i:s'));

        $openhouse->setOpenHouseKey($this->faker->tech_id);
        $openhouse->setOpenHouseId($this->faker->tech_id);
        $openhouse->setOriginatingSystemName($property->getOriginatingSystemName());
        $openhouse->setOriginatingSystemKey($property->getOriginatingSystemKey());
        $openhouse->setListingKey($property->getListingKey());
        $openhouse->setListingId($property->getListingId());
        $openhouse->setOriginalEntryTimestamp($modification->subWeek()->toDateTimeString());
        $openhouse->setModificationTimestamp($modification->subWeek()->toDateTimeString());
        $openhouse->setOpenHouseDate($modification->toDateString());
        $openhouse->setOpenHouseStartTime($modification->toTimeString());
        $openhouse->setOpenHouseEndTime($modification->addHour()->toTimeString());
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