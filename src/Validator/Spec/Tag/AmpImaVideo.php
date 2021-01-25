<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpImaVideo extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::IMA_VIDEO,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'autoplay',
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => 'data-src',
                SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        'https',
                    ],
                    SpecRule::ALLOW_RELATIVE => true,
                ],
            ],
            [
                SpecRule::NAME => 'data-tag',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        'https',
                    ],
                    SpecRule::ALLOW_RELATIVE => true,
                ],
            ],
            [
                SpecRule::NAME => 'dock',
                SpecRule::REQUIRES_EXTENSION => [
                    'amp-video-docking',
                ],
            ],
            [
                SpecRule::NAME => 'rotate-to-fullscreen',
                SpecRule::VALUE => [
                    '',
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-ima-video/',
        SpecRule::AMP_LAYOUT => [
            'supportedLayouts' => [
                Layout::FILL,
                Layout::FIXED,
                Layout::FIXED_HEIGHT,
                Layout::NODISPLAY,
                Layout::RESPONSIVE,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            'amp-ima-video',
        ],
    ];
}