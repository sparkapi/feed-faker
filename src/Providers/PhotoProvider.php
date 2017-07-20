<?php

namespace FeedFaker\Providers;

use DI\Container;
use Faker\Generator;
use Faker\Provider\Base;
use FeedFaker\Models\MediaImage;

/**
 * Class PhotoProvider
 * @package FeedFaker\Providers
 */
abstract class PhotoProvider extends Base
{
    /** @var  Container $container */
    public $container;
    /** @var MediaImage[] $interior */
    public $interior = [];
    /** @var MediaImage[] $exterior */
    public $exterior = [];
    /** @var MediaImage[] $portraits */
    public $portraits = [];

    public function __construct(Generator $generator, Container $container)
    {
        $this->container = $container;
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