<?php
	class Login extends Action{
		function index(){
			//用户验证应该在common 中的init()进行 默认已经运行了init() 函数
		}		

		function login(){

			/*
			$stus = get_stus();

			var_dump($stus);
			 */

			if(!empty($_POST['login']) && !empty($_POST['uname'])){
				
				if(!empty($_POST['upassword'])){
					$_POST['upassword'] = md5(md5($_POST['upassword']).'koedou');
				}

				$user = D('user') -> field() -> where(array('uname'=>$_POST['uname'])) -> find();	

				if($_POST['upassword']==$user['upassword']){
					$_SESSION['islogin'] = 1;
					$_SESSION['uname'] = $user['uname'];
					$_SESSION['privilege'] = $user['privilege'];
					$this -> redirect('stuinfo/students');
				}
			}

			$this -> display();
		}
	}
