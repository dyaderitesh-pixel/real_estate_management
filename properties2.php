<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Villas</title>

    <style>
        /* General Page Styling */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }
        #navbar-wrapper {
            all: unset; /* Reset styles for isolation */
        }
        .navbar {
            background: rgba(0, 0, 0, 0.8);;
        }
        /* Container */
        .customer-container {
            width: 80%;
            margin: auto;
            padding: 40px 0;
            text-align: center;
        }

        /* Section Title */
        .section-title {
            font-size: 36px;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .section-subtitle {
            font-size: 18px;
            color: #7f8c8d;
            margin-bottom: 30px;
        }

        /* Luxury Villas Grid */
        .customer-row {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        /* Individual Villa */
        .luxury-item {
            background: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            text-align: center;
            margin-bottom: 20px;
        }

        .luxury-item:hover {
            transform: translateY(-5px);
        }

        /* Villa Images */
        .luxury-item img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        /* Villa Titles */
        .luxury-item h3 {
            font-size: 22px;
            color: #34495e;
            margin-bottom: 10px;
        }

        /* Villa Details */
        .luxury-item p {
            font-size: 16px;
            margin: 5px 0;
        }

        .price {
            font-weight: bold;
            color: #27ae60;
        }

        /* Buttons */
        .book-now-btn, .take-a-look-btn {
            display: inline-block;
            background: #e74c3c;
            color: #ffffff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
            margin-top: 10px;
            text-decoration: none;
        }

        .book-now-btn:hover {
            background: #c0392b;
        }

        .take-a-look-btn {
            background: #3498db;
        }

        .take-a-look-btn:hover {
            background: #2980b9;
        }

        /* Booking Form Overlay */
        .booking-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            justify-content: center;
            align-items: center;
        }

        /* Booking Form Container */
        .booking-container {
            background: #ffffff;
            padding: 20px;
            width: 350px;
            border-radius: 10px;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            position: relative;
        }

        /* Close Button */
        .close-btn {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 20px;
            cursor: pointer;
            color: #e74c3c;
        }

        /* Form Styling */
        .booking-container form {
            display: flex;
            flex-direction: column;
        }

        .booking-container label {
            font-size: 14px;
            text-align: left;
            margin-top: 10px;
        }

        .booking-container input {
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Confirm Booking Button */
        .booking-container button {
            margin-top: 15px;
            padding: 10px;
            background: #27ae60;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .booking-container button:hover {
            background: #219150;
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
<body>
<!-- Only Bootstrap for Navbar -->
<div id="navbar-wrapper">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Real Estate</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Properties</a></li>
                    <li class="nav-item"><a class="nav-link" href="agent.php">Agents</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact" onclick="smoothScroll(event, 'contact')">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Profile</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<!-- Remove Bootstrap After Navbar Loads -->

</div>
<section class="custom-luxury-section">
    <div class="custom-container">
    <h2 class="section-title">Luxury Apartments</h2>
        <p class="section-subtitle">Experience the elegance and comfort of our premium high-rise apartments.</p>

        <div class="custom-row">
            <!-- Villa 1 -->
            <div class="custom-col-md-4">
                <div class="luxury-item">
                <img src="images/apartment11.jpg" alt="Luxury Apartment 1">
                    <h3>Luxury Apartment 1</h3>
                    <p>🛏️ 3 Beds | 🛁 2 Baths | 📏 2,000 sqft</p>
                    <p>📍 Location: Manhattan, NY</p>
                    <p class="price">💰 Price: $1,900,000</p>
                    <p>🏙️ **Penthouse apartment with a skyline view and private rooftop**</p>
                    <p>🏠 **Features:** Floor-to-ceiling windows, modern kitchen, concierge service.</p>
                    <a href="booking1.php?apartment=Luxury+Apartment+1" class="book-now-btn">Book Now</a>

                </div>
            </div>

            <!-- Apartment 2 -->
            <div class="custom-col-md-4">
                <div class="luxury-item">
                    <img src="images/apartment2.jpg" alt="Luxury Apartment 2">
                    <h3>Luxury Apartment 2</h3>
                    <p>🛏️ 2 Beds | 🛁 2 Baths | 📏 1,800 sqft</p>
                    <p>📍 Location: Miami, FL</p>
                    <p class="price">💰 Price: $1,500,000</p>
                    <p>🌊 **Beachfront apartment with a private balcony**</p>
                    <p>🏠 **Features:** Smart home system, fitness center, infinity pool.</p>
                    <a href="booking1.php?apartment=Luxury+Apartment+2" class="book-now-btn">Book Now</a>

                </div>
            </div>

            <!-- Apartment 3 -->
            <div class="custom-col-md-4">
                <div class="luxury-item">
                    <img src="images/apartment3.jpg" alt="Luxury Apartment 3">
                    <h3>Luxury Apartment 3</h3>
                    <p>🛏️ 4 Beds | 🛁 3 Baths | 📏 2,500 sqft</p>
                    <p>📍 Location: Los Angeles, CA</p>
                    <p class="price">💰 Price: $2,200,000</p>
                    <p>🌅 **Modern apartment with a sunset terrace and private gym**</p>
                    <p>🏠 **Features:** Rooftop garden, private sauna, underground parking.</p>
                    <a href="booking1.php?apartment=Luxury+Apartment+3" class="book-now-btn">Book Now</a>

                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
