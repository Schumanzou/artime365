
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>欢迎页</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/static/css/x-admin.css" media="all">
</head>
<body>
<div class="x-body">
    <blockquote class="layui-elem-quote">
        您是第<?php echo $row->count_id?>次分享
    </blockquote>
    <fieldset class="layui-elem-field layui-field-title site-title">
        <legend><a name="default">视频播放</a></legend>
    </fieldset>

    <p>
        <?php echo $row->url?>
    </p>
</div>

</body>
</html>