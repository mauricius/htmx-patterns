<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use Faker\Factory as Faker;

final readonly class LazyLoadingController
{
    public function index(Request $request)
    {
      return view()->make('examples.lazy-loading.index');
    }

    public function lazy(Request $request)
    {
      sleep(3);

      return view()->make('examples.lazy-loading.partials.lazy', [
          'cpu' => rand(1, 100),
          'ram' => rand(1, 100),
          'disk' => rand(1, 100),
      ]);
    }
}
