<?php

	class producto {
		public $nombre;
		public $id;
		public $precio;

		private function __construct($nom, $i, $pre)
		{
			$this->nombre = $nom;
			$this->id = $i;
			$this->precio = $pre;
		}
	}

	static function showProduct(){

		$db = new Db::getInstance();
		$v = []
		$req = $db->prepare('SELECT id_producto, nombre, precio.precio as precio FROM
							producto inner join precio on producto.id_precio = precio.id_precio');
		$req->execute();
		foreach($req->fetchhAll() as $item){
			$v = new producto($item['nombre'], $item['id_producto'], $item['precio']);
		}

		return $v;
	}

	static function saveProduct($nomb, $idpre){
		$db = new Db::getInstance();
		$req = $db->prepare('INSERT into producto(id_precio, nombre) VALUES(:idpre, :nomb)');
		$req->execute(array(':idpre' => $idpre, ':nomb' => $nomb));
	}
?>
