<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class ScriptAmpSubscriptionsGoogle extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::SCRIPT,
        SpecRule::ATTR_LISTS => [
            'common-extension-attrs',
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::EXTENSION_SPEC => [
            SpecRule::NAME => 'amp-subscriptions-google',
            SpecRule::VERSION => [
                '0.1',
                'latest',
            ],
            SpecRule::REQUIRES_USAGE => 'NONE',
        ],
        SpecRule::REQUIRES_EXTENSION => [
            'amp-subscriptions',
        ],
    ];
}