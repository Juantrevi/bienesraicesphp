<?php 

//Base de datos

require "../../includes/config/database.php";

$db = conectarDB();

//Consultar para obtener los vendedores
$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);


$titulo = "";
$precio = "";
$descripcion = "";
$habitaciones = "";
$wc = "";
$estacionamiento = "";
$vendedorId = "";
//Arreglo con mensaje de errores
$errores = [];



//Ejecuta el codigo luego que el usuario manda el form

if($_SERVER["REQUEST_METHOD"] === "POST"){


$titulo = mysqli_real_escape_string($bd, $_POST["titulo"]);
$precio = mysqli_real_escape_string($bd, $_POST["precio"]);
$descripcion = mysqli_real_escape_string($bd, $_POST["descripcion"]);
$habitaciones = mysqli_real_escape_string($bd, $_POST["habitaciones"]);
$wc = mysqli_real_escape_string($bd, $_POST["wc"]);
$estacionamiento = mysqli_real_escape_string($bd, $_POST["estacionamiento"]);
$vendedorId = mysqli_real_escape_string($bd, $_POST["vendedor"]);
$creado = date("y/m/d");

if(!$titulo){
    $errores[] = "Debes añadir un titulo";
}
if(!$precio){
    $errores[] = "Debes añadir un precio";
}
if(!$descripcion){
    $errores[] = "Debes añadir un titulo";
}
if(!$wc){
    $errores[] = "Debes añadir cantidad de baños";
}
if(!$estacionamiento){
    $errores[] = "Debes añadir cantidad de estacionamientos";
}
if(!$vendedorId){
    $errores[] = "Debes añadir un vendedor";
}

/* echo "<pre>";
var_dump($errores);
echo "</pre>";
 */

 //Revisamos que el arreglo este vacio
 if(empty($errores)){
    $query = " INSERT INTO propiedades(titulo, precio, descripcion, habitaciones, wc, estacionamiento, creado, vendedorId) 
    VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedorId') ";
    
    $resultado = mysqli_query($db, $query);
    
    if($resultado){
        //Redireccionar al usuario
        header("location: /admin"); 
    }
 }


//Insertar en la base de datos



}
require "../../includes/funciones.php";
    incluirTemplate("header");
    ?>
<main class="contenedor seccion">
    <h1>Crear</h1>

    <a href="/admin" class="boton boton-verde">Volver</a>

    <?php foreach($errores as $error):?>
        <div class="alerta error">
            <?php echo $error?>
        </div>

    <?php endforeach;?>





    <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
        <fieldset>
            <legend>Informacion General</legend>

            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo; ?>">

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio; ?>">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

            <label for="descripcion">Descripcion:</label>
            <textarea id="descripcion" name="descripcion"  placeholder="Descripcion" value="<?php echo $descripcion; ?>"></textarea>

        </fieldset>

        <fieldset>

        <legend>Informacion Propiedad</legend>

        
            <label for="habitaciones">Habitaciones:</label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php echo $habitaciones; ?>">

            <label for="wc">Baños:</label>
            <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" value="<?php echo $wc; ?>">

            <label for="estacionamiento">Estacionamiento:</label>
            <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9" value="<?php echo $estacionamiento; ?>">

        </fieldset>

        <fieldset>

        <legend>Vendedor</legend>

            <select name="vendedor">
                <option value="">--Seleccione--</option>
                <?php while($row = mysqli_fetch_assoc($resultado) ) : ?>
                    <option <?php echo $vendedorId === $row["id"] ? "selected" :  ""; ?> 
                     value="<?php echo $row["id"]; ?>"> <?php echo $row['nombre']." ".$row['apellido']; ?> </option>
                <?php endwhile; ?>
            </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton boton-verde">

    </form>
</main>

<?php 
    incluirTemplate("footer");
    ?>