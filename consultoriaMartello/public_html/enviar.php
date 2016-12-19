<?php
       $name=$_REQUEST['name'];
    	$email=$_REQUEST['email'];
    	$message=$_REQUEST['message'];
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
        mail("consultoriamartello@hotmail.com", $subject, $message, $from);
        echo "Mensagem enviada!";
        echo '<meta HTTP-EQUIV="Refresh" CONTENT="3; URL=contato.php">';
        
    
?>