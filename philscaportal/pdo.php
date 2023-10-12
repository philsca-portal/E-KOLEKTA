<?php
//SUBMITTING DATA FROM REGISTRATION TO DATABASE
function register(){
//CONNECTION TO DATABASE
$server = "localhost";
$username = "root";
$password = "";
$db = "id16218999_web";
$handle = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");

if (isset($_POST['submit'])){
  try{
     $handle = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");
   }catch(PDOException $exc){
      echo $exc->getMessage();
      exit();
   }

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

  //INSERT
  $pdoquery = "INSERT INTO `registration`(`Firstname`, `Middlename`, `Lastname`, `Birthday`, `Gender`, `ContactNumber`, `EmailAddress`, `HomeNum`, `Street`, `Barangay`, `CityMunicipality`, `Username`, `Password`, `Repassword`) VALUES (:fName,:mName,:lName,:bDay,:gender,:contact,:email,:home,:street,:barangay,:city,:username,:password,:repassword)";

  $pdoresult = $handle->prepare($pdoquery);

  $pdoexec = $pdoresult->execute(array(":fName"=>$Fname,":mName"=>$Mname,":lName"=>$Lname,":bDay"=>$Bday,":gender"=>$Gender,":contact"=>$Contact,":email"=>$Email,":home"=>$Home,":street"=>$Street,":barangay"=>$Barangay,":city"=>$City,":username"=>$Username,":password"=>$Password,":repassword"=>$Repassword));

  if($pdoexec){
    echo '<script>alert("User has been added");</script>';
  }else{
    echo '<script>alert("User has not been added");</script>';
  }
}
}
function login1(){
//CONNECTION TO DATABASE
$server = "localhost";
$username = "root";
$password = "";
$db = "id16218999_web";
$handle = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");

if (isset($_POST['login'])){
  try{
    $handle = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");
  }catch(PDOException $exc){
    echo $exc->getMessage();
    exit();
  }

  $pdoqueryy = "SELECT * FROM `registration` WHERE `Username`= :user AND `Password`= :pass";

  $pdoresultt = $handle->prepare($pdoqueryy);

  $pdoexecc = $pdoresultt->execute(array(':user'=> $_POST['user'],':pass'=> $_POST['pass']));

  $count = $pdoresultt->rowCount();
    if($count > 0){
      $_SESSION['Username'] = $_POST['user'];
      echo "<script type='text/javascript'>window.top.location='welcome.php';</script>"; exit;
    }else{
       echo '<script>alert("Username or Password is wrong");</script>';
    }
}
}
//GETTING THE USERNAME AND PASSWORD FROM DATABASE
function login(){
  function test_input($data) {
     
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if ($_SERVER["REQUEST_METHOD"]== "POST") {
    
  $host = "localhost";
  $user = "root";
  $pass = "";
  $dbName = "id16218999_web";

  try {
    $dsn = "mysql:host=" . $host . ";dbname=" . $dbName;
    $pdo = new PDO($dsn, $user, $pass);
  } catch(PDOException $e) {
    echo '<script>alert("Connection to Database Failed")</script>';
  }

    $adminname = test_input($_POST["user"]);
    $passwordd = test_input($_POST["pass"]);
    $stmt = $pdo->prepare("SELECT * FROM adminlogin");
    $stmtt = $pdo->prepare("SELECT * FROM registration");
    $stmt->execute();
    $users = $stmt->fetchAll();
     
    foreach($users as $user) {
         
        if(($user['adminname'] == $adminname) && 
            ($user['password'] == $passwordd)) {
                echo "<script type='text/javascript'>window.top.location='backend.php';</script>"; exit;
        }
        else {
            return login1();
        }
    }
}
}
?>

