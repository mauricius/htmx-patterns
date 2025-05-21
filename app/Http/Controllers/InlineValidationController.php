<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

final readonly class InlineValidationController
{
    public function index()
    {
        return view()->make('examples.inline-validation.index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
        ]);

        if ($validator->passes()) {
            return view()->make('examples.inline-validation.partials.success');
        }

        return view()->make('examples.inline-validation.partials.form', [
            'errors' => $validator->errors(),
            'input' => $request->input(),
        ]);
    }
}
