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


<form action="" method="post"style="max-width: 1000px; padding : 0.5rem; margin : 5%; display:inline-block; text-align:center; display: block;
    margin-left: auto;
    margin-right: auto  " >
<input type="text" name="Name" placeholder="Name" /><br/>
<input type="text"  name="Price"placeholder="Price" /></br>

<input type="text"  name="Image" placeholder="Image"/> </br>
<input type="text" name="Quantity"placeholder="Quantity"  /></br>
<input type="text" name="Description" placeholder=" Description"></br>
<input type="text" name="Genre" placeholder="Genre"></br>
<input  type="submit"  value='submit' placeholder="submit">
<input type="reset" placeholder="cancel">
</form>

<?php 

$mysqlClient =new PDO('mysql:host=localhost;dbname=Footlo;charset=utf8', 'soso', 'Pokemon');
$requete =$mysqlClient ->prepare ("SELECT * FROM Kickz");
          $requete->execute();
          echo '<table border="1" style="text-align: center">';
          echo '<tr>
          
          <th>Références</th>
          <th>Noms</th>
          <th>Descriptions</th>
          <th>Prix d achat unitaire en €</th>
          <th>Prix de vente unitaire en €</th>
          <th>Quantité en stock</th>
          <th>id</th>
          </tr>';
          while($resulta = $requete->fetch(PDO:: FETCH_ASSOC)){
            
            echo '<tr>
            <td>' . $resulta['Name'] . '</td>
            <td>' . $resulta['Price'] . '</td>
            <td>' . $resulta['Image'] . '</td>
            <td>' . $resulta['Quantity'] . '</td>
            <td>' . $resulta['Description'] . '</td>
            <td>' . $resulta['Genre'] . '</td>
            <td>' . $resulta['id'] . '</td>
            <td><a href="?page=Delete&id='.$resulta['id'].'">Effacer</a></td>
            <td><a href="?page=Modif&id='.$resulta['id'].'">Modifier</a></td>
            </tr>';
          }
          echo '</table>';
          ?>
</body>
</html>
