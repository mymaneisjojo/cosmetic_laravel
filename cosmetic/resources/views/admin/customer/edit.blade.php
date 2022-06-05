@extends('master.admin')

@section('main')
<!-- @if($errors->all())
    <div class="alert alert-warning alert-dismissibla fade show" role="alert">
    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    
    </div>
    @foreach($errors->all() as $er)
    <li>{{$er}}</li>
    @endforeach
@endif -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Customer account
                <small>Add</small>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-7" style="padding-bottom:120px">
            <!-- <p>
                $print_r{{$errors}}
            </p> -->
            <!-- @if($errors->count())

            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                @foreach($errors as $error)
                <li>{{$error}}</li>
                @endforeach
            </div>

            @endif -->
            <form action="{{route('customer.update',$model->id)}}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Firts Name</label>
                            <input type="text" name="firtsName" class="form-control input-sm" placeholder="Firts Name" value="{{$model->firtsName}}">
                            @error('firtsName')
                            <small class="help-block text-danger" style="color:red" >{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="lastName" class="form-control input-sm" placeholder="Last Name" value="{{$model->lastName}}">
                            @error('lastName')
                            <small class="help-block text-danger" style="color:red">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input  class="form-control" name="email" placeholder="Please Enter Email" value="{{$model->email}}" />
                    @error('email')
                    <small class="help-block text-danger" style="color:red" >{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input  class="form-control" name="phone" placeholder="Please Enter phone" value="{{$model->phone}}" />
                    @error('phone')
                    <small class="help-block text-danger" style="color:red" >{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <input  class="form-control" name="status" placeholder="Please Enter status" value="{{$model->phone}}" />
                    @error('status')
                    <small class="help-block text-danger" style="color:red" >{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Please Enter Password"/>
                    @error('password')
                    <small class="help-block text-danger" style="color:red" >{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Password Confirm</label>
                    <input type="password" class="form-control" name="password_confirm"
                        placeholder="Please Enter password_confirm" value="" />
                    @error('password_confirm')
                    <small class="help-block text-danger" style="color:red" >{{$message}}</small>
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary"> Save</button>
                <a href="{{route('customer.index')}}" class="btn btn-danger">Cancel</a>
                <form>
        </div>
    </div>
    <!-- /.row -->
</div>


@stop()