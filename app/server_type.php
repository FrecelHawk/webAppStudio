
<div>
    <div id="toolbar">
        <button id="remove" class="btn btn-danger" disabled>
            <i class="glyphicon glyphicon-remove"></i> 删除
        </button>

        <button id="addition" class="btn btn-primary" >
            <i class="glyphicon glyphicon-plus"></i> 添加服务类型
        </button>
    </div>
    <table id="table"
           data-toolbar="#toolbar"
           data-toggle="table"
           data-detail-view="true"
           data-minimum-count-columns="2"
           data-show-columns="true"
           data-detail-formatter="detailFormatter"
           data-url="../assets/data/server_type.json"
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
            <th data-field="servicetype">服务类型</th>
            <th data-field="operate" data-align="center" data-formatter="operateFormatter" data-events="operateEvents">操作</th>
        </tr>
        </thead>
    </table>
</div>



<!-- 添加服务类型-->
<div id="add_server_type" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">添加服务类型</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>服务类型</label>
                    <input type="text" class="form-control" name="servicetype" placeholder="服务类型">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-primary submit">添加</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>


<!-- 删除服务类型-->
<div id="del_server_type" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">删除服务类型</h4>
            </div>
            <div class="modal-body">
                <p>是否删除&hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary confirm">确认</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<script>

    var $table = $('#table'),$remove = $("#remove"),$server_type = $('#add_server_type'),$del_server_type = $('#del_server_type'),selections=[];
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

    function  operateFormatter(value,row,index){
        return [
            '<a class="remove" href="javascript:void(0)" title="Remove">',
            '<i class="glyphicon glyphicon-remove"></i>',
            '</a>'
        ].join('');
    }

    function detailFormatter(index,row){
        var html = [];
        var title = {
            'servicetype': '服务类型'
        };
        $.each(row,function(key,value){
            var tmp = key;
            if(key==='0') return;
            if(key==='servicetype')tmp = title.servicetype;

            html.push('<p><b>'+tmp+':</b>'+value+'</p>');
        });

        return html.join('');
    }


    $('#addition').on('click',function(){
        $server_type.modal('show');
    });


    //添加服务类型
    $server_type.find('.submit').on('click',function(){
        var row = {};
        $server_type.find('input[name]').each(function () {
            row[$(this).attr('name')] = $(this).val();
        });
        console.log(row);
        $server_type.modal('hide');
    });

    var tmpRow;
    window.operateEvents = {
        'click .remove':function(e,value,row,index){
            tmpRow = row;
            $del_server_type.modal('show');
        }
    };

    $del_server_type.find('.confirm').on('click',function(){
        $del_server_type.modal('hide');
        $table.bootstrapTable('remove',{
            field:'id',
            values:[tmpRow.id]
        });
    });
</script>
<script src="../plugin/app/js/table-load.js"></script>