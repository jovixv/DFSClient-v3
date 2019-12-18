<?php


namespace DFSClientV3\Services\EntityCreator;


class ClassGenerator
{


    /**
     * Available types for advanced serp
     *
     * @var array
     */
    private $availableTypes = ["top_stories","organic","people_also_ask","video","images","local_pack","people_also_search","twitter","knowledge_graph","related_searches","google_reviews","carousel","paid","shopping","featured_snippet", "jobs", "map"];

    /**
     * ClassGenerator constructor.
     */
    public function __construct()
    {

    }

    /**
     * @param string $classNameWithOutExtension
     * @param string $path
     * @return resource
     */
    public function createClass(string $classNameWithOutExtension, string $path = __DIR__)
    {
       return $file = fopen($path.'/'.$classNameWithOutExtension.'.php', 'w+' );
    }

    /**
     * @param string $path
     */
    public function createFolder(string $path = __DIR__)
    {
        mkdir($path,'777', true);
    }

    /**
     * @param string $json - json schema for transform to Class Entity
     * @param string $path - path where Entity will be wrote.
     * @param string $className - Main prefix for class.
     * @param string $sufix - suffix for class,
     * @param bool $resultCanBeTransformedToArray - this variable only for DFS response, see to 55 row
     * @param bool $fileIsNotRequired
     */
    public function recursiveCreator(string $json, string $path, string $className = 'TestModel', string $sufix = 'Main', ?bool $resultCanBeTransformedToArray = true, bool $fileIsNotRequired = false)
    {
        $decodedJson = json_decode($json);
        $arrayWithClassProperty = [];
        $arrayWithNameSpacesForEntities = [];
        $fileShouldBeCreatedAdvancedKostyl = true;

        dump($sufix);
        if ($sufix)
            $nameForMainFile = $className.'Entity'.$sufix;

        if (is_array($decodedJson) or is_object($decodedJson)){

            if (!$fileIsNotRequired){
                $file = $this->createClass($nameForMainFile, $path); //create file
            }

            $res = null;
            foreach ($decodedJson as $key=>$value) {

                if ($key === 'tasks' or $key === 'result' && $resultCanBeTransformedToArray){
                    $value = (array)$value;
                }

                if (is_object($value) || is_array($value) && $obj = ClassGenerator::arrayContainObject($value)){

                    if ($className === 'GetAdvancedSerpResultsById' && $sufix === 'MainTasksResult' && $key === 'items'){
                        $arrayWithNameSpacesForEntities = ClassGenerator::generateNameSpaceForAdvancedResult($this->availableTypes, $className);
                    }else{

                        if ($className !== 'GetAdvancedSerpResultsById' && $key !== 'items')
                         $arrayWithNameSpacesForEntities[] = 'use DFSClientV3\Entity\Custom\\'.$className.'Entity'.$sufix.ucfirst($key).';';

                        if ($className === 'GetAdvancedSerpResultsById' && $key !== 'items')
                            $arrayWithNameSpacesForEntities[] = 'use DFSClientV3\Entity\Custom\\'.$className.'Entity'.$sufix.ucfirst($key).';';
                    }


                    if (is_object($value))
                        $res = $value;

                    // if array contain object, we must write generic type
                    if (is_array($value) && $obj = ClassGenerator::arrayContainObject($value)){

                        if ($className === 'GetAdvancedSerpResultsById' && $sufix === 'MainTasksResult' && $key === 'items')
                        {
                            $arrayWithClassProperty[$key] = ClassGenerator::generateTypesForAdvanced($this->availableTypes, $className);

                        }else if ($className === 'GetAdvancedSerpResultsById' && $sufix !== 'MainTasksResultItems' && $key === 'items') {

                            $arrayWithClassProperty[$key] = $className.'Entity'.$sufix.'Items'.ucfirst($value[0]->type).'[]';
                            $arrayWithNameSpacesForEntities[] = 'use DFSClientV3\Entity\Custom\\'.$className.'Entity'.$sufix.'Items'.ucfirst($value[0]->type).';';
                        }
                        else{
                            $arrayWithClassProperty[$key] = $className.'Entity'.$sufix.ucfirst($key).'[]';
                        }

                        ##########################################
                        if ($className === 'GetAdvancedSerpResultsById' && $key === 'items') {
                            $res = $value;
                            $fileShouldBeCreatedAdvancedKostyl = false;

                        }else{
                            $res = $obj;
                        }

                    }else{
                            $arrayWithClassProperty[$key] = $className.'Entity'.$sufix.ucfirst($key);
                    }

                    // first items in json.
//
//
//                    if ($className === 'GetAdvancedSerpResultsById' && $sufix === 'MainTasksResult') {
//                        $this->recursiveCreator(json_encode($res), $path, $className, "MainTasksResultItems",$resultCanBeTransformedToArray, true);
//                    }
                    if ($className == 'GetAdvancedSerpResultsById' && (is_object($value) && property_exists($value, 'type'))) {
                        $this->recursiveCreator(json_encode($res), $path, $className, $sufix.ucfirst($value->type),$resultCanBeTransformedToArray);
                    }else{
                        $this->recursiveCreator(json_encode($res), $path, $className, $sufix.ucfirst($key),$resultCanBeTransformedToArray, ($fileShouldBeCreatedAdvancedKostyl === false) ? true : $fileIsNotRequired);
                    }


                }else{
                    if ($key === 'version'){
                        $arrayWithClassProperty[$key] = $value;
                    }else{
                        $arrayWithClassProperty[$key] = gettype($value);
                    }
                }
            }

            if (!$fileIsNotRequired)
                $this->createClassContent($file, json_encode($res), $sufix, $nameForMainFile, $arrayWithNameSpacesForEntities, $arrayWithClassProperty, $resultCanBeTransformedToArray);

        }
    }

