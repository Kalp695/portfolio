<?phpif (isset($_POST['envoyer_mail']) && !empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['message']) && empty($_POST['comment'])) {    $entetes = "From: sitePortfolio@diw.fr \r\n" . "Reply-to: " . $_POST['email'];    //$entetes = "Reply-to: " . $_POST['email'];	    $message = strip_tags($_POST['message'] = "nom: " . $_POST['nom'] . "\n" . " Message: " . $_POST['message']);    mail("webdeveloper@diw.fr", $_POST['email'], $message, $entetes);}?><div id="Up" onclick="remonte()"></div><div class="clear"></div><footer>    <div id="bdp">        <div id="contentBDP">            <!-- start webnews footpage  -->            <div id="webnews">                <p class="titre">Web News !</p>                <img src="images/trait.jpg" alt="trait">                <?php                $resultat = execute_requete("SELECT *, "                        . "DATE_FORMAT(date_parution, '%d/%m/%Y') AS 'dp' "                        . "FROM WebNews "                        . "ORDER BY date_parution "                        . "DESC "                        . "LIMIT 0,4");                while ($articles = $resultat->fetch_assoc()) {                    echo "<p class='news'>" . $articles['titre'] . "<br/><a href='" . $articles['lien'] . "' target='_blank'>Article écrit par " . $articles['auteur'] . " le " . $articles['dp'] . "</a></p>";                }                ?>            </div>            <!-- stop webnews footpage  -->            <!-- start realisations footpage -->            <div id="realisations">                <p class="titre">Réalisations</p>                <img src="images/trait.jpg" alt="trait">                <a href="javascript:void(window.open('http://www.lokisalle.diw.fr'))" title="PHP | SQL | HTML5 | CSS3 | Javascript | JQuery">                    <div id="case1">                    </div>                </a>                <a href="javascript:void(window.open('http://hotel-de-l-est.diw.fr/index.html'))" title="HTML5 | CSS 3 | Javascript">                    <div id="case2">                    </div>                </a>                <a href="javascript:void(window.open('http://www.danmarino.diw.fr/'))" title="XHTML">                    <div id="case3">                    </div>                </a>                <!--                <a href="javascript:void(window.open('http://www.helenkeller.diw.fr/'))" title="HTML 4.0" alt="Site biographique au sujet d'helen Keller" >                    <div id="case4">                    </div>                </a>                -->            </div>            <!-- stop realisations footpage -->            <!-- start en savoir + footpage -->            <div id="aproposfoot">                <p class="titre">A propos</p>                <img src="images/trait.jpg" alt="trait">                <p><span>Après plus de 10ans</span> dans le domaine commercial et de la relation client, J'ai choisi de m'orienter vers le métier de développeur Web. Développement PHP, développement Front, Drupal, base de donnée SQL, référencement, font maintenant parti de mon quotidien.</p>                <p><a href="apropos.php">Vous désirez en savoir plus?</a></p>                <img src="images/home-icon.png" alt="une maison" class="icon">                <p class="iconbas">Longjumeau</p>                <img src="images/phone1-icon.png" alt="un téléphone" class="icon2">                <p class="iconbas2">06.64.84.90.28</p>            </div>            <!-- stop en savoir + footpage -->            <!-- start formulaire contact footpage -->            <div id="formcontact">                <p class="titre">Me contacter</p>                <img src="images/trait.jpg" alt="trait">                <form method="post" action="index.php" accept-charset="UTF-8">                    <div id="formulaire">                        <div>                            <input id="nom" name="nom" placeholder="Nom" type="text">                        </div>                        <div>                            <input id="email" name="email" placeholder="Adresse e-mail" type="email">                        </div>                        <div>                            <textarea name="message" id="message" rows="5" placeholder="Message"></textarea>                        </div>                        <div class="messagePlus">                            <input type="text" name="comment">                        </div>                        <div>                            <input class="boutonenvoyer" value="Envoyer" name="envoyer_mail" type="submit">                        </div>                    </div>                </form>            </div>            <!-- stop formulaire contact footpage -->        </div>        <!-- start bande du bas -->        <div id="bande" class="open" <?php if(utilisateur_connu()){ ?> onclick="dejaConnect();" <?php }else{ ?> onclick="connectDiv('bande', 'backAccess')" <?php } ?> >            <p class="titre"></p>        </div>        <div id="backAccess">            <form id="privateAccess2" method="post" accept-charset="UTF-8">                   <div id="identifiAcces2">                       <input id="connectpseudo2" name="pseudo" placeholder="Pseudo" type="text"/>                    <input id="connectpass2" name="password" placeholder="Mot de Passe" type="password"/>                </div>                <div id="confirmAcces2">                                  <input class="connectConfirm2" value="Connexion" name="connexion" type="submit"/>                     </div>                      </form>         </div>        <!-- stop bande du bas -->        <!-- start mentions du bas -->        <div id="copy">            <p>&copy; Tous droits réservés | Site réalisé par Michaël GOMES | <a href="mentionslegales.php">Mentions légales</a></p>        </div>        <!-- stop mentions du bas -->    </div></footer>