<<<<<<< HEAD
// const cookie = document.getElementById("popup_cookie");
// const iconeCookie = cookie.getElementsByTagName("i");
// const closeCookie = iconeCookie[0];

// const newsletter = document.getElementById("popup_newsletter");
// const iconeNewsletter = newsletter.getElementsByTagName("i");
// const closeNewsletter = iconeNewsletter[0];

// const carousel = document.getElementById("carousel");
// const recupMainImage1 = carousel.getElementsByClassName("active")
// const recupMainImage2 = recupMainImage1[0].getElementsByTagName("img");
// const mainImage = recupMainImage2[0];
// const images = carousel.getElementsByTagName("img");
// const taille = images.length;
// const arrow = carousel.getElementsByTagName("a");
// var imageId = 1;
// stop = false;

// window.onload = function(){
//     mainImage.src = images[imageId].getAttribute("src");
//     setTimeout(function(){
//         newsletter.style.display = "block";
//         newsletter.style.zIndex = "100";
//     }, 60000);
//     intervalle();
// }

// function intervalle(){
//     var stopIntervalle = setInterval(function(){
//         if(stop==true){
//             clearInterval(stopIntervalle);
//             stop = false;
//             intervalle();
//         }
//         else{
//             imageId++;
//             affichage();
//         }
//     },5000);
// }

// function affichage(){
//     stop = true;
//     if(imageId<=0){
//         imageId = taille-1;
//     }
//     else if(imageId>=taille){
//         imageId = 1;
//     }
//     mainImage.src = images[imageId].getAttribute("src");
// }

// closeCookie.onclick = function(){
//     cookie.style.height = "0";
// }

// closeNewsletter.onclick = function(){
//     newsletter.style.display = "none";
// }

// arrow[0].onclick = function(){
//     imageId--;
//     stop = true;
//     affichage();
// }

// arrow[1].onclick = function(){
//     imageId++;
//     stop = true;
//     affichage();
// }

// /*********************DIV CACHE/VISIBLE Page Clic FOOTER************************/
// var p1=document.getElementById('p1');
// var p2=document.getElementById('p2');
// var p3=document.getElementById('p3');
// var p4=document.getElementById('p4');
// var afficher_cacher=document.getElementById('afficher_cacher')
 


// Pour mentions légales
// window.onload = function(){
//   je récupère le bouton afficher Cacher
//   j'écouter le bouton 
// si  je crée une fonction dans laquelle {
//   je récupère les p 
//   je récupère ma div page
//   ma div page prend la taille de 1000 px 
//   j'affiche mes p  ;}
//   else 
//   {
//       je cache mes p 
//       ma div prend la taille de 300px 

//   }



//   récupère bouton1 . onclick
//     si p1 est masqué
//         on affiche p1
//     sinon 
//         on masque p1
// }

window.onload = function() {
    var afficher_cacher1=document.getElementById('afficher_cacher1');

    afficher_cacher1.onclick = function() {
        var p1=document.getElementById('p1');

        if(p1.style.display=='none')
        {
            p1.style.display = 'inline-block';
        }
        else 
        {
            p1.style.display = 'none';
        }
    }

    var afficher_cacher2=document.getElementById('afficher_cacher2');

    afficher_cacher2.onclick = function() {
        var p2=document.getElementById('p2');

        if(p2.style.display=='none')
        {
            p2.style.display = 'inline-block';
=======
const cookie = document.getElementById("popup_cookie");
const iconeCookie = cookie.getElementsByTagName("i");
const closeCookie = iconeCookie[0];

const newsletter = document.getElementById("popup_newsletter");
const iconeNewsletter = newsletter.getElementsByTagName("i");
const closeNewsletter = iconeNewsletter[0];

const carousel = document.getElementById("carousel");
const recupMainImage1 = carousel.getElementsByClassName("active")
const recupMainImage2 = recupMainImage1[0].getElementsByTagName("img");
const a = recupMainImage1[0].getElementsByTagName("a");
const mainImage = recupMainImage2[0];
const images = carousel.getElementsByTagName("img");
const taille = images.length;
const arrow = carousel.getElementsByTagName("a");
var imageId = 1;
stop = false;

window.onload = function(){
    mainImage.src = images[imageId].getAttribute("src");
    a[0].href = images[imageId].getAttribute("alt");
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
>>>>>>> c0f9c818ae4374d9b873c728d9ae2250fe374631
        }
        else 
        {
            p2.style.display = 'none';
        }
    }
    var afficher_cacher3=document.getElementById('afficher_cacher3');

    afficher_cacher3.onclick = function() {
        var p3=document.getElementById('p3');

        if(p3.style.display=='none')
        {
            p3.style.display = 'inline-block';
        }
        else 
        {
            p3.style.display = 'none';
        }
    }
    var afficher_cacher4=document.getElementById('afficher_cacher4');

    afficher_cacher4.onclick = function() {
        var p4=document.getElementById('p4');

        if(p4.style.display=='none')
        {
            p4.style.display = 'inline-block';
        }
        else 
        {
            p4.style.display = 'none';
        }
    }
<<<<<<< HEAD
=======
    mainImage.src = images[imageId].getAttribute("src");
    a[0].href = images[imageId].getAttribute("alt");
    }

closeCookie.onclick = function(){
    cookie.style.height = "0";
}

closeNewsletter.onclick = function(){
    newsletter.style.display = "none";
}

arrow[1].onclick = function(){
    imageId--;
    stop = true;
    affichage();
}

arrow[2].onclick = function(){
    imageId++;
    stop = true;
    affichage();
>>>>>>> c0f9c818ae4374d9b873c728d9ae2250fe374631
}