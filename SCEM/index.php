<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siwan College of Engineering and Management</title>
    <link rel="icon" href="logosiwan.webp" type="image/x-icon">
    <link rel="stylesheet" href="style1.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="social-icons">
            <div class="topright"> 
            <a href="#"><img src="fb.jpeg" alt="Facebook"></a>
            <a href="#"><img src="insta.jpeg" alt="Instagram"></a>
            <a href="#"><img src="yt.png" alt="YouTube"></a>
        </div>
    </div>
        <img src="logosiwan.webp" alt="College Logo">
        <h1>Siwan College of Engineering & Management</h1>
    </header>

    <nav>
        <a href="home.html"><i class="fas fa-home"></i> Home</a>
    <a href="about.html"><i class="fas fa-info-circle"></i> About Us</a>
    <a href="admission.html"><i class="fas fa-graduation-cap"></i> Admission</a>
    <a href="academics.html"><i class="fas fa-book"></i> Academics <span>▼</span></a>
    <div class="dropdown-content">
        <a href="computer-science.html">Computer Science</a>
        <a href="mechanical-engineering.html">Mechanical Engineering</a>
        <a href="civil-engineering.html">Civil Engineering</a>
        <a href="electronics-engineering.html">Electronics Engineering</a>
        <a href="biotech-engineering.html">Biotech Engineering</a>
        <a href="chemical-engineering.html">Chemical Engineering</a>
    </div>
    <a href="students.html"><i class="fas fa-user-graduate"></i> Students</a>
    <a href="placement.html"><i class="fas fa-briefcase"></i> Placement</a>
    <a href="sports.html"><i class="fas fa-futbol"></i> Sports</a>
    <a href="gallary.html"><i class="fas fa-images"></i> Gallery</a>
    <a href="contact.html"><i class="fas fa-envelope"></i> Contact Us</a>
    <a href="hostel.html"><i class="fas fa-home"></i> Hostel</a>
        
    </nav>

    <!-- Slideshow -->
    <div class="slideshow-container">
        <img class="slides" src="pic1.webp" alt="Slide 1">
        <img class="slides" src="pic5.jpg" alt="Slide 2">
        <img class="slides" src="pic6.jpg" alt="Slide 3">
    </div>

    <!-- Dots -->
    <div class="dots-container">
        <span class="dot" onclick="showSlide(0)"></span>
        <span class="dot" onclick="showSlide(1)"></span>
        <span class="dot" onclick="showSlide(2)"></span>
    </div>

    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="home.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="admission.html">Admission</a></li>
                    <li><a href="academics.html">Academics</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Contact Us</h4>
                <p>Siwan College of Engineering & Management</p>
                <p>Address: XYZ Road, Siwan, Bihar, India</p>
                <p>Phone: +91-9876543210</p>
                <p>Email: <a href="siwanengineeringcollege@gmail.com">siwanengineeringcollege@gmail.com</a></p>
            </div>
            <div class="footer-section">
                <h4>Follow Us</h4>
                    <a href="fb.jpeg"><i class="fab fa-facebook"></i></a>
                    <a href="insta.jpeg"><i class="fab fa-instagram"></i></a>
                    <a href="yt.png"><i class="fab fa-youtube"></i></a>
                    <a href="tw.png"><i class="fab fa-tweeter"></i></a>
                </div>
            </div>
        </div>
        </div>
    </footer>
    

    <script>
        let slideIndex = 0;
        const slides = document.getElementsByClassName("slides");
        const dots = document.getElementsByClassName("dot");

        function showSlide(n) {
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
                dots[i].classList.remove("active");
            }
            slides[n].style.display = "block";
            dots[n].classList.add("active");
            slideIndex = n;
        }

        function autoSlide() {
            slideIndex = (slideIndex + 1) % slides.length;
            showSlide(slideIndex);
        }

        // Initialize slideshow
        showSlide(slideIndex);
        setInterval(autoSlide, 3000); // Change every 3 seconds
    </script>
</body>
</html>
