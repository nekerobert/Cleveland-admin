<!-- Footer -->
		<footer class="footer ptb-20">
			<div class="row">
				<div class="col-md-12 text-center">
					  <!-- setting auto update copyright -->
					    <div class="copy_right">
					    <p>&copy;
					      <?php 
					        ini_set('date.timezone', 'Europe/London');
					        $startYear = 2020; //get start year
					        $thisYear = date('Y');//get the current year
					        if ($startYear == $thisYear) {
					          echo $startYear;
					        }else{
					          echo "{$startYear}-{thisYear}";
					        }
					      ?> Admin by <a href="#"> Cleveland</a></p>
					    </div>
<!-- 					<div class="copy_right">
						<p>
							2018 © Dashboard By
							<a href="#">Cleveland</a>
						</p>
					</div> -->
					<a id="back-to-top" href="#"> <i class="ion-android-arrow-up"></i> </a>
				</div>
			</div>
		</footer>
		<!-- Footer_End -->
	</div>

	<!-- script starts -->
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/popper.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

	<!--Morris Chart-->
	<script src="assets/js/index/morris-chart/morris.js"></script>
	<script src="assets/js/index/morris-chart/raphael-min.js"></script>
	<!--morris chart initialization-->
	<script src="assets/js/index/morris-chart/morris-init.js"></script>
	<!--chartjs Total Profit,New Orders,Yearly Revineue,New Users-->
	<script src="assets/js/Chart.min.js"></script>
	<script src="assets/js/chartjs-init.js"></script>
	<!-- validation -->
<!-- 	<script type="text/javascript" src="assets/js/jquery.validate.js"></script>
	<script src="assets/js/jquery-validate-init.js"></script> -->
	<script type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
	<script src="assets/js/custom.js" type="text/javascript"></script>
	    <!--datatables-->
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>

	<script>
        $(document).ready(function () {
            $('#bs4-table').DataTable();
        });
    </script>

<!-- ckeditor script -->
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
</body>
</html>