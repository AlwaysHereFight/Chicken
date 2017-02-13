<?php
	class Common extends Action {
		function init(){
			//echo 'Common<br>';
			debug();	//关闭开发者模式

			$openid = $_COOKIE['openid'];
			define('OPENID',$openid);

		}

	}
