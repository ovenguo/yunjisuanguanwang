<?php
Class ImageAction extends CommonAction{
	Public function image(){
	import('ORG.Net.UploadFile');
    	$upload = new UploadFile();// 实例化上传类
    	$upload->maxSize  = 200000 ;// 设置附件上传大小
    	$upload->thumb = true;
 		//设置缩略图最大宽度
		$upload->thumbMaxWidth = '800,400';
 		//设置缩略图最大高度
		$upload->thumbMaxHeight = '800,400';
		$upload->thumbPrefix='s_';
		$upload->thumbRemoveOrigin = true;
    	$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    	$upload->savePath =  './Public/Uploads/';// 设置附件上传目录
    	if(!$upload->upload()) {// 上传错误提示错误信息
        	echo 0;
    	}else{
       	 	$info = $upload->getUploadFileInfo();
       	 	echo ('s_'. $info[0]['savename']);
    	}

	}
}
?>