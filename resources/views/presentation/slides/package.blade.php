@extends('presentation.layout')

@section('content')

    <div>
        <h1 style="text-align: center">Laravel Package</h1>

        <img src="{{ asset('images/package.png') }}" alt="" style="display: block; margin: 0 auto;" width="70%" />

        <br>

        <div style="text-align: center">
            {{ Quar::size(150)->generate('https://github.com/mauricius/laravel-htmx/') }}
            <br>
            <br>

            <a href="https://github.com/mauricius/laravel-htmx/">https://github.com/mauricius/laravel-htmx/</a>
        </div>

    </div>
@endsection


