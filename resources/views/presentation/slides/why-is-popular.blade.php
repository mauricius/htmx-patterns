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
        <h1 style="text-align: center">Why is it so popular?</h1>

        <div class="flex-row">
            <div>
                <img src="{{ asset('images/bio.png') }}" alt="" />
            </div>
            <div>
                <img src="{{ asset('images/star-history-202558.png') }}" alt="" />
            </div>
        </div>

    </div>
@endsection


