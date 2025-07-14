
define(['block_dynamic_time/time_module', 'core/log'], function(timeModule, log) {
    const SELECTOR_ID = 'moodle-dynamic-time-display';
    function updateTime() {
        const dynamicTimeElement = document.getElementById(SELECTOR_ID);
        if (dynamicTimeElement) {
            dynamicTimeElement.textContent = timeModule.getCurrentTime();
            log.debug('Bloque de Hora Dinámica: Hora actualizada a: ' + timeModule.getCurrentTime());
        } else {
            log.debug('Bloque de Hora Dinámica: Elemento ' + SELECTOR_ID + ' no encontrado en el DOM.');
        }
    }
    function init() {
        log.debug('Bloque de Hora Dinámica: Función init() ejecutada.');
        updateTime();

        setInterval(updateTime, 1000);
    }
    return {
        init: init
    };
});