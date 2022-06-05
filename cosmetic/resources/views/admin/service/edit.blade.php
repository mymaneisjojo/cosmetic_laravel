@extends('master.admin')

@section('main')

<h1>create</h1>

<form method="post" action="{{route('service.update', $model->id)}}" enctype="multipart/form-data">

    <div class="card-body">
        @csrf @method('PUT')
        <div class="row">
            <div class="col-md-8 pr-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Summary</label>
                    <input name="summary" class="form-control" id="exampleInputEmail1" placeholder="Enter summary"
                        value="{{$model->summary}}">
                    @error('summary')
                    <small class="help-block text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group ">
                    <label for="exampleInputEmail1">content</label>
                    <textarea name="content" id="" class="summernote" cols="105" rows="4" value="">{{$model->content}}
                    </textarea>
                    @error('content')
                    <small class="help-block text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group my-2">
                    <label for="exampleInputEmail1">Image</label>
                    <img src="{{url('public/uploads')}}/{{$model->image}}" width="200px" height="200px" alt="">
                    <input type="file" name="myfile" class="form-control" id="exampleInputEmail1"
                        placeholder="Enter price">
                </div>



            </div>
            <div class="col-md-4">
                

                <div class="row">
                    <div class="col-md-6">
                        <label for="">Status</label>
                        <div class="custom-control custom-radio">
                            <?php $checked = $model->status == 1 ? 'checked' : '';?>
                            <input class="custom-control-input custom-control-input-danger" type="radio"
                                id="customRadio4" value="{{$model->status}}" name="status" {{$checked}}>
                            <label for="customRadio4" class="custom-control-label">hien</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <?php $checked = $model->status == 0 ? 'checked' : '';?>
                            <input class="custom-control-input custom-control-input-danger custom-control-input-outline"
                                type="radio" value="{{$model->status}}" name="status" id="customRadio5" {{$checked}}>
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