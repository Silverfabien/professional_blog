<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.70, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="images/logo.jpg">

    <title><?= App::getInstance()->title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.css" rel="stylesheet">
    <link rel="stylesheet" href="css/blog.css">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php"><?= App::getInstance()->title; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Accueil
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?p=posts.index">Blog</a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="index.php?p=contact.index">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="CV/CV_Hollebeque_Fabien.pdf">CV</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead">
      <div class="overlay">
        <div class="container">
          <h1 class="display-1 text-white">Hollebeque Fabien</h1>
          <h2 class="display-4 text-white">Le développeur acharné</h2>
        </div>
      </div>
    </header>

       <p class="img-logo"><a href="index.php"><img class="img-logo-style img-fluid rounded-circle" src="images/logo.jpg"></a></p>
    
    <div class="container">

      <div class="starter-template" style="padding-top: 100px">
        <?= $content; ?>
      </div>
      
    </div><!-- /.container -->


    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <em><p class="m-0 text-center text-white">Me suivre sur => <a href="https://github.com/Silverfabien">GitHub</a> / <a href="https://www.linkedin.com/in/fabien-hollebeque-b21556140/">LinkedIn</a></p></em>
        <p class="m-0 text-center text-white">Tous droits réservés / Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

        <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>
