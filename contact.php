<?php require_once("inc/init_inc.php");?>
<title>Michaël GOMES - Me contacter</title>
<meta name="description" content="Développeur web PHP, JavaScript, Intégrateur HTML5, XHTML, CSS3, Architecture client serveur SQL, mySQL, XML">
<?php include('inc/head_inc.php');?>
<div id="blank">
    <div id="blankleft">
        <div id="titrepage">
            <p>Contact</p>
        </div>
    </div>
    <div id="blankright">
        <div id="blanknav">
            <p><a href="blog.php?page=1">BLOG</a> / <a href="index.php">ACCUEIL</a></p>
        </div>
        <div class="clear"></div>
    </div><!-- fin #blankright -->
</div><!-- fin #blank -->
<?php
    echo $msg;
?>
<!-- start div id="content" -->
<div id="content">   
    <div id='contactcontainer'>        
        <div id='carte'>
            <script src="JS/carte.js" onload="initialisation()"></script>
        </div> 
        <div id="contacter"> 
            <div id='hesitezpas'>  
                <h1>N'hésitez pas à me contacter</h1>       
                <p>Actuellement en stage chez la société Datawords (jusqu'au 30 mai 2014), <span class='black'>Je suis à la recherche d'un emploi de développeur front.</span></p><p>Vous pouvez me contacter directement via le formulaire ci-contre ou par téléphone au 06 64 84 90 28.</p>  
            </div>  
            <div id="formulcontact">       
                <h1>Envoyer moi un message</h1>  
                <form method="post" action="" accept-charset="UTF-8">   
                    <div id="formulairecontact">           
                        <div>            
                            <label for="formulairenom">Votre nom</label><br/>    
                            <input id="formulairenom" name="nom" placeholder="Nom" type="text"> 
                        </div>     
                        <div>     
                            <label for="formulaireemail">Votre adrersse e-mail</label><br/> 
                            <input id="formulaireemail" name="email" placeholder="Adresse e-mail" type="email">
                        </div>             
                        <div>              
                            <label for="formulairesujet">Sujet</label><br/>     
                            <input id="formulairesujet" name="sujet" placeholder="Sujet" type="text">   
                        </div>              
                        <div>             
                            <label for="formulairemessage">Message</label><br/>      
                            <textarea name="message" id="formulairemessage" rows="5" placeholder="Message"></textarea>  
                        </div>          
                        <div class="messagePlus">
                            <input type="text" name="comment">
                        </div>
                        <div>              
                            <input class="formulaireboutonenvoyer" value="Envoyer" name="envoyer_mail" type="submit">     
                        </div>          
                    </div>             
                </form>          
            </div>       
        </div>  
    </div>
</div><!-- stop div id="content" -->
<!-- start footer -->
    <?php include("inc/footer_inc.php");?>
<!-- stop footer -->
</body>
</html>