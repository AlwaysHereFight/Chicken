var ebtn=document.getElementById('ebtn');
var ebtn2=document.getElementsByTagName('button');
var efile=document.getElementById('efile');
var ebtn1=document.getElementById('ebtn1');
var elist=document.getElementById('elist');

// ebtn2[0].onclick=function(){
// 	elist.removeChild(this.parentNode);
// };
ebtn.onclick=function(){
	// document.getElementById('elist').style.display="block";
	for(i=0;i<efile.files.length;i++){
	var oli=document.createElement('li');
	elist.insertBefore(oli,elist.children[0]);
	oli.innerHTML='<span>'+efile.files[i].name+'</span>'+'<button>'+'删除'+'</button>';
	}
	for(i=0;i<ebtn2.length;i++){
		ebtn2[i].onclick=function(){
			elist.removeChild(this.parentNode);
		};
	};
};
ebtn1.onclick=function(){
	elist.innerHTML="";
}