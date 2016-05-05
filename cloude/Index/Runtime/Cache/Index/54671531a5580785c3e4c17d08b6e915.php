<?php if (!defined('THINK_PATH')) exit();?><!-- pricing -->
<link href="__PUBLIC__/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="__PUBLIC__/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> 
    <div class="basic2" id="Fpage">
      <div class="business2">
        <h2><?php echo ($type); ?></h2>
      </div>
      <div class="value2">
        <p>这里可以查询所有<?php echo ($type); ?></p>
      </div>

      <ul>

      <?php
 while($result=mysql_fetch_array($notice)){ ?>
        <a target="_top" href='<?php echo U('Index/News/noticearticle',array('id'=>$result['id'],'type'=>$type));?>'><li><strong><?php echo $result['title'];?></strong><span style="float:right"><?php echo "发布时间：".date('Y-m-d H:i',$result['date']) . " 编辑：".$result['username'];?></span></li></a>
        <?php }?>
      </ul>
      <div class="page_list" ><?php $show->show()?></div>
    </div>
    
<!-- pricing -->