<?php


namespace DFSClient\Services\EntityCreator;


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
     * @param bool $isRecursion
     */
    public function recursiveCreator(string $json, string $path, string $className = 'TestModel', string $sufix = 'Main', ?bool $resultCanBeTransformedToArray = true, bool $fileIsNotRequired = false)
    {
        $decodedJson = json_decode($json);
        $arrayWithClassProperty = [];
        $arrayWithNameSpacesForEntities = [];

        if ($sufix)
            $nameForMainFile = $className.'Entity'.$sufix;

        if (is_array($decodedJson) or is_object($decodedJson)){

            if (!$fileIsNotRequired)
                $file = $this->createClass($nameForMainFile, $path); //create file

            foreach ($decodedJson as $key=>$value) {

                if ($key === 'tasks' or $key === 'result' && $resultCanBeTransformedToArray){
                    $value = (array)$value;
                }

                if (is_object($value) || is_array($value) && $obj = ClassGenerator::arrayContainObject($value)){


                    if ($className === 'GetAdvancedSerpResultsById' && $sufix === 'Result'){
                        $arrayWithNameSpacesForEntities = ClassGenerator::generateNameSpaceForAdvancedResult($this->availableTypes, $className);
                    }else{

                        if ($className !== 'GetAdvancedSerpResultsById' && $key !== 'items')
                         $arrayWithNameSpacesForEntities[] = 'use DFSClient\Entity\Custom\\'.$className.'Entity'.ucfirst($key).';';
                    }


                    if (is_object($value))
                        $res = $value;

                    // if array contain object, we must write generic type
                    if (is_array($value) && $obj = ClassGenerator::arrayContainObject($value)){

                        if ($className === 'GetAdvancedSerpResultsById' && $sufix === 'Result')
                        {
                            $arrayWithClassProperty[$key] = ClassGenerator::generateTypesForAdvanced($this->availableTypes, $className);

                        }else if ($className === 'GetAdvancedSerpResultsById' && $sufix !== 'Items' && $key === 'items') {

                            $arrayWithClassProperty[$key] = $className.'EntityItems'.ucfirst($value[0]->type).'[]';
                            $arrayWithNameSpacesForEntities[] = 'use DFSClient\Entity\Custom\\'.$className.'EntityItems'.ucfirst($value[0]->type).';';
                        }
                        else{
                            $arrayWithClassProperty[$key] = $className.'Entity'.ucfirst($key).'[]';
                        }

                        ##########################################
                        if ($className === 'GetAdvancedSerpResultsById' && $key === 'items') {
                            $res = $value;
                        }else{
                            $res = $obj;
                        }

                    }else{
                            $arrayWithClassProperty[$key] = $className.'Entity'.ucfirst($key);
                    }

                    // first items in json.
                    if ($className == 'GetAdvancedSerpResultsById' && $sufix !== 'Items' && $key === 'items') {
                       // dump($res);
                        $this->recursiveCreator(json_encode($res), $path, $className, "Items",$resultCanBeTransformedToArray, true);
                    }

                    elseif ($className === 'GetAdvancedSerpResultsById' && $sufix === 'Result') {
                        $this->recursiveCreator(json_encode($res), $path, $className, "Items",$resultCanBeTransformedToArray, true);
                    }

                    elseif ($className == 'GetAdvancedSerpResultsById' && $sufix === 'Items') {
                        $this->recursiveCreator(json_encode($res), $path, $className, "Items".ucfirst($value->type),$resultCanBeTransformedToArray);
                    }else{
                        $this->recursiveCreator(json_encode($res), $path, $className, ucfirst($key),$resultCanBeTransformedToArray);
                    }


                }else{

                    $arrayWithClassProperty[$key] = gettype($value);
                }
            }

            if (!$fileIsNotRequired)
            $this->createClassContent($file, json_encode($res), $nameForMainFile, $arrayWithNameSpacesForEntities, $arrayWithClassProperty, $resultCanBeTransformedToArray);
          //  dump($arrayWithClassProperty);
        }
    }

    /**
     * @param $file resource
     * @param string $json
     * @param string $fileName
     * @param bool $isRecursion
     */
    public function createClassContent($file, string $json, string $fileName, array $arrayWithNameSpace, array $arrayWithProporties, ?bool $resultIsArray = true,  bool $isRecursion = false)
    {

        $array = json_decode($json);
        $string = '';
        $stringNameSpaces = '';

        foreach ($arrayWithProporties as $key => $res)
        {

            $string .= '
    /**
    * @var null|'.$res.' '.$key.';
    */
    public $'.$key.' = null;        
    ';
        }

        foreach ($arrayWithNameSpace as $key => $res)
        {
            $stringNameSpaces .= $res.PHP_EOL;
        }

        // if main model we do extends
        if (strpos($fileName, 'EntityMain') !== false)
        {
            $functionString = $this->generateMainFunctionsString(str_replace('EntityMain', '', $fileName), $resultIsArray);

            $resultForInsert = sprintf("<?php".
                PHP_EOL.
                PHP_EOL."namespace DFSClient\Entity\Custom;".
                PHP_EOL.
                PHP_EOL.'%s'.
                PHP_EOL."class %s extends \DFSClient\Models\ResponseModel ".
                PHP_EOL."{"."    %s ".
                PHP_EOL."%s".
                PHP_EOL."}", $stringNameSpaces, $fileName, $string, $functionString);
        }else{
            $resultForInsert = sprintf("<?php".
                PHP_EOL.
                PHP_EOL."namespace DFSClient\Entity\Custom;".
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

        foreach ($types as $type)
        {
            $resultString .= $className.'EntityItems'.ucfirst($type).'[]|';
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

        foreach ($types as $type){
            $tempArray[]= 'use DFSClient\Entity\Custom\\'.$className.'EntityItems'.ucfirst($type).';';
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
\t* @return ".($resultIsArray ? '\DFSClient\Entity\Custom\\'.$filePrefix.'EntityResult[]|null' : '\DFSClient\Entity\Custom\\'.$filePrefix.'EntityResult|null')."
\t*/
\tpublic function getResultsByPostID(\$postID): ".($resultIsArray ? '?array' : '?\DFSClient\Entity\Custom\\'.$filePrefix.'EntityResult')." {
\t\treturn parent::getResultsByPostID(\$postID);
\t}";
        }
        return $functionString;
    }

    private function generateResultFunctionString(string $filePrefix, bool $resultIsArray): string
    {
        $functionString = PHP_EOL."\tpublic function getResultByIndex(\$postID): \DFSClient\Entity\Custom\\".$filePrefix."EntityResult".($resultIsArray ? '[]' : '') ." {
\t\treturn parent::getResultsByPostID(\$postID);
\t}";
        return $functionString;
    }
}
