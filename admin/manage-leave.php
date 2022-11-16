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
  <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-info-circle"></i>
            View Leave Details</div>
            <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                                            <tr>
                                                <th>S.No.</th>
                                                <th>Employee Name</th>
                                                <th>Department</th>
                                                <th>Leave Type</th>
                                                <th>Leave Category</th>
                                                <th>Leave Start Date</th>
                                                <th>Leave End Date</th>
                                                <th>Description</th>
                                                <th>Leave Count</th>
                                                <th>Action</th>
                                                

                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
										$select_query = mysqli_query($conn, "select user_leave_details.* , concat(tbl_user.firstname,' ',tbl_user.lastname)as fullname, tbl_user.department from user_leave_details inner join tbl_user on tbl_user.id=user_leave_details.user_id where tbl_user.status=0");
										$sn = 1;
                                        $LeaveCount=0;
										while($row = mysqli_fetch_array($select_query))
										{ 
										    
											$startdate = date('d M Y', strtotime($row['start_date']));
											$enddate = date('d M Y', strtotime($row['end_date']));
											$leavedate = date('d M Y', strtotime($row['leave_date']));
											$timeperiod = $row['time_period'];
                                            $d1=explode(' ',$enddate);
                                            $d2=explode(' ',$startdate);
                                            $LeaveCount=$d1[0]-$d2[0]+1;
										?>
                                            <tr>
            
                                                <td><?php echo $sn; ?></td>
                                                <td><?php echo $row['fullname']; ?></td>
                                                <td><?php echo $row['department']; ?></td>
                                                <td><?php echo $row['leave_type']; ?></td>
                                                <td><?php 
                                                if($row['leave_category'] == 'Half Day')
                                                {
                                                    echo $row['leave_category']; ?> (<?php echo $timeperiod; ?>)
                                              <?php  }
                                                else
                                                {
                                                     echo $row['leave_category'];
                                                }
                                                ?></td>
                                                <td><?php 
                                                if($row['leave_category'] == 'Half Day')
                                                {
                                                    echo $leavedate;
                                               }
                                                else
                                                {
                                                     echo $startdate;
                                                }
                                                ?></td>
                                                <td><?php 
                                                if($row['leave_category'] == 'Half Day')
                                                {
                                                    echo $leavedate;
                                               }
                                                else
                                                {
                                                     echo $enddate;
                                                }
                                                ?></td>
                                                <td><?php echo  $row['description']; ?></td>
                                                <td><?php echo $LeaveCount;?></td>
                        
                                            
                                        
                                        
                                                <?php 
                                                if($row['status']==0)
                                                    { ?>
                                                   <td> <a href="approve-leave.php?id=<?php echo $row['id']; ?>"><button class="btn btn-success btn-sm">Approve</button></a>
                                                    <a href="reject-leave.php?id=<?php echo $row['id']; ?>"><button class="btn btn-danger btn-sm">Reject</button></a> </td>
                                                <?php } 
                                                else if($row['status']==1) { ?>
                                                    <td style="color:green; font-weight: 700;">Approved</td>
                                                    
                                               <?php }
                                               else
                                               { ?>
                                                <td style="color:Red; font-weight: 700;">Rejected</td>

                                             <?php  }

                                                ?>
                                                                                            
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