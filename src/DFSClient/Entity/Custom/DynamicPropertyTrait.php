<?php

namespace DFSClientV3\Entity\Custom;

trait DynamicPropertyTrait
{
    private array $dynamicProperties = [];

    public function __set($name, $value)
    {
        $this->dynamicProperties[$name] = $value;
    }

    public function __get($name)
    {
        return $this->dynamicProperties[$name] ?? null;
    }

    public function __isset($name)
    {
        return isset($this->dynamicProperties[$name]);
    }
}

