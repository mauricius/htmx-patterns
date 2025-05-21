@php
    use App\Http\Controllers\InlineValidationController;

    /** @var \Illuminate\Support\MessageBag $errors */
@endphp

<form hx-post="{{ action([InlineValidationController::class, 'store']) }}" hx-target="this" hx-swap="outerHTML">
    @csrf
    <div>
        <label for="first_name">First Name</label>
        <input
            type="text"
            id="first_name"
            name="first_name"
            value="{{ $input['first_name'] ?? '' }}"
            @if($errors->has('first_name')) aria-invalid="true" @endif
        />
        @if($errors->has('first_name'))
            <p class="pico-color-red-500">{{ $errors->first('first_name') }}</p>
        @endif
    </div>
    <div>
        <label for="last_name">Last Name</label>
        <input
            type="text"
            id="last_name"
            name="last_name"
            value="{{ $input['last_name'] ?? '' }}"
            @if($errors->has('last_name')) aria-invalid="true" @endif
        />
        @if($errors->has('last_name'))
            <p class="pico-color-red-500">{{ $errors->first('last_name') }}</p>
        @endif
    </div>
    <div>
        <label for="email">Email</label>
        <input
            type="email"
            id="email"
            name="email"
            value="{{ $input['email'] ?? '' }}"
            @if($errors->has('email')) aria-invalid="true" @endif
        />
        @if($errors->has('email'))
            <p class="pico-color-red-500">{{ $errors->first('email') }}</p>
        @endif
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
