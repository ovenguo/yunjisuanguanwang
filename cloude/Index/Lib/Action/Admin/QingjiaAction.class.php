<?php
Class QingjiaAction extends CommonAction	{
	function index(){
		header('Content-type:text/json;charset=utf-8');
		include_once('Public/class/Page.class.php');
		$qingjia=new Page(qingjia,_all_,2,isset($_GET['page'])?$_GET['page']:1);
		$json=json_encode($qingjia->pages(),JSON_UNESCAPED_UNICODE);
		echo $json;
	}
}
?>