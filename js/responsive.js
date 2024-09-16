function checkScreenSize() {
    //if ration is less than 1/1
    if (window.innerWidth / window.innerHeight <= 1) {
        //get the elemnt with id "download_icon"
        document.getElementById("download_icon").classList.add("fa-3x")
        document.getElementById("top").style.marginTop = "5vh";
    } else {
        document.getElementById("download_icon").classList.remove("fa-3x")
        document.getElementById("top").style.marginTop = "10vh";
        document.getElementById("apropos")._getChildren()[0].style.alignItems = "center";
    }
}

// Vérification lors du chargement de la page
window.addEventListener('load', checkScreenSize);

// Vérification lors du redimensionnement de la fenêtre
window.addEventListener('resize', checkScreenSize);