<?php /* Smarty version 2.6.18, created on 2016-09-26 23:26:27
         compiled from student/datadownload.html */ ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>资料下载</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="">
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
					<li><a href="myinfo">我的信息</a></li>
					<li><a href="recinfo">招聘信息</a></li>
					<li><a href="datadownload">资料下载</a></li>
				</ul>

			</div>
		</div>
		<div class='linf-top' style = 'display:none'>
			<p>资料下载</p>
		</div>
		<div id='lselect' style='display:none'>
				<span>搜索</span><input type="search">
				<button id='se'>查找</button>
		</div>
		<div class='linf-bottom' style = 'display:none'>
			<ul>
				<li><span>资料名称</span><a href="#"><img src="<?php echo $this->_tpl_vars['res']; ?>
/images/download.png" alt=""></a></li>
			</ul>
		</div>

		<div align='center'>
			<?php unset($this->_sections['doc']);
$this->_sections['doc']['name'] = 'doc';
$this->_sections['doc']['loop'] = is_array($_loop=$this->_tpl_vars['dataArr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<div style = 'width:100%; height:60px; line-height:200%; background-color:rgba(0,0,80,0.1); font-size:30px;'>
					<a href='../../<?php echo $this->_tpl_vars['dataArr'][$this->_sections['doc']['index']]['filePath']; ?>
'><?php echo $this->_tpl_vars['dataArr'][$this->_sections['doc']['index']]['file']; ?>
</a>
				</div>
			<?php endfor; endif; ?>
		</div>

	</div>
	<script src="<?php echo $this->_tpl_vars['res']; ?>
/js/jobinfo.js"></script>
<script>
function resetPage() {
    var deviceWidth = document.documentElement.clientWidth;
    var scale = deviceWidth/640;
    document.body.style.zoom = scale;
}
resetPage();
window.onresize = function(){
    resetPage();
} 
</script>
</body>
</html>