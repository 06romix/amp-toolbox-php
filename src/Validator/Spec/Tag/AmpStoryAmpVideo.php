<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Layout;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpStoryAmpVideo extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::VIDEO,
        SpecRule::SPEC_NAME => 'amp-story >> amp-video',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::AUTOPLAY,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => Attribute::CONTROLS,
                SpecRule::VALUE => [
                    '',
                ],
                SpecRule::DEPRECATION => '- no replacement',
                SpecRule::DEPRECATION_URL => 'https://github.com/ampproject/amphtml/issues/23798',
            ],
            [
                SpecRule::NAME => '[controls]',
                SpecRule::DEPRECATION => '- no replacement',
                SpecRule::DEPRECATION_URL => 'https://github.com/ampproject/amphtml/issues/23798',
            ],
            [
                SpecRule::NAME => Attribute::POSTER,
                SpecRule::MANDATORY => true,
            ],
            [
                SpecRule::NAME => Attribute::CACHE,
                SpecRule::VALUE => [
                    'google',
                ],
                SpecRule::REQUIRES_EXTENSION => [
                    Extension::CACHE_URL,
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            AttributeList\ExtendedAmpGlobal::ID,
            AttributeList\AmpVideoCommon::ID,
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-video/',
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::FILL,
                Layout::FIXED,
                Layout::FIXED_HEIGHT,
                Layout::FLEX_ITEM,
                Layout::NODISPLAY,
                Layout::RESPONSIVE,
            ],
        ],
        SpecRule::MANDATORY_ANCESTOR => Extension::STORY,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::VIDEO,
        ],
    ];
}
