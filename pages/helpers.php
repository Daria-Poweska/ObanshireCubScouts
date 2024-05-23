<?php
include '../account/config/config.php';
include '../partials/header.php';
include '../partials/navigation.php';
?>

<main class="aboutmain">
    <div class="top d-flex align-items-center" style="background-image: url('assets/Images/login.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center">
            <h2>Becoming a Helper</h2>
        </div>
        <div class="bottom-bar d-flex align-items-center justify-content-center">
            <h3>Learn About Volunteering as a Helper with Obanshire Cub Scouts</h3>
        </div>
    </div>
    <div class="container">
        <!-- Helper Information Section -->
        
        <div class="container my-4 bg-white p-4 rounded">
        <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Helper Involvement
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        Helpers are invited to provide informal assistance during cub scout meetings and events. They can aid with preparations, accompany the cubs on outings, or support leaders in running various activities. However, helpers cannot be left unsupervised with a group of cubs without a trained leader present.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Requirements and Responsibilities
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        Helpers are expected to adhere to Obanshire Cub Scouts' code of conduct, which emphasizes the safety and well-being of the cubs. All helpers must familiarize themselves with basic safety procedures and protocols for reporting any concerns. Additionally, helpers should exhibit patience, energy, and a positive attitude.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Frequency of Participation
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Helpers can participate in meetings and events a maximum of three times within a thirty-day period. If they wish to be involved more frequently, they should consider officially joining the leadership team as volunteers.
      </div>
    </div>
  </div>
</div>

            <h3 class="mb-3">Becoming a Helper with Obanshire Cub Scouts</h3>
            <p>Obanshire Cub Scouts values the support of parents and caregivers who can volunteer as helpers. Helpers play a vital role in ensuring a safe and enriching environment for the cubs.</p>

            <h4 class="mt-4">Benefits</h4>
            <p>While helpers are not official volunteers, their contributions are greatly appreciated. It gives them a chance to directly experience scouting activities, which may encourage them to join the leadership team in the future. Furthermore, by supporting the cubs, helpers get to witness firsthand how the children develop valuable life skills.</p>

            <h4 class="mt-4">Get Involved</h4>
            <p>Obanshire Cub Scouts gratefully welcomes any assistance from parents and caregivers. If you are interested in becoming a helper, please contact our volunteer coordinator for more information. Your involvement can make a tremendous impact on the growth of our young scouts.</p>
        </div>
    </div>
</main>

<?php
include '../partials/footer.php';
unset($_SESSION["error_message"]);
?>