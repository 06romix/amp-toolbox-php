<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class G extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::G,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'externalresourcesrequired',
            ],
            [
                SpecRule::NAME => 'transform',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'svg-conditional-processing-attributes',
            'svg-core-attributes',
            'svg-presentation-attributes',
            'svg-style-attr',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
        SpecRule::MANDATORY_ANCESTOR => Element::SVG,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
    ];
}