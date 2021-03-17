<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\ExtensionSpec;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;
use AmpProject\Validator\Spec\TagWithExtensionSpec;

final class ScriptAmpGoogleAssistantAssistjs extends Tag implements TagWithExtensionSpec
{
    use ExtensionSpec;

    const EXTENSION_SPEC = [
        SpecRule::NAME => 'amp-google-assistant-assistjs',
        SpecRule::VERSION => [
            '0.1',
            'latest',
        ],
    ];

    const SPEC = [
        SpecRule::TAG_NAME => Element::SCRIPT,
        SpecRule::ATTR_LISTS => [
            'common-extension-attrs',
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::EXTENSION_SPEC => self::EXTENSION_SPEC,
    ];
}