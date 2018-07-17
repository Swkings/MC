<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mui.min.css') }}" rel="stylesheet">
    <style type="text/css">
        body{
            background-image: url({{ asset('img/bg6.jpg') }});
            background-size: cover;
        }
        .container{
            /*background-color: #feeeed;*/
            background-color: rgba(254,238,237,0.7);
        }
        .linehight>div>div,.userlist>div,.linehight>label{
            margin-top: 30px;
        }
        /*.linehight>label{*/
            /*margin-top: 30px;*/
        /*}*/

        #footer{
            text-align: center;
            background-color: #c1a98f;
        }
        #footer>div>div>button{
            margin-top: 0;
            margin-bottom: 0;
            background-color: #c1a98f;
        }
        .userlist{
            background-color: rgba(254,238,237,0.7);
        }
        .userlist>div:nth-of-type(1){
            /*margin-top: 10px;*/
            /*padding-top: 10px;*/
            /*padding-bottom: 10px;*/
            /*height: 50px;*/
            margin-top: 0px;
        }
        /*.userlist>div:nth-of-type(odd){*/
            /*background-color: #f7e1b5;*/
        /*}*/
        /*.userlist>div:nth-of-type(even){*/
            /*background-color: #f2dede;*/
        /*}*/
        .checkbox>div>input{
            width: 20px;
            height: 20px;
        }
        .checkbox+button{
            width: 80px;
            height: 30px;
            margin-left: 50%;
            left:-30px;
        }
    </style>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{--{{ config('app.name', 'Laravel') }}--}}
                    Magic
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right" >
                    <!-- Authentication Links -->
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown" >
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

</div>
<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation" id="footer">
    <div class="container container-fluid">
        <div class="nav navbar-nav row">
            <button class="col-xs-4 col-sm-4" id="list">今日报表</button>
            <button class="col-xs-4 col-sm-4" id="mark">新建打卡</button>
            <button class="col-xs-4 col-sm-4" id="usercenter">个人中心</button>
        </div>
    </div>
</nav>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/mui.min.js') }}"></script>
<script>
    // function resize() {
    //     var width = document.body.clientWidth;
    //     var height = window.innerHeight;
    //     var elemHeight = document.getElementById("app").offsetHeight
    //     $('.container').css({
    //         'width': width + 'px',
    //         'height': height/2  + 'px',
    //     });
    //     $('body').css({
    //         'width': width + 'px',
    //         'height': height + 'px',
    //     });
    //     $('#footer').css({
    //         'margin-top': height-elemHeight-45 + 'px'
    //     });
    //
    // }
    //
    // $(window).resize(function() {
    //     resize();
    // });
    // resize();
    $('#usercenter').click(function (ev) { window.location = '/user' });
    $('#list').click(function (ev) { window.location = '/home' });
    $('#mark').click(function (ev) { window.location = '/create' });

</script>
</body>
</html>
