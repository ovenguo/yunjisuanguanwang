<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>云计算新闻</title>
<link href="__PUBLIC__/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="__PUBLIC__/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/default.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/component.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/notice-top.css">

<!-- js -->
<script  src="__PUBLIC__/js/jquery.min.js"></script>
<script src="__PUBLIC__/js/modernizr.custom.js"></script>

<!-- //js -->
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- //device-width定义输出设备的屏幕可见宽度。initial-scale初始缩放。 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<!--//keywords设置网站关键字-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //application/x-javascript动态生成脚本；addEventListener是一个侦听事件并处理相应的函数；hideURLbar隐藏手机地址栏；
    target.addEventListener(type, listener, useCapture); target 文档节点、document、window 或 XMLHttpRequest。 type 字符串，事件名称，不含“on”，比如“click”、“mouseover”、“keydown”等。 listener 实现了 EventListener 接口或者是 JavaScript 中的函数。 useCapture 是否使用捕捉，看了后面的事件流一节后就明白了，一般用 false -->
<!-- //for-mobile-apps -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="__PUBLIC__/js/move-top.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/easing.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
	$(".scroll").click(function(event){		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);//回到顶部；this.hash：获取当前链接的标签值：
	});
});
/*
jQuery(document).ready(function(){});
$("div p"); // (1)得到所有<div>标签下的<p>元素。
$("div.container"); // (2)得到class 为container的<div>元素
$("div #msg"); // (3)得到<div>标签下面id为msg的元素
$("table a",context); // (4)得到context为 上下文的table里面所有的连接元素
$("#myId"); //(5)得到id为myid的所有元素

preventDefault() 方法阻止元素发生默认的行为
如：防止链接打开 URL：
$("a").click(function(event){
  event.preventDefault();
});
*/
</script>
<!-- start-smoth-scrolling -->
</head>

<body>


<!-- banner -->
<div id="home" class="banner">
  <div class="navigation">
    <div class="container"> 
      <!--左侧菜单-->
      <div class="side">
        <nav class="dr-menu">
          <div class="dr-trigger"><span id="con" class="dr-icon dr-icon-menu"></span><a class="dr-label">快速导航</a></div>
          <ul>
          <li><a class="dr-icon dr-icon-user" href="<?php echo U('Index/Index/index');?>">主页</a></li>
          <li><a class="dr-icon dr-icon-camera" href="<?php echo U('Index/Index/notice');?>">公告全览</a></li>
          <li><a class="dr-icon dr-icon-heart" href="<?php echo U('Index/News/news');?>">新闻全览</a></li>
          <li><a class="dr-icon dr-icon-bullhorn" href="/cloude/index.php/Index/Qingjia/index">网上请假</a></li>
          <li><a class="dr-icon dr-icon-download" href="http://wlxt.cduestc.cn/">网络学堂</a></li>
          <li><a class="dr-icon dr-icon-settings" href="#">关于我们</a></li>
          <li><a class="dr-icon dr-icon-user" href="#">用户登陆</a></li>
        </ul>
        </nav>
      </div>
      <script src="__PUBLIC__/js/ytmenu.js"></script> 
      <!--end左侧菜单-->
      <div class="navi">
        <div class="head-logo"> <a href="<?php echo U('Index/Index/index');?>"><img src="__PUBLIC__/images/logo.png" alt=" "></a>
          <div class="yusi-logo"> <span class="yusi-mono">云计算科学与技术系</span> <span class="yusi-bloger">电子科技大学成都学院</span> </div>
        </div>
        <div class="top-nav"> <span class="menu"><img src="__PUBLIC__/images/menu.png" alt="" /></span>
          <ul class="nav1">
            <li><a href="#about_student" class="scroll">学生相关</a></li>
            <li><a href="#about_teacher" class="scroll">教师相关</a></li>
            <li><a href="#about_all" class="scroll">全体相关</a></li>
          </ul>
        </div>
        <div class="clearfix"> </div>
      </div>
      <div class="clearfix"> </div>
      <!--//End-slider-script --> 
      
      <script src="__PUBLIC__/js/responsiveslides.min.js"></script> 
      <script>
				    // You can also use "$(window).load(function() {"
				    $(function () {
				      // Slideshow 4
				      $("#slider3").responsiveSlides({
				        auto: true,
				        pager: true,
				        nav: true,
				        speed: 500,
				        namespace: "callbacks",
				        before: function () {
				          $('.events').append("<li>before event fired.</li>");
				        },
				        after: function () {
				          $('.events').append("<li>after event fired.</li>");
				        }
				      });
				
				    });
				  </script>
      
        <script  src="__PUBLIC__/js/notice-top.js"></script>
		<div class="mainSlider">
			<div class="sliderContent">
				<ul>
					<li ><img src="__PUBLIC__/images/1.jpg"></li>
					<li ><img src="__PUBLIC__/images/2.jpg"></li>
					<li ><img src="__PUBLIC__/images/3.jpg"></li>
					<li ><img src="__PUBLIC__/images/4 (2).jpg"></li>
					<li ><img src="__PUBLIC__/images/5 (2).jpg"></li>
				</ul>
			</div>
		</div>
     
      <!-- Slider-ends-Here --> 
    </div>
  </div>
</div>
<script> 
				$( "span.menu" ).click(function() {
				$( "ul.nav1" ).slideToggle( 300, function() {
				 // Animation complete.
				  });
				});
							
		</script>
<div class="banner-bottom-text">
  <p> <span>&nbsp;</span></p>
</div>
<!-- //banner --> 

<!-- pricing -->
<div id="about_student" class="pricing">
  <div class="container">
    <iframe src="<?php echo U('Index/News/student');?>" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" class="iframe2"></iframe>
    <div class="clearfix"> </div>
  </div>
</div>
<div class="contact1"> </div>
<!-- pricing --> 

<!-- pricing -->
<div id="about_teacher" class="pricing">
  <div class="container">
   <iframe src="<?php echo U('Index/News/teacher');?>" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" class="iframe2"></iframe>
    <div class="clearfix"> </div>
  </div>
</div>
<div class="contact1"> </div>
<!-- pricing --> 

<!-- pricing -->
<div id="about_all" class="pricing">
  <div class="container">
    <iframe src="<?php echo U('Index/News/other');?>" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" class="iframe2"></iframe>
    <div class="clearfix"> </div>
  </div>
</div>
<div class="contact1"> </div>
<!-- pricing --> 

<!-- footer -->
<div class="footer">
  <div class="container">
    <div class="footer-logo">
      <div class="footer-logo-left"> </div>
      <div class="footer-logo-right">
        <p>Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
      </div>
      <div class="clearfix"> </div>
    </div>
    <div class="footer-icons">
      <ul>
        <li><a href="#" class="fb"> </a></li>
        <li><a href="#" class="fb1"> </a></li>
        <li><a href="#" class="fb2"> </a></li>
        <li><a href="#" class="fb3"> </a></li>
        <li><a href="#" class="fb4"> </a></li>
        <li><a href="#" class="fb5"> </a></li>
        <li><a href="#" class="fb6"> </a></li>
      </ul>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<!-- //footer --> 
<!-- here stars scrolling icon --> 
<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
	</script> 
<!-- //here ends scrolling icon -->