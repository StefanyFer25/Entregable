// Animación de aparición al hacer scroll
const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
      }
    });
  },
  { threshold: 0.3 }
);

document.querySelectorAll(".fade-in").forEach((el) => observer.observe(el));

// Efecto máquina de escribir en los títulos
document.addEventListener("DOMContentLoaded", () => {
  const titulos = document.querySelectorAll(".titulo");

  titulos.forEach((titulo, index) => {
    const texto = titulo.textContent;
    titulo.textContent = "";
    let i = 0;

    setTimeout(() => {
      const intervalo = setInterval(() => {
        if (i < texto.length) {
          titulo.textContent += texto.charAt(i);
          i++;
        } else {
          clearInterval(intervalo);
        }
      }, 80);
    }, index * 400);
  });
});
