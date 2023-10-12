<?php
function register(){
//CONNECTION TO DATABASE
$server = "localhost";
$username = "root";
$password = "";
$db = "delivery_service_db";
$handle = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");

if (isset($_POST['submit'])){
  try{
     $handle = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");
   }catch(PDOException $exc){
      echo $exc->getMessage();
      exit();
   }

  $Fname = $_POST['fName'];
  $Lname = $_POST['lName'];
  $Contact = $_POST['contact'];
  $Emailadd = $_POST['email'];
  $Address = $_POST['address'];
  $Username = $_POST['username'];
  $Password = $_POST['password'];
  $Repassword = $_POST['repassword'];

$pdoqueryyy = "SELECT * FROM `accounts` WHERE `Username` = :username;";

$pdoresulttt = $handle->prepare($pdoqueryyy);

$pdoexeccc = $pdoresulttt->execute(array(":username"=>$Username));

$countt = $pdoresulttt->rowCount();

if($countt > 0){
   echo '<script>alert("Username is already taken");</script>';
   return false;
}

  //INSERT
  $pdoquery = "INSERT INTO `accounts`(`First name`, `Last name`, `Contact number`, `Email address`, `Complete address`, `Username`, `Password`, `Confirm password`) VALUES (:fName,:lName,:contact,:emailadd,:address,:username,:password,:repassword)";

  $pdoresult = $handle->prepare($pdoquery);

  $pdoexec = $pdoresult->execute(array(":fName"=>$Fname,":lName"=>$Lname,":contact"=>$Contact,":emailadd"=>$Emailadd,":address"=>$Address,":username"=>$Username,":password"=>$Password,":repassword"=>$Repassword));

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
$db = "delivery_service_db";
$handle = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");

if (isset($_POST['login'])){
  try{
    $handle = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");
  }catch(PDOException $exc){
    echo $exc->getMessage();
    exit();
  }

  $pdoqueryy = "SELECT * FROM `accounts` WHERE `Username`= :user AND `Password`= :pass";

  $pdoresultt = $handle->prepare($pdoqueryy);

  $pdoexecc = $pdoresultt->execute(array(':user'=> $_POST['user'],':pass'=> $_POST['pass']));

  $count = $pdoresultt->rowCount();
    if($count > 0){
      $_SESSION['Username'] = $_POST['user'];
      header("location:admin/parcel_add.php");
    }else{
       echo '<script>alert("Username or Password is wrong");</script>';
    }
}
}
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
  $dbName = "delivery_service_db";

  try {
    $dsn = "mysql:host=" . $host . ";dbname=" . $dbName;
    $pdo = new PDO($dsn, $user, $pass);
  } catch(PDOException $e) {
    echo '<script>alert("Connection to Database Failed")</script>';
  }

    $adminname = test_input($_POST["user"]);
    $passwordd = test_input($_POST["pass"]);
    $stmt = $pdo->prepare("SELECT * FROM admin");
    $stmtt = $pdo->prepare("SELECT * FROM accounts");
    $stmt->execute();
    $users = $stmt->fetchAll();
     
    foreach($users as $user) {
         
        if(($user['adminname'] == $adminname) && 
            ($user['password'] == $passwordd)) {
                echo "<script type='text/javascript'>window.top.location='admin/index.php';</script>"; exit;
        }
        else {
            return login1();
        }
    }
}
}
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function branch_add(){
//CONNECTION TO DATABASE
$server = "localhost";
$username = "root";
$password = "";
$db = "delivery_service_db";
$handle = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");

if (isset($_POST['savebtn'])){
  try{
     $handle = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");
   }catch(PDOException $exc){
      echo $exc->getMessage();
      exit();
   }

  $Code = $_POST['code'];
  $Street = $_POST['street'];
  $City = $_POST['city'];
  $Country = $_POST['country'];
  $Contact = $_POST['contact'];


  //INSERT
  $pdoquery = "INSERT INTO `branches`(`Branch_code`, `Street_Building_Brgy`, `City_State_Zip`, `Country`, `Contact_number`) VALUES (:code,:street,:city,:country,:contact)";

  $pdoresult = $handle->prepare($pdoquery);

  $pdoexec = $pdoresult->execute(array(":code"=>$Code,":street"=>$Street,":city"=>$City,":country"=>$Country,":contact"=>$Contact));

  if($pdoexec){
    echo '<script>alert("Branch has been added");</script>';
  }else{
    echo '<script>alert("Branch has not been added");</script>';
  }
}
}

