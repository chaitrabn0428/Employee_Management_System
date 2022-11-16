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
   
	$firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $DOB = $_POST['dob'];
    $Gender = $_POST['gender'];
    $Contact = $_POST['contact'];
    $department = $_POST['department'];
    $GrossSalary = $_POST['GrossSalary'];
    $emailid = $_POST['emailid'];
    $pwd = md5($_POST['pwd']);

    $insert_employee = mysqli_query($conn,"insert into tbl_user set firstname='$firstname', lastname='$lastname', DOB='$DOB', Gender='$Gender', Contact='$Contact', department='$department',GrossSalary='$GrossSalary', emailid='$emailid', password='$pwd'");

    if($insert_employee > 0)
    {
        ?>
<script type="text/javascript">
    alert("Employee added successfully.")
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
            <a href="#">Add Employee</a>
          </li>
          
        </ol>

  <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-info-circle"></i>
            Submit Employee Details</div>
             
            <form method="post" class="form-valide">
          <div class="card-body">
                                      
                                  <div class="form-group row">
                                      <label class="col-lg-4 col-form-label" for="remarks">First Name <span class="text-danger">*</span></label>
                                       <div class="col-lg-6">
                                      <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter First Name" >
                                       </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-lg-4 col-form-label" for="remarks">Last Name <span class="text-danger">*</span></label>
                                       <div class="col-lg-6">
                                      <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter last Name" >
                                       </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-lg-4 col-form-label" for="remarks">DOB <span class="text-danger">*</span></label>
                                       <div class="col-lg-6">
                                      <input type="date" name="dob" id="dob" class="form-control" placeholder="Enter DOB" >
                                       </div>
                                  </div>
                                  <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="department">Gender <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="gender" name="gender" >
                                                    <option value="">Select Gender</option>
                                                    <option  value="male">Male</option>
                                                    <option  value="Female">Female</option>
                                                    <option  value="Others">Others</option>
                                         
                                                </select>
                                            </div>
                                        </div>

                                  <div class="form-group row">
                                      <label class="col-lg-4 col-form-label" for="remarks">EmailId <span class="text-danger">*</span></label>
                                       <div class="col-lg-6">
                                      <input type="text" name="emailid" id="emailid" class="form-control" placeholder="Enter EmailId" >
                                       </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-lg-4 col-form-label" for="pwd">Password <span class="text-danger">*</span></label>
                                       <div class="col-lg-6">
                                      <input type="password" name="pwd" id="pwd" class="form-control" placeholder="Enter Password" >
                                       </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-lg-4 col-form-label" for="pwd">Contact <span class="text-danger">*</span></label>
                                       <div class="col-lg-6">
                                      <input type="text" name="contact" id="contact" class="form-control" placeholder="Enter Contact" >
                                       </div>
                                  </div>
                                      <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="department">Department <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="department" name="department" >
                                                    <option value="">Select Department</option>
                                                    <option  value="IT">IT</option>
                                                    <option  value="HR">HR</option>
                                                    <option  value="Account">Account</option>
                                                    <option  value="Marketting">Marketting</option>
                                                                                                        
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="department">Gross Salary
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="GrossSalary" name="GrossSalary" >
                                                    <option value="">Select Gross Salary</option>
                                                    <option  value="IT">30000</option>
                                                    <option  value="HR">40000</option>
                                                    <option  value="Account">20000</option>
                                                    <option  value="Marketting">10000</option>
                                                                                                        
                                                </select>
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