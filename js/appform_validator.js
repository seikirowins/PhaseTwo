$(function()
{

	$("#submit").click(function()
	{
		$("#appform").validate({
			rules:{
				"fname":{
					required:true,
					maxlength:20
				},
				"lname":{
					required:true,
					maxlength:20
				},
				"mname":{
					
					maxlength:20
				},
				"gender":"required",
				"bday":"required",
				
				"placebirth":{
					required:true,
					maxlength:20
				},
				"religion":{
					required:true,
					maxlength:20
				},
				"father":{
					required:true,
					maxlength:20
				},
				"mother":{
					required:true,
					maxlength:20
				},
				"father_occup":{
					required:true,
					maxlength:20
				},
				"mother_occup":{
					required:true,
					maxlength:20
				},
				"street":{
					required:true,
					maxlength:20
				},
				"Municipality":{
					required:true,
					maxlength:20
				},
				"city":{
					required:true,
					maxlength:20
				},
				"landline":{
					number:true,
					
				},
				"mobile_no":{
					required:true,
					"number":true
					
				},
				"email":{
					required:true,
					email:true
				}
			},
			messages:{
				"fname":{
					required:"Enter your first name"
				},
				"mobile_no":{
					max:"Your phone number is more than 11 digit"
				},
				"lname":{
					required:"Enter your family name"
				},
				
				"gender":{
					required:"Specify your gender"
				},
				"month":{
					required:"Specify month you were born"
				},
				"day":{
					required:"Specify the Day you were born"
				},
				"year":{
					required:"Specify the year you were born"
				},
				"placebirth":{
					required:"Specify the place where you were born"
				},
				"religion":{
					required:"Specify your religion"
				},
				"father":{
					required:"Enter your father's name"
				},
				father_occup:{
					required:"Enter your father occupation"
				},
				"mother":{
					required:"Enter your mother's name"
				},
				"mother_occup":{
					required:"Enter your mother occupation"
				}

			}
		})
	})

})