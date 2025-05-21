@extends('examples.layout')

@section('title', 'Click to Load')

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
            <h2>Example 2: Click to Load</h2>
            <p>Demonstrates clicking to load more rows in a table</p>
        </hgroup>

        <table class="striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                @include('examples.click-to-load.partials.rows', [
                    'rows' => $rows,
                    'next' => $next
                ])
            </tbody>
        </table>
  </article>
@endsection
