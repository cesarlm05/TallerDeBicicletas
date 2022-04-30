# Taller de bicicletas

### SEGUNDA ENTREGA DEL PROYECTO FINAL

Proyecto de mi primera Web para Coderhouse.

El proyecto está adaptado a la
vista mobile y la vista desktop por completo y he  agregando animaciones. En el cual hago uso del framework 
 Bootstrap, grids + flexbox, donde hice uso CSS para poder darle estilo propio a los elementos que ya vienen con
su propia identidad del framework.

Mejoré los elementos interactivos con variaciones en sus diferentes
estados, ya sea de la mano de transformaciones, transiciones y/o animaciones.
Para el maquetado usé etiquetas no sólo para armar contenido, sino para armar los elementos
que van a conformar el layout de la web, como por ejemplo los conteiner, section, div, etc.
También se podrá hacer lectura de comentarios en todo el proyecto para que sea más fácil la evaluación del mismo. 

## Demo del proyecto

Haz clic aquí [TallerDeBicicletas](https://github.com/cesarlm05/TallerDeBicicletas.git).

```bash
git clone https://github.com/cesarlm05/TallerDeBicicletas.git
```

## Parte del navbar

```html
 <nav class="navbar fixed-top navbar-light bg-danger">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="/index.html">OJO CLINICO BIKE</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
```

## Parte del navbar @Media + Pseudoclases
```css
/* Responsive @Media */

@media screen and (max-width: 768px) {
  .inner__title {
    font-size: 14px;
  }
  .inner__subtitle {
    font-size: 12px;
  }
  .logo {
    font-size: 10px;
    padding: 0 25px;
  }
  .menu__items li {
    font-size: 10px;
  }
  .menu__items li a {
    font-size: 10px;
  }
```
```css
/* Pseudoclase :hover */
.build iframe:hover {
  border-color: rgb(194, 0, 0) !important;
}

/* Pseudoclase :hover */
.form__body input:hover {
  background-color: rgba(169, 195, 1, 0.357);
  color: #000;
  font-size: medium;
}
```

## El proyecto trata de la web de mi propio Taller de Bicis.

Ofrecemos a nuestros clientes soluciones ideales para resolver problemas simples o complejos que pueda presentar su bici, nuestro objetivo es brindar siempre el mejor servicio.

## License
[MIT](https://choosealicense.com/licenses/mit/)
