const fname = document.getElementById('fName')
const mname = document.getElementById('mName')
const lname = document.getElementById('lName')
const bday = document.getElementById('bDay')
const gender = document.getElementById('gender')
const contact = document.getElementById('contact')
const email = document.getElementById('email')
const home = document.getElementById('home')
const street = document.getElementById('street')
const barangay = document.getElementById('barangay')
const city = document.getElementById('city')
const username = document.getElementById('username')
const password = document.getElementById('password')
const repassword = document.getElementById('repassword')
const porma = document.getElementById('porma')
const alert1 = document.getElementById('alert1')
const alert = document.getElementById('alert')

document.getElementById('alert').style.color = "white";
document.getElementById('alert').style.background = "red";
document.getElementById('alert').style.width = "223px";
document.getElementById('alert').style.transform = "translate(1000px,-50px)";
document.getElementById('alert').style.position = "Fixed";

document.getElementById('alert1').style.color = "white";
document.getElementById('alert1').style.background = "green";
document.getElementById('alert1').style.width = "150px";
document.getElementById('alert1').style.transform = "translate(100px,-50px)";
document.getElementById('alert1').style.position = "Fixed";


		var alphanumeric=/^[0-9a-zA-Z]+$/
		var alphabet=/^[a-zA-Z]+$/
		var numeric=/^[0-9]+$/
		var foremail = /^[a-z0-9._%-]+@[a-z0-9.-]+\.[a-z]{2,4}$/

porma.addEventListener('submit', (e) =>{
	
	let message = []
	let messages = []

		if(fname.value === "" || fname.value == null){
			message.push('Firstname is required')
			e.preventDefault()
		}
		if(fname.value.match(alphabet)){
			messages.push('Firstname is valid')
		}else{
			message.push('Firstname should contain only letters')
			e.preventDefault()
		}

		if(mname.value === "" || mname.value == null){
			message.push('Middlename is required')
			e.preventDefault()
		}
		if(mname.value.match(alphabet)){
			messages.push('Middlename is valid')
		}else{
			message.push('Middlename should contain only letters')
			e.preventDefault()
		}

		if(lname.value === "" || lname.value == null){
			message.push('Lastname is required')
			e.preventDefault()
		}
		if(lname.value.match(alphabet)){
			messages.push('Lastname is valid')
		}else{
			message.push('Lastname should contain only letters')
			e.preventDefault()
		}

		if(bday.value === "" || bday.value == null){
			message.push('Birthday is required')
			e.preventDefault()
		}

		if(gender.value === "" || gender.value == null){
			message.push('Gender is required')
			e.preventDefault()
		}
		if(gender.value.match(alphabet)){
			messages.push('Gender is valid')
		}else{
			message.push('Gender should contain only letters')
			e.preventDefault()
		}

		if(contact.value === "" || contact.value == null){
			message.push('Contact Number is required')
			e.preventDefault()
		}
		if(contact.value.match(numeric)){
			messages.push('Contact Number is valid')
		}else{
			message.push('Contact Number should contain only Numbers')
			e.preventDefault()
		}

		if(email.value === "" || email.value == null){
			message.push('Email Address is required')
			e.preventDefault()
		}
		if(email.value.match(foremail)){
			messages.push('Email Address is valid')
		}else{
			message.push('Email address is invalid')
			e.preventDefault()
		}

		if(home.value === "" || home.value == null){
			message.push('Home # is required')
			e.preventDefault()
		}
		if(home.value.match(numeric)){
			messages.push('Home # is valid')
		}else{
			message.push('Home # should contain only Numbers')
			e.preventDefault()
		}

		if(street.value === "" || street.value == null){
			message.push('Street is required')
			e.preventDefault()
		}
		if(street.value.match(alphanumeric)){
			messages.push('Street is valid')
		}else{
			message.push('Street should is invalid')
			e.preventDefault()
		}

		if(barangay.value === "" || barangay.value == null){
			message.push('Barangay is required')
			e.preventDefault()
		}
		if(barangay.value.match(alphabet)){
			messages.push('barangay is valid')
		}else{
			message.push('barangay should is invalid')
			e.preventDefault()
		}

		if(city.value === "" || city.value == null){
			message.push('City/Municipality is required')
			e.preventDefault()
		}
		if(city.value.match(alphabet)){
			messages.push('City/Municipality is valid')
		}else{
			message.push('City/Municipality should contain letters')
			e.preventDefault()
		}

		if(username.value === "" || username.value == null){
			message.push('Username is required')
			e.preventDefault()
		}
		if(username.value.match(alphanumeric)){
			messages.push('Username is valid')
		}else{
			message.push('Username is invalid')
			e.preventDefault()
		}

		if(password.value === "" || password.value == null){
			message.push('Password is required')
			e.preventDefault()
		}
		if(password.value.match(alphanumeric)){
			messages.push('Password is valid')
		}else{
			message.push('Password is invalid')
			e.preventDefault()
		}

		if(repassword.value === "" || repassword.value == null){
			message.push('Repassword is required')
			e.preventDefault()
		}
		if(repassword.value.match(alphanumeric)){
			messages.push('Repassword is valid')
		}else{
			message.push('Repassword is invalid')
			e.preventDefault()
		}

		if(password.value.match(repassword.value && repassword.value.match(password.value))){
			messages.push('Password match')
		}else{
			message.push("password don't match")
		}


	alert.innerText = message.join(', ')
	alert1.innerText = messages.join(', ')
	
})


