<?php
session_start();
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="login_style.css">
    <link rel="stylesheet" href="css/footerstyle.css">
    <title>Login Page</title>
</head>
<body>
<nav class="navbar background">
        <ul class="nav-list">
            <div class="logo"><a href="index.html"><img src="img/logo.jpg" alt="logo"></a></div>
            <li><a href="mainPage.html">Home</a> </li>
            <li><a href="menu.html">Menu</a></li>
            <li><a href="about.html" target="_blank">About</a> </li>
            <li><a href="contact.html" target="_blank">Contact Us</a> </li>
            <li><a href="login.php" target="">Log in</a> </li>
        </ul>
        <div class="rightnav">
            <input type="text" name="search" id="search">
            <button class="btn btn-sm">Search</button>
        </div>

    </nav>
    <div class="mainboxlogin">
        <div class="loginHead">
        <h2>Login</h2>
        </div>
        
        <form action="#" method="POST" autocomplete="off">
        <div class="filed_input">
            <input type="text"  placeholder="Username" name="username" class="login_input">
        </div>
        <div class="filed_input">
            <input type="text" placeholder="Password" name="pawd" class="login_input">
        </div>
        <div class="filed_input">
            <input type="submit" value="Login" name="login" class="btn">
        </div>
        <div class="Regis">
            <p>click here to <a href="registerform.php">Register</a></p>
        </div>
        </form>
    </div>
    <footer class="footer">
        <div class="footer-container">
            <div class="row">

                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Privacy & Policy</a></li>
                        <li><a href="#">Our serivices</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Get Help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Shop</h4>
                    <ul>
                        <li><a href="coffee.html">Coffees</a></li>
                        <li><a href="donut.html">Donuts</a></li>
                    </ul>
                </div>

                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


                <div class="footer-col">
                    <h4>Follow Us</h4>
                    <div class="social-link">
                        <a href="https://web.facebook.com/?_rdc=1&_rdr" target="_blank" class="fa fa-facebook"></a>
                        <a href="https://twitter.com/" class="fa fa-twitter"></a>
                        <a href="https://www.instagram.com" class="fa fa-instagram"></a>
                    </div>
                </div>

            </div>
        </div>

    </footer>
    
</body>
</html>
<?php


if(isset($_POST['login']))
{
    $Username= $_POST['username'];
    $password= $_POST['pawd'];
    
    $query= "SELECT * FROM registerdpersons WHERE Uname='$Username' && Password	='$password'";
    $data = mysqli_query($con,$query);
    $total= mysqli_num_rows($data);
    echo $total;

    if($total != 0)
    {
        // echo " Inserted Sucessfully";
        ?>
        echo "<script>alert('Login Sucessfull')</script>";
        <meta http-equiv="refresh" content="0; url =afterloginPage.php " />



    <?php
    }
    else{
        echo "failed";
    }

}

?>