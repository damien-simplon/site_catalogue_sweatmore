const nav = document.getElementsByTagName("nav");
const recupBouton = nav[0].getElementsByTagName("button");
const bouton = recupBouton[0];

const menu = document.getElementById("navbarSupportedContent");

var derouler = false;

bouton.onclick = function(){
    if(derouler == false){
        menu.classList.add("show");
        derouler = true;
    }
    else{
        menu.classList.remove("show");
        derouler = false;
    }
}