var images = document.querySelectorAll(".image-parallax");
var texts = document.querySelectorAll(".text-parallax");
new simpleParallax(texts, {
  delay: 0,
  orientation: "up",
  scale: 1.3,
  overfow: true
  // customContainer: ".infos-wrapper"
});

new simpleParallax(images, {
  delay: 0.5,
  orientation: "down",
  scale: 1.2
});
