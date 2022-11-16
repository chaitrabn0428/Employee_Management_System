<?php
session_start();
include ('../connection.php');
$id = $_SESSION['id'];
if(empty($id))
{
    header("Location: index.php"); 
}
?>
<?php include('include/header.php'); ?>
  <div id="wrapper">

    <?php include('include/side-bar.php'); ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">View Employee</a>
          </li>
          
        </ol>

  <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-info-circle"></i>
            View Employee Details</div>
            <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                                            <tr>
                                                <th>S.No.</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>EmailID</th>
                                                <th>Department</th>
                                                <th>Contact</th>
                                                <th>Gender</th>
                                                <th>Date of joining</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
										$select_query = mysqli_query($conn, "select * from tbl_user where status=0");
										$sn = 1;
										while($row = mysqli_fetch_array($select_query))
										{ 
										    
										?>
                                            <tr>
                                                <td><?php echo $sn; ?></td>
                                                <td><?php echo $row['firstname']; ?></td>
                                                <td><?php echo $row['lastname']; ?></td>
                                                <td><?php echo $row['emailid']; ?></td>
                                                <td><?php echo $row['department']; ?></td>
                                                <td><?php echo $row['Contact']; ?></td>
                                                <td><?php echo $row['Gender']; ?></td>
                                                <td><?php echo $row['entrydate']; ?></td>
                                                </tr>
										<?php $sn++; } ?>
                                           
                                           
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>                   
                            </div>
                        
    </div>
         
        </div> 

    <i class="fas fa-angle-up"></i>
  </a>
 <?php include('include/footer.php'); ?>