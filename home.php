

<?php
// Home Page
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

    <title><?= $siteName ?> | Home</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<?php include 'navbar.php'; ?>



<!-- =========================
     HERO
========================= -->

<section class="hero">

    <div class="hero-text">

        <h1>
            Welcome to
            <span><?= $siteName ?></span>
        </h1>

        <p>
            A modern and professional website built using
            PHP, HTML and CSS. Explore our website and
            discover what we have to offer.
        </p>

        <div class="buttons">

            <a
                href="about.php"
                class="btn btn-primary"
            >
                Get Started
            </a>

            <a
                href="contact.php"
                class="btn btn-outline"
            >
                Contact Us
            </a>

        </div>

    </div>


    <div class="hero-card">

        <h2>🚀 Welcome!</h2>

        <p>
            This is your website's home page.
            You can customize this section with
            your personal information, projects,
            services, or business information.
        </p>

    </div>

</section>


<!-- =========================
     FEATURES
========================= -->

<section class="features">

    <h2>
        What We Offer
    </h2>

    <p>
        Everything you need in one place.
    </p>


    <div class="feature-container">

        <div class="feature-card">

            <div class="feature-icon">
                💻
            </div>

            <h3>
                Web Development
            </h3>

            <p>
                Build modern and responsive websites
                using PHP, HTML, CSS and JavaScript.
            </p>

        </div>


        <div class="feature-card">

            <div class="feature-icon">
                ⚡
            </div>

            <h3>
                Fast & Modern
            </h3>

            <p>
                Clean design with a responsive layout
                that works on desktop and mobile devices.
            </p>

        </div>


        <div class="feature-card">

            <div class="feature-icon">
                🔒
            </div>

            <h3>
                Reliable
            </h3>

            <p>
                Create a professional website structure
                that you can expand as your project grows.
            </p>

        </div>

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