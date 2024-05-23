<?php 
include '../../account/config/config.php';
session_start();
  include '../../partials/leaderheader.php';
  include '../../partials/navbarforlogged.php';
?>


<main class="aboutmain">
 
  <div class="container">
    <!-- Training Section -->
    <section id="training" class="training section">
    <h1 class="text-center ">Upcoming Trainings</h1>
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 cards">
            <div class="cardt">
            <h4>Commissioners’ Safeguarding Training</h4>
            <p>
              This three-hour online session provides safeguarding training for Commissioners, offering support and guidance in your role. To attend, you must have completed the mandatory safeguarding training and hold a valid Commissioner role on Compass (District and County Commissioner and deputy roles are valid).</p>
              <div class="training-info">
            <p>Date: June 5, 2024</p>
            <p>Time: 2:00 PM - 5:00 PM</p>
            <a href="#" class="btn-join-us-square">Book Your Space</a>
          </div>
          </div>
          </div>

          <div class="col-lg-4 col-md-6 cards">
          <div class="cardt">
            <h4>First Aid Training for Leaders</h4>
            <p>This training provides leaders with essential first aid skills, equipping them to respond effectively to medical emergencies during scouting activities.</p>
            <div class="training-info">
            <p>Date: May 10, 2024</p>
            <p>Time: 10:00 AM - 1:00 PM</p>
            <a href="#" class="btn-join-us-square">Book Your Space</a>
          </div>
          </div>
          </div>

          <div class="col-lg-4 col-md-6 cards">
          <div class="cardt">
            <h4> Youth Mental Health Awareness Training</h4>
            <p>Gain a better understanding of youth mental health issues and learn how to support and promote positive mental well-being among scouts.</p>
            <div class="training-info">
            <p>Date: May 15, 2024</p>
            <p>Time: 9:00 AM - 12:00 PM</p>
            <a href="#" class="btn-join-us-square">Book Your Space</a>
          </div>
          </div>
          </div>

          <div class="col-lg-4 col-md-6 cards">
          <div class="cardt">
            <h4>Diversity and Inclusion Training</h4>
            <p>Learn how to create an inclusive scouting environment that celebrates diversity and fosters a sense of belonging for all members.</p>
            <div class="training-info">
            <p>Date: May 20, 2024</p>
            <p>Time: 2:00 PM - 5:00 PM</p>
            <a href="#" class="btn-join-us-square">Book Your Space</a>
          </div>
          </div>
          </div>

          <div class="col-lg-4 col-md-6 cards">
          <div class="cardt">
            <h4>Camping Skills Training</h4>
            <p>Develop essential camping skills, including tent pitching, campfire cooking, and outdoor safety, to ensure successful and enjoyable camping experiences for scouts.</p>
            <div class="training-info">
            <p>Date: May 30, 2024</p>
            <p>Time: 9:00 AM - 12:00 PM</p>
            <a href="#" class="btn-join-us-square">Book Your Space</a>
          </div>
          </div>
          </div>

          <div class="col-lg-4 col-md-6 cards">
          <div class="cardt">
            <h4>Child Protection Training</h4>
            <p>Understand the importance of child protection within scouting and learn how to recognize and respond to signs of abuse, ensuring the safety and well-being of all scouts.</p>
            <div class="training-info">
            <p>Date: June 5, 2024</p>
            <p>Time: 2:00 PM - 5:00 PM</p>
            <a href="#" class="btn-join-us-square">Book Your Space</a>
          </div>
          </div>
            
          </div>

        </div>

      </div>

    </section><!-- /Training Section -->
  </div>
</main>



<?php
include '../../partials/footer.php';
unset($_SESSION["error_message"]);
?>


