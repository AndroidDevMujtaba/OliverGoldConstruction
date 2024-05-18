
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
<!-- contact -->
<section id="contact_form">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Do you have any questions?</h2>
                <h2 class="second_heading">Feel free to contact us!</h2>
            </div>
            <form role="form" class="form-inline text-right col-md-6" method="POST">
    <div class="form-group">
        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
    </div>
    <div class="form-group">
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
    </div>
    <div class="form-group">
    <input type="tel" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number" pattern="[0-9]{11}" title="Phone number must be 11 digits" required>

    </div>
    <div class="form-group">
        <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message" required></textarea>
    </div>
    <button type="submit" class="btn submit_btn">Submit</button>
</form>
			
        </div>
    </div>
</section>

       
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

    $stmt = $conn->prepare("INSERT INTO contactform (name, email, phone_number, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phoneNumber, $message);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phone_number'];
    $message = $_POST['message'];

    if ($stmt->execute()) {
        echo '<script>alert("Form submitted successfully!");</script>';
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

    $mail = new PHPMailer(true);

    try {
        
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; 
        $mail->SMTPAuth   = true;               
        $mail->Username   = 'mujtaba.dev1@gmail.com';
        $mail->Password   = 'emae qyit keev zvpn';         
        $mail->SMTPSecure = 'tls';              
        $mail->Port       = 587;                
        
        $mail->setFrom('mujtaba.dev1@gmail.com', 'Mailer');
        $mail->addAddress('olivergoldconstruction@gmail.com'); 
        
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body    = "Name: $name<br>Email: $email<br>Phone Number: $phoneNumber<br>Message: $message";
        
        $mail->send();
        echo '<script>alert("Email sent to admin!");</script>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>

