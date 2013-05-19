<?php
class AjaxAction extends BaseAction {
	/**
	 * 地区获取
	 */
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

	/**
	 * 个人注册ajax查询
	 */
	public function preg_query() {
		$query['username'] = $_GET['username'];
		$pstat = M('user') -> where($query) -> field('username') -> select();
		$bstat = M('business') -> where($query) -> field('username') -> select();
		if ($pstat||$bstat) {
			$this -> json_return(1);
		} else {
			$this -> json_return(0);
		}
	}

	public function preg_mail() {
		$query['email'] = $_GET['email'];
		$pstat = M('user') -> where($query) -> field('email') -> select();
		$bstat = M('business') -> where($query) -> field('email') -> select();
		if ($pstat||$bstat) {
			$this -> json_return(1);
		} else {
			$this -> json_return(0);
		}
	}

	/**
	 * 商家注册ajax查询
	 *
	 */
	public function breg_query() {
		$user = M('Business');
		$query['username'] = $_GET['username'];
		$stat = $user -> where($query) -> select();
		if ($stat) {
			$this -> ajaxReturn(1);
			//用户名存在
		} else {
			$this -> ajaxReturn(0);
			//可以注册
		}
	}

	public function breg_mail() {
		$user = M('User');
		$query['email'] = $_GET['email'];
		$stat = $user -> where($query) -> field('email') -> select();
		if ($stat) {
			$this -> json_return(1);
		} else {
			$this -> json_return(0);
		}
	}

	/**
	 * 验证码Ajax
	 */
	public function verify_check() {
		if ($_SESSION['verify'] == md5($_GET['verify'])) {
			$this -> json_return(1);
		} else {
			$this -> json_return(0);
		}
	}

}
?>