<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class VideoTrack extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::TRACK,
        SpecRule::SPEC_NAME => 'video > track',
        SpecRule::MANDATORY_PARENT => Element::VIDEO,
        SpecRule::ATTR_LISTS => [
            'track-attrs-no-subtitles',
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
    ];
}