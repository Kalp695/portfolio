<?php

/* ---------- || Fonction site Portfolio || ---------- */

// ----- Fonction debug

function debug($arg) {
    echo "<pre>";
    print_r($arg);
    echo "</pre>";
    $trace = debug_backtrace();
    echo "Debug demandé dans le fichier " .
    $trace[0]['file'] . "<br/> ligne: " . $trace[0]['line'];
}

//==================================================================
// ----- Fonction execute requete

function execute_requete($arg) {
    global $mysqli;     /* on récupère $mysqli qui est une variable global pour l'inclure dans la zone locale de la fonction (entre {} ) !!!valable uniquement dans le cas de fonction */
    $resultat = $mysqli->query($arg);
    if (!$resultat) /* ! implique contraire de true */ {
        die("<br/>" . " Erreur de requête: " . $mysqli->error . "<br />Code sql: " . $arg);
    }
    return $resultat;
}

//==================================================================
// ----- Fonction verification utilisateur connu

function utilisateur_connu() {
    if (isset($_SESSION['utilisateur'])) {
        return true;
    } else {
        return false;
    }
}
