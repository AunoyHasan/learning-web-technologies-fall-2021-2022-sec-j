function ajax(){

    let value1 = document.getElementById('d1').value;
    let value2 = document.getElementById('d1').value;
    let value3 = document.getElementById('d1').value;
    let value4 = document.getElementById('d1').value;
    let value5 = document.getElementById('d1').value;
    let value6 = document.getElementById('d1').value;
    let value7 = document.getElementById('d1').value;
    let value8 = document.getElementById('d1').value;
    let value9 = document.getElementById('d1').value;

    let equal = document.getElementById('equal').value;
    let xhttp= new XMLHttpRequest();

    xhttp.open('POST', 'calculation.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('equal='+equal);
}