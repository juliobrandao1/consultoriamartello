<!DOCTYPE html>
<html>
	<head>
		 <link rel="stylesheet" href="css/colorbox.css">
   		<script src="js/jquery-1.11.3.min.js"></script>
    		<script src="js/jquery.colorbox-min.js"></script>
		
		<link rel="stylesheet" href="css/style.css" type="text/css" />
		
<title>- CONSULTORIA MARTELLO -</title>
	</head>

<body onLoad="">
	

	<div id="geral">
	 <div id="titulo">
			
		<br><h1></h1>
		<p>Tornando seu dinheiro um aliado.</p>
	 </div>
	


	

<div id="menu">
	
	<a href="index.php"><img src="logos/martelo.png" alt="logo" />Home</a> 
	<a href="sobre.php"><img src="logos/martelo.png" alt="logo" />Sobre</a>
	<a href="videos.php"><img src="logos/martelo.png" alt="logo" />Video-Aulas</a>
	<a href="servicos.php"><img src="logos/martelo.png" alt="logo" />Serviços</a>
	<a href="contato.php"><img src="logos/martelo.png" alt="logo" />Contato</a>
	<a href="videos.php" onClick="alerta()"><img src="logos/martelo.png" alt="logo"/>Acesso Exclusivo</a>

	</div>
	
	
 
		
 <div id="palestras">
     
	<h2> Palestras</h2>
	<h2>
    01-<a class='gallery' href="https://www.youtube.com/embed/Rao-atUn71g"><img src="fotos/palestra.jpg"></a>
    </h2>
</div>

<div id="aulas">
	<h2> Aulas - Módulo 1</h2>

<h2>
 01-<a class='gallery' href="https://www.youtube.com/embed/VsPS8ogW6fY"><img src="fotos/aula1.jpg"></a>
 02-<a class='gallery' href="https://www.youtube.com/embed/tGsCHXDRKEk"><img src="fotos/aula2.jpg"></a>
 03-<a class='gallery' href="https://www.youtube.com/embed/7w0c08TUGOc"><img src="fotos/aula3.jpg"></a>
 04-<a class='gallery' href="https://www.youtube.com/embed/F2gOZ46aGFI"><img src="fotos/aula4.jpg"></a><br>
 05-<a class='gallery' href="https://www.youtube.com/embed/TQP1t7ivKMw"><img src="fotos/aula5.jpg"></a>
 06-<a class='gallery' href="https://www.youtube.com/embed/IlPRzmv_w24"><img src="fotos/aula6.jpg"></a>
 07-<a class='gallery' href="https://www.youtube.com/embed/y0lqu4tbTgw"><img src="fotos/aula7.jpg"></a>
 08-<a class='gallery' href="https://www.youtube.com/embed/DOJ6K02t3mc"><img src="fotos/aula8.jpg"></a><br>
 09-<a class='gallery' href="https://www.youtube.com/embed/phH5-RmqTOg"><img src="fotos/aula9.jpg"></a>
 10-<a class='gallery' href="https://www.youtube.com/embed/YcDhTbUE7v8"><img src="fotos/aula10.jpg"></a>
 11-<a class='gallery' href="https://www.youtube.com/embed/816atndGnm0"><img src="fotos/aula11.jpg"></a>
</h2>
</div>	
	 <br><br><br>
	<div class="footer">
        Designed by Júlio Brandão
    </div>

</div>



<script language="Javascript" type="text/javascript">
function alerta() {
  alert("Em breve")
}
</script>
<script>
  jQuery('a.gallery').colorbox();
</script>

<script>
      jQuery(document).ready(function () {
        jQuery('a.gallery').colorbox({iframe:true, innerWidth:640, innerHeight:390});
      });
    </script>
	</body>
</html>