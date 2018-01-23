<?php

namespace FeedFaker;

use DI\ContainerBuilder;
use FeedFaker\Classes\HistoryFaker;
use FeedFaker\Classes\MediaFaker;
use FeedFaker\Classes\MemberFaker;
use FeedFaker\Classes\OfficeFaker;
use FeedFaker\Classes\OpenHouseFaker;
use FeedFaker\Classes\PropertyFaker;
use FeedFaker\Config\Settings;
use FeedFaker\Helper\Logger;
use FeedFaker\Models\BaseModel;
use FeedFaker\Models\GenericResource;
use FeedFaker\Models\Member;
use FeedFaker\Models\Office;
use FeedFaker\Models\Property;

date_default_timezone_set('America/Chicago');

class FakeFeed
{
    public $container;
    public $office = [];
    public $member = [];
    public $property = [];
    public $openhouse = [];
    public $media = [];
    public $history = [];


    public function go($config, $logger = null)
    {
        $config = Settings::load($config);

        $containerBuilder = new ContainerBuilder;
        $containerBuilder->addDefinitions($config);
        $this->container = $containerBuilder->build();

        // Setup and add our logger
        $this->container->set('log', function() use ($logger) {
            return Logger::build($logger);
        });

        // if we passed in a config array override the settings file
        if ($config) {
            $this->container->set('mls_id', $config['mls_id']);
            $this->container->set('office_count', $config['office_count']);
            $this->container->set('member_count', $config['member_count']);
            $this->container->set('property_count', $config['property_count']);
            $this->container->set('openhouse_count', $config['openhouse_count']);
            $this->container->set('media_count', $config['media_count']);
            $this->container->set('history_count', $config['history_count']);
        }

        // instantiate fakers
        $office_faker = new OfficeFaker($this->container);
        $member_faker = new MemberFaker($this->container);
        $property_faker = new PropertyFaker($this->container);
        $openhouse_faker = new OpenHouseFaker($this->container);
        $media_faker = new MediaFaker($this->container);
        $history_faker = new HistoryFaker($this->container);

        // start with offices
        while (count($this->office) < $this->container->get('office_count')) {
            $this->office[] = $office_faker->generate();
        }

        // then members, which will require an office
        while (count($this->member) < $this->container->get('member_count')) {
            $this->member[] = $member_faker->generate($this->getRandom('office'));
        }

        // then property which will require an member
        while (count($this->property) < $this->container->get('property_count')) {
            $p = $property_faker->generate($this->getRandom('member'), $this->getRandom('member'));
            $this->property[] = $p;
            // generate the listing photos
            $this->media = array_merge($this->media, $media_faker->generatePropertyImages($p));
        }

        // then open house which will require a listing
        while (count($this->openhouse) < $this->container->get('openhouse_count')) {
            $this->openhouse[] = $openhouse_faker->generate($this->getRandom('property'));
        }

        // media can apply to any of the main resources, so we'll create a generic resource
        while (count($this->media) < $this->container->get('media_count')) {
            $generic_resource = $this->getGenericResource(true);
            $this->media[] = $media_faker->generate($generic_resource);
        }

        // so will history
        while (count($this->history) < $this->container->get('history_count')) {
            $generic_resource = $this->getGenericResource();
            $this->history[] = $history_faker->generate($generic_resource);
        }

        return [
            'office' => $this->office,
            'member' => $this->member,
            'property' => $this->property,
            'openhouse' => $this->openhouse,
            'media' => $this->media,
            'history' => $this->history,
        ];
    }

    private function getRandom($type = 'resource', $no_prop = false)
    {
        $resources = [
            $this->office,
            $this->member,
        ];

        if (!$no_prop) {
            $resources[] = $this->property;
        }

        switch($type) {
            case 'office':
                $grab_one = $this->office;
                break;
            case 'member':
                $grab_one = $this->member;
                break;
            case 'property':
                $grab_one = $this->property;
                break;
            case 'resource':
            default:
                $rand = array_rand($resources);
                $grab_one = $resources[$rand];
                break;
        }

        return $grab_one[array_rand($grab_one)];
    }

    private function getGenericResource($no_prop = false)
    {
        /** @var BaseModel $resource */
        $resource = $this->getRandom('resource', $no_prop);
        $generic = new GenericResource();
        $generic->setResourceName($resource->getResourceName());

        $type = $resource->getModelType();

        switch ($type) {
            case 'Property':
                /** @var Property $resource */
                $generic->setResourceRecordId($resource->getListingId());
                $generic->setResourceRecordKey($resource->getListingKey());
                $generic->setOriginatingSystemName($resource->getOriginatingSystemName());
                $generic->setOriginatingSystemKey($resource->getOriginatingSystemKey());
                $generic->setAgentMlsId($resource->getListAgentMlsId());
                $generic->setAgentMlsKey($resource->getListAgentKey());
                break;
            case 'Office':
                /** @var Office $resource */
                $generic->setResourceRecordId($resource->getOfficeMlsId());
                $generic->setResourceRecordKey($resource->getOfficeKey());
                $generic->setOriginatingSystemName($resource->getOriginatingSystemName());
                $generic->setOriginatingSystemKey($resource->getOriginatingSystemOfficeKey());
                break;
            case 'Member':
                /** @var Member $resource */
                $generic->setResourceRecordId($resource->getMemberMlsId());
                $generic->setResourceRecordKey($resource->getMemberKey());
                $generic->setOriginatingSystemName($resource->getOriginatingSystemName());
                $generic->setOriginatingSystemKey($resource->getOriginatingSystemMemberKey());
                break;
        }

        return $generic;
    }
}