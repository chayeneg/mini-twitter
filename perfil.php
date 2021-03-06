<?php
require_once('verifica-usuario.php');
require_once('conexao.php');
$username = "$auth_username";
$name = "$auth_name";
?>

<html lang="pt-br">
<head>
  <title>Mini-Twitter</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
</head>
  <body>
    <div class="main">
      <div class="titulo">
          <h1>Mini Twitter</h1>
      </div>
      <div id="menu">
        <ul>
          <li> <a onclick="location.href='index.php'"> PÁGINA INICIAL </a> </li>
          <li> <a onclick="location.href='cadastro.php'"> CADASTRAR </a> </li>
          <li> <a onclick="location.href='timeline.php'"> TIMELINE </a> </li>
            <li> <a onclick="location.href='logout.php'"> SAIR  </a> </li>
        </ul><br><br>
      </div>

      <div class="content"><br><br>
              <fieldset>

  <div class="perfil">
      <h1>Perfil</h1>
    <?php
      $sql = "SELECT * FROM users WHERE username = '$username'";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($result)){
        echo "<table id='tabela_infos' style='width:100%'>";
        echo "<tr><strong>Nome completo:</strong> " . $row["name"] . "</tr><br>";
        echo "<tr><strong>Nome de usuário:</strong> " . $row["username"] . "</tr><br>";
        echo "<tr><strong>Email:</strong> " . $row["email"] . "</tr><br>";
        echo "<tr><strong>Data de nascimento:</strong> " . $row["birthDate"] . "</tr><br>";
        echo "<tr><strong>Sexo:</strong> " . $row["sex"] . "</tr><br>";
        echo "<tr><strong>Cidade: </strong>" . $row["city"] . "</tr><br>";
        echo "<tr><strong>Site:</strong> " . $row["website"] . "</tr><br>";
        echo "</table>";
      }
    ?>

    <p>Se você desejar é possível alterar suas informações.</p>
    <input type="button" id="button" value="Alterar" onclick="location.href='alteracao.php'">
</div>
</div>
  </form>

  <br style="clear:both">
      </fieldset>
  <div class="footer">
    Copyright©2018, Fayenel Company.
      <br>Todos os direitos reservados.
  </div>
</body>
</html>
