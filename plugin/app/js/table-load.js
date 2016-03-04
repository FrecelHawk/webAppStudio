/**
 * Created by pc on 2016/2/15.
 */
$(function () {
    var scripts = [
            location.search.substring(1) ||
            '../plugin/bootstrap-table/js/bootstrap-table.js',
            '../plugin/bootstrap-table/js/bootstrap-table-zh-CN.js',
            '../plugin/bootstrap-table/extensions/export/bootstrap-table-export.js',
            '../plugin/bootstrap-table/js/rawgit-tableExport.js',
            '../plugin/bootstrap-table/js/rawgit-editable.js',
            '../plugin/bootstrap-table/extensions/editable/bootstrap-table-editable.js'
        ],
        eachSeries = function (arr, iterator, callback) {
            callback = callback || function () {};
            if (!arr.length) {
                return callback();
            }
            var completed = 0;
            var iterate = function () {
                iterator(arr[completed], function (err) {
                    if (err) {
                        callback(err);
                        callback = function () {};
                    }
                    else {
                        completed += 1;
                        if (completed >= arr.length) {
                            callback(null);
                        }
                        else {
                            iterate();
                        }
                    }
                });
            };
            iterate();
        };

    eachSeries(scripts, getScript, initTable);
});

function getScript(url, callback) {
    var head = document.getElementsByTagName('head')[0];
    var script = document.createElement('script');
    script.src = url;

    var done = false;
    // Attach handlers for all browsers
    script.onload = script.onreadystatechange = function() {
        if (!done && (!this.readyState ||
            this.readyState == 'loaded' || this.readyState == 'complete')) {
            done = true;
            if (callback)
                callback();

            // Handle memory leak in IE
            script.onload = script.onreadystatechange = null;
        }
    };

    head.appendChild(script);

    // We handle everything using the script element injection
    return undefined;
}