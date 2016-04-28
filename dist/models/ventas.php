<?php

class ventas
{
	$id;
	$producto;
	$cantidad;
	$fecha;

	public function __construct($i, $prod, $cant, $fec)
	{
		$this->id = $i;
		$this->producto = $prod;
		$this->cantidad = $cant;
		$this->fecha = $fec;
	}

	public static function readVentas()
	{
		$db = Db::getInstance();
		$v = []
		$req = $db->prepare('SELECT * , producto.nombre FROM ventas
							INNER JOIN producto ON ventas.id_producto = producto.id_producto');
		$req->execute();
		foreach($req->fetchAll() as $item)
		{
			$v[] = new ventas($item['id_ventas'], $item['nombre'], $item['cantidad'], $item['fecha']);
		}
		return $v;
	}

	public static function creVenta($idp, $cant)
	{
		$fec = date('d/m/Y');
		$db = Db::getInstance();
		$req = $db->prepare('INSERT into ventas(id_producto, cantidad, fecha) VALUES(:idpre, :cant, :fec)');
		$req->execute(array(':idpre' => $idp, ':cant' => $cant, ':fec' => $fec));
	}
}

?>
