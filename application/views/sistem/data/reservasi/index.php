<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo base_url();?>sistem/home">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo base_url();?>sistem/reservasi">Semua Pemesanan</a>
					</li>
				</ul>
				
			</div>

<div class="row">
				<div class="col-md-12">
					
					
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-edit"></i>Semua Pemesanan
							</div>


							
						</div>

						<div class="portlet-body">
							
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
							<thead>
							<tr>
								<th>No</th>
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
										
											foreach ($reservasi->result_array() as $tampil) { ?>
										<tr >

											<td><?php echo $no;?></td>
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