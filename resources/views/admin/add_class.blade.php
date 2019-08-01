@extends('admin.master')

@section('title')
    Add class
@endsection


@section('content')
    <div class="container-fluid">
        <div class="row box">
            <div class="col-sm-12">
            <form action="{{route('class.create-post')}}" method="post">
                {{@csrf_field()}}
                <div class="form-group">
                    <label for="">Name</label>
                <input type="text" value="" name="name" class="form-control">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="">Teacher Name</label>
                    <input type="text" name="teacher_name" class="form-control">
                    @error('teacher_name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Name</label>
                    <select class="form-control" name="major" id="">
                        <option></option>
                        <option value="CNTT">CNTT</option>
                        <option value="MKT">MKT</option>
                        <option value="DPT">DPT</option>
                    </select>
                    @error('major')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="">Max Student</label>
                    <input type="number" name="max_student" class="form-control">
                    @error('max_student')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </form>
            </div>
        </div>
        
        
    </div>
@endsection