function staff_add(){
//CONNECTION TO DATABASE
$server = "localhost";
$username = "root";
$password = "";
$db = "delivery_service_db";
$handle = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");

if (isset($_POST['staffbtn'])){
  try{
     $handle = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");
   }catch(PDOException $exc){
      echo $exc->getMessage();
      exit();
   }

  $fname = $_POST['fName'];
  $mname = $_POST['mName'];
  $lname = $_POST['lName'];
  $email = $_POST['eMail'];
  $contact = $_POST['cOntact'];


  //INSERT
  $pdoquery = "INSERT INTO `staffs`(`First_name`, `Middle_name`, `Last_name`, `Email`, `Contact_number`) VALUES (:fName,:mName,:lName,:eMail,:cOntact)";

  $pdoresult = $handle->prepare($pdoquery);

  $pdoexec = $pdoresult->execute(array(":fName"=>$fname,":mName"=>$mname,":lName"=>$lname,":eMail"=>$email,":cOntact"=>$contact));

  if($pdoexec){
    echo '<script>alert("Staff has been added");</script>';
  }else{
    echo '<script>alert("Staff has not been added");</script>';
  }
}
}

function branch_fetch(){
$host = "localhost";
$user = "root";
$pass = "";
$dbName = "delivery_service_db";

//CONNECT via TRY CATCH TO IDENTIFY ERROR KAPAG FAILED CONNECTION
try {
  $dsn = "mysql:host=" . $host . ";dbname=" . $dbName;
  $pdo = new PDO($dsn, $user, $pass);
} catch(PDOException $e) {
  echo '<script>alert("Connection to Database Failed")</script>';
}

  $select = 'SELECT * FROM branches';
  $statement = $pdo->prepare($select);
  $statement->execute();
  $students = $statement->fetchAll(PDO::FETCH_OBJ);
}

function branch_edit(){
$server = "localhost";
$username = "root";
$password = "";
$db = "delivery_service_db";
$handle = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");

  if (isset($_POST['edit_btn'])){
    try{
       $handle = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");
     }catch(PDOException $exc){
        echo $exc->getMessage();
        exit();
     }  
     $id = $_POST['edit_id'];

     $query = 'SELECT * FROM register WHERE Branch_id = $id ';
     $statement = $handle->prepare($query);

  }
}

function branch_update(){
$host = "localhost";
$user = "root";
$pass = "";
$dbName = "delivery_service_db";

//CONNECT via TRY CATCH TO IDENTIFY ERROR KAPAG FAILED CONNECTION
try {
  $dsn = "mysql:host=" . $host . ";dbname=" . $dbName;
  $pdo = new PDO($dsn, $user, $pass);
} catch(PDOException $e) {
  echo '<script>alert("Connection to Database Failed")</script>';
}
  if (isset($_POST['updatebtn'])){
      try{
        //FETCH VARIABLES FROM FORM UPON CLICK
      $ID = $_POST['edit_id'];  
      $STREET = $_POST['street'];
      $CITY = $_POST['city'];
      $COUNTRY = $_POST['country'];
      $CONTACT = $_POST['contact'];
      }catch(PDOException $exc){
          echo $exc->getMessage();
          exit();
      }

      $update = "UPDATE `branches` SET `Street_Building_Brgy`=:STREET,`City_State_Zip`=:CITY,`Country`=:COUNTRY,`Contact_number`=:CONTACT WHERE Branch_id = :ID ";

      $pdoResult = $pdo->prepare($update);

      $pdoExec = $pdoResult->execute(array(":ID"=>$ID,":STREET"=>$STREET,":CITY"=>$CITY,":COUNTRY"=>$COUNTRY,":CONTACT"=>$CONTACT));

      if($pdoExec){
        $select = 'SELECT * FROM branches';
      $statement = $pdo->prepare($select);
      $statement->execute();
      $students = $statement->fetchAll(PDO::FETCH_OBJ);

        echo '<script>alert("Branch has been Updated");</script>';
        echo "<script type='text/javascript'>window.top.location='register1.php';</script>"; 
        exit;
      }else{
        echo '<script>alert("Information not updated");</script>';
      }
    }
}
function branch_delete(){
$host = "localhost";
$user = "root";
$pass = "";
$dbName = "delivery_service_db";

//CONNECT via TRY CATCH TO IDENTIFY ERROR KAPAG FAILED CONNECTION
try {
  $dsn = "mysql:host=" . $host . ";dbname=" . $dbName;
  $pdo = new PDO($dsn, $user, $pass);
} catch(PDOException $e) {
  echo '<script>alert("Connection to Database Failed")</script>';
}
if(isset($_POST['delete_btn'])){
      try{
      $ID = $_POST['delete_id'];
      }catch(PDOException $exc){
          echo $exc->getMessage();
          exit();
      }

      $sql = 'DELETE FROM branches where Branch_id = :ID';
      $stmt = $pdo->prepare($sql);
      $stmt ->execute(array(":ID"=>$ID));
      
      if($stmt){
        echo '<script>alert("Branch has been deleted");</script>';
      }else{
        echo '<script>alert("Info failed to delete");</script>';
      }
    }
}

