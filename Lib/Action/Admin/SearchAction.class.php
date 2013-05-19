<?php 
	class SearchAction extends BaseAction{
		/**
		 * 搜索入口选择
		 */
		public function index(){
			$category=$_GET['category'];
			$keywords=$_GET['keywords'];
		switch($category){
			case 1 : $this->goods();
			case 2 : $this->business();
			case 3 : $this->discount();
			}
		}
		/**
		 * 商品搜索
		 */
		private function goods(){
			
		}
		/**
		 * 商家搜索
		 */
		private function business(){
			
		}
		/**
		 * 优惠搜索
		 */
		private function discount(){
			
		}
	}
 ?>