

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>WADA Blog & Projects</title>
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

    /* Hero Section */
    .hero-blog {
      background: url('./images/blog-hero.jpg') center/cover no-repeat;
      height: 60vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: white;
      position: relative;
    }
    .hero-blog::before {
      content: "";
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0, 0, 0, 0.5);
    }
    .hero-blog-content { position: relative; z-index: 1; }

    /* Blog Cards */
    .blog-card-img { width: 100%; height: 250px; object-fit: cover; border-radius: 15px; }
    .blog-scroll { overflow-x: auto; display: flex; gap: 1rem; padding-bottom: 1rem; }
    .blog-scroll::-webkit-scrollbar { height: 8px; }
    .blog-scroll::-webkit-scrollbar-thumb { background: #005f99; border-radius: 4px; }
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
        <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="projects.php">Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="team.php">Team</a></li>
        <li class="nav-item"><a class="nav-link active" href="blog.php">Blog</a></li>
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

<!-- Hero Section -->
<section class="hero-blog" data-aos="fade-up">
  <div class="hero-blog-content">
    <h1 class="display-3 fw-bold">Latest Projects & Updates</h1>
    <p class="fs-5">Check out our most recent diving projects and underwater missions.</p>
  </div>
</section>

<!-- Blog Cards Section -->
<section class="container my-5 py-5" data-aos="fade-up">
  <h2 class="text-primary mb-5 text-center display-5 fw-bold">Project Gallery</h2>
  <div class="row g-4">

    <!-- Blog Card 1 -->
    <div class="col-md-4" data-aos="zoom-in">
      <div class="card shadow-lg border-0 rounded-4 hover-scale">
        <img src="images/project1.jpg" alt="Project 1" class="blog-card-img">
        <div class="card-body">
          <h5 class="card-title text-primary fw-bold">Tubman Bridge Repair</h5>
          <p class="card-text fs-7 text-muted">Underwater concrete casting and welding for bridge stability and safety.</p>
        </div>
      </div>
    </div>

    <!-- Blog Card 2 -->
    <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
      <div class="card shadow-lg border-0 rounded-4 hover-scale">
        <img src="images/project2.jpg" alt="Project 2" class="blog-card-img">
        <div class="card-body">
          <h5 class="card-title text-primary fw-bold">Harbor Hull Inspection</h5>
          <p class="card-text fs-7 text-muted">Comprehensive inspection of commercial vessels ensuring maritime safety.</p>
        </div>
      </div>
    </div>

    <!-- Blog Card 3 -->
    <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
      <div class="card shadow-lg border-0 rounded-4 hover-scale">
        <img src="images/project3.jpg" alt="Project 3" class="blog-card-img">
        <div class="card-body">
          <h5 class="card-title text-primary fw-bold">Port Cleaning Operations</h5>
          <p class="card-text fs-7 text-muted">Collaboration with National Port Authority to clean key port areas efficiently.</p>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Horizontal Scroll Latest Projects -->
<section class="container my-5 py-5" data-aos="fade-up">
  <h2 class="text-primary mb-5 text-center display-5 fw-bold">More Projects</h2>
  <div class="blog-scroll">
    <div class="card flex-shrink-0 shadow-lg border-0 rounded-4 hover-scale" style="width: 220px;">
      <img src="images/project4.jpg" alt="Project 4" class="blog-card-img">
      <div class="card-body text-center">
        <h5 class="card-title fs-6 fw-bold">Offshore Pipeline Survey</h5>
      </div>
    </div>
    <div class="card flex-shrink-0 shadow-lg border-0 rounded-4 hover-scale" style="width: 220px;">
      <img src="images/project5.jpg" alt="Project 5" class="blog-card-img">
      <div class="card-body text-center">
        <h5 class="card-title fs-6 fw-bold">Submarine Dock Maintenance</h5>
      </div>
    </div>
    <div class="card flex-shrink-0 shadow-lg border-0 rounded-4 hover-scale" style="width: 220px;">
      <img src="images/project6.jpg" alt="Project 6" class="blog-card-img">
      <div class="card-body text-center">
        <h5 class="card-title fs-6 fw-bold">Beach Restoration Work</h5>
      </div>
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
