@extends('backend.master')

@section('title', '系统管理 - 菜单管理')

@section('admin-css')
    <!-- Custom Theme Style -->
    <link href="/backend_admin/build/css/custom.min.css" rel="stylesheet">
@endsection

@section('admin-content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">系统管理</a></li>
                    <li class="active">菜单管理</li>
                </ol>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>菜单列表</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="x_title">
                            <form class="form-horizontal form-label-left">
                                <div class="col-md-3 col-sm-5">
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">关键字:</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" class="form-control" placeholder="请输入关键字">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">选择</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <select class="form-control">
                                                <option>选择选项</option>
                                                <option>选项一</option>
                                                <option>选项二</option>
                                                <option>选项三</option>
                                                <option>选项四</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-5">
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">时间范围</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <div class="control-group">
                                                <div class="controls">
                                                    <div class="input-prepend input-group">
                                                        <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                                        <input type="text" name="rangetime" id="rangeTime" class="form-control" value="{{ isset($param['rangetime']) ? $param['rangetime'] : '' }}" readonly/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="关键字搜索...">
                                        <span class="input-group-btn">
                                                <button class="btn btn-default" type="button">搜索</button>
                                            </span>
                                    </div>
                                </div>
                                <div class="col-md-1 col-sm-1">
                                    <a href="/admin/roleModify" class="btn btn-info"><i class="fa fa-plus"></i> 新增</a>
                                </div>
                            </form>
                            <div class="clearfix"></div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                <tr class="headings">
                                    <th>
                                        <input type="checkbox" id="check-all" class="flat">
                                    </th>
                                    <th class="column-title">发票 </th>
                                    <th class="column-title">发票日期 </th>
                                    <th class="column-title">订购 </th>
                                    <th class="column-title">姓名 </th>
                                    <th class="column-title">状态 </th>
                                    <th class="column-title">费用 </th>
                                    <th class="column-title no-link last"><span class="nobr">操作</span>
                                    </th>
                                    <th class="bulk-actions" colspan="7">
                                        <a class="antoo" style="color:#fff; font-weight:500;">批量操作 ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                    </th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr class="even pointer">
                                    <td class="a-center ">
                                        <input type="checkbox" class="flat" name="table_records">
                                    </td>
                                    <td class=" ">121000040</td>
                                    <td class=" ">May 23, 2014 11:47:56 PM </td>
                                    <td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
                                    <td class=" ">John Blank L</td>
                                    <td class=" ">Paid</td>
                                    <td class="a-right a-right ">$7.45</td>
                                    <td class=" last">
                                        <a href="{{ URL('/admin/modelsModify') }}"
                                           class="btn btn-info  btn-xs"><i class="fa fa-pencil"></i> 编辑</a>
                                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> 删除</a>
                                    </td>
                                </tr>
                                <tr class="odd pointer">
                                    <td class="a-center ">
                                        <input type="checkbox" class="flat" name="table_records">
                                    </td>
                                    <td class=" ">121000039</td>
                                    <td class=" ">May 23, 2014 11:30:12 PM</td>
                                    <td class=" ">121000208 <i class="success fa fa-long-arrow-up"></i>
                                    </td>
                                    <td class=" ">John Blank L</td>
                                    <td class=" ">Paid</td>
                                    <td class="a-right a-right ">$741.20</td>
                                    <td class=" last"><a href="#">View</a>
                                    </td>
                                </tr>
                                <tr class="even pointer">
                                    <td class="a-center ">
                                        <input type="checkbox" class="flat" name="table_records">
                                    </td>
                                    <td class=" ">121000038</td>
                                    <td class=" ">May 24, 2014 10:55:33 PM</td>
                                    <td class=" ">121000203 <i class="success fa fa-long-arrow-up"></i>
                                    </td>
                                    <td class=" ">Mike Smith</td>
                                    <td class=" ">Paid</td>
                                    <td class="a-right a-right ">$432.26</td>
                                    <td class=" last"><a href="#">View</a>
                                    </td>
                                </tr>
                                <tr class="odd pointer">
                                    <td class="a-center ">
                                        <input type="checkbox" class="flat" name="table_records">
                                    </td>
                                    <td class=" ">121000037</td>
                                    <td class=" ">May 24, 2014 10:52:44 PM</td>
                                    <td class=" ">121000204</td>
                                    <td class=" ">Mike Smith</td>
                                    <td class=" ">Paid</td>
                                    <td class="a-right a-right ">$333.21</td>
                                    <td class=" last"><a href="#">View</a>
                                    </td>
                                </tr>
                                <tr class="even pointer">
                                    <td class="a-center ">
                                        <input type="checkbox" class="flat" name="table_records">
                                    </td>
                                    <td class=" ">121000040</td>
                                    <td class=" ">May 24, 2014 11:47:56 PM </td>
                                    <td class=" ">121000210</td>
                                    <td class=" ">John Blank L</td>
                                    <td class=" ">Paid</td>
                                    <td class="a-right a-right ">$7.45</td>
                                    <td class=" last"><a href="#">View</a>
                                    </td>
                                </tr>
                                <tr class="odd pointer">
                                    <td class="a-center ">
                                        <input type="checkbox" class="flat" name="table_records">
                                    </td>
                                    <td class=" ">121000039</td>
                                    <td class=" ">May 26, 2014 11:30:12 PM</td>
                                    <td class=" ">121000208 <i class="error fa fa-long-arrow-down"></i>
                                    </td>
                                    <td class=" ">John Blank L</td>
                                    <td class=" ">Paid</td>
                                    <td class="a-right a-right ">$741.20</td>
                                    <td class=" last"><a href="#">View</a>
                                    </td>
                                </tr>
                                <tr class="even pointer">
                                    <td class="a-center ">
                                        <input type="checkbox" class="flat" name="table_records">
                                    </td>
                                    <td class=" ">121000038</td>
                                    <td class=" ">May 26, 2014 10:55:33 PM</td>
                                    <td class=" ">121000203</td>
                                    <td class=" ">Mike Smith</td>
                                    <td class=" ">Paid</td>
                                    <td class="a-right a-right ">$432.26</td>
                                    <td class=" last"><a href="#">View</a>
                                    </td>
                                </tr>
                                <tr class="odd pointer">
                                    <td class="a-center ">
                                        <input type="checkbox" class="flat" name="table_records">
                                    </td>
                                    <td class=" ">121000037</td>
                                    <td class=" ">May 26, 2014 10:52:44 PM</td>
                                    <td class=" ">121000204</td>
                                    <td class=" ">Mike Smith</td>
                                    <td class=" ">Paid</td>
                                    <td class="a-right a-right ">$333.21</td>
                                    <td class=" last"><a href="#">View</a>
                                    </td>
                                </tr>

                                <tr class="even pointer">
                                    <td class="a-center ">
                                        <input type="checkbox" class="flat" name="table_records">
                                    </td>
                                    <td class=" ">121000040</td>
                                    <td class=" ">May 27, 2014 11:47:56 PM </td>
                                    <td class=" ">121000210</td>
                                    <td class=" ">John Blank L</td>
                                    <td class=" ">Paid</td>
                                    <td class="a-right a-right ">$7.45</td>
                                    <td class=" last"><a href="#">View</a>
                                    </td>
                                </tr>
                                <tr class="odd pointer">
                                    <td class="a-center ">
                                        <input type="checkbox" class="flat" name="table_records">
                                    </td>
                                    <td class=" ">121000039</td>
                                    <td class=" ">May 28, 2014 11:30:12 PM</td>
                                    <td class=" ">121000208</td>
                                    <td class=" ">John Blank L</td>
                                    <td class=" ">Paid</td>
                                    <td class="a-right a-right ">$741.20</td>
                                    <td class=" last"><a href="#">View</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <nav aria-label="Page navigation">
                                <ul class="pagination" style="float: right;">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('admin-js')
    <!-- bootstrap-daterangepicker -->
    <script src="/backend_admin/vendors/bootstrap-daterangepicker/moment-zh-CN.js"></script>
    <script src="/backend_admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="/backend_admin/build/js/custom.min.js"></script>
@endsection