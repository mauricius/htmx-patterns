@php
    use App\Http\Controllers\ClickToEditController;
@endphp

<div hx-target="this" hx-swap="outerHTML">
    @isset($success)
        <article class="pico-background-green-400">Entry updated!</article>
    @endisset

    <p>First Name: <u>{{ $first_name }}</u></p>
    <p>Last Name: <u>{{ $last_name }}</u></p>
    <p>Email: <u>{{ $email }}</u></p>

    <button hx-get="{{ action([ClickToEditController::class, 'edit']) }}">Edit</button>
</div>
