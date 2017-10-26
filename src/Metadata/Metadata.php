<?php

namespace FeedFaker\Metadata;

use FeedFaker\Models\BaseModel;
use FeedFaker\Models\Contact;
use FeedFaker\Models\History;
use FeedFaker\Models\Media;
use FeedFaker\Models\Member;
use FeedFaker\Models\Office;
use FeedFaker\Models\OpenHouse;
use FeedFaker\Models\Property;
use FeedFaker\Models\SavedSearch;

class Metadata
{
    /**
     * @param bool $resource_name
     * @return array
     * @throws \Exception
     */
    public static function getResources($resource_name = false)
    {
        $return = [];

        $resources = [
            'Contact' => Contact::class,
            'History' => History::class,
            'Media' => Media::class,
            'Member' => Member::class,
            'Office' => Office::class,
            'OpenHouse' => OpenHouse::class,
            'Property' => Property::class,
            'SavedSearch' => SavedSearch::class,
        ];

        if ($resource_name and array_key_exists($resource_name, $resources)) {
            $class = new $resources[$resource_name];
            $return[$resource_name] = $class->getMetadata();
        } else if ($resource_name === false) {
            foreach ($resources as $name => $resource) {
                $class = new $resource();
                /** @var BaseModel $class */
                $return[$name] = $class->getMetadata();
            }
        } else {
            throw new \Exception("Invalid resource name");
        }

        return $return;
    }
}