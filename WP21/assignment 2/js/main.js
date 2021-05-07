function validateForm(){
	var name = document.getElementById('name').value
	var age = document.getElementById('Age').value
	var city = document.getElementById('city').value
	var email = document.getElementById('email').value
	var phoneno = document.getElementById('phoneNo').value

	var letters = /^[A-Za-z]+$/;
	var numbers = /^[0-9]+$/;
	var mails   = /^[^\s@]+@[^\s@]+$/;

	var name_valid = name.match(letters)
	var city_valid = city.match(letters)
	var age_valid  = age.match(numbers)
	var phoneno_valid  = phoneno.match(numbers)
	var email_valid = mails.test(email)

	return (name_valid && city_valid && age_valid && phoneno_valid && email_valid)

}

function writeFormData(){
	$("#form-content").css({"display": "flex"});

	var name = document.getElementById('name').value
	var age = document.getElementById('Age').value
	var city = document.getElementById('city').value
	var email = document.getElementById('email').value
	var phoneno = document.getElementById('phoneNo').value

	document.getElementById("form-content").innerHTML = `
                <table class="table table-hover">
                    <tbody>
                    <tr>
                        <th scope="row">Name</th>
                        <td>` +name+ `</td>
                    </tr>
                    <tr>
                        <th scope="row">Age</th>
                        <td>` +age+ `</td>
                    </tr>
                    <tr>
                        <th scope="row">City</th>
                        <td>` +city+ `</td>
                    </tr>
                    <tr>
                        <th scope="row">E-mailadres</th>
                        <td>` +email+ `</td>
                    </tr>
                    <tr>
                        <th scope="row">Phone number</th>
                        <td>` +phoneno+ `</td>
                    </tr>
                    </tbody>
                </table>
    `
}

function erase(){
	document.getElementById("myform").reset()
	$("#form-alert").css({"display": "none"});
	$("#form-content").css({"display": "none"});
}


$(function() {

	$("#submitBtn").click(function(){     
	    var is_valid = validateForm();

	    if(is_valid){
	    	writeFormData()
	    }else{
	    	$("#form-alert").css({"display": "flex"});
	    }
	});


   	$("#eraseBtn").click(function(){ 
   		erase();
    });

    $("#link-tab").click(function(){  
    	$("#link-tab").addClass("active")
    	$("#contact-tab").removeClass("active")

    	$("#links").addClass("active")
    	$("#contact").removeClass("active")
    });

    $("#contact-tab").click(function(){  
    	$("#contact-tab").addClass("active")
    	$("#link-tab").removeClass("active")

    	$("#links").removeClass("active")
    	$("#contact").addClass("active")
    });
    $("#button").click(function(){     
        if ($("#list").css("display") === "none"){
            jQuery("#list").fadeIn("slow");
        }
        else {
            jQuery("#list").fadeOut("slow");
        }
    });

});

