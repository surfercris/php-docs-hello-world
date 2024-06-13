
<?php include('header.php');?>
<?php include('dbfilme.php'); ?>
<?php include('dbfilmes.sql'); ?>
<?php include('db_connection.php'); ?>


    <div class="box1">
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Adicionar</button>
    </div>
      <table class="table table-hover table-bordered table-striped">
      <thead>
    <tr>
    <th>Titulo</th>
    <th>Ano</th>
    <th>Diretor</th>
    <th>Genero</th>
    <th>Duracao</th>
    <th>Classificação</th>
    <th>Atualizar</th>
    <th>Apagar</th>
    </tr>
    </thead>
    <!-- conexao -->
    <tbody>
        <?php
        $query = "select * from `filmes`";
        $result = mysqli_query($connection, $query);

        if (!$result){
           die("query failed".mysqli_error());

        }
        else
        {
        while($row = mysqli_fetch_assoc($result)) 
        {
            ?>
            <!-- tabela com buttao atualizar e apagar  -->
 <tr>
    <td><?php echo $row['Titulo'];?></td>
    <td><?php echo $row['Ano'];?></td>
    <td><?php echo $row['Diretor'];?></td>
    <td><?php echo $row['Genero'];?></td>
    <td><?php echo $row['Duracao'];?></td>
    <td><?php echo $row['Classificação'];?></td>
    <td><a href="atualizar_dados.php?Titulo=<?php echo $row ['Titulo']; ?>" class="btn btn-success">Atualizar</a></td>
    <td><a href="apagar_dados.php?Titulo=<?php echo $row ['Titulo']; ?>" class="btn btn-danger">Apagar</a></td>
</tr>
            <?php 
             
        }
       
    }
        ?>
   

    </tbody>
</table>
<!-- mensagens de verificar  -->
<?php

  if(isset($_GET['message'])){
    echo"<h6>".$_GET['message']."</h6>";

}
?>

<?php

  if(isset($_GET['insert_msg'])){
    echo"<h6>".$_GET['insert_msg']."</h6>";

}
?>

<!-- Modal -->
<form action="inserir_dados.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
            <div class="form-group">
                <label for="t_name">Titulo</label>
                <input type="text" name="t_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="age">Ano</label>
                <input type="text" name="age" class="form-control">
            </div>
            <div class="form-group">
                <label for="d_name">Diretor</label>
                <input type="text" name="d_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="gener">Genero</label>
                <input type="text" name="gener" class="form-control">
            </div>
            <div class="form-group">
                <label for="duration">Duracao</label>
                <input type="text" name="duration" class="form-control">
            </div>
            <div class="form-group">
                <label for="rate">Classificação</label>
                <input type="text" name="rate" class="form-control">
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <input type="submit" class="btn btn-success" name="add_movie" value="ADD"></input>
      </div>
    </div>
  </div></div>
  </form>
<?php include('footer.php');?>
