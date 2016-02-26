<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="import" href="table_adduction.html">
</head>
<body>

<div>

    <div id="toolbar">
        <button id="remove" class="btn btn-danger" disabled>
            <i class="glyphicon glyphicon-remove"></i> 删除
        </button>

<!--        <div  class="bootstrap-switch bootstrap-switch-small">
            <input   id="switch" type="checkbox" checked disabled  data-on-text="agree" data-off-text="reject" />
        </div>-->

    </div>
    <table id="table"
           data-toolbar="#toolbar"
           data-toggle="table"
           data-detail-view="true"
           data-show-export="true"
           data-minimum-count-columns="2"
           data-url="../assets/data/phone_bind_user.json"
           data-show-columns="true"
           data-search="true"
           data-detail-formatter="detailFormatter"
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
            <th data-field="mobileaccount" >手机帐户</th>
            <th data-field="requesttime">请求时间</th>
            <th data-field="requestdescription" >请求说明</th>
            <th data-field="result" data-events="testEvents" >处理结果</th>
            <th data-field="state" data-formatter="handerState">处理状态</th>
            <th data-field="operate" data-align="center" data-formatter="operateFormatter" data-events="operateEvents">操作</th>
        </tr>
        </thead>
    </table>
</div>

<!-- 手机绑定 dialog-->
<div id="bindPhone" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">手机绑定</h4>
            </div>
            <div class="modal-body">
                <p>是否绑定&hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="reject">拒绝</button>
                <button type="button" class="btn btn-primary" id="accept">同意</button>
            </div>
        </div>
    </div>
</div>

<!-- 删除手机绑定信息-->
<div id="deleteBindPhone" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">删除手机绑定</h4>
            </div>
            <div class="modal-body">
                <p>是否删除手机绑定信息&hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary" id="confirm">确认</button>
            </div>
        </div>
    </div>
</div>



<script>
    var $table = $('#table'), $remove = $("#remove"),$switch = $("#switch"),$bindPhone_modal = $("#bindPhone"),$deleteBind = $('#deleteBindPhone'), selections = [];

    function initTable() {

        $table.on('check.bs.table uncheck.bs.table ' +
                'check-all.bs.table uncheck-all.bs.table', function () {
            $remove.prop('disabled', !$table.bootstrapTable('getSelections').length);
            if(!$table.bootstrapTable('getSelections').length){
                $switch.bootstrapSwitch('Disabled');
            }else{
                $switch.prop('disabled',true);
            }
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

    function operateFormatter(value, row, index) {
        return [
            '<a class="bind" href="javascript:void(0)" style="margin-left: 10px; margin-right: 10px;" title="是否同意">',
            '<i class="glyphicon glyphicon-minus-sign"></i>',
            '</a>',
            '<a class="remove" href="javascript:void(0)" style="margin-left: 10px; margin-right: 10px;" title="Remove">',
            '<i class="glyphicon glyphicon-remove"></i>',
            '</a>'
        ].join('');
    }


    function handerState(value,row,index){
        var processed = ['<div style="color: #5BB75B">'+value+'</div>'].join('');
        var untreated = ['<div style="color: #2f96b4">'+value+'</div>'].join('');
        if(value==="未处理")
          return untreated;
        else return processed;
    }




    function detailFormatter(index,row){
        var html = [];
        var title = {
            'mobileaccount': '手机帐户',
            'requesttime': '请求时间',
            'requestdescription': '请求说明',
            'result': '处理结果',
            'state':'处理状态'
        };
        $.each(row,function(key,value){
            var tmp = key;
            if(key==='0') return;
            if(key==='mobileaccount')tmp = title.mobileaccount;
            if(key==='requesttime')tmp = title.requesttime;
            if(key==='requestdescription') tmp = title.requestdescription;
            if(key==='result') tmp = title.result;
            if(key==='state') tmp = title.state;

            html.push('<p><b>'+tmp+':</b>'+value+'</p>');
        });

        return html.join('');
    }


    window.testEvents = {
        'click':function(e,value,row,index){
            alert("更新");
        }
    };

    var tmpRow;
    window.operateEvents = {
        'click .remove': function (e, value, row, index) {
           tmpRow = row;
            $deleteBind.modal('show');
        },
        'click .bind':function(e,valule,row,index){
            $bindPhone_modal.modal('show');
        }
    };

    //拒绝
    $('#reject').on('click',function(){

        $bindPhone_modal.modal('hide');
    });

    //同意
    $('#accept').on('click',function(){

        $bindPhone_modal.modal('hide');
    });


    //确认
    $('#confirm').on('click',function(){
        $table.bootstrapTable('remove',{
            field:'id',
            values:[tmpRow.id]
        });
        $deleteBind.modal('hide');
    });

    $('.bootstrap-switch input[type="checkbox"]').bootstrapSwitch();

</script>
</body>
<script src="../plugin/app/js/table-load.js"></script>
</html>