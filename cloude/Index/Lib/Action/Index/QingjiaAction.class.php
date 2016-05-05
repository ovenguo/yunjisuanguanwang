<?php
Class QingjiaAction extends Action{
Public function index(){
		$this->display();
		
	}
	Public function qingjia(){
		if(!IS_POST)
		{
			{$this->error('未找到页面！','index');}
		}
		else
		{
			$_POST['date']=time();
			if(M('qingjia')->add($_POST))
			{
				echo true;
			}
			else
			{
				echo false;
			}
		}
		
	}
}
?>