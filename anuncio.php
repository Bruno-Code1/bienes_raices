<?php
  require 'includes/funciones.php';
  incluirTemplate('header');
?>
  <main class="contenedor seccion contenido-centrado">
    <h1>Casa en Venta frente al bosque</h1>
    <picture>
      <source srcset="build/img/destacada.webp" type="image/webp">
      <source srcset="build/img/destacada.jpg" type="image/jpeg">
      <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la propiedad">
    </picture>
    <div class="resumen-propiedad">
      <p class="precio">$3,000,000</p>
      <ul class="iconos-caracteristicas">
        <li>
          <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="Icono wc">
          <p>3</p>
        </li>
        <li>
          <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono estacionamiento">
          <p>3</p>
        </li>
        <li>
          <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono habitaciones">
          <p>4</p>
        </li>
      </ul>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum asperiores, officia ipsa maxime dolor culpa sed voluptates quae. Labore perferendis ipsam cumque enim veniam possimus sint magni dicta ducimus cum!
        Adipisci dolorem consectetur facilis voluptas quae voluptate aliquid nostrum eaque odit, perspiciatis neque odio sed quis ipsa excepturi ratione ducimus obcaecati perferendis velit esse debitis cumque nulla reiciendis! Ullam, soluta?
        Provident, praesentium. Repellendus at vitae, quam delectus corrupti laboriosam animi consequuntur neque temporibus unde rem dignissimos ullam beatae fugit mollitia quod ducimus quia alias et ut accusamus natus tempore. Illum.
      </p>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum asperiores, officia ipsa maxime dolor culpa sed voluptates quae. Labore perferendis ipsam cumque enim veniam possimus sint magni dicta ducimus cum!
        Adipisci dolorem consectetur facilis voluptas quae voluptate aliquid nostrum eaque odit, perspiciatis neque odio sed quis ipsa excepturi ratione ducimus obcaecati perferendis velit esse debitis cumque nulla reiciendis! Ullam, soluta?
        Provident, praesentium. Repellendus at vitae, quam delectus corrupti laboriosam animi consequuntur neque temporibus unde rem dignissimos ullam beatae fugit mollitia quod ducimus quia alias et ut accusamus natus tempore. Illum.
      </p>
    </div>
  </main>
<?php
  incluirTemplate('footer');
?>