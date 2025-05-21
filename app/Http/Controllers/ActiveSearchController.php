<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Faker\Factory as Faker;
use Illuminate\Http\Response;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

final readonly class ActiveSearchController
{
    const int TOTAL = 50;
    const int PER_PAGE = 10;

    public function index(Request $request): View|Response
    {
        $page = (int) $request->query('page', 1);
        $search = $request->query('search');

        if ($request->hasHeader('HX-Request')) {
           return $this->handleHtmxRequest($page, $search);
        }

        return $this->handleRequest($page, $search);
    }

    private function handleRequest(int $page, ?string $search): View
    {
        $rows = $this->getRows();

        Session::put('rows', $rows);

        if ($search !== null) {
            $rows = $this->searchRows($rows, $search);
        }

        $paginator = $this->paginateRows($rows, $page);

        return view()->make('examples.active-search.index', [
            'rows' => $paginator,
        ]);
    }

    private function handleHtmxRequest(int $page, ?string $search): Response
    {
        sleep(1);

        $rows = Session::get('rows');

        if ($search !== null) {
            $rows = $this->searchRows($rows, $search);
        }

        $paginator = $this->paginateRows($rows, $page);

        return tap(new Response(), fn (Response $response) =>
            $response->setContent(
                implode('', [
                    view()->make('examples.active-search.partials.rows', [
                        'rows' => $paginator,
                    ]),
                    view()->make('examples.active-search.partials.pagination', [
                        'rows' => $paginator,
                    ])
                ])
            )
        );
    }

    private function getRows(): array
    {
        $faker = Faker::create();

        return array_map(fn(int $i) => [
            'id' => $i,
            'name' => $faker->name(),
            'email' => $faker->email(),
        ], range(1, self::TOTAL));
    }

    private function searchRows(array $rows, string $search): array
    {
        return array_filter($rows, fn ($row) =>
            Str::contains($row['name'], $search, true) || Str::contains($row['email'], $search, true)
        );
    }

    private function paginateRows(array $rows, int $page): LengthAwarePaginator
    {
        $paginator = new LengthAwarePaginator(
            items: array_slice($rows, ($page * self::PER_PAGE) - self::PER_PAGE, self::PER_PAGE),
            total: count($rows),
            perPage: self::PER_PAGE,
            currentPage: $page
        );

        $paginator->setPath(parse_url(action([ActiveSearchController::class, 'index']), PHP_URL_PATH));
        $paginator->withQueryString();

        return $paginator;
    }
}
