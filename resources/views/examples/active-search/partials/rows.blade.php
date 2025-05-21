@foreach($rows as $row)
    <tr>
        <th scope="row">{{ $row['id'] }}</th>
        <td>{{ $row['name'] }}</td>
        <td>{{ $row['email'] }}</td>
    </tr>
@endforeach
