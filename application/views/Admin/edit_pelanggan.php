<?php require_once("header.php");?>
<?php require_once("nav.php");?>

 <div class="content">
	<div class="container-fluid">
		<div class="row">
				<div class="col-md-12">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Add Pelanggan</h4>
                            </div>
							
                            <div class="content">
                                
                                    <div class="row">
										<?php foreach($edit as $d){
										?>
                                        <div class="col-md-8">
											<form action="<?php echo base_url(); ?>admin/upplg" enctype="multipart/form-data" method="post">
                                            <div class="form-group">
                                                <label>Nama Pelanggan</label>
                                                <input type="hidden" name="id_plg" class="form-control" value="<?php echo $d->id_plg;?>" placeholder=""  required/>
                                                <input type="text" name="nm_plg" class="form-control" value="<?php echo $d->nm_plg;?>" placeholder=""  required/>
                                            </div>
											
											<div class="form-group">
                                                <label>Keperluan</label>
                                                <textarea name="kp_plg" class="form-control" placeholder="" require><?php echo $d->kp_plg;?></textarea>
												
                                            </div>
											
											<div class="form-group">
                                                <label>Jumlah</label>
                                                <input type="number" name="jm_plg" class="form-control" value="<?php echo $d->jm_plg;?>" placeholder=""  required/>
                                            </div>
											
											<div class="form-group">
												<label>Tanggal </label>										
												<input type="date" name="date_plg" class="form-control" value="<?php echo $d->date_plg;?>" placeholder=""  required/>
											</div>
											
											
											<div class="form-group">
												<a href="<?php echo base_url(); ?>" class="btn btn-default btn-fill pull-left">Kembali</a>
                                                <button type="submit" class="btn btn-info btn-fill pull-right">Simpan</button>
                                            </div>
											
											
											
											</form>
                                        </div>
										<?php
										}
										?>
										
										<div class="col-md-4">
										</div>
										
										
                                    </div>

                                <div class="footer">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
	</div>
</div>


        


<?php require_once("footer.php");?>