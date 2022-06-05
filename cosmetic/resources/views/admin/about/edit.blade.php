@extends('master.admin')

@section('main')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Category
                <small>Add</small>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-7" style="padding-bottom:120px">
            <form method="POST" action="{{route('about.update', $model->id)}}"  enctype="multipart/form-data">
            @csrf @method('PUT')
                <div class="form-group">
                    <label>Category Name</label>
                    <input class="form-control" name="name" placeholder="Please Enter Category Name"
                    value="{{$model->name}}" />
                    @error('name')
                    <small class="help-block text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input custom-control-input-danger" type="radio" id="customRadio4"
                        value="1" name="status" checked="">
                    <label for="customRadio4" class="custom-control-label">hien</label>
                </div>

                <div class="custom-control custom-radio">
                    <input class="custom-control-input custom-control-input-danger custom-control-input-outline"
                        type="radio" value="0" name="status" id="customRadio5">
                    <label for="customRadio5" class="custom-control-label">an</label>
                </div>
                <div class="form-group ">
                    <label for="exampleInputEmail1">description</label>
                    <textarea name="description" id="" class="summernote" cols="105" rows="4" value="">{{$model->description}}
                    </textarea>
                    @error('description')
                    <small class="help-block text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group my-2">
                    <label for="exampleInputEmail1">Image</label>
                    <img src="{{url('public/uploads')}}/{{$model->image}}" width="200px" height="200px" alt="">
                    <input type="file" name="myfile" class="form-control" id="exampleInputEmail1"
                        placeholder="Enter price">
                </div>

                
                <button type="submit" class="btn btn-primary"> Save</button>
                <a href="{{route('about.index')}}" class="btn btn-danger">Cancel</a>
                <form>

        </div>
    </div>
    <!-- /.row -->
</div>

@stop