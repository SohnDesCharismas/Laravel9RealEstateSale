@extends('layouts.adminbase')

@section('title', 'Category List')



@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">

                <div class="col-sm-12">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Category List</li>
                        <a href="{{route('admin.category.create')}}" class="btn btn-block btn-success"
                           style="width: 200px;margin-top: 50px;">Add Category</a>
                    </ol>
                </div>

                <div class="col-md-12">
                    <h1 class="page-head-line">Category List</h1>
                    <div class="col-md-12">


                        <!--    Bordered Table  -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Category List
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive table-bordered">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Parent</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            <th>Show</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach( $data as $rs)
                                            <tr>
                                                <td>{{$rs->id}}</td>
                                                <td> {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}} </td>
                                                <td>{{$rs->title}}</td>
                                                <td>
                                                    @if($rs->image)
                                                        <img src="{{Storage::url($rs->image)}}" alt="ne bakiyon"
                                                             style="height: 40px;">
                                                    @endif
                                                </td>
                                                <td>{{$rs->status}}</td>
                                                <td><a href="{{route('admin.category.edit',['id'=>$rs->id])}}"
                                                       class="btn btn-block btn-info btn-sm">Edit</a></td>
                                                <td><a href="{{route('admin.category.delete',['id'=>$rs->id])}}"
                                                       class="btn btn-block btn-danger btn-sm"
                                                       onclick="return confirm('Deleting!! Are you sure??')">Delete</a>
                                                </td>
                                                <td><a href="{{route('admin.category.show',['id'=>$rs->id])}}"
                                                       class="btn btn-block btn-success btn-sm">Show</a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>

                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-right">
                                    <li class="page-item"><a href="#" class="page-link"><<</a></li>
                                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item"><a href="#" class="page-link">>></a></li>
                                </ul>
                            </div>

                        </div>
                        <!--  End  Bordered Table  -->
                    </div>


                </div>
            </div>


        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->

@endsection
