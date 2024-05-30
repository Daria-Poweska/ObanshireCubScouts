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
   
        <!-- Card: Artist Activity Badge -->
        <div class="col-lg-4 col-md-6 badges">
          <div class="card">
            <img src="assets/Images/badges/artist.png" class="card-img-top" alt="Sunset over the Sea" />
            <div class="card-body">
              <h5 class="card-title">Artist Badge</h5>
              <p class="card-text">
                The "Astronomer Activity Badge" is awarded to scouts who demonstrate...
              </p>
              <button class="btn-join-us-square" data-bs-toggle="modal" data-bs-target="#artistModal">Read More</button>
            </div>
          </div>
        </div>

        <!-- Astronomer Modal -->
        <div class="modal fade" id="artistModal" tabindex="-1" aria-labelledby="artistModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="artistModalLabel">Artist Badge</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body d-flex flex-column">
                <div class="d-flex flex-row align-items-center mb-3">
                  <img src="assets/Images/badges/artist.png" class="img-fluid me-3" alt="Sunset over the Sea" style="max-width: 150px;" />
                  <p class="textmodal" data-card-title="Artist Badge">
                    The "Astronomer Activity Badge" is awarded to scouts who demonstrate a keen interest in astronomy and possess a deep understanding of celestial objects and phenomena. Scouts earning this badge engage in various activities related to the study of the universe, including observing the night sky, identifying constellations, learning about the lifecycle of stars, and understanding the principles of planetary motion.
                  </p>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn-join-us-square" data-bs-dismiss="modal">Go Back</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Card: Astronautics Activity Badge -->
        <div class="col-lg-4 col-md-6 badges">
          <div class="card">
            <img src="assets/Images/badges/astronautics.png" class="card-img-top" alt="Sunset over the Sea" />
            <div class="card-body">
              <h5 class="card-title">Astronautics Badge</h5>
              <p class="card-text">
                The "Astronomer Activity Badge" is awarded to scouts who demonstrate...
              </p>
              <button class="btn-join-us-square" data-bs-toggle="modal" data-bs-target="#astronauticsModal">Read More</button>
            </div>
          </div>
        </div>

        <!-- Astronomer Modal -->
        <div class="modal fade" id="astronauticsModal" tabindex="-1" aria-labelledby="astronauticsModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="astronauticsModalLabel">Astronautics Badge</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body d-flex flex-column">
                <div class="d-flex flex-row align-items-center mb-3">
                  <img src="assets/Images/badges/astronautics.png" class="img-fluid me-3" alt="Sunset over the Sea" style="max-width: 150px;" />
                  <p class="textmodal" data-card-title="Astronautics Badge">
                    The "Astronomer Activity Badge" is awarded to scouts who demonstrate a keen interest in astronomy and possess a deep understanding of celestial objects and phenomena. Scouts earning this badge engage in various activities related to the study of the universe, including observing the night sky, identifying constellations, learning about the lifecycle of stars, and understanding the principles of planetary motion.
                  </p>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn-join-us-square" data-bs-dismiss="modal">Go Back</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Card: Astronomer Activity Badge -->
        <div class="col-lg-4 col-md-6 badges">
          <div class="card">
            <img src="assets/Images/badges/astronomics.png" class="card-img-top" alt="Sunset over the Sea" />
            <div class="card-body">
              <h5 class="card-title">Astronomer Activity Badge</h5>
              <p class="card-text">
                The "Astronomer Activity Badge" is awarded to scouts who demonstrate...
              </p>
              <button class="btn-join-us-square" data-bs-toggle="modal" data-bs-target="#astronomerModal">Read More</button>
            </div>
          </div>
        </div>

        <!-- Astronomer Modal -->
        <div class="modal fade" id="astronomerModal" tabindex="-1" aria-labelledby="astronomerModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="astronomerModalLabel">Astronomer Activity Badge</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body d-flex flex-column">
                <div class="d-flex flex-row align-items-center mb-3">
                  <img src="assets/Images/badges/astronomics.png" class="img-fluid me-3" alt="Sunset over the Sea" style="max-width: 150px;" />
                  <p class="textmodal" data-card-title="Astronomer Activity Badge">
                    The "Astronomer Activity Badge" is awarded to scouts who demonstrate a keen interest in astronomy and possess a deep understanding of celestial objects and phenomena. Scouts earning this badge engage in various activities related to the study of the universe, including observing the night sky, identifying constellations, learning about the lifecycle of stars, and understanding the principles of planetary motion.
                  </p>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn-join-us-square" data-bs-dismiss="modal">Go Back</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="col-lg-4 col-md-6 badges">
          <div class="card">
            <img src="assets/Images/badges/communicator.png" class="card-img-top" alt="Sunset over the Sea" />
            <div class="card-body">
              <h5 class="card-title">Communicator Badge</h5>
              <p class="card-text">
                This badge focuses on developing a broad range of communication skills...
              </p>
              <button class="btn-join-us-square" data-bs-toggle="modal" data-bs-target="#badgeModal">Read More</button>
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="badgeModal" tabindex="-1" aria-labelledby="badgeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="badgeModalLabel">communicator Badge</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body d-flex flex-column">
                <div class="d-flex flex-row align-items-center mb-3">
                  <img src="assets/Images/badges/astronomics.png" class="img-fluid me-3" alt="Sunset over the Sea" style="max-width: 150px;" />
                  <p class="card-text mb-5">
                    This badge focuses on developing a broad range of communication skills that are essential in today's world. Scouts will learn techniques for effective public speaking, including how to prepare and deliver engaging presentations. They will also work on improving their writing abilities, exploring various formats such as creative writing, journalism, and professional writing. Active listening skills are emphasized, teaching scouts how to be attentive and understand others' perspectives. Additionally, the badge covers using different forms of media and technology to communicate effectively, such as social media, video production, and digital design tools.
                  </p>
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn-join-us-square" data-bs-dismiss="modal">Go Back</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Card 4: Craft Badge -->
        <div class="col-lg-4 col-md-6 badges">
          <div class="card">
            <img src="assets/Images/badges/craft.png" class="card-img-top" alt="Sunset over the Sea" />
            <div class="card-body">
              <h5 class="card-title">Craft Badge</h5>
              <p class="card-text">
                The Craft badge encourages scouts to explore their creativity...
              </p>
              <button class="btn-join-us-square" data-bs-toggle="modal" data-bs-target="#craftModal">Read More</button>
            </div>
          </div>
        </div>

        <!-- Craft Modal -->
        <div class="modal fade" id="craftModal" tabindex="-1" aria-labelledby="craftModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="craftModalLabel">Craft Badge</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body d-flex flex-column">
                <div class="d-flex flex-row align-items-center mb-3">
                  <img src="assets/Images/badges/craft.png" class="img-fluid me-3" alt="Sunset over the Sea" style="max-width: 150px;" />
                  <p class="textmodal" data-card-title="Craft Badge">
                    The Craft badge encourages scouts to explore their creativity and develop hands-on skills through various types of crafts. This may include woodworking, where scouts learn about different types of wood, tools, and techniques for creating functional and decorative items. Metalworking introduces scouts to working with metals, such as jewelry making, blacksmithing, or sculpting. Leatherworking involves skills like tooling, stamping, and stitching to create leather goods. Textile crafts like weaving, knitting, and sewing allow scouts to create clothing, accessories, or home decor items. The badge also covers other crafts like pottery, stained glass, and papermaking, providing a diverse range of experiences for scouts to express their artistic abilities and learn about different materials and processes.
                  </p>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn-join-us-square" data-bs-dismiss="modal">Go Back</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 4: Communicator Badge -->
        <div class="col-lg-4 col-md-6 badges">
          <div class="card">
            <img src="assets/Images/badges/communicator.png" class="card-img-top" alt="Sunset over the Sea" />
            <div class="card-body">
              <h5 class="card-title">Communicator Badge</h5>
              <p class="card-text">
                This badge focuses on developing a broad range of communication skills...
              </p>
              <button class="btn-join-us-square" data-bs-toggle="modal" data-bs-target="#communicatorModal">Read More</button>
            </div>
          </div>
        </div>

        <!-- Communicator Modal -->
        <div class="modal fade" id="communicatorModal" tabindex="-1" aria-labelledby="communicatorModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="communicatorModalLabel">Communicator Badge</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body d-flex flex-column">
                <div class="d-flex flex-row align-items-center mb-3">
                  <img src="assets/Images/badges/communicator.png" class="img-fluid me-3" alt="Sunset over the Sea" style="max-width: 150px;" />
                  <p class="textmodal" data-card-title="Communicator Badge">
                    This badge focuses on developing a broad range of communication skills that are essential in today's world. Scouts will learn techniques for effective public speaking, including how to prepare and deliver engaging presentations. They will also work on improving their writing abilities, exploring various formats such as creative writing, journalism, and professional writing. Active listening skills are emphasized, teaching scouts how to be attentive and understand others' perspectives. Additionally, the badge covers using different forms of media and technology to communicate effectively, such as social media, video production, and digital design tools.
                  </p>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn-join-us-square" data-bs-dismiss="modal">Go Back</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 5: DIY Badge -->
        <div class="col-lg-4 col-md-6 badges">
          <div class="card">
            <img src="assets/Images/badges/diy.png" class="card-img-top" alt="Sunset over the Sea" />
            <div class="card-body">
              <h5 class="card-title">DIY</h5>
              <p class="card-text">
                DIY (Do-It-Yourself): The DIY badge promotes self-reliance and practical...
              </p>
              <button class="btn-join-us-square" data-bs-toggle="modal" data-bs-target="#diyModal">Read More</button>
            </div>
          </div>
        </div>

        <!-- DIY Modal -->
        <div class="modal fade" id="diyModal" tabindex="-1" aria-labelledby="diyModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="diyModalLabel">DIY Badge</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body d-flex flex-column">
                <div class="d-flex flex-row align-items-center mb-3">
                  <img src="assets/Images/badges/diy.png" class="img-fluid me-3" alt="Sunset over the Sea" style="max-width: 150px;" />
                  <p class="textmodal" data-card-title="DIY">
                    DIY (Do-It-Yourself): The DIY badge promotes self-reliance and practical skills by teaching scouts how to tackle various home improvement, repair, and maintenance projects safely and effectively. This includes basic carpentry skills like measuring, cutting, and assembling wood for projects like building shelves or furniture. Scouts will also learn about tools and hardware, such as using power tools, painting techniques, and hanging drywall. Plumbing and electrical basics may be covered, teaching scouts how to fix leaks, unclog drains, or replace light fixtures. Outdoor projects like landscaping, deck building, or shed construction may also be part of the badge requirements. Safety is a key emphasis, ensuring scouts understand how to properly use equipment, follow instructions, and take necessary precautions.
                  </p>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn-join-us-square" data-bs-dismiss="modal">Go Back</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Card 5: DIY Badge -->
        <div class="col-lg-4 col-md-6 badges">
          <div class="card">
            <img src="assets/Images/badges/entertainer.png" class="card-img-top" alt="Entertainer Badge" />
            <div class="card-body">
              <h5 class="card-title">Entertainer Badge</h5>
              <p class="card-text">
                DIY (Do-It-Yourself): The DIY badge promotes self-reliance and practical...
              </p>
              <button class="btn-join-us-square" data-bs-toggle="modal" data-bs-target="#entertainerModal">Read More</button>
            </div>
          </div>
        </div>

        <!-- DIY Modal -->
        <div class="modal fade" id="entertainerModal" tabindex="-1" aria-labelledby="entertainerModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="entertainerModalLabel">Entertainer Badge</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body d-flex flex-column">
                <div class="d-flex flex-row align-items-center mb-3">
                  <img src="assets/Images/badges/entertainer.png" class="img-fluid me-3" alt="Entertainer Badge" style="max-width: 150px;" />
                  <p class="textmodal" data-card-title="Entertainer Badge">
                    DIY (Do-It-Yourself): The DIY badge promotes self-reliance and practical skills by teaching scouts how to tackle various home improvement, repair, and maintenance projects safely and effectively. This includes basic carpentry skills like measuring, cutting, and assembling wood for projects like building shelves or furniture. Scouts will also learn about tools and hardware, such as using power tools, painting techniques, and hanging drywall. Plumbing and electrical basics may be covered, teaching scouts how to fix leaks, unclog drains, or replace light fixtures. Outdoor projects like landscaping, deck building, or shed construction may also be part of the badge requirements. Safety is a key emphasis, ensuring scouts understand how to properly use equipment, follow instructions, and take necessary precautions.
                  </p>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn-join-us-square" data-bs-dismiss="modal">Go Back</button>
              </div>
            </div>
          </div>
        </div>



        <!-- Card 7: Farming Badge -->
        <div class="col-lg-4 col-md-6 badges">
          <div class="card">
            <img src="assets/Images/badges/farming.png" class="card-img-top" alt="Sunset over the Sea" />
            <div class="card-body">
              <h5 class="card-title">Farming</h5>
              <p class="card-text">
                The Farming badge introduces scouts to the principles of agriculture...
              </p>
              <button class="btn-join-us-square" data-bs-toggle="modal" data-bs-target="#farmingModal">Read More</button>
            </div>
          </div>
        </div>

        <!-- Farming Modal -->
        <div class="modal fade" id="farmingModal" tabindex="-1" aria-labelledby="farmingModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="farmingModalLabel">Farming Badge</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body d-flex flex-column">
                <div class="d-flex flex-row align-items-center mb-3">
                  <img src="assets/Images/badges/farming.png" class="img-fluid me-3" alt="Sunset over the Sea" style="max-width: 150px;" />
                  <p class="textmodal" data-card-title="Farming">
                    The Farming badge introduces scouts to the principles of agriculture, gardening, and sustainable farming practices. They will learn about different types of crops and how to cultivate them, including soil preparation, planting, watering, and pest management. The badge may also cover caring for livestock, such as chickens, goats, or cattle, teaching scouts about housing, feeding, and health considerations. Sustainable farming practices like crop rotation, composting, and natural pest control methods are emphasized.
                  </p>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn-join-us-square" data-bs-dismiss="modal">Go Back</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Card 7: Cyclist Badge -->
        <div class="col-lg-4 col-md-6 badges">
          <div class="card">
            <img src="assets/Images/badges/cyclist.png" class="card-img-top" alt="Sunset over the Sea" />
            <div class="card-body">
              <h5 class="card-title">Cyclist Badge</h5>
              <p class="card-text">
              The Cyclist badge encourages scouts to develop skills and knowledge ...
              </p>
              <button class="btn-join-us-square" data-bs-toggle="modal" data-bs-target="#cyclistModal">Read More</button>
            </div>
          </div>
        </div>

        <!-- cyclist Modal -->
        <div class="modal fade" id="cyclistModal" tabindex="-1" aria-labelledby="cyclistModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="cyclistModalLabel">Cyclist Badge</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body d-flex flex-column">
                <div class="d-flex flex-row align-items-center mb-3">
                  <img src="assets/Images/badges/cyclist.png" class="img-fluid me-3" alt="Sunset over the Sea" style="max-width: 150px;" />
                  <p class="textmodal" data-card-title="Cyclist Badge">
                  The Cyclist badge encourages scouts to develop skills and knowledge related to cycling, promoting an active lifestyle and environmental awareness. Scouts will learn about bike maintenance, including how to properly clean, lubricate, and adjust different components like brakes, gears, and tires. They will also study cycling safety rules, such as wearing appropriate protective gear, obeying traffic laws, and using hand signals. Route planning is another key component, teaching scouts how to read maps, plan safe routes, and prepare for longer rides. The badge also covers environmentally responsible cycling practices, such as reducing one's carbon footprint, properly disposing of bike-related waste, and advocating for bike-friendly infrastructure. Scouts may participate in group rides, bike rodeos, or cycling events to put their skills into practice and develop a lifelong appreciation for cycling.
                  </p>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn-join-us-square" data-bs-dismiss="modal">Go Back</button>
              </div>
            </div>
          </div>
        </div>

        

        <div class="col-lg-4 col-md-6 badges">
          <div class="card">
            <img src="assets/Images/badges/environmental.png" class="card-img-top" alt="Eco-Explorer Badge" />
            <div class="card-body">
              <h5 class="card-title">Eco-Explorer Badge</h5>
              <p class="card-text">This badge encourages scouts to explore and understand the diverse ecosystems...</p>
              <button class="btn-join-us-square" data-bs-toggle="modal" data-bs-target="#ecoExplorerModal">Read More</button>
            </div>
          </div>
        </div>

        <!-- Eco-Explorer Modal -->
        <div class="modal fade" id="ecoExplorerModal" tabindex="-1" aria-labelledby="ecoExplorerModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="ecoExplorerModalLabel">Eco-Explorer Badge</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              <div class="d-flex flex-row align-items-center mb-3">
              <img src="assets/Images/badges/environmental.png" class="img-fluid me-3" alt="Sunset over the Sea" style="max-width: 150px;" />
                <p class="textmodal" data-card-title="Eco-Explorer Badge">This badge encourages scouts to explore and understand the diverse ecosystems found in their local area and beyond. Through hands-on activities and field trips, scouts will gain a deeper appreciation for the natural world and learn how to minimize their environmental impact.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn-join-us-square" data-bs-dismiss="modal">Go Back</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 badges">
          <div class="card">
            <img src="assets/Images/badges/fire.png" class="card-img-top" alt="Fire Badge" />
            <div class="card-body">
              <h5 class="card-title">Fire Badge</h5>
              <p class="card-text">The Fire & Environmental Stewardship Badge aims to strike a balance between...</p>
              <button class="btn-join-us-square" data-bs-toggle="modal" data-bs-target="#fireModal">Read More</button>
            </div>
          </div>
        </div>

        <!-- Fire Modal -->
        <div class="modal fade" id="fireModal" tabindex="-1" aria-labelledby="fireModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="fireModalLabel">Fire Badge</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              
              <div class="modal-body">
              <div class="d-flex flex-row align-items-center mb-3">
              <img src="assets/Images/badges/fire.png" class="img-fluid me-3" alt="Sunset over the Sea" style="max-width: 150px;" />
                <p class="textmodal" data-card-title="Fire Badge">The Fire & Environmental Stewardship Badge aims to strike a balance between developing practical fire skills and promoting environmental responsibility. By understanding the potential impacts of fires on ecosystems and adopting sustainable practices, scouts will become responsible stewards of the outdoors, capable of enjoying the warmth and utility of fires while protecting the natural world.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn-join-us-square" data-bs-dismiss="modal">Go Back</button>
              </div>
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