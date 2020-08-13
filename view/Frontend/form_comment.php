<form method="post" action="index.php?route=addComment&chapitreId=<?= htmlspecialchars($chapitre->getId()); ?>">
    <label for="pseudo">Pseudo</label><br>
    <input type="text" id="pseudo" onfocus="verificationVide()" onblur="verificationVide()" onkeyup="verificationVide()" name="pseudo"><br>
    <label for="content">Message</label><br>
    <textarea id="content" onfocus="verificationVide()" onblur="verificationVide()" onkeyup="verificationVide()" name="content"></textarea><br>
    <input type="submit" value="Ajouter" id="submit" name="submit">
</form>
