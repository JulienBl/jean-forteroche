<?php include('header.php'); ?>

<div class="message">
    <?php $this->title = "Connexion"; ?>
    <?= $this->session->show('error_login'); ?>
</div>

<h1>Connectez vous</h1>


<div class="container">
    <form method="post" action="index.php?route=login">
        <label for="pseudo">Pseudo</label><br>
        <input type="text" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>"><br>
        <label for="password">Mot de passe</label><br>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Connexion" id="submit" name="submit">
    </form>
   
</div>

<?php include('footer.php'); ?>