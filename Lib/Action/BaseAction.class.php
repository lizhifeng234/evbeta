<?php
class BaseAction extends Action {

	public function is_mobile_request() {
		$_SERVER['ALL_HTTP'] = isset($_SERVER['ALL_HTTP']) ? $_SERVER['ALL_HTTP'] : '';
		$mobile_browser = '0';
		if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|iphone|ipad|ipod|android|xoom)/i', strtolower($_SERVER['HTTP_USER_AGENT'])))
			$mobile_browser++;
		if ((isset($_SERVER['HTTP_ACCEPT'])) and (strpos(strtolower($_SERVER['HTTP_ACCEPT']), 'application/vnd.wap.xhtml+xml') !== false))
			$mobile_browser++;
		if (isset($_SERVER['HTTP_X_WAP_PROFILE']))
			$mobile_browser++;
		if (isset($_SERVER['HTTP_PROFILE']))
			$mobile_browser++;
		$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
		$mobile_agents = array('w3c ', 'acs-', 'alav', 'alca', 'amoi', 'audi', 'avan', 'benq', 'bird', 'blac', 'blaz', 'brew', 'cell', 'cldc', 'cmd-', 'dang', 'doco', 'eric', 'hipt', 'inno', 'ipaq', 'java', 'jigs', 'kddi', 'keji', 'leno', 'lg-c', 'lg-d', 'lg-g', 'lge-', 'maui', 'maxo', 'midp', 'mits', 'mmef', 'mobi', 'mot-', 'moto', 'mwbp', 'nec-', 'newt', 'noki', 'oper', 'palm', 'pana', 'pant', 'phil', 'play', 'port', 'prox', 'qwap', 'sage', 'sams', 'sany', 'sch-', 'sec-', 'send', 'seri', 'sgh-', 'shar', 'sie-', 'siem', 'smal', 'smar', 'sony', 'sph-', 'symb', 't-mo', 'teli', 'tim-', 'tosh', 'tsm-', 'upg1', 'upsi', 'vk-v', 'voda', 'wap-', 'wapa', 'wapi', 'wapp', 'wapr', 'webc', 'winw', 'winw', 'xda', 'xda-');
		if (in_array($mobile_ua, $mobile_agents))
			$mobile_browser++;
		if (strpos(strtolower($_SERVER['ALL_HTTP']), 'operamini') !== false)
			$mobile_browser++;
		// Pre-final check to reset everything if the user is on Windows
		if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'windows') !== false)
			$mobile_browser = 0;
		// But WP7 is also Windows, with a slightly different characteristic
		if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'windows phone') !== false)
			$mobile_browser++;
		if ($mobile_browser > 0)
			return true;
		else
			return false;
	}

	/**
	 * ID加密解密
	 * @access protected
	 * return String
	 */
	protected function evencode($toencode) {
		$rand_str = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
		$addstr = $rand_str[rand(0, 26)] . $rand_str[rand(26, 52)];
		$decode = base64_encode($toencode) . $addstr;
		return $decode;
	}

	protected function evdecode($todecode) {
		$todecode = substr($todecode, 0, 12);
		return base64_decode($todecode);
	}

	/**
	 * 发送邮件
	 */
	protected function send_mail($to, $content, $subject = "EvJie-邮箱验证") {
		$headers = "MIME-Version:1.0\r\n" . "Content-type: text/plain;charset=utf-8\r\n" . "Content-Transfer-Encoding:8bit\r\n";
		$subject = "=?UTF-8?B?" . base64_encode($subject) . "?=";
		if (mail($to, $subject, $content, $headers)) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	/**
	 * 邮箱验证码
	 */
	protected function rand_verify() {
		$randnum = rand(100000, 999999);
		return $randnum;
	}

	/**
	 * Json return
	 */
	protected function json_return($data) {
		echo json_encode($data);

	}

	/**
	 * 获得ip所在地
	 */
	protected function get_cityid() {
		$ip = $_SERVER['REMOTE_ADDR'];
		$area = file_get_contents('http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=json&ip=' . $ip);
		$area = json_decode($area);
		$ctname = $area -> city;
		$city = M('cities');
		$query['city'] = array('like', $ctname . '%');
		$result = $city -> where($query) -> select();
		return $result[0]['cityid'];
	}

	protected function checklogin($errinfo,$path) {
		if (session('logined') != 1) {
			$this -> error($errinfo,$path);
		}
	}

	protected function logout($path) {
		session(null);
		$this -> success('成功退出',$path);
	}

}
?>