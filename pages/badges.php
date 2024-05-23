<?php
include '../account/config/config.php';
include '../partials/header.php';
include '../partials/navigation.php';


?>
<main class="aboutmain">
  <div class="top d-flex align-items-center" style="background-image: url('assets/Images/Gallery/badges.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center">

      <h2>Badges</h2>

    </div>
    <div class="bottom-bar d-flex align-items-center justify-content-center">
      <h3>Discover our wide range of badges! From outdoor skills to community service, there's a badge for every interest.</h3>
    </div>
  </div>


  <!-- Card Wrapper -->
  <div class="card-wrapper">
    <div class="container">
      <!-- Search Field -->
      <div class="row mb-4">
        <div class="col">
          <div class="input-group mb-3">
            <input type="text" id="badgeSearch" class="form-control" placeholder="Search for badges...">
          </div>
        </div>
      </div>

      <div class="row">
        <!-- Card 1 -->
        <div class="col-lg-4 col-md-6 badges">
          <div class="card">
            <img src="assets/Images/badges/artist.png" class="card-img-top" alt="Waterfall" />
            <div class="card-body">
              <h5 class="card-title">Badge 1</h5>
              <p class="card-text">Description of Badge 1.</p>

            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-lg-4 col-md-6 badges">
          <div class="card">
            <img src="assets/Images/badges/astronautics.png" class="card-img-top" alt="Sunset Over the Sea" />
            <div class="card-body">
              <h5 class="card-title">Badge 2</h5>
              <p class="card-text">Description of Badge 2.</p>

            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-lg-4 col-md-6 badges">
          <div class="card">
            <img src="assets/Images/badges/astronomics.png" class="card-img-top" alt="Sunset over the Sea" />
            <div class="card-body">
              <h5 class="card-title">Artist Activity Badge</h5>
              <p class="card-text">Description of Badge 3.</p>

            </div>
          </div>
        </div>
        <!-- Card 1 -->
        <div class="col-lg-4 col-md-6 badges">
          <div class="card">
            <img src="assets/Images/badges/communicator.png" class="card-img-top" alt="Waterfall" />
            <div class="card-body">
              <h5 class="card-title">Badge 1</h5>
              <p class="card-text">Description of Badge 1.</p>

            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-lg-4 col-md-6 badges">
          <div class="card">
            <img src="assets/Images/badges/craft.png" class="card-img-top" alt="Sunset Over the Sea" />
            <div class="card-body">
              <h5 class="card-title">Badge 2</h5>
              <p class="card-text">Description of Badge 2.</p>

            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-lg-4 col-md-6 badges">
          <div class="card">
            <img src="assets/Images/badges/diy.png" class="card-img-top" alt="Sunset over the Sea" />
            <div class="card-body">
              <h5 class="card-title">Badge 3</h5>
              <p class="card-text">Description of Badge 3.</p>
            </div>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="col-lg-4 col-md-6 badges">
          <div class="card">
            <img src="assets/Images/badges/diy.png" class="card-img-top" alt="Sunset over the Sea" />
            <div class="card-body">
              <h5 class="card-title">Badge 3</h5>
              <p class="card-text">Description of Badge 3.</p>
            </div>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="col-lg-4 col-md-6 badges">
          <div class="card">
            <img src="assets/Images/badges/entertainer.png" class="card-img-top" alt="Sunset over the Sea" />
            <div class="card-body">
              <h5 class="card-title">Badge 3</h5>
              <p class="card-text">Description of Badge 3.</p>
            </div>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="col-lg-4 col-md-6 badges">
          <div class="card">
            <img src="assets/Images/badges/environmental.png" class="card-img-top" alt="Sunset over the Sea" />
            <div class="card-body">
              <h5 class="card-title">Badge 3</h5>
              <p class="card-text">Description of Badge 3.</p>
            </div>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="col-lg-4 col-md-6 badges">
          <div class="card">
            <img src="assets/Images/badges/farming.png" class="card-img-top" alt="Sunset over the Sea" />
            <div class="card-body">
              <h5 class="card-title">Badge 3</h5>
              <p class="card-text">Description of Badge 3.</p>
            </div>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="col-lg-4 col-md-6 badges">
          <div class="card">
            <img src="assets/Images/badges/fire.png" class="card-img-top" alt="Sunset over the Sea" />
            <div class="card-body">
              <h5 class="card-title">Badge 3</h5>
              <p class="card-text">Description of Badge 3.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>





  <?php
  include '../partials/footer.php'
  ?>

  <script>
    // Printing badges function

    function printBadge(imageUrl) {
      var printWindow = window.open('', '_blank');
      printWindow.document.write('<html><head><title>Print Badge</title></head><body style="text-align:center;"><img src="' + imageUrl + '" /></body></html>');
      printWindow.document.close();
      printWindow.print();
    }
  </script>