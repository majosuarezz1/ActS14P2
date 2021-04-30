<!DOCTYPE html>
<html>
<head>
	<title> S E A R C H </title>
</head>
<body background="ImgTecno1.jpeg"> 

     <?php

              $A=$_POST['Nombre'];
              $B=$_POST['Nombre'];

      $conex=new mysqli("sql306.tonohost.com", "ottos_2840618", "ZL4VHbsx_Ur7BUf", "ottos_2840618_Act1");
      $sql="SELECT * FROM tabla1 WHERE id='$B'";
      $ejecutar=mysqli_query($conex,$sql);
      $dato=$ejecutar->fetch_assoc(); //VECTOR

     ?>

     <style>
     	.d1{
    background-color: #7ECCF6;
    color: white;
    padding: 13px 35px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
    position: absolute;
    left: 65%;
    top: 41%;
    border-radius: 10px;
    color: white;
     
}

.d1:hover {
background-color:#2BB5FF ;
color: black;
}

   	.d2{
    background-color: #7ECCF6;
    color: white;
    padding: 4px 5px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
    position: absolute;
    left: 18%;
    top: 43%;
    border-radius: 10px;
    color: white;
     
}

.d2:hover {
background-color:#2BB5FF ;
color: black;
}
	.d3{
    background-color: #7ECCF6;
    color: white;
    padding: 4px 5px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
    position: absolute;
    left: 33%;
    top: 43%;
    border-radius: 10px;
    color: white;
     
}

.d3:hover {
background-color:#2BB5FF ;
color: black;
}
	.d4{
    background-color: #7ECCF6;
    color: white;
    padding: 4px 5px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
    position: absolute;
    left: 48%;
    top: 43%;
    border-radius: 10px;
    color: white;
     
}

.d4:hover {
background-color:#2BB5FF ;
color: black;
}

.d5{
     position: absolute;
    top: 11%;
    left: 25%;
    font-size: 66px;

         	}


     	}
     </style>


     <p class="d5">¡MODIFICAR!</p>

 <form action="mod.php?id=<?php echo($dato['id'])?>" method="POST">
 	<div class="d2"><input type="text" name="nombre" placeholder="Nombre" required="" value="<?php echo $dato['Nombre'];?>"></div>
 	<div class="d3"><input type="text" name="stock" placeholder="Stock" required="" value="<?php echo $dato['Stock'];?>"></div>
    <div class="d4"><input type="text" name="precio" placeholder="Precio" required="" value="<?php echo $dato['Precio'];?>"></div>
  

      <button class="d1"><input type="submit" value="Modificar"></button> 

 </form>

</body>
</html>