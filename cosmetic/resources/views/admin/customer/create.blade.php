@extends('master.admin')

@section('main')
<!-- @if($errors->all())
<div class="alert alert-warning alert-dismissibla fade show" role="alert">
    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>

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
            <p>
                $print_r{{$errors}}
            </p>
            @if($errors->count())

            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                @foreach($errors as $error)
                <li>{{$error}}</li>
                @endforeach
            </div>

            @endif
            <form action="{{route('customer.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Firts Name</label>
                            <input type="text" name="firtsName" class="form-control input-sm" placeholder="Firts Name"
                                value="{{old('firtsName')}}">
                            @error('firtsName')
                            <small class="help-block text-danger" style="color:red">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="lastName" class="form-control input-sm" placeholder="Last Name"
                                value="{{old('lastName')}}">
                            @error('lastName')
                            <small class="help-block text-danger" style="color:red">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" name="email" placeholder="Please Enter Email"
                        value="{{old('email')}}" />
                    @error('email')
                    <small class="help-block text-danger" style="color:red">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input class="form-control" name="phone" placeholder="Please Enter phone"
                        value="{{old('phone')}}" />
                    @error('phone')
                    <small class="help-block text-danger" style="color:red">{{$message}}</small>
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
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Please Enter Password"
                        value="" />
                    @error('password')
                    <small class="help-block text-danger" style="color:red">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Password Confirm</label>
                    <input type="password" class="form-control" name="password_confirm"
                        placeholder="Please Enter password_confirm" value="" />
                    @error('password_confirm')
                    <small class="help-block text-danger" style="color:red">{{$message}}</small>
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary"> Add</button>
                <a href="{{route('customer.index')}}" class="btn btn-danger">Cancel</a>
                <form>
        </div>
    </div>
    <!-- /.row -->
</div>


@stop()