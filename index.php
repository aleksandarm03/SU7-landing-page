<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Xiaomi SU7 - The Future of Electric Cars</title>
        <link rel="icon" href="data:,">

        <link rel="stylesheet" href="style.css">
        <script src="script.js" defer></script>
    </head>
    <body>
        <header>
            <h1>Welcome to the Future: Xiaomi SU7</h1>
            <p>Innovation meets performance in the all-new electric car by Xiaomi.</p>
            <div class="header-content">
                <img src="./images/header-pic.png" alt="Xiaomi SU7">
                <a href="https://autobuy.com.co/listings/xiaomi-su7-2024/" target="_blank">BUY NOW</a>
            </div>

        </header>

        <section class="hero">
            <h2>Experience the Power of Electric Mobility</h2>
            <p>The Xiaomi SU7 redefines electric performance with cutting-edge technology and sleek design.</p>
        </section>
        <section class="gallery">
            <h2>Gallery</h2>
            <div class="gallery-container">
                <div class="gallery-slide">
                    <img src="./images/pic1.png" alt="Xiaomi SU 7 -slika 1 ">
                    <img src="./images/pic2.jpeg" alt="Xiaomi SUV 7 -slika 2">
                    <img src="./images/pic3.jpeg" alt="Xiaomi SUV 7 -slika 3">
                    <img src="./images/pic4.jpeg" alt="Xiaomi SUV 7 -slika 4">
                    <img src="./images/pic6.jpeg" alt="Xiaomi SU 7 -slika 5">
                    <img src="./images/pic5.jpeg" alt="Xiaomi SU 7 -slika 6">

                </div>
            </div>
        </section>
        <section class="features">
            <h2>Key Features</h2>
            <div class="feature-item">
                <span>Ultra-fast charging technology</span>
            </div>
            <div class="feature-item">
                <span>Advanced autonomous driving</span>
            </div>
            <div class="feature-item">
                <span>Intelligent in-car AI assistant</span>
            </div>
        </section>

        <section class="specs">
            <h2>Specifications</h2>
            <div class="spec-item">
                <span>Range: Up to 800 km</span>
            </div>
            <div class="spec-item">
                <span>Top Speed: 250 km/h</span>
            </div>
            <div class="spec-item">
                <span>Battery: 100 kWh lithium-ion</span>
            </div>
        </section>

        <section class="contact">
            <h2>Contact Us</h2>
            <p>Interested in learning more about Xiaomi SU7? Reach out to us!</p>
            <form action="index.php" method="POST">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit">Submit</button>
            </form>


            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  
                
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $message = htmlspecialchars($_POST['message']);

                $to = "accam003@gmail.com"; // Zamenite sa vašim emailom
                $subject = "Nova poruka od $name";
                $body = "Ime: $name\nEmail: $email\n\nPoruka:\n$message";
                $headers = "From: " . filter_var($email, FILTER_SANITIZE_EMAIL);
             
                
                if (mail($to, $subject, $body, $headers)) {
                    echo "<p>Poruka je uspešno poslata!</p>";
                } else {
                    echo "<p>Došlo je do greške pri slanju poruke.</p>";
                }
            }
            ?>
        </section>

        <footer>
            <p>&copy; 2025 Aleksandar Mladenovic. All Rights Reserved.</p>
        </footer>
    </body>
</html>
