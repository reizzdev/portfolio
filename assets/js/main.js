document.addEventListener('DOMContentLoaded', () => {

    console.log('Portfolio de Kevin cargado correctamente.');

    document.querySelectorAll('.project-description-trigger').forEach((trigger) => {
        const dialogId = trigger.getAttribute('aria-controls');
        const dialog = dialogId ? document.getElementById(dialogId) : null;

        if (!dialog || typeof dialog.showModal !== 'function') {
            console.error('No se pudo inicializar la ventana de descripción del proyecto.');
            return;
        }

        const closeButton = dialog.querySelector('.project-description-close');

        if (!closeButton) {
            console.error('No se encontró el botón para cerrar la descripción del proyecto.');
            return;
        }

        trigger.addEventListener('click', () => dialog.showModal());
        closeButton.addEventListener('click', () => dialog.close());
        dialog.addEventListener('click', (event) => {
            if (event.target === dialog) {
                dialog.close();
            }
        });
    });

});