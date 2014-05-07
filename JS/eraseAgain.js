/* Faire disparaitre DIV de confirmation d'envoi de message */
var noMoreAgain = setInterval(function() {efface();}, 30);

var efface = function() {
    var message = window.document.getElementById('messageNonValide');
    if (0 < message.style.opacity) {
        message.style.opacity = parseFloat(message.style.opacity) - 0.005;
    }else{
        clearInterval(noMoreAgain);
    };
};

/* FIN */