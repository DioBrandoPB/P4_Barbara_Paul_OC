<?php $this->title = "Nouvel article"; ?>
<h1>Mon blog</h1>
<p>En construction</p>
<div class="addchapter">
    <form method="post" action="index.php?route=addArticle">
        <label for="title">Titre</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="content">Contenu</label><br>
        <textarea id="content" name="content"></textarea><br>
        <label for="author">Auteur</label><br>
        <input type="text" id="author" name="author"><br>
        <input type="submit" value="Envoyer" id="submit" name="submit">
    </form>
    <a href="index.php">Retour à l'accueil</a>
</div>
<script src="https://cdn.tiny.cloud/1/yws7wzjxy70top6xa59ouctto0ntep4r2barpk4m9j8knl0t/tinymce/5/tinymce.min.js" referrerpolicy="origin"/></script>
    <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>