
<?php
 var_dump($_GET);

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age']; 



if ($strlen = $name > 3) {
echo "Accesso riuscito";
} else {
  echo "Accesso negato";
}
?>


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
          <form action="name" method="get">
          <label for="name"><h1>name</h1> </label>
          <input type="text" name="name" id="name" class="form-control" placeholder="inserisci name" >
          <!-- name -->
          <label for="emal"><h1>emal</h1> </label>
          <input type="text" emal="emal" id="emal" class="form-control" placeholder="inserisci emal" >
          <!-- emal -->
          <label for="age"><h1>age</h1> </label>
          <input type="text" age="age" id="age" class="form-control" placeholder="inserisci age" >
          <!-- age -->
          </form>
      </div>
    </div>
  </div>
   
    
</body>
</html>

/*
Con un form passare come parametri GET name, mail e age e verificare
 (cercando i metodi che non conosciamo nella documentazione) che name
  sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola
  e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/