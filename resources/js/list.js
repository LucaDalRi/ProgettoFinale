let originalBody = document.body.innerHTML;
function checkOrientation() {
    let h = window.innerHeight;
    let w = window.innerWidth;
    let message = document.getElementById("rotate");

    if (w < 577) {
        if (h > w) {
            if (!message) {
                document.body.innerHTML = `<h3 id="rotate" class="d-flex justify-content-center align-items-center vh-100">Ruota lo schermo per<br> visualizzare il contenuto</h3>`;
            }
        } else {
            if (message) {
                message.remove();
                document.body.innerHTML = originalBody;
            }
        }
    } else {
        if (message) {
            message.remove();
            document.body.innerHTML = originalBody;
        }
    }

}

window.addEventListener("resize", function () {
    checkOrientation();
});

checkOrientation();