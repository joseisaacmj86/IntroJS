introJs().setOptions({
  //showBullets: false, //para ocultar viñetas en el recorrido
  //showButtons: false, //para ocultar todos los botones
  steps: [{
    title: 'Bienvenido',
    intro: 'Soy tu asistete con Introjs! 👋'
  },
  {
    element: document.querySelector('.card-demo'),
    intro: 'This <b>STEP</b> focuses on an image. <br/> We also used some HTML tags!'
  },
  {
    title: 'Se puede cargar imagenes',
    intro: '<img src="https://i.giphy.com/media/ujUdrdpX7Ok5W/giphy.webp" onerror="this.onerror=null;this.src="https://i.giphy.com/ujUdrdpX7Ok5W.gif" alt="">'
    
  },
  {
    element: document.querySelector('#nombre'),
    intro: 'Se puede recorer los campos de un formulario y permitir la interacción con el mismo'
  },
  {
    element: document.querySelector('#edad'),
    intro: 'tambien se puede deshabilitar la interacción con el campo de ser necesario.'
  },
  {
    element: document.querySelector('#pais'),
    intro: 'Se puede recorer los campos de un formulario y permitir la interacción con el mismo'
  },
  {
    element: document.querySelector('#option7'),
    intro: 'Intro.js puede encontrar y resaltar elementos incluso si se representan dentro de un elemento desplazable'
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
    element: document.querySelector('#fecha'),
    intro: 'Intro.js encuentra automáticamente la mejor posición para el cuadro de dialogo, pero puedes definir explícitamente la posición en cada paso. En este ejemplo, lo posicionamos a la izquierda:',
    position: 'left'
  },
  {
    element: document.querySelector('#nombre'),
    intro: 'Se puede recorer los campos de un formulario y permitir la interacción con el mismo'
    
  }]
}).start();

introJs().goToStep(2).start(); 
