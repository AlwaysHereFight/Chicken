<?php
	class WhitelistAction extends Common {
		function index(){
			//用户验证应该在common 中的init()进行 默认已经运行了init() 函数
		}		

		function whitelist(){
			
			$stus = get_stus(array('whitelist' => '1'));

			$this -> assign('stus', $stus);

			if(!empty($_GET['xh'])){
			
				$affected = D('student') -> where(array('xh'=>$_GET['xh'])) -> update(array('whitelist'=>'0'));

				if($affected){
					$this -> success('移除成功');
				}
			}

			//get 信息
			$this -> display();
		}

		function student(){
			//与stuinfo -- student() 一样
			$this -> display();
		}

		function add(){
			
			$affected = D('student') -> where(array('xh'=>$_POST['xh'])) -> update(array('whitelist'=>'1'));

			if($affected){
				echo 'success';
			}
		}

		function jobnotice(){
			
			//alert(var_dump($_POST));
			$affected = D('student') -> where(array('xh'=>$_POST['xh'])) -> update(array('jobnotice'=>$_POST['jobnotice']));

			if($affected){
				echo 'success';
			}
		}

	}
