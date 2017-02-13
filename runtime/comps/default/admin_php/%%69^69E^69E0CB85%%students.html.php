<?php /* Smarty version 2.6.18, created on 2016-09-26 23:23:46
         compiled from stuinfo/students.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<meta charset="utf-8">
	<title>学生信息</title>
	<meta name="description" content="">
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['res']; ?>
/css/students.css">
	<script src="<?php echo $this->_tpl_vars['res']; ?>
/js/jquery-1.11.3.min.js"></script> 	
	<script src="public/js/statistics.js"></script>

	<script>
		function add(obj){
			var xh = obj.getAttribute('xh');

			//ajax语句
			$.post("<?php echo $this->_tpl_vars['app']; ?>
/whitelist/add",
					{
						xh:xh
					},function(data){
					
					
					if(data=='success'){
						alert('添加成功');
					}else{
						alert('添加失败');
					}
				
			});
		}

		function submitit(){   
			//第一个表单   
			   var tform1= document.getElementById("formid1");   
			//第二个表单   
			   var tform2= document.getElementById("formid2");   
			  
		/*	//提交第一个表单   
			  tform1.submit();   
			*/
			//提交第二个表单   
			  tform2.submit();  
		}
	</script>

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
	<div class="wmdiv4">
		<div class="wmdiv1">	
			<p id="wmp"></p>
				<form method="post" action="<?php echo $this->_tpl_vars['url']; ?>
/students" >
					<div class="wmfind">
						<span>学号：</span>
						<input type="text" name="xh" value="">
						<span>姓名：</span>
						<input type="text" name="sname" value="">
						<input type="submit" name='displaystu' value="&nbsp;" id="find">
						<!-- <img src="../resource/images/seIcon.png" alt=""> -->
					</div>
				</form>

				<form method="post" action="<?php echo $this->_tpl_vars['url']; ?>
/students" id='formid1' >
					<div class="wmdiv2">学生信息</div>
						
					<!-- </div> -->
					<div class="wmsearch1">
					<div>
						<p>按<span>专</span><span>业</span><span>查</span><span>询：</span></p>
						<select name="major">
							<option value="">全部</option>
							<option value="数字媒体专业" <?php if ($this->_tpl_vars['post']['major'] == '数字媒体专业'): ?> selected <?php endif; ?>>数字媒体专业</option>
							<option value="印刷工程专业" <?php if ($this->_tpl_vars['post']['major'] == '印刷工程专业'): ?> selected <?php endif; ?>>印刷工程专业</option>
							<option value="包装工程专业" <?php if ($this->_tpl_vars['post']['major'] == '包装工程专业'): ?> selected <?php endif; ?>>包装工程专业</option>
						</select>
						
						<p>按<span>地</span><span>区</span><span>查</span><span>询：</span></p>
						<select name="" disabled = 'true'>
							<option value="">全部</option>
							<div style='display:hidden'>
								<option value="长三角">长三角</option>
								<option value="珠三角">珠三角</option>
								<option "京津">京津</option>
								<option value="陕西">陕西</option>
							</div>
						</select>

					</div>
					<div>
						<p>按就业状态查询：</p>
						<select name="jobstate" class="select1">
							<option value="">全部</option>
							<option "应聘中" <?php if ($this->_tpl_vars['post']['jobstate'] == '应聘中'): ?> selected <?php endif; ?>>应聘中</option>
							<option value="签约中" <?php if ($this->_tpl_vars['post']['jobstate'] == '签约中'): ?> selected <?php endif; ?>>签约中</option>
							<option value="已签约" <?php if ($this->_tpl_vars['post']['jobstate'] == '已签约'): ?> selected <?php endif; ?>>已签约</option>
						</select>
						<p>按就业意向查询：</p>
						<select name="jobintent" class="select1">
							<option value="">全部</option>
							<option value="就业" <?php if ($this->_tpl_vars['post']['jobintent'] == '就业'): ?> selected <?php endif; ?> >就业</option>
							<option value="创业" <?php if ($this->_tpl_vars['post']['jobintent'] == '创业'): ?> selected <?php endif; ?> >创业</option>
							<option value="考研" <?php if ($this->_tpl_vars['post']['jobintent'] == '考研'): ?> selected <?php endif; ?> >考研</option>
							<option value="考公务员" <?php if ($this->_tpl_vars['post']['jobintent'] == '考公务员'): ?> selected <?php endif; ?> >考公务员</option>
							<option value="不就业" <?php if ($this->_tpl_vars['post']['jobintent'] == '不就业'): ?> selected <?php endif; ?> >不就业</option>
						</select>
					</div>
						<input type="submit" name="displaystus" value="     查询" class="wmcx1">
						<div class="wmoutspan">
							<span >导出设置：</span>
								<div class="div1">
									<input type="checkbox" name="phone" value="本人联系方式"><p>本人联系方式</p>
									<input type="checkbox" name="parentphone" value="父母联系方式"><p>父母联系方式</p>
								</div>
								<div>
									<input type="checkbox" name="address" value="家庭住址"><p>家庭详细住址</p>
									<input type="checkbox" name="poverty" value="是否贫困"><p>是否贫困</p>
								</div>
								<div>
									<input type="checkbox" name="sijistate" value="四级是否通过"><p>四级是否通过</p>
									<div style='display:none'>
										<input type="checkbox" name="" value="不及格门数"><p>不及格门数</p>
									</div>
								</div>	
						</div>
						
						<input class="wmbtn1" type="submit" name="downexcel" value="         导出信息">
						<input class="wmbtn2" type="button" name="" value="     下载简历" onclick='javascript:submitit();'>
					</div>
				</form>
			</div>
		</div>	

		<div class="wmstuinfo">
			<form method="post" action="<?php echo $this->_tpl_vars['url']; ?>
