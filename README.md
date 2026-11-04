
# Práctica 01 - Centro de Vehículos

## Descripción

Este proyecto consiste en un sitio web informativo
sobre cuatro marcas de vehículos: Ford, Mazda,
Suzuki y Toyota.

Fue desarrollado como parte de la asignatura
Programación y Plataformas Web.

Se utilizaron HTML5, CSS3, PHP y MySQL/MariaDB.

## Tecnologías utilizadas

- HTML5: estructura de las páginas web.
- CSS3: estilos, Flexbox y diseño adaptable.
- PHP: recepción y validación de formularios.
- MySQL/MariaDB: almacenamiento de mensajes.
- XAMPP: servidor local Apache y base de datos.

## Estructura del proyecto

Practica1_EstructuraHTML/
- index.html
- Carro_Ford.html
- Carro_Mazda.html
- Carro_Suzuki.html
- Carro_Toyota.html
- css/estilos.css
- Imagenes/
- PaginaPHP/db_conection.php
- PaginaPHP/procesar_contacto.php

## Requisitos para ejecutar el proyecto

1. Tener instalado XAMPP.
2. Activar Apache y MySQL desde XAMPP.
3. Tener un navegador web.
4. Importar la base de datos desde phpMyAdmin.

## Instalación y configuración

1. Descargar el proyecto desde GitHub.
2. Copiar la carpeta Practica1_EstructuraHTML
   dentro de C:\xampp\htdocs\.
3. Abrir el panel de control de XAMPP.
4. Iniciar Apache y MySQL.
5. Abrir http://localhost/phpmyadmin/.
6. Crear la base de datos web si no existe.
7. Importar el archivo SQL correspondiente.
8. Revisar la configuración de conexión en
   PaginaPHP/db_conection.php.

La configuración de conexión depende del
usuario y la contraseña de MySQL de cada equipo.

## Ejecución

Abrir en el navegador:

http://localhost/Practica1_EstructuraHTML/

## Funcionalidades

- Navegación entre cinco páginas HTML.
- Información sobre cuatro marcas de vehículos.
- Imágenes, listas, tablas y video.
- Estilos CSS y diseño adaptable.
- Formulario de contacto.
- Validación de campos obligatorios.
- Validación del correo electrónico.
- Almacenamiento de mensajes mediante PHP y MySQL.

## Base de datos

Nombre: web

Tabla: contactos

Columnas implementadas:
- id
- nombre
- correo
- asunto
- mensaje

El archivo SQL de reproducción de la base de
datos se incorporará al repositorio.

## Pruebas realizadas

- Envío de mensajes válidos.
- Comprobación de registros en phpMyAdmin.
- Rechazo de campos vacíos.
- Rechazo de correos inválidos.
- Validación de longitud en PHP.
- Rechazo del acceso directo sin POST.

## Autor

Carlos Cajas

Universidad Politécnica Salesiana
Asignatura: Programación y Plataformas Web
