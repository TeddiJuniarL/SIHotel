<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo base_url();?>sistem/home">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo base_url();?>sistem/new_reservasi">Pemesanan</a>
					</li>
				</ul>
				
			</div>


<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>Add Pemesanan Baru
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
										
											<?php echo form_open_multipart('sistem/new_reservasi_simpan/','class="form-horizontal"'); ?>
											<div class="form-body">
												<h3 class="form-section"></h3>
												<div class="row">
													
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Tanggal Masuk</label>
															<div class="col-md-9">
																 <input class="form-control form-control-inline input-medium date-picker" name="tgl_reservasi_masuk" id="tgl_reservasi_masuk" size="16" type="text" value=""/>
                                                              
															</div>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Tanggal Keluar</label>
															<div class="col-md-9">
																 <input class="form-control form-control-inline input-medium date-picker" name="tgl_reservasi_keluar" id="tgl_reservasi_keluar" size="16" type="text" value=""/>
                                                              
															</div>
														</div>
													</div>
													
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Kelas Kamar - Nomer Kamar</label>
															<div class="col-md-9">
																<select data-placeholder="Select..." name="kamar_id" class="form-control select2me">
																	<option value=""></option>					
																	<?php
																	foreach ($kamar->result_array() as $tampil) { ?>
																	<option value="<?php echo $tampil['id_kamar'];?>"><?php echo $tampil['nama_kelas_kamar'];?> - <?php echo $tampil['nomer_kamar'];?></option>
																	<?php
																	}
																	?>
																</select>
																
															</div>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Nama</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="" name="nama_reservasi">
																
															</div>
														</div>
													</div>
													
												</div>
												<div class="row">
													
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Tlp</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="" name="telp_reservasi">
																
															</div>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Alamat</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="" name="alamat_reservasi">
																
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
																<button type="submit" class="btn green">Save</button>
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