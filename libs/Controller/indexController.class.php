<?php
class indexController{
		function index(){
		$indexModel = M('index');
		$data = $indexModel->get();
		$indexView = V('index');
		$indexView->display($data);
	}
}
?>