<?php
//conexion
//require_once("db/db.php");
//controlador madre
//require_once("controllers/controlador_madre.php");
//cabeceras html
require_once('vendor/Mailer/PHPMailerAutoload.php');
require_once("views/header_html.php");
//botonera de navegacion y carousel
require_once("views/navbar_html.php");

if(isset($_GET["oper"])){
//mostramos dicho controlador

require_once("controllers/dfct_controller.php");
//$objeto=new Controladores();
//$objeto->cargaControlador($_GET["mnjr"],$_GET["oper"]);
}
//cont central de la web
require_once("views/central_html.php");	
//footer html
require_once("views/footer_html.php");
