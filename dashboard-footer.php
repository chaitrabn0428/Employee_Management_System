<script src="ckeditor/ckeditor.js"></script>
 <script type="text/javascript">
	CKEDITOR.replace('workdone',
	{
wordcount: {
showParagraphs: true,
showWordCount: true,
showCharCount: true,
countSpacesAsChars:true,
countHTML:false,
maxWordCount: -1,
maxCharCount: 2000
}
	    
	});
	
</script>

<script type="text/javascript">
	CKEDITOR.replace('tangible');
</script>

 <script src="vendor/jquery/jquery.min.js"></script>
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
</body>

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
<script>
        
         //show current time
         $(document).ready(function() {
         var interval = setInterval(function() {
        var momentNow = moment();
        $('#date-div').html( momentNow.format('dddd').substring(0,3).toUpperCase() + ',  ' + momentNow.format('DD MMMM YYYY') );
        $('#time-div').html(momentNow.format('hh:mm:ss A'));
    }, 100);
         });
</script>
    
   
<script>
$(document).ready(function() {
	
	$(".add").click(function() {
		if($('.contents').find('textarea').length<9){
			$('<div class="more-field"> <textarea class="form-control" name="workdone[]" id="workdone"></textarea><span class="rem" ><a href="javascript:void(0);" ><i class="fa fa-minus-circle"></i></span></div>').appendTo(".contents");
		}
	});	
	
		$(".addt").click(function() {
		if($('.contentst').find('textarea').length<9){
			$('<div class="more-field"> <textarea class="form-control" name="tangible[]" id="tangible"></textarea><span class="remt" ><a href="javascript:void(0);" ><i class="fa fa-minus-circle"></i></span></div>').appendTo(".contentst");
		}
	});	

});
$(document).on('blur','#workdone',function(){
	if($('#workdone').val()==""){
			 
		$('.addmore').hide();
	}else{
		$('.addmore').show();
	}
});
$(document).on('blur','#tangible',function(){
	if($('#tangible').val()==""){
			 
		$('.addmoret').hide();
	}else{
		$('.addmoret').show();
	}
});

$('.contents').on('click', '.rem', function() {
	$(this).parent("div").remove();
});
$('.contentst').on('click', '.remt', function() {
	$(this).parent("div").remove();
});

</script>
<script>
function doSubmit() {
    var workdone = CKEDITOR.instances.workdone.getData();
    var tangible = CKEDITOR.instances.tangible.getData();
    //alert(workdone);
    if (workdone=="" || tangible=="") {
        alert("All fields are required.");
        return false;
    } 
}
</script>