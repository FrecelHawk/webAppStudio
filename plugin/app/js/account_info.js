/**
 * Created by pc on 2016/3/17.
 */
(function () {
    var create_account_module, update_account_module, $create_account = $('#create_account'), $update_account = $('#update_account'), $update_pwd = $('#update_password');


    var account = {
        account: "xxx",
        password: "12345",
        password2: "12345",
        neighborhoodName: "小区名称",
        address: "深圳",
        province: "广东",
        city: "深圳",
        area: "宝安区"
    };


    $('#addition').on('click', function () {
        $create_account.modal('show');
        $('#create_address').address({nodata: "none", required: false});
    });

    $('#update_pwd').on('click', function () {
        $update_pwd.modal('show');
    });


    //更新Dialog
    $('#update').on('click', function () {
        for (var name in account) {
            $update_account.find('input[name="' + name + '"]').val(account[name]);
        }
        $('#udpate_address').address({
            prov: account.province,
            city: account.city,
            area: account.area,
            nodata: "none"
        });
        $update_account.modal('show');
    });

    //创建Dialog submit
    $create_account.find('.submit').on('click', function () {
        var row = {};
        $create_account.find('input[name]').each(function () {
            row[$(this).attr('name')] = $(this).val();
        });

        $create_account.find('select[name]').each(function () {
            row[$(this).attr('name')] = $(this).val();
        });
        console.log(row);
        $create_account.modal('hide');
    });

    //更新Dialog submit
    $update_account.find('.submit').on('click', function () {
        $update_account.modal('hide');
    });


    //更新密码 submit
    $update_pwd.find('.submit').on('click', function () {
        var row = {};
        $update_pwd.find('input[name]').each(function () {
            row[$(this).attr('name')] = $(this).val();
        });
        console.log(row);
        $update_pwd.modal('hide');
    });


}).call(this);