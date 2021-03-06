

<?php
$route = isset($post) && $post->get('id') ? 'editArticle&articleId='.$post->get('id') : 'addArticle';
$submit = $route === 'addArticle' ? 'Envoyer' : 'Mettre à jour';
?>

<div class="container">
    <form method="post" action="index.php?route=<?= $route; ?>">
        <label for="title">Titre</label><br>
        <input type="text" id="title" name="title" value="<?= isset($post) ? htmlspecialchars($post->get('title')): ''; ?>"><br>
        <?= isset($errors['title']) ? $errors['title'] : ''; ?>
        <label for="content">Contenu</label><br>
        <textarea id="content" name="content" rows="20" cols="50"><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea><br>
        <?= isset($errors['content']) ? $errors['content'] : ''; ?>
        <input type="submit" value="<?= $submit; ?>" id="submit" name="submit">
    </form>
</div>

