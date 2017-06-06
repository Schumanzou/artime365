
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
    <style type="text/css">
        .icon-play-circled, .icon-pause-circled {font-size: 200%;}
    </style>
</head>
<body>
<div class="x-body">
    <div class="x-nav" style="border:0px;font-size:140%;margin-bottom:10px;">
        第 <?php echo $row->count_id?> 位
        <div class="x-right">
            <i class="icon-play-circled" id="i_start" onclick="playFn()"></i>
            <i class="icon-pause-circled" id="i_stop" onclick="playFn()" style="display: none;"></i>
        </div>
    </div>

    <div>
        <img src="/static/images/bj.jpg" style="width: 100%"/>
    </div>

    <p>
        <audio id="audio" src="<?php echo $row->url?>" controls="controls" style="display: none">
        </audio>
        <input type="hidden" id="btnPlay" value="播放"/>
        　　<script>
            function playFn(){
                var audio=document.getElementById('audio');
                if (document.getElementById('btnPlay').value =="播放") {
                    audio.play();
                    audio.loop=true;
                    document.getElementById('btnPlay').value='暂停';
                    document.getElementById('i_start').setAttribute("style", "display:none;");
                    document.getElementById('i_stop').setAttribute("style", "display:block;");
                }else{
                    audio.pause();
                    document.getElementById('btnPlay').value='播放';
                    document.getElementById('i_start').setAttribute("style", "display:block;");
                    document.getElementById('i_stop').setAttribute("style", "display:none;");
                }
            }
        </script>

    </p>
</div>

</body>
</html>