const cookie = document.getElementById("popup_cookie");
const iconeCookie = cookie.getElementsByTagName("i");
const closeCookie = iconeCookie[0];

const newsletter = document.getElementById("popup_newsletter");
const iconeNewsletter = newsletter.getElementsByTagName("i");
const closeNewsletter = iconeNewsletter[0];

const carousel = document.getElementById("carousel");
const recupMainImage1 = carousel.getElementsByClassName("active")
const recupMainImage2 = recupMainImage1[0].getElementsByTagName("img");
const mainImage = recupMainImage2[0];
const images = carousel.getElementsByTagName("img");
const taille = images.length;
const arrow = carousel.getElementsByTagName("a");
var imageId = 1;
stop = false;

window.onload = function(){
    mainImage.src = images[imageId].getAttribute("src");
    setTimeout(function(){
        newsletter.style.display = "block";
        newsletter.style.zIndex = "100";
    }, 60000);
    intervalle();
}

function intervalle(){
    var stopIntervalle = setInterval(function(){
        if(stop==true){
            clearInterval(stopIntervalle);
            stop = false;
            intervalle();
        }
        else{
            imageId++;
            affichage();
        }
    },5000);
}

function affichage(){
    stop = true;
    if(imageId<=0){
        imageId = taille-1;
    }
    else if(imageId>=taille){
        imageId = 1;
    }
    mainImage.src = images[imageId].getAttribute("src");
}

closeCookie.onclick = function(){
    cookie.style.height = "0";
}

closeNewsletter.onclick = function(){
    newsletter.style.display = "none";
}

arrow[0].onclick = function(){
    imageId--;
    stop = true;
    affichage();
}

arrow[1].onclick = function(){
    imageId++;
    stop = true;
    affichage();
}