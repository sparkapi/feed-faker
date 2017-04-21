<?php


use FeedFaker\Helper\LotSize;


class LotSizeTest extends PHPUnit_Framework_TestCase
{
    public $sources = [
        'Appraisal',
        'Assessor',
        'Owner',
        'Agent',
        'Title Company',
    ];

    public function testInFeet()
    {
        $lotsize = new LotSize();

        $width = $lotsize->getWidth();
        $length = $lotsize->getLength();
        $acres = $lotsize->getAcres();
        $units = $lotsize->getUnits();
        $area = $lotsize->getArea();
        $dimensions = $lotsize->getDimensions();
        $source = $lotsize->getSource();

        $this->assertSame($width.'x'.$length, $dimensions);
        $this->assertSame('feet', $units);
        $this->assertSame(($width * $length), $area);
        $this->assertSame($area / 43560, $acres);
        $this->assertTrue(in_array($source, $this->sources));
    }

    public function testInMeters()
    {
        $lotsize = new LotSize('meters');

        $width = $lotsize->getWidth();
        $length = $lotsize->getLength();
        $acres = $lotsize->getAcres();
        $units = $lotsize->getUnits();
        $area = $lotsize->getArea();
        $dimensions = $lotsize->getDimensions();
        $source = $lotsize->getSource();

        $this->assertSame($width.'x'.$length, $dimensions);
        $this->assertSame('meters', $units);
        $this->assertSame(($width * $length), $area);
        $this->assertSame($area / 4046.86, $acres);
        $this->assertTrue(in_array($source, $this->sources));
    }
}
