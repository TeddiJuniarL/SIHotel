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
											<i class="fa fa-gift"></i>Add Gambar Kamar
										</div>
										
									</div>

									<?php 
									
													if ($this->session->flashdata('kosong')){
									echo "<div class='alert alert-danger'>
												                   <span>Gambar Kamar Kosong</span>  
												                </div>";
													}
													else if ($this->session->flashdata('gagal')){
													echo "<div class='alert alert-danger'>
																<span>Gambar Kamar upload gagal</span>  
															</div>";
													}
													else if ($this->session->flashdata('hapus')){
													echo "<div class='alert alert-danger'>
																<span>Gambar Kamar Delete</span>  
															</div>";
													}
													else if($this->session->flashdata('berhasil')){
														echo "<div class='alert alert-success'>
												                   <span>Gambar Kamar Save</span>  
												                </div>";
													}
													
												
							?>
									<div class="portlet-body form">
										<?php if(validation_errors()) { ?>
								<div class="alert alert-danger">
								  <button type="button" class="close" data-dismiss="alert">×</button>
									<?php echo validation_errors(); ?>
								</div>
								<?php 
								} 
								?>
										
											<?php echo form_open_multipart('sistem/kamar_gambar_simpan/','class="form-horizontal"'); ?>
											<div class="form-body">
												<h3 class="form-section"></h3>
												<input type="hidden" name="kamar_id" value="<?php echo $id_kamar;?>">

												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Gambar</label>
															<div class="col-md-9">
																<input type="file" name="userfile">
															</div>

														</div>

													</div>

												
													
												</div>

											<span class="label label-important">NOTE!</span>
											<span>
											File hanya dalam format gif,jpg,png,jpeg dengan max size 3 MB, File gambar tidak boleh kosong
											</span>
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



<div class="row">
				<div class="col-md-12">
					
					
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-edit"></i>Gambar Kamar
							</div>


							
						</div>

						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="row">

									
										
											<center>
											<h3>Nomer Kamar : <?php echo $nomer_kamar;?></h3>
											<h3>Harga Kamar : <?php echo rupiah($harga_kamar);?></h3>
											<h3>Kelas Kamar : <?php echo $nama_kelas_kamar;?></h3>
											</center>
											
										
										
									
									
								</div>
							</div>
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
							<thead>
							<tr>
								<th>No</th>
								<th>Aksi</th>
								<th>Gambar Kamar</th>
								
								
								
							</tr>
							</thead>
							<tbody>
											<?php
										$no=1;
										
											foreach ($kamar_gambar->result_array() as $tampil) { ?>
										<tr >

											<td><?php echo $no;?></td>
											<td>
											<a  href="<?php echo base_url();?>sistem/kamar_gambar_delete/<?php echo $tampil['id_kamar_gambar'];?>/<?php echo $tampil['kamar_id'];?>" onclick="return confirm('Yakin Ingin Menghapus?')"> <i class="fa fa-times"></i></a>
											<td><img src="<?php echo base_url();?>images/kamar_gambar/<?php echo $tampil['nama_kamar_gambar'];?>" alt="" style="width:200px; height:200px;"></td>
											
											
											
											
										</tr>
										<?php
										$no++;
										}
										?>
										
										
										
							</tbody>
							</table>
						</div>
					</div>
					
				</div>
			</div>