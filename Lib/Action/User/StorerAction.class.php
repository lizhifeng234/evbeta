<?php 
class StorerAction extends BaseAction{
	/**
	 * 商户信息管理首页
	 */
	public function index(){
		//$this->checklogin('请先登录','__APP__/User/Login/businesslogin');
		$business['userid']=session('userid');
		$shopinfo=M('business')->where($business)->select();
		$this->assign('shopinfo',$shopinfo);
		dump($shopinfo);
		$this->display(); 
	}
	public function store(){
		$business['userid']=session('userid');
		$shopinfo=M('business')->where($business)->select();
		$this->assign('shopinfo',$shopinfo);
		dump($shopinfo);
		$this->display();
	}
}
 ?> 
