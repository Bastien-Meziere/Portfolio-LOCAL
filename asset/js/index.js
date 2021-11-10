/* Fonction qui permet d'afficher le loader puis de l'enlever après 1s */
function showContent() {
    document.querySelector('.loader-container').classList.add('hidden')
}

setTimeout(showContent, 1500);