<meta charset="utf-8"/>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
<link rel="shortcut icon" href="../images/favicon.png"/>
<link type="text/css" href="styles/style_entete.css" rel="stylesheet" media="all"/>
<link type="text/css" href="styles/style.css" rel="stylesheet" media="all"/>
<link type="text/css" href="styles/style_footer.css" rel="stylesheet" media="all"/>
<script src="JS/slideDiw.js"></script>
<script src="JS/swfobject.js"></script>
<script src="JS/footerConnect.js"></script>
<script src="JS/burger.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
</head>
<body>
    <?php
    include_once("analyticstracking.php");
    if (isset($_POST['envoyer_mail']) && !empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['message']) && empty($_POST['comment'])) {
        echo "<script src='JS/erase.js'></script>";
        $msg .= "<div id='messagevalide' style='opacity:1;' onload='noMore()'><p>Votre message<br/> a bien été envoyé</p></div>";
    } else {
        if (isset($_POST['envoyer_mail']) && (empty($_POST['nom']) || empty($_POST['email']) || empty($_POST['message']))) {
            echo "<script src='JS/eraseAgain.js'></script>";
            $msg .= "<div id='messageNonValide' style='opacity:1;' onload='noMoreAgain()'><p>Tous les champs doivent être remplis pour envoyer votre message.</p></div>";
        }
    }
    if(isset($_POST['connexion']) && !empty($_POST['pseudo']) && !empty($_POST['password'])){
        $resultat=execute_requete("SELECT * FROM connexion");
        $membre=$resultat->fetch_assoc();
        foreach ($membre as $indice => $valeur) {
            if($membre['pseudo'] === $_POST['pseudo'] && $membre['password'] === $_POST['password']){
                $_SESSION['utilisateur'][$indice] = $valeur;
                header('location:secretPage.php');
            }
        }
    }
    ?>
    <!-- start header -->
    <header>
        <div id="bgSoft">
            <img src='images/bg_entete.jpg' alt='Paris'/>
        </div>
        <div id="entete">
            <div id="fondblanc">
                <img id="phone" src="images/phone-icon.png" alt="téléphone"/>
                <p>06.64.84.90.28</p>
                <a href="http://www.viadeo.com/fr/profile/micha%C3%ABl.gomes7" target="_blank" title="Viadeo"><div id="viadeo"></div></a>
                <!-- <div id="gitHub"><img src="../images/GitHub-Mark.png" alt="GitHub logo"></div> -->
                <div class="clear"></div>
            </div><!-- fin #fondblanc -->
            <a href='index.php'><div id="logo">
            </div></a>
            <!-- start burger menu -->
            <div id="burger" class="desactive" onclick="activeBurger('burger-menu','burger','ulMenu')">
                <div id='burger-menu' onclick="activeBurger('burger-menu')">
                    <ul id="ulMenu">
                        <li><a href="index.php">accueil</a></li>
                        <li><a href="apropos.php">à propos</a></li>
                        <li><a href="portfolio.php">portfolio</a></li>
                        <li><a href="latelier.php">l'atelier</a></li>
                        <li><a href="ensavoir.php">en savoir +</a></li>
                        <li><a href="blog.php?page=1&amp;categorie=all" class="lienMenu">blog</a></li>
                        <li><a href="contact.php">contact</a></li>
                    </ul>
                </div>
            </div>
            <!-- start menu -->
            <div id="navlist"> 
                <ul>
                    <li><a href="index.php" class="">accueil</a></li>
                    <?php
                    if (isset($_SERVER['PHP_SELF']) && ($_SERVER['PHP_SELF'] == "/apropos.php")) {
                        ?>
                        <li><a href="" class="ici">à propos</a></li>
                        <?php
                    } else {
                        ?>
                        <li><a href="apropos.php" class="">à propos</a></li>
                        <?php
                    }
                    if (isset($_SERVER['PHP_SELF']) && ($_SERVER['PHP_SELF'] == "/portfolio.php")) {
                        ?>
                        <li><a href="portfolio.php" class="ici">portfolio</a></li>
                        <?php
                    } else {
                        ?>
                        <li><a href="portfolio.php" class="">portfolio</a></li>
                        <?php
                    }
                    if (isset($_SERVER['PHP_SELF']) && ($_SERVER['PHP_SELF'] == "/latelier.php")) {
                        ?>
                        <li><a href="latelier.php" class="ici">l'atelier</a></li>
                        <?php
                    } else {
                        ?>
                        <li><a href="latelier.php" class="">l'atelier</a></li>
                        <?php
                    }
                    if (isset($_SERVER['PHP_SELF']) && ($_SERVER['PHP_SELF'] == "/ensavoir.php")) {
                        ?>
                        <li><a href="" class="ici">en savoir +</a></li>
                        <?php
                    } else {
                        ?>
                        <li><a href="ensavoir.php" class="">en savoir +</a></li>
                        <?php
                    }
                    if (isset($_SERVER['PHP_SELF']) && ($_SERVER['PHP_SELF'] == "/blog.php")) {
                        ?>
                        <li><a href="" class="ici">blog</a></li>
                        <?php
                    } else {
                        ?>
                        <li><a href="blog.php?page=1&amp;categorie=all" class="">blog</a></li>
                        <?php
                    }
                    if (isset($_SERVER['PHP_SELF']) && ($_SERVER['PHP_SELF'] == "/contact.php")) {
                        ?>
                        <li><a href="" class="ici">contact</a></li>
                        <?php
                    } else {
                        ?>
                        <li><a href="contact.php" class="">contact</a></li>
                        <?php
                    }
                    ?>
                </ul>
            </div><!-- fin #navlist -->
            <!-- stop menu -->
        </div><!-- fin #entete -->
    </header>
    <!-- stop header -->