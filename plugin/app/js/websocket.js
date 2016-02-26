/**
 * Created by pc on 2016/2/24.
 */
var alarm_count = 0;
$(function () {
    var ws = new WebSocket('ws://192.168.1.131:8181?deviceinfo=1');
    ws.onopen = function () {
        /* ws.send('hello');*/
    };
    ws.onmessage = function (evt) {
        var msg = jQuery.parseJSON(evt.data);
        alarm_count();
        console.log(msg);
        msgManager();
    };
    ws.onclose = function (evt) {
        console.log('WebSocketClosed!');
    };
    ws.onerror = function (evt) {
        console.log('WebSocketError!');
    };

    function msgManager(){
        $("#alarm_count").text(localStorage.alarm_count);
        $("#msg_count").text(localStorage.alarm_count);
    }

    msgManager();

    function alarm_count(){
         if(localStorage.alarm_count)
             localStorage.alarm_count = Number(localStorage.alarm_count)+1;
          else
             localStorage.alarm_count = 1;
    }
});