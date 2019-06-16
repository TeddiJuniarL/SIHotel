<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo base_url();?>sistem/home">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo base_url();?>sistem/kamar">Kamar</a>
					</li>
				</ul>
				
			</div>


<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>Edit Kamar
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
										
											<?php echo form_open_multipart('sistem/kamar_update/','class="form-horizontal"'); ?>
											<div class="form-body">
												<h3 class="form-section"></h3>
												<input type="hidden" name="id_kamar" value="<?php echo $id_kamar;?>" >
												<div class="row">
														<div class="col-md-12">
														<div class="form-group">
															<label class="control-label col-md-3">Kelas Kamar</label>
															<div class="col-md-6">
																<select data-placeholder="Select..." name="kelas_kamar_id" class="form-control select2me">
																<option value=""></option>					
																<?php
																foreach ($kelas_kamar->result_array() as $tampil) { 
																if ($kelas_kamar_id==$tampil['id_kelas_kamar']) { ?>
																<option value="<?php echo $tampil['id_kelas_kamar'];?>" selected="selected"><?php echo $tampil['nama_kelas_kamar'];?></option>
																<?php
																}
																else { ?>
																<option value="<?php echo $tampil['id_kelas_kamar'];?>"><?php echo $tampil['nama_kelas_kamar'];?></option>
																<?php
																}
																					
																}
																?>
															</select>
															</div>
														</div>
													</div>
													
												</div>
												<div class="row">
													
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label col-md-3">Nomer Kamar</label>
															<div class="col-md-6">
																<input type="text" class="form-control" value="<?php echo $nomer_kamar;?>" name="nomer_kamar">
																
															</div>
														</div>
													</div>

													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label col-md-3">Harga Kamar</label>
															<div class="col-md-6">
																<input type="text" class="form-control" value="<?php echo $harga_kamar;?>" name="harga_kamar">
																
															</div>
														</div>
													</div>
													
												</div>

												<div class="row">
													

													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label col-md-3">Keterangan</label>
															<div class="col-md-9">
																<textarea name="fasilitas_kamar" id="fasilitas_kamar"  value="<?php echo $fasilitas_kamar;?>" rows="6" class="wysihtml5 form-control" ><?php echo $fasilitas_kamar;?></textarea>
																
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