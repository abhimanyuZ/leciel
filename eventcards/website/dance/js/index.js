
  var main = new Rellax('.main', {
    speed: -2,
    center: false,
    round: true,
    vertical: true,
    horizontal: false
  });

  var name = new Rellax('.name', {
    speed: -2,
    center: false,
    round: true,
    vertical: true,
    horizontal: false
  });

  var container = new Rellax('.container', {
    speed: -2,
    center: false,
    round: true,
    vertical: true,
    horizontal: false
  });

  $(".tab-list").on("click", ".tab", function(e) {
	e.preventDefault();

	$(".tab").removeClass("active");
	$(".tab-content").removeClass("show");
	$(this).addClass("active");
	$($(this).attr("href")).addClass("show");
});
