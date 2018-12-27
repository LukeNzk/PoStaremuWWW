<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Łukasz Nizik">

    <title>Po Staremu</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Po Staremu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="?id=home">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?id=about">O nas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?id=projekty">Projekty</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?id=media">Media</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="business-header">
    </header>

    <div class="container">
      <?php include 'container.php'; ?>      
    </div>

    <footer class="py-3 bg-dark">
      <div class="container">
          <div class="row ml-2 mr-2 text-white">
              <div class="col-md-4">
                      <h1>Informacje</h1>
                      REGON 362197812<br/>
                      KRS 0000570371<br/>
                      NIP 7272797074
                  </div>
                  <div class="col-md-4">
                      <h1>Kontakt</h1>
                      <i class="fa fa-phone" aria-hidden="true"></i> +48 602 649 275<br/>
                      <i class="fa fa-envelope" aria-hidden="true"></i> coslychac@postaremu.org
                  </div>
                  <div class="col-md-4">
                      <h1>Społeczność</h1>
                      <a href="https://www.facebook.com/fundacja.postaremu/">Facebook</a><br/>
                      <a href="https://twitter.com/PoStaremu">Twitter</a><br/>
                      <a href="https://www.instagram.com/postaremu/">Instagram</a><br/>
                      <a href="https://www.youtube.com/channel/UCFVPaWfhll-YcxUEh9MQNYA">YouTube</a>
                  </div>
          </div>
      </div>
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Po Staremu @ 2019</p>
      </div>
    </footer>

  </body>

</html>
