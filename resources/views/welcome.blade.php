<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portofolio syabil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Reset dan Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        :root {
            --primary-color: #2563eb;
            --secondary-color: #1e40af;
            --accent-color: #3b82f6;
            --dark-color: #1e293b;
            --light-color: #f8fafc;
            --gray-color: #64748b;
            --shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }
        
        body {
            line-height: 1.6;
            color: var(--dark-color);
            background-color: var(--light-color);
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        section {
            padding: 80px 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            color: var(--dark-color);
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }
        
        .section-title h2::after {
            content: '';
            position: absolute;
            width: 70px;
            height: 4px;
            background-color: var(--primary-color);
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }
        
        .section-title p {
            color: var(--gray-color);
            max-width: 700px;
            margin: 0 auto;
            font-size: 1.1rem;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
            box-shadow: var(--shadow);
        }
        
        .btn:hover {
            background-color: var(--secondary-color);
            transform: translateY(-3px);
        }
        
        /* Header & Navigation */
        header {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-color);
            text-decoration: none;
        }
        
        .logo span {
            color: var(--dark-color);
        }
        
        .nav-links {
            display: flex;
            list-style: none;
        }
        
        .nav-links li {
            margin-left: 30px;
        }
        
        .nav-links a {
            text-decoration: none;
            color: var(--dark-color);
            font-weight: 600;
            font-size: 1rem;
            transition: var(--transition);
            padding: 5px 0;
            position: relative;
        }
        
        .nav-links a:hover {
            color: var(--primary-color);
        }
        
        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background-color: var(--primary-color);
            bottom: 0;
            left: 0;
            transition: var(--transition);
        }
        
        .nav-links a:hover::after {
            width: 100%;
        }
        
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--dark-color);
            cursor: pointer;
        }
        
        /* Hero Section */
        .hero {
            padding-top: 150px;
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            overflow: hidden;
        }
        
        .hero-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .hero-text {
            flex: 1;
            padding-right: 30px;
        }
        
        .hero-text h1 {
            font-size: 3.2rem;
            margin-bottom: 20px;
            line-height: 1.2;
        }
        
        .hero-text h1 span {
            color: var(--primary-color);
        }
        
        .hero-text p {
            font-size: 1.2rem;
            color: var(--gray-color);
            margin-bottom: 30px;
            max-width: 600px;
        }
        
        .hero-image {
            flex: 1;
            text-align: center;
        }
        
        .hero-image img {
            max-width: 100%;
            border-radius: 20px;
            box-shadow: var(--shadow);
            transform: perspective(1000px) rotateY(-10deg);
            transition: var(--transition);
        }
        
        .hero-image img:hover {
            transform: perspective(1000px) rotateY(0deg);
        }
        
        /* About Section */
        .about-content {
            display: flex;
            align-items: center;
            gap: 50px;
        }
        
        .about-image {
            flex: 1;
        }
        
        .about-image img {
            width: 100%;
            border-radius: 10px;
            box-shadow: var(--shadow);
        }
        
        .about-text {
            flex: 1;
        }
        
        .about-text h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: var(--dark-color);
        }
        
        .about-text p {
            margin-bottom: 20px;
            color: var(--gray-color);
        }
        
        .skills {
            margin-top: 30px;
        }
        
        .skill-item {
            margin-bottom: 20px;
        }
        
        .skill-name {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
        }
        
        .skill-bar {
            height: 8px;
            background-color: #e2e8f0;
            border-radius: 4px;
            overflow: hidden;
        }
        
        .skill-progress {
            height: 100%;
            background-color: var(--primary-color);
            border-radius: 4px;
        }
        
        /* Portfolio Section */
        .portfolio {
            background-color: #f8fafc;
        }
        
        .portfolio-filter {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }
        
        .filter-btn {
            padding: 8px 20px;
            margin: 0 5px 10px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 30px;
            cursor: pointer;
            transition: var(--transition);
            font-weight: 600;
        }
        
        .filter-btn.active, .filter-btn:hover {
            background-color: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }
        
        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .portfolio-item {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }
        
        .portfolio-item:hover {
            transform: translateY(-10px);
        }
        
        .portfolio-img {
            height: 200px;
            overflow: hidden;
        }
        
        .portfolio-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }
        
        .portfolio-item:hover .portfolio-img img {
            transform: scale(1.05);
        }
        
        .portfolio-info {
            padding: 20px;
        }
        
        .portfolio-info h3 {
            margin-bottom: 10px;
            font-size: 1.3rem;
        }
        
        .portfolio-info p {
            color: var(--gray-color);
            font-size: 0.9rem;
        }
        
        /* Services Section */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .service-card {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            text-align: center;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
        }
        
        .service-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        
        .service-card h3 {
            margin-bottom: 15px;
            font-size: 1.5rem;
        }
        
        .service-card p {
            color: var(--gray-color);
        }
        
        /* Contact Section */
        .contact {
            background-color: #f8fafc;
        }
        
        .contact-content {
            display: flex;
            gap: 50px;
        }
        
        .contact-info {
            flex: 1;
        }
        
        .contact-form {
            flex: 1;
        }
        
        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 30px;
        }
        
        .contact-icon {
            font-size: 1.5rem;
            color: var(--primary-color);
            margin-right: 15px;
            margin-top: 5px;
        }
        
        .contact-text h3 {
            margin-bottom: 5px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }
        
        .form-group textarea {
            min-height: 150px;
            resize: vertical;
        }
        
        /* Footer */
        footer {
            background-color: var(--dark-color);
            color: white;
            padding: 60px 0 30px;
        }
        
        .footer-content {
            display: flex;
            justify-content: space-between;
            margin-bottom: 40px;
        }
        
        .footer-logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: white;
            text-decoration: none;
            margin-bottom: 20px;
            display: inline-block;
        }
        
        .footer-links {
            display: flex;
            flex-direction: column;
        }
        
        .footer-links a {
            color: #cbd5e1;
            text-decoration: none;
            margin-bottom: 10px;
            transition: var(--transition);
        }
        
        .footer-links a:hover {
            color: white;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
        }
        
        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            border-radius: 50%;
            font-size: 1.2rem;
            transition: var(--transition);
        }
        
        .social-links a:hover {
            background-color: var(--primary-color);
            transform: translateY(-5px);
        }
        
        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #cbd5e1;
            font-size: 0.9rem;
        }
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            .hero-content, .about-content, .contact-content {
                flex-direction: column;
            }
            
            .hero-text, .about-text, .contact-info, .contact-form {
                padding-right: 0;
                margin-bottom: 40px;
            }
            
            .hero-text h1 {
                font-size: 2.8rem;
            }
        }
        
        @media (max-width: 768px) {
            .navbar {
                padding: 15px 0;
            }
            
            .nav-links {
                position: fixed;
                top: 70px;
                left: 0;
                background-color: white;
                width: 100%;
                flex-direction: column;
                align-items: center;
                padding: 20px 0;
                box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
                transform: translateY(-100%);
                opacity: 0;
                transition: var(--transition);
                z-index: 999;
            }
            
            .nav-links.active {
                transform: translateY(0);
                opacity: 1;
            }
            
            .nav-links li {
                margin: 10px 0;
            }
            
            .mobile-menu-btn {
                display: block;
            }
            
            .hero-text h1 {
                font-size: 2.2rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .footer-content {
                flex-direction: column;
                gap: 30px;
            }
        }
        
        @media (max-width: 576px) {
            .hero-text h1 {
                font-size: 1.8rem;
            }
            
            .btn {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
            
            .portfolio-grid, .services-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header & Navigation -->
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="#" class="logo">Porto<span>folio.</span></a>
                
                <ul class="nav-links">
                    <li><a href="#home">Beranda</a></li>
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#portfolio">Portofolio</a></li>
                    <li><a href="#services">Layanan</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
                
                <button class="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </button>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Halo, Saya <span>syabil</span></h1>
                    <h1>Web Developer</h1>
                    <p>Saya seorang pengembang web berpengalaman yang berspesialisasi dalam membangun aplikasi web modern menggunakan Laravel, React, dan teknologi terbaru lainnya. Saya senang menciptakan solusi digital yang efisien dan menarik.</p>
                    <a href="#portfolio" class="btn">Lihat Portofolio</a>
                    <a href="/about" class="btn" style="margin-left: 15px; background-color: #1e40af;">
Hubungi Saya
</a>

                </div>
                <div class="hero-image">
                    <img src="/download.jpg" alt="donwload.jpg">
                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-title">
                <h2>Tentang Saya</h2>
                <p>Saya memiliki pengalaman lebih dari 5 tahun dalam pengembangan web dengan fokus pada teknologi modern dan best practices.</p>
            </div>
            
            <div class="about-content">
                <div class="about-image">
                    <!-- Placeholder untuk gambar tentang -->
                    <div style="width: 100%; height: 400px; background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: var(--dark-color); font-size: 1.2rem; font-weight: bold; box-shadow: var(--shadow);">
                        <div style="text-align: center; padding: 20px;">
                            <i class="fas fa-user-tie" style="font-size: 4rem; margin-bottom: 20px; color: var(--primary-color);"></i>
                            <div>Pengalaman 5+ Tahun</div>
                            <div style="font-size: 1rem; font-weight: normal; margin-top: 10px;">Dalam pengembangan web</div>
                        </div>
                    </div>
                </div>
                <div class="about-text">
                    <h3>Spesialis Pengembangan Web</h3>
                    <p>Saya adalah seorang Full Stack Developer dengan passion untuk menciptakan aplikasi web yang menarik, fungsional, dan efisien. Saya memiliki pengalaman luas dalam berbagai teknologi termasuk Laravel, React, Vue.js, dan database SQL/NoSQL.</p>
                    <p>Saya senang bekerja pada proyek-proyek yang menantang dan selalu berusaha untuk mempelajari teknologi terbaru untuk memberikan solusi terbaik kepada klien.</p>
                    
                    <div class="skills">
                        <div class="skill-item">
                            <div class="skill-name">
                                <span>Laravel</span>
                                <span>95%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 95%;"></div>
                            </div>
                        </div>
                        
                        <div class="skill-item">
                            <div class="skill-name">
                                <span>React</span>
                                <span>90%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 90%;"></div>
                            </div>
                        </div>
                        
                        <div class="skill-item">
                            <div class="skill-name">
                                <span>JavaScript</span>
                                <span>95%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 95%;"></div>
                            </div>
                        </div>
                        
                        <div class="skill-item">
                            <div class="skill-name">
                                <span>PHP</span>
                                <span>90%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 90%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="section-title">
                <h2>Portofolio</h2>
                <p>Berikut adalah beberapa proyek terbaru yang telah saya kerjakan menggunakan berbagai teknologi modern.</p>
            </div>
            
            <div class="portfolio-filter">
                <button class="filter-btn active" data-filter="all">Semua</button>
                <button class="filter-btn" data-filter="laravel">Laravel</button>
                <button class="filter-btn" data-filter="react">React</button>
                <button class="filter-btn" data-filter="vue">Vue.js</button>
                <button class="filter-btn" data-filter="fullstack">Full Stack</button>
            </div>
            
            <div class="portfolio-grid">
                <!-- Portfolio Item 1 -->
                <div class="portfolio-item" data-category="laravel">
                    <div class="portfolio-img">
                        <div style="width: 100%; height: 200px; background-color: #3b82f6; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                            <i class="fab fa-laravel" style="font-size: 4rem;"></i>
                        </div>
                    </div>
                    <div class="portfolio-info">
                        <h3>Sistem Manajemen Inventory</h3>
                        <p>Aplikasi web untuk mengelola inventory dengan fitur lengkap menggunakan Laravel dan MySQL.</p>
                    </div>
                </div>
                
                <!-- Portfolio Item 2 -->
                <div class="portfolio-item" data-category="react">
                    <div class="portfolio-img">
                        <div style="width: 100%; height: 200px; background-color: #61dafb; display: flex; align-items: center; justify-content: center; color: #20232a; font-size: 1.5rem;">
                            <i class="fab fa-react" style="font-size: 4rem;"></i>
                        </div>
                    </div>
                    <div class="portfolio-info">
                        <h3>Aplikasi Dashboard Analytics</h3>
                        <p>Dashboard real-time dengan visualisasi data menggunakan React, Chart.js, dan REST API.</p>
                    </div>
                </div>
                
                <!-- Portfolio Item 3 -->
                <div class="portfolio-item" data-category="fullstack">
                    <div class="portfolio-img">
                        <div style="width: 100%; height: 200px; background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%); display: flex; align-items: center; justify-content: center; color: var(--dark-color); font-size: 1.5rem;">
                            <i class="fas fa-shopping-cart" style="font-size: 4rem; color: var(--primary-color);"></i>
                        </div>
                    </div>
                    <div class="portfolio-info">
                        <h3>E-Commerce Platform</h3>
                        <p>Platform e-commerce lengkap dengan Laravel backend dan React frontend.</p>
                    </div>
                </div>
                
                <!-- Portfolio Item 4 -->
                <div class="portfolio-item" data-category="vue">
                    <div class="portfolio-img">
                        <div style="width: 100%; height: 200px; background-color: #42b883; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                            <i class="fab fa-vuejs" style="font-size: 4rem;"></i>
                        </div>
                    </div>
                    <div class="portfolio-info">
                        <h3>Aplikasi Manajemen Proyek</h3>
                        <p>Aplikasi kolaborasi tim dengan Vue.js dan Firebase untuk real-time updates.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-title">
                <h2>Layanan</h2>
                <p>Saya menawarkan berbagai layanan pengembangan web untuk memenuhi kebutuhan bisnis digital Anda.</p>
            </div>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Pengembangan Web</h3>
                    <p>Membangun aplikasi web responsif dan dinamis menggunakan teknologi terbaru seperti Laravel, React, dan Vue.js.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Web Responsif</h3>
                    <p>Membuat website yang optimal di semua perangkat, dari desktop hingga mobile dengan desain yang menarik.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3>Backend Development</h3>
                    <p>Mengembangkan API dan sistem backend yang aman, skalabel, dan efisien menggunakan PHP dan Laravel.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3>UI/UX Design</h3>
                    <p>Mendesain antarmuka pengguna yang intuitif dan menarik untuk meningkatkan pengalaman pengguna.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>SEO Optimization</h3>
                    <p>Mengoptimalkan website untuk mesin pencari agar mendapatkan peringkat lebih tinggi di hasil pencarian.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Maintenance & Support</h3>
                    <p>Memberikan layanan pemeliharaan dan dukungan untuk memastikan website berjalan dengan optimal.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Kontak</h2>
                <p>Hubungi saya untuk mendiskusikan proyek Anda atau sekadar berkenalan.</p>
            </div>
            
            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Lokasi</h3>
                            <p>Samarinda, Indonesia</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Email</h3>
                            <p>sabillataawan123@gmail.com/p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Telepon</h3>
                            <p>+62 812 3456 7890</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                    </div>
                
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="form-group">
                            <input type="text" placeholder="Nama Lengkap" required>
                        </div>
                        
                        <div class="form-group">
                            <input type="email" placeholder="Email" required>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" placeholder="Subjek" required>
                        </div>
                        
                        <div class="form-group">
                            <textarea placeholder="Pesan Anda" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div>
                    <a href="#" class="footer-logo">Porto<span>folio.</span></a>
                    <p style="color: #cbd5e1; max-width: 300px; margin-bottom: 20px;">Full Stack Developer dengan spesialisasi dalam Laravel dan teknologi web modern.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-github"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div>
                    <h3 style="color: white; margin-bottom: 20px; font-size: 1.3rem;">Tautan Cepat</h3>
                    <div class="footer-links">
                        <a href="#home">Beranda</a>
                        <a href="#about">Tentang</a>
                        <a href="#portfolio">Portofolio</a>
                        <a href="#services">Layanan</a>
                        <a href="#contact">Kontak</a>
                    </div>
                </div>
                
                <div>
                    <h3 style="color: white; margin-bottom: 20px; font-size: 1.3rem;">Layanan</h3>
                    <div class="footer-links">
                        <a href="#">Pengembangan Web</a>
                        <a href="#">UI/UX Design</a>
                        <a href="#">SEO Optimization</a>
                        <a href="#">Maintenance</a>
                    </div>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; 2025</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('active');
            this.innerHTML = document.querySelector('.nav-links').classList.contains('active') 
                ? '<i class="fas fa-times"></i>' 
                : '<i class="fas fa-bars"></i>';
        });
        
        // Close mobile menu when clicking a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                document.querySelector('.nav-links').classList.remove('active');
                document.querySelector('.mobile-menu-btn').innerHTML = '<i class="fas fa-bars"></i>';
            });
        });
        
        // Portfolio filter
        document.querySelectorAll('.filter-btn').forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                document.querySelectorAll('.filter-btn').forEach(btn => {
                    btn.classList.remove('active');
                });
                
                // Add active class to clicked button
                this.classList.add('active');
                
                const filterValue = this.getAttribute('data-filter');
                const portfolioItems = document.querySelectorAll('.portfolio-item');
                
                portfolioItems.forEach(item => {
                    if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Form submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Terima kasih! Pesan Anda telah berhasil dikirim. Saya akan menghubungi Anda segera.');
            this.reset();
        });
        
        // Navbar background on scroll
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
                header.style.backdropFilter = 'blur(10px)';
            } else {
                header.style.backgroundColor = 'white';
                header.style.backdropFilter = 'none';
            }
        });
    </script>
</body>
</html>