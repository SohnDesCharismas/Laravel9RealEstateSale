@extends('layouts.adminwindow')

@section('title', 'Home Image Gallery')



@section('content')
    <h3>{{$home->title}}</h3>
    <hr>
    <form role="form" action="{{route('admin.image.store',['hid'=>$home->id])}}" method="post"
          enctype="multipart/form-data">
        @csrf
        <div class="input-group">
            <label for="exampleInputFile">Image</label>
            <input type="text" class="form-control" name="title" placeholder="Title">
            <div class="custom-file">
                    <input name="image" type="file" class="custom-file-input"
                           id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose Image
                        File</label>
            </div>
            <div class="input-group-append">
                <input type="submit" class="input-group-text" value="Upload">
            </div>
        </div>
    </form>




    <h1 class="page-head-line">Home Image List</h1>
    <div class="col-md-12">


        <!--    Bordered Table  -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Home Image List
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive table-bordered">
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="width: 40px;">Id</th>
                            <th style="width: 200px;">Title</th>
                            <th style="width: 200px;">Image</th>
                            <th style="width: 70px;">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $images as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->title}}</td>
                                <td>
                                    @if($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" alt="ne bakiyon"
                                             style="height: 40px;">
                                    @endif
                                </td>
                                <td><a href="{{route('admin.image.delete',['hid'=>$home->id, 'id'=>$rs->id])}}"
                                       class="btn btn-block btn-danger btn-sm"
                                       onclick="return confirm('Deleting!! Are you sure??')">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>

        </div>
        <!--  End  Bordered Table  -->
    </div>




@endsection

