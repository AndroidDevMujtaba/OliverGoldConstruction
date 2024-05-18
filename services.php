<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>OGC</title>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Custom Fonts -->
        <link rel="stylesheet" href="custom-font/fonts.css" />
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <!-- Bootsnav -->
        <link rel="stylesheet" href="css/bootsnav.css">
        <!-- Fancybox -->
        <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />	
        <!-- Custom stylesheet -->
        <link rel="stylesheet" href="css/custom.css" />
        <link rel="apple-touch-icon" sizes="180x180" href="images/favicon_io/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon_io/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon_io/favicon-16x16.png">
        <link rel="manifest" href="images/favicon_io/favicon.ico">
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
       <style>
     /* popUp form styling */
    .popup-form {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fedb5d;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            z-index: 9999;
            max-width: 400px;
            width: 100%;
        }
        
        .popup-form h2 {
            margin-top: 0;
            font-size: 24px;
            text-align: center;
        }
        
        .popup-form label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .popup-form select,
        .popup-form input[type="text"],
        .popup-form input[type="email"],
        .popup-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .popup-form textarea {
            height: 100px;
        }

        .popup-form button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #323233;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
                }

        .popup-form button[type="submit"]:hover {
            background-color: #555;
        }


        /* Styles for the overlay */
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9998;
        }
       
        .whatsapp-float {
            position: fixed;
            bottom: 16px;
            right: 20px;
            z-index: 1000;
        }
    
        .whatsapp-float img {
            width: 50px;
            height: 50px;
        }
     
       </style>
    </head>
    <body>

        <!-- Preloader -->

        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                </div>
            </div>
        </div>

        <!--End off Preloader -->

        <!-- Header -->
        <header>
            <!-- Top Navbar -->
            <div class="top_nav">
                <div class="container">
                    <ul class="list-inline info">
                        <li><a href="tel:+447309999490"><span class="fa fa-phone"></span> +44 7309999490</a></li>
                        <li><a href="mailto:olivergoldconstruction@gmail.com"><span class="fa fa-envelope"></span> olivergoldconstruction@gmail.com</a></li>
                    </ul>
                    <ul class="list-inline social_icon">
                        <li><a href=""><span class="fa fa-facebook"></span></a></li>
                        <li><a href=""><span class="fa fa-linkedin"></span></a></li>
                        <li><a href=""><span class="fa fa-instagram"></span></a></li>
                    </ul>			
                </div>
            </div><!-- Top Navbar end -->

            <!-- Navbar -->
            <nav class="navbar bootsnav">
                <!-- Top Search -->
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <!-- Atribute Navigation -->
                    <!-- Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="./index.php"><img height="60" class="logo" src="images/company-logo.png" alt=""></a>
                    </div>
                    <!-- Navigation -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav menu">
                            <li><a href="./index.php">Home</a></li>                    
                            <li><a href="./about.php">About Us</a></li>
                            <li><a href="./services.php">Services</a></li>
                            <li><a href="./portfolio.php">Portfolio</a></li>
                            <li><a href="./contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>   
            </nav><!-- Navbar end -->
        </header>
<!-- services -->
<section id="services">
    <div class="container">
        <h2>OUR SERVICES</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="service_item">
                    <img src="images/building1.jpg" alt="Our Services" />
                    <h3>DEVELOPMENT</h3>
                    <p>We transform raw land into thriving residential and commercial spaces. Our team handles everything from planning to execution, ensuring high-quality results. We prioritize innovation, sustainability, and efficiency to create developments that enhance communities. Trust us to bring your vision to life with precision and expertise.</p>
                    <a href="#services" class="btn know_btn openFormBtn">know more</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service_item">
                    <img src="images/service_img2.jpg" alt="Our Services" />
                    <h3>REFURBISHMENT</h3>
                    <p>Our refurbishment services restore buildings to their former glory while updating them to modern standards. We handle structural repairs and aesthetic enhancements for residential, commercial, and heritage properties. With a focus on quality craftsmanship and energy efficiency, we revitalize your space, enhancing its value and usability.</p>
                    <a href="#services" class="btn know_btn openFormBtn">know more</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service_item">
                    <img src="images/service_img3.jpg" alt="Our Services" />
                    <h3>EXTENSION</h3>
                    <p>We offer bespoke extension services to expand your living or working space. From design to construction, we ensure seamless integration with your existing structure. Our skilled team works efficiently to deliver functional, stylish extensions on time and within budget, enhancing your property’s potential. We specialize in expanding and enhancing living.</p>
                    <a href="#services" class="btn know_btn openFormBtn">know more</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service_item">
                    <img src="images/landscaping1.jpg" alt="Our Services" />
                    <h3>LANDSCAPING</h3>
                    <p>Our landscaping services transform outdoor areas into beautiful, functional spaces. We design and execute projects that complement your property and lifestyle needs. From garden design to hardscaping, we use sustainable practices to create landscapes that add value and enjoyment to your home or business.</p>
                    <a href="#services" class="btn know_btn openFormBtn">know more</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- POPUP FORM -->
