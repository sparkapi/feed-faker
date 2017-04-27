## RESO Feed Faker
[![Latest Version](https://img.shields.io/github/release/sparkapi/feed-faker.svg?style=flat-square)](https://github.com/sparkapi/feed-faker/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/sparkapi/feed-faker/master.svg?style=flat-square)](https://travis-ci.org/sparkapi/feed-faker)
[![Total Downloads](https://img.shields.io/packagist/dt/sparkapi/feed-faker.svg?style=flat-square)](https://packagist.org/packages/sparkapi/feed-faker)

FeedFaker allows you to generate a ton of fake RESO-compliant feed data objects quickly and easily, in a way that will keep the IDs at least semi-referentially linked for imports into databases.

## Install via Composer
`$ composer require sparkapi/feed-faker`

(or)
```json
{
    "require": {
        "sparkapi/feed-faker": "^0.8"
    }
}
```

## Example Usage

First define your settings for keys and the number and type of objects to create.
All settings have defaults, except for unsplash, which is the default image provider.
If you are using unsplash, you will have to pass in a few settings.
If you want to use a different image provider, pass in the class to that provider.

All other settings have defaults, so feel free to modify what you want and leave blank the rest.

```php
$settings = [
    // Required for unsplash
    'unsplash_app_id' => 'your_unsplash_app_id', // unsplash specific
    'interior_collection' => collection_id, // unsplash specific
    'exterior_collection' => collection_id, // unsplash specific
    'portrait_collection' => collection_id, // unsplash specific
        
    // Optional photo provider, if not using unsplash (you can ignore the above, too).
    'photo_provider' => \FeedFaker\Helper\UnsplashPhotoProvider::class,

    // Basic settings, all with defaults.
    'mls_id' => 'my-awesome-mls',
    
    // the number of objects you want to create for each resource type.
    'office_count' => 50,
    'member_count' => 150,
    'property_count' => 500,
    'openhouse_count' => 1000,
    'history_count' => 1000,
    'media_count' => 5000,
];
```

You may provide a valid full path to a php settings file that returns an array, if you prefer. An example is un `settings.php.dist`.

Now that you're all setup, instantiate it and fire away:

```php
$settings = [
    'unsplash_app_id' => 'my-app-id-from-unsplash'
    'interior_collection' => 10
    'exterior_collection' => 1010
    'portrait_collection' => 101010
    
    // optional
    'mls_id' => 'best-mls-in-the-universe',
    'history_count' => 500
];

$feedfake = new FeedFaker\FakeFeed($settings);
$data = $feedfake->go();

$properties = $data['property'];
$offices = $data['office'];
$members = $data['member'];
$media = $data['media'];
$history = $data['history'];
$openhouses = $data['openhouse'];

foreach ($properties as $property) {
    echo $property->getListingKey() . PHP_EOL;

    var_dump($property->toArray());
}
```

Yep, that's it. You're welcome.
    
## Optional Logging
The Faker can also log information to any PSR-3 compatible logger. (Useful for Image provider errors, etc.)

You have two options to set one up: Give it **your own logger**, or provide a setup **callable** for MonoLog.

### Setup Callable for Monolog
By default, Faker uses Monolog to handle any logging, which uses handlers to know where and what details to log. 
If you provide no setup or logger, Faker will default to a `NullHandler` and save no log information.

You may provide any callable as the second parameter for `FakeFeed`. This callable accepts a monolog `Logger` instance and doesn't need to return anything.

```php
$logger_setup = function($monolog) {
    // Save all debug and above messages to a file
    $monolog->pushHandler(new StreamHandler('/path/to/logs.log', \Monolog\Logger::DEBUG));
    
    // Save more important messages to some other place
    $monolog->pushHandler(new SomeOtherHandler(\Monolog\Logger::WARNING));
};

$feedfake = new FeedFaker\FakeFeed([], $logger_setup);
$data = $feedfake->go()
```

### Your own logger
You may also skip monolog altogether and provide any instance of a PSR-3 compatible logger as the second argument.

```php
$feedfake = new FeedFaker\FakeFeed([], $my_psr_3_logger);
$data = $feedfake->go()
```

## Interoperability
Feed Faker is [PSR compliant](http://www.php-fig.org/) and [Container Interoperability](https://github.com/container-interop/container-interop) compliant. Any oversights, please let us know.

## Testing
We try for at least 80% test coverage.
``` bash
$ phpunit
```

Note tht the `UnsplashPhotoProviderTest`s are skipped. These require a valid credential. You may extend and run these tests with your own credentials. A better (environment-based) system is on the way.

## Contributing
Contributions are welcome and will be fully credited. Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

Open an issue to join in!

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
