const cookie = document.getElementById("popup_cookie");
const icone = cookie.getElementsByTagName("i");
const closeCookie = icone[0];
const closeNewsletter = icone[1];
const newsletter = document.getElementById("popup_newsletter");


window.onload = function(){
    newsletter.style.height = "0";
    setTimeout(function(){
        newsletter.style.height = "100px";
    }, 3000);
}

closeCookie.onclick = function(){
    cookie.style.height = "0";
}

closeNewsletter.onclick = function(){
    cookie.style.height = "0";
}