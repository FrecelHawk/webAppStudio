<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="import" href="../table_adduction.php">
</head>


<div class="table-responsive">
      <ul class="nav nav-tabs"  id="publish_tab">
          <li role="presentation" class="active"><a href="#">公告</a></li>
          <li role="presentation"><a href="#">通知</a></li>
          <li role="presentation"><a href="#">新闻</a></li>
          <li role="presentation"><a href="#">发布信息</a></li>
      </ul>

      <!--信息类型列表-->
      <div id="table-message">
      <table class="table table-bordered table-hover">
          <caption></caption>
          <thead>
          <tr>
              <th class="bs-checkbox " style="text-align: center; vertical-align: middle; width: 36px; " rowspan="2"
                  data-field="state" tabindex="0">
                  <div class="th-inner "><input name="btSelectAll" type="checkbox"></div>
                  <div class="fht-cell"></div>
              </th>
              <th>#</th>
              <th>消息标题</th>
              <th>内容类型</th>
              <th>内容</th>
              <th>消息发送有效期</th>
              <th>修改时间</th>
          </tr>
          </thead>
          <tbody>
          <tr>
              <td class="bs-checkbox "><input data-index="9" name="btSelectItem" type="checkbox" value="9"></td>
              <th scope="row">1</th>
              <td>XX新闻</td>
              <td>XXX内容类型</td>
              <td>XXX内容</td>
              <td>2016年01月30日</td>
              <td>2016年01月29日</td>
          </tr>
          <tr>
              <td class="bs-checkbox "><input data-index="9" name="btSelectItem" type="checkbox" value="9"></td>
              <th scope="row">2</th>
              <td>XX广告</td>
              <td>XXX内容类型</td>
              <td>XXX内容</td>
              <td>2016年01月30日</td>
              <td>2016年01月29日</td>
          </tr>
          <tr>
              <td class="bs-checkbox "><input data-index="9" name="btSelectItem" type="checkbox" value="9"></td>
              <th scope="row">3</th>
              <td>XX通知</td>
              <td>XXX内容类型</td>
              <td>XXX内容</td>
              <td>2016年01月30日</td>
              <td>2016年01月29日</td>
          </tr>
          </tbody>
      </table>

          <!-- 分页-->
          <nav>
          <ul class="pagination" style="float:right;">
              <li>
                  <a href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                  </a>
              </li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li>
                  <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                  </a>
              </li>
          </ul>
      </nav>
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

          <div class="iput-group" style="margin-top: 20px">
              <textarea rows="7" class="form-control" placeholder="输入内容"></textarea>
          </div>

          <div class="input-group-btn" >
              <button class="btn btn-large btn-block btn-primary" type="button" style="margin-top:20px">发布信息</button>
          </div>

      </div>
  </div>

<script>

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

    publishMessage_hide();
    table_show();

</script>