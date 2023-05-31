// Obtener todas las tarjetas pequeñas
var smallCards = document.querySelectorAll('.small-card');

// Obtener la tarjeta grande
var largeCard = document.querySelector('.large-card');

// Recorrer todas las tarjetas pequeñas y agregar un evento de clic a cada una
smallCards.forEach(function(card) {
  card.addEventListener('click', function() {

    // Cogemos la imagen y el contenido de lo que se haga click
    var cardContent = card.querySelector('.content-2').innerHTML;
    var cardImage = card.querySelector('img').getAttribute('src');

    // Actualizar el contenido y la imagen de la tarjeta grande
    largeCard.querySelector('.content-2').innerHTML = cardContent;
    largeCard.querySelector('img').setAttribute('src', cardImage);
    
  });
});
function toggleForm() {
  var form = document.getElementById('messageForm');
  form.style.display = form.style.display === 'none' ? 'block' : 'none';
}









