<?php 
include '../../account/config/config.php';
  include '../../partials/header.php';
  include '../../partials/navigation.php';
?>

   
<!-- Hero  -->

<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <video autoplay loop muted playsinline>
            <source src="<?= BASE_URL ?>assets/Images/video6.mp4" type="video/mp4">
        </video>
        <div class="hero-content">
            <h2 class="fade-up">Obanshire Cub Scouts</h2>
            <blockquote class="fade-up fade-up-delay-100">
                <p>Join us on an exciting journey of discovery and growth! At Obanshire Cub Scouts, we're dedicated to providing a fun and enriching experience for young minds. Explore the wonders of nature, learn new skills, and make lifelong friendships along the way. Whether you're a Cub Scout, a volunteer or a parent, there's something here for everyone</p>
            </blockquote>
            <div class="btn-container fade-up fade-up-delay-200">
                <a href="#aboutus" class="btn-learn-more">Learn More</a>
                <a href="<?= BASE_URL ?>register" class="btn-join-us">Join Us</a>
            </div>
        </div>
    </div>
</section>

<section id="aboutus" class="aboutus section">

    <div class="container section-title ">
        <span>Join Us<br></span>
        <h2>Join Us<br></h2>
    </div>

<div class="container">

    <div class="row mb-5">
        <div class="col-md-4">
            <div class="card">
                <img src="https://source.unsplash.com/gp6sCBgiIEI" class="card-img-top" alt="Activities Image">
                <div class="card-body">
                    <h5 class="card-title">Explore Our Activities</h5>
                    <p class="card-text">Dive into a plethora of activities tailored to inspire and educate. Filter by time, cost, and more to find what suits you best.</p>
                    <a href="#" class="btn-join-us-square index">Discover More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://source.unsplash.com/a9pGCdK-yzU" class="card-img-top" alt="Badges Image">
                <div class="card-body">
                    <h5 class="card-title">Achieve New Heights</h5>
                    <p class="card-text">Earn badges that celebrate your passions and skills. From novices to experts, there's a badge for every achievement.</p>
                    <a href="#" class="btn-join-us-square index">Learn About Badges</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://source.unsplash.com/bd_9q-P0zH8" class="card-img-top" alt="Nights Away Image">
                <div class="card-body">
                    <h5 class="card-title">Adventure Awaits</h5>
                    <p class="card-text">Experience the thrill of nights away, whether camping, hostelling, or participating in sleepovers. Adventure is calling!</p>
                    <a href="#" class="btn-join-us-square index">Start Your Adventure</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-equal mb-5">
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://source.unsplash.com/Yh6K2eTr_FY" class="card-img-top" alt="POR Image">
                <div class="card-body">
                    <h5 class="card-title">Guidance and Policies</h5>
                    <p class="card-text">Our Policy Organisation and Rules - guidance to ensure safe operations.</p>
                    <a href="#" class="btn-join-us-square index mt-auto">Guidelines</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://source.unsplash.com/_by1vundFBc" class="card-img-top" alt="Training Image">
                <div class="card-body">
                    <h5 class="card-title">Training Opportunities</h5>
                    <p class="card-text">Equip young people with skills for life.</p>
                    <a href="#" class="btn-join-us-square index mt-auto">Discover Training</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://source.unsplash.com/he9e9bKm4l0" class="card-img-top" alt="Volunteer Experience Image">
                <div class="card-body">
                    <h5 class="card-title">Enhance Your Volunteering</h5>
                    <p class="card-text">Find out how we're transforming the volunteer experience to make it more enjoyable and rewarding for everyone involved.</p>
                    <a href="#" class="btn-join-us-square index mt-auto">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>


</section>




<!-- Recent Events -->


<div class="container section-title ">
        <h2>More About Obanshire Cub Scouts</h2>
    </div>
<div class="container my-3 bg-white p-4 rounded">

    <h3 class="mb-3">Cub Scouts Overview</h3>
    <p>Cub Scouts, the second stage in the Scouting journey, don a green sweatshirt. Weekly meetings occur at various venues like schools, church halls, community centers, or dedicated Scout headquarters. These gatherings, known as the Beaver Scout Colony, are designed to be both fun and educational.</p>
    <p>The Cub Scout program is rich with exciting activities and adventures, aimed at presenting challenges and prepping them for the Scout stage. Cub Scouts can earn up to 7 'challenge' badges and 33 'activity' badges. They also have opportunities for weekend camping trips and participate in district-led activities and various excursions to attractions like theme parks and zoos.</p>



    <h3 class="mb-3">Badge Activities</h3>
    <p>Our activity badges enable Cub Scouts to demonstrate their skills in current hobbies and discover new ones. These badges are designed to motivate young Scouts to broaden their interests and talents.</p>

    <h3 class="mb-3">Achievement Challenges</h3>
    <p>Challenge Awards require more effort and may involve completing tasks within the group, community, or at home. These awards span themes such as physical activity, outdoor skills, and community service, encouraging young people to push their boundaries and achieve significant milestones.</p>

    <h3 class="mb-3">Resourceful Packs</h3>
    <p>Several activity badges are supported by external organizations that provide resource packs, guiding young Scouts through the badge requirements and helping them track their progress.</p>

    <h3 class="mb-3">Top Honor: Chief Scout's Award</h3>
    <p>The Chief Scout's Silver Award is the highest recognition for Cub Scouts. To achieve this, a Cub Scout must complete six Challenge Awards before advancing to the Scout section. This prestigious award can also be completed early in their Scout journey if needed, symbolizing a major achievement and readiness for future challenges.</p>
</div>


<?php include '../../partials/footer.php'; ?>