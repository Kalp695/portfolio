/* ----- Burger ----- */

var activeBurger = function(x, y, z) {
    var menu = window.document.getElementById(  x);
    var leBurger = window.document.getElementById(y);
    var aMenu = window.document.getElementById(z);
    if (leBurger.className === "desactive") {
        leBurger.className = 'active';
        menu.style.opacity = 1;
        aMenu.style.fontSize = 12 + "px";
        menu.style.width = 140 + "px";
        menu.style.height = 170 + "px";
        menu.style.borderRadius = 0 +"px";
    } else {
        if (leBurger.className === "active") {
            leBurger.className = 'desactive';
            menu.style.opacity = 0;
            aMenu.style.fontSize = 0;
            menu.style.width = 50 + "px";
            menu.style.height = 36 + "px";
            menu.style.borderRadius = 20 +"px";
        }
    }
};