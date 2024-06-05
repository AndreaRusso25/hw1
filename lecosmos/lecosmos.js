function dropdownMenu (event) {
    
    const target = document.querySelector(".dropdown");

    if (target.style.display == "none") target.style.display = "block";
        else target.style.display = "none";
}

function scroll() {
    const governanceFlagPosition = document.querySelector("#governance").getBoundingClientRect().top;

    console.log(governanceFlagPosition);

    console.log(governanceFlagPosition);
    if (governanceFlagPosition < 1) {
        document.querySelector("#project-nav").style.textDecoration = "none";
        document.querySelector("#governance-nav").style.textDecoration = "underline";
    } else {
        document.querySelector("#project-nav").style.textDecoration = "underline";
        document.querySelector("#governance-nav").style.textDecoration = "none";
    }
}

document.querySelector("#login_t").addEventListener('click', dropdownMenu);
window.addEventListener('scroll', scroll);