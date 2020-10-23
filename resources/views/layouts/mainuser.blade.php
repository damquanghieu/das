<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{config('app.name')}} | @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @yield('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3">
                <div class="d-flex">
                    <div class="image">
                        <img src="" class="avatar img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block name-admin"></a>
                    </div>
                </div>
            </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                    <li class="nav-item">
                        <a href="#" class="nav-link " data-toggle="modal"  data-target="#modal-sm-pass">
                            <i class="nav-icon fas fa-key text-white"></i>
                            <p>
                                Đổi mật khẩu
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link logout" >
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>
                                Đăng xuất
                            </p>
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

@yield('content')

<!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.0.4
        </div>
    </footer>
    <!--    Modal password change-->
    <!--    modal-->
    <div class="modal fade" id="modal-sm-pass">
        <div class="modal-dialog">
            <form class="modal-content" name="change-password">
                <div class="modal-header">
                    <h4 class="modal-title">Đổi mật khẩu</h4>
                    <input type="hidden" name="id" value="">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row" name="edit-password">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="username" class="col-sm-5 col-form-label">Tài khoản</label>
                                <div class="col-sm-7">
                                    <input type="text" required name="username" class="form-control" id="username" placeholder="Nhập tài khoản cũ" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="oldpassword" class="col-sm-5 col-form-label">Mật khẩu cũ</label>
                                <div class="col-sm-7">
                                    <input type="text" required name="oldpassword" class="form-control" id="oldpassword" placeholder="Nhập mật khẩu cũ" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="newpassword" class="col-sm-5 col-form-label">Mật khẩu mới</label>
                                <div class="col-sm-7">
                                    <input type="text" required name="newpassword" class="form-control" id="newpassword" placeholder="Mật khẩu mới" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="confirmnewpassword" class="col-sm-5 col-form-label">Xác nhận mật khẩu mới</label>
                                <div class="col-sm-7">
                                    <input type="text" required name="confirmnewpassword" class="form-control" id="confirmnewpassword" placeholder="Nhập lại mật khẩu mới" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary" id="save-pass">Lưu</button>
                </div>
            </form>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <div class="modal fade" id="modal-sm-reg">
        <div class="modal-dialog">
            <form class="modal-content" name="register">
                <div class="modal-header">
                    <h4 class="modal-title">Đăng ký tài khoản</h4>
                    <input type="hidden" name="id" value="">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row" name="edit-password">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="username" class="col-sm-5 col-form-label">Họ và tên</label>
                                <div class="col-sm-7">
                                    <input type="text" required name="fullnamereg" class="form-control" placeholder="Nhập tên đầy đủ" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="username" class="col-sm-5 col-form-label">Tài khoản</label>
                                <div class="col-sm-7">
                                    <input type="text" required name="usernamereg" class="form-control" placeholder="Nhập tài khoản cũ" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="oldpassword" class="col-sm-5 col-form-label">Mật khẩu</label>
                                <div class="col-sm-7">
                                    <input type="text" required name="passwordreg" class="form-control" placeholder="Nhập mật khẩu" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="confirmnewpassword" class="col-sm-5 col-form-label">Xác nhận mật khẩu mới</label>
                                <div class="col-sm-7">
                                    <input type="text" required name="confirmpasswordreg" class="form-control" placeholder="Nhập lại mật khẩu" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="username" class="col-sm-4 col-form-label">Quyền</label>
                                <div class="col-sm-7">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="admin" value="10" name="permission">
                                        <label for="admin" class="custom-control-label">Admin</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="user" value="1" name="permission">
                                        <label for="user" class="custom-control-label">User</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="username" class="col-sm-4 col-form-label">Quốc gia</label>
                                <div class="col-sm-7">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="JP11" value="JP" name="address">
                                        <label for="JP11" class="custom-control-label">JP</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="US11" value="US" name="address">
                                        <label for="US11" class="custom-control-label">US</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary" id="save-passreg">Lưu</button>
                </div>
            </form>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
</div>
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../dist/js/demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- Toastr -->
<script src="../plugins/toastr/toastr.min.js"></script>
<script>
    $(function(){
        if (!$info['token']){
            window.location("login");
        }
        $.ajax({
            url     :'http://45.76.153.75:403/api/checktoken',
            type    :'post',
            data    : {
                token           : $info['token']
            },
            success: function(data){
                console.log(data.message);
            },
            error : function(data){
                window.location("login");
            }
        })
    })

    $info = JSON.parse(Cookies.get('info'));
    $('.name-admin').text($info.full_name);
    $('.avatar').attr('src',$info.avatar);
    /////cick luu thay mat khau
    $("form[name=change-password]").submit(function(e) {
        e.preventDefault();
        let checkold = 0,checknew = 0,checkconfirm = 0;
        if ($('input[name=oldpassword]').val() == ''){
            $('input[name=oldpassword]').addClass('is-invalid');
            checkold=0;
        }else {
            $('input[name=oldpassword]').removeClass('is-invalid');
            $('input[name=oldpassword]').addClass('is-valid');
            checkold = 1;
        }

        if ($('input[name=newpassword]').val() == ''){
            $('input[name=newpassword]').addClass('is-invalid');
            checknew = 0;
        }else {
            $('input[name=newpassword]').removeClass('is-invalid');
            $('input[name=newpassword]').addClass('is-valid');
            checknew = 1;
        }

        if ($('input[name=confirmnewpassword]').val() == ''){
            $('input[name=confirmnewpassword]').addClass('is-invalid');
            checkconfirm = 0;
        }else if($('input[name=confirmnewpassword]').val() != $('input[name=newpassword]').val()){
            $('input[name=confirmnewpassword]').addClass('is-invalid');
            checkconfirm = 0;
        }else if ($('input[name=confirmnewpassword]').val() == $('input[name=newpassword]').val()) {
            $('input[name=confirmnewpassword]').removeClass('is-invalid');
            $('input[name=confirmnewpassword]').addClass('is-valid');
            checkconfirm = 1;
        }
        if (checkconfirm == 1 && checknew == 1 && checkold == 1){
            $user           =   $('input[name=username]').val();
            $password       =   $('input[name=oldpassword]').val();
            $newpassword    =   $('input[name=confirmnewpassword]').val();
            $token          =   $info['token'];
            $.ajax({
                url     :'http://45.76.153.75:403/api/change-password',
                type    :'post',
                data    : {
                    username        : $user,
                    password        : $password,
                    newpassword     : $newpassword,
                    token           : $token
                },
                success : function(data){
                    swal({
                        title: "Thành công!",
                        text: data.message,
                        icon: "success",
                        button: "Ok!",
                    });
                    $('#modal-sm-pass').hide();
                }
            })
        }
    });
    ///// logout
    $(".logout").click(function(){
        $token          =   $info['token'];
        $.ajax({
            url     :'http://45.76.153.75:403/api/logout',
            type    :'post',
            data    : {
                token           : $token,
            },
            success : function(data){
                console.log(data.message);
                if (data.message == "Đăng xuất thành công!"){
                    Cookies.remove('info');
                    window.location = origin+"/login";
                }
            }
        })
    });
</script>
@yield('js')
</body>
</html>
