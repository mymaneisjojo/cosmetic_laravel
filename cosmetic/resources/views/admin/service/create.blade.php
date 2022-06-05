@extends('master.admin')

@section('main')

<h1>create</h1>
@if($errors->all())
<div class="alert alert-warning alert-dismissibla fade show" role="alert">
    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>

</div>
@foreach($errors->all() as $er)
<li>{{$er}}</li>
@endforeach
@endif
<form method="post" action="{{route('service.store')}}" enctype="multipart/form-data">

    <div class="card-body">
        @csrf
        <div class="row">
            <div class="col-md-8 pr-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Summary</label>
                    <input name="summary" class="form-control" id="exampleInputEmail1" placeholder="Enter name"
                        value="{{old('summary')}}">
                    @error('summary')
                    <small class="help-block text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group ">
                    <label for="exampleInputEmail1">Content</label>
                    <textarea name="content" id="" class="summernote" cols="105" rows="4"
                        value="{{old('content')}}">
                    </textarea>
                    @error('content')
                    <small class="help-block text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group pb-3">
                    <label>Image</label>
                    <input type="file" name="myfile" id="imgInp" />
                    <img src="#" id="blah" width="150" alt="">
                    @error('image')
                    <small class="help-block text-danger">{{$message}}</small>
                    @enderror

                </div>



            </div>
            <div class="col-md-4">
               



                <div class="row">
                    <div class="col-md-6">
                        <label for="">Status</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input custom-control-input-danger" type="radio"
                                id="customRadio4" value="1" name="status" checked="">
                            <label for="customRadio4" class="custom-control-label">hien</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input class="custom-control-input custom-control-input-danger custom-control-input-outline"
                                type="radio" value="0" name="status" id="customRadio5">
                            <label for="customRadio5" class="custom-control-label"> an</label>
                        </div>
                    </div>


                </div>

            </div>
        </div>


    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@stop()

@section('js')
<script>

</script>
@stop()