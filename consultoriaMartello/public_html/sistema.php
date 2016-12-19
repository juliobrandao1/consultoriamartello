<html>
	<head>
		<title>- Disciplina Canina -</title>
		<link rel="stylesheet" href="style.css" type="text/css" />
	</head>

	<body>
	 <div id="titulo">
		<img src="logos/logo_mini.png" alt="logo" align="left">
	
		<br><h1> Disciplina Canina - Comportamento animal</h1>
		
	 </div>
	
	<p class="alfa">
	Nós somos Alfa 

	</p>
	

	<div id="menu">
	
	<a href="index.html">Home</a> 
	<a href="sobre.html">Sobre</a>
	<a href="cuidados.html">Cães-Raças e Cuidados</a>
	<a href="agenda.html">Agende seu passeio!</a>
	<a href="contato.html">Contato</a>	
	<a href="login.html">Login</a>

	</div>



<script>
function cadastro() {
    window.location.href = "cadastro.html";
}
</script>


<div id="sistema">
<?php
	header("Content-Type: text/html; charset=ISO-8859-1", true);
  $login_cookie = $_COOKIE['name'];
    if(isset($login_cookie)){
      echo"<h1>Bem-Vindo ao Sistema, $login_cookie </h1><br><br>";
      echo"<h2>O que deseja fazer? <br> </h2> 
	1- <button onclick='cadastro()'>Novo Cadastro</button><br><br>
	2- <button onclick=''>Exibir Cliente</button>";
    }else{
      header("Location:login.html");
    }
?>
</div>
</body>
</html>