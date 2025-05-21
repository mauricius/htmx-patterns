<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\View\View;

final readonly class ExamplesController
{
    public function __invoke(): View
    {
        $examples = [

        ];

        return view()->make('home', ['examples' => $examples]);
    }
}
