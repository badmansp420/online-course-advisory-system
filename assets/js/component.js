
// For Show Password Login Form
let showpassword = document.getElementById('showpassword');
showpassword.addEventListener('change', (e) => {
    if (e.target.checked == true) {
        password.type = "text";
    } else {
        password.type = "password";
    }
})

// For Show Password Registration Form
showpassword1.onchange = function () {
    if (showpassword1.checked == true) {
        password1.type = "text";
    } else {
        password1.type = "password";
    }
}

// For Login Form Login Loding Animation 
const showLoading = function () {
    swal({
        title: 'Now loading',
        allowEscapeKey: false,
        allowOutsideClick: false,
        timer: 2000,
        onOpen: () => {
            swal.showLoading();
        }
    }).then(
        () => { },
        (dismiss) => {
            if (dismiss === 'timer') {
                console.log('closed by timer!!!!');
                swal({
                    title: 'Finished!',
                    type: 'success',
                    timer: 2000,
                    showConfirmButton: false
                })
            }
        }
    )
};
//showLoading();

function loding() {
    showLoading();

}