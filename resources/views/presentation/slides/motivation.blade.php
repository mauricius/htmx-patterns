@extends('presentation.layout')

@section('content')
    <div>
        <h1 style="text-align: center">Motivation</h1>

        <ul>
            <li>Why should only <code>&lt;a&gt;</code> & <code>&lt;form&gt;</code> be able to make HTTP requests?</li>
            <li>Why should only <code>click</code> & <code>submit</code> events trigger them?</li>
            <li>Why should only <code>GET</code> & <code>POST</code> methods be available?</li>
            <li>Why should you only be able to replace the entire screen?</li>
            <li><span style="color: #3364a3">htmx</span> removes these constraints</li>
        </ul>
    </div>
@endsection


