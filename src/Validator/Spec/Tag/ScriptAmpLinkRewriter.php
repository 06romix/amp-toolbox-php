<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class ScriptAmpLinkRewriter
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::SCRIPT,\nSpecRule::ATTR_LISTS => [\n                'common-extension-attrs',\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::SATISFIES => [\n                'amp-link-rewriter',\n            ],\nSpecRule::EXTENSION_SPEC => [\n                'name' => 'amp-link-rewriter',\n                'version' => [\n                    '0.1',\n                    'latest',\n                ],\n            ],\nSpecRule::EXCLUDES => [\n                'amp-skimlinks',\n                'amp-smartlinks',\n            ],\n];";
}
