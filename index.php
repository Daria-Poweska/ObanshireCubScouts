<!-- MAIN PAGE -->

<?php
include 'account/config/config.php';
include 'partials/header.php';
include 'partials/navigation.php';
?>

<!-- Hero Section -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <video autoplay loop muted playsinline>
            <source src="<?= BASE_URL ?>assets/Images/video6.mp4" type="video/mp4">
        </video>
        <div class="hero-content">
            <h2 class="fade-up">Obanshire Cub Scouts</h2>
            <blockquote class="fade-up fade-up-delay-100">
                <p>Join us on an exciting journey of discovery and growth! At Obanshire Cub Scouts, we're dedicated to providing a fun and enriching experience for young minds. Explore the wonders of nature, learn new skills, and make lifelong friendships along the way. Whether you're a Cub Scout, a volunteer or a parent, there's something here for everyone.</p>
            </blockquote>
            <div class="btn-container fade-up fade-up-delay-200">
                <a href="#aboutus" class="btn-learn-more">Learn More</a>
                <a href="<?= BASE_URL ?>register" class="btn-join-us">Join Us</a>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Section -->

<!-- About Us Section -->
<section id="aboutus" class="aboutus section">
    <div class="container section-title">
        <span>Join Us<br></span>
        <h2>Join Us<br></h2>
    </div>

    <div class="container">
        <div class="row ">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/Images/aboutus/img1.jpg" class="card-img-top" alt="Activities Image">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Explore Our Activities</strong></h5>
                        <p class="card-text">Dive into a plethora of activities tailored to inspire and educate.</p>
                        <a href="#" class="btn-join-us-square index">Discover More</a>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/Images/aboutus/img2.jpg" class="card-img-top" alt="Badges Image">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Achieve New Heights</strong></h5>
                        <p class="card-text">Earn badges that celebrate your passions and skills.</p>
                        <a href="#" class="btn-join-us-square index">Learn About Badges</a>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/Images/aboutus/img3.jpg" class="card-img-top" alt="Nights Away Image">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Adventure Awaits</strong></h5>
                        <p class="card-text">Experience the thrill of nights away, whether camping, hostelling, or participating in sleepovers. </p>
                        <a href="#" class="btn-join-us-square index">Start Your Adventure</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Card 4 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="assets/Images/aboutus/img4.jpg" class="card-img-top" alt="POR Image">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Guidance and Policies</strong></h5>
                        <p class="card-text">Our Policy Organisation and Rules - guidance to ensure safe operations.</p>
                        <a href="#" class="btn-join-us-square index mt-auto">Guidelines</a>
                    </div>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="assets/Images/aboutus/img5.jpg" class="card-img-top" alt="Training Image">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Training Opportunities</strong></h5>
                        <p class="card-text">Equip young people with skills for life.</p>
                        <a href="#" class="btn-join-us-square index mt-auto">Discover Training</a>
                    </div>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="assets/Images/aboutus/img6.jpg" class="card-img-top" alt="Volunteer Experience Image">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Enhance Your Volunteering</strong></h5>
                        <p class="card-text">Find out how we're transforming the volunteer experience to make it more enjoyable.</p>
                        <a href="#" class="btn-join-us-square index mt-auto">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Us Section -->

<!-- More About Obanshire Cub Scouts Section -->
<div class="container section-title">
    <h2>More About Obanshire Cub Scouts</h2>
</div>
<div class="container my-3 bg-white p-4 rounded">
    <h3 class="mb-3">Cub Scouts Overview</h3>
    <p class="cub-scouts-overview">
        <img src="assets/Images/symbol.png" class="icon" alt="symbol" >Weekly meetings occur at various venues like schools, church halls, community centers, or dedicated Scout headquarters. These gatherings, known as the Beaver Scout Colony, are designed to be both fun and educational.
    </p>
    <p>The Cub Scout program is rich with exciting activities and adventures, aimed at presenting challenges and prepping them for the Scout stage. Cub Scouts can earn up to 7 'challenge' badges and 33 'activity' badges. They also have opportunities for weekend camping trips and participate in district-led activities and various excursions to attractions like theme parks and zoos.</p>
    <div class="border"></div>

    <h3 class="mb-3">Badge Activities</h3>
    <p class="cub-scouts-overview">
        <img src="assets/Images/symbol.png" class="icon" alt="symbol" >Our activity badges enable Cub Scouts to demonstrate their skills in current hobbies and discover new ones. These badges are designed to motivate young Scouts to broaden their interests and talents.
    </p>
    <div class="border"></div>

    <h3 class="mb-3">Achievement Challenges</h3>
    <p class="cub-scouts-overview">
        <img src="assets/Images/symbol.png" class="icon" alt="symbol">Challenge Awards require more effort and may involve completing tasks within the group, community, or at home. These awards span themes such as physical activity, outdoor skills, and community service, encouraging young people to push their boundaries and achieve significant milestones.
    </p>
    <div class="border"></div>

    <h3 class="mb-3">Resourceful Packs</h3>
    <p class="cub-scouts-overview">
        <img src="assets/Images/symbol.png" class="icon" alt="symbol">Several activity badges are supported by external organizations that provide resource packs, guiding young Scouts through the badge requirements and helping them track their progress.
    </p>
    <div class="border"></div>

    <h3 class="mb-3">Top Honor: Chief Scout's Award</h3>
    <p class="cub-scouts-overview">
        <img src="assets/Images/symbol.png" class="icon" alt="symbol">The Chief Scout's Silver Award is the highest recognition for Cub Scouts. To achieve this, a Cub Scout must complete six Challenge Awards before advancing to the Scout section. This prestigious award can also be completed early in their Scout journey if needed, symbolizing a major achievement and readiness for future challenges.
    </p>
    <div class="border"></div>
