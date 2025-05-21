@extends('presentation.layout')

@section('content')

    <div>
        <h1 style="text-align: center">Attributes: <code>hx-swap</code></h1>

        <p>Controls how the HTML is swapped into the DOM. Available options are:</p>

        <ul>
            <li><code>innerHTML</code> - Replace the inner html of the target element</li>
            <li><code>outerHTML</code> - Replace the entire target element with the response</li>
            <li><code>textContent</code> - Replace the text content of the target element, without parsing the response as HTML</li>
            <li><code>beforebegin</code> - Insert the response before the target element</li>
            <li><code>afterbegin</code> - Insert the response before the first child of the target element</li>
            <li><code>beforeend</code> - Insert the response after the last child of the target element</li>
            <li><code>afterend</code> - Insert the response after the target element</li>
            <li><code>delete</code> - Deletes the target element regardless of the response</li>
            <li><code>none</code> - Does not append content from response</li>
        </ul>

        <p>The <code>hx-swap</code> attributes supports modifiers for changing the behavior of the swap.</p>
    </div>
@endsection


