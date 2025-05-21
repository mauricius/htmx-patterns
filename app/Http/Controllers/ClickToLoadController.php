<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory as Faker;

final readonly class ClickToLoadController
{
    public function index(Request $request)
    {
        $page = (int)$request->query('page', 1);
        $rows = $this->getRows($page);

        if ($page !== 1) {
            sleep(1);

            return view()->make('examples.click-to-load.partials.rows', [
                'rows' => $rows,
                'next' => $page + 1,
            ]);
        }

        return view()->make('examples.click-to-load.index', [
            'rows' => $rows,
            'next' => $page + 1,
        ]);
    }

    private function getRows(int $page): array
    {
        $faker = Faker::create();

        return array_map(fn(int $i) => [
            'id' => $i + (($page - 1) * 10),
            'name' => $faker->name(),
            'email' => $faker->email(),
        ], range(1, 10));
    }
}