function staff_update(){
$host = "localhost";
$user = "root";
$pass = "";
$dbName = "delivery_service_db";

//CONNECT via TRY CATCH TO IDENTIFY ERROR KAPAG FAILED CONNECTION
try {
  $dsn = "mysql:host=" . $host . ";dbname=" . $dbName;
  $pdo = new PDO($dsn, $user, $pass);
} catch(PDOException $e) {
  echo '<script>alert("Connection to Database Failed")</script>';
}
  if (isset($_POST['updatebtn'])){
      try{
        //FETCH VARIABLES FROM FORM UPON CLICK
      $ID = $_POST['edit_id'];  
      $FIRST = $_POST['first'];
      $MIDDLE = $_POST['middle'];
      $LAST = $_POST['last'];
      $EMAIL = $_POST['email'];
      $CONTACT = $_POST['contact'];
      }catch(PDOException $exc){
          echo $exc->getMessage();
          exit();
      }

      $update = "UPDATE `staffs` SET `First_name`= :FIRST,`Middle_name`= :MIDDLE,`Last_name`=:LAST,`Email`= :EMAIL,`Contact_number`= :CONTACT WHERE `Staff_id`= :ID";

      $pdoResult = $pdo->prepare($update);

      $pdoExec = $pdoResult->execute(array(":ID"=>$ID,":FIRST"=>$FIRST,":MIDDLE"=>$MIDDLE,":LAST"=>$LAST,":EMAIL"=>$EMAIL,":CONTACT"=>$CONTACT));

      if($pdoExec){
        $select = 'SELECT * FROM staffs';
      $statement = $pdo->prepare($select);
      $statement->execute();
      $students = $statement->fetchAll(PDO::FETCH_OBJ);

        echo '<script>alert("Staff has been Updated");</script>';
        echo "<script type='text/javascript'>window.top.location='register2.php';</script>"; 
        exit;
      }else{
        echo '<script>alert("Information not updated");</script>';
      }
    }
}

