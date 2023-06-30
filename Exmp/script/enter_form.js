// Регистрация
var modal = document.getElementById('id01');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function openbox(){
    display = document.getElementById('reg').style.display;

    if(display=='block'){
        document.getElementById("reg").style.display='none';
    }else{
        document.getElementById("reg").style.display='block';
    }
}
