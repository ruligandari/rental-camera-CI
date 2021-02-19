<?php require_once("header.php");?>
<?php require_once("nav.php");?>

 <div class="content">
            <div class="container-fluid">
                
				<div class="row">
				<div class="col-md-12">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Pelanggan</h4>
                                <p class="category">
								Laporan Pelanggan
								
								</p>
								<div class="navbar-right" >
								<a href="<?php echo base_url(); ?>admin/add_pelanggan" style="margin-right: 15px;font-size: 12pt;"><i class="pe-7s-plus"></i>Tambah List</a>
								</div>
                            </div>
							
                            <div class="content">
                                <div class="table-full-width">
                                    <table class="table">
                                    <thead>
                                        <th>No</th>
                                    	<th>Nama pelanggan</th>
                                    	<th>Keperluan</th>
                                    	<th>Jumlah</th>
                                    	<th>Date</th>
										<th>Aksi</th>
                                    </thead>
                                    <tbody>
                                        <?php
										$no=1;
										foreach($plg as $d){
										?>
										<tr>
                                        	<td><?php echo $no++;?></td>
                                        	<td><?php echo $d->nm_plg;?></td>
                                        	<td><?php echo $d->kp_plg;?></td>
                                        	<td><?php echo $d->jm_plg;?></td>
                                        	<td><?php echo date("d M Y",strtotime($d->date_plg));?> </td>
											<td><a href="<?php echo base_url(); ?>admin/edit_plg/<?php echo $d->id_plg;?>">Edit</a> 
											<a href="<?php echo base_url(); ?>admin/hps_plg/<?php echo $d->id_plg;?>" 
											onclick="return confirm('Yakin Hapus?')">Delete</a></td>
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

<?php require_once("footer.php");?>