function staff_delete(){
$host = "localhost";
$user = "root";
$pass = "";
$dbName = "delivery_service_db";

//CONNECT via TRY CATCH TO IDENTIFY ERROR KAPAG FAILED CONNECTION
try {
  $dsn = "mysql:host=" . $host . ";dbname=" . $dbName;
  $pdo = new PDO($dsn, $user, $pass);
} catch(PDOException $e) {
  echo '<script>alert("Connection to Database Failed")</script>';
}
if(isset($_POST['delete_btn'])){
      try{
      $ID = $_POST['delete_id'];
      }catch(PDOException $exc){
          echo $exc->getMessage();
          exit();
      }

      $sql = 'DELETE FROM staffs where Staff_id = :ID';
      $stmt = $pdo->prepare($sql);
      $stmt ->execute(array(":ID"=>$ID));
      
      if($stmt){
        echo '<script>alert("Staff has been deleted");</script>';
      }else{
        echo '<script>alert("Info failed to delete");</script>';
      }
    }
}
function parcel_add(){
  $server = "localhost";
$username = "root";
$password = "";
$db = "delivery_service_db";
$handle = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");

if (isset($_POST['submit_parcel'])){
  try{
     $handle = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");
   }catch(PDOException $exc){
      echo $exc->getMessage();
      exit();
   }
  $Code = $_POST['code'];
  $fName = $_POST['fName'];
  $mName = $_POST['mName'];
  $lName = $_POST['lName'];
  $cOntact = $_POST['cOntact'];
  $aDdress = $_POST['aDdress'];
  $FName = $_POST['FName'];
  $MName = $_POST['MName'];
  $LName = $_POST['LName'];
  $COntact = $_POST['COntact'];
  $DEstination = $_POST['DEstination'];
  $tYpe = $_POST['tYpe'];
  $sIze = $_POST['sIze'];
  $wEight = $_POST['wEight'];
  $cLass = $_POST['cLass'];
  $dElivery = $_POST['dElivery'];
  $pIck = $_POST['pIck'];
  $dAte = $_POST['dAte'];
  $tIme = $_POST['tIme'];
  $sTatus = $_POST['sTatus'];

  
  //INSERT
  $pdoquery = "INSERT INTO `parcels`(`Reference_number`, `Sender_Fname`, `Sender_Mname`, `Sender_Lname`, `Sender_Contactnum`, `Sender_address`, `Recipient_Fname`, `Recipient_Mname`, `Recipient_Lname`, `Recipient_Contactnum`, `Recipient_Destination`, `Type`, `Size`, `Weight`, `Class`, `Type_of_Delivery`, `Type_of_Pick-up`, `Date_of_Pick-up`, `Time_of_Pick-up`, `Status`) VALUES (:code,:fname,:mname,:lname,:contact,:address,:FNAME,:MNAME,:LNAME,:CONTACT,:DESTINATION,:type,:size,:weight,:class,:delivery,:pick,:deyt,:taym,:status)" ;

  $pdoresult = $handle->prepare($pdoquery);

  $pdoexec = $pdoresult->execute(array(":code"=>$Code,":fname"=>$fName,":mname"=>$mName,":lname"=>$lName,":contact"=>$cOntact,":address"=>$aDdress,":FNAME"=>$FName,":MNAME"=>$MName,":LNAME"=>$LName,":CONTACT"=>$COntact,":DESTINATION"=>$DEstination,":type"=>$tYpe,":size"=>$sIze,":weight"=>$wEight,":class"=>$cLass,":delivery"=>$dElivery,":pick"=>$pIck,":deyt"=>$dAte,":taym"=>$tIme,":status"=>$sTatus));

  if($pdoexec){
    echo '<script>alert("Parcel has been added");</script>';

  }else{
    echo '<script>alert("Parcel has not been added");</script>';
  }
}
}

