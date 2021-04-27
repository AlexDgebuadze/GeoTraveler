document.getElementById('closeForm').onclick = function(){document.getElementById('usernameErr').innerHTML=''; document.getElementById('passErr').innerHTML=''; document.getElementById('loginErr').innerHTML=''; }

document.getElementById('loginB').onclick = function(){
    if(document.getElementById('usernameErr').innerHTML.length==0 && document.getElementById('passErr').innerHTML.length==0 && document.getElementById('loginErr').innerHTML.length==0){document.getElementsByClassName('SignUpContainer')[0].style.display = 'block'; }
}
document.getElementById('closeForm').onclick = function(){
    document.getElementsByClassName('SignUpContainer')[0].style.display = 'none';
}
document.getElementsByClassName('SignUpContainer')[0].style.display = 'none';

document.getElementById('LoginF').onclick = function(){
    document.getElementsByClassName('SignUpContainer')[0].style.display = 'block';
}