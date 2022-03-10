
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
 

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item active">
          <a class="nav-link" href="?page=home">Home
          <a class="nav-link"  style ='text-align:right' href="?page=Ajout">Add
          <a class="nav-link"  style ='text-align:right' href="?page=Modif">Modif
          
          </a>
        </li>
       
        
      </ul>
     
    </div>
  </div>
</nav>
<?php foreach ($homes as $home):?>
<div class="card border-dark mb-3" style="max-width: 20rem; padding : 0.5rem; margin : 5%; display:inline-block"> 
  <div class="card-header" style="text-align:center;"><h4 class="card-title"><?=$home-> getName()?></h4></div>
  <div class="card-body" style="text-align:center;">
    
    <p class="card-text"> Quantité Disponnible : <?=$home-> getQuantity()?></p>
    <p class="card-text"> Prix : <?=$home-> getPrice()?> $</p>
    <img src =" <?=$home-> getImage()?>" width="50%" height="50%">
    <form>
    <a href="?page=Detail&id=<?=$home-> getId()?>">
        <input type="button" style="margin-top:3%" value="click here">
    </a>
</form>
  </div>

</div>
<?php endforeach ?>


</body>
</html>




