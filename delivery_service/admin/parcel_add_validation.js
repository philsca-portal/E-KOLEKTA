window.onload = function(){
const firstname = document.getElementById('fName')
const middlename = document.getElementById('mName')
const lastname = document.getElementById('lName')
const contacts = document.getElementById('cOntact')
const address = document.getElementById('aDdress')
const first = document.getElementById('FName')
const middle = document.getElementById('MName')
const last = document.getElementById('LName')
const contact = document.getElementById('COntact')
const des = document.getElementById('DEstination')
const size = document.getElementById('sIze')
const weight = document.getElementById('wEight')
const fOrm = document.getElementById('form')

//addEventListener
fOrm.addEventListener('submit', (e)=> {

	const fnameval = firstname.value.trim();
	const mnameval = middlename.value.trim();
	const lnameval = lastname.value.trim();
	const conval = contacts.value.trim();
	const addval = address.value.trim();
	const eFFNAMEVAL = first.value.trim();
	const eMNAMEVAL = middle.value.trim();
	const eLNAMEVAL = last.value.trim();
	const eCONVAL = contact.value.trim();
	const eDESVAL = des.value.trim();
	const sizeval = size.value.trim();
	const weightval = weight.value.trim();


	var alphanumeric=/^[0-9a-zA-Z]+$/
	var alphabet=/^[a-zA-Z]+$/
	var numeric=/^[0-9]+$/
	var foremail = /^[a-z0-9._%-]+@[a-z0-9.-]+\.[a-z]{2,4}$/
	var ADD=/^[A-Za-z0-9'\.\-\s\,]+$/

	if(fnameval == ""){
		setErrorFor(fName, "Firstname can't be blank");
		e.preventDefault();
	}else if(fnameval.match(alphabet)){
		setSuccessFor(fName);
	}else{
		setErrorFor(fName, "Firstname is invalid");
		e.preventDefault();
	}
	if(mnameval == ""){
		setErrorFor(mName, "Middlename can't be blank");
		e.preventDefault();
	}else if(mnameval.match(alphabet)){
		setSuccessFor(mName);
	}else{
		setErrorFor(mName, "Middlename is invalid");
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
		setErrorFor(cOntact, "Contact # can't be blank");
		e.preventDefault();
	}else if(conval.match(numeric)){
		setSuccessFor(cOntact);
	}else{
		setErrorFor(cOntact, "Contact # is invalid");
		e.preventDefault();
	}
	if(addval == ""){
		setErrorFor(aDdress, " Address can't be blank");
		e.preventDefault();
	}else if(addval.match(ADD)){
		setSuccessFor(aDdress);
	}else{
		setErrorFor(aDdress, "Address is invalid");
		e.preventDefault();
	}
	if(eFFNAMEVAL == ""){
		setErrorFor(FName, "Firstname can't be blank");
		e.preventDefault();
	}else if(eFFNAMEVAL.match(alphabet)){
		setSuccessFor(FName);
	}else{
		setErrorFor(FName, "Firstname is invalid");
		e.preventDefault();
	}
	if(eMNAMEVAL == ""){
		setErrorFor(MName, "Middlename can't be blank");
		e.preventDefault();
	}else if(eMNAMEVAL.match(alphabet)){
		setSuccessFor(MName);
	}else{
		setErrorFor(MName, "Middlename is invalid");
		e.preventDefault();
	}
	if(eLNAMEVAL == ""){
		setErrorFor(LName, "Lastname can't be blank");
		e.preventDefault();
	}else if(eLNAMEVAL.match(alphabet)){
		setSuccessFor(LName);
	}else{
		setErrorFor(LName, "Lastname is invalid");
		e.preventDefault();
	}
	if(eCONVAL == ""){
		setErrorFor(COntact, "Contact # can't be blank");
		e.preventDefault();
	}else if(eCONVAL.match(numeric)){
		setSuccessFor(COntact);
	}else{
		setErrorFor(COntact, "Contact # is invalid");
		e.preventDefault();
	}
	if(eDESVAL == ""){
		setErrorFor(DEstination, " Address can't be blank");
		e.preventDefault();
	}else if(eDESVAL.match(alphanumeric)){
		setSuccessFor(DEstination);
	}else{
		setErrorFor(DEstination, "Address is invalid");
		e.preventDefault();
	}
	if(sizeval == ""){
		setErrorFor(sIze, " Size can't be blank");
		e.preventDefault();
	}else if(sizeval.match(alphanumeric)){
		setSuccessFor(sIze);
	}else{
		setErrorFor(sIze, "Size is invalid");
		e.preventDefault();
	}
	if(weightval == ""){
		setErrorFor(wEight, " Weight can't be blank");
		e.preventDefault();
	}else if(weightval.match(alphanumeric)){
		setSuccessFor(wEight);
	}else{
		setErrorFor(wEight, "Weight is invalid");
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