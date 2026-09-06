<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Explore Properties</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
     .navbar {
            background-color: #343a40;
        }

        .navbar-brand, .nav-link {
            color: white !important;
        }

    body {
      background-color: #f4f6f8;
      font-family: 'Segoe UI', sans-serif;
    }
    .explore-title {
      text-align: center;
      font-size: 2.5rem;
      font-weight: bold;
      margin-top: 40px;
      color: #2c3e50;
    }
    .property-card {
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }
    .property-card:hover {
      transform: scale(1.02);
    }
    .property-img {
      height: 200px;
      object-fit: cover;
    }
    .btn-book {
      background-color: #007bff;
      color: white;
      border: none;
    }
    .btn-book:hover {
      background-color: #0056b3;
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
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Real Estate</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about-us" onclick="smoothScroll(event, 'about-us')">About Us</a></li>
         
                    <li class="nav-item"><a class="nav-link" href="agent.php">Agents</a></li> <!-- Updated link -->
                    <li class="nav-item"><a class="nav-link" href="#contact" onclick="smoothScroll(event, 'contact')">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

<div class="container my-5">
  <h2 class="explore-title">Explore Our Properties</h2>
  <div class="row g-4 mt-4">

    <!-- 18 Mixed Property Cards -->
    <!-- Row 1 -->
    <div class="col-md-4">
      <div class="card property-card">
        <img src=https://wallpaperaccess.com/full/5768836.jpg class="card-img-top property-img" alt="Villa A">
        <div class="card-body">
          <h5 class="card-title">Luxury Villa A</h5>
          <p class="card-text">Elegant villa with ocean views and private pool.</p>
        
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card property-card">
        <img src=https://i.ytimg.com/vi/e-Lp7kQWaNg/maxresdefault.jpg class="card-img-top property-img" alt="Penthouse B">
        <div class="card-body">
          <h5 class="card-title">Penthouse B</h5>
          <p class="card-text">City penthouse with panoramic skyline views.</p>
        
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card property-card">
        <img src=https://c4.wallpaperflare.com/wallpaper/733/218/542/house-cottage-forest-road-wallpaper-preview.jpg class="card-img-top property-img" alt="Cottage C">
        <div class="card-body">
          <h5 class="card-title">Forest Cottage C</h5>
          <p class="card-text">Cozy cottage in a tranquil forest setting.</p>
        
        </div>
      </div>
    </div>

    <!-- Row 2 -->
    <div class="col-md-4">
      <div class="card property-card">
        <img src=https://tse3.mm.bing.net/th?id=OIP.YQGcfUnemt9xMGaNXF_jHwHaEo&pid=Api&P=0&h=180 class="card-img-top property-img" alt="House D">
        <div class="card-body">
          <h5 class="card-title">Modern House D</h5>
          <p class="card-text">Spacious family home with contemporary design.</p>

        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card property-card">
        <img src=https://patch.com/img/cdn20/users/55886/20190325/104651/styles/raw/public/processed_images/kendall_east_rendering_-_perkins_eastman-1553525063-746.jpg class="card-img-top property-img" alt="Apartment E">
        <div class="card-body">
          <h5 class="card-title">Urban Apartment E</h5>
          <p class="card-text">Chic city apartment close to business district.</p>
          
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card property-card">
        <img src=https://wallpaperaccess.com/full/1535113.jpg class="card-img-top property-img" alt="Cabin F">
        <div class="card-body">
          <h5 class="card-title">Mountain Cabin F</h5>
          <p class="card-text">Rustic cabin surrounded by snowy peaks.</p>
        
        </div>
      </div>
    </div>

    <!-- Row 3 -->
    <div class="col-md-4">
      <div class="card property-card">
        <img src=https://eskipaper.com/images/tropical-resort-bungalow-1.jpg class="card-img-top property-img" alt="Bungalow G">
        <div class="card-body">
          <h5 class="card-title">Tropical Bungalow G</h5>
          <p class="card-text">Island bungalow just steps from the beach.</p>
         
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card property-card">
        <img src=https://tse3.mm.bing.net/th?id=OIP.-6zRqjbi7MsQ4gINI97CbQHaEJ&pid=Api&P=0&h=180 class="card-img-top property-img" alt="Farmhouse H">
        <div class="card-body">
          <h5 class="card-title">Rustic Farmhouse H</h5>
          <p class="card-text">Peaceful farmhouse in open countryside.</p>
          
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card property-card">
        <img src=https://tse3.mm.bing.net/th?id=OIP.Cf5FQdix6OA1BC1Nrb53mQHaEk&pid=Api&P=0&h=180 class="card-img-top property-img" alt="Loft I">
        <div class="card-body">
          <h5 class="card-title">Industrial Loft I</h5>
          <p class="card-text">Trendy loft apartment with artistic vibes.</p>
          
        </div>
      </div>
    </div>

    
  </div>
</div>
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
<section id="contact" class="contact">
    <div class="contact-container">
        <h2 class="contact-title">Contact Us</h2>
        <div class="contact-content">
            
            <!-- Address Box -->
            <div class="contact-box address-box">
                <h4>Our Office</h4>
                <p><strong>Address:</strong> 123 Vedant Nagar , Nanded , India</p>
                <p><strong>Phone:</strong> 7558244263</p>
                <p><strong>Email:</strong> ritesh@gmail.com</p>
</body>
</html>
