@php
    use App\Http\Controllers\CascadingSelectsController;

    /** @var \Illuminate\Support\MessageBag $errors */
@endphp

@extends('examples.layout')

@section('title', 'Cascading Selects')

@section('content')
    <style>
        .htmx-indicator{
            display:none;
        }
        .htmx-request .htmx-indicator{
            display:inline;
        }
        .htmx-request.htmx-indicator{
            display:inline;
        }
    </style>

    <article>
        <hgroup>
            <h2>Example 5: Cascading Selects</h2>
            <p>Demonstrates making the values of a select dependent on another select</p>
        </hgroup>

        <form>
            <div>
                <label for="cousine">Favorite Cousine</label>
                <select name="cousine" hx-get="{{ action([CascadingSelectsController::class, 'dishes']) }}" hx-target="#dish" hx-indicator=".htmx-indicator">
                    <option selected disabled value="">
                        Select your favorite cuisine...
                    </option>
                    @include('examples.cascading-selects.partials.options', ['options' => $cousines])
                </select>
            </div>
            <div>
                <label for="dish">Favorite Dish <span class="htmx-indicator" aria-busy="true"></span></label>
                <select id="dish" name="dish" required>

                </select>
            </div>
        </form>
  </article>
@endsection
