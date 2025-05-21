@php
    use App\Http\Controllers\ClickToEditController;
@endphp

<form hx-put="{{ action([ClickToEditController::class, 'update']) }}" hx-target="this" hx-swap="outerHTML">
    @csrf
    <div>
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" value="{{ $first_name }}" required>
    </div>
    <div>
        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" value="{{ $last_name }}" required>
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ $email }}" required>
    </div>
    <div>
        <button type="submit">Submit</button>
        <a class="secondary" href="{{ action([ClickToEditController::class, 'index']) }}">Cancel</a>
    </div>
</form>
