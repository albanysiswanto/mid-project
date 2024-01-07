<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Create User</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layouts.style')
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-search"></i></span></a>
                                <div role="menu" class="dropdown-menu search-dd animated flipInX">
                                    <div class="search-input">
                                        <i class="notika-icon notika-left-arrow"></i>
                                        <input type="text" />
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-support"></i></span></a>
                                <div role="menu" class="dropdown-menu message-dd animated zoomIn">
                                    <div class="hd-message-info hd-mg-va">
                                        <a href="#">Profile</a>
                                    </div>
                                    <div class="align-center mg-tb-8 justify-content-center">
                                        <form action="{{ route('signOut') }}" method="POST">
                                            @csrf
                                            <button class="btn btn-danger" type="submit">Logout</button>
                                        </form>

                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->

    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class="active"><a data-toggle="tab" href="#Home"><i class="notika-icon notika-app"></i> Dashboard</a>
                        </li>
                        <li><a data-toggle="tab" href="#Page"><i class="notika-icon notika-support"></i> View User</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{route('dashboard')}}">Dashboard</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Page" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="{{route('showCreateUser')}}">Create Users</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->

    <!-- Form Examples area start-->
    <div class="form-example-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap">
                        <div class="cmp-tb-hd">
                            <h2>Create User</h2>
                            <p>Mohon mengisi formulir input pengguna dengan cermat dan benar untuk memastikan bahwa informasi yang disediakan akurat dan dapat diproses dengan baik. Pastikan setiap kolom diisi sesuai dengan petunjuk di bawah ini untuk memastikan keberhasilan dalam pembuatan akun pengguna.</p>
                        </div>
                        <form action="{{route('update', $student->id)}}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Firt Name</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" value="{{ $student->firstName }}" name="firstName">
                                    </div>
                                </div>
                            </div>
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>List Name</label>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control input-sm" value="{{ $student->lastName }}" name="lastName">
                                    </div>
                                </div>
                            </div>
                            <div class="form-example-int">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <div class="nk-int-st">
                                        <input type="email" class="form-control input-sm" value="{{ $student->email }}" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-example-int mg-t-15">
                                <div class="form-group">
                                    <label>Bio</label>
                                    <div class="nk-int-st">
                                        <textarea name="bio" cols="100" rows="0">{{ $student->bio }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-example-int mg-t-15">
                                <button type="submit" class="btn btn-success notika-btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Examples area End-->

    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p style="font-size: 14px"> Made By: Albany Siswanto</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->

    @include('layouts.script')
</body>

</html>


