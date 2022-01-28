
$(document).ready(function() {
	$(function(){
		$('#modalButtonRegistrar').click(function (){
			$('#modalHelcio').modal('show')
			.find('#modalContentHelcio')
			.load($(this).attr('value'));
		});
		 $("#closeModal").click(function () {
	        window.location.reload();
	    });
		$('#modalButtonEntrar').click(function (){
			$('#modalHelcio').modal('show')
			.find('#modalContentHelcio')
			.load($(this).attr('value'));
		});
	});
});

