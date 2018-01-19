<?php


namespace FeedFaker\Classes;


use DI\Container;
use Faker\Factory;
use FeedFaker\Providers\RetsProvider;
use FeedFaker\Models\BaseModel;

abstract class BaseFaker
{
    public $mls_id;
    public $container;
    public $faker;

    /**
     * BaseFaker constructor.
     * @param Container $container
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function __construct(Container $container)
    {
        $this->mls_id = $container->get('mls_id');
        $this->container = $container;

        $this->faker = Factory::create();
        $this->faker->addProvider(new RetsProvider($this->faker));
    }

    /**
     * @param BaseModel $model
     * @param array $overrides
     * @return BaseModel
     *
     * NOTE: this allows users to break the rules. So they can override any value, even it it's
     * illegal (eg. set a ClosedDate on an Active property etc.
     */
    public function handleOverrides(BaseModel $model, array $overrides = [])
    {
        foreach ($overrides as $key => $value) {
            $method = "set{$key}";
            if (method_exists($model, $method)) {
                $model->$method($value);
            }
        }

        return $model;
    }
}