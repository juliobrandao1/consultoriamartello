<?php 
  $user = $_POST['user'];
  $entrar = $_POST['entrar'];
  $pass = $_POST['pass'];
  $connect = mysql_connect('127.0.0.1','root');
  $db = mysql_select_db('db_disciplinacao');
   
    if (isset($entrar)) {
            
      $verifica = mysql_query("SELECT * FROM login WHERE user = '$user' and pass = '$pass'") or 	die("erro ao selecionar");
       $rowcount = mysql_num_rows($verifica); 
	

	if ($rowcount == 0) {
	echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha 	incorretos'+$rowcount);window.location.href='login.html';</script>";
          die();
          }
	else 
	{
	
	$name = mysql_result(mysql_query("SELECT name FROM login WHERE user = '$user' and pass = 	'$pass'"),0) or die("erro ao selecionar");
	
	 setcookie("name",$name);
          header("Location:sistema.php");
        }
    }
?>