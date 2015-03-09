$(document).ready(function(){
		$("#navbtn1").click(function(){
		$("#navbtn2").removeClass('gevrek');
		$("#umrideni").removeClass('gevrek');
		$("#navbtn1").addClass('gevrek');
			
	});
});
  
  

     $(document).ready(function(){
		$("#navbtn2").click(function(){
			$("#navbtn1").removeClass('gevrek');
			$("#umrideni").removeClass('gevrek');
			$("#navbtn2").addClass('gevrek');	
		});
	});

  
  
     $(document).ready(function(){
		$("#umrideni").click(function(){
		$("#navbtn1").removeClass('gevrek');
		$("#navbtn2").removeClass('gevrek');
		$("#umrideni").addClass('gevrek');
			
			
	});
});

  

	
    $('input.form-control').click(function(e) {
        e.stopPropagation();
    });
