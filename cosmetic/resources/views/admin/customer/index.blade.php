@extends('master.admin')

@section('main')
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
            <h1 class="page-header">Customer account</h1>

            </h1>
        </div>
        <!-- /.col-lg-12 -->
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $key => $cus)
                <tr class="odd gradeX" align="center">
                    <td>{{$key+1}}</td>
                    <td>{{$cus->firtsName}}_{{$cus->lastName}}</td>
                    <td>{{$cus->email}}</td>
                    <td>{{$cus->phone}}</td>
                    <td class="center">
                        <form action="{{route('customer.destroy',$cus->id)}}" method="post">
                            @csrf @method('DELETE')
                            <button type="submit" href=""><i class="fa fa-trash-o  fa-fw"></i>Delete </button>
                        </form>

                    </td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i>
                        <a href="{{route('customer.edit',$cus->id)}}">Edit</a>
                    </td>
                </tr>
                @endforeach
                <!-- <tr class="even gradeC" align="center">
                    <td>2</td>
                    <td>kutun</td>
                    <td>Admin</td>
                    <td>Ẩn</td>
                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                </tr>
                <tr class="odd gradeX" align="center">
                    <td>3</td>
                    <td>kuteo</td>
                    <td>Member</td>
                    <td>Hiện</td>
                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                </tr> -->
            </tbody>
        </table>

    </div>
    <!-- /.row -->
</div>


@stop()