
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>我是第<?php echo $row->count_id?>位在搜狗浏览器为山区孩子读诗的人，快来和我一起为爱读诗！</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/static/css/x-admin.css" media="all">
    <link rel="stylesheet" href="/static/css/app.css" media="all">
    <link rel="stylesheet" href="/static/lib/fontello/css/fontello.css" media="all">
    <style type="text/css">
        .icon-play-circled, .icon-pause-circled {font-size: 200%;}
    </style>
</head>
<body>
<div style='margin:0 auto;display:none;'>
    <img src='http://book.btv.com.cn/static/images/wx.png' />
</div>
<div>
    <div>
        <img src="/static/images/1.jpg" width="100%">
    </div>
<!--    <div>-->
<!--        <div class="f-l" style="width:30%"><img src="/static/images/7_02.png" width="100%"></div>-->
<!--        <div class="f-l" style="width:70%;position: relative;"><img src="/static/images/7_03.png" width="100%">-->
<!--            <div style="font-size:140%;position: absolute;color: #ed3f00;letter-spacing:4px;font-weight: bold;bottom: 0;">--><?php //echo $row->count_id?><!--</div>-->
<!--        </div>-->
<!--    </div>-->
    <div>
        <img src="/static/images/2.jpg" width="100%">
    </div>
    <div>
        <img src="/static/images/3.jpg" width="100%">
    </div>
    <div>
        <img src="/static/images/4.jpg" width="100%">
    </div>


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
</div>
</body>
</html>