
		// logIn_page

function checkValidation() {
	let password = document.getElementById("password").value;
	 let passwordSize = password.length;

	if(passwordSize <= 6){

		var passwordErrorElement = document.getElementById("password-error")
		passwordErrorElement.innerHTML = "Password must be atleast 6 character."
	}
}
function showPassword(){
 var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }	
}