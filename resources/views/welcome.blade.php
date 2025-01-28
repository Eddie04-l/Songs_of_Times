<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
  <title>Songs of Times</title>
  <style>
    /* Global Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Arial', sans-serif;
      background-color: #1c1c1c;
      color: #fff;
      line-height: 1.6;
    }

    ::-webkit-scrollbar {
        width: 12px;
    }

    ::-webkit-scrollbar-track {
        background: #1a1a1a;
    }

    ::-webkit-scrollbar-thumb {
        background: linear-gradient(90deg, #FFD700, #FFA500);
        border-radius: 6px;
        position: relative;
    }

    ::-webkit-scrollbar-thumb::after {
        content: 'Scroll';
        position: absolute;
        top: 50%;
        left: -40px;
        transform: rotate(-90deg);
        transform-origin: left center;
        font-size: 12px;
        color: #000;
        font-weight: bold;
    }
    /* Navbar */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: black;
      padding: 15px 20px;
      position: sticky;
      top: 0;
      z-index: 10;
    }

    .navbar .logo {
      font-size: 24px;
      font-weight: bold;
      color: gold;
    }

    .nav-links {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    .nav-links a {
      text-decoration: none;
      color: white;
      font-size: 16px;
      transition: color 0.3s ease;
    }

    .nav-links a:hover {
      color: gold;
    }
    .navbar .menu-toggle {
        display: none;
      }

    @media (max-width: 768px) {
      .nav-links {
        flex-direction: column;
        align-items: left;
        gap: 10px;
        background-color: rgba(0, 0, 0, 0.7);
        border-radius: 10px;
        position: absolute;
        width: 100%;
        left: 0;
        top: 60px;
        display: none;
        transition: max-height 0.5s ease-in-out;
        padding: 20px;
      }

      .nav-links.show {
        display: flex;
      }

      .navbar .menu-toggle {
        cursor: pointer;
        color: gold;
        font-size: 28px;
        display: block;
      }
    }

    /* Header Section */
    header {
      height: 100vh;
      background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('images/song.jpg') center/cover;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: gold;
      padding: 20px;
    }

    header h1 {
      font-size: 3rem;
      margin-bottom: 15px;
    }

    header p {
      font-size: 1.2rem;
      margin-bottom: 20px;
    }

    header .btn {
      padding: 10px 20px;
      background-color: gold;
      color: #1c1c1c;
      text-decoration: none;
      border-radius: 5px;
      font-size: 1rem;
      transition: background 0.3s ease;
    }

    header .btn:hover {
      background-color: #333;
      color: gold;
    }

    @media (max-width: 768px) {
      header h1 {
        font-size: 2.5rem;
      }

      header p {
        font-size: 1rem;
      }
    }

    /* About Section */
    .about {
      padding: 50px 20px;
      text-align: center;
    }

    .about-content {
      display: grid;
      grid-template-columns: 40% 40%;
      flex-wrap: wrap;
      justify-content: space-around;
      gap: 20px;
      font-size: 18px;
      padding-top: 30px;
    }
    @media screen and (max-width:768px){
      .about-content {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
      }
      .about-text {
        max-width: 500px;
      }
    }
    .about-img img {
      max-width: 100%;
      border-radius: 10px;
    }

    .about-text {
      max-width: 500px;
      padding-top: 50px;
    }

    /* Services Section */
    .services {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
      padding: 50px 20px;
    }

    .service-card {
      background: #222;
      padding: 20px;
      border-radius: 10px;
      text-align: center;
      border: 1px solid goldenrod;
    }

    .service-card h3 {
      margin-bottom: 10px;
      font-size: 1.5rem;
      color: gold;
    }

    /* Why Collaborate Section */
    .why-collaborate {
      padding: 50px 20px;
      text-align: center;
      background: #1a1a1a;
    }

    .why-collaborate h2 {
      margin-bottom: 30px;
      color: #f0a500;
    }

    .features {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }

    .feature {
      padding: 20px;
      border: 1px solid goldenrod;
      border-radius: 10px;
    }

    .feature h3 {
      color: #f0a500;
    }

    /* Contact Section */
    .contact {
      padding: 50px 20px;
      text-align: center;
    }

    .contact form {
      max-width: 500px;
      margin: 0 auto;
      display: grid;
      gap: 15px;
    }

    .contact input, .contact textarea, .contact button {
      padding: 10px;
      border: none;
      border-radius: 5px;
      font-size: 1rem;
    }

    .contact button {
      background: gold;
      color: #1c1c1c;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .contact button:hover {
      background: #333;
      color: gold;
    }

    /* Footer */
    footer {
      text-align: center;
      padding: 20px;
      background: #222;
      color: #aaa;
    }
  </style>
</head>
<body>
  <nav class="navbar">
    <div class="logo">Songs of Times</div>
    <span class="menu-toggle">☰</span>
    <ul class="nav-links">
      <li><a href="#about">About</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#why-collaborate">Why Collaborate</a></li>
      <li><a href="#impact">Our Impact</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="#join">Join Us</a></li>
    </ul>
  </nav>

  <header>
    <h1>Songs of Times</h1>
    <p>Shaping the future of African music and audiovisual content.</p>
    <a href="#about" class="btn">Learn More</a>
  </header>

  <!-- About Us Section with Image -->
  <section id="about" class="about">
    <h2 style="color: gold; font-size: 2.5rem; margin-bottom: 20px;">About Us</h2>
    <div class="about-content">
    <div class="about-img">
        <img src="images/headset.jpg" alt="Africa Music Image">
    </div>
      <div class="about-text">
        <p>At Songs of Times, we are shaping the future of music and audiovisual content across Africa. As a forward-thinking music investment company, we specialize in fostering creativity and innovation through strategic partnerships and joint ventures. Our mission is to empower creatives by providing the resources and support needed to bring their visions to life.</p>
        <p>We celebrate Africa's rich cultural diversity while creating sustainable value for our stakeholders, ensuring that the continent’s creative industries thrive.</p>
      </div>
    </div>
  </section>

  <section id="services" style="padding: 50px 0; background-color: #F4F7FA; position: relative;">
    <h2 style="color: #F5A623; font-size: 2.5rem; margin-bottom: 30px; text-align: center; font-weight: bold;">
      Our Services
    </h2>
    <div class="carousel-container">
      <div class="carousel" id="carousel">
        <!-- Service Card 1 -->
        <div class="custom-card">
          <div class="service-icon" style="font-size: 3rem; color: #4A90E2; margin-bottom: 20px;">
            <i class="fas fa-video"></i>
          </div>
          <h3>Content Production & Distribution</h3>
          <p>Partnering with artists, producers, and labels to create and promote music videos, short films, and documentaries that amplify African narratives.</p>
        </div>
        <!-- Service Card 2 -->
        <div class="custom-card">
          <div class="service-icon" style="font-size: 3rem; color: #F5A623; margin-bottom: 20px;">
            <i class="fas fa-handshake"></i>
          </div>
          <h3>Joint Ventures</h3>
          <p>Collaborating with like-minded organizations to co-create innovative projects that push the boundaries of creativity and impact.</p>
        </div>
        <!-- Service Card 3 -->
        <div class="custom-card">
          <div class="service-icon" style="font-size: 3rem; color: #4A90E2; margin-bottom: 20px;">
            <i class="fas fa-link"></i>
          </div>
          <h3>Strategic Partnerships</h3>
          <p>Building strong alliances with industry stakeholders to unlock new opportunities for talent and content monetization.</p>
        </div>
        <!-- Service Card 4 -->
      <div class="custom-card" style="">
        <div class="service-icon" style="font-size: 3rem; color: #F5A623; margin-bottom: 20px;">
            <i class="fas fa-users"></i>
        </div>
        <h3 style="color: #f1f1f1; font-size: 1.6rem; margin-bottom: 10px;">Talent Development</h3>
        <p style="color: #e5e5e5; font-size: 1rem;">Providing mentorship, funding, and access to resources that enable creators to reach their full potential.</p>
    </div>
    <!-- Service Card 5 -->
    <div class="custom-card" style="">
        <div class="service-icon" style="font-size: 3rem; color: #4A90E2; margin-bottom: 20px;">
            <i class="fas fa-gavel"></i>
        </div>
        <h3 style="color: #f1f1f1; font-size: 1.6rem; margin-bottom: 10px;">Copyright & Intellectual Property Management</h3>
        <p style="color: #e5e5e5; font-size: 1rem;">Supporting creators in safeguarding their works and maximizing revenue through effective rights management.</p>
    </div>
      </div>
  
      <!-- Controls -->
      <button class="carousel-control left" onclick="moveCarousel(-1)">&#10094;</button>
      <button class="carousel-control right" onclick="moveCarousel(1)">&#10095;</button>
    </div>
  </section>
  
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  
  <!-- CSS -->
  <style>
    /* General Section Styling */
    #services {
      background-image: url('images/h470.jpg');
      background-position: center;
      background-size: cover;
    }
  
    /* Carousel Container */
    .carousel-container {
      position: relative;
      overflow: hidden;
      max-width: 100%;
      margin: 0 auto;
    }
  
    .carousel {
      display: flex;
      gap: 15px;
      transition: transform 0.5s ease-in-out;
    }
  
    .custom-card {
      min-width: 90%;
      max-width: 90%;
      margin: auto;
      background: rgba(0, 0, 0, 0.7);
      border-radius: 15px;
      padding: 20px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
  
    .custom-card:hover {
      transform: translateY(-5px);
      background: rgba(0, 0, 0, 0.5);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }
  
    .custom-card h3 {
      color: #f1f1f1;
      font-size: 1.6rem;
      margin-bottom: 10px;
    }
  
    .custom-card p {
      color: #e5e5e5;
      font-size: 1rem;
    }
  
    /* Controls */
    .carousel-control {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(0, 0, 0, 0.5);
      color: #fff;
      border: none;
      padding: 10px 15px;
      cursor: pointer;
      font-size: 1.5rem;
      z-index: 10;
      border-radius: 50%;
    }
  
    .carousel-control.left {
      left: 10px;
    }
  
    .carousel-control.right {
      right: 10px;
    }
  
    .carousel-control:hover {
      background: rgba(0, 0, 0, 0.8);
    }
  
    /* Responsive Adjustments */
    @media (max-width: 768px) {
      .carousel {
        gap: 0;
      }
  
      .custom-card {
        min-width: 100%;
        margin: 0;
      }
    }
  
    @media (min-width: 769px) {
      .carousel {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
      }
  
      .carousel-container {
        overflow: visible;
      }
  
      .carousel-control {
        display: none; /* Controls hidden on desktop */
      }
    }
  </style>
  
  <!-- JavaScript -->
  <script>
    const carousel = document.getElementById("carousel");
    let scrollPosition = 0;
  
    function moveCarousel(direction) {
      const cardWidth = carousel.querySelector(".custom-card").offsetWidth; // Card width
      const visibleWidth = carousel.offsetWidth;
      const maxScroll = carousel.scrollWidth - visibleWidth;
  
      // Update position
      scrollPosition += direction * cardWidth;
  
      // Prevent scrolling beyond limits
      if (scrollPosition < 0) scrollPosition = 0;
      if (scrollPosition > maxScroll) scrollPosition = maxScroll;
  
      // Apply translation
      carousel.style.transform = `translateX(-${scrollPosition}px)`;
    }
  
    // Auto-slide functionality
    setInterval(() => {
      moveCarousel(1);
    }, 15000); // 4 seconds interval
  </script>
  
  
  

<!-- Why Collaborate Section -->
<section class="why-collaborate" style="padding: 50px 0; background: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/SER.avif'); background-size: cover; background-position: center center; color: white;">
  <div class="container" style="max-width: 1200px; margin: 0 auto; text-align: center;">
      <h2 class="section-title" style="font-size: 2.5rem; font-weight: bold; margin-bottom: 40px; opacity: 0; animation: fadeIn 2s forwards;">Why Collaborate with Songs of Times?</h2>
      <div class="features" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 30px;">
          <!-- Feature 1 -->
          <div class="feature" style="background-color: rgba(255, 255, 255, 0.2); border-radius: 10px; padding: 30px; text-align: center; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); transition: transform 0.3s, box-shadow 0.3s; opacity: 0; animation: fadeInUp 1.5s 0.5s forwards;">
              <h3 style="font-size: 1.8rem; margin-bottom: 20px; font-weight: bold;">Innovative Vision</h3>
              <p style="font-size: 1rem; line-height: 1.6;">We stay ahead of trends, embracing new technologies and ideas to enhance the creative process.</p>
          </div>
          <!-- Feature 2 -->
          <div class="feature" style="background-color: rgba(255, 255, 255, 0.2); border-radius: 10px; padding: 30px; text-align: center; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); transition: transform 0.3s, box-shadow 0.3s; opacity: 0; animation: fadeInUp 1.5s 1s forwards;">
              <h3 style="font-size: 1.8rem; margin-bottom: 20px; font-weight: bold;">Empowering Creators</h3>
              <p style="font-size: 1rem; line-height: 1.6;">Our investments are tailored to support and amplify the unique voices of African talent.</p>
          </div>
          <!-- Feature 3 -->
          <div class="feature" style="background-color: rgba(255, 255, 255, 0.2); border-radius: 10px; padding: 30px; text-align: center; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); transition: transform 0.3s, box-shadow 0.3s; opacity: 0; animation: fadeInUp 1.5s 1.5s forwards;">
              <h3 style="font-size: 1.8rem; margin-bottom: 20px; font-weight: bold;">Collaborative Approach</h3>
              <p style="font-size: 1rem; line-height: 1.6;">We work closely with our partners to achieve shared goals and drive meaningful impact.</p>
          </div>
          <!-- Feature 4 -->
          <div class="feature" style="background-color: rgba(255, 255, 255, 0.2); border-radius: 10px; padding: 30px; text-align: center; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); transition: transform 0.3s, box-shadow 0.3s; opacity: 0; animation: fadeInUp 1.5s 2s forwards;">
              <h3 style="font-size: 1.8rem; margin-bottom: 20px; font-weight: bold;">Commitment to Excellence</h3>
              <p style="font-size: 1rem; line-height: 1.6;">From concept to execution, we ensure every project meets the highest standards of quality and creativity.</p>
          </div>
      </div>
  </div>
</section>

<!-- Add Font Awesome for Icons (if needed) -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<!-- CSS for Animations -->
<style>
  /* Animation for Fade In */
  @keyframes fadeIn {
      0% {
          opacity: 0;
      }
      100% {
          opacity: 1;
      }
  }

  /* Animation for Fade In Up (for features) */
  @keyframes fadeInUp {
      0% {
          opacity: 0;
          transform: translateY(20px);
      }
      100% {
          opacity: 1;
          transform: translateY(0);
      }
  }

  /* Hover effect for feature cards */
  .feature:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
  }

  /* Make the text appear in sequence */
  .section-title {
      opacity: 0;
      animation: fadeIn 2s forwards;
  }
