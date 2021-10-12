$(document).ready(function(e){

    // forgot password
	$("#unutma-formu").validate({
        // assign the function to the submit button
		submitHandler: function(form) {
			$("#btnSubmit").attr("disabled","disabled");
			//$('#btnSubmit').button('loading');
			form.submit();
		},
		// rules for each element of the form
		rules: {
			name: {
				required: true,
				name: true
			},
			email: {
				required: true,
				email: true
			}
		},
        // if there is an error display the error message in the 'help-box'-classed div
		errorPlacement: function(error, element) {
			$(element).removeClass("hata-yok").addClass("hata-var");
		},
		highlight: function(element) {
			$(element).removeClass("hata-yok").addClass("hata-var");
		},
        // when the error is fulfilled, remove the error message from the 'help-box'-classed div
		unhighlight: function(element, errorClass, validClass) {
			 $(element).removeClass('hata-var').addClass('hata-yok');
		}
	});

    function formCheck(form, zRules, zMessages) {
        $("#"+form).validate({
    		// assign the function to the submit button
    		submitHandler: function(form) {
    		    $("#btnSubmit").attr("disabled","disabled");
    			//$('#btnSubmit').button('loading');
    			form.submit();
    		},
            // rules for each element of the form
    		rules: zRules,
    		// warning messages unless the rules are not handled
    		messages: zMessages,
    		// if there is an error display the error message in the 'help-box'-classed div
    		errorPlacement: function(error, element) {
    			$(element).parent().next(".help-box").html(error.html());
    		},
    		highlight: function(element) {
    			$(element).parent().next(".help-box").addClass("alertBack whiteText animation");
    			$(element).parent().next(".help-box").css("padding", "16px");
    		},
    		// when the error is fulfilled, remove the error message from the 'help-box'-classed div
    		unhighlight: function(element) {
				 $(element).parent().next(".help-box").css("padding", "0");
    			 $(element).parent().next(".help-box").removeClass("alertBack whiteText animation");
    			 $(element).parent().next(".help-box").html("");
    		}
    	});
    }

    // user create form
    formCheck("zUser-create-form",
    {
        site_name: {
            required: true
        },
        name: {
            required: true
        },
        surname: {
            required: true,
			alreadyexist: function() { return [$('#name').val(), $('#surname').val()]; }
        },
        email: {
            required: true
        },
        rank: {
            required: true
        },
        password: {
            required: true
        },
        confirm_password: {
            required: true,
            equalTo: '#password'
        }
    },
    {
        site_name: {
            required: formMessages.site_name_req
        },
        name: {
            required: formMessages.name_req
        },
        surname: {
            required: formMessages.surname_req,
            alreadyexist: formMessages.name_remote
        },
        email: {
            required: formMessages.email_req
        },
        rank: {
            required: formMessages.rank_req
        },
        password: {
            required: formMessages.password_req
        },
        confirm_password: {
            required: formMessages.confirm_password_req,
            equalTo: formMessages.confirm_password_equal
        }
    });

});
