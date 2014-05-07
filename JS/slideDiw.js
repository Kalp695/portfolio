/* Start Slideshow */
var imgPath = new Array();
var SiClickGoTo = new Array();
var aa = 0;

if (document.images)
{
//    var i0 = new Image;
//    i0.src = 'images/salle4.jpg';
    SiClickGoTo[0] = "apropos.php";
    imgPath[0] = 'images/slide-2.jpg';

//    var i1 = new Image;
//    i1.src = 'images/salle2.jpg';
    SiClickGoTo[1] = "portfolio.php";
    imgPath[1] = 'images/slide-1.jpg';

//    var i2 = new Image;
//    i2.src = 'images/salle3.jpg';
//    SiClickGoTo[2] = "#";
//    imgPath[2] = 'images/slide-3.jpg';
}

function ejs_img_fx(img)
{
    if (img && img.filters && img.filters[0])
    {
        img.filters[0].apply();
        img.filters[0].play();
    }
}
function StartAnim()
{
    if (document.images)
    {
        document.write('<a href="#" onClick="ImgDest();return(false)"><img src="images/slide-2.jpg" border=0 alt=slide name=defil style="filter:progid:DXImageTransform.Microsoft.Pixelate(MaxSquare=100,Duration=1)"></a>');
        defilimg();
    }
    else
    {
        document.write('<a href="index.php"><img src="image/slide-1.jpg" border=0></a>');
    }
}
function ImgDest()
{
    document.location.href = SiClickGoTo[aa - 1];
}
function defilimg()
{
    if (aa === 2)
    {
        aa = 0;
    }

    if (document.images)
    {
        ejs_img_fx(document.defil);
        document.defil.src = imgPath[aa];
        setTimeout("defilimg()", 4500);

        aa++;
    }
}

/* Stop Slideshow */
/* Start Position Scroll */
window.onscroll = function(){
    if(document.documentElement.scrollTop > 200 || window.pageYOffset > 200 || self.pageYOffset > 200 || document.body.scrollTop > 200){
        window.document.getElementById('Up').style.opacity = 1;
    }else{
        window.document.getElementById('Up').style.opacity = 0;
    }
};
/* Start remontée */

function remonte()
{
    var scrollTop = document.body.scrollTop || document.documentElement.scrollTop;
    if(scrollTop > 0)
    {
        scrollBy(0, -5);
        setTimeout(remonte, 1);
    }
    return true;
}

/* Stop remontée */

