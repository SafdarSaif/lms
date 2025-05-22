<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Safdar Ali | Backend Developer Portfolio</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary: #6366f1;
      --primary-dark: #4f46e5;
      --primary-light: #818cf8;
      --secondary: #f43f5e;
      --dark: #1e293b;
      --dark-gray: #334155;
      --medium-gray: #64748b;
      --light-gray: #e2e8f0;
      --lighter-gray: #f8fafc;
      --white: #ffffff;
      --success: #10b981;
      --warning: #f59e0b;
      --error: #ef4444;
      --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
      --shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
      --shadow-md: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
      --shadow-lg: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
      --shadow-primary: 0 4px 14px 0 rgb(99 102 241 / 0.3);
      --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* Reset & base */
    * {
      margin: 0; 
      padding: 0; 
      box-sizing: border-box;
    }
    
    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      background: var(--lighter-gray);
      color: var(--dark-gray);
      line-height: 1.6;
      scroll-behavior: smooth;
    }
    
    a {
      color: var(--primary-dark);
      text-decoration: none;
      transition: var(--transition);
    }
    
    img {
      max-width: 100%;
      height: auto;
    }

    /* Container */
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 1.5rem;
    }

    /* Buttons */
    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      padding: 0.75rem 1.5rem;
      border-radius: 0.5rem;
      font-weight: 600;
      cursor: pointer;
      transition: var(--transition);
      border: none;
      outline: none;
    }
    
    .btn-primary {
      background: var(--primary);
      color: var(--white);
      box-shadow: var(--shadow-primary);
    }
    
    .btn-primary:hover {
      background: var(--primary-dark);
      transform: translateY(-2px);
    }
    
    .btn-outline {
      background: transparent;
      color: var(--primary);
      border: 1px solid var(--primary);
    }
    
    .btn-outline:hover {
      background: var(--primary);
      color: var(--white);
    }

    /* Header */
    header {
      background: linear-gradient(135deg, var(--primary-dark), var(--primary));
      color: var(--white);
      padding: 1rem 0;
      position: sticky;
      top: 0;
      z-index: 100;
      box-shadow: var(--shadow-md);
    }
    
    .header-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    
    .logo {
      font-size: 1.5rem;
      font-weight: 700;
      letter-spacing: 1px;
    }
    
    .logo span {
      color: var(--light-gray);
    }
    
    /* Navigation */
    nav {
      display: flex;
      gap: 1.5rem;
    }
    
    nav a {
      color: var(--white);
      font-weight: 500;
      padding: 0.5rem 0;
      position: relative;
      opacity: 0.9;
    }
    
    nav a:hover {
      opacity: 1;
    }
    
    nav a::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 0;
      height: 2px;
      background: var(--white);
      transition: var(--transition);
    }
    
    nav a:hover::after {
      width: 100%;
    }
    
    .mobile-menu-btn {
      display: none;
      background: none;
      border: none;
      color: var(--white);
      font-size: 1.5rem;
      cursor: pointer;
    }

    /* Hero Section */
    #hero {
      padding: 5rem 0;
      background: linear-gradient(135deg, rgba(99, 102, 241, 0.1), rgba(244, 63, 94, 0.1));
    }
    
    .hero-container {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 3rem;
      align-items: center;
    }
    
    .hero-content h1 {
      font-size: 3rem;
      font-weight: 700;
      line-height: 1.2;
      margin-bottom: 1.5rem;
      color: var(--dark);
    }
    
    .hero-content h1 span {
      color: var(--primary);
    }
    
    .hero-content p {
      font-size: 1.1rem;
      margin-bottom: 2rem;
      color: var(--medium-gray);
    }
    
    .hero-buttons {
      display: flex;
      gap: 1rem;
    }
    
    .hero-image {
      position: relative;
    }
    
    .hero-image img {
      border-radius: 1rem;
      box-shadow: var(--shadow-lg);
      transition: var(--transition);
    }
    
    .hero-image:hover img {
      transform: scale(1.02);
    }
    
    .hero-shape {
      position: absolute;
      width: 100px;
      height: 100px;
      background: var(--primary-light);
      border-radius: 50%;
      filter: blur(60px);
      z-index: -1;
      opacity: 0.6;
    }
    
    .shape-1 {
      top: -20px;
      left: -20px;
    }
    
    .shape-2 {
      bottom: -20px;
      right: -20px;
      background: var(--secondary);
    }

    /* Section styling */
    section {
      padding: 5rem 0;
    }
    
    .section-header {
      text-align: center;
      margin-bottom: 3rem;
    }
    
    .section-header h2 {
      font-size: 2.5rem;
      font-weight: 700;
      color: var(--dark);
      margin-bottom: 1rem;
    }
    
    .section-header p {
      font-size: 1.1rem;
      color: var(--medium-gray);
      max-width: 700px;
      margin: 0 auto;
    }
    
    .section-title {
      display: inline-flex;
      font-size: 1.25rem;
      font-weight: 600;
      color: var(--primary-dark);
      margin-bottom: 1rem;
      align-items: center;
      gap: 0.5rem;
    }
    
    .section-title i {
      font-size: 1rem;
    }

    /* About Section */
    #about {
      background: var(--white);
    }
    
    .about-container {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 3rem;
      align-items: center;
    }
    
    .about-content h3 {
      font-size: 1.75rem;
      font-weight: 700;
      margin-bottom: 1.5rem;
      color: var(--dark);
    }
    
    .about-content p {
      margin-bottom: 1.5rem;
      color: var(--medium-gray);
    }
    
    .about-image {
      position: relative;
    }
    
    .about-image img {
      border-radius: 1rem;
      box-shadow: var(--shadow-lg);
    }
    
    .about-stats {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1.5rem;
      margin-top: 2rem;
    }
    
    .stat-item {
      background: var(--lighter-gray);
      padding: 1.5rem;
      border-radius: 0.5rem;
      text-align: center;
      transition: var(--transition);
    }
    
    .stat-item:hover {
      transform: translateY(-5px);
      box-shadow: var(--shadow);
    }
    
    .stat-item h4 {
      font-size: 2rem;
      font-weight: 700;
      color: var(--primary-dark);
      margin-bottom: 0.5rem;
    }
    
    .stat-item p {
      font-size: 0.9rem;
      color: var(--medium-gray);
    }

    /* Experience Section */
    #experience {
      background: var(--lighter-gray);
    }
    
    .timeline {
      position: relative;
      max-width: 800px;
      margin: 0 auto;
    }
    
    .timeline::before {
      content: '';
      position: absolute;
      top: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 2px;
      height: 100%;
      background: var(--primary-light);
    }
    
    .timeline-item {
      position: relative;
      margin-bottom: 3rem;
    }
    
    .timeline-item:nth-child(odd) {
      padding-right: calc(50% + 2rem);
      text-align: right;
    }
    
    .timeline-item:nth-child(even) {
      padding-left: calc(50% + 2rem);
    }
    
    .timeline-dot {
      position: absolute;
      top: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background: var(--primary);
      border: 4px solid var(--white);
      box-shadow: 0 0 0 4px var(--primary-light);
    }
    
    .timeline-content {
      background: var(--white);
      padding: 2rem;
      border-radius: 0.5rem;
      box-shadow: var(--shadow);
      transition: var(--transition);
    }
    
    .timeline-content:hover {
      transform: translateY(-5px);
      box-shadow: var(--shadow-md);
    }
    
    .timeline-date {
      display: inline-block;
      padding: 0.25rem 0.75rem;
      background: var(--primary-light);
      color: var(--white);
      border-radius: 20px;
      font-size: 0.8rem;
      font-weight: 600;
      margin-bottom: 1rem;
    }
    
    .timeline-title {
      font-size: 1.25rem;
      font-weight: 700;
      margin-bottom: 0.5rem;
      color: var(--dark);
    }
    
    .timeline-subtitle {
      font-size: 1rem;
      font-weight: 600;
      color: var(--primary-dark);
      margin-bottom: 1rem;
    }
    
    .timeline-description {
      color: var(--medium-gray);
      margin-bottom: 0;
    }

    /* Skills Section */
    #skills {
      background: var(--white);
    }
    
    .skills-container {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 2rem;
    }
    
    .skill-category h3 {
      font-size: 1.5rem;
      font-weight: 700;
      margin-bottom: 1.5rem;
      color: var(--dark);
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }
    
    .skill-category h3 i {
      color: var(--primary);
    }
    
    .skills-list {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 1rem;
    }
    
    .skill-item {
      background: var(--lighter-gray);
      padding: 1rem 1.5rem;
      border-radius: 0.5rem;
      display: flex;
      align-items: center;
      gap: 0.75rem;
      transition: var(--transition);
    }
    
    .skill-item:hover {
      transform: translateY(-3px);
      box-shadow: var(--shadow);
    }
    
    .skill-icon {
      width: 40px;
      height: 40px;
      background: var(--primary-light);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--primary-dark);
    }
    
    .skill-name {
      font-weight: 600;
      color: var(--dark-gray);
    }

    /* Education Section */
    #education {
      background: var(--lighter-gray);
    }
    
    .education-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
    }
    
    .education-card {
      background: var(--white);
      border-radius: 0.5rem;
      overflow: hidden;
      box-shadow: var(--shadow);
      transition: var(--transition);
    }
    
    .education-card:hover {
      transform: translateY(-5px);
      box-shadow: var(--shadow-md);
    }
    
    .education-header {
      background: var(--primary);
      color: var(--white);
      padding: 1.5rem;
    }
    
    .education-degree {
      font-size: 1.25rem;
      font-weight: 700;
      margin-bottom: 0.5rem;
    }
    
    .education-school {
      font-size: 1rem;
      font-weight: 500;
      opacity: 0.9;
    }
    
    .education-body {
      padding: 1.5rem;
    }
    
    .education-detail {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      margin-bottom: 0.5rem;
      color: var(--medium-gray);
    }
    
    .education-detail i {
      color: var(--primary);
    }

    /* Contact Section */
    #contact {
      background: var(--white);
    }
    
    .contact-container {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 3rem;
    }
    
    .contact-info {
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
    }
    
    .contact-card {
      background: var(--lighter-gray);
      padding: 1.5rem;
      border-radius: 0.5rem;
      display: flex;
      align-items: flex-start;
      gap: 1rem;
      transition: var(--transition);
    }
    
    .contact-card:hover {
      transform: translateY(-5px);
      box-shadow: var(--shadow);
    }
    
    .contact-icon {
      width: 50px;
      height: 50px;
      background: var(--primary);
      color: var(--white);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.25rem;
      flex-shrink: 0;
    }
    
    .contact-details h3 {
      font-size: 1.25rem;
      font-weight: 700;
      margin-bottom: 0.5rem;
      color: var(--dark);
    }
    
    .contact-details p, 
    .contact-details a {
      color: var(--medium-gray);
      font-size: 1rem;
    }
    
    .contact-details a:hover {
      color: var(--primary);
    }
    
    .contact-form {
      background: var(--lighter-gray);
      padding: 2rem;
      border-radius: 0.5rem;
      box-shadow: var(--shadow);
    }
    
    .form-group {
      margin-bottom: 1.5rem;
    }
    
    .form-group label {
      display: block;
      font-weight: 600;
      margin-bottom: 0.5rem;
      color: var(--dark-gray);
    }
    
    .form-control {
      width: 100%;
      padding: 0.75rem 1rem;
      border: 1px solid var(--light-gray);
      border-radius: 0.5rem;
      font-family: inherit;
      font-size: 1rem;
      transition: var(--transition);
    }
    
    .form-control:focus {
      outline: none;
      border-color: var(--primary);
      box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2);
    }
    
    textarea.form-control {
      min-height: 150px;
      resize: vertical;
    }

    /* Footer */
    footer {
      background: var(--dark);
      color: var(--white);
      padding: 3rem 0 1.5rem;
    }
    
    .footer-container {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 3rem;
      margin-bottom: 3rem;
    }
    
    .footer-col h3 {
      font-size: 1.25rem;
      font-weight: 700;
      margin-bottom: 1.5rem;
      position: relative;
    }
    
    .footer-col h3::after {
      content: '';
      position: absolute;
      bottom: -0.5rem;
      left: 0;
      width: 50px;
      height: 2px;
      background: var(--primary);
    }
    
    .footer-col p {
      color: var(--light-gray);
      margin-bottom: 1rem;
    }
    
    .social-links {
      display: flex;
      gap: 1rem;
    }
    
    .social-link {
      width: 40px;
      height: 40px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--white);
      transition: var(--transition);
    }
    
    .social-link:hover {
      background: var(--primary);
      transform: translateY(-3px);
    }
    
    .footer-links {
      display: flex;
      flex-direction: column;
      gap: 0.75rem;
    }
    
    .footer-links a {
      color: var(--light-gray);
      transition: var(--transition);
    }
    
    .footer-links a:hover {
      color: var(--primary);
      padding-left: 5px;
    }
    
    .copyright {
      text-align: center;
      padding-top: 1.5rem;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      color: var(--light-gray);
      font-size: 0.9rem;
    }

    /* Back to top button */
    .back-to-top {
      position: fixed;
      bottom: 2rem;
      right: 2rem;
      width: 50px;
      height: 50px;
      background: var(--primary);
      color: var(--white);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.25rem;
      box-shadow: var(--shadow-primary);
      opacity: 0;
      visibility: hidden;
      transition: var(--transition);
      z-index: 99;
    }
    
    .back-to-top.active {
      opacity: 1;
      visibility: visible;
    }
    
    .back-to-top:hover {
      background: var(--primary-dark);
      transform: translateY(-5px);
    }

    /* Responsive styles */
    @media (max-width: 992px) {
      .hero-container,
      .about-container,
      .contact-container {
        grid-template-columns: 1fr;
      }
      
      .hero-content {
        order: 1;
        text-align: center;
      }
      
      .hero-buttons {
        justify-content: center;
      }
      
      .about-image {
        order: -1;
      }
      
      .footer-container {
        grid-template-columns: repeat(2, 1fr);
      }
    }
    
    @media (max-width: 768px) {
      .header-container {
        padding: 0 1rem;
      }
      
      nav {
        position: fixed;
        top: 70px;
        left: 0;
        width: 100%;
        background: var(--primary-dark);
        flex-direction: column;
        align-items: center;
        padding: 1rem 0;
        gap: 1rem;
        box-shadow: var(--shadow-md);
        transform: translateY(-150%);
        transition: var(--transition);
        z-index: 99;
      }
      
      nav.active {
        transform: translateY(0);
      }
      
      .mobile-menu-btn {
        display: block;
      }
      
      .timeline::before {
        left: 1rem;
      }
      
      .timeline-item:nth-child(odd),
      .timeline-item:nth-child(even) {
        padding-left: 2rem;
        padding-right: 0;
        text-align: left;
      }
      
      .timeline-dot {
        left: 0;
      }
      
      .skills-container {
        grid-template-columns: 1fr;
      }
      
      .footer-container {
        grid-template-columns: 1fr;
      }
    }
    
    @media (max-width: 576px) {
      .hero-content h1 {
        font-size: 2.25rem;
      }
      
      .hero-buttons {
        flex-direction: column;
      }
      
      .about-stats {
        grid-template-columns: 1fr;
      }
      
      .skills-list {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>

<header>
  <div class="header-container container">
    <div class="logo">Safdar<span>Dev</span></div>
    <button class="mobile-menu-btn" id="mobileMenuBtn">
      <i class="fas fa-bars"></i>
    </button>
    <nav id="mainNav">
      <a href="#hero">Home</a>
      <a href="#about">About</a>
      <a href="#experience">Experience</a>
      <a href="#skills">Skills</a>
      <a href="#education">Education</a>
      <a href="#contact">Contact</a>
    </nav>
  </div>
</header>

<section id="hero">
  <div class="container hero-container">
    <div class="hero-content">
      <h1>Hi, I'm <span>Safdar Ali</span></h1>
      <p>Backend Developer specializing in PHP, Laravel, and scalable web applications. I build robust systems that deliver real business value.</p>
      <div class="hero-buttons">
        <a href="#contact" class="btn btn-primary">Hire Me</a>
        <a href="#about" class="btn btn-outline">Learn More</a>
      </div>
    </div>
    <div class="hero-image">
      <img src="https://images.unsplash.com/photo-1571171637578-41bc2dd41cd2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Safdar Ali">
      <div class="hero-shape shape-1"></div>
      <div class="hero-shape shape-2"></div>
    </div>
  </div>
</section>

<section id="about">
  <div class="container about-container">
    <div class="about-content">
      <span class="section-title"><i class="fas fa-user"></i> About Me</span>
      <h3>Backend Developer with Laravel Expertise</h3>
      <p>I'm a passionate backend developer with 1+ years of experience building scalable web applications using PHP and Laravel. I specialize in creating custom CMS, LMS, and ERP systems with clean, maintainable code.</p>
      <p>My approach combines technical excellence with business understanding to deliver solutions that solve real problems. I'm particularly skilled at designing RESTful APIs, implementing multi-tenant architectures, and optimizing database performance.</p>
      <div class="about-stats">
        <div class="stat-item">
          <h4>1+</h4>
          <p>Years Experience</p>
        </div>
        <div class="stat-item">
          <h4>15+</h4>
          <p>Projects Completed</p>
        </div>
        <div class="stat-item">
          <h4>100%</h4>
          <p>Client Satisfaction</p>
        </div>
      </div>
    </div>
    <div class="about-image">
      <img src="https://images.unsplash.com/photo-1551033406-611cf9a28f67?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="About Safdar">
    </div>
  </div>
</section>

<section id="experience">
  <div class="container">
    <div class="section-header">
      <h2>My Experience</h2>
      <p>Professional journey and key contributions to various organizations</p>
    </div>
    <div class="timeline">
      <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-content">
          <span class="timeline-date">Feb 2024 - Present</span>
          <h3 class="timeline-title">Software Developer</h3>
          <p class="timeline-subtitle">Edtech Innovate Pvt. Ltd</p>
          <p class="timeline-description">
            Developed tailored CMS, LMS, and ERP systems using Laravel and MySQL. Created subdomain-based multi-tenant CMS with isolated databases. Designed RESTful APIs with token-based authentication and implemented Laravel Jetstream + Breeze for authentication.
          </p>
        </div>
      </div>
      <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-content">
          <span class="timeline-date">Sep 2023 - Dec 2023</span>
          <h3 class="timeline-title">Intern</h3>
          <p class="timeline-subtitle">Smart Data Enterprises, Mohali</p>
          <p class="timeline-description">
            Developed Laravel backend modules for inventory and product management with AJAX CRUD operations. Integrated Pincode API for automatic location filling and created secure RESTful APIs for frontend integration.
          </p>
        </div>
      </div>
      <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-content">
          <span class="timeline-date">Jun 2022 - Jul 2022</span>
          <h3 class="timeline-title">Trainee</h3>
          <p class="timeline-subtitle">National Informatics Center (NIC)</p>
          <p class="timeline-description">
            Developed a file storage system handling multiple file formats using C and QT Creator. Designed and implemented the software UI using QT Creator for seamless user interaction.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="skills">
  <div class="container">
    <div class="section-header">
      <h2>My Skills</h2>
      <p>Technical proficiencies and development capabilities</p>
    </div>
    <div class="skills-container">
      <div class="skill-category">
        <h3><i class="fas fa-code"></i> Backend Development</h3>
        <ul class="skills-list">
          <li class="skill-item">
            <div class="skill-icon">
              <i class="fab fa-php"></i>
            </div>
            <span class="skill-name">PHP & Laravel</span>
          </li>
          <li class="skill-item">
            <div class="skill-icon">
              <i class="fas fa-database"></i>
            </div>
            <span class="skill-name">MySQL & Database Design</span>
          </li>
          <li class="skill-item">
            <div class="skill-icon">
              <i class="fas fa-server"></i>
            </div>
            <span class="skill-name">RESTful APIs</span>
          </li>
          <li class="skill-item">
            <div class="skill-icon">
              <i class="fas fa-sitemap"></i>
            </div>
            <span class="skill-name">MVC Architecture</span>
          </li>
        </ul>
      </div>
      <div class="skill-category">
        <h3><i class="fas fa-laptop-code"></i> Frontend & Other Skills</h3>
        <ul class="skills-list">
          <li class="skill-item">
            <div class="skill-icon">
              <i class="fab fa-html5"></i>
            </div>
            <span class="skill-name">HTML5, CSS3, Bootstrap</span>
          </li>
          <li class="skill-item">
            <div class="skill-icon">
              <i class="fab fa-js"></i>
            </div>
            <span class="skill-name">JavaScript, jQuery, AJAX</span>
          </li>
          <li class="skill-item">
            <div class="skill-icon">
              <i class="fab fa-git-alt"></i>
            </div>
            <span class="skill-name">Git & Version Control</span>
          </li>
          <li class="skill-item">
            <div class="skill-icon">
              <i class="fas fa-shield-alt"></i>
            </div>
            <span class="skill-name">API Security</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section id="education">
  <div class="container">
    <div class="section-header">
      <h2>My Education</h2>
      <p>Academic background and qualifications</p>
    </div>
    <div class="education-grid">
      <div class="education-card">
        <div class="education-header">
          <h3 class="education-degree">B.Tech in Computer Science</h3>
          <p class="education-school">Quantum University, Roorkee</p>
        </div>
        <div class="education-body">
          <div class="education-detail">
            <i class="fas fa-calendar-alt"></i>
            <span>2019 - 2024</span>
          </div>
          <div class="education-detail">
            <i class="fas fa-map-marker-alt"></i>
            <span>Uttarakhand, India</span>
          </div>
        </div>
      </div>
      <div class="education-card">
        <div class="education-header">
          <h3 class="education-degree">12th Standard</h3>
          <p class="education-school">Bright Home Public School</p>
        </div>
        <div class="education-body">
          <div class="education-detail">
            <i class="fas fa-calendar-alt"></i>
            <span>2018 - 2019</span>
          </div>
          <div class="education-detail">
            <i class="fas fa-map-marker-alt"></i>
            <span>Saharanpur, Uttar Pradesh</span>
          </div>
        </div>
      </div>
      <div class="education-card">
        <div class="education-header">
          <h3 class="education-degree">10th Standard</h3>
          <p class="education-school">Wisdom Valley Academy</p>
        </div>
        <div class="education-body">
          <div class="education-detail">
            <i class="fas fa-calendar-alt"></i>
            <span>2016 - 2017</span>
          </div>
          <div class="education-detail">
            <i class="fas fa-map-marker-alt"></i>
            <span>Roorkee, Uttar Pradesh</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="contact">
  <div class="container">
    <div class="section-header">
      <h2>Get In Touch</h2>
      <p>Feel free to contact me for any opportunities or collaborations</p>
    </div>
    <div class="contact-container">
      <div class="contact-info">
        <div class="contact-card">
          <div class="contact-icon">
            <i class="fas fa-envelope"></i>
          </div>
          <div class="contact-details">
            <h3>Email</h3>
            <a href="mailto:safdarali.cse@gmail.com">safdarali.cse@gmail.com</a>
          </div>
        </div>
        <div class="contact-card">
          <div class="contact-icon">
            <i class="fas fa-phone-alt"></i>
          </div>
          <div class="contact-details">
            <h3>Phone</h3>
            <a href="tel:+919568890557">+91 9568890557</a>
          </div>
        </div>
        <div class="contact-card">
          <div class="contact-icon">
            <i class="fab fa-linkedin-in"></i>
          </div>
          <div class="contact-details">
            <h3>LinkedIn</h3>
            <a href="https://www.linkedin.com/in/safdar-ali-4458a71a3" target="_blank">linkedin.com/in/safdar-ali</a>
          </div>
        </div>
      </div>
      <div class="contact-form">
        <form id="contactForm">
          <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" id="name" class="form-control" placeholder="Enter your name" required>
          </div>
          <div class="form-group">
            <label for="email">Your Email</label>
            <input type="email" id="email" class="form-control" placeholder="Enter your email" required>
          </div>
          <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" id="subject" class="form-control" placeholder="Enter subject">
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" class="form-control" placeholder="Enter your message" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
      </div>
    </div>
  </div>
</section>

<footer>
  <div class="container">
    <div