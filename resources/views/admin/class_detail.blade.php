<tbody>
    @foreach ($class as $item)
        <tr>
            <td>
                {{$item['name']}}
            </td>
            <td>
                {{$item['major']}}
            </td>
            <td>
                
            </td>
        </tr>
    @endforeach
</tbody>