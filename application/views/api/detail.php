
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>带本书给家乡的孩子</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/static/css/x-admin.css" media="all">
    <link rel="stylesheet" href="/static/lib/fontello/css/fontello.css" media="all">
</head>
<body>
<div class="x-body">
    <blockquote class="layui-elem-quote">
        您是第<?php echo $row->count_id?>次分享
    </blockquote>
    <fieldset class="layui-elem-field layui-field-title site-title">
        <legend><a name="default">音频播放</a></legend>
    </fieldset>

    <p>
        <i class="icon-pause-circled"></i>
        <i class="icon-play-circled"></i>
        <audio id="audio" src="<?php echo $row->url?>" controls="controls" style="display: none">
        </audio>
        <input id='btnPlay' type="button" onClick="playFn()" value="播放" />
        　　<script>
            function playFn(){
                var audio=document.getElementById('audio');
                if (document.getElementById('btnPlay').value =="播放") {
                    audio.play();
                    audio.loop=true;
                    document.getElementById('btnPlay').value='暂停'
                }else{
                    audio.pause();
                    document.getElementById('btnPlay').value='播放'
                }
            }
        </script>

    </p>
</div>

</body>
</html>