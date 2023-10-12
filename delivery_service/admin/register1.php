<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('../pdo.php');
generateRandomString();
branch_add();
branch_delete();
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
        <h5 class="modal-title" id="exampleModalLabel">Add Branch Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="form" action="" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <input type="hidden" id="code" name="code" class="form-control" placeholder="Enter Branch Code" value="<?php echo generateRandomString();?>">
            </div>
            <div class="form-group">
                <label>Street/Building/Brgy.</label>
                <input type="text" id="street" name="street" class="form-control" placeholder="Enter Street/Building/Brgy." required="">
            </div>
            <div class="form-group">
                <label>City/State/Zip</label>
                <input type="text" id="city" name="city" class="form-control" placeholder="Enter City/State/Zip" required="">
            </div>
            <div class="form-group">
                <label>Country</label>
                <input type="text" id="country" name="country" class="form-control" placeholder="Confirm Country" required="">
            </div>
            <div class="form-group">
                <label>Contact</label>
                <input type="text" id="contact" name="contact" class="form-control" placeholder="Confirm Contact Number" required="">
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" id="submit" name="savebtn" class="btn btn-primary" value="Save"></input>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Branch 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Branch Profile 
            </button>
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">
<?php     
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'delivery_service_db');

$query = "SELECT * FROM branches";
$query_run = mysqli_query($connection,$query);
?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Branch Code </th>
            <th>Street/Building/Brgy. </th>
            <th>City/State/Zip</th>
            <th>Country </th>
            <th>Contact # </th>
            <th>EDIT </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <?php
         if($query_run){
           foreach($query_run as $row){
        ?>  
        <tbody>
          <tr>
            <td><?php echo $row['Branch_id']; ?></td>
            <td><?php echo $row['Branch_code']; ?></td>
            <td><?php echo $row['Street_Building_Brgy']; ?></td>
            <td><?php echo $row['City_State_Zip']; ?></td>
            <td><?php echo $row['Country']; ?></td>
            <td><?php echo $row['Contact_number']; ?></td>
            <td>
              <form action="register1_edit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['Branch_id']; ?>">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
              <form action="" method="POST">
                  <input type="hidden" name="delete_id" value="<?php echo $row['Branch_id']; ?>">
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