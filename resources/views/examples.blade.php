@extends('layout')

@section('title', 'Examples')

@section('main')
    <style>
        .parent {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-template-rows: repeat(2, 1fr);
            grid-row-gap: 10px;
            grid-column-gap: 10px;
        }

        .parent div {
            min-height: 300px;
            align-content: center;
            text-align: center;
            border: 1px solid #6191fc;
            border-radius: 10px;
        }

        .parent img {
            -webkit-filter: grayscale(100%);
            filter: grayscale(100%);
            -webkit-transition: .3s ease-in-out;
            transition: .3s ease-in-out;
        }

        .parent a {
            display: block;
        }

        .parent a:hover img {
            -webkit-filter: grayscale(0);
            filter: grayscale(0);
        }
    </style>

    @php
        $examples = [
            "Click to Edit",
            "Click to Load",
            "Lazy Loading",
            "Inline Validation",
            "Cascading Selects",
            "Polling",
            "Active Search",
            "Streaming",
        ];
    @endphp

    <h1>Examples</h1>

    <div class="parent">
        @foreach($examples as $i => $example)
            <div>
                <a href="/examples/{{ \Illuminate\Support\Str::slug($example) }}">
                    <img src="{{ asset('images/htmx-101.jpeg') }}" alt="{{ $example }}">
                    {{ $i+1 }} - {{ $example }}
                </a>
            </div>
        @endforeach
    </div>
@endsection