</style>


<!-- Impact Section -->
<section id="impact" class="impact-section">
  <div class="container">
    <h2 class="impact-title">Our Impact</h2>
    <p class="impact-description">
      At <span class="highlight">Songs of Times</span>, we believe in creating a lasting legacy. By investing in the people
      and stories that define Africa’s cultural identity, we aim to inspire generations to come.
    </p>
    <p class="impact-description">
      Our projects are not just about entertainment; they are about fostering connections, empowering communities, and showcasing
      the extraordinary talent the continent has to offer.
    </p>
  </div>

  <div class="cards-container">
    <!-- Card 1 -->
    <div class="impact-card">
      <h3 class="card-title">Empowering Communities</h3>
      <p class="card-description">
        We invest in local talent and provide resources to bring untold stories to life, enabling communities to thrive.
      </p>
    </div>
    <!-- Card 2 -->
    <div class="impact-card">
      <h3 class="card-title">Celebrating Culture</h3>
      <p class="card-description">
        By showcasing Africa’s rich cultural heritage, we create platforms for artists to share their unique voices globally.
      </p>
    </div>
    <!-- Card 3 -->
    <div class="impact-card">
      <h3 class="card-title">Inspiring Generations</h3>
      <p class="card-description">
        Our work inspires the next generation to embrace their roots and achieve their dreams through art and storytelling.
      </p>
    </div>
  </div>
