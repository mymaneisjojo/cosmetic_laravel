<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
            font-family: "DejaVu Sans";
        }
        table{
            width: 100%;
            border: 1px solid #333;
            border-collapse: collapse;
            margin-bottom: 25px;

        }
        table tr th,
        table tr td{
            border: 1px solid #333;
            padding: 10px;
            box-sizing: border-box;
            text-align: center;
        }

    </style>
  </head>
  <body>
  
    <div class="row" style="margin-bottom: 200px">
        <div class="col-md-6" style="width: 50%; float: left; ">
            <h1>Thong tin nguoi dat hang</h1>
            <p>Name: {{$order->cus->name}}</p>
            <p>email: {{$order->cus->email}}</p>
            <p>phone: {{$order->cus->phone}}</p>
            <p>address: {{$order->cus->address}}</p>
        </div>
        <div class="col-md-6" style="width: 50%; float: left;">
            <h1>Thong tin nguoi nhan hang</h1>
            <p>Name: {{$order->name}}</p>
            <p>email: {{$order->email}}</p>
            <p>phone: {{$order->phone}}</p>
            <p>address: {{$order->address}}</p>
        </div>

    </div>

    <br>
    <table border="1" cellpadding="2" cellspacing="0" width="450" style="margin-top: 300px">
        <thead>
            <tr>
                <th>Stt</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Tổng tiền</th>
            </tr>

        </thead>

        <tbody>
        <?php $n= 1;?>
            @foreach($order->details as $item)
            <tr>
                <td>{{$n}}</td>
                <td>{{$item->color}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->quantity}}</td>
                <td>{{$item->price}}</td>

                <td>{{$item->quantity * $item->price}}</td>

            </tr>
            <?php $n++;?>
            @endforeach
        </tbody>

    </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>