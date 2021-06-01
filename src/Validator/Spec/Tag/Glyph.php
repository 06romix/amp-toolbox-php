<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\AttributeList;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class Glyph extends Tag
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'GLYPH';

    /**
     * Array of spec rules.
     *
     * @var array
     */
    const SPEC = [
        SpecRule::TAG_NAME => Element::GLYPH,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::ARABIC_FORM,
            ],
            [
                SpecRule::NAME => Attribute::D,
            ],
            [
                SpecRule::NAME => Attribute::GLYPH_NAME,
            ],
            [
                SpecRule::NAME => Attribute::HORIZ_ADV_X,
            ],
            [
                SpecRule::NAME => Attribute::ORIENTATION,
            ],
            [
                SpecRule::NAME => Attribute::UNICODE,
            ],
            [
                SpecRule::NAME => Attribute::VERT_ADV_Y,
            ],
            [
                SpecRule::NAME => Attribute::VERT_ORIGIN_X,
            ],
            [
                SpecRule::NAME => Attribute::VERT_ORIGIN_Y,
            ],
        ],
        SpecRule::ATTR_LISTS => [
            AttributeList\SvgCoreAttributes::ID,
            AttributeList\SvgPresentationAttributes::ID,
            AttributeList\SvgStyleAttr::ID,
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
        SpecRule::MANDATORY_ANCESTOR => Element::SVG,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
    ];
}