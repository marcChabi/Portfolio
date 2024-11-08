document.addEventListener("DOMContentLoaded", function() {
    const textElement = document.getElementById("typing-effect");
    var text = textElement.innerText; // Le texte à afficher
    textElement.innerText = ''; // Efface le texte initial

    let index = 0;

    type(); // Lance l'effet de frappe

    function type() {
        index++;
        textElement.innerText = text.substr(0, index); // Ajoute le caractère courant
       
        if (index < text.length) {
            
            setTimeout(function() {type()}, Math.random() * 300); // Délai entre chaque lettre
        } else {
            // Relance l'effet après 2 secondes
            setTimeout(() => {
                index = 0; // Réinitialise l'index
                textElement.innerText = ''; // Réinitialise le texte
                type(); // Relance l'effet de frappe
            }, 2000); // Délai avant de relancer
        }
    }
});


// Sélection des éléments
const checkbox = document.getElementById('label-check');
const modal = document.getElementById('nav-modal');
const closeModal = document.getElementById('close-modal');

// Quand on clique sur le hamburger, on affiche la modale
checkbox.addEventListener('change', function () {
    if (checkbox.checked) {
        modal.style.display = 'flex';  // Affiche la modale
    } else {
        modal.style.display = 'none';  // Masque la modale
    }
});

// Quand on clique sur le bouton pour fermer la modale
closeModal.addEventListener('click', function () {
    modal.style.display = 'none';
    checkbox.checked = false;  // Réinitialise le hamburger
});

// Si on clique en dehors du contenu de la modale, on la ferme
window.addEventListener('click', function (event) {
    if (event.target === modal) {
        modal.style.display = 'none';
        checkbox.checked = false;  // Réinitialise le hamburger
    }
});


document.getElementById("cvButton").addEventListener("click", function() {
    window.open("cv_marc_chabi.pdf", "_blank");
  });


  