<div class="popup-form inquiryForm">
    <h2>Inquiry Form</h2>
    <form action="services.php" method="POST">

        <input type="text" id="name" name="name" placeholder="Name" required><br><br>
        <input type="email" id="email" name="email" placeholder="Email" required><br><br>
        <select id="service" name="service">
            <option value="" disabled selected>Select a service</option>
            <option value="Development">Development</option>
            <option value="Refurbishment">Refurbishment</option>
            <option value="Extension">Extension</option>
            <option value="Landscaping">Landscaping</option>
        </select>
        <textarea id="message" name="message" rows="4" placeholder="Message" required></textarea><br><br>
        <button type="submit">Submit</button>
    </form>
</div> 
        <!-- The overlay -->
    <div id="overlay" class="overlay"></div>
<footer>
    <!-- Footer top -->
    <div class="container footer_top">
        <div class="row">
            <div class="col-lg-4 col-sm-7">
                <div class="footer_item">
                    <h4>About Company</h4>
                    <img height="60" class="logo" src="images/company-logo.png" alt="Construction" />
                    <p>From Vision to Reality, Crafting Spaces with Excellence.</p>

                    <ul class="list-inline footer_social_icon">
                        <li><a href=""><span class="fa fa-facebook"></span></a></li>
                        <li><a href=""><span class="fa fa-linkedin"></span></a></li>
                        <li><a href=""><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-5">
                <div class="footer_item">
                    <h4>Contact us</h4>
                    <ul class="list-unstyled footer_contact">
                        <li><a target="_blank" href="https://www.google.com/maps?q=12+York+Chambers,+York+Street,+Wolverhampton"><span class="fa fa-map-marker"></span> 12 York Chambers, York street Wolverhampton
                        </a></li>
                        <li><a href="mailto:olivergoldconstruction@gmail.com"><span class="fa fa-envelope"></span> olivergoldconstruction@gmail.com</a></li>
                        <li><a href="tel:+447309999490 "><span class="fa fa-mobile"></span><p>+44 7309999490 </p></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- Footer top end -->

    <!-- Footer bottom -->
    <div class="footer_bottom text-center">
        <p class="wow fadeInRight">
            Made with 
            <i class="fa fa-heart"></i>
            by 
            <a target="_blank" href="">BrokeEngineers</a> 
            2024. All Rights Reserved
        </p>
    </div><!-- Footer bottom end -->
</footer><!-- Footer end -->
<!-- whatsapp -->
<a href="https://wa.me/447309999490" class="whatsapp-float" target="_blank">
    <img src="images/whatsapp-logo-removebg.png" alt="WhatsApp">
</a>
        <!-- JavaScript -->
        <script src="js/jquery-1.12.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!-- Bootsnav js -->
        <script src="js/bootsnav.js"></script>

        <!-- JS Implementing Plugins -->
        <script src="js/isotope.js"></script>
        <script src="js/isotope-active.js"></script>
        <script src="js/jquery.fancybox.js?v=2.1.5"></script>


        <script src="js/main.js"></script>

        <!-- Custom script to handle the popup form -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var openFormBtns = document.querySelectorAll(".openFormBtn");
            var inquiryForm = document.querySelector(".inquiryForm");
            var overlay = document.getElementById("overlay");

            // Show the form and overlay when any "Know More" button is clicked
            openFormBtns.forEach(function(btn) {
                btn.addEventListener("click", function() {
                    inquiryForm.style.display = "block";
                    overlay.style.display = "block";
                });
            });

            // Hide the form and overlay when clicking outside the form
            overlay.addEventListener("click", function() {
                inquiryForm.style.display = "none";
                overlay.style.display = "none";
            });
        });
    </script>
        </body>

        <?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $dbname = "lullu"; 

    
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $stmt = $conn->prepare("INSERT INTO inquiries (name, email, service, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $service, $message);

    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $message = $_POST['message'];

    
    if ($stmt->execute()) {
        echo '<script>alert("Inquiry submitted successfully!");</script>';
    } else {
        echo "Error: " . $stmt->error;
    }

   
    $stmt->close();
    $conn->close();

   
    $mail = new PHPMailer(true);

    try {
        
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username   = 'mujtaba.dev1@gmail.com';//sender lee email
        $mail->Password   = 'emae qyit keev zvpn';     
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        
        $mail->setFrom('mujtaba.dev1@gmail.com', 'Mailer');
        $mail->addAddress('olivergoldconstruction@gmail.com', 'Admin'); // admin lee email

        
        $mail->isHTML(true); 
        $mail->Subject = 'New Inquiry Submitted';
        $mail->Body    = "An inquiry has been submitted with the following details:<br>Name: $name<br>Email: $email<br>Service: $service<br>Message: $message";

        $mail->send();
        echo '<script>alert("Email has been sent successfully to the admin.");</script>';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}
?>