function parcel_update(){
$host = "localhost";
$user = "root";
$pass = "";
$dbName = "delivery_service_db";

//CONNECT via TRY CATCH TO IDENTIFY ERROR KAPAG FAILED CONNECTION
try {
  $dsn = "mysql:host=" . $host . ";dbname=" . $dbName;
  $pdo = new PDO($dsn, $user, $pass);
} catch(PDOException $e) {
  echo '<script>alert("Connection to Database Failed")</script>';
}
  if (isset($_POST['update_btn'])){
      try{
        //FETCH VARIABLES FROM FORM UPON CLICK
      $ID = $_POST['edit_id'];  
      $fName = $_POST['fName'];
      $mName = $_POST['mName'];
      $lName = $_POST['lName'];
      $cOntact = $_POST['cOntact'];
      $aDdress = $_POST['aDdress'];
      $FName = $_POST['FName'];
      $MName = $_POST['MName'];
      $LName = $_POST['LName'];
      $COntact = $_POST['COntact'];
      $DEstination = $_POST['DEstination'];
      $tYpe = $_POST['tYpe'];
      $sIze = $_POST['sIze'];
      $wEight = $_POST['wEight'];
      $cLass = $_POST['cLass'];
      $dElivery = $_POST['dElivery'];
      $pIck = $_POST['pIck'];
      $dAte = $_POST['dAte'];
      $tIme = $_POST['tIme'];
      $sTatus = $_POST['sTatus'];
      }catch(PDOException $exc){
          echo $exc->getMessage();
          exit();
      }

      $update = "UPDATE `parcels` SET `Sender_Fname`=:fname,`Sender_Mname`=:mname,`Sender_Lname`=:lname,`Sender_Contactnum`=:contact,`Sender_address`=:address,`Recipient_Fname`=:FNAME,`Recipient_Mname`=:MNAME,`Recipient_Lname`=:LNAME,`Recipient_Contactnum`=:CONTACT,`Recipient_Destination`=:DESTINATION,`Type`=:type,`Size`=:size,`Weight`=:weight,`Class`=:class,`Type_of_Delivery`=:delivery,`Type_of_Pick-up`=:pick,`Date_of_Pick-up`=:deyt,`Time_of_Pick-up`=:taym,`Status`=:status WHERE `Parcel_id`=:ID";

      $pdoResult = $pdo->prepare($update);

      $pdoExec = $pdoResult->execute(array(":ID"=>$ID,":fname"=>$fName,":mname"=>$mName,":lname"=>$lName,
      ":contact"=>$cOntact,":address"=>$aDdress,":FNAME"=>$FName,":MNAME"=>$MName,":LNAME"=>$LName,
      ":CONTACT"=>$COntact,":DESTINATION"=>$DEstination,":type"=>$tYpe,":size"=>$sIze,":weight"=>$wEight,
      ":class"=>$cLass,":delivery"=>$dElivery,":pick"=>$pIck,":deyt"=>$dAte,":taym"=>$tIme,":status"=>$sTatus));

      if($pdoExec){
        $select = 'SELECT * FROM parcels';
      $statement = $pdo->prepare($select);
      $statement->execute();
      $students = $statement->fetchAll(PDO::FETCH_OBJ);

        echo '<script>alert("Parcel has been Updated");</script>';
        echo "<script type='text/javascript'>window.top.location='register3.php';</script>"; 
        }else{
        echo '<script>alert("Information not updated");</script>';
      }
    }
}

