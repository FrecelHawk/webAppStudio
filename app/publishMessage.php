<link rel="stylesheet" href="../plugin/datetimepicker/css/datetimepicker.css"/>

<div class="table-responsive">
    <ul class="nav nav-tabs"  id="publish_tab">
        <li role="presentation" class="active"><a href="#">公告</a></li>
        <li role="presentation"><a href="#">通知</a></li>
        <li role="presentation"><a href="#">新闻</a></li>
        <li role="presentation"><a href="#">发布信息</a></li>
    </ul>

    <!--信息类型列表-->
    <div id="table-message">

        <div>
            <div id="toolbar">
                <button id="remove" class="btn btn-danger" disabled>
                    <i class="glyphicon glyphicon-remove"></i> 删除
                </button>
            </div>
            <table id="table"
                   data-toolbar="#toolbar"
                   data-toggle="table"
                   data-detail-view="true"
                   data-detail-formatter="detailFormatter"
                   data-minimum-count-columns="2"
                   data-url="../assets/data/send_message_module.json"
                   data-show-columns="true"
                   data-search="true"
                   data-show-refresh="true"
                   data-show-toggle="true"
                   data-pagination="true"
                   data-smart-display="true"
                   data-show-pagination-switch="false"
                   data-height="500">
                <thead>
                <tr>
                    <th data-checkbox="true"></th>
                    <th data-field="id" data-detail-formatter="idFormatter" data-sortable="true">序列</th>
                    <th data-field="title"  >消息标题</th>
                    <th data-field="type_content">内容类型</th>
                    <th data-field="content" >内容</th>
                    <th data-field="send_time"  data-sortable="true">消息发送有效期</th>
                    <th data-field="update_time"  data-sortable="true">修改时间</th>
                    <th data-field="operate" data-formatter="operateFormatter" data-align="center" data-events="operateEvents">操作</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>

    <!--发布信息-->
    <div id="publish-message"class="container" style="width: 300px;height: 400px; margin-top: 20px;" >
        <div class="input-group">
            <div class="input-group-btn">
                <button id="message-type-btn" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">消息类型 <span class="caret"></span></button>
                <ul class="dropdown-menu" id="message-type">
                    <li><a href="#">公告</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">新闻</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">住户通知</a></li>
                </ul>
            </div>
            <input type="text" class="form-control" placeholder="输入标题">
        </div>

        <div class="form-group" style="margin-top: 20px;">
            <div class='input-group date' >
                <span class="input-group-addon">有效期</span>
                <input type='text' class="form-control" id='datetimepicker' />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
            </div>
        </div>

        <div class="iput-group" style="margin-top: 20px">
            <textarea rows="7" class="form-control" placeholder="输入内容"></textarea>
        </div>
        <div class="input-group-btn" >
            <button class="btn btn-large btn-block btn-green" type="button" style="margin-top:20px">发布信息</button>
        </div>

    </div>
</div>



<!--remove dialog -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">信息提示</h4>
            </div>
            <div class="modal-body">
                <p>是否删除&hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-green" id="confirm">确认</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script src="../plugin/app/js/publishMessage.js"></script>
<script src="../plugin/app/js/table-load.js"></script>
<script src="../plugin/datetimepicker/js/datetimepicker.js" type="text/javascript"></script>
<script>
    $('#datetimepicker').datetimepicker({lang:'ch'});
</script>