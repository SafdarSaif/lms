<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Safdar Ali | Backend Developer Portfolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    /* Reset & base */
    * {
      margin: 0; padding: 0; box-sizing: border-box;
      font-family: 'Inter', sans-serif;
    }
    body {
      background: #f5f7fa;
      color: #333;
      line-height: 1.6;
    }
    a {
      color: #4f46e5;
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }

    /* Container */
    .container {
      max-width: 900px;
      margin: 2rem auto;
      padding: 0 1rem;
    }

    header {
      background: #4f46e5;
      color: white;
      padding: 1.2rem 0;
      text-align: center;
      box-shadow: 0 3px 8px rgb(79 70 229 / 0.3);
    }
    header h1 {
      font-weight: 700;
      font-size: 2rem;
      letter-spacing: 2px;
    }

    /* Section titles */
    h2 {
      font-size: 1.75rem;
      margin-bottom: 1rem;
      color: #1e293b;
      border-bottom: 3px solid #4f46e5;
      padding-bottom: 0.3rem;
      max-width: max-content;
    }

    /* About Section */
    #about p {
      margin-bottom: 1.5rem;
      font-size: 1.1rem;
      color: #475569;
    }

    /* Contact Section */
    #contact a {
      font-weight: 600;
    }

    /* List styling */
    ul {
      list-style: none;
    }
    ul.skills-list {
      display: flex;
      flex-wrap: wrap;
      gap: 0.8rem 1.2rem;
      margin-bottom: 2rem;
    }
    ul.skills-list li {
      background: #e0e7ff;
      color: #3730a3;
      padding: 0.5rem 1rem;
      border-radius: 20px;
      font-weight: 600;
      font-size: 0.9rem;
      box-shadow: 0 2px 5px rgb(59 130 246 / 0.2);
    }

    /* Work Experience, Education, Projects */
    section div.card {
      background: white;
      padding: 1rem 1.2rem;
      margin-bottom: 1.5rem;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgb(0 0 0 / 0.08);
      transition: box-shadow 0.3s ease;
    }
    section div.card:hover {
      box-shadow: 0 5px 15px rgb(79 70 229 / 0.3);
    }
    .card h3 {
      color: #4f46e5;
      margin-bottom: 0.3rem;
    }
    .card .subheading {
      font-weight: 600;
      color: #64748b;
      font-size: 0.9rem;
      margin-bottom: 0.6rem;
    }
    .card p {
      font-size: 0.95rem;
      color: #334155;
      margin-bottom: 0.4rem;
    }

    /* Footer */
    footer {
      text-align: center;
      padding: 1rem 0;
      color: #94a3b8;
      font-size: 0.9rem;
      margin-top: 3rem;
      border-top: 1px solid #e2e8f0;
    }

    /* Navigation */
    nav {
      display: flex;
      justify-content: center;
      gap: 2rem;
      margin: 1rem 0 2rem;
    }
    nav a {
      font-weight: 600;
      padding: 0.4rem 0.8rem;
      border-radius: 6px;
      transition: background-color 0.3s ease;
    }
    nav a:hover {
      background-color: #c7d2fe;
      color: #3730a3;
    }

    /* Responsive */
    @media (max-width: 600px) {
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

    <div class="card">
      <h3>Software Developer</h3>
      <div class="subheading">Edtech Innovate Pvt. Ltd | Feb 2024 - Present</div>
      <p><strong>Custom Platform Development:</strong> Developed tailored CMS, LMS, and ERP systems using Laravel and MySQL.</p>
      <p><strong>Modern Tech Stack:</strong> PHP, Laravel, MySQL backend with HTML, Bootstrap, jQuery, and AJAX frontend integration.</p>
      <p><strong>Multi-Tenant Architecture:</strong> Created subdomain-based multi-tenant CMS with isolated databases on a centralized codebase.</p>
      <p><strong>API-First Development:</strong> Designed RESTful APIs with token-based authentication and secure data handling.</p>
      <p><strong>Advanced Laravel:</strong> Used Laravel Jetstream + Breeze for authentication, RBAC, and OTP-based login.</p>
      <p><strong>Performance & Security:</strong> Optimized queries, implemented SMTP account recovery, and contributed to Agile sprints while mentoring interns.</p>
    </div>

    <div class="card">
      <h3>Intern</h3>
      <div class="subheading">Smart Data Enterprises, Mohali | Sep 2023 - Dec 2023</div>
      <p>Developed Laravel backend modules for inventory and product management with AJAX CRUD operations.</p>
      <p>Integrated Pincode API for automatic location filling and created secure RESTful APIs for frontend integration.</p>
      <p>Enforced frontend and backend data validation to maintain data integrity.</p>
    </div>

    <div class="card">
      <h3>Trainee</h3>
      <div class="subheading">National Informatics Center (NIC) | Jun 2022 - Jul 2022</div>
      <p>Developed a file storage system handling multiple file formats using C and QT Creator.</p>
      <p>Designed and implemented the software UI using QT Creator for seamless user interaction.</p>
    </div>
  </section>

  <section id="education">
    <h2>Education</h2>
    <div class="card">
      <h3>Bachelor of Technology (B.Tech) in Computer Science & Engineering</h3>
      <div class="subheading">Quantum University, Roorkee, Uttarakhand, India | 2019 - 2024</div>
    </div>
    <div class="card">
      <h3>12th Standard</h3>
      <div class="subheading">Bright Home Public School, Saharanpur, Uttar Pradesh, India</div>
    </div>
    <div class="card">
      <h3>10th Standard</h3>
      <div class="subheading">Wisdom Valley Academy, Roorkee, Uttar Pradesh, India</div>
    </div>
  </section>

  <section id="skills">
    <h2>Skills</h2>
    <ul class="skills-list">
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
  </section>

</div>

<footer>
  &copy; 2025 Safdar Ali | Developed by Safdar Dev
</footer>

</body>
</html>
