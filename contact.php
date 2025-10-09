<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us - WADA</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

<link rel="icon" href="images/WADA_LOGO.jpeg" type="image/png">
<style>
  body { font-family: 'Roboto', sans-serif; scroll-behavior: smooth; }
  h1, h2, h3 { font-family: 'Montserrat', sans-serif; }
  .banner {
    background: url('images/diving2.png') center/cover no-repeat;
    height: 60vh;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-shadow: 0 3px 6px rgba(0,0,0,0.5);
    position: relative;
    margin-top: 20px;
  }
  .social-icons a { font-size: 1.8rem; margin-right: 15px; color: #005f99; transition: 0.3s; }
  .social-icons a:hover { color: #003366; }
  .btn-primary { background: linear-gradient(90deg,#005f99,#003366); border: none; }
  .btn-primary:hover { background: linear-gradient(90deg,#003366,#005f99); }
</style>
</head>
<body>

<!-- ✅ Top Header -->
<div class="bg-primary text-white py-2">
  <div class="container d-flex justify-content-between align-items-center">
    <div class="fs-6">
      <strong>Contact:</strong> (+231)77-626-0932
    </div>
    <div>
      <a href="https://facebook.com" target="_blank" class="text-white me-3"><i class="bi bi-facebook fs-5"></i></a>
      <a href="https://instagram.com" target="_blank" class="text-white me-3"><i class="bi bi-instagram fs-5"></i></a>
      <a href="https://linkedin.com" target="_blank" class="text-white me-3"><i class="bi bi-linkedin fs-5"></i></a>
      <a href="https://wa.me/+231776260932" target="_blank" class="text-white"><i class="bi bi-whatsapp fs-5"></i></a>
    </div>
  </div>
</div>

<!-- ✅ Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="padding-top:1rem; padding-bottom:1rem; background-color:#005f99;">
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
        <li class="nav-item"><a class="nav-link active" href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- ✅ Banner Section -->
<section class="banner">
  <h1 class="fw-bold">Contact Us</h1>
</section>


<!-- ✅ Intro Section -->
<section class="text-center py-5 bg-primary-light">
  <div class="container">
    <h2 class="fw-bold text-primary">Why Contact WADA?</h2>
    <p class="fs-5 mt-3">
      West Africa Diving Association (WADA) is Liberia’s leading provider of marine construction, underwater inspections, salvage operations, 
      and commercial diving services. Whether you're planning a major infrastructure project or need immediate emergency support, 
      our certified divers and engineering team are ready to assist 24/7.
    </p>
    <p class="fs-5 fw-bold text-primary">Let’s Build the Future — Above and Below Water.</p>
  </div>
</section>

<!-- ✅ Contact Details & Map -->
<section class="container my-5">
  <div class="row align-items-center">

    <!-- Contact Info Card -->
    <div class="col-md-5 mb-4">
      <div class="p-4 shadow rounded bg-white">
        <h2 class="text-primary fw-bold">Contact Information</h2>
        <p><i class="bi bi-geo-alt-fill text-primary"></i> Bushrod Island, Monrovia, Liberia</p>
        <p><i class="bi bi-telephone-fill text-primary"></i> (+231) 886-517-084 / 776260932 </p>
        <p><i class="bi bi-envelope-fill text-primary"></i> info@wadaliberia.com</p>

        <div class="social-icons mt-3">
          <a href="https://facebook.com" target="_blank"><i class="bi bi-facebook"></i></a>
          <a href="https://instagram.com" target="_blank"><i class="bi bi-instagram"></i></a>
          <a href="https://wa.me/+231776260932" target="_blank"><i class="bi bi-whatsapp"></i></a>
        </div>

        <a href="#contact-form" class="btn btn-primary w-100 mt-4">Hire Us!</a>
      </div>
    </div>

    <!-- Google Map -->
    <div class="col-md-7">
      <div class="shadow rounded overflow-hidden">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.665118784927!2d-10.807195!3d6.339395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfd8b4237b5e7e0f%3A0xabc123456789abcd!2sFreeport%20of%20Monrovia!5e0!3m2!1sen!2slr!4v1700000000000" 
          width="100%" height="350" style="border:0;" allowfullscreen loading="lazy"></iframe>
      </div>
    </div>

  </div>
</section>

<!-- ✅ Contact Form -->
<section id="contact-form" class="bg-light py-5">
  <div class="container">
    <h2 class="text-center text-primary fw-bold mb-4">Send Us a Message</h2>
    <form class="row g-3" action="send_mail.php" method="POST">
  <div class="col-md-6">
    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
  </div>
  <div class="col-md-6">
    <input type="email" name="email" class="form-control" placeholder="Your Email" required>
  </div>
  <div class="col-md-6">
    <input type="text" name="phone" class="form-control" placeholder="Phone Number" required>
  </div>
  <div class="col-md-6">
    <input type="text" name="subject" class="form-control" placeholder="Subject" required>
  </div>
  <div class="col-12">
    <textarea name="message" class="form-control" rows="5" placeholder="Your Message" required></textarea>
  </div>
  <div class="col-12 text-center">
    <button type="submit" class="btn btn-primary px-5">Submit</button>
  </div>
</form>
  </div>
</section>

<!-- ✅ Floating WhatsApp -->
<a href="https://wa.me/+231776260932" target="_blank" class="position-fixed" style="bottom:20px; right:20px;">
  <img src="images/whatsapp.png" alt="WhatsApp" style="width:40px; height:40px;">
</a>

<!-- Footer -->
<footer style="background-color: #003366; color: white; text-align: center; padding: 30px 0;">
  &copy; 2025 West Africa Diving Association. All rights reserved. <br>
  Developed by <a href="https://www.tecliberia.com" target="_blank" style="color: #00aced; text-decoration: none;">Tec Liberia</a>.
</footer>

<!-- ✅ Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
