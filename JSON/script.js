let student = [1, 'alamin', 'alamin@aiub.edu', 2.4];

student[0];


function f1(){
	let element = document.getElementsByTagName('h1')[0];
	element.innerHTML = "ALAMIN";	
}

function f2(){

	let name = document.getElementById('name').value;
	
	if(name != ""){
		document.getElementsByTagName('h1')[0].innerHTML = name;
		document.getElementById('d1').innerHTML = "";
	}else{
		document.getElementById('d1').innerHTML = "<p style='color:red'> Null data</p>";
	}
}


function moveLeft(){

	let current = document.getElementById('d1').style.left;
	let num = current.replace('px','');
	num	= parseInt(num)+10;
	document.getElementById('d1').style.left = num+"px";
}


function moveRight(){

	let current = document.getElementById('d1').style.left;
	let num = current.replace('px','');
	num	= parseInt(num)-10;
	document.getElementById('d1').style.left = num+"px";
}

function ajax(){

	let name = document.getElementById('name').value;
	let dept = "SE";
	let email ="alamin@aiub.edu";

	let json = {
		'name' 	: name,
		'dept'	: dept,
		'email'	: email
	}

	let myjson = JSON.stringify(json);
	
	let xhttp= new XMLHttpRequest();

	xhttp.open('POST', 'from.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('data='+myjson);

	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			let obj = JSON.parse(this.responseText);	
			alert(obj.email);
		}
	}
}