<?php

declare(strict_types=1);

namespace App\Http\Controllers;

final readonly class PresentationController
{
    public const array SLIDES = [
        'intro',
        'who-has-heard-htmx',
        'who-has-heard-other',
        'javascript-fatigue',
        'right-stack',
        'who-am-i',
        'what-is-htmx',
        'why-is-popular',
        'memes',
        'it-is-serious',
        'hateoas',
        'motivation',
        'quick-start',
        'how-does-it-work',
        'any-html-element',
        'attributes',
        'hx-boost',
        'hx-get',
        'hx-swap',
        'hx-target',
        'hx-trigger',
        'hx-select',
        'hx-vals',
        'headers',
        'provide-feedback',
        'classes',
        'animations',
        'more-complex-needs',
        'events',
        'javascript-api',
        'extensions',
        'examples',
        'package'
    ];

    public function __invoke(string $slide)
    {
        return view()->make('presentation.slides.' . $slide, [
            'slides' => self::SLIDES,
            'current' => array_search($slide, self::SLIDES),
        ]);
    }
}