</section>

<!-- JavaScript -->
<script>
  // Function to create and animate cubes
  function createRotatingCubes() {
    const impactSection = document.querySelector('.impact-section');
    for (let i = 0; i < 10; i++) {
      const cube = document.createElement('div');
      cube.className = 'cube';

      // Randomize position and size
      const size = Math.random() * 50 + 20; // Cube size between 20px and 70px
      const top = Math.random() * 100 + '%';
      const left = Math.random() * 100 + '%';

      cube.style.width = `${size}px`;
      cube.style.height = `${size}px`;
      cube.style.top = top;
      cube.style.left = left;
      cube.style.animationDuration = `${Math.random() * 20 + 10}s`; // Random animation duration

      impactSection.appendChild(cube);
    }
  }

  // Call the function on page load
  document.addEventListener('DOMContentLoaded', createRotatingCubes);
</script>

<!-- CSS -->
<style>
  /* Section Style */
  .impact-section {
    background-color: #000;
    color: #fff;
    padding: 60px 20px;
    position: relative;
    overflow: hidden;
    min-height: 500px;
  }

  .container {
    max-width: 900px;
    margin: 0 auto;
    text-align: center;
    z-index: 2; /* Ensure text is above cubes */
    position: relative;
  }

  .impact-title {
    color: gold;
    font-size: 2.5rem;
    margin-bottom: 20px;
    text-transform: uppercase;
  }

  .impact-description {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #ccc;
  }

  .highlight {
    color: gold;
    font-weight: bold;
  }

  /* Rotating Cube Styles */
  .cube {
    position: absolute;
    background: linear-gradient(45deg, gold, rgba(255, 255, 255, 0.5));
    border-radius: 4px;
    transform-style: preserve-3d;
    animation: rotateCube 20s infinite linear;
    opacity: 0.6;
    z-index: 1; /* Behind the content */
  }

  @keyframes rotateCube {
    0% {
      transform: rotateX(0deg) rotateY(0deg);
    }
    50% {
      transform: rotateX(180deg) rotateY(180deg);
    }
    100% {
      transform: rotateX(360deg) rotateY(360deg);
    }
  }

  /* Card Styles */
  .cards-container {
    display: flex;
    justify-content: center;
    gap: 30px;
    margin-top: 40px;
  }

  .impact-card {
    background-color: #111;
    padding: 20px;
    border: 1px solid gold;
    border-radius: 8px;
    max-width: 280px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
  }

  .card-title {
    color: gold;
    font-size: 1.5rem;
    margin-bottom: 15px;
  }

  .card-description {
    font-size: 0.9rem;
    color: #ccc;
    line-height: 1.6;
  }

  /* Responsive Design */
  @media (max-width: 768px) {
    .impact-title {
      font-size: 2rem;
    }

    .cards-container {
      flex-direction: column;
      align-items: center;
    }
  }
