<?php
include("db.php");
$title = '';
$description= '';

if  (isset($_GET['ID'])) {
  $id = $_GET['ID'];
  $query = "SELECT * FROM producto WHERE ID=$id";
  
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    if( $row['Stock'] > 0){
    $Nombredeproducto = $row['Nombredeproducto'];
    $Referencia = $row['Referencia'];
    $Precio = $row['Referencia'];
    $Peso = $row['Peso'];
    $Categoria = $row['Categoria'];
    $Stock = $row['Stock'] - 1;//Se le resta uno al stock
    $Fechadecreacion = $row['Fechadecreacion'];
    $Fechadeultimaventa = $row['Fechadeultimaventa'];
//Para crear el query

      $query = "UPDATE producto 
      set Nombredeproducto = '$Nombredeproducto', 
      Referencia = '$Referencia' ,
      Precio = '$Precio',
      Peso = '$Peso',
      Categoria = '$Categoria',
      Stock = '$Stock',
      Fechadecreacion = DEFAULT,
      Fechadeultimaventa = '$Fechadeultimaventa'
      WHERE ID=$id";
      echo $query;
      mysqli_query($conn, $query);
      $_SESSION['message'] = 'Task Updated Successfully';
      $_SESSION['message_type'] = 'warning';
      header('Location: index.php');
      }else{
        echo'<script type="text/javascript">
        alert("No hay productos en stock");
        window.location.href="index.php";
        </script>';
      }
}
  }


// if (isset($_POST['update'])) {

//   $id = $_GET['ID'];
//   $Nombredeproducto = $_POST['Nombredeproducto'];
//   $Referencia = $_POST['Referencia'];
//   $Precio = $_POST['Referencia'];
//   $Peso = $_POST['Peso'];
//   $Categoria = $_POST['Categoria'];
//   $Stock = $_POST['Stock'];
//   //$Fechadecreacion = $_POST['Fechadecreacion'];//Se genera solo en BD
//   $Fechadeultimaventa = $_POST['Fechadeultimaventa'];

//   $query = "UPDATE producto 
//   set Nombredeproducto = '$Nombredeproducto', 
//   Referencia = '$Referencia' ,
//   Precio = '$Precio',
//   Peso = '$Peso',
//   Categoria = '$Categoria',
//   Stock = '$Stock',
//   Fechadecreacion = DEFAULT,
//   Fechadeultimaventa = '$Fechadeultimaventa'
//   WHERE ID=$id";
//   echo $query;
//   mysqli_query($conn, $query);
//   $_SESSION['message'] = 'Task Updated Successfully';
//   $_SESSION['message_type'] = 'warning';
//   header('Location: index.php');
// }

?>

<!-- <?php include('include/header.php'); ?> -->
<!-- <div class="container p-4">
  <div class="row">
      <form action="sale.php?ID=<?php echo $_GET['ID']; ?>" method="POST">
        <div class="form-group">
          <input name="Nombredeproducto" type="text" class="form-control" value="<?php 
          echo $Nombredeproducto; ?>" placeholder="Actualizar nombre de producto" disabled>
        </div>
        <div class="form-group">
          <input name="Referencia" type="text" class="form-control" value="<?php 
          echo $Referencia; ?>" placeholder="Actualizar Referencia" disabled>
        </div>
        <div class="form-group">
          <input name="Precio	" type="text" class="form-control" value="<?php 
          echo $Precio; ?>" placeholder="Actualizar Precio	" disabled>
        </div>
        <div class="form-group">
          <input name="Peso" type="text" class="form-control" value="<?php 
          echo $Peso; ?>" placeholder="Actualizar Peso" disabled>
        </div>
        <div class="form-group">
          <input name="Categoria" type="text" class="form-control" value="<?php 
          echo $Categoria; ?>" placeholder="Actualizar Categoria" disabled>
        </div>
        <div class="form-group">
          <input name="Stock" type="text" class="form-control" value="<?php 
          echo $Stock; ?>" placeholder="Actualizar Stock" disabled>
        </div>
        <div class="form-group">
            <input type="date" name="Fechadeultimaventa" class="form-control" 
            value="<?php echo $Fechadeultimaventa; ?>" 
            placeholder="Fecha de ultima venta" autofocus disabled>
        </div>

        <button class="btn-success" name="update">
          Update
</button>
      </form>
  </div>
</div> -->
<!-- <?php include('include/footer.php'); ?> -->