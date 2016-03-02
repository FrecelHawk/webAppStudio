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
           data-minimum-count-columns="2"
           data-show-columns="true"
           data-detail-formatter="detailFormatter"
           data-url="../assets/data/warningMessage.json"
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
            <th data-field="type"  >类型</th>
            <th data-field="state">处理状态</th>
            <th data-field="time" data-sortable="true">报警时间</th>
            <th data-field="cleartime" data-sortable="true">消警时间</th>
            <th data-field="describe" data-editable="true">描述</th>
            <th data-field="operate" data-formatter="operateFormatter" data-align="center" data-events="operateEvents">操作</th>
        </tr>
        </thead>
    </table>
</div>


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
          /*  $table.bootstrapTable('remove', {
             field: 'id',
             values: ids
             });*/
           console.log(id);
            $remove.prop('disabled', true);
        });

    }

    function getIdSelections() {
        return $.map($table.bootstrapTable('getSelections'), function (row) {
            return row.id
        });
    }

    function  operateFormatter(value,row,index){
        return [
            '<a class="remove" href="javascript:void(0)" title="Remove">',
            '<i class="glyphicon glyphicon-remove"></i>',
            '</a>'
        ].join('');
    }
    function detailFormatter(index,row){
        var html = [];
        var title = {'type':'类型','state':'处理状态','time':'报警时间','cleartime':'消警时间','describe':'描述'};
        $.each(row,function(key,value){
            var tmp = key;
            if(key==='0') return;
            if(key==='type')
                tmp = title.type;
            if(key==='state')
                tmp = title.state;
            if(key==='time') tmp = title.time;
            if(key==='cleartime') tmp = title.cleartime;
            if(key==='describe') tmp = title.describe;

            html.push('<p><b>'+tmp+':</b>'+value+'</p>');
        });

        return html.join('');
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


</script>
<script src="../plugin/app/js/table-load.js"></script>