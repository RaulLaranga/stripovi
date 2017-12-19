<?php
$conn =new mysqli("localhost","root","","prodavnica_stripova");
$filter=isset($_GET['search'])?" where naziv like'{$_GET['search']}%'":"";
$q=$conn->query("select* from stripovi{$filter}");
?>
    <h1>Stripovi</h1>
    <?php
    while($red=$q->fetch_object()){
  echo "<div style='width:200px;;border:5px solid black;padding:4px;margin:4px;border-radius: 20px;'>
    <h4>{$red->naziv}</h4>
    Cena:{$red->cena}rsd</br/>
    <img src='{$red->slika}' style='height: 150px;width: 150px;' />
  </div>";
}


 ?>
 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
<?php

 ?>
