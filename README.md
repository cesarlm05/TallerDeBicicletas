# [OJO CLINICO BIKE](https://cesarlm05.github.io/TallerDeBicicletas/)

## Taller de bicicletas

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

## SASS II (Clase 14).
### OPERADORES, CONDICIONALES Y BUCLES

OPERADORES: Con SASS puedes realizar operaciones
matemáticas básicas en la misma hoja
de estilo, y es tan sencillo como poner
el símbolo aritmético adecuado.

```css
$ancho: 720px;
$blue: #4285F4;
$green: #33D374;
.box_uno {
 background-color: $blue;
 width: $ancho/2; /* Ancho de 360*/
}
.box_dos {
 background-color: $green;
 width: ($ancho/2)-50;
}
```

CONDICIONALES: Permiten establecer reglas para validar si se aplica o no una acción, cambio o
asignación en el atributo de un elemento. Estas condiciones podrán incluir
comparadores típicos (==, !=, <, >) entre variables, constantes o cualquier
expresión intermedia.
 If: (Si condicional)
Sólo en caso de cumplirse la condición, se ejecutará la generación de código del
bloque asociado.

```css
$vista:mobile;
body{
@if $vista == desktop {
@media only screen and (min-width:1024px){
h1{font-size:$h1Desktop;}
h3{font-size:35px;}
p{font-size:$parrafoDesktop;}
}
} @else if $vista == mobile {
@media only screen and (max-width:767px){
h1{font-size:$h1Mobile;}
h3{font-size:25px;}
p{font-size:$parrafoMobile;}
}
} @else {
h1{font-size:34px;}
h3{font-size:25px;}
p{font-size:20px;}
}
}
```

BUCLES: Un bucle es una secuencia que repite más de una vez una porción de código,
dada cierta condición. Cuando la misma deja de cumplirse, el bucle finaliza.

FOR:
```css
@for $var from [to|through] {
 //Bloque de reglas donde podrás utilizar $var mediante interpolación
}
```
$var será el nombre de la variable que queramos utilizar en nuestro bloque.
Tanto <start> como <end> tendrán que ser expresiones SassScript válidas, que devuelvan
números enteros. Por último, si indicamos ‘through’ se tendrán en cuenta los valores <start> y
<end> dentro del bucle; si utilizamos ‘to’, no se tendrá en cuenta el valor <end> dentro del bucle.

EACH: La regla @each facilita la emisión de estilos, o la evaluación del código para
cada elemento de una lista, o cada par en un mapa.
Es posible definir una estructura @each de la siguiente manera:

```css
@each $var in {
 //Bloque de reglas donde podremos utilizar $var mediante interpolación
}
```
En este caso, <list> será cualquier expresión que devuelva una lista de
elementos SassScript válida, es decir, una sucesión de elementos separados
por comas.

```css
@each $color in blue, yellow, black {
#{$color}{
color:#{$color}; }
}
```

# MAPS
Los mapas son variables cuyo valor es una colección de variables. Se definen
con un nombre que los identifica. Las claves suelen ser cadenas o números,
mientras que los valores pueden ser cualquier tipo de dato.
Ejemplo: suponte que se necesita crear una serie de botones para compartir
contenido y te exigen tres de diferente color. Para no crearlos uno a uno,
generas un mapa con clave “el botón” y valor “el color que tendrá”.

```css
$map: (key1: value1, key2: value2, key3: value3);
```

Ejemplo: 

```css
// En _base.scss declaro un map de colores (variables).
// Maps
$colors: (
  primary: $primary-color,
  secondary: $secondary-color,
  tertiary: $tertiary-color,
  quaternary: $quaternary-color,
  quinary: $quinary-color,
  senary: $senary-color,
  septenary: $septenary-color,
  octonary: $octonary-color,
  nineth: $nineth-color,
);
```
En donde hago uso de map-get()
```css
// En page service.scss uso map-get()
iframe {
    width: 65vw;
    height: 60vh;
    border: solid 5px;
    border-color: map-get($map: $colors, $key: 'septenary') !important; //$septenary-color;
    border-radius: 10%;
    &:hover {
      border-color: map-get($map: $colors, $key: 'nineth') !important; //$nineth-color;
    }
  }
```
# EXTEND

A menudo, al diseñar una página una clase debe tener todos los estilos de
otra clase, así como sus propios estilos específicos. En esos casos
usamos @extend, para traer los estilos de otra clase.
Por ejemplo, la metodología BEM fomenta las clases modificadoras que van en
los mismos elementos que las clases de bloque o elemento. Pero esto puede
crear HTML desordenado, es propenso a errores al olvidar incluir ambas
clases, y puede traer problemas de estilo no semántico a su marcado.

Ejemplos:
```css
// En el archivo _base.scss declaro una class donde en el archivo _components.scss doy estilos a la class .title mediante el extend.
// Extends
.titleStyles {
  font-family: 'Montserrat Alternates', sans-serif;
  font-size: 50px;
  margin: 20px 0;
  text-align: center;
  text-shadow: 0px 4px 4px $septenary-color;
  &:hover {
    color: $quaternary-color;
  }
}
```
_components
```css
// Estilos para todos los h1 del proyecto.
.title {
  @extend .titleStyles; // Font-size, color, background-color
  letter-spacing: 5px;
}
```
# MIXINS

Te permiten definir estilos que pueden ser reutilizados en tu proyecto.
Una de las mayores diferencias con los Extend, es que los Mixins
pueden recibir argumentos, los cuales nos permitirán producir una gran
variedad de estilos con unas simples líneas.

Ejemplos:
```css
// Mixins en el archivo _base.scss declaro una @mixin
@mixin fontStyles($fontsize, $color1, $color2) {
  font-size: $fontsize;
  color: $color1;
  background-color: $color2;
}
```

Doy uso al minxin en main.scss y en _components.scss para estilizar los forms
```css
/* main.scss - EStilos generales del proyecto */
body {
  font-weight: 400;
  line-height: 1.5;
  @include fontStyles(
    12px,
    $primary-color,
    $secondary-color
  ); /* Fuente y color de texto */
}
```
```css
/* _components.scss - EStilos de los forms */
input {
    width: 70%;
    margin-top: 5%;
    padding: 5%;
    &:hover {
      @include fontStyles(
        12px,
        $septenary-color,
        $senary-color
      ); // Font-size, color, background-color
      font-size: medium;
    }
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


## WEBSITE: [OJO CLINICO BIKE](https://cesarlm05.github.io/TallerDeBicicletas/)


### _License:_
[MIT](https://choosealicense.com/licenses/mit/)
Todos los derechos reservados &copy; 2021 - Developed by César L. Medina.
