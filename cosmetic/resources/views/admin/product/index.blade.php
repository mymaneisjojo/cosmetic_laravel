@extends('master.admin')

@section('main')
<form action="" method="get">
    <div class="form-group">
        <input name="key" clas="form-control mr-2" id="search key" value="{{request('key')}}">
        
            <select name="cat" id="">
                <option value="">All Category</option>
                @foreach($cats_global as $catg)
                <option value="{{$catg->id}}" {{$catg->id == request()->cat ? 'selected' : ''}}>{{$catg->name}}</option>
                @endforeach
            </select>
        
        <button type="submit" class="btn btn-primary ml-2"><i class="fa fa-search"></i></button>
        <a href="{{route('product.create')}}" type="submit" class="btn btn-danger"><i class="fa fa-plus"></i></a>

    </div>


</form>
<h1 style="color:red">product</h1>

<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th> Name</th>
            <th> price</th>
            <th> sale Price</th>
            <th>Status</th>
            <th>Category </th>
            <th>Brand </th>
            <th> created At</th>
            <th> image</th>
            <th> Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>

            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{number_format($item->price)}}</td>
            <td>{{number_format($item->sale_price)}}</td>
            <td>{{$item->status == 0 ? 'an' : 'hien'}}</td>
            <td>{{$item->cat->name}}</td>
            <td>{{$item->bra->name}}</td>
            <td>{{$item->created_at->format('d-m-Y')}}</td>
            <th>
                <img src="{{url('public/uploads')}}/{{$item->image}}" width="60px" alt="">
            </th>


            <td>
                @csrf @method('DELETE')
                <a href="{{route('product.edit', $item->id)}}" class="btn btn-primary">edit</a>
                <a href="{{route('product.destroy', $item->id)}}" class="btn-delete btn btn-danger">delete</a>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
<hr>
<form action="" method="POST" id="form-delete">
    @csrf @method('DELETE')
</form>
{{$data->appends(request()->all())->links()}}
@stop()



@section('js')
<script>
$('.btn-delete').click(function(ev) {
    ev.preventDefault()
    var _link = $(this).attr('href');
    $('form#form-delete').attr('action', _link);
    $('form#form-delete').submit();
    // alert(_link);
})
</script>
@stop()