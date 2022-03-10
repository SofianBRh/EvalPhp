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
       
       </a>
     </li>
    
     
   </ul>
  
 </div>
</div>
</nav>


<?php

echo "<form method='post'>
<input placeholder='Reference'name='Name'></input> 
<input placeholder='Prix 'name='Price'></input>
<input placeholder='Image'name='Image'></input>
<input placeholder='Quantité'name='Quantity'></input>
<input placeholder='Desc'name='Description'></input>
<input placeholder='Genre'name='Genre'></input>
<button type='submit'>Ajouter</button>
</form>";

// if (isset($_POST['Name'])){
// $id=$_GET['id'];

//         $Name = $_POST["Name"];
//            $Name = $_POST["Price"];
//            $Image = $_POST["Image"];
//            $Quantity = $_POST["Quantity"];
//            $Description = $_POST["Description"];
//            $Genre= $_POST["Genre"];
//  //connexion base de donnée
//    $mysssqlClient =new PDO('mysql:host=localhost;dbname=Footlo;charset=utf8', 'soso', 'Pokemon', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8"));
  

// $ssql= "UPDATE Kickz SET Name=?, Price=?, Image=?, Quantity=?, Description=?, Genre=? WHERE id=? ";
// $mysssqlClient->prepare($ssql)->execute([$Name, $Price, $Image, $Quantity, $Description, $Genre,$id]);



// }
?>

</body>
</html>



