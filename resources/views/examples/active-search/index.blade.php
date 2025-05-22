@php
    use App\Http\Controllers\ActiveSearchController;
@endphp

@extends('examples.layout')

@section('title', 'Active Search')

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
            <h2>Example 7: Active Search</h2>
            <p>Demonstrates the active search box pattern</p>
        </hgroup>

        <div>
            <form>
                <input
                    type="search"
                    name="search"
                    placeholder="Search"
                    aria-label="Search"
                    value="{{ request()->input('search') }}"
                    hx-get="{{ action([ActiveSearchController::class, 'index']) }}"
                    hx-trigger="input changed delay:500ms"
                    hx-target="#rows"
                    hx-push-url="true"
                    hx-indicator=".htmx-indicator"
                    autocomplete="off"
                />
            </form>
            <table>
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                </tr>
                </thead>
                <tbody id="rows">
                    @include('examples.active-search.partials.rows', ['rows' => $rows])
                </tbody>
            </table>

            @include('examples.active-search.partials.pagination', ['rows' => $rows])
        </div>
    </article>
@endsection
