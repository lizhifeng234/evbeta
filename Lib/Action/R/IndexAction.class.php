<?php 
class IndexAction extends BaseAction{
	public function index(){
		foreach ($_GET as $key => $value) {
			$encode_id[]=$key;
		}
		if(strlen($encode_id[0])!=14||is_string($encode_id)){
			echo 'cuowu';
		}
		$id=$this->evdecode($encode_id[0]);
		dump($id);
	}
}
 ?>