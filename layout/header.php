<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>
    <?php echo $title ?>
  </title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="../static/styleWeb.css">
  <style>
    a,
    .nav-link,
    .navbar-brand {
      color: white;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="index.php" href="">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ex1.php">Exercise 1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="controlflow.php">Exercise 4</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="variable.php">Exercise 3</a>
              </li>

            </ul>
            
          </div>
        </div>
      </nav>
    </div>

    <div class="row" style="margin-top: 10%; margin-bottom: 10px; margin-right: 5px;">
      <div class="col-sm-3" style="background-color: rgba(228, 235, 194, 0.353);">
        <h3>List of Tasks</h3>
        some thing here
      </div>
      <div class="col-sm-9">