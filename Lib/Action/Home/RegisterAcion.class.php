<?php 
	class RegisterAction extends BaseAction{
		/**
		 * 个人用户注册
		 */
		public function preg(){
			if($_POST){
				$_POST['password']=md5(md5($_POST['psssword']));
				if(M('Business')->add()){
					//验证引导
				}else{
					//注册错误，错误判断
				}
			}else{
			$plist=M('provinces')->select();
			$this->assign('province',$plist);
			$this->display();
			}
		}
		/**
		 * 个人注册ajax查询
		 */
		public function preg_query($username){
			$user=M('User');
			$query['UserName']=$username;
			$stat=$user->where($query)->select();
			if($stat){
			$this->ajaxReturn();//用户名存在
			}else{
				$this->ajaxReturn();//可以注册
			}
		}
		/**
		 * 商家注册写入
		 */
		public function breg(){
			if($_POST){
				//reg query
			}else{
				$this->display();
			}
		}
		/**
		 * 商家注册ajax查询
		 * 
		 */
		public function breg_query(){
			$user=M('Business');
			$query['UserName']=$username;
			$stat=$user->where($query)->select();
			if($stat){
			$this->ajaxReturn();//用户名存在
			}else{
				$this->ajaxReturn();//可以注册
			}
		}
		/**
		 * 地区获取
		 */
		public function getcity(){
			$query['provinceid']=$_GET['provinceid'];
			$clist=M('cities')->where($query)->select();
			echo json_encode($clist);
		}
		public function getarea(){
			$query['cityid']=$_GET['cityid'];
			$alist=M('areas')->where($query)->select();
			echo json_encode($alist);
		}
		public function getlocation(){
			$query['areaid']=$_GET['areaid'];
			$llist=M('location')->where($query)->select();
			echo json_encode($llist);
		}
	}
 ?>