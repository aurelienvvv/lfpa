$("body").on("click", ".mob-burger", burgerMobileMenu);

function burgerMobileMenu() {
  // Au click sur l'icone burger, ajoute la class open à la nav et au burger
  $(".nav-list").toggleClass("open");
  $(".mob-burger").toggleClass("open");
}
