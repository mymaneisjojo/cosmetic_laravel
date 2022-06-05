
<p>hbcn hfyrhjmc</p>

<h1>chi tiet don hang cua ban</h1>

<table border="1" cellpadding="10" cellspacing="0" width="600">
    <tr>
        <td>Stt</td>
        <td>ten san pham</td>
        <td>màu</td>
        <td>gia</td>
        <td>so luong</td>
        <td>thanh tien</td>
    </tr>
    <?php  $n = 1;?>
        @foreach($cart->items as $item)
    <tr>
       
        <td>{{$n}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->color_name}}</td>
        <td>{{$item->price}}</td>
        <td>{{$item->quantity}}</td>
        <td>{{$item->price * $item->quantity}}</td>
       
    </tr>
    <?php $n++;?>
        @endforeach
</table>

<a href="{{route('order.confirm')}}?token={{$token}} " style="color: red">ban vui long click vao ddaay dde xac nahn</a>