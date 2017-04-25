<?php

namespace FeedFaker\Providers;

use DI\Container;
use Faker\Factory;
use Faker\Generator;
use FeedFaker\Models\MediaImage;

class NullPhotoProvider extends PhotoProvider
{
    public $faker;

    public function __construct(Generator $generator, Container $container)
    {
        $this->faker = Factory::create();
        parent::__construct($generator);
    }

    function getPhotos($count)
    {
        $return = [];
        $i = 0;

        while ($i <= $count) {
            $return[] = $this->getPhoto('');
        }

        return $return;
    }

    function getPhoto($type)
    {
        $image = new MediaImage();
        $image->setUrl($this->faker->imageUrl(640, 480, 'city'));
        $image->setHeight(480);
        $image->setHeight(640);
        $image->setMimeType('image/jpeg');

        return $image;
    }

    function getCollection($type)
    {
        /** Not necessary */
    }
}