<?php

class Excel{

	public function __construct() {

		 /*导入phpExcel核心类    注意 ：你的路径跟我不一样就不能直接复制*/
		require_once '/public/PHPExcel-1.8//Classes/PHPExcel.php';
	 }

	/**

	* 读取excel $filename 路径文件名 $encode 返回数据的编码 默认为utf8

	*以下基本都不要修改

	*/

	function read($filename,$encode='utf-8'){

		include_once '/public/PHPExcel-1.8/Classes/PHPExcel.php';
/*
			$objPHPExcel = new PHPExcel();

			$objReader = PHPExcel_IOFactory::createReader('Excel5');

			$objReader->setReadDataOnly(true);

			$objPHPExcel = $objReader->load($filename);

			$objWorksheet = $objPHPExcel->getActiveSheet();

			
//	　　　	$highestRow = $objWorksheet->getHighestRow();
	　　　	$highestColumn = $objWorksheet->getHighestColumn();
	　　    $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
	 　　   $excelData = array();
	 　　　	for ($row = 1; $row <= $highestRow; $row++) {
		　　  for ($col = 0; $col < $highestColumnIndex; $col++) {
					 $excelData[$row][] =(string)$objWorksheet->getCellByColumnAndRow($col, $row)->getValue();
			   }
			}
			return $excelData;
 */
		require_once '/libs/PHPExcel-1.8.0/Classes/PHPExcel.php';     //修改为自己的目录
		echo '<p>TEST PHPExcel 1.8.0: read xlsx file</p>';
		$objReader = PHPExcel_IOFactory::createReaderForFile($filename);
		$objPHPExcel = $objReader->load($filename);
		$objPHPExcel->setActiveSheetIndex(1);
		$date = $objPHPExcel->getActiveSheet()->getCell('A16')->getValue();

		return $date;
	}    

	function demo(){
		echo '<script>';
		echo 'alert(\'demo\');';
		echo '</scritp>';
	}
 }
