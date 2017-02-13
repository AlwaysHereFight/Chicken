var wmcz=document.getElementById('wmcz');
var wmsave=document.getElementById('wmsave');
var wmadd=document.getElementById('wmadd');
var wmremove=document.getElementById('wmremove');
var wmsave1=document.getElementById('wmsave1');
var managetr=document.getElementById('managetr');
var manageinput=document.getElementsByClassName('manageinput');
var manageEdit=document.getElementsByClassName('manageEdit');
var wmuser=document.getElementById('wmuser');
var userEdit=document.getElementsByClassName('userEdit');
var userinput=document.getElementsByClassName('userinput');
manageEdit[0].onclick=function(){
	manageinput[0].readOnly='';
	manageinput[1].readOnly='';
	manageinput[2].readOnly='';
}
wmsave.onclick=function(){
	manageinput[0].readOnly='read';
	manageinput[1].readOnly='read';
	manageinput[2].readOnly='read';
}
wmcz.onclick=function(){
	var r=confirm('要重置管理员吗？')
	if (r==true) {
		manageinput[0].value='';
		manageinput[0].readOnly='';
		manageinput[1].value='';
		manageinput[1].readOnly='';
		manageinput[2].value='';
		manageinput[2].readOnly='';
	}else{};
}
wmadd.onclick=function(){
	var tr=document.createElement('tr');
	wmuser.appendChild(tr);
	
	for (var i = 0; i < 5; i++) {
		var td=document.createElement('td');
		var input=document.createElement('input');
		tr.appendChild(td);
			if (i<3) {
				td.appendChild(input);
				input.className='userinput';
				input.style.width="100%";
				input.style.height="100%";
				input.style.outline='none';
				input.style.border='0px';
				input.style.fontSize='17px';
				input.style.textAlign='center';input.readOnly='';
				
			};
	
		if (i==3) {
			var a=document.createElement('a');
			td.appendChild(a);
			a.href='###';
			a.innerHTML='编辑';
			a.className='userEdit';	
		};
		if (i==4) {
			var checkbox=document.createElement('input')
			td.appendChild(checkbox);
			checkbox.type='checkbox';
			checkbox.width='10%';
			checkbox.height='10px';
			checkbox.className='checkbox2';
			checkbox.name='checkbox1';	
		}
	};
	Edit();

}


/////////////////////////////////保存

wmsave1.onclick=function(){
		for (var i = 0; i < userinput.length; i++) {
			
				userinput[i].readOnly='read';
		};
}
///////////////////////////////////////编辑
function Edit(){
	for (var i = 0; i < userEdit.length; i++) {	
		userEdit[i].onclick=function(){
				var wtd1=this.parentNode.parentNode;
				var wmtd=wtd1.children;
				for (var j = 0; j< wmtd.length-2; j++) {
					var userinput1=wmtd[j].children[0];
				
					userinput1.readOnly='';
				}
		}
	};
}

Edit();

///////////////////////////////删除

var checkbox2=document.getElementsByClassName('checkbox2');
wmremove.onclick=function(){
	for (var i = checkbox2.length - 1; i >= 0; i--) {
		if(checkbox2[i].checked==true){
			wmuser.removeChild(checkbox2[i].parentNode.parentNode);
		}
	}

}
// history.back();