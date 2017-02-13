<?php /* Smarty version 2.6.18, created on 2016-10-31 21:20:49
         compiled from whitelist/whitelist.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<meta charset="utf-8">
	<title>特别关注学生</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['res']; ?>
/css/whitelist.css">
	<script src="<?php echo $this->_tpl_vars['res']; ?>
/js/whitelist.js"></script>
	<script src="<?php echo $this->_tpl_vars['res']; ?>
/js/jquery-1.11.3.min.js"></script> 	
	<script src="public/js/statistics.js"></script>

	<script>
		function jobnotice(obj){

			var xh = obj.getAttribute('xh');
			var value = obj.value;

			//ajax语句
			$.post("<?php echo $this->_tpl_vars['app']; ?>
/whitelist/jobnotice",
					{
						xh:xh,
						jobnotice:value
					},function(data){
						if(data=='success'){
							alert('备注成功');
						}else{
							alert('备注失败');
						}
				
					});
		}
	</script>
</head>
<body>
	<header>
		<div class="wmtop">
			<div class="wmlogo">
				<div>
					<img src="<?php echo $this->_tpl_vars['res']; ?>
/images/logo.png" alt="">
				</div>
				<p><span>印刷包装与数字媒体学院</span>就业信息管理系统</p>
			</div>
		</div>
	</header>
<div id="con1">
	<iframe src="<?php echo $this->_tpl_vars['navurl']; ?>
" frameborder="0" scrolling="no" class="wmiframe1" name="wmiframe1">
		</iframe>
	
	<div id='lbox2'>
		<form method="post" action="<?php echo $this->_tpl_vars['url']; ?>
/whitelist">
			<div class='lstu-inf'>
				<div class="ltcon">
					<div class="wmdiv2">特别关注学生</div>
				</div>
				<table id='ltab'>
					<tr id='ltr2'>
						<th>学号</th>
						<th>姓名</th>
						<th>专业</th>
						<th>班级</th>
						<th>四级是否通过</th>
						<th>手机</th>
						<th>就业备注</th>
						<th>详情信息</th>
						<th>移除</th>
					</tr>
					<?php unset($this->_sections['doc']);
$this->_sections['doc']['name'] = 'doc';
$this->_sections['doc']['loop'] = is_array($_loop=$this->_tpl_vars['stus']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<tr>
							<td class="lxuahao"><?php echo $this->_tpl_vars['stus'][$this->_sections['doc']['index']]['xh']; ?>
</td>
							<td class="lxingming"><?php echo $this->_tpl_vars['stus'][$this->_sections['doc']['index']]['sname']; ?>
</td>
							<td><?php echo $this->_tpl_vars['stus'][$this->_sections['doc']['index']]['major']; ?>
</td>
							<td><?php echo $this->_tpl_vars['stus'][$this->_sections['doc']['index']]['class']; ?>
</td>
							<td><?php echo $this->_tpl_vars['stus'][$this->_sections['doc']['index']]['siji']; ?>
</td>
							<td><?php echo $this->_tpl_vars['stus'][$this->_sections['doc']['index']]['phone']; ?>
</td>
							<td>
								<div class='ltxtarea'>
									<textarea xh="<?php echo $this->_tpl_vars['stus'][$this->_sections['doc']['index']]['xh']; ?>
" class='ltex' onchange='jobnotice(this)'><?php echo $this->_tpl_vars['stus'][$this->_sections['doc']['index']]['jobnotice']; ?>
</textarea>
								</div>
							</td>
							<td><a href="<?php echo $this->_tpl_vars['app']; ?>
/stuinfo/student/xh/<?php echo $this->_tpl_vars['stus'][$this->_sections['doc']['index']]['xh']; ?>
">详情</a></td>
							<td><a href="<?php echo $this->_tpl_vars['url']; ?>
/whitelist/xh/<?php echo $this->_tpl_vars['stus'][$this->_sections['doc']['index']]['xh']; ?>
">移除</a></td>
						</tr>
					<?php endfor; endif; ?>
				</table>
				<div class='lxuanze'>
					<p>选择:<a href="#" id='lall'>全部</a>-<a href="#" id='lunall'>反选</a></p>
				</div>
				<input type="submit"  id='lyc' value="提交">
			</div>
		</form>
	</div>
</div>
</body>
</html>