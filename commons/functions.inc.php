<?php
	//全局可以使用的通用函数声明在这个文件中.
	
	function get_stu($arr){
		$stu = D('student') -> field() -> where($arr) -> find();


		return $stu;
	}

	function get_stus($arr){
		$stus = D('student') -> field() -> where($arr) -> select();

		return $stus;
	}

	//students页面中获得stus信息的条件
	function get_display_arr($post){
		//major
		if(!empty($post['major'])){
			$display_arr['major'] = $post['major'];
		}

		//jobstate
		if(!empty($post['jobstate'])){
			$display_arr['jobstate'] = $post['jobstate'];
		}

		//jobintent
		if(!empty($post['jobintent'])){
			$display_arr['jobintent'] = $post['jobintent'];
		}

		return $display_arr;
	}

	//导出设置的列
	function get_selected_column_arr($post){
		//phone
		if(!empty($post['phone'])){
			$downexcel_arr['phone'] = $post['phone'];
		}
	
		//parentphone
		if(!empty($post['parentphone'])){
			$downexcel_arr['parentphone'] = $post['parentphone'];
		}

		if(!empty($post['address'])){
			$downexcel_arr['address'] = $post['address'];
		}

		if(!empty($post['sijistate'])){
			$downexcel_arr['sijistate'] = $post['sijistate'];
		}

		if(!empty($post['poverty'])){
			$downexcel_arr['poverty'] = $post['poverty'];
		}

		return $downexcel_arr;
	}


	function alert($str,$preUrl=''){
		$code ="<script>alert('".$str."');";	
		$code.="</script>";

		echo $code;
	}

	function excel_header_remove($stus){
		foreach($stus as $key => $value){
			if($value['xh']=='学号'){
				unset($stus[$key]);
			}
		}

		return $stus;
	}

	require('public/PHPExcel-1.8/Classes/PHPExcel.php');//引入PHP EXCEL类
	function format_excel2array($filePath='',$sheet=0){
        if(empty($filePath) or !file_exists($filePath)){die('file not exists');}
        $PHPReader = new PHPExcel_Reader_Excel2007();        //建立reader对象
        if(!$PHPReader->canRead($filePath)){
                $PHPReader = new PHPExcel_Reader_Excel5();
                if(!$PHPReader->canRead($filePath)){
                        echo 'no Excel';
                        return ;
                }
        }
        $PHPExcel = $PHPReader->load($filePath);        //建立excel对象
        $currentSheet = $PHPExcel->getSheet($sheet);        //**读取excel文件中的指定工作表*/
        $allColumn = $currentSheet->getHighestColumn();        //**取得最大的列号*/
        $allRow = $currentSheet->getHighestRow();        //**取得一共有多少行*/
        $data = array();
        for($rowIndex=1;$rowIndex<=$allRow;$rowIndex++){        //循环读取每个单元格的内容。注意行从1开始，列从A开始
                for($colIndex='A';$colIndex<=$allColumn;$colIndex++){
                        $addr = $colIndex.$rowIndex;
                        $cell = $currentSheet->getCell($addr)->getValue();
                        if($cell instanceof PHPExcel_RichText){ //富文本转换字符串
                                $cell = $cell->__toString();
                        }
                        $data[$rowIndex][$colIndex] = $cell;
                }
        }
        return $data;

	}


	
	function format_array2excel($data,$selected_column_arr,$name='Excel'){
	      error_reporting(E_ALL);
          date_default_timezone_set('Europe/London');
         $objPHPExcel = new PHPExcel();

        /*以下是一些设置 ，什么作者  标题啊之类的*/
         $objPHPExcel->getProperties()->setCreator("科豆团队")
                               ->setLastModifiedBy("转弯的阳光")
                               ->setTitle("数据EXCEL导出")
                               ->setSubject("数据EXCEL导出")
                               ->setDescription("备份数据")
                               ->setKeywords("excel")
                              ->setCategory("result file");
		 /*以下就是对处理Excel里的数据， 横着取数据，主要是这一步，其他基本都不要改*/

	

	//先添加必选数据
		 //第一行excel数据
		// $first_arr=get_stu(array('xh'=>'学号'));

		$objPHPExcel->setActiveSheetIndex(0)

			 //Excel的第A列，uid是你查出数组的键值，下面以此类推
			  ->setCellValue('A1', '专业')
			  ->setCellValue('B1', '班级')
			  ->setCellValue('C1', '学号')
			  ->setCellValue('D1', '姓名')
			  ->setCellValue('E1', '性别')
			  ->setCellValue('F1', '籍贯')
			  ->setCellValue('G1', '就业意向')
			  ->setCellValue('H1', '就业状态');


        foreach($data as $k => $v){

             $num=$k+2;
             $objPHPExcel->setActiveSheetIndex(0)

				 //Excel的第A列，uid是你查出数组的键值，下面以此类推
				  ->setCellValue('A'.$num, $v['major'])   
				  ->setCellValue('B'.$num, $v['class'])
				  ->setCellValue('C'.$num, $v['xh'])
				  ->setCellValue('D'.$num, $v['sname'])
				  ->setCellValue('E'.$num, $v['gender'])
				  ->setCellValue('F'.$num, $v['jiguan'])
				  ->setCellValue('G'.$num, $v['jobintent'])
				  ->setCellValue('H'.$num, $v['jobstate']);
        }

	//添加可选数据
		 //位置
		$column_position = array('I','J','K','L','M');
		//列名
		$column_name = array_values($selected_column_arr);
		//列数据，用来锁定数据
		$column_data = array_keys($selected_column_arr);

		/*
		for($i=0; $i<count($column_name); $i++){
			$objPHPExcel->setActiveSheetIndex(0)
				 //Excel的第A列，uid是你查出数组的键值，下面以此类推
				->setCellValue($column_position[$i].'1', $column_name[$i]);
		}
		 */


		for($i=0; $i<count($column_data); $i++){
			$objPHPExcel->setActiveSheetIndex(0)

				 //Excel的第A列，uid是你查出数组的键值，下面以此类推
				->setCellValue($column_position[$i].'1', $column_name[$i]);

			foreach($data as $k => $v){
				 $num=$k+2;
				 $objPHPExcel->setActiveSheetIndex(0)

					 //Excel的第A列，uid是你查出数组的键值，下面以此类推
					  ->setCellValue($column_position[$i].$num, $v[$column_data[$i]]);
			}
		}

		$objPHPExcel->getActiveSheet()->setTitle('User');
		$objPHPExcel->setActiveSheetIndex(0);
		 header('Content-Type: application/vnd.ms-excel');
		 header('Content-Disposition: attachment;filename="'.$name.'.xls"');
		 header('Cache-Control: max-age=0');
		 $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		 $objWriter->save('php://output');
		 exit;

	}

	function downvita($fileNameArr){
		$filename = "./runtime/zip/" . date ( 'YmdHms' ) . ".zip"; // 最终生成的文件名（含路径）
		// 生成文件
		$zip = new ZipArchive (); // 使用本类，linux需开启zlib，windows需取消php_zip.dll前的注释
		if ($zip->open ( $filename, ZIPARCHIVE::CREATE ) !== TRUE) {
			exit ( '无法打开文件，或者文件创建失败' );
		}
		 
		//$fileNameArr 就是一个存储文件路径的数组 比如 array('/a/1.jpg,/a/2.jpg....');
		  
		  /*
		  var_dump($fileNameArr);
		  echo '<script>alert("test")</script>';
		  */
		foreach ( $fileNameArr as $val ) {
			$zip->addFile ( $val, basename ( $val ) ); // 第二个参数是放在压缩包中的文件名称，如果文件可能会有重复，就需要注意一下
		}
		$zip->close (); // 关闭
		 
		//下面是输出下载;
		header ( "Cache-Control: max-age=0" );
		header ( "Content-Description: File Transfer" );
		header ( 'Content-disposition: attachment; filename=' . basename ( $filename ) ); // 文件名
		header ( "Content-Type: application/zip" ); // zip格式的
		header ( "Content-Transfer-Encoding: binary" ); // 告诉浏览器，这是二进制文件
		header ( 'Content-Length: ' . filesize ( $filename ) ); // 告诉浏览器，文件大小
		@readfile ( $filename );//输出文件;

	}

	function get_files($dir){

		$arr = array();

/*
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
*/

		if (is_dir($dir)){
			if ($dh = opendir($dir)){
				$i=0;
				while (($file = readdir($dh))!= false){
					if($file != '.' && $file !='..'){
						//gb2312转为utf-8
						//		$file_utf = gb2utf($file);
						$file_utf = $file;

						//文件名的全路径 包含文件名
						$filePath = $dir.$file;
			
						//获取文件修改时间
						$fmt = filemtime($filePath);

						$filetime[] = $fmt;
						//echo "<span style='color:#666'>(".date("Y-m-d H:i:s",$fmt).")</span> ".$file."<br/>";
						
						//var_dump($fmt);
						$arr[$i]['filePath'] = $filePath;
						$arr[$i]['file'] = $file_utf;
						$arr[$i]['time'] = date("Y-m-d H:i:s",$fmt);

						++$i;
					}
				}

				closedir($dh);
			}
		}

/*
		array_shift($arr);
		array_shift($arr);

		array_shift($filetime);
		array_shift($filetime);
*/

		$arr = time_desc($filetime, $arr);


//		var_dump($arr);

		return $arr;
	}

	function gb2utf($name){
		$newName = iconv("gb2312", "utf-8", $name);	

		return $newName;

	}

	function utf2gb($name){
		$newName = iconv("utf-8", "gb2312", $name);

		return $newName;
	}

	function time_desc($timeArr, $arrs){
		//	var_dump($timeArr);
		//按时间倒序排序
		arsort($timeArr,SORT_NUMERIC);
	
		//调整索引号
		$timeArr = array_values($timeArr);
			//var_dump(array_values($timeArr));
		for($i = 0; $i < count($timeArr); ++$i){
			$time = date("Y-m-d H:i:s",$timeArr[$i]);
			//时间倒序
			foreach($arrs as $arr){
				if($time == $arr['time']){
					$newArrs[$i] = $arr;
				}
			}
		}

		return $newArrs;

	}

