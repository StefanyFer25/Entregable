// 🌟 Efecto de aparición progresiva y resplandor dinámico
document.addEventListener("DOMContentLoaded", () => {
    const productos = document.querySelectorAll(".producto, .card, .product, .producto-relacionado");
  
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry, i) => {
        if (entry.isIntersecting) {
          setTimeout(() => entry.target.classList.add("visible"), i * 100);
        }
      });
    }, { threshold: 0.2 });
  
    productos.forEach(p => {
      observer.observe(p);
  
      // 💜 Crear resplandor dinámico
      const glow = document.createElement("div");
      glow.classList.add("resplandor");
      p.appendChild(glow);
  
      p.addEventListener("mousemove", e => {
        const rect = p.getBoundingClientRect();
        glow.style.left = `${e.clientX - rect.left}px`;
        glow.style.top = `${e.clientY - rect.top}px`;
        glow.style.opacity = 1;
      });
  
      p.addEventListener("mouseleave", () => {
        glow.style.opacity = 0;
      });
    });
  });
  
// ===============================
// MODAL DE PRODUCTOS
// ===============================
document.addEventListener("DOMContentLoaded", () => {
  const cards = document.querySelectorAll(".card");
  const modal = document.getElementById("modal");
  const modalImg = document.getElementById("modal-img");
  const modalTitle = document.getElementById("modal-title");
  const modalDesc = document.getElementById("modal-desc");
  const modalPrice = document.getElementById("modal-price");
  const closeBtn = document.querySelector(".close");

  cards.forEach(card => {
    card.addEventListener("click", () => {
      const img = card.querySelector("img").src;
      const title = card.querySelector("h4").textContent;
      const desc = card.querySelector("p").textContent;
      const price = card.querySelector(".price").textContent;

      modalImg.src = img;
      modalTitle.textContent = title;
      modalDesc.textContent = desc;
      modalPrice.textContent = price;

      modal.style.display = "block";
    });
  });

  closeBtn.addEventListener("click", () => {
    modal.style.display = "none";
  });

  window.addEventListener("click", (e) => {
    if (e.target === modal) {
      modal.style.display = "none";
    }
  });
});
