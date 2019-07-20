<form action="{{route('sum')}}" method="post">
    {{csrf_field()}}
    <input type="text" name="n1">
    <input type="text" name="n2">
    <input type="text" name="n3">
    <button type="submit">OK</button>
</form>