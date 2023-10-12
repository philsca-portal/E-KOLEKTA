<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('../pdo.php');
staff_add();
staff_delete();
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
        <h5 class="modal-title" id="exampleModalLabel">Add Staff Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="form" action="" method="POST">

        <div class="modal-body">
          
            <div class="form-group">
                <label> First Name </label>
                <input type="text" id="fName" name="fName" class="form-control" placeholder="Enter Firstname" required="">
            </div>
            <div class="form-group">
                <label> Middle Name</label>
                <input type="text" id="mName" name="mName" class="form-control" placeholder="Enter Middlename" required="">
            </div>
            <div class="form-group">
                <label> Last Name </label>
                <input type="text" id="lName" name="lName" class="form-control" placeholder="Enter Lastname" required="">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" id="eMail" name="eMail" class="form-control" placeholder="Enter Email" required="">
            </div>
            <div class="form-group">
                <label>Contact</label>
                <input type="" id="cOntact" name="cOntact" class="form-control" placeholder="Enter Contact #" required="">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="staffbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Branch Staff 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Staff Profile 
            </button>
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

<?php     
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'delivery_service_db');

$query = "SELECT * FROM staffs";
$query_run = mysqli_query($connection,$query);
?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> First Name </th>
            <th> Middle Name</th>
            <th> Last Name</th>
            <th>Email </th>
            <th>Contact #</th>
            <th>EDIT </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>
        <?php
         if($query_run){
           foreach($query_run as $row){
        ?>  
          <tr>
            <td><?php echo $row['Staff_id']; ?></td>
            <td><?php echo $row['First_name']; ?></td>
            <td><?php echo $row['Middle_name']; ?></td>
            <td><?php  echo $row['Last_name']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td><?php echo $row['Contact_number']; ?></td>
            <td>
                <form action="register2_edit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['Staff_id']; ?>">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['Staff_id']; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
          </tr>
        
        </tbody>
         <?php
        }
          }else{
            echo '<script>alert("No Records Found");</script>';
         }
        ?>
      </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php

include('includes/footer.php');
?>