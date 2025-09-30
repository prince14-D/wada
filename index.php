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
<style>
    body { font-family: 'Roboto', sans-serif; scroll-behavior: smooth; }
    h2, h3, h4 { font-family: 'Montserrat', sans-serif; }
    section { padding: 80px 0; }
    .navbar { background-color: #005f99; }
    .navbar-brand, .nav-link { font-weight: 600; }
    .nav-link:hover { color: #cce5ff !important; }
    .btn-primary { background: linear-gradient(90deg,#005f99,#003366); border: none; transition: 0.3s; }
    .btn-primary:hover { background: linear-gradient(90deg,#003366,#005f99); }
    .carousel-item img { height: 80vh; object-fit: cover; filter: brightness(0.6); }
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

<!-- Main Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="padding-top:1rem; padding-bottom:1rem;">
  <div class="container">
    <a class="navbar-brand fs-3 fw-bold" href="#">WADA</a> <!-- Bigger brand font -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto fs-5"> <!-- Bigger nav link font -->
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">More</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#accreditation">Accreditation</a></li>
            <li><a class="dropdown-item" href="#equipment">Equipment</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
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
      <img src="images/diving1.png" class="d-block w-100" alt="Diving 1">
      <div class="carousel-caption text-center text-white" data-aos="fade-up">
        <h1 class="display-3 fw-bold">West Africa Diving Association</h1>
        <p class="lead">Professional Diving Experiences in West Africa</p>
        <a href="#contact" class="btn btn-primary btn-lg mt-3">Contact Us</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/diving2.png" class="d-block w-100" alt="Diving 2">
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
<section id="about" class="container my-5" data-aos="fade-up">
  <div class="row align-items-center">
    <!-- Image Side -->
    <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right">
      <img src="images/logo.png" alt="WADA Team" class="img-fluid rounded shadow">
    </div>
    <!-- Text Side -->
    <div class="col-md-6" data-aos="fade-left">
      <h3 class="text-primary mb-3">About Us</h3> <!-- smaller heading -->
      <p class="fs-5">West Africa Diving Association (WADA) has been a leader in marine construction and diving services in Liberia for over <strong>20 years</strong>. Our team is trained by professional divers from Finland Divers, DCN Global LLC, Stantly Consultancy, PADI, and BAM International. We provide customized solutions for complex underwater projects while ensuring safety, quality, and environmental responsibility.</p>
      <ul class="fs-5">
        <li>Project management, commercial diving, in-water surveys, hull inspections, environmental support</li>
        <li>Worked on Tubman Bridge, Freeport of Monrovia, Monrovia Container Terminal, and multiple port clean-ups</li>
        <li>Only local company to successfully salvage a wreck <strong>seven times</strong></li>
        <li>Trusted by United States Embassy, AMP Terminals, MSG Shipping, Ocean Shipping GETMA, and National Port Authority</li>
      </ul>
      <p class="mt-3 fs-5"><strong>Contact Us:</strong> <a href="tel:+231886517084" class="text-primary">(+231) 886-517-084</a></p>
    </div>
  </div>
</section>


<!-- Services Section -->
<section id="services" class="container my-5">
    <h2 class="text-primary mb-4 text-center">Our Services</h2>
    <div class="row g-4">
        <div class="col-md-4" data-aos="zoom-in">
            <div class="card h-100">
                <img src="images/diving1.jpg" class="card-img-top" alt="Scuba Diving">
                <div class="card-body text-center">
                    <h5 class="card-title">Hull Inspections</h5>
                    <p class="card-text">Landscape underwater scene of a Black commercial diver in full scuba gear inspecting the hull of a massive cargo ship.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="card h-100">
                <img src="images/diving2.jpg" class="card-img-top" alt="Snorkeling">
                <div class="card-body text-center">
                    <h5 class="card-title">Snorkeling</h5>
                    <p class="card-text">Safe and guided snorkeling adventures for families and beginners.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="card h-100">
                <img src="images/diving3.jpg" class="card-img-top" alt="Dive Training">
                <div class="card-body text-center">
                    <h5 class="card-title">Dive Training</h5>
                    <p class="card-text">Professional courses to get certified and confident underwater.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="container my-5" data-aos="fade-up">
    <h2 class="text-primary mb-4 text-center">Our Projects</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card">
                <img src="images/tubman_bridge.jpg" class="card-img-top project-img" alt="Tubman Bridge">
                <div class="card-body">
                    <h5 class="card-title">Tubman Bridge Renovation</h5>
                    <p>Cast concrete pillars and welded underwater support structures in collaboration with Finland Divers.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="images/freeport_monrovia.jpg" class="card-img-top project-img" alt="Freeport">
                <div class="card-body">
                    <h5 class="card-title">Freeport of Monrovia</h5>
                    <p>Emergency rehabilitation under EU supervision, assisting critical port operations.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="images/container_terminal.jpg" class="card-img-top project-img" alt="Container Terminal">
                <div class="card-body">
                    <h5 class="card-title">Monrovia Container Terminal</h5>
                    <p>Concrete casting, welding anodes, and in-water survey with AMP Terminals & BAM International.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section id="team" class="container my-5" data-aos="fade-up">
    <h2 class="text-primary mb-4 text-center">Meet Our Team</h2>
    <div class="row text-center g-4">
        <div class="col-md-3">
            <img src="images/diver1.jpg" alt="Trainer 1" class="team-img mb-2">
            <h6>John Doe</h6>
            <p>Diving Instructor (PADI Certified)</p>
        </div>
        <div class="col-md-3">
            <img src="images/diver2.jpg" alt="Trainer 2" class="team-img mb-2">
            <h6>Jane Smith</h6>
            <p>Marine Engineer (BAM International)</p>
        </div>
        <div class="col-md-3">
            <img src="images/diver3.jpg" alt="Trainer 3" class="team-img mb-2">
            <h6>Michael Brown</h6>
            <p>Commercial Diver (DCN Global)</p>
        </div>
        <div class="col-md-3">
            <img src="images/diver4.jpg" alt="Trainer 4" class="team-img mb-2">
            <h6>Emily Davis</h6>
            <p>Environmental Specialist</p>
        </div>
    </div>
</section>

<!-- Accreditation Section -->
<section id="accreditation" class="container my-5" data-aos="fade-up">
    <h2 class="text-primary mb-4 text-center">Accreditation</h2>
    <p class="text-center">Our diving programs are accredited by internationally recognized organizations ensuring safety, professionalism, and quality training. Partners include:</p>
    <ul class="text-center list-unstyled">
        <li>Finland Divers</li>
        <li>DCN Global LLC</li>
        <li>Stantly Consultancy</li>
        <li>PADI</li>
        <li>BAM International</li>
    </ul>
</section>

<!-- Equipment Section -->
<section id="equipment" class="container my-5 bg-primary-light p-5" data-aos="fade-up">
    <h2 class="text-primary mb-4 text-center">Dive Equipment</h2>
    <p class="text-center">State-of-the-art diving gear including wetsuits, tanks, regulators, masks, and fins to ensure safety and comfort for every dive experience.</p>
</section>

<!-- Contact Section -->
<section id="contact" class="container my-5" data-aos="fade-up">
    <h2 class="text-primary mb-4 text-center">Contact Us</h2>
    <form method="post" class="mx-auto" style="max-width:600px;">
        <input type="text" name="name" placeholder="Your Name" class="form-control mb-3" required>
        <input type="email" name="email" placeholder="Your Email" class="form-control mb-3" required>
        <textarea name="message" placeholder="Your Message" class="form-control mb-3" required></textarea>
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
        </div>
    </form>
</section>

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
