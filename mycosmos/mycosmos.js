function dropdownMenu (event) {
    
    const target = document.querySelector(".dropdown");

    if (target.style.display == "none") target.style.display = "block";
        else target.style.display = "none";
}

document.querySelector("#login_t").addEventListener('click', dropdownMenu);