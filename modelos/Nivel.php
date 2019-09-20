<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Nivel
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($nombre,$descripcion,$puntos)
	{
		$estado = 1; 
		$sql="INSERT INTO nivel (nombre,descripcion,puntos,condicion)
		VALUES ('$nombre','$descripcion','$puntos','$estado')";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($idnivel,$nombre,$descripcion,$puntos)
	{
		$sql="UPDATE nivel SET nombre='$nombre',descripcion='$descripcion', puntos ='$puntos' WHERE idnivel='$idnivel'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para desactivar nivel
	public function desactivar($idnivel)
	{
		$estado=0;
		$sql="UPDATE nivel SET condicion='$estado' WHERE idnivel='$idnivel'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar nivel
	public function activar($idnivel)
	{
		$estado=1;
		$sql="UPDATE nivel SET condicion='$estado' WHERE idnivel='$idnivel'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idnivel)
	{
		$sql="SELECT * FROM nivel WHERE idnivel='$idnivel'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * FROM nivel";
		return ejecutarConsulta($sql);		
	}
	//Implementar un método para listar los registros y mostrar en el select
	public function select()
	{
		$estado=1;

		$sql="SELECT * FROM nivel where condicion='$estado=1'";
		return ejecutarConsulta($sql);		
	}
}

?>