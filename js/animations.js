document.addEventListener("DOMContentLoaded", function() {

    // Fonction pour déclencher l'animation lors du défilement
    function animateOnScroll() {
        document.querySelectorAll('[data-animated-onScroll]').forEach(function(element) {
            const rect = element.getBoundingClientRect();
            const windowHeight = window.innerHeight || document.documentElement.clientHeight;

            // Vérifier si l'élément est visible dans la fenêtre
            if (rect.top <= windowHeight && rect.bottom >= 0) {
                element.classList.add('active');
            } else {
                element.classList.remove('active');
            }
        });
    }

    // Fonction pour animer au chargement de la page
    function animateOnLoad() {
        document.querySelectorAll('[data-animated-onLoad]').forEach(function(element) {
            const rect = element.getBoundingClientRect();
            const windowHeight = window.innerHeight || document.documentElement.clientHeight;

            // Vérifier si l'élément est visible dans la fenêtre
            if (rect.top <= windowHeight && rect.bottom >= 0) {
                element.classList.add('active');
            } else {
                element.classList.remove('active');
            }
        });
    }

    // Lancer l'animation au défilement
    window.addEventListener('scroll', animateOnScroll);

    // Appel initial pour le chargement de la page
    animateOnLoad();
    animateOnScroll(); // Appel initial pour vérifier les éléments déjà visibles
});

