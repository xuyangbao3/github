<?php 
class Action{
	public function beijing(){
		echo 'beijing天气预报';
	}

	public function __call($m,$args){
		echo $m,'天气预报';
	}
}

$action = new Action();
$method =$_GET['method'];

if ($method){
	$action->$method();
}

?>