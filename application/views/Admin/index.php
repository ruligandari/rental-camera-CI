<?php require_once("header.php"); ?>
<?php require_once("nav.php"); ?>

<div class="content">
	<div class="container-fluid">

		<div class="row">
			<div class="col-md-12">
				<div class="card ">
					<div class="header">
						<h4 class="title">Barang</h4>
						<p class="category">
							Barang


						</p>
						<div class="navbar-right">
							<a href="<?php echo base_url(); ?>admin/add_barang" style="margin-right: 15px;font-size: 12pt;"><i class="pe-7s-plus"></i>Tambah List</a>
						</div>
					</div>

					<div class="content">
						<div class="table-full-width">
							<table class="table">
								<thead>
									<th>No</th>
									<th>Nama Barang</th>
									<th>Stok</th>
									<th>Tersewa</th>
									<th>Date</th>
									<th>Aksi</th>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($barang as $d) {
									?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $d->nm_barang; ?></td>
											<td><?php echo $d->stok_barang; ?></td>
											<td><?php echo $d->disewa; ?></td>
											<td><?php echo date("d M Y", strtotime($d->date)); ?></td>
											<td><a href="<?php echo base_url(); ?>admin/edit_brg/<?php echo $d->id_barang; ?>">
													Edit</a>
												<a href="<?php echo base_url(); ?>admin/hps_brg/<?php echo $d->id_barang; ?>" onclick="return confirm('Yakin Hapus?')">Delete</a></td>

										</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>

						<div class="footer">

						</div>
					</div>
				</div>
			</div>
		</div>



	</div>
</div>




</div>
</div>

<?php require_once("footer.php"); ?>