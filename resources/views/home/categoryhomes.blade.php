@extends('layouts.frontbase')

@section('title',$category->title . ' Properties')

@section('content')
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">{{$category->title}}</h1>
                        <span class="color-text-a">Grid Properties</span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{$category->title}}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="property-grid grid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="grid-option">
                        <form>
                            <select class="custom-select">
                                <option selected="">All</option>
                                <option value="1">New to Old</option>
                                <option value="2">Old to New</option>
                                <option value="3">to Expensive</option>
                                <option value="4">to Cheap</option>
                                <option value="5">For Sale</option>
                            </select>
                        </form>
                    </div>
                </div>
                @foreach($homes as $rs)
                <div class="col-md-6">
                    <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                            <img src="{{Storage::url($rs->image)}}" style="width: 550px; height: 450px;" alt="" class="img-a img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                    <h2 class="card-title-a">
                                        <a href="/home/{{$rs->id}}">{{$rs->title}}</a>
                                    </h2>
                                </div>
                                <div class="card-body-a">
                                    <div class="price-box d-flex">
                                        <span class="price-a">buy | {{$rs->price}}</span>
                                    </div>
                                    <a href="/home/{{$rs->id}}" class="link-a">Click here to view
                                        <span class="ion-ios-arrow-forward"></span>
                                    </a>
                                </div>
                                <div class="card-footer-a">
                                    <ul class="card-info d-flex justify-content-around">
                                        <li>
                                            <h4 class="card-info-title">Area</h4>
                                            <span>{{$rs->area}}m<sup>2</sup></span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Rooms</h4>
                                            <span>{{$rs->rooms}} + 1</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Baths</h4>
                                            <span>{{$rs->baths}}</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Garages</h4>
                                            <span>{{$rs->garage}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="row">
                    <div class="col-sm-12">
                        <nav class="pagination-a">
                            <ul class="pagination justify-content-end">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">
                                        <span class="ion-ios-arrow-back"></span>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item next">
                                    <a class="page-link" href="#">
                                        <span class="ion-ios-arrow-forward"></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