</style>


  <!-- Join Us Section -->
  <section id="join" style="position: relative; color: #fff; padding: 60px 20px; text-align: center; background: url('images/journey.png') no-repeat center center / cover;">
    <div style="position: relative; z-index: 2; max-width: 800px; margin: 0 auto; background: rgba(0, 0, 0, 0.6); padding: 30px; border-radius: 12px;">
      <h2 style="color: gold; font-size: 2.8rem; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 1px;">
        Join Us on Our Journey
      </h2>
      <p style="font-size: 1.2rem; line-height: 1.8; color: #ccc; margin-bottom: 15px;">
        At <span style="color: gold; font-weight: bold;">Songs of Times</span>, we’re more than just an investment company — we’re a movement dedicated to redefining Africa’s creative industries.
      </p>
      <p style="font-size: 1.2rem; line-height: 1.8; color: #ccc;">
        Join us as we pave the way for a brighter, more dynamic future in music and audiovisual content.
      </p>
    </div>
  
    <div style="margin-top: 40px; position: relative; z-index: 2;">
      <a href="#contact" 
         style="display: inline-block; padding: 15px 40px; font-size: 1.2rem; font-weight: bold; background-color: gold; color: #000; text-decoration: none; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); transition: transform 0.3s, box-shadow 0.3s;">
        Contact Us Today
      </a>
    </div>
  
    <!-- Dark Overlay -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.7); z-index: 1;"></div>
  </section>
  
  <!-- CSS -->
  <style>
    #join a:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
    }
  
    @media (max-width: 768px) {
      #join h2 {
        font-size: 2.2rem;
      }
  
      #join p {
        font-size: 1rem;
      }
  
      #join a {
        padding: 12px 30px;
        font-size: 1rem;
      }
    }
  </style>



