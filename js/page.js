$(document).ready(function(){

	$("body").fadeIn(1000);

	$('#content').load('content/home.php').hide().fadeIn(1000);

	$('div#menubar1 a').click(function(event){
		var page = $(this).attr('href');
		$('#content').load('content/' + page + '.php').hide().fadeIn(500);


		//document.write($(this).siblings().hasClass('active'));
		if ($(this).siblings('a').hasClass('active')) {
			$(this).siblings('a').removeClass('active');
			$(this).addClass("active");
		}
		else{
			$(this).addClass("active"); //Add "active" class to selected tab
		}
		event.preventDefault();

		//document.write($(this).prop("tagName"));
		return false;
	})

})