<?php

use DI\ContainerBuilder;
use FeedFaker\Classes\MemberFaker;
use FeedFaker\Classes\OfficeFaker;


class MemberFakerTest extends PHPUnit_Framework_TestCase
{
    public function testItReturnsObject()
    {
        $containerBuilder = new ContainerBuilder;
        $containerBuilder->addDefinitions(__DIR__ . '/settings_fixture.php');
        $container = $containerBuilder->build();

        $office = new OfficeFaker($container);
        $office = $office->generate();

        $member = new MemberFaker($container);
        $member = $member->generate($office);

        /** @var \FeedFaker\Models\Member $member */
        $this->assertInstanceOf(\FeedFaker\Models\Member::class, $member);
        $this->assertSame($container->get('mls_id'), $member->getMemberMlsId());
        $this->assertSame($member->getMemberStateLicenseState(), $member->getMemberStateOrProvince());
        $this->assertSame($member->getMemberFirstName() . ' ' . $member->getMemberMiddleName() . ' ' . $member->getMemberLastName(), $member->getMemberFullName());
    }

    public function testGetObjects()
    {
        $containerBuilder = new ContainerBuilder;
        $containerBuilder->addDefinitions(__DIR__ . '/settings_fixture.php');
        $container = $containerBuilder->build();

        $office = new OfficeFaker($container);
        $office = $office->generate();

        $member = new MemberFaker($container);
        $member = $member->generate($office);

        $this->assertFalse($office->getObjects()); // these may be implemented later
        $this->assertFalse($member->getObjects()); // these may be implemented later
    }
}
