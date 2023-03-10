<?php
session_start();
include_once '../template/header.php';
include_once '../template/sidebar.php';
include_once '../template/topbar.php';
?>
<div class="right_col" role="main" style="min-height: 598px;">
    <div class="">



        <!-- start form  -->
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
  <!-- ======= Hero Section ======= -->
  <section id="hero" >
    <div class="container  h-100">
      <div class="row justify-content-center align-self-center" data-aos="fade-up">
        <div class="col-lg-6 intro-info order-lg-first order-last" data-aos="zoom-in" data-aos-delay="100">
          <h2> Selamat datang   <br>di halaman     <span>Admin</span></h2>
          <div>
            <a href="../outlet/v_tambah_outlet.php" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>

        <div class="col-lg-6 intro-img order-lg-last order-first" data-aos="zoom-out" data-aos-delay="200">
          <img src="../../assets/img/intro-img.svg" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

        </div>
        <!-- end form  -->
		</div>
    </div>
</div>


<?php
include_once '../template/footer.php';
?>