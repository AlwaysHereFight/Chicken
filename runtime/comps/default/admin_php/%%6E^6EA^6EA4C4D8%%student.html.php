<?php /* Smarty version 2.6.18, created on 2016-12-26 16:04:17
         compiled from stuinfo/student.html */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人信息</title>
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['res']; ?>
/css/student.css">
	<script src="<?php echo $this->_tpl_vars['res']; ?>
/js/jquery-1.11.3.min.js"></script> 	
	<script src="public/js/statistics.js"></script>
	
	<script>
		function renegenotice(obj){

			var xh = obj.getAttribute('xh');
			var value = obj.value;

			//ajax语句
			$.post("<?php echo $this->_tpl_vars['app']; ?>
/stuinfo/renegenotice",
					{
						xh:xh,
						renegenotice:value
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
<div class="ebody">
	<!-- <iframe src="../public/head.html" frameborder="0" class="eframe2" scrolling="no"></iframe> -->
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
				<p>个人信息</p>
				<hr><br>
				<!--
				<form action="demo_form.asp" method="get" class="esou">
				姓名：<input type="text">
				学号：<input type="text">
				<input type="submit" value="搜 索" class="esousuo">
				</form>
				-->
			</div>
			<form action="<?php echo $this->_tpl_vars['url']; ?>
/student" method="post" name="form1" id="euser" onsubmit="return checkcall">
				<table class="etable">
					<tr>
						<td>专业</td>
						<td><?php echo $this->_tpl_vars['stu']['major']; ?>
</td>
						<td>班级</td>
						<td><?php echo $this->_tpl_vars['stu']['class']; ?>
</td>
						<td>学号</td>
						<td><?php echo $this->_tpl_vars['stu']['xh']; ?>
</td>
					</tr>
					<tr>
						<td>姓名</td>
						<td><?php echo $this->_tpl_vars['stu']['sname']; ?>
</td>
						<td>性别</td>
						<td><?php echo $this->_tpl_vars['stu']['gender']; ?>
</td>
						<td>籍贯</td>
						<td><?php echo $this->_tpl_vars['stu']['jiguan']; ?>
</td>
					</tr>
					<tr>
						<td>就业意向</td>
						<td><?php echo $this->_tpl_vars['stu']['jobintent']; ?>
</td>

						<td>就业状态</td>
						<td id="ezhuangtai"><?php echo $this->_tpl_vars['stu']['jobstate']; ?>
</td>
							<p id="ehuiyue">是否毁约？<button id="ebtn" type="button">是</button></p>
							<td>就业方向</td>
							<td><?php echo $this->_tpl_vars['stu']['jobdirect']; ?>
</td>
					</tr>
					<tr>
						<td>参加招聘会次数</td>
						<td></td>
						<td>就业地区 </td>
						<td></td>
						<td>签约公司</td>
						<td><?php echo $this->_tpl_vars['stu']['company']; ?>
</td>
					</tr>
					<tr>
						<td>本人联系方式</td>
						<td><?php echo $this->_tpl_vars['stu']['phone']; ?>
</td>
						<td>父母联系方式</td>
						<td><?php echo $this->_tpl_vars['stu']['parentphone']; ?>
</td>
						<td>家庭住址</td>
						<td><?php echo $this->_tpl_vars['stu']['address']; ?>
</td>
					</tr>
					<tr>
						<td>是否贫困</td>
						<td><?php echo $this->_tpl_vars['stu']['poverty']; ?>
</td>
						<td>四级是否通过</td>
						<td><?php echo $this->_tpl_vars['stu']['sijistate']; ?>
</td>
						<td>不及格门数</td>
						<td></td>
					</tr>
					<tr>
						<td>毁约备注</td>
						<td colspan="5" ><textarea xh='<?php echo $this->_tpl_vars['stu']['xh']; ?>
' id="eshi" cols="30" rows="5" placeholder = '请输入 毁约备注' onchange='renegenotice(this)'><?php echo $this->_tpl_vars['stu']['renegenotice']; ?>
</textarea></td>
					</tr>
				</table>
				
				<input type="submit" class="ebaocun" value="保 存" name='student' style='display:none'>
			</form>
		</div>
	</div>
</div>
<!-- <script src="jquery-1.8.3.min.js"></script> -->
<script src="<?php echo $this->_tpl_vars['res']; ?>
/js/student.js"></script>
</body>
</html>