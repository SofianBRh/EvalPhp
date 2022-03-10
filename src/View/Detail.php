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
         <span class="visually-hidden">(current)</span>
       </a>
     </li>
    
     
   </ul>
  
 </div>
</div>
</nav>

<div class="card border-dark mb-3" style="max-width: 1000px; padding : 0.5rem; margin : 5%; display:inline-block; text-align:center; display: block;
    margin-left: auto;
    margin-right: auto  "> 
  <div class="card-header"><h4 class="card-title"><?=$details-> getName()?></h4></div>
  <div class="card-body">
    
    <p class="card-text"> Quantité Disponnible : <?=$details-> getQuantity()?></p>
    <p class="card-text"> Prix : <?=$details-> getPrice()?> $</p>
    <img src =" <?=$details-> getImage()?>" width="50%" height="50%">
    <p class="card-text"> <?=$details-> getDescription()?></p>


    </div>

</div>
</body>
</html>