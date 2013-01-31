<?php

$browser = $_SERVER['HTTP_USER_AGENT'];

if(strstr($browser,'iPad') || strstr($browser,'iPhone') || strstr($browser,'Android')){
	header("Location: mobile/");
} 
else{
	if(strrpos($browser, "MSIE 8")) {
		include("indexIE8.htm");
	} 
	else{
		include("indexOK.htm");
	}
}
?>