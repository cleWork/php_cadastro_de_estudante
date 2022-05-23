<?php
      require_once "header.php";

?>

    <h1>Sistema de Genciamanto Escolar </h1>

    <fieldset>
      <legend>Formulario de cadastro</legend><br><br>
      <form action="cadastro_aluno.php" method="post">

        <label for="student_name">Nome: </label>
        <input type="text" name="student_name" id="student_name"><br><br>
        
        <label for="student_email">E-mail: </label>
        <input type="email" name="student_email" id="student_email"><br><br>
        
        <label for="student_password">Senha: </label>
        <input type="password" name="student_password" id="student_password"><br><br>
        
        <label for="student_cell">Celular: </label>
        <input type="tel" name="student_cell" id="student_cell"><br><br>

        <input type="submit" value="CADASTRAR ALUNO"><br><br>
      </form>
    </fieldset>

<?php include "footer.php"?>