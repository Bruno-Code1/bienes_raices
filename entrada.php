<?php
  require 'includes/funciones.php';
  incluirTemplate('header');
?>
  <main class="contenedor seccion contenido-centrado">
    <h1>Guía para la decoración de tu hogar</h1>
    <picture>
      <source srcset="build/img/destacada.webp" type="image/webp">
      <source srcset="build/img/destacada.jpg" type="image/jpeg">
      <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la propiedad">
    </picture>
    <p class="informacion-meta">Escrito el: <span>20/10/2021 <span>por: <span>Admin</span></span></span></p>
    <div class="resumen-propiedad">
      <p class="precio">$3,000,000</p>
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