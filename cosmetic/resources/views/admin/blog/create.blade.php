@extends('master.admin')

@section('main')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Cate_blog
                <small>Add</small>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-7" style="padding-bottom:120px">
            <form method="POST" action="{{route('blog.store')}}">
                @csrf
                <div class="form-group">
                    <label>Cate_Blog Name</label>
                    <input class="form-control" name="name" placeholder="Please Enter Category Name"
                        value="{{old('name')}}" />
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
                <div class="form-group">
                    <label for="exampleInputEmail1">Parent id</label>
                    <select name="parent_id" class='form-control'  class="custom-select">
                        <option value="0">All parent</option>
                        @foreach($catebg as $cates)
                        <option value="{{$cates->id}}">{{$cates->name}}</option>
                        @endforeach

                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Prioty</label>
                    <input name="prioty" class="form-control" placeholder="Enter prioty">
                    @error('prioty')
                    <small class="help-block text-danger">{{$message}}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary"> Add</button>
                <a href="{{route('blog.index')}}" class="btn btn-danger">Cancel</a>
            <form>

        </div>
    </div>
    <!-- /.row -->
</div>

@stop