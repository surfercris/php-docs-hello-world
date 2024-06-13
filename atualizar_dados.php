 <!-- ligacao de paginas  -->
<?php include 'header.php';?>
<?php include 'dbfilme.php';?>
<?php include('db_connection.php');?>

<?php
$connection = new mysqli("localhost", "root", "", "dbfilmes");
 if (isset($_GET['Titulo'])) {
    $titulo = $_GET['Titulo'];

    $query = "SELECT * FROM `filmes` WHERE `Titulo` = '$titulo'";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($connection));
    } else {
        $row = mysqli_fetch_assoc($result);
        if (!$row) {
            die("No data found for the title: " . htmlspecialchars($titulo));
        }
    }
}

if (isset($_POST['update_movie'])) {
    if (isset($_GET['titlenew'])) {
        $titulonew = $_GET['titlenew'];
    }
    $tchange = $_POST['t_nameup'];
    $yearchange = $_POST['yearup'];
    $dchange = $_POST['d_nameup'];
    $generchange = $_POST['generup'];
    $durationchange = $_POST['durationup'];
    $ratechange = $_POST['rateup'];

    $query = "UPDATE `filmes` SET 
        `Titulo` = '$tchange', 
        `Ano` = '$yearchange', 
        `Diretor` = '$dchange', 
        `Genero` = '$generchange', 
        `Duracao` = '$durationchange', 
        `Classificação` = '$ratechange' 
        WHERE `Titulo` = '$titulo'";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($connection));
    } else {
        header('Location: index.php?update_msg=conseguiste atualizar.');
        exit;
    }
}
?>

<form action="atualizar_dados.php?titlenew=<?php echo htmlspecialchars($titulo); ?>" method="post">
    <div class="form-group">
        <label for="t_nameup">Titulo</label>
        <input type="text" name="t_nameup" class="form-control" value="<?php echo htmlspecialchars($row['Titulo']); ?>">
    </div>
    <div class="form-group">
        <label for="yearup">Ano</label>
        <input type="text" name="yearup" class="form-control" value="<?php echo htmlspecialchars($row['Ano']); ?>">
    </div>
    <div class="form-group">
        <label for="d_nameup">Diretor</label>
        <input type="text" name="d_nameup" class="form-control" value="<?php echo htmlspecialchars($row['Diretor']); ?>">
    </div>
    <div class="form-group">
        <label for="generup">Genero</label>
        <input type="text" name="generup" class="form-control" value="<?php echo htmlspecialchars($row['Genero']); ?>">
    </div>
    <div class="form-group">
        <label for="durationup">Duracao</label>
        <input type="text" name="durationup" class="form-control" value="<?php echo htmlspecialchars($row['Duracao']); ?>">
    </div>
    <div class="form-group">
        <label for="rateup">Classificação</label>
        <input type="text" name="rateup" class="form-control" value="<?php echo htmlspecialchars($row['Classificação']); ?>">
    </div>
    <input type="submit" class="btn btn-success" name="update_movie" value="Atualizar">
</form>


<?php include 'footer.php';?>
