$('document').ready(function(){
	var passed = false;

	$('#step-1').show();
	$('#circle-1').addClass('bg-main');
		
	$('.to-step-2').on('click', function(){
		
		if(	
			($('#name').val() == "" && $('#name').is(':visible') ) ||
			$('#street').val() == "" ||
			$('#house_number').val() == "" ||
			$('#place').val() == "" ||
			$('#phone_number').val() == "" ||
			($('#email').val() == "" && $('#email').is(':visible') ) ||
			$('#birthdate').val() == "" ||
			($('#password').val() == "" && $('#password').is(':visible') ) ||
			($('#password_confirmation').val() == "" && $('#password').is(':visible') )
		){

			passed = false;
			
		}else{
			
			passed = true;
		}
		

		if(passed == true){

			$('#circle-1').removeClass('bg-main');
			$('#circle-2').addClass('bg-main');
			$('#circle-3').removeClass('bg-main');

			$('#step-1').hide();
			$('#step-3').hide();
			$('#step-2').show();

		}
		

	});



	$('.to-step-1').on('click', function(){

		


		$('#circle-1').addClass('bg-main');
		$('#circle-2').removeClass('bg-main');
		$('#circle-3').removeClass('bg-main');


		$('#step-1').show();
		$('#step-2').hide();
		$('#step-3').hide();

		

	});


	$('.to-step-3').on('click', function(){
		var passed2 = false;

		if(	
			
			($('#current_study').val() == ""  ) ||
			($('#study_year').val() == ""  ) ||
			($('#student_number').val() == ""  ) 
		){
			
			passed2 = false;
			
		}else{
			
			passed2 = true;
		}

		if(passed2 == true){

			$('#circle-1').removeClass('bg-main');
			$('#circle-2').removeClass('bg-main');
			$('#circle-3').addClass('bg-main');

			$('#step-1').hide();
			$('#step-3').show();
			$('#step-2').hide();

		}

	});



// validatie van formulieren, checks of ze niet leeg zijn.

	

});