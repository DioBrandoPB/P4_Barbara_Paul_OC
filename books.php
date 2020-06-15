<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="Public/css/style.css" type="text/css">
    <script src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <script src="../../Public//js/galerie.js" ></script>
</head>

<body>
    <?php include('header.php'); ?>

    <!-- /.container -->
    <section id="Livres">
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3>Mes Livres</h3>
        </div>

        <div align="center">
            <button class="btn btn-default filter-button" data-filter="all">Tous</button>
            <button class="btn btn-default filter-button" data-filter="Fantastique">Fantastique</button>
            <button class="btn btn-default filter-button" data-filter="Policier">Policier</button>
            <button class="btn btn-default filter-button" data-filter="Thriller">Thriller</button>
            <button class="btn btn-default filter-button" data-filter="Romance">Romance</button>
        </div>
        <br/>


            <div class="galerie col-lg-4 col-md-4 col-sm-4 col-xs-6 filter Fantastique">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="galerie col-lg-4 col-md-4 col-sm-4 col-xs-6 filter Policier">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="galerie col-lg-4 col-md-4 col-sm-4 col-xs-6 filter Fantastique">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="galerie col-lg-4 col-md-4 col-sm-4 col-xs-6 filter Romance">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="galerie col-lg-4 col-md-4 col-sm-4 col-xs-6 filter Thriller">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="galerie col-lg-4 col-md-4 col-sm-4 col-xs-6 filter Romance">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="galerie col-lg-4 col-md-4 col-sm-4 col-xs-6 filter Thriller">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="galerie col-lg-4 col-md-4 col-sm-4 col-xs-6 filter Romance">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="galerie col-lg-4 col-md-4 col-sm-4 col-xs-6 filter Fantastique">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="galerie col-lg-4 col-md-4 col-sm-4 col-xs-6 filter Thriller">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>

            <div class="galerie col-lg-4 col-md-4 col-sm-4 col-xs-6 filter Policier">
                <img src="http://fakeimg.pl/365x365/" class="img-responsive">
            </div>
        </div>
    </div>
    </section>
    <?php include('footer.php'); ?>
</body>

</html>