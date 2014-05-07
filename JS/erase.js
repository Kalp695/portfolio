/* Faire disparaitre DIV de confirmation d'envoi de message */
var noMore = setInterval(function() {efface();}, 30);

var efface = function() {
    var message = window.document.getElementById('messagevalide');
    if (0 < message.style.opacity) {
        message.style.opacity = parseFloat(message.style.opacity) - 0.005;
    }else{
        clearInterval(noMore);
    };
};

/* FIN */
