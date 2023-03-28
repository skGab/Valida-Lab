// Espera a página ser carregada
window.addEventListener('load', () => {
  // Pega os elementos do DOM
  const header = document.getElementById('header');
  const figure = document.querySelector('#header figure');
  const figureImg = document.querySelector('.logo');
  const navbar = document.getElementById('navbarNavAltMarkup');

  // Adiciona um evento de scroll na janela
  window.addEventListener('scroll', () => {
    // Se o usuário já tiver rolado 50 pixels
    if (window.pageYOffset > 50) {
      // Diminui o tamanho da imagem
      figureImg.style.maxWidth = '200px';

      // Remove a margem do topo do elemento Figure
      figure.style.marginTop = '0';

      // Remove a margem e o padding do elemento navbar
      navbar.style.marginBottom = '0';
      navbar.style.paddingBottom = '0';

      // Adiciona um background no Header
      header.style.backdropFilter = 'blur(10px)';
    } else {
      // Se o usuário ainda não rolou 50 pixels
      // Retorna todos os estilos ao valor padrão
      figureImg.style.maxWidth = '320px';
      figure.style.marginTop = '3rem';
      navbar.style.marginBottom = '3rem';
      navbar.style.paddingBottom = '3rem';
      header.style.backdropFilter = 'none';
    }
  });
});

// <!-- SERVICE WORKER -->
// if ('serviceWorker' in navigator) {
//   navigator.serviceWorker.register('/service-worker.js');
// }
