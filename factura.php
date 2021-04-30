<!DOCTYPE html>
<html>
<head>
	<title> F A C T U R A </title>
</head>
<body background="ImgTecno1.jpeg"> 


<style>
	.c1{
    background-color: #7ECCF6;
    color: white;
    padding: 17px 37px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
    position: absolute;
    left: 42%;
    top: 46%;
    border-radius: 10px;
    color: white;
     
}

.c1:hover {
background-color:#2BB5FF ;
color: black;
}

	.c2{
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
    left: 41%;
    top: 58%;
    border-radius: 10px;
    color: white;
     
}

.c2:hover {
background-color:#2BB5FF ;
color: black;
}


	.c3{
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
    top: 35%;
    border-radius: 10px;
    color: white;
     
}

.c3:hover {
background-color:#2BB5FF ;
color: black;
}

.c4{
    background-color: #7ECCF6;
    color: white;
    padding:3px 2px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
    position: absolute;
    left: 40%;
    top: 37%;
    border-radius: 10px;
    color: white;
     
}

.c4:hover {
background-color:#2BB5FF ;
color: black;
}

.C5{
     position: absolute;
    top: 11%;
    left: 36%;
    font-size: 66px;

         	}


	
</style>





        <p class="C5">¡BUSCAR!</p>

        <form action="search.php" method="POST">
    <div class="c4"><input type="text" id="name" name="Nombre" placeholder="ID " required=""></div>
    <button class="c1"><input type="submit" value="Buscar"></button>
    <div class="c3"><input type="reset" value="Limpiar"></div>
        
        </form>
         

        
	    <button class="c2"><a href="index.php"> VOLVER </a></button>

</body>
</html>