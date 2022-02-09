
		// logIn_page

function checkValidation() {
	let password = document.getElementById("password").value;
	 let passwordSize = password.length;
	 var passwordErrorElement = document.getElementById("password-error")
	 let errorMessage = ""
	if(!password){
		errorMessage = "Password cann't be empty."
	 } else if (passwordSize <= 6) {
		
		 errorMessage = "Password must be atleast 6 character."
	}
	passwordErrorElement.innerHTML = errorMessage
}
function showPassword(){
 var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }	
}