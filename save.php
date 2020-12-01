<?php

include('db.php');

if (isset($_POST['saveproduct'])) {
    //id ????
  $Nombredeproducto = $_POST['Nombredeproducto'];
  $Referencia = $_POST['Referencia'];
  $Precio = $_POST['Precio'];
  $Peso = 1;//por defecto ya que no sera usado
  //$Peso = $_POST['Peso'];
  $Categoria = $_POST['Categoria'];
  $Stock = 1;
  //$Stock = $_POST['Stock'];
  //$Fechadecreacion = $_POST['Fechadecreacion'];//Se genera solo en BD
  //$Fechadeultimaventa = $_POST['Fechadeultimaventa'];


  $query = "INSERT INTO producto(ID, Nombredeproducto, Referencia, Precio, Peso, Categoria, Stock, Fechadecreacion, Fechadeultimaventa) 
            VALUES (DEFAULT, '$Nombredeproducto', '$Referencia', '$Precio', '$Peso', '$Categoria', '$Stock',DEFAULT, NULL)";
  echo  $query;
  $result = mysqli_query($conn, $query);
  echo  $result;
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Product Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>