
$("#myForecast").click(function(event) {

	event.preventDefault();

	$(".alert").hide();

	if ($("#city").val()!="") {

		$.get("scraper.php?city="+$("#city").val(), function(data) {

		$("#success").html(data).fadeIn();

		if (data=="") {

			
			$("#fail").fadeIn();


		} else {
			
			$("#success").html(data).fadeIn();
		}

	});

	} else {

		$("#blankCity").fadeIn();
	}
});