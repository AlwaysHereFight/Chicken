

var wmstate,wmcom,wmcominput;
wmstate=document.getElementById('wmjobstate');
wmcom=document.getElementById('wmcom');
wmcominput=document.getElementById('wmcominput');
wmbtn1=document.getElementById('wmbtn1');
wmstate.onclick=function(){
	if(wmstate.value=="已签约"){
		wmcom.style.display='block';
		wmcominput.style.display='block';
	}else{
		wmcom.style.display='none';
		wmcominput.style.display='none';
	}
}

wmbtn1.onclick=function(){
	if (wmstate.value=="已签约") {
		for (var i = 0; i < wmstate.children.length; i++) {
			wmstate.children[i].style.display='none';
		};
		
		wmcom.style.display='block';
		wmcominput.style.display='block';
		// location.reload('false');
		wmcominput.onclick=function(){
			wmcominput.disabled=true;	

		}
	};
}
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
	var del=document.getElementsByClassName('ldel')[0];
	var l1=document.getElementsByClassName('l1')[0];
	del.onclick=function(){
		l1.style.display='none';
	}








