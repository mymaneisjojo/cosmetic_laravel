@extends('master.admin')

@section('main')
<form action="" method="get">
    <div class="form-group">
        <input name="key" clas="form-control mr-2" id="search key" value="{{request('key')}}">
        
        <button type="submit" class="btn btn-primary ml-2"><i class="fa fa-search"></i></button>
        <a href="{{route('banner.create')}}" type="submit" class="btn btn-danger"><i class="fa fa-plus"></i></a>

    </div>


</form>

<form action="{{route('banner.updatePrioty')}}" method="POST" enctype="multipart/form-data">
@csrf
<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th> Name</th>
            <th>Link</th>
            <th>Description</th>
            <th> Prioty</th>
            <th>Status</th>
            <th> created At</th>
            <th> Image</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $key =>$item)
        <tr>

            <td>{{$key +1}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->link}}</td>
            <td>{{$item->description}}</td>
            <td>
            <input type="hidden" name="id[]" value="{{$item->id}}">
            <input type="number" value="{{$item->prioty}}" name="prioty[]" >
            </td>
            <td>{{$item->status == 0 ? 'an' : 'hien'}}</td>
            
            <td>{{$item->created_at->format('d-m-Y')}}</td>
            <th>
                <img src="{{url('public/uploads/banner')}}/{{$item->image}}" width="100px" alt="">
            </th>


            <td>
                
                <a href="{{route('banner.edit', $item->id)}}" class="btn btn-primary">edit</a>
                <a href="{{route('banner.destroy', $item->id)}}" class="btn-delete btn btn-danger">delete</a>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
<button type="submit" class="btn btn-primary ml-2">Update Prioty</button>

</form>


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