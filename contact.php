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
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>

</head>

<body>
    <?php include('header.php'); ?>

    <!-- /.container -->
    <section id="Contact">
        <div class="container-fluid">
            <div class="form-box">
                <h3>Poser moi vos questions</h3>
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input class="form-control" id="name" type="text" name="Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" id="email" type="email" name="Email">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="Message"></textarea>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Envoyer" />
            </div>
            </form>
        </div>
        </div>
    </section>
    <?php include('footer.php'); ?>
</body>

</html>