
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
									<h1>Manage Home Slider</h1>
								</div>
							</div>
							<div class="col-md-6 justify-content-md-end d-md-flex">
								<div class="breadcrumb_nav">
									<ol class="breadcrumb">
										<li>
											<i class="fa fa-home"></i>
											<a class="parent-item" href="dashboard.php">Home</a>
											<i class="fa fa-angle-right"></i>
										</li>
										<li class="active">
											Manage Home Slider
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
								<div class="col-md-12">
									<div class="card card-shadow mb-4">
										<div class="card-header bg-info ">
											<div class="card-title text-white">
												Home Slider Table
											</div>
										</div>
							          <div class="card-body table-responsive">
                                        <table id="bs4-table" class="table table-bordered table-striped" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                   <th>S/N</th>
                                                    <th>Primary Title</th>
                                                     <th>Secondary Title</th>
                                                    <th>Slider Image</th>
                                                    <th>Date Added</th>
                                                     <th >Edit</th>
                                                    <th >Delete</th>
                                                     <!-- <th colspan="2">Action</th> -->
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Primary Title</th>
                                                     <th>Secondary Title</th>
                                                    <th>Slider Image</th>
                                                    <th>Date Added</th>
                                                    <th >Action</th>
                                                    <th ></th>
                                                    <th ></th>
                                                     <!-- <th colspan="2">Action</th> -->
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><img src="../images/gallery/01.jpg" class="img-thumbnail" alt="member">
													</td>
                                                    <td>
                                                    	 <button type="button" class="btn btn-info" data-toggle="modal" data-target="#viewSlider" data-whatever="@mdo">View</button>
                                                    </td>
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
						</main>
			<!--main contents end-->

<!-- modal starts -->
                        <div class="col-xl-4  col-lg-6">
                            <div class="card card-shadow mb-4">
                                <div class="card-body">
   					<div class="modal fade" id="viewSlider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">View Home Slider</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<form>
														<div class="form-group">
															<label for="recipient-name" class="col-form-label">Primary Title:</label>
															<input type="text" class="form-control" id="" name="" placeholder="Primary Title" readonly>
														</div>
														<div class="form-group">
															<label for="recipient-name" class="col-form-label">Secondary Title:</label>
															<input type="text" class="form-control" id="" name="" placeholder="Secondary Title" readonly>
														</div>
														<div class="form-group">
															<div class="checkbox">
													<label>
														<input type="checkbox" id="agree" name="agree" value="agree" readonly> Enable secondary title </label>
												</div>
														</div>
														<div class="form-group">
															<label for="recipient-name" class="col-form-label">Button One Text:</label>
															<input type="text" class="form-control" id="" name="" placeholder="Button one text" readonly>
														</div>
														<div class="form-group">
															<label for="recipient-name" class="col-form-label">Button One Link:</label>
															<input type="text" class="form-control" id="" name="" placeholder="Button one link" readonly>
														</div>
														<div class="form-group">
															<div class="checkbox">
													<label>
														<input type="checkbox" id="agree" name="agree" value="agree" readonly> Enable button one </label>
												</div>
														</div>

														<div class="form-group">
															<label for="recipient-name" class="col-form-label">Button Two Text:</label>
															<input type="text" class="form-control" id="" name="" placeholder="Button two text" readonly>
														</div>
														<div class="form-group">
															<label for="recipient-name" class="col-form-label">Button Two Link:</label>
															<input type="text" class="form-control" id="" name="" placeholder="Button two link" readonly>
														</div>
														<div class="form-group">
															<div class="checkbox">
													<label>
														<input type="checkbox" id="agree" name="agree" value="agree" readonly> Enable button two </label>
												</div>
														</div>
													<div class="form-group">
															<label for="recipient-name" class="col-form-label">Home Slider Image:</label>
															<input type="file" multiple class="form-control" id="" name="" placeholder="Choose Home Slider image" />
														</div>
													</form>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
                                    </div>
                                </div>
                            </div>
        <!-- modal ends -->


<!-- include footer starts-->
<?php 
include('includes/footer.inc.php');
?>
<!-- include footer stops