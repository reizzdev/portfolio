<?php
$projects = array(
    array(
        'image' => 'proyecto-2.jpg',
        'image_alt' => 'Proyecto web Full Stack - Plataforma interna',
        'image_url' => 'https://municipalidad-la-perla-production.up.railway.app/admin/login',
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
        'github_url' => 'https://github.com/reizzdev/municipalidad-la-perla',
    ),
    array(
        'image' => 'municipalidad.jpg',
        'image_alt' => 'Sistema web de gestión de préstamos',
        'image_url' => 'https://munilaperla.gob.pe/',
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
        'github_url' => 'https://github.com/reizzdev/municipalidad-la-perla',
    ),
    array(
        'image' => 'gestionyreporte.jpg',
        'image_alt' => 'Software de gestión de ventas y reportes para Tienda Martita',
        'image_url' => '#',
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
        'github_url' => 'https://github.com/reizzdev/sistema-gestion-tienda',
    ),
    array(
        'image' => 'streaming2.jpg',
        'image_alt' => 'Plataforma web de películas y series online',
        'image_url' => '#',
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
        'github_url' => 'https://github.com/reizzdev/platform-of-streaming',
    ),
    array(
        'image' => 'portfolio.jpg',
        'image_alt' => 'Es mi plataforma web personal, donde muestro mis proyectos y habilidades como desarrollador web.',
        'image_url' => '#',
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
        'github_url' => 'https://github.com/reizzdev/portfolio',
    ),
    array(
        'image' => 'dron.jpg',
        'image_alt' => 'Proyecto universitario de prototipo de dron para aprendizaje y diseño básico.',
        'image_url' => '#',
        'title' => 'Proyecto universitario: prototipo de dron',
        'description' => 'Proyecto académico para estudiar el diseño, ensamblaje y programación básica de un dron de prueba. Fue desarrollado como trabajo universitario para aprender electrónica, aerodinámica y control del equipo.',
        'features' => array(
            'Prototipo académico',
            'Ensamblaje básico',
            'Control remoto',
            'Aprendizaje práctico',
        ),
        'technologies' => array(
            'Arduino',
            'C++',
            'Motores',
            'Control remoto',
        ),
        'github_url' => '#',
    ),
);
?>
<section id="proyectos" class="projects section">
    <div class="section-header">
        <div>
            <span class="section-label">PORTFOLIO</span>
            <h2>Proyectos destacados</h2>
        </div>
    </div>

    <?php foreach ($projects as $project_index => $project) : ?>
        <article class="project-card">
            <div class="project-image">
                <a
                    href="<?php echo esc_url($project['image_url']); ?>"
                    aria-label="<?php echo esc_attr('Visitar ' . $project['title']); ?>"
                    <?php if ('#' !== $project['image_url']) : ?>
                        target="_blank"
                        rel="noopener noreferrer"
                    <?php endif; ?>
                >
                    <img
                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $project['image']); ?>"
                        alt="<?php echo esc_attr($project['image_alt']); ?>"
                    >
                </a>
            </div>

            <div class="project-info">
                <h3><?php echo esc_html($project['title']); ?></h3>
                <div class="project-features">
                    <?php foreach ($project['features'] as $feature) : ?>
                        <div>
                            <i class="fas fa-check"></i>
                            <?php echo esc_html($feature); ?>
                        </div>
                    <?php endforeach; ?>
                </div>

                <button
                    class="project-description-trigger"
                    type="button"
                    aria-haspopup="dialog"
                    aria-controls="project-description-<?php echo esc_attr($project_index); ?>"
                >
                    Ver descripción
                </button>

                <div class="project-tech">
                    <?php foreach ($project['technologies'] as $technology) : ?>
                        <span><?php echo esc_html($technology); ?></span>
                    <?php endforeach; ?>
                </div>

                <div class="project-links">
                    <a
                        href="<?php echo esc_url($project['github_url']); ?>"
                        class="project-github"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <i class="fab fa-github"></i>
                        Ver código
                    </a>
                </div>
            </div>
        </article>

        <dialog
            class="project-description-dialog"
            id="project-description-<?php echo esc_attr($project_index); ?>"
            aria-labelledby="project-description-title-<?php echo esc_attr($project_index); ?>"
        >
            <img
                src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $project['image']); ?>"
                alt="<?php echo esc_attr($project['image_alt']); ?>"
            >
            <div class="project-description-content">
                <button class="project-description-close" type="button" aria-label="Cerrar descripción">
                    <i class="fas fa-times" aria-hidden="true"></i>
                </button>
                <h3 id="project-description-title-<?php echo esc_attr($project_index); ?>">
                    <?php echo esc_html($project['title']); ?>
                </h3>
                <p><?php echo esc_html($project['description']); ?></p>
            </div>
        </dialog>
    <?php endforeach; ?>
</section>
