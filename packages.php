<?php require 'header.php' ?>

<section id="hero">
  <div class="hero-container">
    <h1>Explore the Islands</h1>
    <h2>Affordable Packages for an Exciting Visit</h2>
    <a href="#about" class="btn-get-started">Explore Now</a>
  </div>
</section>

<style media="screen">
table {
  width: 100%;
}
.pack-list, td {
  border-bottom: 2px solid #666666;
  padding: 10px 5px;
}
.show-price {
  text-align: center;
  padding-top: 1em;
}
.pack-btn {
  border: 2px solid #666666;
  border-radius: 5px;
  background-color: #666666;
  color: #ffffff;
  padding: 5px 10px;
}
.pack-btn:hover {
  border: 2px solid #666666;
  border-radius: 5px;
  background-color: rgba(0,0,0,0);
  color: #666666;
  padding: 5px 10px;
}
</style>

<main  id="main">

  <section id="about">

    <div class="container">

      <div class="row py-3 justify-content-md-center">
          <h2><strong>Packages We Offer</strong></h2>
      </div>

      <div class="row py-3">
        <div class="col-md-4">
          <div class="card" style="width: 100%;">
            <img class="card-img-top" src="" alt="Card image ">
            <div class="card-body">
              <center><h5 class="card-title">Package Name</h5></center>
              <p class="card-text" style="text-align: justify">Description</p>
              <table>
                <tr class="pack-list">
                  <td>Feature 1</td>
                </tr>
                <tr class="pack-list">
                  <td>Feature 2</td>
                </tr>
                <tr class="pack-list">
                  <td>Feature 3</td>
                </tr>
                <tr class="pack-list">
                  <td>Feature 4</td>
                </tr>
              </table>
              <p class="card-text show-price">&#x20B9; XXXX /person</p>
              <center><button class="pack-btn" type="button" data-toggle="modal" data-target="#packagemodal1">View Details</button></center>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card" style="width: 100%;">
            <img class="card-img-top" src="" alt="Card image ">
            <div class="card-body">
              <center><h5 class="card-title">Package Name</h5></center>
              <p class="card-text" style="text-align: justify">Description</p>
              <table>
                <tr class="pack-list">
                  <td>Feature 1</td>
                </tr>
                <tr class="pack-list">
                  <td>Feature 2</td>
                </tr>
                <tr class="pack-list">
                  <td>Feature 3</td>
                </tr>
                <tr class="pack-list">
                  <td>Feature 4</td>
                </tr>
              </table>
              <p class="card-text show-price">&#x20B9; XXXX /person</p>
              <center><button class="pack-btn" type="button" data-toggle="modal" data-target="#packagemodal2">View Details</button></center>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card" style="width: 100%;">
            <img class="card-img-top" src="" alt="Card image ">
            <div class="card-body">
              <center><h5 class="card-title">Package Name</h5></center>
              <p class="card-text" style="text-align: justify">Description</p>
              <table>
                <tr class="pack-list">
                  <td>Feature 1</td>
                </tr>
                <tr class="pack-list">
                  <td>Feature 2</td>
                </tr>
                <tr class="pack-list">
                  <td>Feature 3</td>
                </tr>
                <tr class="pack-list">
                  <td>Feature 4</td>
                </tr>
              </table>
              <p class="card-text show-price">&#x20B9; XXXX /person</p>
              <center><button class="pack-btn" type="button" data-toggle="modal" data-target="#packagemodal3">View Details</button></center>
            </div>
          </div>
        </div>

    </div>

  </section>


  <div class="modal fade" id="packagemodal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Package Name</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Package Details here
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="packagemodal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Package Name (2)</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Package Details here
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="packagemodal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Package Name(3)</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Package Details here
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

</main>

<script type="text/javascript">
  document.getElementById('nav-packages').classList.add("menu-active");
</script>

<?php require 'footer.php'; ?>
