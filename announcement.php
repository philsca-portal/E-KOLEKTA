<!DOCTYPE html>
<html>
<head>
	<title>Announcement</title>
	<link rel="stylesheet" type="text/css" href="css/announcement.css">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
    <script src="https://kit.fontawesome.com/19d0cdd924.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="header">
		<header>
			<div class="wrapper">
				<div class="logo">
					<img class="logo" src="images/ekalaticon.png">
				</div>
				<nav>
					<a href="dashboard.php">Dashboard</a> <a href="littermap.php">Litter Map</a> <a href="announcement.php">Announcement</a><a href="logs.php">Logs</a>
				</nav>
				<div class="title">
					<h2>E-KOLEKTA</h2>
				</div>
			</div>
		</header>
	</div>

<div class="all">
	<div class="container">
		<div class="headerr">
			<h2>News</h2>
		</div>
		<div class="form">
			<div class="form-control">
                <label>Name</label> <br>
                <input type="text" id="title" name="title" placeholder="" style="width: 50%; float: left;">
                <label id="extlab"></label>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small></small>
            </div>
            <div class="form-control">
                <label>Title</label>
                <input type="text" id="titulo" name="titulo" placeholder="Enter Title">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small></small>
            </div>
            <div class="form-control">
                <label>Description</label>
                <input type="text" id="descrip" name="descrip" placeholder="Enter Description">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small></small>
            </div>
              <div class="form-control">
                <label>Image</label>         
                <small></small>
            </div>
            <div class="image">
            <img id="myimg">
            <label id="upprogress"></label>
            </div>    
          	 <div class="buttonn">
                <button id="select">Select Images</button>
            </div>
            <div class="button">
                <button id="submit">Upload</button>
            </div>
		</div>

		<script type="module">
			  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.9.1/firebase-app.js";

			  const firebaseConfig = {
			    apiKey: "AIzaSyDbgRxLn_Tw0nZWiMwy9Rd09RrAsWQpTF4",
			    authDomain: "e-kalat.firebaseapp.com",
			    databaseURL: "https://e-kalat-default-rtdb.firebaseio.com",
			    projectId: "e-kalat",
			    storageBucket: "e-kalat.appspot.com",
			    messagingSenderId: "526994641839",
			    appId: "1:526994641839:web:26fd1fbfcf87a21b3c955a",
			    measurementId: "G-1PJX8TCP8M"
			  };

			  // Initialize Firebase
			  const app = initializeApp(firebaseConfig);
			  


			  import { getStorage, ref as sRef, uploadBytesResumable, getDownloadURL}
			   from "https://www.gstatic.com/firebasejs/9.9.1/firebase-storage.js"

			  import { getDatabase, ref, set, child, get, update, remove}
			   from "https://www.gstatic.com/firebasejs/9.9.1/firebase-database.js"
			   var realdb = getDatabase();

			   var files = [];
			   var reader = new FileReader();

			   var proglab = document.getElementById('upprogress');
			   var extlab = document.getElementById('extlab');	
			   var select = document.getElementById('select');
			   var submit = document.getElementById('submit');
			   var title = document.getElementById('title');
			   var titulo = document.getElementById('titulo');
			   var descrip = document.getElementById('descrip');
			   var myimg = document.getElementById('myimg');
			   var day = document.getElementById('day');
			   var time = document.getElementById('time');
			   var time1 = document.getElementById('time1');
			   var submitt = document.getElementById('submitt');
			   

			   var input = document.createElement('input');
			   input.type = 'file';

			   input.onchange = e =>{
			   		files = e.target.files;

			   		var extention = GetFileExt(files[0]);
			   		var name = GetFileName(files[0]);

			   		title.value = name;
			   		extlab.innerHTML = extention;

			   		reader.readAsDataURL(files[0]);
			   }

			   reader.onload = function(){
			   	myimg.src = reader.result;
			   }

			   select.onclick = function(){
			   		input.click();
			   }
			   	function GetFileExt(file){
			   		var temp = file.name.split('.');
			   		var ext = temp.slice((temp.length-1),(temp.length));
			   		return '.' + ext[0];
			   	}

			   	function GetFileName(file){
			   		var temp = file.name.split('.');
			   		var fname = temp.slice(0,-1).join('.');
			   		return fname;
			   	}

			   	async function UploadProcess(){
			   		var ImgToUpload = files[0];

			   		var ImgName = title.value + extlab.innerHTML;

			   		if(!ValidateTitle()){
			   			alert('Title cannot contain ".", "#", "$", "[", or "]"');
			   			return;
			   		}

			   			const namevalid = title.value.trim();
						const titlevalid = titulo.value.trim();
						const descriptionvalid = descrip.value.trim();

						var alphanumeric=/^[0-9a-zA-Z ]+$/

						if(namevalid == ""){
							setErrorFor(title, "Image name can't be blank");
							return false;
						}else{
							setSuccessFor(title);
						}
						if(titlevalid == ""){
							setErrorFor(titulo, "Title can't be blank");
							return false;
						}else{
							setSuccessFor(titulo);
						}
						if(descriptionvalid == ""){
							setErrorFor(descrip, "Description can't be blank");
							return false;
						}else{
							setSuccessFor(descrip);
						}
						

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

			   		const metaData = {
			   			contentType: ImgToUpload.type
			   		}

			   		const storage = getStorage();

			   		const storageRef = sRef(storage, "News/"+ImgName);

			   		const UploadTask = uploadBytesResumable(storageRef, ImgToUpload, metaData);

			   		UploadTask.on('stage-changed', (snapshot)=>{
			   			var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
			   			proglab.innerHTML = "Upload "+ progress + "%";
			   		},
			   		(error) =>{
			   			alert("error: image not uploaded");
			   		},
			   		(up)=>{
			   			getDownloadURL(UploadTask.snapshot.ref).then((downloadURL)=>{
			   				SaveURLtoRealtimeDB(downloadURL);

			   					alert('Uploaded Successfully');
			   					title.value = '';
			   					titulo.value = '';
			   					descrip.value = '';
			   					proglab.value = '';
			   					extlab.value = '';
			   				

			   			});
			   		});
			   	}

			  	function SaveURLtoRealtimeDB(URL){
			   	var name = title.value;
			   	var tituloval = titulo.value;	
			   	var descriptionval = descrip.value;
			   	var ext = extlab.innerHTML;

			   	set(ref(realdb,"News/"+name),{
			   		ImageName: (name+ext),
			   		title: (tituloval),
			   		description: (descriptionval),  
			   		url: URL
			   	});
			   	}

			   	async function SaveScheduletoRealtimeDB(e){		
			   	var dayvalid = day.value;
			   	var timevalid = time.value;
			   	var time1valid = time1.value;

				var alphabet= /[a-zA-Z][a-zA-Z ]+[a-zA-Z]$/
				var oras= /^(0?[1-9]|1[0-2]):([0-5]\d)\s?((?:A|P)\.?M\.?)$/i

				if(dayvalid == ""){
					setErrorFor(day, "Day can't be blank");
					e.preventDefault();
					return false;

				}else if(dayvalid.match(alphabet)){
					setSuccessFor(day);
				}else{
					setErrorFor(day, "Day is invalid");
					e.preventDefault();
					return false;

				}
				if(timevalid == ""){
					setErrorFor(time, "Time can't be blank");
					e.preventDefault();
					return false;

				}else if(timevalid.match(oras)){
					setSuccessFor(time);
				}else{
					setErrorFor(time, "Time is invalid");
					e.preventDefault();
					return false;

				}
				if(time1valid == ""){
					setErrorFor(time1, "Time can't be blank");
					e.preventDefault();
					return false;

				}else if(time1valid.match(oras)){
					setSuccessFor(time1);
				}else{
					setErrorFor(time1, "Time is invalid");
					e.preventDefault();
					return false;
				}
				inserting();
				
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

				function inserting(){
				   	const insert = set(ref(realdb,"Schedule/"+dayvalid),{
			   		schedule: (dayvalid+" "+timevalid+ " and " + time1valid)
			   	});

			   	if(inserting){
			   		alert('Submitted Successfully');
			   		day.value = '';
			   		time.value = '';
			   		time1.value = '';
			   	}else{
			   		alert('Submission unsuccessful');
			   	}
			   	}
			   }

			   	function ValidateTitle(){
			   		var regex = /[\.#$\[\]]/
			   		return !(regex.test(title.value));
			   	}
			   	submitt.onclick = SaveScheduletoRealtimeDB;
				submit.onclick = UploadProcess;
				
		</script>
	</div>

	<div class="containerr">
		<div class="headerr">
			<h2>Schedule</h2>
		</div>
		<div class="form">
			<div class="form-control">
                <label>Day</label>
                <input type="text" id="day" name="day" placeholder="Enter Day of collection example:(Monday & Wednesday, Tuesday and Thursday)">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small></small>
            </div>
            <div class="form-control">
                <label>Time</label>
                <h5 style="padding: 10px;">AM</h5><input type="text" id="time" name="time" placeholder="Example: (8:00 am, 9:00 am,11:30 am)">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small></small>
            </div>
             <div class="form-control">
                <h5 style="padding: 10px;">PM</h5><input type="text" id="time1" name="time1" placeholder="Example: (8:00 pm, 9:00 pm,11:30 pm)">      
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small></small>
            </div>
            <div class="button">
				<button id="submitt">Submit</button>           
            </div>
        </form>
		</div>
	</div>
</div>
    <div class="footer">
		<footer>
			
		</footer>
	</div>


</body>
</html>