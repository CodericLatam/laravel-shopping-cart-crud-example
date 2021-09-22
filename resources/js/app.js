require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

/*
var channel = window.Echo.channel('my-channel');
channel.listen('.my-event', function(data) {
  alert(JSON.stringify(data));
});

/*
window.Echo.private(`contacto.${contactoId}`)
.listen('.create', (e) => {
    console.dir(e);
});
*/
