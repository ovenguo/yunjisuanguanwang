<?php
Class NewsAction extends Action{
	Public function news(){
		$this->display();		
	}	
	//其他新闻
	Public function other(){
		$this->display();
	}

	//学生新闻
	Public function student(){
		$this->display();
	}

	//教师新闻
	Public function teacher(){
		$this->display();
	}
	Public function news_page(){
		header('Content-type:text/json;charset=utf-8');
		include_once('Public/class/Page.class.php');
		$news=new Page(news,isset($_GET['type'])?$_GET['type']:'dangjian',8,isset($_GET['page'])?$_GET['page']:1);
		$json=json_encode($news->pages(),JSON_UNESCAPED_UNICODE);
		echo $json;
		
			}
			//新闻显示
		Public function newsshow(){
			$this->display('noticearticle');
		}
			//获取新闻id
		Public function noticearticle(){
			session_start();
			$_SESSION['newsid']=$_GET['id'];
			$this->redirect('index.php/Index/News/newsshow');
		}
		//获取新闻数据
	Public function noticearticle_data(){
		header('Content-type: text/json;charset=utf-8');

		$id=$_GET['id'];
		if(!$news=M('news')->find($id))
			{$news=M('news')->find();}
		$news['content']=place($news['content']);//替换换行符
		$news['date']=date("Y年m月d日 H:i:s",$news['date']);
		//上一个
		$before['id'] = array('LT',$news['id']);
		$before['type']=$news['type'];
		$before=M('news')->where($before)->order('id DESC')->select();
		if(!$before)
	    {$before[0]['title']='没有了';
		$before[0]['id']=$news['id'];}

		//查找下一个
		$next['id'] = array('GT',$news['id']);
		$next['type']=$news['type'];
		$next=M('news')->where($next)->find();
		if(!$next)
	    {$next['title']='没有了';
		$next['id']=$news['id'];}

		switch ($news['type']) {
              case 'dangjian':
                $news['type'] ="党建新闻";
                break;
              case 'kejichuangxin':
                $news['type'] = "科技创新新闻";
                break;
                case 'duiwaijiaoliu':
                $news['type'] = "对外交流新闻";
                break;
                case 'jiaoxuekeyan':
                $news['type'] = "教学科研新闻";
                break;
                case 'zhuantiyihui':
                $news['type'] = "专题议会新闻";
                break;
                case 'zhaoshengjiuye':
                $news['type'] = "招生就业新闻";
                break;
                case 'xueshengjiaoyu':
                $news['type'] = "学生教育新闻";
                break;
                case 'tuanxuehuodong':
                $news['type'] = "团学活动新闻";
                break;
                case 'zizhugongzuo':
                $news['type'] = "资助工作新闻";
                break;
                case 'xinlijiankang':
                $news['type'] = "心理健康新闻";
                break; 
            }
	    	$arr = array(
	    		'before' =>$before[0], 
	    		'news'=>$news,
	    		'next'=>$next,
	    		'firstid'=>$_SESSION['newsid']
	    		);
	    
		$json=json_encode($arr,JSON_UNESCAPED_UNICODE);
		echo $json;
		
	}
}	
?>