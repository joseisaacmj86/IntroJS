// Inicialización de Intro.js con opciones y pasos
var introJs = introJs().setOptions({
  //showBullets: false, //para ocultar viñetas en el recorrido
  //showButtons: false, //para ocultar todos los botones
  //showStepNumbers: true, // Mostrar el número de pasos
    nextLabel: 'Siguiente',
    prevLabel: 'Regresar',
    doneLabel: 'Terminar',
    //skipLabel: 'X',
  
  steps: [
    {
      title: 'Bienvenido',
      intro: 'Soy tu asistente con Introjs! 👋',

    },
    {
      element: document.querySelector('.card-demo'),
      intro: 'se puede <b>formatear</b> el texto, <br/> de la forma que <br/>  <b>decida</b>  hacerlo'
    },
    {
      title: 'Se puede cargar imágenes',
      intro: '<img src="https://i.giphy.com/media/ujUdrdpX7Ok5W/giphy.webp" onerror="this.onerror=null;this.src="https://i.giphy.com/ujUdrdpX7Ok5W.gif" alt="">'
    
    },
    {
      element: document.querySelector('#nombre'),
      intro: 'Se puede recorrer los campos de un formulario y permitir la interacción con el mismo. Escriba un nombre'
    },
    {
      element: document.querySelector('#edad'),
      intro: 'También se puede deshabilitar la interacción con el campo de ser necesario. Trate de escribir algo.',
      disableInteraction: true
    },
    {
      element: document.querySelector('#pais'),
      intro: 'Puede hacer uso de las <b>viñetas</b> dentro de este cuadro de dialogo para ir al paso que desee.'
    },
    {
      element: document.querySelector('#option7'),
      intro: 'Intro.js puede encontrar y resaltar elementos incluso si se encuentran dentro de un elemento desplazable'
    },
    {
      element: document.querySelector('#grup'),
      intro: 'Se puede resaltar varios elementos para interactuar con ellos'
    },
    {
      element: document.querySelector('#grup2'),
      intro: 'otro ejemplo:'
    },
    {
      element: document.querySelector('#volverPaso3'),
      intro: 'Haciendo uso de intro.goToStep(3).start(); introjs te puede llevar a un paso específico. Haz clic en el botón para ir al paso 3.',
    },    
    {
      element: document.querySelector('#fecha'),
      intro: 'Intro.js encuentra automáticamente la mejor posición para el cuadro de diálogo, pero puedes definir explícitamente la posición en cada paso. En este ejemplo, lo posicionamos a la izquierda:',
      position: 'left'
    },
  ]
});


// Añadir más pasos al final del recorrido. Se puede hacer una validacion para que se agregue o no.
introJs.addStep({
  element: document.querySelectorAll('#resetid')[9],
  intro: "Este es el final del recorrido.",
  position: 'right'
});

// Iniciar el recorrido de Intro.js
introJs.start();

// Navegar a un paso específico (en este caso el paso 3) cuando sea necesario
document.querySelector('#volverPaso3').addEventListener('click', function(event) {
  event.preventDefault(); // Evita que el botón haga submit del formulario
  introJs.goToStep(3).start(); // Lógica para navegar al paso 3
});

