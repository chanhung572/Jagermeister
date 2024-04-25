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
    <title>Jägermeister</title>
    <link rel="stylesheet" href="style\home.css">
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

                    <li class="category-item">
                        <a class="category-list" href="#">Store</a>
                        <ul class="sub-category">
                            <li><a href="products.php">HOT PRODUCTS</a></li>
                            <li><a href="special.php">SPECIAL</a></li>
                        </ul>
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

        <div id="my-container">
            <a href="#"><img src="image\Logo\banner.jpg" alt="" ></a>
        </div>

        <div class="products-list-3" >
            <h1 class="title"><i class="fa-brands fa-blogger-b"></i>Blogs JAGERMEISTER</h1>    
            <h1 class="title-3">History of jagermeister</h1> 
                <div id="text-center">
                    <img src="image\Logo\banner1.jpg" alt="">
                </div>   

            <h4 class="content-3">Rượu Mast Jagermeister được tìm ra và hoàn thiện công thức vào năm 1934 bởi Curt Mast</h4>    
            <h4 class="content-3">Nhà sản xuất Jagermeister đã trải qua rất nhiều biến cố trong lịch sử nhưng có 1 thứ tuyệt đối không bao giờ thay đổi dù là nhỏ nhất, đó chính là công thức sản xuất. Với rất nhiều cách thưởng thức và công thức pha chế khác nhau, Jagermeister từ một loại rượu thảo mộc của giới thợ săn, nay đã trở thành một loại rượu nổi tiếng và phổ biến trên toàn thế giới.</h4>
            <h4 class="content-3">Jagermeister hay còn có có nghĩa là “Thợ săn bậc thầy”. Sở dĩ có tên gọi này là xuất phát từ một câu chuyện nhuốm màu liêu trai liên quan đến Logo chữ thập phát ra ánh sáng giữa 2 nhánh gạc của con nai của Jagermeister. Câu chuyện lấy cảm hứng từ hai vị thánh có thật của Công Giáo là Saint Hubertus và Saint Eustace là hai vị thánh Công Giáo bảo trợ cho cánh thợ săn.</h4>

            <h1 class="title-4">Components of jagermeister</h1> 

            <h4 class="content-3">Jagermeister được tạo thành từ 56 loại thảo mộc, gồm các thành phần tiêu biểu: Vỏ Cam quýt, hoa Hồi, Cam Thảo, Nghệ Tây, Gừng, quả Bách Xù, hạt Anh Túc và nhiều thành phần bí mật khác.Có một nguồn tin cho rằng trong thành phần của Jagermeister có máu Nai, tuy nhiên Jagermeister khẳng định là không có máu Nai bên trong thành phần của sản phẩm, Jagermeister được làm từ 100% thảo mộc. Các thành phần sau khi được nghiền, ngâm, và lọc kỹ lưỡng được lưu trữ trong thùng gỗ sồi khoảng 1 năm. Sau một năm sẽ được lọc lại và trộn với một số thành phần như rượu, đường, caramel. Mỗi chai Jagermeister đến với tay khách hàng đều phải trải qua 383 bài kiểm tra chất lượng khác nhau</h4>
            <h4 class="content-3">Nhà sản xuất khuyên rằng, sau khi ướp lạnh và luôn ướp đá ở −18 ° C (0 ° F) hoặc trên vòi rốt trong khoảng từ −15 đến −11 ° C bạn sẽ thưởng thức được hương vị của Jagermeister một cách tuyệt vời nhất.</h4>

            <h1 class="title-5">How to drink Jagermeister?</h1> 
                <div id="text-center">
                    <img src="image\Logo\banner2.jpg" alt="">
                </div> 

            <h4 class="content-3">Jager là sự pha trộn độc đáo của nhiều hương vị và tốt nhất nên uống khi ướp lạnh, thêm đá hoặc lấy trực tiếp từ chai. Cá nhân tôi thích giữ một chai trong tủ đông và phục vụ càng lạnh càng tốt.</h4>
        </div> 
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
