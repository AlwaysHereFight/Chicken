<?php /* Smarty version 2.6.18, created on 2016-09-26 23:08:26
         compiled from student/login.html */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['res']; ?>
/css/elogin.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<script src="public/js/statistics.js"></script>
</head>
<body>
	<div class="econ">
		<div class="edenglu">
		<form action="<?php echo $this->_tpl_vars['url']; ?>
/login" method="post">
			<img src="<?php echo $this->_tpl_vars['res']; ?>
/images/yuanbiao1.png" alt="">
			<h1>就业信息管理系统</h1>
			<p class="edeng">登 录</p>
			<p class="eyonghuming"><span>用户名：</span><input type="text" placeholder="学号" class="exuehao" name='xh'></p>
			<p class="emima"><span class="emi">密</span><span class="ema">码：</span><input type="password" value="" name='spassword'></p>
			<!--
				<button style='display:none' class="etijiao"><p><span class="eti">提</span><span class="ejiao">交</span></p></button>
			-->
			<input type='submit' class='etijiao' name='login'>
		</form>
		</div>
	</div>
<!-- <script src="e.js"></script> -->
<script src="jquery-1.8.3.min.js"></script>
<script language="javascript">
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