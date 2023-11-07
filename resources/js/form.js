document.addEventListener("DOMContentLoaded", function () {
    const inputIds = ["name", "price", "ingredients", "description"];

    inputIds.forEach(function (id) {
        const input = document.getElementById(id);
        const formNotch = document.querySelector(`#${id}~.form-notch`);

        if (input.classList.contains('error')) {
            formNotch.classList.add('form-notch-error');
        }
    });
});

document.getElementById('visible').addEventListener('change', function () {
    let isVisible = document.getElementById('visible-label');
    if (this.checked) {
        isVisible.innerText = 'On';
    } else {
        isVisible.innerText = 'Off';
    }
});

// document.addEventListener("keyup", function () {
//     const input = document.getElementById("name");
//     const formNotch = document.querySelector('.form-notch');

//     if (input.classList.contains('error')) {
//         if (input.value.length > 2) {
//             input.classList.remove('error');
//             formNotch.classList.remove('form-notch-error');
//         }
//     }
// })