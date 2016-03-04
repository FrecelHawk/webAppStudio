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
            <button class="btn btn-large btn-block btn-primary" type="button" style="margin-top:20px">发布信息</button>
        </div>

    </div>
</div>



<!-- dialog -->
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
                <button type="button" class="btn btn-primary" id="confirm">确认</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script>

      var $table = $('#table'),$remove = $("#remove"),selections=[];

      //Tab 解发事件
      $("#publish_tab li").on('click',function(){
          $('#publish_tab li').removeClass('active');
          $(this).addClass('active');
          var title  = $(this).children("a").text();
          /*  alert(title);*/
          if(title === "发布信息") {
              publishMessage_show();
              table_hide();
          }else{
              publishMessage_hide();
              table_show();
          }
      });


      $("#message-type li").on('click',function(){
          var type = $(this).children('a').text();
          $("#message-type-btn").html(type+'  <span class="caret"></span>');

      });


      //发布信息
      function publishMessage(){

      }


      function table_show(){
          $("#table-message").show();
      }

      function table_hide(){
          $("#table-message").hide();
      }


      function publishMessage_show(){
          $("#publish-message").show();
      }


      function publishMessage_hide(){
          $("#publish-message").hide();
      }



      function initTable(){

          $table.on('check.bs.table uncheck.bs.table ' +
                  'check-all.bs.table uncheck-all.bs.table', function () {
              $remove.prop('disabled', !$table.bootstrapTable('getSelections').length);

              // save your data, here just save the current page
              selections = getIdSelections();
              // push or splice the selections if you want to save all data selections
          });


          $remove.click(function () {
              var ids = getIdSelections();
              $table.bootstrapTable('remove', {
                  field: 'id',
                  values: ids
              });
              $remove.prop('disabled', true);
          });

      }


      function getIdSelections() {
          return $.map($table.bootstrapTable('getSelections'), function (row) {
              return row.id
          });
      }

      function detailFormatter(index,row){
          var html = [];
          var title = {'title':'消息标题','type_content':'信息类型','content':'内容','update_time':'修改时间','send_time':'消息发送有效期'};
          $.each(row,function(key,value){
              var tmp = key;
              if(key==='title')
                  tmp = title.title;
              if(key==='type_content')
                  tmp = title.type_content;
              if(key==='content') tmp = title.content;
              if(key==='update_time') tmp = title.update_time;
              if(key==='send_time') tmp = title.send_time;

              html.push('<p><b>'+tmp+':</b>'+value+'</p>');
          });

          return html.join('');
      }


      function  operateFormatter(value,row,index){
          return [
              '<a class="remove" href="javascript:void(0)" title="Remove">',
              '<i class="glyphicon glyphicon-remove"></i>',
              '</a>'
          ].join('');
      }

      var row_tmp;
      window.operateEvents = {
          'click .remove':function(e,value,row,index){
              /* $table.bootstrapTable('remove',{
               field:'id',
               values:[row.id]
               });*/
              row_tmp =row;
              $("#myModal").modal('show');
          }
      };

      $("#confirm").on('click',function(){
          $table.bootstrapTable('remove',{
              field:'id',
              values:[row_tmp.id]
          });
          $("#myModal").modal('hide');
      });


      publishMessage_hide();
      table_show();



</script>
<script>
/*    (function(){
        $('#datetimepicker').datetimepicker();
    });*/
</script>

<script src="../plugin/app/js/table-load.js"></script>
<script src="../plugin/datetimepicker/js/datetimepicker.js" type="text/javascript"></script>
<script>
    $('#datetimepicker').datetimepicker({lang:'ch'});
</script>