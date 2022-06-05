@extends('master.admin')

@section('main')

<h1>create</h1>

<form role="form" method="post" action="{{route('color.store')}}">

    <div class="card-body">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input name="name" class="form-control" placeholder="Enter name" value="{{old('name')}}">
            @error('name')
            <small class="help-block text-danger">{{$message}}</small>
            @enderror
        </div>


        <div class="custom-control custom-radio">
            <input class="custom-control-input custom-control-input-danger" type="radio" id="customRadio4" value="1"
                name="status" checked="">
            <label for="customRadio4" class="custom-control-label">hien</label>
        </div>

        <div class="custom-control custom-radio">
            <input class="custom-control-input custom-control-input-danger custom-control-input-outline" type="radio"
                value="0" name="status" id="customRadio5">
            <label for="customRadio5" class="custom-control-label">an</label>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Parent id</label>
            <select name="parent_id" id="" class="custom-select">
                <option value="0">All parent</option>
                @foreach($colors as $colo)
                <option value="{{$colo->id}}">{{$colo->name}}</option>
                @endforeach
                @error('parent_id')
                <small class="help-block text-danger">{{$message}}</small>
                @enderror
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Prioty</label>
            <input name="prioty" class="form-control" placeholder="Enter prioty">
            @error('prioty')
            <small class="help-block text-danger">{{$message}}</small>
            @enderror
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@stop()