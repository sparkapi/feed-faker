<?php

namespace FeedFaker\Providers;

use FeedFaker\Models\MediaImage;

class NullPhotoProvider extends PhotoProvider
{
    function getPhotos($count)
    {
        return [];
    }

    function getPhoto($type)
    {
        return new MediaImage();
    }

    function getCollection($type)
    {
        return [];
    }
}