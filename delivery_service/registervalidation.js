window.onload = function(){
const firstname = document.getElementById('fName')
const lastname = document.getElementById('lName')
const contacts = document.getElementById('contact')
const emailadd = document.getElementById('email')
const add = document.getElementById('address')
const user = document.getElementById('username')
const pass = document.getElementById('password')
const repass = document.getElementById('repassword')
const fOrm = document.getElementById('form')

//addEventListener
fOrm.addEventListener('submit', (e)=> {

	const fnameval = firstname.value.trim();
	const lnameval = lastname.value.trim();
	const conval = contacts.value.trim();
	const emval = emailadd.value.trim();
	const addval = add.value.trim();
	const userval = user.value.trim();
	const passval = pass.value.trim();
	const repassval = repass.value.trim();

	var alphanumeric=/^[0-9a-zA-Z]+$/
	var alphabet=/^[a-zA-Z]+$/
	var numeric=/^[0-9]+$/
	var foremail = /^[a-z0-9._%-]+@[a-z0-9.-]+\.[a-z]{2,4}$/

	if(fnameval == ""){
		setErrorFor(fName, "Firstname can't be blank");
		e.preventDefault();
	}else if(fnameval.match(alphabet)){
		setSuccessFor(fName);
	}else{
		setErrorFor(fName, "Firstname is invalid");
		e.preventDefault();
	}
	if(lnameval == ""){
		setErrorFor(lName, "Lastname can't be blank");
		e.preventDefault();
	}else if(lnameval.match(alphabet)){
		setSuccessFor(lName);
	}else{
		setErrorFor(lName, "Lastname is invalid");
		e.preventDefault();
	}
	if(conval == ""){
		setErrorFor(contact, "Contact # can't be blank");
		e.preventDefault();
	}else if(conval.match(numeric)){
		setSuccessFor(contact);
	}else{
		setErrorFor(contact, "Contact # is invalid");
		e.preventDefault();
	}
	if(emval == ""){
		setErrorFor(email, "Email Address can't be blank");
		e.preventDefault();
	}else if(emval.match(foremail)){
		setSuccessFor(email);
	}else{
		setErrorFor(email, "Email is invalid");
		e.preventDefault();
	}
	if(addval == ""){
		setErrorFor(address, "Address can't be blank");
		e.preventDefault();
	}else if(addval.match(alphanumeric)){
		setSuccessFor(address);
	}else{
		setErrorFor(address, "Address is invalid");
		e.preventDefault();
	}
	if(userval == ""){
		setErrorFor(username, "Username can't be blank");
		e.preventDefault();
	}else if(userval.match(alphanumeric)){
		setSuccessFor(username);
	}else{
		setErrorFor(username, "Username is invalid");
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