<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Corona</title>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.2/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>  
  <div class="preloader">
    <div class="content">
      <img src="https://motiongraphicsphoebe.files.wordpress.com/2018/10/loading-animations-preloader-gifs-ui-ux-effects-18.gif">
      <h2>Loading...</h2>
    </div>
  </div>
  
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">Pamekasancode</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="?page=indonesia">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=global">Global</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=provinsi" >Provinsi</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="main">
    <?php 
      @$page = $_GET["page"];
      if($page) {
        switch ($page) {
          case 'home':
            require "indonesia.php";
            break;
          case 'global':
            require "global.php";
            break;
          case 'provinsi':
            require "provinsi.php";
            break;
          default:
            require "indonesia.php";
            break;
        }
      } else {
        require "indonesia.php";
      }
      
    ?>
  </div>
  
  <script src="main.js"></script>
</body>
</html>