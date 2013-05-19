<?php
class PublicAction extends BaseAction {
	/**
	 * 验证码
	 */

	public function verify($w=48,$h=22) {
		import('ORG.Util.Image');
		Image::buildImageVerify(4, 3,'png',$w,$h);
	}

}
?>