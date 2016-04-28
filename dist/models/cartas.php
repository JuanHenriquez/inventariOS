<?php
	class carta
	{
		public $id; //Relacion
		public $producto;
		public $precio;
		public $cantidad;
		public $almacen;

		public function __construct($i, $prod, $pre, $cant, $alm)
		{
			$this->id = $i;
			$this->producto = $prod;
			$this->precio = $pre;
			$this->cantidad = $cant;
			$this->almacen = $alm;
		}

		public static function readCarta()
		{
			$v = array();
			$db = Db::getInstance();
			$req = $db->prepare('SELECT r_almacen_producto.id_r_ap as id, producto.nombre as producto,
								precio.precio as precio, r_almacen_producto.cantidad as cantidad,
								almacen.nombre as almacen FROM r_almacen_producto
								INNER JOIN producto ON r_almacen_producto.id_producto = producto.id_producto
								INNER JOIN precio ON producto.id_precio = precio.id_precio
								INNER JOIN almacen ON r_almacen_producto.id_almacen = almacen.id_almacen');

			$req->execute();
			foreach($req->fetchAll() as $item)
			{
				$v[] = new carta($item['id'], $item['producto'], $item['precio'], $item['cantidad'], $item['almacen']);
			}
			return $v;
		}
	}
?>
