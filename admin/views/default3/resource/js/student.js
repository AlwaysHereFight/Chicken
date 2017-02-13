var ezhuangtai=document.getElementById('ezhuangtai');
var ehuiyue=document.getElementById('ehuiyue');
var ebtn=document.getElementById('ebtn');
var eshi=document.getElementById('eshi');


ezhuangtai.onmousemove=function(){
	if(ezhuangtai.innerHTML=="已签约"){	
		document.getElementById('ehuiyue').style.display="block";
		ehuiyue.onmousemove=function(){
			document.getElementById('ehuiyue').style.display="block";
			ebtn.onclick=function(){
				eshi.innerHTML="是";
			}
		}
		ehuiyue.onmouseout=function(){
			document.getElementById('ehuiyue').style.display="none";
		}
	}
}
ezhuangtai.onmouseout=function(){
	document.getElementById('ehuiyue').style.display="none";
}

function Submit(){
	var euser=document.getElementById('euser');
	document.form1.action='a.jsp?euser='+euser.value;
	alert('保存成功');
	document.form1.submit;
	$(".euser").attr("readOnly",false);
}
