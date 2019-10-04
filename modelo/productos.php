<?php
include dirname(__file__, 2) . "/config/conexion.php";
/**
 *
 */
class Productos
{
    private $conn;
    private $link;

    public function __construct()
    {
        $this->conn = new Conexion();
        $this->link = $this->conn->conectarse();
    }

    //Trae todos los usuario registrados
    public function getProductos()
    {
        $query = "SELECT * FROM producto
                INNER JOIN ";
        $result = mysqli_query($this->link, $query);
        $data   = array();
        while ($data[] = mysqli_fetch_assoc($result));
        array_pop($data);
        return $data;
    }

    //Trae todas las sucursales
    public function getSucursal()
    {
        $query  = "SELECT * FROM sucursal WHERE estado_sucursal = 1";
        $result = mysqli_query($this->link, $query);
        $data   = array();
        while ($data[] = mysqli_fetch_assoc($result));
        array_pop($data);
        return $data;
    }

    //Trae todas las categorias
    public function getCategoria()
    {
        $query  = "SELECT * FROM categoria WHERE estado_categoria = 1";
        $result = mysqli_query($this->link, $query);
        $data   = array();
        while ($data[] = mysqli_fetch_assoc($result));
        array_pop($data);
        return $data;
    }

    //Crea un nuevo producto
    public function nuevoProducto($data)
    {
        $query  = "INSERT INTO producto (nombre_producto) VALUES ('" . $data['nombre_producto'] . "','" . $data['email'] . "','" . $data['fkID_departamento'] . "','" . $data['fkID_ciudad'] . "','" . $data['fkID_area'] . "')";
        $result = mysqli_query($this->link, $query);
        if (mysqli_affected_rows($this->link) > 0) {
            return true;
        } else {
            return false;
        }
    }

    //Crea un nuevo cliente
    /*public function getLog($usuarioNombre)
{
$query  = "INSERT INTO tb_client (business_name,subscriber,department,municipality) VALUES ('" . $data['business_name'] . "','" . $data['subscriber'] . "','" . $data['department'] . "','" . $data['municipality'] . "')";
$result = mysqli_query($this->link, $query);
if (mysqli_affected_rows($this->link) > 0) {
return true;
} else {
return false;
}
}*/
}
