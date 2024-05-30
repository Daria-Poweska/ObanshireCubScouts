<!-- Gallery -->

<?php
include '../account/config/config.php';

include '../partials/header.php';
include '../partials/navigation.php';
?>

<main class="aboutmain">
  <!-- Top section with background image and title -->
  <div class="top d-flex align-items-center" style="background-image: url('assets/Images/Gallery/img9.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center">
      <h2>Gallery</h2>
    </div>
    <div class="bottom-bar d-flex align-items-center justify-content-center">
      <h3>Look at our photo albums showing all the great activities, events, and camps that Obanshire Cub Scouts have enjoyed</h3>
    </div>
  </div>

  <!-- ======= Gallery Section ======= -->
  <section id="gallery" class="gallery">
    <div class="container">
      <!-- Filter list for gallery categories -->
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
            $imagePath = $row['img_path'];
            $categoryClass = "filter-" . strtolower($row['category']);
        ?>
            <!-- Dynamic gallery items from database -->
            <div class="col-lg-4 col-md-6 gallery-item <?= $categoryClass ?>">
              <img src="<?= $imagePath ?>" class="img-fluid" alt="gallery image">
              <div class="gallery-info">
                <h4><?= $row['title'] ?></h4>
                <p><?= $row['img_description'] ?></p>
                <a href="<?= $imagePath ?>" title="<?= $row['title'] ?>"></a>
                <?php if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'leader') { ?>
                  <button onclick="if(confirm('Are you sure you want to delete this image?')) { window.location.href='<?= BASE_URL ?>account/config/gallery_delete.php?id=<?= $row['picture_id'] ?>'; }" type="button" class="btn btn-danger mt-2">Delete</button>
                <?php } ?>
              </div>
            </div>
        <?php
          }
        }
        ?>

        </div>
      </div>
    </div>
  </section>
</main>

<?php
include '../partials/footer.php';
?>