// Seleciona a imagem sobreposta
var image = document.getElementById('moving-image');
var image_bg = document.getElementById('moving-image_bg');

// Função para atualizar a posição da imagem com base no scroll
function updateImagePosition() {
  // Obtém a posição atual de rolagem vertical da página
	var scrollTop = window.scrollY || window.pageYOffset;
	var scrollTop_bg = window.scrollY || window.pageYOffset;

  // Calcula a posição oposta baseada no scroll
	var oppositePosition = 50 - scrollTop * 0.7; // Ajuste o fator 0.5 conforme necessário para controlar a velocidade do movimento
	var oppositePosition_bg = 50 - scrollTop_bg * 0.1; // Ajuste o fator 0.5 conforme necessário para controlar a velocidade do movimento
	
  // Atualiza a posição vertical da imagem
	image.style.top = oppositePosition + 'px';
	image_bg.style.top = oppositePosition_bg + 'px';
}

// Adiciona um listener para o evento de scroll
window.addEventListener('scroll', function() {
  // Chama a função para atualizar a posição da imagem
  updateImagePosition();
});

// Atualiza a posição inicial da imagem ao carregar a página
updateImagePosition();