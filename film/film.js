function dropdownMenu (event) {
    const target = document.querySelector(".dropdown");

    if (target.style.display != "block") target.style.display = "block";
        else target.style.display = "none";
}

function loadComments(){
    fetch("./loadComments.php?IMDbID=" + idForm.IMDbID.value).then(response => {
        return response.json();
        }).then(data => {
            const container = document.querySelector('.comment-show');
            container.textContent = '';
                for (let i = 0; i < data.length; i++){
                    const commentElement = document.createElement('div');
                    commentElement.className = 'comment';
                    commentElement.dataset.id = data[i].id;

                    const userElement = document.createElement('h2');
                    userElement.textContent = data[i].user + ' dice:';

                    const contentElement = document.createElement('p');
                    contentElement.textContent = data[i].content;

                    const dateElement = document.createElement('p');
                    dateElement.id = 'date';
                    dateElement.textContent = data[i].date;

                    commentElement.appendChild(userElement);
                    commentElement.appendChild(contentElement);
                    commentElement.appendChild(dateElement);

                    container.appendChild(commentElement);
                }
        });
}

async function validazione(event) {
    event.preventDefault();
    if (commentForm.comment.value.length > 200 || commentForm.comment.value.length == 0) {
        const target = document.querySelector("#requirements");
        target.style.color = "var(--red)";
    } else {
        const form_post = {
            IMDbID: idForm.IMDbID.value,
            comment: commentForm.comment.value
        }
        await fetch('./comment.php?IMDbID=' + idForm.IMDbID.value + '&comment=' + commentForm.comment.value);
    }
    commentForm.comment.value = '';
    loadComments();
}

function updateWatchlistButton(){
    fetch('./towatch.php?mode=0&id=' + idForm.IMDbID.value).then(response => response.text()).then(data => {
        watchlistForm.add.value = data;
        if(data == "1"){
            watchlistForm.classList.add("added")
            document.querySelector("#watchlist-status").innerHTML = "rimuovi dalla watchlist";
        } else {
            watchlistForm.classList.remove("added")
            document.querySelector("#watchlist-status").innerHTML = "aggiungi alla watchlist"
        };
    });
}

async function watchlist(event) {
    event.preventDefault();
    await fetch('./towatch.php?mode=1&id=' + idForm.IMDbID.value + '&add=' + watchlistForm.add.value);
    updateWatchlistButton();
}

if(document.querySelector("#login_t")) document.querySelector("#login_t").addEventListener('click', dropdownMenu);

const idForm = document.forms['id-form'];
loadComments();

const commentForm = document.forms['comment-form'];
commentForm.addEventListener('submit', validazione);

const watchlistForm = document.forms['watchlist-form'];
watchlistForm.addEventListener('submit', watchlist);

fetch('./towatch.php?mode=0&id=' + idForm.IMDbID.value).then(response => response.text()).then(data => {
    console.log(data);
    watchlistForm.add.value = data;
    if(data == "1"){
        watchlistForm.classList.add("added");
        document.querySelector("#watchlist-status").innerHTML = "rimuovi dalla watchlist";
    } else document.querySelector("#watchlist-status").innerHTML = "aggiungi alla watchlist";
});