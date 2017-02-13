<?php
	class Usermanage {
		function index(){
			//用户验证应该在common 中的init()进行 默认已经运行了init() 函数
		}		

		function users(){
			//get 信息

			$user = D('user');
			$privilege = $_SESSION['privilege'];
			$this->assign('privilege',$privilege);
			$this->assign('user',$_SESSION['uname']);
			//alert(var_dump($privilege));

			if($privilege == '1'){
				$admin = D('user') -> field() -> where(array('privilege'=>'1')) -> find();
				
				$users = D('user') -> field() -> where(array('privilege'=>'2')) -> select();
				
			//	alert(var_dump($users));
				$this -> assign('admin', $admin);
				$this -> assign('users', $users);
			}else if($privilege == '2'){
				$this -> assign('user', array('uname' => $_SESSION['uname']));
				
			}

		//管理员操作
			//修改管理员密码
			if(!empty($_POST['admin'])){
				$affected = D('user') -> where(array('uname'=>$_POST['uname'])) -> update(array('upassword'=>$_POST['upassword']));

				if($affected){
					$this -> success('密码修改成功');
				}else{
					$this -> success('密码修改失败');
				}
			}

			//删除用户
			if(!empty($_GET['uname'])){
				$affected = D('user') -> where(array('uname'=>$_GET['uname'])) -> delete();
			
				if($affected){
					$this -> success('删除用户成功');
					$this -> redirect('usermanage/users');exit;
				}else{
					$this -> success('删除用户失败');
				}	
			}
	
			//添加用户
			if(!empty($_POST['adduser'])){
				array_pop($_POST);

				if(empty($_POST['uname'])){
					alert('用户名不能为空');
					$this -> redirect('usermanage/users');exit;
				}

				$affected = D('user')->insert($_POST);
				if($affected){
					$this -> success('添加用户成功');
					$this -> redirect('usermanage/users');

				}else{
					$this -> success('添加用户失败');
				}
			}


		//用户操作
			//修改密码
			if(!empty($_POST['user'])){
//				array_pop($_POST);
				$affected = D('user') -> where(array('uname'=>$_POST['uname'])) -> update(array('upassword'=>$_POST['upassword']));

				if($affected){
					$this -> success('密码修改成功');
				}else{
					$this -> success('密码修改失败');
				}
			}

			$this -> display();
		}

		function user(){
			$this -> display();
		}

	}
