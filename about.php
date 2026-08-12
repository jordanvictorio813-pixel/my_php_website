```php
<?php
// About Page
$siteName = "My Website";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title><?= $siteName ?> | About</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>


<!-- =========================
     NAVIGATION
========================= -->

<?php include 'navbar.php'; ?>


<!-- =========================
     ABOUT HERO
========================= -->

<section class="about-hero">

    <div class="about-container">

        <div class="about-image">

        <img src="jordan.img.jpg" alt="Jordan Victorio">
        </div>


        <div class="about-content">

            <span class="about-label">
                ABOUT ME
            </span>

            <h1>
                Hi, I'm <span>Jordan</span>
            </h1>

            <h2>
                Information Technology Graduate
            </h2>

            <p>
                I am an Information Technology graduate with
                a passion for web development and creating
                modern, responsive, and user-friendly
                applications.
            </p>

            <p>
                I enjoy working with PHP, Laravel, Filament,
                HTML, CSS, JavaScript, and MySQL. I am
                continuously improving my programming skills
                by building projects and learning new
                technologies.
            </p>

            <div class="about-buttons">

                <a
                    href="contact.php"
                    class="btn btn-primary"
                >
                    Contact Me
                </a>

                <a
                    href="index.php"
                    class="btn btn-outline-dark"
                >
                    Back to Home
                </a>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     MY SKILLS
========================= -->

<section class="skills-section">

    <div class="section-title">

        <span>
            MY SKILLS
        </span>

        <h2>
            Technologies I Work With
        </h2>

        <p>
            Here are some of the technologies and tools
            I use when building websites and applications.
        </p>

    </div>


    <div class="skills-container">


        <div class="skill-card">

            <div class="skill-icon">
                🐘
            </div>

            <h3>
                PHP
            </h3>

            <p>
                Backend development and dynamic
                web applications.
            </p>

        </div>


        <div class="skill-card">

            <div class="skill-icon">
                🚀
            </div>

            <h3>
                Laravel
            </h3>

            <p>
                Building structured and scalable
                web applications.
            </p>

        </div>


        <div class="skill-card">

            <div class="skill-icon">
                🎨
            </div>

            <h3>
                HTML & CSS
            </h3>

            <p>
                Creating responsive and modern
                website interfaces.
            </p>

        </div>


        <div class="skill-card">

            <div class="skill-icon">
                ⚡
            </div>

            <h3>
                JavaScript
            </h3>

            <p>
                Adding interactive features and
                dynamic behavior to websites.
            </p>

        </div>


        <div class="skill-card">

            <div class="skill-icon">
                🗄️
            </div>

            <h3>
                MySQL
            </h3>

            <p>
                Managing databases and storing
                application data.
            </p>

        </div>


        <div class="skill-card">

            <div class="skill-icon">
                🛠️
            </div>

            <h3>
                Filament
            </h3>

            <p>
                Creating modern administration
                panels for Laravel applications.
            </p>

        </div>

    </div>

</section>


<!-- =========================
     MY BACKGROUND
========================= -->

<section class="background-section">

    <div class="section-title">

        <span>
            MY BACKGROUND
        </span>

        <h2>
            Education & Experience
        </h2>

    </div>


    <div class="timeline">


        <div class="timeline-item">

            <div class="timeline-icon">
                🎓
            </div>

            <div class="timeline-content">

                <span>
                    2020 - 2025
                </span>

                <h3>
                    Bachelor of Science in Information Technology
                </h3>

                <p>
                    Pangasinan State University
                </p>

                <p>
                    Studied programming, database management,
                    web development, system development,
                    and information technology.
                </p>

            </div>

        </div>


        <div class="timeline-item">

            <div class="timeline-icon">
                💻
            </div>

            <div class="timeline-content">

                <span>
                    Internship
                </span>

                <h3>
                    IT Intern
                </h3>

                <p>
                    Department of Information and
                    Communications Technology
                </p>

                <p>
                    Worked with Laravel Filament development,
                    UI design, database tasks, LAN cabling,
                    and technical operations.
                </p>

            </div>

        </div>


    </div>

</section>


<!-- =========================
     RESUME
========================= -->

<section class="resume-section">

    <div class="resume-container">


        <!-- LEFT -->

        <div class="resume-info">

            <span class="resume-label">
                MY RESUME
            </span>

            <h2>
                Want to know more
                <span>about me?</span>
            </h2>

            <p>
                My resume contains my educational background,
                technical skills, internship experience,
                projects, and other professional information.
            </p>

            <div class="resume-buttons">

                <!-- VIEW RESUME -->

                <a
                    href="Personal CV(Victorio, Jordan r.).pdf"
                    target="_blank"
                    class="resume-btn resume-view"
                >
                    <span>👁</span>
                    View Resume
                </a>


                <!-- DOWNLOAD RESUME -->

                <a
                    href="Personal CV(Victorio, Jordan r.).pdf"
                    download="Jordan_Victorio_Resume.pdf"
                    class="resume-btn resume-download"
                >
                    <span>⬇</span>
                    Download Resume
                </a>

            </div>

        </div>


        <!-- RIGHT -->

        <div class="resume-card">

            <div class="resume-card-icon">
                📄
            </div>

            <div>

                <h3>
                    Jordan_Victorio_Resume.pdf
                </h3>

                <p>
                    Professional Resume
                </p>

            </div>

            <div class="resume-card-arrow">
                →
            </div>

        </div>

    </div>

</section>


<!-- =========================
     WHAT I DO
========================= -->

<section class="what-i-do">

    <div class="section-title">

        <span>
            WHAT I DO
        </span>

        <h2>
            What Can I Build?
        </h2>

    </div>


    <div class="services-container">


        <div class="service-card">

            <div class="service-icon">
                🌐
            </div>

            <h3>
                Web Development
            </h3>

            <p>
                I can create responsive and modern
                websites using PHP, HTML, CSS,
                JavaScript, and Laravel.
            </p>

        </div>


        <div class="service-card">

            <div class="service-icon">
                ⚙️
            </div>

            <h3>
                Backend Development
            </h3>

            <p>
                I can develop backend systems,
                database-driven applications,
                and administrative panels.
            </p>

        </div>


        <div class="service-card">

            <div class="service-icon">
                🗃️
            </div>

            <h3>
                Database Systems
            </h3>

            <p>
                I can create and manage databases
                using MySQL and integrate them
                with web applications.
            </p>

        </div>


    </div>

</section>


<!-- =========================
     GOALS
========================= -->

<section class="goals-section">

    <div class="goals-content">

        <span>
            MY GOAL
        </span>

        <h2>
            Always Learning. Always Improving.
        </h2>

        <p>
            My goal is to continuously improve my
            programming and problem-solving skills,
            gain real-world experience, and become
            a professional web developer capable
            of building reliable and meaningful
            applications.
        </p>

        <a
            href="contact.php"
            class="btn btn-primary"
        >
            Let's Connect
        </a>

    </div>

</section>


<!-- =========================
     FOOTER
========================= -->

<footer>

    <p>
        © <?= date("Y") ?>
        <?= $siteName ?>.
        All Rights Reserved.
    </p>

</footer>


</body>
</html>
```
