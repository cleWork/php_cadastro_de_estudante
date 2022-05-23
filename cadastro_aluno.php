<?php
  //Inclusão do arquivo de banco de dados
  include "database.php";
  //Recuperar as informação do formulário
  $students_name  = $_POST["student_name"];
  $students_email  = $_POST["student_email"];
  $students_password = $_POST["student_password"];
  $students_cell  = $_POST["student_cell"];

  //echo $students_name, $students_email, $students_password, $students_cell;
  
  //String em SQL
  $sql = "INSERT INTO sge_students (students_name, students_email, students_password, students_cell) VALUES ('$students_name', '$students_email', '$students_password', '$students_cell')";

  //Realizar o cadastro no banco de dados
  if(mysqli_query($conexao, $sql))
  {
    header("Location: index.php");
  }
  else
  {
    echo "Falha ao cadastrar usuario";
  }
?>

