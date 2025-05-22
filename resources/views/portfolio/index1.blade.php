<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Safdar Ali | Backend Developer Portfolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <style>
    /* Reset & Base */
    * {
      margin: 0; padding: 0; box-sizing: border-box;
      font-family: 'Inter', sans-serif;
    }
    body {
      background: linear-gradient(135deg, #f0f4ff 0%, #e5e9ff 100%);
      color: #222831;
      line-height: 1.7;
      font-size: 16px;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      scroll-behavior: smooth;
    }
    a {
      color: #3b82f6;
      text-decoration: none;
      font-weight: 600;
      transition: color 0.3s ease;
    }
    a:hover, a:focus {
      color: #1e40af;
      text-decoration: underline;
      outline: none;
    }

    /* Container */
    .container {
      max-width: 900px;
      margin: 3rem auto 5rem;
      padding: 0 1.25rem;
    }

    /* Header */
    header {
      background: #3b82f6;
      color: #f9fafb;
      padding: 2rem 0;
      text-align: center;
      box-shadow: 0 6px 12px rgb(59 130 246 / 0.4);
      border-radius: 0 0 12px 12px;
      user-select: none;
    }
    header h1 {
      font-weight: 700;
      font-size: 2.75rem;
      letter-spacing: 3px;
      text-transform: uppercase;
      font-style: italic;
      text-shadow: 0 2px 6px rgba(0,0,0,0.15);
    }

    /* Navigation */
    nav {
      display: flex;
      justify-content: center;
      gap: 2.2rem;
      margin: 2rem 0 3rem;
      flex-wrap: wrap;
    }
    nav a {
      padding: 0.5rem 1.2rem;
      border-radius: 8px;
      background-color: #e0e7ff;
      color: #3730a3;
      box-shadow: 0 2px 6px rgb(59 130 246 / 0.3);
      transition: background-color 0.3s ease, color 0.3s ease, box-shadow 0.3s ease;
    }
    nav a:hover, nav a:focus {
      background-color: #3b82f6;
      color: #f9fafb;
      box-shadow: 0 8px 20px rgb(59 130 246 / 0.6);
      outline: none;
    }

    /* Section Titles */
    h2 {
      font-size: 2rem;
      margin-bottom: 1.3rem;
      color: #1e293b;
      border-bottom: 4px solid #3b82f6;
      padding-bottom: 0.5rem;
      max-width: max-content;
      letter-spacing: 1px;
      font-weight: 700;
      text-transform: uppercase;
      user-select: none;
    }

    /* About Section */
    #about p {
      font-size: 1.15rem;
      color: #334155;
      margin-bottom: 2rem;
      line-height: 1.8;
      text-align: justify;
    }

    /* Cards */
    section div.card {
      background: #fff;
      padding: 1.4rem 1.8rem;
      margin-bottom: 2rem;
      border-radius: 14px;
      box-shadow: 0 6px 20px rgb(59 130 246 / 0.12);
      transition: box-shadow 0.4s ease, transform 0.3s ease;
      cursor: default;
    }
    section div.card:hover, section div.card:focus-within {
      box-shadow: 0 12px 30px rgb(59 130 246 / 0.3);
      transform: translateY(-5px);
    }
    .card h3 {
      color: #2563eb;
      font-weight: 700;
      font-size: 1.4rem;
      margin-bottom: 0.4rem;
      user-select: text;
    }
    .card .subheading {
      font-weight: 600;
      color: #64748b;
      font-size: 1rem;
      margin-bottom: 1rem;
      font-style: italic;
      user-select: text;
    }
    .card p {
      font-size: 1rem;
      color: #475569;
      margin-bottom: 0.5rem;
      line-height: 1.5;
      user-select: text;
    }

    /* Skills List */
    ul.skills-list {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem 1.4rem;
      margin-bottom: 3rem;
      justify-content: center;
    }
    ul.skills-list li {
      background: #3b82f6;
      color: #f9fafb;
      padding: 0.65rem 1.4rem;
      border-radius: 30px;
      font-weight: 700;
      font-size: 1rem;
      box-shadow: 0 5px 15px rgb(59 130 246 / 0.4);
      user-select: none;
      transition: background-color 0.3s ease;
    }
    ul.skills-list li:hover {
      background-color: #2563eb;
      box-shadow: 0 8px 20px rgb(37 99 235 / 0.7);
    }

    /* Contact Section */
    #contact p {
      font-size: 1.1rem;
      color: #334155;
      margin-bottom: 1rem;
      line-height: 1.6;
    }
    #contact a {
      font-weight: 700;
      color: #2563eb;
      word-break: break-word;
    }
    #contact a:hover {
      color: #1e40af;
      text-decoration: underline;
    }

    /* Footer */
    footer {
      text-align: center;
      padding: 1.3rem 1rem;
      color: #64748b;
      font-size: 0.95rem;
      margin-top: 5rem;
      border-top: 1px solid #cbd5e1;
      user-select: none;
    }

    /* Responsive */
    @media (max-width: 640px) {
      nav {
        gap: 1rem;
      }
      nav a {
        font-size: 0.95rem;
        padding: 0.5rem 1rem;
      }
      .container {
        margin: 2rem auto 4rem;
        padding: 0 1rem;
      }
      h2 {
        font-size: 1.6rem;
      }
      header h1 {
        font-size: 2rem;
        letter-spacing: 2px;
      }
      ul.skills-list {
        justify-content: center;
      }
    }
  </style>
