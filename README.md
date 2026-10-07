# Mi Portfolio

Tema personalizado de WordPress para el portafolio de Kevin Anthony, desarrollador Full Stack. Presenta proyectos, experiencia, tecnologías, información personal y enlaces de contacto en una sola página adaptable.

## Requisitos

- Una instalación funcional de WordPress.
- PHP compatible con la versión de WordPress instalada.
- Conexión a internet para cargar Google Fonts y Font Awesome desde sus CDN.

## Instalación

1. Copia la carpeta `mi-portfolio` en `wp-content/themes/` de tu instalación de WordPress.
2. En el panel de administración, abre **Apariencia → Temas** y activa **Mi Portfolio**.
3. Visita la página de inicio para ver el portafolio.

Este repositorio contiene el tema, no una instalación completa de WordPress; no tiene un proceso de compilación ni dependencias de npm o Composer.

## Estructura

```text
mi-portfolio/
├── assets/
│   ├── images/       # Imágenes del perfil y los proyectos
│   └── js/           # JavaScript del tema
├── sections/         # Secciones de la página principal
├── footer.php
├── functions.php     # Compatibilidad del tema y carga de recursos
├── header.php
├── index.php         # Ensambla las secciones de la página
└── style.css         # Estilos y metadatos del tema
```

## Personalización

- Actualiza el contenido de cada sección en los archivos de `sections/`.
- Reemplaza o añade imágenes en `assets/images/` y ajusta sus referencias en las secciones correspondientes.
- Modifica colores, tipografía y diseño en `style.css`.
- Actualiza los enlaces sociales y de contacto en `header.php` y `sections/contact.php`.

## Recursos externos

El tema carga la fuente **Inter** desde Google Fonts y los iconos de **Font Awesome 6.5.2** desde cdnjs. Esos recursos requieren conexión a internet.
