<?php


namespace FeedFaker\Providers;


use DI\Container;
use Faker\Generator;
use FeedFaker\Models\MediaImage;

/**
 * Class LocalPhotoProvider
 * @package FeedFaker\Providers
 */
class LocalPhotoProvider extends PhotoProvider
{
    /** @var MediaImage[] $interior */
    public $interior = [];
    /** @var MediaImage[] $exterior */
    public $exterior = [];
    /** @var MediaImage[] $portraits */
    public $portraits = [];

    public function __construct(Generator $generator, Container $container)
    {
        parent::__construct($generator, $container);
        $this->interior = $this->getCollection('interior');
        $this->exterior = $this->getCollection('exterior');
        $this->portraits = $this->getCollection('portraits');
    }

    /**
     * @param $count
     * @return MediaImage[]
     */
    function getPhotos($count)
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

    /**
     * @param $type
     * @return MediaImage
     */
    function getPhoto($type)
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

    /**
     * @param $type
     * @return MediaImage[]
     * @throws \Exception
     */
    function getCollection($type)
    {
        $return = [];
        switch ($type) {
            case 'interior':
                $path = $this->container->get('interior_collection');
                break;
            case 'portraits':
                $path = $this->container->get('portrait_collection');
                break;
            case 'exterior':
            default:
                $path = $this->container->get('exterior_collection');
                break;
        }

        if ($handle = opendir($path)) {

            while (false !== ($file = readdir($handle))) {
                $filepath = $path . '/' . $file;

                if (is_file($filepath)) {
                    $photo_info = getimagesize($filepath);

                    $image = new MediaImage();
                    $image->setLocation($filepath);
                    $image->setWidth($photo_info[0]);
                    $image->setHeight($photo_info[1]);
                    $image->setMimeType('image/jpeg');

                    $return[] = $image;
                }
            }
            closedir($handle);
        } else {
            throw new \Exception("Failed to open directory {$path}");
        }

        return $return;
    }
}