function parcel_track_add(){
$server = "localhost";
$username = "root";
$password = "";
$db = "delivery_service_db";
$handle = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");

if (isset($_POST['submit_parcel'])){
  try{
     $handle = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");
   }catch(PDOException $exc){
      echo $exc->getMessage();
      exit();
   }

  $Code = $_POST['code'];
  $fName = $_POST['fName'];
  $mName = $_POST['mName'];
  $lName = $_POST['lName'];
  $cOntact = $_POST['cOntact'];
  $aDdress = $_POST['aDdress'];
  $FName = $_POST['FName'];
  $MName = $_POST['MName'];
  $LName = $_POST['LName'];
  $COntact = $_POST['COntact'];
  $DEstination = $_POST['DEstination'];
  $tYpe = $_POST['tYpe'];
  $sIze = $_POST['sIze'];
  $wEight = $_POST['wEight'];
  $cLass = $_POST['cLass'];
  $dElivery = $_POST['dElivery'];
  $pIck = $_POST['pIck'];
  $dAte = $_POST['dAte'];
  $tIme = $_POST['tIme'];
  $sTatus = $_POST['sTatus'];
  
  //INSERT
  $pdoquery = "INSERT INTO `parcel-track`(`Reference_number`, `Sender_Fname`, `Sender_Mname`, `Sender_Lname`, `Sender_Contactnum`, `Sender_address`, `Recipient_Fname`, `Recipient_Mname`, `Recipient_Lname`, `Recipient_Contactnum`, `Recipient_Destination`, `Type`, `Size`, `Weight`, `Class`, `Type_of_Delivery`, `Type_of_Pick-up`, `Date_of_Pick-up`, `Time_of_Pick-up`, `Status`) VALUES (:code,:fname,:mname,:lname,:contact,:address,:FNAME,:MNAME,:LNAME,:CONTACT,:DESTINATION,:type,:size,:weight,:class,:delivery,:pick,:deyt,:taym,:status)";

  $pdoresult = $handle->prepare($pdoquery);

  $pdoexec = $pdoresult->execute(array(":code"=>$Code,":fname"=>$fName,":mname"=>$mName,":lname"=>$lName,":contact"=>$cOntact,":address"=>$aDdress,":FNAME"=>$FName,":MNAME"=>$MName,":LNAME"=>$LName,":CONTACT"=>$COntact,":DESTINATION"=>$DEstination,":type"=>$tYpe,":size"=>$sIze,":weight"=>$wEight,":class"=>$cLass,":delivery"=>$dElivery,":pick"=>$pIck,":deyt"=>$dAte,":taym"=>$tIme,":status"=>$sTatus));
  }
}
function parcel_track_update(){
$server = "localhost";
$username = "root";
$password = "";
$db = "delivery_service_db";
$handle = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");

if (isset($_POST['update_btn'])){
  try{
     $handle = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");
   }catch(PDOException $exc){
      echo $exc->getMessage();
      exit();
   }
  $cOde = $_POST['code'];
  $fName = $_POST['fName'];
  $mName = $_POST['mName'];
  $lName = $_POST['lName'];
  $cOntact = $_POST['cOntact'];
  $aDdress = $_POST['aDdress'];
  $FName = $_POST['FName'];
  $MName = $_POST['MName'];
  $LName = $_POST['LName'];
  $COntact = $_POST['COntact'];
  $DEstination = $_POST['DEstination'];
  $tYpe = $_POST['tYpe'];
  $sIze = $_POST['sIze'];
  $wEight = $_POST['wEight'];
  $cLass = $_POST['cLass'];
  $dElivery = $_POST['dElivery'];
  $pIck = $_POST['pIck'];
  $dAte = $_POST['dAte'];
  $tIme = $_POST['tIme'];
  $sTatus = $_POST['sTatus'];
  
  //INSERT
  $pdoquery = "INSERT INTO `parcel-track`(`Reference_number`,`Sender_Fname`, `Sender_Mname`, `Sender_Lname`, `Sender_Contactnum`, `Sender_address`, `Recipient_Fname`, `Recipient_Mname`, `Recipient_Lname`, `Recipient_Contactnum`, `Recipient_Destination`, `Type`, `Size`, `Weight`, `Class`, `Type_of_Delivery`, `Type_of_Pick-up`, `Date_of_Pick-up`, `Time_of_Pick-up`,`Status`) VALUES (:code,:fname,:mname,:lname,:contact,:address,:FNAME,:MNAME,:LNAME,:CONTACT,:DESTINATION,:type,:size,:weight,:class,:delivery,:pick,:deyt,:taym,:status)";

  $pdoresult = $handle->prepare($pdoquery);

  $pdoexec = $pdoresult->execute(array(":code"=>$cOde,":fname"=>$fName,":mname"=>$mName,":lname"=>$lName,":contact"=>$cOntact,":address"=>$aDdress,":FNAME"=>$FName,":MNAME"=>$MName,":LNAME"=>$LName,":CONTACT"=>$COntact,":DESTINATION"=>$DEstination,":type"=>$tYpe,":size"=>$sIze,":weight"=>$wEight,":class"=>$cLass,":delivery"=>$dElivery,":pick"=>$pIck,":deyt"=>$dAte,":taym"=>$tIme,":status"=>$sTatus));
  }
}
function parcel_delete(){
$host = "localhost";
$user = "root";
$pass = "";
$dbName = "delivery_service_db";

//CONNECT via TRY CATCH TO IDENTIFY ERROR KAPAG FAILED CONNECTION
try {
  $dsn = "mysql:host=" . $host . ";dbname=" . $dbName;
  $pdo = new PDO($dsn, $user, $pass);
} catch(PDOException $e) {
  echo '<script>alert("Connection to Database Failed")</script>';
}
if(isset($_POST['delete_btn'])){
      try{
      $ID = $_POST['delete_id'];
      }catch(PDOException $exc){
          echo $exc->getMessage();
          exit();
      }

      $sql = 'DELETE FROM parcels where Parcel_id = :ID';
      $stmt = $pdo->prepare($sql);
      $stmt ->execute(array(":ID"=>$ID));
      
      if($stmt){
        echo '<script>alert("Parcel has been deleted");</script>';
      }else{
        echo '<script>alert("Info failed to delete");</script>';
      }
    }
}
?>