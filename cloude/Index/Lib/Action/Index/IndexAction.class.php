<?php
Class IndexAction extends Action{
	Public function index(){
		$this->display();
	}
	Public function index_data(){
		header('Content-type: text/json;charset=utf-8');
		$news=M('news')->order('date DESC')->find();
		$news['content']=place($news['content']);//替换换行符
		$notice=M('notice')->order('date DESC')->find();
		$notice['content']=place($notice['content']);//替换换行符
		$news['date']=date("Y年m月d日 H:i:s",$news['date']);
		$notice['date']=date("Y年m月d日 H:i:s",$notice['date']);
		$arr=array(
			'news'=>$news,
			'notice'=>$notice
			);
		$json=json_encode($arr,JSON_UNESCAPED_UNICODE);
		echo $json;
	}
	

	Public function notice(){
		$this->display();
	}
	//公告查询
	Public function notice_page(){
		header('Content-type:text/json;charset=utf-8');
		include_once('Public/class/Page.class.php');
		$notice=new Page(notice,isset($_GET['type'])?$_GET['type']:'tinke',8,isset($_GET['page'])?$_GET['page']:1);
		$json=json_encode($notice->pages(),JSON_UNESCAPED_UNICODE);
		echo $json;
		
			}
	//公告显示三剑客
	Public function noticearticle(){
		session_start();
		$_SESSION['noticeid']=$_GET['id'];
		$this->redirect('index.php/Index/Index/noticeshow');
		
	}
	Public function noticeshow(){
		$this->display('noticearticle');
	}
	Public function noticearticle_data(){
		header('Content-type: text/json;charset=utf-8');

		$id=$_GET['id'];
		if(!$notice=M('notice')->find($id))
			{$notice=M('notice')->find();}

		$notice['date']=date("Y年m月d日 H:i:s",$notice['date']);
		$notice['content']=place($notice['content']);//替换换行符
		//上一个
		$before['id'] = array('LT',$notice['id']);
		$before['type']=$notice['type'];
		$before=M('notice')->where($before)->order('id DESC')->select();
		if(!$before)
	    {$before[0]['title']='没有了';
		$before[0]['id']=$notice['id'];}
		//查找下一个
		$next['id'] = array('GT',$notice['id']);
		$next['type']=$notice['type'];
		$next=M('notice')->where($next)->find();
		if(!$next)
	    {$next['title']='没有了';
		$next['id']=$notice['id'];}
			switch ($notice['type']) {
              case 'tinke':
             $notice['type']= "停课公告";
                break;
                case 'kaoshi':
                $notice['type']= "考试公告";
                break;
                case 'richang':
                $notice['type']= "日常通知";
                break;
            }
	    	$arr = array(
	    		'before' =>$before[0], 
	    		'notice'=>$notice,
	    		'next'=>$next,
	    		'firstid'=>$_SESSION['noticeid']
	    		);
	    
		$json=json_encode($arr,JSON_UNESCAPED_UNICODE);
		echo $json;
		
	}

}	
?>