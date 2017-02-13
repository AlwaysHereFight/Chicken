<?php /* Smarty version 2.6.18, created on 2016-09-26 23:24:30
         compiled from usermanage/users.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<meta charset="utf-8">
	<title>学生信息</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['res']; ?>
/css/users.css">
	<script src="public/js/statistics.js"></script>
</head>
<body>
	<div class="wmtop">
		<div class="wmlogo">
			<div>
				<img src="<?php echo $this->_tpl_vars['res']; ?>
/images/logo.png" alt="">
			</div>
			<p><span>印刷包装与数字媒体学院</span>就业信息管理系统</p>
		</div>
		
	</div>
<div id="con1">
	<iframe src="<?php echo $this->_tpl_vars['navurl']; ?>
" frameborder="0" scrolling="no" class="wmiframe1" name="wmiframe1">	
	</iframe>
	<?php if ($this->_tpl_vars['privilege'] == 1): ?>
		<div class="wmdiv1">
			<div class="wmdiv2">
				<div class="wmdiv3"></div>
				管理员
				</div>
				<div class="wmsearch1">
			</div>
			<form method="post" action="<?php echo $this->_tpl_vars['url']; ?>
/users">
				<div class="wmusers">
					<table border="1px" cellspacing="0px" bordercolor='#ccc' cellpadding="0px" id="wmmanage">
						<tr>
							<th>管理员</th>
							<th>密码</th>
						</tr>
						<tr id="managetr">
							<td><input type="text" name="uname" value="<?php echo $this->_tpl_vars['admin']['uname']; ?>
" readonly="read" class="manageinput"></td>
							<td><input type="password" name="upassword" value='123456' class="manageinput"></td>

						</tr>

						<input type="submit" name="admin" value="修改" class="wmsave" id="wmsave">
					</table>
				</div>

				
			</form>
		</div>
		<form method="post" action="<?php echo $this->_tpl_vars['url']; ?>
/users" >
			<div class="wmdiv1">
				<div class="wmdiv5">
					<div class="wmdiv3"></div>
					用户
					</div>
					<div class="wmsearch1">
				</div>

				<div class="wmusers">
					<table border="1px" cellspacing="0px" bordercolor='#ccc' cellpadding="0px" id="wmuser">
						<tr>
							<th>用户名</th>
							<th>密码</th>
							<th>删除</th>
							
						</tr>

						
						<?php unset($this->_sections['doc']);
$this->_sections['doc']['name'] = 'doc';
$this->_sections['doc']['loop'] = is_array($_loop=$this->_tpl_vars['users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
								<th><?php echo $this->_tpl_vars['users'][$this->_sections['doc']['index']]['uname']; ?>
</th>
								<th>******</th>
								<th><a href="<?php echo $this->_tpl_vars['url']; ?>
/users/uname/<?php echo $this->_tpl_vars['users'][$this->_sections['doc']['index']]['uname']; ?>
" style='font-size:15px'>删除</th>
							</tr>
						<?php endfor; endif; ?>

						<tr>
							<th><input type='text' name='uname'></th>
							<th><input type='password' name='upassword'></th>
							<th></th>
						</tr>

					</table>
				<input type="submit" name="adduser" value="添加用户" class="wmsave" id="wmsave1">
				</div>	
			</div>
		</form>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['privilege'] == '2'): ?>
		<div class="wmdiv1">
			<div class="wmdiv2">
				<div class="wmdiv3"></div>
					用户
				</div>
				<div class="wmsearch1">
			</div>
			<form method="post" action="<?php echo $this->_tpl_vars['url']; ?>
/users">
				<div class="wmusers">
					<table border="1px" cellspacing="0px" bordercolor='#ccc' cellpadding="0px" id="wmmanage">
						<tr>
							<th>用户名</th>
							<th>密码</th>
						</tr>
						<tr id="managetr">
							<td><input type="text" name="uname" value="<?php echo $this->_tpl_vars['user']['uname']; ?>
" readonly="read" class="manageinput"></td>
							<td><input type="password" name="upassword" value="123456" class="manageinput"></td>

						</tr>

						<input type="submit" name="user" value="修改密码" class="wmsave" id="wmsave">
					</table>
				</div>

				
			</form>
		</div>
	<?php endif; ?>

</div>
<script src="<?php echo $this->_tpl_vars['res']; ?>
/js/users.js"></script>
</body>
</html>