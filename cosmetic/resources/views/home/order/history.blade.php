<x-nav-bar />


<div class="container">
<br>
    <h1>hositry order</h1>
<br>
    <table border="1" cellpadding="10" cellspacing="0" width="1000">
        <thead>
            <tr>
                <th>Stt</th>
                <th>ngay dat</th>
                <th>tong tien</th>
                <th>trang thai</th>
            </tr>

        </thead>

        <tbody>
            @foreach($orders as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->created_at->format('d-m-Y')}}</td>
                <td>{{$item->getTotalPrice()}}</td>

                <td>{{$item->status == 0 ? 'chua xac nhan' : 'da xac nhan'}}</td>
                <td>
                <a href="{{route('order.detail', $item->id)}}" class="btn btn-success">Chi tiet</a>
                    <a href="{{route('order.pdf', $item->id)}}" class="btn btn-success">PDF</a>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>

<x-footer />