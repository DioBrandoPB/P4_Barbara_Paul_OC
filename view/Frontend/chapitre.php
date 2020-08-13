<?php $this->title = "chapitre"; ?>
<div id="BlocPages"><h1>Chapitre <?= htmlspecialchars($chapitre->getId());?></h1></div>

<div class="chapitres">
    
    <h2><?= htmlspecialchars($chapitre->getTitle());?></h2>
    <?php echo"<img src='$Images' name='' alt=''"; ?>
    <p><?= htmlspecialchars($chapitre->getContent());?></p>
    <p><?= htmlspecialchars($chapitre->getAuthor());?></p>
    <p>Créé le : <?= date_format(date_create($chapitre->getCreatedAt()), 'd/m/Y');?></p>
    <a href="index.php?route=chapitres">Retour à la liste des chapitres</a>
</div>
<br>
<div class="commentaires">
    <?php
    foreach ($comments as $comment)
    {
        ?>
        <div class="comment">
        <h4><?= htmlspecialchars($comment->getPseudo());?></h4>
        <p><?= htmlspecialchars($comment->getContent());?></p>
        <p>Posté le <?= date_format(date_create($comment->getCreatedAt()), 'd/m/Y');?></p>

        <?php
        if($comment->signalement()) {
            ?>
            <p>Ce commentaire a déjà été signalé</p></div>
            <?php
        } else {
            ?>
            <p><a href="index.php?route=signalCommentaire&commentId=<?= $comment->getId(); ?>">Signaler le commentaire</a></p>
            <?php
        }
        ?>
        <p><a href="index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer le commentaire</a></p></div>
        <br>
        <?php
    }
    ?>
    
<div id="comments" class="text-left" style="margin-left: 50px">
    <h3>Ajouter un commentaire</h3>
    <?php include 'form_comment.php';?>
    <h3>Commentaires</h3>
</div></div>