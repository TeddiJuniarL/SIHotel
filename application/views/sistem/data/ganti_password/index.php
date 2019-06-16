<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo base_url();?>sistem/home">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo base_url();?>sistem/ganti_password">Ganti Password</a>
					</li>
				</ul>
				
			</div>


<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>Ganti Password
										</div>
										
									</div>
									<div class="portlet-body form">
										<?php if(validation_errors()) { ?>
								<div class="alert alert-danger">
								  <button type="button" class="close" data-dismiss="alert">×</button>
									<?php echo validation_errors(); ?>
								</div>
								<?php 
								} 
								?>

								<?php 
									
													if ($this->session->flashdata('salah')){
									echo "<div class='alert alert-danger'>
												                   <span>Old Password Wrong</span>  
												                </div>";
													}
													else if($this->session->flashdata('tidaksama')){

														echo "<div class='alert alert-danger'>
												                   <span>New Password and Your Confirm Password Wrong</span>  
												                </div>";

													}

													else if($this->session->flashdata('sukses')){

														echo "<div class='alert alert-success'>
												                   <span>New Password Saved</span>  
												                </div>";

													}
												
							?>
										
											<?php echo form_open('sistem/ganti_password_update/','class="form-horizontal"'); ?>
											<div class="form-body">
												<h3 class="form-section"></h3>
												<div class="row">
													<div class="col-md-9">
														<div class="form-group">
															<label class="control-label col-md-3">Password Lama</label>
															<div class="col-md-6">
																<input type="password" class="form-control" placeholder="" name="password_lama">
																
															</div>
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-md-9">
														<div class="form-group">
															<label class="control-label col-md-3">Password Baru</label>
															<div class="col-md-6">
																<input type="password" class="form-control" placeholder="" name="password_baru">
																
															</div>
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-md-9">
														<div class="form-group">
															<label class="control-label col-md-3">Confirm Password</label>
															<div class="col-md-6">
																<input type="password" class="form-control" placeholder="" name="password_konfirmasi">
																
															</div>
														</div>
													</div>
												</div>

												
											
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-6">
														<div class="row">
															<div class="col-md-offset-3 col-md-9">
																<button type="submit" class="btn green">Update</button>
																</div>
														</div>
													</div>
													<div class="col-md-6">
													</div>
												</div>
											</div>
										<?php echo form_close();?>  
										
									</div>
								</div>