# Taller de bicicletas

### Proyecto de mi primera Web para Coderhouse.

El proyecto está adaptado a la
vista mobile y la vista desktop por completo y he  agregando animaciones. En el cual hago uso del framework 
 Bootstrap, grids + flexbox, donde hice uso CSS para poder darle estilo propio a los elementos que ya vienen con
su propia identidad del framework.

Mejoré los elementos interactivos con variaciones en sus diferentes
estados, ya sea de la mano de transformaciones, transiciones y/o animaciones.
Para el maquetado usé etiquetas no sólo para armar contenido, sino para armar los elementos
que van a conformar el layout de la web, como por ejemplo los conteiner, section, div, etc.
También se podrá hacer lectura de comentarios en todo el proyecto para que sea más fácil la evaluación del mismo.

## SASS I (Clase 13).

Sass significa “Syntactically Awesome Stylesheets”. Permite crear
hojas de estilos estructuradas, limpias y fáciles de mantener.
Con SASS podrás escribir hojas de estilo que te ayudarán a generar
ficheros CSS más optimizados, incorporando mayor contenido
semántico.
Esto permite utilizar funcionalidades que normalmente encontrarías en
lenguajes de programación tradicionales, como el uso de variables,
creación de funciones, etcétera.

¿POR QUÉ ES ÚTIL?
Normalmente, crear una hoja de estilos es relativamente sencillo. Lo
malo es cuando el proyecto va creciendo en tamaño: su CSS puede
terminar siendo muy extenso.
SASS permite una sintaxis más simple y elegante, implementando
además bastantes características extra, para hacer más manejable tu
hoja de estilos.

SINTAXIS:
En Sass cuentas con dos diferentes tipos de sintaxis: SCSS y SASS.
La primera y más popular, es conocida como SCSS (Sassy CSS). Es
muy similar a la sintaxis nativa de CSS, tanto así que te permite
importar hojas de estilos CSS (copiar y pegar) directamente en un
archivo SCSS, y obtener un resultado válido.
Para utilizarla, sólo debes crear un archivo con terminación .scss de la
siguiente manera: archivo.scss

Ejemplo:
```css
/* styles.css */
div {
 width: 100px;
 height: 100px;
 background-color: red;
 padding: 15px;
}
div p {
 font-size: 20px;
 color: white;
 font-family: Arial, sans-serif;
}
```

```css
/* styles.scss */
div {
 width: 100px;
 height: 100px;
 background-color: red;
 padding: 15px;
 p {
 font-size: 20px;
 color: white;
 font-family: Arial, sans-serif;
 }
}
```
## COMANDAR PARA COMPILAR
```json
// => Archivo .json
{
  "name": "tallerdebicicletas",
  "version": "1.0.0",
  "description": "Proyecto de mi primera Web para Coderhouse.",
  "main": "index.js",
  "dependencies": {
  // => Aquí van todas las dependencias.
  }
  // => Es aquí en donde debemos agregar dos lineas.
  // => Esto hace seguimiento automático de nuestros archivos .scss y .css
  "scripts": {
    "test": "echo \"Error: no test specified\" && exit 1",
  // => build-css determina la ruta del archivo de salida .css
    "build-css": "node-sass --include-path scss scss/style.scss css/main.css",
  // => watch-css mira los cambios en el archivo .scss
    "watch-css": "nodemon -e scss -x \"npm run build-css\""
  },
  "repository": {
    "type": "git",
    "url": "git+https://github.com/cesarlm05/TallerDeBicicletas.git"
  },
  "keywords": [],
  "author": "",
  "license": "ISC",
  "bugs": {
    "url": "https://github.com/cesarlm05/TallerDeBicicletas/issues"
  },
  "homepage": "https://github.com/cesarlm05/TallerDeBicicletas#readme"
}
```

## Demo del proyecto

Haz clic aquí [TallerDeBicicletas](https://github.com/cesarlm05/TallerDeBicicletas.git).

```bash
git clone https://github.com/cesarlm05/TallerDeBicicletas.git
```

## Parte del navbar

```scss
/* Menú */
/* Retocando estilos de Bootstrap */
header nav a {
  font-size: 1rem;
  font-weight: 700;
  text-decoration: none;
  padding: 1rem;
  transition: 0.5s;
  text-align: center;
  &:hover {
    background-color: $tertiary-color;
    padding: 15px;
    border-radius: 25px;
    transform: scale(1.1);
    transform: translateX(5px);
    text-transform: uppercase;
    transition: 0.8s;
  }
}
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
```

## El proyecto trata de la web de mi propio Taller de Bicis.

Ofrecemos a nuestros clientes soluciones ideales para resolver problemas simples o complejos que pueda presentar su bici, nuestro objetivo es brindar siempre el mejor servicio.

## License
[MIT](https://choosealicense.com/licenses/mit/)
Todos los derechos reservados &copy; 2021 - Developed by César L. Medina
