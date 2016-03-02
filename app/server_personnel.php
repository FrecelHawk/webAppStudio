<div>
    <div id="toolbar">
        <button id="remove" class="btn btn-danger" disabled>
            <i class="glyphicon glyphicon-remove"></i> 删除
        </button>

        <button id="addition" class="btn btn-primary" >
            <i class="glyphicon glyphicon-plus"></i> 添加人员
        </button>
    </div>
    <table id="table"
           data-toolbar="#toolbar"
           data-toggle="table"
           data-detail-view="true"
           data-minimum-count-columns="2"
           data-show-columns="true"
           data-detail-formatter="detailFormatter"
           data-url="../assets/data/server_personnel.json"
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
            <th data-field="name"  >姓名</th>
            <th data-field="gender">性别</th>
            <th data-field="homeaddress" >家庭住址</th>
            <th data-field="officeaddress" >办公地址</th>
            <th data-field="identitycard" >身份证号码</th>
            <th data-field="operate" data-formatter="operateFormatter" data-events="operateEvents">操作</th>
        </tr>
        </thead>
    </table>
</div>

<!-- addition dialog-->
<div id="modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">添加服务人员</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>姓名</label>
                    <input type="text" class="form-control" name="name" placeholder="姓名">
                </div>
                <div class="form-group">
                    <label style="margin-right: 10px;">性别</label>
                    <form>
                        <input type="radio" name="gender">男
                        <input type="radio" name="gender">女
                    </form>
                </div>
                <div class="form-group">
                    <label>家庭住址</label>
                    <input select-address ng-model="homeCtrl" name = "homeaddress" placeholder="家庭住址" type="text"
                           class="form-control"/>
                </div>
                <div class="form-group">
                    <label>办公地址</label>
                    <input select-address  ng-model="workCtrl" name = "officeaddress" placeholder="办公地址" type="text"
                           class="form-control"/>
                </div>
                <div class="form-group">
                    <label>身份证号码</label>
                    <input type="text" class="form-control" name="identitycard" placeholder="身份证号码">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button id="confirm" type="button" class="btn btn-primary submit">确定</button>
            </div>
        </div>
    </div>
</div>



<script>

    var $table = $('#table'),$remove = $("#remove"),$addition = $('#addition'),$modal=$('#modal'),selections=[];
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
            'name': '姓名',
            'gender': '性别',
            'homeaddress': '家庭住址',
            'officeaddress': '办公地址',
            'identitycard': '身份证号码',
            'telephone': '固定电话',
            'mobile': '手机',
            'servicetypeid':'关联其他IP',
            'star':'星级',
            'description':'说明'
        };
        $.each(row,function(key,value){
            var tmp = key;
            if(key==='0') return;
            if(key==='name')
                tmp = title.name;
            if(key==='gender')
                tmp = title.gender;
            if(key==='homeaddress') tmp = title.homeaddress;
            if(key==='officeaddress') tmp = title.officeaddress;
            if(key==='identitycard') tmp = title.identitycard;
            if(key==='telephone') tmp = title.telephone;
            if(key==='mobile') tmp = title.mobile;
            if(key==='servicetypeid') tmp = title.mobile;
            if(key==='star') tmp = title.star;
            if(key==='description') tmp = title.description;

            html.push('<p><b>'+tmp+':</b>'+value+'</p>');
        });

        return html.join('');
    }



    window.operateEvents = {
        'click .remove':function(e,value,row,index){
            $table.bootstrapTable('remove',{
                field:'id',
                values:[row.id]
            });
        }
    };




    $(function () {
        // create event
        $('#addition').click(function () {
            showModal($(this).text());
        });

        $modal.find('.submit').click(function () {
            var row = {};
            $modal.find('input[name]').each(function () {
                row[$(this).attr('name')] = $(this).val();
            });
            console.log(row);
            $modal.modal('hide');
        });
    });

    function showModal(title, row) {
        //row 是提交表单的数据
        row = row || {
                    text: '',
                    gender: '男',
                    homeaddress: '',
                    officeaddress: '',
                    identitycard:''
                }; // default row value

        $modal.data('id', row.id);
        $modal.find('.modal-title').text(title);
        for (var name in row) {
            $modal.find('input[name="' + name + '"]').val(row[name]);
        }
        $modal.modal('show');
    }



</script>

<script src="../plugin/app/js/table-load.js"></script>
<script src="../plugin/address-plugin/selectAddress.js" type="text/javascript"></script>

<script>
    (function() {
        var app;

        app = angular.module('server_personnel', ['selectAddress']);

        angular.bootstrap($modal, ['server_personnel']);

        $('#modal').find('input[name="officeaddress"]').on('click',function(){
            $('#area').css('display','block');
        });

    }).call(this);
</script>