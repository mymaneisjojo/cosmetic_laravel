@extends('master.admin')

@section('main')

<h1>edit</h1>

<form role="form" method="post" action="{{route('product.update', $model->id)}}" enctype="multipart/form-data">

    <div class="card-body">
        @csrf @method('PUT')

        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name"
                        value="{{$model->name}}">
                    @error('name')
                    <small class="help-block text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <textarea name="description" id="" class="summernote" cols="100" rows="3"
                        value="">{{$model->description}}</textarea>
                    <small id="helpId" class="text-mutd"></small>
                </div>

                
                <div class="form-group my-2">
                    <label for="exampleInputEmail1">Image</label>
                    <img src="{{url('public/uploads')}}/{{$model->image}}" width="200px" height="200px" alt="">
                    <input type="file" name="myfile" class="form-control" id="exampleInputEmail1"
                        placeholder="Enter price">
                </div>

                <div class="form-group my-2">
                    <label for="exampleInputEmail1">Image List</label>
                    @foreach($img as $imgs)

                    <img src="{{url('public/uploads')}}/{{$imgs->name}}" width="100" height="100" alt="ppppp">
                    @endforeach
                    <input type="file" name="filelist[]" class="form-control" id="exampleInputEmail1"
                        placeholder="Enter price" multiple>

                </div>

                
            </div>

            <div class="col-md-4">
            <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    <select name="category_id" required="required" id="" class="custom-select">
                        @foreach($cats as $cat)
                        <?php $selected = $model->category_id == $cat->id ? 'selected' : '';?>
                        <option value="{{$cat->id}}" {{$selected}}>{{$cat->name}}</option>
                        @endforeach
                        @error('category_id')
                        <small class="help-block text-danger">{{$message}}</small>
                        @enderror
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter price"
                        value="{{$model->price}}">
                    @error('price')
                    <small class="help-block text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Sale Price</label>
                    <input name="sale_price" class="form-control" id="exampleInputEmail1" value="{{$model->sale_price}}"
                        placeholder="Enter sale price">
                    @error('sale_price')
                    <small class="help-block text-danger">{{$message}}</small>
                    @enderror
                </div>
                

               

                <div class="row">
                    <div class="col-md-6">
                        <label for="">Status</label>
                        <div class="custom-control custom-radio">
                            <?php $checked = $model->status == 1 ? 'checked' : '';?>
                            <input class="custom-control-input custom-control-input-danger" type="radio"
                                id="customRadio4" value="1" name="status" {{$checked}}>
                            <label for="customRadio4" class="custom-control-label">hien</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <?php $checked1 = $model->status == 0 ? 'checked' : '';?>
                            <input class="custom-control-input custom-control-input-danger custom-control-input-outline"
                                type="radio" value="0" name="status" id="customRadio5" {{$checked1}}>
                            <label for="customRadio5" class="custom-control-label"> an</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="exampleInputEmail1">Color</label>
                        @foreach($colors as $color)

                        <div class="checkbox">
                            <label>
                                <?php $checked =  in_array($color->id, $old_color) ? 'checked' : '' ;?>
                                <input type="checkbox" name="color[]" value="{{$color->id}}" {{$checked}}>
                                {{$color->name}}
                            </label>
                        </div>
                        @endforeach

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