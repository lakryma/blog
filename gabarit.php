<!doctype html>

<html lang="fr">

<head>
   
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css" />
    <title><?= $titre ?></title>
    
</head>

<body>

<div id="global">
    <header>
        <a href="index.php"><h1 id="titreBlog">Mon Blog</h1></a>
        <p>Bienvenue.</p>
        <a href="vueAjouterPost.php">ajouter un article</a>
 
    </header>
    
       <div id="contenu">
        <?= $contenu ?>
       </div>
   
    <footer id="piedBlog">
    
            Blog de A.
    
    </footer>

</div>
</body>
</html>