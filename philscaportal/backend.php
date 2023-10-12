<!DOCTYPE html>
<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbName = "id16218999_web";

//CONNECT via TRY CATCH TO IDENTIFY ERROR KAPAG FAILED CONNECTION
try {
  $dsn = "mysql:host=" . $host . ";dbname=" . $dbName;
  $pdo = new PDO($dsn, $user, $pass);
} catch(PDOException $e) {
  echo '<script>alert("Connection to Database Failed")</script>';
}
  $id = "";
  $fname = "";
  $mname = "";
  $lname = "";
  $bday = "";
  $gender = "";
  $contact = "";
  $email = "";
  $home = "";
  $street = "";
  $barangay = "";
  $city = "";
  $us = "";
  $pas = "";
  $repas = "";

  function getPosts(){
  	$posts = array();
  	$posts[0] = $_POST['id'];
  	$posts[1] = $_POST['fName'];
  	$posts[2] = $_POST['mName'];
  	$posts[3] = $_POST['lName'];
  	$posts[4] = $_POST['bDay'];
  	$posts[5] = $_POST['gender'];
  	$posts[6] = $_POST['contact'];
  	$posts[7] = $_POST['email'];
  	$posts[8] = $_POST['home'];
  	$posts[9] = $_POST['street'];
  	$posts[10] = $_POST['barangay'];
  	$posts[11] = $_POST['city'];
  	$posts[12] = $_POST['username'];
  	$posts[13] = $_POST['password'];
  	$posts[14] = $_POST['repassword'];
  	return $posts;
  }

  if(isset($_POST['Search'])){
  	$data = getPosts();
  	if(empty($data[0])){
  		echo '<script>alert("Enter the user ID to Search");</script>';
  	}else{

  		  $searchstmt = $pdo->prepare('SELECT * FROM registration WHERE ID = :id');
  		  $searchstmt->execute(array(':id'=>$data[0]));
  		  if($searchstmt){
  		  $user = $searchstmt->fetch();
  		  $id = $user[0];
		  $fname = $user[1];
		  $mname = $user[2];
		  $lname =$user[3];
		  $bday = $user[4];
		  $gender = $user[5];
		  $contact = $user[6];
		  $email = $user[7];
		  $home = $user[8];
		  $street = $user[9];
		  $barangay = $user[10];
		  $city = $user[11];
		  $us = $user[12];
		  $pas = $user[13];
		  $repas = $user[14];

		  echo '<script>alert("Search Successfully");</script>';
		  }
  	}
  }

//UPDATE
	if (isset($_POST['Update'])){
  		try{
  			//FETCH VARIABLES FROM FORM UPON CLICK
			$ID = $_POST['id'];
			$Fname = $_POST['fName'];
			$Mname = $_POST['mName'];
			$Lname = $_POST['lName'];
			$Bday = $_POST['bDay'];
			$Gender = $_POST['gender'];
			$Contact = $_POST['contact'];
			$Email = $_POST['email'];
			$Home = $_POST['home'];
			$Street = $_POST['street'];
			$Barangay = $_POST['barangay'];
			$City = $_POST['city'];
			$Username = $_POST['username'];
			$Password = $_POST['password'];
			$Repassword = $_POST['repassword'];
   		}catch(PDOException $exc){
      		echo $exc->getMessage();
      		exit();
   		}

  		$update = "UPDATE `registration` SET `ID`=:ID,`Firstname`=:Fname,`Middlename`=:Mname,`Lastname`=:Lname,`Birthday`=:Bday,`Gender`=:Gender,`ContactNumber`=:Contact,`EmailAddress`=:Email,`HomeNum`=:Home,`Street`=:Street,`Barangay`=:Barangay,`CityMunicipality`=:City,`Username`=:Username,`Password`=:Password,`Repassword`=:Repassword WHERE `ID` =:ID ";

  		$pdoResult = $pdo->prepare($update);

  		$pdoExec = $pdoResult->execute(array(":ID"=>$ID,":Fname"=>$Fname,":Mname"=>$Mname,":Lname"=>$Lname,":Bday"=>$Bday,":Gender"=>$Gender,":Contact"=>$Contact,":Email"=>$Email,":Home"=>$Home,":Street"=>$Street,":Barangay"=>$Barangay,":City"=>$City,":Username"=>$Username,":Password"=>$Password,":Repassword"=>$Repassword));

   		if($pdoExec){
   			$select = 'SELECT * FROM registration';
			$statement = $pdo->prepare($select);
			$statement->execute();
			$students = $statement->fetchAll(PDO::FETCH_OBJ);

    		echo '<script>alert("User has been Updated");</script>';
  		}else{
    		echo '<script>alert("Information not updated");</script>';
  		}
  	}

  	//DELETE
  	if(isset($_POST['Delete'])){
  		try{
			$ID = $_POST['id'];
   		}catch(PDOException $exc){
      		echo $exc->getMessage();
      		exit();
   		}

   		$sql = 'DELETE FROM registration where ID = :ID';
   		$stmt = $pdo->prepare($sql);
   		$stmt ->execute(array(":ID"=>$ID));
   		
   		if($stmt){
    		echo '<script>alert("User has been deleted");</script>';
  		}else{
    		echo '<script>alert("Info failed to delete");</script>';
  		}
  	}
