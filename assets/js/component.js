let showpassword = document.getElementById('showpassword');
showpassword.addEventListener('change', (e) => {
    if (e.target.checked == true) {
        password.type = "text";
    } else {
        password.type = "password";
    }
})

showpassword1.onchange = function () {
    if (showpassword1.checked == true) {
        password1.type = "text";
    } else {
        password1.type = "password";
    }
}