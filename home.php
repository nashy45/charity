<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charity Platform</title>
    <link rel="stylesheet" href="styless.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav>
        <div class="logo">CharityPlatform</div>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#volunteer">Volunteer</a></li>
            <li><a href="#campaigns">Campaigns</a></li>
            <li><a href="#donate">Donate</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Join Us in Making a Difference</h1>
            <p>Your support helps us bring change to those in need.</p>
            <a href="#donate" class="btn">Donate Now</a>
            <a href="#volunteer" class="btn">Volunteer</a>
        </div>
    </section>

    <!-- Volunteer Section -->
    <section id="volunteer" class="volunteer">
        <h2>Volunteer Opportunities</h2>
        <p>Become a part of our team and help us in our mission.</p>
        <a href="volun.html#volunteer-form" class="btn">Sign Up to Volunteer</a>
    </section>

    <!-- Campaigns Section -->
    <section id="campaigns" class="campaigns">
        <h2>Our Campaigns</h2>
        <div class="campaign">
            <h3>Campaign Title</h3>
            <p>Brief description of the campaign.</p>
            <a href="#campaign-details" class="btn">Learn More</a>
        </div>
        <!-- Add more campaigns as needed -->
    </section>

    <!-- Donation Section -->
    <section id="donate" class="donate">
        <h2>Make a Donation</h2>
        <p>Your generosity makes our work possible.</p>
        <a href="#donation-form" class="btn">Donate Now</a>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <h2>Contact Us</h2>
        <form action="submit_form.php" method="post">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit" class="btn">Send Message</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 CharityPlatform. All rights reserved to Nashy.</p>
    </footer>
</body>
</html>
