<?php include "../vars.php"; ?>
<?php include "estilos.php"; ?>
<?php include "opciones.php"; ?>
<div class="container">
<?php
$state = false;
if ($_POST['action'] == "add") { 
include "../consultabasica.php";


if ($_FILES['archivo']["error"] > 0)
  {

  echo "Error: " . $_FILES['archivo']['error'] . "<br>";

  }

else

  {

$fechayhora=$_POST['ANIOFECHA']."-".$_POST['MESFECHA']."-".$_POST['DIAFECHA']." ".$_POST['HORA'];

$que = "INSERT INTO fotos (EPIGRAFE, URL, AUTOR, ALBUM) ";
$que.= "VALUES ('".$_POST['EPIGRAFE']."','".$_FILES['archivo']['name']."' , '".$_POST['AUTOR']."','".$viewart."') ";
$res = mysql_query($que, $conexion) or die(mysql_error());
$state = true;
echo "REGISTRO GRABADO";


  echo "Nombre: " . $_FILES['archivo']['name'] . "<br>";

  echo "Tipo: " . $_FILES['archivo']['type'] . "<br>";

  echo "Tama?o: " . ($_FILES["archivo"]["size"] / 1024) . " kB<br>";

  echo "Carpeta temporal: " . $_FILES['archivo']['tmp_name'];
  
  move_uploaded_file($_FILES['archivo']['tmp_name'],"../../material/2014/" . $_FILES['archivo']['name']);
}



} 
if($state === false)
{
echo '<div class="marco-formulario">';
include "form-foto.php"; 
 echo '</div>'; 
}

?>
</div>