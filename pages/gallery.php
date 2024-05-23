<?php
include '../account/config/config.php';
include '../partials/header.php';
include '../partials/navigation.php';
?>

<main class="aboutmain">
  <div class="top d-flex align-items-center" style="background-image: url('assets/Images/Gallery/img9.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center">
      <h2>Gallery</h2>
    </div>
    <div class="bottom-bar d-flex align-items-center justify-content-center">
      <h3>Look at our photo albums showing all the great activities, events and camps that Obanshire Cub Scouts have enjoyed</h3>
    </div>
  </div>

  <!-- ======= gallery Section ======= -->
  <section id="gallery" class="gallery">
    <div class="container">
      <ul class="filter-list">
        <li class="filter-item active" data-filter="*">All</li>
        <li class="filter-item" data-filter=".filter-mountains">Mountains</li>
        <li class="filter-item" data-filter=".filter-camping">Camping</li>
        <li class="filter-item" data-filter=".filter-activities">Activities</li>
        <li class="filter-item" data-filter=".filter-hiking">Hiking</li>
      </ul>

      <div class="row gy-4 gallery-container">
        <?php
        $query = "SELECT * FROM pictures WHERE is_approved = 1";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $imagePath = "assets/Images/" . $row['img_path'];
            $categoryClass = "filter-" . strtolower($row['category']);
        ?>
            <div class="col-lg-4 col-md-6 gallery-item <?= $categoryClass ?>">
              <img src="<?= $imagePath ?>" class="img-fluid" alt="">
              <div class="gallery-info">
                <h4><?= $row['title'] ?></h4>
                <p><?= $row['img_description'] ?></p>
                <a href="<?= $imagePath ?>" title="<?= $row['title'] ?>"></a>
              </div>
            </div>
        <?php
          }
        }
        ?>

        <div class="col-lg-4 col-md-6 gallery-item filter-camping">
          <img src="assets/Images/Gallery/img1.jpg" class="img-fluid" alt="">
          <div class="gallery-info">
            <h4>Camping in the Highlands</h4>
            <p>Exploring the great outdoors with Obanshire Cub Scouts</p>
            <a href="assets/Images/Gallery/img1.jpg" title="Camping in the Highlands"></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 gallery-item filter-camping">
          <img src="assets/Images/Gallery/img2.jpg" class="img-fluid" alt="">
          <div class="gallery-info">
            <h4>Camp Cookout</h4>
            <p>Learning essential camping skills with Obanshire Cub Scouts</p>
            <a href="assets/Images/Gallery/img2.jpg" title="Camp Cookout"></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 gallery-item filter-activities">
          <img src="assets/Images/Gallery/img3.jpg" class="img-fluid" alt="">
          <div class="gallery-info">
            <h4>Scouting Games</h4>
            <p>Having fun and building teamwork with Obanshire Cub Scouts</p>
            <a href="assets/Images/Gallery/img3.jpg" title="Scouting Games"></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 gallery-item filter-hiking">
          <img src="assets/Images/Gallery/img4.jpg" class="img-fluid" alt="">
          <div class="gallery-info">
            <h4>Hiking Adventures</h4>
            <p>Exploring the great outdoors with Obanshire Cub Scouts</p> 
            <a href="assets/Images/Gallery/img4.jpg" title="Hiking Adventures"></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 gallery-item filter-hiking">
          <img src="assets/Images/Gallery/img5.jpg" class="img-fluid" alt="">
          <div class="gallery-info">
            <h4>Nature Trail</h4>
            <p>Discovering the wonders of nature with Obanshire Cub Scouts</p>
            <a href="assets/Images/Gallery/img5.jpg" title="Nature Trail"></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 gallery-item filter-hiking">
          <img src="assets/Images/Gallery/img6.jpg" class="img-fluid" alt="">
          <div class="gallery-info">
            <h4>Scenic Hike</h4>
            <p>Exploring the breathtaking landscapes with Obanshire Cub Scouts</p>
            <a href="assets/Images/Gallery/img6.jpg" title="Scenic Hike"></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 gallery-item filter-camping">
          <img src="assets/Images/Gallery/img7.jpg" class="img-fluid" alt="">
          <div class="gallery-info">
            <h4>Camping Fun</h4>
            <p>Making memories and enjoying the great outdoors with Obanshire Cub Scouts</p>
            <a href="assets/Images/Gallery/img7.jpg" title="Camping Fun"></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 gallery-item filter-mountains">
          <img src="assets/Images/Gallery/img8.jpg" class="img-fluid" alt="">
          <div class="gallery-info">
            <h4>Mountain Exploration</h4>
            <p>Conquering new heights with Obanshire Cub Scouts</p>
            <a href="assets/Images/Gallery/img8.jpg" title="Mountain Exploration"></a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php
include '../partials/footer.php'
?>