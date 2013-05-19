<?php
class LoginAction extends BaseAction {
	public function index() {
		$this -> display();
	}

	public function plogin() {
		if ($_POST) {
			$_POST['password'] = md5(md5($_POST['password']));
			//$verify=$_POST['verify'];
			$user = M('user');
			if ($stat = $user -> where($_POST) -> select()) {
				session(array('logined' => 1, 'expire' => 900));
				session('username', $stat[0]['username']);
				session('userid', $stat[0]['userid']);
				$this -> success('登录成功');
			} else {
				$this -> error('登录失败,请检查用户名密码');
			}
		} else {
			$this -> display();
		}
	}

	public function blogin() {
		if ($_POST) {
			$query['username'] = $_POST['username'];
			$query['password'] = md5(md5($_POST['password']));
			$business = M('business');
			if ($stat = $business -> where($query) -> select()) {
				session(array('logined' => 1, 'expire' => 900));
				session('username', $stat[0]['username']);
				session('userid', $stat[0]['userid']);
				$this -> success('登录成功');
			} else {
				$this -> error('登录失败,请检查用户名密码');
			}
		} else {
			$this -> display();
		}
	}

}
?>