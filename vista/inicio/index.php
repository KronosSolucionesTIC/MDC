<?php

include '../header.php';

include '../../modelo/productos.php';
$producto = new Productos();

$sucursal  = $producto->getSucursal();
$categoria = $producto->getCategoria();

?>
<div class="wrapper fadeInDown">
<div id="formContent">
<!-- Icon -->
<div class="fadeIn first">
<img src="../../img/logo.png" class="img-fluid">
</div>

<!-- Login Form -->
<form action="../../controllers/Productos_controller.php" method="POST">
<input type="text" id="nombre_producto" class="fadeIn second" name="nombre_producto" placeholder="Nombre del producto">
<input type="text" class="fadeIn third" id="cantidad_producto" name="cantidad_producto" autofocus placeholder="Cantidad" required>
<div id="div_sucursal">
<select name="fkID_sucursal" id="fkID_sucursal" class="fadeIn third">
<option value="">Sucursal...</option>
<?php if (count($sucursal) > 0) {
    foreach ($sucursal as $column => $value) {
        ?>
<option value="<?php echo $value['id_sucursal']; ?>"><?php echo $value['nombre_sucursal']; ?></option>
<?php }}?>
</select>
</div>
<div id="div_Categoria">
<select name="fkID_Categoria" id="fkID_Categoria" class="fadeIn third">
<option value="">Categoria...</option>
<?php if (count($categoria) > 0) {
    foreach ($categoria as $column => $value) {
        ?>
<option value="<?php echo $value['id_categoria']; ?>"><?php echo $value['nombre_categoria']; ?></option>
<?php }}?>
</select>
</div>
<input type="submit" class="fadeIn fourth" value="Registrar"  name="registrar" >
</form>
</div>
</div>