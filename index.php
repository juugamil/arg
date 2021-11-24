<?php 
if(isset($_POST['submit'])){
    $to = "advancedrealitygaming@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "<div class='cards-abs'> Message sent. Thank you " . $first_name . ", we will contact you shortly.</div>";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Advanced Reality Gaming - We bring the game to you</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/slideshow.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link href="//db.onlinewebfonts.com/c/736cf5b08b01082a3645e14038868e20?family=Krungthep" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="/img/Logo.png">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous" async defer></script>
    <script src="/js/mobilenav.js" async defer></script>
    <script src="/js/slideshow.js" async defer></script>
</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="main">
        <div class="navigation">
            <div class="container">
                <div class="logo">
                    <img src="/img/Logo.png">
                </div>
                <div class="pages">
                    <div class="menu-button" id="menu-button">
                        <img src="/img/menu-icon.png">
                    </div>
                    <div class="nav-menu" id="nav-menu">
                        <div class="nav-link"><a href="#home">Home</a></div>
                        <div class="nav-link"><a href="#about">About</a></div>
                        <div class="nav-link"><a href="#photos">Photos</a></div>
                        <div class="nav-link"><a href="#book">Book</a></div>
                        <div class="nav-link"><a href="#contact">Contact</a></div>
                    </div>
                </div>
            </div>
        </div>

        <a name="home"></a>
        <div class="hero-overlay">
            <div class="hero-text">
                <div class="container">
                    <h1 style="color: var(--brand-color); font-weight: 700;">Advanced Reality Gaming</h1>
                    <p></p>
                    <h4 style="color: var(--brand-color); font-weight: 300;">We bring the games to you</h4>
                </div>
                <p>&nbsp;</p>
                <a href="https://advancedrealitygaming.ourers.com/">
                    <button type="submit" class="btn btn-danger"
                        style="width: 50%; align-self: center; background-color: var(--brand-color); border: none;">Book
                        with
                        us</button>
                </a>
            </div>
        </div>

        <div class="hero">
            <div id="myVideo" autoplay="" loop="" playsinline="" muted="">
                <source src="" type="video/mp4">
            </div>
        </div>

        <a name="about"></a>
        <div class="cards">
            <div class="container">
                <h2 style="text-align:center">Let us host your next celebration!</h2>
                <p>Advanced Reality Gaming is a full-service mobile video game party truck. Game Trailers are the
                    perfect addition to all events including birthday parties, school events and church fairs. We serve
                    the greater D.C., Virginia and Maryland areas.</p>
            </div>

        </div>

        <a name="photos"></a>

        <div class="container-fluid" style="padding: 0%;">
            <div class="picContainer">
                <div id="info"></div>
                <div id="image1" class="img">
                    <img src="img/photo1.jpeg" />
                </div>
                <div id="image2" class="img">
                    <img src="img/photo2.jpeg" />
                </div>
                <div id="image3" class="img">
                    <img src="img/photo3.jpeg" />
                </div>
                <div id="image4" class="img">
                    <img src="img/photo4.jpeg" />
                </div>
                <div class="left" onclick="left()"></div>
                <div class="right" onclick="right()"></div>
                <div class="dots">
                    <div class="dot a1"></div>
                    <div class="dot a2"></div>
                    <div class="dot a3"></div>
                    <div class="dot a4"></div>
                </div>
            </div>
        </div>

        <div class="cards-burg">
            <div class="container">
                <div class="card-text">
                    <h2 style="text-align:center">A total gaming experience</h2>
                    <p>
                        ARG provides a unique experience for our customers to engage in their passion for video games
                        with people they enjoy. With multiple consoles, video games and the opportunity to engage in a
                        Virtual Reality experience, our customers can compete and engage in their favorite games
                        together, either online or offline!
                    </p>
                </div>
            </div>
        </div>

        <a name="book"></a>
        <div class="cards">
            <div class="container">
                <div class="card-text">
                    <h2 style="text-align:center">Book now</h2>
                    <p style="text-align: center;">Schedule your Advanced Reality Gaming Experience now and prepare to have fun!</p>
                    <p>&nbsp;</p>
                    <a href="https://advancedrealitygaming.ourers.com/"><div class="book-button"><button type="submit" class="btn btn-danger"
                                style="width: 50%; align-self: center; background-color: var(--brand-color); border: none;">Book</button>
                    </div></a>
                </div>
            </div>
        </div>

        <a name="contact"></a>
        <div class="cards-burg">
            <div class="container">
                <div class="card-text">
                    <h2 style="text-align:center">Contact Us</h2>
                    <p>If you have any questions regarding the Advanced Reality Gaming Experience feel free to leave
                        your information so that we can get back to you as soon as possible!</p>
                </div>
                <div class="form">
                    <form method="post" name="contact_form" action="">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="First name" name="firstname">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Last name" name="lastname">
                            </div>
                        </div>
                        <p>&nbsp;</p>
                        <div class="row">
                            <div class="col"><input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Email" name="email"></div>
                        </div>
                        <p>&nbsp;</p>
                        <div class="row">
                            <div class="col"><textarea placeholder="Message" id="exampleFormControlTextarea2" rows="3" name="message" style="width: 100%;"></textarea></div>
                        </div>
                        <p>&nbsp;</p>
                        <input type="submit" name="submit"  value="Submit" class="btn btn-danger"
                            style="background-color: var(--brand-color-2); border: none;">
                    </form>
                </div>
            </div>
        </div>



        <div class="footer">
            <div class="container">
                <div class="footer-links">
                    <div class="f-link">
                        <p>Privacy Policy</p>
                    </div>
                    <div class="f-link">
                        <p>Terms of Service</p>
                    </div>
                </div>
                <div class="sub-line">
                    <p>© 2021 Advanced Reality Gaming <br /> All Rights Reserved.</p>
                </div>
                <div class="social-icons row" style="display: flex;">
                    <div class="social-icons" style="display: flex; object-fit:contain; width: 20vw; height: auto;">
                        <a href="https://www.facebook.com/AdvancedRealityGaming/"><img src="/img/facebook-icon.png"></a>
                    </div>
                    <div class="social-icons" style="display: flex; object-fit:contain; width: 20vw; height: auto;">
                        <a href="https://www.instagram.com/advancedrealitygaming/?hl=en"><img src="/img/instagram-icon.png"></a>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <script src="" async defer>
    </script>
</body>

</html>