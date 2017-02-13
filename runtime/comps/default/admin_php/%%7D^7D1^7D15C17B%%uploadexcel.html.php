<?php /* Smarty version 2.6.18, created on 2016-09-26 23:24:13
         compiled from datamanage/uploadexcel.html */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>数据管理-招聘信息</title>
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['res']; ?>
/css/recinfo.css">
	<script src="public/js/statistics.js"></script>
</head>
<body>
<div class="ebody">
	<div class="wmtop">
		<div class="wmlogo">
			<div>
				<img src="<?php echo $this->_tpl_vars['res']; ?>
/images/logo.png" alt="">
			</div>
			<p><span>印刷包装与数字媒体学院</span>就业信息管理系统</p>
		</div>	
	</div>
	<div class="exinxi">
		<iframe src="<?php echo $this->_tpl_vars['navurl']; ?>
" frameborder="0" class="wmiframe1" scrolling="no"></iframe>
		<div class="eright">
			<div class="epersou" id="eqiehuan">
				<p id="select1">资料下载</p>
				<p id="select2">导入信息</p>
			</div>
			<div class="edata">
				<!-- <ul id="enterprise"> -->
					<!-- <li id="show1"> -->
					<div class="eqiye" id="show1">
						<h3>资料下载：</h3>
						<form action="<?php echo $this->_tpl_vars['url']; ?>
/uploadexcel" method='post' enctype='multipart/form-data'>
							<p class="eshangchuan">
								<span>上传资料：</span>
								<input type="file" id="file" name="data" multiple="multiple">
								<input type="submit" id="ebtn1" value="提交" name='data_submit'>
							</p>
						</form>

						<input type="button" name="" id="ebtn3" value="重 置" style='display:none'>

						<p class="ejishu">共<span id="espan"> <?php echo $this->_tpl_vars['count']; ?>
 </span>条资料信息</p>

						<ol id="elist">
							<?php unset($this->_sections['doc']);
$this->_sections['doc']['name'] = 'doc';
$this->_sections['doc']['loop'] = is_array($_loop=$this->_tpl_vars['recsArr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['doc']['show'] = true;
$this->_sections['doc']['max'] = $this->_sections['doc']['loop'];
$this->_sections['doc']['step'] = 1;
$this->_sections['doc']['start'] = $this->_sections['doc']['step'] > 0 ? 0 : $this->_sections['doc']['loop']-1;
if ($this->_sections['doc']['show']) {
    $this->_sections['doc']['total'] = $this->_sections['doc']['loop'];
    if ($this->_sections['doc']['total'] == 0)
        $this->_sections['doc']['show'] = false;
} else
    $this->_sections['doc']['total'] = 0;
if ($this->_sections['doc']['show']):

            for ($this->_sections['doc']['index'] = $this->_sections['doc']['start'], $this->_sections['doc']['iteration'] = 1;
                 $this->_sections['doc']['iteration'] <= $this->_sections['doc']['total'];
                 $this->_sections['doc']['index'] += $this->_sections['doc']['step'], $this->_sections['doc']['iteration']++):
$this->_sections['doc']['rownum'] = $this->_sections['doc']['iteration'];
$this->_sections['doc']['index_prev'] = $this->_sections['doc']['index'] - $this->_sections['doc']['step'];
$this->_sections['doc']['index_next'] = $this->_sections['doc']['index'] + $this->_sections['doc']['step'];
$this->_sections['doc']['first']      = ($this->_sections['doc']['iteration'] == 1);
$this->_sections['doc']['last']       = ($this->_sections['doc']['iteration'] == $this->_sections['doc']['total']);
?>
								<li>
									<a href="../../<?php echo $this->_tpl_vars['recsArr'][$this->_sections['doc']['index']]['filePath']; ?>
" target='_blank' >
										<?php echo $this->_tpl_vars['recsArr'][$this->_sections['doc']['index']]['file']; ?>

									</a>
									<span style='position:absolute;left:450px'>
										<?php echo $this->_tpl_vars['recsArr'][$this->_sections['doc']['index']]['time']; ?>

									</span>
									<a style='position:absolute;right:50px; font-size:15px;' href='uploadexcel/delete/<?php echo $this->_tpl_vars['recsArr'][$this->_sections['doc']['index']]['file']; ?>
'>
										删除
									</a>
								</li>
							<?php endfor; endif; ?>
						</ol>
					</div>
					</li>
					<!-- <li id="show2"> -->
					<div class="eqiye2" id="show2">
						<h3>导入信息：</h3>
						<form action="<?php echo $this->_tpl_vars['url']; ?>
/uploadexcel" method='post' enctype='multipart/form-data'>
							<p class="eshangchuan">
								<span>导入学生信息：</span>
								<input type="file" id="file2" name="stus" multiple="multiple">
								<input type="submit" id="ebtn4" value="提交" name='uploadexcel'>
							</p>

							<input type="button" name="" id="ebtn6" value="重 置">

						</form>
						<!-- <p class="ejishu">共<span id="espan2"> 0 </span>条信息</p> -->
						<ol id="elist1">
						</ol>
					</div>
					<!-- </li> -->
				<!-- </ul> -->
			</div>
		</div>
	</div>
</div>
<script src="<?php echo $this->_tpl_vars['res']; ?>
/js/recinfo.js"></script>
</body>
</html>