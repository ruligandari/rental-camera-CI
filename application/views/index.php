<?php
session_start();
$this->load->view('/lain/header');
$this->load->view('/lain/nav_nl1');
?>

<div class="jumbotron jumbg">
  <h1 class="teksdw">Selamat datang</h1>
  <p class="teksdw">di web UKM dinus!</p>

</div>

<div class="container">
  <div class="row demo-tiles">

    <div class="col-sm-4">
      <div class="tile">
        <img src="<?php echo base_url(); ?>asset/img/icons/png/school.png" alt="Compas" class="tile-image big-illustration">
        <h3 class="tile-title">Profil UKM Dinus</h3>
        <p>Untuk melihat beberapa profil UKM dinus dapat dilihat disini.<br><br></p>
        <a class="btn btn-primary btn-large btn-block" href="<?php echo base_url(); ?>profil"> Lihat</a>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="tile">
        <img src="<?php echo base_url(); ?>asset/img/icons/png/mouse.png" alt="Compas" class="tile-image big-illustration">
        <h3 class="tile-title">Mandaftar Anggota UKM</h3>
        <p>Untuk Mendaftar Daftar Anggota UKM dapat dilihat disini.<br><br></p>
        <a class="btn btn-primary btn-large btn-block" href="<?php echo base_url(); ?>daftar/anggota-ukm">Lihat</a>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="tile">
        <img src="<?php echo base_url(); ?>asset/img/icons/png/megaphone.png" alt="Compas" class="tile-image big-illustration">
        <h3 class="tile-title">Hasil Daftar Anggota UKM</h3>
        <p>Hasil Daftar Anggota UKM yang di terima dapat dilihat disini. <br><br></p>
        <a class="btn btn-primary btn-large btn-block" href="<?php echo base_url(); ?>hasil">Lihat</a>
      </div>
    </div>




  </div>
</div>
<!-- /.container -->

<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-7">

        <p class="footer-title">
          ukm.dinus.ac.id
        </p>
      </div> <!-- /col-xs-7 -->


    </div>
  </div>
</footer>



<?php
$this->load->view('/lain/footer');
?>