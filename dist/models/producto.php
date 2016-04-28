<?php

	class producto {
		public $nombre;
		public $id;
		public $precio;

		public function __construct($nom, $i, $pre)
		{
			$this->nombre = $nom;
			$this->id = $i;
			$this->precio = $pre;
		}

        public static function readProduct()
        {
            $db = Db::getInstance();
            $v = [];
            $req = $db->prepare('SELECT id_producto, nombre, precio.precio as precio FROM
                                producto inner join precio on producto.id_precio = precio.id_precio');
            $req->execute();
            foreach($req->fetchAll() as $item){
                $v[] = new producto($item['nombre'], $item['id_producto'], $item['precio']);
            }
            return $v;
        }

        public static function creProduct($nomb, $idpre)
        {
            $db = Db::getInstance();
            $req = $db->prepare('INSERT into producto(id_precio, nombre) VALUES(:idpre, :nomb)');
            $req->execute(array(':idpre' => $idpre, ':nomb' => $nomb));
        }

        public static function updProduct($val, $id)
        {
            $db = Db::getInstance();
            $req = $db->prepare('UPDATE producto SET nombre = :val WHERE id_producto = :id');
            $req->execute(array(':val' => $val, ':id' => $id));
        }

        public static function delProduct($id)
        {
            $db = Db::getInstance();
            $req = $db->prepare('DELETE FROM producto WHERE id_producto = :id');
            $req->execute(array(':id' => $id));
        }

	}
?>
