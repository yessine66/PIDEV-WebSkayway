window.onload = () => {
    // On va chercher toutes les étoiles
    var spare = document.getElementById('ok');
    // On va chercher l'input
    const note = document.querySelector("#score");
    var nb = document.getElementById('nb').value;
    score = score + 1;
    // On écoute le clic
    spare.addEventListener("click", function () {
        alert(score);
        if (spare.checked) {
            note.value = nb;
        }
    });

    function valider() {
        score = 0;
        if (spare.checked) {
            score = score + note.value;
        }
        alert("checked " + score);


    }

}




