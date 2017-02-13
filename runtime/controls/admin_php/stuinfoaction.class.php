<?php
	class StuinfoAction extends Common {
		function index(){
			//用户验证应该在common 中的init()进行 默认已经运行了init() 函数
		}		

		function students(){
				

			if(!empty($_POST['displaystu'])){
				if(!empty($_POST['xh'])){
					$display_arr['xh'] = $_POST['xh'];
				}elseif(!empty($_POST['sname'])){
					$display_arr['sname'] = $_POST['sname'];
				}
			}
			
			if(!empty($_POST['displaystus'])){
				$display_arr = get_display_arr($_POST);
			}
			
			if(!empty($_POST['downexcel'])){
				$display_arr = get_display_arr($_POST);

				//可选列
				$selected_column_arr = get_selected_column_arr($_POST);

//				alert(var_dump($selected_column_arr));
				format_array2excel(excel_header_remove(get_stus($display_arr)), $selected_column_arr);
			}
			
			if(!empty($_POST['vita'])){

				downvita($_POST['vita']);
			}

			$this -> assign('post',$_POST);

			$stus = excel_header_remove(get_stus($display_arr));
			//去掉为excel设置的数据
			
			/*
			//MemCache
			$mem = new MemCache;
			$mem -> connect('localhost', 11211);
			$mem -> add('stus', $stus, 1000);

			$stus_test = $mem -> get('stus');

			echo '<pre>';
				var_dump($stus_test);
			echo '</pre>';
*/
			$this -> assign('stus',$stus);
			$this -> display();
		}

		function student(){

			
			$stu = get_stu(array('xh' => $_GET['xh']));

//			var_dump($stu);

			$this -> assign('stu', $stu);

			$this -> display();
		}

		function renegenotice(){

			$affected = D('student') -> where(array('xh'=>$_POST['xh'])) -> update(array('renegenotice'=>$_POST['renegenotice']));

			if($affected){
				echo 'success';
			}

		}

	}
