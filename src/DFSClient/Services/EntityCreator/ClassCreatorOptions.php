<?php


namespace DFSClientV3\Services\EntityCreator;


use DFSClientV3\Entity\Custom\DictionaryEntity;

class ClassCreatorOptions
{
    /**
     * @var string|null $json
     */
    protected $json = null;

    /**
     * @var string|null $filePath
     */
    protected $filePath = null;

    /**
     * @var string|null $className;
     */
    protected $className = null;

    /**
     * @var string $suffix
     */
    protected $suffix = 'Main';

    /**
     * @var boolean $resultCanBeTransformedToArray
     */
    protected $resultCanBeTransformedToArray = false;

    /**
     * @var boolean $isFileRequired
     */
    protected $isFileRequired = true;

    /**
     * Json contain variable types in structure.
     * Example: items: [{type: 'firstType'}, {type: 'secondType'}]
     *
     * @var bool $jsonContainVariadicType
     */
    protected $jsonContainVariadicType = false;

    public $prevPath = '';

    /**
     * Full path to variadic structure
     * Example:
     *
     * tasks: 0:[
     *    {
     *      result: [0:{items: [{type: 'firstType'}, {type: 'secondType'}]}]
     *    }
     * [
     *
     * @var array $pathsToVariadicTypesAndValue
     */
    protected $pathsToVariadicTypesAndValue = [
        'tasks->(:number)->result->(:number)->items' => 'fieldName'
    ];

    /**
     * @var array
     */
    protected $customFunctionForPaths = [
//        'tasks->(:number)->result->(:number)->items' => function($key, $value){
//            return $value;
//        }
    ];

    protected $pathsToDictionary = [
        'tasks->(:number)->result->(:number)->items->number' => DictionaryEntity::class
    ];


    /**
     * @param bool $jsonContainVariadicType
     */
    public function setJsonContainVariadicType(bool $jsonContainVariadicType): void
    {
        $this->jsonContainVariadicType = $jsonContainVariadicType;
    }

    /**
     * @return bool
     */
    public function isJsonContainVariadicType(): bool
    {
        return $this->jsonContainVariadicType;
    }

    /**
     * @param array $pathsToVariadicTypesAndValue
     */
    public function setPathsToVariadicTypesAndValue(array $pathsToVariadicTypesAndValue): void
    {
        $this->pathsToVariadicTypesAndValue = $pathsToVariadicTypesAndValue;
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
     * @return string
     */
    public function getPathsToVariadicTypesAndValue(): array
    {
        return $this->pathsToVariadicTypesAndValue;
    }

    /**
     * @return string
     */
    public function getJson(): string
    {
        return $this->json;
    }

    /**
     * @param string $json
     */
    public function setJson(string $json): void
    {
        $this->json = $json;
    }

    /**
     * @return string
     */
    public function getFilePath(): string
    {
        return $this->filePath;
    }

    /**
     * @param string $filePath
     */
    public function setFilePath(string $filePath): void
    {
        $this->filePath = $filePath;
    }

    /**
     * @return string
     */
    public function getClassName(): string
    {
        return $this->className;
    }

    /**
     * @param string $className
     */
    public function setClassName(string $className): void
    {
        $this->className = $className;
    }

    /**
     * @return string
     */
    public function getSuffix(): string
    {
        return $this->suffix;
    }

    /**
     * @param string $suffix
     */
    public function setSuffix(string $suffix): void
    {
        $this->suffix = $suffix;
    }

    /**
     * @param bool $resultCanBeTransformedToArray
     */
    public function setResultCanBeTransformedToArray(bool $resultCanBeTransformedToArray): void
    {
        $this->resultCanBeTransformedToArray = $resultCanBeTransformedToArray;
    }

    /**
     * @return bool
     */
    public function isResultCanBeTransformedToArray(): bool
    {
        return $this->resultCanBeTransformedToArray;
    }

    /**
     * @param bool $isFileRequired
     */
    public function setIsFileRequired(bool $isFileRequired): void
    {
        $this->isFileRequired = $isFileRequired;
    }

    /**
     * @return bool
     */
    public function isFileRequired(): bool
    {
        return $this->isFileRequired;
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

    /**
     * @param array $customFunctionForPaths
     */
    public function setCustomFunctionForPaths(array $customFunctionForPaths): void
    {
        $this->customFunctionForPaths = $customFunctionForPaths;
    }

}
