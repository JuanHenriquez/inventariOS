<?php
//Arreglar el connection
//Si da error al tratar de borrar un precio, es por que tiene un producto asociado.
class precio
{
	public $id;
	public $precio;

	public function __construct($i, $pre)
	{
		$this->id = $i;
		$this->precio = $pre;
	}

	public static function readPrecio()
	{
		$v = array();
		$db = Db::getInstance();
		$req = $db->prepare('SELECT * FROM precios');
		$req->execute();
		foreach($req->fetchAll() as $item)
		{
			$v[] = new precio($item['id_precio'], $item['precio']);
		}
		return $v;
	}

	public static function crePrecio($pre)
	{
		$db = Db::getInstance();
		$req = $db->prepare('INSERT into precio(precio) VALUES(:pre)');
		$req->execute(array(':pre' => $pre));
	}

	public static function updPrecio($id, $pre)
	{
		$db = Db::getInstance();
		$req = $db->prepare('UPDATE precio SET precio = :pre WHERE id_precio = :id');
		$req->execute(array(':id' => $id, ':pre' => $pre));
	}

	public static function delPrecio($id)
	{
		$db = Db::getInstance();
		$req = $db->prepare('DELETE FROM precio WHERE id_precio = :id');
		$req->execute(array(':id' => $id));
	}

	public static function exisPrecio($pre){
		$db = Db::getInstance();
		$req = $db->prepare('SELECT * FROM precio WHERE precio = :pre');
		$req->execute(array(':pre' => $pre));
		$itm = $req->fetch();

		if($itm){
			return($itm['id_precio']);
		} else {
			precio::crePrecio($pre);
			return(0);
		}
	}

    public static function lastItem(){

        $db = Db::getInstance();
        $req = $db->prepare('SELECT * From precio');
        $req->execute();
        $lastItem = $db->lastInsertId();

        return $lastItem;

    }
}

?>
