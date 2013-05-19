<?php
class CategoryAction extends BaseAction {
	public function index() {
		$this -> display();
	}
	public function login() {
		$config = M('config');
		$query['tmp_pwd']=md5($_POST['tmp_pwd']);
		$stat = $config -> where($query) -> select();
		if ($stat) {
			session('logined', 1);
			$this -> success('Success', '__URL__/manage');
		} else {
			dump($stat);
			//$this -> error('Failed');
		}
	}

	public function logout() {
		session('logined', null);
		$this -> success('Logout Finished', '__URL__/index');
	}

	public function manage() {
		if (!session('logined')) {
			$this -> error('Login Please!!', '__URL__/login');
		}
		$plist = M('provinces') -> select();
		$this -> assign('province', $plist);
		$this -> display();
	}

	public function getcity() {
		$query['provinceid'] = $_GET['provinceid'];
		$clist = M('cities') -> where($query) -> select();
		echo json_encode($clist);
	}

	public function getarea() {
		$query['cityid'] = $_GET['cityid'];
		$alist = M('areas') -> where($query) -> select();
		echo json_encode($alist);
	}

	public function getlocation() {
		$query['areaid'] = $_GET['areaid'];
		$llist = M('location') -> where($query) -> select();
		echo json_encode($llist);
	}

	public function add() {
		$location = M('location');
		$query['areaid'] = $_POST['areaid'];
		$result = $location -> where($query) ->order('locationid desc')-> limit(1)->select();
		if($result){
			$locationid=$result[0]['locationid']+1;
			$query['location']=$_POST['location'];
			$query['areaid']=$_POST['areaid'];
			$query['locationid']=$locationid;
			$stat=$location->add($query);
			if($stat){
				$this->json_return(1);
			}else{
				$this->json_return(0);
			}
		}else{
			$locationid=$result[0]['areaid'].'001';
			$query['location']=$_POST['location'];
			$query['areaid']=$_POST['areaid'];
			$query['locationid']=$locationid;
			$stat=$location->add($query);
			if($stat){
				$this->json_return(1);
			}else{
				$this->json_return(0);
			}
		}

	}

}
?>