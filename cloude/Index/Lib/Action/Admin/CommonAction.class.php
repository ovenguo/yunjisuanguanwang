<?php
Class CommonAction extends Action{
	Public function _initialize(){
		if(!isset($_SESSION['id']))
			{$this->redirect('Admin/Login/index');}
	}
}
?>