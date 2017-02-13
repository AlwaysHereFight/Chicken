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

    //创建li
    var hide=document.getElementsByClassName('hide')[0];
    for (var i =0;i<6;i++) {
    	var div=document.createElement('div');
    	var ul=document.createElement('ul');
    	hide.appendChild(div);
    	div.id=i+1;
    	div.appendChild(ul);
    	
    }
    var ul=hide.getElementsByTagName('ul');
    for (var i = 0;i<ul.length;i++) {
		for (var j = 0;j<20;j++) {
			var li=document.createElement('li');
			ul[i].appendChild(li);
			li.innerHTML='<a href="#">'+j+'</a>';
		}
		
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
}

