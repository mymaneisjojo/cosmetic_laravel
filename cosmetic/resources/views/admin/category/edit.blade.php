@extends('master.admin')

@section('main')

<h1>edit</h1>

<form role="form" method="post" action="{{route('category.update', $model->id)}}">

    <div class="card-body">
        @csrf @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name"
                value="{{$model->name}}">
            @error('name')
            <small class="help-block text-danger">{{$message}}</small>
            @enderror
        </div>


        <div class="custom-control custom-radio">
            <?php $checked = $model->status == 1 ? 'checked' : '';?>
            <input class="custom-control-input custom-control-input-danger" type="radio" id="customRadio4" value="1"
                name="status" {{$checked}}>
            <label for="customRadio4" class="custom-control-label">hiện</label>
        </div>


        <div class="custom-control custom-radio">
            <?php $checked1 = $model->status == 0 ? 'checked' : '';?>
            <input class="custom-control-input custom-control-input-danger custom-control-input-outline" type="radio"
                value="0" name="status" id="customRadio5" {{$checked1}}>
            <label for="customRadio5" class="custom-control-label"> ẩn</label>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Parent id</label>
            <select name="parent_id"  id="" class="custom-select">
            <option value="0">All parent</option>
                @foreach($cats as $cat)
                <option value="{{$cat->id}}" >{{$cat->name}}</option>
                @endforeach
                @error('parent_id')
                <small class="help-block text-danger">{{$message}}</small>
                @enderror
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Prioty</label>
            <input name="prioty" class="form-control" placeholder="Enter prioty" value="{{$model->prioty}}">
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