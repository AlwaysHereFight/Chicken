window.onload=function(){
	var tby=document.getElementsByTagName('tbody')[0];
	var ltab=document.getElementById('ltab');
	
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