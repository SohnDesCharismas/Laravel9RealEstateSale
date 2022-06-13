@php
    $mainCategories= \App\Http\Controllers\HomeController::maincategoryList();
@endphp

<style>
    @media (min-width: 992px) {
        .dropdown-menu .dropdown-toggle:after {
            border-top: .3em solid transparent;
            border-right: 0;
            border-bottom: .3em solid transparent;
            border-left: .3em solid;
        }

        .dropdown-menu .dropdown-menu {
            margin-left: 0;
            margin-right: 0;
        }

        .dropdown-menu li {
            position: relative;
        }

        .nav-item .submenu {
            display: none;
            position: absolute;
            left: 100%;
            top: -7px;
        }

        .nav-item .submenu-left {
            right: 100%;
            left: auto;
        }

        .dropdown-menu > li:hover {
            background-color: #f1f1f1
        }

        .dropdown-menu > li:hover > .submenu {
            display: block;
        }
    }
</style>
<!--/ Nav Star /-->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <a class="navbar-brand text-brand" href="/">Real<span
                class="color-b"> Estate</span></a>
        <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none"
                data-toggle="collapse"
                data-target="#navbarTogglerDemo01" aria-expanded="false">
            <span class="fa fa-search" aria-hidden="true"></span>
        </button>
        <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('references')}}">Reference</a>

                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Categories</a>

                    <ul class="dropdown-menu">
                        @foreach($mainCategories as $rs)
                            <li><a class="dropdown-item"
                                   href="/categoryhomes/{{$rs->id}}/{{$rs->title}}"> {{$rs->title}}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Others
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/agents">Agents Grid</a>
                        <a class="dropdown-item" href="{{route('faq')}}">FAQ</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    @guest
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <i class="fa-solid fa-user fa-sm" style="color: #00CA79"></i>
                            Log/Reg
                        </a>
                    @endguest
                    @auth
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="fa-solid fa-user fa-sm" style="color: #00CA79"></i>{{Auth::user()->name}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('userpanel.index')}}">My Account</a>
                            <a class="dropdown-item" href="">My Wishlist</a>
                            <a class="dropdown-item" href="">Compare</a>
                            <a class="dropdown-item" href="">Checkout</a>
                            <a class="dropdown-item" href="/logoutuser">Log out</a>
                        </div>
                    @endauth
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        @guest
                            <a class="dropdown-item" href="/loginuser">Login</a>
                            <a class="dropdown-item" href="/registeruser">Register</a>
                        @endguest
                    </div>
                </li>
            </ul>
        </div>
        <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
                data-target="#navbarTogglerDemo01" aria-expanded="false">
            <span class="fa fa-search" aria-hidden="true"></span>
        </button>
    </div>
</nav>
<!--/ Nav End /-->
