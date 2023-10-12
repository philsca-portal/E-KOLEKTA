<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->

  <!-- Page level custom scripts -->
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
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}
</style>
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Staff Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Track Parcel 
    </h6>
  </div>

  <div class="card-body">
    <form class="example" action="" method="POST" style="margin:auto;max-width:600px">
  <input type="text" placeholder="Enter Tracking Number" name="search">
  <button type="submit" name="submit" style="height: 46.5px;"><i class="fa fa-search"></i></button>
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
<!-- /.container-fluid -->

<?php

include('includes/footer.php');
?>