<header class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="col-md-offset-1 col-md-10">
            <a href="{{ route('home') }}" id="logo">Sample App</a>
            <nav>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())
                        <li><a href="#">用户列表</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">{{ Auth::user()->name }} <span  class="caret"></span >
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('users.show', Auth::user()->id) }}">个人中心</a></li>
                                <li><a href="#">编辑资料</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">
                                        <form method="DELETE" action="{{ route('logout') }}">
                                            {{ csrf_field() }}
                                            <button class="btn btn-block btn-danger" type="submit">退出登录</button>
                                        </form>
                                    </a></li>
                            </ul>
                        </li>
                    @else
                        <li><a href="{{ route('help') }}">帮助</a></li>
                        <li><a href="{{ route('login') }}">登录</a></li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</header>