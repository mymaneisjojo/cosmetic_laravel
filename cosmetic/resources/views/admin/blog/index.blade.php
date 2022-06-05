@extends('master.admin')

@section('main')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Blog
                <small>List</small>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr align="center">
                    <th>Id</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Parent-id</th>
                    <th>Prioty</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($data as $key => $cat)
                <tr class="odd gradeX" align="center">
                    <td>{{$key+1}}</td>
                    <td>{{$cat->name}}</td>
                    <td>{{$cat->status == 0 ? 'ẩn' : 'hiện'}}</td>
                    <td>{{$cat->parent_id}}</td>
                    <td>{{$cat->prioty}}</td>
                   
                    <td class="center">
                        <form action="{{route('blog.destroy',$cat->id)}}" method="post">
                            @csrf @method('DELETE')
                            <button type="submit" href=""><i class="fa fa-trash-o  fa-fw"></i>Delete </button>
                        </form>

                    </td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i>
                        <a href="{{route('blog.edit',$cat->id)}}">Edit</a>
                    </td>
                   
                </tr>

                @endforeach
                <!-- <tr class="even gradeC" align="center">
                                <td>2</td>
                                <td>Bóng Đá</td>
                                <td>Thể Thao</td>
                                <td>Ẩn</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                            </tr> -->
            </tbody>
        </table>

       
    </div>
    <!-- /.row -->
</div>

@stop()