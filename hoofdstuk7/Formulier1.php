<?php
require 'modules/db.php';
require 'modules/berichten.php';
var_dump($_POST);

if(isset($_POST['verzenden'])){
    saveBericht($_POST['naam'],$_POST['bericht'],$_POST['datumtijd']);
}
    $bericht=getBericht();
?>
<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gastenboek</title>
</head>
<body>
<div class="container"
     <div class="row gy-3">
         <p class="lead"> Laat je bericht achter in het gasten boek</p>
         <form method="post">
             <div class="mb-3">
                 <label for="naam" class="col-form-label">
                     Naam:
                 </label>
                 <input type="text" naam="naam" class="form-control" id="naam">
             </div>
             <div class="mb-3">
                 <label for="bericht" class="col-form-label">
                     bericht:
                 </label>
                 <input type="text" bericht="bericht" class="form-control" id="bericht">
             </div>
             <div class="mb-3">
                 <label for="datumtijd" class="col-form-label">
                     datumtijd
                 </label>
                 <input type="date" datum="datumtijd" class="form-control" id="datumtijd">
             </div>

</body>
</html>
