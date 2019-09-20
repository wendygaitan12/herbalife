<?php 
ob_start();
if (strlen(session_id()) < 1){
	session_start();//Validamos si existe o no la sesión
}
if (!isset($_SESSION["nombre"]))
{
  header("Location: ../vistas/login.html");//Validamos el acceso solo a los usuarios logueados al sistema.
}
else
{
//Validamos el acceso solo al usuario logueado y autorizado.
if ($_SESSION['acceso']==1)
{
require_once "../modelos/Nivel.php";

$nivel=new Nivel();

$idnivel=isset($_POST["idnivel"])? limpiarCadena($_POST["idnivel"]):"";
$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
$descripcion=isset($_POST["descripcion"])? limpiarCadena($_POST["descripcion"]):"";
$puntos=isset($_POST["puntos"])? limpiarCadena($_POST["puntos"]):"";

switch ($_GET["op"]){
	case 'guardaryeditar':
		if (empty($idnivel)){
			$rspta=$nivel->insertar($nombre,$descripcion,$puntos);
			echo $rspta ? "Nivel Registrado con Exito" : "No se pudo registrar el nivel con Exito";
		}
		else {
			$rspta=$nivel->editar($idnivel,$nombre,$descripcion,$puntos);
			echo $rspta ? "Nivel Actualizado con Exito" : "Nivel no pudo ser actualizado con exito";
		}
	break;

	case 'desactivar':
		$rspta=$nivel->desactivar($idnivel);
 		echo $rspta ? "Nivel Desactivado" : "Nivel pudo ser desactivado";
	break;

	case 'activar':
		$rspta=$nivel->activar($idnivel);
 		echo $rspta ? "Nivel activado con exito " : "Nivel no se pudo activar";
	break;

	case 'mostrar':
		$rspta=$nivel->mostrar($idnivel);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$nivel->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idnivel.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="desactivar('.$reg->idnivel.')"><i class="fa fa-close"></i></button>':
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->idnivel.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-primary" onclick="activar('.$reg->idnivel.')"><i class="fa fa-check"></i></button>',
 				"1"=>$reg->nombre,
 				"2"=>$reg->descripcion,
 				"3"=>$reg->puntos,
 				"4"=>($reg->condicion)?'<span class="label bg-green">Activado</span>':
 				'<span class="label bg-red">Desactivado</span>'
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;
}
//Fin de las validaciones de acceso
}
else
{
  require 'noacceso.php';
}
}
ob_end_flush();
?>