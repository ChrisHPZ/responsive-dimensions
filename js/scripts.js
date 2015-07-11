$(document).ready(function(){
	var header = $('#header').outerWidth();
	var fourty = $(".dimensions-fourty").outerWidth();
	var fifty = $(".dimensions-fifty").outerWidth();
	var thirty_three = $(".dimensions-thirty-three").outerWidth();
	var twenty_five = $(".dimensions-twenty-five").outerWidth();
	var ten = $(".dimensions-ten").outerWidth();
	var seventy = $(".dimensions-seventy").outerWidth();
	$(window).on('resize', function(){
		$('.dimensions-fifty').append(" <br />Calculated Width: " + fifty + "px");
		$('.dimensions-fourty').append(" <br />Calculated Width: " + fourty + "px");
		$('.dimensions-thirty-three').append(" <br />Calculated Width: " + thirty_three + "px");
		$('.dimensions-twenty-five').append(" <br />Calculated Width: " + twenty_five + "px");
		$('.dimensions-ten').append(" <br />Calculated Width: " + ten + "px");
		$(".dimensions-seventy").append(" <br />Calculated Width: " + seventy + "px");
	});
});

$(document).ready(function(){
	/*$('#sidebar').load('content.php');*/
	$.ajax({
		type: 'get',
		url: 'content.php',
		cache: false,
		success: function(data) {
			$('#sidebar').html(data);
		},
		error: function() {
			$('#sidebar').text('An Error Occured');
		}
	});
});
});