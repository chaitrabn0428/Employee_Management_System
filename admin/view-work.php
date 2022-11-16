<?php 
include('../connection.php');
include('include/header.php'); ?>

  <div id="wrapper">

    <?php include('include/side-bar.php'); ?>

    <div id="content-wrapper">

      <div class="container-fluid">

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
                                                <th>Name</th>
                                                <th>Department</th>
                                                <th>Date</th>
                                                <th>To_Do list</th>
                                                <th>Work Done</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                    <?php
                    $i=1;
                    $select_query = mysqli_query( $conn, "select user_work_report.*, concat(tbl_user.firstname,' ',tbl_user.lastname) as fullname, tbl_user.department from user_work_report inner join tbl_user on tbl_user.id=user_work_report.user_id");
                    while($row = mysqli_fetch_array($select_query))
                    {
                      $date = $row['date'];
                      $workdone = $row['workdone'];
                      $tangible = $row['tangible'];
                      
                    ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row['fullname'];?></td>
                                                <td><?php echo $row['department']; ?></td>
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

<?php include('include/footer.php'); ?>
   <script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
// Get the element with id="OpenCal" and click on it
document.getElementById("OpenCal").click();
</script>

    
   
