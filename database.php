<?php
  
  //declarando uma constante para o acesso ao banco de dados
  define("SERVER_LOCAL","localhost");
  define("SERVER_USER","root");
  define("SERVER_PASSWORD","");
  define("DATABASE_NAME","sge");

  $conexao = mysqli_connect(SERVER_LOCAL,SERVER_USER,SERVER_PASSWORD,DATABASE_NAME);
  

?>