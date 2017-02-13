window.onload=function(){
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
		for (var i=0;i<num;i++) {
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
	
}