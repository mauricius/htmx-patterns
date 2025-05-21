@extends('presentation.layout')

@section('content')
    <style>
        .flex-row {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .flex-row div {
            flex: 1 1 0;
            width: 0;
        }
    </style>

    <div>
        <h1 style="text-align: center">But it is actually very serious</h1>

        <div class="flex-row">
            <div>
                <img src="{{ asset('images/essays.png') }}" alt="" style="display: block; margin: 0 auto" />
            </div>
            <div>
                <img src="{{ asset('images/opposite-rest.png') }}" alt="" style="display: block; margin: 0 auto" />
            </div>
        </div>

    </div>
@endsection


