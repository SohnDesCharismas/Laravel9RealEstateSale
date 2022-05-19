<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <img src="{{asset('assets')}}/admin/img/user.png" class="img-thumbnail"/>

                    <div class="inner-text">
                        Jhon Deo Alex
                        <br/>
                        <small>Last Login : 2 Weeks Ago </small>
                    </div>
                </div>

            </li>

            <li>
                <a href="{{route('admin.index')}}" class="nav-link"><i class="fa fa-home"></i>Dashboard</a>
            </li>

            <li>
                <a href="index.html"><i class="fa-solid fa-align-justify text-info"></i>Orders<span
                        class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i>New Orders</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o" style="color: yellow"></i>Accepted Orders</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o" style="color: green"></i>Completed Orders</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o" style="color: red"></i>Cancelled Orders</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="{{route('admin.category.index')}}"><i class="fa-solid fa-folder-tree text-warning"></i>Categories</a>
            </li>

            <li>
                <a href="/admin/home"><i class="fa-solid fa-box-open text-success"></i>Homes</a>
            </li>

            <li>
                <a href="/admin/comment"><i class="fa-solid fa-comments"></i>Comments</a>
            </li>

            <li>
                <a href="/admin/faq"><i class="fa-solid fa-question text-danger"></i>FAQ</a>
            </li>

            <li>
                <a href="{{route('admin.message.index')}}"><i class="fa-solid fa-envelope text-info"></i>Messages</a>
            </li>

            <li>
                <a href="/admin/user"><i class="fa-solid fa-people-group text-warning"></i>Users</a>
            </li>

            <li>
                <a href="/admin/social"><i class="fa-solid fa-icons text-danger"></i>Social</a>
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
