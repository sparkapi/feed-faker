<?php

namespace FeedFaker\Classes;

use DI\Container;
use FeedFaker\Models\GenericResource;
use FeedFaker\Models\Media;
use FeedFaker\Models\MediaImage;
use FeedFaker\Models\Property;

class MediaFaker extends BaseFaker
{
    public function __construct(Container $container)
    {
        parent::__construct($container);
        $photo_provider = $container->get('photo_provider');
        $this->faker->addProvider(new $photo_provider($this->faker, $container));
    }

    /**
     * @param GenericResource $resource
     * @param MediaImage | boolean $image
     * @param string $type
     * @return Media
     */
    public function generate(GenericResource $resource, $image = false, $order = false, $type = 'exterior',  array $overrides = [])
    {
        $order = $order ?: $this->faker->numberBetween(1, 5);
        $media = new Media();
        $media_category = 'Photos';
        $image_type = '';
        $resource_name = $resource->getResourceName();
        switch ($resource_name) {
            case 'Office':
                break;
            case 'Member':
                $image_type = 'portraits';
                break;
            case 'Property':
                $image_type = $type;
                break;
        }

        if (!$image) {
            /** @var MediaImage $image */
            $image = $this->faker->getPhoto($image_type);
        }

        $media->setMediaKey($this->faker->tech_id);
        $media->setResourceRecordKey($resource->getResourceRecordKey());
        $media->setResourceRecordId($resource->getResourceRecordId());
        $media->setOriginatingSystemMediaKey($resource->getOriginatingSystemKey());
        $media->setOriginatingSystemName($resource->getOriginatingSystemName());
        $media->setMediaObjectID($this->faker->tech_id);
        $media->setChangedByMemberID($resource->getAgentMlsId());
        $media->setChangedByMemberKey($resource->getAgentMlsKey());
        $media->setMediaCategory($media_category);
        $media->setMimeType($image->getMimeType());
        $media->setShortDescription($this->faker->sentence);
        $media->setLongDescription($this->faker->paragraph);
        $media->setModificationTimestamp($this->faker->dateTime);
        $media->setMediaModificationTimestamp($this->faker->dateTime);
        $media->setMediaURL($image->getUrl());
        $media->setMediaHTML($this->faker->imageHTML);
        $media->setOrder($order);
        $media->setGroup($this->faker->word);
        $media->setImageWidth($image->getWidth());
        $media->setImageHeight($image->getHeight());
        $media->setImageSizeDescription('pixels');
        $media->setResourceName($resource->getResourceName());
        $media->setClassName($resource->getResourceName());
        $media->setPermission($this->faker->mediaPermission);
        $media->setMediaStatus('Active');

        // handle overrides
        $media = $this->handleOverrides($media, $overrides);

        return $media;
    }

    public function generatePropertyImages(Property $resource)
    {
        $i = 1;
        $media = [];
        $count = $this->faker->numberBetween(5, 25);
        $images = $this->faker->getPhotos($count);

        // generate a generic resource from the property
        $generic = new GenericResource();
        $generic->setResourceName($resource->getModelType());
        $generic->setResourceRecordId($resource->getListingId());
        $generic->setResourceRecordKey($resource->getListingKey());
        $generic->setOriginatingSystemName($resource->getOriginatingSystemName());
        $generic->setOriginatingSystemKey($resource->getOriginatingSystemKey());
        $generic->setAgentMlsId($resource->getListAgentMlsId());
        $generic->setAgentMlsKey($resource->getListAgentKey());

        foreach ($images as $image) {
            $media[] = $this->generate($generic, $image, $i);
            $i++;
        }

        return $media;
    }
}