<?php
if(isset($_GET["oper"]) && $_GET["oper"]=="nosotros"){
	//llamamos a la vista
	require_once("html/nosotros.php");
	
}else if(isset($_GET["oper"]) && $_GET["oper"]=="desarrollo-web"){

	require_once("html/serviciosweb.php");

}else if(isset($_GET["oper"]) && $_GET["oper"]=="graphic-design"){

	require_once("html/serviciosgraficos.php");

}else if(isset($_GET["oper"]) && $_GET["oper"]=="hosting"){

	require_once("html/servicioserver.php");

}

if($_GET["oper"] && $_GET["oper"]=="cotiz")
	{
		

		if(!empty($_POST['nom']) && !empty($_POST['co']) && !empty($_POST['numer']) && !empty($_POST['coment'])){
				
				//necesarios de correo
				$mail = new PHPMailer;
				//indico a la clase que use SMTP
			        $mail->IsSMTP();
			        //Debo de hacer autenticación SMTP
			        $mail->SMTPAuth = true;
			        $mail->SMTPSecure = "ssl";
			        //indico el servidor de Gmail para SMTP
			        $mail->Host = "smtp.gmail.com";
			        //indico el puerto que usa Gmail
			        $mail->Port = 465;
			        //indico un usuario / clave de un usuario de gmail
			        $mail->Username = "devcodicem@gmail.com";
			        $mail->Password = "devcodicem2016";
			        $mail->SetFrom('devcodicem@gmail.com', 'DevCodicem');
			        $mail->AddReplyTo($_POST['co'],$_POST['nom']);
			
			        $mail->isHTML(true); //Decimos que lo que enviamos es HTML
			        $mail->CharSet = 'UTF-8';  // Configuramos el charset
			        
					$destino = array(
								   "devcodicem@gmail.com" => "Codicem",
								   "g7.alexander@gmail.com" => "Frederick Gonzalez",
								   "cristoferjcolmenares@gmail.com" => "Cristofer Urbina",
								   "draco425@gmail.com" => "Randy Serrano",
								   "cesareadefilipos@gmail.com" => "Jhoan Zabala"
								);
								$asunto = 'Solicitud de presupuesto';

								$mensaje = "Se ha recibido una solicitud de presupuesto del usuario ".$_POST['nom']."<br/>
								Mensaje:<br/>
								".$_POST['coment']."<br/>
								".$_POST['numer']."<br/>
								";
								
					//Agregamos a todos los destinatarios
					foreach ($destino as $correo => $nombre) {
						$mail->addAddress($correo,$nombre);
					}
					
					//Añadimos el asunto del mail
					$mail->Subject = $asunto; 
				
					//Mensaje del email
					$mail->Body = $mensaje;
				
					//comprobamos si el mail se envio correctamente y devolvemos la respuesta al servidor
					if(!$mail->send()) {
						echo "<script type='text/javascript'>alert('Su solicitud no pudo ser procesada en estos momentos, por favor intente mas tarde.'); window.location='/'</script>";
					} else {
						echo "<script type='text/javascript'>alert('Su solicitud ha sido enviada exitosamente, le estaremos respondiendo en las proximas horas.'); window.location='/'</script>";

					} 
					
					
					
			}else{
			//header('location:index.php?controlador=cargar_equipos&oper=carga_equipo&errf=1');
				echo "<script type='text/javascript'>window.location='/'</script>";
		}
	}else{
		echo "<script type='text/javascript'>window.location='/'</script>";
	}

?>


