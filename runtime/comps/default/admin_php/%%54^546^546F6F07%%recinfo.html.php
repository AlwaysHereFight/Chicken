<?php /* Smarty version 2.6.18, created on 2016-12-26 19:52:45
         compiled from datamanage/recinfo.html */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>企业信息</title>
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['res']; ?>
/css/uploadexcel.css">
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
			<div class="epersou">
				<p>企业信息<span style="font-size:20px;color:#D56A1F;"</span></p>
				<hr>
			</div>
			<div class="edata">
				<div class="exuesheng">
					<form action="<?php echo $this->_tpl_vars['url']; ?>
/recinfo" method='post' enctype='multipart/form-data'>
						<p class="ewenjian">
							<span>
								上传企业信息：
							</span>
							<input type="file" multiple="multiple" id="efile" name='rec'>
							<input type="submit" id="ebtn" value="提交" name='recinfo' style='width:50px'>
						</p>

						<p id="p1">共 <span id='span1'> <?php echo $this->_tpl_vars['count']; ?>
 </span> 条企业信息</p>


					</form>

					<ul id="elist">

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
								<a style='position:absolute;right:50px; font-size:15px;' href='recinfo/delete/<?php echo $this->_tpl_vars['recsArr'][$this->_sections['doc']['index']]['file']; ?>
'>
									删除
								</a>
							</li>
						<?php endfor; endif; ?>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo $this->_tpl_vars['res']; ?>
/js/upload.js"></script>
</body>
</html>