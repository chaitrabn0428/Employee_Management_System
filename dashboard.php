<?php
session_start();
$name = $_SESSION['user_name'];
$id = $_SESSION['id'];
$array = array();
include 'connection.php';
if(empty($id))
{
    header("Location: index.php"); 
}

if(isset($_REQUEST['sbt-btn']))
{
$date = $_POST['dates']; 
$workdone = implode(", ", $_POST['workdone']);
$tangible = implode(", ", $_POST['tangible']);

$date_exist = mysqli_query($conn,"select * from user_work_report where date='$date' and user_id='$id'");
$count = mysqli_num_rows($date_exist);
if($count>0)
{ ?>
<script>
alert("You have already submitted <?php echo date('jS F, Y',strtotime($date)); ?> report");
</script>
<?php }
else {
$insert_work_report = mysqli_query($conn, "insert into user_work_report set user_id='$id', date='$date', workdone='$workdone', tangible='$tangible'");
if($insert_work_report>0)
{ ?>
<script>
    alert("Work report saved successfully.");
</script>
<?php } else
{?>
<script>
    alert("Work report not saved.");
</script>
<?php } 
}
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
            <a href="#">Dashboard</a>
          </li>
          
        </ol>

        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-info-circle"></i>
            Submit Your Details</div>
            <form method="post" class="form-valide">
                
                
                <div class="form-group row card-body">
                    <label class="col-lg-4 col-form-label" for="val-date">Select Date <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="date" name="dates" required>
                                            </div>
                                             <label class="col-lg-4 col-form-label" for="val-date">To_Do list <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <br>
                                               <textarea class="form-control" name="workdone[]" id="workdone"><?php if(isset($workdone)){echo $workdone; }?></textarea>
                                              
                                            </div>
                                            
                                             <label class="col-lg-4 col-form-label" for="val-date">Work Done<span class="text-danger">*</span>
                                            </label>
                                           
                                            <div class="col-lg-8">
                                                <br>
                                               <textarea class="form-control" name="tangible[]" id="tangible"><?php if(isset($tangible)){ echo $tangible; }?></textarea>
                                               <!--<span class="addmoret"><a href="javascript:void(0);" class="addt" ><i class="fa fa-plus-circle"></i></a></span>-->
                                            <!--   <div class="contentst">-->
                                            <!--    <br>-->
                                            <!--</div>-->
                                            </div>
                                            <!-- <div class="">-->
                                            <!--     <i class="fa fa-file-excel-o" aria-hidden="true"></i><a href="http://demo.oakyweb.com/awsar-graph/VP_monthly_reoprt.xlsx"> Download Sample</a>-->
                                            <!--</div>-->
                                            <br>
                                            
                                        </div>
                                        <div class="col-lg-8 ml-auto">
                                                <input type="submit" name="sbt-btn" class="btn btn-primary" onclick="return doSubmit();">
                                            </div>
                                            <br>
                  </form>
        </div>
        
     <div class="card mb-3">
          <div class="card-header">
              <div class="tab ">
    
  <button class="tablinks" onclick="openCity(event, 'Details')" id="OpenCal"> <i class="fas fa-table"></i> View Details</button>
</div>
            
</div>    

<div id="Details" class="tabcontent">
  <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                                            <tr>
                                                <th>SI. NO.</th>
                                                <th>Date</th>
                                                <th>To_Do list</th>
                                                <th>Work Done</th>
                                                </tr>
                                        </thead>
                                        <tbody>
										<?php
										$i=1;
										$select_query = mysqli_query( $conn, "select * from user_work_report where user_id='$id'");
										while($row = mysqli_fetch_array($select_query))
										{
											$date = $row['date'];
											$workdone = $row['workdone'];
											$tangible = $row['tangible'];
											
										?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $date;?></td>
                                                <td><?php echo $workdone;?></td>
                                                <td><?php echo $tangible; ?></td>
                                                </tr>
										<?php $i++; } ?>
                                           
                                           
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    
      
      </div>
      <!-- /.container-fluid -->


    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
<?php include('include/dashboard-footer.php'); ?>