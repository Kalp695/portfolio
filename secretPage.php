<?phprequire_once("inc/init_inc.php");if (!utilisateur_connu()) {    header("location: connexion.php?statut=erreur");}if(isset($_POST) && !empty($_POST)){    if(isset($_POST['envoyerArticle']) && !empty($_POST['titre']) && !empty($_POST['extrait']) && !empty($_POST['auteur'])){        execute_requete("INSERT INTO WebNews (`id_article`, `titre`, `article`, `auteur`, `lien`, `date_parution`, `date_mise_en_ligne`, `image`, `categorie`) "                . " VALUES (NULL, '".$_POST['titre']."', '".$_POST['extrait']."', '".$_POST['auteur']."', '".$_POST['lien']."', '".$_POST['dateParution']."', NOW(), '".$_POST['image']."', '".$_POST['categorie']."')");        $msg .= "<div id='messagevalide'><p>Article enregistré</p></div>";    }    if(isset($_POST['validerPortfolio']) && !empty($_POST['nomSite']) && !empty($_POST['image']) && !empty($_POST['lien'])){        execute_requete("INSERT INTO realisations (`id_realisation`, `image`, `nomSite`, `lien`, `etat`) "                . " VALUES (NULL, '".$_POST['image']."', '".$_POST['nomSite']."', '".$_POST['lien']."', '".$_POST['etat']."')");        $msg .= "<div id='messagevalide'><p>Page Portfolio mise à jour</p></div>";    }    if(isset($_POST['validerPageArticle']) && !empty($_POST['id_realisation']) && !empty($_POST['image']) && !empty($_POST['descTitre']) && !empty($_POST['lien'])){        execute_requete("INSERT INTO article (`id_article`,`id_realisation`, `image`, `descTitre`, `description`, `techno1`, `techno2`, `techno3`, `techno4`, `techno5`, `techno6`, `get`, `bonus`, `lienSite`) "                . " VALUES (NULL, '".$_POST['id_realisation']."', '".$_POST['image']."', '".$_POST['descTitre']."', '".$_POST['description']."', '".$_POST['techno1']."', '".$_POST['techno2']."', '".$_POST['techno3']."', '".$_POST['techno4']."', '".$_POST['techno5']."', '".$_POST['techno6']."', '".$_POST['get']."', '".$_POST['bonus']."', '".$_POST['lien']."')");        $msg .= "<div id='messagevalide'><p>La nouvelle page article a été créée</p></div>";    }    if(empty($msg)){        $msg .= "<div id='messageNonValide'><p>Erreur</p></div>";    }}debug($_POST);?><title>Michaël GOMES - Le blog</title><meta name="description" content="Développeur web PHP, JavaScript, Intégrateur HTML5, XHTML, CSS3, Architecture client serveur SQL, mySQL, XML"><?phpinclude('inc/head_inc.php');?><div id="blank">    <div id="blankleft">        <div id="titrepage">            <p></p>        </div>    </div>    <div id="blankright">        <div id="blanknav">            <a href="index.php?action=deconnexion">Deconnexion</a>        </div>        <div class="clear"></div>    </div><!-- fin #blankright --></div><!-- fin #blank --><?phpecho $msg;?><!-- start div id="content" --><div id="content">    <div id="manageNav">        <ul>            <li><a href="secretPage.php?page=blog">Gestion du blog</a></li>            <li><a href="secretPage.php?page=portfolio">Gestion de la page Portfolio</a></li>            <li><a href="secretPage.php?page=articlePortfolio">Gestion des pages Portfolio/articles</a></li>            <li class="vDeux"><a href="http://diw.fr/Vtwo/">Diw.fr V2</a></li>        </ul>    </div>    <section id="blogPartieGauche">        <div id="liensUtiles2">            <div class='titreBlogDroite'>                <p>bloc-notes</p>            </div>            <div class='contenuBlogDroite'>                <p>CSS/Design</p>                <ul>                    <li><a href="javascript:void(window.open('http://www.creativejuiz.fr/blog/tutoriels/personnaliser-aspect-boutons-radio-checkbox-css'))">Personnaliser bouton Checkbox</a></li>                    <li><a href="javascript:void(window.open('http://cssdeck.com/labs/pure-css3-star-wars-lightsaber-checkboxes'))">Light Saber Checkbox</a></li>                    <li><a href="javascript:void(window.open('http://cssmoz.com/galerie-beaux-sites_97.html'))">CSS Mozaic</a></li>                    <li><a href="javascript:void(window.open('http://css3.bradshawenterprises.com/transitions/'))">Transitions Ease in Out</a></li>                    <li><a href="javascript:void(window.open('http://www.blogduwebdesign.com/inspiration/15-projets-autour-des-identites-graphiques-et-du-branding/996'))">Inspiration : 15 projets autour des identités graphiques et du branding</a></li>                    <li><a href="javascript:void(window.open('http://www.blogduwebdesign.com/en/wordpress-template/create-a-personal-blog-with-a-minimalist-and-elegant-design/1208'))">Create a personal blog with a minimalist and elegant design</a></li>                    <li><a href="javascript:void(window.open('http://www.css3create.com/Navigation-a-onglets-fluides-avec-les-transitions-CSS'))">Navigation à onglets fluides avec les transitions CSS</a></li>                    <li><a href="javascript:void(window.open('http://www.css3create.com/Effet-de-brillance-en-CSS-et-SVG'))">Effet de brillance en CSS et SVG</a></li>                    <li><a href="javascript:void(window.open(''))"></a></li>                </ul>                <p>PHP</p>                <ul>                    <li><a href="javascript:void(window.open('http:http://fr.openclassrooms.com/informatique/cours/concevez-votre-site-web-avec-php-et-mysql/variables-superglobales-sessions-et-cookies#ss_part_1'))">Variable, superGlobal, Session et Cookies Part 1</a></li>                    <li><a href="javascript:void(window.open('http:http://fr.openclassrooms.com/informatique/cours/concevez-votre-site-web-avec-php-et-mysql/variables-superglobales-sessions-et-cookies#ss_part_2'))">Variable, superGlobal, Session et Cookies Part 2</a></li>                    <li><a href="javascript:void(window.open('http:http://fr.openclassrooms.com/informatique/cours/concevez-votre-site-web-avec-php-et-mysql/variables-superglobales-sessions-et-cookies#ss_part_3'))">Variable, superGlobal, Session et Cookies Part 3</a></li>                    <li><a href="javascript:void(window.open('http://www.phpdoc.org/'))">PHP DOC</a></li>                    <li><a href="javascript:void(window.open(''))"></a></li>                </ul>                <p>Javascript</p>                <ul>                    <li><a href="javascript:void(window.open('http://www.analyste-programmeur.com/javascript/les-tableaux/le-tableau-associatif'))">Tableaux Associatif JS</a></li>                    <li><a href="javascript:void(window.open('http://fr.openclassrooms.com/informatique/cours/dynamisez-vos-sites-web-avec-javascript/introduction-au-javascript'))">Tuto JS</a></li>                    <li><a href="javascript:void(window.open('http://www.commentcamarche.net/contents/573-javascript-les-evenements'))">Les évènements JavaScript</a></li>                    <li><a href="javascript:void(window.open(''))"></a></li>                </ul>                <p>JQuery</p>                <ul>                    <li><a href="javascript:void(window.open('http://jquery.malsup.com/cycle/'))">Jquery Diaporama</a></li>                    <li><a href="javascript:void(window.open(''))"></a></li>                </ul>                <p>Outils aide développement</p>                <ul>                    <li class="sansDisc">Symfony</li>                    <ul>                        <li><a href="javascript:void(window.open('http://www.lafermeduweb.net/tutorial/symfony-creer-un-site-web-avec-le-framework-php-symfony-14.html'))">Créer site Symfony</a></li>                        <li><a href="javascript:void(window.open('http://fr.openclassrooms.com/informatique/cours/developpez-votre-site-web-avec-le-framework-symfony2'))">Tuto Symfony 2</a></li>                        <li><a href="javascript:void(window.open(''))"></a></li>                    </ul>                    <li class="sansDisc">Twig</li>                    <ul>                        <li><a href="javascript:void(window.open('http://twig.sensiolabs.org/'))">Twig</a></li>                        <li><a href="javascript:void(window.open(''))"></a></li>                    </ul>                    <li class="sansDisc">Bootstrap</li>                    <ul>                        <li><a href="javascript:void(window.open('http://getbootstrap.com/getting-started/#examples'))">BOOTSTRAP</a></li>                        <li><a href="javascript:void(window.open('http://www.oneskyapp.com/docs/bootstrap/fr/getting-started'))">Aide Bootstrap</a></li>                        <li><a href="javascript:void(window.open('http://bootswatch.com/'))">bootswatch</a></li>                        <li><a href="javascript:void(window.open('http://getbootstrap.com/components/'))">Components Bootstrap</a></li>                        <li><a href="javascript:void(window.open('http://fortawesome.github.io/Font-Awesome/whats-new/'))">Bootstrap icons</a></li>                        <li><a href="javascript:void(window.open(''))"></a></li>                    </ul>                    <li class="sansDisc">WordPress</li>                    <ul>                        <li><a href="javascript:void(window.open('http://www.tomsguide.fr/article/blog-wordpress-tuto,2-88-2.html'))">Tom's guide - Tuto WordPress</a></li>                        <li><a href="javascript:void(window.open('http://wp-themes-pro.com/site-wordpress/'))">Créer son site WP</a></li>                        <li><a href="javascript:void(window.open('http://www.blogduwebdesign.com/wordpress-template/15-themes-wordpress-avec-une-grille-dynamique/967'))">15 thèmes Wordpress avec une grille dynamique</a></li>                        <li><a href="javascript:void(window.open('http://codex.wordpress.org/Function_Reference/bloginfo'))">Fonction bloginfo</a></li>                    </ul>                    <li class="sansDisc">Divers</li>                    <ul>                        <li><a href="javascript:void(window.open('http://www.outils-web.com'))">Outils Web</a></li>                        <li><a href="javascript:void(window.open(''))"></a></li>                    </ul>                </ul>                <p>GIT</p>                <ul>                    <li><a href="javascript:void(window.open('https://git.kernel.org/cgit/'))">Git repositories</a></li>                    <li><a href="javascript:void(window.open('http://git-scm.com/book/fr/Personnalisation-de-Git-Configuration-de-Git'))">Config Git Hub</a></li>                    <li><a href="javascript:void(window.open('https://help.github.com/articles/setting-your-username-in-git'))">Git config user-name</a></li>                    <li><a href="javascript:void(window.open('https://help.github.com/articles/setting-your-email-in-git'))">Git config user-email</a></li>                    <li><a href="javascript:void(window.open(''))"></a></li>                </ul>                <p>Sites divers</p>                <ul>                    <li><a href="javascript:void(window.open('http://script.aculo.us/'))">Script Aculo.us</a></li>                    <li><a href="javascript:void(window.open('http://dojotoolkit.org/'))">Dojo</a></li>                    <li><a href="javascript:void(window.open('http://developathe.com/'))">Developathe</a></li>                    <li><a href="javascript:void(window.open('http://fr.openclassrooms.com/informatique/cours/concevez-votre-site-web-avec-php-et-mysql/qu-est-ce-que-l-architecture-mvc'))">Architecture MVC</a></li>                </ul>                <p>Linux</p>                <ul>                    <li><a href="javascript:void(window.open('http://formation-debian.via.ecp.fr/vim.html'))">Commandes VIm debian</a></li>                    <li><a href="javascript:void(window.open('http://www.lafermeduweb.net/billet/tutorial-creer-un-serveur-web-complet-sous-debian-1-apache-160.html'))">Créer serveur Debian</a></li>                    <li><a href="javascript:void(window.open('http://www.ubuntu.com/download/desktop/thank-you?country=GB&version=14.04&architecture=i386'))">Fichier ISO Ubuntu</a></li>                    <li><a href="javascript:void(window.open('http://www.linuxliveusb.com/fr/home'))">Linux USB creator</a></li>                    <li><a href="javascript:void(window.open('http://doc.ubuntu-fr.org/installer_un_serveur_debian'))"></a>Installer serveur Debian</li>                </ul>            </div>        </div>        <?php        // Manage blog window        if (isset($_GET['page']) && $_GET['page'] === 'blog') {            ?>            <div id="ajoutArticleBlog">                <div class='titreBlogDroiteAlpha'>                    <p>Ajouter un article</p><a href="secretPage.php">Fermer</a>                </div>                <div class='contenuBlogDroiteAlpha'>                    <form method="post" action="" accept-charset="UTF-8">                        <input type="text" name="titre" value="" placeholder="Titre de l'article"/>                        <textarea  name="extrait" placeholder="Extrait de l'article"></textarea>                        <input type="text" name="auteur" value="" placeholder="Auteur"/>                        <input type="text" name="lien" value="" placeholder="Lien"/>                        <input type="text" name="dateParution" value="" placeholder="Date de parution format YYYY-MM-DD"/>                        <input type="file"  name="image"/>                        <select id="categorieASalle" size="1" name="categorie">                            <option value="" name="categorie">Sélectionner une catégorie</option>                            <?php                            $requeteCategorie = execute_requete("SELECT DISTINCT categorie "                                    . "FROM WebNews");                            while ($cat = $requeteCategorie->fetch_assoc()) {                                echo "<option value=" . $cat['categorie'] . " name='categorie'>" . $cat['categorie'] . "</option>";                            }                            ?>                        </select>                        <input type="submit" value="Envoyer" name="envoyerArticle"/>                    </form>                </div>            </div>            <?php        }        // Manage portfolio window        if (isset($_GET['page']) && $_GET['page'] === 'portfolio') {            ?>            <div id="ajoutArticleBlog">                <div class='titreBlogDroiteAlpha'>                    <p>Ajouter un site à la page portfolio</p><a href="secretPage.php">Fermer</a>                </div>                <div class='contenuBlogDroiteAlpha'>                    <form method="post" action="" accept-charset="UTF-8">                        <input type="text" name="nomSite" value="" placeholder="Nom du site*"/>                        <input type="file"  name="image"/>                        <input type="text" name="lien" value="" placeholder="Lien*"/>                        <select name="etat">                            <option name="etat" value="done">Done</option>                            <option name="etat" value="inProgress">In Progress</option>                        </select>                        <input type="submit" value="Valider" name="validerPortfolio"/>                    </form>                </div>            </div>            <?php        }        // Manage portfolio items window        if (isset($_GET['page']) && $_GET['page'] === 'articlePortfolio') {            ?>            <div id="ajoutArticleBlog">                <div class='titreBlogDroiteAlpha'>                    <p>Ajouter une page article</p><a href="secretPage.php">Fermer</a>                </div>                <div class='contenuBlogDroiteAlpha'>                    <form method="post" action="" accept-charset="UTF-8">                        <select size="1" name="id_realisation">                            <option value="" name="categorie">Sélectionner une réalisation</option>                            <?php                            $requeteSite = execute_requete("SELECT DISTINCT id_realisation, nomSite "                                    . "FROM realisations");                            while ($site = $requeteSite->fetch_assoc()) {                                echo "<option value='" . $site['id_realisation'] . "' name='id_realisation'>" . $site['nomSite'] . "</option>";                            }                            ?>                        </select>                        <input type="file" name="image"/>                        <input type="text" name="descTitre" value="" placeholder="Titre de la description*"/>                        <textarea  name="description" placeholder="Description de la réalisation"></textarea>                        <input type="text" name="techno1" value="" placeholder="HTML5..."/>                        <input type="text" name="techno2" value="" placeholder="CSS3..."/>                        <input type="text" name="techno3" value="" placeholder="PHP..."/>                        <input type="text" name="techno4" value="" placeholder="SQL..."/>                        <input type="text" name="techno5" value="" placeholder="Javascript..."/>                        <input type="text" name="techno6" value="" placeholder="etc..."/>                        <input type="text" name="get" value="" placeholder="get"/>                        <input type="text" name="bonus" value="" placeholder="bonus"/>                        <input type="text" name="lien" value="" placeholder="Lien vers le site*"/>                        <input type="submit" value="Valider" name="validerPageArticle"/>                    </form>                </div>            </div>            <?php        }        ?>    </section>    <aside id="blogPartieDroite">        <?php        include("inc/links_inc.php");        ?>    </aside></div><!-- stop div id="content" --><!-- start footer --><?phpinclude("inc/footer_inc.php");?><!-- stop footer --></body></html>