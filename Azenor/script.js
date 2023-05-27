/*Modale*/
let modal = document.getElementById('myModal');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";}}

/*ouvrir modale*/
let openmodal = document.querySelectorAll('.openmodal');
openmodal.forEach(function(element){
  element.onclick = function(){
  modal.style.display = "block";
}
});

/*animation*/
const articles = [
  "Article 1",
  "Article 2",
  "Article 3"
];

// Fonction pour mettre à jour le texte de la machine à écrire
function mettreAJourTexte() {
  const texteMachine = document.getElementById("texte-machine");
  const articleCourant = articles.shift(); // Récupérer le premier article de la liste
  articles.push(articleCourant); // Ajouter l'article à la fin de la liste
  texteMachine.textContent = articleCourant;
}

// Mettre à jour le texte toutes les 5 secondes
setInterval(mettreAJourTexte, 5000);