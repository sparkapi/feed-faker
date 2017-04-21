<?php

use DI\ContainerBuilder;
use FeedFaker\Classes\OfficeFaker;


class OfficeFakerTest extends PHPUnit_Framework_TestCase
{
    public function testItReturnsObject()
    {
        $containerBuilder = new ContainerBuilder;
        $containerBuilder->addDefinitions(__DIR__ . '/settings_fixture.php');
        $container = $containerBuilder->build();

        $office = new OfficeFaker($container);
        $office = $office->generate();

        $this->assertInstanceOf(\FeedFaker\Models\Office::class, $office);
        $this->assertSame($container->get('mls_id'), $office->getOfficeMlsId());
    }
}
