// Array con las frases a escribir
var phrases = ["El espiritu de avanzar"];

// Índice de la frase actual
var currentPhrase = 0;

// Función para escribir la frase letra por letra
function typePhrase(phrase, i, fnCallback) {
  if (i < phrase.length) {
    document.getElementById("typing-text").innerHTML += phrase.charAt(i);
    i++;
    setTimeout(function () {
      typePhrase(phrase, i, fnCallback);
    }, 100);
  } else if (typeof fnCallback == "function") {
    setTimeout(fnCallback, 1000);
  }
}

// Función para pasar a la siguiente frase
function nextPhrase() {
  currentPhrase++;
  if (currentPhrase >= phrases.length) {
    currentPhrase = 0; // Reiniciar al primer índice si se llega al final del array
  }
  document.getElementById("typing-text").innerHTML = "";
  setTimeout(function () {
    typePhrase(phrases[currentPhrase], 0, nextPhrase);
  }, 1000);
}

// Iniciar la animación con la primera frase
typePhrase(phrases[currentPhrase], 0, nextPhrase);


window.addEventListener('DOMContentLoaded', function() {
    var blurContainer = document.querySelector('.blur-container');
  
    setTimeout(function() {
      blurContainer.classList.add('hidden');
    }, 3000); // Cambiar la duración del desenfoque (en milisegundos) según tus necesidades
  });
  




  window.addEventListener('scroll', fadeInOnScroll);

  function fadeInOnScroll() {
    var scrollSections = document.querySelectorAll('.scroll-section');
  
    scrollSections.forEach(function(section) {
      if (isScrolledIntoView(section)) {
        section.classList.add('show');
      }
    });
  }
  
  function isScrolledIntoView(element) {
    var rect = element.getBoundingClientRect();
    var elemTop = rect.top;
    var elemBottom = rect.bottom;
  
    var isVisible = (elemTop >= 0) && (elemBottom <= window.innerHeight);
    return isVisible;
  }
  
  
  
  
  // Obtener todos los elementos de clase "evento"
  const eventos = document.querySelectorAll('.evento');
  
  // Crear una instancia de Intersection Observer
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        // Agregar la clase "visible" cuando el elemento es visible en el viewport
        entry.target.classList.add('visible');
        // Dejar de observar el elemento después de mostrarlo
        observer.unobserve(entry.target);
      }
    });
  });
  
  // Observar cada elemento de clase "evento"
  eventos.forEach((evento) => {
    observer.observe(evento);
  });
  
  
  
  

  // Obtener todos los elementos de clase "content-block"
const contentBlocks = document.querySelectorAll('.content-block');

// Crear una instancia de Intersection Observer
observer = new IntersectionObserver((entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      // Agregar la clase "visible" cuando el elemento es visible en el viewport
      entry.target.classList.add('visible');
      // Dejar de observar el elemento después de mostrarlo
      observer.unobserve(entry.target);
    }
  });
});

// Observar cada elemento de clase "content-block"
contentBlocks.forEach((block) => {
  observer.observe(block);
});



		window.addEventListener('DOMContentLoaded', function() {
	var slides = document.querySelectorAll('.slide');
	var currentSlide = 0;
	var slideInterval = setInterval(nextSlide, 3000); // Cambia la imagen cada 3 segundos

	function nextSlide() {
		slides[currentSlide].classList.remove('active');
		currentSlide = (currentSlide + 1) % slides.length;
		slides[currentSlide].classList.add('active');
	}
});


window.addEventListener('scroll', fadeInOnScroll);

function fadeInOnScroll() {
  var contentBlock = document.getElementById('content-block');
  var contentPosition = contentBlock.getBoundingClientRect().top;
  var screenPosition = window.innerHeight / 1.5; /* Ajusta el valor según sea necesario */

  if (contentPosition < screenPosition) {
    contentBlock.style.opacity = '1';
  }
}