?>
<?php 

$host = "localhost";
$user = "root";
$pass = "";
$dbName = "id16218999_web";

//CONNECT via TRY CATCH TO IDENTIFY ERROR KAPAG FAILED CONNECTION
try {
  $dsn = "mysql:host=" . $host . ";dbname=" . $dbName;
  $pdo = new PDO($dsn, $user, $pass);
} catch(PDOException $e) {
  echo '<script>alert("Connection to Database Failed")</script>';
}

  $select = 'SELECT * FROM registration';
  $statement = $pdo->prepare($select);
  $statement->execute();
  $students = $statement->fetchAll(PDO::FETCH_OBJ);

?>
<html>
<head>
	<title>REGISTRATION FORM</title>
	<link rel="stylesheet" type="text/css" href="registyle.css">
	<script type="text/javascript"></script>
	<Script>
		function alphanumericValidation(fName,mName,lName,bDay,gender,contact,email,home,street,barangay,city,username,password,repassword){
			var alphanumeric=/^[0-9a-zA-Z]+$/;
			var alphabet=/^[a-zA-Z]+$/;
			var numeric=/^[0-9]+$/;
			var date=/^[0-9\/-]+$/;
			var foremail = /^[a-z0-9._%-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;

				if (fName.value.match(alphabet)){
					if (mName.value.match(alphabet)){
						if (lName.value.match(alphabet)){
							if(bDay.value.match(date)){
								if(gender.value.match(alphabet)){
									if(contact.value.match(numeric)){
										if(email.value.match(foremail)){
											if(home.value.match(numeric)){
												if(street.value.match(alphanumeric)){
													if(barangay.value.match(alphabet)){
														if(city.value.match(alphabet)){
															if(username.value.match(alphanumeric)){
																if (password.value.match(alphanumeric)){
																	if (repassword.value.match(alphanumeric)){
																		if((password.value.match(repassword.value)) && (repassword.value.match(password.value))){
																			alert("Password match");
																			return true;
																		}else{
																			alert("Password don't match");
																			return false;
																			}
																	}else{
																		alert("Repassword Input should contain only letters and numbers");
																		return false;
																		}
																}else{
																	alert("Password Input should contain only letters and numbers");
																	return false;
																	}
															}else{
																alert("Username Input should contain only letters and numbers");
																return false;
															}
														}else{
															alert("City Input should contain only letters");
															return false;
														}
													}else{
														alert("Baranggay Input should contain only letters");
														return false;
													}
												}else{
													alert("Street Input should contain only letters and numbers");
													return false;
												}
											}else{
												alert("Home Number Input should contain only numbers");
												return false;
											}
										}else{
											alert("Email is invalid");
											return false;
										}
									}else{
										alert("Contact Number Input should contain only numbers");
										return false;
									}
								}else{
									alert("Gender Input should contain only letters");
									return false;
								}
							}else{
								alert("Birthday Input should contain only numbers");
								return false;
							}
						}else{
							alert("Lastname Input should contain only letters");
							return false;
							}
					}else{
						alert(" Middleinitial Input should contain only letters");
						return false;
						}										
				}else{
					alert("Firstname Input should contain only letters");
					return false;
					}	
		}
	</Script>
</head>
<body>
	<center><div class="line">
		_________________________________________________________________
	</div></center>
	<center><div class="pic">
		<img src="philsca.png">
	</div></center>
	<div class="title">
		<h1 align="CENTER">PHILIPPINE STATE COLLEGE OF AERONAUTICS</h1>
	</div>
	<div class="logoutings"><a href="logout.php" class="logout">Logout</a></div>
	<div class="alert" id="alert" style="font-weight: bold;"></div>
	<div class="alert1" id="alert1" style="font-weight: bold;"></div>
		
		<div class="containerr">
		<form id="porma" name="pormaa" action="" method="POST">
			<div class="inputControlss">
				<div class="inputControl">
					<div class="inputText1.5">
						<input type="text" id="id" name="id" value="<?php echo $id;?>" placeholder="ID">
					</div>
				</div>
				<div class="inputControl">
					<div class="inputText1.5">
						<input type="text" id="fName" name="fName" value="<?php echo $fname;?>" placeholder="Firstname">
					</div>
				</div>
				<div class="inputControl2">
					<div class="inputText2">
						<input type="text" id="mName" name="mName" value="<?php echo $mname;?>" placeholder="Middlename">
					</div>
				</div>
				<div class="inputControl3">
					<div class="inputText3">
						<input type="text" id="lName" name="lName" value="<?php echo $lname;?>" placeholder="Lastname">
					</div>
				</div>
				<div class="inputControlB">
					<div class="inputTextB">
						<input type="date" id="bDay" name="bDay" value="<?php echo $bday;?>" placeholder="Birthday">
					</div>
				</div>
				<div class="inputControlG">
					<div class="inputTextG">
						<input type="text" id="gender" name="gender" value="<?php echo $gender;?>" placeholder="Gender">
					</div>
				</div>
				<div class="inputControlC">
					<div class="inputTextC">
						<input type="text" id="contact" name="contact" value="<?php echo $contact;?>" placeholder="Contact No.">
					</div>
				</div>
				<div class="inputControl5">
					<div class="inputText5">
						<input type="text" id="email" name="email" value="<?php echo $email;?>" placeholder="Email Adress">
					</div>
				</div>
				<div class="inputControlH">
					<div class="inputTextH">
						<input type="text" id="home" name="home" value="<?php echo $home;?>" placeholder="Home #">
					</div>
				</div>
				<div class="inputControlS">
					<div class="inputTextS">
						<input type="text" id="street" name="street" value="<?php echo $street;?>" placeholder="Street">
					</div>
				</div>
				<div class="inputControlBa">
					<div class="inputTextBa">
						<input type="text" id="barangay" name="barangay" value="<?php echo $barangay;?>" placeholder="Barangay">
					</div>
				</div>
				<div class="inputControlM">
					<div class="inputTextM">
						<input type="text" id="city" name="city" value="<?php echo $city;?>" placeholder="City/Municipality">
					</div>
				</div>
				<div class="inputControlUsername">
					<div class="inputTextUs">
						<input type="text" id="username" name="username" value="<?php echo $us;?>" placeholder="Username">
					</div>
				</div>
				<div class="inputControlPassword">
					<div class="inputTextPa">
						<input type="password" id="password" name="password" value="<?php echo $pas;?>" placeholder="Password">
					</div>
				</div>
				<div class="inputControlConPassword">
					<div class="inputTextCo">
						<input type="password" id="repassword" name="repassword" value="<?php echo $repas;?>" placeholder="Confirm Password">
					</div>
				</div>
			</div>
			</div>
				<div class="pindot">
					<div class="smallcontainer">
						<center><input type="submit" name="Update" value="UPDATE" onclick="return alphanumericValidation(document.pormaa.fName,document.pormaa.mName,document.pormaa.lName,document.pormaa.bDay,document.pormaa.gender,document.pormaa.contact,document.pormaa.email,document.pormaa.home,document.pormaa.street,document.pormaa.barangay,document.pormaa.city,document.pormaa.username,document.pormaa.password,document.pormaa.repassword)"></center>
					</div>
					<div class="smallcontainer1">
						<center><input type="submit" name="Delete" value="DELETE"></center>
					</div>
					<div class="smallcontainer2">
						<center><input type="submit" name="Search" value="SEARCH"></center>
					</div>
				</div>
			</div>
		</form>
	</div>
	<div class = "display"> </div>
	<div class = "table-title"> STUDENT INFORMATION DATABASE </div>
	<div>
		<table>
          <tr class="table-header">
            <th class="maliit"> ID </th>
            <th> First Name </th>
            <th> Middle Name </th>
            <th> Last Name </th>
            <th> Birth Day </th>
            <th class="maliit"> Gender </th>
            <th> Contact </th>
            <th class="malaki"> E-mail </th>
            <th> Home </th>
            <th> Street </th>
            <th> Barangay </th>
            <th> City </th>
            <th> Username </th>
          </tr>
       

        <?php foreach($students as $s): ?>
            <tr class="table-row">
           	  <td class="maliit"><?= $s->ID; ?></td>
              <td><?= $s->Firstname; ?></td>
              <td><?= $s->Middlename; ?></td>
              <td><?= $s->Lastname; ?></td>
              <td><?= $s->Birthday; ?></td>
              <td class="maliit"><?= $s->Gender; ?></td>
              <td><?= $s->ContactNumber; ?></td>
              <td class="malaki"><?= $s->EmailAddress; ?></td>
              <td><?= $s->HomeNum; ?></td>
              <td><?= $s->Street; ?></td>
              <td><?= $s->Barangay; ?></td>
              <td><?= $s->CityMunicipality; ?></td>
              <td><?= $s->Username; ?></td>
            </tr>
          <?php endforeach; ?>
		</table>
	</div>
	
	<center><div class="line1">
		_________________________________________________________________
	</div></center>
</body>
</html>