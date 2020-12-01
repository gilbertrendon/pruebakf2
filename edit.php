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

    $Nombredeproducto = $row['Nombredeproducto'];
    $Referencia = $row['Referencia'];
    $Precio = $row['Precio'];
    $Peso = $row['Peso'];
    $Categoria = $row['Categoria'];
    $Stock = $row['Stock'];
    $Fechadecreacion = $row['Fechadecreacion'];//Se genera solo en BD
    $Fechadeultimaventa = $row['Fechadeultimaventa'];
  }
}

if (isset($_POST['update'])) {

  $id = $_GET['ID'];
  $Nombredeproducto = $_POST['Nombredeproducto'];
  $Referencia = $_POST['Referencia'];
  $Precio = $_POST['Precio'];
  $Peso = $_POST['Peso'];
  $Categoria = $_POST['Categoria'];
  $Stock = $_POST['Stock'];
  //$Fechadecreacion = $_POST['Fechadecreacion'];//Se genera solo en BD
  //$Fechadeultimaventa = $_POST['Fechadeultimaventa'];
 echo $Referencia;
 //echo "asdfsdfasdfasdfasdf";
 if($Precio == NULL){
   $Precio = 1000;
 }
  $query = "UPDATE producto 
  set Nombredeproducto = '$Nombredeproducto', 
  Referencia = '$Referencia',
  Precio = '$Precio',
  Peso = '$Peso',
  Categoria = '$Categoria',
  Stock = '$Stock',
  Fechadecreacion = DEFAULT,
  Fechadeultimaventa = null
  WHERE ID=$id";
  echo $query;
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  //header('Location: index.php');
}

?>
<?php include('include/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <!-- <div class="col-md-4 mx-auto"> -->
      <!-- <div class="card card-body"> -->
      <form action="edit.php?ID=<?php echo $_GET['ID']; ?>" method="POST">
        <div class="form-group">
          <input name="Nombredeproducto" type="text" class="form-control" value="<?php 
          echo $Nombredeproducto; ?>" placeholder="Actualizar nombre de producto" required>
        </div>
        <div class="form-group">
          <input name="Referencia" type="text" class="form-control" value="<?php 
          echo $Referencia; ?>" placeholder="Actualizar Referencia" required>
        </div>
        <div class="form-group">
            <input name="Precio" type="text" class="form-control" value="<?php 
            echo $Precio; ?>" placeholder="Actualizar Precio" required>
        </div>
        <div class="form-group">
          <input name="Peso" type="text" class="form-control" value="<?php 
          echo $Peso; ?>" placeholder="Actualizar Peso" min="1" pattern="^[0-9]+" required>
        </div>
        <div class="form-group">
          <input name="Categoria" type="text" class="form-control" value="<?php 
          echo $Categoria; ?>" placeholder="Actualizar Categoria" required>
        </div>
        <div class="form-group">
          <input name="Stock" type="text" class="form-control" value="<?php 
          echo $Stock; ?>" placeholder="Actualizar Stock" min="1" pattern="^[0-9]+" required>
        </div>

        <button class="btn-success" name="update">
          Update
</button>
      </form>
      <!-- </div> -->
    <!-- </div> -->
  </div>
</div>
<?php include('include/footer.php'); ?>