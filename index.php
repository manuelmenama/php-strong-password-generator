<?php 

  $symbols = [
    "!",
    "?",
    "&",
    "%",
    "$",
    "<",
    ">",
    "^",
    "+",
    "-",
    "*",
    "/",
    "(",
    ")",
    "[",
    "]",
    "{",
    "}",
    "@",
    "#",
    "_",
    "=",
  ];

  $letters = ["a","A","b","B","c","C","d","D","e","E","f","F","g","G","h","H","i","I","j","J","k","K","l","L","m","M","n","N","o","O","p","P","q","Q","r","R","s","S","t","T","u","U","v","V","w","W","x","X","y","Y","z","Z"];

  $numbers = ["1","2","3","4","5","6","7","8","9","0"];

  $sums_of_array = [];
  $pw_result = [];
  $pw_string = "";
  $response = false;

  $pw_length = intval($_GET["pw_length"]);

  require_once './functions.php';


  if(!empty($pw_length)){

    if($response){

      session_start();

      $_SESSION['psw'] = $_GET[$pw_string];

      header('Location: ./landing-page.php');

    }

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>

  <title>Strong Password Generator 2000</title>
</head>
<body>



  <div class="container mt-5">

    
    <div class="row">
      
      <div class="col-8 offset-2">

        <div class="card mb-3">
          <div class="card-body text-center">
            <h1>Strong Password Generator 2000</h1>
          </div>
        </div>
        
        <div class="card text-center">
          <div
            class="card-header d-flex align-items-center justify-content-center pt-4 bg-info"
            style="--bs-bg-opacity: .2;">
            <p>Inserisci un numero di caratteri compreso tra un minimo di 8 e un massimo 36</p>
          </div>
        <div class="card-body">

          <div class="container">

            <form class="row" action="index.php" method="GET">
              
              <div class="col-4 d-flex align-items-center">
                <p>Numero di caratteri:</p>
              </div>
              <div class="col-4 offset-4">

                <input type="number" class="form-control" placeholder="" aria-label="number-of-char" name="pw_length">

              </div>
              <div class="col-2">

                <button type="submit" class="btn btn-primary">GENERA</button>

              </div>

            </form>

          </div>
          
        </div>
        <div class="card-footer text-muted">
          <p><?php echo $response ? "$pw_string" : "Inserisci una lunghezza corretta" ?></p>
        </div>
      </div>

      </div>

    </div>


  </div>
  
</body>
</html>