/students" id='formid2'>
				<table  border="1px" cellspacing="0px" id="wmtable">
					<tr id="th">
						<th>专业</th>
						<th>班级</th>
						<th>学号</th>
						<th>姓名</th>
						<th>性别</th>
						<th>籍贯</th>
						<th>就业意向</th>
						<th>就业状态</th>
						<th>特别关注学生</th>
						<th>多选操作</th>
						<th>详情</th>
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
						<tr >
							<td><?php echo $this->_tpl_vars['stus'][$this->_sections['doc']['index']]['major']; ?>
</td>
							<td><?php echo $this->_tpl_vars['stus'][$this->_sections['doc']['index']]['class']; ?>
</td>
							<td><?php echo $this->_tpl_vars['stus'][$this->_sections['doc']['index']]['xh']; ?>
</td>
							<td><?php echo $this->_tpl_vars['stus'][$this->_sections['doc']['index']]['sname']; ?>
</td>
							<td><?php echo $this->_tpl_vars['stus'][$this->_sections['doc']['index']]['gender']; ?>
</td>
							<td><?php echo $this->_tpl_vars['stus'][$this->_sections['doc']['index']]['jiguan']; ?>
</td>
							<td><?php echo $this->_tpl_vars['stus'][$this->_sections['doc']['index']]['jobintent']; ?>
</td>
							<td><?php echo $this->_tpl_vars['stus'][$this->_sections['doc']['index']]['jobstate']; ?>
</td>
							<td><input type='button' xh="<?php echo $this->_tpl_vars['stus'][$this->_sections['doc']['index']]['xh']; ?>
" class='test' value='+' onclick="add(this)"></td>
							<td><input type="checkbox" name="vita[]" value="<?php echo $this->_tpl_vars['stus'][$this->_sections['doc']['index']]['vita']; ?>
"  <?php if (empty ( $this->_tpl_vars['stus'][$this->_sections['doc']['index']]['vita'] )): ?> disabled='true' <?php endif; ?>></td>
							<td><a href="<?php echo $this->_tpl_vars['url']; ?>
/student/xh/<?php echo $this->_tpl_vars['stus'][$this->_sections['doc']['index']]['xh']; ?>
">详情</a></td>
						</tr>
					<?php endfor; endif; ?>
				</table>

				<input type='hidden' name='downvita' value='下载简历'>
			</form>
		</div>
	</div>
</div>
<script src="../resource/js/students.js"></script>
</body>
</html>