<?php
	class Common extends Action {
		function init(){

			//登陆状态
			if($_SESSION['islogin'] != 1){
				$this -> redirect('login/login');
			}

			/*
			//传给后台，用常量
			define('NAVURL','http://localhost/admin.php/nav/nav');
			*/

			//传给前台，用变量
			$this -> assign('navurl','/admin.php/public/nav');

			//双重md5加密
			if(!empty($_POST['upassword'])){
				$_POST['upassword'] = md5(md5($_POST['upassword']).'koedou');
			}

			//权限验证,如果不是管理员，且进行了相关操作,则报出提示
			if($_SESSION['privilege'] != 1 && (!empty($_POST['downvita']) || !empty($_POST['downexcel']))){
				$this -> error('您还不是管理员，无权限进行此操作');
			}
			


		}		

		
	}
