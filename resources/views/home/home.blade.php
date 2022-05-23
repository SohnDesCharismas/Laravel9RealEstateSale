@extends('layouts.frontbase')

@section('title', $data->title)
<style>
    .sorange {
        color: orange;
    }
</style>

@section('content')

    <!--/ Intro Single star /-->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">{{$data->title}}</h1>
                        <span class="color-text-a">{{$data->city}}</span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Main Page</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="property-grid.html">{{$data->category->title}}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{$data->title}}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ Property Single Star /-->
    <section class="property-single nav-arrow-b">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    @include('home.messages')
                    <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
                        <div class="carousel-item-b">
                            <img src="{{Storage::url($data->image)}}">
                        </div>
                        @foreach($images as $rs)
                            <div class="carousel-item-b">
                                <img src="{{Storage::url($rs->image)}}">
                            </div>
                        @endforeach
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-md-5 col-lg-4">
                            <div class="property-price d-flex justify-content-center foo">
                                <div class="card-header-c d-flex">
                                    <div class="card-box-ico">
                                        <span class="ion-money">$</span>
                                    </div>
                                    <div class="card-title-c align-self-center">
                                        <h5 class="title-c">{{$data->price}}</h5>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="title-box-d">
                                        <h3 class="title-d">Property Description</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="property-description">
                                <p class="description color-text-a">
                                    {{$data->description}}
                                </p>
                            </div>
                            <div class="property-summary">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="title-box-d section-t4">
                                            <h3 class="title-d">Quick Summary</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="summary-list">
                                    <ul class="list">
                                        <li class="d-flex justify-content-between">
                                            <strong>Property ID:</strong>
                                            <span>{{$data->id}}</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Location:</strong>
                                            <span>{{$data->city}}</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Property Type:</strong>
                                            <span>{{$data->category->title}}</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Rooms:</strong>
                                            <span>{{$data->rooms}} + 1</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Area:</strong>
                                            <span>{{$data->area}}m<sup>2</sup></span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Baths:</strong>
                                            <span>{{$data->baths}}</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Garage:</strong>
                                            <span>{{$data->garage}}</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Heating:</strong>
                                            <span>{{$data->heating}}</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Furnished Stuff:</strong>
                                            <span>{{$data->furnished}}</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Floors:</strong>
                                            <span>{{$data->floors}}</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Age:</strong>
                                            <span>{{$data->age}}</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Dues:</strong>
                                            <span>{{$data->dues}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-7 section-md-t3">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="title-box-d">
                                        <h3 class="title-d">Property Detail</h3>
                                    </div>
                                </div>
                                <div class="property-description">
                                    <p class="description color-text-a">
                                        {!! $data->detail !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-10 offset-md-1">
                    <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-video-tab" data-toggle="pill" href="#pills-video"
                               role="tab"
                               aria-controls="pills-video" aria-selected="true">Video</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-plans-tab" data-toggle="pill" href="#pills-plans" role="tab"
                               aria-controls="pills-plans"
                               aria-selected="false">Floor Plans</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-map-tab" data-toggle="pill" href="#pills-map" role="tab"
                               aria-controls="pills-map"
                               aria-selected="false">Ubication</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-video" role="tabpanel"
                             aria-labelledby="pills-video-tab">
                            <iframe src="https://player.vimeo.com/video/73221098" width="100%" height="460"
                                    frameborder="0"
                                    webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                        <div class="tab-pane fade" id="pills-plans" role="tabpanel" aria-labelledby="pills-plans-tab">
                            <img src="img/plan2.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="tab-pane fade" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834"
                                width="100%" height="460" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row section-t3">
                        <div class="col-sm-12">
                            <div class="title-box-d">
                                <h3 class="title-d">Contact Agent</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <img src="img/agent-4.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="property-agent">
                                <h4 class="title-agent">Anabella Geller</h4>
                                <p class="color-text-a">
                                    Nulla porttitor accumsan tincidunt. Vestibulum ac diam sit amet quam vehicula
                                    elementum sed sit amet
                                    dui. Quisque velit nisi,
                                    pretium ut lacinia in, elementum id enim.
                                </p>
                                <ul class="list-unstyled">
                                    <li class="d-flex justify-content-between">
                                        <strong>Phone:</strong>
                                        <span class="color-text-a">(222) 4568932</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Mobile:</strong>
                                        <span class="color-text-a">777 287 378 737</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Email:</strong>
                                        <span class="color-text-a">annabella@example.com</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Skype:</strong>
                                        <span class="color-text-a">Annabela.ge</span>
                                    </li>
                                </ul>
                                <div class="socials-a">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fa fa-dribbble" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="property-contact">
                                <form class="form-a">
                                    <div class="row">
                                        <div class="col-md-12 mb-1">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg form-control-a"
                                                       id="inputName"
                                                       placeholder="Name *" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-1">
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-lg form-control-a"
                                                       id="inputEmail1"
                                                       placeholder="Email *" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-1">
                                            <div class="form-group">
                        <textarea id="textMessage" class="form-control" placeholder="Comment *" name="message" cols="45"
                                  rows="8" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-a">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <section class="section-testimonials section-t8 nav-arrow-a col-md-6">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="title-wrap d-flex justify-content-between">
                                        <div class="title-box">
                                            <h2 class="title-a">Testimonials</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="testimonial-carousel" class="owl-carousel owl-arrow owl-loaded owl-drag">


                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                         style="transform: translate3d(-930px, 0px, 0px); transition: all 0s ease 0s; width: 1860px;">
                                        @foreach($reviews as $rs)
                                            <div class="owl-item" style="width: 930px;">
                                                <div class="carousel-item-a">
                                                    <div class="testimonials-box">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-6">
                                                                <div class="testimonial-author-box">
                                                                    <img
                                                                        src="http://127.0.0.1:8000/assets/img/mini-testimonial-1.jpg"
                                                                        alt="" class="testimonial-avatar">
                                                                    <h5 class="testimonial-author">Emma &amp;
                                                                        Klaus</h5>
                                                                </div>
                                                                <br>
                                                                <div class="testimonials-content">
                                                                    <p>{{$rs->created_at}}</p>
                                                                </div>
                                                                <br>
                                                                <div class="testimonial-ico">
                                                                    <span class="ion-ios-quote"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-6">
                                                                <div class="testimonials-content">
                                                                    <p class="testimonial-text">
                                                                        @if ($rs->rate==0)
                                                                            <span class="fa fa-star"></span>
                                                                            <span class="fa fa-star"></span>
                                                                            <span class="fa fa-star"></span>
                                                                            <span class="fa fa-star"></span>
                                                                            <span class="fa fa-star"></span>
                                                                        @endif
                                                                        @if ($rs->rate==1)
                                                                            <span class="fa fa-star sorange"></span>
                                                                            <span class="fa fa-star"></span>
                                                                            <span class="fa fa-star"></span>
                                                                            <span class="fa fa-star"></span>
                                                                            <span class="fa fa-star"></span>
                                                                        @endif
                                                                        @if ($rs->rate==2)
                                                                            <span class="fa fa-star sorange"></span>
                                                                            <span class="fa fa-star sorange"></span>
                                                                            <span class="fa fa-star"></span>
                                                                            <span class="fa fa-star"></span>
                                                                            <span class="fa fa-star"></span>
                                                                        @endif
                                                                        @if ($rs->rate==3)
                                                                            <span class="fa fa-star sorange"></span>
                                                                            <span class="fa fa-star sorange"></span>
                                                                            <span class="fa fa-star sorange"></span>
                                                                            <span class="fa fa-star"></span>
                                                                            <span class="fa fa-star"></span>
                                                                        @endif
                                                                        @if ($rs->rate==4)
                                                                            <span class="fa fa-star sorange"></span>
                                                                            <span class="fa fa-star sorange"></span>
                                                                            <span class="fa fa-star sorange"></span>
                                                                            <span class="fa fa-star sorange"></span>
                                                                            <span class="fa fa-star"></span>
                                                                        @endif
                                                                        @if ($rs->rate==5)
                                                                            <span class="fa fa-star sorange"></span>
                                                                            <span class="fa fa-star sorange"></span>
                                                                            <span class="fa fa-star sorange"></span>
                                                                            <span class="fa fa-star sorange"></span>
                                                                            <span class="fa fa-star sorange"></span>
                                                                        @endif
                                                                    </p>
                                                                </div>
                                                                <div class="testimonials-content">
                                                                    <br>
                                                                    <p><strong>{{$rs->subject}}</strong></p>
                                                                    <p class="testimonial-text">
                                                                        {{$rs->review}}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="owl-nav">
                                    <button type="button" role="presentation" class="owl-prev"><i
                                            class="ion-ios-arrow-back" aria-hidden="true"></i></button>
                                    <button type="button" role="presentation" class="owl-next disabled"><i
                                            class="ion-ios-arrow-forward" aria-hidden="true"></i></button>
                                </div>
                                <div class="owl-dots">
                                    <button role="button" class="owl-dot"><span></span></button>
                                    <button role="button" class="owl-dot active"><span></span></button>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="col-md-6">
                        <br><br><br><br>
                        <h4 class="text-uppercase">Write Your Review</h4>
                        <p>Your email address will not be published.</p>
                        <form class="review-form" action="{{route('storecomment')}}" method="post">
                            @csrf
                            <input type="hidden" class="input" name="home_id" value="{{$data->id}}">
                            <div class="form-group">
                                <input type="text" class="input" name="subject" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <textarea class="input" name="review" placeholder="Your Review"></textarea>
                            </div>
                            <div class="form-group">
                                <strong class="text-uppercase">Your Rating: </strong>
                                <div class="stars">
                                    <input class="star star-5" id="star-5" type="radio" name="rate" value="5"/>
                                    <label class="star star-5" for="star-5"></label>
                                    <input class="star star-4" id="star-4" type="radio" name="rate" value="4"/>
                                    <label class="star star-4" for="star-4"></label>
                                    <input class="star star-3" id="star-3" type="radio" name="rate" value="3"/>
                                    <label class="star star-3" for="star-3"></label>
                                    <input class="star star-2" id="star-2" type="radio" name="rate" value="2"/>
                                    <label class="star star-2" for="star-2"></label>
                                    <input class="star star-1" id="star-1" type="radio" name="rate" value="1"/>
                                    <label class="star star-1" for="star-1"></label>
                                </div>
                            </div>
                            <button class="primary-btn">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Property Single End /-->

@endsection
