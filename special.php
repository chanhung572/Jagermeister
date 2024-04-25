<?php
$conn = mysqli_connect("localhost","root","","contact");

if (isset($_POST["submit"])){
    $name =$_POST["name"];
    $email =$_POST["email"];
    $message = $_POST["message"];

    $query = "INSERT INTO tb_contact VALUES('$name', '$email','$message')";

    mysqli_query($conn, $query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop | Jägermeister</title>
    <link rel="stylesheet" href="style\special.css">
    <link rel='shortcut icon' href='image\Logo\icon.png' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <div class ="content">
        <header>
            <div class="logo">
                <a href="home.php"><img src="image\Logo\logo.jpg"></a>
            </div>

            <div class="category">
                <ul>
                    <li class="category-item">
                        <a class="category-list" href="home.php">Home</a>
                    </li>

                    <li class="category-item">
                        <a class="category-list" href="#">Vouchers</a>
                    </li>

                    <li class="category-item">
                        <a class="category-list" href="#">News</a>
                    </li>
                </ul>
            </div>
            
            <div class="search">
                <input placeholder="Text in here..." type="text">
                <button type="submit">Search</button>
            </div>

            <div class="user">
                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                <a href="#"><i class="fa-solid fa-circle-dollar-to-slot"></i></a>
                <a href="#"><i class="fa-solid fa-user"></i></a>
                <!-- <span>Chan Hung</span>  -->
            </div>    

            <div class="logout">
                <a href="login-background.php">Logout</a>
            </div>   
        </header>

        <h1 class="warning"><i class="fa-solid fa-triangle-exclamation"></i>The product is not intended for use by persons under 18 years of age</h1>

        <section class="container">
            <div class="slider-wrapper">
                <div class="slider">
                    <img id="slider-1" src="image\Sliders\image1.jpg" alt="1"/>
                    <img id="slider-2" src="image\Sliders\image2.jpg" alt="2"/>
                    <img id="slider-3" src="image\Sliders\image3.jpg" alt="3"/>
                </div>    
                <div class="slider-nav">
                    <a href="#slider-1"></a>
                    <a href="#slider-2"></a>
                    <a href="#slider-3"></a>
                </div>    
            </div>
        </section>

        <section class="products">
            <h2><i class="fa-solid fa-splotch"></i> Special hot products</h2>
            <div class="all-products">
                <div class="product">
                    <img src="image\Special\bottle-1.jpg">
                    <div class="product-info">
                        <h4 class="product-title">1.75l bottle + 6 shot glasses deal</h4>
                        <p class="product-price">$51</p>
                        <a class="product-btn" href="#">Buy Now</a>
                        <a class="product-add" href="#">Add cart</a>
                    </div>
                </div>
                <div class="product">
                    <img src="image\Special\bottle-2.jpg">
                    <div class="product-info">
                        <h4 class="product-title">Personalised Photo Bottle</h4>
                        <p class="product-price">$29.99</p>
                        <a class="product-btn" href="#">Buy Now</a>
                        <a class="product-add" href="#">Add cart</a>
                    </div>
                </div>
                <div class="product">
                    <img src="image\Special\paddle-shot.jpg">
                    <div class="product-info">
                        <h4 class="product-title">6 Shot Glasses and Free Paddle</h4>
                        <p class="product-price">$11.99</p>
                        <a class="product-btn" href="#">Buy Now</a>
                        <a class="product-add" href="#">Add cart</a>
                    </div>
                </div>
                <div class="product">
                    <img src="image\Special\ticket.jpg">
                    <div class="product-info">
                        <h4 class="product-title">JagerMeister Stickers</h4>
                        <p class="product-price">$8.99</p>
                        <a class="product-btn" href="#">Buy Now</a>
                        <a class="product-add" href="#">Add cart</a>
                    </div>
                </div>
            </div>

            <div class="all-products">
                <div class="product">
                    <img src="image\Special\bag.jpg">
                    <div class="product-info">
                        <h4 class="product-title">Cooler Bag</h4>
                        <p class="product-price">$15.99</p>
                        <a class="product-btn" href="#">Buy Now</a>
                        <a class="product-add" href="#">Add cart</a>
                    </div>
                </div>
                <div class="product">
                    <img src="image\Special\bag-1.jpg">
                    <div class="product-info">
                        <h4 class="product-title">Cooler Bag Rucksack</h4>
                        <p class="product-price">$22.99</p>
                        <a class="product-btn" href="#">Buy Now</a>
                        <a class="product-add" href="#">Add cart</a>
                    </div>
                </div>
                <div class="product">
                    <img src="image\Special\tote-bag.jpg">
                    <div class="product-info">
                        <h4 class="product-title">Tote Bag</h4>
                        <p class="product-price">$22.99</p>
                        <a class="product-btn" href="#">Buy Now</a>
                        <a class="product-add" href="#">Add cart</a>
                    </div>
                </div>
                <div class="product">
                    <img src="image\Special\hoodie.jpg">
                    <div class="product-info">
                        <h4 class="product-title">JagerMeister Hoodies</h4>
                        <p class="product-price">$49.99</p>
                        <a class="product-btn" href="#">Buy Now</a>
                        <a class="product-add" href="#">Add cart</a>
                    </div>
                </div>
            </div>
	    </section>
        
</body>
<footer class="footer">
        <div class="footer-basic">
            <div class="row">
                <div class="footer-col">
                    <h4>About us</h4>
                    <ul>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Address</a></li>   
                        <li><a href="#">PRIVACY POLICY</a></li>
                        <li><a href="#">TERMS AND CONDITIONS</a></li>
                    </ul>                
                </div>
                <div class="footer-col">
                    <h4>Get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Return policy</a></li>
                        <li><a href="#">Delivery policy</a></li>
                        <li><a href="#">PCommitment to quality</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact">
            <form method="post" action="" class="contact-form">
                <h1>Contact Us</h1>
                <p>
                    <input type="text" name = "name" value ="" placeholder="username">
                </p>
                <p>
                    <input type="text" name = "email" value ="" placeholder="email">
                </p>                
                <p>
                    <textarea name="message"></textarea>
                </p>
                <p>
                    <button type="submit" name="submit" class="contact-button">Send</button>
                </p>
            </form>
        </div>
</footer>
</html>