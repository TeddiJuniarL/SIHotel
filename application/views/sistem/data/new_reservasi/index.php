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

<div class="row">
				<div class="col-md-12">
					
					<?php 
									
													if($this->session->flashdata('in')){
														echo "<div class='alert alert-success'>
												                   <span>Pemesanan Check IN SUCCESS</span>  
												                </div>";
													}
													else if($this->session->flashdata('out')){

														echo "<div class='alert alert-success'>
												                   <span>Pemesanan Check OUT SUCCESS</span>  
												                </div>";

													}
													else if($this->session->flashdata('berhasil')){

														echo "<div class='alert alert-success'>
												                   <span>Pemesanan Baru SUCCESS</span>  
												                </div>";

													}

													else if($this->session->flashdata('perpanjang')){

														echo "<div class='alert alert-success'>
												                   <span>Perpanjang SUCCESS</span>  
												                </div>";

													}
													
												
							?>
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-edit"></i>Pemesanan
							</div>


							
						</div>

						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="row">

									<div class="col-md-6">
										<div class="btn-group">
											
											<a class="btn green" href="<?php echo base_url();?>sistem/new_reservasi_tambah">
											Add <i class="fa fa-plus"></i>
											</a>
											
										</div>
										
									</div>
									
								</div>
							</div>
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
							<thead>
							<tr>
								<th>No</th>
								<th>Aksi</th>
								<th>Nama</th>
								<th>Telp</th>
								<th>Alamat</th>
								<th>Tanggal Masuk</th>
								<th>Tanggal Keluar</th>
								<th>Kamar</th>
								
								
							</tr>
							</thead>
							<tbody>
											<?php
										$no=1;
										
											foreach ($new_reservasi->result_array() as $tampil) { ?>
										<tr >

											<td><?php echo $no;?></td>
											<td>
												<?php
												if ($tampil['status_reservasi']==0) { ?>

												<a  class="btn green" href="<?php echo base_url();?>sistem/new_reservasi_in/<?php echo $tampil['id_reservasi'];?>/1">Proses Check IN</a> 
												<?php
												}
												else if ($tampil['status_reservasi']=="1") { ?>

												<a  class="btn red" href="<?php echo base_url();?>sistem/new_reservasi_out/<?php echo $tampil['id_reservasi'];?>/2" >Proses Check Out</a>
												<a  class="btn blue" href="<?php echo base_url();?>sistem/new_reservasi_perpanjang/<?php echo $tampil['id_reservasi'];?>" >Perpanjang</a>
												<?php
												}
												else { ?>
													<span class="label label-sm label-success">Sudah Keluar</span>
												<?php
												}
												?>
											<td><?php echo $tampil['nama_reservasi'];?></td>
											<td><?php echo $tampil['telp_reservasi'];?></td>
											<td><?php echo $tampil['alamat_reservasi'];?></td>
											<td><?php echo tgl_indo($tampil['tgl_reservasi_masuk']);?></td>
											<td><?php echo tgl_indo($tampil['tgl_reservasi_keluar']);?></td>
											<td><?php echo $tampil['nomer_kamar'];?></td>
											
											
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