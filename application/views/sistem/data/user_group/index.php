<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo base_url();?>sistem/home">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo base_url();?>sistem/user_group">USER GROUP</a>
					</li>
				</ul>
				
			</div>

<div class="row">
				<div class="col-md-12">
					
					<?php 
									
													if ($this->session->flashdata('hapus')){
									echo "<div class='alert alert-danger'>
												                   <span>USER GROUP Delete</span>  
												                </div>";
													}
													else if($this->session->flashdata('berhasil')){
														echo "<div class='alert alert-success'>
												                   <span>USER GROUP Save</span>  
												                </div>";
													}
													else if($this->session->flashdata('update')){

														echo "<div class='alert alert-success'>
												                   <span>USER GROUP Update</span>  
												                </div>";

													}
													else if($this->session->flashdata('ada')){

														echo "<div class='alert alert-danger'>
												                   <span>USER GROUP Exist</span>  
												                </div>";

													}
												
							?>
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-edit"></i>USER GROUP
							</div>


							
						</div>

						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="row">

									<div class="col-md-6">
										<div class="btn-group">
											
											<a class="btn green" href="<?php echo base_url();?>sistem/user_group_tambah">
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
								<th>USER GROUP</th>
								
								
							</tr>
							</thead>
							<tbody>
											<?php
										$no=1;
										
											foreach ($user_group->result_array() as $tampil) { ?>
										<tr >

											<td><?php echo $no;?></td>
											<td><a  href="<?php echo base_url();?>sistem/user_group_edit/<?php echo $tampil['id_user_group'];?>"><i class="fa fa-edit"></i></a> &nbsp;
											<a  href="<?php echo base_url();?>sistem/user_group_delete/<?php echo $tampil['id_user_group'];?>" onclick="return confirm('Yakin Ingin Menghapus <?php echo $tampil['nama_user_group'];?>?')"> <i class="fa fa-times"></i></a>
											<td><?php echo $tampil['nama_user_group'];?></td>
											
											
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