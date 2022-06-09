@extends('layouts.frontbase')

@section('title','User Panel')

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
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                User Panel
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
                        <h3 class="title-d">User
                            <span class="color-d">Profile</span></h3>
                    </div>
                    <div class="input-checkbox">

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
