<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="__PUBLIC__/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/news_1.css">
<link href='__PUBLIC__/css/news_2.css' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/news_1.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/news_2.js"></script> 
<script src="__PUBLIC__/js/page.js"></script>
<title>其他新闻</title>
<script type="text/javascript">
$(function(){
changepage('Index/News/news_page','Index/News/noticearticle','news_page1','news_list1','dangjian',1);
changepage('Index/News/news_page','Index/News/noticearticle','news_page2','news_list2','kejichuangxin',1);
changepage('Index/News/news_page','Index/News/noticearticle','news_page3','news_list3','duiwaijiaoliu',1);
});

</script>
</head>

<body>

<div class="news_1">
  <div class="business3">
    <h2 >其他新闻</h2>
  </div>
  <h2 class="demo2">这里可以查询到其他新闻</h2>
  <div id="tabs4">
    <ul class="tab">
    
      <li><a href="#tabs-1" title="">党建新闻</a></li>
      <li><a href="#tabs-2" title="">科技创新新闻</a></li>
      <li><a href="#tabs-3" title="">对外交流新闻</a></li>
    </ul>
    <div id="tabs_container">
      <div id="tabs-1">
      <ul class="new_ul" id="news_page1">
        </ul>
        <div class="page_list top" id="news_list1"></div>

      </div>
      <div id="tabs-2">
 <ul class="new_ul" id="news_page2">
        </ul>
        <div class="page_list top" id="news_list2"></div>
        
       </div>
      <div id="tabs-3">
 <ul class="new_ul" id="news_page3">
        </ul>
        <div class="page_list top" id="news_list3"></div>
        
      </div>
      
    </div>
    <!--End tabs container--> 
    
  </div>
  <!--End tabs--> 
</div>


</body>
</html>