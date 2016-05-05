<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link href="__PUBLIC__/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="__PUBLIC__/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/default.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/component.css" />
<!-- js -->
<script src="__PUBLIC__/js/jquery.min.js"></script>
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
          <li><a class="dr-icon dr-icon-user" href="#">主页</a></li>
          <li><a class="dr-icon dr-icon-camera" href="notice.html">公告全览</a></li>
          <li><a class="dr-icon dr-icon-heart" href="#">新闻全览</a></li>
          <li><a class="dr-icon dr-icon-bullhorn" href="#">网上请假</a></li>
          <li><a class="dr-icon dr-icon-download" href="#">网络学堂</a></li>
          <li><a class="dr-icon dr-icon-settings" href="#">关于我们</a></li>
          <li><a class="dr-icon dr-icon-user" href="#">用户登陆</a></li>
        </ul>
      </nav>
    </div>
    <script src="__PUBLIC__/js/ytmenu.js"></script> 
    <!--end左侧菜单-->
      <div class="navi">
        <div class="head-logo"> <a href="index.html"><img src="__PUBLIC__/images/logo.png" alt=" "></a><!--alt 对图片的文字说明-->
          <div class="yusi-logo"> <span class="yusi-mono">云计算科学与技术系</span> <span class="yusi-bloger">电子科技大学成都学院</span> </div>
        </div>
        <div class="top-nav"> <span class="menu"><img src="__PUBLIC__/images/menu.png" alt="" /></span><!--标题栏文字特效-->
          <ul class="nav1">
            <!--#xxx标签名称-->
            <li><a href="#hot" class="scroll">实用功能</a></li>
            <!--待修改标签名称及其关联-->
            <li><a href="#new" class="scroll">新闻速览</a></li>
            <li><a href="#notice" class="scroll">公告速览</a></li>
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
      <div  id="top" class="callbacks_container">
        <ul class="rslides" id="slider3">
          <li>
            <div class="banner-info">
              <div class="banner-inf">
                <div class="banner-info-left">
                  <h2>厚德、笃学、求实、创新</h2>
                  <div class="skills">
                    <div class="skill1" style="width:25%"> </div>
                  </div>
                  <p> <span>以厚德为首，以笃学为本</span> 以求实为途，以创新为最求</p>
                  <div class="us"> <a href="#">Contact Us</a> </div>
                </div>
                <div class="banner-info-right"> <img src="__PUBLIC__/images/index_top_1.png" alt=" " /> </div>
                <div class="clearfix"> </div>
              </div>
            </div>
          </li>
          <li>
            <div class="banner-info">
              <div class="banner-inf">
                <div class="banner-info-left">
                  <h2>&nbsp; </h2>
                  <div class="skills">
                    <div class="skill1" style="width:50%"> </div>
                  </div>
                  <p> <span></span> 我系学生团队荣获全国SPARK大赛二等奖</p>
                  <div class="us"> <a href="#">Contact Us</a> </div>
                </div>
                <div class="banner-info-right"> <img src="__PUBLIC__/images/index_top_2.png" alt=" " /> </div>
                <div class="clearfix"> </div>
              </div>
            </div>
          </li>
          <li>
            <div class="banner-info">
              <div class="banner-inf">
                <div class="banner-info-left">
                  <h2>&nbsp;</h2>
                  <div class="skills">
                    <div class="skill1" style="width:75%"> </div>
                  </div>
                  <p> <span></span> 我系学生在学院11届运动会上获得团体第3名的好成绩</p>
                  <div class="us"> <a href="#">Contact Us</a> </div>
                </div>
                <div class="banner-info-right"> <img src="__PUBLIC__/images/index_top_3.png" alt=" " /> </div>
                <div class="clearfix"> </div>
              </div>
            </div>
          </li>
          <li>
            <div class="banner-info">
              <div class="banner-inf">
                <div class="banner-info-left">
                  <h2>&nbsp; </h2>
                  <div class="skills">
                    <div class="skill1" style="width:100%"> </div>
                  </div>
                  <p> <span></span> 真实的云计算大数据实训实验室，为学生提供真实的云计算平台使用及开发环境</p>
                  <div class="us"> <a href="#">Contact Us</a> </div>
                </div>
                <div class="banner-info-right"> <img src="__PUBLIC__/images/index_top_4.png" alt=" " /> </div>
                <div class="clearfix"> </div>
              </div>
            </div>
          </li>
        </ul>
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
  <p>欢迎来到云计算科学与技术系官网 <span>在这里，你可以全面的了解我们</span></p>
