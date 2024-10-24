<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\ContentGenerationTextSummaryLiveEntityMainTasksResultKeyword_density;

class ContentGenerationTextSummaryLiveEntityMainTasksResult
{
    /**
     * @var null|integer;
     */
    public $sentences = null;

    /**
     * @var null|integer;
     */
    public $paragraphs = null;

    /**
     * @var null|integer;
     */
    public $words = null;

    /**
     * @var null|integer;
     */
    public $characters_without_spaces = null;

    /**
     * @var null|integer;
     */
    public $characters_with_spaces = null;

    /**
     * @var null|double;
     */
    public $words_per_sentence = null;

    /**
     * @var null|double;
     */
    public $characters_per_word = null;

    /**
     * @var null|double;
     */
    public $vocabulary_density = null;

    /**
     * @var null|ContentGenerationTextSummaryLiveEntityMainTasksResultKeyword_density;
     */
    public $keyword_density = null;

    /**
     * @var null|double;
     */
    public $automated_readability_index = null;

    /**
     * @var null|double;
     */
    public $coleman_liau_index = null;

    /**
     * @var null|double;
     */
    public $flesch_kincaid_grade_level = null;

    /**
     * @var null|double;
     */
    public $smog_readability_index = null;

    /**
     * @var null|integer;
     */
    public $spelling_errors = null;

    /**
     * @var null|integer;
     */
    public $grammar_errors = null;

    /**
     * @var null|integer;
     */
    public $score = null;
}
