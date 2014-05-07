<?phprequire_once("inc/init_inc.php");?><title>Michaël GOMES - dévelopement et intégration web</title><meta name="description" content="Développeur web PHP, HTML5, XHTML, CSS3, Drupal, JavaScript, SQL, mySQL, XML et référencement"><meta charset=utf-8/><meta name="google-site-verification" content="W3ROQKO_lIVBXSTGChUnk0L2tBeuC8ovSXOYSoNnSVU" /><meta name="viewport" content="initial-scale=1.0, user-scalable=no"/><link rel="shortcut icon" href="images/favicon.png"/><link type="text/css" href="styles/style_entete.css" rel="stylesheet" media="all"/><link type="text/css" href="styles/style.css" rel="stylesheet" media="all"/><link type="text/css" href="styles/style_footer.css" rel="stylesheet" media="all"/><script src="JS/slideDiw.js"></script><script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script><script src="JS/cover.js"></script><script src="JS/footerConnect.js"></script><script src="JS/burger.js"></script></head><body>    <?php    include_once("analyticstracking.php");    if (isset($_POST['envoyer_mail']) && !empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['message']) && empty($_POST['comment'])) {        echo "<script src='JS/erase.js'></script>";        $msg .= "<div id='messagevalide' style='opacity:1;' onload='noMore()'><p>Votre message<br/> a bien été envoyé</p></div>";    } else {        if (isset($_POST['envoyer_mail']) && (empty($_POST['nom']) || empty($_POST['email']) || empty($_POST['message']))) {            echo "<script src='JS/eraseAgain.js'></script>";            $msg .= "<div id='messageNonValide' style='opacity:1;' onload='noMoreAgain()'><p>Tous les champs doivent être remplis pour envoyer votre message.</p></div>";        }    }    if(isset($_POST['connexion']) && !empty($_POST['pseudo']) && !empty($_POST['password'])){        $resultat=execute_requete("SELECT * FROM connexion");        $membre=$resultat->fetch_assoc();        foreach ($membre as $indice => $valeur) {            if($membre['pseudo'] === $_POST['pseudo'] && $membre['password'] === $_POST['password']){                $_SESSION['utilisateur'][$indice] = $valeur;                header('location:secretPage.php');            }        }    }    if (isset($_GET['action']) && $_GET['action'] == "deconnexion") {    session_destroy();    }    ?>    <!-- start header -->    <header id="index">        <div id="bgSoftIndex"></div>        <div id="enteteindex">            <div id="fondblanc">                <img id="phone" src="images/phone-icon.png" alt="téléphone"/>                <p>06.64.84.90.28</p>                <a href="http://www.viadeo.com/fr/profile/micha%C3%ABl.gomes7" target="_blank" title="Viadeo"><div id="viadeo"></div></a>            </div><!-- end #fondblanc -->            <div id="logo">            </div>            <!-- start burger menu -->            <div id="burger" class="desactive" onclick="activeBurger('burger-menu','burger','ulMenu')">                <div id='burger-menu' onclick="activeBurger('burger-menu')">                    <ul id="ulMenu">                        <li><a href="index.php">accueil</a></li>                        <li><a href="apropos.php">à propos</a></li>                        <li><a href="portfolio.php">portfolio</a></li>                        <li><a href="latelier.php">l'atelier</a></li>                        <li><a href="ensavoir.php">en savoir +</a></li>                        <li><a href="blog.php?page=1&categorie=all" class="lienMenu">blog</a></li>                        <li><a href="contact.php">contact</a></li>                    </ul>                </div>            </div><!-- end #burger -->            <!-- start menu -->            <div id="navlist">                 <ul>                    <li><a href="index.php" class="ici">accueil</a></li>                    <li><a href="apropos.php" class="">à propos</a></li>                    <li><a href="portfolio.php" class="">portfolio</a></li>                    <li><a href="latelier.php" class="">l'atelier</a></li>                    <li><a href="ensavoir.php" class="">en savoir +</a></li>                    <li><a href="blog.php?page=1&categorie=all" class="">blog</a></li>                    <li><a href="contact.php" class="">contact</a></li>                </ul>            </div><!-- end #navlist -->        </div><!-- end #entete -->        <!-- start slideshow -->        <div id="script">		             <!-- Start Script -->            <SCRIPT LANGUAGE="JavaScript">                StartAnim()            </SCRIPT>              <!-- STOP SCRIPT  -->        </div>	        <!-- stop slideshow -->    </header>    <?php echo $msg; ?>    <div id='contenu'>        <div id='content'>            <div id="HomepageContent">                <div id="importantPages">                    <div id="idea">                        <div id="contentIdea">                            <img src='images/doigt.png' alt='doigt' class='illustre'/>                            <p>Vous cherchez un développeur front-end?</p>                            <a href='apropos.php'>Je cherche un emploi</a>                        </div>                        </div><!-- end #contentIdea -->                    <div id="parcours">                        <div id="contentParcours">                            <img src='images/ordi.png' alt='ordi' class='illustre'/>                            <p>Toutes mes réalisations, et les projets en cours...</p>                            <a href='portfolio.php'>En savoir +</a>                        </div>                    </div><!-- end #parcours -->                    <div id="knowledge">                        <div id="contentKnowledge">                            <img src='images/ampoule.png' alt='ampoule' class='illustre'/>                            <p>Expérimenter, découvrir, apprendre...</p>                            <a href='latelier.php'>L'atelier</a>                        </div>                    </div><!-- end #knowledge -->                </div><!-- end #importantPages -->                <div id="recentWork">                    <div id="titleRecentWork">                        <p>Sites récents</p>                    </div>                    <div id="contentRecentWork">                        <a href="portfolio.php?site=lokisalle" title="site e-commerce PHP">                            <div class="site" onmouseenter="couverture('cover')" onmouseleave="decouvre('cover')">                                <img src="images/loki.jpg" alt="image"/>                                <div id="cover"><p>Lokisalle: site e-commerce et son back-office de gestion</p></div>                            </div>                        </a>                        <a href="portfolio.php?site=hotelDelEst" title="site vitrine HTML 5">                            <div class="site" onmouseenter="couverture('coverAgain')" onmouseleave="decouvre('coverAgain')">                                <img src="images/hdl1.jpg" alt="image"/>                                <div id="coverAgain"><p>L'hôtel de l'Est: site vitrine statique</p></div>                            </div>                        </a>                        <a href="portfolio.php?site=danMarino" title="site vitrine XHTML">                            <div class="site" onmouseenter="couverture('coverEncore')" onmouseleave="decouvre('coverEncore')">                                <img src="images/dm1.jpg" alt="image"/>                                <div id="coverEncore"><p>Dan Marino: L'un des meilleurs Quaterback de l'histoire de la NFL</p></div>                            </div>                        </a>                        <a href="portfolio.php?site=rae" title="site vitrine">                            <div class="site" onmouseenter="couverture('coverAussi')" onmouseleave="decouvre('coverAussi')">                                <img src="images/rae.jpg" alt="image"/>                                <div id="coverAussi"><p>Projet en cours: Association R.A.E.</p></div>                            </div>                        </a>                    </div><!-- end #contentRecentWork -->                    </div><!-- end #recentWork -->                <div id="recentPost">                    <div id="titleRecentPost">                        <p>En ce moment sur le Web</p>                    </div>                    <?php                    $resultat = execute_requete("SELECT *, "                            . "DATE_FORMAT(date_parution, '%d/%m/%Y') AS 'dp' "                            . "FROM WebNews "                            . "ORDER BY date_parution "                            . "DESC "                            . "LIMIT 0,3");                    while ($articles = $resultat->fetch_assoc()) {                        ?>                        <div class="contenuPostRecent">                            <div class='imagePostRecent'>                                <?php                                if (!empty($articles['image'])) {                                    echo "<img src='images/" . $articles['image'] . "' alt='image'/>";                                } else {                                    echo "<div class='imagedelArticleHP'></div>";                                }                                ?>                            </div><!-- end #imagePostRecent -->                            <div class="infoPostRecent">                                <?php                                echo "<p class='titreArticleBlog'>" . ucfirst($articles['titre']) . "</p>";                                echo "<p class='auteurArticleBlog'>Article écrit par " . $articles['auteur'] . " publié le " . $articles['dp'] . "</p>";                                ?>                                <div class='lienArticleIndex'>                                    <?php                                    echo"<a href='" . $articles['lien'] . "' target='_blank'><p>Lire cet article</p></a>";                                    ?>                                </div><!-- end .lienArticleIndex -->                            </div><!-- end .infoPostRecent -->                            <div class="clear"></div>                        </div><!-- end .contenuPostRecent -->                        <?php                    }                    ?>                </div><!-- end #recentPost -->                <div id="articleAtelierIndex">                    <div id="titleRecentAtelierIndex">                        <p>Du coté de l'Atelier !</p>                    </div>                    <div class="contenuAtelierIndex">                        <div class="infoAtelierIndex">                            <p class='titreAtelierIndex'>Créer une session - PHP</p>                            <p class='auteurAtelierIndex'>Publié le 15/04/2014</p>                            <div class='lienArticleIndex'>                                <a href='latelier.php?article=session'><p>Lire cet article</p></a>                            </div>                        </div><!-- end .infoAtelierIndex -->                       </div><!-- end .contenuAtelierIndex -->                    <div class="contenuAtelierIndex">                        <div class="infoAtelierIndex">                            <p class='titreAtelierIndex'>La progress bar - JavaScript</p>                            <p class='auteurAtelierIndex'>Publié le 14/03/2014</p>                            <div class='lienArticleIndex'>                                <a href='latelier.php?article=progressBar'><p>Lire cet article</p></a>                            </div>                        </div><!-- end .infoAtelierIndex -->                        </div><!-- end .contenuAtelierIndex -->                    <div class="contenuAtelierIndex">                        <div class="infoAtelierIndex"><!--                            <p class='titreAtelierIndex'>Que faire avec onmousseenter? (entre autre)</p>                            <p class='auteurAtelierIndex'>Publié le ../../2014</p>-->                            <div class='lienArticleIndex'><!--                                <a href='latelier.php?article=cover'><p>Lire cet article</p></a>-->                            </div>                        </div><!-- end .infoAtelierIndex -->                    </div><!-- end .contenuAtelierIndex -->                </div><!-- end #articleAtelierIndex -->                <div class="clear"></div>            </div><!-- end #HomepageContent -->        </div><!-- end #content -->    </div><!-- end #content -->    <!-- start footer -->    <?php    include("inc/footer_inc.php");    ?>    <!-- end footer --></body></html>