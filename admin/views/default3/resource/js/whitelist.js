window.onload=function(){
	var tby=document.getElementsByTagName('tbody')[0];
	var ltab=document.getElementById('ltab');
	// for (var i = 20; i >= 0; i--) {
	// var tr=document.createElement('tr');
	// tby.appendChild(tr);
	// 	for (var j = 9; j >= 0; j--) {
	// 		var td=document.createElement('td');
	// 		tr.appendChild(td);
	// 		if(j==9){
	// 			var input=document.createElement('input');
	// 			td.appendChild(input);
	// 			input.type='checkbox';
	// 		}
	// 		if(j==8){
	// 			td.className='lxuehao';
	// 			td.innerHTML='8';
	// 		}
	// 		if(j==7){
	// 			td.className='lxingming';
	// 			td.innerHTML='7';
	// 		}
	// 		if(j==1){
	// 			var form=document.createElement('form');
	// 			var textarea=document.createElement('textarea');
	// 			td.appendChild(form);
	// 			form.className='ltxtarea'
	// 			form.appendChild(textarea);
	// 			textarea.className='ltex';
	// 		}
	// 		if(j==0){
	// 			var a=document.createElement('a');
	// 			td.appendChild(a);
	// 			a.href='../stuinfo/student.html';
	// 			a.innerHTML='详情';
	// 		}
	// 	}
	// }
	var ltr=document.getElementsByTagName('tr');
	//全选反选
	var input=ltab.getElementsByTagName('input');
	var lall=document.getElementById('lall');
	var lunall=document.getElementById('lunall');
	lall.onclick=function(){
		if(input[0].checked){
			for (var i = input.length - 1; i >= 0; i--) {
				if(input[i].type=='checkbox')
					input[i].checked = false;
			}
			// alert(input[i].checked);
		}
		else{
			for(var i = 0;i<input.length;i++){
				if(input[i].type == "checkbox") 
					input[i].checked = true;
			}
		}
	}
	lunall.onclick=function(){
			for (var i = input.length - 1; i >= 0; i--) {
				if(input[i].type=='checkbox'){
					if(input[i].checked){
					input[i].checked=false;
					}
					else{
						input[i].checked=true;
					}
				}
				
			}
	}
	//将所选的移除
	var lyc=document.getElementById('lyc');
	lyc.onclick=function(){
		for (var i = input.length - 1; i >= 0; i--) {
			if(input[i].checked==true){
				tby.removeChild(input[i].parentNode.parentNode);
			}
		}
	}
	//查询功能
	var lcx=document.getElementById('lcx');
	var name=document.getElementById('lname');
	var lxh=document.getElementById('lxh');
	var xuehao=document.getElementsByClassName('lxuehao');
	var xingming=document.getElementsByClassName('lxingming');
	var tr=document.getElementsByTagName('tr');
	var lfh=document.getElementById('lfh');
	lcx.onclick=function(){
		for (var i = xuehao.length - 1; i >=0; i--) {
			if((lxh.value==xuehao[i].innerHTML)&&
				(name.value==xingming[i].innerHTML)){
				//将符合条件的选出
				// alert('1');
				var xhp=xuehao[i].parentNode; 
				// alert(ltab.innerHTML);
				// tr[i+1].innerHTML=xhp.innerHTML;
				xhp.style.display='';
			}else if(lxh.value==''&&name.value==''){
				alert('请输入学号和姓名');
				break;
			}else{
				xuehao[i].parentNode.style.display='none';
			}
		}

	}
	lfh.onclick=function(){
		for (var i = xuehao.length - 1; i >= 0; i--) {
			// alert('1');
			xuehao[i].parentNode.style.display='';
		}
			
			
	}
	//控制文本框变化
	var ltxt=document.getElementsByClassName('ltxtarea');
	for (var i = ltxt.length - 1; i >= 0; i--) {
		ltxt[i].onmouseover=function(){
			if(ltxt[i]=this){
				ltxt[i].className="ltxtarea2";
			}
			ltxt[i].onmouseout=function(){
				if(ltxt[i]=this){
					ltxt[i].className="";
				}
			}
		}
	}
	
}