<?php

use FeedFaker\Config\Settings;
use FeedFaker\Providers\NullPhotoProvider;
use FeedFaker\Providers\UnsplashPhotoProvider;

class SettingsTest extends PHPUnit_Framework_TestCase
{
    public static $valid_settings = [
        'mls_id' => 'my-test-mls',
        'office_count' => 500,
        'member_count' => 1500,
        'property_count' => 5100,
        'openhouse_count' => 10010,
        'history_count' => 10010,
        'media_count' => 50010,

        'photo_provider' => UnsplashPhotoProvider::class,
        'unsplash_app_id' => 'my-id',
        'interior_collection' => 1010,
        'exterior_collection' => 101010,
        'portrait_collection' => 10101010,
    ];

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage Given settings are missing required unsplash fields. Please see readme.md
     */
    public function testValidateThrowsExceptionForMissingFields()
    {
        $settings = static::$valid_settings;
        unset($settings['unsplash_app_id']);

        Settings::validate($settings);
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage Given settings are missing required unsplash fields. Please see readme.md
     */
    public function testValidateThrowsExceptionForNonStringEntries()
    {
        $settings = static::$valid_settings;
        $settings['unsplash_app_id'] = true;

        Settings::validate($settings);
    }

    public function testValidateLetsNonUnsplashProvidersPass()
    {
        $settings = static::$valid_settings;
        $settings['photo_provider'] = 'Some\Provider\Class';
        unset($settings['unsplash_app_id']);
        unset($settings['interior_collection']);
        unset($settings['exterior_collection']);
        unset($settings['portrait_collection']);

        $actual = Settings::validate($settings);

        $this->assertEquals($settings, $actual);
    }

    public function testValidateLetsValidSettingsPass()
    {
        $actual = Settings::validate(static::$valid_settings);
        $this->assertEquals(static::$valid_settings, $actual);
    }

    public function testLoadLetsFullyValidArraySettingsThrough()
    {
        $actual = Settings::load(static::$valid_settings);
        $this->assertEquals(static::$valid_settings, $actual);
    }

    public function testLoadLetsFullyValidFileSettingsThrough()
    {
        $actual = Settings::load(realpath(__DIR__ . '/settings_fixture.php'));
        $this->assertEquals(static::$valid_settings, $actual);
    }

    public function testLoadMergesDefaults()
    {
        $settings = static::$valid_settings;
        unset($settings['mls_id']);
        unset($settings['office_count']);
        unset($settings['member_count']);
        unset($settings['openhouse_count']);
        unset($settings['history_count']);
        unset($settings['media_count']);
        unset($settings['photo_provider']);

        $expected = [
            'property_count' => 5100,
            'mls_id' => 'awesome-mls',
            'office_count' => 50,
            'member_count' => 150,
            'openhouse_count' => 1000,
            'history_count' => 1000,
            'media_count' => 5000,

            'photo_provider' => NullPhotoProvider::class,
            'unsplash_app_id' => 'my-id',
            'interior_collection' => 1010,
            'exterior_collection' => 101010,
            'portrait_collection' => 10101010,
        ];

        $actual = Settings::load($settings);

        $this->assertEquals($expected, $actual);
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage FakeFeed requires a valid array of settings or the path to a php settings file.
     */
    public function testLoadThrowsExceptionForNonArrayOrNonStringSettings()
    {
        Settings::load(true);
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage Settings path file does not exist is not readable or does not exist
     */
    public function testLoadThrowsExceptionForNonReadableSettingsFile()
    {
        Settings::load('file does not exist');
    }
}
