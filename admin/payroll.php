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
    
  <button class="tablinks" onclick="openCity(event, 'Details')" id="OpenCal"> <i class="fas fa-table"></i> Payroll</button>
</div>
           
</div>    
<div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Employee ID</th>
                  <th>Employee Name</th>
                  <th>Department</th>
                  <th>Gross Salary</th>
                  <th>Deductions</th>
                  <th>Net Salary</th>
                </thead>

                <?php
										$select_query = mysqli_query($conn, "select tbl_user.* , concat(tbl_user.firstname,' ',tbl_user.lastname)as fullname, tbl_user.department,tbl_user.GrossSalary,tbl_user.Deductions,tbl_user.NetSalary from tbl_user where tbl_user.status=0");
                    $sn = 1;
                while($row = mysqli_fetch_array($select_query))
                {   
                ?>

                                        <tr>
                                            <td><?php echo $sn; ?></td>
                                            <td><?php echo $row['fullname']; ?></td>
                                            <td><?php echo $row['department']; ?></td>
                                            <td><?php echo $row['GrossSalary']; ?></td>
                                            
                                            <td><?php echo $row['Deductions']; ?></td>
                                            <td><?php echo $row['NetSalary']; ?></td>
                                        
                                            </tr>
                <?php $sn++; } ?>
                
                <tbody>
               
                                        
             
              </table>
  </div>
</div>