</div>
<!-- //banner --> 
<!-- hot -->
<div id="hot" class="portfolio">
  <div class="container">
    <h3>实用功能</h3>
s
  <!-- pop-up-box --> 
  <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
			</script> 
  <!-- //pop-up-box --> 
  <!---- Script for gallery Here ---> 
  <script type="text/javascript" src="__PUBLIC__/js/jquery.mixitup.min.js"></script> 
  <script type="text/javascript">
					$(function () {
						
						var filterList = {
						
							init: function () {
							
								// MixItUp plugin
								// http://mixitup.io
								$('#portfoliolist').mixitup({
									targetSelector: '.portfolio',
									filterSelector: '.filter',
									effects: ['fade'],
									easing: 'snap',
									// call the hover effect
									onMixEnd: filterList.hoverEffect()
								});				
							
							},
							
							hoverEffect: function () {
							
								// Simple parallax effect
								$('#portfoliolist .portfolio').hover(
									function () {
										$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
										$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
									},
									function () {
										$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
										$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
									}		
								);				
							
							}
				
						};
						
						// Run the show!
						filterList.init();
						
						
					});	
					</script> 
  <!--- Gallery Script Ends --->
  <div class="donec-text"> <img src="__PUBLIC__/images/line-1.png" alt=" " />
    <p>如果你想添加其他功能到该快速导航区域，请联系我们<span>Email:</span></p>
    <img src="__PUBLIC__/images/line-1.png" alt=" " /> </div>
</div>
<div class="reach">
  <div class="container"> </div>
</div>
</div>
</div>
<!-- //hot --> 

<!-- pricing -->
<div id="new" class="pricing">
  <div class="container">
    <div class="price">
      <h2>新闻速览</h2>
      <p>这里可以浏览到最新新闻</p>
    </div>
    <div class="basic">
      <div class="business">
        <h2><?php echo ($news['title']); ?></h2>
      </div>
      <div class="value">
        <p>时间：<?php echo (date('Y-m-d H:i',$news['date'])); ?> 编辑：<?php echo ($news['username']); ?></p>
      </div>
      <ul style="overflow:hidden">
        <li><span><?php echo ($news['content']); ?></span></li>
      </ul>
      <div class="buy-me"> <a href="#">查看详情</a> </div>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<div class="contact1">
  <div class="container">
    <p>如果你想查看更多新闻</p>
    <div class="contact-us"> <a href="#">点击我</a> </div>
  </div>
</div>
<div id="notice" class="pricing">
  <div class="container">
    <div class="price">
      <h2>公告速览</h2>
      <p>这里可以浏览到最新公告</p>
    </div>
    <div class="basic">
      <div class="business">
        <h2><?php echo ($notice['title']); ?></h2>
      </div>
      <div class="value">
        <p>时间：<?php echo (date('Y-m-d H:i',$notice['date'])); ?> 编辑：<?php echo ($notice['username']); ?></p>
      </div>
        <ul style="overflow:hidden">
        <li><span><?php echo ($notice['content']); ?></span></li>
      </ul>
      <div class="buy-me"> <a href="#">查看详情</a> </div>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<div class="contact1">
  <div class="container">
    <p>如果你想查看更多公告</p>
    <div class="contact-us"> <a href="#">点击我</a> </div>
  </div>
</div>
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