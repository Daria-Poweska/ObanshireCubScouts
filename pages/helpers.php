<!-- Becoming a helper / Volunteering -->

<?php
include '../account/config/config.php';
include '../partials/header.php';
include '../partials/navigation.php';
?>

<main class="aboutmain">
  <div class="top d-flex align-items-center" style="background-image: url('assets/Images/Gallery/login.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center">
    <h2 class="top-heading">Becoming a Helper</h2>
    </div>
    <div class="bottom-bar d-flex align-items-center justify-content-center">
      <h3>Learn About Volunteering as a Helper with Obanshire Cub Scouts</h3>
    </div>
  </div>
  <div class="container">
    <!-- Helper Information Section -->

    <div class="container my-4 bg-white p-4 rounded">


      <h3 class="mb-3">Becoming a Helper with Obanshire Cub Scouts</h3>
      <p>Obanshire Cub Scouts values the support of parents and caregivers who can volunteer as helpers. Helpers play a vital role in ensuring a safe and enriching environment for the cubs.</p>

      <h4 class="mt-4">Benefits</h4>
      <p>While helpers are not official volunteers, their contributions are greatly appreciated. It gives them a chance to directly experience scouting activities, which may encourage them to join the leadership team in the future. Furthermore, by supporting the cubs, helpers get to witness firsthand how the children develop valuable life skills.</p>
      <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Helper Involvement
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body"> Helpers are invited to provide informal assistance during cub scout meetings and events. They can aid with preparations, accompany the cubs on outings, or support leaders in running various activities. However, helpers cannot be left unsupervised with a group of cubs without a trained leader present.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Requirements and Responsibilities
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body"> Helpers are expected to adhere to Obanshire Cub Scouts' code of conduct, which emphasizes the safety and well-being of the cubs. All helpers must familiarize themselves with basic safety procedures and protocols for reporting any concerns. Additionally, helpers should exhibit patience, energy, and a positive attitude.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Frequency of Participation
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Helpers can participate in meetings and events a maximum of three times within a thirty-day period. If they wish to be involved more frequently, they should consider officially joining the leadership team as volunteers.</div>
            </div>
          </div>
        </div>
      <h4 class="mt-4">Get Involved</h4>
      <p>Obanshire Cub Scouts gratefully welcomes any assistance from parents and caregivers. If you are interested in becoming a helper, please contact our volunteer coordinator for more information. Your involvement can make a tremendous impact on the growth of our young scouts.</p>
      <p>Register you interest now!</p>
      <div class="button-link-wrapper">
                <span class="button-link"><a href="<?= BASE_URL ?>register">Register</a></span>
            </div>
     

      <div class="container my-4 bg-white p-4 rounded">


 
<div class="container section-title">
    <h2>Testimonials</h2>
</div>
<div id="carouselExampleIndicators" class="carousel slide text-center carousel-dark" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="rounded-circle shadow-1-strong mb-4" src="assets/Images/carousel/man.jpg" alt="avatar" style="width: 150px;" />
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <h5 class="mb-3">Alex Smith</h5>
                    <p>Helper</p>
                    <p class="text-muted">
                        <i class="fas fa-quote-left pe-2"></i>
                        The Obanshire Cub Scouts have been a fantastic experience for me. I have learned so much and made wonderful friends. The leaders are incredibly supportive and the activities are always engaging.
                    </p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="rounded-circle shadow-1-strong mb-4" src="assets/Images/carousel/woman.jpg" alt="avatar" style="width: 150px;" />
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <h5 class="mb-3">Adrianna Dvorska</h5>
                    <p>Volunteer</p>
                    <p class="text-muted">
                        <i class="fas fa-quote-left pe-2"></i>
                        Volunteering in the Obanshire Cub Scouts has been an incredibly rewarding experience. Watching the kids develop new skills and gain confidence is what makes it all worthwhile.
                    </p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="rounded-circle shadow-1-strong mb-4" src="assets/Images/carousel/boy.jpg" alt="avatar" style="width: 150px;" />
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <h5 class="mb-3">Radoslaw Kowalczyk</h5>
                    <p>Former Volunteer</p>
                    <p class="text-muted">
                        <i class="fas fa-quote-left pe-2"></i>
                        Being a part of the Obanshire Cub Scouts was one of the best parts of my childhood. The adventures, the friends, and the skills I learned will stay with me forever.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Carousel wrapper -->

       
      </div>
    </div>

<?php
include '../partials/footer.php';
?>