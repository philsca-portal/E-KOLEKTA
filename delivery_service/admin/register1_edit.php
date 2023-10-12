<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('../pdo.php');
branch_update();
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
    <h6 class="m-0 font-weight-bold text-primary">Edit Branch Profile 
    </h6>
  </div>

  <div class="card-body">
  <?php

    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,'delivery_service_db');

  if(isset($_POST['edit_btn'])){
    $id = $_POST['edit_id'];

    $query = "SELECT * FROM branches WHERE Branch_id = $id ";
    $query_run = mysqli_query($connection,$query);

    foreach($query_run as $row){
      ?> 
   <form id="form" action="" method="POST">  
    <div class="table-responsive">
            <input type="hidden" id="edit_id" name="edit_id" value="<?php echo $row['Branch_id']; ?>">
            <div class="form-group">
                <label>Street/Building/Brgy.</label>
                <input type="text" id="street" name="street" class="form-control" placeholder="Enter Street/Building/Brgy." value="<?php echo $row['Street_Building_Brgy']; ?>">
            </div>
            <div class="form-group">
                <label>City/State/Zip</label>
                <input type="text" id="city" name="city" class="form-control" placeholder="Enter City/State/Zip" value="<?php echo $row['City_State_Zip']; ?>">
            </div>
            <div class="form-group">
                <label>Country</label>
                <input type="text" id="country" name="country" class="form-control" placeholder="Confirm Country" value="<?php echo $row['Country']; ?>">
            </div>
            <div class="form-group">
                <label>Contact</label>
                <input type="text" id="contact" name="contact" class="form-control" placeholder="Confirm Contact Number" value="<?php echo $row['Contact_number']; ?>">
            </div>
          <div class="modal-footer">
            <a href="register1.php" class="btn btn-danger">CLOSE</a>
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