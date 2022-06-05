@extends('master.admin')

@section('main')

<h1>create</h1>

<form method="post" action="{{route('banner.store')}}" enctype="multipart/form-data">

    <div class="card-body">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
            @error('name')
            <small class="help-block text-danger">{{$message}}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <textarea name="description" id="" class="summernote" cols="200" rows="5">
            </textarea>
            <small id="helpId" class="text-mutd"></small>
        </div>
        <div class="row">
            <div class="col-md-4">
            <label for="">Status</label>
            <div class="custom-control custom-radio">
            <input class="custom-control-input custom-control-input-danger" type="radio" id="customRadio4" value="1"
                name="status" checked="">
            <label for="customRadio4" class="custom-control-label">hien</label>
        </div>

        <div class="custom-control custom-radio">
            <input class="custom-control-input custom-control-input-danger custom-control-input-outline" type="radio"
                value="0" name="status" id="customRadio5">
            <label for="customRadio5" class="custom-control-label"> an</label>
        </div>

            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Link</label>
                    <input name="link" class="form-control" id="exampleInputEmail1" placeholder="Enter link">
                    @error('link')
                    <small class="help-block text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Prioty</label>
                    <input name="prioty" class="form-control" id="exampleInputEmail1"
                        placeholder="Enter prioty">
                    
                </div>
            </div>
        </div>

       
        <div class="form-group">
            <label for="exampleInputEmail1">Image</label>
            <input type="file" name="myfile" class="form-control">
        </div>


        </div>
        <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>
    <!-- /.card-body -->

    
</form>
@stop()