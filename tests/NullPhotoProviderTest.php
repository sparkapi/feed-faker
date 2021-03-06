<?php


use DI\ContainerBuilder;
use Faker\Factory;
use FeedFaker\Providers\NullPhotoProvider;

class NullPhotoProviderTest extends PHPUnit_Framework_TestCase
{
    public $container;
    public $faker;

    public function setUp()
    {
        $containerBuilder = new ContainerBuilder;
        $containerBuilder->addDefinitions(__DIR__ . '/settings_fixture.php');
        $this->container = $containerBuilder->build();
        $this->faker = Factory::create();
        $this->faker->addProvider(new NullPhotoProvider($this->faker, $this->container));
        parent::setUp();
    }

    public function testItGetsImage()
    {
        /** @var \FeedFaker\Models\MediaImage $image */
        $image = $this->faker->getPhoto('irrelevant');
        $this->assertInstanceOf(\FeedFaker\Models\MediaImage::class, $image);
        $this->assertNotFalse(filter_var($image->getUrl(), FILTER_VALIDATE_URL));
    }

    public function testItGetsImages()
    {
        $images = $this->faker->getPhotos(10);
        $this->assertSame(10, count($images));
        $this->assertInstanceOf(\FeedFaker\Models\MediaImage::class, $images[0]);
        $this->assertNotFalse(filter_var($images[0]->getUrl(), FILTER_VALIDATE_URL));
    }
}
