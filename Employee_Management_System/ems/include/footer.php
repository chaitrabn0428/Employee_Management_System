<script src="vendor/jquery/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
     $('#leave-time').hide();
     $('#satrt-end-date').hide();
      
    $('#leave-cat').change(function(){
       
        if($('#leave-cat').val() == 'Half Day') {
         
         $('#satrt-end-date').hide();
            
         $('#leave-time').show(); 
         $("#start-date").val('');
         $("#end-date").val('');
       
        } else if ($('#leave-cat').val() == 'Full Day') {
          
            $('#leave-time').hide();
            
            $('#satrt-end-date').show(); 
            $("#leave-date").val('');
            $("#time-period").val('');
        }
        else
        {
            $('#leave-time').hide();
            $('#satrt-end-date').hide();
        }
    });
});
</script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>
  
  <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js'></script>
  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>
   <script src="plugins/validation/jquery.validate.min.js"></script>
    <script src="plugins/validation/jquery.validate-init.js"></script>
   
<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script>
  $(function() {

    $("#start-date").datepicker({
        
        onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() + 0);
            $("#end-date").datepicker("option", "minDate", dt);
        }
    });
    $("#end-date").datepicker({
        
        onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() + 0);
            $("#start-date").datepicker("option", "maxDate", dt);
        }
    });  
     $("#leave-date").datepicker(); 

  } );

</script>
<script type="text/javascript">
$(document).ready(function(){
     $('#leave-time').hide();
     $('#satrt-end-date').hide();
      
    $('#tour-cat').change(function(){
         
         
        if($('#tour-cat').val() == 'Half Day') {
           
          
        
         
         $('#satrt-end-date').hide();
            
         $('#leave-time').show(); 
       
        } else if ($('#tour-cat').val() == 'Full Day') {
            
          
            
            
            $('#leave-time').hide();
            
            
            $('#satrt-end-date').show(); 
        }
        else
        {
            $('#leave-time').hide();
            $('#satrt-end-date').hide();
        }
    });
});
</script>
<script>
  $(function() {

    $("#start-date").datepicker({
        
        onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() + 0);
            $("#end-date").datepicker("option", "minDate", dt);
        }
    });
    $("#end-date").datepicker({
        
        onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() + 0);
            $("#start-date").datepicker("option", "maxDate", dt);
        }
    });  
     $("#leave-date").datepicker(); 

  } );

</script>
</body>
</html>