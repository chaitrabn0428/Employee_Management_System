<?php
session_start();
include ('connection.php');
$name = $_SESSION['user_name'];

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
            <a href="#">View Project Status</a>
          </li>
          
        </ol>

  <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-info-circle"></i>
            View Project Status</div>
            <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                                            <tr>
                                                <th>Employee ID</th>
                                                <th>Project Name</th>
                                                <th>Status</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
										$select_query = mysqli_query($conn, "select * from project,tbl_user.id where id='$id'");
										$sn = 1;
										while($row = mysqli_fetch_array($select_query))
										{ 
										    
											
										?>
                                            <tr>
                                                <td><?php echo $sn; ?></td>
                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['Pname']; ?></td>
                                               
                                               
                                              
                                                <?php
                                                if($row['status']==0)
                                                { ?>
                                                    <td style="color:blue;font-weight: 700;">Pending</td>
                                               <?php }
                                                else if($row['status']==1)
                                                { ?>
                                                    <td style="color:green;font-weight: 700;">Done</td>
                                              <?php  }
                                                else 
                                                { ?>
                                                    <td style="color:red;font-weight: 700;">Not Completed</td>
                                              <?php  } ?>

                                              
                                                
                                                
                                            </tr>
										<?php $sn++; } ?>
                                           
                                           
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>                   
                            </div>
                        
    </div>
         
        </div>
  
   
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
 
 <?php include('include/footer.php'); ?>