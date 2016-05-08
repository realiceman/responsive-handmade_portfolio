  $(document).ready(function() {
    $('form').submit(function(event) { 

        var postForm = { 
            'name'     : $('input[name=name]').val(),
			'email'    : $('input[name=email]').val(),
			'phone'    : $('input[name=phone]').val(),
			'message'  : $('textarea[name=message]').val()
        };

        $.ajax({ 
            type      : 'POST', 
            url       : 'contactcontroller.php', 
            data      : postForm, 
            dataType  : 'json',
			// ici si le status = 200 alors OK on execute success
            success   : function(data) {
                                    //alert(data);
                                   // $('#finMessage').html(data); 
									//input formulaire correspondant, afficher acoté l'eerreur
									// data.responseJSON.validationErrors[key] 
									$('#finMessage').html(data.success);
									
									
								    $('.container').hide(8000);

								   
									
                            },
							// error est appelé lorsque la response HTTP porte le status : 500, 403, , 501,...
            error     :	function(data) {						
                                   
								if( data.responseJSON.validationErrors != null && data.responseJSON.validationErrors != 'undefined'){
								   for (key in data.responseJSON.validationErrors){
									//input formulaire correspondant, afficher acoté l'eerreur
									// data.responseJSON.validationErrors[key] 
									$("#"+key).after("<span >"+data.responseJSON.validationErrors[key]+"</span>");
								   
								   
								   }
								 }
								   
								 if(data.responseJSON.errorMessage != null && data.responseJSON.errorMessage != 'undefined') {  
									
									$('#finMessage').after("<span >"+data.responseJSON.errorMessage+"</span>");
								 
								 }
								   
								   
                                 //  $('#finMessage').html(data); 
								  
                                
                            }
        });
        event.preventDefault(); 
    });
	

	
	
	
});