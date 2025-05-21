<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;

final readonly class PollingController
{
    const int RECORDS_PER_SECOND = 300;
    const int TOTAL_RECORDS = 3000;

    public function index(Request $request): View
    {
        return view()->make('examples.polling.index');
    }

    public function start(): View
    {
        Cache::put('start', now()->toImmutable());

        return view()->make('examples.polling.partials.progress', [
            'message' => sprintf('Imported %d records out of %d', 0, self::TOTAL_RECORDS),
            'percentage' => 0
        ]);
    }

    public function progress(): View|Response
    {
        $start = Cache::get('start');

        $elapsed = now()->diffInSeconds($start, true);

        $processed = self::RECORDS_PER_SECOND * $elapsed;

        $percentage = round(($processed / self::TOTAL_RECORDS) * 100);

        if ($percentage >= 100) {
            Cache::forget('start');

            $response = new Response();
            $response->setContent(view('examples.polling.partials.done'));
            $response->header('HX-Trigger-After-Swap', json_encode([
                'done' => 'The import has been completed.'
            ]));

            return $response;
        }

        return view()->make('examples.polling.partials.progress', [
            'message' => sprintf('Imported %d records out of %d', $processed, self::TOTAL_RECORDS),
            'percentage' => $percentage
        ]);
    }
}
