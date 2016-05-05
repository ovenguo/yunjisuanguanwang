<?php
Class NoticeAction extends CommonAction{
	Public function index(){
		$this->display();
	}
	Public function notice_page(){
		header('Content-type:text/json;charset=utf-8');
		include_once('Public/class/Page.class.php');
		$notice=new Page(notice,isset($_GET['type'])?$_GET['type']:'tinke',8,isset($_GET['page'])?$_GET['page']:1);
		$json=json_encode($notice->pages(),JSON_UNESCAPED_UNICODE);
		echo $json;
		
		}
	Public function addnotice(){
		include('Public/class/Permission.class.php');
		$Permission=new Permission();
		if(!$Permission->check(__FUNCTION__))
			{$this->display('sorry');}
		if(!IS_POST)
			{$this->error('未找到页面！','index');}
		else
		{
			
			if(M('notice')->add($_POST)){
				echo true;
			}
			else{
				echo false;
			}
		}
	}
	Public function changenotice(){
		include('Public/class/Permission.class.php');
		$Permission=new Permission();
		if(!$Permission->check(__FUNCTION__))
			{$this->display('sorry');}
		if(!IS_POST)
			{$this->error('未找到页面！','index');}
		else
		{

			if(M('notice')->data(array($_POST))->save())
			{
				echo true;
			}
			else
			{
				echo false;
			}
		}
	}
	Public function deletenotice(){
		include('Public/class/Permission.class.php');
		$Permission=new Permission();
		if(!$Permission->check(__FUNCTION__))
			{$this->display('sorry');}
		if(!IS_POST)
			{$this->error('未找到页面！','index');}
		else
		{
			$id=$_POST['id'];
			if(M('notice')->delete($id))//id是主键
				{echo true;}
			else
				{echo false;}
		}
	}
}
?>