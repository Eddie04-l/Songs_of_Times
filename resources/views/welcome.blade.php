<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

  <!-- Our Services Section -->
  <section id="services">
    <h2 style="color: gold; font-size: 2.5rem; margin-bottom: 20px; text-align:center;">Our Services</h2>
    <div class="services">
        <div class="service-card">
            <h3>Content Production & Distribution</h3>
            <p>Partnering with artists, producers, and labels to create and promote music videos, short films, and documentaries that amplify African narratives.</p>
          </div>
          <div class="service-card">
            <h3>Joint Ventures</h3>
            <p>Collaborating with like-minded organizations to co-create innovative projects that push the boundaries of creativity and impact.</p>
          </div>
          <div class="service-card">
              <h3>Strategic Partnerships</h3>
              <p>Building strong alliances with industry stakeholders to unlock new opportunities for talent and content monetization. </p>
          </div>
          <div class="service-card">
            <h3>Talent Development</h3>
            <p>Providing mentorship, funding, and access to resources that enable creators to reach their full potential.</p>
          </div>
          <div class="service-card">
            <h3>Copyright & Intellectual Property Management</h3>
            <p>Supporting creators in safeguarding their works and maximizing revenue through effective rights management.</p>
          </div>
    </div>
  </section>
<section class="why-collaborate">
    <div class="container">
        <h2>Why Collaborate with Songs of Times?</h2>
        <div class="features">
            <div class="feature">
                <h3>Innovative Vision</h3>
                <p>We stay ahead of trends, embracing new technologies and ideas to enhance the creative process.</p>
            </div>
            <div class="feature">
                <h3>Empowering Creators</h3>
                <p>Our investments are tailored to support and amplify the unique voices of African talent.</p>
            </div>
            <div class="feature">
                <h3>Collaborative Approach</h3>
                <p>We work closely with our partners to achieve shared goals and drive meaningful impact.</p>
            </div>
            <div class="feature">
                <h3>Commitment to Excellence</h3>
                <p>From concept to execution, we ensure every project meets the highest standards of quality and creativity.</p>
            </div>
        </div>
    </div>
</section>

<section id="impact" style="background-color: #000; color: #fff; padding: 60px 20px;">
  <div style="max-width: 900px; margin: 0 auto; text-align: center;">
      <h2 style="color: gold; font-size: 2.5rem; margin-bottom: 20px;">Our Impact</h2>
      <p style="font-size: 1.1rem; line-height: 1.8; color: #ccc;">
          At <span style="color: gold; font-weight: bold;">Songs of Times</span>, we believe in creating a lasting legacy. By investing in the people 
          and stories that define Africa’s cultural identity, we aim to inspire generations to come.
      </p>
      <p style="font-size: 1.1rem; line-height: 1.8; color: #ccc; margin-top: 15px;">
          Our projects are not just about entertainment; they are about fostering connections, empowering communities, and showcasing 
          the extraordinary talent the continent has to offer.
      </p>
  </div>

  <div style="display: flex; flex-wrap: wrap; gap: 30px; justify-content: center; margin-top: 40px;">
      <!-- Card 1 -->
      <div style="background-color: #111; padding: 20px; border: 1px solid gold; border-radius: 8px; max-width: 280px; text-align: center;">
          <h3 style="color: gold; font-size: 1.5rem; margin-bottom: 15px;">Empowering Communities</h3>
          <p style="font-size: 0.9rem; color: #ccc; line-height: 1.6;">
              We invest in local talent and provide resources to bring untold stories to life, enabling communities to thrive.
          </p>
      </div>
      <!-- Card 2 -->
      <div style="background-color: #111; padding: 20px; border: 1px solid gold; border-radius: 8px; max-width: 280px; text-align: center;">
          <h3 style="color: gold; font-size: 1.5rem; margin-bottom: 15px;">Celebrating Culture</h3>
          <p style="font-size: 0.9rem; color: #ccc; line-height: 1.6;">
              By showcasing Africa’s rich cultural heritage, we create platforms for artists to share their unique voices globally.
          </p>
      </div>
      <!-- Card 3 -->
      <div style="background-color: #111; padding: 20px; border: 1px solid gold; border-radius: 8px; max-width: 280px; text-align: center;">
          <h3 style="color: gold; font-size: 1.5rem; margin-bottom: 15px;">Inspiring Generations</h3>
          <p style="font-size: 0.9rem; color: #ccc; line-height: 1.6;">
              Our work inspires the next generation to embrace their roots and achieve their dreams through art and storytelling.
          </p>
      </div>
  </div>
</section>


  <!-- Contact Us Section -->
  {{-- <section id="contact" class="contact">
    <h2>Contact Us</h2>
    <p>We'd love to hear from you. Reach out for partnerships, collaborations, or any inquiries.</p>
    <form action="#" method="POST">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <textarea name="message" placeholder="Your Message" required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </section> --}}

  <section id="contact" style="background-color: #222; color: #fff; padding: 50px 20px;">
    <div style="max-width: 800px; margin: 0 auto; text-align: center;">
        <h2 style="color: gold; font-size: 2.5rem; margin-bottom: 20px;">Contact Us</h2>
        <p style="font-size: 1rem; line-height: 1.5; color: #ccc;">
            Have questions or need assistance? We're here to help. Fill out the form below or reach us at 
        </p>
    </div>

    <form style="max-width: 600px; margin: 30px auto; display: grid; gap: 20px; background-color: #222; padding: 20px;  border-radius: 8px;">
        <input 
            type="text" 
            placeholder="Your Name" 
            required 
            style="padding: 15px; font-size: 1rem; border-radius: 5px; background: #000; color: #fff;">
        <input 
            type="email" 
            placeholder="Your Email" 
            required 
            style="padding: 15px; font-size: 1rem; border-radius: 5px; background: #000; color: #fff;">
        <textarea 
            rows="5" 
            placeholder="Your Message" 
            required 
            style="padding: 15px; font-size: 1rem; border-radius: 5px; background: #000; color: #fff;"></textarea>
        <button 
            type="submit" 
            style="padding: 15px; font-size: 1.1rem; font-weight: bold; background-color: gold; color: #000; border: none; border-radius: 5px; cursor: pointer; transition: background 0.3s;">
            Send Message
        </button>
    </form>
</section>

  <!-- Join Us Section -->
  <section id="join" style="background-color: #000; color: #fff; padding: 60px 20px; text-align: center;">
    <div style="max-width: 800px; margin: 0 auto;">
        <h2 style="color: gold; font-size: 2.5rem; margin-bottom: 20px;">Join Us on Our Journey</h2>
        <p style="font-size: 1.1rem; line-height: 1.8; color: #ccc;">
            At <span style="color: gold; font-weight: bold;">Songs of Times</span>, we’re more than just an investment company — we’re a movement dedicated to redefining Africa’s creative industries.
        </p>
        <p style="font-size: 1.1rem; line-height: 1.8; color: #ccc; margin-top: 15px;">
            Join us as we pave the way for a brighter, more dynamic future in music and audiovisual content.
        </p>
    </div>

    <div style="margin-top: 40px;">
        <a href="#contact" 
           style="display: inline-block; padding: 15px 30px; font-size: 1.1rem; font-weight: bold; background-color: gold; color: #000; text-decoration: none; border-radius: 5px; transition: background 0.3s;">
            Contact Us Today
        </a>
    </div>
</section>


  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Songs of Times. All rights reserved.</p>
  </footer>


  <script>
    document.querySelector('.menu-toggle').addEventListener('click', () => {
      document.querySelector('.nav-links').classList.toggle('show');
    });
  </script>
</body>
</html>
