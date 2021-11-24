function ajax(){

    let value = document.getElementById('d1').value;

    let equal = document.getElementById('equal').value;

    let operator = document.getElementById('operator').value;

    let xhttp= new XMLHttpRequest();

    xhttp.open('POST', 'calculation.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('equal='+equal);
}