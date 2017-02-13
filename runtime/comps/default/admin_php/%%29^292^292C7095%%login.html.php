<?php /* Smarty version 2.6.18, created on 2016-09-27 15:00:56
         compiled from login/login.html */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>就业信息管理系统登录</title>
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['res']; ?>
/css/login.css">
	<style>
	.box{
		height:500px;
		margin:auto 20px;
		line-height: 500px;
	}

	</style>

	<script src="public/js/statistics.js"></script>
</head>
<body>
	<div class="econ">
		<form action="<?php echo $this->_tpl_vars['url']; ?>
/login" method="post">
			<div class='edenglu'>
				<div class='log'>
					<h1>就业信息管理系统</h1>
				</div>
				<div class='con'>
					<p class="eyonghuming">
						<span>
							用户名：
						</span>
						<input type="text" class="exuehao" name='uname'>
					</p>

					<p class="emima">
						<span class="emi">
							密</span><span class="ema">码：
						</span>
						<input type="password" value="" name='upassword'>
					</p>

					<!--<button class="etijiao"><p><span class="eti">登</span><span class="ejiao">录</span></p></button>-->
					<input type='submit' name='login' value='登陆' class='etijiao'>
				</div>
				
				
				
			</div>
			
		</form>
	</div>
</body>
</html>