<?php
class RegisterAction extends BaseAction {
	/**
	 * 个人用户注册
	 */
	public function preg() {
		if ($_POST) {
			$p['provinceid'] = $_POST['province'];
			$c['cityid'] = $_POST['city'];
			$a['areaid'] = $_POST['area'];
			$l['locationid'] = $_POST['location'];
			$province = M('provinces') -> field('province') -> where($p) -> select();
			$city = M('cities') -> field('city') -> where($c) -> select();
			$area = M('areas') -> field('area') -> where($a) -> select();
			$location = M('location') -> field('location') -> where($l) -> select();
			$address = $province[0]['province'] . $city[0]['city'] . $area[0]['area'] . $location['location'] . $_POST['extra_address'];
			$_POST['password'] = md5(md5($_POST['password']));
			$_POST['address'] = $address;
			$validate = array( array('verify', 'require', '验证码不能为空'),
			//array('username','该帐号已存在',0,'unique',1),
			);
			$user = D('user');
			$user -> validate($validate) -> create();
			$user -> regtime = time();
			$stat = $user -> add();
			if ($stat) {
				$this -> success('注册成功');
			} else {
				$this -> error($user -> getError());
			}
		} else {
			$plist = M('provinces') -> select();
			$this -> assign('province', $plist);
			$this -> display();
		}
	}

	/**
	 * 商家注册写入
	 */
	public function breg() {
		if ($_POST) {
			$p['provinceid'] = $_POST['province'];
			$c['cityid'] = $_POST['city'];
			$a['areaid'] = $_POST['area'];
			$l['locationid'] = $_POST['location'];
			$province = M('provinces') -> field('province') -> where($p) -> select();
			$city = M('cities') -> field('city') -> where($c) -> select();
			$area = M('areas') -> field('area') -> where($a) -> select();
			$location = M('location') -> field('location') -> where($l) -> select();
			$address = $province[0]['province'] . $city[0]['city'] . $area[0]['area'] . $location['location'] . $_POST['extra_address'];
			$_POST['password'] = md5(md5($_POST['password']));
			$_POST['address'] = $address;
			$user = D('business');
			$user -> create();
			$user -> regtime = time();
			$stat = $user -> add();
			if ($stat) {
				$this -> success('注册成功');
			} else {
				$this -> error($user -> getError());
			}
		} else {
			$plist = M('provinces') -> select();
			$this -> assign('province', $plist);
			$this -> display();
		}
	}

}
?>