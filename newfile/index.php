<?php

include "Lib/autoload.php";

// $request = new Model_Request();

// if(!$request->isPost()) {
// 	$product = new View_Product();
// 	echo $product->toHtml();
// } else {
// 	$product = new Model_Product();
// 	$product->save($request->getParams('pdata'));
// 	// print_r();
// }
class ccc{
	public function init(){
	//	echo str_replace("mvc","",$_SERVER['REQUEST_URI']);
		$frontController = new Controller_front();
		$frontController->init();
	// 	var_dump($_SERVER['REQUEST_URI']);
	}
}
$obj= new ccc();
$obj->init();
