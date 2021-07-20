<?php

namespace DFSClientV3\Entity\Custom;

 class DictionaryEntity implements \JsonSerializable
{
    /**
     * @var array $contents
     */
    private $contents = [];

    /**
     * $contents must be associative array
     * DictionaryEntity constructor.
     * @param array $contents
     */
    public function __construct(array $contents)
    {
        $this->contents = $contents;
    }

     /**
      * @param string $key
      * @return array|null
      */
    public function getByKey(string $key)
    {
        return $this->get($key);
    }

     /**
      * @return mixed|null
      */
    public function getAny()
    {
        $keys = array_keys($this->contents);
        $keyFirst = null;

        if (count($keys) > 0){
            $keyFirst = $keys[0];
            return $this->contents[$keyFirst];
        }

        return null;
    }

     /**
      * @param string $key
      * @return array|null
      */
    public function get(string $key): ?array
    {
        return $this->contents[$key];
    }

     /**
      * @param string $key
      * @param $value
      */
    public function setByKey(string $key, $value)
    {
        $this->contents[$key] = $value;
    }

     /**
      * @return array
      */
    public function getAll(): array
    {
        return $this->contents;
    }

     /**
      * @return array|mixed
      */
    public function jsonSerialize()
    {
        return $this->contents;
    }
 }
