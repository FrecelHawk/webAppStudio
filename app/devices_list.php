<div>
    <div id="toolbar">
        <button id="remove" class="btn btn-danger" disabled>
            <i class="glyphicon glyphicon-remove"></i> 删除
        </button>

        <button id="upgrade" class="btn btn-green" disabled>
            <i class="glyphicon glyphicon-refresh"></i> 升级
        </button>

        <button id="reboot" class="btn btn-danger" disabled>
            <i class="glyphicon glyphicon-plus"></i> 重启
        </button>
    </div>
    <table id="table"
           data-toolbar="#toolbar"
           data-toggle="table"
           data-detail-view="true"
           data-minimum-count-columns="2"
           data-show-columns="true"
           data-detail-formatter="detailFormatter"
           data-url="../assets/data/devices_list.json"
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
            <th data-field="devicetype"  >设备类型</th>
            <th data-field="serverip">服务器IP</th>
            <th data-field="pnetworkip">公网IP</th>
            <th data-field="gatewayip">网关IP</th>
            <th data-field="ip" >IP</th>
            <th data-field="netmask">掩码</th>
            <th data-field="onlinestate">在线状态</th>
            <th data-field="safetystate">安防状态</th>
            <th data-field="lockstate">锁状态</th>
            <th data-field="operate" data-align ="center"  data-formatter="operateFormatter" data-events="operateEvents">操作
        </tr>
        </thead>
    </table>
</div>
<script src="../plugin/app/js/devices_list.js"></script>
<script src="../plugin/app/js/table-load.js"></script>