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
    <div class="fs-6"><strong>Contact:</strong> (+231) 886-517-084</div>
    <div>
      <a href="https://facebook.com" target="_blank" class="text-white me-3"><i class="bi bi-facebook fs-5"></i></a>
      <a href="https://instagram.com" target="_blank" class="text-white me-3"><i class="bi bi-instagram fs-5"></i></a>
      <a href="https://linkedin.com" target="_blank" class="text-white me-3"><i class="bi bi-linkedin fs-5"></i></a>
      <a href="https://wa.me/1234567890" target="_blank" class="text-white"><i class="bi bi-whatsapp fs-5"></i></a>
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


<!-- Services Cards Section -->
<section id="services" class="container my-5 py-5" data-aos="fade-up">
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

<!-- Detailed Services Section -->
<section class="container my-5 py-5" data-aos="fade-up">
  <h2 class="text-primary fw-bold display-5 text-center mb-5">Service Details</h2>

  <div class="row align-items-center mb-5">
    <div class="col-md-6" data-aos="fade-right">
      <img src="images/Hull_Inspection.png" alt="Hull Inspections" class="img-fluid rounded-4 shadow-lg">
    </div>
    <div class="col-md-6" data-aos="fade-left">
      <h3 class="text-primary fw-bold mb-3">Hull Inspections</h3>
      <p class="fs-5">
        We perform detailed in-water hull inspections to assess vessel condition, safety, and compliance. Using state-of-the-art equipment, our divers identify structural issues, corrosion, and marine growth to ensure vessels operate efficiently and safely.
      </p>
    </div>
  </div>

  <div class="row align-items-center mb-5 flex-md-row-reverse">
    <div class="col-md-6" data-aos="fade-left">
      <img src="images/in_water.png" alt="In-Water Survey" class="img-fluid rounded-4 shadow-lg">
    </div>
    <div class="col-md-6" data-aos="fade-right">
      <h3 class="text-primary fw-bold mb-3">In-Water Survey</h3>
      <p class="fs-5">
        Our professional underwater surveys are designed for oil & gas, marine, and civil engineering industries. We provide detailed assessments of submerged structures, pipelines, and underwater facilities to support safe project execution and maintenance.
      </p>
    </div>
  </div>

  <div class="row align-items-center mb-5">
    <div class="col-md-6" data-aos="fade-right">
      <img src="images/Underwater Welding.png" alt="Underwater Welding" class="img-fluid rounded-4 shadow-lg">
    </div>
    <div class="col-md-6" data-aos="fade-left">
      <h3 class="text-primary fw-bold mb-3">Underwater Welding</h3>
      <p class="fs-5">
        Our certified divers perform hyperbaric welding, both wet and dry, ensuring strong and durable repairs for marine structures. We prioritize safety and precision to guarantee lasting results under challenging underwater conditions.
      </p>
    </div>
  </div>
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
