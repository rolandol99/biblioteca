<?php require_once "Model\Conexion.php"; ?>





<link rel="stylesheet" href="View/miestilo.css"> 

<h2>Formulario de Préstamo R</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <?php mostrarValoresForaneos($conn); ?>
    <label for="fecha_devolucion">Fecha de Devolución:</label>
    <input type="date" name="fecha_devolucion" required><br>
    <input type="submit" value="Registrar Préstamo">
</form>

</body>
</html>

<?php
// Cerrar la conexión
$conn->close();
?>
