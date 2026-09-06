<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Agents - Real Estate</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* General Page Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        /* Navbar */
        .navbar {
            background-color: #343a40;
        }

        .navbar-brand, .nav-link {
            color: white !important;
        }

        /* Agents Section */
        .agents {
            padding: 60px 0;
            text-align: center;
        }

        .section-title {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 40px;
        }

        .agent-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            margin-bottom: 30px;
            text-align: center;
        }

        .agent-card:hover {
            transform: scale(1.05);
        }

        /* Circular Placeholder for Agent Profile */
        .agent-photo {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background-color: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            font-weight: bold;
            color: #555;
            margin: 0 auto 15px;
        }

        .agent-card h4 {
            margin-top: 10px;
            font-size: 1.5rem;
        }

        .agent-role {
            color: #777;
            font-style: italic;
        }

        /* Contact Button */
        .contact-btn {
            display: block;
            margin: 10px auto;
            padding: 8px 15px;
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .contact-btn:hover {
            background-color: #0056b3;
        }

        /* Hidden Contact Details */
        .contact-details {
            display: none;
            margin-top: 10px;
        }

        /* Footer */
        .footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 30px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Real Estate</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <!-- Agents Section -->
    <section id="agents" class="agents">
        <div class="container">
            <h2 class="section-title">Meet Our Agents</h2>
            <div class="row">
                <!-- Agent 1 -->
                <div class="col-md-4">
                    <div class="agent-card">
                        <div class="agent-photo">👨</div> <!-- Male Sticker -->
                        <h4>Abhijeet Salunkhe</h4>
                        <p class="agent-role">Senior Agent for Luxury Villa</p>
                        <button class="contact-btn" onclick="showContact('contact1')">View Contact</button>
                        <div class="contact-details" id="contact1">
                            <p><strong>Phone:</strong> +123 456 7890</p>
                            <p><strong>Email:</strong> <a href="mailto:john@example.com">abhijeet@gmail.com</a></p>
                        </div>
                    </div>
                </div>

                <!-- Agent 2 -->
                <div class="col-md-4">
                    <div class="agent-card">
                        <div class="agent-photo">👩</div> <!-- Female Sticker -->
                        <h4>Sona Chopra</h4>
                        <p class="agent-role">Senior agent for Luxury Apartments</p>
                        <button class="contact-btn" onclick="showContact('contact2')">View Contact</button>
                        <div class="contact-details" id="contact2">
                            <p><strong>Phone:</strong> +987 654 3210</p>
                            <p><strong>Email:</strong> <a href="mailto:sona@gmail.com">sona@gmail.com</a></p>
                        </div>
                    </div>
                </div>

                <!-- Agent 3 -->
                <div class="col-md-4">
                    <div class="agent-card">
                        <div class="agent-photo">👨</div> <!-- Male Sticker -->
                        <h4>Munna Pandey</h4>
                        <p class="agent-role">Senior agent for rowhouses</p>
                        <button class="contact-btn" onclick="showContact('contact3')">View Contact</button>
                        <div class="contact-details" id="contact3">
                            <p><strong>Phone:</strong> +567 890 1234</p>
                            <p><strong>Email:</strong> <a href="mailto:munna@gmail.com.com">Munna@gmail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 Real Estate. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript for Contact Toggle -->
    <script>
        function showContact(id) {
            var contactDiv = document.getElementById(id);
            if (contactDiv.style.display === "none" || contactDiv.style.display === "") {
                contactDiv.style.display = "block";
            } else {
                contactDiv.style.display = "none";
            }
        }
    </script>
</body>
</html>
