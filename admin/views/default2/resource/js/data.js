var ebtn1=document.getElementById('ebtn1');
var ebtn2=document.getElementsByTagName('button');
var file=document.getElementById('file');

ebtn2[0].onclick=function(){
	elist.removeChild(this.parentNode);
};
ebtn1.onclick=function(){
	var oli=document.createElement('li');
	elist.insertBefore(oli,elist.children[0]);
	oli.innerHTML='<span>'+file.value+'</span>'+'<button>'+'删除'+'</button>';
	ebtn2[0].onclick=function(){
	elist.removeChild(elist.children[0]);
	};
	
};

// function onSubmit(){  
//     var form1 = document.forms[0];          
//     var file = document.forms[0].getfile.value;  
//     
//     if (file.lastIndexOf('.')==-1){    //如果不存在"."    
//      	alert("路径不正确!");  
//         return false;  
//     }  
//     var AllImgExt=".doc|.pdf|.ppt|";  
//    	var extName = file.substring(file.lastIndexOf(".")).toLowerCase();//（把路径中的所有字母全部转换为小写）          
//     if(AllImgExt.indexOf(extName+"|")==-1){       
//     	ErrMsg="该文件类型不允许上传。请上传 "+AllImgExt+" 类型的文件，当前文件类型为"+extName;  
//         alert(ErrMsg);  
//      	return false;  
//     }  
//     document.forms[0].submit();  
// } 