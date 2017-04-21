<?php


namespace FeedFaker\Helper;


use Faker\Factory;

class LotSize
{
    public $dimensions;
    public $width;
    public $length;
    public $area;
    public $acres;
    public $units;
    public $source;

    public function __construct($units = 'feet')
    {
        $faker = Factory::create();
        $this->units = $units;

        $this->width = $faker->numberBetween(50, 5000);
        $this->length = $faker->numberBetween(50, 5000);
        $this->area = $this->width * $this->length;
        $this->dimensions = $this->width . 'x' . $this->length;

        if ($units == 'feet') {
            $this->acres = $this->area / 43560;
        } else if ($units == 'meters') {
            $this->acres = $this->area / 4046.86;
        }

        $this->source = $this->generateSource();

    }

    /**
     * @return string
     */
    public function getDimensions()
    {
        return $this->width . 'x' . $this->length;
    }

    /**
     * @return int
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @return int
     */
    public function getAcres()
    {
        return $this->acres;
    }

    /**
     * @return string
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    public function getSquareFeet()
    {
        $return = '';
        if ($this->getUnits() == 'meters') {
            $return = $this->getArea() / 10.7639;
        } else if ($this->getUnits() == 'feet') {
            $return = $this->getArea();
        }

        return $return;
    }

    private function generateSource()
    {
        $sources = [
            'Appraisal',
            'Assessor',
            'Owner',
            'Agent',
            'Title Company',
            // TODO: not sure what these might be
        ];

        $rand = array_rand($sources);

        return $sources[$rand];
    }
}