<?php
Class NewsAction extends CommonAction{
	Public function index(){
		$this->display();
	}
	Public function news_page(){
		header('Content-type:text/json;charset=utf-8');
		include_once('Public/class/Page.class.php');
		$news=new Page(news,isset($_GET['type'])?$_GET['type']:'dangjian',8,isset($_GET['page'])?$_GET['page']:1);
		$json=json_encode($news->pages(),JSON_UNESCAPED_UNICODE);
		echo $json;
		
	}

	Public function addnews(){
		include('Public/class/Permission.class.php');
		$Permission=new Permission();
		if(!$Permission->check(__FUNCTION__))
			{$this->display('sorry');}
		if(!IS_POST)
			{$this->error('未找到页面！','index');}
		else
		{
			
			
			if(M('news')->add($_POST)){
				echo true;
			}
			else{
				echo false;
			}
		}
	}
	Public function changenews(){
		include('Public/class/Permission.class.php');
		$Permission=new Permission();
		if(!$Permission->check(__FUNCTION__))
			{$this->display('sorry');}
		if(!IS_POST)
			{$this->error('未找到页面！','index');}
		else
		{
			
			if(M('news')->data(array($_POST))->save())
			{
				echo true;
			}
			else
			{
				echo false;
			}
		}
	}
	Public function deletenews(){
		include('Public/class/Permission.class.php');
		$Permission=new Permission();
		if(!$Permission->check(__FUNCTION__))
			{$this->display('sorry');}
		if(!IS_POST)
			{$this->error('未找到页面！','index');}
		else
		{
			$id=$_POST['id'];
			if(M('news')->delete($id))//id是主键
				{echo true;}
			else
				{echo false;}
		}
	}
}
?>