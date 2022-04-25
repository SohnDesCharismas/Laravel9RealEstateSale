@extends('layouts.adminbase')

@section('title', 'Edit Home :'.$data->title)



@section('content')

    <div id="page-wrapper">
        <div class="col-sm-6">
            <h1>Edit Home : {{$data->title}}</h1>
        </div>

        <ol class="breadcrumb float-right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Edit Home</li>
        </ol>

        <div class="col-md-12 col-sm-12 col-xs-12">
            <section class="content">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Home Elements</h3>
                    </div>
                    <form role="form" action="{{route('admin.home.update',['id'=>$data->id])}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Parent Category</label>

                                <select name="category_id" class="form-control select2">
                                    @foreach($datalist as $rs)
                                        <option value="{{$rs->id}}"
                                                @if ($rs->id == $data->category_id) selected="selected" @endif>
                                            {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title) }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" type="text" value="{{$data->title}}" name="title">
                            </div>
                            <div class="form-group">
                                <label>Keywords</label>
                                <input class="form-control" type="text" value="{{$data->keywords}}" name="keywords">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control" type="text" value="{{$data->description}}"
                                       name="description">
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" type="number" value="{{$data->price}}" name="price">
                            </div>
                            <div class="form-group">
                                <label>Quantity</label>
                                <input class="form-control" type="number" value="{{$data->quantity}}" name="quantity">
                            </div>
                            <div class="form-group">
                                <label>Minimum Quantity</label>
                                <input class="form-control" type="number" value="{{$data->minquantity}}"
                                       name="minquantity">
                            </div>
                            <div class="form-group">
                                <label>Tax %</label>
                                <input class="form-control" type="number" value="{{$data->tax}}" name="tax">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Detail İnf.</label>
                                <textarea name="detail" class="form-control">
                                    {{$data->detail}}
                                </textarea>
                            </div>
                            <div class="form-group">

                                <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input name="image" type="file" class="custom-file-input"
                                                   id="exampleInputFile">
                                            <label class="custom-file-input" for="exampleInputFile">Choose Image
                                                File</label>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option selected>{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary" type="submit">Update data</button>
                            </div>
                    </form>
                </div>
            </section>
        </div>

    </div>
    <!-- /. PAGE WRAPPER  -->

@endsection
