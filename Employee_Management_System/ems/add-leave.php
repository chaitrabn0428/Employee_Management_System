<?php
session_start();
include ('connection.php');
$name = $_SESSION['user_name'];
$id = $_SESSION['id'];
if(empty($id))
{
    header("Location: index.php"); 
}
if(isset($_REQUEST['sbt-lv-btn']))
{
   
	$leave_type = $_POST['leave-type'];
    $leave_cat = $_POST['leave-cat'];
    if(!empty($_POST['start-date']))
    {
       $start_date = date('Y-m-d', strtotime($_POST['start-date']));
    }
    else 
    {
       $start_date = NULL;
    }    
    if(!empty($_POST['end-date']))
    {
       $end_date = date('Y-m-d', strtotime($_POST['end-date']));
    }
    else 
    {
       $end_date = NULL;
    }  
    if(!empty($_POST['leave-date']))
    {
       $leave_date = date('Y-m-d', strtotime($_POST['leave-date']));
    }
    else 
    {
       $leave_date = NULL;
    }  
    
    $time_period = $_POST['time-period'];
    $remark = $_POST['remarks'];

    $insert_leave = mysqli_query($conn,"insert into user_leave_details set user_id='$id', leave_type='$leave_type', leave_category='$leave_cat', start_date='$start_date', end_date='$end_date', leave_date='$leave_date', time_period='$time_period', description='$remark'");

    if($insert_leave > 0)
    {
        ?>
<script type="text/javascript">
    alert("Leave added successfully.")
</script>
<?php
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
            <a href="#">Apply Leave</a>
          </li>
          
        </ol>

  <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-info-circle"></i>
            Submit Your Details</div>
             
            <form method="post" class="form-valide">
          <div class="card-body">
                                       
                                      <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="leave-type">Leave Type <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="leave-type" name="leave-type" >
                                                    <option value="">Select Leave Type</option>
                                                    <option  value="CL">CL</option>
                                                    <option  value="EL">EL</option>
                                                    <option  value="RH">RH</option>
                                                    <option  value="HPL">HPL</option>
                                                    <option  value="CCL">CCL</option>
                                                    <option  value="Others">Others</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                       
                                       
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="leave-cat">Leave Category <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="leave-cat" name="leave-cat" onchange="onsel(this);">
                                                    <option  value="">Select Leave Category</option>
                                                    <option  value="Full Day">Full Day</option>
                                                    <option  value="Half Day">Half Day</option>
                                                    
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div id="satrt-end-date">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="start-date">Leave Start Date <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="start-date" name="start-date" placeholder="Select Leave Start Date">
                                            </div>
                                        </div>
                                        
                                         <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="end-date">Leave End Date <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="end-date" name="end-date" placeholder="Select Leave End Date">
                                            </div>
                                        </div>
                                        </div>
                                        
                                        
                                        <div id="leave-time">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="leave-date">Leave Date <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="leave-date" name="leave-date" placeholder="Select Leave Date">
                                            </div>
                                        </div>
                                        
                                         <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="time-period">Time Period <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="time-period" name="time-period">
                                                    <option  value="">Select Time Period</option>
                                                    <option  value="After Noon">After Noon</option>
                                                    <option  value="Fore Noon">Fore Noon</option>
                                                    </select>
                                            </div>
                                        </div>
                                        </div>
                                        
                                  <div class="form-group row">
                                      <label class="col-lg-4 col-form-label" for="remarks">Remarks <span class="text-danger">*</span></label>
                                       <div class="col-lg-6">
                                      <textarea rows="3" name="remarks" id="remarks" class="form-control" placeholder="Enter a Remarks.." ></textarea>
                                       </div>
                                  </div>
                           
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" name="sbt-lv-btn" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    
                                </div>
                                </form>
                            </div>
                        
    </div>
         
        </div>
     
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
 
 <?php include('include/footer.php'); ?>