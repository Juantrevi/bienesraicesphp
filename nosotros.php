<?php 
require"includes/funciones.php";
    incluirTemplate("header");
    ?>
<main class="contenedor seccion">
    <h1>Conoce Sobre Nosotros</h1>

    <div class="contenido-nosotros">
        <div class="imagen">
            <picture>
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                <img src="build/img/nosotros.jpg" alt="Imagen sobre nosotros" loading="lazy">
            </picture>
        </div>
        <div class="texto-nosotros">
            <blockquote>
                25 años de experiencia
            </blockquote>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex quo quis inventore qui ipsum iusto doloremque. Repudiandae fugiat, at commodi totam obcaecati quidem porro eveniet ex voluptate, ipsum sed a!Ex quo quis inventore qui ipsum iusto doloremque. Repudiandae fugiat, at commodi totam obcaecati quidem porro eveniet exctetur adipisicing elit. Ex quo quis inventore qui ipsum iusto doloremque. Repudiandae fugiat, at commodi totam obcaecati quidem porro eveniet ex voluptate, ipsum sed a!Ex quo quis inventore qui ipsum iusto doloremque. Repudiandae fugiat, at commodi totam obcaecati quidem porro eveniet voluptate, ipsum sed a!</p>
            <p>Ex quo quis inventore qui ipsum iusto doloremque. Repudiandae fugiat, at commodi totam obcaecati quidem porro eveniet ex voluptate, ipsum sed a!ctetur adipisicing elit. Ex quo quis inventore qui ipsum iusto doloremque. Repudiandae fugiat, at commodi ed a!Ex quo quis inventore qui ipsum iusto doloremque. Repudiandae fugiat, at commodi totam obcaecati quidem porro eveniet</p>
        </div>
    </div>
</main>

<section class="contenedor seccion">
    <h1>Mas sobre nosotros</h1>
    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque, quis. Dolor harum maxime eum veritatis earum consequuntur est praesentium error animi, ipsum magnam accusantium eligendi omnis autem libero laboriosam repellat.</p>
        </div>
        <div class="icono">
            <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
            <h3>Precio</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque, quis. Dolor harum maxime eum veritatis earum consequuntur est praesentium error animi, ipsum magnam accusantium eligendi omnis autem libero laboriosam repellat.</p>
        </div>
        <div class="icono">
            <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
            <h3>A Tiempo</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque, quis. Dolor harum maxime eum veritatis earum consequuntur est praesentium error animi, ipsum magnam accusantium eligendi omnis autem libero laboriosam repellat.</p>
        </div>
    </div>
</section>

<?php 
    incluirTemplate("footer");
    ?>