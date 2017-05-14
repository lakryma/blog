<?php

//effectue la connexion a la bdd
//instancie et renvoie l'objet pdo associe
function getBdd() {
    $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root',
        '');
    return $bdd;
}


// Renvoie la liste de tous les posts, tries par identifiant decroissant
function getPosts() {
    $bdd = getBdd();
    $posts = $bdd->query('SELECT * FROM posts ORDER BY post_date DESC');
    return $posts;
}


// Renvoie les informations sur un post
function getPost($idPost) {
    $bdd = getBdd();
    $post = $bdd->prepare('SELECT * FROM posts WHERE id=?');
    $post->execute(array($idPost));
    if ($post->rowCount() == 1)
        return $post->fetch();
    else
        //si aucune information disponible
        throw new Exception("Aucun billet ne correspond à l'identifiant '$idPost'");
}


//renvoie la liste des commentaires associes a un post
function getCommentaires($idPost)
{
    $bdd = getBdd();
    $commentaires = $bdd->prepare('SELECT * FROM comments WHERE id=?');
    $commentaires->execute(array($idPost));
    return $commentaires;
}
?>
