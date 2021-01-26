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
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpSelector extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::SELECTOR,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::DISABLED,
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => Attribute::FORM,
            ],
            [
                SpecRule::NAME => Attribute::KEYBOARD_SELECT_MODE,
                SpecRule::VALUE_CASEI => [
                    'focus',
                    'none',
                    'select',
                ],
            ],
            [
                SpecRule::NAME => Attribute::MULTIPLE,
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => '[disabled]',
            ],
            [
                SpecRule::NAME => '[selected]',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
            'name-attr',
        ],
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
                Layout::FILL,
                Layout::FIXED,
                Layout::FIXED_HEIGHT,
                Layout::NODISPLAY,
                Layout::RESPONSIVE,
                Layout::CONTAINER,
            ],
        ],
        SpecRule::DISALLOWED_ANCESTOR => [
            'AMP-SELECTOR',
        ],
        SpecRule::REFERENCE_POINTS => [
            [
                SpecRule::TAG_SPEC_NAME => 'AMP-SELECTOR option',
            ],
            [
                SpecRule::TAG_SPEC_NAME => 'AMP-SELECTOR child',
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
            Format::AMP4EMAIL,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::SELECTOR,
        ],
    ];
}
