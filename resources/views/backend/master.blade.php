<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', '后端管理系统')</title>

    <!-- Bootstrap -->
    <link href="/backend_admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/backend_admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/backend_admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="/backend_admin/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>
    <!-- iCheck -->
    <link href="/backend_admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">


    @yield('admin-css')

</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="/backend_admin/build/images/avatar_1.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>欢迎您,</span>
                        <h2>超级管理员</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />
                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>菜单栏</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="index.html">Dashboard</a></li>
                                    <li><a href="index2.html">Dashboard2</a></li>
                                    <li><a href="index3.html">Dashboard3</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-bullhorn"></i>党建公告 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#">党建要闻</a></li>
                                    <li><a href="#">通知公告</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-question"></i>党务助手 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#">规章制度</a></li>
                                    <li><a href="#">文件精神</a></li>
                                    <li><a href="#">党务解读</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-group"></i>“e”支部 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#">党员管理</a></li>
                                    <li><a href="#">谈心谈话记录</a></li>
                                    <li><a href="#">学习园地</a></li>
                                    <li><a href="#">全年工作计划</a></li>
                                    <li><a href="#">党员大会</a></li>
                                    <li><a href="#">支委会</a></li>
                                    <li><a href="#">党小组会</a></li>
                                    <li><a href="#">党课教育</a></li>
                                    <li><a href="#">专题组织生活会</a></li>
                                    <li><a href="#">党员参加轮训</a></li>
                                    <li><a href="#">党员接受电化教育</a></li>
                                    <li><a href="#">民主评议党员</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-comments"></i>话题交流 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#">话题交流</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-envelope"></i>书记信箱 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#">书记信箱</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-gears"></i>系统管理 <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="#">支部管理</a></li>
                                    <li><a href="#">用户管理</a></li>
                                    <li><a href="#">角色管理</a></li>
                                    <li><a href="#">账户管理</a></li>
                                    <li><a href="#">部门积分</a></li>
                                    <li><a href="#">人员积分</a></li>
                                    <li><a href="#">积分明细</a></li>
                                    <li><a href="#">数据统计</a></li>
                                    <li><a href="{{ url('/meun') }}">菜单管理</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="/backend_admin/build/images/avatar_1.jpg" alt="">超级管理员
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;"> 简介</a></li>
                                <li><a href="javascript:;">修改密码</a></li>
                                <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> 退 出</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            @yield('admin-content')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="/backend_admin/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/backend_admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="/backend_admin/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="/backend_admin/vendors/nprogress/nprogress.js"></script>
<!-- jQuery custom content scroller -->
<script src="/backend_admin/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- iCheck -->
<script src="/backend_admin/vendors/iCheck/icheck.min.js"></script>
<!-- Vue.js -->
<script src="/js/vue.js"></script>
<!-- Vue-axios -->
<script src="/backend_admin/vendors/axios/dist/axios.min.js"></script>


@yield('admin-js')

</body>
</html>
