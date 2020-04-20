<?php
//Este debe ejecutar un metodo que va a estar en ese controlador que va estar en index.php a travez de un objeto
require_once "controladores/plantilla.controlador.php";

//se crea un objeto llamado $plantilla
//index.php a travez de su objeto plantilla esta invocando la clase que se encuentra plantilla.controlador
$plantilla = new ControladorPlantilla();
//ya se pueden ejecutar metodos que tenga esa clase
$plantilla -> ctrPlantilla();