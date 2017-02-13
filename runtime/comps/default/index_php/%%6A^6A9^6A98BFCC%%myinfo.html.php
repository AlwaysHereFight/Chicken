<?php /* Smarty version 2.6.18, created on 2016-12-26 17:53:56
         compiled from student/myinfo.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Trans">
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>个人信息</title>
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['res']; ?>
/css/student.css">
	<script src='<?php echo $this->_tpl_vars['res']; ?>
/js/jquery-3.1.0.min.js'></script>

	<script src="public/js/statistics.js"></script>

<style>
	.lh_tip{
		font-size:27px;
		line-height:140%;
		color:#777777;
	}

	.lh_content{
		width:160%;
		height:50px;
		font-size:30px;
	}
</style>

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
		<form action="<?php echo $this->_tpl_vars['url']; ?>
/myinfo" method='post' enctype='multipart/form-data'>
			<div class='lbottom'>
				<div class='lstuinf'>
					<div class='l1'>
						<h1>个人信息</h1><img src="<?php echo $this->_tpl_vars['res']; ?>
/images/arrowUp.png" alt="" class='ldel'>
					</div>
					<div id="linform">
						<table>
							<tr style='display:none'>
								<td>
									专业：
									<span><?php echo $this->_tpl_vars['stu']['major']; ?>
</span>
								</td>
							</tr>
							<tr>
								<td>
									班级：
									<span><?php echo $this->_tpl_vars['stu']['class']; ?>
</span>
								</td>
							</tr>
							<tr>
								<td style='display:none'>
									学号：
									<span><?php echo $this->_tpl_vars['stu']['xh']; ?>
</span>
								</td>
							</tr>
							<tr>
								<td>
									姓名：
									<span><?php echo $this->_tpl_vars['stu']['sname']; ?>
</span>
								</td>
							</tr>
							<tr style='display:none'>
								<td>
									性别：
									<span><?php echo $this->_tpl_vars['stu']['gender']; ?>
</span>
								</td>
							</tr>
							<tr style='display:none'>
								<td>
									籍贯：
									<span><?php echo $this->_tpl_vars['stu']['jiguan']; ?>
</span>
								</td>
							</tr>
							<tr>
								<td>
									<span class='lh_tip'>
										家庭详细住址：
									</span>
									<input type="text" value="<?php echo $this->_tpl_vars['stu']['address']; ?>
" name='address' class='lh_content'>
								</td>
								
							</tr>
							<tr>
								<td>
									<span class='lh_tip'>
										本人联系方式：
									</span>
									<input type="text" value="<?php echo $this->_tpl_vars['stu']['phone']; ?>
" maxlength="11" name='phone' class='lh_content'>
								</td>
								
							</tr>
							<tr>
								<td>
									<span class='lh_tip'>
										家长联系方式：
									</span>
									<input type="text" value="<?php echo $this->_tpl_vars['stu']['parentphone']; ?>
" maxlength="12" name='parentphone' class='lh_content'>
								</td>
							</tr>
							<tr>
								<td >
									<span class='lh_tip' >
										四级成绩：
									</span>
									<input type="text" placeholder="输入成绩" name='siji' value='<?php echo $this->_tpl_vars['stu']['siji']; ?>
' class='lh_content'>
								</td>
							</tr>
						</table>
						<div id='lkc' style='display:none'>
							<span id='lt'>不及格课程：</span>
							<input type="text" id='lnumber' placeholder="请输入课程数"><span id="ltj"></span>
							<div>
								 <input type="text" placeholder="请输入课程名">
								<p id='ltext'>*不能为空</p>
								<span id='ldel'><a href="#">删除</a></span> 
							</div>
						</div>
						<div id='lbtn' style='display:none'>
							<input type="reset" value='重置'>
						</div>
				</div>
				<div class='lstuinf'>
					<div class='l1'><h1>就业信息</h1><img src="<?php echo $this->_tpl_vars['res']; ?>
/images/arrowDown.png" alt="" class='ldel'></div>
					<div id='ljob'>
						<div class="wmjob">
							<span>就业意向：</span>
								<select name="jobintent" id="">
									<option value="" >请选择</option>
									<option value="就业" <?php if ($this->_tpl_vars['stu']['jobintent'] == '就业'): ?> selected <?php endif; ?> >就业</option>
									<option value="创业" <?php if ($this->_tpl_vars['stu']['jobintent'] == '创业'): ?> selected <?php endif; ?> >创业</option>
									<option value="考研" <?php if ($this->_tpl_vars['stu']['jobintent'] == '考研'): ?> selected <?php endif; ?> >考研</option>
									<option value="考公务员" <?php if ($this->_tpl_vars['stu']['jobintent'] == '考公务员'): ?> selected <?php endif; ?> >考公务员</option>
									<option value="不就业" <?php if ($this->_tpl_vars['stu']['jobintent'] == '不就业'): ?> selected <?php endif; ?> >不就业</option>
								</select>
							<span>就业状态：</span>
								<select name="jobstate" id="wmjobstate">
									<option value="" >请选择</option>
									<option value="应聘中" <?php if ($this->_tpl_vars['stu']['jobstate'] == '应聘中'): ?> selected <?php endif; ?> >应聘中</option>
									<option value="签约中" <?php if ($this->_tpl_vars['stu']['jobstate'] == '签约中'): ?> selected <?php endif; ?> >签约中</option>
									<option value="已签约" <?php if ($this->_tpl_vars['stu']['jobstate'] == '已签约'): ?> selected <?php endif; ?> >已签约</option>
								</select>
							<span id="wmcom">签约公司：</span>
								<input type="text" name="company" value="<?php echo $this->_tpl_vars['stu']['company']; ?>
" placeholder="签约公司全称" id="wmcominput" >
							<span>就业方向：</span>
								<select name="jobdirect" id="">
									<option value="" >请选择</option>
									<option value="本专业就业" <?php if ($this->_tpl_vars['stu']['jobdirect'] == '本专业就业'): ?> selected <?php endif; ?> >本专业就业</option>
									<option value="非本专业就业" <?php if ($this->_tpl_vars['str']['jobdirect'] == '非本专业就业'): ?> selected <?php endif; ?> >非本专业就业</option>				
								</select>
						</div>
						<p class="wmp">
							<span class='wmupjianli'>上传简历：</span>
						</p>
						<input type="file" name="vata" value="" class="wmjianli" multiple size="80">
						
					</div>
				</div>
			</div>
			<div class='lbtnBox'>
				<input type='hidden' name='xh' value="<?php echo $this->_tpl_vars['stu']['xh']; ?>
">
				<input type="submit" name="myinfo" value="提交" id="wmbtn1" style='width:85%;height:70px;background-color:#b0b0ff; border-radius:35px;border:0px;font-size:35px'>
			</div>
			
		</form>
	</div>
	<script src='<?php echo $this->_tpl_vars['res']; ?>
/js/student_5.js'></script>
	<?php if (! empty ( $this->_tpl_vars['stu']['company'] )): ?>
		<script>
			var wmstate,wmcom,wmcominput;
			wmstate=document.getElementById('wmjobstate');
			wmcom=document.getElementById('wmcom');
			wmcominput=document.getElementById('wmcominput');
			wmbtn1=document.getElementById('wmbtn1');

			wmcom.style.display='block';
			wmcominput.style.display='block';
		</script>
	<?php endif; ?>
</body>
</html>