function validazione(event)
{

    if (form.username.value.length == 0) {
        form.username.style.borderBottom = "4px solid var(--red)";

        event.preventDefault();
    } else form.username.style.borderBottom = "2px solid black";

    if (form.password.value.length == 0) {
        form.password.style.borderBottom = "4px solid var(--red)";
        
        event.preventDefault();
    } else form.password.style.borderBottom = "2px solid black";

    if (form.username.value.lenght > 20) {
        document.querySelector("#user-req").style.color = "var(--red)";

        event.preventDefault();
    } else {
        document.querySelector("#user-req").style.color = "black";
    }

    if (!(/[a-zA-Z]/.test(form.password.value) &&  /[\d\W]/.test(form.password.value)) || form.password.value.lenght < 5 || form.password.value.lenght > 20) {
        document.querySelector("#pwd-req").style.color = "var(--red)";

        event.preventDefault();
    } else {
        document.querySelector("#pwd-req").style.color = "black";
    }
}

const form = document.forms['register-form'];
form.addEventListener('submit', validazione);