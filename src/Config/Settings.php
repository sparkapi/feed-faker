<?php

namespace FeedFaker\Config;

use FeedFaker\Providers\UnsplashPhotoProvider;
use FeedFaker\Providers\NullPhotoProvider;

/**
 * Class Settings
 * @package FeedFaker\Config
 */
class Settings {

    /** @var array */
    protected static $defaults = [
        'mls_id' => 'awesome-mls',
        'office_count' => 50,
        'member_count' => 150,
        'property_count' => 500,
        'openhouse_count' => 1000,
        'history_count' => 1000,
        'media_count' => 5000,
        'photo_provider' => NullPhotoProvider::class,
    ];

    /**
     * Take the given settings and return valid settings with defaults
     *
     * @param $config
     * @return array
     * @throws \Exception
     */
    public static function load($config)
    {
        // Validate settings
        if (!is_array($config) && !is_string($config)) {
            throw new \Exception("FakeFeed requires a valid array of settings or the path to a php settings file.");
        }

        // Load a directory
        if (is_string($config)) {
            if  (!is_readable($config)) {
                throw new \Exception("Settings path {$config} is not readable or does not exist");
            }

            /** @var array $config */
            $config = require $config;
        }

        // Merge in defaults
        return static::validate(array_merge(static::getDefaults(), $config));
    }

    /**
     * Validate the loaded settings for required fields
     *
     * @param array $settings
     * @return array
     * @throws \Exception
     */
    public static function validate(array $settings)
    {
        if (
            // If we are using Unsplash, make sure the settings are valid
            // This may be better in the Unsplash provider some time in the future.
            $settings['photo_provider'] === UnsplashPhotoProvider::class
            && (
                (!array_key_exists('unsplash_app_id', $settings) || !is_string($settings['unsplash_app_id']))
                || (!array_key_exists('interior_collection', $settings) || !is_int($settings['interior_collection']))
                || (!array_key_exists('exterior_collection', $settings) || !is_int($settings['exterior_collection']))
                || (!array_key_exists('portrait_collection', $settings) || !is_int($settings['portrait_collection']))
            )
        ){
            throw new \Exception("Given settings are missing required unsplash fields. Please see readme.md");
        }

        // If it passed, we just hand back the settings
        return $settings;
    }

    /**
     * @return array
     */
    public static function getDefaults()
    {
        return static::$defaults;
    }
}
