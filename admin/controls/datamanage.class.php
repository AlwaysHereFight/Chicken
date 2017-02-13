<?php
	class Datamanage {
		function index(){
			//用户验证应该在common 中的init()进行 默认已经运行了init() 函数
		}		

		function recinfo(){
			//get 信息

			/*
			echo '<br>';
			echo '<br>';
			echo '<br>';
			echo '<br>';
			echo '<br>';
			echo '<br>';
			echo 'hello';
			var_dump($_FILES['rec']);
			 */

			//文件操作目录
			$dir = 'public/uploads/rec/';

			//删除操作
			if(!empty($_GET['delete'])){
				
				//		$fileName=utf2gb($_GET['delete']);
				$fileName=$_GET['delete'];

				//删除操作
				$result = unlink($dir.$fileName); 

				if($result){
					$this -> success('删除成功','2','');
				}else{
					$this -> error('删除失败');
				}

			}

			//获得rec目录下的文件
			$recsArr = get_files($dir);

			$count = count($recsArr);

			$this -> assign('recsArr', $recsArr);
			$this -> assign('count', $count);

			//var_dump($recsArr);

			$rec = $_FILES['rec'];
			

			//上传文件
			if(!empty($_POST['recinfo'])){
				if($rec['error'] <= 0){
					//					$fileName = utf2gb($rec['name']);
					$fileName = $rec['name'];



					$dest = 'public/uploads/rec/'.$fileName;

					if(!move_uploaded_file($rec['tmp_name'],$dest)){
						$this -> error('上传失败');
					}else{
						$this -> success('上传成功','2');
					}
				}
			}

			$this -> display();


		}

		function uploadexcel(){
			//与stuinfo -- student() 一样

//			require_once '/public/PHPExcel-1.8//Classes/PHPExcel.php';

			$dir = 'public/uploads/data/';

			
			//删除操作
			if(!empty($_GET['delete'])){
				
				//		$fileName=utf2gb($_GET['delete']);
				$fileName=$_GET['delete'];

				//删除操作
				$result = unlink($dir.$fileName); 

				if($result){
					$this -> success('删除成功','2','');
				}else{
					$this -> error('删除失败','2');
				}

			}


			if(!empty($_POST['data_submit'])){
				$data = $_FILES['data'];

				if($data['error'] <= 0){
					$fileName = $data['name'];

					$dest = $dir.$fileName;

					if(!move_uploaded_file($data['tmp_name'],$dest)){
						$this -> error('上传失败','2');
					}else{
						$this -> success('上传成功','2');
					}
				}
			}

			//获得data目录下的文件
			$dataArr = get_files($dir);

			$count = count($dataArr);

			$this -> assign('recsArr', $dataArr);
			$this -> assign('count', $count);
			
			if(!empty($_POST['uploadexcel'])){
				//文件操作
				$stus = $_FILES['stus'];


				if($stus['error'] <= 0){
					$file_types = explode ( ".", $stus['name'] );

					$file_type = $file_types[count($file_types) - 1];

					/*判别是不是.xls文件，判别是不是excel文件*/
					if (strtolower( $file_type ) != "xls"){
						$this -> error('不是excel文件，请重新提交');
					}

					/*设置上传路径*/
					$dest='public/uploads/excel/'.date('Ymdhis').'.'.$file_type;


					if(!move_uploaded_file($stus['tmp_name'],$dest)){
						$this -> error('上传失败');exit;
					}

					//获取学生excel数据
					$stus = format_excel2array($dest);

					//索引化
					$oldcols = array_values(array_shift($stus));


					//写入数据库
					foreach($stus as $stu){
						//索引化
						$stu = array_values($stu);
						for($i=0; $i<count($stu); ++$i){
							$key = $oldcols[$i];
							$value = $stu[$i];

							$data[$key] = $value;
						}

echo '<pre>';
						var_dump($data);
echo '</pre>';

						D('student')->insert($data);
					}
					$this -> success('上传学生信息成功','2');
					
					$this -> redirect('stuinfo/students');die();
				}else{
					$this -> error('上传学生信息失败','2');
				}
			}

			$this -> display();
		}

	}
