<?php include('header.php'); ?>
<h1>AJouter un nouvel article</h1>


<?php
$route = isset($post) && $post->get('id') ? 'editArticle&articleId='.$post->get('id') : 'addArticle';
$submit = $route === 'addArticle' ? 'Envoyer' : 'Mettre à jour';
?>

<div class="container" id="ajout-article">

    <form method="post" action="index.php?route=<?= $route; ?>">
        <label  for="title">Titre</label><br>
        <input class="title" type="text" id="title" name="title" value="<?= isset($post) ? htmlspecialchars($post->get('title')): ''; ?>"><br>
        <?= isset($errors['title']) ? $errors['title'] : ''; ?>
        <label for="content">Contenu</label><br>
        <textarea  rows="15" cols="150" id="content" name="content"><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea><br>
        <?= isset($errors['content']) ? $errors['content'] : ''; ?>
        <label for="author">Auteur</label><br>
        <input class="auteur" type="text" id="author" name="author" value="<?= isset($post) ? htmlspecialchars($post->get('author')): ''; ?>"><br>
        <?= isset($errors['author']) ? $errors['author'] : ''; ?>
        <input type="submit" value="<?= $submit; ?>" id="submit" name="submit">
    </form>


</div>


<?php include('footer.php'); ?>