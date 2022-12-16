<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\ContentGenerationTextSummaryLiveEntityMainTasksResultKeyword_density;

class ContentGenerationTextSummaryLiveEntityMainTasksResult 
{    
    /**
    * @var null|integer $sentences;
    */
    public $sentences = null;

    /**
    * @var null|integer $paragraphs;
    */
    public $paragraphs = null;

    /**
    * @var null|integer $words;
    */
    public $words = null;

    /**
    * @var null|integer $characters_without_spaces;
    */
    public $characters_without_spaces = null;

    /**
    * @var null|integer $characters_with_spaces;
    */
    public $characters_with_spaces = null;

    /**
    * @var null|double $words_per_sentence;
    */
    public $words_per_sentence = null;

    /**
    * @var null|double $characters_per_word;
    */
    public $characters_per_word = null;

    /**
    * @var null|double $vocabulary_density;
    */
    public $vocabulary_density = null;

    /**
    * @var null|ContentGenerationTextSummaryLiveEntityMainTasksResultKeyword_density $keyword_density;
    */
    public $keyword_density = null;

    /**
    * @var null|double $automated_readability_index;
    */
    public $automated_readability_index = null;

    /**
    * @var null|double $coleman_liau_index;
    */
    public $coleman_liau_index = null;

    /**
    * @var null|double $flesch_kincaid_grade_level;
    */
    public $flesch_kincaid_grade_level = null;

    /**
    * @var null|double $smog_readability_index;
    */
    public $smog_readability_index = null;

    /**
    * @var null|integer $spelling_errors;
    */
    public $spelling_errors = null;

    /**
    * @var null|integer $grammar_errors;
    */
    public $grammar_errors = null;

    /**
    * @var null|integer $score;
    */
    public $score = null;
 
}