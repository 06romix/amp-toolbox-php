<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Section;

use AmpProject\Exception\InvalidSpecName;
use AmpProject\Extension;
use AmpProject\Internal;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\Tag;

final class Tags
{
    /** @var array<string,Tag> */
    private $tags;

    /** @var array<string,array<int,Tag>> */
    private $byTagName;

    /** @var array<string,Tag> */
    private $bySpecName;

    /**
     * Get a collection of tags by tag name.
     *
     * @param string $tagName Tag name to get the collection of tags for.
     * @return array<Tag> Array of tags. Empty array if tag name not found.
     */
    public function byTagName($tagName)
    {
        $tagName = strtolower($tagName);

        if (!array_key_exists($tagName, $this->byTagName)) {
            return [];
        }

        return (array)$this->byTagName[$tagName];
    }

    /**
     * Get the tag for a given spec name.
     *
     * @param string $specName Spec name to get the tag for.
     * @return Tag Tag with the given spec name.
     * @throws InvalidSpecName If an invalid spec name is requested.
     */
    public function bySpecName($specName)
    {
        if (!array_key_exists($specName, $this->bySpecName)) {
            throw \AmpProject\Exception\InvalidSpecName::forSpecName($specName);
        }

        return $this->bySpecName[$specName];
    }

    public function __construct()
    {
        $this->tags = [
            Element::A => new Tag(
                [
                'tagName' => Element::A,
                'attrs' => [
                        ['name' => 'border'],
                        ['name' => 'download'],
                        [
                            'name' => 'href',
                            'disallowedValueRegex' => '__amp_source_origin',
                            'valueUrl' => [
                                'protocol' => [
                                    'ftp',
                                    'geo',
                                    'http',
                                    'https',
                                    'mailto',
                                    'maps',
                                    'bip',
                                    'bbmi',
                                    'chrome',
                                    'itms-services',
                                    'facetime',
                                    'fb-me',
                                    'fb-messenger',
                                    'feed',
                                    'intent',
                                    'line',
                                    'skype',
                                    'sms',
                                    'snapchat',
                                    'tel',
                                    'tg',
                                    'threema',
                                    'twitter',
                                    'viber',
                                    'webcal',
                                    'web+mastodon',
                                    'wh',
                                    'whatsapp',
                                ],
                                'allowEmpty' => true,
                            ],
                        ],
                        ['name' => 'hreflang'],
                        ['name' => 'media'],
                        ['name' => 'referrerpolicy'],
                        [
                            'name' => 'rel',
                            'disallowedValueRegex' => '(^|\s)(components|dns-prefetch|import|manifest|preconnect|prefetch|preload|prerender|serviceworker|stylesheet|subresource)(\s|$)',
                        ],
                        ['name' => 'role', 'implicit' => true],
                        ['name' => 'tabindex', 'implicit' => true],
                        ['name' => 'target', 'value' => ['_blank', '_self', '_top']],
                        ['name' => 'type', 'valueCasei' => ['text/html', 'application/rss+xml']],
                        ['name' => 'show-tooltip', 'value' => ['auto', 'true']],
                        ['name' => '[href]'],
                    ],
                'attrLists' => ['name-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#links',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            'A (AMP4EMAIL)' => new Tag(
                [
                'tagName' => Element::A,
                'specName' => 'A (AMP4EMAIL)',
                'attrs' => [
                        ['name' => 'border'],
                        [
                            'name' => 'href',
                            'disallowedValueRegex' => '__amp_source_origin|(.|\s){{|}}(.|\s)|^{{.*[^}][^}]$|^[^{][^{].*}}$|^}}|{{$|{{#|{{/|{{\^',
                            'valueUrl' => ['protocol' => ['http', 'https', 'mailto', 'tel'], 'allowRelative' => false],
                        ],
                        ['name' => 'hreflang'],
                        ['name' => 'media'],
                        ['name' => 'role', 'implicit' => true],
                        ['name' => 'tabindex', 'implicit' => true],
                        ['name' => 'target', 'value' => ['_blank']],
                        ['name' => 'type', 'valueCasei' => ['text/html']],
                    ],
                'htmlFormat' => ['AMP4EMAIL'],
                ]
            ),
            Element::ABBR => new Tag(
                [
                'tagName' => Element::ABBR,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::ACRONYM => new Tag(
                [
                'tagName' => Element::ACRONYM,
                'htmlFormat' => ['AMP'],
                ]
            ),
            Element::ADDRESS => new Tag(
                [
                'tagName' => Element::ADDRESS,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Extension::_3D_GLTF => new Tag(
                [
                'tagName' => Extension::_3D_GLTF,
                'attrs' => [
                        ['name' => 'alpha', 'value' => ['false', 'true']],
                        ['name' => 'antialiasing', 'value' => ['false', 'true']],
                        ['name' => 'autorotate', 'value' => ['false', 'true']],
                        ['name' => 'clearcolor'],
                        ['name' => 'enablezoom', 'value' => ['false', 'true']],
                        ['name' => 'maxpixelratio', 'valueRegex' => '[+-]?(\d*\.)?\d+'],
                        ['name' => 'src', 'mandatory' => true, 'valueUrl' => ['protocol' => ['https']]],
                    ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-3d-gltf'],
                ]
            ),
            Extension::_3Q_PLAYER => new Tag(
                [
                'tagName' => Extension::_3Q_PLAYER,
                'attrs' => [['name' => 'autoplay', 'value' => ['']], ['name' => 'data-id', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FLEX_ITEM', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-3q-player'],
                ]
            ),
            'amp-access extension .json script' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'amp-access extension .json script',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        ['name' => 'id', 'mandatory' => true, 'value' => ['amp-access'], 'dispatchKey' => 'NAME_VALUE_DISPATCH'],
                        ['name' => 'type', 'mandatory' => true, 'valueCasei' => ['application/json']],
                    ],
                'attrLists' => ['nonce-attr'],
                'cdata' => ['disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']]],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-access'],
                ]
            ),
            Extension::ACCORDION => new Tag(
                [
                'tagName' => Extension::ACCORDION,
                'attrs' => [
                        ['name' => 'animate', 'value' => ['']],
                        ['name' => 'disable-session-states', 'value' => [''], 'disabledBy' => ['amp4email']],
                        ['name' => 'expand-single-section', 'value' => ['']],
                    ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-accordion/',
                'ampLayout' => ['supportedLayouts' => ['CONTAINER']],
                'childTags' => ['childTagNameOneof' => ['SECTION']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                'requiresExtension' => ['amp-accordion'],
                ]
            ),
            'amp-accordion > section' => new Tag(
                [
                'tagName' => Element::SECTION,
                'specName' => 'amp-accordion > section',
                'mandatoryParent' => 'AMP-ACCORDION',
                'attrs' => [
                        ['name' => 'access-hide', 'value' => [''], 'disabledBy' => ['amp4email']],
                        ['name' => 'expanded', 'value' => ['']],
                        ['name' => '[data-expand]'],
                    ],
                'childTags' => ['mandatoryNumChildTags' => 2, 'firstChildTagNameOneof' => ['H1', 'H2', 'H3', 'H4', 'H5', 'H6', 'HEADER']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                'descriptiveName' => 'amp-accordion > section',
                ]
            ),
            Extension::ACTION_MACRO => new Tag(
                [
                'tagName' => Extension::ACTION_MACRO,
                'attrs' => [['name' => 'arguments'], ['name' => 'execute', 'mandatory' => true]],
                'attrLists' => ['mandatory-id-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-action-macro/',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-action-macro'],
                ]
            ),
            Extension::AD => new Tag(
                [
                'tagName' => Extension::AD,
                'attrs' => [
                        ['name' => 'alt'],
                        ['name' => 'json'],
                        ['name' => 'rtc-config'],
                        [
                            'name' => 'src',
                            'disallowedValueRegex' => '__amp_source_origin',
                            'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true],
                        ],
                        ['name' => 'template'],
                        ['name' => 'type', 'mandatory' => true],
                        ['name' => 'sticky', 'value' => ['']],
                    ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-ad/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'FLUID', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'disallowedAncestor' => ['AMP-APP-BANNER'],
                'htmlFormat' => ['AMP'],
                'alsoRequiresTagWarning' => ['amp-ad extension script'],
                'requiresExtension' => ['amp-ad'],
                ]
            ),
            Extension::AD_CUSTOM => new Tag(
                [
                'tagName' => Extension::AD_CUSTOM,
                'attrs' => [
                        [
                            'name' => 'src',
                            'mandatory' => true,
                            'disallowedValueRegex' => '__amp_source_origin',
                            'valueUrl' => ['protocol' => ['https'], 'allowRelative' => false],
                        ],
                    ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'FLUID', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'disallowedAncestor' => ['AMP-APP-BANNER'],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-ad-custom'],
                ]
            ),
            Extension::AD_EXIT => new Tag(
                [
                'tagName' => Extension::AD_EXIT,
                'attrLists' => ['extended-amp-global', 'mandatory-id-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-ad-exit/',
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY', 'CONTAINER']],
                'childTags' => ['mandatoryNumChildTags' => 1, 'childTagNameOneof' => ['SCRIPT']],
                'htmlFormat' => ['AMP4ADS'],
                'requires' => ['amp-ad-exit configuration JSON'],
                'requiresExtension' => ['amp-ad-exit'],
                ]
            ),
            'amp-ad-exit configuration JSON' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'amp-ad-exit configuration JSON',
                'mandatoryParent' => 'AMP-AD-EXIT',
                'attrs' => [
                        [
                            'name' => 'type',
                            'mandatory' => true,
                            'value' => ['application/json'],
                            'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                        ],
                    ],
                'attrLists' => ['nonce-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-ad-exit/',
                'htmlFormat' => ['AMP4ADS'],
                'satisfies' => ['amp-ad-exit configuration JSON'],
                'requiresExtension' => ['amp-ad-exit'],
                ]
            ),
            Extension::ADDTHIS => new Tag(
                [
                'tagName' => Extension::ADDTHIS,
                'attrs' => [
                        ['name' => 'data-product-code', 'mandatoryOneof' => '[\'data-product-code\', \'data-widget-id\']'],
                        ['name' => 'data-share-media', 'valueUrl' => ['protocol' => ['http', 'https'], 'allowEmpty' => true]],
                        ['name' => 'data-share-url', 'valueUrl' => ['protocol' => ['http', 'https'], 'allowEmpty' => true]],
                        [
                            'name' => 'data-widget-id',
                            'mandatoryOneof' => '[\'data-product-code\', \'data-widget-id\']',
                            'trigger' => ['alsoRequiresAttr' => ['data-pub-id']],
                        ],
                    ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-addthis'],
                ]
            ),
            'amp-ad extension script' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'amp-ad extension script',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                        'name' => 'amp-ad',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'amp-ad with data-enable-refresh attribute' => new Tag(
                [
                'tagName' => Extension::AD,
                'specName' => 'amp-ad with data-enable-refresh attribute',
                'attrs' => [
                        ['name' => 'alt'],
                        ['name' => 'data-enable-refresh', 'mandatory' => true, 'value' => [''], 'dispatchKey' => 'NAME_VALUE_DISPATCH'],
                        ['name' => 'json'],
                        [
                            'name' => 'src',
                            'disallowedValueRegex' => '__amp_source_origin',
                            'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true],
                        ],
                        ['name' => 'type', 'mandatory' => true],
                    ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-ad/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'FLUID', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'disallowedAncestor' => ['AMP-APP-BANNER', 'AMP-FX-FLYING-CARPET', 'AMP-LIGHTBOX'],
                'htmlFormat' => ['AMP'],
                'alsoRequiresTagWarning' => ['amp-ad extension script'],
                'requiresExtension' => ['amp-ad'],
                ]
            ),
            'amp-ad with data-multi-size attribute' => new Tag(
                [
                'tagName' => Extension::AD,
                'specName' => 'amp-ad with data-multi-size attribute',
                'attrs' => [
                        ['name' => 'alt'],
                        ['name' => 'data-multi-size', 'mandatory' => true, 'value' => [''], 'dispatchKey' => 'NAME_VALUE_DISPATCH'],
                        ['name' => 'json'],
                        ['name' => 'rtc-config'],
                        [
                            'name' => 'src',
                            'disallowedValueRegex' => '__amp_source_origin',
                            'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true],
                        ],
                        ['name' => 'type', 'mandatory' => true],
                    ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-ad/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'FLUID', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'disallowedAncestor' => ['AMP-APP-BANNER', 'AMP-CAROUSEL', 'AMP-FX-FLYING-CARPET', 'AMP-LIGHTBOX', 'AMP-STICKY-AD'],
                'htmlFormat' => ['AMP'],
                'alsoRequiresTagWarning' => ['amp-ad extension script'],
                'requiresExtension' => ['amp-ad'],
                ]
            ),
            'amp-ad with type=custom' => new Tag(
                [
                'tagName' => Extension::AD,
                'specName' => 'amp-ad with type=custom',
                'attrs' => [
                        ['name' => 'data-url', 'mandatory' => true, 'valueUrl' => ['protocol' => ['https']]],
                        ['name' => 'template'],
                        ['name' => 'type', 'mandatory' => true, 'value' => ['custom'], 'dispatchKey' => 'NAME_VALUE_DISPATCH'],
                    ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://github.com/ampproject/amphtml/blob/master/ads/custom.md',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'FLUID', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'disallowedAncestor' => ['AMP-APP-BANNER'],
                'htmlFormat' => ['AMP'],
                'alsoRequiresTagWarning' => ['amp-ad extension script'],
                'requiresExtension' => ['amp-ad'],
                ]
            ),
            Extension::ANALYTICS => new Tag(
                [
                'tagName' => Extension::ANALYTICS,
                'attrs' => [
                        [
                            'name' => 'config',
                            'disallowedValueRegex' => '__amp_source_origin',
                            'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true, 'allowEmpty' => true],
                        ],
                        ['name' => 'type'],
                    ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-analytics/',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'requiresExtension' => ['amp-analytics'],
                ]
            ),
            'amp-analytics extension .json script' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'amp-analytics extension .json script',
                'mandatoryParent' => 'AMP-ANALYTICS',
                'attrs' => [
                        [
                            'name' => 'type',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                            'valueCasei' => ['application/json'],
                        ],
                    ],
                'attrLists' => ['nonce-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-analytics/',
                'cdata' => ['disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']]],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'requiresExtension' => ['amp-analytics'],
                'descriptiveName' => 'amp-analytics extension .json script',
                ]
            ),
            Extension::ANIM => new Tag(
                [
                'tagName' => Extension::ANIM,
                'attrs' => [['name' => 'alt'], ['name' => 'attribution'], ['name' => 'object-fit'], ['name' => 'object-position']],
                'attrLists' => ['extended-amp-global', 'mandatory-src-or-srcset'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-anim/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'requiresExtension' => ['amp-anim'],
                ]
            ),
            'AMP-ANIM (AMP4EMAIL)' => new Tag(
                [
                'tagName' => Extension::ANIM,
                'specName' => 'AMP-ANIM (AMP4EMAIL)',
                'attrs' => [['name' => 'alt'], ['name' => 'attribution']],
                'attrLists' => ['extended-amp-global', 'mandatory-src-amp4email'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-anim/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP4EMAIL'],
                'requiresExtension' => ['amp-anim'],
                ]
            ),
            Extension::ANIMATION => new Tag(
                [
                'tagName' => Extension::ANIMATION,
                'attrs' => [['name' => 'trigger', 'value' => ['visibility']]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'childTags' => ['mandatoryNumChildTags' => 1, 'childTagNameOneof' => ['SCRIPT']],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'requires' => ['amp-animation extension .json script'],
                'requiresExtension' => ['amp-animation'],
                ]
            ),
            'amp-animation extension .json script' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'amp-animation extension .json script',
                'mandatoryParent' => 'AMP-ANIMATION',
                'attrs' => [
                        [
                            'name' => 'type',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                            'valueCasei' => ['application/json'],
                        ],
                    ],
                'attrLists' => ['nonce-attr'],
                'cdata' => ['disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']]],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'satisfies' => ['amp-animation extension .json script'],
                'requiresExtension' => ['amp-animation'],
                ]
            ),
            'amp-anim extension script (AMP4EMAIL)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'amp-anim extension script (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-anim', 'version' => ['0.1']],
                ]
            ),
            Extension::APESTER_MEDIA => new Tag(
                [
                'tagName' => Extension::APESTER_MEDIA,
                'attrs' => [
                        [
                            'name' => 'data-apester-channel-token',
                            'mandatoryOneof' => '[\'data-apester-media-id\', \'data-apester-channel-token\']',
                            'valueRegex' => '[0-9a-zA-Z]+',
                        ],
                        [
                            'name' => 'data-apester-media-id',
                            'mandatoryOneof' => '[\'data-apester-media-id\', \'data-apester-channel-token\']',
                            'valueRegex' => '[0-9a-zA-Z]+',
                        ],
                    ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-apester-media/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-apester-media'],
                ]
            ),
            Extension::APP_BANNER => new Tag(
                [
                'tagName' => Extension::APP_BANNER,
                'unique' => true,
                'mandatoryParent' => 'BODY',
                'attrLists' => ['extended-amp-global', 'mandatory-id-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-app-banner/',
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP'],
                'requires' => ['amp-app-banner data source', 'amp-app-banner button[open-button]'],
                'requiresExtension' => ['amp-app-banner'],
                ]
            ),
            'amp-app-banner button[open-button]' => new Tag(
                [
                'tagName' => Element::BUTTON,
                'specName' => 'amp-app-banner button[open-button]',
                'attrs' => [
                        ['name' => 'open-button', 'value' => ['']],
                        ['name' => 'role', 'implicit' => true],
                        ['name' => 'tabindex', 'implicit' => true],
                        ['name' => 'type'],
                        ['name' => 'value'],
                    ],
                'attrLists' => ['name-attr'],
                'mandatoryAncestor' => 'AMP-APP-BANNER',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'satisfies' => ['amp-app-banner button[open-button]'],
                ]
            ),
            Extension::AUDIO => new Tag(
                [
                'tagName' => Extension::AUDIO,
                'attrs' => [['name' => 'autoplay', 'value' => ['']], ['name' => 'preload', 'valueCasei' => ['auto', 'metadata', 'none']]],
                'attrLists' => ['amp-audio-common', 'extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-audio/',
                'ampLayout' => [
                        'supportedLayouts' => ['FIXED', 'FIXED_HEIGHT', 'NODISPLAY'],
                        'definesDefaultWidth' => true,
                        'definesDefaultHeight' => true,
                    ],
                'disallowedAncestor' => ['AMP-STORY'],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-audio'],
                ]
            ),
            'amp-audio (A4A)' => new Tag(
                [
                'tagName' => Extension::AUDIO,
                'specName' => 'amp-audio (A4A)',
                'attrLists' => ['amp-audio-common', 'extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-audio/',
                'ampLayout' => [
                        'supportedLayouts' => ['FIXED', 'FIXED_HEIGHT', 'NODISPLAY'],
                        'definesDefaultWidth' => true,
                        'definesDefaultHeight' => true,
                    ],
                'htmlFormat' => ['AMP4ADS'],
                'requiresExtension' => ['amp-audio'],
                ]
            ),
            'amp-audio > source' => new Tag(
                [
                'tagName' => Element::SOURCE,
                'specName' => 'amp-audio > source',
                'mandatoryParent' => 'AMP-AUDIO',
                'attrs' => [
                        ['name' => 'media'],
                        [
                            'name' => 'src',
                            'disallowedValueRegex' => '__amp_source_origin',
                            'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true],
                        ],
                        ['name' => 'type'],
                        ['name' => '[src]'],
                        ['name' => '[type]'],
                    ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-audio/',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            'amp-audio > track' => new Tag(
                [
                'tagName' => Element::TRACK,
                'specName' => 'amp-audio > track',
                'mandatoryParent' => 'AMP-AUDIO',
                'attrs' => [['name' => '[label]'], ['name' => '[src]'], ['name' => '[srclang]']],
                'attrLists' => ['track-attrs-no-subtitles'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            'amp-audio > track[kind=subtitles]' => new Tag(
                [
                'tagName' => Element::TRACK,
                'specName' => 'amp-audio > track[kind=subtitles]',
                'mandatoryParent' => 'AMP-AUDIO',
                'attrs' => [['name' => '[label]'], ['name' => '[src]'], ['name' => '[srclang]']],
                'attrLists' => ['track-attrs-subtitles'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Extension::AUTO_ADS => new Tag(
                [
                'tagName' => Extension::AUTO_ADS,
                'attrs' => [['name' => 'type', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-auto-ads/',
                'disallowedAncestor' => ['AMP-AUTO-ADS'],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-auto-ads'],
                ]
            ),
            'amp-autocomplete' => new Tag(
                [
                'tagName' => Extension::AUTOCOMPLETE,
                'specName' => 'amp-autocomplete',
                'attrs' => [
                        [
                            'name' => 'filter',
                            'mandatory' => true,
                            'trigger' => ['ifValueRegex' => 'custom', 'alsoRequiresAttr' => ['filter-expr']],
                            'valueCasei' => ['custom', 'fuzzy', 'none', 'prefix', 'substring', 'token-prefix'],
                        ],
                        ['name' => 'filter-expr', 'requiresExtension' => ['amp-bind']],
                        ['name' => 'filter-value'],
                        ['name' => 'highlight-user-entry'],
                        ['name' => 'inline'],
                        ['name' => 'items'],
                        ['name' => 'max-entries'],
                        ['name' => 'max-items'],
                        ['name' => 'min-characters'],
                        ['name' => 'prefetch'],
                        ['name' => 'query', 'trigger' => ['alsoRequiresAttr' => ['src']]],
                        ['name' => 'src', 'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true]],
                        ['name' => 'submit-on-enter'],
                        ['name' => 'suggest-first'],
                        ['name' => 'template'],
                        ['name' => '[src]'],
                    ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-autocomplete/',
                'ampLayout' => ['supportedLayouts' => ['CONTAINER']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-autocomplete'],
                ]
            ),
            'AMP-AUTOCOMPLETE (AMP4EMAIL)' => new Tag(
                [
                'tagName' => Extension::AUTOCOMPLETE,
                'specName' => 'AMP-AUTOCOMPLETE (AMP4EMAIL)',
                'attrs' => [
                        ['name' => 'highlight-user-entry'],
                        ['name' => 'inline'],
                        ['name' => 'items'],
                        ['name' => 'max-items'],
                        ['name' => 'min-characters'],
                        ['name' => 'prefetch'],
                        ['name' => 'query', 'trigger' => ['alsoRequiresAttr' => ['src']]],
                        ['name' => 'submit-on-enter'],
                        ['name' => 'suggest-first'],
                        [
                            'name' => 'src',
                            'mandatory' => true,
                            'disallowedValueRegex' => '__amp_source_origin|{{|}}',
                            'valueUrl' => ['protocol' => ['https'], 'allowRelative' => false],
                        ],
                        ['name' => 'template', 'valueOneofSet' => 'TEMPLATE_IDS'],
                    ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['CONTAINER']],
                'disallowedAncestor' => ['AMP-AUTOCOMPLETE', 'AMP-STATE', 'TEMPLATE'],
                'htmlFormat' => ['AMP4EMAIL'],
                'requiresExtension' => ['amp-autocomplete'],
                ]
            ),
            'amp-autocomplete > input' => new Tag(
                [
                'tagName' => Element::INPUT,
                'specName' => 'amp-autocomplete > input',
                'mandatoryParent' => 'AMP-AUTOCOMPLETE',
                'attrs' => [['name' => 'type', 'mandatory' => true, 'valueCasei' => ['search', 'text']]],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-autocomplete', 'amp-form'],
                ]
            ),
            'amp-autocomplete JSON' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'amp-autocomplete JSON',
                'mandatoryParent' => 'AMP-AUTOCOMPLETE',
                'attrs' => [
                        [
                            'name' => 'type',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                            'valueCasei' => ['application/json'],
                        ],
                    ],
                'attrLists' => ['nonce-attr'],
                'cdata' => ['disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']]],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-autocomplete'],
                ]
            ),
            Extension::BASE_CAROUSEL => new Tag(
                [
                'tagName' => Extension::BASE_CAROUSEL,
                'attrLists' => ['amp-base-carousel-common', 'extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-base-carousel/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-base-carousel'],
                ]
            ),
            'AMP-BASE-CAROUSEL lightbox [child]' => new Tag(
                [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-BASE-CAROUSEL lightbox [child]',
                'attrs' => [['name' => 'lightbox-thumbnail-id', 'valueRegexCasei' => '^[a-z][a-z\d_-]*']],
                'htmlFormat' => ['AMP'],
                ]
            ),
            'AMP-BASE-CAROUSEL lightbox [lightbox-exclude]' => new Tag(
                [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-BASE-CAROUSEL lightbox [lightbox-exclude]',
                'attrs' => [['name' => 'lightbox-exclude', 'mandatory' => true]],
                'htmlFormat' => ['AMP'],
                ]
            ),
            'AMP-BASE-CAROUSEL [lightbox]' => new Tag(
                [
                'tagName' => Extension::BASE_CAROUSEL,
                'specName' => 'AMP-BASE-CAROUSEL [lightbox]',
                'attrs' => [['name' => 'lightbox', 'mandatory' => true]],
                'attrLists' => ['amp-base-carousel-common', 'extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-base-carousel/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'referencePoints' => [
                        ['tagSpecName' => 'AMP-BASE-CAROUSEL lightbox [lightbox-exclude]'],
                        ['tagSpecName' => 'AMP-BASE-CAROUSEL lightbox [child]'],
                    ],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-base-carousel', 'amp-lightbox-gallery'],
                ]
            ),
            Extension::BEOPINION => new Tag(
                [
                'tagName' => Extension::BEOPINION,
                'attrs' => [
                        ['name' => 'data-account', 'mandatory' => true, 'valueRegexCasei' => '[0-9a-f]{24}'],
                        ['name' => 'data-content', 'valueRegexCasei' => '[0-9a-f]{24}'],
                        ['name' => 'data-my-content', 'value' => ['0', '1']],
                        ['name' => 'data-name'],
                    ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-beopinion'],
                ]
            ),
            Extension::BIND_MACRO => new Tag(
                [
                'tagName' => Extension::BIND_MACRO,
                'attrs' => [['name' => 'arguments'], ['name' => 'expression', 'mandatory' => true]],
                'attrLists' => ['mandatory-id-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-bind/',
                'htmlFormat' => ['AMP', 'AMP4EMAIL'],
                'requiresExtension' => ['amp-bind'],
                ]
            ),
            'amp-bind extension .json script' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'amp-bind extension .json script',
                'mandatoryParent' => 'AMP-STATE',
                'attrs' => [
                        [
                            'name' => 'type',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                            'valueCasei' => ['application/json'],
                        ],
                    ],
                'attrLists' => ['nonce-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-bind/',
                'cdata' => [
                        'maxBytes' => 100000,
                        'maxBytesSpecUrl' => 'https://amp.dev/documentation/components/amp-bind#state',
                        'disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']],
                    ],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                'requiresExtension' => ['amp-bind'],
                ]
            ),
            Extension::BODYMOVIN_ANIMATION => new Tag(
                [
                'tagName' => Extension::BODYMOVIN_ANIMATION,
                'attrs' => [
                        ['name' => 'loop', 'valueRegexCasei' => '[1-9][0-9]*|false|true'],
                        ['name' => 'noautoplay', 'value' => ['']],
                        ['name' => 'src', 'mandatory' => true, 'valueUrl' => ['protocol' => ['https'], 'allowRelative' => false]],
                        ['name' => 'renderer', 'valueCasei' => ['svg', 'html']],
                    ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-bodymovin-animation/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-bodymovin-animation'],
                ]
            ),
            Extension::BRID_PLAYER => new Tag(
                [
                'tagName' => Extension::BRID_PLAYER,
                'attrs' => [
                        ['name' => 'autoplay'],
                        ['name' => 'data-dynamic', 'valueRegex' => '[a-z]+'],
                        [
                            'name' => 'data-outstream',
                            'mandatoryOneof' => '[\'data-outstream\', \'data-playlist\', \'data-video\']',
                            'valueRegex' => '[0-9]+',
                        ],
                        ['name' => 'data-partner', 'mandatory' => true, 'valueRegex' => '[0-9]+'],
                        ['name' => 'data-player', 'mandatory' => true, 'valueRegex' => '[0-9]+'],
                        [
                            'name' => 'data-playlist',
                            'mandatoryOneof' => '[\'data-outstream\', \'data-playlist\', \'data-video\']',
                            'valueRegex' => '.+',
                        ],
                        [
                            'name' => 'data-video',
                            'mandatoryOneof' => '[\'data-outstream\', \'data-playlist\', \'data-video\']',
                            'valueRegex' => '[0-9]+',
                        ],
                        ['name' => 'dock', 'requiresExtension' => ['amp-video-docking']],
                    ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-brid-player/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-brid-player'],
                ]
            ),
            Extension::BRIGHTCOVE => new Tag(
                [
                'tagName' => Extension::BRIGHTCOVE,
                'attrs' => [
                        ['name' => 'autoplay', 'value' => ['']],
                        ['name' => 'data-account', 'mandatory' => true],
                        ['name' => 'dock', 'requiresExtension' => ['amp-video-docking']],
                        ['name' => '[data-account]'],
                        ['name' => '[data-embed]'],
                        ['name' => '[data-player-id]'],
                        ['name' => '[data-player]'],
                        ['name' => '[data-playlist-id]'],
                        ['name' => '[data-video-id]'],
                        ['name' => '[data-referrer]'],
                    ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-brightcove/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-brightcove'],
                ]
            ),
            Extension::BYSIDE_CONTENT => new Tag(
                [
                'tagName' => Extension::BYSIDE_CONTENT,
                'attrs' => [['name' => 'data-label', 'mandatory' => true], ['name' => 'data-webcare-id', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-byside-content'],
                ]
            ),
            Extension::CALL_TRACKING => new Tag(
                [
                'tagName' => Extension::CALL_TRACKING,
                'attrs' => [
                        [
                            'name' => 'config',
                            'mandatory' => true,
                            'disallowedValueRegex' => '__amp_source_origin',
                            'valueUrl' => ['protocol' => ['https'], 'allowRelative' => false],
                        ],
                    ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-call-tracking/',
                'ampLayout' => ['supportedLayouts' => ['CONTAINER', 'FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'RESPONSIVE']],
                'childTags' => ['mandatoryNumChildTags' => 1, 'childTagNameOneof' => ['A']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-call-tracking'],
                ]
            ),
            Extension::CAROUSEL => new Tag(
                [
                'tagName' => Extension::CAROUSEL,
                'specName' => 'AMP-CAROUSEL',
                'attrLists' => ['amp-carousel-common', 'extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-carousel/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                'requiresExtension' => ['amp-carousel'],
                ]
            ),
            'AMP-CAROUSEL lightbox' => new Tag(
                [
                'tagName' => Extension::CAROUSEL,
                'specName' => 'AMP-CAROUSEL lightbox',
                'attrs' => [['name' => 'lightbox', 'mandatory' => true]],
                'attrLists' => ['amp-carousel-common', 'extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-carousel/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'referencePoints' => [['tagSpecName' => 'AMP-CAROUSEL lightbox [lightbox-exclude]'], ['tagSpecName' => 'AMP-CAROUSEL lightbox [child]']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-carousel', 'amp-lightbox-gallery'],
                ]
            ),
            'AMP-CAROUSEL lightbox [child]' => new Tag(
                [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-CAROUSEL lightbox [child]',
                'attrs' => [['name' => 'lightbox-thumbnail-id', 'valueRegexCasei' => '^[a-z][a-z\d_-]*']],
                'htmlFormat' => ['AMP'],
                ]
            ),
            'AMP-CAROUSEL lightbox [lightbox-exclude]' => new Tag(
                [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-CAROUSEL lightbox [lightbox-exclude]',
                'attrs' => [['name' => 'lightbox-exclude', 'mandatory' => true]],
                'htmlFormat' => ['AMP'],
                ]
            ),
            Extension::CONNATIX_PLAYER => new Tag(
                [
                'tagName' => Extension::CONNATIX_PLAYER,
                'attrs' => [['name' => 'data-player-id', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-connatix-player/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-connatix-player'],
                ]
            ),
            Extension::CONSENT => new Tag(
                [
                'tagName' => Extension::CONSENT,
                'unique' => true,
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP'],
                'requires' => ['amp-consent extension .json script'],
                'requiresExtension' => ['amp-consent'],
                'excludes' => ['amp-consent [type]'],
                ]
            ),
            'amp-consent extension .json script' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'amp-consent extension .json script',
                'unique' => true,
                'mandatoryParent' => 'AMP-CONSENT',
                'attrs' => [
                        [
                            'name' => 'type',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                            'valueCasei' => ['application/json'],
                        ],
                    ],
                'attrLists' => ['nonce-attr'],
                'cdata' => ['disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']]],
                'htmlFormat' => ['AMP'],
                'satisfies' => ['amp-consent extension .json script'],
                'requiresExtension' => ['amp-consent'],
                ]
            ),
            'amp-consent [type]' => new Tag(
                [
                'tagName' => Extension::CONSENT,
                'specName' => 'amp-consent [type]',
                'unique' => true,
                'attrs' => [['name' => 'type', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP'],
                'satisfies' => ['amp-consent [type]'],
                'requires' => ['meta name=amp-consent-blocking', 'amp-consent extension .json script'],
                'requiresExtension' => ['amp-consent'],
                ]
            ),
            Extension::DAILYMOTION => new Tag(
                [
                'tagName' => Extension::DAILYMOTION,
                'attrs' => [
                        ['name' => 'autoplay'],
                        ['name' => 'data-endscreen-enable', 'value' => ['false', 'true']],
                        ['name' => 'data-info', 'value' => ['false', 'true']],
                        ['name' => 'data-mute', 'value' => ['false', 'true']],
                        ['name' => 'data-sharing-enable', 'value' => ['false', 'true']],
                        ['name' => 'data-start', 'valueRegex' => '[0-9]+'],
                        ['name' => 'data-ui-highlight', 'valueRegexCasei' => '([0-9a-f]{3}){1,2}'],
                        ['name' => 'data-ui-logo', 'value' => ['false', 'true']],
                        ['name' => 'data-videoid', 'mandatory' => true, 'valueRegexCasei' => '[a-z0-9]+'],
                        ['name' => 'dock', 'requiresExtension' => ['amp-video-docking']],
                    ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-dailymotion/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-dailymotion'],
                ]
            ),
            Extension::DATE_COUNTDOWN => new Tag(
                [
                'tagName' => Extension::DATE_COUNTDOWN,
                'attrs' => [
                        ['name' => 'biggest-unit', 'valueCasei' => ['days', 'hours', 'minutes', 'seconds']],
                        ['name' => 'data-count-up', 'value' => ['']],
                        [
                            'name' => 'end-date',
                            'mandatoryOneof' => '[\'end-date\', \'timeleft-ms\', \'timestamp-ms\', \'timestamp-seconds\']',
                            'valueRegex' => '\d{4}-[01]\d-[0-3]\dT[0-2]\d:[0-5]\d(:[0-5]\d(\.\d+)?)?(Z|[+-][0-1][0-9]:[0-5][0-9])',
                        ],
                        [
                            'name' => 'locale',
                            'valueCasei' => [
                                'de',
                                'en',
                                'es',
                                'fr',
                                'id',
                                'it',
                                'ja',
                                'ko',
                                'nl',
                                'pt',
                                'ru',
                                'th',
                                'tr',
                                'vi',
                                'zh-cn',
                                'zh-tw',
                            ],
                        ],
                        ['name' => 'offset-seconds', 'valueRegex' => '-?\d+'],
                        ['name' => 'template', 'valueOneofSet' => 'TEMPLATE_IDS'],
                        [
                            'name' => 'timeleft-ms',
                            'mandatoryOneof' => '[\'end-date\', \'timeleft-ms\', \'timestamp-ms\', \'timestamp-seconds\']',
                            'valueRegex' => '\d+',
                        ],
                        [
                            'name' => 'timestamp-ms',
                            'mandatoryOneof' => '[\'end-date\', \'timeleft-ms\', \'timestamp-ms\', \'timestamp-seconds\']',
                            'valueRegex' => '\d{13}',
                        ],
                        [
                            'name' => 'timestamp-seconds',
                            'mandatoryOneof' => '[\'end-date\', \'timeleft-ms\', \'timestamp-ms\', \'timestamp-seconds\']',
                            'valueRegex' => '\d{10}',
                        ],
                        ['name' => 'when-ended', 'valueCasei' => ['continue', 'stop']],
                    ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-date-countdown'],
                ]
            ),
            Extension::DATE_DISPLAY => new Tag(
                [
                'tagName' => Extension::DATE_DISPLAY,
                'attrs' => [
                        [
                            'name' => 'datetime',
                            'mandatoryOneof' => '[\'datetime\', \'timestamp-ms\', \'timestamp-seconds\']',
                            'valueRegex' => 'now|(\d{4}-[01]\d-[0-3]\d(T[0-2]\d:[0-5]\d(:[0-6]\d(\.\d\d?\d?)?)?(Z|[+-][0-1]\d:[0-5]\d)?)?)',
                        ],
                        ['name' => 'display-in', 'valueCasei' => ['utc']],
                        ['name' => 'offset-seconds', 'valueRegex' => '-?\d+'],
                        ['name' => 'locale'],
                        ['name' => 'template', 'valueOneofSet' => 'TEMPLATE_IDS'],
                        [
                            'name' => 'timestamp-ms',
                            'mandatoryOneof' => '[\'datetime\', \'timestamp-ms\', \'timestamp-seconds\']',
                            'valueRegex' => '\d+',
                        ],
                        [
                            'name' => 'timestamp-seconds',
                            'mandatoryOneof' => '[\'datetime\', \'timestamp-ms\', \'timestamp-seconds\']',
                            'valueRegex' => '\d+',
                        ],
                    ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-date-display'],
                ]
            ),
            'amp-date-picker > template [date-template]' => new Tag(
                [
                'tagName' => Element::TEMPLATE,
                'specName' => 'amp-date-picker > template [date-template]',
                'mandatoryParent' => 'AMP-DATE-PICKER',
                'attrs' => [
                        ['name' => 'date-template', 'mandatory' => true, 'value' => [''], 'dispatchKey' => 'NAME_DISPATCH'],
                        ['name' => 'default'],
                        ['name' => 'dates'],
                        ['name' => 'type', 'mandatory' => true, 'value' => ['amp-mustache']],
                    ],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-mustache'],
                ]
            ),
            'amp-date-picker > template [info-template]' => new Tag(
                [
                'tagName' => Element::TEMPLATE,
                'specName' => 'amp-date-picker > template [info-template]',
                'mandatoryParent' => 'AMP-DATE-PICKER',
                'attrs' => [
                        ['name' => 'info-template', 'mandatory' => true, 'dispatchKey' => 'NAME_DISPATCH'],
                        ['name' => 'type', 'mandatory' => true, 'value' => ['amp-mustache']],
                    ],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-mustache'],
                ]
            ),
            'amp-date-picker[type=range][mode=overlay]' => new Tag(
                [
                'tagName' => Extension::DATE_PICKER,
                'specName' => 'amp-date-picker[type=range][mode=overlay]',
                'attrs' => [
                        ['name' => 'mode', 'mandatory' => true, 'dispatchKey' => 'NAME_VALUE_DISPATCH', 'valueCasei' => ['overlay']],
                        ['name' => 'type', 'mandatory' => true, 'valueCasei' => ['range']],
                    ],
                'attrLists' => [
                        'amp-date-picker-common-attributes',
                        'amp-date-picker-overlay-mode-attributes',
                        'amp-date-picker-range-type-attributes',
                        'extended-amp-global',
                    ],
                'ampLayout' => ['supportedLayouts' => ['CONTAINER', 'NODISPLAY']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-date-picker'],
                ]
            ),
            'amp-date-picker[type=range][mode=static]' => new Tag(
                [
                'tagName' => Extension::DATE_PICKER,
                'specName' => 'amp-date-picker[type=range][mode=static]',
                'attrs' => [['name' => 'mode', 'valueCasei' => ['static']], ['name' => 'type', 'mandatory' => true, 'valueCasei' => ['range']]],
                'attrLists' => [
                        'amp-date-picker-common-attributes',
                        'amp-date-picker-range-type-attributes',
                        'amp-date-picker-static-mode-attributes',
                        'extended-amp-global',
                    ],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-date-picker'],
                ]
            ),
            'amp-date-picker[type=single][mode=overlay]' => new Tag(
                [
                'tagName' => Extension::DATE_PICKER,
                'specName' => 'amp-date-picker[type=single][mode=overlay]',
                'attrs' => [
                        ['name' => 'mode', 'mandatory' => true, 'dispatchKey' => 'NAME_VALUE_DISPATCH', 'valueCasei' => ['overlay']],
                        ['name' => 'type', 'valueCasei' => ['single']],
                    ],
                'attrLists' => [
                        'amp-date-picker-common-attributes',
                        'amp-date-picker-overlay-mode-attributes',
                        'amp-date-picker-single-type-attributes',
                        'extended-amp-global',
                    ],
                'ampLayout' => ['supportedLayouts' => ['CONTAINER', 'NODISPLAY']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-date-picker'],
                ]
            ),
            'amp-date-picker[type=single][mode=static]' => new Tag(
                [
                'tagName' => Extension::DATE_PICKER,
                'specName' => 'amp-date-picker[type=single][mode=static]',
                'attrs' => [['name' => 'mode', 'valueCasei' => ['static']], ['name' => 'type', 'valueCasei' => ['single']]],
                'attrLists' => [
                        'amp-date-picker-common-attributes',
                        'amp-date-picker-single-type-attributes',
                        'amp-date-picker-static-mode-attributes',
                        'extended-amp-global',
                    ],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-date-picker'],
                ]
            ),
            Extension::DELIGHT_PLAYER => new Tag(
                [
                'tagName' => Extension::DELIGHT_PLAYER,
                'attrs' => [['name' => 'data-content-id', 'mandatory' => true], ['name' => 'dock', 'requiresExtension' => ['amp-video-docking']]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-delight-player'],
                ]
            ),
            Extension::EMBED => new Tag(
                [
                'tagName' => Extension::EMBED,
                'attrs' => [
                        ['name' => 'alt'],
                        ['name' => 'json'],
                        ['name' => 'rtc-config'],
                        [
                            'name' => 'src',
                            'disallowedValueRegex' => '__amp_source_origin',
                            'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true],
                        ],
                        ['name' => 'type', 'mandatory' => true],
                    ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-ad/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'FLUID', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'disallowedAncestor' => ['AMP-APP-BANNER'],
                'htmlFormat' => ['AMP'],
                'alsoRequiresTagWarning' => ['amp-ad extension script'],
                'requiresExtension' => ['amp-ad'],
                ]
            ),
            Extension::EMBEDLY_CARD => new Tag(
                [
                'tagName' => Extension::EMBEDLY_CARD,
                'attrs' => [['name' => 'data-url', 'mandatory' => true, 'valueUrl' => ['protocol' => ['https'], 'allowRelative' => false]]],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-embedly-card/',
                'ampLayout' => ['supportedLayouts' => ['RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-embedly-card'],
                ]
            ),
            Extension::EMBEDLY_KEY => new Tag(
                [
                'tagName' => Extension::EMBEDLY_KEY,
                'unique' => true,
                'attrs' => [['name' => 'value', 'mandatory' => true]],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-embedly-card'],
                ]
            ),
            'amp-embed with data-multi-size attribute' => new Tag(
                [
                'tagName' => Extension::EMBED,
                'specName' => 'amp-embed with data-multi-size attribute',
                'attrs' => [
                        ['name' => 'alt'],
                        ['name' => 'data-multi-size', 'mandatory' => true, 'value' => [''], 'dispatchKey' => 'NAME_VALUE_DISPATCH'],
                        ['name' => 'json'],
                        ['name' => 'rtc-config'],
                        [
                            'name' => 'src',
                            'disallowedValueRegex' => '__amp_source_origin',
                            'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true],
                        ],
                        ['name' => 'type', 'mandatory' => true],
                    ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-ad/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'FLUID', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'disallowedAncestor' => ['AMP-APP-BANNER', 'AMP-CAROUSEL', 'AMP-FX-FLYING-CARPET', 'AMP-LIGHTBOX', 'AMP-STICKY-AD'],
                'htmlFormat' => ['AMP'],
                'alsoRequiresTagWarning' => ['amp-ad extension script'],
                'requiresExtension' => ['amp-ad'],
                ]
            ),
            Extension::EXPERIMENT => new Tag(
                [
                'tagName' => Extension::EXPERIMENT,
                'unique' => true,
                'specUrl' => 'https://amp.dev/documentation/components/amp-experiment/',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-experiment'],
                ]
            ),
            'amp-experiment extension .json script' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'amp-experiment extension .json script',
                'mandatoryParent' => 'AMP-EXPERIMENT',
                'attrs' => [
                        [
                            'name' => 'type',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                            'valueCasei' => ['application/json'],
                        ],
                    ],
                'attrLists' => ['nonce-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-experiment/',
                'cdata' => [
                        'maxBytes' => 15000,
                        'maxBytesSpecUrl' => 'https://amp.dev/documentation/components/amp-experiment/#configuration',
                        'disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']],
                    ],
                'htmlFormat' => ['AMP'],
                ]
            ),
            'amp-experiment story extension .json script' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'amp-experiment story extension .json script',
                'mandatoryParent' => 'AMP-EXPERIMENT',
                'attrs' => [
                        [
                            'name' => 'type',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                            'valueCasei' => ['application/json'],
                        ],
                    ],
                'attrLists' => ['nonce-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-experiment/',
                'cdata' => [
                        'maxBytes' => 15000,
                        'maxBytesSpecUrl' => 'https://amp.dev/documentation/components/amp-experiment/#configuration',
                        'disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']],
                    ],
                'htmlFormat' => ['AMP'],
                ]
            ),
            Extension::FACEBOOK => new Tag(
                [
                'tagName' => Extension::FACEBOOK,
                'attrs' => [['name' => 'data-href', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-facebook'],
                ]
            ),
            Extension::FACEBOOK_COMMENTS => new Tag(
                [
                'tagName' => Extension::FACEBOOK_COMMENTS,
                'attrs' => [['name' => 'data-href', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-facebook-comments'],
                ]
            ),
            Extension::FACEBOOK_LIKE => new Tag(
                [
                'tagName' => Extension::FACEBOOK_LIKE,
                'attrs' => [
                        [
                            'name' => 'data-href',
                            'mandatory' => true,
                            'valueUrl' => ['protocol' => ['http', 'https'], 'allowRelative' => false],
                        ],
                    ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-facebook-like'],
                ]
            ),
            Extension::FACEBOOK_PAGE => new Tag(
                [
                'tagName' => Extension::FACEBOOK_PAGE,
                'attrs' => [
                        [
                            'name' => 'data-href',
                            'mandatory' => true,
                            'valueUrl' => ['protocol' => ['http', 'https'], 'allowRelative' => false],
                        ],
                    ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-facebook-page'],
                ]
            ),
            Extension::FIT_TEXT => new Tag(
                [
                'tagName' => Extension::FIT_TEXT,
                'attrs' => [['name' => 'max-font-size'], ['name' => 'min-font-size']],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                'requiresExtension' => ['amp-fit-text'],
                ]
            ),
            Extension::FONT => new Tag(
                [
                'tagName' => Extension::FONT,
                'attrs' => [
                        ['name' => 'font-family', 'mandatory' => true],
                        ['name' => 'font-style'],
                        ['name' => 'font-variant'],
                        ['name' => 'font-weight'],
                        ['name' => 'on-error-add-class'],
                        ['name' => 'on-error-remove-class'],
                        ['name' => 'on-load-add-class'],
                        ['name' => 'on-load-remove-class'],
                        ['name' => 'timeout', 'valueRegex' => '[0-9]+'],
                    ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'requiresExtension' => ['amp-font'],
                ]
            ),
            Extension::FX_FLYING_CARPET => new Tag(
                [
                'tagName' => Extension::FX_FLYING_CARPET,
                'attrs' => [['name' => 'height', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-fx-flying-carpet'],
                ]
            ),
            Extension::GEO => new Tag(
                [
                'tagName' => Extension::GEO,
                'unique' => true,
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'childTags' => ['firstChildTagNameOneof' => ['SCRIPT']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-geo'],
                ]
            ),
            'amp-geo extension .json script' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'amp-geo extension .json script',
                'mandatoryParent' => 'AMP-GEO',
                'attrs' => [
                        [
                            'name' => 'type',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                            'valueCasei' => ['application/json'],
                        ],
                    ],
                'attrLists' => ['nonce-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-geo/',
                'cdata' => ['disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']]],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-geo'],
                ]
            ),
            Extension::GFYCAT => new Tag(
                [
                'tagName' => Extension::GFYCAT,
                'attrs' => [['name' => 'data-gfyid', 'mandatory' => true], ['name' => 'noautoplay', 'value' => ['']]],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-gfycat/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-gfycat'],
                ]
            ),
            Extension::GIST => new Tag(
                [
                'tagName' => Extension::GIST,
                'attrs' => [['name' => 'data-gistid', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-gist/',
                'ampLayout' => ['supportedLayouts' => ['FIXED_HEIGHT']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-gist'],
                ]
            ),
            Extension::GOOGLE_DOCUMENT_EMBED => new Tag(
                [
                'tagName' => Extension::GOOGLE_DOCUMENT_EMBED,
                'attrs' => [
                        [
                            'name' => 'src',
                            'mandatory' => true,
                            'disallowedValueRegex' => '__amp_source_origin',
                            'valueUrl' => ['protocol' => ['https'], 'allowRelative' => false],
                        ],
                        ['name' => '[src]'],
                        ['name' => '[title]'],
                    ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-google-document-embed/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-google-document-embed'],
                ]
            ),
            Extension::GWD_ANIMATION => new Tag(
                [
                'tagName' => Extension::GWD_ANIMATION,
                'attrs' => [['name' => 'timeline-event-prefix']],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP4ADS'],
                'requiresExtension' => ['amp-gwd-animation'],
                ]
            ),
            Extension::HULU => new Tag(
                [
                'tagName' => Extension::HULU,
                'attrs' => [['name' => 'data-eid', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-hulu/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-hulu'],
                ]
            ),
            Extension::IFRAME => new Tag(
                [
                'tagName' => Extension::IFRAME,
                'attrs' => [
                        ['name' => 'allow'],
                        ['name' => 'allowfullscreen', 'value' => ['']],
                        ['name' => 'allowpaymentrequest', 'value' => ['']],
                        ['name' => 'allowtransparency', 'value' => ['']],
                        ['name' => 'frameborder', 'value' => ['0', '1']],
                        ['name' => 'referrerpolicy'],
                        ['name' => 'resizable', 'value' => ['']],
                        ['name' => 'sandbox'],
                        ['name' => 'scrolling', 'value' => ['auto', 'no', 'yes']],
                        ['name' => 'tabindex', 'valueRegex' => '-?\d+'],
                        [
                            'name' => 'src',
                            'disallowedValueRegex' => '__amp_source_origin',
                            'mandatoryOneof' => '[\'src\', \'srcdoc\']',
                            'valueUrl' => ['protocol' => ['data', 'https'], 'allowRelative' => true],
                        ],
                        ['name' => 'srcdoc', 'mandatoryOneof' => '[\'src\', \'srcdoc\']'],
                        ['name' => '[src]', 'trigger' => ['alsoRequiresAttr' => ['src']]],
                    ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-iframe'],
                ]
            ),
            Extension::IMA_VIDEO => new Tag(
                [
                'tagName' => Extension::IMA_VIDEO,
                'attrs' => [
                        ['name' => 'autoplay', 'value' => ['']],
                        [
                            'name' => 'data-src',
                            'disallowedValueRegex' => '__amp_source_origin',
                            'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true],
                        ],
                        ['name' => 'data-tag', 'mandatory' => true, 'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true]],
                        ['name' => 'dock', 'requiresExtension' => ['amp-video-docking']],
                        ['name' => 'rotate-to-fullscreen', 'value' => ['']],
                    ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-ima-video/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-ima-video'],
                ]
            ),
            'amp-ima-video > script[type=application/json]' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'amp-ima-video > script[type=application/json]',
                'mandatoryParent' => 'AMP-IMA-VIDEO',
                'attrs' => [
                        [
                            'name' => 'type',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                            'valueCasei' => ['application/json'],
                        ],
                    ],
                'cdata' => ['disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']]],
                'htmlFormat' => ['AMP'],
                'descriptiveName' => 'script type=application/ld+json',
                ]
            ),
            'amp-ima-video > source' => new Tag(
                [
                'tagName' => Element::SOURCE,
                'specName' => 'amp-ima-video > source',
                'mandatoryParent' => 'AMP-IMA-VIDEO',
                'attrs' => [
                        ['name' => 'media'],
                        [
                            'name' => 'src',
                            'disallowedValueRegex' => '__amp_source_origin',
                            'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true],
                        ],
                        ['name' => 'type'],
                        ['name' => '[src]'],
                        ['name' => '[type]'],
                    ],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'requiresExtension' => ['amp-ima-video'],
                ]
            ),
            'amp-ima-video > track' => new Tag(
                [
                'tagName' => Element::TRACK,
                'specName' => 'amp-ima-video > track',
                'mandatoryParent' => 'AMP-IMA-VIDEO',
                'attrs' => [['name' => '[label]'], ['name' => '[src]'], ['name' => '[srclang]']],
                'attrLists' => ['track-attrs-no-subtitles'],
                'htmlFormat' => ['AMP'],
                ]
            ),
            'amp-ima-video > track[kind=subtitles]' => new Tag(
                [
                'tagName' => Element::TRACK,
                'specName' => 'amp-ima-video > track[kind=subtitles]',
                'mandatoryParent' => 'AMP-IMA-VIDEO',
                'attrs' => [['name' => '[label]'], ['name' => '[src]'], ['name' => '[srclang]']],
                'attrLists' => ['track-attrs-subtitles'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-ima-video/',
                'htmlFormat' => ['AMP'],
                ]
            ),
            Extension::IMAGE_LIGHTBOX => new Tag(
                [
                'tagName' => Extension::IMAGE_LIGHTBOX,
                'attrs' => [['name' => 'controls']],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP', 'AMP4EMAIL'],
                'requiresExtension' => ['amp-image-lightbox'],
                ]
            ),
            Extension::IMAGE_SLIDER => new Tag(
                [
                'tagName' => Extension::IMAGE_SLIDER,
                'attrs' => [
                        ['name' => 'disable-hint-reappear'],
                        ['name' => 'initial-slider-position', 'valueRegex' => '0(\.[0-9]+)?|1(\.0+)?'],
                        ['name' => 'step-size', 'valueRegex' => '0(\.[0-9]+)?|1(\.0+)?'],
                    ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-image-slider/',
                'ampLayout' => ['supportedLayouts' => ['FIXED', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'childTags' => ['childTagNameOneof' => ['AMP-IMG', 'DIV'], 'mandatoryMinNumChildTags' => 2],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-image-slider'],
                'disabledBy' => ['transformed'],
                ]
            ),
            'amp-image-slider (transformed)' => new Tag(
                [
                'tagName' => Extension::IMAGE_SLIDER,
                'specName' => 'amp-image-slider (transformed)',
                'attrs' => [
                        ['name' => 'disable-hint-reappear'],
                        ['name' => 'initial-slider-position', 'valueRegex' => '0(\.[0-9]+)?|1(\.0+)?'],
                        ['name' => 'step-size', 'valueRegex' => '0(\.[0-9]+)?|1(\.0+)?'],
                    ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-image-slider/',
                'ampLayout' => ['supportedLayouts' => ['FIXED', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'childTags' => ['childTagNameOneof' => ['AMP-IMG', 'DIV', 'I-AMPHTML-SIZER'], 'mandatoryMinNumChildTags' => 2],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-image-slider'],
                'enabledBy' => ['transformed'],
                ]
            ),
            'AMP-IMAGE-SLIDER > DIV [first]' => new Tag(
                [
                'tagName' => Element::DIV,
                'specName' => 'AMP-IMAGE-SLIDER > DIV [first]',
                'mandatoryParent' => 'AMP-IMAGE-SLIDER',
                'attrs' => [['name' => 'first', 'mandatory' => true]],
                'specUrl' => 'https://amp.dev/documentation/components/amp-image-slider/',
                'htmlFormat' => ['AMP'],
                ]
            ),
            'AMP-IMAGE-SLIDER > DIV [second]' => new Tag(
                [
                'tagName' => Element::DIV,
                'specName' => 'AMP-IMAGE-SLIDER > DIV [second]',
                'mandatoryParent' => 'AMP-IMAGE-SLIDER',
                'attrs' => [['name' => 'second', 'mandatory' => true]],
                'specUrl' => 'https://amp.dev/documentation/components/amp-image-slider/',
                'htmlFormat' => ['AMP'],
                ]
            ),
            Extension::IMG => new Tag(
                [
                'tagName' => Extension::IMG,
                'attrs' => [
                        ['name' => 'alt'],
                        ['name' => 'attribution'],
                        ['name' => 'crossorigin'],
                        ['name' => 'object-fit'],
                        ['name' => 'object-position'],
                        ['name' => 'placeholder'],
                        ['name' => 'referrerpolicy'],
                        ['name' => '[alt]'],
                        ['name' => '[attribution]'],
                        ['name' => '[src]'],
                        ['name' => '[srcset]'],
                    ],
                'attrLists' => ['extended-amp-global', 'lightboxable-elements', 'mandatory-src-or-srcset'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-img/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            'AMP-IMG (AMP4EMAIL)' => new Tag(
                [
                'tagName' => Extension::IMG,
                'specName' => 'AMP-IMG (AMP4EMAIL)',
                'attrs' => [
                        ['name' => 'alt'],
                        ['name' => 'attribution'],
                        ['name' => 'placeholder'],
                        ['name' => '[alt]'],
                        ['name' => '[attribution]'],
                    ],
                'attrLists' => ['extended-amp-global', 'mandatory-src-amp4email'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-img/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP4EMAIL'],
                ]
            ),
            'amp-img (transformed)' => new Tag(
                [
                'tagName' => Extension::IMG,
                'specName' => 'amp-img (transformed)',
                'attrs' => [
                        ['name' => 'i-amphtml-ssr', 'mandatory' => true, 'dispatchKey' => 'NAME_DISPATCH'],
                        ['name' => 'alt'],
                        ['name' => 'attribution'],
                        ['name' => 'object-fit'],
                        ['name' => 'object-position'],
                        ['name' => 'placeholder'],
                        ['name' => 'referrerpolicy'],
                        ['name' => '[alt]'],
                        ['name' => '[attribution]'],
                        ['name' => '[src]'],
                        ['name' => '[srcset]'],
                    ],
                'attrLists' => ['extended-amp-global', 'lightboxable-elements', 'mandatory-src-or-srcset'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-img/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'enabledBy' => ['transformed'],
                ]
            ),
            'amp-img > img (transformed)' => new Tag(
                [
                'tagName' => Element::IMG,
                'specName' => 'amp-img > img (transformed)',
                'mandatoryParent' => 'amp-img (transformed)',
                'attrs' => [
                        ['name' => 'alt'],
                        ['name' => 'attribution'],
                        ['name' => 'object-fit'],
                        ['name' => 'object-position'],
                        ['name' => 'referrerpolicy'],
                        ['name' => 'sizes'],
                        ['name' => 'title'],
                        [
                            'name' => 'class',
                            'mandatory' => true,
                            'valueRegex' => 'i-amphtml-fill-content\s+i-amphtml-replaced-content|i-amphtml-replaced-content\s+i-amphtml-fill-content',
                        ],
                        ['name' => 'decoding', 'mandatory' => true, 'value' => ['async']],
                        ['name' => 'loading', 'value' => ['lazy', 'eager']],
                    ],
                'attrLists' => ['mandatory-src-or-srcset'],
                'htmlFormat' => ['AMP'],
                'enabledBy' => ['transformed'],
                ]
            ),
            'amp-img > img[placeholder] (transformed)' => new Tag(
                [
                'tagName' => Element::IMG,
                'specName' => 'amp-img > img[placeholder] (transformed)',
                'mandatoryParent' => 'amp-img (transformed)',
                'attrs' => [
                        ['name' => 'alt'],
                        ['name' => 'attribution'],
                        ['name' => 'class', 'mandatory' => true, 'value' => ['i-amphtml-blurry-placeholder']],
                        ['name' => 'object-fit'],
                        ['name' => 'object-position'],
                        ['name' => 'placeholder', 'mandatory' => true, 'value' => [''], 'dispatchKey' => 'NAME_DISPATCH'],
                        ['name' => 'referrerpolicy'],
                        ['name' => 'sizes'],
                        ['name' => 'title'],
                    ],
                'attrLists' => ['mandatory-src-or-srcset'],
                'htmlFormat' => ['AMP'],
                'enabledBy' => ['transformed'],
                ]
            ),
            Extension::IMGUR => new Tag(
                [
                'tagName' => Extension::IMGUR,
                'attrs' => [['name' => 'data-imgur-id', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-imgur'],
                ]
            ),
            Extension::INLINE_GALLERY => new Tag(
                [
                'tagName' => Extension::INLINE_GALLERY,
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-inline-gallery/',
                'ampLayout' => ['supportedLayouts' => ['CONTAINER']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-inline-gallery'],
                ]
            ),
            'amp-inline-gallery-pagination' => new Tag(
                [
                'tagName' => Extension::INLINE_GALLERY_PAGINATION,
                'specName' => 'amp-inline-gallery-pagination',
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-inline-gallery/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'mandatoryAncestor' => 'AMP-INLINE-GALLERY',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-inline-gallery'],
                ]
            ),
            'amp-inline-gallery-pagination [inset]' => new Tag(
                [
                'tagName' => Extension::INLINE_GALLERY_PAGINATION,
                'specName' => 'amp-inline-gallery-pagination [inset]',
                'attrs' => [['name' => 'inset', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-inline-gallery/',
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'mandatoryAncestor' => 'AMP-INLINE-GALLERY',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-inline-gallery'],
                ]
            ),
            Extension::INLINE_GALLERY_THUMBNAILS => new Tag(
                [
                'tagName' => Extension::INLINE_GALLERY_THUMBNAILS,
                'attrs' => [
                        [
                            'name' => 'aspect-ratio-height',
                            'disallowedValueRegex' => '^0+(\.0+)?$',
                            'valueRegex' => '\d+(\.\d+)?',
                            'trigger' => ['alsoRequiresAttr' => ['aspect-ratio-width']],
                        ],
                        [
                            'name' => 'aspect-ratio-width',
                            'disallowedValueRegex' => '^0+(\.0+)?$',
                            'valueRegex' => '\d+(\.\d+)?',
                            'trigger' => ['alsoRequiresAttr' => ['aspect-ratio-height']],
                        ],
                        ['name' => 'loop', 'value' => ['true', 'false']],
                    ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-inline-gallery/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'mandatoryAncestor' => 'AMP-INLINE-GALLERY',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-inline-gallery'],
                ]
            ),
            Extension::INSTAGRAM => new Tag(
                [
                'tagName' => Extension::INSTAGRAM,
                'attrs' => [['name' => 'alt'], ['name' => 'data-shortcode', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-instagram'],
                ]
            ),
            Extension::INSTALL_SERVICEWORKER => new Tag(
                [
                'tagName' => Extension::INSTALL_SERVICEWORKER,
                'attrs' => [
                        [
                            'name' => 'data-iframe-src',
                            'disallowedValueRegex' => '__amp_source_origin',
                            'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true],
                        ],
                        [
                            'name' => 'src',
                            'mandatory' => true,
                            'disallowedValueRegex' => '__amp_source_origin',
                            'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true],
                        ],
                    ],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-install-serviceworker'],
                ]
            ),
            Extension::IZLESENE => new Tag(
                [
                'tagName' => Extension::IZLESENE,
                'attrs' => [['name' => 'data-videoid', 'mandatory' => true, 'valueRegex' => '[0-9]+']],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-izlesene'],
                ]
            ),
            Extension::JWPLAYER => new Tag(
                [
                'tagName' => Extension::JWPLAYER,
                'attrs' => [
                        ['name' => 'autoplay', 'value' => ['']],
                        [
                            'name' => 'data-media-id',
                            'valueRegexCasei' => '[0-9a-z]{8}|outstream',
                            'mandatoryOneof' => '[\'data-media-id\', \'data-playlist-id\']',
                        ],
                        ['name' => 'data-player-id', 'mandatory' => true, 'valueRegexCasei' => '[0-9a-z]{8}'],
                        [
                            'name' => 'data-playlist-id',
                            'valueRegexCasei' => '[0-9a-z]{8}',
                            'mandatoryOneof' => '[\'data-media-id\', \'data-playlist-id\']',
                        ],
                        ['name' => 'dock', 'requiresExtension' => ['amp-video-docking']],
                    ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-jwplayer/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-jwplayer'],
                ]
            ),
            Extension::KALTURA_PLAYER => new Tag(
                [
                'tagName' => Extension::KALTURA_PLAYER,
                'attrs' => [['name' => 'data-partner', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-kaltura-player'],
                ]
            ),
            Extension::LAYOUT => new Tag(
                [
                'tagName' => Extension::LAYOUT,
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-layout/',
                'ampLayout' => [
                        'supportedLayouts' => [
                            'FILL',
                            'FIXED',
                            'FIXED_HEIGHT',
                            'FLEX_ITEM',
                            'INTRINSIC',
                            'NODISPLAY',
                            'RESPONSIVE',
                            'CONTAINER',
                        ],
                    ],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Extension::LIGHTBOX => new Tag(
                [
                'tagName' => Extension::LIGHTBOX,
                'attrs' => [
                        ['name' => 'animate-in', 'valueCasei' => ['fade-in', 'fly-in-bottom', 'fly-in-top']],
                        ['name' => 'controls'],
                        ['name' => 'from'],
                        ['name' => 'scrollable', 'disabledBy' => ['amp4email']],
                        ['name' => '[open]'],
                    ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP', 'AMP4EMAIL'],
                'requiresExtension' => ['amp-lightbox'],
                ]
            ),
            'amp-lightbox [AMP4ADS]' => new Tag(
                [
                'tagName' => Extension::LIGHTBOX,
                'specName' => 'amp-lightbox [AMP4ADS]',
                'attrs' => [
                        ['name' => 'animate-in', 'valueCasei' => ['fade-in', 'fly-in-bottom', 'fly-in-top']],
                        ['name' => 'close-button', 'mandatory' => true],
                        ['name' => 'controls'],
                        ['name' => 'from'],
                    ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP4ADS'],
                'requiresExtension' => ['amp-lightbox'],
                ]
            ),
            Extension::LINK_REWRITER => new Tag(
                [
                'tagName' => Extension::LINK_REWRITER,
                'unique' => true,
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'childTags' => ['mandatoryNumChildTags' => 1, 'firstChildTagNameOneof' => ['SCRIPT']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-link-rewriter'],
                ]
            ),
            'amp-link-rewriter extension .json script' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'amp-link-rewriter extension .json script',
                'mandatoryParent' => 'AMP-LINK-REWRITER',
                'attrs' => [
                        [
                            'name' => 'type',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                            'valueCasei' => ['application/json'],
                        ],
                    ],
                'attrLists' => ['nonce-attr'],
                'cdata' => ['disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']]],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-link-rewriter'],
                ]
            ),
            Extension::LIST_ => new Tag(
                [
                'tagName' => Extension::LIST_,
                'attrs' => [
                        [
                            'name' => 'auto-resize',
                            'value' => [''],
                            'deprecation' => 'replacement-to-be-determined-at-a-later-date',
                            'deprecationUrl' => 'https://github.com/ampproject/amphtml/issues/18849',
                        ],
                        ['name' => 'binding', 'value' => ['always', 'no', 'refresh']],
                        ['name' => 'credentials'],
                        ['name' => 'data-amp-bind-src', 'mandatoryAnyof' => '[\'src\',\'[src]\',\'data-amp-bind-src\']'],
                        ['name' => 'diffable', 'value' => ['']],
                        ['name' => 'items'],
                        ['name' => 'load-more', 'value' => ['auto', 'manual']],
                        ['name' => 'load-more-bookmark', 'trigger' => ['alsoRequiresAttr' => ['load-more']]],
                        ['name' => 'max-items'],
                        ['name' => 'reset-on-refresh', 'value' => ['', 'always', 'fetch']],
                        ['name' => 'single-item'],
                        [
                            'name' => 'src',
                            'disallowedValueRegex' => '__amp_source_origin',
                            'valueUrl' => ['protocol' => ['https', 'amp-state', 'amp-script'], 'allowRelative' => true],
                            'mandatoryAnyof' => '[\'src\',\'[src]\',\'data-amp-bind-src\']',
                        ],
                        ['name' => 'template', 'valueOneofSet' => 'TEMPLATE_IDS'],
                        ['name' => 'xssi-prefix'],
                        ['name' => '[is-layout-container]'],
                        ['name' => '[src]', 'mandatoryAnyof' => '[\'src\',\'[src]\',\'data-amp-bind-src\']'],
                    ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-list'],
                ]
            ),
            'AMP-LIST (AMP4EMAIL)' => new Tag(
                [
                'tagName' => Extension::LIST_,
                'specName' => 'AMP-LIST (AMP4EMAIL)',
                'attrs' => [
                        ['name' => 'binding', 'value' => ['always', 'no', 'refresh', 'refresh-evaluate']],
                        ['name' => 'diffable', 'value' => ['']],
                        ['name' => 'items'],
                        ['name' => 'max-items'],
                        ['name' => 'single-item'],
                        [
                            'name' => 'src',
                            'mandatory' => true,
                            'disallowedValueRegex' => '__amp_source_origin|{{|}}',
                            'valueUrl' => ['protocol' => ['https'], 'allowRelative' => false],
                        ],
                        ['name' => 'template', 'valueOneofSet' => 'TEMPLATE_IDS'],
                        ['name' => 'xssi-prefix'],
                        ['name' => '[is-layout-container]'],
                    ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['CONTAINER', 'FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'disallowedAncestor' => ['AMP-LIST', 'AMP-STATE', 'TEMPLATE'],
                'htmlFormat' => ['AMP4EMAIL'],
                'requiresExtension' => ['amp-list'],
                ]
            ),
            Extension::LIST_LOAD_MORE => new Tag(
                [
                'tagName' => Extension::LIST_LOAD_MORE,
                'mandatoryParent' => 'AMP-LIST',
                'attrs' => [
                        [
                            'name' => 'load-more-button',
                            'value' => [''],
                            'mandatoryOneof' => '[\'load-more-button\', \'load-more-failed\', \'load-more-end\', \'load-more-loading\']',
                        ],
                        [
                            'name' => 'load-more-failed',
                            'value' => [''],
                            'mandatoryOneof' => '[\'load-more-button\', \'load-more-failed\', \'load-more-end\', \'load-more-loading\']',
                        ],
                        [
                            'name' => 'load-more-loading',
                            'value' => [''],
                            'mandatoryOneof' => '[\'load-more-button\', \'load-more-failed\', \'load-more-end\', \'load-more-loading\']',
                        ],
                        [
                            'name' => 'load-more-end',
                            'value' => [''],
                            'mandatoryOneof' => '[\'load-more-button\', \'load-more-failed\', \'load-more-end\', \'load-more-loading\']',
                        ],
                    ],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-list'],
                ]
            ),
            'amp-list-load-more button[load-more-clickable]' => new Tag(
                [
                'tagName' => Element::BUTTON,
                'specName' => 'amp-list-load-more button[load-more-clickable]',
                'mandatoryParent' => 'AMP-LIST-LOAD-MORE',
                'attrs' => [
                        ['name' => 'disabled', 'value' => ['']],
                        ['name' => 'load-more-clickable', 'mandatory' => true, 'value' => [''], 'dispatchKey' => 'NAME_DISPATCH'],
                        ['name' => 'role', 'implicit' => true],
                        ['name' => 'tabindex', 'implicit' => true],
                        ['name' => 'type'],
                        ['name' => 'value'],
                    ],
                'attrLists' => ['name-attr'],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-list'],
                ]
            ),
            'AMP-LIST DIV [fetch-error]' => new Tag(
                [
                'tagName' => Element::DIV,
                'specName' => 'AMP-LIST DIV [fetch-error]',
                'attrs' => [['name' => 'align'], ['name' => 'fetch-error', 'mandatory' => true]],
                'mandatoryAncestor' => 'AMP-LIST',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Extension::LIVE_LIST => new Tag(
                [
                'tagName' => Extension::LIVE_LIST,
                'attrs' => [
                        ['name' => 'data-max-items-per-page', 'mandatory' => true, 'valueRegex' => '\d+'],
                        ['name' => 'data-poll-interval', 'valueRegex' => '\d{5,}'],
                        ['name' => 'disabled', 'value' => ['']],
                        ['name' => 'sort', 'value' => ['ascending']],
                    ],
                'attrLists' => ['mandatory-id-attr'],
                'ampLayout' => ['supportedLayouts' => ['CONTAINER', 'FIXED_HEIGHT']],
                'referencePoints' => [
                        ['tagSpecName' => 'AMP-LIVE-LIST [update]', 'mandatory' => true, 'unique' => true],
                        ['tagSpecName' => 'AMP-LIVE-LIST [items]', 'mandatory' => true, 'unique' => true],
                        ['tagSpecName' => 'AMP-LIVE-LIST [pagination]', 'unique' => true],
                    ],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-live-list'],
                ]
            ),
            'AMP-LIVE-LIST [items]' => new Tag(
                [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-LIVE-LIST [items]',
                'attrs' => [['name' => 'items', 'mandatory' => true]],
                'specUrl' => 'https://amp.dev/documentation/components/amp-live-list/#items',
                'referencePoints' => [['tagSpecName' => 'AMP-LIVE-LIST [items] item']],
                'htmlFormat' => ['AMP'],
                'descriptiveName' => 'amp-live-list [items]',
                ]
            ),
            'AMP-LIVE-LIST [items] item' => new Tag(
                [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-LIVE-LIST [items] item',
                'attrs' => [['name' => 'data-sort-time', 'mandatory' => true], ['name' => 'data-tombstone'], ['name' => 'data-update-time']],
                'attrLists' => ['mandatory-id-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-live-list/#items',
                'htmlFormat' => ['AMP'],
                'descriptiveName' => 'amp-live-list [items] item',
                ]
            ),
            'AMP-LIVE-LIST [pagination]' => new Tag(
                [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-LIVE-LIST [pagination]',
                'attrs' => [['name' => 'pagination', 'mandatory' => true]],
                'specUrl' => 'https://amp.dev/documentation/components/amp-live-list/#pagination',
                'htmlFormat' => ['AMP'],
                'descriptiveName' => 'amp-live-list [pagination]',
                ]
            ),
            'AMP-LIVE-LIST [update]' => new Tag(
                [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-LIVE-LIST [update]',
                'attrs' => [['name' => 'update', 'mandatory' => true]],
                'specUrl' => 'https://amp.dev/documentation/components/amp-live-list/#update',
                'htmlFormat' => ['AMP'],
                'descriptiveName' => 'amp-live-list [update]',
                ]
            ),
            Extension::MATHML => new Tag(
                [
                'tagName' => Extension::MATHML,
                'attrs' => [['name' => 'data-formula', 'mandatory' => true], ['name' => 'inline']],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['CONTAINER']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-mathml'],
                ]
            ),
            Extension::MEGA_MENU => new Tag(
                [
                'tagName' => Extension::MEGA_MENU,
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-mega-menu/',
                'ampLayout' => ['supportedLayouts' => ['FIXED_HEIGHT']],
                'childTags' => ['mandatoryNumChildTags' => 1, 'childTagNameOneof' => ['NAV', 'AMP-LIST']],
                'referencePoints' => [['tagSpecName' => 'AMP-MEGA-MENU > AMP-LIST'], ['tagSpecName' => 'AMP-MEGA-MENU > NAV']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-mega-menu'],
                'descendantTagList' => 'amp-mega-menu-allowed-descendants',
                ]
            ),
            'AMP-MEGA-MENU > AMP-LIST' => new Tag(
                [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-MEGA-MENU > AMP-LIST',
                'attrs' => [
                        ['name' => 'src', 'mandatoryAnyof' => '[\'src\',\'[src]\']'],
                        ['name' => '[src]', 'mandatoryAnyof' => '[\'src\',\'[src]\']'],
                    ],
                'childTags' => ['mandatoryNumChildTags' => 1, 'childTagNameOneof' => ['TEMPLATE']],
                'referencePoints' => [['tagSpecName' => 'AMP-MEGA-MENU > AMP-LIST > TEMPLATE']],
                'htmlFormat' => ['AMP'],
                'descriptiveName' => 'amp-mega-menu > amp-list',
                ]
            ),
            'AMP-MEGA-MENU > AMP-LIST > TEMPLATE' => new Tag(
                [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-MEGA-MENU > AMP-LIST > TEMPLATE',
                'mandatoryParent' => 'AMP-LIST',
                'childTags' => ['mandatoryNumChildTags' => 1, 'childTagNameOneof' => ['NAV']],
                'referencePoints' => [['tagSpecName' => 'AMP-MEGA-MENU > NAV']],
                'htmlFormat' => ['AMP'],
                'descriptiveName' => 'amp-mega-menu > amp-list > template',
                ]
            ),
            'AMP-MEGA-MENU > NAV' => new Tag(
                [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-MEGA-MENU > NAV',
                'childTags' => ['mandatoryNumChildTags' => 1, 'childTagNameOneof' => ['OL', 'UL']],
                'referencePoints' => [['tagSpecName' => 'AMP-MEGA-MENU NAV > UL/OL']],
                'htmlFormat' => ['AMP'],
                'siblingsDisallowed' => true,
                'descriptiveName' => 'amp-mega-menu > nav',
                ]
            ),
            'AMP-MEGA-MENU item-content' => new Tag(
                [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-MEGA-MENU item-content',
                'attrs' => [['name' => 'role', 'mandatory' => true, 'value' => ['dialog']]],
                'htmlFormat' => ['AMP'],
                'descriptiveName' => 'amp-mega-menu item-content',
                ]
            ),
            'AMP-MEGA-MENU item-heading' => new Tag(
                [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-MEGA-MENU item-heading',
                'attrs' => [['name' => 'role', 'value' => ['button']]],
                'htmlFormat' => ['AMP'],
                'descriptiveName' => 'amp-mega-menu item-heading',
                ]
            ),
            'AMP-MEGA-MENU NAV > UL/OL' => new Tag(
                [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-MEGA-MENU NAV > UL/OL',
                'mandatoryParent' => 'NAV',
                'childTags' => ['childTagNameOneof' => ['LI'], 'mandatoryMinNumChildTags' => 1],
                'referencePoints' => [['tagSpecName' => 'AMP-MEGA-MENU NAV > UL/OL > LI']],
                'htmlFormat' => ['AMP'],
                'descriptiveName' => 'amp-mega-menu nav > ul/ol',
                ]
            ),
            'AMP-MEGA-MENU NAV > UL/OL > LI' => new Tag(
                [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-MEGA-MENU NAV > UL/OL > LI',
                'childTags' => [
                        'childTagNameOneof' => ['A', 'BUTTON', 'DIV', 'H1', 'H2', 'H3', 'H4', 'H5', 'H6', 'SPAN'],
                        'mandatoryMinNumChildTags' => 1,
                    ],
                'referencePoints' => [
                        ['tagSpecName' => 'AMP-MEGA-MENU item-content', 'unique' => true],
                        ['tagSpecName' => 'AMP-MEGA-MENU item-heading', 'mandatory' => true, 'unique' => true],
                    ],
                'htmlFormat' => ['AMP'],
                'descriptiveName' => 'amp-mega-menu nav > ul/ol > li',
                ]
            ),
            'amp-megaphone [data-episode]' => new Tag(
                [
                'tagName' => Extension::MEGAPHONE,
                'specName' => 'amp-megaphone [data-episode]',
                'attrs' => [
                        ['name' => 'data-episode', 'mandatory' => true, 'dispatchKey' => 'NAME_DISPATCH', 'valueRegex' => '[A-Za-z0-9]+'],
                        ['name' => 'data-start', 'valueRegex' => '\d+(\.\d+)?'],
                        ['name' => 'data-tile', 'value' => ['']],
                    ],
                'attrLists' => ['amp-megaphone-common', 'extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FIXED', 'FIXED_HEIGHT']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-megaphone'],
                ]
            ),
            'amp-megaphone [data-playlist]' => new Tag(
                [
                'tagName' => Extension::MEGAPHONE,
                'specName' => 'amp-megaphone [data-playlist]',
                'attrs' => [
                        ['name' => 'data-playlist', 'mandatory' => true, 'dispatchKey' => 'NAME_DISPATCH', 'valueRegex' => '[A-Za-z0-9]+'],
                        ['name' => 'data-episodes', 'valueRegex' => '[0-9]+'],
                    ],
                'attrLists' => ['amp-megaphone-common', 'extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FIXED', 'FIXED_HEIGHT']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-megaphone'],
                ]
            ),
            Extension::MINUTE_MEDIA_PLAYER => new Tag(
                [
                'tagName' => Extension::MINUTE_MEDIA_PLAYER,
                'attrs' => [
                        ['name' => 'autoplay'],
                        ['name' => 'data-content-id'],
                        ['name' => 'data-content-type', 'mandatory' => true, 'value' => ['curated', 'semantic', 'specific']],
                        ['name' => 'data-minimum-date-factor'],
                        ['name' => 'data-scanned-element'],
                        ['name' => 'data-scanned-element-type', 'value' => ['className', 'id', 'tag']],
                        ['name' => 'data-scoped-keywords'],
                        ['name' => 'data-tags'],
                        ['name' => 'dock', 'requiresExtension' => ['amp-video-docking']],
                    ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-minute-media-player/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-minute-media-player'],
                ]
            ),
            Extension::MOWPLAYER => new Tag(
                [
                'tagName' => Extension::MOWPLAYER,
                'attrs' => [['name' => 'autoplay'], ['name' => 'data-mediaid', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-mowplayer'],
                ]
            ),
            Extension::NESTED_MENU => new Tag(
                [
                'tagName' => Extension::NESTED_MENU,
                'attrs' => [['name' => 'side', 'value' => ['left', 'right']]],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-nested-menu/',
                'ampLayout' => ['supportedLayouts' => ['FILL']],
                'mandatoryAncestor' => 'AMP-SIDEBAR',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-sidebar'],
                'descendantTagList' => 'amp-nested-menu-allowed-descendants',
                ]
            ),
            'AMP-NEXT-PAGE > SCRIPT[type=application/json]' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'AMP-NEXT-PAGE > SCRIPT[type=application/json]',
                'mandatoryParent' => 'AMP-NEXT-PAGE',
                'attrs' => [
                        [
                            'name' => 'type',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                            'valueCasei' => ['application/json'],
                        ],
                    ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-next-page/',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-next-page'],
                ]
            ),
            'AMP-NEXT-PAGE > [footer]' => new Tag(
                [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-NEXT-PAGE > [footer]',
                'mandatoryParent' => 'AMP-NEXT-PAGE',
                'attrs' => [['name' => 'footer', 'mandatory' => true]],
                'htmlFormat' => ['AMP'],
                ]
            ),
            'AMP-NEXT-PAGE > [recommendation-box]' => new Tag(
                [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-NEXT-PAGE > [recommendation-box]',
                'mandatoryParent' => 'AMP-NEXT-PAGE',
                'attrs' => [['name' => 'recommendation-box', 'mandatory' => true]],
                'htmlFormat' => ['AMP'],
                ]
            ),
            'AMP-NEXT-PAGE > [separator]' => new Tag(
                [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-NEXT-PAGE > [separator]',
                'mandatoryParent' => 'AMP-NEXT-PAGE',
                'attrs' => [['name' => 'separator', 'mandatory' => true]],
                'htmlFormat' => ['AMP'],
                ]
            ),
            'amp-next-page with inline config' => new Tag(
                [
                'tagName' => Extension::NEXT_PAGE,
                'specName' => 'amp-next-page with inline config',
                'unique' => true,
                'attrs' => [['name' => 'deep-parsing'], ['name' => 'max-pages']],
                'specUrl' => 'https://amp.dev/documentation/components/amp-next-page/',
                'referencePoints' => [
                        ['tagSpecName' => 'AMP-NEXT-PAGE > [separator]', 'unique' => true],
                        ['tagSpecName' => 'AMP-NEXT-PAGE > [recommendation-box]', 'unique' => true],
                        ['tagSpecName' => 'AMP-NEXT-PAGE > [footer]', 'unique' => true],
                        ['tagSpecName' => 'AMP-NEXT-PAGE > SCRIPT[type=application/json]', 'mandatory' => true, 'unique' => true],
                    ],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-next-page'],
                ]
            ),
            'amp-next-page with src attribute' => new Tag(
                [
                'tagName' => Extension::NEXT_PAGE,
                'specName' => 'amp-next-page with src attribute',
                'unique' => true,
                'attrs' => [
                        ['name' => 'deep-parsing'],
                        ['name' => 'max-pages'],
                        [
                            'name' => 'src',
                            'mandatory' => true,
                            'disallowedValueRegex' => '__amp_source_origin',
                            'valueUrl' => ['protocol' => ['https'], 'allowRelative' => false],
                        ],
                        ['name' => 'xssi-prefix'],
                    ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-next-page/',
                'referencePoints' => [
                        ['tagSpecName' => 'AMP-NEXT-PAGE > [separator]', 'unique' => true],
                        ['tagSpecName' => 'AMP-NEXT-PAGE > [recommendation-box]', 'unique' => true],
                        ['tagSpecName' => 'AMP-NEXT-PAGE > [footer]', 'unique' => true],
                        ['tagSpecName' => 'AMP-NEXT-PAGE > SCRIPT[type=application/json]', 'unique' => true],
                    ],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-next-page'],
                ]
            ),
            'amp-next-page [type=adsense]' => new Tag(
                [
                'tagName' => Extension::NEXT_PAGE,
                'specName' => 'amp-next-page [type=adsense]',
                'unique' => true,
                'attrs' => [
                        ['name' => 'data-client', 'mandatory' => true],
                        ['name' => 'data-slot', 'mandatory' => true],
                        ['name' => 'deep-parsing'],
                        ['name' => 'max-pages'],
                        ['name' => 'type', 'mandatory' => true, 'value' => ['adsense']],
                    ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-next-page/',
                'referencePoints' => [
                        ['tagSpecName' => 'AMP-NEXT-PAGE > [separator]', 'unique' => true],
                        ['tagSpecName' => 'AMP-NEXT-PAGE > [recommendation-box]', 'unique' => true],
                        ['tagSpecName' => 'AMP-NEXT-PAGE > [footer]', 'unique' => true],
                        ['tagSpecName' => 'AMP-NEXT-PAGE > SCRIPT[type=application/json]', 'unique' => true],
                    ],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-next-page'],
                ]
            ),
            Extension::NEXXTV_PLAYER => new Tag(
                [
                'tagName' => Extension::NEXXTV_PLAYER,
                'attrs' => [
                        ['name' => 'data-client', 'mandatory' => true],
                        ['name' => 'data-mediaid', 'mandatory' => true, 'valueRegex' => '[^=/?:]+'],
                        ['name' => 'data-mode', 'value' => ['api', 'static']],
                        ['name' => 'data-origin', 'valueUrl' => ['protocol' => ['https', 'http'], 'allowEmpty' => true]],
                        ['name' => 'data-streamtype', 'value' => ['album', 'audio', 'live', 'playlist', 'playlist-marked', 'video']],
                    ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-nexxtv-player'],
                ]
            ),
            Extension::O2_PLAYER => new Tag(
                [
                'tagName' => Extension::O2_PLAYER,
                'attrs' => [['name' => 'data-bcid', 'mandatory' => true], ['name' => 'data-pid', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-o2-player'],
                ]
            ),
            Extension::ONETAP_GOOGLE => new Tag(
                [
                'tagName' => Extension::ONETAP_GOOGLE,
                'unique' => true,
                'attrs' => [['name' => 'data-src', 'mandatory' => true, 'valueUrl' => ['protocol' => ['https']]]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-onetap-google'],
                ]
            ),
            Extension::OOYALA_PLAYER => new Tag(
                [
                'tagName' => Extension::OOYALA_PLAYER,
                'attrs' => [
                        ['name' => 'data-embedcode', 'mandatory' => true],
                        ['name' => 'data-pcode', 'mandatory' => true],
                        ['name' => 'data-playerid', 'mandatory' => true],
                    ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FLEX_ITEM', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-ooyala-player'],
                ]
            ),
            Extension::ORIENTATION_OBSERVER => new Tag(
                [
                'tagName' => Extension::ORIENTATION_OBSERVER,
                'attrs' => [
                        ['name' => 'alpha-range', 'valueRegex' => '(\d+)\s{1}(\d+)'],
                        ['name' => 'beta-range', 'valueRegex' => '(\d+)\s{1}(\d+)'],
                        ['name' => 'gamma-range', 'valueRegex' => '(\d+)\s{1}(\d+)'],
                        ['name' => 'smoothing', 'valueRegex' => '[0-9]+|'],
                    ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-orientation-observer'],
                ]
            ),
            Extension::PAN_ZOOM => new Tag(
                [
                'tagName' => Extension::PAN_ZOOM,
                'attrs' => [
                        ['name' => 'disable-double-tap', 'value' => ['']],
                        ['name' => 'initial-scale', 'valueRegex' => '[0-9]+(\.[0-9]+)?'],
                        ['name' => 'initial-x', 'valueRegex' => '[0-9]+'],
                        ['name' => 'initial-y', 'valueRegex' => '[0-9]+'],
                        ['name' => 'max-scale', 'valueRegex' => '[0-9]+(\.[0-9]+)?'],
                        ['name' => 'reset-on-resize', 'value' => ['']],
                    ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-pan-zoom'],
                ]
            ),
            Extension::PINTEREST => new Tag(
                [
                'tagName' => Extension::PINTEREST,
                'attrs' => [['name' => 'alt'], ['name' => 'data-do', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-pinterest/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-pinterest'],
                ]
            ),
            Extension::PIXEL => new Tag(
                [
                'tagName' => Extension::PIXEL,
                'attrs' => [
                        ['name' => 'allow-ssr-img'],
                        ['name' => 'referrerpolicy', 'value' => ['no-referrer']],
                        [
                            'name' => 'src',
                            'mandatory' => true,
                            'disallowedValueRegex' => '__amp_source_origin',
                            'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true, 'allowEmpty' => true],
                        ],
                    ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-pixel/',
                'ampLayout' => ['supportedLayouts' => ['FIXED', 'NODISPLAY'], 'definesDefaultWidth' => true, 'definesDefaultHeight' => true],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Extension::PLAYBUZZ => new Tag(
                [
                'tagName' => Extension::PLAYBUZZ,
                'attrs' => [
                        ['name' => 'data-comments', 'valueCasei' => ['false', 'true']],
                        ['name' => 'data-item', 'mandatoryOneof' => '[\'data-item\', \'src\']'],
                        ['name' => 'data-item-info', 'valueCasei' => ['false', 'true']],
                        ['name' => 'data-share-buttons', 'valueCasei' => ['false', 'true']],
                        ['name' => 'src', 'mandatoryOneof' => '[\'data-item\', \'src\']'],
                    ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['RESPONSIVE', 'FIXED_HEIGHT']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-playbuzz'],
                ]
            ),
            Extension::POSITION_OBSERVER => new Tag(
                [
                'tagName' => Extension::POSITION_OBSERVER,
                'attrs' => [
                        ['name' => 'intersection-ratios', 'valueRegex' => '^([0]*?\.\d*$|1$|0$)|([0]*?\.\d*|1|0)\s{1}([0]*?\.\d*$|1$|0$)'],
                        ['name' => 'once', 'value' => ['']],
                        ['name' => 'target'],
                        [
                            'name' => 'viewport-margins',
                            'valueRegex' => '^(\d+$|\d+px$|\d+vh$)|((\d+|\d+px|\d+vh)\s{1}(\d+$|\d+px$|\d+vh$))',
                        ],
                    ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'requiresExtension' => ['amp-position-observer'],
                ]
            ),
            Extension::POWR_PLAYER => new Tag(
                [
                'tagName' => Extension::POWR_PLAYER,
                'attrs' => [
                        ['name' => 'autoplay'],
                        ['name' => 'data-account', 'mandatory' => true, 'valueRegex' => '[0-9a-zA-Z-]+'],
                        ['name' => 'data-player', 'mandatory' => true, 'valueRegex' => '[0-9a-zA-Z-]+'],
                        ['name' => '[data-referrer]'],
                        ['name' => 'data-terms', 'mandatoryOneof' => '[\'data-video\', \'data-terms\']'],
                        ['name' => 'data-video', 'mandatoryOneof' => '[\'data-video\', \'data-terms\']', 'valueRegex' => '[0-9a-zA-Z-]+'],
                    ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-powr-player/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-powr-player'],
                ]
            ),
            Extension::REACH_PLAYER => new Tag(
                [
                'tagName' => Extension::REACH_PLAYER,
                'attrs' => [['name' => 'data-embed-id', 'mandatory' => true, 'valueRegex' => '[0-9a-z-]+']],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-reach-player'],
                ]
            ),
            Extension::RECAPTCHA_INPUT => new Tag(
                [
                'tagName' => Extension::RECAPTCHA_INPUT,
                'attrs' => [['name' => 'data-sitekey', 'mandatory' => true], ['name' => 'data-action', 'mandatory' => true]],
                'attrLists' => ['mandatory-name-attr'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'mandatoryAncestor' => 'FORM',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-form', 'amp-recaptcha-input'],
                ]
            ),
            Extension::REDBULL_PLAYER => new Tag(
                [
                'tagName' => Extension::REDBULL_PLAYER,
                'attrs' => [['name' => 'data-param-videoid', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FIXED', 'FIXED_HEIGHT', 'RESPONSIVE', 'FILL', 'FLEX_ITEM', 'FLUID', 'INTRINSIC']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-redbull-player'],
                ]
            ),
            Extension::REDDIT => new Tag(
                [
                'tagName' => Extension::REDDIT,
                'attrs' => [
                        ['name' => 'data-embedlive', 'valueCasei' => ['false', 'true']],
                        ['name' => 'data-embedparent', 'valueCasei' => ['false', 'true']],
                        ['name' => 'data-embedtype', 'mandatory' => true, 'valueCasei' => ['comment', 'post']],
                        ['name' => 'data-src', 'mandatory' => true],
                    ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-reddit'],
                ]
            ),
            Extension::RIDDLE_QUIZ => new Tag(
                [
                'tagName' => Extension::RIDDLE_QUIZ,
                'attrs' => [['name' => 'data-riddle-id', 'mandatory' => true, 'valueRegex' => '[0-9]+']],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-riddle-quiz/',
                'ampLayout' => ['supportedLayouts' => ['RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-riddle-quiz'],
                ]
            ),
            Extension::SCRIPT => new Tag(
                [
                'tagName' => Extension::SCRIPT,
                'attrs' => [
                        ['name' => 'data-ampdevmode', 'value' => ['false'], 'disallowedValueRegex' => 'false'],
                        ['name' => 'max-age', 'valueRegex' => '[0-9]+', 'trigger' => ['alsoRequiresAttr' => ['script']]],
                        ['name' => 'nodom', 'value' => ['']],
                        ['name' => 'sandbox'],
                        ['name' => 'script', 'mandatoryOneof' => '[\'script\', \'src\']', 'valueOneofSet' => 'AMP_SCRIPT_IDS'],
                        [
                            'name' => 'src',
                            'disallowedValueRegex' => '__amp_source_origin',
                            'mandatoryOneof' => '[\'script\', \'src\']',
                            'valueUrl' => ['protocol' => ['https'], 'allowRelative' => false],
                        ],
                    ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => [
                        'supportedLayouts' => [
                            'CONTAINER',
                            'FILL',
                            'FIXED',
                            'FIXED_HEIGHT',
                            'FLEX_ITEM',
                            'INTRINSIC',
                            'NODISPLAY',
                            'RESPONSIVE',
                        ],
                    ],
                'disallowedAncestor' => ['AMP-SCRIPT'],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-script'],
                ]
            ),
            'amp-script extension local script' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'amp-script extension local script',
                'attrs' => [
                        [
                            'name' => 'id',
                            'mandatory' => true,
                            'disallowedValueRegex' => '(^|\s)(__amp_\S*|__count__|__defineGetter__|__defineSetter__|__lookupGetter__|__lookupSetter__|__noSuchMethod__|__parent__|__proto__|__AMP_\S*|\$p|\$proxy|acceptCharset|addEventListener|appendChild|assignedSlot|attachShadow|AMP|baseURI|checkValidity|childElementCount|childNodes|classList|className|clientHeight|clientLeft|clientTop|clientWidth|compareDocumentPosition|computedName|computedRole|contentEditable|createShadowRoot|enqueAction|firstChild|firstElementChild|getAnimations|getAttribute|getAttributeNS|getAttributeNode|getAttributeNodeNS|getBoundingClientRect|getClientRects|getDestinationInsertionPoints|getElementsByClassName|getElementsByTagName|getElementsByTagNameNS|getRootNode|hasAttribute|hasAttributeNS|hasAttributes|hasChildNodes|hasPointerCapture|i-amphtml-\S*|innerHTML|innerText|inputMode|insertAdjacentElement|insertAdjacentHTML|insertAdjacentText|isContentEditable|isDefaultNamespace|isEqualNode|isSameNode|lastChild|lastElementChild|lookupNamespaceURI|namespaceURI|nextElementSibling|nextSibling|nodeName|nodeType|nodeValue|offsetHeight|offsetLeft|offsetParent|offsetTop|offsetWidth|outerHTML|outerText|ownerDocument|parentElement|parentNode|previousElementSibling|previousSibling|querySelector|querySelectorAll|releasePointerCapture|removeAttribute|removeAttributeNS|removeAttributeNode|removeChild|removeEventListener|replaceChild|reportValidity|requestPointerLock|scrollHeight|scrollIntoView|scrollIntoViewIfNeeded|scrollLeft|scrollWidth|setAttribute|setAttributeNS|setAttributeNode|setAttributeNodeNS|setPointerCapture|shadowRoot|styleMap|tabIndex|tagName|textContent|toString|valueOf|(webkit|ms|moz|o)dropzone|(webkit|moz|ms|o)MatchesSelector|(webkit|moz|ms|o)RequestFullScreen|(webkit|moz|ms|o)RequestFullscreen)(\s|$)',
                            'addValueToSet' => 'AMP_SCRIPT_IDS',
                        ],
                        ['name' => 'target', 'mandatory' => true, 'value' => ['amp-script'], 'dispatchKey' => 'NAME_VALUE_DISPATCH'],
                        ['name' => 'type', 'mandatory' => true, 'valueCasei' => ['text/plain']],
                    ],
                'attrLists' => ['mandatory-id-attr', 'nonce-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-script/',
                'cdata' => [
                        'maxBytes' => 10000,
                        'maxBytesSpecUrl' => 'https://amp.dev/documentation/components/amp-script/#faq',
                        'disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']],
                    ],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-script'],
                ]
            ),
            Extension::SELECTOR => new Tag(
                [
                'tagName' => Extension::SELECTOR,
                'attrs' => [
                        ['name' => 'disabled', 'value' => ['']],
                        ['name' => 'form'],
                        ['name' => 'keyboard-select-mode', 'valueCasei' => ['focus', 'none', 'select']],
                        ['name' => 'multiple', 'value' => ['']],
                        ['name' => '[disabled]'],
                        ['name' => '[selected]'],
                    ],
                'attrLists' => ['extended-amp-global', 'name-attr'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'NODISPLAY', 'RESPONSIVE', 'CONTAINER']],
                'disallowedAncestor' => ['AMP-SELECTOR'],
                'referencePoints' => [['tagSpecName' => 'AMP-SELECTOR option'], ['tagSpecName' => 'AMP-SELECTOR child']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                'requiresExtension' => ['amp-selector'],
                ]
            ),
            'AMP-SELECTOR child' => new Tag(
                [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-SELECTOR child',
                'referencePoints' => [['tagSpecName' => 'AMP-SELECTOR option'], ['tagSpecName' => 'AMP-SELECTOR child']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            'AMP-SELECTOR option' => new Tag(
                [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-SELECTOR option',
                'attrs' => [
                        ['name' => 'disabled', 'value' => ['']],
                        ['name' => 'option', 'mandatory' => true],
                        ['name' => 'selected', 'value' => ['']],
                    ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-selector/',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            'amp-sidebar' => new Tag(
                [
                'tagName' => Extension::SIDEBAR,
                'specName' => 'amp-sidebar',
                'attrs' => [['name' => 'side', 'value' => ['left', 'right']]],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-sidebar/',
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'disallowedAncestor' => ['AMP-STORY'],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-sidebar'],
                'markDescendants' => ['marker' => ['AUTOSCROLL']],
                ]
            ),
            'amp-sidebar (AMP4EMAIL)' => new Tag(
                [
                'tagName' => Extension::SIDEBAR,
                'specName' => 'amp-sidebar (AMP4EMAIL)',
                'attrs' => [['name' => 'side', 'value' => ['left', 'right']]],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-sidebar/',
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP4EMAIL'],
                'requiresExtension' => ['amp-sidebar'],
                ]
            ),
            'amp-sidebar > nav' => new Tag(
                [
                'tagName' => Element::NAV,
                'specName' => 'amp-sidebar > nav',
                'mandatoryParent' => 'AMP-SIDEBAR',
                'attrs' => [
                        ['name' => 'toolbar', 'mandatory' => true, 'dispatchKey' => 'NAME_DISPATCH'],
                        ['name' => 'toolbar-target', 'mandatory' => true],
                    ],
                'childTags' => ['mandatoryNumChildTags' => 1, 'childTagNameOneof' => ['OL', 'UL']],
                'htmlFormat' => ['AMP', 'AMP4EMAIL'],
                ]
            ),
            Extension::SKIMLINKS => new Tag(
                [
                'tagName' => Extension::SKIMLINKS,
                'attrs' => [
                        ['name' => 'custom-redirect-domain'],
                        ['name' => 'custom-tracking-id', 'valueRegexCasei' => '^.{0,50}$'],
                        ['name' => 'excluded-domains'],
                        ['name' => 'link-selector'],
                        ['name' => 'publisher-code', 'mandatory' => true, 'valueRegexCasei' => '^[0-9]+X[0-9]+$'],
                        ['name' => 'tracking', 'value' => ['false', 'true']],
                    ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-skimlinks'],
                ]
            ),
            Extension::SMARTLINKS => new Tag(
                [
                'tagName' => Extension::SMARTLINKS,
                'attrs' => [
                        ['name' => 'exclusive-links', 'value' => ['']],
                        ['name' => 'link-attribute'],
                        ['name' => 'link-selector'],
                        ['name' => 'linkmate', 'value' => ['']],
                        ['name' => 'nrtv-account-name', 'mandatory' => true],
                    ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-smartlinks'],
                ]
            ),
            Extension::SOCIAL_SHARE => new Tag(
                [
                'tagName' => Extension::SOCIAL_SHARE,
                'attrs' => [
                        [
                            'name' => 'data-share-endpoint',
                            'disallowedValueRegex' => '__amp_source_origin',
                            'valueUrl' => [
                                'protocol' => [
                                    'ftp',
                                    'http',
                                    'https',
                                    'mailto',
                                    'bbmi',
                                    'fb-me',
                                    'fb-messenger',
                                    'intent',
                                    'line',
                                    'skype',
                                    'sms',
                                    'snapchat',
                                    'tel',
                                    'tg',
                                    'threema',
                                    'viber',
                                    'wh',
                                    'whatsapp',
                                ],
                                'allowRelative' => false,
                            ],
                        ],
                        ['name' => 'type', 'mandatory' => true],
                    ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['CONTAINER', 'FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'requiresExtension' => ['amp-social-share'],
                ]
            ),
            Extension::SOUNDCLOUD => new Tag(
                [
                'tagName' => Extension::SOUNDCLOUD,
                'attrs' => [
                        ['name' => 'data-color', 'valueRegexCasei' => '([0-9a-f]{3}){1,2}'],
                        [
                            'name' => 'data-playlistid',
                            'mandatoryOneof' => '[\'data-trackid\', \'data-playlistid\']',
                            'valueRegex' => '[0-9]+',
                        ],
                        ['name' => 'data-secret-token', 'valueRegex' => '[A-Za-z0-9_-]+'],
                        ['name' => 'data-trackid', 'mandatoryOneof' => '[\'data-trackid\', \'data-playlistid\']', 'valueRegex' => '[0-9]+'],
                        ['name' => 'data-visual', 'valueCasei' => ['false', 'true']],
                    ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-soundcloud'],
                ]
            ),
            Extension::SPRINGBOARD_PLAYER => new Tag(
                [
                'tagName' => Extension::SPRINGBOARD_PLAYER,
                'attrs' => [
                        ['name' => 'data-content-id', 'mandatory' => true],
                        ['name' => 'data-domain', 'mandatory' => true],
                        ['name' => 'data-items', 'mandatory' => true],
                        ['name' => 'data-mode', 'mandatory' => true, 'valueCasei' => ['playlist', 'video']],
                        ['name' => 'data-player-id', 'mandatory' => true, 'valueRegexCasei' => '[a-z0-9]+'],
                        ['name' => 'data-site-id', 'mandatory' => true, 'valueRegex' => '[0-9]+'],
                    ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FLEX_ITEM', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-springboard-player'],
                ]
            ),
            'amp-state' => new Tag(
                [
                'tagName' => Extension::STATE,
                'specName' => 'amp-state',
                'attrs' => [
                        ['name' => 'credentials'],
                        ['name' => 'overridable'],
                        [
                            'name' => 'src',
                            'disallowedValueRegex' => '__amp_source_origin',
                            'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true],
                        ],
                        ['name' => '[src]'],
                    ],
                'attrLists' => ['mandatory-id-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-bind/',
                'childTags' => ['firstChildTagNameOneof' => ['SCRIPT']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-bind'],
                ]
            ),
            'amp-state (AMP4EMAIL)' => new Tag(
                [
                'tagName' => Extension::STATE,
                'specName' => 'amp-state (AMP4EMAIL)',
                'attrLists' => ['mandatory-id-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-bind/',
                'disallowedAncestor' => ['AMP-LIST', 'AMP-STATE', 'TEMPLATE'],
                'childTags' => ['firstChildTagNameOneof' => ['SCRIPT']],
                'htmlFormat' => ['AMP4ADS', 'AMP4EMAIL'],
                'requiresExtension' => ['amp-bind'],
                ]
            ),
            Extension::STICKY_AD => new Tag(
                [
                'tagName' => Extension::STICKY_AD,
                'unique' => true,
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'disallowedAncestor' => ['AMP-APP-BANNER'],
                'childTags' => ['mandatoryNumChildTags' => 1, 'firstChildTagNameOneof' => ['AMP-AD']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-sticky-ad'],
                ]
            ),
            Extension::STORY => new Tag(
                [
                'tagName' => Extension::STORY,
                'mandatoryParent' => 'BODY',
                'attrs' => [
                        ['name' => 'background-audio', 'valueUrl' => ['protocol' => ['http', 'https']]],
                        ['name' => 'entity'],
                        ['name' => 'entity-logo-src', 'valueUrl' => ['protocol' => ['http', 'https']]],
                        ['name' => 'entity-url', 'valueUrl' => ['protocol' => ['http', 'https']]],
                        ['name' => 'poster-landscape-src', 'valueUrl' => ['protocol' => ['http', 'https']]],
                        ['name' => 'poster-portrait-src', 'mandatory' => true, 'valueUrl' => ['protocol' => ['http', 'https']]],
                        ['name' => 'poster-square-src', 'valueUrl' => ['protocol' => ['http', 'https']]],
                        ['name' => 'publisher', 'mandatory' => true],
                        ['name' => 'publisher-logo-src', 'mandatory' => true, 'valueUrl' => ['protocol' => ['http', 'https']]],
                        ['name' => 'standalone', 'mandatory' => true, 'value' => ['']],
                        ['name' => 'supports-landscape', 'value' => ['']],
                        ['name' => 'title', 'mandatory' => true],
                        ['name' => 'live-story', 'value' => ['']],
                        ['name' => 'live-story-disabled', 'value' => ['']],
                    ],
                'childTags' => [
                        'childTagNameOneof' => [
                            'AMP-ANALYTICS',
                            'AMP-CONSENT',
                            'AMP-GEO',
                            'AMP-PIXEL',
                            'AMP-SIDEBAR',
                            'AMP-STORY-AUTO-ADS',
                            'AMP-STORY-BOOKEND',
                            'AMP-STORY-PAGE',
                        ],
                        'mandatoryMinNumChildTags' => 1,
                    ],
                'htmlFormat' => ['AMP'],
                'requires' => ['amp-story-page'],
                'requiresExtension' => ['amp-story'],
                'siblingsDisallowed' => true,
                ]
            ),
            Extension::STORY_360 => new Tag(
                [
                'tagName' => Extension::STORY_360,
                'attrs' => [
                        ['name' => 'controls', 'value' => ['gyroscope']],
                        ['name' => 'duration', 'valueRegex' => '([0-9\.]+)\s*(s|ms)'],
                        ['name' => 'heading-end', 'valueRegex' => '-?\d+\.?\d*', 'trigger' => ['alsoRequiresAttr' => ['duration']]],
                        ['name' => 'heading-start', 'valueRegex' => '-?\d+\.?\d*'],
                        ['name' => 'pitch-end', 'valueRegex' => '-?\d+\.?\d*', 'trigger' => ['alsoRequiresAttr' => ['duration']]],
                        ['name' => 'pitch-start', 'valueRegex' => '-?\d+\.?\d*'],
                        ['name' => 'scene-heading', 'valueRegex' => '-?\d+\.?\d*'],
                        ['name' => 'scene-pitch', 'valueRegex' => '-?\d+\.?\d*'],
                        ['name' => 'scene-roll', 'valueRegex' => '-?\d+\.?\d*'],
                        ['name' => 'zoom-end', 'valueRegex' => '\d+\.?\d*', 'trigger' => ['alsoRequiresAttr' => ['duration']]],
                        ['name' => 'zoom-start', 'valueRegex' => '\d+\.?\d*'],
                    ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-story-360',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY']],
                'mandatoryAncestor' => 'AMP-STORY',
                'childTags' => ['mandatoryNumChildTags' => 1, 'childTagNameOneof' => ['AMP-IMG', 'AMP-VIDEO']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-story-360'],
                ]
            ),
            Extension::STORY_ANIMATION => new Tag(
                [
                'tagName' => Extension::STORY_ANIMATION,
                'mandatoryParent' => 'AMP-STORY-PAGE',
                'attrs' => [['name' => 'animate-in-after'], ['name' => 'trigger', 'mandatory' => true, 'value' => ['visibility']]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'childTags' => ['mandatoryNumChildTags' => 1, 'childTagNameOneof' => ['SCRIPT']],
                'htmlFormat' => ['AMP'],
                'requires' => ['amp-story-animation json script'],
                'requiresExtension' => ['amp-story'],
                ]
            ),
            'amp-story-animation json script' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'amp-story-animation json script',
                'mandatoryParent' => 'AMP-STORY-ANIMATION',
                'attrs' => [
                        [
                            'name' => 'type',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                            'valueCasei' => ['application/json'],
                        ],
                    ],
                'attrLists' => ['nonce-attr'],
                'cdata' => ['disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']]],
                'htmlFormat' => ['AMP'],
                'satisfies' => ['amp-story-animation json script'],
                ]
            ),
            Extension::STORY_AUTO_ADS => new Tag(
                [
                'tagName' => Extension::STORY_AUTO_ADS,
                'unique' => true,
                'mandatoryParent' => 'AMP-STORY',
                'specUrl' => 'https://amp.dev/documentation/components/amp-story-auto-ads/',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-story-auto-ads'],
                ]
            ),
            'amp-story-auto-ads > template' => new Tag(
                [
                'tagName' => Element::TEMPLATE,
                'specName' => 'amp-story-auto-ads > template',
                'mandatoryParent' => 'AMP-STORY-AUTO-ADS',
                'attrs' => [['name' => 'type', 'mandatory' => true, 'value' => ['amp-mustache'], 'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH']],
                'referencePoints' => [['tagSpecName' => 'AMP-STORY-GRID-LAYER default'], ['tagSpecName' => 'AMP-STORY-GRID-LAYER animate-in']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-mustache'],
                'descendantTagList' => 'amp-story-grid-layer-allowed-descendants',
                ]
            ),
            'amp-story-auto-ads config script' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'amp-story-auto-ads config script',
                'mandatoryParent' => 'AMP-STORY-AUTO-ADS',
                'attrs' => [
                        [
                            'name' => 'type',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                            'valueCasei' => ['application/json'],
                        ],
                    ],
                'attrLists' => ['nonce-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-story-auto-ads/',
                'cdata' => ['disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']]],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-story-auto-ads'],
                ]
            ),
            Extension::STORY_BOOKEND => new Tag(
                [
                'tagName' => Extension::STORY_BOOKEND,
                'attrs' => [
                        ['name' => 'layout', 'mandatory' => true, 'value' => ['nodisplay']],
                        ['name' => 'src', 'valueUrl' => ['protocol' => ['http', 'https']]],
                    ],
                'mandatoryAncestor' => 'AMP-STORY',
                'htmlFormat' => ['AMP'],
                'descendantTagList' => 'amp-story-bookend-allowed-descendants',
                'mandatoryLastChild' => true,
                ]
            ),
            'amp-story-bookend extension .json script' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'amp-story-bookend extension .json script',
                'unique' => true,
                'mandatoryParent' => 'AMP-STORY-BOOKEND',
                'attrs' => [
                        [
                            'name' => 'type',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                            'valueCasei' => ['application/json'],
                        ],
                    ],
                'attrLists' => ['nonce-attr'],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-story'],
                'siblingsDisallowed' => true,
                'mandatoryLastChild' => true,
                ]
            ),
            Extension::STORY_CONSENT => new Tag(
                [
                'tagName' => Extension::STORY_CONSENT,
                'mandatoryParent' => 'AMP-CONSENT',
                'attrLists' => ['mandatory-id-attr'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'childTags' => ['mandatoryNumChildTags' => 1, 'childTagNameOneof' => ['SCRIPT']],
                'htmlFormat' => ['AMP'],
                'requires' => ['amp-story-consent extension .json script'],
                'requiresExtension' => ['amp-consent', 'amp-story'],
                ]
            ),
            'amp-story-consent extension .json script' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'amp-story-consent extension .json script',
                'unique' => true,
                'mandatoryParent' => 'AMP-STORY-CONSENT',
                'attrs' => [
                        [
                            'name' => 'type',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                            'valueCasei' => ['application/json'],
                        ],
                    ],
                'attrLists' => ['nonce-attr'],
                'cdata' => ['disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']]],
                'htmlFormat' => ['AMP'],
                'satisfies' => ['amp-story-consent extension .json script'],
                'requiresExtension' => ['amp-consent', 'amp-story'],
                ]
            ),
            Extension::STORY_CTA_LAYER => new Tag(
                [
                'tagName' => Extension::STORY_CTA_LAYER,
                'mandatoryAncestor' => 'AMP-STORY-PAGE',
                'referencePoints' => [['tagSpecName' => 'AMP-STORY-CTA-LAYER animate-in']],
                'htmlFormat' => ['AMP'],
                'descendantTagList' => 'amp-story-cta-layer-allowed-descendants',
                'mandatoryLastChild' => true,
                ]
            ),
            'AMP-STORY-CTA-LAYER animate-in' => new Tag(
                [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-STORY-CTA-LAYER animate-in',
                'attrs' => [
                        [
                            'name' => 'animate-in',
                            'value' => [
                                'drop',
                                'fade-in',
                                'fly-in-bottom',
                                'fly-in-left',
                                'fly-in-right',
                                'fly-in-top',
                                'pan-down',
                                'pan-left',
                                'pan-right',
                                'pan-up',
                                'pulse',
                                'rotate-in-left',
                                'rotate-in-right',
                                'scale-fade-down',
                                'scale-fade-up',
                                'twirl-in',
                                'whoosh-in-left',
                                'whoosh-in-right',
                                'zoom-in',
                                'zoom-out',
                            ],
                        ],
                        ['name' => 'animate-in-after'],
                        ['name' => 'animate-in-delay'],
                        ['name' => 'animate-in-duration'],
                        ['name' => 'animate-in-timing-function'],
                        ['name' => 'scale-end', 'valueRegex' => '[0-9]+([.][0-9]+)?'],
                        ['name' => 'scale-start', 'valueRegex' => '[0-9]+([.][0-9]+)?'],
                        ['name' => 'translate-x', 'valueRegexCasei' => '[0-9]+px'],
                        ['name' => 'translate-y', 'valueRegexCasei' => '[0-9]+px'],
                    ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-story/',
                'referencePoints' => [['tagSpecName' => 'AMP-STORY-CTA-LAYER animate-in']],
                'htmlFormat' => ['AMP'],
                ]
            ),
            Extension::STORY_GRID_LAYER => new Tag(
                [
                'tagName' => Extension::STORY_GRID_LAYER,
                'attrs' => [
                        ['name' => 'template', 'mandatory' => true, 'value' => ['fill', 'horizontal', 'thirds', 'vertical']],
                        ['name' => 'position', 'value' => ['landscape-half-left', 'landscape-half-right']],
                        ['name' => 'aspect-ratio', 'valueRegex' => '\d+:\d+'],
                    ],
                'mandatoryAncestor' => 'AMP-STORY-PAGE',
                'referencePoints' => [['tagSpecName' => 'AMP-STORY-GRID-LAYER default'], ['tagSpecName' => 'AMP-STORY-GRID-LAYER animate-in']],
                'htmlFormat' => ['AMP'],
                'descendantTagList' => 'amp-story-grid-layer-allowed-descendants',
                ]
            ),
            'AMP-STORY-GRID-LAYER animate-in' => new Tag(
                [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-STORY-GRID-LAYER animate-in',
                'attrs' => [
                        [
                            'name' => 'animate-in',
                            'value' => [
                                'drop',
                                'fade-in',
                                'fly-in-bottom',
                                'fly-in-left',
                                'fly-in-right',
                                'fly-in-top',
                                'pan-down',
                                'pan-left',
                                'pan-right',
                                'pan-up',
                                'pulse',
                                'rotate-in-left',
                                'rotate-in-right',
                                'scale-fade-down',
                                'scale-fade-up',
                                'twirl-in',
                                'whoosh-in-left',
                                'whoosh-in-right',
                                'zoom-in',
                                'zoom-out',
                            ],
                        ],
                        ['name' => 'target', 'value' => ['_blank']],
                        ['name' => 'data-tooltip-icon', 'valueUrl' => ['protocol' => ['http', 'https', 'data']]],
                        ['name' => 'animate-in-after'],
                        ['name' => 'animate-in-delay'],
                        ['name' => 'animate-in-duration'],
                        ['name' => 'animate-in-timing-function'],
                        ['name' => 'interactive', 'value' => ['']],
                        ['name' => 'scale-end', 'valueRegex' => '[0-9]+([.][0-9]+)?'],
                        ['name' => 'scale-start', 'valueRegex' => '[0-9]+([.][0-9]+)?'],
                        ['name' => 'translate-x', 'valueRegexCasei' => '[0-9]+px'],
                        ['name' => 'translate-y', 'valueRegexCasei' => '[0-9]+px'],
                    ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-story/',
                'referencePoints' => [['tagSpecName' => 'AMP-STORY-GRID-LAYER animate-in']],
                'htmlFormat' => ['AMP'],
                ]
            ),
            'AMP-STORY-GRID-LAYER default' => new Tag(
                [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-STORY-GRID-LAYER default',
                'attrs' => [
                        [
                            'name' => 'align-content',
                            'value' => ['center', 'end', 'space-around', 'space-between', 'space-evenly', 'start', 'stretch'],
                        ],
                        ['name' => 'target', 'value' => ['_blank']],
                        ['name' => 'data-tooltip-icon', 'valueUrl' => ['protocol' => ['http', 'https', 'data']]],
                        ['name' => 'align-items', 'value' => ['center', 'end', 'start', 'stretch']],
                        ['name' => 'align-self', 'value' => ['center', 'end', 'start', 'stretch']],
                        [
                            'name' => 'animate-in',
                            'value' => [
                                'drop',
                                'fade-in',
                                'fly-in-bottom',
                                'fly-in-left',
                                'fly-in-right',
                                'fly-in-top',
                                'pan-down',
                                'pan-left',
                                'pan-right',
                                'pan-up',
                                'pulse',
                                'rotate-in-left',
                                'rotate-in-right',
                                'scale-fade-down',
                                'scale-fade-up',
                                'twirl-in',
                                'whoosh-in-left',
                                'whoosh-in-right',
                                'zoom-in',
                                'zoom-out',
                            ],
                        ],
                        ['name' => 'animate-in-after'],
                        ['name' => 'animate-in-delay'],
                        ['name' => 'animate-in-duration'],
                        ['name' => 'animate-in-timing-function'],
                        ['name' => 'grid-area'],
                        ['name' => 'interactive', 'value' => ['']],
                        ['name' => 'scale-end', 'valueRegex' => '[0-9]+([.][0-9]+)?'],
                        ['name' => 'scale-start', 'valueRegex' => '[0-9]+([.][0-9]+)?'],
                        ['name' => 'translate-x', 'valueRegexCasei' => '[0-9]+px'],
                        ['name' => 'translate-y', 'valueRegexCasei' => '[0-9]+px'],
                        [
                            'name' => 'justify-content',
                            'value' => ['center', 'end', 'space-around', 'space-between', 'space-evenly', 'start', 'stretch'],
                        ],
                        ['name' => 'justify-items', 'value' => ['center', 'end', 'start', 'stretch']],
                        ['name' => 'justify-self', 'value' => ['center', 'end', 'start', 'stretch']],
                    ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-story/',
                'referencePoints' => [['tagSpecName' => 'AMP-STORY-GRID-LAYER animate-in']],
                'htmlFormat' => ['AMP'],
                ]
            ),
            Extension::STORY_INTERACTIVE_BINARY_POLL => new Tag(
                [
                'tagName' => Extension::STORY_INTERACTIVE_BINARY_POLL,
                'attrs' => [
                        ['name' => 'option-1-text', 'mandatory' => true],
                        ['name' => 'option-2-text', 'mandatory' => true],
                        ['name' => 'option-1-confetti'],
                        ['name' => 'option-2-confetti'],
                    ],
                'attrLists' => ['interactive-shared-configs-attrs'],
                'mandatoryAncestor' => 'AMP-STORY-GRID-LAYER',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-story-interactive'],
                ]
            ),
            Extension::STORY_INTERACTIVE_POLL => new Tag(
                [
                'tagName' => Extension::STORY_INTERACTIVE_POLL,
                'attrLists' => [
                        'interactive-options-text-attrs',
                        'interactive-options-confetti-attrs',
                        'interactive-options-results-category-attrs',
                        'interactive-shared-configs-attrs',
                    ],
                'mandatoryAncestor' => 'AMP-STORY-GRID-LAYER',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-story-interactive'],
                ]
            ),
            Extension::STORY_INTERACTIVE_QUIZ => new Tag(
                [
                'tagName' => Extension::STORY_INTERACTIVE_QUIZ,
                'attrs' => [
                        [
                            'name' => 'option-1-correct',
                            'mandatoryOneof' => '[\'option-1-correct\', \'option-2-correct\', \'option-3-correct\', \'option-4-correct\']',
                        ],
                        [
                            'name' => 'option-2-correct',
                            'mandatoryOneof' => '[\'option-1-correct\', \'option-2-correct\', \'option-3-correct\', \'option-4-correct\']',
                        ],
                        [
                            'name' => 'option-3-correct',
                            'mandatoryOneof' => '[\'option-1-correct\', \'option-2-correct\', \'option-3-correct\', \'option-4-correct\']',
                            'trigger' => ['alsoRequiresAttr' => ['option-3-text']],
                        ],
                        [
                            'name' => 'option-4-correct',
                            'mandatoryOneof' => '[\'option-1-correct\', \'option-2-correct\', \'option-3-correct\', \'option-4-correct\']',
                            'trigger' => ['alsoRequiresAttr' => ['option-4-text']],
                        ],
                    ],
                'attrLists' => ['interactive-options-text-attrs', 'interactive-options-confetti-attrs', 'interactive-shared-configs-attrs'],
                'mandatoryAncestor' => 'AMP-STORY-GRID-LAYER',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-story-interactive'],
                ]
            ),
            Extension::STORY_INTERACTIVE_RESULTS => new Tag(
                [
                'tagName' => Extension::STORY_INTERACTIVE_RESULTS,
                'attrs' => [
                        ['name' => 'option-1-results-category', 'mandatory' => true],
                        ['name' => 'option-2-results-category', 'mandatory' => true],
                        ['name' => 'option-3-results-category'],
                        ['name' => 'option-4-results-category', 'trigger' => ['alsoRequiresAttr' => ['option-3-results-category']]],
                        ['name' => 'option-1-image'],
                        ['name' => 'option-2-image'],
                        ['name' => 'option-3-image', 'trigger' => ['alsoRequiresAttr' => ['option-3-results-category']]],
                        ['name' => 'option-4-image', 'trigger' => ['alsoRequiresAttr' => ['option-4-results-category']]],
                        ['name' => 'option-1-text'],
                        ['name' => 'option-2-text'],
                        ['name' => 'option-3-text', 'trigger' => ['alsoRequiresAttr' => ['option-3-results-category']]],
                        ['name' => 'option-4-text', 'trigger' => ['alsoRequiresAttr' => ['option-4-results-category']]],
                        ['name' => 'option-1-results-threshold', 'valueRegex' => '\d+(\.\d+)?'],
                        ['name' => 'option-2-results-threshold', 'valueRegex' => '\d+(\.\d+)?'],
                        [
                            'name' => 'option-3-results-threshold',
                            'valueRegex' => '\d+(\.\d+)?',
                            'trigger' => ['alsoRequiresAttr' => ['option-3-results-category']],
                        ],
                        [
                            'name' => 'option-4-results-threshold',
                            'valueRegex' => '\d+(\.\d+)?',
                            'trigger' => ['alsoRequiresAttr' => ['option-4-results-category']],
                        ],
                        ['name' => 'prompt-text'],
                        ['name' => 'theme', 'value' => ['light', 'dark']],
                        ['name' => 'chip-style', 'value' => ['flat', 'transparent']],
                    ],
                'mandatoryAncestor' => 'AMP-STORY-GRID-LAYER',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-story-interactive'],
                ]
            ),
            Extension::STORY_PAGE => new Tag(
                [
                'tagName' => Extension::STORY_PAGE,
                'mandatoryParent' => 'AMP-STORY',
                'attrs' => [
                        ['name' => 'auto-advance-after'],
                        ['name' => 'background-audio', 'valueUrl' => ['protocol' => ['http', 'https']]],
                        ['name' => 'next-page-no-ad'],
                    ],
                'attrLists' => ['mandatory-id-attr'],
                'childTags' => [
                        'childTagNameOneof' => [
                            'AMP-ANALYTICS',
                            'AMP-PIXEL',
                            'AMP-STORY-ANIMATION',
                            'AMP-STORY-CTA-LAYER',
                            'AMP-STORY-GRID-LAYER',
                            'AMP-STORY-PAGE-ATTACHMENT',
                        ],
                        'mandatoryMinNumChildTags' => 1,
                    ],
                'htmlFormat' => ['AMP'],
                'satisfies' => ['amp-story-page'],
                'requiresExtension' => ['amp-story'],
                ]
            ),
            'amp-story-page-attachment' => new Tag(
                [
                'tagName' => Extension::STORY_PAGE_ATTACHMENT,
                'specName' => 'amp-story-page-attachment',
                'attrs' => [
                        ['name' => 'layout', 'mandatory' => true, 'value' => ['nodisplay']],
                        ['name' => 'theme', 'value' => ['dark', 'light']],
                    ],
                'mandatoryAncestor' => 'AMP-STORY-PAGE',
                'htmlFormat' => ['AMP'],
                'descendantTagList' => 'amp-story-page-attachment-allowed-descendants',
                'mandatoryLastChild' => true,
                ]
            ),
            'amp-story-page-attachment[href]' => new Tag(
                [
                'tagName' => Extension::STORY_PAGE_ATTACHMENT,
                'specName' => 'amp-story-page-attachment[href]',
                'attrs' => [
                        ['name' => 'layout', 'mandatory' => true, 'value' => ['nodisplay']],
                        ['name' => 'theme', 'value' => ['dark', 'light']],
                        ['name' => 'href', 'mandatory' => true, 'valueUrl' => ['protocol' => ['http', 'https']]],
                    ],
                'mandatoryAncestor' => 'AMP-STORY-PAGE',
                'childTags' => ['mandatoryNumChildTags' => 0],
                'htmlFormat' => ['AMP'],
                'mandatoryLastChild' => true,
                ]
            ),
            Extension::STORY_PANNING_MEDIA => new Tag(
                [
                'tagName' => Extension::STORY_PANNING_MEDIA,
                'specUrl' => 'https://amp.dev/documentation/components/amp-story-panning-media',
                'ampLayout' => ['supportedLayouts' => ['FILL']],
                'mandatoryAncestor' => 'AMP-STORY-GRID-LAYER',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-story-panning-media'],
                ]
            ),
            Extension::STORY_PLAYER => new Tag(
                [
                'tagName' => Extension::STORY_PLAYER,
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'RESPONSIVE', 'INTRINSIC']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-story-player'],
                'descendantTagList' => 'amp-story-player-allowed-descendants',
                ]
            ),
            'amp-story >> amp-audio' => new Tag(
                [
                'tagName' => Extension::AUDIO,
                'specName' => 'amp-story >> amp-audio',
                'attrs' => [['name' => 'autoplay', 'mandatory' => true, 'value' => ['']]],
                'attrLists' => ['amp-audio-common', 'extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-audio/',
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'mandatoryAncestor' => 'AMP-STORY',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-audio'],
                ]
            ),
            'amp-story >> amp-sidebar' => new Tag(
                [
                'tagName' => Extension::SIDEBAR,
                'specName' => 'amp-story >> amp-sidebar',
                'mandatoryParent' => 'AMP-STORY',
                'specUrl' => 'https://amp.dev/documentation/components/amp-sidebar/',
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-sidebar'],
                'markDescendants' => ['marker' => ['AUTOSCROLL']],
                ]
            ),
            'amp-story >> amp-story-page-attachment >> amp-video' => new Tag(
                [
                'tagName' => Extension::VIDEO,
                'specName' => 'amp-story >> amp-story-page-attachment >> amp-video',
                'attrs' => [['name' => 'poster']],
                'attrLists' => ['extended-amp-global', 'amp-video-common', 'lightboxable-elements'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-video/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'mandatoryAncestor' => 'AMP-STORY-PAGE-ATTACHMENT',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'alsoRequiresTagWarning' => ['amp-video extension script'],
                ]
            ),
            'amp-story >> amp-video' => new Tag(
                [
                'tagName' => Extension::VIDEO,
                'specName' => 'amp-story >> amp-video',
                'attrs' => [
                        ['name' => 'autoplay', 'mandatory' => true, 'value' => ['']],
                        [
                            'name' => 'controls',
                            'value' => [''],
                            'deprecation' => '- no replacement',
                            'deprecationUrl' => 'https://github.com/ampproject/amphtml/issues/23798',
                        ],
                        [
                            'name' => '[controls]',
                            'deprecation' => '- no replacement',
                            'deprecationUrl' => 'https://github.com/ampproject/amphtml/issues/23798',
                        ],
                        ['name' => 'poster', 'mandatory' => true],
                    ],
                'attrLists' => ['extended-amp-global', 'amp-video-common'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-video/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'mandatoryAncestor' => 'AMP-STORY',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'requiresExtension' => ['amp-video'],
                ]
            ),
            'amp-subscriptions extension .json script' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'amp-subscriptions extension .json script',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        ['name' => 'id', 'mandatory' => true, 'value' => ['amp-subscriptions'], 'dispatchKey' => 'NAME_VALUE_DISPATCH'],
                        ['name' => 'type', 'mandatory' => true, 'valueCasei' => ['application/json']],
                    ],
                'attrLists' => ['nonce-attr'],
                'cdata' => ['disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']]],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-subscriptions'],
                ]
            ),
            Extension::TIMEAGO => new Tag(
                [
                'tagName' => Extension::TIMEAGO,
                'attrs' => [
                        ['name' => 'cutoff', 'valueRegex' => '\d+'],
                        [
                            'name' => 'datetime',
                            'mandatory' => true,
                            'valueRegex' => '\d{4}-[01]\d-[0-3]\dT[0-2]\d:[0-5]\d(:[0-5]\d(\.\d+)?)?(Z|[+-][0-1][0-9]:[0-5][0-9])',
                        ],
                        ['name' => 'locale'],
                        ['name' => '[datetime]'],
                        ['name' => '[title]'],
                    ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-timeago/',
                'ampLayout' => ['supportedLayouts' => ['FIXED', 'FIXED_HEIGHT', 'RESPONSIVE']],
                'htmlFormat' => ['AMP', 'AMP4EMAIL'],
                'requiresExtension' => ['amp-timeago'],
                ]
            ),
            Extension::TRUNCATE_TEXT => new Tag(
                [
                'tagName' => Extension::TRUNCATE_TEXT,
                'attrs' => [['name' => 'overflow-style', 'value' => ['right', 'default']]],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-truncate-text/',
                'ampLayout' => [
                        'supportedLayouts' => [
                            'CONTAINER',
                            'FILL',
                            'FIXED',
                            'FIXED_HEIGHT',
                            'FLEX_ITEM',
                            'INTRINSIC',
                            'NODISPLAY',
                            'RESPONSIVE',
                        ],
                    ],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-truncate-text'],
                ]
            ),
            Extension::TWITTER => new Tag(
                [
                'tagName' => Extension::TWITTER,
                'attrs' => [
                        ['name' => 'data-cards', 'trigger' => ['alsoRequiresAttr' => ['data-tweetid']]],
                        ['name' => 'data-conversation', 'trigger' => ['alsoRequiresAttr' => ['data-tweetid']]],
                        ['name' => 'data-limit', 'trigger' => ['alsoRequiresAttr' => ['data-momentid']]],
                        [
                            'name' => 'data-momentid',
                            'mandatoryOneof' => '[\'data-momentid\', \'data-timeline-source-type\', \'data-tweetid\']',
                            'valueRegex' => '\d+',
                        ],
                        [
                            'name' => 'data-timeline-id',
                            'valueRegex' => '\d+',
                            'trigger' => ['alsoRequiresAttr' => ['data-timeline-source-type']],
                        ],
                        ['name' => 'data-timeline-owner-screen-name', 'trigger' => ['alsoRequiresAttr' => ['data-timeline-source-type']]],
                        ['name' => 'data-timeline-slug', 'trigger' => ['alsoRequiresAttr' => ['data-timeline-source-type']]],
                        [
                            'name' => 'data-timeline-source-type',
                            'mandatoryOneof' => '[\'data-momentid\', \'data-timeline-source-type\', \'data-tweetid\']',
                        ],
                        ['name' => 'data-timeline-screen-name', 'trigger' => ['alsoRequiresAttr' => ['data-timeline-source-type']]],
                        [
                            'name' => 'data-timeline-url',
                            'valueUrl' => ['protocol' => ['http', 'https'], 'allowRelative' => false],
                            'trigger' => ['alsoRequiresAttr' => ['data-timeline-source-type']],
                        ],
                        [
                            'name' => 'data-timeline-user-id',
                            'valueRegex' => '\d+',
                            'trigger' => ['alsoRequiresAttr' => ['data-timeline-source-type']],
                        ],
                        [
                            'name' => 'data-tweetid',
                            'mandatoryOneof' => '[\'data-momentid\', \'data-timeline-source-type\', \'data-tweetid\']',
                        ],
                        ['name' => '[data-tweetid]'],
                    ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-twitter'],
                ]
            ),
            Extension::USER_NOTIFICATION => new Tag(
                [
                'tagName' => Extension::USER_NOTIFICATION,
                'attrs' => [
                        [
                            'name' => 'data-dismiss-href',
                            'valueUrl' => ['protocol' => ['https'], 'allowRelative' => false, 'allowEmpty' => false],
                        ],
                        [
                            'name' => 'data-show-if-href',
                            'valueUrl' => ['protocol' => ['https'], 'allowRelative' => false, 'allowEmpty' => false],
                        ],
                        ['name' => 'enctype', 'value' => ['application/x-www-form-urlencoded']],
                    ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-user-notification'],
                ]
            ),
            Extension::VIDEO => new Tag(
                [
                'tagName' => Extension::VIDEO,
                'attrs' => [['name' => 'poster']],
                'attrLists' => ['extended-amp-global', 'amp-video-common', 'lightboxable-elements'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-video/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'disallowedAncestor' => ['AMP-STORY'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'alsoRequiresTagWarning' => ['amp-video extension script'],
                ]
            ),
            'AMP-VIDEO-IFRAME > I-AMPHTML-SIZER [style]' => new Tag(
                [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-VIDEO-IFRAME > I-AMPHTML-SIZER [style]',
                'attrs' => [
                        [
                            'name' => 'style',
                            'mandatory' => true,
                            'disallowedValueRegex' => '!\s*important',
                            'cssDeclaration' => [['name' => 'display', 'valueCasei' => ['block']], ['name' => 'padding-top']],
                        ],
                    ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-video-iframe/',
                'htmlFormat' => ['AMP'],
                'explicitAttrsOnly' => true,
                'enabledBy' => ['transformed'],
                ]
            ),
            'AMP-VIDEO-IFRAME > [placeholder]' => new Tag(
                [
                'tagName' => '$REFERENCE_POINT',
                'specName' => 'AMP-VIDEO-IFRAME > [placeholder]',
                'attrs' => [['name' => 'placeholder', 'mandatory' => true]],
                'specUrl' => 'https://amp.dev/documentation/components/amp-video-iframe/',
                'htmlFormat' => ['AMP'],
                ]
            ),
            'AMP-VIDEO-IFRAME with [placeholder]' => new Tag(
                [
                'tagName' => Extension::VIDEO_IFRAME,
                'specName' => 'AMP-VIDEO-IFRAME with [placeholder]',
                'attrLists' => ['extended-amp-global', 'amp-video-iframe-common', 'lightboxable-elements'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-video-iframe/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'referencePoints' => [['tagSpecName' => 'AMP-VIDEO-IFRAME > [placeholder]', 'mandatory' => true, 'unique' => true]],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-video-iframe'],
                'disabledBy' => ['transformed'],
                ]
            ),
            'AMP-VIDEO-IFRAME with [placeholder] (transformed)' => new Tag(
                [
                'tagName' => Extension::VIDEO_IFRAME,
                'specName' => 'AMP-VIDEO-IFRAME with [placeholder] (transformed)',
                'attrLists' => ['extended-amp-global', 'amp-video-iframe-common', 'lightboxable-elements'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-video-iframe/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'referencePoints' => [
                        ['tagSpecName' => 'AMP-VIDEO-IFRAME > [placeholder]', 'mandatory' => true, 'unique' => true],
                        ['tagSpecName' => 'AMP-VIDEO-IFRAME > I-AMPHTML-SIZER [style]'],
                    ],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-video-iframe'],
                'enabledBy' => ['transformed'],
                ]
            ),
            'AMP-VIDEO-IFRAME[poster]' => new Tag(
                [
                'tagName' => Extension::VIDEO_IFRAME,
                'specName' => 'AMP-VIDEO-IFRAME[poster]',
                'attrs' => [['name' => 'poster', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global', 'amp-video-iframe-common', 'lightboxable-elements'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-video-iframe/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'INTRINSIC', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-video-iframe'],
                ]
            ),
            'amp-video > source' => new Tag(
                [
                'tagName' => Element::SOURCE,
                'specName' => 'amp-video > source',
                'mandatoryParent' => 'AMP-VIDEO',
                'attrs' => [
                        ['name' => 'media'],
                        [
                            'name' => 'src',
                            'disallowedValueRegex' => '__amp_source_origin',
                            'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true],
                        ],
                        ['name' => 'type'],
                        ['name' => '[src]'],
                        ['name' => '[type]'],
                    ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-video/',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            'amp-video > track' => new Tag(
                [
                'tagName' => Element::TRACK,
                'specName' => 'amp-video > track',
                'mandatoryParent' => 'AMP-VIDEO',
                'attrs' => [['name' => '[label]'], ['name' => '[src]'], ['name' => '[srclang]']],
                'attrLists' => ['track-attrs-no-subtitles'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            'amp-video > track[kind=subtitles]' => new Tag(
                [
                'tagName' => Element::TRACK,
                'specName' => 'amp-video > track[kind=subtitles]',
                'mandatoryParent' => 'AMP-VIDEO',
                'attrs' => [['name' => '[label]'], ['name' => '[src]'], ['name' => '[srclang]']],
                'attrLists' => ['track-attrs-subtitles'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            'amp-video extension script' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'amp-video extension script',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'extensionSpec' => ['name' => 'amp-video', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'NONE'],
                ]
            ),
            Extension::VIMEO => new Tag(
                [
                'tagName' => Extension::VIMEO,
                'attrs' => [['name' => 'autoplay', 'value' => ['']], ['name' => 'data-videoid', 'mandatory' => true, 'valueRegex' => '[0-9]+']],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-vimeo'],
                ]
            ),
            Extension::VINE => new Tag(
                [
                'tagName' => Extension::VINE,
                'attrs' => [['name' => 'data-vineid', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-vine'],
                ]
            ),
            Extension::VIQEO_PLAYER => new Tag(
                [
                'tagName' => Extension::VIQEO_PLAYER,
                'attrs' => [
                        ['name' => 'autoplay'],
                        ['name' => 'data-profileid', 'mandatory' => true, 'valueRegex' => '[0-9a-f]*'],
                        ['name' => 'data-videoid', 'mandatory' => true],
                    ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-viqeo-player'],
                ]
            ),
            Extension::VK => new Tag(
                [
                'tagName' => Extension::VK,
                'attrs' => [['name' => 'data-embedtype', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FIXED', 'FLEX_ITEM', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-vk'],
                ]
            ),
            Extension::WEB_PUSH => new Tag(
                [
                'tagName' => Extension::WEB_PUSH,
                'attrs' => [
                        [
                            'name' => 'helper-iframe-url',
                            'mandatory' => true,
                            'valueUrl' => ['protocol' => ['https'], 'allowRelative' => false],
                        ],
                        ['name' => 'id', 'mandatory' => true, 'value' => ['amp-web-push']],
                        [
                            'name' => 'permission-dialog-url',
                            'mandatory' => true,
                            'valueUrl' => ['protocol' => ['https'], 'allowRelative' => false],
                        ],
                        [
                            'name' => 'service-worker-url',
                            'mandatory' => true,
                            'valueUrl' => ['protocol' => ['https'], 'allowRelative' => false],
                        ],
                        ['name' => 'service-worker-scope', 'valueUrl' => ['protocol' => ['https']]],
                    ],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-web-push/',
                'ampLayout' => ['supportedLayouts' => ['NODISPLAY']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-web-push'],
                ]
            ),
            Extension::WEB_PUSH_WIDGET => new Tag(
                [
                'tagName' => Extension::WEB_PUSH_WIDGET,
                'attrs' => [['name' => 'visibility', 'mandatory' => true, 'value' => ['blocked', 'subscribed', 'unsubscribed']]],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-web-push/',
                'ampLayout' => ['supportedLayouts' => ['FIXED']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-web-push'],
                ]
            ),
            Extension::WISTIA_PLAYER => new Tag(
                [
                'tagName' => Extension::WISTIA_PLAYER,
                'attrs' => [
                        ['name' => 'data-media-hashed-id', 'mandatory' => true, 'valueRegex' => '[0-9a-zA-Z]+'],
                        ['name' => 'rotate-to-fullscreen', 'value' => ['']],
                    ],
                'attrLists' => ['extended-amp-global'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-wistia-player'],
                ]
            ),
            Extension::YOTPO => new Tag(
                [
                'tagName' => Extension::YOTPO,
                'attrs' => [['name' => 'data-app-key', 'mandatory' => true], ['name' => 'data-widget-type', 'mandatory' => true]],
                'attrLists' => ['extended-amp-global'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-yotpo/',
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-yotpo'],
                ]
            ),
            Extension::YOUTUBE => new Tag(
                [
                'tagName' => Extension::YOUTUBE,
                'attrs' => [
                        ['name' => 'autoplay'],
                        ['name' => 'loop'],
                        ['name' => 'credentials', 'valueCasei' => ['include', 'omit']],
                        [
                            'name' => 'data-live-channelid',
                            'mandatoryOneof' => '[\'data-live-channelid\', \'data-videoid\']',
                            'valueRegex' => '[^=/?:]+',
                        ],
                        [
                            'name' => 'data-videoid',
                            'mandatoryOneof' => '[\'data-live-channelid\', \'data-videoid\']',
                            'valueRegex' => '[^=/?:]+',
                        ],
                        ['name' => 'dock', 'requiresExtension' => ['amp-video-docking']],
                        ['name' => '[data-videoid]'],
                    ],
                'attrLists' => ['extended-amp-global', 'lightboxable-elements'],
                'ampLayout' => ['supportedLayouts' => ['FILL', 'FIXED', 'FIXED_HEIGHT', 'FLEX_ITEM', 'NODISPLAY', 'RESPONSIVE']],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-youtube'],
                ]
            ),
            'amp4ads engine script' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'amp4ads engine script',
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        [
                            'name' => 'src',
                            'mandatory' => true,
                            'value' => ['https://cdn.ampproject.org/amp4ads-v0.js'],
                            'dispatchKey' => 'NAME_VALUE_DISPATCH',
                        ],
                    ],
                'attrLists' => ['nonce-attr', 'amphtml-engine-attrs'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                'cdata' => ['disallowedCdataRegex' => [['regex' => '.', 'errorMessage' => 'contents']]],
                'htmlFormat' => ['AMP4ADS'],
                'descriptiveName' => 'amphtml engine script',
                ]
            ),
            'amphtml engine script' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'amphtml engine script',
                'mandatoryAlternatives' => 'amphtml engine script',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        [
                            'name' => 'src',
                            'mandatory' => true,
                            'value' => ['https://cdn.ampproject.org/v0.js'],
                            'dispatchKey' => 'NAME_VALUE_DISPATCH',
                        ],
                    ],
                'attrLists' => ['nonce-attr', 'amphtml-engine-attrs'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                'cdata' => ['disallowedCdataRegex' => [['regex' => '.', 'errorMessage' => 'contents']]],
                'htmlFormat' => ['AMP'],
                'descriptiveName' => 'amphtml engine script',
                ]
            ),
            'amphtml engine script (LTS)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'amphtml engine script (LTS)',
                'mandatoryAlternatives' => 'amphtml engine script',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        [
                            'name' => 'src',
                            'mandatory' => true,
                            'value' => ['https://cdn.ampproject.org/lts/v0.js'],
                            'dispatchKey' => 'NAME_VALUE_DISPATCH',
                        ],
                    ],
                'attrLists' => ['nonce-attr', 'amphtml-engine-attrs'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                'cdata' => ['disallowedCdataRegex' => [['regex' => '.', 'errorMessage' => 'contents']]],
                'htmlFormat' => ['AMP'],
                'descriptiveName' => 'amphtml engine script',
                ]
            ),
            'amphtml engine script [AMP4EMAIL]' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'amphtml engine script [AMP4EMAIL]',
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        [
                            'name' => 'src',
                            'mandatory' => true,
                            'value' => ['https://cdn.ampproject.org/v0.js'],
                            'dispatchKey' => 'NAME_VALUE_DISPATCH',
                        ],
                    ],
                'attrLists' => ['nonce-attr', 'amphtml-engine-attrs'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                'cdata' => ['disallowedCdataRegex' => [['regex' => '.', 'errorMessage' => 'contents']]],
                'htmlFormat' => ['AMP4EMAIL'],
                'descriptiveName' => 'amphtml engine script',
                ]
            ),
            Element::ARTICLE => new Tag(
                [
                'tagName' => Element::ARTICLE,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::ASIDE => new Tag(
                [
                'tagName' => Element::ASIDE,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::AUDIO => new Tag(
                [
                'tagName' => Element::AUDIO,
                'attrs' => [
                        ['name' => 'autoplay'],
                        ['name' => 'controls'],
                        ['name' => 'loop'],
                        ['name' => 'muted'],
                        ['name' => 'preload'],
                        [
                            'name' => 'src',
                            'disallowedValueRegex' => '__amp_source_origin',
                            'valueUrl' => ['protocol' => ['data', 'https'], 'allowRelative' => false],
                        ],
                    ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-audio/',
                'mandatoryAncestor' => 'NOSCRIPT',
                'mandatoryAncestorSuggestedAlternative' => 'AMP-AUDIO',
                'htmlFormat' => ['AMP'],
                ]
            ),
            'audio > source' => new Tag(
                [
                'tagName' => Element::SOURCE,
                'specName' => 'audio > source',
                'mandatoryParent' => 'AUDIO',
                'attrs' => [
                        ['name' => 'media'],
                        [
                            'name' => 'src',
                            'mandatory' => true,
                            'disallowedValueRegex' => '__amp_source_origin',
                            'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true],
                        ],
                        ['name' => 'type', 'mandatory' => true],
                    ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-audio/',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            'audio > track' => new Tag(
                [
                'tagName' => Element::TRACK,
                'specName' => 'audio > track',
                'mandatoryParent' => 'AUDIO',
                'attrLists' => ['track-attrs-no-subtitles'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            'audio > track[kind=subtitles]' => new Tag(
                [
                'tagName' => Element::TRACK,
                'specName' => 'audio > track[kind=subtitles]',
                'mandatoryParent' => 'AUDIO',
                'attrLists' => ['track-attrs-subtitles'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::B => new Tag(
                [
                'tagName' => Element::B,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::BASE => new Tag(
                [
                'tagName' => Element::BASE,
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [['name' => 'href', 'value' => ['/']], ['name' => 'target', 'valueCasei' => ['_blank', '_self', '_top']]],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::BDI => new Tag(
                [
                'tagName' => Element::BDI,
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::BDO => new Tag(
                [
                'tagName' => Element::BDO,
                'attrs' => [['name' => 'dir']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::BIG => new Tag(
                [
                'tagName' => Element::BIG,
                'htmlFormat' => ['AMP'],
                ]
            ),
            Element::BLOCKQUOTE => new Tag(
                [
                'tagName' => Element::BLOCKQUOTE,
                'attrs' => [['name' => 'align']],
                'attrLists' => ['cite-attr'],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::BODY => new Tag(
                [
                'tagName' => Element::BODY,
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => 'HTML',
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::BR => new Tag(
                [
                'tagName' => Element::BR,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::BUTTON => new Tag(
                [
                'tagName' => Element::BUTTON,
                'attrs' => [
                        ['name' => 'disabled', 'value' => ['']],
                        ['name' => 'role', 'implicit' => true],
                        ['name' => 'tabindex', 'implicit' => true],
                        ['name' => 'type'],
                        ['name' => 'value'],
                        ['name' => '[disabled]'],
                        ['name' => '[type]', 'disabledBy' => ['amp4email']],
                        ['name' => '[value]'],
                    ],
                'attrLists' => ['name-attr'],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            'button amp-nested-menu' => new Tag(
                [
                'tagName' => Element::BUTTON,
                'specName' => 'button amp-nested-menu',
                'attrLists' => ['amp-nested-menu-actions'],
                'mandatoryAncestor' => 'AMP-NESTED-MENU',
                'htmlFormat' => ['AMP'],
                ]
            ),
            Element::CANVAS => new Tag(
                [
                'tagName' => Element::CANVAS,
                'attrs' => [['name' => 'height'], ['name' => 'width']],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'mandatoryAncestor' => 'AMP-SCRIPT',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-script'],
                ]
            ),
            Element::CAPTION => new Tag(
                [
                'tagName' => Element::CAPTION,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::CENTER => new Tag(
                [
                'tagName' => Element::CENTER,
                'htmlFormat' => ['AMP'],
                ]
            ),
            Element::CIRCLE => new Tag(
                [
                'tagName' => Element::CIRCLE,
                'attrs' => [
                        ['name' => 'cx'],
                        ['name' => 'cy'],
                        ['name' => 'externalresourcesrequired'],
                        ['name' => 'r'],
                        ['name' => 'sketch:type'],
                        ['name' => 'transform'],
                    ],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::CITE => new Tag(
                [
                'tagName' => Element::CITE,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::CLIPPATH => new Tag(
                [
                'tagName' => Element::CLIPPATH,
                'attrs' => [['name' => 'clippathunits'], ['name' => 'externalresourcesrequired'], ['name' => 'transform']],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::CODE => new Tag(
                [
                'tagName' => Element::CODE,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::COL => new Tag(
                [
                'tagName' => Element::COL,
                'attrs' => [['name' => 'span']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::COLGROUP => new Tag(
                [
                'tagName' => Element::COLGROUP,
                'attrs' => [['name' => 'span']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            'cryptokeys .json script' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'cryptokeys .json script',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        ['name' => 'cryptokeys', 'mandatory' => true, 'value' => [''], 'dispatchKey' => 'NAME_VALUE_DISPATCH'],
                        ['name' => 'sha-256-hash', 'mandatory' => true],
                        ['name' => 'type', 'mandatory' => true, 'valueCasei' => ['application/json']],
                    ],
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-subscriptions'],
                ]
            ),
            Element::DATA => new Tag(
                [
                'tagName' => Element::DATA,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::DATALIST => new Tag(
                [
                'tagName' => Element::DATALIST,
                'specUrl' => 'https://amp.dev/documentation/components/amp-form/',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::DD => new Tag(
                [
                'tagName' => Element::DD,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::DEFS => new Tag(
                [
                'tagName' => Element::DEFS,
                'attrs' => [['name' => 'externalresourcesrequired'], ['name' => 'transform']],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::DEL => new Tag(
                [
                'tagName' => Element::DEL,
                'attrs' => [['name' => 'datetime']],
                'attrLists' => ['cite-attr'],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::DESC => new Tag(
                [
                'tagName' => Element::DESC,
                'attrLists' => ['svg-core-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::DETAILS => new Tag(
                [
                'tagName' => Element::DETAILS,
                'attrs' => [['name' => 'open', 'value' => ['']], ['name' => '[open]']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::DFN => new Tag(
                [
                'tagName' => Element::DFN,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::DIR => new Tag(
                [
                'tagName' => Element::DIR,
                'htmlFormat' => ['AMP'],
                ]
            ),
            Element::DIV => new Tag(
                [
                'tagName' => Element::DIV,
                'attrs' => [['name' => 'align']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            'div amp-nested-menu' => new Tag(
                [
                'tagName' => Element::DIV,
                'specName' => 'div amp-nested-menu',
                'attrs' => [
                        [
                            'name' => 'amp-nested-submenu',
                            'mandatoryOneof' => '[\'amp-nested-submenu\', \'amp-nested-submenu-close\', \'amp-nested-submenu-open\']',
                        ],
                        [
                            'name' => 'amp-nested-submenu-close',
                            'mandatoryOneof' => '[\'amp-nested-submenu\', \'amp-nested-submenu-close\', \'amp-nested-submenu-open\']',
                        ],
                        [
                            'name' => 'amp-nested-submenu-open',
                            'mandatoryOneof' => '[\'amp-nested-submenu\', \'amp-nested-submenu-close\', \'amp-nested-submenu-open\']',
                        ],
                    ],
                'disallowedAncestor' => ['AMP-ACCORDION'],
                'mandatoryAncestor' => 'AMP-NESTED-MENU',
                'htmlFormat' => ['AMP'],
                ]
            ),
            Element::DL => new Tag(
                [
                'tagName' => Element::DL,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::DT => new Tag(
                [
                'tagName' => Element::DT,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::ELLIPSE => new Tag(
                [
                'tagName' => Element::ELLIPSE,
                'attrs' => [
                        ['name' => 'cx'],
                        ['name' => 'cy'],
                        ['name' => 'externalresourcesrequired'],
                        ['name' => 'rx'],
                        ['name' => 'ry'],
                        ['name' => 'sketch:type'],
                        ['name' => 'transform'],
                    ],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::EM => new Tag(
                [
                'tagName' => Element::EM,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::FECOLORMATRIX => new Tag(
                [
                'tagName' => Element::FECOLORMATRIX,
                'attrs' => [['name' => 'in'], ['name' => 'type'], ['name' => 'values']],
                'attrLists' => ['svg-core-attributes', 'svg-filter-primitive-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::FECOMPOSITE => new Tag(
                [
                'tagName' => Element::FECOMPOSITE,
                'attrs' => [
                        ['name' => 'in'],
                        ['name' => 'in2'],
                        ['name' => 'k1'],
                        ['name' => 'k2'],
                        ['name' => 'k3'],
                        ['name' => 'k4'],
                        ['name' => 'operator'],
                    ],
                'attrLists' => ['svg-core-attributes', 'svg-filter-primitive-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::FEFLOOD => new Tag(
                [
                'tagName' => Element::FEFLOOD,
                'attrLists' => ['svg-core-attributes', 'svg-filter-primitive-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::FEGAUSSIANBLUR => new Tag(
                [
                'tagName' => Element::FEGAUSSIANBLUR,
                'attrs' => [['name' => 'edgemode'], ['name' => 'in'], ['name' => 'stddeviation']],
                'attrLists' => ['svg-core-attributes', 'svg-filter-primitive-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::FEMERGE => new Tag(
                [
                'tagName' => Element::FEMERGE,
                'attrLists' => ['svg-core-attributes', 'svg-filter-primitive-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::FEMERGENODE => new Tag(
                [
                'tagName' => Element::FEMERGENODE,
                'attrs' => [['name' => 'in']],
                'attrLists' => ['svg-core-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::FEOFFSET => new Tag(
                [
                'tagName' => Element::FEOFFSET,
                'attrs' => [['name' => 'dx'], ['name' => 'dy'], ['name' => 'in']],
                'attrLists' => ['svg-core-attributes', 'svg-filter-primitive-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::FIELDSET => new Tag(
                [
                'tagName' => Element::FIELDSET,
                'attrs' => [['name' => 'disabled'], ['name' => '[disabled]']],
                'attrLists' => ['name-attr'],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::FIGCAPTION => new Tag(
                [
                'tagName' => Element::FIGCAPTION,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::FIGURE => new Tag(
                [
                'tagName' => Element::FIGURE,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::FILTER => new Tag(
                [
                'tagName' => Element::FILTER,
                'attrs' => [
                        ['name' => 'externalresourcesrequired'],
                        ['name' => 'filterres'],
                        ['name' => 'filterunits'],
                        ['name' => 'height'],
                        ['name' => 'primitiveunits'],
                        ['name' => 'width'],
                        ['name' => 'x'],
                        ['name' => 'y'],
                    ],
                'attrLists' => ['svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr', 'svg-xlink-attributes'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::FOOTER => new Tag(
                [
                'tagName' => Element::FOOTER,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            'FORM DIV [submit-error]' => new Tag(
                [
                'tagName' => Element::DIV,
                'specName' => 'FORM DIV [submit-error]',
                'attrs' => [['name' => 'align'], ['name' => 'submit-error', 'mandatory' => true]],
                'mandatoryAncestor' => 'FORM',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            'FORM DIV [submit-error][template]' => new Tag(
                [
                'tagName' => Element::DIV,
                'specName' => 'FORM DIV [submit-error][template]',
                'attrs' => [['name' => 'align'], ['name' => 'submit-error', 'mandatory' => true], ['name' => 'template', 'mandatory' => true]],
                'mandatoryAncestor' => 'FORM',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            'FORM DIV [submit-success]' => new Tag(
                [
                'tagName' => Element::DIV,
                'specName' => 'FORM DIV [submit-success]',
                'attrs' => [['name' => 'align'], ['name' => 'submit-success', 'mandatory' => true]],
                'mandatoryAncestor' => 'FORM',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            'FORM DIV [submit-success][template]' => new Tag(
                [
                'tagName' => Element::DIV,
                'specName' => 'FORM DIV [submit-success][template]',
                'attrs' => [['name' => 'align'], ['name' => 'submit-success', 'mandatory' => true], ['name' => 'template', 'mandatory' => true]],
                'mandatoryAncestor' => 'FORM',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            'FORM DIV [submitting]' => new Tag(
                [
                'tagName' => Element::DIV,
                'specName' => 'FORM DIV [submitting]',
                'attrs' => [['name' => 'align'], ['name' => 'submitting', 'mandatory' => true]],
                'mandatoryAncestor' => 'FORM',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            'FORM DIV [submitting][template]' => new Tag(
                [
                'tagName' => Element::DIV,
                'specName' => 'FORM DIV [submitting][template]',
                'attrs' => [['name' => 'align'], ['name' => 'submitting', 'mandatory' => true], ['name' => 'template', 'mandatory' => true]],
                'mandatoryAncestor' => 'FORM',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            'FORM DIV [verify-error]' => new Tag(
                [
                'tagName' => Element::DIV,
                'specName' => 'FORM DIV [verify-error]',
                'attrs' => [['name' => 'align'], ['name' => 'verify-error', 'mandatory' => true]],
                'mandatoryAncestor' => 'FORM',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            'FORM DIV [verify-error][template]' => new Tag(
                [
                'tagName' => Element::DIV,
                'specName' => 'FORM DIV [verify-error][template]',
                'attrs' => [['name' => 'align'], ['name' => 'verify-error', 'mandatory' => true], ['name' => 'template', 'mandatory' => true]],
                'mandatoryAncestor' => 'FORM',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            'FORM [method=GET]' => new Tag(
                [
                'tagName' => Element::FORM,
                'specName' => 'FORM [method=GET]',
                'attrs' => [
                        ['name' => 'accept'],
                        ['name' => 'accept-charset'],
                        [
                            'name' => 'action',
                            'mandatory' => true,
                            'disallowedValueRegex' => '__amp_source_origin',
                            'valueUrl' => ['protocol' => ['https']],
                        ],
                        ['name' => 'action-xhr', 'disallowedValueRegex' => '__amp_source_origin', 'valueUrl' => ['protocol' => ['https']]],
                        ['name' => 'autocomplete'],
                        [
                            'name' => 'custom-validation-reporting',
                            'value' => ['as-you-go', 'interact-and-submit', 'show-all-on-submit', 'show-first-on-submit'],
                        ],
                        ['name' => 'enctype'],
                        ['name' => 'method', 'valueCasei' => ['get']],
                        ['name' => 'novalidate'],
                        ['name' => 'target', 'mandatory' => true, 'valueCasei' => ['_blank', '_top']],
                        ['name' => 'verify-xhr', 'disallowedValueRegex' => '__amp_source_origin', 'valueUrl' => ['protocol' => ['https']]],
                    ],
                'attrLists' => ['form-name-attr'],
                'disallowedAncestor' => ['AMP-APP-BANNER'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'requiresExtension' => ['amp-form'],
                ]
            ),
            'FORM [method=GET] (AMP4EMAIL)' => new Tag(
                [
                'tagName' => Element::FORM,
                'specName' => 'FORM [method=GET] (AMP4EMAIL)',
                'attrs' => [
                        ['name' => 'accept'],
                        ['name' => 'accept-charset'],
                        [
                            'name' => 'action-xhr',
                            'disallowedValueRegex' => '__amp_source_origin|{{|}}',
                            'valueUrl' => ['protocol' => ['https'], 'allowRelative' => false],
                        ],
                        ['name' => 'autocomplete'],
                        [
                            'name' => 'custom-validation-reporting',
                            'value' => ['as-you-go', 'interact-and-submit', 'show-all-on-submit', 'show-first-on-submit'],
                        ],
                        ['name' => 'enctype'],
                        ['name' => 'method', 'valueCasei' => ['get']],
                        ['name' => 'novalidate'],
                        ['name' => 'xssi-prefix'],
                    ],
                'htmlFormat' => ['AMP4EMAIL'],
                'requiresExtension' => ['amp-form'],
                ]
            ),
            'FORM [method=POST]' => new Tag(
                [
                'tagName' => Element::FORM,
                'specName' => 'FORM [method=POST]',
                'attrs' => [
                        ['name' => 'accept'],
                        ['name' => 'accept-charset'],
                        [
                            'name' => 'action-xhr',
                            'mandatory' => true,
                            'disallowedValueRegex' => '__amp_source_origin',
                            'valueUrl' => ['protocol' => ['https']],
                        ],
                        ['name' => 'autocomplete'],
                        [
                            'name' => 'custom-validation-reporting',
                            'value' => ['as-you-go', 'interact-and-submit', 'show-all-on-submit', 'show-first-on-submit'],
                        ],
                        ['name' => 'enctype'],
                        ['name' => 'method', 'mandatory' => true, 'dispatchKey' => 'NAME_VALUE_DISPATCH', 'valueCasei' => ['post']],
                        ['name' => 'novalidate'],
                        ['name' => 'target', 'valueCasei' => ['_blank', '_top']],
                        ['name' => 'verify-xhr', 'disallowedValueRegex' => '__amp_source_origin', 'valueUrl' => ['protocol' => ['https']]],
                    ],
                'attrLists' => ['form-name-attr'],
                'disallowedAncestor' => ['AMP-APP-BANNER'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'requiresExtension' => ['amp-form'],
                ]
            ),
            'FORM [method=POST] (AMP4EMAIL)' => new Tag(
                [
                'tagName' => Element::FORM,
                'specName' => 'FORM [method=POST] (AMP4EMAIL)',
                'attrs' => [
                        ['name' => 'accept'],
                        ['name' => 'accept-charset'],
                        [
                            'name' => 'action-xhr',
                            'mandatory' => true,
                            'disallowedValueRegex' => '__amp_source_origin|{{|}}',
                            'valueUrl' => ['protocol' => ['https'], 'allowRelative' => false],
                        ],
                        ['name' => 'autocomplete'],
                        [
                            'name' => 'custom-validation-reporting',
                            'value' => ['as-you-go', 'interact-and-submit', 'show-all-on-submit', 'show-first-on-submit'],
                        ],
                        ['name' => 'enctype'],
                        ['name' => 'method', 'mandatory' => true, 'dispatchKey' => 'NAME_VALUE_DISPATCH', 'valueCasei' => ['post']],
                        ['name' => 'novalidate'],
                        ['name' => 'xssi-prefix'],
                    ],
                'htmlFormat' => ['AMP4EMAIL'],
                'requiresExtension' => ['amp-form'],
                ]
            ),
            Element::G => new Tag(
                [
                'tagName' => Element::G,
                'attrs' => [['name' => 'externalresourcesrequired'], ['name' => 'transform']],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::GLYPH => new Tag(
                [
                'tagName' => Element::GLYPH,
                'attrs' => [
                        ['name' => 'arabic-form'],
                        ['name' => 'd'],
                        ['name' => 'glyph-name'],
                        ['name' => 'horiz-adv-x'],
                        ['name' => 'orientation'],
                        ['name' => 'unicode'],
                        ['name' => 'vert-adv-y'],
                        ['name' => 'vert-origin-x'],
                        ['name' => 'vert-origin-y'],
                    ],
                'attrLists' => ['svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::GLYPHREF => new Tag(
                [
                'tagName' => Element::GLYPHREF,
                'attrs' => [['name' => 'dx'], ['name' => 'dy'], ['name' => 'format'], ['name' => 'glyphref'], ['name' => 'x'], ['name' => 'y']],
                'attrLists' => ['svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr', 'svg-xlink-attributes'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::H1 => new Tag(
                [
                'tagName' => Element::H1,
                'attrs' => [['name' => 'align']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::H2 => new Tag(
                [
                'tagName' => Element::H2,
                'attrs' => [['name' => 'align']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            'h2 amp-nested-menu' => new Tag(
                [
                'tagName' => Element::H2,
                'specName' => 'h2 amp-nested-menu',
                'attrLists' => ['amp-nested-menu-actions'],
                'mandatoryAncestor' => 'AMP-NESTED-MENU',
                'htmlFormat' => ['AMP'],
                ]
            ),
            Element::H3 => new Tag(
                [
                'tagName' => Element::H3,
                'attrs' => [['name' => 'align']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            'h3 amp-nested-menu' => new Tag(
                [
                'tagName' => Element::H3,
                'specName' => 'h3 amp-nested-menu',
                'attrLists' => ['amp-nested-menu-actions'],
                'mandatoryAncestor' => 'AMP-NESTED-MENU',
                'htmlFormat' => ['AMP'],
                ]
            ),
            Element::H4 => new Tag(
                [
                'tagName' => Element::H4,
                'attrs' => [['name' => 'align']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            'h4 amp-nested-menu' => new Tag(
                [
                'tagName' => Element::H4,
                'specName' => 'h4 amp-nested-menu',
                'attrLists' => ['amp-nested-menu-actions'],
                'mandatoryAncestor' => 'AMP-NESTED-MENU',
                'htmlFormat' => ['AMP'],
                ]
            ),
            Element::H5 => new Tag(
                [
                'tagName' => Element::H5,
                'attrs' => [['name' => 'align']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            'h5 amp-nested-menu' => new Tag(
                [
                'tagName' => Element::H5,
                'specName' => 'h5 amp-nested-menu',
                'attrLists' => ['amp-nested-menu-actions'],
                'mandatoryAncestor' => 'AMP-NESTED-MENU',
                'htmlFormat' => ['AMP'],
                ]
            ),
            Element::H6 => new Tag(
                [
                'tagName' => Element::H6,
                'attrs' => [['name' => 'align']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            'h6 amp-nested-menu' => new Tag(
                [
                'tagName' => Element::H6,
                'specName' => 'h6 amp-nested-menu',
                'attrLists' => ['amp-nested-menu-actions'],
                'mandatoryAncestor' => 'AMP-NESTED-MENU',
                'htmlFormat' => ['AMP'],
                ]
            ),
            Element::HEAD => new Tag(
                [
                'tagName' => Element::HEAD,
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => 'HTML',
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            'head > style[amp-boilerplate]' => new Tag(
                [
                'tagName' => Element::STYLE,
                'specName' => 'head > style[amp-boilerplate]',
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [['name' => 'amp-boilerplate', 'mandatory' => true, 'value' => [''], 'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH']],
                'attrLists' => ['nonce-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amp-boilerplate/?format=websites',
                'cdata' => [
                        'cdataRegex' => '\s*body\s*{\s*-webkit-animation:\s*-amp-start\s+8s\s+steps\(1,\s*end\)\s+0s\s+1\s+normal\s+both;\s*-moz-animation:\s*-amp-start\s+8s\s+steps\s*\(1\s*,\s*end\s*\)\s+0s\s+1\s+normal\s+both;\s*-ms-animation:\s*-amp-start\s+8s\s+steps\s*\(1\s*,\s*end\s*\)\s+0s\s+1\s+normal\s+both;\s*animation:\s*-amp-start\s+8s\s+steps\(1,\s*end\)\s+0s\s+1\s+normal\s+both;?\s*}\s*@-webkit-keyframes\s+-amp-start\s*{\s*from\s*{\s*visibility:\s*hidden;?\s*}\s*to\s*{\s*visibility:\s*visible;?\s*}\s*}\s*@-moz-keyframes\s+-amp-start\s*{\s*from\s*{\s*visibility:\s*hidden;?\s*}\s*to\s*{\s*visibility:\s*visible;?\s*}\s*}\s*@-ms-keyframes\s+-amp-start\s*{\s*from\s*{\s*visibility:\s*hidden;?\s*}\s*to\s*{\s*visibility:\s*visible;?\s*}\s*}\s*@-o-keyframes\s+-amp-start\s*{\s*from\s*{\s*visibility:\s*hidden;?\s*}\s*to\s*{\s*visibility:\s*visible;?\s*}\s*}\s*@keyframes\s+-amp-start\s*{\s*from\s*{\s*visibility:\s*hidden;?\s*}\s*to\s*{\s*visibility:\s*visible;?\s*}\s*}\s*',
                        'docCssBytes' => false,
                    ],
                'htmlFormat' => ['AMP'],
                'disabledBy' => ['transformed'],
                'descriptiveName' => 'head > style[amp-boilerplate]',
                ]
            ),
            'head > style[amp-boilerplate] (transformed)' => new Tag(
                [
                'tagName' => Element::STYLE,
                'specName' => 'head > style[amp-boilerplate] (transformed)',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [['name' => 'amp-boilerplate', 'mandatory' => true, 'value' => [''], 'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH']],
                'attrLists' => ['nonce-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amp-boilerplate/?format=websites',
                'cdata' => [
                        'cdataRegex' => '\s*body\s*{\s*-webkit-animation:\s*-amp-start\s+8s\s+steps\(1,\s*end\)\s+0s\s+1\s+normal\s+both;\s*-moz-animation:\s*-amp-start\s+8s\s+steps\s*\(1\s*,\s*end\s*\)\s+0s\s+1\s+normal\s+both;\s*-ms-animation:\s*-amp-start\s+8s\s+steps\s*\(1\s*,\s*end\s*\)\s+0s\s+1\s+normal\s+both;\s*animation:\s*-amp-start\s+8s\s+steps\(1,\s*end\)\s+0s\s+1\s+normal\s+both;?\s*}\s*@-webkit-keyframes\s+-amp-start\s*{\s*from\s*{\s*visibility:\s*hidden;?\s*}\s*to\s*{\s*visibility:\s*visible;?\s*}\s*}\s*@-moz-keyframes\s+-amp-start\s*{\s*from\s*{\s*visibility:\s*hidden;?\s*}\s*to\s*{\s*visibility:\s*visible;?\s*}\s*}\s*@-ms-keyframes\s+-amp-start\s*{\s*from\s*{\s*visibility:\s*hidden;?\s*}\s*to\s*{\s*visibility:\s*visible;?\s*}\s*}\s*@-o-keyframes\s+-amp-start\s*{\s*from\s*{\s*visibility:\s*hidden;?\s*}\s*to\s*{\s*visibility:\s*visible;?\s*}\s*}\s*@keyframes\s+-amp-start\s*{\s*from\s*{\s*visibility:\s*hidden;?\s*}\s*to\s*{\s*visibility:\s*visible;?\s*}\s*}\s*',
                        'docCssBytes' => false,
                    ],
                'htmlFormat' => ['AMP'],
                'enabledBy' => ['transformed'],
                'descriptiveName' => 'head > style[amp-boilerplate]',
                ]
            ),
            'head > style[amp4ads-boilerplate]' => new Tag(
                [
                'tagName' => Element::STYLE,
                'specName' => 'head > style[amp4ads-boilerplate]',
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        [
                            'name' => 'amp4ads-boilerplate',
                            'mandatory' => true,
                            'value' => [''],
                            'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                        ],
                    ],
                'attrLists' => ['nonce-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/a4a_spec/?format=ads#boilerplate',
                'cdata' => ['cdataRegex' => '\s*body\s*{\s*visibility:\s*hidden;?\s*}\s*', 'docCssBytes' => false],
                'htmlFormat' => ['AMP4ADS'],
                'descriptiveName' => 'head > style[amp4ads-boilerplate]',
                ]
            ),
            'head > style[amp4email-boilerplate]' => new Tag(
                [
                'tagName' => Element::STYLE,
                'specName' => 'head > style[amp4email-boilerplate]',
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        [
                            'name' => 'amp4email-boilerplate',
                            'mandatory' => true,
                            'value' => [''],
                            'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH',
                        ],
                    ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/email-spec/amp-email-format/?format=email#required-markup',
                'cdata' => ['cdataRegex' => '\s*body\s*{\s*visibility:\s*hidden;?\s*}\s*', 'docCssBytes' => false],
                'htmlFormat' => ['AMP4EMAIL'],
                'descriptiveName' => 'head > style[amp4email-boilerplate]',
                ]
            ),
            Element::HEADER => new Tag(
                [
                'tagName' => Element::HEADER,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::HGROUP => new Tag(
                [
                'tagName' => Element::HGROUP,
                'htmlFormat' => ['AMP'],
                ]
            ),
            Element::HKERN => new Tag(
                [
                'tagName' => Element::HKERN,
                'attrs' => [['name' => 'g1'], ['name' => 'g2'], ['name' => 'k'], ['name' => 'u1'], ['name' => 'u2']],
                'attrLists' => ['svg-core-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::HR => new Tag(
                [
                'tagName' => Element::HR,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::HTML => new Tag(
                [
                'tagName' => Element::HTML,
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => '!DOCTYPE',
                'attrs' => [['name' => 'data-amp-autocomplete-opt-in', 'value' => ['false'], 'disallowedValueRegex' => 'false']],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                'disabledBy' => ['transformed'],
                ]
            ),
            'html (transformed)' => new Tag(
                [
                'tagName' => Element::HTML,
                'specName' => 'html (transformed)',
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => '!DOCTYPE',
                'attrs' => [['name' => 'i-amphtml-layout', 'value' => ['']], ['name' => 'i-amphtml-no-boilerplate', 'value' => ['']]],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                'htmlFormat' => ['AMP'],
                'enabledBy' => ['transformed'],
                ]
            ),
            'html doctype' => new Tag(
                [
                'tagName' => Element::_DOCTYPE,
                'specName' => 'html doctype',
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => '$ROOT',
                'attrs' => [['name' => 'html', 'mandatory' => true, 'value' => ['']], ['name' => 'lang']],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                'htmlFormat' => ['AMP', 'AMP4EMAIL'],
                'explicitAttrsOnly' => true,
                'descriptiveName' => 'html !doctype',
                ]
            ),
            'html doctype (AMP4ADS)' => new Tag(
                [
                'tagName' => Element::_DOCTYPE,
                'specName' => 'html doctype (AMP4ADS)',
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => '$ROOT',
                'attrs' => [['name' => 'html', 'mandatory' => true, 'value' => ['']]],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                'htmlFormat' => ['AMP4ADS'],
                'descriptiveName' => 'html !doctype',
                ]
            ),
            Element::I => new Tag(
                [
                'tagName' => Element::I,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            'I-AMPHTML-SIZER-INTRINSIC' => new Tag(
                [
                'tagName' => Internal::SIZER,
                'specName' => 'I-AMPHTML-SIZER-INTRINSIC',
                'attrs' => [['name' => 'class', 'mandatory' => true, 'value' => ['i-amphtml-sizer'], 'dispatchKey' => 'NAME_DISPATCH']],
                'htmlFormat' => ['AMP'],
                'explicitAttrsOnly' => true,
                'enabledBy' => ['transformed'],
                ]
            ),
            'I-AMPHTML-SIZER-RESPONSIVE' => new Tag(
                [
                'tagName' => Internal::SIZER,
                'specName' => 'I-AMPHTML-SIZER-RESPONSIVE',
                'attrs' => [
                        [
                            'name' => 'style',
                            'mandatory' => true,
                            'disallowedValueRegex' => '!\s*important',
                            'dispatchKey' => 'NAME_DISPATCH',
                            'cssDeclaration' => [['name' => 'display', 'valueCasei' => ['block']], ['name' => 'padding-top']],
                        ],
                    ],
                'htmlFormat' => ['AMP'],
                'explicitAttrsOnly' => true,
                'enabledBy' => ['transformed'],
                ]
            ),
            Element::IFRAME => new Tag(
                [
                'tagName' => Element::IFRAME,
                'attrs' => [
                        ['name' => 'frameborder', 'value' => ['0', '1']],
                        ['name' => 'height'],
                        ['name' => 'referrerpolicy'],
                        ['name' => 'resizable', 'value' => ['']],
                        ['name' => 'sandbox'],
                        ['name' => 'scrolling', 'value' => ['auto', 'yes', 'no']],
                        [
                            'name' => 'src',
                            'disallowedValueRegex' => '__amp_source_origin',
                            'mandatoryOneof' => '[\'src\', \'srcdoc\']',
                            'valueUrl' => ['protocol' => ['data', 'https'], 'allowRelative' => false],
                        ],
                        ['name' => 'srcdoc', 'mandatoryOneof' => '[\'src\', \'srcdoc\']'],
                        ['name' => 'width'],
                    ],
                'attrLists' => ['name-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-iframe/',
                'mandatoryAncestor' => 'NOSCRIPT',
                'mandatoryAncestorSuggestedAlternative' => 'AMP-IFRAME',
                'htmlFormat' => ['AMP'],
                ]
            ),
            Element::IMAGE => new Tag(
                [
                'tagName' => Element::IMAGE,
                'attrs' => [
                        ['name' => 'externalresourcesrequired'],
                        ['name' => 'height'],
                        ['name' => 'preserveaspectratio'],
                        ['name' => 'transform'],
                        ['name' => 'width'],
                        ['name' => 'x'],
                        ['name' => 'xlink:actuate'],
                        ['name' => 'xlink:arcrole'],
                        [
                            'name' => 'xlink:href',
                            'alternativeNames' => ['href'],
                            'disallowedValueRegex' => '(^|\s)data:image\/svg\+xml',
                            'valueUrl' => ['protocol' => ['data', 'http', 'https'], 'allowEmpty' => false],
                        ],
                        ['name' => 'xlink:role'],
                        ['name' => 'xlink:show'],
                        ['name' => 'xlink:title'],
                        ['name' => 'xlink:type'],
                        ['name' => 'y'],
                    ],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            'IMG-I-AMPHTML-INTRINSIC-SIZER' => new Tag(
                [
                'tagName' => Element::IMG,
                'specName' => 'IMG-I-AMPHTML-INTRINSIC-SIZER',
                'mandatoryParent' => 'I-AMPHTML-SIZER-INTRINSIC',
                'attrs' => [
                        ['name' => 'alt', 'mandatory' => true, 'value' => ['']],
                        ['name' => 'aria-hidden', 'mandatory' => true, 'value' => ['true']],
                        ['name' => 'class', 'mandatory' => true, 'value' => ['i-amphtml-intrinsic-sizer']],
                        ['name' => 'role', 'mandatory' => true, 'value' => ['presentation']],
                        [
                            'name' => 'src',
                            'mandatory' => true,
                            'valueRegex' => 'data:image\/svg\+xml;charset=utf-8,\s*<svg height="\d+(\.\d+)?" width="\d+(\.\d+)?" xmlns="http:\/\/www\.w3\.org\/2000\/svg" version="1\.1"\/>|data:image\/svg\+xml;charset=utf-8,\s*<svg height=\'\d+(\.\d+)?\' width=\'\d+(\.\d+)?\' xmlns=\'http:\/\/www\.w3\.org\/2000\/svg\' version=\'1\.1\'\/>|data:image\/svg\+xml;base64,[a-zA-Z0-9+\/=]+',
                        ],
                    ],
                'htmlFormat' => ['AMP'],
                'enabledBy' => ['transformed'],
                ]
            ),
            Element::INPUT => new Tag(
                [
                'tagName' => Element::INPUT,
                'attrs' => [
                        ['name' => 'no-verify', 'value' => [''], 'disabledBy' => ['amp4email']],
                        ['name' => 'type', 'disallowedValueRegex' => '(^|\s)(file|image|password|)(\s|$)'],
                        ['name' => '[type]', 'disabledBy' => ['amp4email']],
                    ],
                'attrLists' => ['input-common-attr', 'name-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-form/',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            'input [mask=date-dd-mm-yyyy]' => new Tag(
                [
                'tagName' => Element::INPUT,
                'specName' => 'input [mask=date-dd-mm-yyyy]',
                'attrs' => [['name' => 'mask', 'mandatory' => true, 'value' => ['date-dd-mm-yyyy'], 'dispatchKey' => 'NAME_VALUE_DISPATCH']],
                'attrLists' => ['amp-inputmask-common-attr', 'input-common-attr', 'name-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-inputmask/',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-inputmask'],
                ]
            ),
            'input [mask=date-mm-dd-yyyy]' => new Tag(
                [
                'tagName' => Element::INPUT,
                'specName' => 'input [mask=date-mm-dd-yyyy]',
                'attrs' => [['name' => 'mask', 'mandatory' => true, 'value' => ['date-mm-dd-yyyy'], 'dispatchKey' => 'NAME_VALUE_DISPATCH']],
                'attrLists' => ['amp-inputmask-common-attr', 'input-common-attr', 'name-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-inputmask/',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-inputmask'],
                ]
            ),
            'input [mask=date-mm-yy]' => new Tag(
                [
                'tagName' => Element::INPUT,
                'specName' => 'input [mask=date-mm-yy]',
                'attrs' => [['name' => 'mask', 'mandatory' => true, 'value' => ['date-mm-yy'], 'dispatchKey' => 'NAME_VALUE_DISPATCH']],
                'attrLists' => ['amp-inputmask-common-attr', 'input-common-attr', 'name-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-inputmask/',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-inputmask'],
                ]
            ),
            'input [mask=date-yyyy-mm-dd]' => new Tag(
                [
                'tagName' => Element::INPUT,
                'specName' => 'input [mask=date-yyyy-mm-dd]',
                'attrs' => [['name' => 'mask', 'mandatory' => true, 'value' => ['date-yyyy-mm-dd'], 'dispatchKey' => 'NAME_VALUE_DISPATCH']],
                'attrLists' => ['amp-inputmask-common-attr', 'input-common-attr', 'name-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-inputmask/',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-inputmask'],
                ]
            ),
            'input [mask=payment-card]' => new Tag(
                [
                'tagName' => Element::INPUT,
                'specName' => 'input [mask=payment-card]',
                'attrs' => [['name' => 'mask', 'mandatory' => true, 'value' => ['payment-card'], 'dispatchKey' => 'NAME_VALUE_DISPATCH']],
                'attrLists' => ['amp-inputmask-common-attr', 'input-common-attr', 'name-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-inputmask/',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-inputmask'],
                ]
            ),
            'input [mask] (custom mask)' => new Tag(
                [
                'tagName' => Element::INPUT,
                'specName' => 'input [mask] (custom mask)',
                'attrs' => [
                        [
                            'name' => 'mask',
                            'mandatory' => true,
                            'disallowedValueRegex' => '(payment-card|date-dd-mm-yyyy|date-mm-dd-yyyy|date-mm-yy|date-yyyy-mm-dd)',
                            'dispatchKey' => 'NAME_DISPATCH',
                        ],
                        ['name' => 'mask-trim-zeros', 'valueRegex' => '\d+'],
                        ['name' => '[type]'],
                    ],
                'attrLists' => ['amp-inputmask-common-attr', 'input-common-attr', 'name-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-inputmask/',
                'htmlFormat' => ['AMP'],
                'requiresExtension' => ['amp-inputmask'],
                ]
            ),
            'INPUT [type=file]' => new Tag(
                [
                'tagName' => Element::INPUT,
                'specName' => 'INPUT [type=file]',
                'attrs' => [
                        ['name' => 'no-verify', 'value' => [''], 'disabledBy' => ['amp4email']],
                        ['name' => 'type', 'mandatory' => true, 'dispatchKey' => 'NAME_VALUE_DISPATCH', 'valueCasei' => ['file']],
                        ['name' => '[type]', 'disabledBy' => ['amp4email']],
                    ],
                'attrLists' => ['input-common-attr', 'name-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-form/',
                'mandatoryAncestor' => 'FORM [method=POST]',
                'htmlFormat' => ['AMP'],
                ]
            ),
            'INPUT [type=password]' => new Tag(
                [
                'tagName' => Element::INPUT,
                'specName' => 'INPUT [type=password]',
                'attrs' => [
                        ['name' => 'type', 'mandatory' => true, 'dispatchKey' => 'NAME_VALUE_DISPATCH', 'valueCasei' => ['password']],
                        ['name' => '[type]', 'disabledBy' => ['amp4email']],
                    ],
                'attrLists' => ['input-common-attr', 'name-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-form/',
                'mandatoryAncestor' => 'FORM [method=POST]',
                'htmlFormat' => ['AMP'],
                ]
            ),
            Element::INS => new Tag(
                [
                'tagName' => Element::INS,
                'attrs' => [['name' => 'datetime']],
                'attrLists' => ['cite-attr'],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::KBD => new Tag(
                [
                'tagName' => Element::KBD,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::LABEL => new Tag(
                [
                'tagName' => Element::LABEL,
                'attrs' => [['name' => 'for']],
                'specUrl' => 'https://amp.dev/documentation/components/amp-form/',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::LEGEND => new Tag(
                [
                'tagName' => Element::LEGEND,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::LI => new Tag(
                [
                'tagName' => Element::LI,
                'attrs' => [['name' => 'value', 'valueRegex' => '[0-9]*']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::LINE => new Tag(
                [
                'tagName' => Element::LINE,
                'attrs' => [
                        ['name' => 'externalresourcesrequired'],
                        ['name' => 'sketch:type'],
                        ['name' => 'transform'],
                        ['name' => 'x1'],
                        ['name' => 'x2'],
                        ['name' => 'y1'],
                        ['name' => 'y2'],
                    ],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::LINEARGRADIENT => new Tag(
                [
                'tagName' => Element::LINEARGRADIENT,
                'attrs' => [
                        ['name' => 'externalresourcesrequired'],
                        ['name' => 'gradienttransform'],
                        ['name' => 'gradientunits'],
                        ['name' => 'spreadmethod'],
                        ['name' => 'x1'],
                        ['name' => 'x2'],
                        ['name' => 'y1'],
                        ['name' => 'y2'],
                    ],
                'attrLists' => ['svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr', 'svg-xlink-attributes'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            'lineargradient > stop' => new Tag(
                [
                'tagName' => Element::STOP,
                'specName' => 'lineargradient > stop',
                'attrs' => [['name' => 'offset'], ['name' => 'stop-color'], ['name' => 'stop-opacity']],
                'attrLists' => ['svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'LINEARGRADIENT',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            'link itemprop=' => new Tag(
                [
                'tagName' => Element::LINK,
                'specName' => 'link itemprop=',
                'attrs' => [['name' => 'href', 'mandatory' => true], ['name' => 'itemprop', 'mandatory' => true]],
                'attrLists' => ['common-link-attrs'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'descriptiveName' => 'link itemprop=',
                ]
            ),
            'link itemprop=sameAs' => new Tag(
                [
                'tagName' => Element::LINK,
                'specName' => 'link itemprop=sameAs',
                'attrs' => [
                        ['name' => 'href', 'mandatory' => true],
                        ['name' => 'itemprop', 'mandatory' => true, 'dispatchKey' => 'NAME_VALUE_DISPATCH', 'valueCasei' => ['sameas']],
                    ],
                'attrLists' => ['common-link-attrs'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'descriptiveName' => 'link itemprop=sameAs',
                ]
            ),
            'link property=' => new Tag(
                [
                'tagName' => Element::LINK,
                'specName' => 'link property=',
                'attrs' => [['name' => 'href', 'mandatory' => true], ['name' => 'property', 'mandatory' => true]],
                'attrLists' => ['common-link-attrs'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'descriptiveName' => 'link property=',
                ]
            ),
            'link rel=' => new Tag(
                [
                'tagName' => Element::LINK,
                'specName' => 'link rel=',
                'attrs' => [
                        ['name' => 'href'],
                        [
                            'name' => 'rel',
                            'mandatory' => true,
                            'disallowedValueRegex' => '(^|\s)(canonical|components|import|manifest|preload|serviceworker|stylesheet|subresource)(\s|$)',
                        ],
                    ],
                'attrLists' => ['common-link-attrs'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'disallowedAncestor' => ['TEMPLATE'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            'link rel=canonical' => new Tag(
                [
                'tagName' => Element::LINK,
                'specName' => 'link rel=canonical',
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        [
                            'name' => 'href',
                            'mandatory' => true,
                            'disallowedValueRegex' => '__amp_source_origin',
                            'valueUrl' => ['protocol' => ['http', 'https']],
                        ],
                        ['name' => 'rel', 'mandatory' => true, 'dispatchKey' => 'NAME_VALUE_DISPATCH', 'valueCasei' => ['canonical']],
                    ],
                'attrLists' => ['common-link-attrs'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                'htmlFormat' => ['AMP'],
                'descriptiveName' => 'link rel=canonical',
                ]
            ),
            'link rel=manifest' => new Tag(
                [
                'tagName' => Element::LINK,
                'specName' => 'link rel=manifest',
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        [
                            'name' => 'href',
                            'mandatory' => true,
                            'disallowedValueRegex' => '__amp_source_origin',
                            'valueUrl' => ['protocol' => ['https']],
                        ],
                        ['name' => 'rel', 'mandatory' => true, 'dispatchKey' => 'NAME_VALUE_DISPATCH', 'valueCasei' => ['manifest']],
                    ],
                'attrLists' => ['common-link-attrs'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'satisfies' => ['amp-app-banner data source'],
                'descriptiveName' => 'link rel=manifest',
                ]
            ),
            'link rel=preload' => new Tag(
                [
                'tagName' => Element::LINK,
                'specName' => 'link rel=preload',
                'attrs' => [
                        ['name' => 'as'],
                        ['name' => 'href'],
                        ['name' => 'rel', 'mandatory' => true, 'dispatchKey' => 'NAME_VALUE_DISPATCH', 'valueCasei' => ['preload']],
                        [
                            'name' => 'imagesrcset',
                            'disallowedValueRegex' => '__amp_source_origin',
                            'valueUrl' => ['protocol' => ['http', 'https']],
                        ],
                        ['name' => 'imagesizes'],
                    ],
                'attrLists' => ['common-link-attrs'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'disallowedAncestor' => ['TEMPLATE'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'descriptiveName' => 'link rel=preload',
                ]
            ),
            'link rel=stylesheet for fonts' => new Tag(
                [
                'tagName' => Element::LINK,
                'specName' => 'link rel=stylesheet for fonts',
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        ['name' => 'async'],
                        ['name' => 'crossorigin'],
                        [
                            'name' => 'href',
                            'mandatory' => true,
                            'valueRegex' => 'https://cdn\.materialdesignicons\.com/([0-9]+\.?)+/css/materialdesignicons\.min\.css|https://cloud\.typography\.com/[0-9]*/[0-9]*/css/fonts\.css|https://fast\.fonts\.net/.*|https://fonts\.googleapis\.com/css2?\?.*|https://fonts\.googleapis\.com/icon\?.*|https://fonts\.googleapis\.com/earlyaccess/.*\.css|https://maxcdn\.bootstrapcdn\.com/font-awesome/([0-9]+\.?)+/css/font-awesome\.min\.css(\?.*)?|https://(use|pro)\.fontawesome\.com/releases/v([0-9]+\.?)+/css/[0-9a-zA-Z-]+\.css|https://(use|pro)\.fontawesome\.com/[0-9a-zA-Z-]+\.css|https://use\.typekit\.net/[\w\p{L}\p{N}_]+\.css',
                        ],
                        ['name' => 'integrity'],
                        ['name' => 'media'],
                        ['name' => 'rel', 'mandatory' => true, 'dispatchKey' => 'NAME_VALUE_DISPATCH', 'valueCasei' => ['stylesheet']],
                        ['name' => 'type', 'valueCasei' => ['text/css']],
                    ],
                'attrLists' => ['nonce-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#custom-fonts',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'namedId' => 'LINK_FONT_STYLESHEET',
                'descriptiveName' => 'link rel=stylesheet for fonts',
                ]
            ),
            Element::LISTING => new Tag(
                [
                'tagName' => Element::LISTING,
                'htmlFormat' => ['AMP'],
                ]
            ),
            Element::MAIN => new Tag(
                [
                'tagName' => Element::MAIN,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::MARK => new Tag(
                [
                'tagName' => Element::MARK,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::MARKER => new Tag(
                [
                'tagName' => Element::MARKER,
                'attrs' => [
                        ['name' => 'externalresourcesrequired'],
                        ['name' => 'markerheight'],
                        ['name' => 'markerunits'],
                        ['name' => 'markerwidth'],
                        ['name' => 'orient'],
                        ['name' => 'preserveaspectratio'],
                        ['name' => 'refx'],
                        ['name' => 'refy'],
                        ['name' => 'transform'],
                        ['name' => 'viewbox'],
                    ],
                'attrLists' => ['svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::MASK => new Tag(
                [
                'tagName' => Element::MASK,
                'attrs' => [
                        ['name' => 'externalresourcesrequired'],
                        ['name' => 'height'],
                        ['name' => 'maskcontentunits'],
                        ['name' => 'maskunits'],
                        ['name' => 'width'],
                        ['name' => 'x'],
                        ['name' => 'y'],
                    ],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            'meta charset=utf-8' => new Tag(
                [
                'tagName' => Element::META,
                'specName' => 'meta charset=utf-8',
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [['name' => 'charset', 'mandatory' => true, 'dispatchKey' => 'NAME_DISPATCH', 'valueCasei' => ['utf-8']]],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                'descriptiveName' => 'meta charset=utf-8',
                ]
            ),
            Element::METADATA => new Tag(
                [
                'tagName' => Element::METADATA,
                'attrLists' => ['svg-core-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            'meta http-equiv=content-language' => new Tag(
                [
                'tagName' => Element::META,
                'specName' => 'meta http-equiv=content-language',
                'attrs' => [
                        ['name' => 'content', 'mandatory' => true],
                        [
                            'name' => 'http-equiv',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_DISPATCH',
                            'valueCasei' => ['content-language'],
                        ],
                    ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'mandatoryAncestor' => 'HEAD',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            'meta http-equiv=Content-Script-Type' => new Tag(
                [
                'tagName' => Element::META,
                'specName' => 'meta http-equiv=Content-Script-Type',
                'attrs' => [
                        ['name' => 'content', 'mandatory' => true, 'valueCasei' => ['text/javascript']],
                        [
                            'name' => 'http-equiv',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_DISPATCH',
                            'valueCasei' => ['content-script-type'],
                        ],
                    ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'mandatoryAncestor' => 'HEAD',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            'meta http-equiv=Content-Style-Type' => new Tag(
                [
                'tagName' => Element::META,
                'specName' => 'meta http-equiv=Content-Style-Type',
                'attrs' => [
                        ['name' => 'content', 'mandatory' => true, 'valueCasei' => ['text/css']],
                        [
                            'name' => 'http-equiv',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_DISPATCH',
                            'valueCasei' => ['content-style-type'],
                        ],
                    ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'mandatoryAncestor' => 'HEAD',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            'meta http-equiv=Content-Type' => new Tag(
                [
                'tagName' => Element::META,
                'specName' => 'meta http-equiv=Content-Type',
                'attrs' => [
                        ['name' => 'content', 'mandatory' => true, 'valueCasei' => ['text/html; charset=utf-8']],
                        [
                            'name' => 'http-equiv',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_DISPATCH',
                            'valueCasei' => ['content-type'],
                        ],
                    ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'mandatoryAncestor' => 'HEAD',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            'meta http-equiv=imagetoolbar' => new Tag(
                [
                'tagName' => Element::META,
                'specName' => 'meta http-equiv=imagetoolbar',
                'attrs' => [
                        ['name' => 'content', 'mandatory' => true],
                        [
                            'name' => 'http-equiv',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_DISPATCH',
                            'valueCasei' => ['imagetoolbar'],
                        ],
                    ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'mandatoryAncestor' => 'HEAD',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            'meta http-equiv=origin-trial' => new Tag(
                [
                'tagName' => Element::META,
                'specName' => 'meta http-equiv=origin-trial',
                'attrs' => [
                        ['name' => 'content', 'mandatory' => true],
                        [
                            'name' => 'http-equiv',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_DISPATCH',
                            'valueCasei' => ['origin-trial'],
                        ],
                    ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'mandatoryAncestor' => 'HEAD',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            'meta http-equiv=pics-label' => new Tag(
                [
                'tagName' => Element::META,
                'specName' => 'meta http-equiv=pics-label',
                'attrs' => [
                        ['name' => 'content', 'mandatory' => true],
                        [
                            'name' => 'http-equiv',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_DISPATCH',
                            'valueCasei' => ['pics-label'],
                        ],
                    ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'mandatoryAncestor' => 'HEAD',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            'meta http-equiv=resource-type' => new Tag(
                [
                'tagName' => Element::META,
                'specName' => 'meta http-equiv=resource-type',
                'attrs' => [
                        ['name' => 'content', 'mandatory' => true],
                        [
                            'name' => 'http-equiv',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_DISPATCH',
                            'valueCasei' => ['resource-type'],
                        ],
                    ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'mandatoryAncestor' => 'HEAD',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            'meta http-equiv=x-dns-prefetch-control' => new Tag(
                [
                'tagName' => Element::META,
                'specName' => 'meta http-equiv=x-dns-prefetch-control',
                'attrs' => [
                        ['name' => 'content', 'mandatory' => true, 'valueCasei' => ['off', 'on']],
                        [
                            'name' => 'http-equiv',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_DISPATCH',
                            'valueCasei' => ['x-dns-prefetch-control'],
                        ],
                    ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'mandatoryAncestor' => 'HEAD',
                'htmlFormat' => ['AMP'],
                ]
            ),
            'meta http-equiv=X-UA-Compatible' => new Tag(
                [
                'tagName' => Element::META,
                'specName' => 'meta http-equiv=X-UA-Compatible',
                'attrs' => [
                        [
                            'name' => 'content',
                            'mandatory' => true,
                            'valueProperties' => [
                                'properties' => [['name' => 'ie', 'value' => 'edge'], ['name' => 'chrome', 'value' => '1']],
                            ],
                        ],
                        [
                            'name' => 'http-equiv',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_DISPATCH',
                            'valueCasei' => ['x-ua-compatible'],
                        ],
                    ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'mandatoryAncestor' => 'HEAD',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'descriptiveName' => 'meta http-equiv=X-UA-Compatible',
                ]
            ),
            'meta name=amp-3p-iframe-src' => new Tag(
                [
                'tagName' => Element::META,
                'specName' => 'meta name=amp-3p-iframe-src',
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        ['name' => 'content', 'mandatory' => true, 'valueUrl' => ['protocol' => ['https']]],
                        [
                            'name' => 'name',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_DISPATCH',
                            'valueCasei' => ['amp-3p-iframe-src'],
                        ],
                    ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-ad/',
                'htmlFormat' => ['AMP'],
                ]
            ),
            'meta name=amp-ad-doubleclick-sra' => new Tag(
                [
                'tagName' => Element::META,
                'specName' => 'meta name=amp-ad-doubleclick-sra',
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        [
                            'name' => 'name',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_DISPATCH',
                            'valueCasei' => ['amp-ad-doubleclick-sra'],
                        ],
                    ],
                'htmlFormat' => ['AMP'],
                ]
            ),
            'meta name=amp-ad-enable-refresh' => new Tag(
                [
                'tagName' => Element::META,
                'specName' => 'meta name=amp-ad-enable-refresh',
                'attrs' => [
                        ['name' => 'content', 'mandatory' => true],
                        [
                            'name' => 'name',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_DISPATCH',
                            'valueCasei' => ['amp-ad-enable-refresh'],
                        ],
                    ],
                'mandatoryAncestor' => 'HEAD',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            'meta name=amp-consent-blocking' => new Tag(
                [
                'tagName' => Element::META,
                'specName' => 'meta name=amp-consent-blocking',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        ['name' => 'content', 'mandatory' => true],
                        [
                            'name' => 'name',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_DISPATCH',
                            'valueCasei' => ['amp-consent-blocking'],
                        ],
                    ],
                'htmlFormat' => ['AMP'],
                'satisfies' => ['meta name=amp-consent-blocking'],
                ]
            ),
            'meta name=amp-cta-landing-page-type' => new Tag(
                [
                'tagName' => Element::META,
                'specName' => 'meta name=amp-cta-landing-page-type',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        ['name' => 'content', 'mandatory' => true, 'valueCasei' => ['amp', 'nonamp', 'story']],
                        [
                            'name' => 'name',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_DISPATCH',
                            'valueCasei' => ['amp-cta-landing-page-type'],
                        ],
                    ],
                'htmlFormat' => ['AMP4ADS'],
                ]
            ),
            'meta name=amp-cta-type' => new Tag(
                [
                'tagName' => Element::META,
                'specName' => 'meta name=amp-cta-type',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        ['name' => 'content', 'mandatory' => true],
                        ['name' => 'name', 'mandatory' => true, 'dispatchKey' => 'NAME_VALUE_DISPATCH', 'valueCasei' => ['amp-cta-type']],
                    ],
                'htmlFormat' => ['AMP4ADS'],
                ]
            ),
            'meta name=amp-cta-url' => new Tag(
                [
                'tagName' => Element::META,
                'specName' => 'meta name=amp-cta-url',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        ['name' => 'content', 'mandatory' => true],
                        ['name' => 'name', 'mandatory' => true, 'dispatchKey' => 'NAME_VALUE_DISPATCH', 'valueCasei' => ['amp-cta-url']],
                    ],
                'htmlFormat' => ['AMP4ADS'],
                ]
            ),
            'meta name=amp-experiment-token' => new Tag(
                [
                'tagName' => Element::META,
                'specName' => 'meta name=amp-experiment-token',
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        ['name' => 'content', 'mandatory' => true],
                        [
                            'name' => 'name',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_DISPATCH',
                            'valueCasei' => ['amp-experiment-token'],
                        ],
                    ],
                'htmlFormat' => ['AMP'],
                ]
            ),
            'meta name=amp-experiments-opt-in' => new Tag(
                [
                'tagName' => Element::META,
                'specName' => 'meta name=amp-experiments-opt-in',
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        ['name' => 'content', 'mandatory' => true],
                        [
                            'name' => 'name',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_DISPATCH',
                            'valueCasei' => ['amp-experiments-opt-in'],
                        ],
                    ],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            'meta name=amp-google-clientid-id-api' => new Tag(
                [
                'tagName' => Element::META,
                'specName' => 'meta name=amp-google-clientid-id-api',
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        ['name' => 'content', 'mandatory' => true],
                        [
                            'name' => 'name',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_DISPATCH',
                            'valueCasei' => ['amp-google-client-id-api'],
                        ],
                    ],
                'htmlFormat' => ['AMP'],
                ]
            ),
            'meta name=amp-link-variable-allowed-origin' => new Tag(
                [
                'tagName' => Element::META,
                'specName' => 'meta name=amp-link-variable-allowed-origin',
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        ['name' => 'content', 'mandatory' => true],
                        [
                            'name' => 'name',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_DISPATCH',
                            'valueCasei' => ['amp-link-variable-allowed-origin'],
                        ],
                    ],
                'htmlFormat' => ['AMP'],
                ]
            ),
            'meta name=amp-list-load-more' => new Tag(
                [
                'tagName' => Element::META,
                'specName' => 'meta name=amp-list-load-more',
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        ['name' => 'content', 'mandatory' => true],
                        [
                            'name' => 'name',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_DISPATCH',
                            'valueCasei' => ['amp-list-load-more'],
                        ],
                    ],
                'htmlFormat' => ['AMP'],
                ]
            ),
            'meta name=amp-recaptcha-input' => new Tag(
                [
                'tagName' => Element::META,
                'specName' => 'meta name=amp-recaptcha-input',
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        ['name' => 'content', 'mandatory' => true],
                        [
                            'name' => 'name',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_DISPATCH',
                            'valueCasei' => ['amp-recaptcha-input'],
                        ],
                    ],
                'htmlFormat' => ['AMP'],
                ]
            ),
            'meta name=amp-script-src' => new Tag(
                [
                'tagName' => Element::META,
                'specName' => 'meta name=amp-script-src',
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        ['name' => 'content', 'mandatory' => true],
                        ['name' => 'name', 'mandatory' => true, 'dispatchKey' => 'NAME_VALUE_DISPATCH', 'valueCasei' => ['amp-script-src']],
                    ],
                'htmlFormat' => ['AMP'],
                ]
            ),
            'meta name=amp-story-generator-name' => new Tag(
                [
                'tagName' => Element::META,
                'specName' => 'meta name=amp-story-generator-name',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        ['name' => 'content', 'mandatory' => true],
                        ['name' => 'name', 'mandatory' => true, 'valueCasei' => ['amp-story-generator-name']],
                    ],
                'htmlFormat' => ['AMP'],
                ]
            ),
            'meta name=amp-story-generator-version' => new Tag(
                [
                'tagName' => Element::META,
                'specName' => 'meta name=amp-story-generator-version',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        ['name' => 'content', 'mandatory' => true],
                        ['name' => 'name', 'mandatory' => true, 'valueCasei' => ['amp-story-generator-version']],
                    ],
                'htmlFormat' => ['AMP'],
                ]
            ),
            'meta name=amp-to-amp-navigation' => new Tag(
                [
                'tagName' => Element::META,
                'specName' => 'meta name=amp-to-amp-navigation',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        ['name' => 'content', 'mandatory' => true],
                        [
                            'name' => 'name',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_DISPATCH',
                            'valueCasei' => ['amp-to-amp-navigation'],
                        ],
                    ],
                'htmlFormat' => ['AMP'],
                ]
            ),
            'meta name=amp4ads-id' => new Tag(
                [
                'tagName' => Element::META,
                'specName' => 'meta name=amp4ads-id',
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        ['name' => 'content', 'mandatory' => true],
                        ['name' => 'name', 'mandatory' => true, 'dispatchKey' => 'NAME_VALUE_DISPATCH', 'valueCasei' => ['amp4ads-id']],
                    ],
                'htmlFormat' => ['AMP4ADS'],
                ]
            ),
            'meta name=amp4ads-vars-*' => new Tag(
                [
                'tagName' => Element::META,
                'specName' => 'meta name=amp4ads-vars-*',
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        ['name' => 'content', 'mandatory' => true],
                        ['name' => 'name', 'mandatory' => true, 'valueRegex' => 'amp4ads-vars-.+'],
                    ],
                'htmlFormat' => ['AMP4ADS'],
                ]
            ),
            'meta name= and content=' => new Tag(
                [
                'tagName' => Element::META,
                'specName' => 'meta name= and content=',
                'attrs' => [
                        ['name' => 'content'],
                        ['name' => 'itemprop'],
                        [
                            'name' => 'name',
                            'disallowedValueRegex' => '(^|\s)(amp-.*|amp4ads-.*|apple-itunes-app|content-disposition|revisit-after|viewport)(\s|$)',
                        ],
                        ['name' => 'property'],
                        ['name' => 'scheme'],
                    ],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            'meta name=apple-itunes-app' => new Tag(
                [
                'tagName' => Element::META,
                'specName' => 'meta name=apple-itunes-app',
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        ['name' => 'content', 'mandatory' => true, 'valueRegex' => '.*app-id=.*'],
                        [
                            'name' => 'name',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_DISPATCH',
                            'valueCasei' => ['apple-itunes-app'],
                        ],
                    ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'satisfies' => ['amp-app-banner data source'],
                ]
            ),
            'meta name=viewport' => new Tag(
                [
                'tagName' => Element::META,
                'specName' => 'meta name=viewport',
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        [
                            'name' => 'content',
                            'mandatory' => true,
                            'valueProperties' => [
                                'properties' => [
                                    ['name' => 'width', 'mandatory' => true, 'value' => 'device-width'],
                                    ['name' => 'height'],
                                    ['name' => 'initial-scale'],
                                    ['name' => 'minimum-scale'],
                                    ['name' => 'maximum-scale'],
                                    ['name' => 'shrink-to-fit'],
                                    ['name' => 'user-scalable'],
                                    ['name' => 'viewport-fit'],
                                ],
                            ],
                        ],
                        ['name' => 'name', 'mandatory' => true, 'value' => ['viewport'], 'dispatchKey' => 'NAME_VALUE_DISPATCH'],
                    ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#required-markup',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'descriptiveName' => 'meta name=viewport',
                ]
            ),
            Element::METER => new Tag(
                [
                'tagName' => Element::METER,
                'attrs' => [
                        ['name' => 'high'],
                        ['name' => 'low'],
                        ['name' => 'max'],
                        ['name' => 'min'],
                        ['name' => 'optimum'],
                        ['name' => 'value'],
                    ],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::MULTICOL => new Tag(
                [
                'tagName' => Element::MULTICOL,
                'htmlFormat' => ['AMP'],
                ]
            ),
            Element::NAV => new Tag(
                [
                'tagName' => Element::NAV,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::NEXTID => new Tag(
                [
                'tagName' => Element::NEXTID,
                'htmlFormat' => ['AMP'],
                ]
            ),
            Element::NOBR => new Tag(
                [
                'tagName' => Element::NOBR,
                'htmlFormat' => ['AMP'],
                ]
            ),
            Element::NOSCRIPT => new Tag(
                [
                'tagName' => Element::NOSCRIPT,
                'disallowedAncestor' => ['NOSCRIPT'],
                'mandatoryAncestor' => 'BODY',
                'htmlFormat' => ['AMP'],
                ]
            ),
            'noscript > img' => new Tag(
                [
                'tagName' => Element::IMG,
                'specName' => 'noscript > img',
                'attrs' => [
                        ['name' => 'alt'],
                        ['name' => 'attribution'],
                        ['name' => 'border'],
                        ['name' => 'decoding', 'value' => ['async', 'auto', 'sync']],
                        ['name' => 'height'],
                        ['name' => 'importance'],
                        ['name' => 'ismap'],
                        ['name' => 'intrinsicsize'],
                        ['name' => 'loading'],
                        [
                            'name' => 'longdesc',
                            'disallowedValueRegex' => '__amp_source_origin',
                            'valueUrl' => ['protocol' => ['http', 'https']],
                        ],
                        ['name' => 'sizes'],
                        ['name' => 'width'],
                    ],
                'attrLists' => ['mandatory-src-or-srcset'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-img/',
                'mandatoryAncestor' => 'NOSCRIPT',
                'mandatoryAncestorSuggestedAlternative' => 'AMP-IMG',
                'htmlFormat' => ['AMP'],
                'descriptiveName' => 'img',
                ]
            ),
            'noscript > style[amp-boilerplate]' => new Tag(
                [
                'tagName' => Element::STYLE,
                'specName' => 'noscript > style[amp-boilerplate]',
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => 'NOSCRIPT',
                'attrs' => [['name' => 'amp-boilerplate', 'mandatory' => true, 'value' => [''], 'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH']],
                'attrLists' => ['nonce-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amp-boilerplate/?format=websites',
                'cdata' => [
                        'cdataRegex' => '\s*body\s*{\s*-webkit-animation:\s*none;\s*-moz-animation:\s*none;\s*-ms-animation:\s*none;\s*animation:\s*none;?\s*}\s*',
                        'docCssBytes' => false,
                    ],
                'mandatoryAncestor' => 'HEAD',
                'htmlFormat' => ['AMP'],
                'disabledBy' => ['transformed'],
                'descriptiveName' => 'noscript > style[amp-boilerplate]',
                ]
            ),
            'noscript > style[amp-boilerplate] (transformed)' => new Tag(
                [
                'tagName' => Element::STYLE,
                'specName' => 'noscript > style[amp-boilerplate] (transformed)',
                'unique' => true,
                'mandatoryParent' => 'NOSCRIPT',
                'attrs' => [['name' => 'amp-boilerplate', 'mandatory' => true, 'value' => [''], 'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH']],
                'attrLists' => ['nonce-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amp-boilerplate/?format=websites',
                'cdata' => [
                        'cdataRegex' => '\s*body\s*{\s*-webkit-animation:\s*none;\s*-moz-animation:\s*none;\s*-ms-animation:\s*none;\s*animation:\s*none;?\s*}\s*',
                        'docCssBytes' => false,
                    ],
                'mandatoryAncestor' => 'HEAD',
                'htmlFormat' => ['AMP'],
                'enabledBy' => ['transformed'],
                'descriptiveName' => 'noscript > style[amp-boilerplate]',
                ]
            ),
            'noscript enclosure for boilerplate' => new Tag(
                [
                'tagName' => Element::NOSCRIPT,
                'specName' => 'noscript enclosure for boilerplate',
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amp-boilerplate/?format=websites',
                'htmlFormat' => ['AMP'],
                'disabledBy' => ['transformed'],
                'descriptiveName' => 'noscript enclosure for boilerplate',
                ]
            ),
            'noscript enclosure for boilerplate (transformed)' => new Tag(
                [
                'tagName' => Element::NOSCRIPT,
                'specName' => 'noscript enclosure for boilerplate (transformed)',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amp-boilerplate/?format=websites',
                'htmlFormat' => ['AMP'],
                'enabledBy' => ['transformed'],
                'descriptiveName' => 'noscript enclosure for boilerplate',
                ]
            ),
            Element::O_P => new Tag(
                [
                'tagName' => Element::O_P,
                'htmlFormat' => ['AMP'],
                ]
            ),
            Element::OL => new Tag(
                [
                'tagName' => Element::OL,
                'attrs' => [
                        ['name' => 'reversed', 'value' => ['']],
                        ['name' => 'start', 'valueRegex' => '[0-9]*'],
                        ['name' => 'type', 'valueRegex' => '[1AaIi]'],
                    ],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::OPTGROUP => new Tag(
                [
                'tagName' => Element::OPTGROUP,
                'mandatoryParent' => 'SELECT',
                'attrs' => [['name' => 'disabled'], ['name' => 'label'], ['name' => '[disabled]'], ['name' => '[label]']],
                'specUrl' => 'https://amp.dev/documentation/components/amp-form/',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::OPTION => new Tag(
                [
                'tagName' => Element::OPTION,
                'attrs' => [
                        ['name' => 'disabled'],
                        ['name' => 'label'],
                        ['name' => 'selected'],
                        ['name' => 'value'],
                        ['name' => '[disabled]'],
                        ['name' => '[label]'],
                        ['name' => '[selected]'],
                        ['name' => '[value]'],
                    ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-form/',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::OUTPUT => new Tag(
                [
                'tagName' => Element::OUTPUT,
                'attrs' => [['name' => 'for'], ['name' => 'form']],
                'attrLists' => ['name-attr'],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::P => new Tag(
                [
                'tagName' => Element::P,
                'attrs' => [['name' => 'align']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::PATH => new Tag(
                [
                'tagName' => Element::PATH,
                'attrs' => [
                        ['name' => 'd'],
                        ['name' => 'externalresourcesrequired'],
                        ['name' => 'pathlength'],
                        ['name' => 'sketch:type'],
                        ['name' => 'transform'],
                    ],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::PATTERN => new Tag(
                [
                'tagName' => Element::PATTERN,
                'attrs' => [
                        ['name' => 'externalresourcesrequired'],
                        ['name' => 'height'],
                        ['name' => 'patterncontentunits'],
                        ['name' => 'patterntransform'],
                        ['name' => 'patternunits'],
                        ['name' => 'preserveaspectratio'],
                        ['name' => 'viewbox'],
                        ['name' => 'width'],
                        ['name' => 'x'],
                        ['name' => 'y'],
                    ],
                'attrLists' => [
                        'svg-conditional-processing-attributes',
                        'svg-core-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                        'svg-xlink-attributes',
                    ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::PICTURE => new Tag(
                [
                'tagName' => Element::PICTURE,
                'mandatoryParent' => 'NOSCRIPT',
                'specUrl' => 'https://amp.dev/documentation/components/amp-img/',
                'htmlFormat' => ['AMP'],
                ]
            ),
            'picture > source' => new Tag(
                [
                'tagName' => Element::SOURCE,
                'specName' => 'picture > source',
                'mandatoryParent' => 'PICTURE',
                'attrs' => [
                        ['name' => 'media'],
                        ['name' => 'sizes'],
                        [
                            'name' => 'srcset',
                            'disallowedValueRegex' => '__amp_source_origin',
                            'valueUrl' => ['protocol' => ['data', 'http', 'https'], 'allowRelative' => true],
                        ],
                        ['name' => 'type'],
                    ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-img/',
                'htmlFormat' => ['AMP'],
                ]
            ),
            Element::POLYGON => new Tag(
                [
                'tagName' => Element::POLYGON,
                'attrs' => [['name' => 'externalresourcesrequired'], ['name' => 'points'], ['name' => 'sketch:type'], ['name' => 'transform']],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::POLYLINE => new Tag(
                [
                'tagName' => Element::POLYLINE,
                'attrs' => [['name' => 'externalresourcesrequired'], ['name' => 'points'], ['name' => 'sketch:type'], ['name' => 'transform']],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::PRE => new Tag(
                [
                'tagName' => Element::PRE,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::PROGRESS => new Tag(
                [
                'tagName' => Element::PROGRESS,
                'attrs' => [['name' => 'max'], ['name' => 'value']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::Q => new Tag(
                [
                'tagName' => Element::Q,
                'attrLists' => ['cite-attr'],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::RADIALGRADIENT => new Tag(
                [
                'tagName' => Element::RADIALGRADIENT,
                'attrs' => [
                        ['name' => 'cx'],
                        ['name' => 'cy'],
                        ['name' => 'externalresourcesrequired'],
                        ['name' => 'fr'],
                        ['name' => 'fx'],
                        ['name' => 'fy'],
                        ['name' => 'gradienttransform'],
                        ['name' => 'gradientunits'],
                        ['name' => 'r'],
                        ['name' => 'spreadmethod'],
                    ],
                'attrLists' => ['svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr', 'svg-xlink-attributes'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            'radialgradient > stop' => new Tag(
                [
                'tagName' => Element::STOP,
                'specName' => 'radialgradient > stop',
                'attrs' => [['name' => 'offset'], ['name' => 'stop-color'], ['name' => 'stop-opacity']],
                'attrLists' => ['svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'RADIALGRADIENT',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::RB => new Tag(
                [
                'tagName' => Element::RB,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::RECT => new Tag(
                [
                'tagName' => Element::RECT,
                'attrs' => [
                        ['name' => 'externalresourcesrequired'],
                        ['name' => 'height'],
                        ['name' => 'rx'],
                        ['name' => 'ry'],
                        ['name' => 'sketch:type'],
                        ['name' => 'transform'],
                        ['name' => 'width'],
                        ['name' => 'x'],
                        ['name' => 'y'],
                    ],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::RP => new Tag(
                [
                'tagName' => Element::RP,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::RT => new Tag(
                [
                'tagName' => Element::RT,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::RTC => new Tag(
                [
                'tagName' => Element::RTC,
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::RUBY => new Tag(
                [
                'tagName' => Element::RUBY,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::S => new Tag(
                [
                'tagName' => Element::S,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::SAMP => new Tag(
                [
                'tagName' => Element::SAMP,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::SCRIPT => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-3d-gltf', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (2)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-3q-player', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (3)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-access-laterpay', 'version' => ['0.1', '0.2', 'latest'], 'requiresUsage' => 'NONE'],
                'requiresExtension' => ['amp-access'],
                ]
            ),
            'SCRIPT (4)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-access-poool', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'NONE'],
                'requiresExtension' => ['amp-access'],
                ]
            ),
            'SCRIPT (5)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-access-scroll', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'NONE'],
                'requiresExtension' => ['amp-access'],
                ]
            ),
            'SCRIPT (6)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                        'name' => 'amp-access',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (7)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'extensionSpec' => [
                        'name' => 'amp-accordion',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (8)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-action-macro', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (9)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-ad-custom', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (10)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4ADS'],
                'extensionSpec' => ['name' => 'amp-ad-exit', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (11)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-addthis', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (12)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'extensionSpec' => [
                        'name' => 'amp-analytics',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (13)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'extensionSpec' => [
                        'name' => 'amp-anim',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (14)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'extensionSpec' => ['name' => 'amp-animation', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (15)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                        'name' => 'amp-apester-media',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (16)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-app-banner', 'version' => ['0.1', 'latest'], 'deprecatedAllowDuplicates' => true],
                ]
            ),
            'SCRIPT (17)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'extensionSpec' => [
                        'name' => 'amp-audio',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (18)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-auto-ads', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (19)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-autocomplete', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (20)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-base-carousel', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (21)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-beopinion', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (22)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'extensionSpec' => ['name' => 'amp-bind', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'NONE'],
                ]
            ),
            'SCRIPT (23)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-bodymovin-animation', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (24)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                        'name' => 'amp-brid-player',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (25)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                        'name' => 'amp-brightcove',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (26)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-byside-content', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (27)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-call-tracking', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'EXEMPTED'],
                ]
            ),
            'SCRIPT (28)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'extensionSpec' => [
                        'name' => 'amp-carousel',
                        'version' => ['0.1', '0.2', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (29)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-connatix-player', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (30)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-consent', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (31)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                        'name' => 'amp-dailymotion',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (32)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-date-countdown', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (33)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-date-display', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (34)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-date-picker', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (35)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-delight-player', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (36)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                        'name' => 'amp-dynamic-css-classes',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'NONE',
                    ],
                ]
            ),
            'SCRIPT (37)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-embedly-card', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (38)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                        'name' => 'amp-experiment',
                        'version' => ['0.1', '1.0', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (39)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-facebook-comments', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (40)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-facebook-like', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (41)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-facebook-page', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (42)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                        'name' => 'amp-facebook',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (43)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'extensionSpec' => [
                        'name' => 'amp-fit-text',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (44)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'extensionSpec' => [
                        'name' => 'amp-font',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (45)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'extensionSpec' => [
                        'name' => 'amp-form',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (46)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-fx-collection', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'NONE'],
                ]
            ),
            'SCRIPT (47)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                        'name' => 'amp-fx-flying-carpet',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (48)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-geo', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (49)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                        'name' => 'amp-gfycat',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (50)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-gist', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (51)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-google-document-embed', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (52)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4ADS'],
                'extensionSpec' => ['name' => 'amp-gwd-animation', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (53)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-hulu', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (54)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                        'name' => 'amp-iframe',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (55)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-ima-video', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (56)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                        'name' => 'amp-image-lightbox',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (57)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-image-slider', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (58)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-imgur', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (59)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-inline-gallery', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (60)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-inputmask', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'NONE'],
                ]
            ),
            'SCRIPT (61)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                        'name' => 'amp-instagram',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (62)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                        'name' => 'amp-install-serviceworker',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (63)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-izlesene', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'EXEMPTED'],
                ]
            ),
            'SCRIPT (64)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                        'name' => 'amp-jwplayer',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (65)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                        'name' => 'amp-kaltura-player',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (66)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-lightbox-gallery', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'NONE'],
                ]
            ),
            'SCRIPT (67)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                        'name' => 'amp-lightbox',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (68)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'satisfies' => ['amp-link-rewriter'],
                'extensionSpec' => ['name' => 'amp-link-rewriter', 'version' => ['0.1', 'latest']],
                'excludes' => ['amp-skimlinks', 'amp-smartlinks'],
                ]
            ),
            'SCRIPT (69)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                        'name' => 'amp-list',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (70)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'mandatoryParent' => 'HEAD',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'uniqueWarning' => true,
                'extensionSpec' => ['name' => 'amp-live-list', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'EXEMPTED'],
                ]
            ),
            'SCRIPT (71)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-mathml', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (72)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-mega-menu', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (73)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-megaphone', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (74)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-minute-media-player', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (75)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-mowplayer', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (76)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrs' => [['name' => 'no-fallback']],
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4ADS'],
                'extensionSpec' => ['name' => 'amp-mraid', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'NONE', 'extensionType' => 'HOST_SERVICE'],
                ]
            ),
            'SCRIPT (77)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                        'name' => 'amp-mustache',
                        'version' => ['0.1', '0.2', 'latest'],
                        'deprecatedVersion' => ['0.1'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                        'extensionType' => 'CUSTOM_TEMPLATE',
                    ],
                ]
            ),
            'SCRIPT (78)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-nested-menu', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (79)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-next-page', 'version' => ['0.1', '1.0', 'latest']],
                ]
            ),
            'SCRIPT (80)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-nexxtv-player', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (81)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                        'name' => 'amp-o2-player',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (82)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-onetap-google', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (83)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-ooyala-player', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (84)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-orientation-observer', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (85)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-pan-zoom', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (86)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                        'name' => 'amp-pinterest',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (87)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-playbuzz', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (88)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'extensionSpec' => ['name' => 'amp-position-observer', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (89)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-powr-player', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (90)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                        'name' => 'amp-reach-player',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (91)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-recaptcha-input', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (92)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-redbull-player', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (93)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-reddit', 'version' => ['0.1', 'latest'], 'deprecatedAllowDuplicates' => true],
                ]
            ),
            'SCRIPT (94)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-riddle-quiz', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (95)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-script', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (96)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'extensionSpec' => ['name' => 'amp-selector', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'EXEMPTED'],
                ]
            ),
            'SCRIPT (97)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                        'name' => 'amp-sidebar',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (98)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'satisfies' => ['amp-skimlinks'],
                'extensionSpec' => ['name' => 'amp-skimlinks', 'version' => ['0.1', 'latest']],
                'excludes' => ['amp-link-rewriter', 'amp-smartlinks'],
                ]
            ),
            'SCRIPT (99)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'deprecation' => 'amp-carousel',
                'deprecationUrl' => 'https://www.ampproject.org/docs/reference/components/amp-carousel',
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                        'name' => 'amp-slides',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'NONE',
                    ],
                ]
            ),
            'SCRIPT (100)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'satisfies' => ['amp-smartlinks'],
                'extensionSpec' => ['name' => 'amp-smartlinks', 'version' => ['0.1', 'latest']],
                'excludes' => ['amp-link-rewriter', 'amp-skimlinks'],
                ]
            ),
            'SCRIPT (101)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'extensionSpec' => [
                        'name' => 'amp-social-share',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (102)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                        'name' => 'amp-soundcloud',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (103)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                        'name' => 'amp-springboard-player',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (104)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                        'name' => 'amp-sticky-ad',
                        'version' => ['0.1', '1.0', 'latest'],
                        'deprecatedVersion' => ['0.1'],
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (105)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-story-360', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (106)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-story-auto-ads', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (107)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-story-interactive', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (108)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-story-panning-media', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (109)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-story-player', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (110)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-story', 'version' => ['1.0', 'latest']],
                ]
            ),
            'SCRIPT (111)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-subscriptions', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'NONE'],
                ]
            ),
            'SCRIPT (112)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-subscriptions-google', 'version' => ['0.1', 'latest'], 'requiresUsage' => 'NONE'],
                'requiresExtension' => ['amp-subscriptions'],
                ]
            ),
            'SCRIPT (113)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-timeago', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (114)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-truncate-text', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (115)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                        'name' => 'amp-twitter',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (116)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                        'name' => 'amp-user-notification',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (117)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-video-docking', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (118)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-video-iframe', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (119)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                        'name' => 'amp-vimeo',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (120)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                        'name' => 'amp-vine',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'SCRIPT (121)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-viqeo-player', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (122)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-vk', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (123)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-web-push', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (124)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-wistia-player', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (125)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-yotpo/',
                'htmlFormat' => ['AMP'],
                'extensionSpec' => ['name' => 'amp-yotpo', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT (126)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP'],
                'extensionSpec' => [
                        'name' => 'amp-youtube',
                        'version' => ['0.1', 'latest'],
                        'deprecatedAllowDuplicates' => true,
                        'requiresUsage' => 'EXEMPTED',
                    ],
                ]
            ),
            'script id=amp-rtc' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'script id=amp-rtc',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        ['name' => 'id', 'mandatory' => true, 'dispatchKey' => 'NAME_VALUE_DISPATCH', 'valueCasei' => ['amp-rtc']],
                        ['name' => 'type', 'mandatory' => true, 'valueCasei' => ['application/json']],
                    ],
                'attrLists' => ['nonce-attr'],
                'cdata' => ['disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']]],
                'htmlFormat' => ['AMP'],
                ]
            ),
            'script type=application/ld+json' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'script type=application/ld+json',
                'attrs' => [
                        [
                            'name' => 'type',
                            'mandatory' => true,
                            'dispatchKey' => 'NAME_VALUE_DISPATCH',
                            'valueCasei' => ['application/ld+json'],
                        ],
                    ],
                'attrLists' => ['nonce-attr'],
                'cdata' => ['disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']]],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                'descriptiveName' => 'script type=application/ld+json',
                ]
            ),
            'SCRIPT type=text/plain' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'SCRIPT type=text/plain',
                'attrs' => [
                        [
                            'name' => 'id',
                            'disallowedValueRegex' => '(^|\s)(__amp_\S*|__count__|__defineGetter__|__defineSetter__|__lookupGetter__|__lookupSetter__|__noSuchMethod__|__parent__|__proto__|__AMP_\S*|\$p|\$proxy|acceptCharset|addEventListener|appendChild|assignedSlot|attachShadow|AMP|baseURI|checkValidity|childElementCount|childNodes|classList|className|clientHeight|clientLeft|clientTop|clientWidth|compareDocumentPosition|computedName|computedRole|contentEditable|createShadowRoot|enqueAction|firstChild|firstElementChild|getAnimations|getAttribute|getAttributeNS|getAttributeNode|getAttributeNodeNS|getBoundingClientRect|getClientRects|getDestinationInsertionPoints|getElementsByClassName|getElementsByTagName|getElementsByTagNameNS|getRootNode|hasAttribute|hasAttributeNS|hasAttributes|hasChildNodes|hasPointerCapture|i-amphtml-\S*|innerHTML|innerText|inputMode|insertAdjacentElement|insertAdjacentHTML|insertAdjacentText|isContentEditable|isDefaultNamespace|isEqualNode|isSameNode|lastChild|lastElementChild|lookupNamespaceURI|namespaceURI|nextElementSibling|nextSibling|nodeName|nodeType|nodeValue|offsetHeight|offsetLeft|offsetParent|offsetTop|offsetWidth|outerHTML|outerText|ownerDocument|parentElement|parentNode|previousElementSibling|previousSibling|querySelector|querySelectorAll|releasePointerCapture|removeAttribute|removeAttributeNS|removeAttributeNode|removeChild|removeEventListener|replaceChild|reportValidity|requestPointerLock|scrollHeight|scrollIntoView|scrollIntoViewIfNeeded|scrollLeft|scrollWidth|setAttribute|setAttributeNS|setAttributeNode|setAttributeNodeNS|setPointerCapture|shadowRoot|styleMap|tabIndex|tagName|textContent|toString|valueOf|(webkit|ms|moz|o)dropzone|(webkit|moz|ms|o)MatchesSelector|(webkit|moz|ms|o)RequestFullScreen|(webkit|moz|ms|o)RequestFullscreen)(\s|$)',
                            'addValueToSet' => 'TEMPLATE_IDS',
                        ],
                        ['name' => 'type', 'mandatory' => true, 'valueCasei' => ['text/plain']],
                        ['name' => 'template', 'mandatory' => true, 'value' => ['amp-mustache'], 'dispatchKey' => 'NAME_VALUE_DISPATCH'],
                    ],
                'attrLists' => ['nonce-attr'],
                'cdata' => ['disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']]],
                'disallowedAncestor' => [
                        'TEMPLATE',
                        'AMP-DATE-PICKER',
                        'FORM DIV [submit-success][template]',
                        'FORM DIV [submit-error][template]',
                        'FORM DIV [submitting][template]',
                        'FORM DIV [verify-error][template]',
                    ],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'requiresExtension' => ['amp-mustache'],
                ]
            ),
            'SCRIPT type=text/plain (AMP4EMAIL)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'SCRIPT type=text/plain (AMP4EMAIL)',
                'attrs' => [
                        [
                            'name' => 'id',
                            'disallowedValueRegex' => '(^|\s)(__amp_\S*|__count__|__defineGetter__|__defineSetter__|__lookupGetter__|__lookupSetter__|__noSuchMethod__|__parent__|__proto__|__AMP_\S*|\$p|\$proxy|acceptCharset|addEventListener|appendChild|assignedSlot|attachShadow|AMP|baseURI|checkValidity|childElementCount|childNodes|classList|className|clientHeight|clientLeft|clientTop|clientWidth|compareDocumentPosition|computedName|computedRole|contentEditable|createShadowRoot|enqueAction|firstChild|firstElementChild|getAnimations|getAttribute|getAttributeNS|getAttributeNode|getAttributeNodeNS|getBoundingClientRect|getClientRects|getDestinationInsertionPoints|getElementsByClassName|getElementsByTagName|getElementsByTagNameNS|getRootNode|hasAttribute|hasAttributeNS|hasAttributes|hasChildNodes|hasPointerCapture|i-amphtml-\S*|innerHTML|innerText|inputMode|insertAdjacentElement|insertAdjacentHTML|insertAdjacentText|isContentEditable|isDefaultNamespace|isEqualNode|isSameNode|lastChild|lastElementChild|lookupNamespaceURI|namespaceURI|nextElementSibling|nextSibling|nodeName|nodeType|nodeValue|offsetHeight|offsetLeft|offsetParent|offsetTop|offsetWidth|outerHTML|outerText|ownerDocument|parentElement|parentNode|previousElementSibling|previousSibling|querySelector|querySelectorAll|releasePointerCapture|removeAttribute|removeAttributeNS|removeAttributeNode|removeChild|removeEventListener|replaceChild|reportValidity|requestPointerLock|scrollHeight|scrollIntoView|scrollIntoViewIfNeeded|scrollLeft|scrollWidth|setAttribute|setAttributeNS|setAttributeNode|setAttributeNodeNS|setPointerCapture|shadowRoot|styleMap|tabIndex|tagName|textContent|toString|valueOf|(webkit|ms|moz|o)dropzone|(webkit|moz|ms|o)MatchesSelector|(webkit|moz|ms|o)RequestFullScreen|(webkit|moz|ms|o)RequestFullscreen)(\s|$)',
                            'addValueToSet' => 'TEMPLATE_IDS',
                        ],
                        ['name' => 'type', 'mandatory' => true, 'valueCasei' => ['text/plain']],
                        ['name' => 'template', 'mandatory' => true, 'value' => ['amp-mustache'], 'dispatchKey' => 'NAME_VALUE_DISPATCH'],
                    ],
                'attrLists' => ['nonce-attr'],
                'cdata' => ['disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']]],
                'disallowedAncestor' => [
                        'TEMPLATE (AMP4EMAIL)',
                        'AMP-DATE-PICKER',
                        'FORM DIV [submit-success][template]',
                        'FORM DIV [submit-error][template]',
                        'FORM DIV [submitting][template]',
                        'FORM DIV [verify-error][template]',
                        'FORM DIV [submitting]',
                    ],
                'htmlFormat' => ['AMP4EMAIL'],
                'requiresExtension' => ['amp-mustache'],
                ]
            ),
            'SCRIPT[custom-element=amp-accordion] (AMP4EMAIL)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'SCRIPT[custom-element=amp-accordion] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-accordion', 'version' => ['0.1'], 'deprecatedAllowDuplicates' => true, 'requiresUsage' => 'EXEMPTED'],
                ]
            ),
            'SCRIPT[custom-element=amp-autocomplete] (AMP4EMAIL)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'SCRIPT[custom-element=amp-autocomplete] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-autocomplete', 'version' => ['0.1']],
                ]
            ),
            'SCRIPT[custom-element=amp-bind] (AMP4EMAIL)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'SCRIPT[custom-element=amp-bind] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-bind', 'version' => ['0.1'], 'requiresUsage' => 'NONE'],
                ]
            ),
            'SCRIPT[custom-element=amp-carousel] (AMP4EMAIL)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'SCRIPT[custom-element=amp-carousel] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-carousel', 'version' => ['0.1']],
                ]
            ),
            'SCRIPT[custom-element=amp-fit-text] (AMP4EMAIL)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'SCRIPT[custom-element=amp-fit-text] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-fit-text', 'version' => ['0.1'], 'deprecatedAllowDuplicates' => true, 'requiresUsage' => 'EXEMPTED'],
                ]
            ),
            'SCRIPT[custom-element=amp-form] (AMP4EMAIL)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'SCRIPT[custom-element=amp-form] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-form', 'version' => ['0.1'], 'deprecatedAllowDuplicates' => true, 'requiresUsage' => 'EXEMPTED'],
                ]
            ),
            'SCRIPT[custom-element=amp-image-lightbox] (AMP4EMAIL)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'SCRIPT[custom-element=amp-image-lightbox] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'deprecation' => 'amp-image-lightbox cannot be properly positioned in emails and will soon be invalid in AMP4EMAIL.',
                'deprecationUrl' => 'https://github.com/ampproject/amphtml/issues/23170',
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-image-lightbox', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT[custom-element=amp-lightbox] (AMP4ADS)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'SCRIPT[custom-element=amp-lightbox] (AMP4ADS)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4ADS'],
                'extensionSpec' => ['name' => 'amp-lightbox', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT[custom-element=amp-lightbox] (AMP4EMAIL)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'SCRIPT[custom-element=amp-lightbox] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'deprecation' => 'amp-lightbox cannot be properly positioned in emails and will soon be invalid in AMP4EMAIL.',
                'deprecationUrl' => 'https://github.com/ampproject/amphtml/issues/23170',
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-lightbox', 'version' => ['0.1', 'latest']],
                ]
            ),
            'SCRIPT[custom-element=amp-list] (AMP4EMAIL)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'SCRIPT[custom-element=amp-list] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-list', 'version' => ['0.1']],
                ]
            ),
            'SCRIPT[custom-element=amp-selector] (AMP4EMAIL)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'SCRIPT[custom-element=amp-selector] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-selector', 'version' => ['0.1'], 'requiresUsage' => 'EXEMPTED'],
                ]
            ),
            'SCRIPT[custom-element=amp-sidebar] (AMP4EMAIL)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'SCRIPT[custom-element=amp-sidebar] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-sidebar', 'version' => ['0.1']],
                ]
            ),
            'SCRIPT[custom-element=amp-timeago] (AMP4EMAIL)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'SCRIPT[custom-element=amp-timeago] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => ['name' => 'amp-timeago', 'version' => ['0.1']],
                ]
            ),
            'SCRIPT[custom-template=amp-mustache] (AMP4ADS)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'SCRIPT[custom-template=amp-mustache] (AMP4ADS)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4ADS'],
                'extensionSpec' => [
                        'name' => 'amp-mustache',
                        'version' => ['0.1', '0.2', 'latest'],
                        'deprecatedVersion' => ['0.1'],
                        'extensionType' => 'CUSTOM_TEMPLATE',
                    ],
                ]
            ),
            'SCRIPT[custom-template=amp-mustache] (AMP4EMAIL)' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'SCRIPT[custom-template=amp-mustache] (AMP4EMAIL)',
                'attrLists' => ['common-extension-attrs'],
                'htmlFormat' => ['AMP4EMAIL'],
                'extensionSpec' => [
                        'name' => 'amp-mustache',
                        'version' => ['0.1', '0.2'],
                        'deprecatedVersion' => ['0.1'],
                        'extensionType' => 'CUSTOM_TEMPLATE',
                    ],
                ]
            ),
            Element::SECTION => new Tag(
                [
                'tagName' => Element::SECTION,
                'attrLists' => ['poool-access-attrs'],
                'disallowedAncestor' => ['AMP-ACCORDION'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            'section (AMP4EMAIL)' => new Tag(
                [
                'tagName' => Element::SECTION,
                'specName' => 'section (AMP4EMAIL)',
                'disallowedAncestor' => ['AMP-ACCORDION'],
                'htmlFormat' => ['AMP4EMAIL'],
                ]
            ),
            Element::SELECT => new Tag(
                [
                'tagName' => Element::SELECT,
                'attrs' => [
                        ['name' => 'autofocus', 'disabledBy' => ['amp4email']],
                        ['name' => 'disabled'],
                        ['name' => 'multiple'],
                        ['name' => 'no-verify', 'value' => [''], 'disabledBy' => ['amp4email']],
                        ['name' => 'required'],
                        ['name' => 'size'],
                        ['name' => '[autofocus]', 'disabledBy' => ['amp4email']],
                        ['name' => '[disabled]'],
                        ['name' => '[multiple]'],
                        ['name' => '[required]'],
                        ['name' => '[size]'],
                    ],
                'attrLists' => ['name-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-form/',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::SLOT => new Tag(
                [
                'tagName' => Element::SLOT,
                'attrLists' => ['name-attr'],
                'htmlFormat' => ['AMP'],
                ]
            ),
            Element::SMALL => new Tag(
                [
                'tagName' => Element::SMALL,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::SOLIDCOLOR => new Tag(
                [
                'tagName' => Element::SOLIDCOLOR,
                'attrs' => [['name' => 'solid-color'], ['name' => 'solid-opacity']],
                'attrLists' => ['svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::SPACER => new Tag(
                [
                'tagName' => Element::SPACER,
                'htmlFormat' => ['AMP'],
                ]
            ),
            Element::SPAN => new Tag(
                [
                'tagName' => Element::SPAN,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            'span amp-nested-menu' => new Tag(
                [
                'tagName' => Element::SPAN,
                'specName' => 'span amp-nested-menu',
                'attrLists' => ['amp-nested-menu-actions'],
                'mandatoryAncestor' => 'AMP-NESTED-MENU',
                'htmlFormat' => ['AMP'],
                ]
            ),
            'span swg_amp_cache_nonce' => new Tag(
                [
                'tagName' => Element::SPAN,
                'specName' => 'span swg_amp_cache_nonce',
                'attrs' => [['name' => 'swg_amp_cache_nonce', 'mandatory' => true, 'dispatchKey' => 'NAME_DISPATCH']],
                'mandatoryAncestor' => 'BODY',
                'htmlFormat' => ['AMP'],
                'satisfies' => ['span swg_amp_cache_nonce'],
                'requires' => ['subscriptions-section content swg_amp_cache_nonce'],
                'requiresExtension' => ['amp-subscriptions'],
                ]
            ),
            Element::STRIKE => new Tag(
                [
                'tagName' => Element::STRIKE,
                'htmlFormat' => ['AMP'],
                ]
            ),
            Element::STRONG => new Tag(
                [
                'tagName' => Element::STRONG,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            'style amp-custom' => new Tag(
                [
                'tagName' => Element::STYLE,
                'specName' => 'style amp-custom',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [['name' => 'amp-custom', 'mandatory' => true, 'value' => ['']], ['name' => 'type', 'valueCasei' => ['text/css']]],
                'attrLists' => ['nonce-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#stylesheets',
                'cdata' => [
                        'maxBytes' => 75000,
                        'maxBytesSpecUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#maximum-size',
                        'disallowedCdataRegex' => [
                            ['regex' => '<!--', 'errorMessage' => 'html comments'],
                            ['regex' => '(^|\W)i-amphtml-', 'errorMessage' => 'CSS i-amphtml- name prefix'],
                        ],
                        'cssSpec' => [
                            'atRuleSpec' => [
                                ['name' => 'font-face'],
                                ['name' => 'keyframes'],
                                ['name' => 'media'],
                                ['name' => 'page'],
                                ['name' => 'supports'],
                            ],
                        ],
                        'docCssBytes' => true,
                    ],
                'htmlFormat' => ['AMP'],
                'namedId' => 'STYLE_AMP_CUSTOM',
                'descriptiveName' => 'style amp-custom',
                ]
            ),
            'style amp-custom (AMP4ADS)' => new Tag(
                [
                'tagName' => Element::STYLE,
                'specName' => 'style amp-custom (AMP4ADS)',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [['name' => 'amp-custom', 'mandatory' => true, 'value' => ['']], ['name' => 'type', 'valueCasei' => ['text/css']]],
                'attrLists' => ['nonce-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/a4a_spec/#css',
                'cdata' => [
                        'maxBytes' => 20000,
                        'maxBytesSpecUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#maximum-size',
                        'disallowedCdataRegex' => [
                            ['regex' => '<!--', 'errorMessage' => 'html comments'],
                            ['regex' => '(^|\W)i-amphtml-', 'errorMessage' => 'CSS i-amphtml- name prefix'],
                        ],
                        'cssSpec' => [
                            'atRuleSpec' => [
                                ['name' => 'font-face'],
                                ['name' => 'keyframes'],
                                [
                                    'name' => 'media',
                                    'mediaQuerySpec' => [
                                        'issuesAsError' => false,
                                        'type' => ['all', 'print', 'screen', 'speech'],
                                        'feature' => ['width', 'height', 'aspect-ratio', 'orientation', 'resolution'],
                                    ],
                                ],
                                ['name' => 'supports'],
                            ],
                            'validateAmp4ads' => true,
                        ],
                        'docCssBytes' => true,
                    ],
                'htmlFormat' => ['AMP4ADS'],
                'descriptiveName' => 'style amp-custom',
                ]
            ),
            'style amp-custom (AMP4EMAIL)' => new Tag(
                [
                'tagName' => Element::STYLE,
                'specName' => 'style amp-custom (AMP4EMAIL)',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [['name' => 'amp-custom', 'mandatory' => true, 'value' => ['']], ['name' => 'type', 'valueCasei' => ['text/css']]],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/email-spec/amp-email-css',
                'cdata' => [
                        'maxBytes' => 75000,
                        'maxBytesSpecUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#maximum-size',
                        'disallowedCdataRegex' => [
                            ['regex' => '<!--', 'errorMessage' => 'html comments'],
                            ['regex' => '(^|\W)i-amphtml-', 'errorMessage' => 'CSS i-amphtml- name prefix'],
                        ],
                        'cssSpec' => [
                            'atRuleSpec' => [
                                [
                                    'name' => 'media',
                                    'mediaQuerySpec' => [
                                        'issuesAsError' => true,
                                        'type' => ['all', 'screen'],
                                        'feature' => [
                                            'device-width',
                                            'hover',
                                            'max-device-width',
                                            'max-resolution',
                                            'max-width',
                                            'min-device-width',
                                            'min-resolution',
                                            'min-width',
                                            'orientation',
                                            'pointer',
                                            'resolution',
                                            'width',
                                        ],
                                    ],
                                ],
                                ['name' => 'page'],
                            ],
                        ],
                        'docCssBytes' => true,
                    ],
                'htmlFormat' => ['AMP4EMAIL'],
                'disabledBy' => ['data-css-strict'],
                'descriptiveName' => 'style amp-custom',
                ]
            ),
            'style amp-custom (css-strict)' => new Tag(
                [
                'tagName' => Element::STYLE,
                'specName' => 'style amp-custom (css-strict)',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [['name' => 'amp-custom', 'mandatory' => true, 'value' => ['']], ['name' => 'type', 'valueCasei' => ['text/css']]],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/email-spec/amp-email-css',
                'cdata' => [
                        'maxBytes' => 75000,
                        'maxBytesSpecUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#maximum-size',
                        'disallowedCdataRegex' => [
                            ['regex' => '<!--', 'errorMessage' => 'html comments'],
                            ['regex' => '(^|\W)i-amphtml-', 'errorMessage' => 'CSS i-amphtml- name prefix'],
                        ],
                        'cssSpec' => [
                            'atRuleSpec' => [
                                [
                                    'name' => 'media',
                                    'mediaQuerySpec' => [
                                        'issuesAsError' => true,
                                        'type' => ['all', 'screen'],
                                        'feature' => [
                                            'device-width',
                                            'hover',
                                            'max-device-width',
                                            'max-resolution',
                                            'max-width',
                                            'min-device-width',
                                            'min-resolution',
                                            'min-width',
                                            'orientation',
                                            'pointer',
                                            'resolution',
                                            'width',
                                        ],
                                    ],
                                ],
                            ],
                            'selectorSpec' => [
                                'attributeName' => [
                                    'active',
                                    'alt',
                                    'autocomplete',
                                    'autoexpand',
                                    'checked',
                                    'class',
                                    'controls',
                                    'dir',
                                    'disabled',
                                    'expanded',
                                    'fallback',
                                    'fetch-error',
                                    'height',
                                    'hidden',
                                    'id',
                                    'items',
                                    'layout',
                                    'name',
                                    'noloading',
                                    'novalidate',
                                    'open',
                                    'option',
                                    'overflow',
                                    'placeholder',
                                    'readonly',
                                    'required',
                                    'role',
                                    'scrollable',
                                    'selected',
                                    'side',
                                    'sizes',
                                    'submit-error',
                                    'submit-success',
                                    'submitting',
                                    'title',
                                    'type',
                                    'value',
                                    'width',
                                ],
                                'pseudoClass' => [
                                    'active',
                                    'checked',
                                    'default',
                                    'disabled',
                                    'empty',
                                    'enabled',
                                    'first-child',
                                    'first-of-type',
                                    'focus',
                                    'focus-within',
                                    'hover',
                                    'in-range',
                                    'indeterminate',
                                    'invalid',
                                    'last-child',
                                    'last-of-type',
                                    'not',
                                    'nth-child',
                                    'nth-last-child',
                                    'nth-last-of-type',
                                    'nth-of-type',
                                    'only-child',
                                    'only-of-type',
                                    'optional',
                                    'out-of-range',
                                    'read-only',
                                    'read-write',
                                    'required',
                                    'valid',
                                ],
                            ],
                        ],
                        'docCssBytes' => true,
                    ],
                'htmlFormat' => ['AMP4EMAIL'],
                'enabledBy' => ['data-css-strict'],
                'descriptiveName' => 'style amp-custom',
                ]
            ),
            'style amp-custom-length-check' => new Tag(
                [
                'tagName' => Element::STYLE,
                'specName' => 'style amp-custom-length-check',
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        ['name' => 'amp-custom-length-check', 'mandatory' => true, 'value' => [''], 'dispatchKey' => 'NAME_DISPATCH'],
                        ['name' => 'type', 'valueCasei' => ['text/css']],
                    ],
                'attrLists' => ['nonce-attr'],
                'cdata' => ['maxBytes' => -1],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                'descriptiveName' => 'style amp-custom-length-check',
                ]
            ),
            'style[amp-keyframes]' => new Tag(
                [
                'tagName' => Element::STYLE,
                'specName' => 'style[amp-keyframes]',
                'unique' => true,
                'mandatoryParent' => 'BODY',
                'attrs' => [['name' => 'amp-keyframes', 'mandatory' => true, 'value' => [''], 'dispatchKey' => 'NAME_DISPATCH']],
                'cdata' => [
                        'maxBytes' => 500000,
                        'maxBytesSpecUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#keyframes-stylesheet',
                        'cssSpec' => [
                            'atRuleSpec' => [['name' => 'keyframes'], ['name' => 'media'], ['name' => 'supports']],
                            'validateKeyframes' => true,
                            'declaration' => ['animation-timing-function', 'offset-distance', 'opacity', 'transform', 'visibility'],
                        ],
                        'docCssBytes' => false,
                    ],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'mandatoryLastChild' => true,
                'descriptiveName' => 'style[amp-keyframes]',
                ]
            ),
            'style[amp-runtime] (transformed)' => new Tag(
                [
                'tagName' => Element::STYLE,
                'specName' => 'style[amp-runtime] (transformed)',
                'mandatory' => true,
                'unique' => true,
                'mandatoryParent' => 'HEAD',
                'attrs' => [
                        ['name' => 'amp-runtime', 'mandatory' => true, 'value' => [''], 'dispatchKey' => 'NAME_VALUE_PARENT_DISPATCH'],
                        ['name' => 'i-amphtml-version', 'mandatory' => true, 'valueRegex' => '^\d{15}|latest$'],
                    ],
                'attrLists' => ['nonce-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#stylesheets',
                'htmlFormat' => ['AMP'],
                'enabledBy' => ['transformed'],
                'descriptiveName' => 'style[amp-runtime]',
                ]
            ),
            Element::SUB => new Tag(
                [
                'tagName' => Element::SUB,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            'subscriptions-section content swg_amp_cache_nonce' => new Tag(
                [
                'tagName' => Element::SECTION,
                'specName' => 'subscriptions-section content swg_amp_cache_nonce',
                'attrs' => [
                        ['name' => 'encrypted', 'mandatory' => true, 'dispatchKey' => 'NAME_DISPATCH'],
                        ['name' => 'subscriptions-section', 'valueCasei' => ['content']],
                        ['name' => 'swg_amp_cache_nonce', 'mandatory' => true],
                    ],
                'mandatoryAncestor' => 'BODY',
                'htmlFormat' => ['AMP'],
                'satisfies' => ['subscriptions-section content swg_amp_cache_nonce'],
                'requires' => ['span swg_amp_cache_nonce'],
                ]
            ),
            'subscriptions script ciphertext' => new Tag(
                [
                'tagName' => Element::SCRIPT,
                'specName' => 'subscriptions script ciphertext',
                'mandatoryParent' => 'subscriptions-section content swg_amp_cache_nonce',
                'attrs' => [
                        ['name' => 'ciphertext', 'mandatory' => true, 'dispatchKey' => 'NAME_DISPATCH'],
                        ['name' => 'type', 'mandatory' => true, 'valueCasei' => ['application/octet-stream']],
                    ],
                'cdata' => ['disallowedCdataRegex' => [['regex' => '<!--', 'errorMessage' => 'html comments']]],
                'mandatoryAncestor' => 'BODY',
                'htmlFormat' => ['AMP'],
                ]
            ),
            Element::SUMMARY => new Tag(
                [
                'tagName' => Element::SUMMARY,
                'mandatoryParent' => 'DETAILS',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::SUP => new Tag(
                [
                'tagName' => Element::SUP,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::SVG => new Tag(
                [
                'tagName' => Element::SVG,
                'attrs' => [
                        ['name' => 'contentscripttype'],
                        ['name' => 'contentstyletype'],
                        ['name' => 'externalresourcesrequired'],
                        ['name' => 'height'],
                        ['name' => 'preserveaspectratio'],
                        ['name' => 'version', 'value' => ['1.0', '1.1']],
                        ['name' => 'viewbox'],
                        ['name' => 'width'],
                        ['name' => 'x'],
                        ['name' => 'y'],
                        ['name' => 'zoomandpan'],
                    ],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            'svg title' => new Tag(
                [
                'tagName' => Element::TITLE,
                'specName' => 'svg title',
                'attrLists' => ['svg-core-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::SWITCH_ => new Tag(
                [
                'tagName' => Element::SWITCH_,
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::SYMBOL => new Tag(
                [
                'tagName' => Element::SYMBOL,
                'attrs' => [
                        ['name' => 'externalresourcesrequired'],
                        ['name' => 'height'],
                        ['name' => 'preserveaspectratio'],
                        ['name' => 'viewbox'],
                        ['name' => 'width'],
                    ],
                'attrLists' => ['svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::TABLE => new Tag(
                [
                'tagName' => Element::TABLE,
                'attrs' => [
                        ['name' => 'align'],
                        ['name' => 'bgcolor'],
                        ['name' => 'border', 'value' => ['0', '1']],
                        ['name' => 'cellpadding'],
                        ['name' => 'cellspacing'],
                        ['name' => 'sortable', 'disabledBy' => ['amp4email']],
                        ['name' => 'width'],
                    ],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::TBODY => new Tag(
                [
                'tagName' => Element::TBODY,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::TD => new Tag(
                [
                'tagName' => Element::TD,
                'attrs' => [
                        ['name' => 'align'],
                        ['name' => 'bgcolor'],
                        ['name' => 'colspan'],
                        ['name' => 'headers'],
                        ['name' => 'height'],
                        ['name' => 'rowspan'],
                        ['name' => 'valign'],
                        ['name' => 'width'],
                    ],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::TEMPLATE => new Tag(
                [
                'tagName' => Element::TEMPLATE,
                'attrs' => [
                        [
                            'name' => 'id',
                            'disallowedValueRegex' => '(^|\s)(__amp_\S*|__count__|__defineGetter__|__defineSetter__|__lookupGetter__|__lookupSetter__|__noSuchMethod__|__parent__|__proto__|__AMP_\S*|\$p|\$proxy|acceptCharset|addEventListener|appendChild|assignedSlot|attachShadow|AMP|baseURI|checkValidity|childElementCount|childNodes|classList|className|clientHeight|clientLeft|clientTop|clientWidth|compareDocumentPosition|computedName|computedRole|contentEditable|createShadowRoot|enqueAction|firstChild|firstElementChild|getAnimations|getAttribute|getAttributeNS|getAttributeNode|getAttributeNodeNS|getBoundingClientRect|getClientRects|getDestinationInsertionPoints|getElementsByClassName|getElementsByTagName|getElementsByTagNameNS|getRootNode|hasAttribute|hasAttributeNS|hasAttributes|hasChildNodes|hasPointerCapture|i-amphtml-\S*|innerHTML|innerText|inputMode|insertAdjacentElement|insertAdjacentHTML|insertAdjacentText|isContentEditable|isDefaultNamespace|isEqualNode|isSameNode|lastChild|lastElementChild|lookupNamespaceURI|namespaceURI|nextElementSibling|nextSibling|nodeName|nodeType|nodeValue|offsetHeight|offsetLeft|offsetParent|offsetTop|offsetWidth|outerHTML|outerText|ownerDocument|parentElement|parentNode|previousElementSibling|previousSibling|querySelector|querySelectorAll|releasePointerCapture|removeAttribute|removeAttributeNS|removeAttributeNode|removeChild|removeEventListener|replaceChild|reportValidity|requestPointerLock|scrollHeight|scrollIntoView|scrollIntoViewIfNeeded|scrollLeft|scrollWidth|setAttribute|setAttributeNS|setAttributeNode|setAttributeNodeNS|setPointerCapture|shadowRoot|styleMap|tabIndex|tagName|textContent|toString|valueOf|(webkit|ms|moz|o)dropzone|(webkit|moz|ms|o)MatchesSelector|(webkit|moz|ms|o)RequestFullScreen|(webkit|moz|ms|o)RequestFullscreen)(\s|$)',
                            'addValueToSet' => 'TEMPLATE_IDS',
                        ],
                        ['name' => 'type', 'mandatory' => true, 'value' => ['amp-mustache']],
                    ],
                'disallowedAncestor' => [
                        'TEMPLATE',
                        'AMP-DATE-PICKER',
                        'AMP-STORY-AUTO-ADS',
                        'FORM DIV [submit-success][template]',
                        'FORM DIV [submit-error][template]',
                        'FORM DIV [submitting][template]',
                        'FORM DIV [verify-error][template]',
                    ],
                'mandatoryAncestor' => 'BODY',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                'requiresExtension' => ['amp-mustache'],
                ]
            ),
            'TEMPLATE (AMP4EMAIL)' => new Tag(
                [
                'tagName' => Element::TEMPLATE,
                'specName' => 'TEMPLATE (AMP4EMAIL)',
                'attrs' => [
                        [
                            'name' => 'id',
                            'disallowedValueRegex' => '(^|\s)(__amp_\S*|__count__|__defineGetter__|__defineSetter__|__lookupGetter__|__lookupSetter__|__noSuchMethod__|__parent__|__proto__|__AMP_\S*|\$p|\$proxy|acceptCharset|addEventListener|appendChild|assignedSlot|attachShadow|AMP|baseURI|checkValidity|childElementCount|childNodes|classList|className|clientHeight|clientLeft|clientTop|clientWidth|compareDocumentPosition|computedName|computedRole|contentEditable|createShadowRoot|enqueAction|firstChild|firstElementChild|getAnimations|getAttribute|getAttributeNS|getAttributeNode|getAttributeNodeNS|getBoundingClientRect|getClientRects|getDestinationInsertionPoints|getElementsByClassName|getElementsByTagName|getElementsByTagNameNS|getRootNode|hasAttribute|hasAttributeNS|hasAttributes|hasChildNodes|hasPointerCapture|i-amphtml-\S*|innerHTML|innerText|inputMode|insertAdjacentElement|insertAdjacentHTML|insertAdjacentText|isContentEditable|isDefaultNamespace|isEqualNode|isSameNode|lastChild|lastElementChild|lookupNamespaceURI|namespaceURI|nextElementSibling|nextSibling|nodeName|nodeType|nodeValue|offsetHeight|offsetLeft|offsetParent|offsetTop|offsetWidth|outerHTML|outerText|ownerDocument|parentElement|parentNode|previousElementSibling|previousSibling|querySelector|querySelectorAll|releasePointerCapture|removeAttribute|removeAttributeNS|removeAttributeNode|removeChild|removeEventListener|replaceChild|reportValidity|requestPointerLock|scrollHeight|scrollIntoView|scrollIntoViewIfNeeded|scrollLeft|scrollWidth|setAttribute|setAttributeNS|setAttributeNode|setAttributeNodeNS|setPointerCapture|shadowRoot|styleMap|tabIndex|tagName|textContent|toString|valueOf|(webkit|ms|moz|o)dropzone|(webkit|moz|ms|o)MatchesSelector|(webkit|moz|ms|o)RequestFullScreen|(webkit|moz|ms|o)RequestFullscreen)(\s|$)',
                            'addValueToSet' => 'TEMPLATE_IDS',
                        ],
                        ['name' => 'type', 'mandatory' => true, 'value' => ['amp-mustache']],
                    ],
                'disallowedAncestor' => [
                        'TEMPLATE (AMP4EMAIL)',
                        'AMP-DATE-PICKER',
                        'FORM DIV [submit-success][template]',
                        'FORM DIV [submit-error][template]',
                        'FORM DIV [submitting][template]',
                        'FORM DIV [verify-error][template]',
                        'FORM DIV [submitting]',
                    ],
                'mandatoryAncestor' => 'BODY',
                'htmlFormat' => ['AMP4EMAIL'],
                'requiresExtension' => ['amp-mustache'],
                ]
            ),
            Element::TEXT => new Tag(
                [
                'tagName' => Element::TEXT,
                'attrs' => [
                        ['name' => 'dx'],
                        ['name' => 'dy'],
                        ['name' => 'externalresourcesrequired'],
                        ['name' => 'lengthadjust'],
                        ['name' => 'rotate'],
                        ['name' => 'text-anchor'],
                        ['name' => 'textlength'],
                        ['name' => 'transform'],
                        ['name' => 'x'],
                        ['name' => 'y'],
                    ],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::TEXTAREA => new Tag(
                [
                'tagName' => Element::TEXTAREA,
                'attrs' => [
                        ['name' => 'autocomplete'],
                        ['name' => 'autoexpand', 'requiresExtension' => ['amp-form']],
                        ['name' => 'autofocus', 'disabledBy' => ['amp4email']],
                        ['name' => 'cols'],
                        ['name' => 'disabled'],
                        ['name' => 'maxlength'],
                        ['name' => 'minlength'],
                        ['name' => 'no-verify', 'value' => [''], 'disabledBy' => ['amp4email']],
                        ['name' => 'pattern'],
                        ['name' => 'placeholder'],
                        ['name' => 'readonly'],
                        ['name' => 'required'],
                        ['name' => 'rows'],
                        ['name' => 'selectiondirection', 'disabledBy' => ['amp4email']],
                        ['name' => 'selectionend', 'disabledBy' => ['amp4email']],
                        ['name' => 'selectionstart', 'disabledBy' => ['amp4email']],
                        ['name' => 'spellcheck'],
                        ['name' => 'wrap'],
                        ['name' => '[autocomplete]'],
                        ['name' => '[autofocus]', 'disabledBy' => ['amp4email']],
                        ['name' => '[cols]'],
                        ['name' => '[defaulttext]'],
                        ['name' => '[disabled]'],
                        ['name' => '[maxlength]'],
                        ['name' => '[minlength]'],
                        ['name' => '[pattern]'],
                        ['name' => '[placeholder]'],
                        ['name' => '[readonly]'],
                        ['name' => '[required]'],
                        ['name' => '[rows]'],
                        ['name' => '[selectiondirection]', 'disabledBy' => ['amp4email']],
                        ['name' => '[selectionend]', 'disabledBy' => ['amp4email']],
                        ['name' => '[selectionstart]', 'disabledBy' => ['amp4email']],
                        ['name' => '[spellcheck]'],
                        ['name' => '[wrap]'],
                    ],
                'attrLists' => ['name-attr'],
                'specUrl' => 'https://amp.dev/documentation/components/amp-form/',
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::TEXTPATH => new Tag(
                [
                'tagName' => Element::TEXTPATH,
                'attrs' => [['name' => 'externalresourcesrequired'], ['name' => 'method'], ['name' => 'spacing'], ['name' => 'startoffset']],
                'attrLists' => [
                        'svg-conditional-processing-attributes',
                        'svg-core-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                        'svg-xlink-attributes',
                    ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::TFOOT => new Tag(
                [
                'tagName' => Element::TFOOT,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::TH => new Tag(
                [
                'tagName' => Element::TH,
                'attrs' => [
                        ['name' => 'abbr'],
                        ['name' => 'align'],
                        ['name' => 'bgcolor'],
                        ['name' => 'colspan'],
                        ['name' => 'headers'],
                        ['name' => 'height'],
                        ['name' => 'rowspan'],
                        ['name' => 'scope'],
                        ['name' => 'sorted', 'disabledBy' => ['amp4email']],
                        ['name' => 'valign'],
                        ['name' => 'width'],
                    ],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::THEAD => new Tag(
                [
                'tagName' => Element::THEAD,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::TIME => new Tag(
                [
                'tagName' => Element::TIME,
                'attrs' => [['name' => 'datetime'], ['name' => 'pubdate', 'value' => ['']]],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            'title' => new Tag(
                [
                'tagName' => Element::TITLE,
                'specName' => 'title',
                'attrs' => [['name' => '[text]']],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            'title [AMP4EMAIL]' => new Tag(
                [
                'tagName' => Element::TITLE,
                'specName' => 'title [AMP4EMAIL]',
                'attrs' => [['name' => '[text]']],
                'deprecation' => 'Title tags in email have no meaning. This tag may become invalid in the future.',
                'deprecationUrl' => 'https://github.com/ampproject/amphtml/issues/22318',
                'htmlFormat' => ['AMP4EMAIL'],
                ]
            ),
            Element::TR => new Tag(
                [
                'tagName' => Element::TR,
                'attrs' => [['name' => 'align'], ['name' => 'bgcolor'], ['name' => 'height'], ['name' => 'valign']],
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::TREF => new Tag(
                [
                'tagName' => Element::TREF,
                'attrs' => [['name' => 'externalresourcesrequired']],
                'attrLists' => [
                        'svg-conditional-processing-attributes',
                        'svg-core-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                        'svg-xlink-attributes',
                    ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::TSPAN => new Tag(
                [
                'tagName' => Element::TSPAN,
                'attrs' => [
                        ['name' => 'dx'],
                        ['name' => 'dy'],
                        ['name' => 'externalresourcesrequired'],
                        ['name' => 'lengthadjust'],
                        ['name' => 'rotate'],
                        ['name' => 'textlength'],
                        ['name' => 'x'],
                        ['name' => 'y'],
                    ],
                'attrLists' => ['svg-conditional-processing-attributes', 'svg-core-attributes', 'svg-presentation-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::TT => new Tag(
                [
                'tagName' => Element::TT,
                'htmlFormat' => ['AMP'],
                ]
            ),
            Element::U => new Tag(
                [
                'tagName' => Element::U,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::UL => new Tag(
                [
                'tagName' => Element::UL,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::USE_ => new Tag(
                [
                'tagName' => Element::USE_,
                'attrs' => [
                        ['name' => 'externalresourcesrequired'],
                        ['name' => 'height'],
                        ['name' => 'transform'],
                        ['name' => 'width'],
                        ['name' => 'x'],
                        ['name' => 'y'],
                    ],
                'attrLists' => [
                        'svg-conditional-processing-attributes',
                        'svg-core-attributes',
                        'svg-presentation-attributes',
                        'svg-style-attr',
                        'svg-xlink-attributes',
                    ],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::VAR_ => new Tag(
                [
                'tagName' => Element::VAR_,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
            Element::VIDEO => new Tag(
                [
                'tagName' => Element::VIDEO,
                'attrs' => [
                        ['name' => 'autoplay'],
                        ['name' => 'controls'],
                        ['name' => 'height'],
                        ['name' => 'loop'],
                        [
                            'name' => 'muted',
                            'deprecation' => 'autoplay',
                            'deprecationUrl' => 'https://amp.dev/documentation/components/amp-video/',
                        ],
                        ['name' => 'playsinline'],
                        ['name' => 'poster'],
                        ['name' => 'preload'],
                        [
                            'name' => 'src',
                            'disallowedValueRegex' => '__amp_source_origin',
                            'valueUrl' => ['protocol' => ['data', 'https'], 'allowRelative' => false],
                        ],
                        ['name' => 'width'],
                    ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-video/',
                'mandatoryAncestor' => 'NOSCRIPT',
                'mandatoryAncestorSuggestedAlternative' => 'AMP-VIDEO',
                'htmlFormat' => ['AMP'],
                ]
            ),
            'video > source' => new Tag(
                [
                'tagName' => Element::SOURCE,
                'specName' => 'video > source',
                'mandatoryParent' => 'VIDEO',
                'attrs' => [
                        ['name' => 'media'],
                        [
                            'name' => 'src',
                            'mandatory' => true,
                            'disallowedValueRegex' => '__amp_source_origin',
                            'valueUrl' => ['protocol' => ['https'], 'allowRelative' => true],
                        ],
                        ['name' => 'type', 'mandatory' => true],
                    ],
                'specUrl' => 'https://amp.dev/documentation/components/amp-video/',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            'video > track' => new Tag(
                [
                'tagName' => Element::TRACK,
                'specName' => 'video > track',
                'mandatoryParent' => 'VIDEO',
                'attrLists' => ['track-attrs-no-subtitles'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            'video > track[kind=subtitles]' => new Tag(
                [
                'tagName' => Element::TRACK,
                'specName' => 'video > track[kind=subtitles]',
                'mandatoryParent' => 'VIDEO',
                'attrLists' => ['track-attrs-subtitles'],
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::VIEW => new Tag(
                [
                'tagName' => Element::VIEW,
                'attrs' => [
                        ['name' => 'externalresourcesrequired'],
                        ['name' => 'preserveaspectratio'],
                        ['name' => 'viewbox'],
                        ['name' => 'viewtarget'],
                        ['name' => 'zoomandpan'],
                    ],
                'attrLists' => ['svg-core-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::VKERN => new Tag(
                [
                'tagName' => Element::VKERN,
                'attrs' => [['name' => 'g1'], ['name' => 'g2'], ['name' => 'k'], ['name' => 'u1'], ['name' => 'u2']],
                'attrLists' => ['svg-core-attributes', 'svg-style-attr'],
                'specUrl' => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
                'mandatoryAncestor' => 'SVG',
                'htmlFormat' => ['AMP', 'AMP4ADS'],
                ]
            ),
            Element::WBR => new Tag(
                [
                'tagName' => Element::WBR,
                'htmlFormat' => ['AMP', 'AMP4ADS', 'AMP4EMAIL'],
                ]
            ),
        ];
        $this->byTagName = [
            Element::A => [
                $this->tags[Element::A],
                $this->tags['A (AMP4EMAIL)'],
            ],
            Element::ABBR => $this->tags[Element::ABBR],
            Element::ACRONYM => $this->tags[Element::ACRONYM],
            Element::ADDRESS => $this->tags[Element::ADDRESS],
            Extension::_3D_GLTF => $this->tags[Extension::_3D_GLTF],
            Extension::_3Q_PLAYER => $this->tags[Extension::_3Q_PLAYER],
            Element::SCRIPT => [
                $this->tags['amp-access extension .json script'],
                $this->tags['amp-ad-exit configuration JSON'],
                $this->tags['amp-ad extension script'],
                $this->tags['amp-analytics extension .json script'],
                $this->tags['amp-animation extension .json script'],
                $this->tags['amp-anim extension script (AMP4EMAIL)'],
                $this->tags['amp-autocomplete JSON'],
                $this->tags['amp-bind extension .json script'],
                $this->tags['amp-consent extension .json script'],
                $this->tags['amp-experiment extension .json script'],
                $this->tags['amp-experiment story extension .json script'],
                $this->tags['amp-geo extension .json script'],
                $this->tags['amp-ima-video > script[type=application/json]'],
                $this->tags['amp-link-rewriter extension .json script'],
                $this->tags['AMP-NEXT-PAGE > SCRIPT[type=application/json]'],
                $this->tags['amp-script extension local script'],
                $this->tags['amp-story-animation json script'],
                $this->tags['amp-story-auto-ads config script'],
                $this->tags['amp-story-bookend extension .json script'],
                $this->tags['amp-story-consent extension .json script'],
                $this->tags['amp-subscriptions extension .json script'],
                $this->tags['amp-video extension script'],
                $this->tags['amp4ads engine script'],
                $this->tags['amphtml engine script'],
                $this->tags['amphtml engine script (LTS)'],
                $this->tags['amphtml engine script [AMP4EMAIL]'],
                $this->tags['cryptokeys .json script'],
                $this->tags[Element::SCRIPT],
                $this->tags['SCRIPT (2)'],
                $this->tags['SCRIPT (3)'],
                $this->tags['SCRIPT (4)'],
                $this->tags['SCRIPT (5)'],
                $this->tags['SCRIPT (6)'],
                $this->tags['SCRIPT (7)'],
                $this->tags['SCRIPT (8)'],
                $this->tags['SCRIPT (9)'],
                $this->tags['SCRIPT (10)'],
                $this->tags['SCRIPT (11)'],
                $this->tags['SCRIPT (12)'],
                $this->tags['SCRIPT (13)'],
                $this->tags['SCRIPT (14)'],
                $this->tags['SCRIPT (15)'],
                $this->tags['SCRIPT (16)'],
                $this->tags['SCRIPT (17)'],
                $this->tags['SCRIPT (18)'],
                $this->tags['SCRIPT (19)'],
                $this->tags['SCRIPT (20)'],
                $this->tags['SCRIPT (21)'],
                $this->tags['SCRIPT (22)'],
                $this->tags['SCRIPT (23)'],
                $this->tags['SCRIPT (24)'],
                $this->tags['SCRIPT (25)'],
                $this->tags['SCRIPT (26)'],
                $this->tags['SCRIPT (27)'],
                $this->tags['SCRIPT (28)'],
                $this->tags['SCRIPT (29)'],
                $this->tags['SCRIPT (30)'],
                $this->tags['SCRIPT (31)'],
                $this->tags['SCRIPT (32)'],
                $this->tags['SCRIPT (33)'],
                $this->tags['SCRIPT (34)'],
                $this->tags['SCRIPT (35)'],
                $this->tags['SCRIPT (36)'],
                $this->tags['SCRIPT (37)'],
                $this->tags['SCRIPT (38)'],
                $this->tags['SCRIPT (39)'],
                $this->tags['SCRIPT (40)'],
                $this->tags['SCRIPT (41)'],
                $this->tags['SCRIPT (42)'],
                $this->tags['SCRIPT (43)'],
                $this->tags['SCRIPT (44)'],
                $this->tags['SCRIPT (45)'],
                $this->tags['SCRIPT (46)'],
                $this->tags['SCRIPT (47)'],
                $this->tags['SCRIPT (48)'],
                $this->tags['SCRIPT (49)'],
                $this->tags['SCRIPT (50)'],
                $this->tags['SCRIPT (51)'],
                $this->tags['SCRIPT (52)'],
                $this->tags['SCRIPT (53)'],
                $this->tags['SCRIPT (54)'],
                $this->tags['SCRIPT (55)'],
                $this->tags['SCRIPT (56)'],
                $this->tags['SCRIPT (57)'],
                $this->tags['SCRIPT (58)'],
                $this->tags['SCRIPT (59)'],
                $this->tags['SCRIPT (60)'],
                $this->tags['SCRIPT (61)'],
                $this->tags['SCRIPT (62)'],
                $this->tags['SCRIPT (63)'],
                $this->tags['SCRIPT (64)'],
                $this->tags['SCRIPT (65)'],
                $this->tags['SCRIPT (66)'],
                $this->tags['SCRIPT (67)'],
                $this->tags['SCRIPT (68)'],
                $this->tags['SCRIPT (69)'],
                $this->tags['SCRIPT (70)'],
                $this->tags['SCRIPT (71)'],
                $this->tags['SCRIPT (72)'],
                $this->tags['SCRIPT (73)'],
                $this->tags['SCRIPT (74)'],
                $this->tags['SCRIPT (75)'],
                $this->tags['SCRIPT (76)'],
                $this->tags['SCRIPT (77)'],
                $this->tags['SCRIPT (78)'],
                $this->tags['SCRIPT (79)'],
                $this->tags['SCRIPT (80)'],
                $this->tags['SCRIPT (81)'],
                $this->tags['SCRIPT (82)'],
                $this->tags['SCRIPT (83)'],
                $this->tags['SCRIPT (84)'],
                $this->tags['SCRIPT (85)'],
                $this->tags['SCRIPT (86)'],
                $this->tags['SCRIPT (87)'],
                $this->tags['SCRIPT (88)'],
                $this->tags['SCRIPT (89)'],
                $this->tags['SCRIPT (90)'],
                $this->tags['SCRIPT (91)'],
                $this->tags['SCRIPT (92)'],
                $this->tags['SCRIPT (93)'],
                $this->tags['SCRIPT (94)'],
                $this->tags['SCRIPT (95)'],
                $this->tags['SCRIPT (96)'],
                $this->tags['SCRIPT (97)'],
                $this->tags['SCRIPT (98)'],
                $this->tags['SCRIPT (99)'],
                $this->tags['SCRIPT (100)'],
                $this->tags['SCRIPT (101)'],
                $this->tags['SCRIPT (102)'],
                $this->tags['SCRIPT (103)'],
                $this->tags['SCRIPT (104)'],
                $this->tags['SCRIPT (105)'],
                $this->tags['SCRIPT (106)'],
                $this->tags['SCRIPT (107)'],
                $this->tags['SCRIPT (108)'],
                $this->tags['SCRIPT (109)'],
                $this->tags['SCRIPT (110)'],
                $this->tags['SCRIPT (111)'],
                $this->tags['SCRIPT (112)'],
                $this->tags['SCRIPT (113)'],
                $this->tags['SCRIPT (114)'],
                $this->tags['SCRIPT (115)'],
                $this->tags['SCRIPT (116)'],
                $this->tags['SCRIPT (117)'],
                $this->tags['SCRIPT (118)'],
                $this->tags['SCRIPT (119)'],
                $this->tags['SCRIPT (120)'],
                $this->tags['SCRIPT (121)'],
                $this->tags['SCRIPT (122)'],
                $this->tags['SCRIPT (123)'],
                $this->tags['SCRIPT (124)'],
                $this->tags['SCRIPT (125)'],
                $this->tags['SCRIPT (126)'],
                $this->tags['script id=amp-rtc'],
                $this->tags['script type=application/ld+json'],
                $this->tags['SCRIPT type=text/plain'],
                $this->tags['SCRIPT type=text/plain (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-accordion] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-autocomplete] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-bind] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-carousel] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-fit-text] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-form] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-image-lightbox] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-lightbox] (AMP4ADS)'],
                $this->tags['SCRIPT[custom-element=amp-lightbox] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-list] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-selector] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-sidebar] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-element=amp-timeago] (AMP4EMAIL)'],
                $this->tags['SCRIPT[custom-template=amp-mustache] (AMP4ADS)'],
                $this->tags['SCRIPT[custom-template=amp-mustache] (AMP4EMAIL)'],
                $this->tags['subscriptions script ciphertext'],
            ],
            Extension::ACCORDION => $this->tags[Extension::ACCORDION],
            Element::SECTION => [
                $this->tags['amp-accordion > section'],
                $this->tags[Element::SECTION],
                $this->tags['section (AMP4EMAIL)'],
                $this->tags['subscriptions-section content swg_amp_cache_nonce'],
            ],
            Extension::ACTION_MACRO => $this->tags[Extension::ACTION_MACRO],
            Extension::AD => [
                $this->tags[Extension::AD],
                $this->tags['amp-ad with data-enable-refresh attribute'],
                $this->tags['amp-ad with data-multi-size attribute'],
                $this->tags['amp-ad with type=custom'],
            ],
            Extension::AD_CUSTOM => $this->tags[Extension::AD_CUSTOM],
            Extension::AD_EXIT => $this->tags[Extension::AD_EXIT],
            Extension::ADDTHIS => $this->tags[Extension::ADDTHIS],
            Extension::ANALYTICS => $this->tags[Extension::ANALYTICS],
            Extension::ANIM => [
                $this->tags[Extension::ANIM],
                $this->tags['AMP-ANIM (AMP4EMAIL)'],
            ],
            Extension::ANIMATION => $this->tags[Extension::ANIMATION],
            Extension::APESTER_MEDIA => $this->tags[Extension::APESTER_MEDIA],
            Extension::APP_BANNER => $this->tags[Extension::APP_BANNER],
            Element::BUTTON => [
                $this->tags['amp-app-banner button[open-button]'],
                $this->tags['amp-list-load-more button[load-more-clickable]'],
                $this->tags[Element::BUTTON],
                $this->tags['button amp-nested-menu'],
            ],
            Extension::AUDIO => [
                $this->tags[Extension::AUDIO],
                $this->tags['amp-audio (A4A)'],
                $this->tags['amp-story >> amp-audio'],
            ],
            Element::SOURCE => [
                $this->tags['amp-audio > source'],
                $this->tags['amp-ima-video > source'],
                $this->tags['amp-video > source'],
                $this->tags['audio > source'],
                $this->tags['picture > source'],
                $this->tags['video > source'],
            ],
            Element::TRACK => [
                $this->tags['amp-audio > track'],
                $this->tags['amp-audio > track[kind=subtitles]'],
                $this->tags['amp-ima-video > track'],
                $this->tags['amp-ima-video > track[kind=subtitles]'],
                $this->tags['amp-video > track'],
                $this->tags['amp-video > track[kind=subtitles]'],
                $this->tags['audio > track'],
                $this->tags['audio > track[kind=subtitles]'],
                $this->tags['video > track'],
                $this->tags['video > track[kind=subtitles]'],
            ],
            Extension::AUTO_ADS => $this->tags[Extension::AUTO_ADS],
            Extension::AUTOCOMPLETE => [
                $this->tags['amp-autocomplete'],
                $this->tags['AMP-AUTOCOMPLETE (AMP4EMAIL)'],
            ],
            Element::INPUT => [
                $this->tags['amp-autocomplete > input'],
                $this->tags[Element::INPUT],
                $this->tags['input [mask=date-dd-mm-yyyy]'],
                $this->tags['input [mask=date-mm-dd-yyyy]'],
                $this->tags['input [mask=date-mm-yy]'],
                $this->tags['input [mask=date-yyyy-mm-dd]'],
                $this->tags['input [mask=payment-card]'],
                $this->tags['input [mask] (custom mask)'],
                $this->tags['INPUT [type=file]'],
                $this->tags['INPUT [type=password]'],
            ],
            Extension::BASE_CAROUSEL => [
                $this->tags[Extension::BASE_CAROUSEL],
                $this->tags['AMP-BASE-CAROUSEL [lightbox]'],
            ],
            Extension::BEOPINION => $this->tags[Extension::BEOPINION],
            Extension::BIND_MACRO => $this->tags[Extension::BIND_MACRO],
            Extension::BODYMOVIN_ANIMATION => $this->tags[Extension::BODYMOVIN_ANIMATION],
            Extension::BRID_PLAYER => $this->tags[Extension::BRID_PLAYER],
            Extension::BRIGHTCOVE => $this->tags[Extension::BRIGHTCOVE],
            Extension::BYSIDE_CONTENT => $this->tags[Extension::BYSIDE_CONTENT],
            Extension::CALL_TRACKING => $this->tags[Extension::CALL_TRACKING],
            Extension::CAROUSEL => [
                $this->tags[Extension::CAROUSEL],
                $this->tags['AMP-CAROUSEL lightbox'],
            ],
            Extension::CONNATIX_PLAYER => $this->tags[Extension::CONNATIX_PLAYER],
            Extension::CONSENT => [
                $this->tags[Extension::CONSENT],
                $this->tags['amp-consent [type]'],
            ],
            Extension::DAILYMOTION => $this->tags[Extension::DAILYMOTION],
            Extension::DATE_COUNTDOWN => $this->tags[Extension::DATE_COUNTDOWN],
            Extension::DATE_DISPLAY => $this->tags[Extension::DATE_DISPLAY],
            Element::TEMPLATE => [
                $this->tags['amp-date-picker > template [date-template]'],
                $this->tags['amp-date-picker > template [info-template]'],
                $this->tags['amp-story-auto-ads > template'],
                $this->tags[Element::TEMPLATE],
                $this->tags['TEMPLATE (AMP4EMAIL)'],
            ],
            Extension::DATE_PICKER => [
                $this->tags['amp-date-picker[type=range][mode=overlay]'],
                $this->tags['amp-date-picker[type=range][mode=static]'],
                $this->tags['amp-date-picker[type=single][mode=overlay]'],
                $this->tags['amp-date-picker[type=single][mode=static]'],
            ],
            Extension::DELIGHT_PLAYER => $this->tags[Extension::DELIGHT_PLAYER],
            Extension::EMBED => [
                $this->tags[Extension::EMBED],
                $this->tags['amp-embed with data-multi-size attribute'],
            ],
            Extension::EMBEDLY_CARD => $this->tags[Extension::EMBEDLY_CARD],
            Extension::EMBEDLY_KEY => $this->tags[Extension::EMBEDLY_KEY],
            Extension::EXPERIMENT => $this->tags[Extension::EXPERIMENT],
            Extension::FACEBOOK => $this->tags[Extension::FACEBOOK],
            Extension::FACEBOOK_COMMENTS => $this->tags[Extension::FACEBOOK_COMMENTS],
            Extension::FACEBOOK_LIKE => $this->tags[Extension::FACEBOOK_LIKE],
            Extension::FACEBOOK_PAGE => $this->tags[Extension::FACEBOOK_PAGE],
            Extension::FIT_TEXT => $this->tags[Extension::FIT_TEXT],
            Extension::FONT => $this->tags[Extension::FONT],
            Extension::FX_FLYING_CARPET => $this->tags[Extension::FX_FLYING_CARPET],
            Extension::GEO => $this->tags[Extension::GEO],
            Extension::GFYCAT => $this->tags[Extension::GFYCAT],
            Extension::GIST => $this->tags[Extension::GIST],
            Extension::GOOGLE_DOCUMENT_EMBED => $this->tags[Extension::GOOGLE_DOCUMENT_EMBED],
            Extension::GWD_ANIMATION => $this->tags[Extension::GWD_ANIMATION],
            Extension::HULU => $this->tags[Extension::HULU],
            Extension::IFRAME => $this->tags[Extension::IFRAME],
            Extension::IMA_VIDEO => $this->tags[Extension::IMA_VIDEO],
            Extension::IMAGE_LIGHTBOX => $this->tags[Extension::IMAGE_LIGHTBOX],
            Extension::IMAGE_SLIDER => [
                $this->tags[Extension::IMAGE_SLIDER],
                $this->tags['amp-image-slider (transformed)'],
            ],
            Element::DIV => [
                $this->tags['AMP-IMAGE-SLIDER > DIV [first]'],
                $this->tags['AMP-IMAGE-SLIDER > DIV [second]'],
                $this->tags['AMP-LIST DIV [fetch-error]'],
                $this->tags[Element::DIV],
                $this->tags['div amp-nested-menu'],
                $this->tags['FORM DIV [submit-error]'],
                $this->tags['FORM DIV [submit-error][template]'],
                $this->tags['FORM DIV [submit-success]'],
                $this->tags['FORM DIV [submit-success][template]'],
                $this->tags['FORM DIV [submitting]'],
                $this->tags['FORM DIV [submitting][template]'],
                $this->tags['FORM DIV [verify-error]'],
                $this->tags['FORM DIV [verify-error][template]'],
            ],
            Extension::IMG => [
                $this->tags[Extension::IMG],
                $this->tags['AMP-IMG (AMP4EMAIL)'],
                $this->tags['amp-img (transformed)'],
            ],
            Element::IMG => [
                $this->tags['amp-img > img (transformed)'],
                $this->tags['amp-img > img[placeholder] (transformed)'],
                $this->tags['IMG-I-AMPHTML-INTRINSIC-SIZER'],
                $this->tags['noscript > img'],
            ],
            Extension::IMGUR => $this->tags[Extension::IMGUR],
            Extension::INLINE_GALLERY => $this->tags[Extension::INLINE_GALLERY],
            Extension::INLINE_GALLERY_PAGINATION => [
                $this->tags['amp-inline-gallery-pagination'],
                $this->tags['amp-inline-gallery-pagination [inset]'],
            ],
            Extension::INLINE_GALLERY_THUMBNAILS => $this->tags[Extension::INLINE_GALLERY_THUMBNAILS],
            Extension::INSTAGRAM => $this->tags[Extension::INSTAGRAM],
            Extension::INSTALL_SERVICEWORKER => $this->tags[Extension::INSTALL_SERVICEWORKER],
            Extension::IZLESENE => $this->tags[Extension::IZLESENE],
            Extension::JWPLAYER => $this->tags[Extension::JWPLAYER],
            Extension::KALTURA_PLAYER => $this->tags[Extension::KALTURA_PLAYER],
            Extension::LAYOUT => $this->tags[Extension::LAYOUT],
            Extension::LIGHTBOX => [
                $this->tags[Extension::LIGHTBOX],
                $this->tags['amp-lightbox [AMP4ADS]'],
            ],
            Extension::LINK_REWRITER => $this->tags[Extension::LINK_REWRITER],
            Extension::LIST_ => [
                $this->tags[Extension::LIST_],
                $this->tags['AMP-LIST (AMP4EMAIL)'],
            ],
            Extension::LIST_LOAD_MORE => $this->tags[Extension::LIST_LOAD_MORE],
            Extension::LIVE_LIST => $this->tags[Extension::LIVE_LIST],
            Extension::MATHML => $this->tags[Extension::MATHML],
            Extension::MEGA_MENU => $this->tags[Extension::MEGA_MENU],
            Extension::MEGAPHONE => [
                $this->tags['amp-megaphone [data-episode]'],
                $this->tags['amp-megaphone [data-playlist]'],
            ],
            Extension::MINUTE_MEDIA_PLAYER => $this->tags[Extension::MINUTE_MEDIA_PLAYER],
            Extension::MOWPLAYER => $this->tags[Extension::MOWPLAYER],
            Extension::NESTED_MENU => $this->tags[Extension::NESTED_MENU],
            Extension::NEXT_PAGE => [
                $this->tags['amp-next-page with inline config'],
                $this->tags['amp-next-page with src attribute'],
                $this->tags['amp-next-page [type=adsense]'],
            ],
            Extension::NEXXTV_PLAYER => $this->tags[Extension::NEXXTV_PLAYER],
            Extension::O2_PLAYER => $this->tags[Extension::O2_PLAYER],
            Extension::ONETAP_GOOGLE => $this->tags[Extension::ONETAP_GOOGLE],
            Extension::OOYALA_PLAYER => $this->tags[Extension::OOYALA_PLAYER],
            Extension::ORIENTATION_OBSERVER => $this->tags[Extension::ORIENTATION_OBSERVER],
            Extension::PAN_ZOOM => $this->tags[Extension::PAN_ZOOM],
            Extension::PINTEREST => $this->tags[Extension::PINTEREST],
            Extension::PIXEL => $this->tags[Extension::PIXEL],
            Extension::PLAYBUZZ => $this->tags[Extension::PLAYBUZZ],
            Extension::POSITION_OBSERVER => $this->tags[Extension::POSITION_OBSERVER],
            Extension::POWR_PLAYER => $this->tags[Extension::POWR_PLAYER],
            Extension::REACH_PLAYER => $this->tags[Extension::REACH_PLAYER],
            Extension::RECAPTCHA_INPUT => $this->tags[Extension::RECAPTCHA_INPUT],
            Extension::REDBULL_PLAYER => $this->tags[Extension::REDBULL_PLAYER],
            Extension::REDDIT => $this->tags[Extension::REDDIT],
            Extension::RIDDLE_QUIZ => $this->tags[Extension::RIDDLE_QUIZ],
            Extension::SCRIPT => $this->tags[Extension::SCRIPT],
            Extension::SELECTOR => $this->tags[Extension::SELECTOR],
            Extension::SIDEBAR => [
                $this->tags['amp-sidebar'],
                $this->tags['amp-sidebar (AMP4EMAIL)'],
                $this->tags['amp-story >> amp-sidebar'],
            ],
            Element::NAV => [
                $this->tags['amp-sidebar > nav'],
                $this->tags[Element::NAV],
            ],
            Extension::SKIMLINKS => $this->tags[Extension::SKIMLINKS],
            Extension::SMARTLINKS => $this->tags[Extension::SMARTLINKS],
            Extension::SOCIAL_SHARE => $this->tags[Extension::SOCIAL_SHARE],
            Extension::SOUNDCLOUD => $this->tags[Extension::SOUNDCLOUD],
            Extension::SPRINGBOARD_PLAYER => $this->tags[Extension::SPRINGBOARD_PLAYER],
            Extension::STATE => [
                $this->tags['amp-state'],
                $this->tags['amp-state (AMP4EMAIL)'],
            ],
            Extension::STICKY_AD => $this->tags[Extension::STICKY_AD],
            Extension::STORY => $this->tags[Extension::STORY],
            Extension::STORY_360 => $this->tags[Extension::STORY_360],
            Extension::STORY_ANIMATION => $this->tags[Extension::STORY_ANIMATION],
            Extension::STORY_AUTO_ADS => $this->tags[Extension::STORY_AUTO_ADS],
            Extension::STORY_BOOKEND => $this->tags[Extension::STORY_BOOKEND],
            Extension::STORY_CONSENT => $this->tags[Extension::STORY_CONSENT],
            Extension::STORY_CTA_LAYER => $this->tags[Extension::STORY_CTA_LAYER],
            Extension::STORY_GRID_LAYER => $this->tags[Extension::STORY_GRID_LAYER],
            Extension::STORY_INTERACTIVE_BINARY_POLL => $this->tags[Extension::STORY_INTERACTIVE_BINARY_POLL],
            Extension::STORY_INTERACTIVE_POLL => $this->tags[Extension::STORY_INTERACTIVE_POLL],
            Extension::STORY_INTERACTIVE_QUIZ => $this->tags[Extension::STORY_INTERACTIVE_QUIZ],
            Extension::STORY_INTERACTIVE_RESULTS => $this->tags[Extension::STORY_INTERACTIVE_RESULTS],
            Extension::STORY_PAGE => $this->tags[Extension::STORY_PAGE],
            Extension::STORY_PAGE_ATTACHMENT => [
                $this->tags['amp-story-page-attachment'],
                $this->tags['amp-story-page-attachment[href]'],
            ],
            Extension::STORY_PANNING_MEDIA => $this->tags[Extension::STORY_PANNING_MEDIA],
            Extension::STORY_PLAYER => $this->tags[Extension::STORY_PLAYER],
            Extension::VIDEO => [
                $this->tags['amp-story >> amp-story-page-attachment >> amp-video'],
                $this->tags['amp-story >> amp-video'],
                $this->tags[Extension::VIDEO],
            ],
            Extension::TIMEAGO => $this->tags[Extension::TIMEAGO],
            Extension::TRUNCATE_TEXT => $this->tags[Extension::TRUNCATE_TEXT],
            Extension::TWITTER => $this->tags[Extension::TWITTER],
            Extension::USER_NOTIFICATION => $this->tags[Extension::USER_NOTIFICATION],
            Extension::VIDEO_IFRAME => [
                $this->tags['AMP-VIDEO-IFRAME with [placeholder]'],
                $this->tags['AMP-VIDEO-IFRAME with [placeholder] (transformed)'],
                $this->tags['AMP-VIDEO-IFRAME[poster]'],
            ],
            Extension::VIMEO => $this->tags[Extension::VIMEO],
            Extension::VINE => $this->tags[Extension::VINE],
            Extension::VIQEO_PLAYER => $this->tags[Extension::VIQEO_PLAYER],
            Extension::VK => $this->tags[Extension::VK],
            Extension::WEB_PUSH => $this->tags[Extension::WEB_PUSH],
            Extension::WEB_PUSH_WIDGET => $this->tags[Extension::WEB_PUSH_WIDGET],
            Extension::WISTIA_PLAYER => $this->tags[Extension::WISTIA_PLAYER],
            Extension::YOTPO => $this->tags[Extension::YOTPO],
            Extension::YOUTUBE => $this->tags[Extension::YOUTUBE],
            Element::ARTICLE => $this->tags[Element::ARTICLE],
            Element::ASIDE => $this->tags[Element::ASIDE],
            Element::AUDIO => $this->tags[Element::AUDIO],
            Element::B => $this->tags[Element::B],
            Element::BASE => $this->tags[Element::BASE],
            Element::BDI => $this->tags[Element::BDI],
            Element::BDO => $this->tags[Element::BDO],
            Element::BIG => $this->tags[Element::BIG],
            Element::BLOCKQUOTE => $this->tags[Element::BLOCKQUOTE],
            Element::BODY => $this->tags[Element::BODY],
            Element::BR => $this->tags[Element::BR],
            Element::CANVAS => $this->tags[Element::CANVAS],
            Element::CAPTION => $this->tags[Element::CAPTION],
            Element::CENTER => $this->tags[Element::CENTER],
            Element::CIRCLE => $this->tags[Element::CIRCLE],
            Element::CITE => $this->tags[Element::CITE],
            Element::CLIPPATH => $this->tags[Element::CLIPPATH],
            Element::CODE => $this->tags[Element::CODE],
            Element::COL => $this->tags[Element::COL],
            Element::COLGROUP => $this->tags[Element::COLGROUP],
            Element::DATA => $this->tags[Element::DATA],
            Element::DATALIST => $this->tags[Element::DATALIST],
            Element::DD => $this->tags[Element::DD],
            Element::DEFS => $this->tags[Element::DEFS],
            Element::DEL => $this->tags[Element::DEL],
            Element::DESC => $this->tags[Element::DESC],
            Element::DETAILS => $this->tags[Element::DETAILS],
            Element::DFN => $this->tags[Element::DFN],
            Element::DIR => $this->tags[Element::DIR],
            Element::DL => $this->tags[Element::DL],
            Element::DT => $this->tags[Element::DT],
            Element::ELLIPSE => $this->tags[Element::ELLIPSE],
            Element::EM => $this->tags[Element::EM],
            Element::FECOLORMATRIX => $this->tags[Element::FECOLORMATRIX],
            Element::FECOMPOSITE => $this->tags[Element::FECOMPOSITE],
            Element::FEFLOOD => $this->tags[Element::FEFLOOD],
            Element::FEGAUSSIANBLUR => $this->tags[Element::FEGAUSSIANBLUR],
            Element::FEMERGE => $this->tags[Element::FEMERGE],
            Element::FEMERGENODE => $this->tags[Element::FEMERGENODE],
            Element::FEOFFSET => $this->tags[Element::FEOFFSET],
            Element::FIELDSET => $this->tags[Element::FIELDSET],
            Element::FIGCAPTION => $this->tags[Element::FIGCAPTION],
            Element::FIGURE => $this->tags[Element::FIGURE],
            Element::FILTER => $this->tags[Element::FILTER],
            Element::FOOTER => $this->tags[Element::FOOTER],
            Element::FORM => [
                $this->tags['FORM [method=GET]'],
                $this->tags['FORM [method=GET] (AMP4EMAIL)'],
                $this->tags['FORM [method=POST]'],
                $this->tags['FORM [method=POST] (AMP4EMAIL)'],
            ],
            Element::G => $this->tags[Element::G],
            Element::GLYPH => $this->tags[Element::GLYPH],
            Element::GLYPHREF => $this->tags[Element::GLYPHREF],
            Element::H1 => $this->tags[Element::H1],
            Element::H2 => [
                $this->tags[Element::H2],
                $this->tags['h2 amp-nested-menu'],
            ],
            Element::H3 => [
                $this->tags[Element::H3],
                $this->tags['h3 amp-nested-menu'],
            ],
            Element::H4 => [
                $this->tags[Element::H4],
                $this->tags['h4 amp-nested-menu'],
            ],
            Element::H5 => [
                $this->tags[Element::H5],
                $this->tags['h5 amp-nested-menu'],
            ],
            Element::H6 => [
                $this->tags[Element::H6],
                $this->tags['h6 amp-nested-menu'],
            ],
            Element::HEAD => $this->tags[Element::HEAD],
            Element::STYLE => [
                $this->tags['head > style[amp-boilerplate]'],
                $this->tags['head > style[amp-boilerplate] (transformed)'],
                $this->tags['head > style[amp4ads-boilerplate]'],
                $this->tags['head > style[amp4email-boilerplate]'],
                $this->tags['noscript > style[amp-boilerplate]'],
                $this->tags['noscript > style[amp-boilerplate] (transformed)'],
                $this->tags['style amp-custom'],
                $this->tags['style amp-custom (AMP4ADS)'],
                $this->tags['style amp-custom (AMP4EMAIL)'],
                $this->tags['style amp-custom (css-strict)'],
                $this->tags['style amp-custom-length-check'],
                $this->tags['style[amp-keyframes]'],
                $this->tags['style[amp-runtime] (transformed)'],
            ],
            Element::HEADER => $this->tags[Element::HEADER],
            Element::HGROUP => $this->tags[Element::HGROUP],
            Element::HKERN => $this->tags[Element::HKERN],
            Element::HR => $this->tags[Element::HR],
            Element::HTML => [
                $this->tags[Element::HTML],
                $this->tags['html (transformed)'],
            ],
            Element::_DOCTYPE => [
                $this->tags['html doctype'],
                $this->tags['html doctype (AMP4ADS)'],
            ],
            Element::I => $this->tags[Element::I],
            Internal::SIZER => [
                $this->tags['I-AMPHTML-SIZER-INTRINSIC'],
                $this->tags['I-AMPHTML-SIZER-RESPONSIVE'],
            ],
            Element::IFRAME => $this->tags[Element::IFRAME],
            Element::IMAGE => $this->tags[Element::IMAGE],
            Element::INS => $this->tags[Element::INS],
            Element::KBD => $this->tags[Element::KBD],
            Element::LABEL => $this->tags[Element::LABEL],
            Element::LEGEND => $this->tags[Element::LEGEND],
            Element::LI => $this->tags[Element::LI],
            Element::LINE => $this->tags[Element::LINE],
            Element::LINEARGRADIENT => $this->tags[Element::LINEARGRADIENT],
            Element::STOP => [
                $this->tags['lineargradient > stop'],
                $this->tags['radialgradient > stop'],
            ],
            Element::LINK => [
                $this->tags['link itemprop='],
                $this->tags['link itemprop=sameAs'],
                $this->tags['link property='],
                $this->tags['link rel='],
                $this->tags['link rel=canonical'],
                $this->tags['link rel=manifest'],
                $this->tags['link rel=preload'],
                $this->tags['link rel=stylesheet for fonts'],
            ],
            Element::LISTING => $this->tags[Element::LISTING],
            Element::MAIN => $this->tags[Element::MAIN],
            Element::MARK => $this->tags[Element::MARK],
            Element::MARKER => $this->tags[Element::MARKER],
            Element::MASK => $this->tags[Element::MASK],
            Element::META => [
                $this->tags['meta charset=utf-8'],
                $this->tags['meta http-equiv=content-language'],
                $this->tags['meta http-equiv=Content-Script-Type'],
                $this->tags['meta http-equiv=Content-Style-Type'],
                $this->tags['meta http-equiv=Content-Type'],
                $this->tags['meta http-equiv=imagetoolbar'],
                $this->tags['meta http-equiv=origin-trial'],
                $this->tags['meta http-equiv=pics-label'],
                $this->tags['meta http-equiv=resource-type'],
                $this->tags['meta http-equiv=x-dns-prefetch-control'],
                $this->tags['meta http-equiv=X-UA-Compatible'],
                $this->tags['meta name=amp-3p-iframe-src'],
                $this->tags['meta name=amp-ad-doubleclick-sra'],
                $this->tags['meta name=amp-ad-enable-refresh'],
                $this->tags['meta name=amp-consent-blocking'],
                $this->tags['meta name=amp-cta-landing-page-type'],
                $this->tags['meta name=amp-cta-type'],
                $this->tags['meta name=amp-cta-url'],
                $this->tags['meta name=amp-experiment-token'],
                $this->tags['meta name=amp-experiments-opt-in'],
                $this->tags['meta name=amp-google-clientid-id-api'],
                $this->tags['meta name=amp-link-variable-allowed-origin'],
                $this->tags['meta name=amp-list-load-more'],
                $this->tags['meta name=amp-recaptcha-input'],
                $this->tags['meta name=amp-script-src'],
                $this->tags['meta name=amp-story-generator-name'],
                $this->tags['meta name=amp-story-generator-version'],
                $this->tags['meta name=amp-to-amp-navigation'],
                $this->tags['meta name=amp4ads-id'],
                $this->tags['meta name=amp4ads-vars-*'],
                $this->tags['meta name= and content='],
                $this->tags['meta name=apple-itunes-app'],
                $this->tags['meta name=viewport'],
            ],
            Element::METADATA => $this->tags[Element::METADATA],
            Element::METER => $this->tags[Element::METER],
            Element::MULTICOL => $this->tags[Element::MULTICOL],
            Element::NEXTID => $this->tags[Element::NEXTID],
            Element::NOBR => $this->tags[Element::NOBR],
            Element::NOSCRIPT => [
                $this->tags[Element::NOSCRIPT],
                $this->tags['noscript enclosure for boilerplate'],
                $this->tags['noscript enclosure for boilerplate (transformed)'],
            ],
            Element::O_P => $this->tags[Element::O_P],
            Element::OL => $this->tags[Element::OL],
            Element::OPTGROUP => $this->tags[Element::OPTGROUP],
            Element::OPTION => $this->tags[Element::OPTION],
            Element::OUTPUT => $this->tags[Element::OUTPUT],
            Element::P => $this->tags[Element::P],
            Element::PATH => $this->tags[Element::PATH],
            Element::PATTERN => $this->tags[Element::PATTERN],
            Element::PICTURE => $this->tags[Element::PICTURE],
            Element::POLYGON => $this->tags[Element::POLYGON],
            Element::POLYLINE => $this->tags[Element::POLYLINE],
            Element::PRE => $this->tags[Element::PRE],
            Element::PROGRESS => $this->tags[Element::PROGRESS],
            Element::Q => $this->tags[Element::Q],
            Element::RADIALGRADIENT => $this->tags[Element::RADIALGRADIENT],
            Element::RB => $this->tags[Element::RB],
            Element::RECT => $this->tags[Element::RECT],
            Element::RP => $this->tags[Element::RP],
            Element::RT => $this->tags[Element::RT],
            Element::RTC => $this->tags[Element::RTC],
            Element::RUBY => $this->tags[Element::RUBY],
            Element::S => $this->tags[Element::S],
            Element::SAMP => $this->tags[Element::SAMP],
            Element::SELECT => $this->tags[Element::SELECT],
            Element::SLOT => $this->tags[Element::SLOT],
            Element::SMALL => $this->tags[Element::SMALL],
            Element::SOLIDCOLOR => $this->tags[Element::SOLIDCOLOR],
            Element::SPACER => $this->tags[Element::SPACER],
            Element::SPAN => [
                $this->tags[Element::SPAN],
                $this->tags['span amp-nested-menu'],
                $this->tags['span swg_amp_cache_nonce'],
            ],
            Element::STRIKE => $this->tags[Element::STRIKE],
            Element::STRONG => $this->tags[Element::STRONG],
            Element::SUB => $this->tags[Element::SUB],
            Element::SUMMARY => $this->tags[Element::SUMMARY],
            Element::SUP => $this->tags[Element::SUP],
            Element::SVG => $this->tags[Element::SVG],
            Element::TITLE => [
                $this->tags['svg title'],
                $this->tags['title'],
                $this->tags['title [AMP4EMAIL]'],
            ],
            Element::SWITCH_ => $this->tags[Element::SWITCH_],
            Element::SYMBOL => $this->tags[Element::SYMBOL],
            Element::TABLE => $this->tags[Element::TABLE],
            Element::TBODY => $this->tags[Element::TBODY],
            Element::TD => $this->tags[Element::TD],
            Element::TEXT => $this->tags[Element::TEXT],
            Element::TEXTAREA => $this->tags[Element::TEXTAREA],
            Element::TEXTPATH => $this->tags[Element::TEXTPATH],
            Element::TFOOT => $this->tags[Element::TFOOT],
            Element::TH => $this->tags[Element::TH],
            Element::THEAD => $this->tags[Element::THEAD],
            Element::TIME => $this->tags[Element::TIME],
            Element::TR => $this->tags[Element::TR],
            Element::TREF => $this->tags[Element::TREF],
            Element::TSPAN => $this->tags[Element::TSPAN],
            Element::TT => $this->tags[Element::TT],
            Element::U => $this->tags[Element::U],
            Element::UL => $this->tags[Element::UL],
            Element::USE_ => $this->tags[Element::USE_],
            Element::VAR_ => $this->tags[Element::VAR_],
            Element::VIDEO => $this->tags[Element::VIDEO],
            Element::VIEW => $this->tags[Element::VIEW],
            Element::VKERN => $this->tags[Element::VKERN],
            Element::WBR => $this->tags[Element::WBR],
        ];
        $this->bySpecName = [
            'A (AMP4EMAIL)' => $this->tags['A (AMP4EMAIL)'],
            'amp-access extension .json script' => $this->tags['amp-access extension .json script'],
            'amp-accordion > section' => $this->tags['amp-accordion > section'],
            'amp-ad-exit configuration JSON' => $this->tags['amp-ad-exit configuration JSON'],
            'amp-ad extension script' => $this->tags['amp-ad extension script'],
            'amp-ad with data-enable-refresh attribute' => $this->tags['amp-ad with data-enable-refresh attribute'],
            'amp-ad with data-multi-size attribute' => $this->tags['amp-ad with data-multi-size attribute'],
            'amp-ad with type=custom' => $this->tags['amp-ad with type=custom'],
            'amp-analytics extension .json script' => $this->tags['amp-analytics extension .json script'],
            'AMP-ANIM (AMP4EMAIL)' => $this->tags['AMP-ANIM (AMP4EMAIL)'],
            'amp-animation extension .json script' => $this->tags['amp-animation extension .json script'],
            'amp-anim extension script (AMP4EMAIL)' => $this->tags['amp-anim extension script (AMP4EMAIL)'],
            'amp-app-banner button[open-button]' => $this->tags['amp-app-banner button[open-button]'],
            'amp-audio (A4A)' => $this->tags['amp-audio (A4A)'],
            'amp-audio > source' => $this->tags['amp-audio > source'],
            'amp-audio > track' => $this->tags['amp-audio > track'],
            'amp-audio > track[kind=subtitles]' => $this->tags['amp-audio > track[kind=subtitles]'],
            'amp-autocomplete' => $this->tags['amp-autocomplete'],
            'AMP-AUTOCOMPLETE (AMP4EMAIL)' => $this->tags['AMP-AUTOCOMPLETE (AMP4EMAIL)'],
            'amp-autocomplete > input' => $this->tags['amp-autocomplete > input'],
            'amp-autocomplete JSON' => $this->tags['amp-autocomplete JSON'],
            'AMP-BASE-CAROUSEL lightbox [child]' => $this->tags['AMP-BASE-CAROUSEL lightbox [child]'],
            'AMP-BASE-CAROUSEL lightbox [lightbox-exclude]' => $this->tags['AMP-BASE-CAROUSEL lightbox [lightbox-exclude]'],
            'AMP-BASE-CAROUSEL [lightbox]' => $this->tags['AMP-BASE-CAROUSEL [lightbox]'],
            'amp-bind extension .json script' => $this->tags['amp-bind extension .json script'],
            'AMP-CAROUSEL' => $this->tags[Extension::CAROUSEL],
            'AMP-CAROUSEL lightbox' => $this->tags['AMP-CAROUSEL lightbox'],
            'AMP-CAROUSEL lightbox [child]' => $this->tags['AMP-CAROUSEL lightbox [child]'],
            'AMP-CAROUSEL lightbox [lightbox-exclude]' => $this->tags['AMP-CAROUSEL lightbox [lightbox-exclude]'],
            'amp-consent extension .json script' => $this->tags['amp-consent extension .json script'],
            'amp-consent [type]' => $this->tags['amp-consent [type]'],
            'amp-date-picker > template [date-template]' => $this->tags['amp-date-picker > template [date-template]'],
            'amp-date-picker > template [info-template]' => $this->tags['amp-date-picker > template [info-template]'],
            'amp-date-picker[type=range][mode=overlay]' => $this->tags['amp-date-picker[type=range][mode=overlay]'],
            'amp-date-picker[type=range][mode=static]' => $this->tags['amp-date-picker[type=range][mode=static]'],
            'amp-date-picker[type=single][mode=overlay]' => $this->tags['amp-date-picker[type=single][mode=overlay]'],
            'amp-date-picker[type=single][mode=static]' => $this->tags['amp-date-picker[type=single][mode=static]'],
            'amp-embed with data-multi-size attribute' => $this->tags['amp-embed with data-multi-size attribute'],
            'amp-experiment extension .json script' => $this->tags['amp-experiment extension .json script'],
            'amp-experiment story extension .json script' => $this->tags['amp-experiment story extension .json script'],
            'amp-geo extension .json script' => $this->tags['amp-geo extension .json script'],
            'amp-ima-video > script[type=application/json]' => $this->tags['amp-ima-video > script[type=application/json]'],
            'amp-ima-video > source' => $this->tags['amp-ima-video > source'],
            'amp-ima-video > track' => $this->tags['amp-ima-video > track'],
            'amp-ima-video > track[kind=subtitles]' => $this->tags['amp-ima-video > track[kind=subtitles]'],
            'amp-image-slider (transformed)' => $this->tags['amp-image-slider (transformed)'],
            'AMP-IMAGE-SLIDER > DIV [first]' => $this->tags['AMP-IMAGE-SLIDER > DIV [first]'],
            'AMP-IMAGE-SLIDER > DIV [second]' => $this->tags['AMP-IMAGE-SLIDER > DIV [second]'],
            'AMP-IMG (AMP4EMAIL)' => $this->tags['AMP-IMG (AMP4EMAIL)'],
            'amp-img (transformed)' => $this->tags['amp-img (transformed)'],
            'amp-img > img (transformed)' => $this->tags['amp-img > img (transformed)'],
            'amp-img > img[placeholder] (transformed)' => $this->tags['amp-img > img[placeholder] (transformed)'],
            'amp-inline-gallery-pagination' => $this->tags['amp-inline-gallery-pagination'],
            'amp-inline-gallery-pagination [inset]' => $this->tags['amp-inline-gallery-pagination [inset]'],
            'amp-lightbox [AMP4ADS]' => $this->tags['amp-lightbox [AMP4ADS]'],
            'amp-link-rewriter extension .json script' => $this->tags['amp-link-rewriter extension .json script'],
            'AMP-LIST (AMP4EMAIL)' => $this->tags['AMP-LIST (AMP4EMAIL)'],
            'amp-list-load-more button[load-more-clickable]' => $this->tags['amp-list-load-more button[load-more-clickable]'],
            'AMP-LIST DIV [fetch-error]' => $this->tags['AMP-LIST DIV [fetch-error]'],
            'AMP-LIVE-LIST [items]' => $this->tags['AMP-LIVE-LIST [items]'],
            'AMP-LIVE-LIST [items] item' => $this->tags['AMP-LIVE-LIST [items] item'],
            'AMP-LIVE-LIST [pagination]' => $this->tags['AMP-LIVE-LIST [pagination]'],
            'AMP-LIVE-LIST [update]' => $this->tags['AMP-LIVE-LIST [update]'],
            'AMP-MEGA-MENU > AMP-LIST' => $this->tags['AMP-MEGA-MENU > AMP-LIST'],
            'AMP-MEGA-MENU > AMP-LIST > TEMPLATE' => $this->tags['AMP-MEGA-MENU > AMP-LIST > TEMPLATE'],
            'AMP-MEGA-MENU > NAV' => $this->tags['AMP-MEGA-MENU > NAV'],
            'AMP-MEGA-MENU item-content' => $this->tags['AMP-MEGA-MENU item-content'],
            'AMP-MEGA-MENU item-heading' => $this->tags['AMP-MEGA-MENU item-heading'],
            'AMP-MEGA-MENU NAV > UL/OL' => $this->tags['AMP-MEGA-MENU NAV > UL/OL'],
            'AMP-MEGA-MENU NAV > UL/OL > LI' => $this->tags['AMP-MEGA-MENU NAV > UL/OL > LI'],
            'amp-megaphone [data-episode]' => $this->tags['amp-megaphone [data-episode]'],
            'amp-megaphone [data-playlist]' => $this->tags['amp-megaphone [data-playlist]'],
            'AMP-NEXT-PAGE > SCRIPT[type=application/json]' => $this->tags['AMP-NEXT-PAGE > SCRIPT[type=application/json]'],
            'AMP-NEXT-PAGE > [footer]' => $this->tags['AMP-NEXT-PAGE > [footer]'],
            'AMP-NEXT-PAGE > [recommendation-box]' => $this->tags['AMP-NEXT-PAGE > [recommendation-box]'],
            'AMP-NEXT-PAGE > [separator]' => $this->tags['AMP-NEXT-PAGE > [separator]'],
            'amp-next-page with inline config' => $this->tags['amp-next-page with inline config'],
            'amp-next-page with src attribute' => $this->tags['amp-next-page with src attribute'],
            'amp-next-page [type=adsense]' => $this->tags['amp-next-page [type=adsense]'],
            'amp-script extension local script' => $this->tags['amp-script extension local script'],
            'AMP-SELECTOR child' => $this->tags['AMP-SELECTOR child'],
            'AMP-SELECTOR option' => $this->tags['AMP-SELECTOR option'],
            'amp-sidebar' => $this->tags['amp-sidebar'],
            'amp-sidebar (AMP4EMAIL)' => $this->tags['amp-sidebar (AMP4EMAIL)'],
            'amp-sidebar > nav' => $this->tags['amp-sidebar > nav'],
            'amp-state' => $this->tags['amp-state'],
            'amp-state (AMP4EMAIL)' => $this->tags['amp-state (AMP4EMAIL)'],
            'amp-story-animation json script' => $this->tags['amp-story-animation json script'],
            'amp-story-auto-ads > template' => $this->tags['amp-story-auto-ads > template'],
            'amp-story-auto-ads config script' => $this->tags['amp-story-auto-ads config script'],
            'amp-story-bookend extension .json script' => $this->tags['amp-story-bookend extension .json script'],
            'amp-story-consent extension .json script' => $this->tags['amp-story-consent extension .json script'],
            'AMP-STORY-CTA-LAYER animate-in' => $this->tags['AMP-STORY-CTA-LAYER animate-in'],
            'AMP-STORY-GRID-LAYER animate-in' => $this->tags['AMP-STORY-GRID-LAYER animate-in'],
            'AMP-STORY-GRID-LAYER default' => $this->tags['AMP-STORY-GRID-LAYER default'],
            'amp-story-page-attachment' => $this->tags['amp-story-page-attachment'],
            'amp-story-page-attachment[href]' => $this->tags['amp-story-page-attachment[href]'],
            'amp-story >> amp-audio' => $this->tags['amp-story >> amp-audio'],
            'amp-story >> amp-sidebar' => $this->tags['amp-story >> amp-sidebar'],
            'amp-story >> amp-story-page-attachment >> amp-video' => $this->tags['amp-story >> amp-story-page-attachment >> amp-video'],
            'amp-story >> amp-video' => $this->tags['amp-story >> amp-video'],
            'amp-subscriptions extension .json script' => $this->tags['amp-subscriptions extension .json script'],
            'AMP-VIDEO-IFRAME > I-AMPHTML-SIZER [style]' => $this->tags['AMP-VIDEO-IFRAME > I-AMPHTML-SIZER [style]'],
            'AMP-VIDEO-IFRAME > [placeholder]' => $this->tags['AMP-VIDEO-IFRAME > [placeholder]'],
            'AMP-VIDEO-IFRAME with [placeholder]' => $this->tags['AMP-VIDEO-IFRAME with [placeholder]'],
            'AMP-VIDEO-IFRAME with [placeholder] (transformed)' => $this->tags['AMP-VIDEO-IFRAME with [placeholder] (transformed)'],
            'AMP-VIDEO-IFRAME[poster]' => $this->tags['AMP-VIDEO-IFRAME[poster]'],
            'amp-video > source' => $this->tags['amp-video > source'],
            'amp-video > track' => $this->tags['amp-video > track'],
            'amp-video > track[kind=subtitles]' => $this->tags['amp-video > track[kind=subtitles]'],
            'amp-video extension script' => $this->tags['amp-video extension script'],
            'amp4ads engine script' => $this->tags['amp4ads engine script'],
            'amphtml engine script' => $this->tags['amphtml engine script'],
            'amphtml engine script (LTS)' => $this->tags['amphtml engine script (LTS)'],
            'amphtml engine script [AMP4EMAIL]' => $this->tags['amphtml engine script [AMP4EMAIL]'],
            'audio > source' => $this->tags['audio > source'],
            'audio > track' => $this->tags['audio > track'],
            'audio > track[kind=subtitles]' => $this->tags['audio > track[kind=subtitles]'],
            'button amp-nested-menu' => $this->tags['button amp-nested-menu'],
            'cryptokeys .json script' => $this->tags['cryptokeys .json script'],
            'div amp-nested-menu' => $this->tags['div amp-nested-menu'],
            'FORM DIV [submit-error]' => $this->tags['FORM DIV [submit-error]'],
            'FORM DIV [submit-error][template]' => $this->tags['FORM DIV [submit-error][template]'],
            'FORM DIV [submit-success]' => $this->tags['FORM DIV [submit-success]'],
            'FORM DIV [submit-success][template]' => $this->tags['FORM DIV [submit-success][template]'],
            'FORM DIV [submitting]' => $this->tags['FORM DIV [submitting]'],
            'FORM DIV [submitting][template]' => $this->tags['FORM DIV [submitting][template]'],
            'FORM DIV [verify-error]' => $this->tags['FORM DIV [verify-error]'],
            'FORM DIV [verify-error][template]' => $this->tags['FORM DIV [verify-error][template]'],
            'FORM [method=GET]' => $this->tags['FORM [method=GET]'],
            'FORM [method=GET] (AMP4EMAIL)' => $this->tags['FORM [method=GET] (AMP4EMAIL)'],
            'FORM [method=POST]' => $this->tags['FORM [method=POST]'],
            'FORM [method=POST] (AMP4EMAIL)' => $this->tags['FORM [method=POST] (AMP4EMAIL)'],
            'h2 amp-nested-menu' => $this->tags['h2 amp-nested-menu'],
            'h3 amp-nested-menu' => $this->tags['h3 amp-nested-menu'],
            'h4 amp-nested-menu' => $this->tags['h4 amp-nested-menu'],
            'h5 amp-nested-menu' => $this->tags['h5 amp-nested-menu'],
            'h6 amp-nested-menu' => $this->tags['h6 amp-nested-menu'],
            'head > style[amp-boilerplate]' => $this->tags['head > style[amp-boilerplate]'],
            'head > style[amp-boilerplate] (transformed)' => $this->tags['head > style[amp-boilerplate] (transformed)'],
            'head > style[amp4ads-boilerplate]' => $this->tags['head > style[amp4ads-boilerplate]'],
            'head > style[amp4email-boilerplate]' => $this->tags['head > style[amp4email-boilerplate]'],
            'html (transformed)' => $this->tags['html (transformed)'],
            'html doctype' => $this->tags['html doctype'],
            'html doctype (AMP4ADS)' => $this->tags['html doctype (AMP4ADS)'],
            'I-AMPHTML-SIZER-INTRINSIC' => $this->tags['I-AMPHTML-SIZER-INTRINSIC'],
            'I-AMPHTML-SIZER-RESPONSIVE' => $this->tags['I-AMPHTML-SIZER-RESPONSIVE'],
            'IMG-I-AMPHTML-INTRINSIC-SIZER' => $this->tags['IMG-I-AMPHTML-INTRINSIC-SIZER'],
            'input [mask=date-dd-mm-yyyy]' => $this->tags['input [mask=date-dd-mm-yyyy]'],
            'input [mask=date-mm-dd-yyyy]' => $this->tags['input [mask=date-mm-dd-yyyy]'],
            'input [mask=date-mm-yy]' => $this->tags['input [mask=date-mm-yy]'],
            'input [mask=date-yyyy-mm-dd]' => $this->tags['input [mask=date-yyyy-mm-dd]'],
            'input [mask=payment-card]' => $this->tags['input [mask=payment-card]'],
            'input [mask] (custom mask)' => $this->tags['input [mask] (custom mask)'],
            'INPUT [type=file]' => $this->tags['INPUT [type=file]'],
            'INPUT [type=password]' => $this->tags['INPUT [type=password]'],
            'lineargradient > stop' => $this->tags['lineargradient > stop'],
            'link itemprop=' => $this->tags['link itemprop='],
            'link itemprop=sameAs' => $this->tags['link itemprop=sameAs'],
            'link property=' => $this->tags['link property='],
            'link rel=' => $this->tags['link rel='],
            'link rel=canonical' => $this->tags['link rel=canonical'],
            'link rel=manifest' => $this->tags['link rel=manifest'],
            'link rel=preload' => $this->tags['link rel=preload'],
            'link rel=stylesheet for fonts' => $this->tags['link rel=stylesheet for fonts'],
            'meta charset=utf-8' => $this->tags['meta charset=utf-8'],
            'meta http-equiv=content-language' => $this->tags['meta http-equiv=content-language'],
            'meta http-equiv=Content-Script-Type' => $this->tags['meta http-equiv=Content-Script-Type'],
            'meta http-equiv=Content-Style-Type' => $this->tags['meta http-equiv=Content-Style-Type'],
            'meta http-equiv=Content-Type' => $this->tags['meta http-equiv=Content-Type'],
            'meta http-equiv=imagetoolbar' => $this->tags['meta http-equiv=imagetoolbar'],
            'meta http-equiv=origin-trial' => $this->tags['meta http-equiv=origin-trial'],
            'meta http-equiv=pics-label' => $this->tags['meta http-equiv=pics-label'],
            'meta http-equiv=resource-type' => $this->tags['meta http-equiv=resource-type'],
            'meta http-equiv=x-dns-prefetch-control' => $this->tags['meta http-equiv=x-dns-prefetch-control'],
            'meta http-equiv=X-UA-Compatible' => $this->tags['meta http-equiv=X-UA-Compatible'],
            'meta name=amp-3p-iframe-src' => $this->tags['meta name=amp-3p-iframe-src'],
            'meta name=amp-ad-doubleclick-sra' => $this->tags['meta name=amp-ad-doubleclick-sra'],
            'meta name=amp-ad-enable-refresh' => $this->tags['meta name=amp-ad-enable-refresh'],
            'meta name=amp-consent-blocking' => $this->tags['meta name=amp-consent-blocking'],
            'meta name=amp-cta-landing-page-type' => $this->tags['meta name=amp-cta-landing-page-type'],
            'meta name=amp-cta-type' => $this->tags['meta name=amp-cta-type'],
            'meta name=amp-cta-url' => $this->tags['meta name=amp-cta-url'],
            'meta name=amp-experiment-token' => $this->tags['meta name=amp-experiment-token'],
            'meta name=amp-experiments-opt-in' => $this->tags['meta name=amp-experiments-opt-in'],
            'meta name=amp-google-clientid-id-api' => $this->tags['meta name=amp-google-clientid-id-api'],
            'meta name=amp-link-variable-allowed-origin' => $this->tags['meta name=amp-link-variable-allowed-origin'],
            'meta name=amp-list-load-more' => $this->tags['meta name=amp-list-load-more'],
            'meta name=amp-recaptcha-input' => $this->tags['meta name=amp-recaptcha-input'],
            'meta name=amp-script-src' => $this->tags['meta name=amp-script-src'],
            'meta name=amp-story-generator-name' => $this->tags['meta name=amp-story-generator-name'],
            'meta name=amp-story-generator-version' => $this->tags['meta name=amp-story-generator-version'],
            'meta name=amp-to-amp-navigation' => $this->tags['meta name=amp-to-amp-navigation'],
            'meta name=amp4ads-id' => $this->tags['meta name=amp4ads-id'],
            'meta name=amp4ads-vars-*' => $this->tags['meta name=amp4ads-vars-*'],
            'meta name= and content=' => $this->tags['meta name= and content='],
            'meta name=apple-itunes-app' => $this->tags['meta name=apple-itunes-app'],
            'meta name=viewport' => $this->tags['meta name=viewport'],
            'noscript > img' => $this->tags['noscript > img'],
            'noscript > style[amp-boilerplate]' => $this->tags['noscript > style[amp-boilerplate]'],
            'noscript > style[amp-boilerplate] (transformed)' => $this->tags['noscript > style[amp-boilerplate] (transformed)'],
            'noscript enclosure for boilerplate' => $this->tags['noscript enclosure for boilerplate'],
            'noscript enclosure for boilerplate (transformed)' => $this->tags['noscript enclosure for boilerplate (transformed)'],
            'picture > source' => $this->tags['picture > source'],
            'radialgradient > stop' => $this->tags['radialgradient > stop'],
            'script id=amp-rtc' => $this->tags['script id=amp-rtc'],
            'script type=application/ld+json' => $this->tags['script type=application/ld+json'],
            'SCRIPT type=text/plain' => $this->tags['SCRIPT type=text/plain'],
            'SCRIPT type=text/plain (AMP4EMAIL)' => $this->tags['SCRIPT type=text/plain (AMP4EMAIL)'],
            'SCRIPT[custom-element=amp-accordion] (AMP4EMAIL)' => $this->tags['SCRIPT[custom-element=amp-accordion] (AMP4EMAIL)'],
            'SCRIPT[custom-element=amp-autocomplete] (AMP4EMAIL)' => $this->tags['SCRIPT[custom-element=amp-autocomplete] (AMP4EMAIL)'],
            'SCRIPT[custom-element=amp-bind] (AMP4EMAIL)' => $this->tags['SCRIPT[custom-element=amp-bind] (AMP4EMAIL)'],
            'SCRIPT[custom-element=amp-carousel] (AMP4EMAIL)' => $this->tags['SCRIPT[custom-element=amp-carousel] (AMP4EMAIL)'],
            'SCRIPT[custom-element=amp-fit-text] (AMP4EMAIL)' => $this->tags['SCRIPT[custom-element=amp-fit-text] (AMP4EMAIL)'],
            'SCRIPT[custom-element=amp-form] (AMP4EMAIL)' => $this->tags['SCRIPT[custom-element=amp-form] (AMP4EMAIL)'],
            'SCRIPT[custom-element=amp-image-lightbox] (AMP4EMAIL)' => $this->tags['SCRIPT[custom-element=amp-image-lightbox] (AMP4EMAIL)'],
            'SCRIPT[custom-element=amp-lightbox] (AMP4ADS)' => $this->tags['SCRIPT[custom-element=amp-lightbox] (AMP4ADS)'],
            'SCRIPT[custom-element=amp-lightbox] (AMP4EMAIL)' => $this->tags['SCRIPT[custom-element=amp-lightbox] (AMP4EMAIL)'],
            'SCRIPT[custom-element=amp-list] (AMP4EMAIL)' => $this->tags['SCRIPT[custom-element=amp-list] (AMP4EMAIL)'],
            'SCRIPT[custom-element=amp-selector] (AMP4EMAIL)' => $this->tags['SCRIPT[custom-element=amp-selector] (AMP4EMAIL)'],
            'SCRIPT[custom-element=amp-sidebar] (AMP4EMAIL)' => $this->tags['SCRIPT[custom-element=amp-sidebar] (AMP4EMAIL)'],
            'SCRIPT[custom-element=amp-timeago] (AMP4EMAIL)' => $this->tags['SCRIPT[custom-element=amp-timeago] (AMP4EMAIL)'],
            'SCRIPT[custom-template=amp-mustache] (AMP4ADS)' => $this->tags['SCRIPT[custom-template=amp-mustache] (AMP4ADS)'],
            'SCRIPT[custom-template=amp-mustache] (AMP4EMAIL)' => $this->tags['SCRIPT[custom-template=amp-mustache] (AMP4EMAIL)'],
            'section (AMP4EMAIL)' => $this->tags['section (AMP4EMAIL)'],
            'span amp-nested-menu' => $this->tags['span amp-nested-menu'],
            'span swg_amp_cache_nonce' => $this->tags['span swg_amp_cache_nonce'],
            'style amp-custom' => $this->tags['style amp-custom'],
            'style amp-custom (AMP4ADS)' => $this->tags['style amp-custom (AMP4ADS)'],
            'style amp-custom (AMP4EMAIL)' => $this->tags['style amp-custom (AMP4EMAIL)'],
            'style amp-custom (css-strict)' => $this->tags['style amp-custom (css-strict)'],
            'style amp-custom-length-check' => $this->tags['style amp-custom-length-check'],
            'style[amp-keyframes]' => $this->tags['style[amp-keyframes]'],
            'style[amp-runtime] (transformed)' => $this->tags['style[amp-runtime] (transformed)'],
            'subscriptions-section content swg_amp_cache_nonce' => $this->tags['subscriptions-section content swg_amp_cache_nonce'],
            'subscriptions script ciphertext' => $this->tags['subscriptions script ciphertext'],
            'svg title' => $this->tags['svg title'],
            'TEMPLATE (AMP4EMAIL)' => $this->tags['TEMPLATE (AMP4EMAIL)'],
            'title' => $this->tags['title'],
            'title [AMP4EMAIL]' => $this->tags['title [AMP4EMAIL]'],
            'video > source' => $this->tags['video > source'],
            'video > track' => $this->tags['video > track'],
            'video > track[kind=subtitles]' => $this->tags['video > track[kind=subtitles]'],
        ];
    }
}