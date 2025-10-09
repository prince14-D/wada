

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

    /* Hero Section */
    .hero-blog {
      background: url('./images/in_water.png') center/cover no-repeat;
      height: 80vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: white;
      position: relative;
        margin-top: 20px;
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
    .blog-card-img { width: 100%; height: 300px; object-fit: cover; border-radius: 15px; }
    .blog-scroll { overflow-x: auto; display: flex; gap: 1rem; padding-bottom: 1rem; }
    .blog-scroll::-webkit-scrollbar { height: 8px; }
    .blog-scroll::-webkit-scrollbar-thumb { background: #005f99; border-radius: 4px; }
</style>
</head>

<!-- Load Facebook SDK -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" 
  src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v17.0" nonce="FBSDK"></script>
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
        <li class="nav-item"><a class="nav-link" href="team.php">Team</a></li>
        <li class="nav-item"><a class="nav-link active" href="blog.php">Blog</a></li>
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
        <img src="images/tuman.jpeg" alt="Project 1" class="blog-card-img">
        <div class="card-body">
          <h5 class="card-title text-primary fw-bold">Tubman Bridge Repair</h5>
          <p class="card-text fs-7 text-muted">Underwater concrete casting and welding for bridge stability and safety.</p>
        </div>
      </div>
    </div>

    <!-- Blog Card 2 -->
    <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
      <div class="card shadow-lg border-0 rounded-4 hover-scale">
        <img src="images/Habor.jpeg" alt="Project 2" class="blog-card-img">
        <div class="card-body">
          <h5 class="card-title text-primary fw-bold">Harbor Hull Inspection & Cleaning</h5>
          <p class="card-text fs-7 text-muted">Comprehensive inspection of commercial vessels ensuring maritime safety.</p>
        </div>
      </div>
    </div>

    <!-- Blog Card 3 -->
    <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
      <div class="card shadow-lg border-0 rounded-4 hover-scale">
        <img src="images/Bride.jpeg" alt="Project 3" class="blog-card-img">
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

  <div class="blog-scroll d-flex gap-4 pb-2">
    
    <!-- Card Item -->
    <div class="project-card" onclick="openModal('images/Bride.jpeg', 'Offshore Pipeline Survey')">
      <img src="images/Bride.jpeg" alt="Project 4">
      <div class="overlay"><h5>Offshore Pipeline Survey</h5></div>
    </div>

    <div class="project-card" onclick="openModal('images/APM.jpeg', 'Submarine Dock Maintenance')">
      <img src="images/APM.jpeg" alt="Project 5">
      <div class="overlay"><h5>Submarine Dock Maintenance</h5></div>
    </div>

    <div class="project-card" onclick="openModal('images/ship_maintence.jpeg', 'Beach Restoration Work')">
      <img src="images/ship_maintence.jpeg" alt="Project 6">
      <div class="overlay"><h5>Beach Restoration Work</h5></div>
    </div>

    <div class="project-card" onclick="openModal('images/workpic4.jpeg', 'Port Cleaning Operations')">
      <img src="images/workpic4.jpeg" alt="Project 7">
      <div class="overlay"><h5>Port Cleaning Operations</h5></div>
    </div>

    <div class="project-card" onclick="openModal('images/workpic1.jpeg', 'Port Cleaning Operations')">
      <img src="images/workpic1.jpeg" alt="Project 7">
      <div class="overlay"><h5>Port Cleaning Operations</h5></div>
    </div>

    <div class="project-card" onclick="openModal('images/workpic2.jpeg', 'Port Cleaning Operations')">
      <img src="images/workpic2.jpeg" alt="Project 7">
      <div class="overlay"><h5>Port Cleaning Operations</h5></div>
    </div>

    <div class="project-card" onclick="openModal('images/workpic3.jpeg', 'Port Cleaning Operations')">
      <img src="images/workpic3.jpeg" alt="Project 7">
      <div class="overlay"><h5>Port Cleaning Operations</h5></div>
    </div>

    <div class="project-card" onclick="openModal('images/workpic5.jpeg', 'Port Cleaning Operations')">
      <img src="images/workpic5.jpeg" alt="Project 7">
      <div class="overlay"><h5>Port Cleaning Operations</h5></div>
    </div>

  </div>

  <!-- Button -->
  <div class="text-center mt-4">
    <a href="projects.php" class="btn btn-primary px-5 py-2">View All Projects</a>
  </div>
</section>

<!-- Fullscreen Modal -->
<div id="projectModal" class="modal-overlay" onclick="closeModal()">
  <img id="modalImage" class="modal-content-img">
  <div id="modalCaption" class="modal-caption"></div>
</div>

<!-- CSS -->
<style>
/* Scroll Styling */
.blog-scroll { overflow-x: auto; scrollbar-width: thin; scrollbar-color: #005f99 #e0e0e0; }
.blog-scroll::-webkit-scrollbar { height: 8px; }
.blog-scroll::-webkit-scrollbar-track { background: #e0e0e0; border-radius: 10px; }
.blog-scroll::-webkit-scrollbar-thumb { background: #005f99; border-radius: 10px; }

/* Cards */
.project-card { position: relative; width: 260px; height: 200px; border-radius: 15px; overflow: hidden; flex-shrink: 0; box-shadow: 0 10px 25px rgba(0,0,0,0.15); transition: transform 0.3s ease, box-shadow 0.3s ease; cursor: pointer; }
.project-card:hover { transform: translateY(-8px); box-shadow: 0 15px 40px rgba(0,0,0,0.25); }
.project-card img { width: 100%; height: 100%; object-fit: cover; }
.project-card .overlay { position: absolute; bottom: 0; width: 100%; padding: 10px; background: linear-gradient(180deg, transparent, rgba(0,0,0,0.8)); color: white; text-align: center; }
.project-card .overlay h5 { margin: 0; font-size: 1rem; font-weight: bold; }

/* Modal */
.modal-overlay { display: none; position: fixed; z-index: 9999; left: 0; top: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.9); justify-content: center; align-items: center; flex-direction: column; }
.modal-content-img { max-width: 90%; max-height: 80%; border-radius: 10px; }
.modal-caption { color: #fff; margin-top: 15px; font-size: 1.2rem; }
</style>

<!-- JS -->
<script>
function openModal(imageSrc, caption) {
  document.getElementById('projectModal').style.display = 'flex';
  document.getElementById('modalImage').src = imageSrc;
  document.getElementById('modalCaption').textContent = caption;
}

function closeModal() {
  document.getElementById('projectModal').style.display = 'none';
}
</script>

<!-- Facebook Page Plugin Section -->
<section class="container my-5 py-5" data-aos="fade-up">
  <h2 class="text-primary mb-4 text-center display-5 fw-bold">Follow Us on Facebook</h2>
  
  <div class="row justify-content-center">
    <div class="col-lg-8 col-md-10 col-09">
      <div class="shadow rounded overflow-hidden">
        <div class="fb-page"
             data-href="https://www.facebook.com/profile.php?id=100063540273746"
             data-tabs="timeline"
             data-width="500"
             data-height="600"
             data-small-header="false"
             data-adapt-container-width="true"
             data-hide-cover="false"
             data-show-facepile="true">
          <blockquote cite="https://www.facebook.com/profile.php?id=100063540273746" class="fb-xfbml-parse-ignore">
            <a href="https://www.facebook.com/profile.php?id=100063540273746">Facebook Page</a>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
</section>




<!-- WhatsApp Floating Button -->
<a href="https://wa.me/+231776260932" target="_blank" class="whatsapp-float" style="position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
    <img src="images/whatsapp.png" alt="WhatsApp" style="width:40px; height:40px;">
</a>

<!-- Footer -->
<footer style="background-color: #003366; color: white; text-align: center; padding: 30px 0;">
  &copy; 2025 West Africa Diving Association. All rights reserved. <br>
  Developed by <a href="https://www.tecliberia.com" target="_blank" style="color: #00aced; text-decoration: none;">Tec Liberia</a>.
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
