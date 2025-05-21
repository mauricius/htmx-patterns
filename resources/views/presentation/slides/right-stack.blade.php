@extends('presentation.layout')

@section('content')

    <div>
        <h1 style="text-align: center">The JavaScript Fatigue (2)</h1>

        <ul>
            <li>Ignore <b>the buzz</b> and <b>the influencers</b> <em>(and that includes me)</em></li>
            <li>You are not stupid for using <abbr title="X">X</abbr> (replace it with any tech stack)</li>
            <li>No one knows everything</li>
            <li><b>Learn the fundamentals</b></li>
        </ul>

        <blockquote>
            If it works for you, it’s the right stack.
            <footer>
                <cite>— Flavio Copes <a href="https://flaviocopes.com/solve-javascript-fatigue/">https://flaviocopes.com/solve-javascript-fatigue/</a></cite>
            </footer>
        </blockquote>

        {{ Quar::size(150)->generate('https://flaviocopes.com/solve-javascript-fatigue/') }}

    </div>
@endsection


