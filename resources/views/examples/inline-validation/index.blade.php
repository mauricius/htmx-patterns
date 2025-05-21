@extends('examples.layout')

@section('title', 'Inline Validation')

@section('content')
    <article>
        <hgroup>
            <h2>Example 4: Inline Validation</h2>
            <p>Demonstrates how to do inline field validation</p>
        </hgroup>

        @include('examples.inline-validation.partials.form')
  </article>
@endsection
