layui.use(['element'], function(){
	$ = layui.jquery;
  	element = layui.element(); 
  
  //导航的hover效果、二级菜单等功能，需要依赖element模块
  // 侧边栏点击隐藏兄弟元素
	$('.layui-nav-item').click(function(event) {
		$(this).siblings().removeClass('layui-nav-itemed');
	});

	$('.layui-tab-title li').eq(0).find('i').remove();

	height = $('.layui-layout-admin .site-demo').height();
	$('.layui-layout-admin .site-demo').height(height-100);

	if($(window).width()<750){
		trun = 0;
		$('.x-slide_left').css('background-position','0px -61px');
	}else{
		trun = 1;
	}
	$('.x-slide_left').click(function(event) {
		if(trun){
			$('.x-side').animate({left: '-160px'},200).siblings('.x-main').animate({left: '0px'},200);
			$(this).css('background-position','0px -61px');
			//$('.x-side').animate({left: '-120px'},200).siblings('.x-main').animate({left: '40px'},200);
			//$('.x-side').find(".layui-nav-item a i").css("float", "right");
			//$('.x-side').find(".layui-nav-item a").css("padding-right", "12px");
			//$('.x-side').find(".layui-nav-more").hide();
			trun=0;
		}else{
			$('.x-side').animate({left: '0px'},200).siblings('.x-main').animate({left: '160px'},200);
			$(this).css('background-position','0px 0px');
			//$('.x-side').find(".layui-nav-item a i").css("float", "left");
			//$('.x-side').find(".layui-nav-item a").css("padding-right", "20px");
			//$('.x-side').find(".layui-nav-more").show();
			trun=1;
		}
		
	});



  	//监听导航点击
  	element.on('nav(side)', function(elem){
    	title = elem.find('cite').text();
    	url = elem.find('a').attr('_href');
    	// alert(url);

    	for (var i = 0; i <$('.x-iframe').length; i++) {
    		if($('.x-iframe').eq(i).attr('src')==url){
    			element.tabChange('x-tab', url);
    			return;
    		}
    	};

    	res = element.tabAdd('x-tab', {
	        id: url,
	        title: title,
	        content: '<iframe frameborder="0" src="'+url+'" class="x-iframe"></iframe>'
		});
		element.tabChange('x-tab', url);
    	$('.layui-tab-title li').eq(0).find('i').remove();
  });
});

