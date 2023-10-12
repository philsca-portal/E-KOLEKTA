<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('../pdo.php');
parcel_delete();
?>
 <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

    <script src="https://kit.fontawesome.com/19d0cdd924.js" crossorigin="anonymous"></script>
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

  <div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Parcels / Parcel List 
    </h6>
  </div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  
  </div>

  <div class="card-body">

    <div class="table-responsive">
<?php     
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'delivery_service_db');

$query = "SELECT * FROM parcels";
$query_run = mysqli_query($connection,$query);
?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Reference Number</th>
            <th> Sender's Name</th>
            <th>Recipient's Name</th>
            <th>Status</th>
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
            <td><?php echo $row['Parcel_id']; ?></td>
            <td><?php echo $row['Reference_number']; ?></td>
            <td> <?php echo $row['Sender_Fname'];?> <?php echo $row['Sender_Mname'];?> <?php echo $row['Sender_Lname'];?></td>
            <td> <?php echo $row['Recipient_Fname'];?> <?php echo $row['Recipient_Mname'];?> <?php echo $row['Recipient_Lname'];?></td>
            <td>
              <?php 
              switch ($row['Status']) {
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
            <td>
                <form action="register3_edit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['Parcel_id'];?>">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['Parcel_id']; ?>">
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