<?phprequire_once("inc/init_inc.php");?><title>Michaël GOMES - Fiche site Helen keller</title><meta name="description" content="Développeur web PHP, JavaScript, Intégrateur HTML5, XHTML, CSS3, Architecture client serveur SQL, mySQL, XML"><?phpinclude('inc/head_inc.php');?><div id="blank">    <div id="blankleft">        <div id="titrepage">            <p>Portfolio - Dan Marino</p>        </div>    </div>    <div id="blankright">        <div id="blanknav">            <p><a href="index.php">ACCUEIL</a> / <a href="portfolio.php">PORTFOLIO</a></p>        </div>        <div class="clear"></div>    </div><!-- fin #blankright --></div><!-- fin #blank --><?phpecho $msg;?><!-- start div id="content" --><div id="content">    <div id="selection">        <div id="fiche">            <div id='fichecontainer'>                <div id="photo">                    <img src='images/dm1.jpg' title='Lokisalle' width='528px' height='348px'/>                </div>                <div id="description">                    <div id='projet'>                        <div id='titreprojet'><p>Description du projet</p></div>                        <div id='contenuprojet'>                            <p><span>Site en XHTML</span></p><p>Projet réalisé dans le cadre d'une formation de développeur web. L'objectif était de réaliser un site en XHTML.</p>                        </div>                    </div>                    <div id='outils'>                        <div id='titreoutils'>                            <p>Comment a t'il été réalisé ?</p>                        </div>                        <div id='contenuoutils'>                            <ul>                                <li>XHTML</li>                                <li>CSS</li>                            </ul>                        </div>                    </div>                    <div id='accessite'>                        <a href="javascript:void(window.open('http://www.danmarino.diw.fr/'))">ACCÈS SITE</a>                    </div>                </div><div class='clear'></div>                <div id='recent'>                    <div id='recentwork'><p>SITES RÉCENTS</p></div>                    <div id='carrousel'>                        <ul>                            <li><a href='fiche-article-hde.php'><div id='bleu'><img src='images/hdl1.jpg' alt='image' width='198px' height='118px'/></div></a></li>                            <li><a href='fiche-article-hk.php'><div id='jaune'><img src='images/hk1.jpg' alt='image' width='198px' height='118px'/></div></a></li>                            <li><a href='fiche-article-lokisalle.php'><div id='rouge'><img src='images/loki.jpg' alt='image' width='198px' height='118px'/></div></a></li>                            <li><a href='fiche-article-rae.php'><div id='vert'><img src='images/logoBlog.jpg' alt='image' width='198px' height='118px'/></div></a></li>                            <!--<li><div id='turquoise'>5</div></li>                            <li><div id='orange'>6</div></li>                            <li><div id='gris'>7</div></li>-->                        </ul>                    </div>                </div>            </div>		        </div>    </div></div><!-- stop div id="content" --><!-- start footer --><?phpinclude("inc/footer_inc.php");?><!-- stop footer --></body></html>