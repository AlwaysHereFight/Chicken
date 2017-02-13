function Submit(){
	var euser=document.getElementById('euser');
	document.form1.action='a.jsp?euser='+euser.value;
	alert('确定要保存吗？');
	document.form1.submit;
}
// function checkcall(){
// 	var input=document.getElementsByTagname('input');
// 	if(input==""){
// 		aler('不可为空');
// 		return false;
// 	};
// }