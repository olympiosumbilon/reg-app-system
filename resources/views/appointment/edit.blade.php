@extends('layout.main')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Form</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route ('dashboard') }}"> Back</a>
        </div>
    </div>
</div>

 @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif  

<form action="{{ url('dashboard/update/'.$forms->id) }}" method="POST">
    @csrf
    @method('PUT')
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name"  value="{{ $forms ->name }}" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Requirements:</strong>
                <textarea class="form-control"  name="description"   placeholder="Detail">{{ $forms->description }}</textarea>
            </div>
            <div class="form-group">
                <strong>Days of process:</strong>
                <textarea class="form-control"  name="days" placeholder="Number working days">{{ $forms -> days }}</textarea>
            </div>
            <div class="form-group">
                <strong>Document fee:</strong>
                <textarea class="form-control" name="fee" placeholder=" ">{{ $forms -> fee }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>

</form> 
@endsection