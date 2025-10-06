<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>WADA Projects</title>
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
  background: url('./images/diving2.png') center/cover no-repeat;
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
  background: rgba(0, 0, 0, 0.5); /* overlay for better text visibility */
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
    <div class="fs-6"><strong>Contact:</strong> (+231)77-626-0932</div>
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
        <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
        <li class="nav-item"><a class="nav-link active" href="projects.php">Projects</a></li>
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



<!-- Banner Section -->
<section class="banner">
  <div class="banner-content" data-aos="fade-up">
    <h1 class="display-3 fw-bold">Our Completed Projects</h1>
    <p class="lead">Built with Precision, Safety & Integrity</p>
    <a href="services.php" class="btn btn-primary btn-lg mt-3">View Services</a>
  </div>
</section>


<!-- Project Experience Section -->
<section class="container my-5 py-5" data-aos="fade-up">
  <h2 class="text-primary text-center fw-bold display-5 mb-5">Our Proven Track Record</h2>

  <div class="row g-4">

    <!-- Project Card 1 -->
    <div class="col-md-4" data-aos="zoom-in">
      <div class="card h-100 shadow-lg border-0 rounded-4 hover-scale">
        <div class="card-body">
          <h5 class="fw-bold text-primary">Tubman Bridge Rehabilitation</h5>
          <p class="fs-6">
            In collaboration with <strong>Finland Divers</strong>, WADA cast concrete pillars and welded underwater support structures during the Tubman Bridge renovation project.
          </p>
        </div>
      </div>
    </div>

    <!-- Project Card 2 -->
    <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
      <div class="card h-100 shadow-lg border-0 rounded-4 hover-scale">
        <div class="card-body">
          <h5 class="fw-bold text-primary">ECOMOG Gunboats Hull Inspection</h5>
          <p class="fs-6">
            Contracted by <strong>PAE</strong> to photograph and inspect the hulls of all ECOMOG gunboats, ensuring mission readiness and operational safety.
          </p>
        </div>
      </div>
    </div>

    <!-- Project Card 3 -->
    <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
      <div class="card h-100 shadow-lg border-0 rounded-4 hover-scale">
        <div class="card-body">
          <h5 class="fw-bold text-primary">Port Cleaning Operations</h5>
          <p class="fs-6">
            In collaboration with <strong>National Port Authority</strong>, WADA cleaned the ports of Buchanan, Sinoe, and Harper for MSG Shipping, Ocean Shipping, GETMA & OTC.
          </p>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Projects Timeline Section -->
<section class="container my-5 py-5" data-aos="fade-up">
    <h2 class="text-primary mb-5 text-center display-5 fw-bold">Featured Projects Timeline</h2>

    <div class="timeline">

        <!-- Timeline Item 1 -->
        <div class="timeline-item left" data-aos="fade-right">
            <div class="timeline-content shadow-lg rounded-4 p-4">
                <img src="images/Hull_Inspection.png" class="img-fluid rounded-3 mb-3" alt="Harbor Hull Inspection">
                <h5 class="fw-bold text-primary">Harbor Hull Inspection</h5>
                <p>Comprehensive inspection of commercial vessels to ensure safety and compliance with maritime standards.</p>
            </div>
        </div>

        <!-- Timeline Item 2 -->
        <div class="timeline-item right" data-aos="fade-left">
            <div class="timeline-content shadow-lg rounded-4 p-4">
                <img src="images/in_water.png" class="img-fluid rounded-3 mb-3" alt="Offshore Pipeline Survey">
                <h5 class="fw-bold text-primary">Offshore Pipeline Survey</h5>
                <p>In-water surveys of underwater pipelines to ensure integrity and prevent environmental hazards.</p>
            </div>
        </div>

        <!-- Timeline Item 3 -->
        <div class="timeline-item left" data-aos="fade-right">
            <div class="timeline-content shadow-lg rounded-4 p-4">
                <img src="images/shipnew.jpeg" class="img-fluid rounded-3 mb-3" alt="Submarine Dock Maintenance">
                <h5 class="fw-bold text-primary">Submarine Dock Maintenance</h5>
                <p>Expert underwater maintenance and welding work for submarine and naval dock infrastructure.</p>
            </div>
        </div>

    </div>
</section>

<!-- Timeline CSS -->
<style>
.timeline {
  position: relative;
  padding: 2rem 0;
}

.timeline::before {
  content: "";
  position: absolute;
  top: 0;
  left: 50%;
  width: 4px;
  height: 100%;
  background: #005f99;
  transform: translateX(-50%);
}

.timeline-item {
  position: relative;
  width: 50%;
  padding: 1rem 2rem;
}

.timeline-item.left { left: 0; text-align: left; }
.timeline-item.right { left: 50%; text-align: left; }

.timeline-content {
  background: white;
  border-left: 5px solid #005f99;
}

@media (max-width: 768px) {
  .timeline::before { left: 8px; }
  .timeline-item { width: 100%; padding-left: 2rem; }
  .timeline-item.right { left: 0; }
}
</style>



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
