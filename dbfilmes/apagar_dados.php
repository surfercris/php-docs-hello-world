
<?php include('dbfilme.php'); ?>
<?php

if(isset($_GET['Titulo'])){ 
 $titulo = $_GET['Titulo'];

$query = "delete from `filmes` where `Titulo` ='$titulo'";

$result = mysqli_query($connection, $query);

if(!$result){
die("Query Failed".mysqli_error());
}
else{
    header('location:index.php?delete_msg=You have deleted the record.');
}


 }
?>
