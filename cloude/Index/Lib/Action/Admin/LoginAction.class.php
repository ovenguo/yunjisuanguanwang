<?php
Class LoginAction extends Action{
	Public function index(){
		$this->display('Login');
	} 
	//登录
	Public function login(){
		if(!IS_POST){
			_404('未找到页面！','index');
		}
		else
		{
			$username= I('username');
			$pwd= I('pwd', '', 'md5');
			$user=M('login')->where(array('username'=>$username))->find();
			if($user['pwd']==md5($pwd))
			{
				session('id',$user['id']);
				session('username',$user['username']);
				session('time',$user['time']);
				$this->redirect('index.php/Admin/Index/index');
			}
			else
			{
				$this->error('用户名或者密码不正确！');
			}
		}
	}
	//退出登录
	Public function loginexit(){
		if(!IS_POST){
			_404('未找到页面！','index');
		}
		else{
			session_unset();
			session_destroy();
			$this->redirect('Admin/Login/index');
		}
	}
}
?>