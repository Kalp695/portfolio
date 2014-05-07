window.onload = function() {

    var execute = function(div, PX, text) {
        var rempli = function() {
            var laDiv = window.document.getElementById(div);
            if (PX > parseInt(laDiv.offsetWidth, 10)) {
                laDiv.style.width = parseFloat(laDiv.offsetWidth) + 1 + 'px';
            }
            else {
                window.document.getElementById(text).style.display = 'inline';
                clearInterval(timing);
            }
        };
        var timing = setInterval(function() {
            rempli();
        }, 5);
    };

    var tableauDonnees = new Array();
    tableauDonnees = [
        ["skillbarhtml", 220, "textHTML"],
        ["skillbarcss", 220, "textCSS"],
        ["skillbarrd", 220, "textRD"],
        ["skillbarjs", 220, "textJS"],
        ["skillbarphp", 220, "textPHP"],
        ["skillbarsql", 220, "textSQL"],
        ["skillbarsgbd", 220, "textSGBD"],
        ["skillbarxml", 220, "textXML"],
        //["skillbarjQ", 220, "textJQ"],
        ["skillbarref", 220, "textREF"],
        ["skillbarcms", 220, "textCMS"],
        ["skillbargit", 220, "textGIT"],
        ["skillbarphotoshop", 220, "textPHOT"]
    ];
    for (var i = 0; i < tableauDonnees.length; i++) {
        execute(tableauDonnees[i][0], tableauDonnees[i][1], tableauDonnees[i][2]);
    };

}; /* END OF window.onload */
