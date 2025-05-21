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
        <h1 style="text-align: center">The JavaScript Fatigue</h1>

        <div class="flex-row">
            <div>
                <blockquote>
                    Saul: “How’s it going?”<br>
                    Me: “Fatigued.”<br>
                    Saul: “Family?”<br>
                    Me: “No, Javascript.”
                    <footer>
                        <cite>— Eric Clemmons <a href="https://medium.com/@ericclemmons/javascript-fatigue-48d4011b6fc4" target="_blank">https://medium.com/@ericclemmons/javascript-fatigue-48d4011b6fc4</a></cite>
                    </footer>
                </blockquote>

                {{ Quar::size(150)->generate('https://medium.com/@ericclemmons/javascript-fatigue-48d4011b6fc4') }}
            </div>
            <div>
                <img src="{{ asset('images/u0b2pzrdx2t01.png') }}" alt="JavaScript Fatigue" style="display: block; margin: 0 auto;" />
            </div>
        </div>
    </div>
@endsection


