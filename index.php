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

<link rel="icon" href="images/logo.png" type="image/png">

<style>
    body { font-family: 'Roboto', sans-serif; scroll-behavior: smooth; }
    h2, h3, h4 { font-family: 'Montserrat', sans-serif; }
    section { padding: 80px 0; }
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
      <strong>Contact:</strong> (+231) 886-517-084</a>
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
      <a href="https://wa.me/1234567890" target="_blank" class="text-white">
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
        <li class="nav-item"><a class="nav-link" href="projects.html">Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="team.html">Team</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">More</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="accreditation.html">Accreditation</a></li>
            <li><a class="dropdown-item" href="equipment.html">Equipment</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
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
        <a href="#contact" class="btn btn-primary btn-lg mt-3">Contact Us</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./images/diving2.png" class="d-block w-100" alt="Diving 2">
      <div class="carousel-caption text-center text-white" data-aos="fade-up">
        <h1 class="display-3 fw-bold">Explore the Ocean</h1>
        <p class="lead">Safe and guided diving adventures for all levels</p>
        <a href="#contact" class="btn btn-primary btn-lg mt-3">Get Started</a>
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
      <img src="images/logo.png" alt="WADA Team" class="img-fluid rounded shadow-lg">
    </div>
    <!-- Text Side -->
    <div class="col-md-6" data-aos="fade-left">
      <h2 class="text-primary mb-4 display-5 fw-bold">About Us</h2> <!-- bigger heading -->
      <p class="fs-5">West Africa Diving Association (WADA) has been a leader in marine construction and diving services in Liberia for over <strong>20 years</strong>. Our team is trained by professional divers from Finland Divers, DCN Global LLC, Stantly Consultancy, PADI, and BAM International. We provide customized solutions for complex underwater projects while ensuring safety, quality, and environmental responsibility.</p>
      <ul class="fs-5">
        <li>Project management, commercial diving, in-water surveys, hull inspections, environmental support</li>
        <li>Worked on Tubman Bridge, Freeport of Monrovia, Monrovia Container Terminal, and multiple port clean-ups</li>
        <li>Only local company to successfully salvage a wreck <strong>seven times</strong></li>
        <li>Trusted by United States Embassy, AMP Terminals, MSG Shipping, Ocean Shipping GETMA, and National Port Authority</li>
      </ul>
      <p class="mt-4 fs-5"><strong>Contact Us:</strong> <a href="tel:+231886517084" class="text-primary fw-bold">(+231) 886-517-084</a></p>
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
                    <h5 class="card-title fs-5 fw-bold">Hull Inspections</h5>
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
                <img src="images/placeholder.png" alt="John Doe" class="img-fluid rounded-circle mb-3">
                <h5 class="fs-5 fw-bold">John Doe</h5>
                <p class="fs-5">Diving Instructor (PADI Certified)</p>
            </div>
        </div>
        <div class="col-md-3" data-aos="zoom-in" data-aos-delay="100">
            <div class="team-card rounded-4 shadow-lg p-3 hover-scale">
                <img src="images/placeholder.png" alt="Jane Smith" class="img-fluid rounded-circle mb-3">
                <h5 class="fs-5 fw-bold">Jane Smith</h5>
                <p class="fs-5">Marine Engineer (BAM International)</p>
            </div>
        </div>
        <div class="col-md-3" data-aos="zoom-in" data-aos-delay="200">
            <div class="team-card rounded-4 shadow-lg p-3 hover-scale">
                <img src="images/placeholder.png" alt="Michael Brown" class="img-fluid rounded-circle mb-3">
                <h5 class="fs-5 fw-bold">Michael Brown</h5>
                <p class="fs-5">Commercial Diver (DCN Global)</p>
            </div>
        </div>
        <div class="col-md-3" data-aos="zoom-in" data-aos-delay="300">
            <div class="team-card rounded-4 shadow-lg p-3 hover-scale">
                <img src="images/placeholder.png" alt="Emily Davis" class="img-fluid rounded-circle mb-3">
                <h5 class="fs-5 fw-bold">Emily Davis</h5>
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

