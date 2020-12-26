include headers starts-->
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
									<h1>Manage Core Value Items</h1>
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
											Corevalue Items
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
												Core Value Items Table
											</div>
										</div>
							          <div class="card-body table-responsive">
                                        <table id="bs4-table" class="table table-bordered table-striped" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Item Title</th>
                                                    <th>Date Added</th>
                                                    <th>Action</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                   <th>S/N</th>
                                                    <th>Item Title</th>
                                                    <th>Date Added</th>
                                                    <th>Action</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                       <button type="button" class="btn btn-info" data-toggle="modal" data-target="#viewCorevalue" data-whatever="@mdo">View</button>
                                                  </td>
                                           			<td>
                                                      <button type="submit" class="btn btn-success" name="" id="">Edit</button>
                                                  </td>
                                                  <td>
                                                      <button type="submit" class="btn btn-danger" name="delete">Delete</button>
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
												Add Core Value Items
											</div>
										</div>
								<div class="card-body">
									<form id="signupForm1" method="post" class=" right-text-label-form feedback-icon-form" action="#" novalidate="novalidate">
										<div class="form-group row">
											<label class="col-sm-4 control-label" for="">Item Title</label>
											<div class="col-sm-5">
												<input type="text" class="form-control" id="" name="" placeholder="Item Title">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 control-label" for="">Item Description</label>
											<div class="col-sm-5">
												 <textarea class="form-control" id="editor" name="" placeholder="Item Description"></textarea>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-8 ml-auto">
												<button type="submit" class="btn btn-info" name="submit" value="submit">
													Submit
												</button>
												<button type="submit" class="btn btn-secondary" name="" value="submit">
													Clear
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

<!-- modal starts -->
                        <div class="col-xl-4  col-lg-6">
                            <div class="card card-shadow mb-4">
                                <div class="card-body">

                                					<div class="modal fade" id="viewCorevalue" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Core Value Item View</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<form>
														<div class="form-group">
															<label for="recipient-name" class="col-form-label">Item Title:</label>
															<input type="text" class="form-control" id="" readonly>
														</div>
														<div class="form-group">
															<label for="message-text" class="col-form-label">Item Description:</label>
															<textarea class="form-control" id="" readonly placeholder="Item Description"></textarea>
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