    /**
     * @param $file resource
     * @param string $json
     * @param string $fileName
     * @param bool $isRecursion
     */
    public function createClassContent($file, string $json, string $suffix, string $fileName, array $arrayWithNameSpace, array $arrayWithProporties, ?bool $resultIsArray = true,  bool $isRecursion = false)
    {

        $array = json_decode($json);
        $string = '';
        $stringNameSpaces = '';

        $templateOfProperty = file_get_contents(realpath(__DIR__.'../../../Stubs/templateOfProperty.stub'));

        foreach ($arrayWithProporties as $key => $res)
        {

            if ($key === 'version'){
                $string .= str_replace(['$type','$varName', '$definedValue'], [gettype($res), $key, "'$res'"], $templateOfProperty);
            }else{

                if (strpos($res, '[]') === false){ // check if type is not collection
                    $string .= str_replace(['$type','$varName', '$definedValue'], [$res, $key, 'null'], $templateOfProperty);
                }else{
                    $string .= str_replace(['@var null', '$type','$varName', '$definedValue'], ['array', $res, $key, '[]'], $templateOfProperty);
                }
            }

        }

        foreach ($arrayWithNameSpace as $key => $res)
        {
            $stringNameSpaces .= $res.PHP_EOL;
        }

        // if main model we do extends
        if ($suffix === 'Main')
        {
            $functionString = $this->generateMainFunctionsString($fileName.'Tasks', $resultIsArray);

            $resultForInsert = sprintf("<?php".
                PHP_EOL.
                PHP_EOL."namespace DFSClientV3\Entity\Custom;".
                PHP_EOL.
                PHP_EOL.'%s'.
                PHP_EOL."class %s extends \DFSClientV3\Models\ResponseModel ".
                PHP_EOL."{"."    %s ".
                PHP_EOL."%s".
                PHP_EOL."}", $stringNameSpaces, $fileName, $string, $functionString);
        }else{
            $resultForInsert = sprintf("<?php".
                PHP_EOL.
                PHP_EOL."namespace DFSClientV3\Entity\Custom;".
                PHP_EOL.
                PHP_EOL.'%s'.
                PHP_EOL."class %s ".
                PHP_EOL."{"."    %s ".
                PHP_EOL."}", $stringNameSpaces, $fileName, $string);
        }

        $write = fwrite($file, $resultForInsert);
    }

    /**
     *
     */
    public function generatePropertyString()
    {

    }

    public static function arrayContainObject(array $array): ?object
    {
        if (!empty($array))
        {
            $arrayFirst = current($array);

            if (is_object($arrayFirst)){
                return $arrayFirst;
            }
        }

        return null;
    }

    /**
     * @param array $array
     * @param string $className
     * @return string
     */
    public static function generateTypesForAdvanced(array $types, string $className): string
    {
        $resultString = '';
        $types = ClassGenerator::validateClassField($types);

        foreach ($types as $type)
        {
            $resultString .= $className.'EntityMainTasksResultItems'.ucfirst($type).'[]|';
        }


        return substr($resultString, 0, -1);
    }

    /**
     * @param array $types
     * @param string $className
     * @return array
     */
    public static function generateNameSpaceForAdvancedResult(array $types, string $className): array
    {
        $tempArray = [];
        $types = ClassGenerator::validateClassField($types);
        foreach ($types as $type){
            $tempArray[]= 'use DFSClientV3\Entity\Custom\\'.$className.'EntityMainTasksResultItems'.ucfirst($type).';';
        }

        return $tempArray;
    }

    /**
     * @param array $filePrefix
     * @return string
     */
    private function generateMainFunctionsString(string $filePrefix, ?bool $resultIsArray): string
    {

        $functionString = '';

        if ($resultIsArray !== null){
            $functionString = PHP_EOL."\t/**
\t* @return ".($resultIsArray ? '\DFSClientV3\Entity\Custom\\'.$filePrefix.'Result[]|null' : '\DFSClientV3\Entity\Custom\\'.$filePrefix.'Result|null')."
\t*/
\tpublic function getResultsByPostID(\$postID): ".($resultIsArray ? '?array' : '?\DFSClientV3\Entity\Custom\\'.$filePrefix.'Result')." {
\t\treturn parent::getResultsByPostID(\$postID);
\t}";
        }
        return $functionString;
    }

    private function generateResultFunctionString(string $filePrefix, bool $resultIsArray): string
    {
        $functionString = PHP_EOL."\tpublic function getResultByIndex(\$postID): \DFSClientV3\Entity\Custom\\".$filePrefix."Result".($resultIsArray ? '[]' : '') ." {
\t\treturn parent::getResultsByPostID(\$postID);
\t}";
        return $functionString;
    }

    /**
     * @param array|string $fields
     *
     * @return array|string|null
     */
    public static function validateClassField($fields)
    {
        $forbiddenSymbols = ['/', '-'];
        $replaceOnSymbols = ['_', '_'];

        if (is_array($fields)){
            $replacedArray = [];

            foreach ($fields as $field){
                $replacedArray[] = str_replace($forbiddenSymbols, $replaceOnSymbols, $field);
            }
            return $replacedArray;
        }

        if (is_string($fields))
            return str_replace($forbiddenSymbols, $replaceOnSymbols, $fields);


        return null;
    }

}
