@extends('master.admin')

@section('main')
<!-- <form action="" method="get">
    <div class="form-group">
        <input name="key" clas="form-control mr-2" id="search key" value="{{request('key')}}">

        <select name="cat" id="">
            <option value="">All Cate</option>
            @foreach($cats_global as $catg)
            <option value="{{$catg->id}}" {{$catg->id == request()->catb ? 'selected' : ''}}>{{$catg->name}}</option>
            @endforeach
        </select>

       
        <a href="{{route('blog.create')}}" type="submit" class="btn btn-danger"><i class="fa fa-plus fa-fw"></i></a>

    </div>


</form> -->
@if($errors->all())
<div class="alert alert-warning alert-dismissibla fade show" role="alert">
    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>

</div>
@foreach($errors->all() as $er)
<li>{{$er}}</li>
@endforeach
@endif
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Blogdetail
                <small>List</small>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr align="center">
                    <th>id</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Cate_Blog Id</th>
                    <th>Created At</th>
                    <th>Image</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>

                @foreach($data as $item)
                <tr class="odd gradeX" align="center">
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->status == 0 ? 'an' : 'hien'}}</td>
                    <td>{{$item->cate_blog_id}}</td>
                    <td>{{$item->created_at->format('d-m-Y')}}</td>
                    <th>
                        <img src="{{url('public/uploads')}}/{{$item->image}}" width="60px" alt="">
                    </th>


                    <td class="center">
                        <form action="{{route('blogdetail.destroy',$item->id)}}" method="post">
                            @csrf @method('DELETE')
                            <button type="submit" href=""><i class="fa fa-trash-o  fa-fw"></i>Delete </button>
                        </form>

                    </td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i>
                        <a href="{{route('blogdetail.edit',$item->id)}}">Edit</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>


    </div>
    <!-- /.row -->
</div>


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