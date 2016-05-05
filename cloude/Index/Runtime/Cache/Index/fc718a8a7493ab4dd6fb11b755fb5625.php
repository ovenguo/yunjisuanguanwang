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
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/button.css" />
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
<div class="md-modal md-effect-13" id="modal-13">
  <div class="md-content">
    <h3>提交确认</h3>
    <div>
      <p><strong>&nbsp;注意：</strong>提交后不能修改，请确认填写无误后再提交！</p>
      <ul>
        <li><strong>1:</strong>请假需填写完所有选项框，未填写完毕请单击“取消”继续填写。</li>
        <li><strong>2:</strong>发送请求后可以在“请假查询”页面查询审批结果。</li>
        <li><strong>3:</strong>由于是人工审批，建议提前几天填写请假申请。 </li>
      </ul>
      <div class="send-buttom">
        <input class="send" value="确定" type="submit" >
        <input class="md-close" value="取消" type="submit" >
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/send.css">
        <script type="text/javascript" src="__PUBLIC__/js/send.js"></script> 
      </div>
    </div>
  </div>
</div>
<div id="home" class="" >
  <div class="navigation">
    <div class="container"> 
      <!--左侧菜单-->
      <div class="side">
        <nav class="dr-menu">
          <div class="dr-trigger"><span id="con" class="dr-icon dr-icon-menu"></span><a class="dr-label">快速导航</a></div>
          <ul>
            <li><a class="dr-icon dr-icon-user" href="/cloude/index.php/Index/Index/index">主页</a></li>
            <li><a class="dr-icon dr-icon-camera" href="/cloude/index.php/Index/Index/notice">公告全览</a></li>
            <li><a class="dr-icon dr-icon-heart" href="/cloude/index.php/Index/News/news">新闻全览</a></li>
            <li><a class="dr-icon dr-icon-bullhorn" href="/cloude/index.php/Index/Qingjia/index">网上请假</a></li>
            <li><a class="dr-icon dr-icon-download" href="http://wlxt.cduestc.cn/">网络学堂</a></li>
            <li><a class="dr-icon dr-icon-settings" href="#">关于我们</a></li>
            <li><a class="dr-icon dr-icon-user" href="#">用户登陆</a></li>
          </ul>
        </nav>
      </div>  
      <script src="__PUBLIC__/js/ytmenu.js"></script>
      <div class="navi">
        <div class="head-logo"> <a href="index.html"><img src="__PUBLIC__/images/logo.png" alt=" "></a>
          <div class="yusi-logo"> <span class="yusi-mono">云计算科学与技术系</span> <span class="yusi-bloger">电子科技大学成都学院</span> </div>
        </div>
        <div class="top-nav"> <span class="menu"><img src="__PUBLIC__/images/menu.png" alt="" /></span>
          <ul id="mg1" class="nav1">
            <li><a id="ftSize1" href="qingjia.html" >网上请假</a></li>
            <li><a id="ftSize1" href="chaxun.html" >请假查询</a></li>
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
        <form id="qingjia_form">
        <table id="qingjia_table">
        <tr>
          <td><input placeholder="姓名" type="text" id="_name"></td>
          <td><input placeholder="学号"  type="text" id="_studentid"></td>
          </tr>
          <tr>
          <td><input placeholder="请假时间" type="text" id="_qingjiashijian"></td>
          <td><input placeholder="预计返校时间"  type="text" id="_fanxiaoshijian"></td>
          </tr>
          </table>
          <textarea placeholder="请假原因" id="_content"></textarea>
          <input id="tijiao" class="md-trigger" value="发送" type="button" data-modal="modal-13">
          <script>
			// this is important for IEs
			var polyfilter_scriptpath = "__PUBLIC__/js/";
		</script> 
          <script src="__PUBLIC__/js/button.js"></script>
        </form>
        <div class="clearfix"> </div>
      </div>
    </div>
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
  </div>
</div>
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
<div class="md-overlay"></div>
<!-- the overlay element 变暗-->
</body>
</html>