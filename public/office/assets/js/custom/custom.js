// Scroll to contact page
$(".call-button").click(function() {
  $("html, body").animate(
    {
      scrollTop: $("#target").offset().top
    },
    0
  );
});

//Scroll to top for home page
$(".page-top").click(function() {
  $("html, body").animate(
    {
      scrollTop: $(".contacts-section").offset().top
    },
    1000
  );
});

// $(".page-top").click(function() {
//   $("html, body").animate(
//     {
//       scrollTop: $(".about-section, .news-section").offset().top
//     },
//     2000
//   );
// });

$(".page-top").click(function() {
  $("html, body").animate(
    {
      scrollTop: $(".carousel-container, .about-section, .news-section").offset().top
    },
    2000
  );
});

//Carousel speed
$(".carousel").carousel({
  interval: 3000
});

//Owl carousel speed and animation
$(".owl-clients-v2").owlCarousel({
  autoPlay: 1500,
  //autoPlay: true, <-- if you want to set default slide time (5000)
  slideSpeed: 800,
  paginationSpeed: 500,
  navigation: true
});
