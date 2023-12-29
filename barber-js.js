function toggleBodyOverflow() {
  const body = document.querySelector('body');
  if (body.style.overflow === 'hidden') {
    body.style.overflow = 'auto'; // Abilita lo scorrimento
  } else {
    body.style.overflow = 'hidden'; // Disabilita lo scorrimento
  }
}

document.addEventListener("DOMContentLoaded", function() {
  const menuToggle = document.getElementById("menu-bar");
  const menu = document.getElementById("menu");
  const exitMenu = document.getElementById("exit-menu");

  menuToggle.addEventListener("click", function() {
      menu.classList.toggle("show");
      exitMenu.classList.toggle("show");
      toggleBodyOverflow(); // Chiama la funzione per cambiare l'overflow del body
  });

  exitMenu.addEventListener("click", function() {
      menu.classList.remove("show");
      exitMenu.classList.remove("show");
      toggleBodyOverflow(); // Chiama la funzione per cambiare l'overflow del body
  });
});
;