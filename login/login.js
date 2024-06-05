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
}

const form = document.forms['login-form'];
form.addEventListener('submit', validazione);