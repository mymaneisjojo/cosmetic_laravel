@extends('master.admin')

@section('main')


<div class="container">
    <br>
    <h1>Quản lí đơn hàng</h1>
    <br>
    <table border="1" cellpadding="10" cellspacing="0" width="1000">
        <thead>
            <tr>
                <th>Stt</th>
                <th>ngay dat</th>
                <th>Tên khách hàng</th>
                <th>Email</th>
                <th>Phone</th>
                <th>TotalPrice</th>
                <th>Trạng thái</th>
                <th></th>
                <th>delete</th>
            </tr>

        </thead>

        <tbody>
            @foreach($orders as $key => $item)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$item->created_at->format('d-m-Y')}}</td>
                <td>{{$item->cus->firtsName}}</td>
                <td>{{$item->cus->email}}</td>
                <td>{{$item->cus->phone}}</td>
                <td>{{$item->getTotalPrice()}}</td>
                <td>{{$item->status == 0 ? 'unconfimred' : 'confirmed'}}</td>
                <td>
                    <a href="{{route('admin.order.detail', $item->id)}}" class="btn btn-success">Chi tiet</a>
                    <a href="{{route('admin.order.detail', $item->id)}}" class="btn btn-success">PDF</a>
                </td>
                <td class="center">
                    <form action="{{route('order.destroy', $item->id)}}" method="post">
                        @csrf @method('DELETE')
                        <button type="submit" href=""><i class="fa fa-trash-o  fa-fw"></i>Delete </button>
                    </form>

                </td>

            </tr>
            @endforeach
        </tbody>

    </table>
</div>


@stop()



