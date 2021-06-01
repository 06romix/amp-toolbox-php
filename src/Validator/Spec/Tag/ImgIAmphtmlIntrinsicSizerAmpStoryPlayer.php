<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Internal;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class ImgIAmphtmlIntrinsicSizerAmpStoryPlayer extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'img-i-amphtml-intrinsic-sizer-amp-story-player';

    /**
     * Array of spec rules.
     *
     * @var array
     */
    const SPEC = [
        SpecRule::TAG_NAME => Element::IMG,
        SpecRule::SPEC_NAME => 'img-i-amphtml-intrinsic-sizer-amp-story-player',
        SpecRule::MANDATORY_PARENT => Internal::SIZER_INTRINSIC,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::ALT,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    '',
                ],
            ],
            [
                SpecRule::NAME => Attribute::ARIA_HIDDEN,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    'true',
                ],
            ],
            [
                SpecRule::NAME => Attribute::CLASS_,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    'i-amphtml-intrinsic-sizer',
                ],
            ],
            [
                SpecRule::NAME => Attribute::ROLE,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE => [
                    'presentation',
                ],
            ],
            [
                SpecRule::NAME => Attribute::SRC,
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_REGEX => 'data:image\/svg\+xml;charset=utf-8,\s*<svg height="\d+(\.\d+)?" width="\d+(\.\d+)?" xmlns="http:\/\/www\.w3\.org\/2000\/svg" version="1\.1"\/>|data:image\/svg\+xml;charset=utf-8,\s*<svg height=\'\d+(\.\d+)?\' width=\'\d+(\.\d+)?\' xmlns=\'http:\/\/www\.w3\.org\/2000\/svg\' version=\'1\.1\'\/>|data:image\/svg\+xml;base64,[a-zA-Z0-9+\/=]+',
            ],
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-story-player/',
        SpecRule::MANDATORY_ANCESTOR => Extension::STORY_PLAYER,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::ENABLED_BY => [
            Attribute::TRANSFORMED,
        ],
    ];
}