<!DOCTYPE html>
<html>
<head>
	<title> E L I M I N A R  O  I N S E R T A R </title>
</head>
<body background="ImgTecno1.jpeg"> 
     
         <?php
       
       $conex=new mysqli("sql306.tonohost.com", "ottos_2840618", "ZL4VHbsx_Ur7BUf", "ottos_2840618_Act1");
       $Nombre="Estetoscopio";
       $Precio=23000;
       $Stock=7;

      // $sql="INSERT INTO tabla1 VALUES (Null, '$Nombre', '$Precio', '$Stock')";
       $sql="DELETE FROM tabla1 WHERE id='17' ";

     $ejecutar=mysqli_query($conex, $sql);

         ?>



         <style>
         	.b1{
     position: absolute;
    top: 17%;
    left: 39%;
    font-size: 70px;

         	}

         	.b2{
    background-color: #7ECCF6;
    color: white;
    padding: 19px 42px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
    position: absolute;
    left: 42%;
    top: 40%;
    border-radius: 10px;
    color: white;
     
}

.b2:hover {
background-color:#2BB5FF ;
color: black;
}


         </style>

              <p class="b1">¡LISTO!</p>

                 <a href="index.php"><button class="b2">VOLVER </button></a>

</body>
</html>