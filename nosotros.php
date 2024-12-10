<?php
  require 'includes/app.php';
  incluirTemplate('header');
?>
  <main class="contenedor seccion">
    <h1>Conoce sobre Nosotros</h1>
    <div class="contenido-nosotros">
      <div class="imagen">
        <picture>
          <source srcset="build/img/nosotros.webp" type="image/webp">
          <source srcset="build/img/nosotros.jpg" type="image/jpeg">
          <img src="build/img/nosotros.jpg" alt="Sobre Nosotros">
        </picture>
      </div>
      <div class="texto-nosotros">
        <blockquote>
          25 Años de experiencia
        </blockquote>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem minus deserunt delectus, corrupti modi similique consequatur inventore vitae facere dolorem, repellendus nobis. Blanditiis quam vero dolorum reiciendis atque dolorem expedita!
        </p>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem minus deserunt delectus, corrupti modi similique consequatur inventore vitae facere dolorem, repellendus nobis. Blanditiis quam vero dolorum reiciendis atque dolorem expedita!
          Laboriosam voluptas, eveniet delectus corrupti reiciendis distinctio non cupiditate tenetur in quas modi quo! Id veniam eaque optio ex reprehenderit consequuntur aliquam nam. Optio iste quos sequi neque maxime corrupti?
        </p>
      </div>
    </div>
  </main>
  <section class="contenedor seccion">
    <h1>Más Sobre Nosotros</h1>
    <div class="iconos-nosotros">
      <div class="icono">
        <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
        <h3>Seguridad</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum magni nulla itaque commodi quas! Illo, iusto perferendis nostrum quidem, tenetur pariatur ea molestiae et quibusdam numquam, dolores tempora quas est!
        Reprehenderit optio ea debitis, deserunt quaerat molestias est ab? Amet mollitia eius facilis delectus quisquam cum quis molestias assumenda, nobis quos a quas voluptatum! Tenetur alias nobis consectetur nisi accusamus.</p>
      </div>
      <div class="icono">
        <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
        <h3>Precio</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum magni nulla itaque commodi quas! Illo, iusto perferendis nostrum quidem, tenetur pariatur ea molestiae et quibusdam numquam, dolores tempora quas est!
        Reprehenderit optio ea debitis, deserunt quaerat molestias est ab? Amet mollitia eius facilis delectus quisquam cum quis molestias assumenda, nobis quos a quas voluptatum! Tenetur alias nobis consectetur nisi accusamus.</p>
      </div>
      <div class="icono">
        <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
        <h3>A Tiempo</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum magni nulla itaque commodi quas! Illo, iusto perferendis nostrum quidem, tenetur pariatur ea molestiae et quibusdam numquam, dolores tempora quas est!
        Reprehenderit optio ea debitis, deserunt quaerat molestias est ab? Amet mollitia eius facilis delectus quisquam cum quis molestias assumenda, nobis quos a quas voluptatum! Tenetur alias nobis consectetur nisi accusamus.</p>
      </div>
    </div>
  </section>
<?php
  incluirTemplate('footer');
?>