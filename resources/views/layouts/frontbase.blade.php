<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield("title")</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="@yield("keywords")" name="keywords">
    <meta content="@yield("description")" name="description">
    <meta content="Ismail Acar" name="author">
    <link rel="icon" type="image/x-icon" href="@yield("icon")">


    <!-- https://jqueryui.com/accordion/ -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">

    <!-- Favicons -->
    <link href="{{asset('assets')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('assets')}}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('assets')}}/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">

    <!-- =======================================================
      Theme Name: EstateAgency
      Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
    ======================================================= -->


    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Star CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <style>
        div.stars {
            width: 270px;
            display: inline-block;
        }
        input.star { display: none; }
        label.star {
            float: right;
            padding: 10px;
            font-size: 36px;
            color: #444;
            transition: all .2s;
        }
        input.star:checked ~ label.star:before {
            content: '\f005';
            color: #FD4;
            transition: all .25s;
        }
        input.star-5:checked ~ label.star:before {
            color: #FE7;
            text-shadow: 0 0 20px #952;
        }
        input.star-1:checked ~ label.star:before { color: #F62; }
        label.star:hover { transform: rotate(-15deg) scale(1.3); }
        label.star:before {
            content: '\f006';
            font-family: FontAwesome;
        }
    </style>
    <!-- /Star CSS -->
    @yield("head")

</head>

<body>
@include("home.header")


@section('sidebar')
    @include("home.sidebar")
@show

@section('slider')
@show

@yield('content')

@include("home.footer")
@yield('foot')
</body>
</html>
