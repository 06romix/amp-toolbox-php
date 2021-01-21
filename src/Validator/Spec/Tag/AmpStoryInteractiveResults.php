<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpStoryInteractiveResults
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::STORY_INTERACTIVE_RESULTS,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::OPTION_1_RESULTS_CATEGORY,\n        SpecRule::MANDATORY => true,\n    ],\n    [\n        SpecRule::NAME => Attribute::OPTION_2_RESULTS_CATEGORY,\n        SpecRule::MANDATORY => true,\n    ],\n    [\n        SpecRule::NAME => Attribute::OPTION_3_RESULTS_CATEGORY,\n    ],\n    [\n        SpecRule::NAME => Attribute::OPTION_4_RESULTS_CATEGORY,\n        SpecRule::TRIGGER => [\n                        'alsoRequiresAttr' => [\n                            'option-3-results-category',\n                        ],\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::OPTION_1_IMAGE,\n    ],\n    [\n        SpecRule::NAME => Attribute::OPTION_2_IMAGE,\n    ],\n    [\n        SpecRule::NAME => Attribute::OPTION_3_IMAGE,\n        SpecRule::TRIGGER => [\n                        'alsoRequiresAttr' => [\n                            'option-3-results-category',\n                        ],\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::OPTION_4_IMAGE,\n        SpecRule::TRIGGER => [\n                        'alsoRequiresAttr' => [\n                            'option-4-results-category',\n                        ],\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::OPTION_1_TEXT,\n    ],\n    [\n        SpecRule::NAME => Attribute::OPTION_2_TEXT,\n    ],\n    [\n        SpecRule::NAME => Attribute::OPTION_3_TEXT,\n        SpecRule::TRIGGER => [\n                        'alsoRequiresAttr' => [\n                            'option-3-results-category',\n                        ],\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::OPTION_4_TEXT,\n        SpecRule::TRIGGER => [\n                        'alsoRequiresAttr' => [\n                            'option-4-results-category',\n                        ],\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::OPTION_1_RESULTS_THRESHOLD,\n        SpecRule::VALUE_REGEX => '\\d+(\\.\\d+)?',\n    ],\n    [\n        SpecRule::NAME => Attribute::OPTION_2_RESULTS_THRESHOLD,\n        SpecRule::VALUE_REGEX => '\\d+(\\.\\d+)?',\n    ],\n    [\n        SpecRule::NAME => Attribute::OPTION_3_RESULTS_THRESHOLD,\n        SpecRule::VALUE_REGEX => '\\d+(\\.\\d+)?',\n        SpecRule::TRIGGER => [\n                        'alsoRequiresAttr' => [\n                            'option-3-results-category',\n                        ],\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::OPTION_4_RESULTS_THRESHOLD,\n        SpecRule::VALUE_REGEX => '\\d+(\\.\\d+)?',\n        SpecRule::TRIGGER => [\n                        'alsoRequiresAttr' => [\n                            'option-4-results-category',\n                        ],\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::PROMPT_TEXT,\n    ],\n    [\n        SpecRule::NAME => Attribute::THEME,\n        SpecRule::VALUE => [\n                        'light',\n                        'dark',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::CHIP_STYLE,\n        SpecRule::VALUE => [\n                        'flat',\n                        'transparent',\n                    ],\n    ],\n],\nSpecRule::MANDATORY_ANCESTOR => Extension::STORY_GRID_LAYER,\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-story-interactive',\n            ],\n];";
}
