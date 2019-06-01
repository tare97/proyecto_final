<?php
require_once 'Conexion.php';

class Rol {
	public $id;
	public $titulo;
	private $conexion;

	public function __construct () {
		$this->id = 0;
		$this->titulo = '';
                $this->texto = '';
                $this->foto = '';
                $this->fecha = '';
		$this->conexion = new Conexion();
	}

	public static function listar () {
		$conexion = new Conexion ();
		$listado = $conexion->consultar('SELECT * FROM publicaciones');
		$conexion->cerrar();
		return $listado;
	}

	public static function obtenerPorId ($id) {
		$conexion = new Conexion ();
		$listado = $conexion->consultar("SELECT * FROM publicaciones WHERE id_publicacion = $id");
		$conexion->cerrar();
		return $listado[0];
	}


	public function eliminar () {
		$s = "DELETE FROM publicaciones WHERE id_publicacion = $this->id";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function editar () {
		$s = "UPDATE publicaciones SET titulo = '$this->titulo', texto = '$this->texto' WHERE id_publicacion = $this->id";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}
}