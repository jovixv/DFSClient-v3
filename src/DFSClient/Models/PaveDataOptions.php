<?php


namespace DFSClientV3\Models;


class PaveDataOptions
{
    protected $classSuffix = 'EntityMain';

    protected $prevPath = '';

    protected $json;

    protected $isCollection = false;

    /**
     * Json contain variable types in structure.
     * Example: items: [{type: 'firstType'}, {type: 'secondType'}]
     *
     * @var bool $jsonContainVariadicType
     */
    protected $jsonContainVariadicType = false;

    /**
     * @var array
     */
    protected $pathsToVariadicTypesAndValue = [
        'tasks->(:number)->result->(:number)->items' => 'fieldName'
    ];

    protected $pathsToDictionary = [

    ];

    /**
     * @var array
     */
    protected $customFunctionForPaths = [
//        'tasks->(:number)->result->(:number)->items' => function($key, $value){
//            return $value;
//        }
    ];



    /**
     * @return bool
     */
    public function isCollection(): bool
    {
        return $this->isCollection;
    }

    /**
     * @param bool $isCollection
     */
    public function setIsCollection(bool $isCollection): void
    {
        $this->isCollection = $isCollection;
    }

    /**
     * @param mixed $json
     */
    public function setJson(string $json): void
    {
        $this->json = $json;
    }

    /**
     * @return mixed
     */
    public function getJson():string
    {
        return $this->json;
    }

    /**
     * @param string $prevPath
     */
    public function setPrevPath(string $prevPath): void
    {
        $this->prevPath = $prevPath;
    }

    /**
     * @return string
     */
    public function getPrevPath(): string
    {
        return $this->prevPath;
    }

    /**
     * @return string
     */
    public function getClassSuffix(): string
    {
        return $this->classSuffix;
    }

    /**
     * @param string $classSuffix
     */
    public function setClassSuffix(string $classSuffix): void
    {
        $this->classSuffix = $classSuffix;
    }

    /**
     * @param array $pathsToVariadicTypesAndValue
     */
    public function setPathsToVariadicTypesAndValue(array $pathsToVariadicTypesAndValue): void
    {
        $this->pathsToVariadicTypesAndValue = $pathsToVariadicTypesAndValue;
    }

    /**
     * @return array
     */
    public function getPathsToVariadicTypesAndValue(): array
    {
        return $this->pathsToVariadicTypesAndValue;
    }

    /**
     * @param array $pathsToDictionary
     */
    public function setPathsToDictionary(array $pathsToDictionary): void
    {
        $this->pathsToDictionary = $pathsToDictionary;
    }

    /**
     * @return array
     */
    public function getPathsToDictionary():array
    {
        return $this->pathsToDictionary;
    }

    /**
     * @return bool
     */
    public function isJsonContainVariadicType(): bool
    {
        return $this->jsonContainVariadicType;
    }

    /**
     * @param bool $jsonContainVariadicType
     */
    public function setJsonContainVariadicType(bool $jsonContainVariadicType): void
    {
        $this->jsonContainVariadicType = $jsonContainVariadicType;
    }

    /**
     * @param array $customFunctionForPaths
     */
    public function setCustomFunctionForPaths(array $customFunctionForPaths): void
    {
        $this->customFunctionForPaths = $customFunctionForPaths;
    }

    /**
     * @param string $path
     * @return callable|null
     */
    public function getCustomFunctionForPath(string $path): ?callable
    {
        return $this->customFunctionForPaths[$path] ?? null;
    }

    /**
     * @return array
     */
    public function getCustomFunctionsForPaths():array
    {
        return $this->customFunctionForPaths;
    }
}
