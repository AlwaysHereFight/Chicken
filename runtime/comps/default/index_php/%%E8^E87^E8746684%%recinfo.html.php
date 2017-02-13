<?php /* Smarty version 2.6.18, created on 2016-12-26 17:54:07
         compiled from student/recinfo.html */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>招聘信息</title>
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['res']; ?>
/css/student.css">
	
	<script src="public/js/statistics.js"></script>
</head>
<body>
	<div class='lbox'>
		<div class='lbox2'>
			<div class='lmask'><img src="<?php echo $this->_tpl_vars['res']; ?>
/images/5.png" alt=""><p>就业信息管理系统</p></div>
			<div class='ltop'><img src="<?php echo $this->_tpl_vars['res']; ?>
/images/classify_icon.png" alt=""></div>
			<div class='ldaohang'>
				<div class='limg'>
					<img src="<?php echo $this->_tpl_vars['res']; ?>
/images/daohang.png" alt="">
				</div>
				<ul>
					<li><a href="myinfo">基本信息</a></li>
					<li><a href="recinfo">招聘信息</a></li>
					<li><a href="datadownload">资料下载</a></li>
				</ul>

			</div>
		</div>
		<div id='ltz' style='display:none'>
			<marquee behavior="scroll" direction="left">
				最新招聘信息
			</marquee>
		</div>
		<div class="lfl" style='display:none'>
			<select name="" id="">
				<option value="">按地区分类</option>
				<option value="">华南</option>
				<option value="">陕西</option>
				<option value="">华北</option>
				<option value="">长三角</option>
			</select>
			<button id='lf-sel'>查找</button>
		</div>
		<div class='lcon'>
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
				<div style = 'width:100%; height:10px; backgorund-color:gray'></div>
				<div style = 'width:100%; height:60px;line-height:200%; background-color:rgba(0,0,80,0.1); font-size:30px;'>
					<a href='../../<?php echo $this->_tpl_vars['recsArr'][$this->_sections['doc']['index']]['filePath']; ?>
' ><?php echo $this->_tpl_vars['recsArr'][$this->_sections['doc']['index']]['file']; ?>
</a>
				</div>
			<?php endfor; endif; ?>

			<div style='display:none'>
				<div class='hide'>
				</div>
				<div class='lyema'>
					<ul>
						<li><a href="#1" class='la'>1</a></li>
						<li><a href="#2" class='la'>2</a></li>
						<li><a href="#3" class='la'>3</a></li>
						<li><a href="#4" class='la'>4</a></li>
						<li><a href="#5" class='la'>5</a></li>
						<li><a href="#6" class='la'>6</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<script src='<?php echo $this->_tpl_vars['res']; ?>
/js/recinfo.js'></script>
</body>
</html>