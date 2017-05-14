<?php $titre = "Mon Blog - " . $post['title']; ?>

<?php ob_start(); ?>

    <article>
        <header>
            <a href="<?= "post.php?id=" . $post['id'] ?>">
                <h1 class="titrePost"><?= $post['title'] ?></h1>
            </a>
            <time><?= $post['post_date'] ?></time>
        </header>
        <p><?= $post['content'] ?></p>
    </article>
    <hr />
    <header>
        <h1 id="titreReponses">Commentaires</h1>
    </header>

<!-- donne l'auteur et le contenu du commentaire -->
<?php foreach ($commentaires as $commentaire): ?>
    <p>écrit par : <?= $commentaire['author_id'] ?></p>
    <p><?= $commentaire['content'] ?></p>
<?php endforeach; ?>

<a>Ecrivez votre commentaire</a>
<br>
<form method="post" action="index.php?action=commenter">
    <textarea id="textCommentaire" name="content" rows="6" cols="40" placeholder="Commentaire"
              required></textarea>
<br>
    <input type="hidden" name="id" value="<?= $post['id'] ?>" />
    <input type="submit" value="Envoyer" />
</form>

<?php $contenu = ob_get_clean(); ?>

<?php require_once 'gabarit.php'; ?>