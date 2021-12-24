<?php 

$resultado = $_GET["resultado"] ?? null; //El ?? busca ese valor y si no existe le asigna null;
require"../includes/funciones.php";
    incluirTemplate("header");
    ?>
<main class="contenedor seccion">
    <h1>Administrador de Bienes Raices</h1>

    <?php if($resultado == 1): ?>
            <p class="alerta exito">Anuncio creado correctamente</p>
            <?php endif; ?>
    
    <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>

    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Casa en la Playa</td>
                <td><img src="/imagenes/92accb9875d7a6ea23933f6dc2c054af.jpg" class="imagen-tabla"></td>
                <td>$1200000</td>
                <td>
                    <a href="#" class="boton-rojo-block" >Eliminar</a>
                    <a href="#" class="boton-amarillo-block">Actualizar</a>
                </td>
            </tr>
        </tbody>
    </table>
</main>

<?php 
    incluirTemplate("footer");
    ?>