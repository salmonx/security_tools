<?php
/*
* Description： 该工具可以一次性输出当前页面所有变量
* Author: 		947270280@qq.com
* Usage: 		在需要断点输出变量的地方包含该文件即可，欢迎改进
*/

$filter = array("_GET", "_POST", "_FILES", "_SERVER", "_ENV", "_REQUEST");
$p = get_defined_vars();

function my_deepaddslahes($string){
	if (is_array($string)){
		foreach ($string as $key => $value) {
			$string[$key] = my_deepaddslahes($value);
		}
	}else{
		$string = addslashes($string);
	}
	return $string;
}

function hackprint($exit = 1){
	global $p;
	global $filter;

	foreach ($filter as $key => $value) {
		unset($p[$value]);
	}

	$p = my_deepaddslahes($p);
	echo "<pre>";print_r($p);

	if ($exit) exit();
}

hackprint();

?>
