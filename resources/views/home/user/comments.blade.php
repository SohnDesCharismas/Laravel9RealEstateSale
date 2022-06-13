@extends('layouts.frontbase')

@section('title','User Comments & Reviews')

@section('content')

    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                </div>
                <div class="col-md-3">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                User Comment
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="title-box-d">
                        <h3 class="title-d">User
                            <span class="color-d">Menu</span></h3>
                    </div>
                    @include('home.user.usermenu')
                </div>
                <div class="col-md-9">
                    <div class="title-box-d">
                        <h3 class="title-d">User Comments &
                            <span class="color-d">Reviews</span></h3>
                    </div>
                    <div class="input-checkbox">
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
                                <th style="width: 40px">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $comments as $rs)
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
                                    <td><a href="{{route('userpanel.reviewdelete',['id'=>$rs->id])}}"
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
        </div>
    </section>

@endsection
