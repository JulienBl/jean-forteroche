<?php include('header.php'); ?>


<div class="message">
    <?php $this->title = 'Mon profil'; ?>
    <?= $this->session->show('update_password'); ?>
</div>
<h1>Mon profil</h1>


<div class="container">
    <h2><?= $this->session->get('pseudo'); ?></h2>
    <!--<p><?= $this->session->get('id'); ?></p>-->

    <div class="row">
        <div class="col-6">
            <a href="../index.php?route=updatePassword">Modifier son mot de passe</a>
        </div>
        <div class="col-6">
             <a href="../index.php?route=deleteAccount">Supprimer mon compte</a>
        </div>
    </div>   
</div>
<br>



<?php include('footer.php'); ?>