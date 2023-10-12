window.onload = function(){
const fOrm = document.getElementById('form')  
const user = document.getElementById('user')
const pass = document.getElementById('pass')

fOrm.addEventListener('submit', (e)=>{

	const uservalid = user.value.trim();
	const passvalid = pass.value.trim();

	var alphanumeric=/^[0-9a-zA-Z]+$/

	if(uservalid == ""){
		setErrorFor(user, "Username can't be blank");
		e.preventDefault();
	}else if(uservalid.match(alphanumeric)){
		setSuccessFor(user);
	}else{
		setErrorFor(user, "Username is invalid");
		e.preventDefault();
	}
	if(passvalid == ""){
		setErrorFor(pass, "Password can't be blank");
		e.preventDefault();
	}else if(passvalid.match(alphanumeric)){
		setSuccessFor(pass);
	}else{
		setErrorFor(pass, "Password is invalid");
		e.preventDefault();
	}
	return true;

function setErrorFor(input, message){
const formControl = input.parentElement
const small = formControl.querySelector('small');
small.style.visibility = "visible";
small.innerText = message;	

formControl.className = 'form-control error';
}

function setSuccessFor(input){
const formControl = input.parentElement
const small = formControl.querySelector('small');
small.style.visibility = "hidden";
small.innerText = "";
formControl.className = "form-control success";
}	

});

}


