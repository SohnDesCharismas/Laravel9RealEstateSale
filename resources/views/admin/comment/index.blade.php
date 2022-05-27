@extends('layouts.adminbase')

@section('title', 'Comment & Reviews List')



@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">

                <div class="col-sm-12">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Comments</li>
                    </ol>
                </div>

                <div class="col-md-12">
                    <h1 class="page-head-line">Comments</h1>
                    <div class="col-md-12">


                        <!--    Bordered Table  -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Comments
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive table-bordered">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Home Type</th>
                                            <th>Subject</th>
                                            <th>Review</th>
                                            <th>Rate</th>
                                            <th>Status</th>
                                            <th style="width: 40px">Show</th>
                                            <th style="width: 40px">Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach( $data as $rs)
                                            <tr>
                                                <td>{{$rs->id}}</td>
                                                <td>Ismail Acar</td>
                                                <th>
                                                    <a href="{{route('admin.home.show',['id'=>$rs->home_id])}}">{{$rs->home->title}}</a>
                                                </th>
                                                <td>{{$rs->subject}}</td>
                                                <td>{{$rs->review}}</td>
                                                <td>{{$rs->rate}}</td>
                                                <td>{{$rs->status}}</td>
                                                <td>
                                                    <a href="{{route('admin.comment.show',['id'=>$rs->id])}}"
                                                       class="btn btn-block btn-success btn-sm"
                                                       onclick="return !window.open(this.href, '','top=50 left=100 width=1100, height=700')">
                                                        Show
                                                    </a>
                                                </td>
                                                <td><a href="{{route('admin.comment.delete',['id'=>$rs->id])}}"
                                                       class="btn btn-block btn-danger btn-sm"
                                                       onclick="return confirm('Deleting!! Are you sure??')">Delete</a>
                                                </td>
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
