<?php $this->title = "Accueil"; ?>
<?php $this->titrepage = "titrepage"; ?>

<div id="BlocPages">
    <h1>Accueil</h1></div>
    <?= $this->session->show('add_article'); ?>
<?= $this->session->show('edit_article'); ?>
<?= $this->session->show('delete_article'); ?>
<?= $this->session->show('add_comment'); ?>
<?= $this->session->show('flag_comment'); ?>
<?= $this->session->show('delete_comment'); ?>
<?= $this->session->show('register'); ?>
<?= $this->session->show('login'); ?>

    <section id="Billet">
        <div class="container-fluid ">

            <h2>Bienvenue sur mon site </h2>
            <p>
                Je suis Jean Forteroche, auteur de Roman vivant à Paris. Sur ce site Vous trouvez mon Blog avec ses différents chapitres, mes autres ouvrages,
                 ma biographie ainsi qu'une page de contact si vous avez des questions. A notre epoque ultra connecté, j'ai décidé de transposer mon nouveau récit en ligne sous la forme de chapitres 
                 périodiques et interactifs qui composeront le roman en ligne " un Billet simple pour l'Alaska" afin d'établir une communication entre auteur et lecteurs qu'empêche le support papier. 
                 ce sera l'occasion de faire entendre votre opinion. Exprimez votre ressenti sur la progression de l'histoire, réagissez sur les intrigues, échangez vos idées et je répondrait peut etre !
            </div>
            </p>
        </div>
    </section>
    <section id="livresAccueil">
            
            <div class="blocLivres">
        <h2>Mes derniers romans :</h2>
        <figure class="chapitre col-lg-4 col-md-4 col-sm-4 col-xs-6 filter Romance">
        <a href="index.php?route=livres"><img src="img/9.png" class="img-responsive"></a>
                    <figcaption><h4>Demain II</h4>
                </figcaption>
                </figure>
                <figure class="chapitre col-lg-4 col-md-4 col-sm-4 col-xs-6 filter Fantastique">
                <a href="index.php?route=livres"><img src="img/10.png" class="img-responsive"></a>
                    <figcaption><h4>7 ans après</h4>
                </figcaption>
                </figure>
                <figure class="chapitre col-lg-4 col-md-4 col-sm-4 col-xs-6 filter Fantastique">
                <a href="index.php?route=livres"><img src="img/11.png" class="img-responsive"></a>
                    <figcaption><h4>L'appel de l'ange</h4>
                </figcaption>
                </figure>
            </div>
    
                </section>
            <section class="BilletsIndex">
            <h2>Billet simple pour l'Alaska : </h2>
        <div class="DernierBillet">

        <?php
    foreach ($chapitres as $chapitre)
    {
        ?>
        
        <figure>
        <p>Dernier chapitre paru :</p>
                <img src='<?= htmlspecialchars($chapitre->getImages());?>'>
                <p><?= htmlspecialchars($chapitre->getExtrait());?></p>
                <a href="index.php?route=chapitre&chapitreId=<?= htmlspecialchars($chapitre->getId());?>">
            <input class="btn btn-primary" type="submit" value="Lire Plus" /></a>
            <p>de <?= htmlspecialchars($chapitre->getAuthor());?></p>
            <p>Créé le : <?= date_format(date_create($chapitre->getCreatedAt()), 'd/m/Y');?></p>
            </figcaption>
            </a>
            </figure>
        
        <?php
    }
    ?>
        </div></section>

</body>
</html>