<!-- Accreditation Section -->
<section id="accreditation" class="container my-5 py-5" style="background-color: #f8f9fa; border-radius: 15px;" data-aos="fade-up">
    <h2 class="text-primary mb-5 text-center display-5 fw-bold">Accreditations</h2>
    <p class="text-center fs-5 mb-4">Our diving programs are accredited by internationally recognized organizations ensuring safety, professionalism, and quality training.</p>
    
    <div class="row justify-content-center g-4">
        <!-- Accreditation 1 -->
        <div class="col-md-4 text-center" data-aos="zoom-in">
            <div class="card border-0 shadow-lg rounded-4 p-3 hover-scale">
                <img src="images/certificate.png" alt="NSF International" class="img-fluid mb-3" style="max-height:500px;">
                <h5 class="fs-5 fw-bold">NSF International Strategic Registrations (International)</h5>
            </div>
        </div>
        <!-- Accreditation 2 -->
        <div class="col-md-4 text-center" data-aos="zoom-in" data-aos-delay="100">
            <div class="card border-0 shadow-lg rounded-4 p-3 hover-scale">
                <img src="images/certific.png" alt="ADCI" class="img-fluid mb-3" style="max-height:500px;">
                <h5 class="fs-5 fw-bold">Association of Diving Contractors International</h5>
            </div>
        </div>
    </div>
</section>

<!-- Additional CSS for hover effect (if not already included) -->
<style>
    .hover-scale {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .hover-scale:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }
</style>


<!-- Dive Equipment Section -->
<section id="equipment" class="container my-5 py-5" style="background-color: #f8f9fa; border-radius: 15px;" data-aos="fade-up">
    <h2 class="text-primary mb-5 text-center display-5 fw-bold">Dive Equipment</h2>
    
    <!-- Intro text -->
    <p class="text-center fs-5 mb-5">
        Our dive gear includes hot water suits, dry suits, hard hat mounted lighting, and specialty equipment for task-specific jobs such as diving in hazardous materials, potable water, or black water. 
        All equipment is portable and can be shipped anywhere at any time. All gear is maintained to operate efficiently and safely for our crews and third parties. For projects requiring specialty gear or qualified crew, contact us to see how we can assist.
    </p>

    <!-- Equipment Cards -->
    <div class="row g-4 justify-content-center">
        <!-- Equipment 1 -->
        <div class="col-md-3 text-center" data-aos="zoom-in">
            <div class="card border-0 shadow-lg rounded-4 p-3 hover-scale">
                <img src="images/Hot Water Suits.png" alt="Hot Water Suit" class="img-fluid mb-3" style="max-height:200px;">
                <h5 class="fs-5 fw-bold">Hot Water Suits</h5>
            </div>
        </div>
        <!-- Equipment 2 -->
        <div class="col-md-3 text-center" data-aos="zoom-in" data-aos-delay="100">
            <div class="card border-0 shadow-lg rounded-4 p-3 hover-scale">
                <img src="images/Dry Suits.jpg" alt="Dry Suit" class="img-fluid mb-3" style="max-height:200px;">
                <h5 class="fs-5 fw-bold">Dry Suits</h5>
            </div>
        </div>
        <!-- Equipment 3 -->
        <div class="col-md-3 text-center" data-aos="zoom-in" data-aos-delay="200">
            <div class="card border-0 shadow-lg rounded-4 p-3 hover-scale">
                <img src="images/Hard Hat Lighting.jpg" alt="Hard Hat Lighting" class="img-fluid mb-3" style="max-height:200px;">
                <h5 class="fs-5 fw-bold">Hard Hat Lighting</h5>
            </div>
        </div>
        <!-- Equipment 4 -->
        <div class="col-md-3 text-center" data-aos="zoom-in" data-aos-delay="300">
            <div class="card border-0 shadow-lg rounded-4 p-3 hover-scale">
                <img src="images/Specialty Equipment.png" alt="Specialty Gear" class="img-fluid mb-3" style="max-height:200px;">
                <h5 class="fs-5 fw-bold">Specialty Equipment</h5>
            </div>
        </div>
    </div>
</section>

<!-- Additional CSS (if not already included) -->
<style>
.hover-scale {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.hover-scale:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
}
</style>




<!-- WhatsApp Floating Button -->
<a href="https://wa.me/1234567890" target="_blank" class="whatsapp-float">
    <img src="images/whatsapp.png" alt="WhatsApp" style="width:60px; height:60px;">
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
