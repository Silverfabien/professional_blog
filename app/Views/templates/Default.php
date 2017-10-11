<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title><?= App::getInstance()->title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Blog.css">
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Accueil</a>
          <a class="navbar-brand" href="Blog.php">Blog</a>
        </div>
      </div>
    </nav>

    <div class="container">

      <div class="starter-template" style="padding-top: 100px">
        <?= $content; ?>
      </div>
      
    </div><!-- /.container -->

  </body>
</html>