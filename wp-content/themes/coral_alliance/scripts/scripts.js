$(".feature2__mainLink").click(function(event) {
  var target = $(this.hash);
  event.preventDefault();
  $("html, body").animate(
    {
      scrollTop: target.offset().top
    },
    600
  );
});

$(".articleCard").click(function(event) {
  event.preventDefault();
  var link = $(this)
    .find("a")
    .attr("href");
  console.log("CLICKED", link);
  window.location = link;
});
