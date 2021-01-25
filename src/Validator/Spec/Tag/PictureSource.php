<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class PictureSource extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::SOURCE,
        SpecRule::SPEC_NAME => 'picture > source',
        SpecRule::MANDATORY_PARENT => Element::PICTURE,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'media',
            ],
            [
                SpecRule::NAME => 'sizes',
            ],
            [
                SpecRule::NAME => 'srcset',
                SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        'data',
                        'http',
                        'https',
                    ],
                    SpecRule::ALLOW_RELATIVE => true,
                ],
            ],
            [
                SpecRule::NAME => 'type',
            ],
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-img/',
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
    ];
}