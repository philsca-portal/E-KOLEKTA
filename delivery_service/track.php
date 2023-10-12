<?php
include('admin/includes/headerr.php');  
?>
<html>
  <script src="https://kit.fontawesome.com/19d0cdd924.js" crossorigin="anonymous"></script>
<style type="text/css">
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;

  background: #f1f1f1;
}
form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #FF9700;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
  height: 47px; 
}
@import url('https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&display=swap');

* {
    margin: 0;
    padding: 0;
    scroll-behavior: smooth;
}

.wrapper {
    width: 1170px;
    margin: 0 auto;
}

header {
    height: 100px;
    background: #262626;
    width: 100%;
    z-index: 10;
    position: fixed;
   
}

.logo {
    width: 30%;
    float: left;
    line-height: 100px;
}
.logo a {
    text-decoration: none;
    font-size: 30px;
    font-family: poppins;
    color: #fff;
    letter-spacing: 5px;
}
nav {
    float: right;
    line-height: 100px;
}
nav a {
    text-decoration: none;
    font-family: 'Titillium Web', sans-serif;
    letter-spacing: 4px;
    font-size: 20px;
    margin: 0 10px;
    color: #fff;
}

form.example button:hover {
  background: #0b7dda;
}
</style>
<head>
  <title>TRACK</title>
</head>
<body>
<div class="header">    
        <header>
          <title>TRACK</title>
            <div class="wrapper">
                <div class="logo">
                    <img class="logo" src="logo1.png">
                </div>
                <nav>
                    <a href="home.php" style="text-decoration: none;">Home</a> <a href="book.php" style="text-decoration: none;">Book</a> <a href="#" style="text-decoration: none;">Track</a> <a href="services.php" style="text-decoration: none;">Services</a> <a href="aboutus.php" style="text-decoration: none;">About Us</a>
                </nav>
            </div>
        </header>
    </div>
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">
      </form>
    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card shadow mb-4">
  <div class="card-header py-3">
  \
  </div>
  </div>

  <div class="card-body">
    <form class="example" action="" method="POST" style="margin:auto;max-width:600px">
        <br>
        <label><h1 class="m-0 font-weight-bold " style="color:#FF9700; transform: translateX(30px);">TRACK YOUR PARCEL HERE
    </h1></label>
              <input type="text" name="search" placeholder="Enter Reference #">
              <button type="submit" name="submit"><i class="fas fa-search"></i></button>
  </form>
    <div class="table-responsive">
<?php     
$server = "localhost";
$username = "root";
$password = "";
$db = "delivery_service_db";
$handle = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");
  
  if(isset($_POST['submit'])){
    $str = $_POST['search'];
    $sth = $handle->prepare("SELECT DISTINCTROW Reference_number,Status,Date_created FROM `parcels` WHERE Reference_number = '$str' UNION ALL SELECT Reference_number,Status,Date_created FROM `parcel-track` WHERE Reference_number = '$str'");

    $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth->execute();
    if($sth->fetch()){
      foreach($sth as $row){
        ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Reference number</th>
              <th>Status</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo $row->Reference_number; ?></td>
              <td><?php 
              switch ($row->Status) {
                case '1':
                  echo "<span class='badge badge-pill badge-info'> Collected</span>";
                  break;
                case '2':
                  echo "<span class='badge badge-pill badge-info'> Shipped</span>";
                  break;
                case '3':
                  echo "<span class='badge badge-pill badge-primary'> In-Transit</span>";
                  break;
                case '4':
                  echo "<span class='badge badge-pill badge-primary'> Arrived At Destination</span>";
                  break;
                case '5':
                  echo "<span class='badge badge-pill badge-primary'> Out for Delivery</span>";
                  break;
                case '6':
                  echo "<span class='badge badge-pill badge-primary'> Ready to Pickup</span>";
                  break;
                case '7':
                  echo "<span class='badge badge-pill badge-success'>Delivered</span>";
                  break;
                case '8':
                  echo "<span class='badge badge-pill badge-success'> Picked-up</span>";
                  break;
                case '9':
                  echo "<span class='badge badge-pill badge-danger'> Unsuccessful Delivery Attempt</span>";
                  break;
                case '10':
                  echo "<span class='badge badge-pill badge-primary'>Item Accepted by Courier</span>";
                  break;
                default:
                  echo "<span class='badge badge-pill badge-secondary'> Pending</span>";
                  
                  break;
              }
              ?>
              </td>
              <td><?php echo $row->Date_created; ?></td>
            </tr>
          </tbody>
        </table>
        <?php
      }
    }else{
       echo '<script>alert("Reference Number does not exist");</script>';
    }
  }
?>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->
</body>

</html>