<?php

namespace FeedFaker\Providers;

use Crew\Unsplash\Collection;
use Crew\Unsplash\HttpClient;
use Crew\Unsplash\Photo;
use DI\Container;
use Faker\Generator;
use FeedFaker\Models\MediaImage;

class UnsplashPhotoProvider extends PhotoProvider
{
    /** @var MediaImage[] $interior */
    public $interior = [];
    /** @var MediaImage[] $exterior */
    public $exterior = [];
    /** @var MediaImage[] $portraits */
    public $portraits = [];
    /** @var Container $container */
    public $container;

    public function __construct(Generator $generator, Container $container)
    {
        $this->container = $container;

        // make sure we have this value
        if (!$container->has('unsplash_app_id')) {
            throw new \Exception("Attempting to initialize unsplash provider without unsplash_app_id set");
        }

        // connect to unsplash
        HttpClient::init([
            'applicationId' => $container->get('unsplash_app_id'),
        ]);

        // populate the local collections
        $this->populateCollections();

        parent::__construct($generator);
    }

    public function getPhotos($count)
    {
        // the assumption here is that this method applies only to property listings
        $i = 0;
        $photos = [];

        while ($i < $count) {
            if ($i < 3) {
                $type = 'exterior';
            } else {
                $type = 'interior';
            }
            $photos[] = $this->getPhoto($type);
            $i++;
        }

        return $photos;
    }

    public function getPhoto($type = 'exterior')
    {
        switch ($type) {
            case 'interior':
                $photos = $this->interior;
                break;
            case 'portraits':
                $photos = $this->portraits;
                break;
            case 'exterior':
            default:
                $photos = $this->exterior;
                break;
        }

        $rand_key = array_rand($photos);
        $photo = $photos[$rand_key];

        return $photo;
    }

    public function getCollection($type = 'exterior')
    {
        $total_pages = 1;
        $perpage = 30; // 30 is the max they'll return in batch
        $page = 1;
        $return = [];

        switch ($type) {
            case 'interior':
                $id = $this->container->get('interior_collection');
                break;
            case 'portraits':
                $id = $this->container->get('portrait_collection');
                break;
            case 'exterior':
            default:
                $id = $this->container->get('exterior_collection');
                break;
        }

        try {
            $collection = Collection::find($id);
            while ($page <= $total_pages) {
                /** @var Collection $collection */
                $photos = $collection->photos($page, $perpage);
                $total_pages = $photos->getPages()['last'];

                /** @var Photo $photo */
                foreach ($photos as $photo) {
                    $image = new MediaImage();
                    $image->setUrl($photo->urls['full']);
                    $image->setHeight($photo->height);
                    $image->setHeight($photo->width);
                    $image->setMimeType('image/jpeg');
                    $return[] = $image;
                }
                $page = $photos->getPages()['next'];
                // "next" returns null if we're already at max
                if ($page == null) {
                    break;
                }
                // try not to break rate limit
                sleep(5);
            }
        } catch (\Exception $e) {
            if ($e->getMessage() == '["Rate Limit Exceeded"]') {
                sleep(60);
                echo "Rate limit exceeded. Sleeping." . PHP_EOL;
                $this->getCollection($type);
            }
        }

        return $return;
    }

    private function populateCollections()
    {
            $this->interior = $this->getCollection('interior');
            $this->exterior = $this->getCollection('exterior');
            $this->exterior = $this->getCollection('portraits');
    }
}