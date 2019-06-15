<?php
require_once 'Conexion.php';
//Funcion para usar sessiones.
session_start();
//Nueva clase.
class Rol {
	public $id;
	public $titulo;
	private $conexion;
        //Constructor.
	public function __construct () {
		$this->id = 0;
		$this->titulo = '';
                $this->texto = '';
                $this->foto = '';
                $this->fecha = '';
		$this->conexion = new Conexion();
	}
        
        //Funcion para mostrar todos los elementos del actual usuario.
	public static function listar () {
		$conexion = new Conexion ();
		$listado = $conexion->consultar("SELECT * FROM publicaciones WHERE id_usuario =" . $_SESSION['id_usuario']);
		$conexion->cerrar();
		return $listado;
	}
        
        //Funcion para obtener el id para eliminacion y edicion.
	public static function obtenerPorId ($id) {
		$conexion = new Conexion ();
		$listado = $conexion->consultar("SELECT * FROM publicaciones WHERE id_publicacion = $id");
		$conexion->cerrar();
		return $listado[0];
	}

        //Funcion para eliminar datos.
	public function eliminar () {
		$s = "DELETE FROM publicaciones WHERE id_publicacion = $this->id";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}
        
        //Funcion para editar datos.
	public function editar () {
		$s = "UPDATE publicaciones SET titulo = '$this->titulo', texto = '$this->texto' WHERE id_publicacion = $this->id";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}
}