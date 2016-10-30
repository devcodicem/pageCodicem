<?php
if($_GET["oper"] && $_GET["oper"]=="cotiz")
	{
		if(!empty($_POST['nom']) && !empty($_POST['co']) && !empty($_POST['numer']) && !empty($_POST['coment']))
		{
				//detalles de envío
				include("detail_send.php");

					//comprobamos si el mail se envio correctamente y devolvemos la respuesta al servidor
					if(!$mail->send())
					{
						echo "<script type='text/javascript'>alert('Su solicitud no pudo ser procesada en estos momentos, por favor intente mas tarde.'); window.location='/'</script>";
					}else
					{
						echo "<script type='text/javascript'>alert('Su solicitud ha sido enviada exitosamente, le estaremos respondiendo en las proximas horas.'); window.location='/'</script>";
					}

			}else
			{
			//header('location:index.php?controlador=cargar_equipos&oper=carga_equipo&errf=1');
				echo "<script type='text/javascript'>window.location='/'</script>";
			}
	}else
	{
		echo "<script type='text/javascript'>window.location='/'</script>";
	}
?>
