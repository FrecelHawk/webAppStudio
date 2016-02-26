<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../plugin/bootstrap-3.3.5/css/bootstrap.css"/>
    <link rel="stylesheet" href="../plugin/bootstrap-3.3.5/css/bootstrap-theme.css"/>
    <link rel="stylesheet" href="../plugin/bootstrap-3.3.5/css/bootstrap-responsive.css"/>
    <link rel="stylesheet" href="../plugin/bootstrap-3.3.5/css/bootstrap-treeview.css"/>
    <link rel="stylesheet" href="../plugin/app/css/main.css"/>
    <script src="../plugin/jquery-2.1.1/jquery.js"></script>
    <script src="../plugin/less/less.js"></script>
    <script src="../plugin/angularjs/js/angular.js"></script>
    <script src="../plugin/bootstrap-3.3.5/js/bootstrap.js"></script>
    <script src="../plugin/bootstrap-3.3.5/js/bootstrap-treeview.js"></script>
    <script src="../plugin/bootstrap-3.3.5/js/modal.js"></script>
    <script src="../plugin/bootstrap-3.3.5/js/transition.js"></script>
    <script src="../plugin/bootstrap-3.3.5/js/file-input.js"></script>

    <link rel="stylesheet" href="../plugin/bootstrap-table/css/bootstrap-table.css"/>
    <link rel="stylesheet" href="../plugin/bootstrap-table/css/rawgit-bootstrap-editable.css"/>
    <link rel="stylesheet" href="../plugin/bootstrap-switch-3/css/bootstrap-switch.css"/>



    <script src="../plugin/bootstrap-table/js/bootstrap-table.js"  type="text/javascript"></script>
    <script src="../plugin/bootstrap-table/extensions/export/bootstrap-table-export.js"  type="text/javascript"></script>
    <script src="../plugin/bootstrap-table/js/rawgit-tableExport.js"  type="text/javascript"></script>
    <script src="../plugin/bootstrap-table/extensions/editable/bootstrap-table-editable.js"  type="text/javascript"></script>
    <script src="../plugin/bootstrap-table/js/rawgit-editable.js"  type="text/javascript" ></script>
    <script src="../plugin/bootstrap-table/js/bootstrap-table-zh-CN.js"  type="text/javascript" ></script>
    <script src="../plugin/bootstrap-switch-3/js/bootstrap-switch.js" type="text/javascript"></script>

</head>
<?php
   require 'header.php'
?>

<body>

<div class="container-fluid">
    <div class="row-fluid">
        <div class="span2">
            <!--Sidebar content-->
            <div class="panel panel-default" style="height: 740px;">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        分类
                    </h3>
                </div>
                <span class="btn btn-primary btn-file" style="margin: 10px;">
                   <i class="glyphicon glyphicon-folder-open" href="#"></i> 导入配置 <input type="file">
                </span>
                <div class="panel-body">
                    <div id="treeview-checkable" class=""></div>
                </div>
            </div>
        </div>
        <div class="span10">
            <!--navigation menu-->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">小区物业</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul id="meun" class="nav navbar-nav" >
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">消息管理 <span class="caret"></span>  <span class="badge" id="msg_count"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" id="warningMessage">警报信息 <span class="badge" id="alarm_count"></span> </a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#" id="sendMessage">发布信息</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">设备管理 <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" id="devices">设备配置</a></li>
<!--                                        <li role="separator" class="divider"></li>
                                        <li><a href="#" id="sendMessage">设备重启</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#" id="sendMessage">设备升级</a></li>-->
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">服务管理 <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" id="server_personnel">服务人员</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#" id="server_info">服务信息</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#" id="server_type">服务类型</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#" id="phone_bind_info">手机绑定信息</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">监控管理 <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" id="monitor">摄像头配置</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#" id="sendMessage">实时监控</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">记录查询 <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" id="access_record">门禁记录</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#" id="access_card">门禁卡信息</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">账号管理 <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" id="account_info">账号信息</a></li>
                                    </ul>
                                </li>
                                <!--<li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">系统设置  <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" id="warningMessage">查看版本</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#" id="sendMessage">密码修改</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#" >客服电话</a> </li>
                                    </ul>
                                </li>-->
                          <!--      <li><a href="#">关于</a></li>-->
                            </ul>
                    </div>

                  </div>
                </div>
            </nav>

            <!-- panle-->
            <div id="panel" class="panel panel-default">
                <div class="panel-heading">
                    <h3  class="panel-title">
                        消息模块
                    </h3>
                </div>
                <div class="panel-body" >
                </div>
            </div>


        </div>

    </div>
</div>
<?
   require "footer.php"
?>
<script>


</script>

<script>

    var defaultData = [
        {
            text: '二期',
            href: '#parent1',
            tags: ['4'],
            nodes: [
                {
                    text: '一区',
                    href: '#child1',
                    tags: ['2'],
                    nodes: [
                        {
                            text: '1栋',
                            href: '#grandchild1',
                            tags: ['1'],
                            nodes: [{
                                text: '1单元',
                                href: '#unit',
                                tags: [1],
                                nodes: [{
                                    text: '2层',
                                    href: '#layer',
                                    tags: [1],
                                    nodes: [{
                                        text: '101室',
                                        href: '#room',
                                        tags: [0],
                                        nodes:[{
                                            text:'1房号',
                                            href:'#room',
                                            targs:[0]
                                        }]
                                    }]
                                }]
                            }]
                        },
                        {
                            text: '2栋',
                            href: '#grandchild2',
                            tags: ['0']
                        }
                    ]
                },
                {
                    text: '一区中心机 <span class="glyphicon glyphicon-registration-mark"></span>',
                    href: '#child2',
                    tags: ['0']
                }
            ]
        },
        {
            text: 'Parent 2',
            href: '#parent2',
            tags: ['0']
        },
        {
            text: 'Parent 3',
            href: '#parent3',
            tags: ['0']
        },
        {
            text: 'Parent 4',
            href: '#parent4',
            tags: ['0']
        },
        {
            text: 'Parent 5',
            href: '#parent5',
            tags: ['0']
        }
    ];

    var $checkableTree = $('#treeview-checkable').treeview({
        data: defaultData,
        showIcon: true,
        showCheckbox: false,
        onNodeChecked: function (event, node) {
            $('#checkable-output').prepend('<p>' + node.text + ' was checked</p>');
        },
        onNodeUnchecked: function (event, node) {
            $('#checkable-output').prepend('<p>' + node.text + ' was unchecked</p>');
        },
        onNodeSelected:function(event,node){
            console.log(node.href);
            if(node.href!==""){
                panel.load('devices.html');
            }
        }
    });



</script>
<script src="../plugin/app/js/websocket.js"></script>
<script src="../plugin/app/js/navigation_menu.js"></script>
</body>
</html>