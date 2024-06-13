<?php
include 'dbfilme.php';
if(isset($_POST['add_movie'])){
   
    $t_name= $_POST['t_name'];
    $year= $_POST['year'];
    $dname= $_POST['d_name'];
    $gener= $_POST['gener'];
    $duration= $_POST['duration'];
    $rate= $_POST['rate'];
    
   if($t_name == "" || empty($t_name)){ 
   
    header('location:index.php?message=You need to fill in the first name!');
  }

  else{
    $query="insert into `filmes` (`Titulo`, `Ano`, `Diretor`, `Genero`, `Duracao`, `Classificação`) values('$t_name', '$year', ' $dname', ' $gener', '$duration', '$rate')";

 $result = mysqli_query($connection,$query);
 if (!$result){
    die("Query Failed".mysqli_error());
}
  else{
    header('location:index.php?insert_msg=You data has been added successfully!');
  }
}


}
?>