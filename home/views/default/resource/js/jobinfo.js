var logo=document.getElementsByClassName('llogo')[0];
var ltop=document.getElementsByClassName('ltop')[0];
var img=ltop.getElementsByTagName('img')[0];
var flag=1;
img.onclick=function(){
	if(flag==1){
		logo.style.display='block';
		flag=0;
	}else{
		logo.style.display='';
		flag=1;
	}
	
}
var logo=document.getElementsByClassName('llogo')[0];
var ltop=document.getElementsByClassName('ltop')[0];
var img=ltop.getElementsByTagName('img')[0];
var box=document.getElementsByClassName('ldaohang')[0];
var flag=1;
img.onclick=function(){
	if(flag==1){
		box.style.display='block';
		flag=0;
	}else{
		box.style.display='';
		flag=1;
	}
}
var oimg=document.getElementById('se');
var ol=document.getElementsByClassName('linf-bottom')[0];
var oli=ol.getElementsByTagName('span');
var se=document.getElementById('lselect');
var inpt=se.getElementsByTagName('input')[0];
oimg.onclick=function(){
	for (var i = oli.length - 1; i >= 0; i--) {
		if(oli[i].innerHTML==inpt.value){
			oli[i].style.color='red';
		}else{
			alert('没有找到相关文件！');
			break;
		}
	}
}



