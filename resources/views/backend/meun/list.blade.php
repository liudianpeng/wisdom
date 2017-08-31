@extends('backend.master')

@section('title', '系统管理 - 菜单管理')

@section('admin-css')
    <!-- Custom Theme Style -->
    <link href="/backend_admin/build/css/custom.min.css" rel="stylesheet">

    <style>
        .pagination li {
            cursor: context-menu;
        }
    </style>
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

        <div class="row" id="meun_model_list">
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
                                                        <span class="add-on input-group-addon"><i
                                                                    class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                                        <input type="text" name="rangetime" id="rangeTime"
                                                               class="form-control"
                                                               value="{{ isset($param['rangetime']) ? $param['rangetime'] : '' }}"
                                                               readonly/>
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
                                                <button class="btn btn-default" type="button" v-on:click="search()">搜索</button>
                                            </span>
                                    </div>
                                </div>
                                <div class="col-md-1 col-sm-1">
                                    <a data-toggle="modal" data-target="#exampleModal" class="btn btn-info"><i class="fa fa-plus"></i> 新增</a>
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
                                    <th class="column-title">发票</th>
                                    <th class="column-title">发票日期</th>
                                    <th class="column-title">订购</th>
                                    <th class="column-title">姓名</th>
                                    <th class="column-title">状态</th>
                                    <th class="column-title">费用</th>
                                    <th class="column-title no-link last"><span class="nobr">操作</span>
                                    </th>
                                    <th class="bulk-actions" colspan="7">
                                        <a class="antoo" style="color:#fff; font-weight:500;">批量操作 ( <span
                                                    class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                    </th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr class="even pointer" v-for="item in meunModel">
                                    <td class="a-center ">
                                        <input type="checkbox" class="flat" name="table_records">
                                    </td>
                                    <td class=" ">@{{ item.numberID }}</td>
                                    <td class=" ">@{{ item.numberDate }}</td>
                                    <td class=" ">@{{ item.num }} <i class="success fa fa-long-arrow-up"></i></td>
                                    <td class=" ">@{{ item.name }}</td>
                                    <td class=" ">@{{ item.status }}</td>
                                    <td class="a-right a-right ">@{{ item.money }}</td>
                                    <td class=" last">
                                        <a href="{{ URL('/admin/modelsModify') }}" class="btn btn-info  btn-xs" :data-id="item.id"><i
                                                    class="fa fa-pencil"></i> 编辑</a>
                                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> 删除</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <nav aria-label="Page navigation" id="page_component" style="text-align: center;">
                                <ul class="pagination">
                                    <li v-bind:class="{'disabled': showFirst == false}" v-show="all > 1">
                                        <a aria-label="Previous" v-on:click="cur > 1 ? cur -- : cur">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li v-show="all > 1" v-for="index of indexs" v-bind:class="{'active': cur == index}">
                                        <a v-on:click="btnClick(index)">@{{ index }}</a>
                                    </li>
                                    <li v-bind:class="{'disabled': showLast == false}" v-show="all > 1">
                                        <a aria-label="Next" v-on:click="cur < all ? cur ++ : cur">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>共 @{{ all }} 页, @{{ count }} 条数据</a>
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

@section('modal')
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="exampleModalLabel">新增菜单</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="parent_id" class="control-label">顶级菜单：</label>
                            <select class="form-control" id="parent_id">
                                <option value="0">顶级菜单</option>
                                <option value="1">系统管理</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="model_name" class="control-label">模块名称：</label>
                            <input class="form-control" id="model_name" type="text"/>
                        </div>
                        <div class="form-group">
                            <label for="rule_route" class="control-label">规则路由：</label>
                            <input class="form-control" id="rule_route" type="text"/>
                        </div>
                        <div class="form-group">
                            <label for="icon" class="control-label">图标：</label>
                            <input class="form-control" id="icon" type="text"/>
                        </div>
                        <div class="form-group">
                            <label for="sorting" class="control-label">排序：</label>
                            <input class="form-control" id="sorting" type="number" min="0"/>
                        </div>
                        <div class="form-group">
                            <label for="status" class="control-label">状态：</label>
                            <input class="flat" type="radio" name="status" value="0"> 启用
                            <input class="flat" type="radio" name="status" value="1"> 禁用
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary"> 确 认 </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"> 关 闭     </button>
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

    <script type="text/javascript">
        $(document).ready(function () {
            vue.dataRequset();
        });

        $('#exampleModal').on('show.bs.modal', function (event) {
            /*var button = $(event.relatedTarget);
            var recipient = button.data('whatever');
            var modal = $(this);
            modal.find('.modal-title').text('New message to ' + recipient);
            modal.find('.modal-body input').val(recipient);*/
        });

        Vue.prototype.$axios = axios;   //将 axios 改写为 Vue 的原型属性

        var vue = new Vue({
            el: '#meun_model_list',
            data: {
                meunModel: [],
                all: 12,
                count: 100,
                cur: 1
            },
            methods: {
                btnClick: function (data) {
                    if (String(data).indexOf('.') > -1){
                        data = parseInt(data.replace(/\./g, ''));
                    }
                    if (data != this.cur){
                        this.cur = data;
                    }
                },
                dataRequset: function () {
                    console.log(this.cur);

                    /*
                    * then()和catch() 这两个回调函数都有各自独立的作用域，如果直接在里面访问 this，无法访问到 Vue 实例，this指向发生了变化。
                    * 这时只要添加一个 .bind(this) 就能解决这个问题,或者使用箭头函数即可
                    *
                    * 箭头函数:
                    * then((json) => {
                    *   console.log(json);
                    *   this.meunModel = json.data;
                    * })
                    *
                    * */
                    axios.get('{{ URL("/getList") }}')
                        .then(function(json) {
                            console.log(json.data);
                            this.meunModel = json.data;
                        }.bind(this))
                        .catch(function (error) {
                            console.log(error);
                        });
                },
                search: function () {
                    //搜索查询列表

                    this.dataRequset();
                }
            },
            watch: {
                cur: function (oldValue, newValue) {
                    this.dataRequset();
                    console.log(arguments);
                }
            },
            computed: {
                indexs: function(){
                    var left = 1;
                    var right = this.all;
                    var ar = [];
                    if (this.all > 7){
                        if (this.cur - 2 <= 1){
                            while (left <= 6){
                                ar.push(left);
                                left ++;
                            }
                            ar.push('...'+this.all);
                        }else if ((this.cur - 2 > 1) && (this.cur + 2 < this.all)){
                            ar.push('1...');
                            left = this.cur - 2;
                            right = this.cur + 2;
                            while (left <= right){
                                ar.push(left);
                                left ++;
                            }
                            ar.push('...'+this.all);
                        }else if (this.cur + 2 >= this.all){
                            ar.push('1...');
                            left = this.all - 5;
                            while (left <= this.all){
                                ar.push(left);
                                left ++;
                            }
                        }
                    }else {
                        while (left <= this.all){
                            ar.push(left);
                            left ++;
                        }
                    }

                    return ar;
                },
                showLast: function(){
                    if(this.cur >= this.all){
                        return false;
                    }
                    return true;
                },
                showFirst: function(){
                    if(this.cur <= 1){
                        return false;
                    }
                    return true;
                }
            }
        });

        /*axios.get('/user', {params: {id: 123}})
            .then(function (response) {
                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            });*/
    </script>
@endsection