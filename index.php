
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* General Styling */
        body {
            background: linear-gradient(45deg,rgb(154, 231, 255), #fad0c4, #ffdde1);
            color: white;
            font-family: 'Arial', sans-serif;
        }

        /* Navbar */
        .navbar {
            background: rgba(0, 0, 0, 0.8);
            padding: 15px;
        }

        /* Hero Section */
        .hero {
            min-height: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            width: 100%;
        }

        #heroCarousel {
            max-height: 100vh;
            width: 100%;
            overflow: hidden;
        }

        .carousel-item img {
            height: 100vh;
            width: 100vw;
            object-fit: cover;
        }

        .carousel-caption {
            bottom: 15%;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
            width: 50%;
        }

        /* Properties Section */
        .properties {
            padding: 50px 0;
            background: white;
            color: black;
        }

        .card {
            transition: transform 0.3s ease-in-out;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border: none;
        }

        .card-img-top {
            height: 250px;
            object-fit: cover;
        }

        .card:hover {
            transform: scale(1.05);
        }

        /* Contact Form */
        .form-control {
            background: rgba(255, 255, 255, 0.9);
            border: none;
        }

        .btn-custom {
            background: #ff5733;
            color: white;
            font-weight: bold;
        }

        .btn-custom:hover {
            background: #c70039;
        }

        /* Footer */
        .footer {
            background: #222;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .luxury-section {
        text-align: center;
        padding: 60px 0;
        background: #f8f9fa;
    }

    .section-title {
        font-size: 32px;
        font-weight: bold;
        color: #333;
        margin-bottom: 10px;
    }

    .section-subtitle {
        font-size: 18px;
        color: #777;
        margin-bottom: 40px;
    }

    /* Grid Layout */
    .luxury-item {
        background: white;
        padding: 15px;
        margin: 15px;
        border-radius: 8px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .luxury-item:hover {
        transform: scale(1.05);
    }

    .luxury-item img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-radius: 8px;
    }

    .luxury-info {
        font-size: 16px;
        font-weight: bold;
        color: #333;
        margin-top: 10px;
    }

    /* Button Styling */
    .take-a-look-btn {
        margin-top: 30px;
        padding: 12px 24px;
        background: #ff5733;
        color: white;
        font-size: 18px;
        font-weight: bold;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background 0.3s ease-in-out;
    }

    .take-a-look-btn:hover {
        background: #c70039;
    }
    .apartment-section {
        text-align: center;
        padding: 60px 0;
        background: #eef1f5;
    }

    .apartment-item {
        background: white;
        padding: 15px;
        margin: 15px;
        border-radius: 8px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .apartment-item:hover {
        transform: scale(1.05);
    }

    .apartment-item img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-radius: 8px;
    }

    .apartment-info {
        font-size: 16px;
        font-weight: bold;
        color: #333;
        margin-top: 10px;
    }
    .rowhouse-section {
        text-align: center;
        padding: 60px 0;
        background: #fdf2e9;
    }

    .rowhouse-item {
        background: white;
        padding: 15px;
        margin: 15px;
        border-radius: 8px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .rowhouse-item:hover {
        transform: scale(1.05);
    }

    .rowhouse-item img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-radius: 8px;
    }

    .rowhouse-info {
        font-size: 16px;
        font-weight: bold;
        color: #333;
        margin-top: 10px;
    }
    .real-estate-section, .about-us-section {
        padding: 60px 0;
        background: linear-gradient(45deg,rgb(216, 17, 24), #fad0c4);
        color: white;
    }
    .section-title {
        font-size: 32px;
        font-weight: bold;
        margin-bottom: 15px;
    }
    .section-subtitle {
        font-size: 18px;
        margin-bottom: 30px;
    }
    .feature-box, .about-box {
        padding: 20px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        margin: 10px 0;
        transition: transform 0.3s ease-in-out;
    }
    .feature-box h4, .about-box h4 {
        font-size: 20px;
        margin-bottom: 10px;
    }
    .feature-box p, .about-box p {
        font-size: 16px;
    }
    .feature-box:hover, .about-box:hover {
        transform: scale(1.05);
    }
    .btn-custom {
        margin-top: 20px;
        padding: 12px 25px;
        background: white;
        color: #ff5733;
        border: none;
        font-weight: bold;
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s ease-in-out;
        text-decoration: none;
        display: inline-block;
    }
    .btn-custom:hover {
        background: #c70039;
        color: white;
    }

    .contact-section {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 60px 0;
    background: #f8f9fa;
}

.contact-container {
    width: 100%;
    background: white;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
    text-align: center;
}

.contact-title {
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 20px;
    color: #333;
}

.contact-content {
    display: flex;
    justify-content: space-between;
    gap: 20px;
    flex-wrap: wrap;
}

.contact-box {
    flex: 1;
    min-width: 300px;
    padding: 20px;
    border-radius: 8px;
    background: #fff;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
}

.address-box {
    background:rgb(52, 139, 119);
}

.form-box {
    background: #fff;
}

.form-control {
    border: 1px solid #ccc;
    padding: 10px;
    border-radius: 5px;
}

.btn-custom {
    background: #007bff;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

.btn-custom:hover {
    background: #0056b3;
}
    </style>
</head>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Real Estate</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about-us" onclick="smoothScroll(event, 'about-us')">About Us</a></li>
                <li class="nav-item"> <a class="nav-link" href="#properties" onclick="smoothScroll(event, 'luxury-section')">Properties</a></li>
                <li class="nav-item"><a class="nav-link" href="agent.php">Agents</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact" onclick="smoothScroll(event, 'contact')">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="login.php">Profile</a></li>

            </ul>
        </div>
    </div>
</nav>



<!-- Hero Section -->
<header id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/luxury.jpg" class="d-block w-100" alt="Luxury Villa">
            <div class="carousel-caption">
                <h1>Find Your Dream Home</h1>
                <p class="lead">Luxury properties, trusted agents, and smooth transactions.</p>
                <a href="explore.php" class="btn btn-lg btn-custom">Explore Properties</a>

            </div>
        </div>
        <div class="carousel-item">
            <img src="images/Apartments.jpg" class="d-block w-100" alt="Modern Apartment">
            <div class="carousel-caption">
                <h1>Find Your Dream Home</h1>
                <p class="lead">Luxury properties, trusted agents, and smooth transactions.</p>
                <a href="explore.php" class="btn btn-lg btn-custom">Explore Properties</a>

            </div>
        </div>
        <div class="carousel-item">
            <img src="images/rowhouse2.jpg" class="d-block w-100" alt="Row Houses">
            <div class="carousel-caption">
                <h1>Find Your Dream Home</h1>
                <p class="lead">Luxury properties, trusted agents, and smooth transactions.</p>
                <a href="explore.php" class="btn btn-lg btn-custom">Explore Properties</a>

            </div>
        </div>
        <div class="carousel-item">
            <img src="images/land.jpg" class="d-block w-100" alt="Land">
            <div class="carousel-caption">
                <h1>Find Your Dream Home</h1>
                <p class="lead">Luxury properties, trusted agents, and smooth transactions.</p>
                <a href="explore.php" class="btn btn-lg btn-custom">Explore Properties</a>

            </div>
        </div>
    </div> 

    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</header>

<!-- Properties Section -->

<section id="properties" class="luxury-section">

    <div class="container">
        <h2 class="section-title">Luxury Properties</h2>
        <p class="section-subtitle">Discover the most exclusive luxury villas with breathtaking views.</p>

        <div class="row">
            <div class="col-md-4">
                <div class="luxury-item">
                    <img src="images/luxury1.jpg" alt="Luxury Villa 1">
                    <p class="luxury-info">Luxury Villa 1 - 5 Beds | 4 Baths | 3500 sqft</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="luxury-item">
                    <img src="images/luxury2.jpg" alt="Luxury Villa 2">
                    <p class="luxury-info">Luxury Villa 2 - 4 Beds | 3 Baths | 3000 sqft</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="luxury-item">
                    <img src="images/luxury3.jpg" alt="Luxury Villa 3">
                    <p class="luxury-info">Luxury Villa 3 - 6 Beds | 5 Baths | 4500 sqft</p>
                </div>
            </div>
           
            </div>
        </div>

        <button class="take-a-look-btn" onclick="window.location.href='properties1.php'">Take a Look</button>

    </div>
</section>

<section class="apartment-section">
    <div class="container">
        <h2 class="section-title">Luxury Apartments</h2>
        <p class="section-subtitle">Explore high-end apartments with modern amenities.</p>

        <div class="row">
            <div class="col-md-4">
                <div class="apartment-item">
                    <img src="images/apartment1.jpg" alt="Apartment 1">
                    <p class="apartment-info">Apartment 1 - 2 Beds | 2 Baths | 1200 sqft</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="apartment-item">
                    <img src="images/apartments2.jpg" alt="Apartment 2">
                    <p class="apartment-info">Apartment 2 - 3 Beds | 2 Baths | 1400 sqft</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="apartment-item">
                    <img src="images/apartments3.jpg" alt="Apartment 3">
                    <p class="apartment-info">Apartment 3 - 2 Beds | 1 Bath | 1100 sqft</p>
                </div>
            </div>
            
            </div>
        </div>

        <button class="take-a-look-btn" onclick="window.location.href='properties2.php'">Take a Look</button>

    </div>
</section>
<section class="rowhouse-section">
    <div class="container">
        <h2 class="section-title">Premium Row Houses</h2>
        <p class="section-subtitle">Discover beautiful row houses with spacious interiors.</p>

        <div class="row">
            <div class="col-md-4">
                <div class="rowhouse-item">
                    <img src="images/rowhouse1.jpg" alt="Row House 1">
                    <p class="rowhouse-info">Row House 1 - 3 Beds | 2 Baths | 1800 sqft</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="rowhouse-item">
                    <img src="images/rowhouse2.jpg" alt="Row House 2">
                    <p class="rowhouse-info">Row House 2 - 4 Beds | 3 Baths | 2200 sqft</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="rowhouse-item">
                    <img src="images/rowhouse3.jpg" alt="Row House 3">
                    <p class="rowhouse-info">Row House 3 - 3 Beds | 2.5 Baths | 2000 sqft</p>
                </div>
            </div>
            
            </div>
        </div>

        <button class="take-a-look-btn" onclick="window.location.href='properties3.php'">Take a Look</button>

    </div>
    </section>
<!--about us -->
<section class="real-estate-section">
    <div class="container text-center">
        <h2 class="section-title">Real Estate Management System</h2>
        <p class="section-subtitle">Simplifying property transactions with seamless technology and expert guidance.</p>

        <div class="row">
            <div class="col-md-4">
                <div class="feature-box">
                    <h4>📌 Property Management</h4>
                    <p>Effortlessly list, manage, and sell properties with our advanced tools.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <h4>🔒 Secure Transactions</h4>
                    <p>End-to-end encrypted payments for safe and hassle-free deals.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <h4>🤝 Expert Agents</h4>
                    <p>Connect with professional, verified real estate agents for the best deals.</p>
                </div>
            </div>
        </div>

        <a href="#about-us" class="btn-custom">Learn More</a>
    </div>
</section>

<section id="about-us" class="about-us-section">
    <div class="container text-center">
        <h2 class="section-title">Why Choose Us?</h2>
        <p class="section-subtitle">Your trusted partner in real estate, ensuring excellence at every step.</p>

        <div class="row">
            <div class="col-md-4">
                <div class="about-box">
                    <h4>🌍 Extensive Listings</h4>
                    <p>Explore a wide range of properties tailored to your needs and preferences.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about-box">
                    <h4>💼 Professional Guidance</h4>
                    <p>Our experienced agents provide personalized support and expert insights.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about-box">
                    <h4>⚡ Fast & Reliable Service</h4>
                    <p>We ensure quick responses and smooth transactions to make your journey hassle-free.</p>
                </div>
            </div>
        </div>

        
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section">
    <div class="contact-container">
        <h2 class="contact-title">Contact Us</h2>
        <div class="contact-content">
            
            <!-- Address Box -->
            <div class="contact-box address-box">
                <h4>Our Office</h4>
                <p><strong>Address:</strong> 123 Vedant Nagar , Nanded , India</p>
                <p><strong>Phone:</strong> 7558244263</p>
                <p><strong>Email:</strong> ritesh@gmail.com</p>
            </div>

            <!-- Form Box -->
            <div class="contact-box form-box">
                <h4>Get in Touch</h4>
                <form action="save_contact.php" method="POST">
    <div class="mb-3">
        <input type="text" name="name" class="form-control" placeholder="Your Name" required>
    </div>
    <div class="mb-3">
        <input type="email" name="email" class="form-control" placeholder="Your Email" required>
    </div>
    <div class="mb-3">
        <textarea name="message" class="form-control" rows="3" placeholder="Message" required></textarea>
    </div>
    <button type="submit" class="btn btn-custom">Send Message</button>
</form>


        </div>
    </div>
</section>


<!-- Footer -->
<footer class="footer">
    <p>&copy; 2025 Real Estate Management. All Rights Reserved.</p>
</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
