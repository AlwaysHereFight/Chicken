<?php
class Student {

	function index(){
		$stuobj = D('student');

		if(OPENID){
			$this -> redirect('student/myinfo');
		}else{
			$this -> display('login');
		}
	}

	//登陆页面
	function login(){
		$stuobj = D('student');

		if(!empty($_POST['login'])){
			$stu = get_stu(array('xh' => $_POST['xh'], 'spassword' => $_POST['spassword']));


			if(!empty($stu)){
				setcookie("openid",$stu['openid'],time()+60*60*24*30*6);
				$this -> redirect('student/myinfo');
//			var_dump($stu);
			}else{
				alert('学号或者密码有误');
			}

/*
			if(empty($stu['openid'])){
				if($affected){
					setcookie("openid","value",time()+$int);
					$this -> redirect('student/myinfo');
				}else{
					alert('绑定微信号失败');
					$this -> display('login');
				}
			}else{
				//
				$message = '您已绑定微信号，如有疑问，请联系管理员';
				alert($message);
			}
*/
		}

		$this -> display();
	}

	//就业信息
	function datadownload(){

		$dir = 'public/uploads/data/';
		
		$dataArr = get_files($dir);

		$this -> assign('dataArr', $dataArr);
		

		$this -> display();
	}

	//招聘信息
	function recinfo(){
		$stu = D('student') -> field() -> where(array('openid'=>OPENID)) -> find();
		$this -> assign('stu',$stu);

		$dir = 'public/uploads/rec/';
		
		$recsArr = get_files($dir);

		$this -> assign('recsArr', $recsArr);

		$this -> display();
	}

	//个人信息
	function myinfo(){
		$stuobj = D('student');
		$stu = get_stu(array('openid' => OPENID));
		$this -> assign('stu',$stu);

		debug();

		if(!empty($_POST['myinfo'])){

			//文件操作
			$vata = $_FILES['vata'];

			if(!empty($vata['name'])){
				$file_types = explode ( ".", $vata['name'] );
				$file_type = $file_types[count($file_types) - 1];
				/*判别是不是pdf文件*/
				if (strtolower( $file_type ) != "pdf"){
					alert('不是excel文件，请重新提交');
					$this -> redirect('student/myinfo');
				}

				//判断大小$vata['size']单位为字节
				if ($vata[size] >= 500*1024){
					alert('上传失败，文件应小于500K');
					$this -> redirect('student/myinfo');
				}

				$name = $stu['xh'].'.pdf';

				$dest='public/uploads/pdf/'.$name;
				$res = move_uploaded_file($vata['tmp_name'],$dest);
				if($res){
					$affected = D('student') -> where(array('xh'=>$_POST['xh'])) -> update(array('vita' => $dest));
					
					alert('上传文件成功');
				}
			}

			//数据操作
			array_pop($_POST);
			if(is_numeric($_POST['siji'])){
				if($_POST['siji'] >= 425){
					$_POST['sijistate'] = '是';
				}else{
					$_POST['sijistate'] = '否';
				}
			}

/*
			echo '<pre>';
			var_dump($_POST);
			echo '</pre>';
			*/
			$affected = D('student') -> where(array('xh'=>$_POST['xh'])) -> update($_POST);

			if($affected){
				alert('信息更新成功');
				$this -> redirect('student/myinfo');
			}else{
				alert('请修改信息之后提交');
			}

			

		}
		
		$this -> display();
	}
}
