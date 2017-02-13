window.onload=function(){
	var ltab=document.getElementById('ltab');
	for (var i = 20; i >= 0; i--) {
	var tr=document.createElement('tr');
	ltab.appendChild(tr);
	}
	var ltr=document.getElementsByTagName('tr');
	
	for (var i = 1;i<23;i++) {
		// var lycon2=ly2[i].getAttribute("name");
		ltr[i].innerHTML=ltr[1].innerHTML;
	}
	var ly1=document.getElementsByClassName('ly1');
	var ly2=document.getElementsByClassName('ly2');
	for (var i = 1;i<22;i++) {
		var lycon1=ly1[i].getAttribute("name");
		var lycon2=ly2[i].getAttribute("name");
		ly1[i].name=lycon1+i;
		ly2[i].name=lycon2+i;
	}

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
			alert(input[i].checked);
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
		for (var i = input.length - 1; i >= 1; i--) {
			if(input[i].checked==true){
				ltab.removeChild(input[i].parentNode.parentNode);
			}
		}
	}
	//查询功能
	var lcx=document.getElementById('lcx');
	var name=document.getElementById('lname');
	var lxh=document.getElementById('lxh');
	var xuehao=document.getElementsByClassName('lxuehao');
	var xingming=document.getElementsByClassName('lxingming');
	lcx.onclick=function(){
		for (var i = xuehao.length - 1; i >= 0; i--) {
			if((lxh.value==xuehao[i].firstChild.innerHTML)&&
				(name.value==xingming[i].innerHTML)){
				//将符合条件的选出
				var xhp=xuehao[i].parentNode; 
				xhp.style.color='red';
			}
		}
	}
}