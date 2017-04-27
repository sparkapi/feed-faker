<?php


use DI\ContainerBuilder;
use Faker\Factory;
use FeedFaker\Providers\UnsplashPhotoProvider;

class UnsplashPhotoProviderTest extends PHPUnit_Framework_TestCase
{
    public $faker;

    public function setUp()
    {
        $this->markTestSkipped('These tests are skipped. Please see README to enter your credentials if you want to run these tests');

        // need to have your Config/Settings file populated or these tests will fail
        $containerBuilder = new ContainerBuilder;
        $containerBuilder->addDefinitions(__DIR__ . '/settings_fixture.php');
        $this->container = $containerBuilder->build();
        $this->faker = Factory::create();
        $this->faker->addProvider(new UnsplashPhotoProvider($this->faker, $this->container));
        parent::setUp();
    }

    public function tearDown()
    {
        parent::tearDown();
    }

    public function testItGeneratesCollections()
    {
        $photo = $this->faker->getPhoto('exterior');
        // photo should be the URL of an unsplash photo resource
        $this->assertTrue(filter_var($photo, FILTER_VALIDATE_URL));
    }

    public function testItGeneratesMultiplePhotos()
    {
        $count = $this->faker->numberBetween(5, 15);
        $photos = $this->faker->getPhotos($count);

        $this->assertSame($count, count($photos));
    }
}
