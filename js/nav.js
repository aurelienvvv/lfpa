$("body").on("click", ".mob-burger", burgerMobileMenu);

function burgerMobileMenu() {
  // Au click sur l'icone burger, ajoute la class open à la nav et au burger
  $(".nav-list").toggleClass("open");
  $(".mob-burger").toggleClass("open");
}

var tl = new TimelineMax();

tl.from(".logo-wrapper", 1, { opacity: 0, y: 15, ease: "Power0.inOut" });
tl.staggerFrom(
  ".nav-list li",
  0.5,
  { opacity: 0, y: 20, ease: "Power4.inOut" },
  0.1,
  "-=0.7"
);
tl.staggerFrom(
  ".bk-header-video .wrapper-text span",
  0.7,
  {
    opacity: 0,
    y: 20,
    ease: "Power4.inOut"
  },
  0.1
);
tl.from(
  ".bk-heading-title",
  0.7,
  {
    opacity: 0,
    y: 20,
    ease: "Power4.inOut"
  },
  "-=1"
);
tl.from(
  ".day-films-title",
  0.7,
  {
    opacity: 0,
    y: 20,
    ease: "Power4.inOut"
  },
  "-=0.8"
);
tl.from(".news-wrapper", 1, { y: 20, opacity: 0 }, "-=0.6");
tl.from(".bk-infos-map", 1, { y: 20, opacity: 0 }, "-=0.9");
tl.from(".bk-subscription", 1, { y: 20, opacity: 0 }, "-=1.3");
tl.from(".bk-film-header", 1, { y: 20, opacity: 0 }, "-=1.3");
