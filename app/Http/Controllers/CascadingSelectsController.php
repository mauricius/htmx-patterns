<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use Faker\Factory as Faker;
use Illuminate\View\View;

final readonly class CascadingSelectsController
{
    public function index(): View
    {
        $cousines = [
            'italian', 'japanese', 'indian', 'thai', 'french', 'greek'
        ];

        return view()->make('examples.cascading-selects.index', ['cousines' => $cousines]);
    }

    public function dishes(Request $request)
    {
        $dishes = match ($request->query('cousine')) {
            'italian' => ['pasta', 'pizza', 'cotoletta', 'melanzane alla parmigiana'],
            'japanese' => ['sushi', 'ramen', 'miso soup', 'yakitori'],
            'indian' => ['butter chicken', 'chicken tikka masala', 'naan', 'vindaloo'],
            'thai' => ['pad thai', 'khao soi', 'tom young goong'],
            'french' => ['quiche lorraine', 'ratatouille', 'escargot', 'onion soup'],
            'greek' => ['greek salad', 'moussaka', 'souvlaki', 'gyros'],
        };

        sleep(1);

        return view()->make('examples.cascading-selects.partials.options', ['options' => $dishes]);
    }
}
