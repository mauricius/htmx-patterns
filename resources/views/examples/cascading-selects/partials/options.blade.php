@foreach($options as $option)
    <option value="{{ $option }}">{{ \Illuminate\Support\Str::title($option) }}</option>
@endforeach
