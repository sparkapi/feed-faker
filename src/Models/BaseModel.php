<?php

namespace FeedFaker\Models;


/**
 * Class BaseModel
 * @package FeedFaker\Models
 */
class BaseModel
{
    /**
     * @var
     */
    public $id_key;

    /**
     * @return string
     */
    public function getModelType()
    {
        return get_class($this);
    }

    /**
     * @return string
     */
    public function getIdKey()
    {
        return $this->id_key;
    }

    /**
     * @param string $id_key
     */
    public function setIdKey($id_key)
    {
        $this->id_key = $id_key;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $return = (array) $this;

        foreach ($return as $key => $value) {
            if (is_array($value)) {
                $return[$key] = implode(',', $value);
            }
        }

        return $return;
    }

    public function fromArray(array $input)
    {
        foreach ($input as $key => $value) {
            $method = "set{$key}";
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
}