@extends('master.admin')

@section('main')
<form action="" method="get">
    <div class="form-group">
    <input name="key"  id="search key" value="{{request('key')}}">

        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
        <a href="{{route('brand.create')}}" type="submit" class="btn btn-danger"><i class="fa fa-plus"></i></a>

    </div>
</form>

@csrf
<button type="submit" class="btn btn-danger">Delete All</button>
<table class="table">
    <thead>
        <tr>
        <th>
            <input type="checkbox" id = "check-all" >
        </th>
            <th>id</th>
            <th> Name</th>
            <th>Status</th>
            <th>Parent-id</th>
            <th>Prioty</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>
        <td>
        <input type="checkbox" name="id[]" class="check-item" value="{{$item->id}}">
        </td>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->status == 0 ? 'ẩn' : 'hiện'}}</td>
            <td>{{$item->parent_id}}</td>
            <td>{{$item->prioty}}</td>
            <td>{{$item->pro->count()}}</td>

            <td>
                <a href="{{route('brand.edit', $item->id)}}" class="btn btn-primary">edit</a>
                <a href="{{route('brand.destroy', $item->id)}}" class="btn-delete btn btn-danger">delete</a>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
</form>
<hr>
<form action="" method="POST" id="form-delete">
    @csrf @method('DELETE')
</form>
{{$data->links()}}
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

$('#check-all').click(function(ev) {

    var isChecked = $(this).is(':checked');
    if(isChecked){
        $('.check-item').prop('checked', true);
    }else {
        $('.check-item').prop('checked', false);

    }
})
</script>
@stop()