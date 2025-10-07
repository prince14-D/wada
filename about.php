<?php
// about.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About WADA - West Africa Diving Association</title>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Animate on Scroll CSS -->
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
    .banner {
        background: url('images/diving1.png') no-repeat center center/cover;
        height: 80vh;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        text-align: center;
        position: relative;
        margin-top: 20px;
    }
    .banner::before {
        content: '';
        position: absolute;
        top:0; left:0; width:100%; height:100%;
        background: rgba(0,0,0,0.5);
    }
    .banner-content { position: relative; z-index: 1; }
    .hover-scale {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .hover-scale:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
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
<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="padding-top:1rem; padding-bottom:1rem;">
  <div class="container">
    <a class="navbar-brand fs-3 fw-bold" href="index.php">WADA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto fs-5">
        <li class="nav-item"><a class="nav-link active" href="about.php">About</a></li>
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
            <li><a class="dropdown-item" href="partners.php">Our Partner</a></li>
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
    <h1 class="display-3 fw-bold">About West Africa Diving Association</h1>
    <p class="lead">Over 20 Years of Excellence in Marine Construction & Diving Services</p>
    <a href="contact.html" class="btn btn-primary btn-lg mt-3">Contact Us</a>
  </div>
</section>

<!-- About Content Section -->
<section id="about" class="container my-5 py-5" data-aos="fade-up">
  <div class="row align-items-center">
    
    <!-- Image -->
    <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right">
      <img src="images/WADA_LOGO.jpeg" alt="WADA Team" class="img-fluid rounded shadow-lg">
    </div>

    <!-- Text Content -->
    <div class="col-md-6" data-aos="fade-left">
      <h2 class="text-primary mb-4 display-5 fw-bold" style="font-family: 'Montserrat', sans-serif;">About Us</h2>

      <p class="fs-5" style="font-family: 'Roboto', sans-serif; line-height: 1.7;">
        West Africa Diving Association (WADA) has been a leader in marine construction and diving services in Liberia for over 
        <strong>20 years</strong>. Our team is trained by professional divers from Finland Divers, DCN Global LLC, Stantly Consultancy, 
        PADI, and BAM International. We provide customized solutions for complex underwater projects while ensuring safety, quality, 
        and environmental responsibility.
      </p>

      <ul class="fs-5" style="font-family: 'Roboto', sans-serif; line-height: 1.7;">
        <li>Project management, commercial diving, in-water surveys, hull inspections, environmental support</li>
        <li>Worked on Tubman Bridge, Freeport of Monrovia, Monrovia Container Terminal, and multiple port clean-ups</li>
        <li>Only local company to successfully salvage a wreck <strong>seven times</strong></li>
        <li>Trusted by United States Embassy, AMP Terminals, MSG Shipping, Ocean Shipping GETMA, and National Port Authority</li>
      </ul>

      <p class="mt-4 fs-5" style="font-family: 'Roboto', sans-serif;">
        <strong>Contact Us:</strong> 
        <a href="tel:+231886517084" class="text-primary fw-bold">(+231)77-626-0932</a>
      </p>
    </div>

  </div>
</section>


<!-- Mission & Vision Section -->
<section class="container my-5 py-5" data-aos="fade-up">
  <div class="text-center mb-5">
    <h2 class="text-primary fw-bold display-5" style="font-family: 'Montserrat', sans-serif;">Our Mission & Vision</h2>
    <p class="fs-5" style="font-family: 'Roboto', sans-serif; max-width:700px; margin:auto;">
      At WADA, we are driven by passion, professionalism, and commitment to safety. Our mission and vision guide every project and partnership we undertake.
    </p>
  </div>

  <div class="row g-4 justify-content-center">
    <!-- Mission Card -->
    <div class="col-md-5">
      <div class="card shadow-lg p-4 rounded-4 hover-scale h-100" style="border: none; background-color: #f0f8ff;">
        <h3 class="fw-bold text-primary mb-3" style="font-family: 'Montserrat', sans-serif;">Mission</h3>
        <p class="fs-5" style="font-family: 'Roboto', sans-serif;">
          We stimulate professional pride and passion in our craft and provide our clients and partners with safe and effective solutions to complex problems.
        </p>
      </div>
    </div>

    <!-- Vision Card -->
    <div class="col-md-5">
      <div class="card shadow-lg p-4 rounded-4 hover-scale h-100" style="border: none; background-color: #f0f8ff;">
        <h3 class="fw-bold text-primary mb-3" style="font-family: 'Montserrat', sans-serif;">Vision</h3>
        <p class="fs-5" style="font-family: 'Roboto', sans-serif;">
          We build on our heritage of craftsmanship, professional partnership, and environmental stewardship while achieving success by developing and igniting the passion of our people.
        </p>
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

<!-- Core Values Section -->
<section class="container my-5 py-5" data-aos="fade-up">
  <div class="text-center mb-5">
    <h2 class="text-primary fw-bold display-5" style="font-family: 'Montserrat', sans-serif;">Our Core Values</h2>
    <p class="fs-5" style="font-family: 'Roboto', sans-serif; max-width:700px; margin:auto;">
      At WADA, our core values guide every project we undertake and shape the culture of our team. We are committed to excellence, safety, and integrity in all that we do.
    </p>
  </div>

  <div class="row g-4 justify-content-center">
    <!-- Value 1 -->
    <div class="col-md-3">
      <div class="card shadow-lg p-4 rounded-4 text-center hover-scale h-100" style="border: none; background-color: #f0f8ff;">
        <i class="bi bi-shield-lock-fill text-primary fs-1 mb-3"></i>
        <h5 class="fw-bold text-primary" style="font-family: 'Montserrat', sans-serif;">Honesty & Integrity</h5>
      </div>
    </div>

    <!-- Value 2 -->
    <div class="col-md-3">
      <div class="card shadow-lg p-4 rounded-4 text-center hover-scale h-100" style="border: none; background-color: #f0f8ff;">
        <i class="bi bi-people-fill text-primary fs-1 mb-3"></i>
        <h5 class="fw-bold text-primary" style="font-family: 'Montserrat', sans-serif;">Safety, Teamwork & Partnership</h5>
      </div>
    </div>

    <!-- Value 3 -->
    <div class="col-md-3">
      <div class="card shadow-lg p-4 rounded-4 text-center hover-scale h-100" style="border: none; background-color: #f0f8ff;">
        <i class="bi bi-award-fill text-primary fs-1 mb-3"></i>
        <h5 class="fw-bold text-primary" style="font-family: 'Montserrat', sans-serif;">Professional Pride & Dedication</h5>
      </div>
    </div>

    <!-- Value 4 -->
    <div class="col-md-3">
      <div class="card shadow-lg p-4 rounded-4 text-center hover-scale h-100" style="border: none; background-color: #f0f8ff;">
        <i class="bi bi-check2-circle text-primary fs-1 mb-3"></i>
        <h5 class="fw-bold text-primary" style="font-family: 'Montserrat', sans-serif;">Reliability & Dependability</h5>
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

<!-- Our People Section -->
<section class="container my-5 py-5 bg-primary-light rounded-4" data-aos="fade-up">
  <div class="text-center mb-5">
    <h2 class="text-primary fw-bold display-5" style="font-family: 'Montserrat', sans-serif;">Our People</h2>
    <p class="fs-5" style="font-family: 'Roboto', sans-serif; max-width: 700px; margin:auto;">
      WADA values its people. We place a high value on experience and give our employees challenging projects, along with the responsibility and resources they need to be effective. We promote teamwork, both on and off the job. We pride ourselves on being small enough to be responsive and large enough to be effective.
    </p>
  </div>
</section>

<!-- Team Section -->
<section id="team" class="container my-5 py-5" style="background-color: #f8f9fa; border-radius: 15px;" data-aos="fade-up">
    <h2 class="text-primary mb-5 text-center display-5 fw-bold">Meet Our Team</h2>
    <div class="row text-center g-4">
        <div class="col-md-3" data-aos="zoom-in">
            <div class="team-card rounded-4 shadow-lg p-3 hover-scale">
                <img src="images/Ali Wleh Sackor.jpeg" alt="John Doe" class="img-fluid rounded-circle mb-3">
                <h5 class="fs-5 fw-bold"> Prince D. Jegbadai</h5>
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



<!-- Footer -->
<footer style="background-color: #003366; color: white; text-align: center; padding: 30px 0;">
  &copy; 2025 West Africa Diving Association. All rights reserved.
</footer>


<!-- WhatsApp Floating Button -->
<a href="https://wa.me/+231776260932" target="_blank" class="whatsapp-float" style="position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
    <img src="images/whatsapp.png" alt="WhatsApp" style="width:40px; height:40px;">
</a>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- AOS Animation -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({ duration: 1000 });
</script>
</body>
</html>
