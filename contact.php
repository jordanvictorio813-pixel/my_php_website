
<?php
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

    <title><?= $siteName ?> | Contact</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<?php include 'navbar.php'; ?>


<!-- =========================
     CONTACT PAGE
========================= -->

<section class="contact-modern">

    <!-- Background decoration -->

    <div class="contact-circle circle-one"></div>
    <div class="contact-circle circle-two"></div>


    <div class="modern-container">


        <!-- =========================
             HEADER
        ========================= -->

        <div class="modern-header">

            <p class="small-title">
                CONTACT
            </p>

            <h1>
                Let's make
                <br>
                <span>something happen.</span>
            </h1>

            <p class="header-description">
                Whether you have a project idea, a question,
                or simply want to connect, my inbox is always open.
            </p>

        </div>


        <!-- =========================
             CONTENT
        ========================= -->

        <div class="modern-content">


            <!-- =========================
                 CONTACT DETAILS
            ========================= -->

            <div class="modern-details">

                <div class="detail-heading">

                    <span>
                        01
                    </span>

                    <h2>
                        Get in touch
                    </h2>

                </div>


                <p class="detail-description">
                    I'm always interested in hearing about
                    new projects, creative ideas, and
                    opportunities.
                </p>


                <!-- EMAIL -->

                <a
                    href="mailto:your.email@example.com"
                    class="detail-item"
                >

                    <div class="detail-icon">
                        ✉
                    </div>

                    <div>

                        <small>
                            EMAIL
                        </small>

                        <strong>
                            Jordanvictorio88@gamil.com
                        </strong>

                    </div>

                    <span class="arrow">
                        ↗
                    </span>

                </a>


                <!-- PHONE -->

                <a
                    href="tel:+6390000000000"
                    class="detail-item"
                >

                    <div class="detail-icon">
                        ☎
                    </div>

                    <div>

                        <small>
                            PHONE
                        </small>

                        <strong>
                            +63 9150680959
                        </strong>

                    </div>

                    <span class="arrow">
                        ↗
                    </span>

                </a>


                <!-- LOCATION -->

                <div class="detail-item">

                    <div class="detail-icon">
                        ◎
                    </div>

                    <div>

                        <small>
                            LOCATION
                        </small>

                        <strong>
                            Asingan Pangasinan, Philippines
                        </strong>

                    </div>

                </div>


                <!-- SOCIAL -->

                <div class="modern-social">

                    <small>
                        FIND ME ONLINE
                    </small>

                    <div>

                        <a href="https://github.com/jordanvictorio813-pixel">
                            GitHub
                        </a>

                        <a href="https://www.facebook.com/share/196bLQzrsf/">
                            Facebook
                        </a>

                        <a href="https://www.linkedin.com/in/jordan-victorio-551751328?utm_source=share_via&utm_content=profile&utm_medium=member_android">
                            LinkedIn
                        </a>

                    </div>

                </div>

            </div>


            <!-- =========================
                 FORM
            ========================= -->

            <div class="modern-form-card">

                <div class="form-top">

                    <div>

                        <span>
                            02
                        </span>

                        <h2>
                            Send a message
                        </h2>

                    </div>

                    <div class="form-symbol">
                        ↘
                    </div>

                </div>


                <form
                    action=""
                    method="POST"
                >


                    <!-- NAME -->

                    <div class="modern-field">

                        <label for="name">
                            Your Name
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="John Doe"
                            required
                        >

                    </div>


                    <!-- EMAIL -->

                    <div class="modern-field">

                        <label for="email">
                            Email Address
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="john@example.com"
                            required
                        >

                    </div>


                    <!-- SUBJECT -->

                    <div class="modern-field">

                        <label for="subject">
                            What can I help you with?
                        </label>

                        <select
                            id="subject"
                            name="subject"
                            required
                        >

                            <option value="" disabled selected>
                                Select an option
                            </option>

                            <option value="web-development">
                                Web Development
                            </option>

                            <option value="laravel">
                                Laravel Project
                            </option>

                            <option value="database">
                                Database System
                            </option>

                            <option value="portfolio">
                                Portfolio Website
                            </option>

                            <option value="other">
                                Other
                            </option>

                        </select>

                    </div>


                    <!-- MESSAGE -->

                    <div class="modern-field">

                        <label for="message">
                            Tell me about your project
                        </label>

                        <textarea
                            id="message"
                            name="message"
                            placeholder="Write your message here..."
                            required
                        ></textarea>

                    </div>


                    <!-- BUTTON -->

                    <button
                        type="submit"
                        class="modern-submit"
                    >

                        <span>
                            Send Message
                        </span>

                        <strong>
                            →
                        </strong>

                    </button>

                </form>

            </div>

        </div>


        <!-- =========================
             BOTTOM
        ========================= -->

        <div class="modern-bottom">

            <span>
                AVAILABLE FOR FREELANCE & IT PROJECTS
            </span>

            <span>
                © <?= date("Y") ?> <?= $siteName ?>
            </span>

        </div>

    </div>

</section>


</body>
</html>
