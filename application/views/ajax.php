<?php header('Content-type:text/html;charset="UTF-8"');?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <title>ajax</title>
</head>
<body>
<button id="btn">请求数据</button>
<script>
    document.getElementById("btn").addEventListener("click",function () {
        console.log(6666666666);
        var name = '好哈哈4444555aaaaa';
        var url = '<?php echo site_url('ajaxcon/getAjaxData')?>';

        $.ajax({
            data: {name: name},       //要发送的数据
            type: "POST",           //发送的方式
            url: url, //url地址
            error: function (msg) { //处理出错的信息

            },
            success: function (msg) {  //处理正确时的信息
                alert(msg)

            }
        });
    });
</script>
</body>
</html>