</head>
<body>

<header>
  <h1>Safdar Ali</h1>
</header>

<nav>
  <a href="#about">About</a>
  <a href="#experience">Experience</a>
  <a href="#education">Education</a>
  <a href="#skills">Skills</a>
  <a href="#contact">Contact</a>
</nav>

<div class="container">

  <section id="about">
    <h2>About Me</h2>
    <p>
      Backend Developer with 1+ year of experience in backend development using PHP, Laravel, and modern web technologies. Skilled in building CMS, LMS, ERP systems with MySQL, RESTful APIs, and multi-tenant architectures. Experienced integrating frontend tools like HTML, Bootstrap, jQuery, and AJAX. Committed to building clean, scalable systems that solve real-world problems and deliver business value.
    </p>
  </section>

  <section id="experience">
    <h2>Work Experience</h2>

    <div class="card" tabindex="0">
      <h3>Software Developer</h3>
      <div class="subheading">Edtech Innovate Pvt. Ltd | Feb 2024 - Present</div>
      <p><strong>Custom Platform Development:</strong> Developed tailored CMS, LMS, and ERP systems using Laravel and MySQL.</p>
      <p><strong>Modern Tech Stack:</strong> PHP, Laravel, MySQL backend with HTML, Bootstrap, jQuery, and AJAX frontend integration.</p>
      <p><strong>Multi-Tenant Architecture:</strong> Created subdomain-based multi-tenant CMS with isolated databases on a centralized codebase.</p>
      <p><strong>API-First Development:</strong> Designed RESTful APIs with token-based authentication and secure data handling.</p>
      <p><strong>Advanced Laravel:</strong> Used Laravel Jetstream + Breeze for authentication, RBAC, and OTP-based login.</p>
      <p><strong>Performance & Security:</strong> Optimized queries, implemented SMTP account recovery, and contributed to Agile sprints while mentoring interns.</p>
    </div>

    <div class="card" tabindex="0">
      <h3>Intern</h3>
      <div class="subheading">Smart Data Enterprises, Mohali | Sep 2023 - Dec 2023</div>
      <p>Developed Laravel backend modules for inventory and product management with AJAX CRUD operations.</p>
      <p>Integrated Pincode API for automatic location filling and created secure RESTful APIs for frontend integration.</p>
      <p>Enforced frontend and backend data validation to maintain data integrity.</p>
    </div>

    <div class="card" tabindex="0">
      <h3>Trainee</h3>
      <div class="subheading">National Informatics Center (NIC) | Jun 2022 - Jul 2022</div>
      <p>Developed a file storage system handling multiple file formats using C and QT Creator.</p>
      <p>Designed and implemented the software UI using QT Creator for seamless user interaction.</p>
    </div>
  </section>

  <section id="education">
    <h2>Education</h2>
    <div class="card" tabindex="0">
      <h3>Bachelor of Technology (B.Tech) in Computer Science & Engineering</h3>
      <div class="subheading">Quantum University, Roorkee, Uttarakhand, India | 2019 - 2024</div>
    </div>
    <div class="card" tabindex="0">
      <h3>12th Standard</h3>
      <div class="subheading">Bright Home Public School, Saharanpur, Uttar Pradesh, India</div>
    </div>
    <div class="card" tabindex="0">
      <h3>10th Standard</h3>
      <div class="subheading">Wisdom Valley Academy, Roorkee, Uttar Pradesh, India</div>
    </div>
  </section>

  <section id="skills">
    <h2>Skills</h2>
    <ul class="skills-list" aria-label="Skills list">
      <li>PHP & Laravel</li>
      <li>MySQL & Database Design</li>
      <li>RESTful APIs & MVC Architecture</li>
      <li>HTML5, CSS3, Bootstrap</li>
      <li>JavaScript, jQuery, AJAX</li>
      <li>Git & Version Control</li>
      <li>Multi-Tenant Systems & RBAC</li>
      <li>API Security & Token-based Authentication</li>
      <li>Analytical Thinking & Problem Solving</li>
      <li>Team Collaboration & Communication</li>
    </ul>
  </section>

  <section id="contact">
    <h2>Contact Me</h2>
    <p><strong>Phone:</strong> +91 9568890557</p>
    <p><strong>Email:</strong> <a href="mailto:safdarali.cse@gmail.com">safdarali.cse@gmail.com</a></p>
    <p><strong>LinkedIn:</strong> <a href="https://www.linkedin.com/in/safdar-ali-4458a71a3" target="_blank" rel="noopener noreferrer">linkedin.com/in/safdar-ali-4458a71a3</a></p>
    <p><strong>GitHub:</strong> <a href="https://github.com/SafdarAliDev" target="_blank" rel="noopener noreferrer">github.com/SafdarAliDev</a></p>
  </section>

</div>

<footer>
  &copy; 2025 Safdar Ali. All rights reserved.
</footer>

</body>
</html>
