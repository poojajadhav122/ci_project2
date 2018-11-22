<?php
function url_before_login()
{
	$arr= ["password","password_action","library"];
	return $arr;
}
function url_after_login()
{
	$arr=["register","register_action","login","login_action","forgot_password","forgot1_action"];
	return $arr;
}
function for_admin(){
	$arr=["library","library_action"];
	return $arr;
}

function random_string($no)
{
	$str = "";
	for($i=1;$i<=$no;$i++){
		$str.=chr(rand(65,90));
	}
	return $str;
}
?>