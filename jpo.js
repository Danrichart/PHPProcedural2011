	
function toggleMenu(objID) {
			if (!document.getElementById) return;
			var ob = document.getElementById(objID).style;
			ob.display = (ob.display == 'block')?'none': 'block';
}

		
function check_form(obj) {
	var login = obj.login.value;
	var pass = obj.pass.value;
	var submit = false;
			
	if(login == "")
		alert("Please enter a Login");		
	else if(pass == "") 
		alert("Please enter a Password");
	else
		submit = true;
	
	return submit;
}


			function check_form(obj) {
			
			var fname = obj.fname.value.toLowerCase();
			var lname = obj.lname.value.toLowerCase();
			var phone = obj.phone.value.toLowerCase();
			var email = obj.email.value.toLowerCase();
			var login = obj.login.value.toLowerCase();
			var pass = obj.pass.value.toLowerCase();
			var passc = obj.passc.value.toLowerCase();
			var submit = false;
			
			if(fname == "")
				alert("Please enter Firstname");		
			else if(lname == "") 
				alert("Please enter Lastname");
			else if(phone == "")
				alert("Please enter Phone Number");
			else if(email == "")
				alert("Please enter a Email Address");
			else if(login == "")
				alert("Please enter a Login");
			else if(pass == "")
				alert("Please enter a Password");
			else if(passc == "")
				alert("Please enter a Password Again");
			else if(pass != passc)
				alert("Passwords don't match");
			else
				submit = true;
				
				return submit;
			}
			function emailFormat(obj) {
				var email = obj.value.toLowerCase();
				var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
				if(email != null || email != "") {
					if(email.search(emailRegEx) == -1) {
						alert("Please enter a valid email address.");
						obj.value = "";
					}
				}
			}
			
			function screenPhone(obj)
		    {
		        var str = new String(obj.value);
		        var newstr = new String (str.replace(/\D*/g, ""));

		        if(newstr.length > 3)
		        {
		            var areacode = newstr.substr(0,3);
		            var n3 = newstr.substr(3,3);

		            var newvalue = areacode + "-";
		            newvalue = newvalue + n3;

		            if(newstr.length > 6)
		            {
		                n4 = newstr.substr(6,4);
		                newvalue = newvalue + "-" + n4;
		            }

		        obj.value = newvalue;

		        }
		        else
		            obj.value = newstr;
		    }
			
			
				function verify(obj) {
				var status = false;

				var email = obj.email.value.toLowerCase();
				var nemail = obj.nemail.value.toLowerCase();
				var cpass = obj.cpass.value.toLowerCase();
				var npass = obj.npass.value.toLowerCase();
				var passc = obj.passc.value.toLowerCase();
				
				

				if( email != null || email != "" ) {
					
					if( email != nemail ) 
						alert("Please Enter matching Email Address twice");	
					else if( cpass == "" )
						status = true;
				}
				
				if( cpass != "") {
					if(cpass == "")
						alert("Please enter current password");
					else if(npass == "")
						alert("Please enter a new password");
					else if(passc == "")
						alert("Please enter new password twice");
					else if(npass != passc)
						alert("Passwords Don't Match");
					else
						status = true;
					}
				return status;
			}	