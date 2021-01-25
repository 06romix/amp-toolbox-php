<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class InputTypeFile extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::INPUT,
        SpecRule::SPEC_NAME => 'INPUT [type=file]',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'no-verify',
                SpecRule::VALUE => [
                    '',
                ],
                SpecRule::DISABLED_BY => [
                    'amp4email',
                ],
            ],
            [
                SpecRule::NAME => 'type',
                SpecRule::MANDATORY => true,
                SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                SpecRule::VALUE_CASEI => [
                    'file',
                ],
            ],
            [
                SpecRule::NAME => '[type]',
                SpecRule::DISABLED_BY => [
                    'amp4email',
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'input-common-attr',
            'name-attr',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-form/',
        SpecRule::MANDATORY_ANCESTOR => 'FORM [method=POST]',
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
    ];
}