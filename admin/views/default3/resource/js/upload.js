var ebtn=document.getElementById('ebtn');
var ebtn2=document.getElementsByTagName('button');
var efile=document.getElementById('efile');

// ebtn2[0].onclick=function(){
// 	elist.removeChild(this.parentNode);
// };
ebtn.onclick=function(){
	var oli=document.createElement('li');
	elist.insertBefore(oli,elist.children[0]);
	oli.innerHTML='<span>'+efile.value+'</span>'+'<button>'+'重置数据表'+'</button>';
	for(i=0;i<ebtn2.length;i++){
		ebtn2[i].onclick=function(){
			elist.removeChild(this.parentNode);
		};
	};
};