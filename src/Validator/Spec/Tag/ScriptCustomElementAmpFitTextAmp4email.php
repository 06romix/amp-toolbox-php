<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class ScriptCustomElementAmpFitTextAmp4email extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::SCRIPT,
        SpecRule::SPEC_NAME => 'SCRIPT[custom-element=amp-fit-text] (AMP4EMAIL)',
        SpecRule::ATTR_LISTS => [
            'common-extension-attrs',
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP4EMAIL,
        ],
        SpecRule::EXTENSION_SPEC => [
            SpecRule::NAME => 'amp-fit-text',
            SpecRule::VERSION => [
                '0.1',
            ],
            SpecRule::DEPRECATED_ALLOW_DUPLICATES => true,
            SpecRule::REQUIRES_USAGE => 'EXEMPTED',
        ],
    ];
}