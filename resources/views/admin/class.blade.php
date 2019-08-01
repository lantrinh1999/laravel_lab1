@extends('admin.master')

@section('title')
    Class page
@endsection


@section('content')
    <div class="box">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
    
                </tr>
            </thead>
            @include('admin.class_detail', ['class' => $classes])
        </table>
        
    </div>
@endsection




