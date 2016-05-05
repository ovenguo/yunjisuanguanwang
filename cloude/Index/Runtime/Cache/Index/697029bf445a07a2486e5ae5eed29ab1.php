<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>公告查看</title>
<link href="__PUBLIC__/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="__PUBLIC__/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/default.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/component.css" />
<!-- js -->
<script src="__PUBLIC__/js/jquery.min.js"></script>
<script src="__PUBLIC__/js/__ajax.js"></script>
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
<script type="text/javascript">
function getdata(id){
$.post("/cloude/index.php/Index/Index/noticearticle_data?id="+id,{},function(data){
  $('#title').text(data['notice']['title']);
  $('#date').text("发布日期："+data['notice']['date']);
  $('#content').html(data['notice']['content']);
  $('#username').text("编辑："+data['notice']['username']);
  $('#ftSize1').text(data['notice']['type']);
  $('#page').html("<a id='color_a' href='javascript:;' onclick='getdata("+data['before']['id']+");'>上一页："+data['before']['title']+"</a><a id='color_a' href='javascript:;' onclick='getdata("+data['next']['id']+");'>下一页："+data['next']['title']+"</a>");
});}
$(function(){
$.post("/cloude/index.php/Index/Index/noticearticle_data",{},function(data){
  getdata(data['firstid']);
}); 
});
</script>
</head>

<body  class="article">
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
          <li><a class="dr-icon dr-icon-bullhorn" href="/cloude/index.php/Index/Qingjia/index">网上请假</a></li>
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
     
            <li><a id="ftSize1" href="<?php echo U('Index/Index/notice');?>" class=""></a></li>
          
          </ul>
        </div>
        <div class="clearfix"> </div>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
</div>
<script src="__PUBLIC__/js/init.js"></script>
<div id="wrapper">
<div class="main">
  <article  class="panel">
    
      <h3 id="title"></h3>
      <h5 id="date"><h5>
      <h4 id="content"></h4>
      <br/><br/>
      <br/><br/>
      <br/>
      <h5 id="username"></h5>
      <h3 id="page"></h3>

     
     </article>
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