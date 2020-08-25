<?php include('header.php'); ?>
<?php $this->title = 'Administration'; ?>

<h1>Panneau d'administration</h1>

<div class="message">
    <?= $this->session->show('add_article'); ?>
    <?= $this->session->show('edit_article'); ?>
    <?= $this->session->show('delete_article'); ?>
    <?= $this->session->show('unflag_comment'); ?>
    <?= $this->session->show('delete_comment'); ?>
    <?= $this->session->show('delete_user'); ?>
</div>    


<div class="container" id="administration">

    <h2>Articles</h2>
    <a href="index.php?route=addArticle">Nouvel article</a>
    <table>
        <tr class="titre">
            <td>Id</td>
            <td>Titre</td>
            <td>Contenu</td>
            <td>Auteur</td>
            <td>Date</td>
            <td>Actions</td>           
        </tr>
        <?php
        foreach ($articles as $article)
        {
            ?>
            <tr class="separation">
                <td><?= htmlspecialchars($article->getId());?></td>
                <td><a href="index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></td>
                <td><?= substr(htmlspecialchars($article->getContent()), 0, 150);?></td>
                <td><i><?= htmlspecialchars($article->getAuthor());?></i></td>
                <td class="date">Créé le : <?= htmlspecialchars($article->getCreatedAt());?></td>
                <td>
                    <a href="index.php?route=editArticle&articleId=<?= $article->getId(); ?>">Modifier</a>
                    <a href="index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>">Supprimer</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>

    <h2>Commentaires signalés</h2>
    <table>
        <tr class="titre">
            <td>Id</td>
            <td>Pseudo</td>
            <td>Message</td>
            <td>Date</td>
            <td>Actions</td>
        </tr>
        <?php
        foreach ($comments as $comment)
        {
            ?>
            <tr>
                <td><?= htmlspecialchars($comment->getId());?></td>
                <td><i><?= htmlspecialchars($comment->getPseudo());?></i></td>
                <td><?= substr(htmlspecialchars($comment->getContent()), 0, 50);?></td>
                <td class="date">Créé le : <?= htmlspecialchars($comment->getCreatedAt());?></td>
                <td>
                    <a href="index.php?route=unflagComment&commentId=<?= $comment->getId(); ?>">Désignaler le commentaire</a>
                    <a href="index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer le commentaire</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>

    <h2>Utilisateurs</h2>
    <table>
        <tr class="titre">
            <td>Id</td>
            <td>Pseudo</td>
            <td>Date</td>
            <td>Rôle</td>
            <td>Actions</td>
        </tr>
        <?php
        foreach ($users as $user)
        {
            ?>
            <tr>
                <td><?= htmlspecialchars($user->getId());?></td>
                <td><i><?= htmlspecialchars($user->getPseudo());?></i></td>
                <td class="date">Créé le : <?= htmlspecialchars($user->getCreatedAt());?></td>
                <td><?= htmlspecialchars($user->getRole());?></td>
                <td>
                    <?php
                    if($user->getRole() != 'admin') {
                    ?>
                    <a href="index.php?route=deleteUser&userId=<?= $user->getId(); ?>">Supprimer</a>
                    <?php }
                    else {
                        ?>
                    Suppression impossible
                    <?php
                    }
                    ?>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>





</div>




<?php include('footer.php'); ?>