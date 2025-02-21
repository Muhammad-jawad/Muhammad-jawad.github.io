(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner(0);
    
    
    // Initiate the wowjs
    new WOW().init();



   // testimonial carousel
   $(".testimonial-carousel").owlCarousel({
    autoplay: true,
    items: 1,
    smartSpeed: 1500,
    dots: true,
    dotsData: true,
    loop: true,
    margin: 25,
    nav : true,
    navText : [
        '<i class="bi bi-arrow-left"></i>',
        '<i class="bi bi-arrow-right"></i>'
    ]
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 5,
        time: 2000
    });


   // Back to top button
   $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
        $('.back-to-top').fadeIn('slow');
    } else {
        $('.back-to-top').fadeOut('slow');
    }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });

    const d = new Date();
    let year = d.getFullYear();
    document.getElementById("copyright-year").innerText = year;


    // Define education data
    const data = {
        educations: [
            {
                name: "Benazir Bhutto Shaheed University",
                start: 2014,
                end: 2018,
                studied: "Bachelors of Computer Science",
                description: "I hold a Bachelor's degree in Computer Science, providing me with strong skills in programming, web development, databases, and system architecture. My expertise includes problem-solving, coding, and scalable system design. This foundation enables me to develop efficient digital solutions, tackle complex challenges, and stay updated with evolving technology trends."
            },
            {
                name: "FG Boys College Karachi Cantt",
                start: 2010,
                end: 2012,
                studied: "FSC - Pre Engineering",
                description: "Completed FSC in Pre-Engineering from FG Boys College, Karachi Cantt (2010-2012), building a strong foundation in mathematics, physics, and chemistry. Gained analytical and problem-solving skills essential for engineering and technology fields. Developed a keen interest in computational logic and scientific principles, paving the way for further studies in computer science."
            },
            {
                name: "FG School Karachi Cantt",
                start: "-",
                end: 2009,
                studied: "SSC - Computer Science",
                description: "Completed SSC in Computer Science from FG School, Karachi Cantt in 2009, focusing on programming fundamentals, mathematics, and logic building. Developed a strong interest in technology and problem-solving, laying the groundwork for future studies in computing and engineering. Built essential analytical skills that shaped a career in software development."
            }
        ],
        experienced: [
            {
                name: "Sherbet Donkey Media",
                role: "Full Stack Developer",
                start: "May 2021",
                end: "Present",
                description: "I develop and optimize user-centric websites with seamless functionality. I implement custom WordPress plugin development and eCommerce theme customization. I lead back-end solutions and API integrations to enhance website performance. I integrate SEO best practices to improve website visibility and user engagement. I collaborate with clients to provide tailored web solutions. I also develop and customize modules using the Beaver Builder plugin. Additionally, I work with Laravel, Shopify, and Prestashop."
            },
            {
                name: "Wolf Interactive",
                role: "Senior Web Developer",
                start: "August 2020",
                end: "April 2021",
                description: "I led website development with a focus on usability and performance. I created custom WordPress themes and plugins tailored to project needs. I managed PHP-based tasks to optimize website functionality. I also built and customized templates for various platforms, including PrestaShop and WooCommerce."
            },
            {
                name: "Hum Network TV",
                role: "Website Support Engineer",
                start: "August 2019",
                end: "July 2020",
                description: "I maintained website performance and security to ensure uninterrupted functionality. I designed and developed custom WordPress themes and plugins. I also provided dedicated website support and troubleshooting."
            },
            {
                name: "Just Digital Pvt Ltd",
                role: "WordPress Developer",
                start: "March 2017",
                end: "January 2019",
                description: "I executed front-end development for WordPress themes. I designed email templates and landing pages for marketing campaigns."
            },
            {
                name: "Mark360",
                role: "Website Intern",
                start: "March 2016",
                end: "March 2017",
                description: "I completed hands-on training in front-end and back-end development. I gained experience in creating responsive, visually engaging websites."
            }
        ],
        expertise: [
            { name: "HTML / CSS", icon: "html5", percentage: 98 },
            { name: "JavaScript", icon: "js-square", percentage: 67 },
            { name: "Tailwind", icon: "code fa", percentage: 60 },
            { name: "PHP", icon: "php fa-brand", percentage: 70 },
            { name: "Laravel", icon: "laravel fa-brand", percentage: 60 },
            { name: "WordPress", icon: "wordpress", percentage: 98 },
            { name: "Shopify", icon: "shopify", percentage: 75 },
            { name: "Prestashop", icon: "code fa", percentage: 40 },
            { name: "OOP", icon: "code fa", percentage: 88 },
            { name: "NodeJs", icon: "node", percentage: 40 },
            { name: "React JS", icon: "react fa-brand", percentage: 40 }
        ],
        projects: [
            { name: "Aluminium Online", type: "eCommerce",  url: "https://www.aluminium-online.co.uk/", image: 'img/projects/aluminium-online.png'},
            { name: "Discover Dolls", type: "eCommerce Marketplace",  url: "https://www.discoverdolls.co.uk/", image: 'img/projects/discover-dolls.png'},
            { name: "Wobble", type: "Therapist Booking Marketplace",  url: "https://www.getwobble.co.uk/", image: 'img/projects/wobble.png'},
            { name: "B_RD", type: "Advertorial",  url: "https://www.wearebrd.com/", image: 'img/projects/b_rd.png'},
            { name: "Paintball Park", type: "eCommerce",  url: "https://www.paintballpark.co.uk/", image: 'img/projects/ppk.png'},
            { name: "Floor Street", type: "eCommerce",  url: "https://floorstreet.co.uk/", image: 'img/projects/floorstreet.png'},
            { name: "Star Athelete", type: "eCommerce",  url: "https://www.starathlete.shop/", image: 'img/projects/starathlete.png'},
            { name: "Pinks & Blues", type: "eCommerce",  url: "https://pinksnbluesapparel.com/", image: 'img/projects/pinksandblue.png'},
            


        ]
    };
    



    // Function to render education dynamically
    document.addEventListener("DOMContentLoaded", () => {
        const educationContainer = document.querySelector(".education-content .row");
        if (educationContainer) {
            educationContainer.innerHTML = data.educations.map((edu, index) => `
                <div class="col-12">
                    <div class="education-item rounded p-4 h-100 wow fadeInUp" data-wow-delay="${0.1 + index * 0.2}s">
                        <div class="d-flex align-items-center mb-3">
                            <p class="fs-5 mb-0 me-4">${edu.name}</p>
                            <div>
                                <span class="fa fa-calendar me-1"></span> ${edu.start} - ${edu.end}
                            </div>
                        </div>
                        <h4 class="mb-3">${edu.studied}</h4>
                        <p class="mb-0">${edu.description}</p>
                    </div>
                </div>
            `).join("");
        }
    });

     // Function to render education dynamically
     document.addEventListener("DOMContentLoaded", () => {
        const educationContainer = document.querySelector(".experience-content .row");
        if (educationContainer) {
            educationContainer.innerHTML = data.experienced.map((exp, index) => `
                <div class="col-12">
                    <div class="education-item rounded p-4 h-100 wow fadeInUp" data-wow-delay="${0.1 + index * 0.2}s">
                        <div class="d-flex align-items-center mb-3">
                            <p class="fs-5 mb-0 me-4">${exp.name}</p>
                            <div>
                                <span class="fa fa-calendar me-1"></span> ${exp.start} - ${exp.end}
                            </div>
                        </div>
                        <h4 class="mb-3">${exp.role}</h4>
                        <p class="mb-0">${exp.description}</p>
                    </div>
                </div>
            `).join("");
        }
    });

    // Function to render education dynamically
    document.addEventListener("DOMContentLoaded", () => {
        const educationContainer = document.querySelector(".skills-content .row");
        if (educationContainer) {
            educationContainer.innerHTML = data.expertise.map((exp, index) => `
                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                    <div class="skills-item text-center rounded p-4 h-100 wow fadeInUp" data-wow-delay="${0.1 + index * 0.2}ss">
                        <div class="text-primary text-center mb-3"><span class="fab fa-${exp.icon} fa-3x"></span></div>
                        <div class="counter-counting d-flex justify-content-center">
                            <h4 class="display-6" data-toggle="counter-up">${exp.percentage}</h4>
                            <h4 class="display-6">%</h4>
                        </div>
                        <p class="mb-0">${exp.name}</p>
                    </div>
                </div>
            `).join("");
        }
    });

    // Function to render portfolios dynamically
    document.addEventListener("DOMContentLoaded", () => {
        const educationContainer = document.querySelector(".portfolio-content");
        if (educationContainer) {
            educationContainer.innerHTML = data.projects.map((project, index) => `
                <div class="portfolio-item py-3 border-bottom wow fadeInUp" data-wow-delay="${0.1 + index * 0.2}s">
                    <a href="${project.url}" target="_blank">
                        <div class="row g-4 align-items-center">
                            <div class="col-9 col-xl-4">
                                <div class="portfolio-img">
                                    <div class="portfolio-img-inner">
                                        <img src="${project.image}" class="img-fluid" alt="Image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <h4 class="text-body">${project.type}</h4>
                                <h1 class="display-6 mb-0">${project.name}</h1>

                            </div>
                            
                        </div>
                    </a>
                </div>
            `).join("");
        }
    });

})(jQuery);

