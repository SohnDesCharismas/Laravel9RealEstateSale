@extends('layouts.adminwindow')

@section('title', 'Show Message :'.$data->title)



@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <section class="content">
            <div class="card card-primary">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Detail Comment Data
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width: 200px;">Id</th>
                                    <td> {{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th>Home</th>
                                    <td>{{$data->home->title}}</td>
                                </tr>
                                <tr>
                                    <th>Name & Surname</th>
                                    <td> Ismail Acar</td>
                                </tr>
                                <tr>
                                    <th>Subject</th>
                                    <td> {{$data->subject}}</td>
                                </tr>
                                <tr>
                                    <th>Review</th>
                                    <td> {{$data->review}}</td>
                                </tr>
                                <tr>
                                    <th>Rate Number</th>
                                    <td> {{$data->rate}}</td>
                                </tr>
                                <tr>
                                    <th>IP</th>
                                    <td> {{$data->IP}}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td> {{$data->status}}</td>
                                </tr>
                                <th>Create Date</th>
                                <td> {{$data->created_at}}</td>
                                </tr>
                                <tr>
                                    <th>Update Date</th>
                                    <td> {{$data->updated_at}}</td>
                                </tr>
                                <tr>
                                    <th>Admin Note :</th>
                                    <td>
                                        <form role="form" action="{{route('admin.comment.update',['id'=>$data->id])}}"
                                              method="post">
                                            @csrf
                                            <select name="status">
                                                <option selected>{{$data->status}}</option>
                                                <option>True</option>
                                                <option>False</option>
                                            </select>
                                            <div class="card-footer">
                                                <button class="btn btn-primary" type="submit">Update comment</button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>



@endsection
