
<?php
session_start();
include ('../connection.php');
$id = $_SESSION['id'];
if(empty($id))
{
    header("Location: index.php"); 
}
if(isset($_POST['sbt-lv-btn']))
{
   
	  $id = $_POST['id'];
    $Pname = $_POST['Pname'];
    $DueDate = $_POST['DueDate'];
    

    $insert_employee = mysqli_query($conn,"insert into project set id='$id', Pname='$Pname', DueDate='$DueDate'");

    if($insert_employee > 0)
    {
        ?>
<script type="text/javascript">
    alert("Project assigned successfully.")
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
            <a href="#">Assign Project</a>
          </li>
          
        </ol>

  <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-info-circle"></i>
            Project Details</div>
             
            <form method="post" class="form-valide">
          <div class="card-body">
                                      
                                  <div class="form-group row">
                                      <label class="col-lg-4 col-form-label" for="remarks">Employee ID <span class="text-danger">*</span></label>
                                       <div class="col-lg-6">
                                      <input type="text" name="id" id="id" class="form-control" placeholder="Enter Employee ID" >
                                       </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-lg-4 col-form-label" for="remarks">Pname<span class="text-danger">*</span></label>
                                       <div class="col-lg-6">
                                      <input type="text" name="Pname" id="Pname" class="form-control" placeholder="Enter Project Name" >
                                       </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-lg-4 col-form-label" for="remarks">Due Date<span class="text-danger">*</span></label>
                                       <div class="col-lg-6">
                                      <input type="date" name="DueDate" id="DueDate" class="form-control" placeholder="Enter Due Date" >
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