<?php
class inventario
{
	public $id;
	public $almacen;
	public $producto;
	public $cantidad;

	public function __construct($i, $alm, $prod, $cant)
	{
		$this->id = $i;
		$this->producto = $prod;
		$this->cantidad = $cant;
		$this->almacen = $alm;
	}

	public static function readInventario()
	{
		$v = array();
		$db = Db::getInstance();
		$req = $db->prepare('SELECT *, producto.nombre as producto, almacen.nombre as almacen FROM r_almacen_producto
							INNER JOIN producto ON producto.id_producto = r_almacen_producto.id_producto
							INNER JOIN almacen ON almacen.id_almacen = r_almacen_producto.id_almacen');
		$req->execute();
		foreach ($req->fetchAll() as $item)
		{
			$v[] = new inventario($item['id_r_ap'], $item['producto'], $item['cantidad'], $item['almacen']);
		}
		return $v;
	}

	public static function borrarProducto($id)
	{
		$db = Db::getInstance();
		$req = $db->prepare('DELETE FROM r_almacen_producto WHERE id_producto = :id');
		$req->execute(array(':id' => $id));
	}

	public static function restar($idp, $cant, $ida)
	{
		$db = Db::getInstance();
		$req = $db->prepare('SELECT * FROM r_almacen_producto WHERE id_producto = :idp AND id_almacen = :ida');
		$req->execute(array(':idp' => $idp, ':ida' => $ida));
		$num = $req->fetch()['cantidad'];
		$num -= $cant;
		if($num < 0)
		{
			$msj = False;
		}
		else
		{
			$req2 = $db->prepare('UPDATE r_almacen_producto SET cantidad = :num');
			$req2->execute(array(':num' => $num));
			$msj = True;
		}
		return $msj;
	}
	public static function filtro($id)
	{
		$req = $db->prepare('SELECT *, producto.nombre as producto, almacen.nombre as almacen FROM r_almacen_producto
						INNER JOIN producto ON producto.id_producto = r_almacen_producto.id_producto
						INNER JOIN almacen ON almacen.id_almacen = r_almacen_producto.id_almacen
						WHERE id_almacen = :id');
		$req->execute(array(':id' => $id));
		foreach ($req->fetchAll() as $item)
		{
			$v[] = new inventario($item['id_r_ap'], $item['producto'], $item['cantidad'], $item['almacen']);
		}
		return $v;
	}
}

?>
