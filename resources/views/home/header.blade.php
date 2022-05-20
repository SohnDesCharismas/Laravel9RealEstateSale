<!--/ Nav Star /-->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <a class="navbar-brand text-brand" href="#">Real<span
                class="color-b"> Estate</span></a>
        <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none"
                data-toggle="collapse"
                data-target="#navbarTogglerDemo01" aria-expanded="false">
            <span class="fa fa-search" aria-hidden="true"></span>
        </button>
        <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('references')}}">References</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Home Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{asset('assets')}}/blog-single.html">Villa</a>
                        <a class="dropdown-item" href="{{asset('assets')}}/agents-grid.html">Apartment</a>
                        <a class="dropdown-item" href="{{asset('assets')}}/agent-single.html">Frame House</a>
                        <a class="dropdown-item" href="{{asset('assets')}}/agent-single.html">Ranch House</a>
                        <a class="dropdown-item" href="{{asset('assets')}}/agent-single.html">Pavilion</a>
                        <a class="dropdown-item" href="{{asset('assets')}}/agent-single.html">Detached House</a>
                        <a class="dropdown-item" href="{{asset('assets')}}/agent-single.html">Prefabric House</a>
                        <a class="dropdown-item" href="{{asset('assets')}}/agent-single.html">Stone House</a>
                        <a class="dropdown-item" href="{{asset('assets')}}/agent-single.html">Mansion</a>
                    </div>

                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{asset('assets')}}/blog-grid.html">Blog</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Others
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{asset('assets')}}/blog-single.html">Blog Single</a>
                        <a class="dropdown-item" href="{{asset('assets')}}/agents-grid.html">Agents Grid</a>
                        <a class="dropdown-item" href="{{asset('assets')}}/agent-single.html">Agent Single</a>
                        <a class="dropdown-item" href="{{route('faq')}}">FAQ</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
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
