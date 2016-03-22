
    <form class="form-horizontal">
<!--            <div id="legend" class="">
                <legend class="">设备配置</legend>
            </div>-->

        <div id="toolbar" style="margin-top: 20px;margin-bottom:20px;">
            <button id="devices" class="btn btn-green" disabled>
                <i class="glyphicon glyphicon-plus" href="#"></i> 添加配置
            </button>

            <span class="btn btn-green btn-file">
                   <i class="glyphicon glyphicon-folder-open" href="#"></i> 导入配置 <input type="file">
            </span>
        </div>
        <div class="form-group">
            <!-- Text input-->
            <label class="col-sm-2 control-label"  >期</label>
            <div class="col-sm-3">
                <input id="stage" type="text" placeholder="输入期" class="form-control ">
            </div>

            <label class="col-sm-1 control-label" > 设备类型</label>
            <div class="col-sm-3">
                <select id="devicetype" class="form-control" name="devicetype" placeholder="设备类型">
                    <option value="g">室内机</option>
                    <option value="d">门口机</option>
                    <option value="c">中心机</option>
                    <option value="w">围墙机</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <!-- Text input-->
            <label class="col-sm-2 control-label"  >区</label>
            <div class="col-sm-3">
                <input id="area" type="text" placeholder="输入区" class="form-control ">
            </div>

            <label class="col-sm-1 control-label" >服务器IP</label>
            <div class="col-sm-3">
                <input type="text" placeholder="输入服务器IP" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <!-- Text input-->
            <label class="col-sm-2 control-label"  >栋</label>
            <div class="col-sm-3">
                <input id="immeuble" type="text" placeholder="输入栋" class="form-control ">
            </div>

            <label class="col-sm-1 control-label" >公网IP</label>
            <div class="col-sm-3">
                <input type="text" placeholder="输入公网IP" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <!-- Text input-->
            <label class="col-sm-2 control-label"  >单元</label>
            <div class="col-sm-3">
                <input id="unit" type="text" placeholder="输入单元" class="form-control ">
            </div>

            <label class="col-sm-1 control-label" >网关IP</label>
            <div class="col-sm-3">
                <input type="text" placeholder="输入网关IP" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <!-- Text input-->
            <label class="col-sm-2 control-label"  >层</label>
            <div class="col-sm-3">
                <input id="floor" type="text" placeholder="输入层" class="form-control ">
            </div>

            <label class="col-sm-1 control-label" >IP</label>
            <div class="col-sm-3">
                <input type="text" placeholder="输入IP" class="form-control">
                <p class="help-block"></p>
            </div>
        </div>

        <div class="form-group">
            <!-- Text input-->
            <label class="col-sm-2 control-label"  >室</label>
            <div class="col-sm-3">
                <input id="room" type="text" placeholder="输入室" class="form-control ">
            </div>

            <label class="col-sm-1 control-label" >掩码</label>
            <div class="col-sm-3">
                <input type="text" placeholder="输入掩码" class="form-control">
                <p class="help-block"></p>
            </div>


        </div>

        <div class="form-group">
            <!-- Text input-->
            <label class="col-sm-2 control-label"  >号</label>
            <div class="col-sm-3">
                <input id="sign" type="text" placeholder="输入号" class="form-control ">
            </div>

            <label class="col-sm-1 control-label" >SIP</label>
            <div class="col-sm-3">
                <input type="text" placeholder="输入SIP" class="form-control">
                <p class="help-block"></p>
            </div>
        </div>


        <div class="form-group">
            <label class="col-sm-2 control-label" >DNS</label>
            <div class="col-sm-3">
                <input type="text" placeholder="输入DNS" class="form-control">
                <p class="help-block"></p>
            </div>
        </div>


    </form>