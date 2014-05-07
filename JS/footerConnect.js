/* ----- Connexion footer ----- */

var dejaConnect = function(){
    window.open('connexion.php');
};

var connectDiv = function(b, x) {
    var laBande = window.document.getElementById(b);
    var classBande = laBande.className;
    var divBackAccess = window.document.getElementById(x);
    if (classBande === "open") {
        laBande.style.background = "#B6D82F url(../images/bandeBack.jpg) left top no-repeat";
        laBande.className = "close";
        divBackAccess.style.top = 112 + "px";
        divBackAccess.style.opacity = 1;
    } else {
        if (classBande === "close") {
            laBande.style.background = "#B6D82F url(../images/bande.jpg) left top no-repeat";
            laBande.className = "open";
            divBackAccess.style.top = 370 +"px";
            divBackAccess.style.opacity = 0;
        };
    };
};