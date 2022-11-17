<?php
session_start();
include ('connection.php');
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
  <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-info-circle"></i>
            Project details</div>
            <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                                            <tr>
                                                <th>Employee ID</th>
                                                <th>Project Name</th>
                                                <th>DueDate</th>
                                               

                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
										$select_query = mysqli_query($conn, "select * from project  where id='$id'");
										$sn = 1;
										while($row = mysqli_fetch_array($select_query))
										{ 
										    
											
										?>
                                            <tr>
                                                
                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['Pname']; ?></td>
                                                <td><?php echo $row['DueDate'];?></td>
                                         
                                                
                                          

                                                                                    
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