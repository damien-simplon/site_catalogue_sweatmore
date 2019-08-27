const cookie = document.getElementById("popup_cookie");
const iconeCookie = cookie.getElementsByTagName("i");
const closeCookie = iconeCookie[0];

const newsletter = document.getElementById("popup_newsletter");
const iconeNewsletter = newsletter.getElementsByTagName("i");
const closeNewsletter = iconeNewsletter[0];


window.onload = function(){
    setTimeout(function(){
        newsletter.style.display = "block";
    }, 1000);
}

closeCookie.onclick = function(){
    cookie.style.height = "0";
}

closeNewsletter.onclick = function(){
    newsletter.style.display = "none";
}