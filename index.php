<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>West Africa Diving Association</title>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Animate on Scroll CSS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<link rel="icon" href="images/WADA_LOGO.jpeg" type="image/png">

<style>
    body { font-family: 'Roboto', sans-serif; scroll-behavior: smooth; }
    h2, h3, h4 { font-family: 'Montserrat', sans-serif; }
    section { padding: 30px 0; }
    .navbar { background-color: #005f99; }
    .navbar-brand, .nav-link { font-weight: 600; }
    .nav-link:hover { color: #cce5ff !important; }
    .btn-primary { background: linear-gradient(90deg,#005f99,#003366); border: none; transition: 0.3s; }
    .btn-primary:hover { background: linear-gradient(90deg,#003366,#005f99); }
    .carousel-item img { height: 80vh; object-fit: cover; filter: brightness(0.6); margin-top: 5px; }
    .carousel-caption { bottom: 30%; }
    .card { border-radius: 15px; transition: transform 0.3s, box-shadow 0.3s; }
    .card:hover { transform: translateY(-10px); box-shadow: 0 10px 25px rgba(0,0,0,0.2); }
    .team-img { width: 150px; height: 150px; border-radius: 50%; object-fit: cover; transition: transform 0.3s; }
    .team-img:hover { transform: scale(1.1); }
    .project-img { height: 200px; object-fit: cover; border-radius: 15px; }
    .bg-primary-light { background-color: rgba(0,95,153,0.1); border-radius: 15px; }
    footer { background-color: #003366; color: white; text-align: center; padding: 30px 0; }
    .whatsapp-float { position: fixed; bottom: 20px; right: 20px; z-index: 1000; }

</style>
</head>
<body>

<!-- Top Header with Contact & Social Media -->
<div class="bg-primary text-white py-2">
  <div class="container d-flex justify-content-between align-items-center">
    <div class="fs-6">
      <strong>Contact:</strong> (+231)77-626-0932</a>
    </div>
    <div>
      <a href="https://facebook.com" target="_blank" class="text-white me-3">
        <i class="bi bi-facebook fs-5"></i>
      </a>
      <a href="https://instagram.com" target="_blank" class="text-white me-3">
        <i class="bi bi-instagram fs-5"></i>
      </a>
      <a href="https://linkedin.com" target="_blank" class="text-white me-3">
        <i class="bi bi-linkedin fs-5"></i>
      </a>
      <a href="https://wa.me/+231776260932" target="_blank" class="text-white">
        <i class="bi bi-whatsapp fs-5"></i>
      </a>
    </div>
  </div>
</div>

<!-- Main Navbar for Multi-Page Site -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="padding-top:1rem; padding-bottom:1rem;">
  <div class="container">
    <a class="navbar-brand fs-3 fw-bold" href="index.php">WADA</a> <!-- Brand links to homepage -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto fs-5">
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="projects.php">Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="team.php">Team</a></li>
        <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">More</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="accreditation.php">Accreditation</a></li>
            <li><a class="dropdown-item" href="equipment.php">Equipment</a></li>
            <li><a class="dropdown-item" href="#">Upload</a></li>
            <li><a class="dropdown-item" href="#">Our Partner</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">


<!-- Hero Section -->
<section id="hero">
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images/diving1.png" class="d-block w-100" alt="Diving 1">
      <div class="carousel-caption text-center text-white" data-aos="fade-up">
        <h1 class="display-3 fw-bold">West Africa Diving Association</h1>
        <p class="lead">Professional Diving Experiences in West Africa</p>
        <a href="contact.php" class="btn btn-primary btn-lg mt-3">Contact Us</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./images/diving2.png" class="d-block w-100" alt="Diving 2">
      <div class="carousel-caption text-center text-white" data-aos="fade-up">
        <h1 class="display-3 fw-bold">Explore the Ocean</h1>
        <p class="lead">Safe and guided diving adventures for all levels</p>
        <a href="contact.php" class="btn btn-primary btn-lg mt-3">Get Started</a>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>

<!-- About Section -->
<section id="about" class="container my-5 py-5" style="background-color: #f8f9fa; border-radius: 15px;" data-aos="fade-up">
  <div class="row align-items-center">
    <!-- Image Side -->
    <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right">
      <img src="images/WADA_LOGO.jpeg" alt="WADA Team" class="img-fluid rounded shadow-lg">
    </div>
    <div class="col-md-6" data-aos="fade-left">
  <h2 class="text-primary mb-4 display-5 fw-bold">About Us</h2>
  <p class="fs-5">
    West Africa Diving Association (WADA) is one of Liberia’s oldest and most trusted marine contractors, providing <strong>over 20 years of expertise</strong> in commercial diving, marine construction, and underwater infrastructure support.  
    Our strength lies in our ability to quickly adapt to complex underwater challenges while delivering safe, efficient, and cost-effective solutions.
  </p>

  <p class="fs-5">
    We are among the <strong>few full-service underwater contractors</strong> capable of offering end-to-end support — from project management and inspection to salvage operations and environmental services.
  </p>

  <ul class="fs-5">
    <li>Certified expertise in <strong>commercial diving, in-water surveys, hull inspection & cleaning, and environmental support</strong></li>
    <li>Successfully executed major projects including <strong>Tubman Bridge Rehabilitation, Freeport of Monrovia Emergency Works, and Monrovia Container Terminal Construction</strong></li>
    <li><strong>Only local underwater contractor to successfully salvage a wreck — seven times</strong></li>
    <li>Trusted by <strong>U.S. Embassy, AMP Terminals, PAE, MSG Shipping, GETMA, OBT Shipping, OTC, and the National Port Authority</strong></li>
  </ul>

  <p class="fs-5">
    Our divers have been professionally trained and certified by <strong>DCN Global LLC, International Technical Diving Agency, and Academy International USA</strong>, ensuring international-level service delivery.
  </p>

  <p class="mt-4 fs-5">
    <strong>Contact Us:</strong> 
    <a href="tel:+23177-626-0932" class="text-primary fw-bold">(+231)77-626-0932</a>
  </p>
</div>

  </div>
</section>



<!-- Services Section -->
<section id="services" class="container my-5 py-5" style="background-color: #f8f9fa; border-radius: 15px;" data-aos="fade-up">
    <h2 class="text-primary mb-5 text-center display-5 fw-bold">Our Services</h2>
    <div class="row g-4">
        <div class="col-md-4" data-aos="zoom-in">
            <div class="card h-100 shadow-lg border-0 rounded-4 hover-scale">
                <img src="images/Hull_Inspection.png" class="card-img-top rounded-top-4" alt="Hull Inspections">
                <div class="card-body text-center">
                    <h5 class="card-title fs-5 fw-bold">Hull Inspections & Cleaning</h5>
                    <p class="card-text fs-5">Detailed in-water hull inspections to assess vessel condition, safety, and compliance.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="card h-100 shadow-lg border-0 rounded-4 hover-scale">
                <img src="images/in_water.png" class="card-img-top rounded-top-4" alt="In-Water Survey">
                <div class="card-body text-center">
                    <h5 class="card-title fs-5 fw-bold">In-Water Survey</h5>
                    <p class="card-text fs-5">Professional underwater surveys for oil & gas, marine, and civil engineering industries.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="card h-100 shadow-lg border-0 rounded-4 hover-scale">
                <img src="images/Underwater Welding.png" class="card-img-top rounded-top-4" alt="Underwater Welding">
                <div class="card-body text-center">
                    <h5 class="card-title fs-5 fw-bold">Underwater Welding</h5>
                    <p class="card-text fs-5">Hyperbaric welding, both wet and dry, ensuring strong and durable repairs for marine structures.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional CSS -->
<style>
    /* Hover effect for cards */
    .hover-scale {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .hover-scale:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }
</style>


<!-- Projects Section -->
<section id="projects" class="container my-5 py-5" style="background-color: #f8f9fa; border-radius: 15px;" data-aos="fade-up">
    <h2 class="text-primary mb-5 text-center display-5 fw-bold">Our Projects</h2>
    <div class="row g-4">
        <!-- Project Card 1 -->
        <div class="col-md-6 col-lg-4" data-aos="fade-up">
            <div class="card h-100 shadow-lg border-0 rounded-4 hover-scale">
                <img src="images/work.jpeg" class="card-img-top rounded-top-4" alt="Tubman Bridge">
                <div class="card-body">
                    <h5 class="card-title fs-5 fw-bold">Tubman Bridge Renovation</h5>
                    <p class="card-text fs-5">Collaborated with Finland Divers to cast concrete pillars and weld underwater support structures.</p>
                </div>
            </div>
        </div>

        <!-- Project Card 2 -->
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card h-100 shadow-lg border-0 rounded-4 hover-scale">
                <img src="images/wrek_shi[.jpeg" class="card-img-top rounded-top-4" alt="Wreck Salvage">
                <div class="card-body">
                    <h5 class="card-title fs-5 fw-bold">Wreck Salvage Operations</h5>
                    <p class="card-text fs-5">Successfully salvaged seven wrecks; worked with PAE, ECOMOG gun boats, MSG Shipping, and OTC.</p>
                </div>
            </div>
        </div>

        <!-- Project Card 3 -->
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card h-100 shadow-lg border-0 rounded-4 hover-scale">
                <img src="images/monema.jpeg" class="card-img-top rounded-top-4" alt="Freeport of Monrovia">
                <div class="card-body">
                    <h5 class="card-title fs-5 fw-bold">Freeport of Monrovia</h5>
                    <p class="card-text fs-5">Instrumental in the Emergency Rehabilitation Program under EU supervision.</p>
                </div>
            </div>
        </div>

        <!-- Project Card 4 -->
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card h-100 shadow-lg border-0 rounded-4 hover-scale">
                <img src="images/USEmbassy.jpeg" class="card-img-top rounded-top-4" alt="US Embassy Inspection">
                <div class="card-body">
                    <h5 class="card-title fs-5 fw-bold">US Embassy Ocean Inspection</h5>
                    <p class="card-text fs-5">Inspected ocean bottom to a depth of 12 meters near the American Embassy for safety and surveys.</p>
                </div>
            </div>
        </div>

        <!-- Project Card 5 -->
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="card h-100 shadow-lg border-0 rounded-4 hover-scale">
                <img src="images/APM.jpeg" class="card-img-top rounded-top-4" alt="Monrovia Container Terminal">
                <div class="card-body">
                    <h5 class="card-title fs-5 fw-bold">Monrovia Container Terminal</h5>
                    <p class="card-text fs-5">Assisted AMP Terminals and BAM International: casting pillars, welding anodes, and in-water surveys.</p>
                </div>
            </div>
        </div>

        <!-- Project Card 6 -->
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
            <div class="card h-100 shadow-lg border-0 rounded-4 hover-scale">
                <img src="images/ship_main.jpeg" class="card-img-top rounded-top-4" alt="Ship Maintenance">
                <div class="card-body">
                    <h5 class="card-title fs-5 fw-bold">Ship Maintenance</h5>
                    <p class="card-text fs-5">Conducted numerous onshore and offshore maintenance operations for various shipping agencies with 100% success rate.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional CSS for hover effect -->
<style>
    .hover-scale {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .hover-scale:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }
</style>


<!-- Team Section -->
<section id="team" class="container my-5 py-5" style="background-color: #f8f9fa; border-radius: 15px;" data-aos="fade-up">
    <h2 class="text-primary mb-5 text-center display-5 fw-bold">Meet Our Team</h2>
    <div class="row text-center g-4">
        <div class="col-md-3" data-aos="zoom-in">
            <div class="team-card rounded-4 shadow-lg p-3 hover-scale">
                <img src="images/Ali Wleh Sackor.jpeg" alt="John Doe" class="img-fluid rounded-circle mb-3">
                <h5 class="fs-5 fw-bold">Prince D. Jegbadai</h5>
                <p class="fs-5">Chief Executive Officer</p>
            </div>
        </div>
        <div class="col-md-3" data-aos="zoom-in" data-aos-delay="100">
            <div class="team-card rounded-4 shadow-lg p-3 hover-scale">
                <img src="images/pic2.jpeg" alt="Jane Smith" class="img-fluid rounded-circle mb-3">
                <h5 class="fs-5 fw-bold">Ali Dackie</h5>
                <p class="fs-5">Marine Engineer (BAM International)</p>
            </div>
        </div>
        <div class="col-md-3" data-aos="zoom-in" data-aos-delay="200">
            <div class="team-card rounded-4 shadow-lg p-3 hover-scale">
                <img src="images/pic3.jpeg" alt="Michael Brown" class="img-fluid rounded-circle mb-3">
                <h5 class="fs-5 fw-bold">Cyrus Donyen</h5>
                <p class="fs-5">Commercial Diver (DCN Global)</p>
            </div>
        </div>
        <div class="col-md-3" data-aos="zoom-in" data-aos-delay="300">
            <div class="team-card rounded-4 shadow-lg p-3 hover-scale">
                <img src="images/pic4.jpeg" alt="Emily Davis" class="img-fluid rounded-circle mb-3">
                <h5 class="fs-5 fw-bold">Tom Kazouh</h5>
                <p class="fs-5">Environmental Specialist (DCN Global)</p>
            </div>
        </div>
    </div>
</section>

<!-- Additional CSS for hover effect -->
<style>
    .hover-scale {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .hover-scale:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }
</style>


<!-- Company Culture Section -->
<section class="container my-5 py-5" data-aos="fade-up">
  <div class="bg-primary-light p-5 rounded-4 shadow-sm">
    <h2 class="text-primary mb-4 text-center fw-bold" style="font-size: 2.5rem;">Our Work Culture</h2>
    <div class="row g-4 text-center">
      
      <div class="col-md-4" data-aos="zoom-in">
        <div class="p-4">
          <i class="bi bi-award" style="font-size: 5rem; color: #005f99;"></i>
          <h5 class="fw-bold mt-3" style="font-size: 2.25rem;">Experience-Driven</h5>
          <p style="font-size: 1.10rem;">We value experience and empower our team with meaningful responsibilities to grow and excel.</p>
        </div>
      </div>

      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="p-4">
          <i class="bi bi-people" style="font-size: 5rem; color: #005f99;"></i>
          <h5 class="fw-bold mt-3" style="font-size: 2.25rem;">Team-Oriented</h5>
          <p style="font-size: 1.10rem;">We foster collaboration both on and off the job, believing success is achieved together.</p>
        </div>
      </div>

      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="p-4">
          <i class="bi bi-lightning-charge" style="font-size: 5rem; color: #005f99;"></i>
          <h5 class="fw-bold mt-3" style="font-size: 2.25rem;">Agile & Reliable</h5>
          <p style="font-size: 1.10rem;">Small enough to stay responsive — large enough to deliver results efficiently.</p>
        </div>
      </div>

    </div>

    <!-- CTA Button -->
    <div class="text-center mt-4">
      <a href="contact.php" class="btn btn-primary btn-lg px-5 rounded-pill">
        Hire Us!
      </a>
    </div>

  </div>
</section>





<!-- WhatsApp Floating Button -->
<a href="https://wa.me/+231776260932" target="_blank" class="whatsapp-float">
    <img src="images/whatsapp.png" alt="WhatsApp" style="width:40px; height:40px;">
</a>

<!-- Footer -->
<footer>
    &copy; 2025 West Africa Diving Association. All rights reserved.
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- AOS Animation -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({ duration: 1000 });
</script>
</body>
</html>
