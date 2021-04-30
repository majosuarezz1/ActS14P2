<!DOCTYPE html>
<html>
<head>
	<title> M O D I F I C A R </title>
</head>
<body background="ImgTecno1.jpeg"> 

   <?php
      
      $ide=$_REQUEST['id'];
      $n=$_POST['nombre'];
      $s=$_POST['stock'];
      $p=$_POST['precio'];
 
 $conex=new mysqli("sql306.tonohost.com", "ottos_2840618", "ZL4VHbsx_Ur7BUf", "ottos_2840618_Act1");
  $sql="UPDATE tabla1 SET Nombre='$n', Stock='$s', Precio='$p' WHERE id='$ide'";
          $ejecutar=mysqli_query($conex,$sql);

      header("location: factura.php"); //Ejecución y devolver a F1.

   ?>


</body>
</html>