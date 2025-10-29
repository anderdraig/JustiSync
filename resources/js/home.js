const slides = document.querySelector('.slides');
const slideCount = slides.children.length;
const dots = document.querySelectorAll('.dot');
let index = 0;

const updateCarousel = () => {
  slides.style.transform = `translateX(-${index * 100}%)`;
  dots.forEach((dot, i) => {
    dot.classList.toggle('bg-white', i === index);
    dot.classList.toggle('bg-white/40', i !== index);
  });
};

// Botones
document.getElementById('prevBtn').addEventListener('click', () => {
  index = (index - 1 + slideCount) % slideCount;
  updateCarousel();
});

document.getElementById('nextBtn').addEventListener('click', () => {
  index = (index + 1) % slideCount;
  updateCarousel();
});

// Indicadores
dots.forEach((dot, i) => {
  dot.addEventListener('click', () => {
    index = i;
    updateCarousel();
  });
});

// Auto-play
setInterval(() => {
  index = (index + 1) % slideCount;
  updateCarousel();
}, 6000);

updateCarousel();
