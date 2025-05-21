@php
    use App\Http\Controllers\PresentationController;use Illuminate\Support\Str;
@endphp

@extends('layout')

@section('title', Str::title(str_replace('-', ' ', $slides[$current])))

@section('main')

    <div>
        <div class="toc">
            <details class="dropdown" hx-boost="true">
                <summary>TOC</summary>
                <ul>
                    @foreach($slides as $i => $slide)
                        <li>
                            <a href="{{ action([PresentationController::class], ['slide' => $slide]) }}">
                                @if ($i === $current)<b>@endif
                                {{ $i + 1 }} - {{ Str::title(str_replace('-', ' ', $slide)) }}
                                @if ($i === $current)</b>@endif
                            </a>
                        </li>
                    @endforeach
                </ul>
            </details>
        </div>

        <div>
            <div>
                @yield('content')
            </div>

            @if ($current > 0)
                <div id="prev" hx-boost="true">
                    <a
                       href="{{ action([PresentationController::class], ['slide' => $slides[$current - 1]]) }}">
                        <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span>Prev</span>
                    </a>
                </div>
            @endif

            @if ($current < count($slides) - 1)
                <div id="next" hx-boost="true">
                    <a
                       href="{{ action([PresentationController::class], ['slide' => $slides[$current + 1]]) }}">
                        <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span>Next</span>
                    </a>
                </div>
            @endif
        </div>
    </div>

    <script>
        document.addEventListener('keyup', function (ev) {
            if (ev.keyCode === 37) {
                document.getElementById('prev').firstElementChild.click();
            } else if (ev.keyCode === 39) {
                document.getElementById('next').firstElementChild.click();
            }
        })
    </script>
@endsection
