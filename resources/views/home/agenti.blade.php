@extends('layouts.frontbase')

@section('title','Agent İsmail Acar')

@section('content')
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">İsmail Acar</h1>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="/agents">Agents</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                İsmail Acar
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="agent-single">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="agent-avatar-box">
                                <img src="{{asset('assets')}}/img/i1.jpg" alt="" class="agent-avatar img-fluid">
                            </div>
                        </div>
                        <div class="col-md-5 section-md-t3">
                            <div class="agent-info-box">
                                <div class="agent-title">
                                    <div class="title-box-d">
                                        <h3 class="title-d">İsmail
                                            <br> Acar</h3>
                                    </div>
                                </div>
                                <div class="agent-content mb-3">
                                    <p class="content-d color-text-a">
                                        Working as a real estate agent or broker can be fulfilling and financially rewarding, but it’s not easy.
                                        A career in real estate requires drumming up business, promoting yourself, tracking leads, handling complex paperwork, providing customer service, and much, much more.
                                        Most real estate agents are paid on a commission-only basis, so there is the potential of working without a paycheck.
                                    </p>
                                    <div class="info-agents color-a">
                                        <p>
                                            <strong>Phone: </strong>
                                            <span class="color-text-a">+905536868494 </span>
                                        </p>
                                        <p>
                                            <strong>Mobile: </strong>
                                            <span class="color-text-a"> 999 123 456 789</span>
                                        </p>
                                        <p>
                                            <strong>Email: </strong>
                                            <span class="color-text-a"> mor-bamya@hotmail.com</span>
                                        </p>
                                        <p>
                                            <strong>skype: </strong>
                                            <span class="color-text-a"> İsmail.Es</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="socials-footer">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="#" class="link-one">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="link-one">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="link-one">
                                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="link-one">
                                                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="link-one">
                                                <i class="fa fa-dribbble" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
