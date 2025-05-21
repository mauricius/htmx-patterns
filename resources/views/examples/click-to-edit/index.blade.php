@extends('examples.layout')

@section('title', 'Click to Edit')

@section('content')
    <article>
        <hgroup>
            <h2>Example 1: Click to Edit</h2>
            <p>Demonstrates inline editing of a data object</p>
        </hgroup>

        @include('examples.click-to-edit.partials.show')
    </article>
@endsection
