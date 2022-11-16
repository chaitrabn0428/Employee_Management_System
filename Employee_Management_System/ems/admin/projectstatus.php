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
                                                <th>Employee ID</th>
                                                <th>Project Name</th>
                                                <th>Project Status</th>
                                               
                                                </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $select_query = mysqli_query($conn, "select project.* , tbl_user.id from tbl_user inner join project on tbl_user.id=user_leave_details.user_id where tbl_user.status=0");
										$sn = 1;
										while($row = mysqli_fetch_array($select_query))
										{
                                            ?><tr>

                                            <td><?php echo $sn; ?></td>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['Pname']; ?></td>



                                            <td>
                                            <?php
                                                if($row['Status']==0)
                                                { ?>
                                                    <td style="color:blue;font-weight: 700;">Pending</td>
                                               <?php }
                                                else if($row['Status']==1)
                                                { ?>
                                                    <td style="color:green;font-weight: 700;">done</td>
                                              <?php  }?>
                                               

                                                </td> 
                                              </tr><?php
                                              $sn++;} ?> 
                                         
                                        
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

    
   
