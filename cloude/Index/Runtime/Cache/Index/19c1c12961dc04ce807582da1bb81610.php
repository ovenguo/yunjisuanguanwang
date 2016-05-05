<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>网上请假</title>
<link href="__PUBLIC__/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="__PUBLIC__/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/default.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/component.css" />
<!-- js -->
<script src="__PUBLIC__/js/jquery.min.js"></script>
<script src="__PUBLIC__/js/modernizr.custom.js"></script>
<!-- //js -->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript" src="__PUBLIC__/js/move-top.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/easing.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
	$(".scroll").click(function(event){		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
	});
});
</script>
</head>

<body>
<div id="home" class="" >
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
          <li><a class="dr-icon dr-icon-bullhorn" href="/cloude/index.php/Index/Index/qingjia">网上请假</a></li>
          <li><a class="dr-icon dr-icon-download" href="http://wlxt.cduestc.cn/">网络学堂</a></li>
          <li><a class="dr-icon dr-icon-settings" href="#">关于我们</a></li>
          <li><a class="dr-icon dr-icon-user" href="#">用户登陆</a></li>
        </ul>
        </nav>
      </div>
      <script src="__PUBLIC__/js/ytmenu.js"></script>
      <div class="navi">
        <div class="head-logo"> <a href="<?php echo U('Index/Index/index');?>"><img src="__PUBLIC__/images/logo.png" alt=" "></a>
          <div class="yusi-logo"> <span class="yusi-mono">云计算科学与技术系</span> <span class="yusi-bloger">电子科技大学成都学院</span> </div>
        </div>
        <div class="top-nav"> <span class="menu"><img src="__PUBLIC__/images/menu.png" alt="" /></span>
          <ul id="mg1" class="nav1">
            <li><a id="ftSize1" href="#" class="scroll">网上请假</a></li>
          </ul>
        </div>
        <div class="clearfix"> </div>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
</div>
<div class="contact-us1-bottom">
<div id="article" class="about1">
<div id="plate" class="front">  
<div id="width1" class="panel">

  <form>
    <input placeholder="姓名" required="" type="text">
    <input placeholder="学号" required="" type="text">
    <input placeholder="请假时间" required="" type="text">
    <input placeholder="预计返校时间" required="" type="text">
    <textarea placeholder="请假原因" required=""></textarea>
    <input class="send" value="发送" onclick="rec()" type="submit">
  </form>
  <div class="clearfix"> </div>
  
</div></div>
<div id="container" class="beginning">
            <div id="left-wing">
                <div class="top_left curvable"> </div>
                <div class="bottom_left curvable"> </div>
                <div class="wing wing1"></div>
                <div class="wing wing2"></div>
            </div>

            <div id="right-wing">
                <div class="top_right curvable"> </div>
                <div class="bottom_right curvable"> </div>
                <div class="wing wing3"></div>
                <div class="wing wing4"></div>
            </div>

        </div>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/send.css">
<script type="text/javascript" src="__PUBLIC__/js/send.js"></script>
</div></div>
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
</body>
</html>