
<?php 
include('includes/header.inc.php');
include('includes/sidebar.inc.php');
?>
<!-- include headers stops -->

			<!--main contents start-->
			<main class="content_wrapper">
				<!--page title start-->
				<div class="page-heading">
					<div class="container-fluid">
						<div class="row d-flex align-items-center">
							<div class="col-md-6">
								<div class="page-breadcrumb">
									<h1>Home Slider</h1>
								</div>
							</div>
							<div class="col-md-6 justify-content-md-end d-md-flex">
								<div class="breadcrumb_nav">
									<ol class="breadcrumb">
										<li>
											<i class="fa fa-home"></i>
											<a class="parent-item" href="index-2.html">Home</a>
											<i class="fa fa-angle-right"></i>
										</li>
										<li class="active">
											Add Home Slider
										</li>
									</ol>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--page title end-->


				<div class="container-fluid">

					<!-- state start-->
					<div class="row">

						<!-- form statrts -->
							<div class="col-md-12">
									<div class="card  border-info lobicard-custom-control lobi-light  mb-4">
										<div class="card-header bg-info ">
											<div class="card-title text-white">
												Add Home Slider
											</div>
										</div>
								<div class="card-body">
									<form id="signupForm1" method="post" class=" right-text-label-form feedback-icon-form" action="#" novalidate="novalidate">
										<div class="form-group row">
											<label class="col-sm-4 control-label" for="sectitle">Primary Title</label>
											<div class="col-sm-5">
												<input type="text" class="form-control" id="primtitle" name="primtitle" placeholder="Primary Title">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 control-label" for="sectitle">Secondary Title</label>
											<div class="col-sm-5">
												<input type="text" class="form-control" id="sectitle" name="sectitle" placeholder="Secondary Title">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-8 ml-auto">
												<div class="checkbox">
													<label>
														<input type="checkbox" id="agree" name="agree" value="agree"> Enable secondary title </label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 control-label" for="">Button one Text</label>
											<div class="col-sm-5">
												<input type="text" class="form-control" id="" name="" placeholder="Button one text">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 control-label" for="">Button one link</label>
											<div class="col-sm-5">
												<input type="text" class="form-control" id="" name="" placeholder="Button one link">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-8 ml-auto">
												<div class="checkbox">
													<label>
														<input type="checkbox" id="agree" name="agree" value="agree"> Enable button one </label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 control-label" for="sectitle">Button two text</label>
											<div class="col-sm-5">
												<input type="text" class="form-control" id="" name="" placeholder="Button two text">
											</div>
										</div>
									
										<div class="form-group row">
											<label class="col-sm-4 control-label" for="sectitle">Button two link</label>
											<div class="col-sm-5">
												<input type="text" class="form-control" id="" name="" placeholder="Button two link">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-8 ml-auto">
												<div class="checkbox">
													<label>
														<input type="checkbox" id="agree" name="agree" value="agree"> Enable button two </label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 control-label" for="username1">Home Slider Image</label>
											<div class="col-sm-5">
												 <input type="file" multiple class="form-control" id="tipimg" name="tipimg" placeholder="Choose Tip Slider image" />
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-8 ml-auto">
												<button type="submit" class="btn btn-info" name="submit" value="submit">
													Submit
												</button>
												<button type="submit" class="btn btn-secondary" name="" value="submit">
													Cancel
												</button>
											</div>
										</div>
									</form>
								</div>
									</div>
								</div>
								</div>
								</div>
						</main>
			<!--main contents end-->


<!-- include footer starts-->
<?php 
include('includes/footer.inc.php');
?>
<!-- include footer stops