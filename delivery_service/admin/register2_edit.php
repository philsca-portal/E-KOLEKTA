<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('../pdo.php');
staff_update();
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

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      </div>
      <div class="modal-body">
      
      </div>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Staff Profile 
    </h6>
  </div>

  <div class="card-body">
  <?php

    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,'delivery_service_db');

  if(isset($_POST['edit_btn'])){
    $id = $_POST['edit_id'];

    $query = "SELECT * FROM staffs WHERE Staff_id = $id ";
    $query_run = mysqli_query($connection,$query);

    foreach($query_run as $row){
      ?> 
   <form id="form" action="" method="POST">  
    <div class="table-responsive">
            <input type="hidden" id="edit_id" name="edit_id" value="<?php echo $row['Staff_id']; ?>">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" id="first" name="first" class="form-control" placeholder="Enter your First Name" value="<?php echo $row['First_name']; ?>">
            </div>
            <div class="form-group">
                <label>Middle Name</label>
                <input type="text" id="middle" name="middle" class="form-control" placeholder="Enter your Middle Name" value="<?php echo $row['Middle_name']; ?>">
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" id="last" name="last" class="form-control" placeholder="Enter your Last Name" value="<?php echo $row['Last_name']; ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" id="email" name="email" class="form-control" placeholder="Confirm Email" value="<?php echo $row['Email']; ?>">
            </div>
            <div class="form-group">
                <label>Contact</label>
                <input type="text" id="contact" name="contact" class="form-control" placeholder="Confirm Contact Number" value="<?php echo $row['Contact_number']; ?>">
            </div>
          <div class="modal-footer">
            <a href="register2.php" class="btn btn-danger">CLOSE</a>
            <input type="submit" id="submit" name="updatebtn" class="btn btn-primary" value="Update"></input>
        </div> 
    </div>
    </form>  
              <?php
    }
  }
  ?>
      
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/footer.php');
?>