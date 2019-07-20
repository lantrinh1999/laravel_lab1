
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Teacher</th>
        <th>Major</th>
        <th>Max Student</th>
    </tr>
    </thead>
    <tbody>
        {{-- {{$count = 0}} --}}
        @foreach ($classes as $item)
        {{-- {{$count++}} --}}
                
            <tr style=" background: @if ($item->id % 2 == 0) green @else yellow @endif  "  >
                
            <td>{{$item->id}}</td> 
            <td>{{$item->name}}</td>
            <td>{{$item->teacher_name}}</td>
            <td>{{$item->major}}</td>
            <td>{{$item->max_student}}</td>
            </tr>
        @endforeach
    </tbody>
</table>