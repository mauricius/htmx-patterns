@php
    use App\Http\Controllers\LazyLoadingController;
@endphp

@extends('examples.layout')

@section('title', 'Lazy Loading')

@section('content')
    <article>
        <hgroup>
            <h2>Example 3: Lazy Loading</h2>
            <p>Demonstrates how to lazy load content</p>
        </hgroup>

        <div hx-get="{{ action([LazyLoadingController::class, 'lazy']) }}" hx-trigger="load">
            <div class="htmx-indicator" aria-busy="true"></div>
        </div>
  </article>
@endsection
