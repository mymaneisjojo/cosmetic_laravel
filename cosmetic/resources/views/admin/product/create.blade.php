@extends('master.admin')

@section('main')

<h1>create</h1>

<form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">

    <div class="card-body">
        @csrf
        <div class="row">
            <div class="col-md-8 pr-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name"
                        value="{{old('name')}}">
                    @error('name')
                    <small class="help-block text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group ">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea name="description" id="" class="summernote" cols="105" rows="4"
                        value="{{old('description')}}">
                    </textarea>
                    <small id="helpId" class="text-mutd"></small>
                </div>
               

                <div class="form-group pb-3">
                    <label>Image</label>
                    <input type="file" name="myfile" id="imgInp" />
                    <img src="#" id="blah" width="150" alt="">
                    @error('image')
                    <small class="help-block text-danger">{{$message}}</small>
                    @enderror

                </div>

                <div class="form-group" id="form1">
                    <label>Image list</label>
                    <input type="file" name="filelist[]" id="imglist" multiple>
                </div>


            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    <select name="category_id" required="required" id="" class="custom-select">
                        <option value="">All Category</option>
                        @foreach($cats as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach
                        @error('category_id')
                        <small class="help-block text-danger">{{$message}}</small>
                        @enderror
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Brand</label>
                    <select name="brand_id" required="required" id="" class="custom-select">
                        <option value="">All Brand</option>
                        @foreach($brands as $brand)
                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                        @endforeach
                        @error('brand_id')
                        <small class="help-block text-danger">{{$message}}</small>
                        @enderror
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter price"
                        value="{{old('price')}}">
                    @error('price')
                    <small class="help-block text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group pb-3">
                    <label for="exampleInputEmail1">Sale Price</label>
                    <input name="sale_price" class="form-control" id="exampleInputEmail1" value="{{old('sale_price')}}"
                        placeholder="Enter sale price">
                    @error('sale_price')
                    <small class="help-block text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-md-4">
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

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Color</label>
                            @foreach($colors as $color)
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="color[]" value="{{$color->id}}">
                                    {{$color->name}}
                                </label>
                            </div>
                            @endforeach

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