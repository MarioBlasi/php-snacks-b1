



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <!--Script Bootstrap bundle-->
</head>
<body >
  <div class="container">
    <div class="row d-flex justify-content-center p-5 shadow">
      <div class="col-6">
        <h3>partite di basket:</h3>
        <br>
          <?php

          $partite = array(
            array("squadra_casa" => "Milano", "punti_casa" =>  12,"squadra_ospite" => "Roma",  "punti_ospite" => 7),

            array("squadra_casa" => "Napoli", "punti_casa" => 33,"squadra_ospite" => "Bari",  "punti_ospite" => 71),

            array("squadra_casa" => "Palermo", "punti_casa" => 22,"squadra_ospite" => "Cagliari",  "punti_ospite" => 87),

          );

          foreach($partite as $partita) {
            echo $partita['squadra_casa'] . "-" . $partita['squadra_ospite'] . "-" . $partita['punti_ospite'] . "-" .$partita['punti_casa'] . "<br>";
          }
          ?>

      </div>
    </div>
  </div>
   
    
</body>
</html>