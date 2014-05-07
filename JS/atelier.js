/* ATELIER */
// Start Progress bar
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
        }, 1);
    };

    var tableauDonnees = new Array();
    tableauDonnees = [
        ["progressbar1", 150, "text1"],
        ["progressbar2", 250, "text2"],
        ["progressbar3", 300, "text3"]
    ];
    for (var i = 0; i < tableauDonnees.length; i++) {
        execute(tableauDonnees[i][0], tableauDonnees[i][1], tableauDonnees[i][2]);
    };

}; /* END OF window.onload */

// Stop Progress bar
