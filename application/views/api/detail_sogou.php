
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>我是第<?php echo $row->count_id?>位在搜狗浏览器为山区孩子读诗的人，快来和我一起为爱读诗！</title>
    <meta name="renderer" content="webkit">
    <meta name="description" content="你为山区的孩子读诗，我为山区的孩子送书" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/static/css/x-admin.css" media="all">
    <link rel="stylesheet" href="/static/css/app.css" media="all">
    <link rel="stylesheet" href="/static/lib/fontello/css/fontello.css" media="all">
    <script type="text/javascript" src="/static/js/tool-nativeSchema.js"></script>
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
        <img src="/static/images/10_01.png" width="100%">
    </div>
    <div>
        <div class="f-l" style="width:30%"><img src="/static/images/10_02.png" width="100%"></div>
        <div class="f-l" style="width:70%;position: relative;"><img src="/static/images/10_03.png" width="100%">
            <div style="font-size:140%;position: absolute;color: #ed3f00;letter-spacing:4px;font-weight: bold;top: 0;"><?php echo $row->count_id?></div>
        </div>
    </div>

    <div>
        <img src="/static/images/10_05.png" width="100%">
    </div>
    <div>
        <div class="f-l" style="width:70%"><img src="/static/images/10_06.png" width="100%"></div>
        <div class="f-l" style="width:30%;position: relative;">
            <img src="/static/images/10_07.png" width="100%">
            <div style="position: absolute;color: #ed3f00;left: 0;bottom: 0;">
                <i class="icon-play-circled" id="i_start" onclick="playFn()"></i>
                <i class="icon-pause-circled" id="i_stop" onclick="playFn()" style="display: none;"></i>
            </div>
        </div>
    </div>

    <div>
        <img src="/static/images/10_08.png" width="100%">
    </div>
    <div>
        <img src="/static/images/2.jpg" width="100%">
    </div>
    <div>
        <img src="/static/images/3.jpg" width="100%">
    </div>
    <div>
        <img src="/static/images/44_01.png" width="100%">
    </div>
    <div>
        <a href="javascript:void(-1);" onclick="linkGo2();"><img src="/static/images/44_02.png" width="100%"></a>
    </div>
    <div>
        <img src="/static/images/44_03.png" width="100%">
    </div>
    <div>
        <a href="http://c.eqxiu.com/s/PBSbKfRo"><img src="/static/images/44_04.png" width="100%"></a>
    </div>
    <div>
        <img src="/static/images/44_05.png" width="100%">
    </div>
    <div>
        <a href="http://c.eqxiu.com/s/PBSbKfRo"><img src="/static/images/55_02.png" width="100%"></a>
    </div>
    <div>
        <img src="/static/images/55_02-02.png" width="100%">
    </div>


    <div style="display:none">
        <audio id="audio" src="<?php echo $row->url?>" controls="controls" style="display: none">
        </audio>
    </div>
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

    <script>
        function linkGo2() {
            nativeSchema.loadSchema({
                schema: "SogouMSE://gotoBTVPoem",
                protocal: "sogoumse",
                loadWaiting: "5000",
                failUrl: "https://itunes.apple.com/cn/app/sou-gou-liu-lan-qi-qiang-piao/id548608066?l=en&mt=8",
                apkInfo: {
                    PKG: "sogou.mobile.explorer",
                    CATEGORY: "android.intent.category.DEFAULT",
                    ACTION: "android.intent.action.VIEW"
                }
            });
        }
    </script>

    <script language="javascript">
        function linkGo(){
            if (navigator.userAgent.match(/(iPhone|iPod|iPad);?/i)) {
                var loadDateTime = new Date();
                setTimeout(function () {
                    var timeOutDateTime = new Date();
                    if (!loadDateTime || timeOutDateTime - loadDateTime <3210) {
                        //window.location = "https://itunes.apple.com/cn/app/sou-gou-liu-lan-qi-qiang-piao/id548608066?l=en&mt=8";
                    }
                },3200);
                self.location = 'SogouMSE://';
                //window.location = 'http://www.baidu.com';

            } else if (navigator.userAgent.match(/android/i)) {
                alert("暂只支持ios");
                return;
                var state = null;
                try {
                    state = window.open("SogouMSE://gotoBTVPoem", '_blank');
                } catch(e) {}
                if (state) {
                    window.close();
                } else {
                    window.location = "https://itunes.apple.com/cn/app/sou-gou-liu-lan-qi-qiang-piao/id548608066?l=en&mt=8";
                }
            }
        }

    </script>
</div>
</body>
</html>