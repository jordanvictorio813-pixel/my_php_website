```php
<?php
// navbar.php
?>

<nav class="navbar">

    <div class="logo">
        JORDAN<span>R.VICTORIO</span>
    </div>

    <button
        class="menu-btn"
        onclick="toggleMenu()"
        aria-label="Open Menu"
    >
        ☰
    </button>

    <ul class="nav-links" id="navLinks">

        <li>
            <a href="home.php" class="active">
                Home
            </a>
        </li>

        <li>
            <a href="about.php">
                About
            </a>
        </li>

        <li>
            <a href="contact.php">
                Contact
            </a>
        </li>

    </ul>

</nav>

<script>
function toggleMenu() {

    const navLinks = document.getElementById("navLinks");

    navLinks.classList.toggle("show");

}

document.querySelectorAll(".nav-links a")
.forEach(function(link) {

    link.addEventListener("click", function() {

        document
            .getElementById("navLinks")
            .classList.remove("show");

    });

});
</script>
```
