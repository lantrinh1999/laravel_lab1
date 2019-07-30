
@extends('layout.master')

@section('title')
    User
@endsection
@section('table-name', 'User Table')
    



@section('table')
<table class="table ">
    <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Linh</td>
        </tr>
        <tr>
          <td>2</td>
          <td>abc</td>
      </tr>
      <tr>
          <td>3</td>
          <td>Xyz</td>
      </tr>
    </tbody>
</table>
@endsection

@include('section.custom')
