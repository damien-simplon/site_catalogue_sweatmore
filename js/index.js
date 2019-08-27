const cookie = document.getElementById("banniere_cookie");
const texte = cookie.getElementsByTagName("p");
const p = texte[0];
const icone = cookie.getElementsByTagName("i");
const close = icone[0];

window.onload = function(){
    cookie.style.height = "50px";
    cookie.style.position = "fixed";
    cookie.style.width = "100%";
    cookie.style.backgroundColor = "rgba(108, 122, 137, 0.8)";
    cookie.style.bottom = "0";

    close.style.position = "absolute";
    close.style.top = "10px";
    close.style.right = "20px";
    close.style.fontSize = "2.em";
    
    p.align = "center";
    p.innerHTML = "En navigant sur ce site, vous acceptez l’utilisation des cookies.";
}

close.onclick = function(){
    cookie.style.height = "0";
}