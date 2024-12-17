<?php
session_start();
// INITIALIZE MESSAGE VARIABLES FOR THE MODEL
$message = '';
$messageType= '';

if(isset($_SESSION['message'])){
    $message=$_SESSION['message']['text'];
    $messageType= $_SESSION['message']['type'];
    // CLEAR THE SESSION
    unset($_SESSION['message']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bytant Innovative Group</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header class="bg-light py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">
                <img src="images/R.png" alt="Bytant Logo" class="img-fluid" style="max-height: 50px;">
            </div>
            <nav>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="text-center bg-primary text-white py-5">
        <div class="container">
            <h1>Welcome to Bytant Innovative Group</h1>
            <p class="lead">Team slogan here</p>
            <button class="btn btn-light" onclick="document.querySelector('#about').scrollIntoView({behavior: 'smooth'})">Learn More</button>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">About Us</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="images/OIP (1).jpeg" class="card-img-top" alt="Teamwork">
                        <div class="card-body">
                            <h3 class="card-title">Our Mission</h3>
                            <p class="card-text">Bytant focuses on innovation, collaboration, and impact to solve real-world problems using technology.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="images/OIP.jpeg" class="card-img-top" alt="Vision">
                        <div class="card-body">
                            <h3 class="card-title">Our Vision</h3>
                            <p class="card-text">To inspire the next generation of tech leaders and provide solutions that positively impact Africa and beyond.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="images/OIP (1).jpeg" class="card-img-top" alt="Values">
                        <div class="card-body">
                            <h3 class="card-title">Our Values</h3>
                            <p class="card-text">We believe in creativity, teamwork, and making technology accessible to everyone.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Our Projects</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="images/OIP (1).jpeg" class="card-img-top" alt="Weather App">
                        <div class="card-body">
                            <h3 class="card-title">Weather App</h3>
                            <p class="card-text">A user-friendly app providing campus-specific weather updates for students in Ghana.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="images/OIP.jpeg" class="card-img-top" alt="Robotics Club">
                        <div class="card-body">
                            <h3 class="card-title">Robotics Club Support</h3>
                            <p class="card-text">Helping high school students build their first robots by providing essential resources.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="images/OIP (1).jpeg" class="card-img-top" alt="Climate Awareness">
                        <div class="card-body">
                            <h3 class="card-title">Climate Change Campaign</h3>
                            <p class="card-text">Promoting awareness and solutions for climate challenges in local communities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Contact Us</h2>
            <form action="index.php" method="post" class="mx-auto" style="max-width: 600px;">
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message:</label>
                    <textarea id="message" name="message" rows="5" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Send Message</button>
            </form>
        </div>
    </section>

    <!-- BOOTSTRAP MODAL -->
    <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="messageModalLabel">Message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modalContent"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="bg-dark text-white py-3">
        <div class="container text-center">
            <p>&copy; 2024 Bytant Innovative Group. All rights reserved.</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#" class="text-white text-decoration-none">Twitter</a></li>
                <li class="list-inline-item"><a href="#" class="text-white text-decoration-none">Instagram</a></li>
                <li class="list-inline-item"><a href="#" class="text-white text-decoration-none">LinkedIn</a></li>
            </ul>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function(){
            // SHOW MODAL WITH ERROR/SUCCESS MESSAGE IF EXISTS
            <?php if ($message):?>
                $('#modalContent').html("<?= $message ?>");
                $('#messageModal').modal('show');
            <?php endif; ?>

            // HANDLE FORM SUBMISSION
            $('#contactForm').on('submit', function(e){
                // PREVENT THE DEFAULT FORM SUBMISSION
                e.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: 'index.php',
                    data:$(this).serialize(),
                    dataType: 'json',
                    success: function(response){
                        $('#modalContent').html(response.message);
                        $('#messageModal').modal('show');
                    },
                    error: function(xhr, status, error){
                        $('#modalContent').html("An ubexpected error occured.");
                        $('#messageModal').modal('show');
                    }
                });
            });
        });
    </script>
</body>
</html>
