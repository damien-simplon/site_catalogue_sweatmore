const images = document.getElementsByTagName("img");
const taille = images.length;
const imageMain = document.getElementById("produit_image_main");
var imageFocus = 1; //on commence à 1 pour exclure l'image de la bannière

function affichage(){
    imageMain.style.backgroundImage = "url('"+images[imageFocus].getAttribute("src")+"')";
    imageMain.style.backgroundSize = "cover";
}

window.onload = function(){
    affichage();
}

for(let i=1;i<taille;i++){
    images[i].onclick = function(){
        imageFocus = i;
        affichage();
    }
}
