<?php
date_default_timezone_set("PRC");

$test = md5(md5('123456').'koedou');

$ts=array(1475158174,1475158267,1475158404,1475158578);

for($i=0; $i<count($ts); ++$i){
	$time = date("H:m:s",$ts[$i]);

	echo $ts[$i].'--'.$time.'<br>';

}

echo date("Y-m-d H:i:s").'<br>';
	echo date("Y-m-d H:m:s").'<br>';
