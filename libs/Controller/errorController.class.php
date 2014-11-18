<?php
class errorController{
	function show(){
		$data = 'Unauthorized access';
		$errorView = V('error');
		$errorView->display($data);
	}

}
?>