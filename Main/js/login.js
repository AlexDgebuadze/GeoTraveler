document.getElementById('closeForm').onclick = function(){document.getElementById('usernameErr').innerHTML=''; document.getElementById('passErr').innerHTML=''; document.getElementById('loginErr').innerHTML=''; }

document.getElementById('loginB').onclick = function(){
    document.getElementsByClassName('SignUpContainer')[0].style = 'display: block !important';
}