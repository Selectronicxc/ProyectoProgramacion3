
<html>
<head>
<meta charset="UTF-8">
<title> Inicio </title>
<link href ="login.css" rel ="stylesheet" type ="text/css">
</head>
<body>
<section id="Formulario">
<center><h1><MARQUEE> INICIAR SESION</MARQUEE> </h1></center>
<br>
<br>	
<div class ="login">
<form action ="../controller/login.php" method= "POST" > 
<center>    
    <fieldset>       
        <legend><H2>INGRESE SUS DATOS</H2></legend>	
		<p>
                    <input title = "se necesita el nombre" type = "text" name = "usuario" placeholder = "usuario" required>
                </p> 
                <p>
                    <input  title = "se necesita la contraseÃ±a" type = "password" name = "pass" placeholder = "password" required>
                </p> 
                <p>
                   <input  type = "submit" value = "Entrar"> 
                   <input  type = "reset" value = "Limpiar"> 
                </p>               
                <p>
                    <a href ="crear.html">
                       <H3>CREAR CUENTA NUEVA</H3>
                    </a>
                </p>
</fieldset>
</center>
</form>	
</div>
</section>
</body>
</html>