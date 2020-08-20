<?php
$route = isset($post) && $post->get('id') ? 'editComment' : 'addComment';
$submit = $route === 'addComment' ? 'Ajouter' : 'Mettre à jour';
?>

<div class="container ajout-commentaire">
    <form method="post" action="../index.php?route=<?= $route; ?>&articleId=<?= htmlspecialchars($article->getId()); ?>">
        <label for="pseudo">Pseudo</label><br>
        <input type="text" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>"><br>
        <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>
        <label for="content">Message</label><br>
        <textarea id="content" name="content"  rows="5" cols="33"><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea><br>
        <?= isset($errors['content']) ? $errors['content'] : ''; ?>
        <input type="submit" value="<?= $submit; ?>" id="submit" name="submit">
    </form>
</div>
