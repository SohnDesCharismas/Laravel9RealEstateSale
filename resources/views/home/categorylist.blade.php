@extends('layouts.frontbase')

@section('title', 'Category List')


@section('content')
    <section class="section-property section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Home Category List</h2>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Main Page</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Category List
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($data as $rs)
                <div class="col-md-6">
                    <div class="card-box-d">
                        <div class="card-img-d">
                            <img src="{{Storage::url($rs->image)}}" alt="" class="img-a img-fluid">
                        </div>
                        <div class="card-overlay card-overlay-hover">
                            <div class="card-header-d">
                                <div class="card-title-d align-self-center">
                                    <h3 class="title-d">
                                        <a href="#" class="link-two">{{$rs->title}}</a>
                                    </h3>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


@endsection
