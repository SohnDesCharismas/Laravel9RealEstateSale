@extends('layouts.adminbase')

@section('title', 'Edit Home :'.$data->title)



@section('content')

    <div id="page-wrapper">
        <div class="col-sm-10">
            <div class="col-sm-3"><a href="{{route('admin.home.edit',['id'=>$data->id])}}"
                                     class="btn btn-block btn-info"
                                     style="width: 200px;margin: 10px;">Edit</a></div>
            <div class="col-sm-3"><a href="{{route('admin.home.delete',['id'=>$data->id])}}"
                                     class="btn btn-block btn-danger"
                                     onclick="return confirm('Deleting!! Are you sure??')"
                                     style="width: 200px;margin: 10px;">Delete</a></div>
        </div>

        <ol class="breadcrumb float-right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Show Home</li>
        </ol>

        <div class="col-md-12 col-sm-12 col-xs-12">
            <section class="content">
                <div class="card card-primary">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Detail Data
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr>
                                        <th style="width: 200px;">Id</th>
                                        <td> {{$data->id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Title</th>
                                        <td> {{$data->title}}</td>
                                    </tr>
                                    <tr>
                                        <th>Category</th>
                                        <td> {{$data->category_id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Keywords</th>
                                        <td> {{$data->keywords}}</td>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <td> {{$data->description}}</td>
                                    </tr>
                                    <tr>
                                        <th>Price</th>
                                        <td> {{$data->price}}</td>
                                    </tr>
                                    <tr>
                                        <th>Quantity</th>
                                        <td> {{$data->quantity}}</td>
                                    </tr>
                                    <tr>
                                        <th>Minimum Quantity</th>
                                        <td> {{$data->minquantity}}</td>
                                    </tr>
                                    <tr>
                                        <th>Tax</th>
                                        <td> {{$data->tax}}</td>
                                    </tr>
                                    <tr>
                                        <th>Detail İnf</th>
                                        <td> {{$data->detail}}</td>
                                    </tr>
                                    <tr>
                                        <th>Image</th>
                                        <td>
                                            @if($data->image)
                                                <img src="{{Storage::url($data->image)}}" alt="ne bakiyon"
                                                     style="height: 100px;">
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td> {{$data->status}}</td>
                                    </tr>
                                    <tr>
                                        <th>Create Date</th>
                                        <td> {{$data->created_at}}</td>
                                    </tr>
                                    <tr>
                                        <th>Update Date</th>
                                        <td> {{$data->updated_at}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
    <!-- /. PAGE WRAPPER  -->

@endsection
