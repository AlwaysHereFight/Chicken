var ebtn1=document.getElementById('ebtn1');
var file=document.getElementById('file');
var espan=document.getElementById('espan');
var ebtn2=document.getElementsByTagName('button');
var ebtn3=document.getElementById('ebtn3');
var elist=document.getElementById('elist');

ebtn1.onclick=function(){
	for (var i = 0; i < file.files.length; i++) {
		var oli=document.createElement('li');
		elist.insertBefore(oli,elist.children[0]);
		
		// for (var i = 0; i < file.files.length; i++) {
			oli.innerHTML='<span>'+file.files[i].name+'</span>'+'<button>'+'删除'+'</button>';
		// };	
	}
	
	espan.innerHTML=elist.children.length;	
	for (var i = 0; i < ebtn2.length; i++) {
		ebtn2[i].onclick=function(){
			elist.removeChild(this.parentNode);
			// espan.innerHTML=elist.children.length--;
		};
	};
};
ebtn3.onclick=function(){
	elist.innerHTML="";
	// espan.innerHTML=elist.children.length--;
}

var ebtn4=document.getElementById('ebtn4');
var file2=document.getElementById('file2');
var espan2=document.getElementById('espan2');
var ebtn5=document.getElementsByTagName('button');
var ebtn6=document.getElementById('ebtn6');
var elist1=document.getElementById('elist1');

ebtn4.onclick=function(){
	for (var i = 0; i < file2.files.length; i++) {
		var oli=document.createElement('li');
		elist1.insertBefore(oli,elist1.children[0]);
		
		// for (var i = 0; i < file.files.length; i++) {
			oli.innerHTML='<span>'+file2.files[i].name+'</span>'+'<button>'+'删除'+'</button>';
		// };	
	}
	
	espan2.innerHTML=elist1.children.length;	
	for (var i = 0; i < ebtn5.length; i++) {
		ebtn5[i].onclick=function(){
			elist1.removeChild(this.parentNode);
			// espan2.innerHTML=elist1.children.length--;
		};
	};
};
ebtn6.onclick=function(){
	elist1.innerHTML="";
	// espan2.innerHTML=elist1.children.length--;
}

	//切换
	// var enterprise=document.getElementById('enterprise');
	// var eqiehuan=document.getElementById('eqiehuan');
	// var lis=enterprise.getElementsByTagName('li');
	// var ps=eqiehuan.getElementsByTagName('p');
	var select1=document.getElementById('select1');
	var select2=document.getElementById('select2');
	var show1=document.getElementById('show1');
	var show2=document.getElementById('show2');

	select1.onclick=function(){
		show1.style.display="block";
		show2.style.display="none";
		select1.style.backgroundColor='#B699E5';
		select2.style.backgroundColor='';

	}
	select2.onclick=function(){
		show1.style.display="none";
		show2.style.display="block";
		select2.style.backgroundColor='#B699E5';
		select1.style.backgroundColor='#fff';
	}
	// for(var i=0;i<ps.length;i++){
	// 	ps[i].onclick=function(){
	// 		for(var i=0;i<ps.length;i++){
	// 			if(ps[i]==this){
	// 				ps[i].className='select';
	// 				lis[i].style.display='block';
	// 			}else{
	// 				ps[i].className='';
	// 				lis[i].style.display='none';
	// 			};
	// 		};
	// 	};
	// };