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
    <style type="text/css">
      @media print{
        body *{
          visibility: hidden;
        }
        .print-container, .print-container *{
          visibility: visible;
        }
      }
      @page{
        size: a4;
        margin right: 1;
      }
    </style>

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
    <h6 class="m-0 font-weight-bold text-primary">Generate Report
    </h6>
  </div>

  <div class="card-body">
    <form id="form" action="" method="POST">  
    <div class="table-responsive">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter Reference #" name="search">
                <button type="submit" name="submit" class="btn btn-primary" style="margin: 10px;">Generate</button>
            </div>
    </div>
    </form> 
    <?php
      $connection = mysqli_connect("localhost","root","");
      $db = mysqli_select_db($connection,'delivery_service_db');

        if(isset($_POST['submit'])){
          $ref = $_POST['search'];

          $query = "SELECT * FROM parcels WHERE Reference_number = '$ref'";
          $query_run = mysqli_query($connection,$query);

            while($row = mysqli_fetch_array($query_run)){
              ?>
              <form id="form" action="" method="POST">  
  <div class="row print-container">
    <div class="table-responsive">
      <div class="title" style="text-align: center;"><h1 style="font-weight: bolder; font-size: 70;">PARCEL REPORT</h1></div>
      <br>
            <div class="form-group">
                <label> Sender's First Name</label>
                <input type="text" id="fName" name="fName" class="form-control" placeholder="Enter your First Name" value="<?php echo $row['Sender_Fname']; ?>">
            </div>
            <div class="form-group">
                <label>Sender's Middle Name</label>
                <input type="text" id="mName" name="mName" class="form-control" placeholder="Enter your Middle Name" value="<?php echo $row['Sender_Mname']; ?>">
            </div>
            <div class="form-group">
                <label>Sender's Last Name</label>
                <input type="text" id="lName" name="lName" class="form-control" placeholder="Enter your Last Name" value="<?php echo $row['Sender_Lname']; ?>">
            </div>
             <div class="form-group">
                <label>Sender's Contact</label>
                <input type="text" id="cOntact" name="cOntact" class="form-control" placeholder="Confirm Contact Number" value="<?php echo $row['Sender_Contactnum']; ?>">
            </div>
            <div class="form-group">
                <label>Sender's Address</label>
                <input type="text" id="aDdress" name="aDdress" class="form-control" placeholder="Confirm Email" value="<?php echo $row['Sender_address']; ?>">
            </div>
            <div class="form-group">
                <label> Recipient's First Name</label>
                <input type="text" id="FName" name="FName" class="form-control" placeholder="Enter your First Name" value="<?php echo $row['Recipient_Fname']; ?>">
            </div>
            <div class="form-group">
                <label>Recipient's Middle Name</label>
                <input type="text" id="MName" name="MName" class="form-control" placeholder="Enter your Middle Name" value="<?php echo $row['Recipient_Mname']; ?>">
            </div>
            <div class="form-group">
                <label>Recipient's Last Name</label>
                <input type="text" id="LName" name="LName" class="form-control" placeholder="Enter your Last Name" value="<?php echo $row['Recipient_Lname']; ?>">
            </div>
             <div class="form-group">
                <label>Recipient's Contact</label>
                <input type="text" id="COntact" name="COntact" class="form-control" placeholder="Confirm Contact Number" value="<?php echo $row['Recipient_Contactnum']; ?>">
            </div>
            <div class="form-group">
                <label>Recipient's Destination</label>
                <input type="text" id="DEstination" name="DEstination" class="form-control" placeholder="Confirm Email" value="<?php echo $row['Recipient_Destination']; ?>">
            </div>
             <div class="form-group">
                <label>Type:</label>
                <select name="tYpe" id="tYpe" select style="border: 2px solid #f0f0f0;
                                                            border-radius: 4px;
                                                            display: block;
                                                            font-family: inherit;
                                                            font-size: 14px;
                                                            padding: 10px;
                                                            width: 100%;">
                    <option value="<?php echo $row['Type']; ?>"><?php echo $row['Type']; ?></option>
                    <option value="Document"> Document </option>
                    <option value="Pouch"> Pouch </option>
                    <option value="Small Box"> Small Box </option>
                    <option value="Medium Box"> Medium Box </option>
                    <option value="Large Box"> Large Box </option>
                </select>
            </div>
            <div class="form-group">
                <label>Size</label>
                <input type="text" id="sIze" name="sIze" class="form-control" placeholder="Enter Size" value="<?php echo $row['Size']; ?>">
            </div>
            <div class="form-group">
                <label>Weight</label>
                <input type="text" id="wEight" name="wEight" class="form-control" placeholder="Enter Weight" value="<?php echo $row['Weight']; ?>">
            </div>
             <div class="form-group">
                <label>Class:</label>
                <select name="cLass" id="cLass" select style="border: 2px solid #f0f0f0;
                                                            border-radius: 4px;
                                                            display: block;
                                                            font-family: inherit;
                                                            font-size: 14px;
                                                            padding: 10px;
                                                            width: 100%;">
                    <option value="<?php echo $row['Class']; ?>"><?php echo $row['Class']; ?></option>
                    <option value="Regular"> Regular - 50 php </option>
                    <option value="Silver"> Silver - 100 php </option>
                    <option value="Platinum"> Platinum - 150 php </option>
                </select>
            </div>
            <div class="form-group">
                <label>Type of Delivery:</label>
                <select name="dElivery" id="dElivery" select style="border: 2px solid #f0f0f0;
                                                            border-radius: 4px;
                                                            display: block;
                                                            font-family: inherit;
                                                            font-size: 14px;
                                                            padding: 10px;
                                                            width: 100%;">
                    <option value="<?php echo $row['Type_of_Delivery']; ?>"><?php echo $row['Type_of_Delivery']; ?></option>
                    <option value="Deliver to Recipient's Address"> Deliver to Recipient's Address </option>
                    <option value="Pick-up at the nearest Branch"> Pick-up at the nearest Branch </option>
                </select>
            </div>
             <div class="form-group">
                <label>Type of Pick-up:</label>
                <select name="pIck" id="pIck" value="<?php echo $row['Type_of_Pick-up']; ?>" select style="border: 2px solid #f0f0f0;
                                                            border-radius: 4px;
                                                            display: block;
                                                            font-family: inherit;
                                                            font-size: 14px;
                                                            padding: 10px;
                                                            width: 100%;">
                    <option value="<?php echo $row['Type_of_Pick-up']; ?>"><?php echo $row['Type_of_Pick-up']; ?></option>   
                    <option value="Pick-up at your Address"> Pick-up at your Address </option>
                    <option value="Pick-up at the nearest Branch"> Pick-up at the nearest Branch </option>
                </select>
            </div>
            <div class="form-group">
                <label>Date of Pick-up:</label>
                <input type="date" id="dAte" name="dAte" class="form-control" placeholder="" value="<?php echo $row['Date_of_Pick-up']; ?>">
            </div>
            <div class="form-group">
                <label>Time of Pick-up:</label>
                <input type="time" id="tIme" name="tIme" class="form-control" placeholder="" value="<?php echo $row['Time_of_Pick-up']; ?>">
            </div>
             <div class="form-group">
                <label>Status:</label>
                <select name="sTatus" id="sTatus" select style="border: 2px solid #f0f0f0;
                                                            border-radius: 4px;
                                                            display: block;
                                                            font-family: inherit;
                                                            font-size: 14px;
                                                            padding: 10px;
                                                            width: 100%;">
                    <option value="<?php echo $row['Status']; ?>"><?php switch ($row['Status']) {
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
                
                default:
                  echo "<span class='badge badge-pill badge-info'> Item Accepted by Courier</span>";
                  
                  break;
              } ?></option>
                    <option value="1"> Collected </option>
                    <option value="2"> Shipped </option>
                    <option value="3"> In-transit </option>
                    <option value="4"> Arrived at Destination </option>
                    <option value="5"> Out of Delivery </option>
                    <option value="6"> Ready to Pickup </option>
                    <option value="7"> Delivered </option>
                    <option value="8"> Picked-up </option>
                    <option value="9"> Unsucessful Delivery Attempt </option>
                    <option value="0"> Item Accepted by Courier </option>
                </select>
            </div>
    </div>
    </div> 
            <div class="modal-footer">
            <a href="register3.php" class="btn btn-danger">Close</a>
            <button onclick="window.print();" id="updatebtn" name="update_btn" class="btn btn-success" value="Update">Print</button>
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