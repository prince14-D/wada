<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>WADA Services</title>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- AOS CSS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

<link rel="icon" href="images/WADA_LOGO.jpeg" type="image/png">
<style>
    body { font-family: 'Roboto', sans-serif; scroll-behavior: smooth; }
    h2, h3, h4 { font-family: 'Montserrat', sans-serif; }
    section { padding: 80px 0; }
    .navbar { background-color: #005f99; }
    .navbar-brand, .nav-link { font-weight: 600; }
    .nav-link:hover { color: #cce5ff !important; }
    .btn-primary { background: linear-gradient(90deg,#005f99,#003366); border: none; transition: 0.3s; }
    .btn-primary:hover { background: linear-gradient(90deg,#003366,#005f99); }
    .card { border-radius: 15px; transition: transform 0.3s, box-shadow 0.3s; }
    .card:hover { transform: translateY(-10px); box-shadow: 0 10px 25px rgba(0,0,0,0.2); }
    .bg-primary-light { background-color: rgba(0,95,153,0.1); border-radius: 15px; }
    footer { background-color: #003366; color: white; text-align: center; padding: 30px 0; }
    .hover-scale { transition: transform 0.3s ease, box-shadow 0.3s ease; }
    .hover-scale:hover { transform: translateY(-10px); box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2); }
    .whatsapp-float { position: fixed; bottom: 20px; right: 20px; z-index: 1000; }

    .banner {
  background: url('images/diving2.png') center/cover no-repeat;
  height: 80vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  color: white;
  position: relative;
  margin-top: 20px;
}

.banner::before {
  content: "";
  position: absolute;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background: rgba(0, 0, 0, 0.5); /* Dark overlay for readability */
}

.banner-content {
  position: relative;
  z-index: 1;
}

</style>
</head>
<body>

<!-- Top Header -->
<div class="bg-primary text-white py-2">
  <div class="container d-flex justify-content-between align-items-center">
    <div class="fs-6"><strong>Contact:</strong> (+231)886-517-084</div>
    <div>
      <a href="https://facebook.com" target="_blank" class="text-white me-3"><i class="bi bi-facebook fs-5"></i></a>
      <a href="https://instagram.com" target="_blank" class="text-white me-3"><i class="bi bi-instagram fs-5"></i></a>
      <a href="https://linkedin.com" target="_blank" class="text-white me-3"><i class="bi bi-linkedin fs-5"></i></a>
      <a href="https://wa.me/+231776260932" target="_blank" class="text-white"><i class="bi bi-whatsapp fs-5"></i></a>
    </div>
  </div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top py-3">
  <div class="container">
    <a class="navbar-brand fs-3 fw-bold" href="index.php">WADA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto fs-5">
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link active" href="services.php">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="projects.php">Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="team.php">Team</a></li>
        <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">More</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="accreditation.php">Accreditation</a></li>
            <li><a class="dropdown-item" href="equipment.php">Equipment</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Banner Section -->
<section class="banner">
  <div class="banner-content" data-aos="fade-up">
    <h1 class="display-3 fw-bold">Our Professional Marine & Diving Services</h1>
    <p class="lead">Delivering Safe, Reliable, and Certified Underwater Solutions Across West Africa</p>
    <a href="contact.php" class="btn btn-primary btn-lg mt-3">Request a Service</a>
  </div>
</section>


<<!-- Services Cards Section -->
<section id="services" class="container my-5 py-5" data-aos="fade-up">
  <h2 class="text-primary mb-5 text-center display-5 fw-bold">Our Services</h2>
  <div class="row g-4">

    <!-- Service 1 -->
    <div class="col-md-4" data-aos="zoom-in">
      <div class="card h-100 shadow-lg border-0 rounded-4 hover-scale">
        <div class="position-relative">
          <img src="images/Hull_Inspection.png" class="card-img-top rounded-top-4" alt="Hull Inspections">
          <i class="bi bi-ship-fill position-absolute top-0 start-0 m-3 text-primary fs-2 bg-white p-2 rounded-circle shadow"></i>
        </div>
        <div class="card-body text-center">
          <h5 class="card-title fs-4 fw-bold">Hull Inspections & Cleaning</h5>
          <p class="card-text fs-6">Detailed in-water inspections to assess vessel condition, safety, and compliance.</p>
        </div>
      </div>
    </div>

    <!-- Service 2 -->
    <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
      <div class="card h-100 shadow-lg border-0 rounded-4 hover-scale">
        <div class="position-relative">
          <img src="images/in_water.png" class="card-img-top rounded-top-4" alt="In-Water Survey">
          <i class="bi bi-droplet-fill position-absolute top-0 start-0 m-3 text-primary fs-2 bg-white p-2 rounded-circle shadow"></i>
        </div>
        <div class="card-body text-center">
          <h5 class="card-title fs-4 fw-bold">In-Water Survey</h5>
          <p class="card-text fs-6">Professional underwater surveys for oil & gas, marine, and civil engineering industries.</p>
        </div>
      </div>
    </div>

    <!-- Service 3 -->
    <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
      <div class="card h-100 shadow-lg border-0 rounded-4 hover-scale">
        <div class="position-relative">
          <img src="images/Underwater Welding.png" class="card-img-top rounded-top-4" alt="Underwater Welding">
          <i class="bi bi-tools position-absolute top-0 start-0 m-3 text-primary fs-2 bg-white p-2 rounded-circle shadow"></i>
        </div>
        <div class="card-body text-center">
          <h5 class="card-title fs-4 fw-bold">Underwater Welding</h5>
          <p class="card-text fs-6">Certified hyperbaric welding (wet & dry), ensuring durable repairs for marine structures.</p>
        </div>
      </div>
    </div>

    <!-- Service 4 -->
    <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
      <div class="card h-100 shadow-lg border-0 rounded-4 hover-scale">
        <div class="position-relative">
          <img src="images/ship_maintence.jpeg" class="card-img-top rounded-top-4" alt="Ship Maintenance">
          <i class="bi bi-gear-wide-connected position-absolute top-0 start-0 m-3 text-primary fs-2 bg-white p-2 rounded-circle shadow"></i>
        </div>
        <div class="card-body text-center">
          <h5 class="card-title fs-4 fw-bold">Ship Maintenance</h5>
          <p class="card-text fs-6">Comprehensive ship repair & maintenance including cleaning, painting, and equipment servicing.</p>
        </div>
      </div>
    </div>

    <!-- Service 5 -->
    <div class="col-md-4" data-aos="zoom-in" data-aos-delay="400">
      <div class="card h-100 shadow-lg border-0 rounded-4 hover-scale">
        <div class="position-relative">
          <img src="images/CCTV INSPECTION.jpeg" class="card-img-top rounded-top-4" alt="CCTV Inspection">
          <i class="bi bi-camera-video-fill position-absolute top-0 start-0 m-3 text-primary fs-2 bg-white p-2 rounded-circle shadow"></i>
        </div>
        <div class="card-body text-center">
          <h5 class="card-title fs-4 fw-bold">CCTV Inspections</h5>
          <p class="card-text fs-6">High-resolution underwater video inspections for precise structural assessments.</p>
        </div>
      </div>
    </div>

    <!-- Service 6 -->
    <div class="col-md-4" data-aos="zoom-in" data-aos-delay="500">
      <div class="card h-100 shadow-lg border-0 rounded-4 hover-scale">
        <div class="position-relative">
          <img src="images/Cheatsea.jpeg" class="card-img-top rounded-top-4" alt="Sea Chest Services">
          <i class="bi bi-life-preserver position-absolute top-0 start-0 m-3 text-primary fs-2 bg-white p-2 rounded-circle shadow"></i>
        </div>
        <div class="card-body text-center">
          <h5 class="card-title fs-4 fw-bold">Sea Chest Services</h5>
          <p class="card-text fs-6">Cleaning, inspection, and maintenance of sea chests to ensure optimal ship performance.</p>
        </div>
      </div>
    </div>

  </div>
</section>


<!-- Health & Safety Section -->
<section id="health-safety" class="container my-5 py-5" data-aos="fade-up">
  <h2 class="text-primary text-center fw-bold display-5 mb-4">Health &amp; Safety Commitment</h2>
  <p class="text-center fs-5 mb-5">
    At WADA, the safety of our team and clients is our highest priority. Through strict protocols and collaborative programs, we ensure every operation is conducted with zero compromise on safety.
  </p>

  <div class="row g-4">
    <!-- Safety Philosophy -->
    <div class="col-md-6" data-aos="fade-right">
      <div class="p-4 shadow-lg rounded-4 bg-light h-100">
        <h4 class="text-primary fw-bold"><i class="bi bi-shield-check me-2"></i> Safety Philosophy</h4>
        <p class="fs-5">
          Our safety philosophy emphasizes teamwork and collaboration with our clients to create the safest work environment possible.  
          Through our <strong>TEAM Program (Together Everyone Achieves More)</strong>, we encourage active participation to improve safety on all current and future projects.
        </p>
      </div>
    </div>

    <!-- Safety Practices -->
    <div class="col-md-6" data-aos="fade-left">
      <div class="p-4 shadow-lg rounded-4 bg-light h-100">
        <h4 class="text-primary fw-bold"><i class="bi bi-clipboard-check me-2"></i> Safety Practices</h4>
        <ul class="fs-5">
          <li>Company-wide employee training & proactive dive safety procedures</li>
          <li>Daily safety meetings & Job Hazard Analysis (JHA)</li>
          <li>Dedicated Safety Committees & Trend Tracking</li>
          <li>Job Safety Kickoffs & Frequent Site Safety Audits</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Accreditation & Certifications Section -->
<section class="container my-5 py-5" data-aos="fade-up">
  <div class="text-center mb-5">
    <h2 class="text-primary display-6 fw-bold" style="font-family: 'Montserrat', sans-serif;">Accreditations & Certifications</h2>
    <p class="fs-5" style="font-family: 'Roboto', sans-serif;">Recognized and trusted by international and national maritime authorities.</p>
  </div>

  <div class="row justify-content-center g-4">

    <div class="col-md-3 col-6 text-center" data-aos="zoom-in">
      <div class="p-4 bg-primary-light rounded-4 shadow-sm">
        <i class="bi bi-patch-check fs-1 text-primary"></i>
        <h5 class="mt-3 fw-bold" style="font-family: 'Montserrat', sans-serif;">PADI Certified</h5>
        <p class="fs-6" style="font-family: 'Roboto', sans-serif;">Professional Association of Diving Instructors</p>
      </div>
    </div>

    <div class="col-md-3 col-6 text-center" data-aos="zoom-in" data-aos-delay="100">
      <div class="p-4 bg-primary-light rounded-4 shadow-sm">
        <i class="bi bi-shield-lock fs-1 text-primary"></i>
        <h5 class="mt-3 fw-bold" style="font-family: 'Montserrat', sans-serif;">IMCA Compliant</h5>
        <p class="fs-6" style="font-family: 'Roboto', sans-serif;">International Marine Contractors Association Standards</p>
      </div>
    </div>

    <div class="col-md-3 col-6 text-center" data-aos="zoom-in" data-aos-delay="200">
      <div class="p-4 bg-primary-light rounded-4 shadow-sm">
        <i class="bi bi-award fs-1 text-primary"></i>
        <h5 class="mt-3 fw-bold" style="font-family: 'Montserrat', sans-serif;">ISO Safety Trained</h5>
        <p class="fs-6" style="font-family: 'Roboto', sans-serif;">Occupational Health & Safety Standards</p>
      </div>
    </div>

    <div class="col-md-3 col-6 text-center" data-aos="zoom-in" data-aos-delay="300">
      <div class="p-4 bg-primary-light rounded-4 shadow-sm">
        <i class="bi bi-gear-wide-connected fs-1 text-primary"></i>
        <h5 class="mt-3 fw-bold" style="font-family: 'Montserrat', sans-serif;">DCN Global Trained</h5>
        <p class="fs-6" style="font-family: 'Roboto', sans-serif;">Advanced Commercial Diving Certification</p>
      </div>
    </div>

  </div>
</section>



<!-- WhatsApp Floating Button -->
<a href="https://wa.me/+231776260932" target="_blank" class="whatsapp-float">
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
