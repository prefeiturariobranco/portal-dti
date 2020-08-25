function showAlerts() {
    var alertType = document.querySelector('#system_error');
    var alertMsg = document.querySelector('#system_msg');

    if (alertType.value == 1) {

        Swal.fire({
            type: 'success',
            title: alertMsg.value,
        });

    }
    else if (alertType.value == 2) {

        Swal.fire({
            type: 'danger',
            title: alertMsg.value,
        });
    }
    else if (alertType.value == 3) {
        Swal.fire({
            type: 'warning',
            title: alertMsg.value,
        });
    }
}

window.onload = function () {

    showAlerts();
}