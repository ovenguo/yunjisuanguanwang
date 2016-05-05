<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>云计算科学与技术系</title>
    <link rel="stylesheet" type="text/css" href="__Public__/css/top.css"/>

    <link rel="icon" href="__Public__/images/logo.png" type="image/x-icon" />

    <link rel="stylesheet" type="text/css" href="__Public__/css/daohang.css"/>

    <link rel="stylesheet" type="text/css" href="__Public__/css/main1.css"/>

    <link rel="stylesheet" type="text/css" href="__Public__/css/gonggao.css"/>

    <link rel="stylesheet" type="text/css" href="__Public__/css/bootstrap.css"/>

    <link rel="stylesheet" type="text/css" href="__Public__/css/style.css" />
</head>

<body>
    <div class="clolor">
        <div class="c-top"></div>
        <div class="c-danghang"></div>
        <div class="c-main1"></div>
        <!--footer-->
        <div class="c-bot">
            <div style="height:2px"></div>
            <p>
                Copyright © 电子科技大学成都学院 云计算科学与技术系
                <br>Power by MSTC</p>
        </div>
    </div>
    <div class="background">
        <div class="top">
            <div class="head-logo">
                <a href="__Public__/index.html">
                    <img src="__Public__/images/logo.png" alt=" " >
                </a>
                <!--alt 对图片的文字说明--> </div>
            <div class="yusi-logo">
                <span class="yusi-bloger bloger1">电子科技大学</span>
                <span class="yusi-bloger bloger2">成都学院</span>
                <span class="yusi-mono">云计算科学与技术系</span>
                <span class="yusi-bloger bloger3">国内唯一开设云计算本科教学的专业系</span>
                <span class="yusi-bloger bloger4">BEYOND THE SKY IS OUR DREAM</span>
                <span class="yusi-bloger bloger5">打造中国云计算的黄埔军校</span>
            </div>
            <div class="xibiao">
                <span class="xibiao1">勤励仁育</span>
                <span class="xibiao2">写思践行</span>
            </div>
        </div>
        <!--top栏结束，导航栏开始-->
        <div class="daohang">
            <nav>
                <ul class="dropdown">
                    <li>
                        <a href="__Public__/html/index.html">首页</a>
                    </li>
                    <li class="drop">
                        <a>关于我们</a>
                        <ul class="sub_menu">
                            <li>
                                <a href="__Public__/html/other.html">云计算系简介</a>
                            </li>
                            <li>
                                <a href="#">办学特色</a>
                            </li>
                            <li>
                                <a href="#">组织结构</a>
                            </li>
                            <li>
                                <a href="#">师资队伍</a>
                            </li>
                            <li>
                                <a href="#">联系我们</a>
                            </li>
                        </ul>
                    </li>
                    <li class="drop">
                        <a href="#">专业设置</a>
                        <ul class="sub_menu">
                            <li>
                                <a href="#">专业设置</a>
                            </li>
                            <li>
                                <a href="#">本科专业</a>
                            </li>
                            <li>
                                <a href="#">专科专业</a>
                            </li>
                        </ul>
                    </li>
                    <li class="drop">
                        <a href="#">招生就业</a>
                        <ul class="sub_menu">
                            <li>
                                <a href="#">2016招生概况</a>
                            </li>
                            <li>
                                <a href="#">本科招生</a>
                            </li>
                            <li>
                                <a href="#">专科招生</a>
                            </li>
                            <li>
                                <a href="#">毕业生就业指导</a>
                            </li>
                        </ul>
                    </li>
                    <li class="drop">
                        <a href="#">新闻公告</a>
                        <ul class="sub_menu">
                            <li>
                                <a href="#">系公告</a>
                            </li>
                            <li>
                                <a href="#">系新闻</a>
                            </li>
                        </ul>
                    </li>

                    <li class="drop">
                        <a href="#">教学科研</a>
                        <ul class="sub_menu">
                            <li>
                                <a href="#">科研成果</a>
                            </li>
                            <li>
                                <a href="#">教学管理</a>
                            </li>
                            <li>
                                <a href="#">精品课程</a>
                            </li>
                            <li>
                                <a href="#">科研机构</a>
                            </li>
                        </ul>
                    </li>
                    <li class="drop">
                        <a href="#">学生天地</a>
                        <ul class="sub_menu">
                            <li>
                                <a href="#">活动新闻</a>
                            </li>
                            <li>
                                <a href="#">学生获奖</a>
                            </li>
                            <li>
                                <a href="#">学生作品</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="">登录</a>
                    </li>
                </ul>
            </nav>

            <script src="__Public__/js/jquery.min.js"></script>
            <script src="__Public__/js/index.js"></script>
        </div>
        <!--导航栏结束，滚动图片，通知公告，党员之窗开始-->
        <div class="main1">
            <!--滚动图片栏开始-->
            <div class="images">
                <script src="__Public__/js/responsiveslides.min.js"></script>
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
                <div   class="callbacks_container">
                    <ul class="rslides" id="slider3">
                        <li>
                            <div class="banner-info">
                                <div class="banner-inf">
                                    <div class="banner-info-right">
                                        <img src="__Public__/images/index_top_1.png" alt=" " />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="banner-info">
                                <div class="banner-inf">
                                    <div class="banner-info-right">
                                        <img src="__Public__/images/index_top_2.png" alt=" " />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="banner-info">
                                <div class="banner-inf">
                                    <div class="banner-info-right">
                                        <img src="__Public__/images/index_top_3.png" alt=" " />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="banner-info">
                                <div class="banner-inf">
                                    <div class="banner-info-right">
                                        <img src="__Public__/images/index_top_4.png" alt=" " />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Slider-ends-Here --> </div>

            <script> 
                  $( "span.menu" ).click(function() {
                  $( "ul.nav1" ).slideToggle( 300, function() {
                   // Animation complete.
                    });
                  });                
            </script>
            <!--滚动图片结束，公告模板开始-->
            <div class="gonggao">
                <div id="module_234" class="module_box module_box_introduct">
                    <div class="module_box_1">

                        <div class="module_title">
                            <span class="module_sign">公告通知</span>
                            <span class="module_more">
                                <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637">更多&gt;&gt;</a>
                            </span>
                        </div>

                        <div id="module_content_234" class="module_content">
                            <div class="article">
                                <ul>

                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1336" target="_self" title="关于2016年 “卫生免检寝室”初选结果的公示" style="">关于2016年 “卫生免检寝室”.</a>
                                        </span>
                                        <span class="date">6月3日</span>
                                        <span class="clear"></span>
                                    </li>

                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1285" target="_self" title="关于电子科技大学成都学院第七届电子设计竞赛获奖通知" style="">关于电子科技大学成都学院第.</a>
                                        </span>
                                        <span class="date">5月22日</span>
                                        <span class="clear"></span>
                                    </li>

                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1283" target="_self" title="第七届院电子设计竞赛获奖名单公示" style="">第七届院电子设计竞赛获奖名.</a>
                                        </span>
                                        <span class="date">5月20日</span>
                                        <span class="clear"></span>
                                    </li>

                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1245" target="_self" title="关于电子科技大学成都学院第七届电子设计大赛的通知" style="">关于电子科技大学成都学院第</a>
                                        </span>
                                        <span class="date">4月20日</span>
                                        <span class="clear"></span>
                                    </li>

                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1210" target="_self" title="关于2015届毕业设计（课程设计）论文的通知" style="">关于2015届毕业设计（课程设</a>
                                        </span>
                                        <span class="date">4月8日</span>
                                        <span class="clear"></span>
                                    </li>
                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1210" target="_self" title="关于2015届毕业设计（课程设计）论文的通知" style="">关于2015届毕业设计（课程设</a>
                                        </span>
                                        <span class="date">4月8日</span>
                                        <span class="clear"></span>
                                    </li>
                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1283" target="_self" title="第七届院电子设计竞赛获奖名单公示" style="">第七届院电子设计竞赛获奖名</a>
                                        </span>
                                        <span class="date">5月20日</span>
                                        <span class="clear"></span>
                                    </li>

                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1245" target="_self" title="关于电子科技大学成都学院第七届电子设计大赛的通知" style="">关于电子科技大学成都学院第</a>
                                        </span>
                                        <span class="date">4月20日</span>
                                        <span class="clear"></span>
                                    </li>

                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1210" target="_self" title="关于2015届毕业设计（课程设计）论文的通知" style="">关于2015届毕业设计（课程设</a>
                                        </span>
                                        <span class="date">4月8日</span>
                                        <span class="clear"></span>
                                    </li>
                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1210" target="_self" title="关于2015届毕业设计（课程设计）论文的通知" style="">关于2015届毕业设计（课程设</a>
                                        </span>
                                        <span class="date">4月8日</span>
                                        <span class="clear"></span>
                                    </li>
                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1245" target="_self" title="关于电子科技大学成都学院第七届电子设计大赛的通知" style="">关于电子科技大学成都学院第</a>
                                        </span>
                                        <span class="date">4月20日</span>
                                        <span class="clear"></span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="module_footer">
                            <span class="l"></span>
                            <span class="r"></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--公告模板结束-->

            <div class="jobs">
                <!--招生就业-->
                <div id="module_234" class="module_box module_box_introduct">
                    <div class="module_box_1">

                        <div class="module_title">
                            <span class="module_sign">招生就业</span>
                            <span class="module_more">
                                <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637">更多&gt;&gt;</a>
                            </span>
                        </div>

                        <div id="module_content_234" class="module_content">
                            <div class="article">
                                <ul>

                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1336" target="_self" title="关于2016年 “卫生免检寝室”初选结果的公示" style="">关于2016年 “卫生免检寝室”</a>
                                        </span>
                                        <span class="date">6月3日</span>
                                        <span class="clear"></span>
                                    </li>

                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1285" target="_self" title="关于电子科技大学成都学院第七届电子设计竞赛获奖通知" style="">关于电子科技大学成都学院第</a>
                                        </span>
                                        <span class="date">5月22日</span>
                                        <span class="clear"></span>
                                    </li>

                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1283" target="_self" title="第七届院电子设计竞赛获奖名单公示" style="">第七届院电子设计竞赛获奖名</a>
                                        </span>
                                        <span class="date">5月20日</span>
                                        <span class="clear"></span>
                                    </li>

                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1245" target="_self" title="关于电子科技大学成都学院第七届电子设计大赛的通知" style="">关于电子科技大学成都学院第</a>
                                        </span>
                                        <span class="date">4月20日</span>
                                        <span class="clear"></span>
                                    </li>

                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1210" target="_self" title="关于2015届毕业设计（课程设计）论文的通知" style="">关于2015届毕业设计（课程设</a>
                                        </span>
                                        <span class="date">4月8日</span>
                                        <span class="clear"></span>
                                    </li>
                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1210" target="_self" title="关于2015届毕业设计（课程设计）论文的通知" style="">关于2015届毕业设计（课程设</a>
                                        </span>
                                        <span class="date">4月8日</span>
                                        <span class="clear"></span>
                                    </li>
                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1245" target="_self" title="关于电子科技大学成都学院第七届电子设计大赛的通知" style="">关于电子科技大学成都学院第</a>
                                        </span>
                                        <span class="date">4月20日</span>
                                        <span class="clear"></span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="module_footer">
                            <span class="l"></span>
                            <span class="r"></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--招生就业模板结束-->
            <div class="news">
                <!--新闻中心-->
                <div id="module_234" class="module_box module_box_introduct">
                    <div class="module_box_1">

                        <div class="module_title">
                            <span class="module_sign">新闻中心</span>
                            <span class="module_more">
                                <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637">更多&gt;&gt;</a>
                            </span>
                        </div>

                        <div id="module_content_234" class="module_content">
                            <div class="article">
                                <ul>

                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1336" target="_self" title="关于2016年 “卫生免检寝室”初选结果的公示" style="">关于2016年 “卫生免检寝室”</a>
                                        </span>
                                        <span class="date">6月3日</span>
                                        <span class="clear"></span>
                                    </li>

                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1285" target="_self" title="关于电子科技大学成都学院第七届电子设计竞赛获奖通知" style="">关于电子科技大学成都学院第</a>
                                        </span>
                                        <span class="date">5月22日</span>
                                        <span class="clear"></span>
                                    </li>

                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1283" target="_self" title="第七届院电子设计竞赛获奖名单公示" style="">第七届院电子设计竞赛获奖名</a>
                                        </span>
                                        <span class="date">5月20日</span>
                                        <span class="clear"></span>
                                    </li>

                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1245" target="_self" title="关于电子科技大学成都学院第七届电子设计大赛的通知" style="">关于电子科技大学成都学院第</a>
                                        </span>
                                        <span class="date">4月20日</span>
                                        <span class="clear"></span>
                                    </li>

                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1210" target="_self" title="关于2015届毕业设计（课程设计）论文的通知" style="">关于2015届毕业设计（课程设</a>
                                        </span>
                                        <span class="date">4月8日</span>
                                        <span class="clear"></span>
                                    </li>
                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1210" target="_self" title="关于2015届毕业设计（课程设计）论文的通知" style="">关于2015届毕业设计（课程设</a>
                                        </span>
                                        <span class="date">4月8日</span>
                                        <span class="clear"></span>
                                    </li>
                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1245" target="_self" title="关于电子科技大学成都学院第七届电子设计大赛的通知" style="">关于电子科技大学成都学院第</a>
                                        </span>
                                        <span class="date">4月20日</span>
                                        <span class="clear"></span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="module_footer">
                            <span class="l"></span>
                            <span class="r"></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--新闻模板结束-->
            <div class="dangyuan">
                <!--党团之窗模板-->
                <div id="module_234" class="module_box module_box_introduct">
                    <div class="module_box_1">

                        <div class="module_title">
                            <span class="module_sign">党团之窗</span>
                            <span class="module_more">
                                <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637">更多&gt;&gt;</a>
                            </span>
                        </div>

                        <div id="module_content_234" class="module_content">
                            <div class="article">
                                <ul>

                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1336" target="_self" title="关于2016年 “卫生免检寝室”初选结果的公示" style="">关于2016年 “卫生免检寝室”</a>
                                        </span>
                                        <span class="date">6月3日</span>
                                        <span class="clear"></span>
                                    </li>

                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1285" target="_self" title="关于电子科技大学成都学院第七届电子设计竞赛获奖通知" style="">关于电子科技大学成都学院第</a>
                                        </span>
                                        <span class="date">5月22日</span>
                                        <span class="clear"></span>
                                    </li>

                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1283" target="_self" title="第七届院电子设计竞赛获奖名单公示" style="">第七届院电子设计竞赛获奖名</a>
                                        </span>
                                        <span class="date">5月20日</span>
                                        <span class="clear"></span>
                                    </li>

                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1245" target="_self" title="关于电子科技大学成都学院第七届电子设计大赛的通知" style="">关于电子科技大学成都学院第</a>
                                        </span>
                                        <span class="date">4月20日</span>
                                        <span class="clear"></span>
                                    </li>

                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1210" target="_self" title="关于2015届毕业设计（课程设计）论文的通知" style="">关于2015届毕业设计（课程设</a>
                                        </span>
                                        <span class="date">4月8日</span>
                                        <span class="clear"></span>
                                    </li>
                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1210" target="_self" title="关于2015届毕业设计（课程设计）论文的通知" style="">关于2015届毕业设计（课程设</a>
                                        </span>
                                        <span class="date">4月8日</span>
                                        <span class="clear"></span>
                                    </li>
                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1245" target="_self" title="关于电子科技大学成都学院第七届电子设计大赛的通知" style="">关于电子科技大学成都学院第</a>
                                        </span>
                                        <span class="date">4月20日</span>
                                        <span class="clear"></span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="module_footer">
                            <span class="l"></span>
                            <span class="r"></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--党员之窗模板结束-->
            <div class="studys">
                <!--学习交流模板-->
                <div id="module_234" class="module_box module_box_introduct">
                    <div class="module_box_1">

                        <div class="module_title">
                            <span class="module_sign">学习交流</span>
                            <span class="module_more">
                                <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637">更多&gt;&gt;</a>
                            </span>
                        </div>

                        <div id="module_content_234" class="module_content">
                            <div class="article">
                                <ul>

                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1336" target="_self" title="关于2016年 “卫生免检寝室”初选结果的公示" style="">关于2016年 “卫生免检寝室”</a>
                                        </span>
                                        <span class="date">6月3日</span>
                                        <span class="clear"></span>
                                    </li>

                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1285" target="_self" title="关于电子科技大学成都学院第七届电子设计竞赛获奖通知" style="">关于电子科技大学成都学院第</a>
                                        </span>
                                        <span class="date">5月22日</span>
                                        <span class="clear"></span>
                                    </li>

                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1283" target="_self" title="第七届院电子设计竞赛获奖名单公示" style="">第七届院电子设计竞赛获奖名</a>
                                        </span>
                                        <span class="date">5月20日</span>
                                        <span class="clear"></span>
                                    </li>

                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1245" target="_self" title="关于电子科技大学成都学院第七届电子设计大赛的通知" style="">关于电子科技大学成都学院第</a>
                                        </span>
                                        <span class="date">4月20日</span>
                                        <span class="clear"></span>
                                    </li>

                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1210" target="_self" title="关于2015届毕业设计（课程设计）论文的通知" style="">关于2015届毕业设计（课程设</a>
                                        </span>
                                        <span class="date">4月8日</span>
                                        <span class="clear"></span>
                                    </li>
                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1210" target="_self" title="关于2015届毕业设计（课程设计）论文的通知" style="">关于2015届毕业设计（课程设</a>
                                        </span>
                                        <span class="date">4月8日</span>
                                        <span class="clear"></span>
                                    </li>
                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1245" target="_self" title="关于电子科技大学成都学院第七届电子设计大赛的通知" style="">关于电子科技大学成都学院第</a>
                                        </span>
                                        <span class="date">4月20日</span>
                                        <span class="clear"></span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="module_footer">
                            <span class="l"></span>
                            <span class="r"></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--学习交流模板结束-->
            <div class="teach">
                <!--教学科研模板-->
                <div id="module_234" class="module_box module_box_introduct">
                    <div class="module_box_1">

                        <div class="module_title">
                            <span class="module_sign">教学科研</span>
                            <span class="module_more">
                                <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637">更多&gt;&gt;</a>
                            </span>
                        </div>

                        <div id="module_content_234" class="module_content">
                            <div class="article">
                                <ul>

                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1336" target="_self" title="关于2016年 “卫生免检寝室”初选结果的公示" style="">关于2016年 “卫生免检寝室”</a>
                                        </span>
                                        <span class="date">6月3日</span>
                                        <span class="clear"></span>
                                    </li>

                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1285" target="_self" title="关于电子科技大学成都学院第七届电子设计竞赛获奖通知" style="">关于电子科技大学成都学院第</a>
                                        </span>
                                        <span class="date">5月22日</span>
                                        <span class="clear"></span>
                                    </li>

                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1283" target="_self" title="第七届院电子设计竞赛获奖名单公示" style="">第七届院电子设计竞赛获奖名</a>
                                        </span>
                                        <span class="date">5月20日</span>
                                        <span class="clear"></span>
                                    </li>

                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1245" target="_self" title="关于电子科技大学成都学院第七届电子设计大赛的通知" style="">关于电子科技大学成都学院第</a>
                                        </span>
                                        <span class="date">4月20日</span>
                                        <span class="clear"></span>
                                    </li>

                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1210" target="_self" title="关于2015届毕业设计（课程设计）论文的通知" style="">关于2015届毕业设计（课程设</a>
                                        </span>
                                        <span class="date">4月8日</span>
                                        <span class="clear"></span>
                                    </li>
                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1210" target="_self" title="关于2015届毕业设计（课程设计）论文的通知" style="">关于2015届毕业设计（课程设</a>
                                        </span>
                                        <span class="date">4月8日</span>
                                        <span class="clear"></span>
                                    </li>
                                    <li>
                                        <span class="title">
                                            <a href="http://eie.cduestc.cn/index.aspx?lanmuid=67&amp;sublanmuid=637&amp;id=1245" target="_self" title="关于电子科技大学成都学院第七届电子设计大赛的通知" style="">关于电子科技大学成都学院第</a>
                                        </span>
                                        <span class="date">4月20日</span>
                                        <span class="clear"></span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="module_footer">
                            <span class="l"></span>
                            <span class="r"></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--教学科研模板结束-->
            <!--快速链接-->
            <div id="" class="module_box module_box_introduct bot1">
                <div class="module_box_1">

                    <div class="module_title">
                        <span class="module_sign">快速链接</span>
                        <span class="module_more"></span>
                    </div>

                    <div id="module_content_208" class="module_content">
                        <table>
                            <tbody>
                                <tr valign="top">
                                    <td>
                                        <table class="tab">
                                            <tbody>
                                                <tr>
                                                    <td >

                                                        <a href="">
                                                            <img src="__Public__/images/zhanwei.jpg"></a>
                                                        <br>

                                                        <a href="">
                                                            <span>
                                                                <span>微官网</span>
                                                            </span>
                                                        </a>

                                                    </td>
                                                    <td>
                                                        <a href="">
                                                            <img src="__Public__/images/zhanwei.jpg"></a>
                                                        <br>
                                                        <a href="">
                                                            <span>
                                                                <span>创智云</span>
                                                            </span>
                                                        </a>
                                                    </td>

                                                </tr>
                                                <tr>

                                                    <td>
                                                        <a href="">
                                                            <img src="__Public__/images/zhanwei.jpg"></a>
                                                        <br />
                                                        <a href="">
                                                            <span>
                                                                <span>云平台</span>
                                                            </span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="">
                                                            <img src="__Public__/images/zhanwei.jpg"></a>
                                                        <br>
                                                        <a href="">
                                                            <span>
                                                                <span>云计算微博</span>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <br></div>
                </div>
            </div>
            <!--快速链接结束--> </div>
        <!--底部--> </div>

</body>
</html>