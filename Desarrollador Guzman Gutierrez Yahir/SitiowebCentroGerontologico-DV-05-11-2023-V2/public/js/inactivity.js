
import IdleJs from 'idle-js';

const idle = new IdleJs({ idle: 5000 }); // 2 minutos en milisegundos

idle.onIdle(() => {
    // El usuario está inactivo, realiza el cierre de sesión
    window.location.href = '/logout-due-to-inactivity';
});

idle.onActive(() => {
    // El usuario está activo, reinicia el temporizador
    idle.watch();
});

// Iniciar la detección de inactividad al cargar la página
idle.start();
