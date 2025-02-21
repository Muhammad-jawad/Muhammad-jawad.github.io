<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Muhammad Jawad Arshad - Portfolio</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Edu+TAS+Beginner:wght@400..700&family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="lib/animate/animate.min.css"/>
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

    <?php 
        
        $educations = array(
            array(
                'name' => 'Benazir Bhutto Shaheed University',
                'start' => 2014,
                'end' => 2018,
                'studied' => 'Bachelors of Computer Science',
                'description' => "I hold a Bachelor's degree in Computer Science, providing me with strong skills in programming, web development, databases, and system architecture. My expertise includes problem-solving, coding, and scalable system design. This foundation enables me to develop efficient digital solutions, tackle complex challenges, and stay updated with evolving technology trends."
            ),
            array(
                'name' => 'FG Boys College Karachi Cantt',
                'start' => 2010,
                'end' => 2012,
                'studied' => 'FSC - Pre Engineering',
                'description' => "Completed FSC in Pre-Engineering from FG Boys College, Karachi Cantt (2010-2012), building a strong foundation in mathematics, physics, and chemistry. Gained analytical and problem-solving skills essential for engineering and technology fields. Developed a keen interest in computational logic and scientific principles, paving the way for further studies in computer science."
            ),
            array(
                'name' => 'FG School Karachi Cantt',
                'start' => '-',
                'end' => 2009,
                'studied' => 'SSC - Computer Science',
                'description' => "Completed SSC in Computer Science from FG School, Karachi Cantt in 2009, focusing on programming fundamentals, mathematics, and logic building. Developed a strong interest in technology and problem-solving, laying the groundwork for future studies in computing and engineering. Built essential analytical skills that shaped a career in software development."
            )
        );

        $experienced = array(
            array(
                'name' => 'Sherbet Donkey Media',
                'role' => 'Full Stack Developer',
                'start' => 'May 2021',
                'end' => 'Present',
                'description' => "
                   I develop and optimize user-centric websites with seamless functionality. I implement custom WordPress plugin development and eCommerce theme customization. I lead back-end solutions and API integrations to enhance website performance. I integrate SEO best practices to improve website visibility and user engagement. I collaborate with clients to provide tailored web solutions. I also develop and customize modules using the Beaver Builder plugin. Additionally, I work with Laravel, Shopify, and Prestashop.
                "
            ),
            array(
                'name' => 'Wolf Interactive',
                'role' => 'Senior Web Developer',
                'start' => 'August 2020',
                'end' => 'April 2021',
                'description' => "
                   I led website development with a focus on usability and performance. I created custom WordPress themes and plugins tailored to project needs. I managed PHP-based tasks to optimize website functionality. I also built and customized templates for various platforms, including PrestaShop and WooCommerce.
                "
            ),
            array(
                'name' => 'Hum Network TV',
                'role' => 'Website Support Engineer',
                'start' => 'August 2019',
                'end' => 'July 2020',
                'description' => "
                   I maintained website performance and security to ensure uninterrupted functionality. I designed and developed custom WordPress themes and plugins. I also provided dedicated website support and troubleshooting.
                "
            ),
            array(
                'name' => 'Just Digital Pvt Ltd',
                'role' => 'WordPress Developer',
                'start' => 'March 2017',
                'end' => 'January 2019',
                'description' => "
                  I executed front-end development for WordPress themes. I designed email templates and landing pages for marketing campaigns.
                "
            ),
            array(
                'name' => 'Mark360',
                'role' => 'Website Intern',
                'start' => 'March 2016',
                'end' => ' March 2017',
                'description' => "
                I completed hands-on training in front-end and back-end development. I gained experience in creating responsive, visually engaging websites.
                "
            )
        );

        $expertise = array(

            array(
                'name' => 'HTML / CSS',
                'icon' => 'html5',
                'percentage' => 98
            ),
            array(
                'name' => 'JavaScript',
                'icon' => 'js-square',
                'percentage' => 67
            ),
            array(
                'name' => 'Tailwind',
                'icon' => 'code fa',
                'percentage' => 60
            ),
            array(
                'name' => 'PHP',
                'icon' => 'php fa-brand',
                'percentage' => 70
            ),
            array(
                'name' => 'Laravel',
                'icon' => 'laravel fa-brand',
                'percentage' => 60
            ),
            array(
                'name' => 'WordPress',
                'icon' => 'wordpress',
                'percentage' => 98
            ),
            array(
                'name' => 'Shopify',
                'icon' => 'shopify',
                'percentage' => 75
            ),
            array(
                'name' => 'Prestashop',
                'icon' => 'code fa',
                'percentage' => 40
            ),
            array(
                'name' => 'OOP',
                'icon' => 'code fa',
                'percentage' => 88
            ),
            array(
                'name' => 'NodeJs',
                'icon' => 'node',
                'percentage' => 40
            ),
            array(
                'name' => 'React JS',
                'icon' => 'react fa-brand',
                'percentage' => 40
            ),
        );
        
        ?>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="container-fluid nav-section border-0">
            <nav class="navbar navbar-light">
                <div class="navbar-nav flex-column">
                    <a href="#pigraHome" class="nav-item nav-link active"><span class="fa fa-home"></span> Home</a>
                    <a href="#pigraAbout" class="nav-item nav-link"><span class="far fa-address-card"></span> About</a>
                    <a href="#pigraService" class="nav-item nav-link"><span class="fab fa-servicestack"></span> Service</a>
                    <a href="#pigraPortfolio" class="nav-item nav-link"><span class="fab fa-user-tie fa"></span> Potfolio</a>
                    <a href="#pigraContact" class="nav-item nav-link"><span class="fas fa-address-book"></span> Contact</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->

        <!-- Header Start -->
        <div class="container-fluid" id="pigraHome">
            <div class="container">
                <div class="row g-0">
                    <div class="col-12 col-lg-3">
                        <div class="header-content bg-dark h-100 pt-6 pe-6 pb-6">
                            <a href="index.html" class="navbar-brand d-inline-flex pb-5 wow fadeInUp" data-wow-delay="0.1s">
                                <h1 class="display-6 text-white mb-0">Developer</h1>
                            </a>
                            <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.3s">
                                <p class="text-white sub-title">👋 Hello I'm Muhammad Jawad Arshad</p>
                                <h1 class="display-6 text-white mb-0">Full Stack Web Developer</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9">
                        <div class="header-img d-flex h-100 pt-6 ps-6 pb-6">
                            <div class="row g-5">
                                <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="bg-light p-4" style="border-radius: 68% 32% 100% 0% / 0% 75% 25% 100%;">
                                        <img src="img/muhammad-jawad2.jpg" class="img-fluid w-100" style="border-radius: 68% 32% 100% 0% / 0% 75% 25% 100%;" alt="Image">
                                    </div>
                                </div>
                                <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <h1 class="display-6 mb-4">Full Stack Web Developer</h1>
                                    <p class="mb-4">
                                    Dedicated and highly skilled Full Stack Developer with expertise in
                                    WordPress, Shopify, WooCommerce, and custom plugin development. Adept
                                    at creating user-friendly, SEO-optimized websites, ensuring seamless
                                    functionality, and implementing custom Back-End solutions. Strong problemsolving abilities and a collaborative approach to delivering client-focused
                                    results.
                                    </p>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fas fa-map-marker-alt text-primary me-3"></i>
                                        <p class="text-dark mb-0">Inland Rd, Birmingham, B24 9TD</p>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fas fa-envelope text-primary me-3"></i>
                                        <p class="text-dark mb-0">jaaviarshad@gmail.com</p>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fa fa-phone-alt text-primary me-3"></i>
                                        <p class="text-dark mb-0">07444013400</p>
                                    </div>
                                    <div class="d-flex align-items-center mb-4">
                                        <i class="fab fa-firefox-browser text-primary me-3"></i>
                                        <p class="text-dark mb-0">https://muhammad-jawad.github.io/</p>
                                    </div>
                                    <div class="d-flex">
                                        <a class="btn btn-primary btn-sm-square me-3" href="https://www.facebook.com/mjawadarshad25/" target="_blank"><i class="fab fa-facebook-f text-white"></i></a>
                                        <a class="btn btn-primary btn-sm-square me-3" href="https://uk.linkedin.com/in/muhammadjawadarshad" target="_blank"><i class="fab fa-linkedin-in text-white"></i></a>
                                        <a class="btn btn-primary btn-sm-square me-0" href="https://github.com/Muhammad-jawad" target="_blank"><i class="fab fa-github text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- About Start -->
        <div class="container-fluid" id="pigraAbout">
            <div class="container">
                <div class="row g-0">
                    <div class="col-12 col-lg-3">
                        <div class="about-header bg-dark h-100 pt-6 pe-6 pb-6">
                            <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                                <p class="text-white sub-title">About Me</p>
                                <h1 class="display-6 text-white mb-0">Full Stack web developer, based in Birmingham, United Kingdom </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9">
                        <div class="about-content h-100 pt-6 ps-6 pb-6">
                            <div class="row g-5">
                                <div class="col-xl-5">
                                    <div class="about-img bg-light p-4 wow fadeInUp" data-wow-delay="0.1s">
                                        <img src="img/about.jpg" class="img-fluid w-100" alt="Image">
                                        <div class="sosial-icon">
                                            <a class="btn btn-primary btn-sm-square mb-3" href="https://www.facebook.com/mjawadarshad25/" target="_blank"><i class="fab fa-facebook-f text-white"></i></a>
                                            <a class="btn btn-primary btn-sm-square mb-3" href="https://uk.linkedin.com/in/muhammadjawadarshad" target="_blank"><i class="fab fa-linkedin-in text-white"></i></a>
                                            <a class="btn btn-primary btn-sm-square mb-0" href="https://github.com/Muhammad-jawad" target="_blank"><i class="fab fa-github text-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-7 wow fadeInUp" data-wow-delay="0.3s">
                                    <h4 class="mb-4">Hello, I'm Muhammad, Based in United Kingdom</h4>
                                    <p class="mb-4">
                                    Passionate about innovation and efficiency, always striving to enhance web performance, optimize workflows, and deliver scalable solutions tailored to business needs.
                                    </p>
                                    <div class="row g-4 mb-4">
                                        <div class="col-6">
                                            <p><strong class="fw-bold text-dark">Phone :</strong> 07444013400</p>
                                            <p class="mb-0"><strong class="fw-bold text-dark">Address :</strong> Inland Rd, Birmingham, B24 9TD</p>
                                        </div>
                                        <div class="col-6">
                                            <p><strong class="fw-bold text-dark">Nationality :</strong> Pakistan</p>
                                            <p><strong class="fw-bold text-dark">Email :</strong> jaaviarshad@gmail.com</p>
                                            <p class="mb-0"><strong class="fw-bold text-dark">Freelancer :</strong> Available</p>
                                        </div>
                                    </div>
                                    <a href="assets/Muhammad-Jawad-Resume.pdf" target="_blank" class="btn btn-primary py-2 px-4"> <i class="fas fa-download me-2"></i>Download My CV</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        
        <!-- Education Start -->
        <div class="container-fluid">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3">
                        <div class="education-header bg-dark h-100 pt-6 pe-6 pb-6">
                            <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                                <p class="text-white sub-title">Education</p>
                                <h1 class="display-6 text-white mb-0">My education qualification</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="education-content h-100 pt-6 ps-6 pb-6">
                            <div class="row g-4">
                                <?php $counter = 0.1; ?>
                                <?php foreach($educations as $education): ?>
                                    <?php
                                     
                                        $name = isset( $education['name'] ) ?  $education['name'] : false;
                                        $start = isset( $education['start'] ) ?  $education['start'] : false;
                                        $end = isset( $education['end'] ) ?  $education['end'] : 'Current';
                                        $studied = isset( $education['studied'] ) ?  $education['studied'] : false;
                                        $description = isset( $education['description'] ) ?  $education['description'] : false;
                                        
                                    
                                    ?>
                                    <div class="col-12">
                                        <div class="education-item rounded p-4 h-100 wow fadeInUp" data-wow-delay="<?= $counter ?>s">
                                            <div class="d-flex align-items-center mb-3">
                                                <?php if($name): ?>
                                                    <p class="fs-5 mb-0 me-4"><?= $name ?></p>
                                                <?php endif; ?>
                                                <?php if($start): ?>
                                                <div>
                                                    <span class="fa fa-calendar me-1"></span> <?= $start ?> - <?= $end ?>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                            <?php if($studied): ?>
                                            <h4 class="mb-3"><?= $studied ?></h4>
                                            <?php endif; ?>
                                            <?php if($description): ?>
                                                <p class="mb-0">
                                                    <?= $description ?>
                                                </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php $counter += 0.2; ?>
                                <?php endforeach; ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Education End -->
        
        <!-- Experience Start -->
        <div class="container-fluid">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3">
                        <div class="experience-header bg-dark h-100 pt-6 pe-6 pb-6">
                            <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                                <p class="text-white sub-title">Experience</p>
                                <h1 class="display-6 text-white mb-0">My real work experience</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="experience-content h-100 pt-6 ps-6 pb-6">
                            <div class="row g-4">
                                
                            <?php $counter = 0.1; ?>
                            <?php foreach($experienced as $experience): ?>
                                <?php
                                
                                    $name = isset( $experience['name'] ) ?  $experience['name'] : false;
                                    $start = isset( $experience['start'] ) ?  $experience['start'] : false;
                                    $end = isset( $experience['end'] ) ?  $experience['end'] : 'Current';
                                    $role = isset( $experience['role'] ) ?  $experience['role'] : false;
                                    $description = isset( $experience['description'] ) ?  $experience['description'] : false;
                                    
                                
                                ?>
                                <div class="col-12">
                                    <div class="education-item rounded p-4 h-100 wow fadeInUp" data-wow-delay="<?= $counter ?>s">
                                        <div class="d-flex align-items-center mb-3">
                                            <?php if($name): ?>
                                                <p class="fs-5 mb-0 me-4"><?= $name ?></p>
                                            <?php endif; ?>
                                            <?php if($start): ?>
                                            <div>
                                                <span class="fa fa-calendar me-1"></span> <?= $start ?> - <?= $end ?>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                        <?php if($role): ?>
                                        <h4 class="mb-3"><?= $role ?></h4>
                                        <?php endif; ?>
                                        <?php if($description): ?>
                                            <p class="mb-0">
                                                <?= $description ?>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php $counter += 0.2; ?>
                            <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Exparience End -->


        <!-- Skills Start -->
        <div class="container-fluid">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3">
                        <div class="skills-header h-100 bg-dark pt-6 pe-6 pb-6">
                            <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                                <p class="text-white sub-title">Skills</p>
                                <h1 class="display-6 text-white mb-0">My expertise skills</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="skills-content h-100 pt-6 ps-6 pb-6">
                            <div class="row g-4">
                            <?php $counter = 0.1; ?>
                            <?php foreach($expertise as $experty):?>
                                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="<?= $counter ?>s">
                                        <div class="text-primary text-center mb-3"><span class="fab fa-<?= $experty['icon'] ?> fa-3x"></span></div>
                                        <div class="counter-counting d-flex justify-content-center">
                                            <h4 class="display-6" data-toggle="counter-up"><?= $experty['percentage'] ?></h4>
                                            <h4 class="display-6">%</h4>
                                        </div>
                                        <p class="mb-0"><?= $experty['name'] ?></p>
                                    </div>
                                </div>
                                <?php $counter += 0.2; ?>
                            <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Skills End -->


        <!-- Service Start -->
        <div class="container-fluid" id="pigraService">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3">
                        <div class="service-header h-100 bg-dark pt-6 pe-6 pb-6">
                            <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                                <p class="text-white sub-title">My Services</p>
                                <h1 class="display-6 text-white mb-0">My additional expertise</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="service-content h-100 pt-6 ps-6 pb-6">
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="service-item p-4 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-xl-1">
                                                <i class="fas fa-bezier-curve fa-3x"></i>
                                            </div>
                                            <div class="col-xl-3">
                                                <a href="#" class="h4 mb-0">Web Development</a>
                                            </div>
                                            <div class="col-xl-5">
                                                <p class="mb-0">I create high-performance, user-centric websites with a strong focus on usability, functionality, and design. From custom-built solutions to eCommerce platforms, I ensure seamless performance, responsiveness, and security.
                                                </p>
                                            </div>
                                            <div class="col-xl-3">
                                            <p><i class="fa fa-check me-2"></i> Front-End</p>
                                                <p><i class="fa fa-check me-2"></i> Back-End</p>
                                                <p class="mb-0"><i class="fa fa-check me-2"></i> Animations</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="service-item p-4 wow fadeInUp" data-wow-delay="0.3s">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-xl-1">
                                                <i class="fas fa-laptop-code fa-3x"></i>
                                            </div>
                                            <div class="col-xl-3">
                                                <a href="#" class="h4 mb-0">Theme and Plugin Development</a>
                                            </div>
                                            <div class="col-xl-5">
                                                <p class="mb-0">I develop and customize themes and plugins for Shopify, PrestaShop, and WordPress/WooCommerce. Whether it's building from scratch or enhancing existing functionality, I tailor solutions to meet specific project needs and brand requirements.
                                                </p>
                                            </div>
                                            <div class="col-xl-3">
                                                <p><i class="fa fa-check me-2"></i> WordPress & WooCommerce</p>
                                                <p><i class="fa fa-check me-2"></i> Shopify</p>
                                                <p class="mb-0"><i class="fa fa-check me-2"></i> PrestaShop</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="service-item p-4 wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-xl-1">
                                                <i class="fab fa-app-store fa-3x"></i>
                                            </div>
                                            <div class="col-xl-3">
                                                <a href="#" class="h4 mb-0">Technical SEO</a>
                                            </div>
                                            <div class="col-xl-5">
                                                <p class="mb-0">I optimize websites for search engine performance, ensuring clean code, fast loading speeds, structured data, and mobile-friendly designs. By implementing best practices, I improve search visibility, enhance user experience, and drive organic traffic.
                                                </p>
                                            </div>
                                            <div class="col-xl-3">
                                                <p><i class="fa fa-check me-2"></i> Site Speed Optimization</p>
                                                <p><i class="fa fa-check me-2"></i> Structured Data & Schema</p>
                                                <p class="mb-0"><i class="fa fa-check me-2"></i> Mobile Optimization</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Portfolio Start -->
        <div class="container-fluid" id="pigraPortfolio">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3">
                        <div class="portfolio-header h-100 bg-dark pt-6 pe-6 pb-6">
                            <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                                <p class="text-white sub-title">Portfolio</p>
                                <h1 class="display-6 text-white mb-0">My Recent Works</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="portfolio-content h-100 pt-6 ps-6 pb-6">
                            <div class="portfolio-item py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                                <div class="row g-4 align-items-center">
                                    <div class="col-xl-6">
                                        <h4 class="text-body">Web Design</h4>
                                        <h1 class="display-6 mb-0">Software Design for ABC Corporation</h1>
                                    </div>
                                    <div class="col-9 col-xl-4">
                                        <div class="portfolio-img">
                                            <div class="portfolio-img-inner">
                                                <img src="img/Portfolio-1.jpg" class="img-fluid" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-xl-2">
                                        <div class="view-img">
                                            <a href="img/Portfolio-1.jpg" class="btn btn-primary btn-lg-square"  data-lightbox="Portfolio-1"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-item py-5 border-bottom wow fadeInUp" data-wow-delay="0.3s">
                                <div class="row g-4 align-items-center">
                                    <div class="col-xl-6">
                                        <h4 class="text-body">Web Development</h4>
                                        <h1 class="display-6 mb-0">Website Development for ABC Corporation</h1>
                                    </div>
                                    <div class="col-9 col-xl-4">
                                        <div class="portfolio-img">
                                            <div class="portfolio-img-inner">
                                                <img src="img/portfolio-2.jpg" class="img-fluid" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-xl-2">
                                        <div class="view-img">
                                            <a href="img/portfolio-2.jpg" class="btn btn-primary btn-lg-square"  data-lightbox="portfolio-2"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-item py-5 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="row g-4 align-items-center">
                                    <div class="col-xl-6">
                                        <h4 class="text-body">Photography</h4>
                                        <h1 class="display-6 mb-0">Security Analysis for ABC Corporation</h1>
                                    </div>
                                    <div class="col-9 col-xl-4">
                                        <div class="portfolio-img">
                                            <div class="portfolio-img-inner">
                                                <img src="img/portfolio-3.jpg" class="img-fluid" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-xl-2">
                                        <div class="view-img">
                                            <a href="img/portfolio-3.jpg" class="btn btn-primary btn-lg-square"  data-lightbox="portfolio-3"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio End -->


        <!-- Contact Start -->
        <div class="container-fluid" id="pigraContact">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3">
                        <div class="contact-header h-100 bg-dark pt-6 pe-6 pb-6">
                            <div class="text-start d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                                <p class="text-white sub-title">Contact Me</p>
                                <h1 class="display-6 text-white mb-0">Let’s Start A New Project</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                       <div class="contact-content h-100 pt-6 ps-6 pb-6">
                            <div class="bg-light p-4">
                                <div class="row g-5">
                                    <div class="col-xl-5 wow fadeInUp" data-wow-delay="0.1s">
                                        <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a class="text-primary fw-bold" href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                                        <div class="d-flex mb-4">
                                            <div class="btn-xl-square bg-primary text-white me-3">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div>
                                                <h4>Address</h4>
                                                <p class="mb-0">123 Street New York.USA</p>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-4">
                                            <div class="btn-xl-square bg-primary text-white me-3">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div>
                                                <h4>Mail Us</h4>
                                                <p class="mb-0">info@example.com</p>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="btn-xl-square bg-primary text-white me-3">
                                                <i class="fa fa-phone-alt"></i>
                                            </div>
                                            <div>
                                                <h4>Telephone</h4>
                                                <p class="mb-0">(+012) 3456 7890</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 wow fadeInUp" data-wow-delay="0.3s">
                                        <div>
                                        <form method="POST" action="form-handler.php">
                                            <div class="row g-3">
                                                <div class="col-lg-12 col-xl-6">
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control border-0" name="name" placeholder="Your Name" required>
                                                        <label for="name">Your Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-xl-6">
                                                    <div class="form-floating">
                                                        <input type="email" class="form-control border-0" name="email" placeholder="Your Email" required>
                                                        <label for="email">Your Email</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-xl-6">
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control border-0" name="phone" placeholder="Phone">
                                                        <label for="phone">Your Phone</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-xl-6">
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control border-0" name="project" placeholder="Project">
                                                        <label for="project">Your Project</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control border-0" name="subject" placeholder="Subject" required>
                                                        <label for="subject">Subject</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-floating">
                                                        <textarea class="form-control border-0" name="message" placeholder="Leave a message here" style="height: 120px" required></textarea>
                                                        <label for="message">Message</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="g-recaptcha" data-sitekey="6LfSdt4qAAAAAHm8NfGkexrvpUYqQUfH6Mq_lGVe"></div>
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                                </div>
                                            </div>
                                        </form>

                                        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

                                        </div>
                                    </div>
                                    <div class="col-12 wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="rounded">
                                            <iframe class="rounded w-100" 
                                            style="height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.33750346623!2d-73.97968099999999!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1694259649153!5m2!1sen!2sbd" 
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
        <div class="container-fluid footer bg-dark border-bottom-0">
            <div class="container wow fadeIn" data-wow-delay="0.1s">
                <div class="row g-0">
                    <div class="col-12">
                       <div class="footer-content h-100 pt-6 ps-6 pb-6">
                            <div class="row g-4 align-items-center">
                                <div class="col-12 text-center">
                                    <div class="d-flex justify-content-center">
                                        <a class="btn btn-light btn-md-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-light btn-md-square me-3" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-light btn-md-square me-3" href=""><i class="fab fa-instagram"></i></a>
                                        <a class="btn btn-light btn-md-square me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-body me-2"></i>Your Site Name</a>, All right reserved.</span>
                                </div>
                                <div class="col-12 text-center text-body">
                                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                                    Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a>
                                </div>
                            </div>
                       </div>        
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="js/main.js"></script>


        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $name = htmlspecialchars(trim($_POST['name']));
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $phone = htmlspecialchars(trim($_POST['phone']));
            $project = htmlspecialchars(trim($_POST['project']));
            $subject = htmlspecialchars(trim($_POST['subject']));
            $message = htmlspecialchars(trim($_POST['message']));
            $captcha = $_POST['g-recaptcha-response'];

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                die("Invalid email format");
            }

            if (empty($captcha)) {
                die("Captcha verification failed");
            }

            $secretKey = "6LfSdt4qAAAAABH_MBtVBvBCdl13jgO81FGj0bom";
            $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$captcha");
            $responseKeys = json_decode($response, true);

            if (!$responseKeys["success"]) {
                die("Captcha verification failed");
            }

            $to = "jaaviarshad@gmail.com";
            $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";
            $body = "Name: $name\nEmail: $email\nPhone: $phone\nProject: $project\nSubject: $subject\nMessage:\n$message";

            if (mail($to, $subject, $body, $headers)) {
                echo "Message sent successfully.";
            } else {
                echo "Message sending failed.";
            }
        }
    ?>
    </body>

</html>