<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>WADA Team</title>
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
    .team-img { width: 100%; height: 300px; object-fit: cover; border-radius: 15px; }
    .whatsapp-float { position: fixed; bottom: 20px; right: 20px; z-index: 1000; }

    /* Hero Section */
    .hero-team {
      background: url('./images/Hull_Inspection.png') center/cover no-repeat;
      height: 80vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: white;
      position: relative;
        margin-top: 20px;
    }
    .hero-team::before {
      content: "";
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0, 0, 0, 0.5);
    }
    .hero-team-content {
      position: relative;
      z-index: 1;
    }

    /* Horizontal Scroll Cards */
    .team-scroll { overflow-x: auto; display: flex; gap: 1rem; padding-bottom: 1rem; }
    .team-scroll::-webkit-scrollbar { height: 8px; }
    .team-scroll::-webkit-scrollbar-thumb { background: #005f99; border-radius: 4px; }
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
        <li class="nav-item"><a class="nav-link" href="projects.php">Projects</a></li>
        <li class="nav-item"><a class="nav-link active" href="team.php">Team</a></li>
        <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">More</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="accreditation.php">Accreditation</a></li>
            <li><a class="dropdown-item" href="equipment.php">Equipment</a></li>
            <li><a class="dropdown-item" href="#">Upload</a></li>
            <li><a class="dropdown-item" href="partners.php">Our Partner</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="hero-team" data-aos="fade-up">
  <div class="hero-team-content">
    <h1 class="display-3 fw-bold">Meet Our Team</h1>
    <p class="fs-5">Dedicated professionals driving excellence in diving and underwater operations.</p>
  </div>
</section>

<!-- Team Members Section -->
<section class="container my-5 py-5" data-aos="fade-up">
    <h2 class="text-primary mb-5 text-center display-5 fw-bold">Our Experts</h2>
    <div class="row g-4">
        <div class="col-md-4" data-aos="zoom-in">
            <div class="card shadow-lg border-0 rounded-4 hover-scale">
                <img src="images/Ali Wleh Sackor.jpeg" alt="John Doe" class="team-img">
                <div class="card-body text-center">
                    <h5 class="card-title fs-5 fw-bold">John Doe</h5>
                    <p class="card-text fs-6">Chief Executive Officer</p>
                    <p class="card-text fs-7 text-muted">20 years of maritime expertise leading WADA to innovate in diving solutions worldwide.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="card shadow-lg border-0 rounded-4 hover-scale">
                <img src="images/pic2.jpeg" alt="Jane Smith" class="team-img">
                <div class="card-body text-center">
                    <h5 class="card-title fs-5 fw-bold">Jane Smith</h5>
                    <p class="card-text fs-6">Operations Manager</p>
                    <p class="card-text fs-7 text-muted">Ensures safety, efficiency, and timely delivery for every project.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="card shadow-lg border-0 rounded-4 hover-scale">
                <img src="images/pic3.jpeg" alt="Michael Brown" class="team-img">
                <div class="card-body text-center">
                    <h5 class="card-title fs-5 fw-bold">Michael Brown</h5>
                    <p class="card-text fs-6">Lead Diving Specialist</p>
                    <p class="card-text fs-7 text-muted">Expert diver trained in underwater inspections and welding.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team Members Section -->
<section class="container my-5 py-5" data-aos="fade-up">
    <div class="row g-4">
        <div class="col-md-4" data-aos="zoom-in">
            <div class="card shadow-lg border-0 rounded-4 hover-scale">
                <img src="images/pic4.jpeg" alt="John Doe" class="team-img">
                <div class="card-body text-center">
                    <h5 class="card-title fs-5 fw-bold">John Doe</h5>
                    <p class="card-text fs-6">Chief Executive Officer</p>
                    <p class="card-text fs-7 text-muted">20 years of maritime expertise leading WADA to innovate in diving solutions worldwide.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="card shadow-lg border-0 rounded-4 hover-scale">
                <img src="images/pic6.jpeg" alt="Jane Smith" class="team-img">
                <div class="card-body text-center">
                    <h5 class="card-title fs-5 fw-bold">Jane Smith</h5>
                    <p class="card-text fs-6">Operations Manager</p>
                    <p class="card-text fs-7 text-muted">Ensures safety, efficiency, and timely delivery for every project.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="card shadow-lg border-0 rounded-4 hover-scale">
                <img src="images/pic7.jpeg" alt="Michael Brown" class="team-img">
                <div class="card-body text-center">
                    <h5 class="card-title fs-5 fw-bold">Michael Brown</h5>
                    <p class="card-text fs-6">Lead Diving Specialist</p>
                    <p class="card-text fs-7 text-muted">Expert diver trained in underwater inspections and welding.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Members Section -->
<section class="container my-5 py-5" data-aos="fade-up">
    <div class="row g-4">
        <div class="col-md-4" data-aos="zoom-in">
            <div class="card shadow-lg border-0 rounded-4 hover-scale">
                <img src="images/pic8.jpeg" alt="John Doe" class="team-img">
                <div class="card-body text-center">
                    <h5 class="card-title fs-5 fw-bold">John Doe</h5>
                    <p class="card-text fs-6">Chief Executive Officer</p>
                    <p class="card-text fs-7 text-muted">20 years of maritime expertise leading WADA to innovate in diving solutions worldwide.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="card shadow-lg border-0 rounded-4 hover-scale">
                <img src="images/pic10.jpeg" alt="Jane Smith" class="team-img">
                <div class="card-body text-center">
                    <h5 class="card-title fs-5 fw-bold">Jane Smith</h5>
                    <p class="card-text fs-6">Operations Manager</p>
                    <p class="card-text fs-7 text-muted">Ensures safety, efficiency, and timely delivery for every project.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="card shadow-lg border-0 rounded-4 hover-scale">
                <img src="images/pic3.jpeg" alt="Michael Brown" class="team-img">
                <div class="card-body text-center">
                    <h5 class="card-title fs-5 fw-bold">Michael Brown</h5>
                    <p class="card-text fs-6">Lead Diving Specialist</p>
                    <p class="card-text fs-7 text-muted">Expert diver trained in underwater inspections and welding.</p>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Team Philosophy Section -->
<section class="container my-5 py-5 bg-primary-light rounded-4" data-aos="fade-up">
    <div class="row justify-content-center text-center">
        <div class="col-md-8">
            <h3 class="text-primary fw-bold mb-3">Our Team Philosophy</h3>
            <p class="fs-5">WADA values its people. We provide our employees with challenging projects, the responsibility and resources they need, and foster a culture of teamwork. Small enough to be responsive and large enough to be effective, our team drives excellence in every mission.</p>
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
