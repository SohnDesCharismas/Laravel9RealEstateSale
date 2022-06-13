@extends('layouts.frontbase')

@section('title','References | '.$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))
@section('content')

    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Our Best References</h1>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                About
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
                <div class="col-sm-12">
                    <div class="about-img-box">
                        <img src="{{asset('assets')}}/img/slide-about-1.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="sinse-box">
                        <h3 class="sinse-title">..uWu..</h3>

                    </div>
                </div>
                <div class="col-md-12 section-t8">
                    <div class="row">


                        <div class="title-box-d">
                            <h3 class="title-d">References</h3>
                        </div>
                        <p class="color-text-a">
                        {!! $setting->references !!}


                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
