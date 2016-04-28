<?php
	class almacen
	{
		public $id;
		public $nombre;

		public function __construct($i, $nom)
		{
			$this->id = $i;
			$this->nombre = $nom;
		}

		public static function readAlmacen()
		{
			$v = array();
			$db = Db::getInstance();
			$req = $db->prepare('SELECT * FROM almacen');
			$req->execute();
			foreach($req->fetchAll() as $item)
			{
				$v[] = new almacen($item['id_almacen'], $item['nombre']);
			}
			return $v;
		}

		public static function creAlmacen($nom)
		{
			$db = Db::getInstance();
			$req = $db->prepare('INSERT into almacen(nombre) VALUES(:nomb)');
			$req->execute(array(':nomb' => $nom));
		}

		public static function updAlmacen($nom, $id)
		{
			$db = Db::getInstance();
			$req = $db->prepare('UPDATE almacen SET nombre = :nomb WHERE id_almacen = :id');
			$req->execute(array(':nomb' => $nom, ':id' => $id));
		}

		public static function delAlmacen($id)
		{
			$db = Db::getInstance();
			$req = $db->prepare('DELETE FROM almacen WHERE id_almacen = :id');
			$req->execute(array(':id' => $id));
		}
	}
?>
