
<?php
use App\src\DAO\ArticleDAO;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Mon blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
<div>
<?php include('../header.php'); ?>
    <div class="wide">
        <div class="col-xs-5 line">
            <hr>
        </div>
        <div class="col-xs-2 logo">Un Billet Simple pour l'Alaska</div>
        <div class="col-xs-5 line">
            <hr>
        </div>
    </div>
        <div>
    <?php
    $article = new ArticleDAO();
    $articles = $article->getArticles();
    while($article = $articles->fetch())
    {
        ?>

        <h2><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->id);?>"><?= htmlspecialchars($article->title);?></a></h2>
            <p><?= htmlspecialchars($article->content);?></p>
            <p><?= htmlspecialchars($article->author);?></p>
            <p>Créé le : <?= htmlspecialchars($article->createdAt);?></p>
        </div>
        <br>
        <?php
    }
    $articles->closeCursor();
    ?>
</div>
<section id="Billet">
        <div class="container-fluid ">

            <h3>BIENVENUE SUR MON SITE </h3>
            <p>
                Je suis Jean Forteroche, auteur de Roman vivant à Paris. Sur ce site Vous trouvez mon Blog avec ses différents chapitres, mes autres ouvrages, ma biographie ainsi qu'une page de contact si vous avez des questions.
            </p>
        </div>
    </section>
    <?php include('../footer.php'); ?>
</body>
</html>