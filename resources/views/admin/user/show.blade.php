@extends('layouts.adminwindow')

@section('title', 'User Detail :'.$data->title)



@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <section class="content">
            <div class="card card-primary">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Detail User Data
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width: 200px;">Id</th>
                                    <td> {{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th>Name & Surname</th>
                                    <td> {{$data->name}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td> {{$data->email}}</td>
                                </tr>
                                <tr>
                                    <th>Roles</th>
                                    <td>
                                        @foreach($data->roles as $role)
                                            {{$role->name}}
                                            <a href="{{route('admin.user.deleterole',['uid'=>$data->id,'rid'=>$role->id])}}"
                                               class="btn btn-block btn-danger btn-sm"
                                               onclick="return confirm('Deleting!! Are you sure??')">[x]</a>
                                        @endforeach
                                    </td>
                                </tr>
                                <th>Create Date</th>
                                <td> {{$data->created_at}}</td>
                                </tr>
                                <tr>
                                    <th>Update Date</th>
                                    <td> {{$data->updated_at}}</td>
                                </tr>
                                <tr>
                                    <th>Add Role to User</th>
                                    <td>
                                        <form role="form" action="{{route('admin.user.addrole',['id'=>$data->id])}}"
                                              method="post">
                                            @csrf
                                            <select name="role_id">
                                                @foreach($roles as $role)
                                                    <option value="{{$role->id}}"> {{$role->name}}</option>
                                                @endforeach
                                            </select>
                                            <div class="card-footer">
                                                <button class="btn btn-primary" type="submit">Add Role</button>
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
