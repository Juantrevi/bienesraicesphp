<?php 
require"includes/funciones.php";
    incluirTemplate("header");
    ?>

<main class="contenedor seccion contenido-centrado">
    <h1>Guia para la decoracion de tu hogar</h1>

    <picture>
        <source srcset="build/img/destacada2.webp" type="image/webp"> 
        <source srcset="build/img/destacada2.jpg" type="image/jpeg"> 
        <img loading="lazy" src="build/img/destacada2.jpg" alt="imagen de la propiedad">
    </picture>
    <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
    <div class="resumen-propiedad">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis voluptatibus, fuga ea illo perspiciatis facilis voluptate sint qui placeat, tempora dolorum consectetur dolore, quo excepturi perferendis autem quas architecto harum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia laboriosam doloremque pariatur laborum itaque cumque sed reprehenderit quod eos accusamus! Amet eligendi dolorem totam, nisi laudantium sed provident laborum repellat! Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic iusto, praesentium, numquam quo necessitatibus ex non, quod dicta neque fugiat libero sapiente repudiandae tempora dolorum. Ad unde debitis consectetur facilis!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores minus dicta commodi? Voluptate, odio. Eligendi doloremque quae natus rerum cum, temporibus molestias. Animi, ducimus voluptatum molestiae debitis id sapiente cum.</p>
    </div>
</main>

<?php 
    incluirTemplate("footer");
    ?>