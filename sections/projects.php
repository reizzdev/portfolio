<?php

$projects = array(
    array(
        'image' => 'proyecto-2.jpg',
        'image_alt' => 'Proyecto web Full Stack - Plataforma interna',
        'overlay_url' => 'https://municipalidad-la-perla-production.up.railway.app/admin/login',
        'type' => 'APLICACIÓN WEB',
        'title' => 'Proyecto Web Full Stack',
        'description' => 'Plataforma web desarrollada para gestionar el préstamo de equipos tecnológicos entre diferentes áreas de una municipalidad.',
        'features' => array(
            'Gestión de reservas',
            'Control de conflictos',
            'Roles y permisos',
            'Registro de incidencias',
        ),
        'technologies' => array(
            'Next.js',
            'React',
            'TypeScript',
            'NestJS',
            'Prisma',
            'PostgreSQL',
            'WebSockets',
        ),
        'project_url' => 'https://github.com/reizzdev/municipalidad-la-perla',
        'project_label' => 'Ver proyecto',
        'github_url' => 'https://github.com/reizzdev/municipalidad-la-perla',
        'github_label' => 'GitHub',
        'featured' => false,
    ),
    array(
        'image' => 'municipalidad.jpg',
        'image_alt' => 'Sistema web de gestión de préstamos',
        'overlay_url' => 'https://munilaperla.gob.pe/',
        'type' => 'PAGINA WEB',
        'title' => 'Pagina Web de la munipalidad Distrital La Perla',
        'description' => 'Diseño y Desarrollo web enfocado en demostrar arquitectura frontend, APIs REST, autenticación y persistencia de datos.',
        'features' => array(
            'Secciones Dinamicas',
            'Excelente UX/UI',
            'Manejo de información TI',
            'Wsp y Chatbot',
        ),
        'technologies' => array(
            'Next.js',
            'React',
            'TypeScript',
        ),
        'project_url' => 'https://github.com/reizzdev/municipalidad-la-perla',
        'project_label' => 'Ver proyecto',
        'github_url' => 'https://github.com/reizzdev/municipalidad-la-perla',
        'github_label' => 'Código',
        'featured' => true,
    ),
    array(
        'image' => 'gestionyreporte.jpg',
        'image_alt' => 'Software de gestión de ventas y reportes para Tienda Martita',
        'overlay_url' => '#',
        'type' => 'SOFTWARE DE ESCRITORIO',
        'title' => 'Sistema de Gestión de Ventas y Reportes',
        'description' => 'Software de escritorio desarrollado para la gestión de ventas, clientes, productos, almacén y reportes administrativos de la tienda Martita.',
        'features' => array(
            'Gestión de ventas',
            'Gestión de clientes',
            'Control de productos y stock',
            'Reportes y gestión por roles',
        ),
        'technologies' => array(
            'Java',
            'Java Swing',
            'JDBC',
            'MySQL',
        ),
        'project_url' => 'https://github.com/reizzdev/sistema-gestion-tienda',
        'project_label' => 'Ver proyecto',
        'github_url' => '#',
        'github_label' => 'Código',
        'featured' => false,
    ),
    array(
        'image' => 'streaming2.jpg',
        'image_alt' => 'Plataforma web de películas y series online',
        'overlay_url' => '#',
        'type' => 'Plataforma de Streaming',
        'title' => 'Plataforma de películas y series online',
        'description' => 'Plataforma web desarrollada para la reproducción y gestión de películas y series. Con usuarios, posicionamiento y mejoras orientadas a la experiencia del usuario.',
        'features' => array(
            'Reproducción de películas y series',
            'Usuarios y tráfico real',
            'Optimización de rendimiento',
            'SEO y posicionamiento web',
        ),
        'technologies' => array(
            'React',
            'Node.js',
            'Express',
            'React Router',
        ),
        'project_url' => 'https://github.com/reizzdev/sistema-gestion-tienda',
        'project_label' => 'Ver proyecto',
        'github_url' => '#',
        'github_label' => 'Código',
        'featured' => false,
    ),
    array(
        'image' => 'portfolio.jpg',
        'image_alt' => 'Es mi plataforma web personal, donde muestro mis proyectos y habilidades como desarrollador web.',
        'overlay_url' => '#',
        'type' => 'Portafolio Personal',
        'title' => 'Portafolio Personal',
        'description' => 'Es mi plataforma web personal, donde muestro mis proyectos y habilidades como desarrollador web. Incluye secciones de contacto, proyectos y habilidades técnicas.',
        'features' => array(
            'Secciones dinamicas y responsivas',
            'Un excelente diseño UX/UI',
            'Utiliza actions y animaciones',
            'SEO y posicionamiento web',
        ),
        'technologies' => array(
            'Php',
            'MySql',
            'JavaScript',
            'Bootstrap',
        ),
        'project_url' => 'https://github.com/reizzdev/portfolio',
        'project_label' => 'Ver proyecto',
        'github_url' => '#',
        'github_label' => 'Código',
        'featured' => false,
    ),
);

?>

<section id="proyectos" class="projects section">
    <div class="section-header">
        <span class="section-number">02</span>
        <div>
            <span class="section-label">PORTFOLIO</span>
            <h2>Proyectos destacados</h2>
        </div>
    </div>

    <?php foreach ($projects as $project) : ?>
        <article class="project-card<?php echo $project['featured'] ? ' featured-project' : ''; ?>">
            <div class="project-image">
                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $project['image']); ?>"
                    alt="<?php echo esc_attr($project['image_alt']); ?>"
                >
                <div class="project-overlay">
                    <a
                        href="<?php echo esc_url($project['overlay_url']); ?>"
                        aria-label="Ver proyecto"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <i class="fas fa-arrow-up-right-from-square"></i>
                    </a>
                </div>
            </div>

            <div class="project-info">
                <span class="project-type"><?php echo esc_html($project['type']); ?></span>
                <h3><?php echo esc_html($project['title']); ?></h3>
                <p class="project-description"><?php echo esc_html($project['description']); ?></p>

                <div class="project-features">
                    <?php foreach ($project['features'] as $feature) : ?>
                        <div>
                            <i class="fas fa-check"></i>
                            <?php echo esc_html($feature); ?>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="project-tech">
                    <?php foreach ($project['technologies'] as $technology) : ?>
                        <span><?php echo esc_html($technology); ?></span>
                    <?php endforeach; ?>
                </div>

                <div class="project-links">
                    <a
                        href="<?php echo esc_url($project['project_url']); ?>"
                        class="project-link"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <?php echo esc_html($project['project_label']); ?>
                        <i class="fas fa-arrow-right"></i>
                    </a>

                    <a
                        href="<?php echo esc_url($project['github_url']); ?>"
                        class="project-github"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <i class="fab fa-github"></i>
                        <?php echo esc_html($project['github_label']); ?>
                    </a>
                </div>
            </div>
        </article>
    <?php endforeach; ?>
</section>
