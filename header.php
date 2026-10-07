<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        <?php
        if (is_front_page()) {
            echo 'Kevin Anthony | Full Stack Developer';
        } else {
            bloginfo('name');
        }
        ?>
    </title>

    <meta
        name="description"
        content="Portfolio de Kevin Anthony, desarrollador Full Stack especializado en aplicaciones web, APIs y soluciones empresariales."
    >

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>


<header class="navbar">

    <a href="<?php echo home_url('/'); ?>" class="logo">

        <span>&lt;</span>kev<span>/&gt;</span>

    </a>


    <nav class="nav-links">

        <a href="<?php echo home_url('/#proyectos'); ?>">
            Proyectos
        </a>

        <a href="<?php echo home_url('/#experiencia'); ?>">
            Experiencia
        </a>

        <a href="<?php echo home_url('/#tecnologias'); ?>">
            Tecnologías
        </a>

        <a href="<?php echo home_url('/#sobre-mi'); ?>">
            Sobre mí
        </a>

        <a href="<?php echo home_url('/#contacto'); ?>">
            Contacto
        </a>

    </nav>


    <div class="nav-social">

        <a
            href="https://github.com/reizzdev"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="GitHub"
        >
            <i class="fab fa-github"></i>
        </a>

        <a
            href="https://www.linkedin.com/in/kevin-anthony-chocca-casapino-a26267436/"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="LinkedIn"
        >
            <i class="fab fa-linkedin"></i>
        </a>

    </div>

</header>