</div>
<!-- End More About Obanshire Cub Scouts Section -->

<!-- Testimonials Section -->
<div class="container section-title">
    <h2>Testimonials</h2>
</div>
<!-- Carousel wrapper -->
<div id="carouselExampleIndicators" class="carousel slide carousel-dark text-center" data-bs-ride="carousel">
    <div class="carousel-inner py-4">
        <!-- Single item 1 -->
        <div class="carousel-item active">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <img class="rounded-circle shadow-1-strong mb-4" src="assets/Images/carousel/boy.jpg" alt="avatar" style="width: 150px;" />
                        <h5 class="mb-3">Will Johnson</h5>
                        <p>Parent</p>
                        <p class="text-muted">
                            <i class="fas fa-quote-left pe-2"></i>
                            The Obanshire Cub Scouts have been a fantastic experience for my son. He's learned valuable life skills, made new friends, and developed a deep appreciation for the outdoors.
                        </p>
                    </div>
                    <div class="col-lg-4 d-none d-lg-block">
                        <img class="rounded-circle shadow-1-strong mb-4" src="assets/Images/carousel/man.jpg" alt="avatar" style="width: 150px;" />
                        <h5 class="mb-3">Michael Thompson</h5>
                        <p>Scout Leader</p>
                        <p class="text-muted">
                            <i class="fas fa-quote-left pe-2"></i>
                            Being a part of the Obanshire Cub Scouts has been an incredibly rewarding experience. Watching the scouts grow, learn, and develop into responsible young individuals is truly inspiring.
                        </p>
                    </div>
                    <div class="col-lg-4 d-none d-lg-block">
                        <img class="rounded-circle shadow-1-strong mb-4" src="assets/Images/carousel/woman.jpg" alt="avatar" style="width: 150px;" />
                        <h5 class="mb-3">Emily Davis</h5>
                        <p>Scout</p>
                        <p class="text-muted">
                            <i class="fas fa-quote-left pe-2"></i>
                            I've had so much fun with the Obanshire Cub Scouts! From camping trips to community service projects, every activity has been an adventure and taught me valuable lessons.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single item 2 -->
        <div class="carousel-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <img class="rounded-circle shadow-1-strong mb-4" src="assets/Images/carousel/man1.jpg" alt="avatar" style="width: 150px;" />
                        <h5 class="mb-3">David Wilson</h5>
                        <p>Parent</p>
                        <p class="text-muted">
                            <i class="fas fa-quote-left pe-2"></i>
                            The Obanshire Cub Scouts have provided my daughter with a supportive and inclusive environment where she can explore her interests, develop new skills, and make lasting friendships.
                        </p>
                    </div>
                    <div class="col-lg-4 d-none d-lg-block">
                        <img class="rounded-circle shadow-1-strong mb-4" src="assets/Images/carousel/girl.jpg" alt="avatar" style="width: 150px;" />
                        <h5 class="mb-3">Olivia Taylor</h5>
                        <p>Scout</p>
                        <p class="text-muted">
                            <i class="fas fa-quote-left pe-2"></i>
                            Being a part of the Obanshire Cub Scouts has taught me the importance of teamwork, perseverance, and respect for nature. I've made so many amazing memories that will stay with me forever.
                        </p>
                    </div>
                    <div class="col-lg-4 d-none d-lg-block">
                        <img class="rounded-circle shadow-1-strong mb-4" src="assets/Images/carousel/woman1.jpg" alt="avatar" style="width: 150px;" />
                        <h5 class="mb-3">Jessica Brown</h5>
                        <p>Scout Leader</p>
                        <p class="text-muted">
                            <i class="fas fa-quote-left pe-2"></i>
                            The Obanshire Cub Scouts organization is truly exceptional. We strive to create a nurturing environment where scouts can explore their potential, develop essential life skills, and build lasting friendships.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single item 3 -->
        <div class="carousel-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <img class="rounded-circle shadow-1-strong mb-4" src="assets/Images/carousel/man2.jpg" alt="avatar" style="width: 150px;" />
                        <h5 class="mb-3">Jacob Anderson</h5>
                        <p>Scout</p>
                        <p class="text-muted">
                            <i class="fas fa-quote-left pe-2"></i>
                            The Obanshire Cub Scouts have been an amazing experience! I've learned so many new skills, like camping, first aid, and outdoor survival, all while having a blast with my fellow scouts.
                        </p>
                    </div>
                    <div class="col-lg-4 d-none d-lg-block">
                        <img class="rounded-circle shadow-1-strong mb-4" src="assets/Images/carousel/woman2.jpg" alt="avatar" style="width: 150px;" />
                        <h5 class="mb-3">Kate Roberts</h5>
                        <p>Parent</p>
                        <p class="text-muted">
                            <i class="fas fa-quote-left pe-2"></i>
                            The Obanshire Cub Scouts have been a fantastic organization for my son. They've instilled in him valuable life lessons, a love for the outdoors, and a sense of community.
                        </p>
                    </div>
                    <div class="col-lg-4 d-none d-lg-block">
                        <img class="rounded-circle shadow-1-strong mb-4" src="assets/Images/carousel/woman3.jpg" alt="avatar" style="width: 150px;" />
                        <h5 class="mb-3">Sophia Miller</h5>
                        <p>Scout</p>
                        <p class="text-muted">
                            <i class="fas fa-quote-left pe-2"></i>
                            Being a part of the Obanshire Cub Scouts has been an incredible journey. I've learned so much about leadership, teamwork, and respect for nature, all while making lifelong friends.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon text-body" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon text-body" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- End Carousel Wrapper -->

<?php
include 'partials/footer.php';
?>
