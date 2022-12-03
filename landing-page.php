<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>

  <title>Strong Password Generetor 2000, result</title>
</head>
<body>
  <?php

  session_start();
  var_dump($_SESSION);
  ?>
  <div class="container mt-5">

    <div class="row">

      <div class="col-8 offset-2">

        <div class="card">
          <div class="card-header">
            <h3>Your strong password:</h3>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><?php echo $_SESSION["psw"]; ?></li>
          </ul>
        </div>
        <a href="./index.php" class="btn btn-info">Torna alla homepage</a>

      </div>

    </div>

  </div>
  
</body>
</html>