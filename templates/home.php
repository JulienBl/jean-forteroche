<?php include('header.php'); ?>


<?php $this->title = 'Accueil'; ?>

<h1>Page d'accueil</h1>

<div class="message">
    <?= $this->session->show('add_article'); ?>
    <?= $this->session->show('edit_article'); ?>
    <?= $this->session->show('delete_article'); ?>
    <?= $this->session->show('add_comment'); ?>
    <?= $this->session->show('flag_comment'); ?>
    <?= $this->session->show('delete_comment'); ?>
    <?= $this->session->show('register'); ?>
    <?= $this->session->show('login'); ?>
    <?= $this->session->show('logout'); ?>
    <?= $this->session->show('delete_account'); ?>
</div>

<div id="ajout-article" class="container">

    <?php
    foreach ($articles as $article)
    {
        ?>
        <div class="nouvelle-article">
            <h2><a href="index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></h2>
            <p class="page-article"><?= substr(htmlspecialchars($article->getContent()), 0, 200);?></p>
            <p class="auteur-article"><i><?= htmlspecialchars($article->getAuthor());?></i></p>
            <p class="date-article">Créé le : <?= htmlspecialchars($article->getCreatedAt());?></p>
        </div>
        <br>
        <?php
    }
    ?>


</div>




<?php include('footer.php'); ?>