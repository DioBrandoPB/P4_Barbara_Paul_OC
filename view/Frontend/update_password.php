<?php $this->title = 'Modifier mot mot de passe'; ?>
<h1></h1>
<div>
    <p>Le mot de passe de <?= $this->session->get('pseudo'); ?> sera modifié</p>
    <form method="post" action="index.php?route=updatePassword">
        <label for="password">Mot de passe</label><br>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Mettre à jour" id="submit" name="submit">
    </form>
</div>
<br>
<a href="index.php">Retour à l'accueil</a>