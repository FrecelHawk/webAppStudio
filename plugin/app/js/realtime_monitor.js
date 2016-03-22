/**
 * Created by pc on 2016/3/17.
 */


var data = [{'id':'1','address':'192.168.1.1'},{'id':'2','address':'192.168.1.2'},{'id':'3','address':'192.168.1.3'},
    {'id': '4', 'address': '192.168.1.4'}, {'id': '5', 'address': '192.168.1.5'}, {
        'id': '6',
        'address': '192.168.1.6'
    }, {'id': '7', 'address': '192.168.1.7'}, {'id': '8', 'address': '192.168.1.8'}, {
        'id': '9',
        'address': '192.168.1.9'
    }, {'id': '10', 'address': '192.168.100.100'}];

function init(){
    var realtime_container =$( '<div class="realtime_container"></div>');
    for(var i=0;i<data.length;i++){
        if((i%5)==0){
            realtime_container = $( '<div class="realtime_container"  ></div>');
            $('#monitor_btn').append(realtime_container);
        }
        realtime_container.append('<button class="btn btn-green realtime_btn" style="width:131px;">'+data[i].address+'  </button>');
    }
    $('#monitor_btn').append(realtime_container);
}
init();
