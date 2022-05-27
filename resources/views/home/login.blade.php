@extends('layouts.frontbase')

@section('title','Login User | ')

@section('content')

    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Welcome to Estate Agency</h1>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Login User
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="section-about">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-t8">
                    <div class="row">

                        <div class="col-md-12 section-md-t3">
                            <div class="title-box-d">
                                <h3 class="title-d">Login
                                    <span class="color-d">User</span></h3>
                            </div>
                            <p class="color-text-a">
                           @include('auth.login')
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
