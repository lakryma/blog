<?php

require_once 'Modele.php';

try {
    if (isset($_GET['id'])) {
        // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec
        $id = intval($_GET['id']);
        if ($id != 0) {
            $post = getPost($id);
            $commentaires = getCommentaires($id);
            require 'vuePost.php';
        }
        else
            /* si un id de post est incorrect */
            throw new Exception("Identifiant de post incorrect");
    }
    else
        /* si aucun id de post est trouvé */
        throw new Exception("Aucun identifiant de post");
}
catch (Exception $e) {
    $msgErreur = $e->getMessage();
    require_once 'vueErreur.php';
}

?>