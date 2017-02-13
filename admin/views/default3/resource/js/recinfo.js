var ebtn1=document.getElementById('ebtn1');
var file=document.getElementById('file');
var espan=document.getElementById('espan');
var ebtn2=document.getElementsByTagName('button');
var ebtn3=document.getElementById('ebtn3');

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
			espan.innerHTML=elist.children.length--;
		};
	};
};
ebtn3.onclick=function(){
	elist.innerHTML="";
	espan.innerHTML=elist.children.length--;
}