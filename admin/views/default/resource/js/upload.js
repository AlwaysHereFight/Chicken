var ebtn=document.getElementById('ebtn');
var ebtn2=document.getElementsByTagName('button');
var efile=document.getElementById('efile');
var p1=document.getElementById('p1');
var span1=document.getElementById('span1');
var ebtn1=document.getElementById('ebtn1')
// ebtn2[0].onclick=function(){
// 	elist.removeChild(this.parentNode);
// };
ebtn.onclick=function(){
	for (var i = 0; i < efile.files.length; i++) {
		var oli=document.createElement('li');
		elist.insertBefore(oli,elist.children[0]);
		
		// for (var i = 0; i < file.files.length; i++) {
			oli.innerHTML='<span>'+efile.files[i].name+'</span>'+'<button>'+'删除'+'</button>';
		// };	
	}
	
	span1.innerHTML=elist.children.length;	

	for(i=0;i<ebtn2.length;i++){
		ebtn2[i].onclick=function(){
			elist.removeChild(this.parentNode);
		};
	};
	
};
ebtn1.onclick=function(){
	elist.innerHTML='';
}

