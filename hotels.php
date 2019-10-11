<?php require 'header.php' ?>

<section id="hero">
  <div class="hero-container">
    <h1>Hotels</h1>
    <h2>Affordable Places to Relax You</h2>
    <a href="#about" class="btn-get-started">Explore Now</a>
  </div>
</section>

<main  id="main">

  <section id="about">

    <div class="container">

      <div class="row py-3 justify-content-md-center">
          <h2><strong>Hotels</strong></h2>
      </div>

      <div class="row py-3">
        <div class="col-md-4">
          <div class="card" style="width: 100%;">
            <img class="card-img-top" src="" alt="Hotel image ">
            <div class="card-body">
              <center><h5 class="card-title">Hotel Name</h5></center>
              <p class="card-text">Address</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card" style="width: 100%;">
            <img class="card-img-top" src="" alt="Hotel image ">
            <div class="card-body">
              <center><h5 class="card-title">Hotel Name</h5></center>
              <p class="card-text">Address</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card" style="width: 100%;">
            <img class="card-img-top" src="" alt="Hotel image ">
            <div class="card-body">
              <center><h5 class="card-title">Hotel Name</h5></center>
              <p class="card-text">Address</p>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section>

</main>

<script type="text/javascript">
  document.getElementById('nav-hotels').classList.add("menu-active");
</script>

<?php require 'footer.php'; ?>
