const fOrm = document.getElementById('fOrm')  
const user = document.getElementById('user')
const pass = document.getElementById('pass')
const alert2 = document.getElementById('alert2')
const alert3 = document.getElementById('alert3')

document.getElementById('alert2').style.color = "white";
document.getElementById('alert2').style.background = "red";
document.getElementById('alert2').style.width = "223px";
document.getElementById('alert2').style.transform = "translate(1000px,100px)";
document.getElementById('alert2').style.position = "Fixed";

document.getElementById('alert3').style.color = "white";
document.getElementById('alert3').style.background = "green";
document.getElementById('alert3').style.width = "150px";
document.getElementById('alert3').style.transform = "translate(1000px,50px)";
document.getElementById('alert3').style.position = "Fixed";



		var alphanumeric=/^[0-9a-zA-Z]+$/
		var alphabet=/^[a-zA-Z]+$/
		var numeric=/^[0-9]+$/
		var foremail = /^[a-z0-9._%-]+@[a-z0-9.-]+\.[a-z]{2,4}$/

fOrm.addEventListener('submit', (e) =>{
	let messagee = []
	let messagess = []

		if(user.value === "" || user.value == null){
		messagee.push('Username is required')
		e.preventDefault()
		}
		if(user.value.match(alphanumeric)){
			messagess.push('Username is valid')
		}else{
			messagee.push('Username is invalid')
			e.preventDefault()
		}

		if(pass.value === "" || pass.value == null){
			messagee.push('Password is required')
			e.preventDefault()
		}
		if(pass.value.match(alphanumeric)){
			messagess.push('Password is valid')
		}else{
			messagee.push('Password is invalid')
			e.preventDefault()
		}

	alert2.innerText = messagee.join(', ')
	alert3.innerText = messagess.join(', ')
	
})


