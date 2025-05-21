@php
    use App\Http\Controllers\ClickToLoadController;
@endphp

@foreach($rows as $row)
    <tr>
        <th scope="row">{{ $row['id'] }}</th>
        <td>{{ $row['name'] }}</td>
        <td>{{ $row['email'] }}</td>
    </tr>

{{--  @if($loop->last) hx-get="{{ action([ClickToLoadController::class, 'index'], ['page' => $next]) }}" hx-trigger="revealed" hx-swap="afterend" @endif--}}
@endforeach

<tr id="replace-me">
  <td colspan="3">
    <button class="outline" hx-get="{{ action([ClickToLoadController::class, 'index'], ['page' => $next]) }}" hx-target="#replace-me" hx-swap="outerHTML">
        <span aria-busy="true" class="htmx-indicator"></span> Load More...
    </button>
  </td>
</tr>
