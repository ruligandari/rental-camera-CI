<?php require_once("header.php"); ?>
<?php require_once("nav.php"); ?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="header">
                        <h4 class="title">Add Barang</h4>
                    </div>

                    <div class="content">

                        <div class="row">

                            <div class="col-md-8">
                                <form action="<?php echo base_url(); ?>admin/insbrg" enctype="multipart/form-data" method="post">
                                    <div class="form-group">
                                        <label>Nama Barang</label>
                                        <input type="text" name="nm_barang" class="form-control" placeholder="" required />
                                    </div>

                                    <div class="form-group">
                                        <label>Stok</label>
                                        <input type="number" name="stok_barang" class="form-control" placeholder="" required />
                                    </div>

                                    <div class="form-group">
                                        <label>Tersewa</label>
                                        <input type="number" name="disewa" class="form-control" placeholder="" required />
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal </label>
                                        <input type="date" name="date" class="form-control" placeholder="" required />
                                    </div>


                                    <div class="form-group">
                                        <a href="<?php echo base_url(); ?>" class="btn btn-default btn-fill pull-left">Kembali</a>
                                        <button type="submit" class="btn btn-info btn-fill pull-right">Simpan</button>
                                    </div>



                                </form>
                            </div>


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





<?php require_once("footer.php"); ?>