<section id="contact" style="background: linear-gradient(135deg, #111, #333); color: #fff; padding: 60px 20px;">
  <div style="max-width: 800px; margin: 0 auto; text-align: center;">
    <h2 style="color: gold; font-size: 3rem; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 1px;">
      Get In Touch
    </h2>
    <p style="font-size: 1.2rem; line-height: 1.8; color: #ccc; margin-bottom: 30px;">
      We’d love to hear from you. Whether you have a question or need assistance, drop us a message and we’ll get back to you promptly!
    </p>
  </div>

  <form style="max-width: 600px; margin: 0 auto; background: #222; padding: 30px; border-radius: 12px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.8);">
    <div style="display: grid; gap: 20px;">
      <input 
        type="text" 
        placeholder="Your Name" 
        required 
        style="padding: 15px; font-size: 1rem; border-radius: 8px; background: #111; color: #fff; border: 1px solid #444;">
      <input 
        type="email" 
        placeholder="Your Email" 
        required 
        style="padding: 15px; font-size: 1rem; border-radius: 8px; background: #111; color: #fff; border: 1px solid #444;">
      <textarea 
        rows="5" 
        placeholder="Your Message" 
        required 
        style="padding: 15px; font-size: 1rem; border-radius: 8px; background: #111; color: #fff; border: 1px solid #444;"></textarea>
      <button 
        type="submit" 
        style="padding: 15px; font-size: 1.2rem; font-weight: bold; background: gold; color: #000; border: none; border-radius: 8px; cursor: pointer; transition: transform 0.3s, background 0.3s;">
        Send Message
      </button>
    </div>
  </form>
</section>

<!-- Optional JavaScript -->
<script>
  document.querySelector("form button").addEventListener("mouseover", function () {
    this.style.transform = "scale(1.05)";
  });

  document.querySelector("form button").addEventListener("mouseout", function () {
    this.style.transform = "scale(1)";
  });
</script>

<!-- CSS -->
<style>
  @media (max-width: 768px) {
    #contact h2 {
      font-size: 2.5rem;
    }

    #contact form {
      padding: 20px;
    }

    #contact p {
      font-size: 1rem;
    }
  }
</style>
  

  <script>
    document.querySelector('.menu-toggle').addEventListener('click', () => {
      document.querySelector('.nav-links').classList.toggle('show');
    });
  </script>
</body>
</html>
