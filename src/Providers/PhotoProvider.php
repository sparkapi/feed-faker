<?php

namespace FeedFaker\Providers;

use Faker\Generator;
use Faker\Provider\Base;
use FeedFaker\Models\MediaImage;

/**
 * Class PhotoProvider
 * @package FeedFaker\Providers
 */
abstract class PhotoProvider extends Base
{
    public function __construct(Generator $generator)
    {
        parent::__construct($generator);
    }

    /**
     * @param $count
     * @return MediaImage[]
     */
    abstract function getPhotos($count);

    /**
     * @param $type
     * @return MediaImage
     */
    abstract function getPhoto($type);

    /**
     * @param $type
     * @return MediaImage[]
     */
    abstract function getCollection($type);
}