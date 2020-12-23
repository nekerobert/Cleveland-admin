<?php require_once($_SERVER['DOCUMENT_ROOT'].'/private/init.php'); ?>
<!-- include headers starts-->
<?php 
 require_once(INCLUDES_PATH.'/admin/header.inc.php');
 require_once(INCLUDES_PATH.'/admin/sidebar.inc.php');
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
									<h1>Manage About Us</h1>
								</div>
							</div>
							<div class="col-md-6 justify-content-md-end d-md-flex">
								<div class="breadcrumb_nav">
									<ol class="breadcrumb">
										<li>
											<i class="fa fa-home"></i>
											<a class="parent-item" href="#">About</a>
											<i class="fa fa-angle-right"></i>
										</li>
										<li class="active">
											About Us
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
						<!-- table starts -->
						<div class="col-sm-12 col-md-12 col-lg-6 col-xs-12 col-xl-6">
							<div class="row">
								<div class="col-md-12">
									<div class="card card-shadow mb-4">
										<div class="card-header bg-info ">
											<div class="card-title text-white">
												About Slider Image Table
											</div>
										</div>
							            <div class="card-body table-responsive">
                                        <table id="bs4-table" class="table table-bordered table-striped" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>About Slider</th>
                                                    <th>Date Added</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                    <!-- <th>Action</th> -->
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>About Slider</th>
                                                    <th>Date Added</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                    <!-- <th>Action</th> -->
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td><img src="../images/gallery/01.jpg" class="img-thumbnail" alt="member"></td>
                                                    <td></td>
                                                    <td>
                                                      <button type="submit" class="btn btn-success editbtn" name="editfaq" id="editId">Edit</button>
                                                  </td>
                                                  <td>
                                                      <button type="submit" class="btn btn-danger confirmDelete" name="delete">Delete</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
									</div>
								</div>
							</div>
						</div>
						<!-- table ends -->

						<!-- form statrts -->





						<div class="col-sm-12 col-md-12 col-lg-6 col-xs-12 col-xl-6">
							<div class="row">
							<div class="col-md-12">
									<div class="card  border-info lobicard-custom-control lobi-light  mb-4">
										<div class="card-header bg-info ">
											<div class="card-title text-white">
												Manage About Details
											</div>
										</div>
								<div class="card-body card-responsive">
									<form id="signupForm1" method="post" class=" right-text-label-form feedback-icon-form" action="#" novalidate="novalidate">
										<div class="form-group row">
											<label class="col-sm-4 control-label" for="">Title</label>
											<div class="col-sm-5">
												<input type="text" class="form-control" id="" name="" placeholder="About Title">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 control-label" for="">Subtitle</label>
											<div class="col-sm-5">
												<input type="text" class="form-control" id="" name="sectitle" placeholder="About Subtitle">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-8 ml-auto">
												<div class="checkbox">
													<label>
														<input type="checkbox" id="agree" name="agree" value="agree"> Enable Subtitle </label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 control-label" for="">Short Content</label>
											<div class="col-sm-5">
												 <textarea class="form-control" id="" name="" placeholder="Provide Short Content for home page"></textarea>
											</div>
										</div>
								<div class="form-group row">
											<label class="col-sm-4 control-label" for="">Full Content</label>
											<div class="col-sm-5">
												 <textarea class="form-control" id="editor" name="" placeholder="Provide full Content for about page"></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 control-label" for="">Button Text</label>
											<div class="col-sm-5">
												<input type="text" class="form-control" id="" name="" placeholder="Read more button text">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 control-label" for="">Button Link</label>
											<div class="col-sm-5">
												<input type="text" class="form-control" id="" name="" placeholder="eg: https://cleveland.com/about">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 control-label" for="">About Slider Image</label>
											<div class="col-sm-5">
												 <input type="file" multiple class="form-control" id="" name="" placeholder="Choose Slider image" />
											</div>
										</div>

									<br>
										<div class="form-group row">
											<label class="col-sm-4 control-label" for="">Vision Title</label>
											<div class="col-sm-5">
												<input type="text" class="form-control" id="" name="sectitle" placeholder="Vision Title">
											</div>
										</div>
											<div class="form-group row">
											<label class="col-sm-4 control-label" for="">Vision Content</label>
											<div class="col-sm-5">
												 <textarea class="form-control" id="" name="" placeholder=" Vision Content"></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 control-label" for="">Mision Title</label>
											<div class="col-sm-5">
												<input type="text" class="form-control" id="" name="sectitle" placeholder="Mision Title">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 control-label" for="">Mission Content</label>
											<div class="col-sm-5">
												 <textarea class="form-control" id="" name="" placeholder=" Mission Content"></textarea>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-8 ml-auto">
												<button type="submit" class="btn btn-info btn-block btn-lg" name="submit" value="submit">
													Submit
												</button>
											</div>
										</div>
									</form>
								</div>
									</div>
								</div>
								</div>
								</div>
								</div>
							</div>
							</main>
			<!--main contents end-->


<!-- include footer starts-->
<?php require_once(INCLUDES_PATH.'/admin/footer.inc.php');?>
<!-- include footer stops