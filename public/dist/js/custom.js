$(document).ready(function(){
	//OUt Door Admission
	$("input[type='radio']").click(function(){
		var radioValue = $("input[name='type']:checked").val();
		if (radioValue == "self") {
			$(".reference").removeClass('d-none');
			$(".card-number").addClass('d-none');
			$(".corporate").addClass('d-none');
		}else if(radioValue == "card"){
			$(".card-number").removeClass('d-none');
			$(".reference").addClass('d-none');
			$(".corporate").addClass('d-none');
		}else if(radioValue == "corporate"){
			$(".corporate").removeClass('d-none');
			$(".reference").addClass('d-none');
			$(".card-number").addClass('d-none');
		}
	});

	//End Out Door Admission

	// Get Existing  Inventory material quantity
	
});