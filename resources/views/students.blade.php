
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>University</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($students as $item)
            <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->address}}</td>
            <td>{{$item->university}}</td>
            </tr>
        @endforeach
    </tbody>
</table>