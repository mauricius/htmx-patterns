<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Faker\Generator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\StreamedResponse;

final readonly class StreamingController
{
    private readonly Generator $faker;

    public function __construct()
    {
        $this->faker = Faker::create();
    }

    public function index(): View
    {
        return view()->make('examples.streaming.index');
    }

    public function submit(Request $request)
    {
        Cache::put('request', $request->input('request'));

        return response()->noContent();
    }

    public function stream(): StreamedResponse
    {
        $headers = [
            "Content-Type" => "text/event-stream",
            "Cache-Control" => "no-cache",
            "Connection" => "keep-alive",
            "X-Accel-Buffering" => "no",
        ];

        return response()->stream(function () {
            $rest = [];

            while (true) {
                if (Cache::has('request')) {
                    echo "data: <hr><p><b>Your request was:</b> " . Cache::pull('request') . "</p><b>My response is:</b>\n\n";

                    $rest = explode(" ", $this->faker->paragraphs(2, true));
                }

                if (! empty($rest)) {
                    echo "data: <span> " . array_shift($rest) . "</span>\n\n";
                }

                ob_flush();
                flush();

                empty($rest) ? sleep(2) : usleep(400000);
            }
        }, 200, $headers);
    }
}
