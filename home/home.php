<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles.css"> <!-- Assuming you have a separate CSS file for styling -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5; /* Light gray background */
            color: #333; /* Dark gray text color */
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .content {
            text-align: center;
        }

        h2 {
            font-size: 36px; /* Increased size for main headings */
            margin-bottom: 20px; /* Added margin for spacing */
        }

        p {
            font-size: 18px; /* Increased font size for better readability */
            line-height: 1.6;
            margin-bottom: 20px; /* Added margin for spacing */
        }
        
        /* Customize carousel */
        .carousel-item {
            text-align: center; /* Center images within the carousel */
        }
        
        .carousel-item img {
            max-width: 100%; /* Set maximum width for each image */
            height: auto; /* Maintain aspect ratio */
            margin: 0; /* Remove default margin */
        }
        
        /* Gallery section styles */
        .gallery {
            margin-top: 50px;
            text-align: center; /* Center the gallery */
        }

        .gallery h3 {
            font-size: 36px; /* Increased size for main heading */
            margin-bottom: 20px; /* Added margin for spacing */
        }

        .gallery .row {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin: 0 -10px; /* Adjust for column gutters */
        }

        .gallery .col-md-4 {
            padding: 0 10px; /* Adjust for column gutters */
            margin-bottom: 20px; /* Added margin for spacing between rows */
            transition: transform 0.3s ease; /* Smooth transition for hover effect */
        }

        .gallery .col-md-4:hover {
            transform: translateY(-10px); /* Move image up on hover */
        }

        .gallery img {
            max-width: 100%; /* Set maximum width for images in the gallery */
            height: auto; /* Maintain aspect ratio */
            border-radius: 10px; /* Rounded corners for images */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Drop shadow effect */
        }
        
        /* About Us section styles */
        .about-us {
            margin-top: 50px;
            background-color: #ffffff; /* White background */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .about-us h3 {
            font-size: 36px; /* Increased size for main heading */
            margin-bottom: 20px; /* Added margin for spacing */
        }

        .about-us p {
            font-size: 18px; /* Increased font size for better readability */
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .about-us p:last-child {
            margin-bottom: 0; /* Remove bottom margin from last paragraph */
        }

        .about-us p:first-child::first-letter {
            font-size: 150%; /* Increase the size of the first letter */
            color: #ff5e3a; /* Set color for the first letter */
        }

        /* Separate headers for Gallery and About Us */
        .section-header {
            font-size: 24px; /* Font size for section headers */
            margin-bottom: 20px; /* Added margin for spacing */
            color: #333; /* Dark gray text color */
        }
        .about-section-name {
            font-size: 30px; /* Increased font size */
            font-weight: bold; /* Added bold font weight */
            color: #ff5e3a; /* Custom color */
        }
        .gallery-section-name {
            font-size: 30px; /* Increased font size */
            font-weight: bold; /* Added bold font weight */
            color: #007bff; /* Custom color */
        }
    </style>
</head>
<body>
    <?php include('header.php'); ?> <!-- Assuming you have a separate header file -->
    
    <div class="container">
        <div class="content">
            <h2>Welcome to Rapidox Courier Management Service</h2>
            <p>We provide the fastest courier service in India.</p>
        </div>
        
        <!-- Insert the carousel code here -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/33.jpg" class="d-block w-100" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img src="images/22.jpg" class="d-block w-100" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img src="images/3.jpg" class="d-block w-100" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img src="images/44.jpg" class="d-block w-100" alt="Fourth slide">
                </div>
                <div class="carousel-item">
                    <img src="images/5.jpg" class="d-block w-100" alt="Fifth slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        
        <!-- Gallery section -->
        <div class="gallery">
            <h3 class="section-header gallery-section-name">Gallery</h3>
            <div class="row">
                <div class="col-md-4">
                    <img src="images/1.jpg" class="img-fluid" alt="Image 1">
                </div>
                <div class="col-md-4">
                    <img src="images/2.jpg" class="img-fluid" alt="Image 2">
                </div>
                <div class="col-md-4">
                    <img src="images/11.jpg" class="img-fluid" alt="Image 3">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img src="images/4.jpg" class="img-fluid" alt="Image 4">
                </div>
                <div class="col-md-4">
                    <img src="images/55.jpg" class="img-fluid" alt="Image 5">
                </div>
                <div class="col-md-4">
                    <img src="images/6.jpg" class="img-fluid" alt="Image 6">
                </div>
            </div>
        </div>

        
        <!-- About Us section -->
        <div class="about-us">
            <h3 class="section-header about-section-name">About Us</h3>
            <p>Welcome to <span class="brand-name">Rapidox Courier Management Service</span>, your premier choice for swift and dependable courier solutions in India. With a steadfast commitment to excellence, we pride ourselves on delivering unparalleled service that exceeds expectations.</p>
            
            <p>At Rapidox, we recognize the paramount importance of timely deliveries and strive to uphold our reputation as industry leaders. Our dedicated team, coupled with cutting-edge technology, ensures the seamless and secure transportation of your packages, prioritizing precision and professionalism at every step.</p>
            
            <p>Trust Rapidox Courier Management Service for your logistical needs, and experience the epitome of efficiency and reliability. We are more than just a courier service; we are your trusted partner in seamless delivery solutions.</p>
        </div>

    </div>
    
    <?php include('footer.php'); ?> <!-- Assuming you have a separate footer file -->
</body>
</html>
