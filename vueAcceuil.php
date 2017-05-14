<?php $titre = 'Mon Blog'; ?>

<?php ob_start(); ?>

<?php foreach ($posts as $post): ?>

    <article>
       <aside id="post">
           <header>
            <a href="<?= "post.php?id=" . $post['id'] ?>">
                <h1 class="titrePost"><?= $post['title'] ?></h1>
            </a>
            <time><?= $post['post_date'] ?></time>
           </header>
       </aside>
        

        <p><?= $post['content'] ?></p>
    </article>
    <hr />

<?php endforeach; ?>

<?php $contenu = ob_get_clean(); ?>

<?php require_once 'gabarit.php'; ?>