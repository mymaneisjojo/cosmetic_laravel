<x-nav-bar />


<div class="container">
    <br>
    <div class="row">
        <div class="col-md-6">
            <h1>Thong tin nguoi dat hang</h1>
            <p>Name: {{$order->cus->name}}</p>
            <p>email: {{$order->cus->email}}</p>
            <p>phone: {{$order->cus->phone}}</p>
            <p>address: {{$order->cus->address}}</p>
        </div>
        <div class="col-md-6">
            <h1>Thong tin nguoi nhan hang</h1>
            <p>Name: {{$order->name}}</p>
            <p>email: {{$order->email}}</p>
            <p>phone: {{$order->phone}}</p>
            <p>address: {{$order->address}}</p>
        </div>

    </div>

    <br>
    <table border="1" cellpadding="10" cellspacing="0" width="1000">
        <thead>
            <tr>
                <th>Stt</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
            </tr>

        </thead>

        <tbody>
            @foreach($order->details as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->prod->name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->quantity}}</td>
                <td>{{$item->quantity * $item->price}}</td>

            </tr>
            @endforeach
        </tbody>

    </table>
    <hr>
    <a href="{{route('order.history')}}" class="btn btn-success">Quay lại danh sách</a>
    <a target="_blank" href="{{route('order.pdf', $order->id)}}" class="btn btn-danger">PDF</a>
    <a target="_blank" href="{{route('order.pdf', ['id' =>$order->id, 'action' => 'download'])}}" class="btn btn-success">Download</a>
</div>

<x-footer />