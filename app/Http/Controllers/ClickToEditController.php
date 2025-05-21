<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

final readonly class ClickToEditController
{
    public function index(Request $request)
    {
        $data = $this->getData();

        return view()->make('examples.click-to-edit.index', $data);
    }

    public function edit()
    {
        $data = $this->getData();

        return view()->make('examples.click-to-edit.partials.edit', $data);
    }

    public function update(Request $request)
    {
      $data = [
        'first_name' => $request->input('first_name'),
        'last_name' => $request->input('last_name'),
        'email' => $request->input('email'),
      ];

      Cache::put('example-1', $data);

      return view()->make('examples.click-to-edit.partials.show', array_merge($data, ['success' => true]));
    }

    private function getData(): array
    {
        return Cache::get('example-1', [
            'first_name' => 'Taylor',
            'last_name' => 'Otwell',
            'email' => 'taylor.otwell@laravel.com',
        ]);
    }
}
