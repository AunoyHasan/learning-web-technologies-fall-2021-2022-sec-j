function ajax(){

    let value1 = document.getElementById('1');
    let value2 = document.getElementById('2');
    let value3 = document.getElementById('3');
    let value4 = document.getElementById('4');
    let value5 = document.getElementById('5');
    let value6 = document.getElementById('6');
    let value7 = document.getElementById('7');
    let value8 = document.getElementById('8');
    let value9 = document.getElementById('9');

	let equal = document.getElementById('equal').value;
	let xhttp= new XMLHttpRequest();

	xhttp.open('POST', 'calculation.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('equal='+equal);
}