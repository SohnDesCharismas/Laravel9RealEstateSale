<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <img src="{{asset('assets')}}/admin/img/user.png" class="img-thumbnail"/>

                    <div class="inner-text">
                        {{ Auth::user()->name }}
                        <br>
                        <a href="/logoutuser" class="text-uppercase inner-text">Logout</a>
                        <br>
                        <small>Last Login : 2 Weeks Ago </small>
                    </div>
                </div>

            </li>

            <li>
                <a href="{{route('admin.index')}}" class="nav-link"><i class="fa fa-home"></i>Dashboard</a>
            </li>


            <li>
                <a href="{{route('admin.category.index')}}"><i class="fa-solid fa-folder-tree text-warning"></i>Categories</a>
            </li>

            <li>
                <a href="/admin/home"><i class="fa-solid fa-box-open text-success"></i>Homes</a>
            </li>

            <li>
                <a href="{{route('admin.comment.index')}}"><i class="fa-solid fa-comments"></i>Comments</a>
            </li>

            <li>
                <a href="{{route('admin.faq.index')}}"><i class="fa-solid fa-question text-danger"></i>FAQ</a>
            </li>

            <li>
                <a href="{{route('admin.message.index')}}"><i class="fa-solid fa-envelope text-info"></i>Messages</a>
            </li>

            <li>
                <a href="/admin/user"><i class="fa-solid fa-people-group text-warning"></i>Users</a>
            </li>




            <li class="nav-header" style="color: white;font-size: 20px;padding:15px;padding-top: 30px; ">LABELS</li>
            <li class="nav-item">
                <a href="{{route('admin.setting')}}" class="nav-link active-menu">
                    <i class="fa-solid fa-gear text-muted"></i>
                    Settings
                </a>
            </li>


        </ul>
    </div>

</nav>
<!-- /. NAV SIDE  -->
