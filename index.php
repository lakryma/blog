<?php

require_once 'model.php';

try {
    $posts = getPosts();
    require_once 'vueAcceuil.php';
}
catch (Exception $e) {
    $msgErreur = $e->getMessage();
    require_once 'vueErreur.php';
}
?>