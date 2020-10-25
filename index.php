<?php include("db.php") ?>
<?php include("include/header.php") ?>
<main class="container p-4">
  <div class="row">
    <div class="col-md-4">

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- AÑADIR PRODUCTO -->
      <div class="card card-body">
        <form action="save.php" method="POST">
          <div class="form-group">
            <input type="text" name="Nombredeproducto" class="form-control" placeholder="Nombre de producto" autofocus required>
          </div>
          <div class="form-group">
            <input type="text" name="Referencia" class="form-control" placeholder="Referencia" autofocus  required>
          </div>
          <div class="form-group">
            <input type="text" name="Precio" class="form-control" placeholder="Precio" autofocus min="1" pattern="^[0-9]+" required>
          </div>
          <div class="form-group">
            <input type="text" name="Peso" class="form-control" placeholder="Peso" autofocus min="1" pattern="^[0-9]+" required>
          </div>
          <div class="form-group">
            <input type="text" name="Categoria" class="form-control" placeholder="Categoria" autofocus required>
          </div>
          <div class="form-group">
            <input type="text" name="Stock" class="form-control" placeholder="Stock" autofocus min="1" pattern="^[0-9]+" required>
          </div>
          <input type="submit" name="saveproduct" class="btn btn-success btn-block" value="Save Product" required>
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre de producto</th>
            <th>Referencia</th>
            <th>Precio</th>
            <th>Peso</th>
            <th>Categoria</th>
            <th>Stock</th>
            <th>Fecha ùltima venta</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM producto";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['Nombredeproducto']; ?></td>
            <td><?php echo $row['Referencia']; ?></td>
            <td><?php echo $row['Precio']; ?></td>
            <td><?php echo $row['Peso']; ?></td>
            <td><?php echo $row['Categoria']; ?></td>
            <td><?php echo $row['Stock']; ?></td>
            <td><?php echo $row['Fechadeultimaventa']; ?></td>
            <td>
              <a href="edit.php?ID=<?php echo $row['ID']?>" class="btn btn-secondary" >
                <!-- <i class="fas fa-marker"></i> -->
                Editar
              </a>
              <br>
              
              </br>
              <a href="delete.php?ID=<?php echo $row['ID']?>" class="btn btn-danger">
                <!-- <i class="far fa-trash-alt"></i> -->
                Borrar
              </a>
              <br>
              
              </br>
              <a href="sale.php?ID=<?php echo $row['ID']?>" class="btn btn-secondary" >
                <!-- <i class="fas fa-marker"></i> -->
                Vender
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>






