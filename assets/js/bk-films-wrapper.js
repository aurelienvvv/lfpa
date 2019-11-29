$(".bk-films-wrapper").slick({
  centerMode: true,
  centerPadding: "50px",
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 480,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: "10px",
        slidesToShow: 1
      }
    },
    {
      breakpoint: 900,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: "100px",
        slidesToShow: 1
      }
    }
  ]
});
