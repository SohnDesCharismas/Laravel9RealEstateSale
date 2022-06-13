@extends('layouts.frontbase')

@section('title','Frequently Asked Questions | '.$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))
@section('content')

    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Frequently Asked Questions</h1>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                FAQ
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
                        <h3 class="sinse-title">EstateAgency
                            <span></span>
                            <br> Since 2017</h3>
                        <p>Art &amp; Architecture</p>
                    </div>
                </div>
                <div class="col-md-12 section-t8">
                    <div class="row">
                        <div class="col-md-12 section-md-t3">
                            <div class="title-box-d">
                                <h3 class="title-d">Frequently Asked
                                    <span class="color-d">Questions</span></h3>
                            </div>
                        </div>
                        <div id="accordion">
                            @foreach($datalist as $rs)
                            <h3>{{$rs->question}}</h3>
                            <div>
                                <p>
                                    {!! $rs->answer !!}
                                </p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
