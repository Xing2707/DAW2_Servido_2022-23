
<?php
session_start();
if(isset($_SESSION['user']) || $_SESSION['user']=""){
  header("logation : login.php?error=Area privada&url=premio,php");
  exit;
}

?>
<html>
<head>
  <link rel="stylesheet" type="text/css" media="all" href="css/estilo.css">
</head>
<body>
<h1>Bienvenido!!</h1>
<?php include('menu.php')?>
<p>Información solo para gente autentificada</p>
</body>
</html>