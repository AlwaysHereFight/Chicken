
function resetPage() {
        var deviceWidth = document.documentElement.clientWidth;
        var scale = deviceWidth/640;
        document.body.style.zoom = scale;
	}
resetPage();
window.onresize = function(){
    resetPage();
} 
    //添加
var btn=document.getElementById('ltj');
btn.onclick=function(){
	var num=document.getElementById('lnumber').value;
	var lkc=document.getElementById('lkc');
	var ltext=document.getElementById('ltext');
	var inpt=lkc.getElementsByTagName('input');
	var lp=lkc.getElementsByTagName('p');
	//有不及格课程时出现不能为空
	
	//创建输入框
	for (var i=0;i<num-1;i++) {
		var div=document.createElement('div');
		var inp=document.createElement('input');
		var p=document.createElement('p');
		var span=document.createElement('span');
		lkc.appendChild(div);
		div.appendChild(inp);
		div.appendChild(p);
		div.appendChild(span);
		p.innerHTML='*不能为空';
		span.innerHTML='<a href="#">'+'删除'+'</a>';
	}
	//当为空时提醒
	//失去焦点是文字显示
	
	for (var i=0;i<inpt.length;i++) {
		inpt[i].onblur=function(){
			var flag=0;
			var v=this.value;
			if(v==''||v==null){
				for (var i =0;i<lp.length+1;i++) {
					if(inpt[i]==this){
						lp[i-1].style.display='block';
					}
				}
			}else{
				for (var i = lp.length - 1; i >= 0; i--) {
				lp[i].style.display='';
				}
			}
			
		}
		
	}
	var a=document.getElementsByTagName('a');
	var lkc=document.getElementById('lkc');
	for (var i = a.length - 1; i >= 0; i--) {
		a[i].onclick=function(){
			lkc.removeChild(this.parentNode.parentNode);
		}
	}
}
// var submit=document.getElementById('submit');
// var lkc=document.getElementById('lkc');
// submit.onclick=function(){
// 	var inpt=lkc.getElementsByTagName('input');
// 	if(confirm("是否确认提交,提交后不可更改")){
		
// 		for (var i = inpt.length - 1; i >= 0; i--) {
// 			var val=inpt[i].value;
// 			for(var i=0;i<val.length;i++){
// 				if(val[i]==''||val[i]==null){
// 					this.disabled=false;
// 				}else{
// 					this.disabled=true;
// 					submit.style.background='#ccc';
// 					break;
// 				}
// 			}
// 			alert('为空不能提交！');
			
// 		}

// 	}else{
// 		this.disabled=false;
// 	}
// }
var logo=document.getElementsByClassName('llogo')[0];
ltop=document.getElementsByClassName('ltop')[0],
ch=document.getElementsByClassName('ldel'),
img=ltop.getElementsByTagName('img')[0],
l1=document.getElementsByClassName('l1'),
box=document.getElementsByClassName('ldaohang')[0],
stu=document.getElementById('linform'),
job=document.getElementById('ljob'),
flag1=1,flag=1,
flag2=1;

img.onclick=function(){
	if(flag==1){
		box.style.display='block';
		flag=0;
	}else{
		box.style.display='';
		flag=1;
	}
	
}

l1[0].onclick=function(){
	if(flag1==1){
		 $("#linform").slideUp("slow");
		flag1=0;
	}else{
		$("#linform").slideDown("slow");
		flag1=1;
	}
}
l1[1].onclick=function(){
	if(flag2==1){
		 $("#ljob").slideDown("slow");
		 $("#linform").slideUp("slow");
		flag2=0;
		flag1=0;
	}else{
		$("#ljob").slideUp("slow");
		flag2=1;
	}
}

var wmstate,wmcom,wmcominput;
wmstate=document.getElementById('wmjobstate');
wmcom=document.getElementById('wmcom');
wmcominput=document.getElementById('wmcominput');
wmbtn1=document.getElementById('wmbtn1');
wmstate.onchange=function(){
	if(wmstate.value=="已签约"){
		wmcom.style.display='block';
		wmcominput.style.display='block';
	}else{
		wmcom.style.display='none';
		wmcominput.style.display='none';
	}
}

wmbtn1.onchange=function(){
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

