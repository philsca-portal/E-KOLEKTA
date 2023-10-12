window.onload = function(){
const name = document.getElementById('nAme')
const user = document.getElementById('user')
const pass = document.getElementById('password')
const repass = document.getElementById('repassword')
const fOrm = document.getElementById('form')

//addEventListener
fOrm.addEventListener('submit', (e)=> {

	const nameval = name.value.trim();
	const userval = user.value.trim();
	const passval = pass.value.trim();
	const repassval = repass.value.trim();

	var alphanumeric=/^[0-9a-zA-Z]+$/
	var alphabet= /[a-zA-Z][a-zA-Z ]+[a-zA-Z]$/
	var numeric=/^[0-9]+$/

	if(nameval == ""){
		setErrorFor(nAme, "Firstname can't be blank");
		e.preventDefault();
	}else if(nameval.match(alphabet)){
		setSuccessFor(nAme);
	}else{
		setErrorFor(nAme, "Firstname is invalid");
		e.preventDefault();
	}
	if(userval == ""){
		setErrorFor(user, "Username can't be blank");
		e.preventDefault();
	}else if(userval.match(alphanumeric)){
		setSuccessFor(user);
	}else{
		setErrorFor(user, "Username is invalid");
		e.preventDefault();
	}
	if(passval == "" || repassval == ""){
		setErrorFor(password, "Password can't be blank");
		setErrorFor(repassword, "Repassword can't be blank");
		e.preventDefault();
	}else if(passval != repassval){
		setErrorFor(password, "Password don't match");
		setErrorFor(repassword, "Password don't match");
		e.preventDefault();
	}else if(passval == repassval){
		setSuccessFor(password);
		setSuccessFor(repassword);
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